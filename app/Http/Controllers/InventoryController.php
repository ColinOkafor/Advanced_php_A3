<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class InventoryController extends Controller{
    public function index(){
        return view('items.index');
    }

  public function manage(Request $request)
    {
        $items = DB::select("SELECT * FROM table_of_inventory");
        $showForm = $request->has('showForm');


        return view('manage', compact('items', 'showForm'));
    }
}