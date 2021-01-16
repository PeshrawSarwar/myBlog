<!-- Comment Area Start -->
<div class="comment_area clearfix mb-50">

    <!-- Section Title -->
    <div class="section-heading style-2">
        <h4>[ {{ $post->comments_count }} ] Comment</h4>
        <div class="line"></div>
    </div>

    <ul>
        <!-- Single Comment Area -->
        @foreach($posts as $post)
            @foreach($post->comments as $comment)
            <hr>
                <li class="single_comment_area">
                    <!-- Comment Content -->
                    <div class="post-boxed inlined clearfix">
                        <!-- Comment Author -->
                        <div class="post-img-wrap">
                            <img src="{{ asset('back-end/dist/img/user3-128x128.jpg') }}" alt="author">
                        </div>
                        {{-- <div class="comment-author">
                            <img src="{{ asset('back-end/dist/img/user3-128x128.jpg') }}" alt="author">
                        </div> --}}
                        <!-- Comment Meta -->
                        <div class="post-content">
                            <div class="entry-meta category-meta">
                                <div class="cat-links">
                                    <a href="">{{ $comment->name }}</a>
                                </div>
                            </div>
                            <div class="entry-title">
                                {{ $comment->body }}
                            </div>
                            <div class="entry-meta">
                                <div class="date"> {{ $comment->created_at->toFormattedDateString() }} </div>
                            </div>

                        </div>
                    </div>
                    @include('pages.front-end.singlepage.part-post.comment-reply', ['replies' => $comment->replies])
                    @if(count($comment->replies))
                                <div class="d-flex align-items-center my-3">
                                    @include('pages.front-end.singlepage.part-post.reply-form')
                                </div>
                    @endif
                </li>
            @endforeach
        @endforeach
    </ul>
</div>
