
<section id="newscard_horizontal_vertical_posts-3" class="widget newscard-widget-horizontal-vertical-posts">
    @foreach($technology as $category)
    <h2 class="widget-title">{{ $category->name }}</h2>
    @endforeach
    <div class="row gutter-parent-14 post-vertical">
        @foreach($technology as $category)
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
        <div class="col-md-6 second-col">
            @foreach($technology as $category)
            @foreach($category->postWithImage->sortByDesc('created_at')->take(4) as $post)
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
            @endforeach
            @endforeach
        </div>
    </div>
</section>
