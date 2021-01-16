@foreach($replies as $replay)
    <ol class="children my-3">
        <li class="single_comment_area">
            <!-- Comment Content -->
            <div class="post-boxed inlined clearfix">
                <!-- Comment Author -->
                <div class="post-img-wrap">
                    <img src="{{ asset('back-end/dist/img/user1-128x128.jpg') }}" alt="author">
                </div>
                <!-- Comment Meta -->
                <div class="post-content">
                    <div class="entry-meta category-meta">
                        <div class="cat-links">
                            <a href="">{{ $replay->name }}</a>
                        </div>
                    </div>
                    <div class="entry-title">
                        {{ $replay->body }}
                    </div>
                    <div class="entry-meta">
                        <div class="date"> {{ $comment->created_at->toFormattedDateString() }} </div>
                    </div>
                </div>
            </div>



        </li>
    </ol>
@endforeach
