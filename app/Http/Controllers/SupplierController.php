<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Characteristic;
use App\Models\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SupplierController extends Controller
{
    
    public function addsupplier(Request $request )
    {
        if(!session('userid')){
            return redirect('/admin/login');
        }
        if($request->isMethod('post')){
            $supplier = new Supplier();
                $supplier->name=$request->input('name');
                $supplier->email=$request->input('email');
                $supplier->phone=$request->input('phone');
                $supplier->job=$request->input('job');
                $supplier->save();
                return redirect('/admin/addsupplier');
            }
        else{
            return view('dashboard/add-supplier');
        }
        
    }
}
