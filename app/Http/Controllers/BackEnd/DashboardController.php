<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Post;
use App\Category;
use App\Tag;
use App\Comment;
use App\Contact;
use App\Profile;



class DashboardController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');

    }

    public function index(){
        $admin     = User::count();
        $posts     = Post::count();
        $tags      = Tag::count();
        $category  = Category::count();
        $comment   = Comment::count();
        $message   = Contact::count();

        $user_id = auth()->user()->id;
        $user = User::find($user_id);

        $profile = Profile::findOrFail($user_id);



        // return view('dashboard')->with('posts', $user->posts);

        return view('pages.back-end.dashboard', compact('admin','posts','tags', 'category','comment', 'message', 'profile'))
        ->with('postAll', $user->posts);
    }
}
