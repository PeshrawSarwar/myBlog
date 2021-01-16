<!-- Archive Catagory  -->
<div id="content" class="site-content">
    <div class="container">
        <div class="row justify-content-center site-content-row">
            <div id="primary" class="col-lg-8 content-area">
                <main id="main" class="site-main">
                    <header class="page-header">
                        <h1 class="page-title">
                            User : <span>{{ $user->name }}</span>
                        </h1>
                    </header>
                    <div class="row gutter-parent-14 post-wrap">
                        @foreach($posts as $posts)
                            @foreach($posts->postWithImage->paginate(6) as $post)
                                <div class="col-sm-6 col-xxl-4 post-col">
                                    <div class="post-31 post type-post status-publish format-standard has-post-thumbnail hentry category-tech">
                                        @foreach($post->photo as $img)
                                        <figure class="post-featured-image post-img-wrap">
                                            <a href="{{ route('post.page', ['id'=>$post->id, 'slug'=>$post->slug]) }}" class="post-img" style="background-image: url({{asset(Storage::url('images/post/' . $img->image)) }});"></a>
                                        </figure>
                                        @endforeach
                                        <header class="entry-header">
                                            <h2 class="entry-title">
                                                <a href="{{ route('post.page', ['id'=>$post->id, 'slug'=>$post->slug]) }}" rel="bookmark">{{ $post->title }}</a>
                                            </h2>
                                            <div class="entry-meta">
                                                <div class="date"><a href="">{{ $post->created_at }}</a></div>
                                                <div class="by-author vcard author">
                                                    <a href="">{{ $post->user->name }}</a>
                                                </div>
                                            </div>
                                        </header>
                                    </div>
                                </div>

                            @endforeach
                        @endforeach
                    </div>
                    {{-- {{ collect($category)->paginate(6) }} --}}
                    {{ $posts->postWithImage->paginate(6) }}


                </main>
            </div>
        </div>
    </div>
</div>
