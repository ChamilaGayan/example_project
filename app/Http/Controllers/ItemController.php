<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{

    public function addItem()
    {
        return view('additem');
    }

    public function post(Request $request)
    {
        // Item::create([
        //     'user_id' =>auth()->user()->id,
        //     'name' => $request->name,
        //     'image' => $request->image,
        //     'price' => $request->price,
        //     'status' => $request->options
        // ]);

        if($request->hasFile('image')){
            $filename = $request->image->getClientOriginalName();
            $request->image->storeAs('images',$filename,'public');

            Item::create([
                'user_id' =>auth()->user()->id,
                'name' => $request->name,
                'image' => $filename,
                'price' => $request->price,
                'status' => $request->options
            ]);
        }

        return redirect()->back()->with('status','Item Insert Successfully');
    }

    public function viewItem()
    {
        $item = Item::get();
        return view('viewitem', ['items'=> $item]);
    }

    public function updateItem($id)
    {
        $item = Item::find($id);
        return view('updateitem', compact('item'));
    }

    public function itemUpdate(Request $request, $id)
    {
        $item = Item::find($id);
        $item->name = $request->input('name');
        $item->price = $request->input('price');
        $item->status = $request->input('options');
        $item->update();
        return redirect()->back()->with('status','Item Update Successfully');
    }

}
