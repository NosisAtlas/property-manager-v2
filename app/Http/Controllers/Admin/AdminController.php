<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $admin = User::where('role_id', 1)->first();
        return view('admin.index', compact('admin'));
    }
}
