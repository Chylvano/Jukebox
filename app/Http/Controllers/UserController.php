<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getOneUserById($id)
    {
        return view('user.index')
        ->with('user', User::where('id', $id)->first());
    }

}
