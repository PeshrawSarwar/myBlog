
<!-- Post Image -->
{{-- <div class="row">
    <div class="col-12">
        <div class="post-details-thumb mb-50">
            @foreach($posts as $post)
                @foreach($post->photo as $img)
                    <img src="{{asset(Storage::url('images/post/' . $img->image)) }}" alt="{{ $post->title }}">
                @endforeach
            @endforeach
        </div>
    </div>
</div> --}}

<!-- Post Content -->

    <!-- Post Details Content Area -->

            <!-- Blog Content -->
            <div class="blog-content">
                @include('pages.front-end.singlepage.part-post.post-content')
                @include('pages.front-end.singlepage.part-post.comment')
                @include('pages.front-end.singlepage.part-post.leave-comment')
            </div>

    @include('pages.front-end.singlepage.part-post.sidebar')

