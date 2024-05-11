<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mode\Category;

class CategoryController extends Controller
{
    public function all(){
        return response()->json(Category::all());
    }
}
