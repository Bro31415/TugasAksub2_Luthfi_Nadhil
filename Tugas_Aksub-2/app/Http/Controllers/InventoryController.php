<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventory;

class InventoryController extends Controller
{
    //

    public function index(){
        $inventories = Inventory::all();

        return view('index', ['inventories' => $inventories]);
    }

    public function addItem(){
        return view('add-task');
    }

    public function createEntry(Request $request){
        
        Inventory::create([
            'item' => $request->item, 
            'qty' => $request->qty,
        ]);
      
        return redirect('/');
    }   

    public function editItem($id){

        $inventories = Inventory::find($id);

        return view('edit-task', compact('inventories', 'id'));
    }

    public function updateEntry(Request $request, $id){
        $inventories = Inventory::find($id);
        $inventories->item = $request->item;
        $inventories->qty = $request->qty;

        $inventories->save();

        return redirect('/');
    }

    public function deleteEntry($id){
        $inventories = Inventory::find($id);
        $inventories -> delete();

        return redirect('/');
    }
}
