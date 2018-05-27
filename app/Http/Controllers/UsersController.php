<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Models\User;

class UsersController extends Controller
{
    public function show(User $user)
    {
        return view('users.show',compact('user'));
    }
    public function edit(User $user){
        return view('users.edit',compact('user'));
    }
    public function update(User $user,UserRequest $request){
        $user->update($request->all());
        return redirect()->route('users.show',compact('user'))->with('success','修改成功');
    }
}
