<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function add(Request $request)
    {
        if(!session('userid')){
            return redirect('/admin/login');
        }
        if($request->isMethod('post')){
            $extension = $request->file('pic')->extension();
            if($extension==='png'||$extension==='jpeg'||$extension==='bmp'){
                $product=new Product();
                $product->name=$request->input('name');
                $product->category_id=$request->input('category');
                $product->supplier_id=$request->input('supplier');
                $product->description=$request->input('description');
                $product->pic=$request->file('pic')->getClientOriginalName();
                $product->quantity=$request->input('quantity');
                $product->save();
                $product->pic=$product->id.random_int(0,100).$request->file('pic')->getClientOriginalName();
                $request->file('pic')->storeAs('public/ProductImg',$product->pic);
                $product->save();
                return redirect('/admin/add');
            }
            else{
            
                return "<script> alert('wrong file extension->$extension')</script>".redirect('/admin/add');
            }
        }

        else{
            $categories=Category::all();
            $suppliers=Supplier::all();

            return view('dashboard/add-product',['categories'=>$categories,'suppliers'=>$suppliers]);
        }

    }
    
    public function show()
    {
        $categories=Category::all();
        return view('productlist',['categories'=>$categories]);
    }
    
    public function productdetails($name)
    {
        $product = Product::where('name',$name)->first();
        return view('productdetails',['product'=>$product]);
    }

    public function productdel($id)
    {
        if(!session('userid')){
            return redirect('/admin/login');
        }
        $Product = Product::find($id);
        Storage::delete('public/ProductImg/'.$Product->image);
        $Product->forceDelete();
        return redirect('/admin/products');

    }
    
    public function bycat(Request $request)
    {
        if($request->isMethod('post')){
            foreach($request->ids as $id){
                $categories [] =  Category::where('id',$id)->first();
            }
            return view('productlist',['categories'=>$categories]);
        }
        
    }
    // public function delet(Request $request)
    // {
    //     $ids=array($request->input('products'));
    //     foreach($ids as $id){
    //         $product = Product::where('id',$id)->first();
    //         Storage::delete('public/ProductImg/'.$product->image);
    //         $product->forceDelete();
    //     }
    //     return redirect('/admin/products');
    // }
}
