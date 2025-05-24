<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
 
use App\Http\Requests\District\DistrictRequest;
 

use App\Models\City;
use App\Models\District;
use Illuminate\Http\Request;

class DistrictController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $list=District::with(['subcity','subcity.city'])->paginate(100);
        //  return  $list;
        return view('dash-board.real-setting.district.all',compact('list'));   
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cities = City::select('id', 'name')->get();
        return view('dash-board.real-setting.district.create',compact('cities')); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DistrictRequest $request)
    {
        $formdata = $request->all();
/*
     'name',
'subcity_id',
'latitude',
'longitude',
'code',
'sequence',
'status',
*/
        $newObj=new District();
        $newObj->name=$formdata['name'] ;
        
       
        $newObj->sequence = isset($formdata['sequence']) ? $formdata['sequence']:1;
        $newObj->subcity_id = isset($formdata['subcity']) ? $formdata['subcity']:null;
        $newObj->city_id = isset($formdata['city_id']) ? $formdata['city_id']:null;
        $newObj->status = 1;
        $newObj->latitude = isset($formdata['latitude']) ? $formdata['latitude']:null;
        $newObj->longitude = isset($formdata['longitude']) ? $formdata['longitude']:null;
         $newObj->save();
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
    $item=District::find($id);
    $cities = City::select('id', 'name')->get();
    return view('dash-board.real-setting.district.edit', compact('item','cities'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DistrictRequest $request, string $id)
    {
        $formdata = $request->all();

        $newObj=District::find($id);
        $newObj->name=$formdata['name'] ;
        
       
        $newObj->sequence = isset($formdata['sequence']) ? $formdata['sequence']:1;
        $newObj->subcity_id = isset($formdata['subcity']) ? $formdata['subcity']:null;
        $newObj->city_id = isset($formdata['city_id']) ? $formdata['city_id']:null;
        $newObj->status = 1;
        $newObj->latitude = isset($formdata['latitude']) ? $formdata['latitude']:null;
        $newObj->longitude = isset($formdata['longitude']) ? $formdata['longitude']:null;
         $newObj->save();
         return response()->json("ok");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = District::find($id);

        if (!($item === null)) {   
          $item->delete();
    
        }
        return redirect()->back();
    }
}
