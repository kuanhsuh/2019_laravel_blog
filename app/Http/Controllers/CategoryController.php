<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index']);
    }

    public function index() {
      $categories = Category::all();
      return view('categories.index', compact('categories'));
    }

    public function store() {
      // dd('tesitng', request('category'));
      request()->validate([
        'name' => 'required'
      ]);

      Category::create([
        'name' => request('name')
      ]);
      session()->flash('success', 'Category was successfully created!');
      return redirect('/categories');
    }
}
