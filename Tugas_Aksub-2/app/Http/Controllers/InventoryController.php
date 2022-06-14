<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventory;
use App\Models\Category;

class InventoryController extends Controller
{
    //

    public function index(){
        $inventories = Inventory::all();

        return view('index', ['inventories' => $inventories]);
    }

    public function addItem(){

        $categories = Category::all();

        return view('add-task', compact('categories'));
    }

    public function createEntry(Request $request){
        
        Inventory::create([
            'category_id'=> $request->category_id,
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

    

    public function sortLaptop(){
        
        $inventories = Inventory::where('category_id','=', 1)->get();

        return view('index', compact('inventories'));
    }

    public function sortPhone(){
        
        $inventories = Inventory::where('category_id','=', 2)->get();

        return view('index', compact('inventories'));
    }

    public function sortTv(){
        
        $inventories = Inventory::where('category_id','=', 3)->get();

        return view('index', compact('inventories'));
    }
}