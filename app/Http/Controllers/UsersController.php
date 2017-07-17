<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

use Validator;
use Redirect;


class UsersController extends Controller
{
    public function index()
    {
    	$list_user = User::where('id', '!=', 1)->get();
    	$page_title = "List User";
    	
    	return view('user.index', get_defined_vars());
    }

    public function create()
    {
    	$page_title = "Add User";

    	return view('user.create', get_defined_vars());
    }

    public function store(Request $request)
    {
    	$data = $request->all();

    	$validator = Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|',
        ]);

        if ($validator->fails()) {
            return redirect(route('users.create'))
                ->withErrors($validator)
                ->withInput();
        } else {
        	$data['password'] = bcrypt($data['password']);
            $user = User::create($data);

            if ($user) {
           		return Redirect::to(route('users.index'))->with('message', 'User was successful added!');
            }
        }
    }

    public function edit($id)
    {
    	$user = User::find($id);

    	return view('user.edit', get_defined_vars());  
    }

    public function update(Request $request, $id)
    {
    	$data = $request->all();

    	if (!empty($data['password_change'])) {
    		$data['password'] = bcrypt($data['password_change']);
    	}

    	if (User::find($id)->update($data)) {
    		return redirect()->route('users.index')->with('message','User has been update!');
    	}
    }	

    public function destroy($id)
    {
    	$user = User::find($id);

    	$user->delete();
        return redirect()->route('users.index')->with('message','User has been delete!');
    }
}
