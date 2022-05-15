<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Characteristic;
use App\Models\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class CategoryController extends Controller
{
    public function addcat(Request $request)
    {
        if(!session('userid')){
            return redirect('/admin/login');
        }
        if($request->isMethod('post')){
            $extension = $request->file('pic')->extension();
            if($extension==='png'||$extension==='jpeg'||$extension==='bmp'){
                $category=new Category();
                $category->name=$request->input('name');
                $category->description=$request->input('description');
                $category->pic=$request->file('pic')->getClientOriginalName();
                $category->save();
                $category->pic=$category->id.random_int(0,100).$request->file('pic')->getClientOriginalName();
                $request->file('pic')->storeAs('public/CategoryImg',$category->pic);
                $category->save();
                return redirect('/admin/addcategory');
            }
            else{
                
                return "<script> alert('wrong file extension->$extension')</script>".redirect('/admin/addcategory');
            }
        }
        else{

            return view('dashboard/add-category');
        }

    }

    public function categorydel($id) 
    {
        if(!session('userid')){
            return redirect('/admin/login');
        }
        $cat = Category::find($id);
        $cat->forceDelete();
        return redirect('/admin/products');
    }
}
