<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Donation;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin() {
        return view('admin.home');
    }

    public function index() {

        $blogs =  Blog::orderBy('id', 'desc')->get();

        return view('admin.blogs', [
            'blogs' => $blogs
        ]);
    }

    public function getEdit(Blog $blog) {
        return view('admin.edit', [
            'blog' => $blog
        ]);
    }

    public function postEdit(Blog $blog, Request $r) {

        $blog->title = $r->title;
        $blog->discription = $r->discription;
        $blog->type_of_food = $r->type_of_food;
        $blog->save();

        return redirect()->route('admin.index');
    }

    public function postDelete($id) {
        $blog = Blog::where('id', $id);
        $blog->delete();
        return redirect()->route('admin.index');
    }

    // DONATIONS
    public function getIndexDonations() {

        $donations =  Donation::orderBy('id', 'desc')->get();

        return view('admin.donations', [
            'donations' => $donations
        ]);
    }

    // MAILCHIMP
    public function getIndexMailchimp() {

        $apikey = env('MAILCHIMP_APIKEY');
        $id = env('MAILCHIMP_LIST_ID');

        return view('admin.mailchimp', [
            'apikey' => $apikey,
            'listid' => $id,
        ]);
    }

    public function getEditApikey($apikey) {
        return view('admin.editApikey', [
            'apikey'=>$apikey,
        ]);
    }

    public function getEditListid($listid) {
        return view('admin.editListid', [
            'listid'=>$listid,
        ]);
    }

    public function postEditApikey($apikey, Request $r) {

        $apikey = $r->apikey;

        return redirect()->route('admin.mailchimp');
    }


}
