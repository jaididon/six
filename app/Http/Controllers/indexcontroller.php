<?php

namespace App\Http\Controllers;

use App\Models\users;
use Illuminate\Http\Request;

class indexcontroller extends Controller
{
    public function index(){
         $users=users::all();

         return view('index', compact('users'));

    }

       public function register1(Request $request){
            $validated=$request->validate([
                'fname' =>'required',
                'email' =>'required',
                'password'=>'required|min:7|max:10',
            ]);
            $users= new users;
            $users->fname = $request->fname;
            $users->email = $request->email;
            $users->password = $request->password;
            $users->save();
            return redirect(route('index'))->with('success','You are Registered succesfully!');

        }
      public function register()
       {
       return view('Register');
       }

    public function Login(Request $request){
        return view('Login');
    }
    public function login_o(Request $request){
        return $request;
    }

    public function edit($id){
        $user = users::find($id);
        return view('edit',compact('user')) ;
    }

    public function update(Request $request,$id){
        $validated=$request->validate([
            'fname' =>'required',
            'email' =>'required',
            'password'=>'required|min:7|max:10',
        ]);
        $users = users::find($id);
        $users->fname = $request->fname;
        $users->email = $request->email;
        $users->save();
        return redirect(route('index'))->with('success','User Updated Successfully');
    }
    public function delete($id){
        $user = users::findOrFail($id);
        $user->delete();
        return redirect(route('index'))->with('success','User deleted Successfully');
    }

}
?>
