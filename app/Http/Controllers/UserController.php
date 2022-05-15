<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function register(Request $request)
    {
        if($request->isMethod('post')){
            $this->validate($request,[
                'name'=>'required|max:60',
                'email'=>'required|unique:users',
                'password'=>'required|max:30|min:4|confirmed',
                'terms'=>'required',
            ]);
            $user = new User();
            $user->name=$request->input('name');
            $user->email=$request->input('email');
            $user->password=Hash::make($request->input('password'));
            $user->save();
            session(['userid' => $user->id]);
            session(['username' => $user->name]);
            return redirect('/admin/welcome');       
        }
        else{
            if(!session('userid')){
                return redirect('/admin/login');
            }
            return view('dashboard/register');
        }
        
    }
    public function login(Request $request)
    {
        if($request->isMethod('post')){
            $email = $request->input('email');
            $user=DB::table("users")->where('email',$email)->first();
            $password=Hash::check($request->input('password'), $user->password);
                if($user&&$password){  
                    session(['userid' => $user->id]);  
                    session(['username' => $user->name]);  
                    return redirect('/admin/welcome');       
                }
                else{
                    return $email . " wrong email or pass";
                }
        }
        else{
            if(session('userid')){
                return redirect('/admin/welcome');
            }
            return view('dashboard/login');
        }
    }
    public function profile(Request $request)
    {
        if($request->isMethod('post')){
            $this->validate($request,[
                'name'=>'required|max:60',
                'password'=>'required|max:30|min:4|confirmed',
                'terms'=>'required',
            ]);
            $user = User::find(session('userid'));
            $user->name=$request->input('name');
            if($request->input('email')!=$user->email){
                $this->validate($request,[
                    'email'=>'required|unique:users',
                ]);;
                $user->email=$request->input('email');
            }
            $user->password=Hash::make($request->input('password'));
            $user->save();
            return redirect('/admin/welcome');       
        }
        else{
            $user = User::find(session('userid'));
            return view('dashboard/edit-profile',['user'=>$user]);
        }
        
    }
    public function logout()
    {
        session()->forget('userid');
        return redirect('/admin/login');
    }
    public function welcome()
    {
        if(!session('userid')){
            return redirect('/admin/login');
        }
        return view('dashboard/index');
    }
}
