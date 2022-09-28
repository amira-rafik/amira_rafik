<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;


class ApiAdmins extends Controller
{
    public function index()
    {
     $admins=Admin::all();
     return response()->json(compact('admins'));
    }
}
