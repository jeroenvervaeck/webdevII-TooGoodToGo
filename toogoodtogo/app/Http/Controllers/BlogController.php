<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() {

        $blogs = Blog::orderBy('id', 'desc')->paginate(5);

        return view('pages.blogs', [
            'blogs' => $blogs
        ]);
    }

    public function getDetail($id) {
        $blog = Blog::find($id);

        return view('pages.blogDetail', [
            'blog' => $blog
        ]);
    }

    public function addform()
    {
        return view('pages.blogAdd');
    }

    public function postBlog(Request $r) {

        $validationRules = [
            'title' => 'required|max:100',
            'discription' => 'required|max:264',
            'type_of_food' => 'required|max:100',
        ];

        $r->validate($validationRules);

        $data = [
            'title' => $r->title,
            'discription' => $r->discription,
            'type_of_food' => $r->type_of_food,
        ];

        $blog = Blog::create($data);


        return redirect()->route('blogs');
    }
}
