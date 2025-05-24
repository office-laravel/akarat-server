<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Bath\StoreBathRequest;
use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $list=Room::get();

        return view('dash-board.real-setting.room.all',compact('list'));   
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dash-board.real-setting.room.create'); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBathRequest $request)
    {
        $formdata = $request->all();

        $newObj=new Room();
        $newObj->num=$formdata['num'] ;
        
        $newObj->sequence=$formdata['sequence'] ;
        $newObj->status=1 ;
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
    $item=Room::find($id);
    return view('dash-board.real-setting.room.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreBathRequest $request, string $id)
    {
        $formdata = $request->all();

        $newObj=Room::find($id);
        $newObj->num=$formdata['num'] ;
        
        $newObj->sequence=$formdata['sequence'] ;
        $newObj->status=1 ;
         $newObj->save();
         return response()->json("ok");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = Room::find($id);

        if (!($item === null)) {   
          $item->delete();
    
        }
        return redirect()->back();
    }
}
