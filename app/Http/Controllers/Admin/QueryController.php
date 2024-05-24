<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class QueryController extends Controller
{
    public function index(){
        return view('admin.query.index');
    }

    public function create(){
        return view('admin.query.create');
    }
}
