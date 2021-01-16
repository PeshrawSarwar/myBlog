<?php

namespace App\Http\Controllers\FrontEnd;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use App\Post;
use App\Category;
use App\Tag;
use App\Photo;
use App\User;
use App\comment;
use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        $posts = Post::with('category:id,name,slug', 'photo:id,image')
        ->where([
            ['status', '=', 'published'],
            ['deleted_at', '=', Null],
        ])
        ->withCount('comments')
        ->get();

        $posts2 = Post::with('category:id,name,slug', 'photo:id,image')
        ->where([
            ['status', '=', 'published'],
            ['deleted_at', '=', Null],
            ['user_id', '=', '1']
        ])
        ->withCount('comments')
        ->get();

            $viedo_post    = $posts->sortByDesc('created_at')->take(10);
            $news_post    = $posts2->sortByDesc('created_at')->take(2);

            $recent_post = $posts->sortByDesc('created_at')->take(4);
            $featur_post   = $posts->sortByDesc('created_at');
            $category_post = Category::with('postWithImage:id,title,slug,status')->get();
            $latest_post   = $posts->sortByDesc('created_at');


            $blogerDay = Category::with('postWithImage')
                        ->where([
                            ['id', '4'],
                            ['slug', 'bloger-days'],
                        ])->get();
            $sport = Category::with('postWithImage')
                        ->where([
                            ['id', '5'],
                            ['slug', 'sport'],
                        ])->get();

            $health = Category::with('postWithImage')
            ->where([
            ['id', '8'],
            ['slug', 'health']
            ])->get();

            $life = Category::with('postWIthImage')
            ->where([
                ['id', '7'],
                ['slug', 'life']
            ])->get();

            $categories = Category::with('childrenRecursive')
            ->latest()
            ->whereNull('parent_id')
            ->get();

            $technology = Category::with('postWIthImage')
            ->where([
                ['id', '9'],
                ['slug', 'technology']
            ])->get();

            $science = Category::with('postWIthImage')
            ->where([
                ['id', '10'],
                ['slug', 'science']
            ])->get();


            $cinema = Category::with('postWIthImage')
            ->where([
                ['id', '11'],
                ['slug', 'cinema']
            ])->get();

            $date = Carbon::now('Asia/baghdad')->toDateTimeString();

             $images = Photo::with('post:id,title')
             ->withCount('post')
             ->latest()->paginate(25);


        return view('pages.front-end.home',
            compact('posts', 'viedo_post', 'featur_post', 'category_post','latest_post', 'news_post', 'blogerDay', 'categories', 'recent_post', 'sport', 'health', 'life', 'technology', 'date', 'science', 'cinema', 'images'));
    }


    public function post($id, $slug)
    {
        $post  =  Post::findOrFail($id);
        // Start View Count
        $postKey = 'post_' . $post->id; // Make A Key

        // Cheack If Post Has A Key Or No
        if (!Session::has($postKey)) {
            $post->increment('view_count');
            Session::put($postKey, 1);
        } else {
            //Every Time Watch Post Add Views +1
            $post->increment('view_count');
            Session::put($postKey, 1);
        }

        $posts =  Post::with('category:id,name,slug', 'tag:id,name', 'photo:id,image', 'comments')->where([
                            ['id', $id],
                            ['slug', $slug],
                            ['status', '=', 'published'],
                            ['deleted_at', '=', Null],
                        ])
                        ->withCount('comments')
                        ->get();
        $nextPost = $post->nextPost(); // Get Next From This Post
        $prevPost = $post->previousPost($id); // Get Previous From This Post
        $categories = Category::with('childrenRecursive')
            ->latest()
            ->whereNull('parent_id')
            ->get();

        $posts2 = Post::with('category:id,name,slug', 'photo:id,image')
        ->where([
            ['status', '=', 'published'],
            ['deleted_at', '=', Null],
        ])
        ->withCount('comments')
        ->get();

        $recent_post = $posts2->sortByDesc('created_at')->take(4);

        $blogerDay = Category::with('postWithImage')
                        ->where([
                            ['id', '4'],
                            ['slug', 'bloger-days'],
                        ])->get();
            $sport = Category::with('postWithImage')
                        ->where([
                            ['id', '5'],
                            ['slug', 'sport'],
                        ])->get();

            $health = Category::with('postWithImage')
            ->where([
            ['id', '8'],
            ['slug', 'health']
            ])->get();

            $life = Category::with('postWIthImage')
            ->where([
                ['id', '7'],
                ['slug', 'life']
            ])->get();

            $science = Category::with('postWIthImage')
            ->where([
                ['id', '10'],
                ['slug', 'science']
            ])->get();


            $cinema = Category::with('postWIthImage')
            ->where([
                ['id', '11'],
                ['slug', 'cinema']
            ])->get();

            $date = Carbon::now('Asia/baghdad')->toDateTimeString();

            $images = Photo::with('post:id,title')
            ->withCount('post')
            ->latest()->paginate(25);


         return view('pages.front-end.single-post', compact('post', 'posts', 'nextPost', 'prevPost', 'categories', 'recent_post', 'blogerDay', 'sport', 'health', 'life', 'date', 'science', 'date', 'images'));

    } // End Of Single Post

    public function category($id, $slug)
    {
        $category   = Category::findOrFail($id);
        $categories = Category::with('postWithImage')
                        ->where([
                            ['id', $id],
                            ['slug', $slug],
                        ])->get();
                        $blogerDay = Category::with('postWithImage')
                        ->where([
                            ['id', '4'],
                            ['slug', 'bloger-days'],
                        ])->get();
            $sport = Category::with('postWithImage')
                        ->where([
                            ['id', '5'],
                            ['slug', 'sport'],
                        ])->get();

            $health = Category::with('postWithImage')
            ->where([
            ['id', '8'],
            ['slug', 'health']
            ])->get();

            $life = Category::with('postWIthImage')
            ->where([
                ['id', '7'],
                ['slug', 'life']
            ])->get();

            $science = Category::with('postWIthImage')
            ->where([
                ['id', '10'],
                ['slug', 'science']
            ])->get();


            $cinema = Category::with('postWIthImage')
            ->where([
                ['id', '11'],
                ['slug', 'cinema']
            ])->get();

            $date = Carbon::now('Asia/baghdad')->toDateTimeString();

            $images = Photo::with('post:id,title')
            ->withCount('post')
            ->latest()->paginate(25);


    return view('pages.front-end.category-page', compact('category', 'categories', 'post', 'blogerDay', 'sport', 'health', 'life', 'date', 'science', 'cinema', 'images'));

    //    $posts = DB::table('category_post')
    //         ->select('category_id', 'post_id')
    //         ->rightJoin('posts', 'posts.id', '=', 'category_post.post_id')
    //         ->where([
    //             ['category_id', $id],
    //         ])->paginate(10);

    } // End Of Category Page

    public function user($id){
        $user = User::findOrFail($id);
        $posts = User::with('postWithImage')
        ->where([
            ['id', $id],
        ])->get();

        $categories = Category::with('childrenRecursive')
            ->latest()
            ->whereNull('parent_id')
            ->get();
        $blogerDay = Category::with('postWithImage')
                        ->where([
                            ['id', '4'],
                            ['slug', 'bloger-days'],
                        ])->get();
            $sport = Category::with('postWithImage')
                        ->where([
                            ['id', '5'],
                            ['slug', 'sport'],
                        ])->get();

            $health = Category::with('postWithImage')
            ->where([
            ['id', '8'],
            ['slug', 'health']
            ])->get();

            $life = Category::with('postWIthImage')
            ->where([
                ['id', '7'],
                ['slug', 'life']
            ])->get();

            $science = Category::with('postWIthImage')
            ->where([
                ['id', '10'],
                ['slug', 'science']
            ])->get();


            $cinema = Category::with('postWIthImage')
            ->where([
                ['id', '11'],
                ['slug', 'cinema']
            ])->get();

            $date = Carbon::now('Asia/baghdad')->toDateTimeString();

            $images = Photo::with('post:id,title')
            ->withCount('post')
            ->latest()->paginate(25);

        return view('pages.front-end.user-page', compact('user', 'posts', 'categories', 'blogerDay', 'sport', 'health', 'life', 'date', 'science', 'cinema', 'images'));

    }

    public function contactPage()
    {
        return view('pages.front-end.contact');

    } // End Of Contact Page


     public function search(Request $request)
    {
        $posts = Post::with('category:id,name,slug', 'photo:id,image')
                ->withCount('comments')
                ->where([
                    ['status', '=', 'published'],
                    ['deleted_at', '=', Null],
                ])
                ->when($request->search, function ($query) use ($request){

            return $query->where('title', 'like', '%' . $request->search . '%')
                         ->orWhere('slug', 'like', '%' . $request->search . '%');
        })->latest()->paginate(2);

        $posts2 = Post::with('category:id,name,slug', 'photo:id,image')
        ->where([
            ['status', '=', 'published'],
            ['deleted_at', '=', Null],
            ['user_id', '=', '1']
        ])
        ->withCount('comments')
        ->get();

            $viedo_post    = $posts->sortByDesc('created_at')->take(10);
            $news_post    = $posts2->sortByDesc('created_at')->take(2);

            $recent_post = $posts->sortByDesc('created_at')->take(4);
            $featur_post   = $posts->sortByDesc('created_at');
            $category_post = Category::with('postWithImage:id,title,slug,status')->get();
            $latest_post   = $posts->sortByDesc('created_at');


            $blogerDay = Category::with('postWithImage')
                        ->where([
                            ['id', '4'],
                            ['slug', 'bloger-days'],
                        ])->get();
            $sport = Category::with('postWithImage')
                        ->where([
                            ['id', '5'],
                            ['slug', 'sport'],
                        ])->get();

            $health = Category::with('postWithImage')
            ->where([
            ['id', '8'],
            ['slug', 'health']
            ])->get();

            $life = Category::with('postWIthImage')
            ->where([
                ['id', '7'],
                ['slug', 'life']
            ])->get();

            $categories = Category::with('childrenRecursive')
            ->latest()
            ->whereNull('parent_id')
            ->get();

            $technology = Category::with('postWIthImage')
            ->where([
                ['id', '9'],
                ['slug', 'technology']
            ])->get();

            $science = Category::with('postWIthImage')
            ->where([
                ['id', '10'],
                ['slug', 'science']
            ])->get();


            $cinema = Category::with('postWIthImage')
            ->where([
                ['id', '11'],
                ['slug', 'cinema']
            ])->get();

            $date = Carbon::now('Asia/baghdad')->toDateTimeString();

             $images = Photo::with('post:id,title')
            ->withCount('post')
            ->latest()->paginate(25);

        return view('pages.front-end.search', compact('posts', 'cinema', 'science', 'technology', 'categories', 'life', 'health', 'sport', 'recent_post', 'date', 'blogerDay', 'images'));

    }
}
