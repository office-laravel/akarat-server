<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Feature\FeatureRequest;
use App\Http\Requests\Feature\StoreFeatureRequest;
use App\Models\Feature;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
 
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use File;
use Illuminate\Support\Facades\Storage;
class FeatureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $list=Feature::get();

        return view('dash-board.real-setting.feature.all',compact('list'));   
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dash-board.real-setting.feature.create'); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FeatureRequest $request)
    {
        $formdata = $request->all();

        $newObj=new Feature();
        $newObj->name=$formdata['name'] ;
 
        $newObj->sequence=$formdata['sequence'] ;
        $newObj->save();
        if ($request->hasFile('icon')) {
    
             $this->save_image($request->file('icon'),$newObj);      // $newImageName = time(). '.' . $request->photo->extension();
        }
       
         return response()->json("ok");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
    $item=Feature::find($id);
    return view('dash-board.real-setting.feature.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(FeatureRequest $request, string $id)
    {
        $formdata = $request->all();
        $newObj=Feature::find($id);
        $newObj->name=$formdata['name'] ;        
        $newObj->sequence=$formdata['sequence'] ;
   //     $newObj->save();
        if ($request->hasFile('icon')) {    
             $this->save_image($request->file('icon'),$newObj);      // $newImageName = time(). '.' . $request->photo->extension();
        }
         $newObj->save();
         return response()->json("ok");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = Feature::find($id);

        if (!($item === null)) {  
           $this->delete_image($item); 
          $item->delete();
    
        }
        return redirect()->back();
    }

    public function save_image($file,$item)
    {
        $oldimagename =  $item->icon  ;
        $path ='features';
        $ext = $file->getClientOriginalExtension();
    if (Str::lower($ext) == 'svg') {
        if ($file !== null) {          
            $filename = rand(10000, 99999) . $item->id . '.' . $ext;
            Storage::delete("public/" . $path . '/' . $oldimagename);
            $path = $file->storeAs($path, $filename, 'public');             
            $item->icon=$filename;
            $item->save();
         //  Storage::delete("app/public/" . $path . '/' . $oldimagename);
            $this->delete_image_byname($oldimagename);
        }
    } else {
        if ($file !== null) {
            $filename = rand(10000, 99999) . $item->id . ".webp";
            $manager = new ImageManager(new Driver());
            $image = $manager->read($file);
            $image = $image->toWebp(75);
            if (!File::isDirectory(Storage::url('/' . $path))) {
                Storage::makeDirectory('public/' . $path);
            }
            $image->save(storage_path('app/public') . '/' . $path . '/' . $filename);
            $item->icon=$filename;
            $item->save();
            $this->delete_image_byname($oldimagename);
        }
    }
}
public function delete_image($item)
{
    $oldimagename =  $item->icon ;
    $path ='features';
   // Storage::delete("public/" . $path . '/' . $oldimagename);
  
    $pathIcon = storage_path('app/public') . '/' . $path . '/' . $oldimagename;
            if (File::exists($pathIcon)) {
                File::delete($pathIcon);
            }
            return 1;
}

public function delete_image_byname($image_name)
{
    $oldimagename =  $image_name ;
    $path ='features';
   // Storage::delete("public/" . $path . '/' . $oldimagename);
  
    $pathIcon = storage_path('app/public') . '/' . $path . '/' . $oldimagename;
            if (File::exists($pathIcon)) {
                File::delete($pathIcon);
            }
            return 1;
}

}
