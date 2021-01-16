<!-- ***** Single Most Views Widget ***** -->
<aside id="secondary" class="col-lg-4 widget-area" role="complementary">
        <div class="sticky-sidebar">
            <section id="newscard_horizontal_vertical_posts-8" class="widget newscard-widget-horizontal-vertical-posts">
                @foreach($sport as $category)
                <h2 class="widget-title">{{ $category->name }}</h2>
                @endforeach
                <div class="row gutter-parent-14 post-vertical">
                    @foreach($sport as $category)
                    @foreach($category->postWithImage->sortByDesc('created_at')->take(1) as $post)
                    <div class="col-md-6 first-col">
                        <div class="post-boxed main-post clearfix">
                            @foreach($post->photo as $img)
                            <div class="post-img-wrap">
                                <a href="{{ route('post.page', ['id'=>$post->id, 'slug'=>$post->slug]) }}" class="post-img" style="background-image: url({{asset(Storage::url('images/post/' . $img->image)) }});');"></a>
                            </div>
                            @endforeach
                            <div class="post-content">
                                <div class="entry-meta category-meta">
                                    <div class="cat-links">
                                        <a href="{{ route('category.page', ['id'=>$category->id, 'slug'=>$category->slug]) }}" rel="category tag">{{ $category->name }}</a>
                                    </div>
                                </div>
                                <h3 class="entry-title">
                                    <a href="{{ route('post.page', ['id'=>$post->id, 'slug'=>$post->slug]) }}">{{ $post->title }}</a>
                                </h3>
                                <div class="entry-meta">
                                    <div class="date"><a href="">{{ $post->created_at->since() }}</a></div>
                                    <div class="by-author vcard author"><a href="{{ route('user.page', ['id'=>$post->user->id]) }}">{{ $post->user->name }}</a></div>
                                </div>
                                <div class="entry-content">
                                    <p>{!!  substr(strip_tags($post->content), 0, 300) !!} ...</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @endforeach

                    @foreach($sport as $category)
                    @foreach($category->postWithImage->sortByDesc('created_at')->take(4) as $post)
                    <div class="col-md-6 second-col">
                        <div class="post-boxed inlined clearfix">
                            @foreach($post->photo as $img)
                            <div class="post-img-wrap">
                                <a href="{{ route('post.page', ['id'=>$post->id, 'slug'=>$post->slug]) }}" class="post-img" style="background-image: url({{asset(Storage::url('images/post/' . $img->image)) }});');"></a>
                            </div>
                            @endforeach
                            <div class="post-content">
                                <div class="entry-meta category-meta">
                                    <div class="cat-links">
                                        <a href="{{ route('category.page', ['id'=>$category->id, 'slug'=>$category->slug]) }}" rel="category tag">{{ $category->name }}</a>
                                    </div>
                                </div>
                                <h3 class="entry-title">
                                    <a href="{{ route('post.page', ['id'=>$post->id, 'slug'=>$post->slug]) }}">{{ $post->title }}</a>
                                </h3>
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
            </section>

            <h2 class="widget-title">Recent Posts</h2>
            <section id="newscard_recent_posts-3" class="widget newscard-widget-recent-posts">
                <div class="row gutter-parent-14">
                    @foreach ($recent_post as $post)
                    <div class="col-md-6 post-col">
                        <div class="post-boxed inlined clearfix">
                            <div class="post-img-wrap">
                                @foreach($post->photo as $img)
                                <a href="{{ route('post.page', ['id'=>$post->id, 'slug'=>$post->slug]) }}" class="post-img" style="background-image: url({{asset(Storage::url('images/post/' . $img->image)) }});"></a>
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
                                    <a href="{{ route('post.page', ['id'=>$post->id, 'slug'=>$post->slug]) }}">
                                        {{ $post->title }}
                                    </a>
                                </h3>
                                <div class="entry-meta">
                                    <div class="date"><a href="">{{ $post->created_at->since() }}</a></div>
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
            </section>
        </div>
</aside>

{{-- <div class="single-widget mb-50">
    <!-- Section Heading -->
    <div class="section-heading style-2 mb-30">
        <h4>Most Viewed</h4>
        <div class="line"></div>
    </div>

    <!-- Single Blog Post -->
    @foreach($post_trend->take(6) as $post)
        <div class="single-blog-post d-flex" style="height: 70px;">
            <div class="post-thumbnail" style="width: 100%; height: 100%;">
                @foreach($post->photo as $img)
                   <img src="{{asset(Storage::url('images/post/' . $img->image)) }}" alt="{{ $post->title }}" style="width: 100%; height: 100%;">
                @endforeach
            </div>
            <div class="post-content">
                <a href="{{ route('post.page', ['id'=>$post->id, 'slug'=>$post->slug]) }}" class="post-title">
                    {{ $post->title }}
                </a>
                <div class="post-meta d-flex justify-content-between">
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
    @endforeach
</div> --}}
