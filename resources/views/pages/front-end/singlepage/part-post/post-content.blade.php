<!-- Post Content -->
<div id="content" class="site-content">
    <div class="container">
        <div class="row justify-content-center site-content-row">
            <div id="primary" class="col-lg-8 content-area">
                <main id="main" class="site-main">
                    <div class="post-122 post type-post status-publish format-standard has-post-thumbnail hentry category-editors-pick">
                        @foreach($posts as $post)
                            @foreach($post->photo as $img)
                            <figure class="post-featured-image page-single-img-wrap">
                                <div class="post-img" style="background-image: url({{asset(Storage::url('images/post/' . $img->image)) }});"></div>
                            </figure>
                            <div class="entry-meta category-meta">
                                @foreach($post->category->take(3) as $category)
                                <div class="cat-links">
                                    <a href="{{ route('category.page', ['id'=>$category->id, 'slug'=>$category->slug]) }}">{{ $category->name }}</a>
                                </div>
                                @endforeach
                            </div>

                            <header class="entry-header">
                                <h1 class="entry-title">{{ $post->title }}</h1>
                                <div class="entry-meta">
                                    <div class="date">
                                        <a href="">
                                            {{ $post->created_at }}
                                        </a>
                                    </div>
                                    <div class="by-author vcard author">
                                        <a href="{{ route('user.page', ['id'=>$post->user->id]) }}">
                                            {{ $post->user->name }}
                                        </a>
                                    </div>
                                </div>
                            </header>
                            <div class="entry-content">
                                <div>{!! $post->content !!}</div>
                            </div>

                            @endforeach
                        @endforeach
                    </div>
                </main>
            </div>

            <aside id="secondary" class="col-lg-4 widget-area" role="complementary">
                <div class="sticky-sidebar">
                    <section id="newscard_recent_posts-7" class="widget newscard-widget-recent-posts">
                        <h3 class="widget-title">Recent Posts</h3>
                        <div class="row gutter-parent-14">
                            @foreach ($recent_post as $post)
                            <div class="col-md-6 post-col">
                                <div class="post-boxed inlined clearfix">
                                    <div class="post-img-wrap">
                                        @foreach($post->photo as $img)
                                        <a href="{{ route('post.page', ['id'=>$post->id, 'slug'=>$post->slug]) }}" class="post-img" style="background-image: url({{asset(Storage::url('images/post/' . $img->image)) }});"> </a>
                                        @endforeach
                                    </div>
                                    <div class="post-content">
                                        <div class="entry-meta category-meta">
                                            <div class="cat-links">
                                                @foreach($post->category as $category)
                                                <a href="{{ route('category.page', ['id'=>$category->id, 'slug'=>$category->slug]) }}" rel="category tag">{{ $category->name }}</a>
                                                @endforeach
                                            </div>
                                        </div>
                                        <h3 class="entry-title">
                                            <a href="{{ route('post.page', ['id'=>$post->id, 'slug'=>$post->slug]) }}">{{ $post->title }}</a>
                                        </h3>
                                        <div class="entry-meta">
                                            <div class="date"><a href="">{{ $post->created_at->since() }}</a></div>
                                            <div class="by-author vcard author">
                                                <a href="{{ route('user.page', ['id'=>$post->user->id]) }}"> {{ $post->user->name }}</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </section>

                    <section id="categories-2" class="widget widget_categories">
                        <h3 class="widget-title">Categories</h3>
                        <ul>

                                @foreach($categories as $category)
                                    <li class="cat-item cat-item-11">
                                        <a href="{{ route('category.page', ['id'=>$category->id, 'slug'=>$category->slug]) }}">
                                            {{ $category->name  }}
                                        </a>
                                    </li>
                                @endforeach


                        </ul>
                    </section>
                </div>
            </aside>
        </div>
    </div>
</div>






{{-- @foreach($posts as $post)
    <div class="post-content mt-0">
        @foreach($post->category as $category)
            <a href="{{ route('category.page', ['id'=>$category->id, 'slug'=>$category->slug]) }}" class="post-cata cata-sm cata-danger">
                {{ $category->name }}
            </a>
        @endforeach
        <a  href="{{ route('post.page', ['id'=>$post->id, 'slug'=>$post->slug]) }}" class="post-title mb-2">
            {{ $post->title }}
        </a>

        <div class="d-flex justify-content-between mb-30">
            <div class="post-meta d-flex align-items-center">
                <a href="#" class="post-author">
                    By {{ $post->user->name }}
                </a>
                <i class="fa fa-circle" aria-hidden="true"></i>
                <a href="#" class="post-date">
                    {{$post->created_at->since()}}
                </a>
            </div>
            <div class="post-meta d-flex">
                <a href="#">
                    <i class="fa fa-comments-o" aria-hidden="true"></i>
                    {{ $post->comments_count }}
                </a>
                <a href="#">
                    <i class="fa fa-eye" aria-hidden="true"></i>
                    {{ $post->view_count }}
                </a>
            </div>
        </div>
    </div>

    <!-- Content -->
    {!! $post->content !!}
    <!-- End Content -->

    <!-- Post Tags -->
    <div class="post-tags mt-30">
        <ul>
            <li>
                @foreach($post->tag as $tag)
                    <a href="#">
                        {{ $tag->name }}
                    </a>
                @endforeach
            </li>
        </ul>
    </div>
    <!-- Post Author -->
    <div class="vizew-post-author d-flex align-items-center py-5">
        <div class="post-author-thumb">
        <img src="{{ asset(Storage::url('images/avatar/' . $post->user->profile->avatar)) }}" alt="{{ $post->user->name }}">
        </div>
        <div class="post-author-desc pl-4">
            <a href="#" class="author-name">
                {{ $post->user->name }}
            </a>
            <p>
                {{$post->user->profile->description}}
            </p>
            <div class="post-author-social-info">
                <a href="{{ 'https://www.facebook.com/' .$post->user->profile->facebook }}" target="_blank" rel="noopener noreferrer">
                    <i class="fa fa-facebook"></i>
                </a>
                <a href="{{ 'https://www.twitter.com/' .$post->user->profile->twitter }}" target="_blank" rel="noopener noreferrer">
                    <i class="fa fa-twitter"></i>
                </a>
                <a href="{{ 'https://www.instagram.com/' .$post->user->profile->instagram }}" target="_blank" rel="noopener noreferrer">
                    <i class="fa fa-instagram"></i>
                </a>
                <a href="{{ 'https://www.youtube.com/channel/' .$post->user->profile->youtube }}" target="_blank" rel="noopener noreferrer">
                    <i class="fa fa-youtube"></i>
                </a>
            </div>
        </div>
    </div>
@endforeach --}}
