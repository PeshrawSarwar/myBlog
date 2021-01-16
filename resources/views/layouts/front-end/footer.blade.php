<footer id="colophon" class="site-footer" role="contentinfo">
    <div class="container">
        <div class="featured-stories">
            <h2 class="stories-title">You may missed!</h2>
            <div class="row gutter-parent-14">
                @foreach($blogerDay as $category)
                @foreach($category->postWithImage->sortByDesc('created_at')->take(1) as $post)
                <div class="col-sm-6 col-lg-3">
                    <div class="post-boxed">
                        @foreach($post->photo as $img)
                        <div class="post-img-wrap">
                            <div class="featured-post-img">
                                <a href="{{ route('post.page', ['id'=>$post->id, 'slug'=>$post->slug]) }}" class="post-img" style="background-image: url({{asset(Storage::url('images/post/' . $img->image)) }});"></a>
                            </div>
                            <div class="entry-meta category-meta">
                                <div class="cat-links">
                                    <a href="{{ route('category.page', ['id'=>$category->id, 'slug'=>$category->slug]) }}" rel="category tag">{{ $category->name }}</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <div class="post-content">
                            <div class="entry-title"><a href="{{ route('post.page', ['id'=>$post->id, 'slug'=>$post->slug]) }}">{{ $post->title }}</a></div>
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

                @foreach($sport as $category)
                @foreach($category->postWithImage->sortByDesc('created_at')->take(1) as $post)
                <div class="col-sm-6 col-lg-3">
                    <div class="post-boxed">
                        @foreach($post->photo as $img)
                        <div class="post-img-wrap">
                            <div class="featured-post-img">
                                <a href="{{ route('post.page', ['id'=>$post->id, 'slug'=>$post->slug]) }}" class="post-img" style="background-image: url({{asset(Storage::url('images/post/' . $img->image)) }});"></a>
                            </div>
                            <div class="entry-meta category-meta">
                                <div class="cat-links">
                                    <a href="{{ route('category.page', ['id'=>$category->id, 'slug'=>$category->slug]) }}" rel="category tag">{{ $category->name }}</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <div class="post-content">
                            <div class="entry-title"><a href="{{ route('post.page', ['id'=>$post->id, 'slug'=>$post->slug]) }}">{{ $post->title }}</a></div>
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


                @foreach($health as $category)
                @foreach($category->postWithImage->sortByDesc('created_at')->take(1) as $post)
                <div class="col-sm-6 col-lg-3">
                    <div class="post-boxed">
                        @foreach($post->photo as $img)
                        <div class="post-img-wrap">
                            <div class="featured-post-img">
                                <a href="{{ route('post.page', ['id'=>$post->id, 'slug'=>$post->slug]) }}" class="post-img" style="background-image: url({{asset(Storage::url('images/post/' . $img->image)) }});"></a>
                            </div>
                            <div class="entry-meta category-meta">
                                <div class="cat-links">
                                    <a href="{{ route('category.page', ['id'=>$category->id, 'slug'=>$category->slug]) }}" rel="category tag">{{ $category->name }}</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <div class="post-content">
                            <div class="entry-title"><a href="{{ route('post.page', ['id'=>$post->id, 'slug'=>$post->slug]) }}">{{ $post->title }}</a></div>
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

                @foreach($life as $category)
                @foreach($category->postWithImage->sortByDesc('created_at')->take(1) as $post)
                <div class="col-sm-6 col-lg-3">
                    <div class="post-boxed">
                        @foreach($post->photo as $img)
                        <div class="post-img-wrap">
                            <div class="featured-post-img">
                                <a href="{{ route('post.page', ['id'=>$post->id, 'slug'=>$post->slug]) }}" class="post-img" style="background-image: url({{asset(Storage::url('images/post/' . $img->image)) }});"></a>
                            </div>
                            <div class="entry-meta category-meta">
                                <div class="cat-links">
                                    <a href="{{ route('category.page', ['id'=>$category->id, 'slug'=>$category->slug]) }}" rel="category tag">{{ $category->name }}</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <div class="post-content">
                            <div class="entry-title"><a href="{{ route('post.page', ['id'=>$post->id, 'slug'=>$post->slug]) }}">{{ $post->title }}</a></div>
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
        </div>
    </div>
    <div class="widget-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-3">
                    <section id="custom_html-2" class="widget_text widget widget_custom_html">
                        <h3 class="widget-title">NewsCard</h3>
                        <div class="textwidget custom-html-widget">
                            <p>"
                                NewsCard is a Multi-Purpose Magazine/News WordPress Theme. NewsCard is specially designed for magazine sites (food, travel, fashion, music, health, sports, photography), news sites, shopping sites, personal/photo blog and many more.
                            "</p>

                            <p>"
                                NewsCard is a Multi-Purpose Magazine/News WordPress Theme. NewsCard is specially designed for magazine sites (food, travel, fashion, music, health, sports, photography), news sites, shopping sites, personal/photo blog and many more.
                            "</p>
                        </div>
                    </section>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <section id="media_gallery-2" class="widget widget_media_gallery">
                        <h3 class="widget-title">Gallery</h3>
                        <div id="gallery-1" class="gallery galleryid-5 gallery-columns-3 gallery-size-thumbnail">
                            @foreach($images->take(12) as $img)
                            <figure class="gallery-item">
                                <div class="gallery-icon landscape">
                                    <img src="{{$img->photo_path}}" width="150" height="150" class="attachment-thumbnail size-thumbnail" loading="lazy" alt="">
                                </div>
                            </figure>
                            @endforeach
                        </div>
                    </section>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <section id="categories-3" class="widget widget_categories">
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
                <div class="col-sm-6 col-lg-3">
                    <section id="newscard_recent_posts-4" class="widget newscard-widget-recent-posts">
                        <h3 class="widget-title">Contact Us</h3>
                        <div class="row gutter-parent-14">
                            <div class="col-md-6 post-col">
                                <div class="post-boxed inlined clearfix">
                                    {{-- <div class="post-img-wrap">
                                        <a href="" class="post-img" style="background-image: url('https://www.themehorse.com/preview/newscard/files/2018/11/health-2.jpg');"></a>
                                    </div> --}}
                                    <div class="post-content">
                                        {{-- <div class="entry-meta category-meta">
                                            <div class="cat-links">
                                                <a href="" rel="category tag">NewsCard</a>
                                            </div>
                                        </div> --}}
                                        <h3 class="entry-title">
                                        <button type="button" class="btn btn-block btn-primary">
                                            <a href="https://www.facebook.com"><i class="fab fa-facebook"></i></a>
                                        </button>
                                        </h3>
                                        {{-- <div>
                                            <div class="date"><a href="">25, Sep 2020</a></div>
                                            <div class="by-author vcard author"><a href="">John Doe</a></div>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 post-col">
                                <div class="post-boxed inlined clearfix">
                                    {{-- <div class="post-img-wrap">
                                        <a href="" class="post-img" style="background-image: url('https://www.themehorse.com/preview/newscard/files/2018/11/health-2.jpg');"></a>
                                    </div> --}}
                                    <div class="post-content">
                                        {{-- <div class="entry-meta category-meta">
                                            <div class="cat-links">
                                                <a href="" rel="category tag">NewsCard</a>
                                            </div>
                                        </div> --}}
                                        <h3 class="entry-title">
                                            <button type="button" class="btn btn-block btn-warning">
                                                <i class="fab fa-instagram"></i>
                                            </button>
                                        </h3>
                                        {{-- <div>
                                            <div class="date"><a href="">25, Sep 2020</a></div>
                                            <div class="by-author vcard author"><a href="">John Doe</a></div>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 post-col">
                                <div class="post-boxed inlined clearfix">
                                    {{-- <div class="post-img-wrap">
                                        <a href="" class="post-img" style="background-image: url('https://www.themehorse.com/preview/newscard/files/2018/11/health-2.jpg');"></a>
                                    </div> --}}
                                    <div class="post-content">
                                        {{-- <div class="entry-meta category-meta">
                                            <div class="cat-links">
                                                <a href="" rel="category tag">NewsCard</a>
                                            </div>
                                        </div> --}}
                                        <h3 class="entry-title">
                                            <button type="button" class="btn btn-block btn-danger">
                                                <i class="fas fa-envelope-open"></i>
                                            </button></h3>
                                        {{-- <div>
                                            <div class="date"><a href="">25, Sep 2020</a></div>
                                            <div class="by-author vcard author"><a href="">John Doe</a></div>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 post-col">
                                <div class="post-boxed inlined clearfix">
                                    {{-- <div class="post-img-wrap">
                                        <a href="" class="post-img" style="background-image: url('https://www.themehorse.com/preview/newscard/files/2018/11/health-2.jpg');"></a>
                                    </div> --}}
                                    <div class="post-content">
                                        {{-- <div class="entry-meta category-meta">
                                            <div class="cat-links">
                                                <a href="" rel="category tag">NewsCard</a>
                                            </div>
                                        </div> --}}
                                        <h3 class="entry-title">
                                            <button type="button" class="btn btn-block btn-success">
                                                <i class="fab fa-whatsapp"></i>
                                            </button></h3>
                                        {{-- <div>
                                            <div class="date"><a href="">25, Sep 2020</a></div>
                                            <div class="by-author vcard author"><a href="">John Doe</a></div>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
     <div class="site-info">
        <div class="site-info">
            <div class="row">
                <div class="col-lg-auto order-lg-2 ml-auto">
                    <div class="social-profiles">
                        <ul class="clearfix">
                            <li> <a href="https://facebook.com/themehorse" target="_blank"></a></li>
                            <li> <a href="https://twitter.com/theme_horse" target="_blank"></a></li>
                            <li> <a href="https://www.youtube.com/channel/UCKuPZFWodB0krKT016hqwIg" target="_blank"></a></li>
                        </ul>
                    </div>
                </div>

                <div class="copyright col-lg order-lg-1 text-lg-left">
                    <div class="theme-link">
                        Copyright &copy; 2020 " <a href="https://www.themehorse.com/preview/newscard/" title="NewsCard">
                            NewsCard
                        </a>
                    </div>
                    <div class="author-link">
                        " Theme by: " <a href="https://www.themehorse.com" target="_blank" title="Theme Horse">Theme Horse</a>
                    </div>
                    <div class="wp-link">
                        " Proudly Powered by: " <a href="https://wordpress.org/" target="_blank" title="WordPress">Word Press</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>





{{-- <footer class="footer-area">
    <div class="container">
        @foreach($settings as $setting)
            <div class="row">
                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-6 col-xl-3">
                    <div class="footer-widget mb-70">
                        <!-- Logo -->
                        <a href="{{ route('home.index') }}" class="foo-logo d-block mb-4">
                            <img src="{{ asset(Storage::url('images/logo/' . $setting->logo))}}" alt="{{$setting->name}}">
                        </a>
                        <p>{{ $setting->about }}</p>
                    </div>
                </div>

                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-6 col-xl-3">
                    <div class="footer-widget mb-70">
                        <h6 class="widget-title">Latest Twister</h6>
                        <!-- Twitter Slides -->
                        <div class="twitter-slides owl-carousel">

                            <!-- Single Twitter Slide -->
                            <div class="single--twitter-slide">
                                <!-- Single Twit -->
                                <div class="single-twit">
                                    <p><i class="fa fa-twitter"></i> <span>@Leonard</span> I am so happy because I found this magazine, and it just made Vizeweasier. Thanks for sharing</p>
                                </div>
                                <!-- Single Twit -->
                                <div class="single-twit">
                                    <p><i class="fa fa-twitter"></i> <span>@Leonard</span> I am so happy because I found this magazine, and it just made Vizeweasier. Thanks for sharing</p>
                                </div>
                            </div>

                            <!-- Single Twitter Slide -->
                            <div class="single--twitter-slide">
                                <!-- Single Twit -->
                                <div class="single-twit">
                                    <p><i class="fa fa-twitter"></i> <span>@Colorlib</span> I am so happy because I found this magazine, and it just made Vizeweasier. Thanks for sharing</p>
                                </div>
                                <!-- Single Twit -->
                                <div class="single-twit">
                                    <p><i class="fa fa-twitter"></i> <span>@Colorlib</span> I am so happy because I found this magazine, and it just made Vizeweasier. Thanks for sharing</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-6 col-xl-3">
                    <div class="footer-widget mb-70">
                        <h6 class="widget-title">Sport Videos</h6>

                        <!-- Single Blog Post -->
                        <div class="single-blog-post d-flex">
                            <div class="post-thumbnail">
                                <img src="front-end/img/bg-img/1.jpg" alt="">
                            </div>
                            <div class="post-content">
                                <a href="single-post.html" class="post-title">DC Shoes: gymkhana the</a>
                                <div class="post-meta d-flex justify-content-between">
                                    <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>
                                    <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 34</a>
                                    <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 84</a>
                                </div>
                            </div>
                        </div>

                        <!-- Single Blog Post -->
                        <div class="single-blog-post d-flex">
                            <div class="post-thumbnail">
                                <img src="front-end/img/bg-img/2.jpg" alt="">
                            </div>
                            <div class="post-content">
                                <a href="single-post.html" class="post-title">Sweet Yummy Chocolatea Tea</a>
                                <div class="post-meta d-flex justify-content-between">
                                    <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>
                                    <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 34</a>
                                    <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 84</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-6 col-xl-3">
                    <div class="footer-widget mb-70">
                        <h6 class="widget-title">Our Address</h6>
                        <!-- Contact Address -->
                        <div class="contact-address">
                            <p>Egypt, <br>Alex</p>
                            <p>Phone: 01275372663</p>
                            <p>Email: {{ $setting->email }}</p>
                        </div>
                        <!-- Footer Social Area -->
                        <div class="footer-social-area">
                            <a href="https://www.facebook.com/{{ $setting->facebook }}" class="facebook" target="_blank" rel="noopener noreferrer">
                                <i class="fa fa-facebook"></i>
                            </a>
                            <a href="https://www.instagram.com/{{ $setting->instagram }}" class="instagram" target="_blank" rel="noopener noreferrer">
                                <i class="fa fa-instagram"></i>
                            </a>
                            <a href="https://www.twitter.com/{{ $setting->twitter }}" class="twitter" target="_blank" rel="noopener noreferrer">
                                <i class="fa fa-twitter"></i>
                            </a>
                            <a href="https://www.youtube.com/channel/{{ $setting->youtube }}" class="linkedin" target="_blank" rel="noopener noreferrer">
                                <i class="fa fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <!-- Copywrite Area -->
    <div class="copywrite-area">
        <div class="container">
            <div class="row align-items-center">
                <!-- Copywrite Text -->
                <div class="col-12 col-sm-6">
                    <p class="copywrite-text"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                </div>
                <div class="col-12 col-sm-6">
                    <nav class="footer-nav">
                        <ul>
                            <li><a href="{{ route('home.index') }}">home</a></li>
                            <li><a href="{{ route('contact.page') }}">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- ##### Footer Area End ##### --> --}}
