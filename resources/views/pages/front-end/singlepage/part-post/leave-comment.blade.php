<!-- Post A Comment Area -->
<hr>
<hr>
<div class="post-a-comment-area my-4">

    <!-- Section Title -->
    <div class="section-heading style-2">
        <h4>Leave a Comment</h4>
        <div class="line"></div>
    </div>

    <!-- Comment Form -->
    <div class="contact-form-area">
        <form method="post" action="{{ route('comment.add') }}">
            {{csrf_field()}}
            {{method_field('post')}}
            <input type="hidden" name="post_id" value="{{ $post->id }}" >
            <div class="row">
                <div class="col-12 col-lg-6">
                    <input
                        type="text"
                        class="form-control"
                        id="name"
                        name="name"
                        placeholder="Your Name*">
                    {{-- Catch Error --}}
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-12 col-lg-6">
                    <input
                        type="email"
                        class="form-control"
                        id="email"
                        name="email"
                        placeholder="Your Email*">
                    {{-- Catch Error --}}
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-12 my-3">
                    <textarea name="body" class="form-control" id="body" placeholder="Add Your Comment"></textarea>
                    {{-- Catch Error --}}
                    @error('body')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-12">
                    <button class="btn vizew-btn mt-30" type="submit">
                        Submit Comment
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
