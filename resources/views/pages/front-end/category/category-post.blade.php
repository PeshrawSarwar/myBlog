<!-- Archive Catagory  -->
<div id="content" class="site-content">
    <div class="container">
        <div class="row justify-content-center site-content-row">
            <div id="primary" class="col-lg-8 content-area">
                <main id="main" class="site-main">
                    <header class="page-header">
                        <h1 class="page-title">
                            Category : <span>{{ $category->name }}</span>
                        </h1>
                    </header>
                    <div class="row gutter-parent-14 post-wrap">
                        @foreach($categories as $category)
                            @foreach($category->postWithImage->paginate(4) as $post)
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
                                                    <a href="{{ route('user.page', ['id'=>$post->user->id]) }}">{{ $post->user->name }}</a>
                                                </div>
                                            </div>
                                        </header>
                                    </div>
                                </div>

                            @endforeach
                        @endforeach
                    </div>
                    {{-- {{ collect($category)->paginate(6) }} --}}
                    <div class="navigation pagination" role="navigation" aria-label="Posts">
                        <div class="nav-links">
                            <span class="page-numbers current">{{ $category->postWithImage->paginate(4) }}</span>
                        </div>

                    </div>



                </main>
            </div>
        </div>
    </div>
</div>


{{-- <div class="row">
    @foreach($categories as $category)
        @foreach($category->postWithImage as $post)
            <div class="col-12 col-md-6">
                <div class="single-post-area mb-50">
                    <!-- Post Thumbnail -->
                    <div class="post-thumbnail">
                        @foreach($post->photo as $img)
                            <img src="{{asset(Storage::url('images/post/' . $img->image)) }}" alt="{{ $post->title }}" style="width: 100%; height: 100%;">
                        @endforeach
                    </div>

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
                                <i class="fa fa-eye" aria-hidden="true"></i>
                                {{ $post->view_count }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @endforeach
</div> --}}

<!-- Pagination -->
{{-- <nav class="mt-50">
   <ul class="pagination justify-content-center">
        <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-left"></i></a></li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-right"></i></a></li>
    </ul>
</nav> --}}
