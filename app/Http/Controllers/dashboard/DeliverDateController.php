<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
 
use App\Http\Requests\DeliverDate\DeliverDateRequest;

use App\Models\DeliverDate;
use Illuminate\Http\Request;

class DeliverDateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $list=DeliverDate::get();

        return view('dash-board.real-setting.deliverdate.all',compact('list'));   
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dash-board.real-setting.deliverdate.create'); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DeliverDateRequest $request)
    {
        $formdata = $request->all();

        $newObj=new DeliverDate();
        $newObj->name=$formdata['name'] ;
        
        $newObj->sequence=$formdata['sequence'] ;
     
        $newObj->status = isset($formdata['status']) ? 1 : 0;
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
    $item=DeliverDate::find($id);
    return view('dash-board.real-setting.deliverdate.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DeliverDateRequest $request, string $id)
    {
        $formdata = $request->all();

        $newObj=DeliverDate::find($id);
        $newObj->name=$formdata['name'] ;
        
        $newObj->sequence=$formdata['sequence'] ;
        $newObj->status = isset($formdata['status']) ? 1 : 0;
         $newObj->save();
         return response()->json("ok");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = DeliverDate::find($id);

        if (!($item === null)) {   
          $item->delete();
    
        }
        return redirect()->back();
    }
}
