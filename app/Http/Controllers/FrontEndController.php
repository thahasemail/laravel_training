<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class FrontEndController extends Controller
{

    public function home(){
        //$users = User::all();
        // $users = User::latest()->get()

        // if(auth()->check()){
        //     $users = User::latest()->paginate(10);
        //    return view("user.home_page", compact("users"));
        // }
        $users = User::latest()->paginate(10);
        return view("user.home_page", compact("users"));
    }
    public function create(){
        return view("user.new_user");
    }
    public function save(){
        $userInfo = [
            'name' => request('name'),
            'email' => request('email'),
            'dob' => request('dob'),
            'password' => request('password'),
            'description' => request('description'),
        ];

        $user = User::create($userInfo);

        //check with email if user exists it will update otherwise new one will be created
        // $user = User::firstOrCreate(['email'=> request('email')],
        //                     [
        //                         'name' => request('name'),
        //                         'dob' => request('dob'),
        //                         'password' => request('password'),
        //                         'description' => request('description')
        //                     ]
        // );

        // $user = User::updateOrCreate(['email'=> request('email')],
        //                     [
        //                         'name' => request('name'),
        //                         'dob' => request('dob'),
        //                         'password' => request('password'),
        //                         'description' => request('description')
        //                     ]
        // );


        // //return $user;

        return redirect()->route("home")->with('message', 'User Created Successfully !');

    }
    public function edit($userId){
        $user = User::find(decrypt($userId));
        //$user = User::where('user_id',$userId)->first();
        return view('user.edit_user', compact('user'));
    }
    public function update(){
        // request()->all(); //Get all request 
        // request()->except('_token', 'status');// Get all request except _token and status
        // request()->only('email','name'); //Get email and name

        $user_id = decrypt(request('user_id'));
        $user = User::find($user_id);
        $user->update([
            'name' => request('name'),
            'email' => request('email'),
            'dob' => request('dob'),
            'password' => request('password'),
            'description' => request('description'),
        ]);

        //We can short like this
        // User::find($user_id)->update([
        //     'name' => request('name'),
        //     'email' => request('email'),
        //     'dob' => request('dob'),
        //     'password' => request('password'),
        //     'description' => request('description'),
        // ]);

        return redirect()->route("home")->with('message', 'User Updated Successfully !');
    }
    public function delete($userId){
        $user = User::find(decrypt($userId));
        $user->delete();
        return redirect()->route("home")->with('message', 'User Deleted Successfully !');

    }
    public function aboutUs(){
        return view("about_us");
    }
    public function userHome(){
        return view("user/user_home");
    }
}
