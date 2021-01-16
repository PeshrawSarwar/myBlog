@extends('layouts.app')

@section('title', 'Search')

@section('content')

    <div class="container">
        <div class="row justify-content-center site-content-row">
            <!-- posts -->
            <div id="primary" class="col-lg-12 content-area">
                <main id="main" class="site-main">
                    <header class="page-header">
                        <h1 class="page-title my-3">
                            Search Results For : <span>{{  request()->search }}</span>
                        </h1>
                    </header>
                    <div class="row gutter-parent-14 post-wrap">
                        @foreach($posts as $post)
                        <div class="col-sm-6 col-xxl-4 post-col">
                            <div class="post-122 post type-post status-publish format-standard">
                                <figure class="post-featured-image post-img-wrap">
                                    @foreach($post->photo as $img)
                                    <a href="{{ route('post.page', ['id'=>$post->id, 'slug'=>$post->slug]) }}" style="background-image: url({{asset(Storage::url('images/post/' . $img->image)) }});" class="post-img"></a>
                                    @endforeach
                                    <div class="entry-meta category-meta">
                                        <div class="cat-links">
                                            @foreach($post->category->take(3) as $category)
                                            <a href="{{ route('category.page', ['id'=>$category->id, 'slug'=>$category->slug]) }}" rel="category tag">
                                                {{ $category->name }}
                                            </a>
                                            @endforeach
                                        </div>
                                    </div>
                                </figure>
                                <div class="entry-header">
                                    <h2 class="entry-title">
                                        <a href="{{ route('post.page', ['id'=>$post->id, 'slug'=>$post->slug]) }}" rel="bookmark">
                                            {{ $post->title }}
                                        </a>
                                    </h2>
                                    <div class="entry-meta">
                                        <div class="date">{{$post->created_at->toFormattedDateString()}}</div>
                                        <div class="by-author vcard author"> <a href="{{ route('user.page', ['id'=>$post->user->id]) }}" >{{ $post->user->name }}</a></div>
                                    </div>
                                    <div class="entry-content">
                                         <p>{!! $post->content !!}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    {{ $posts->appends(request()->query())->links() }}
                </main>
            </div>
            {{-- <div class="col-12 col-md-7 col-lg-8">
                <div class="all-posts-area">
                    <!-- Single Post Area -->
                    @foreach($posts as $post)
                        <div class="single-post-area mb-30">
                            <div class="row align-items-center">
                                <div class="col-12 col-lg-6">
                                    <!-- Post Thumbnail -->
                                    <div class="post-thumbnail">
                                        @foreach($post->photo as $img)
                                            <img src="{{asset(Storage::url('images/post/' . $img->image)) }}" alt="{{ $post->title }}" style="width: 100%; height: 100%;">
                                        @endforeach
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <!-- Post Content -->
                                    <div class="post-content mt-0">
                                        @foreach($post->category->take(3) as $category)
                                            <a href="#" class="post-cata cata-sm cata-success">
                                                {{ $category->name }}
                                            </a>
                                        @endforeach

                                        <a href="{{ route('post.page', ['id'=>$post->id, 'slug'=>$post->slug]) }}" class="post-title mb-2">
                                            {{ $post->title }}
                                        </a>
                                        <div class="post-meta d-flex align-items-center mb-2">
                                            <a href="#" class="post-date">
                                                {{$post->created_at->toFormattedDateString()}}
                                            </a>
                                        </div>
                                        <p class="mb-2">
                                            {!!  substr(strip_tags($post->content), 0, 150) !!}
                                        </p>
                                        <div class="post-meta d-flex">
                                            <a href="#">
                                                <i class="fa fa-comments-o" aria-hidden="true"></i>
                                                {{ $post->comments_count }}
                                            </a>
                                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i>
                                                {{ $post->view_count }}
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                {{ $posts->appends(request()->query())->links() }}
            </div> --}}
            <!-- ***** Sidebar ***** -->
            {{-- <div class="col-12 col-md-5 col-lg-4">
                <div class="sidebar-area">
                    @include('layouts.front-end.sidebar')
                </div>
            </div> --}}
        </div>
    </div>

@endsection
