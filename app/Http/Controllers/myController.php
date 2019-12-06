<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;

class myController extends Controller
{
    public function index(){
        return redirect('/post');
    }
    }
 