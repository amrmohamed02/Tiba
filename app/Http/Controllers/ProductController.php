<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function add(Request $request)
    {
        if($request->isMethod('post')){
            $extension = $request->file('pic')->extension();
            if($extension==='png'||$extension==='jpeg'){
                $product=new Product();
                $product->name=$request->input('name');
                $product->category_id=$request->input('category');
                $product->description=$request->input('description');
                $product->pic=$request->file('pic')->getClientOriginalName();
                // $product->availability = if ($product->quantity||$request->input('quantity') != 0)
                //                             return true ;
                //                          else
                //                             return false;
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
            return view('dashboard/add-product',['categories'=>$categories]);
        }

    }

    public function addcat(Request $request)
    {
        $extension = $request->file('pic')->extension();
        if($extension==='png'||$extension==='jpeg'){
            echo $extension;
            $category=new Category();
            $category->name=$request->input('name');
            $category->description=$request->input('description');
            $category->pic=$request->file('pic')->getClientOriginalName();
            $category->save();
            $category->pic=$category->id.random_int(0,100).$request->file('pic')->getClientOriginalName();
            $request->file('pic')->storeAs('public/CategoryImg',$category->pic);
            $category->save();
            return redirect('/admin/add');
        }
        else{
            
            return "<script> alert('wrong file extension->$extension')</script>".redirect('/admin/add');
        }

    }
    
    public function show()
    {
        $products=Product::all();
        $categories=Category::all();
        return view('productlist',['products'=>$products],['categories'=>$categories]);
    }
    
    public function categorydel($id) 
    {
            $cat = Category::find($id);
            $cat->forceDelete();
            return redirect('/admin/products');
    }

    public function productdel($id)
    {
        $Product = Product::find($id);
        Storage::delete('public/ProductImg/'.$Product->image);
        $Product->forceDelete();
        return redirect('/admin/products');

    }
    
    public function bycat(Request $request,$cat)
    {
        $products=Product::where('category',$cat)->get();
        $categories=Category::all();
        return view('product_list',['products'=>$products],['categories'=>$categories]);
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
