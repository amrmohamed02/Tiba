<?php

namespace App\Http\Controllers;

use App\Models\Dosing;
use App\Models\Product;
use Illuminate\Http\Request;

class DosingController extends Controller
{
    public function adddosing(Request $request )
    {
        if(!session('userid')){
            return redirect('/admin/login');
        }
        if($request->isMethod('post')){
            $extension = $request->file('crop')->extension();
            if($extension==='png'||$extension==='jpeg'||$extension==='bmp'){
                $dosing = new Dosing();
                $dosing->crop=$request->file('crop')->getClientOriginalName();
                $dosing->application=$request->input('application');
                $dosing->min=$request->input('min');
                $dosing->max=$request->input('max');
                $dosing->product_id=$request->input('product');
                $dosing->save();
                $dosing->crop=$dosing->id.random_int(0,100).$request->file('crop')->getClientOriginalName();
                $request->file('crop')->storeAs('public/DosingImg',$dosing->crop);
                $dosing->save();
                return redirect('/admin/adddosing');
            }
            else{
                
                return "<script> alert('wrong file extension->$extension')</script>".redirect('/admin/adddosing');
            }
        }
        else{
            $products=Product::all();
            return view('dashboard/add-dosing',['products'=>$products]);
        }
        
    }
}
