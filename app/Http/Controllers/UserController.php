<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
        $user = User::all();
        return view('user.index',compact('user'));
    }
    public function tambah(){
        return view('user.create');
    }
    public function store( Request $request){
        $user = new User;
        $user->name=$request->name;
        $user->username=$request->username;
        $user->telp=$request->telp;
        $user->password = Hash::make($request->password);
        $user->role=$request->role;
        $user->save();
        return redirect('/user');
    }
    public function edit($id){
        $user = User::find($id);
        return view('user.edit', compact('user'));
    }
    public function change( Request $request){
        $user = User::findOrFail($request->id);
        $user->name=$request->name;
        $user->telp=$request->telp;
        $user->role=$request->role;
        $user->save();
        return redirect('/user');
    }
    public function hapus($id){
        $user=User::find($id);
        $user->delete();
        return redirect('/user');
    }
    public function profile($id){
        $user = User::find($id);
        return view('user.profile', compact('user'));
    }
}
