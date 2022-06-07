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
}
