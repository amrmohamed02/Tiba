<?php
namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Characteristic;
use Illuminate\Http\Request;

class CharacteristicController extends Controller
{
    public function addchar(Request $request )
    {
        if(!session('userid')){
            return redirect('/admin/login');
        }
        if($request->isMethod('post')){
            $characteristic = new Characteristic();
                $characteristic->description=$request->input('description');
                $characteristic->product_id=$request->input('product');
                $characteristic->save();
                return redirect('/admin/addchar');
            }
        else{
            $products=Product::all();
            return view('dashboard/add-char',['products'=>$products]);
        }
        
    }
}
