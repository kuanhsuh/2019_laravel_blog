<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
      $categories = Category::all();
      return view('categories.index', compact('categories'));
    }

    public function store() {
      request()->validate([
        'name' => 'required'
      ]);
      $catArray = explode(',', request('name'));

      foreach($catArray as $category) {
        if (Category::where('name',trim($category))->get()->isEmpty()) {
          Category::create([
            'name' => trim($category)
          ]);
        } else {
          session()->flash('error', 'Category ' . trim($category) . ' exists');
        }
      }
      // dd($catArray);
      session()->flash('success', 'Category was successfully created!');
      return redirect('/categories');
    }
}
