<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function all(){
        return response()->json(Category::all());
    }
    public function show($id){
        return response()->json(Category::findOrFail($id));
    }
}
