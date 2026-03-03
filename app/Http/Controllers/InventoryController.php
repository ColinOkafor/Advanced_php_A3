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
            //Fetch updated list
            $items = DB::select("SELECT * FROM table_of_inventory");
            //show form toggle
            $showForm = $request->has('showForm');

            return view('manage', compact('items', 'showForm'));
        }

        public function store(Request $request){
          
             //Insert new item
            DB::table('table_of_inventory')->insert([
                'name'=> $request->name,
                'description'=>$request->description,
                'product_code'=>$request->product_code,
                'price'=>$request->price

            ]);
        
            return redirect()->route('manage')->with('message','new row added');
        }
        //load items for editing in the form
        public function edit($id){
            $items = DB::select("SELECT * FROM table_of_inventory");
            $editItem = DB::table('table_of_inventory')->where('id',$id)->first();
            return view('manage',[
                'items'=>$items,
                'showForm'=>false,
                'editItem'=>$editItem
            ]);
        }
        //Update the items
        public function update(Request $request, $id){
            DB::table('table_of_inventory')
                ->where('id', $id)
                ->update([
                    'name'=>$request->name,
                    'description'=>$request->description,
                    'product_code'=> $request->product_code,
                    'price'=>$request->price
                ]);
                return redirect()->route('manage')->with('message','Item updated!');

        }
       
        public function delete($id)
        {
            DB::table('table_of_inventory')->where('id', $id)->delete();
            return redirect()->route('manage')->with('message', 'Item deleted!');
        }

        public function search(Request $request)
        {
            // Detect if user clicked Search
            $hasSearch = $request->filled('name') ||
                        $request->filled('low') ||
                        $request->filled('high');

            // Default: empty results
            $results = collect();

            if ($hasSearch) {

                // Build query
                $query = DB::table('table_of_inventory');

                if ($request->filled('name')) {
                    $query->where('name', 'LIKE', '%' . $request->name . '%');
                }

                if ($request->filled('low')) {
                    $query->where('price', '>=', $request->low);
                }

                if ($request->filled('high')) {
                    $query->where('price', '<=', $request->high);
                }

                $results = $query->get();
            }

            return view('search', compact('hasSearch', 'results'));
        }
}