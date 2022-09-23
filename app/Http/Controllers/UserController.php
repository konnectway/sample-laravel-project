<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;

use App\Models\User;

class UserController extends Controller
{

    public function index()
    {
        $users = User::all();
        return view('users.list', compact('users'));
    }


    public function getFullUser($userId){
        $user = User::find($userId);

        $data['name'] = $user->name;
        $data['mail'] = $user->mail;
        $data['countryName'] = $user->country->name;
        $data['address'] = $user->address->toArray();
        $data['posts'] = $user->posts->toArray();

        return $data;
    }

    public function show($id)
    {
        $user = User::find($id);
        return view('users.show', compact('user'));
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('users.edit', compact('user'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['bail','required', 'string', 'max:255'],
            'email' => ['bail','required', 'string', 'email', 'max:255', 'unique:users,email'],
            'password' => ['bail','nullable', 'string', 'min:6', 'confirmed'],
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $user = new User();
        $data = $request->all() ;
        $data['password'] = Hash::make($data['password']);
        $user->fill( $data );
        $user->save();

        $user->assignRole($request->role);

        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->file('image')->extension();
            $request->image->move(public_path('images'), $imageName);
            $image = $request->file('image')->move(public_path('images/'. $user->id), $fileName);

            $user->image = $image;
            $user->save();
        }

        Session::flash('alert-success', 'User Created successfully');
        return Redirect::route('user.index');

    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'name' => ['bail','required', 'string', 'max:255'],
            'email' => ['bail','required', 'string', 'email', 'max:255', 'unique:users,email'],
            'password' => ['bail','nullable', 'string', 'min:6', 'confirmed'],
        ]);

        $user->fill( $request->except('password') );

        if($request->password){
            $user->password = Hash::make($request->password );
        }

        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->file('image')->extension();
            $request->image->move(public_path('images'), $imageName);
            $image = $request->file('image')->move(public_path('images/'. $user->id), $fileName);
            $user->image = $image;
        }

        $user->save();
        Session::flash('alert-success', 'Updated successfully');
        return Redirect::route('user.index');

    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        Session::flash('alert-success', 'Removed successfully.');
        return Redirect::back();
    }
}
