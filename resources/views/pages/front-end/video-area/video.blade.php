<div class="top-stories-bar" >
    <div class="container">
        <div class="row top-stories-box clearfix">
            <div class="col-sm-auto">
                <div class="top-stories-label">
                    <div class="top-stories-label-wrap">
                        <span class="flash-icon"></span>
                        <span class="label-txt">
                            Top Stories
                        </span>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm top-stories-lists">
                <div class="row align-items-center">
                    <div class="col">
                        <div class="marquee">
                            @foreach ($viedo_post as $post)
                                   <a href="{{  route('post.page', ['id'=>$post->id, 'slug'=>$post->slug])  }}">{{ $post->title }}</a>
                            @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="featured-section">
    <div class="container">
        <div class="row gutter-parent-10">
            <div class="col-lg-5 col-xl-6">
                <div class="featured-slider post-slider">
                    <div class="post-slider-header">
                        <h3 class="stories-title">Main Stories</h3>
                    </div>
                    <div class="owl-carousel">
                        @foreach($viedo_post as $post)
                            <div class="item">
                                <div class="post-item post-block">
                                    <div class="post-img-wrap">
                                        @foreach($post->photo as $img)
                                        <a href="{{ route('post.page', ['id'=>$post->id, 'slug'=>$post->slug]) }}" class="post-img" style="background-image: url({{asset(Storage::url('images/post/' . $img->image)) }});"></a>
                                        @endforeach
                                    </div>
                                    <div class="entry-header">
                                        <div class="entry-meta category-meta">

                                            <div class="cat-links">
                                                @foreach($post->category->take(3) as $category)
                                                <a href="{{ route('category.page', ['id'=>$category->id, 'slug'=>$category->slug]) }}">
                                                    {{ $category->name }}
                                                @endforeach
                                                </a>
                                            </div>

                                        </div>
                                        <h2 class="entry-title">
                                            <a href="{{ route('post.page', ['id'=>$post->id, 'slug'=>$post->slug]) }}">
                                                {{ $post->title }}
                                            </a>
                                        </h2>
                                        <div class="entry-meta">
                                            <div class="date">
                                                <a href="">{{ $post->created_at->since() }}</a>
                                            </div>
                                            <div class="by-author vcard author">
                                                <a href="{{ route('user.page', ['id'=>$post->user->id]) }}">{{ $post->user->name }}</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-lg-3pt5 col-xl-3">
                <div class="featured-post">
                    <div class="title-wrap">
                        <h3 class="stories-title">Top News</h3>
                    </div>
                    <div class="row">

                        @foreach ($news_post as $post)
                        <div class="col-12">
                            <div class="post-item post-block">
                                <div class="post-img-wrap">
                                    @foreach($post->photo as $img)
                                        <a href="{{ route('post.page', ['id'=>$post->id, 'slug'=>$post->slug]) }}" style="background-image: url({{asset(Storage::url('images/post/' . $img->image)) }});" class="post-img">
                                    @endforeach

                                    </a>
                                </div>
                                <div class="entry-header">
                                    <div class="entry-meta category-meta">
                                        <div class="cat-links">
                                            @foreach($post->category->take(1) as $category)
                                            <a href="{{ route('category.page', ['id'=>$category->id, 'slug'=>$category->slug]) }}">{{ $category->name }}</a>
                                            @endforeach
                                        </div>
                                    </div>
                                    <h2 class="entry-title">
                                        <a href="{{ route('post.page', ['id'=>$post->id, 'slug'=>$post->slug]) }}">

                                            {{ $post->title }}
                                        </a>
                                    </h2>
                                    <div class="entry-meta">
                                        <div class="date">
                                            <a href="">{{ $post->created_at }}</</a>
                                        </div>
                                        <div class="by-author vcard author">
                                            <a href="{{ route('user.page', ['id'=>$post->user->id]) }}">
                                                {{ $post->user->name }}
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach


                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-lg-3pt5 col-xl-3">
                <div class="featured-post">
                    <div class="title-wrap" style="min-height: 41px;">
                        @foreach($blogerDay as $category)
                        <h3 class="stories-title">
                            {{ $category->name }}
                        </h3>
                        @endforeach
                    </div>
                    <div class="row">
                        @foreach($blogerDay as $category)
                        @foreach($category->postWithImage->sortByDesc('created_at')->take(2) as $post)
                        <div class="col-12">
                            <div class="post-item post-block">
                                @foreach($post->photo as $img)
                                <div class="post-img-wrap">
                                    <a href="{{ route('post.page', ['id'=>$post->id, 'slug'=>$post->slug]) }}" class="post-img" style="background-image: url({{asset(Storage::url('images/post/' . $img->image)) }});"></a>
                                </div>
                                @endforeach
                                <div class="entry-header">
                                    <div class="entry-meta category-meta">
                                            <div class="cat-links">
                                                <a href="{{ route('category.page', ['id'=>$category->id, 'slug'=>$category->slug]) }}" rel="category tag">{{ $category->name }}</a>
                                            </div>
                                    </div>
                                    <h2 class="entry-title"><a href="{{ route('post.page', ['id'=>$post->id, 'slug'=>$post->slug]) }}">{{ $post->title }}</a></h2>
                                    <div class="entry-meta">
                                        <div class="date"><a href="">{{ $post->created_at->since() }}</a></div>
                                        <div class="by-author vcard author">
                                            <a href="{{ route('user.page', ['id'=>$post->user->id]) }}">{{ $post->user->name }}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @endforeach

                    </div>
                </div>
            </div>


        </div>

        <section class="featured-stories">
            <h2 class="stories-title">Popular Stories</h2>
            <div class="row gutter-parent-10">
                @foreach($post_trend->take(4) as $post)
                <div class="col-sm-6 col-lg-3 post-col">
                    <div class="post-boxed">
                        <div class="post-img-wrap">
                            <div class="featured-post-img">
                                @foreach($post->photo as $img)
                                <a href="{{ route('post.page', ['id'=>$post->id, 'slug'=>$post->slug]) }}" class="post-img" style="background-image: url({{asset(Storage::url('images/post/' . $img->image)) }});"></a>
                            @endforeach

                            </div>
                            <div class="entry-meta category-meta">
                                <div class="cat-links">
                                    @foreach($post->category->take(3) as $category)
                                    <a href="{{ route('category.page', ['id'=>$category->id, 'slug'=>$category->slug]) }}">{{ $category->name }}</a>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                        <div class="post-content">
                            <h3 class="entry-title"><a href="{{ route('post.page', ['id'=>$post->id, 'slug'=>$post->slug]) }}">{{ $post->title }}</a></h3>
                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i>
                                {{ $post->view_count }}
                            </a>
                            <div class="entry-meta">
                                <div class="date"><a href="">{{ $post->created_at }}</a></div>
                                <div class="by-author vcard author"><a href="{{ route('user.page', ['id'=>$post->user->id]) }}">{{ $post->user->name }}</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                {{-- <div class="col-sm-6 col-lg-3 post-col">
                    <div class="post-boxed">
                        <div class="post-img-wrap">
                            <div class="featured-post-img">
                                <a href="" class="post-img" style="background-image: url('https://wptavern.com/wp-content/uploads/2017/07/blog.png');"></a>
                            </div>
                            <div class="entry-meta category-meta">
                                <div class="cat-links">
                                    <a href="" rel="category-tag">Sport</a>
                                </div>
                            </div>
                        </div>
                        <div class="post-content">
                            <h3 class="entry-title">Welcome back</h3>
                            <div class="entry-meta">
                                <div class="date"><a href="">25,Sep 2020</a></div>
                                <div class="by-author vcard author"><a href="">John Doe</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 post-col">
                    <div class="post-boxed">
                        <div class="post-img-wrap">
                            <div class="featured-post-img">
                                <a href="" class="post-img" style="background-image: url('https://wptavern.com/wp-content/uploads/2017/07/blog.png');"></a>
                            </div>
                            <div class="entry-meta category-meta">
                                <div class="cat-links">
                                    <a href="" rel="category-tag">Sport</a>
                                </div>
                            </div>
                        </div>
                        <div class="post-content">
                            <h3 class="entry-title">Welcome back</h3>
                            <div class="entry-meta">
                                <div class="date"><a href="">25,Sep 2020</a></div>
                                <div class="by-author vcard author"><a href="">John Doe</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 post-col">
                    <div class="post-boxed">
                        <div class="post-img-wrap">
                            <div class="featured-post-img">
                                <a href="" class="post-img" style="background-image: url('https://wptavern.com/wp-content/uploads/2017/07/blog.png');"></a>
                            </div>
                            <div class="entry-meta category-meta">
                                <div class="cat-links">
                                    <a href="" rel="category-tag">Sport</a>
                                </div>
                            </div>
                        </div>
                        <div class="post-content">
                            <h3 class="entry-title">Welcome back</h3>
                            <div class="entry-meta">
                                <div class="date"><a href="">25,Sep 2020</a></div>
                                <div class="by-author vcard author"><a href="">John Doe</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 post-col">
                    <div class="post-boxed">
                        <div class="post-img-wrap">
                            <div class="featured-post-img">
                                <a href="" class="post-img" style="background-image: url('https://wptavern.com/wp-content/uploads/2017/07/blog.png');"></a>
                            </div>
                            <div class="entry-meta category-meta">
                                <div class="cat-links">
                                    <a href="" rel="category-tag">Sport</a>
                                </div>
                            </div>
                        </div>
                        <div class="post-content">
                            <h3 class="entry-title">Welcome back</h3>
                            <div class="entry-meta">
                                <div class="date"><a href="">25,Sep 2020</a></div>
                                <div class="by-author vcard author"><a href="">John Doe</a></div>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </section>
    </div>
</section>


<div id="content" class="site-content pt-0">
<div class="container">
    <div class="row gutter-14 justify-content site-content-row">
        <div id="priamry" class="col-lg-8 content-area" >
            <main id="main" class="site-main" role="main">
                @include('pages.front-end.video-posts.view-section')

            </main>
        </div>

        @include('pages.front-end.video-posts.view-post')
    </div>
</div>
</div>


{{-- <section class="hero--area section-padding-80">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-12 col-md-7 col-lg-8">
                <div class="tab-content">
                    @foreach($viedo_post as $post)
                        <div class="tab-pane" id="post-{{ $post->id }}" role="tabpanel" aria-labelledby="post-{{ $post->id }}-tab">
                            <!-- Single Feature Post -->
                            @foreach($post->photo as $img)
                                <div class="single-feature-post video-post bg-img" style="background-image: url({{asset(Storage::url('images/post/' . $img->image)) }});">
                                    <!-- Play Button -->
                                    <a href="{{ route('post.page', ['id'=>$post->id, 'slug'=>$post->slug]) }}" class=""><i class="fa fa-play" aria-hidden="false"></i></a>

                                    <!-- Post Content -->
                                    <div class="post-content">
                                        @foreach($post->category->take(3) as $category)
                                            <a href="{{ route('category.page', ['id'=>$category->id, 'slug'=>$category->slug]) }}" class="post-cata">
                                                {{ $category->name }}
                                            </a>
                                        @endforeach
                                        <a href="{{ route('post.page', ['id'=>$post->id, 'slug'=>$post->slug]) }}" class="post-title">
                                            {{ $post->title }}
                                        </a>
                                        <div class="post-meta d-flex">
                                            <a href="#">
                                                <i class="fa fa-comments-o" aria-hidden="true"></i>
                                                {{ $post->comments_count }}
                                            </a>
                                            <a href="#">
                                                <i class="fa fa-eye" aria-hidden="true"></i> {{ $post->view_count }}
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="col-12 col-md-5 col-lg-4">
                <ul class="nav vizew-nav-tab" role="tablist">
                    @foreach($viedo_post as $post)
                        <li class="nav-item">
                            <a class="nav-link" id="post-{{ $post->id }}-tab" data-toggle="pill" href="#post-{{ $post->id }}" role="tab" aria-controls="post-{{ $post->id }}" aria-selected="false">
                                <!-- Single Blog Post -->
                                <div class="single-blog-post style-2 d-flex align-items-center">
                                    @foreach($post->photo as $img)
                                        <div class="post-thumbnail">
                                            <img src="{{asset(Storage::url('images/post/' . $img->image)) }}" alt="{{ $post->title }}">
                                        </div>
                                    @endforeach
                                    <div class="post-content">
                                        <h6 class="post-title">
                                            {{ $post->title }}
                                        </h6>
                                        <div class="post-meta d-flex justify-content-between">
                                            <span>
                                                <i class="fa fa-comments-o" aria-hidden="true"></i>
                                                {{ $post->comments_count }}
                                            </span>
                                            <span>
                                                <i class="fa fa-eye" aria-hidden="true"></i> {{ $post->view_count }}
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                    @endforeach

                </ul>
            </div>
        </div>
    </div>
</section> --}}
<!-- ##### Hero Area End ##### -->
