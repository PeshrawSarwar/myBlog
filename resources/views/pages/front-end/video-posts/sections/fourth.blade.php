<section id="newscard_card_block_posts-4" class="widget newscard-widget-card-block-posts">
    @foreach($science as $category)
    <h2 class="widget-title">{{ $category->name }}</h2>
    @endforeach
    <div class="row gutter-parent-14">
        @foreach($science as $category)
        @foreach($category->postWithImage->sortByDesc('created_at')->take(2) as $post)
        <div class="col-sm-6 post-col">
            <div class="post-item post-boxed">
                <div class="post-img-wrap">
                    @foreach ($post->photo as $img)
                    <a href="{{ route('post.page', ['id'=>$post->id, 'slug'=>$post->slug]) }}" class="post-img" style="background-image: url({{asset(Storage::url('images/post/' . $img->image)) }});');"></a>
                    @endforeach
                    <div class="entry-meta category-meta">
                        <div class="cat-links">
                            <a href="{{ route('category.page', ['id'=>$category->id, 'slug'=>$category->slug]) }}" rel="category tag">{{ $category->name }}</a>
                        </div>
                    </div>
                </div>
                <div class="post-content">
                    <h3 class="entry-title"><a href="{{ route('post.page', ['id'=>$post->id, 'slug'=>$post->slug]) }}">
                        {{ $post->title }}
                    </a></h3>
                    <div class="entry-meta">
                        <div class="date"><a href="">{{ $post->created_at->since() }}</a></div>
                        <div class="by-author vcard author">
                            <a href="{{ route('user.page', ['id'=>$post->user->id]) }}">J{{ $post->user->name }}</a>
                        </div>
                    </div>
                    <div class="entry-content">
                        <p>{!!  substr(strip_tags($post->content), 0, 150) !!} ...</p>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        @endforeach


    </div>
</section>
