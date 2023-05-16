<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use App\Models\Report;
use App\Models\User;


class AdminController extends Controller
{
   public function index(){
    $employers = Report::all();
    return view('admin.index',compact('employers'));
   }
   public function user(){
    $users = User::all();
    return view('admin.user',compact('users'));
   }
   public function add_user(){
    return view('admin.add');
   }
   public function userRegistration(Request $request){

    $request->validate([
        'name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
        'role' => ['required', 'string'],
        'password' => ['required', 'confirmed', Rules\Password::defaults()],
    ]);

    $user = User::create([
        'name' => $request->name,
        'email' => $request->email,
        'is_admin' =>$request->role,
        'password' => Hash::make($request->password),
    ]);
    return redirect()->route('admin.user');

   }
}
