<!-- Top Header Area -->

        <div class="info-bar">
            <div class="container">
                <div class="row gutter-10">
                    <div class="col col-sm contact-section">
                        <div class="date">
                            {{ $date }}
                        </div>
                    </div>

                    <div class="col-auto social-profiles order-md-3">
                        Facevook, Instagram, Tweeter
                    </div>

                     <!-- Login -->
                     <a href="{{ route('login') }}" class="login-btn"><i class="fa fa-user" aria-hidden="false"></i></a>

                    <div class="col-md-auto infobar-links order-md-2">
                        <button class="infobar-links-menu-toggle">My button</button>
                    </div>
                </div>

            </div>
        </div>







        <div class="back-to-top">
        <a href="#masthaed" title="Go to Top" ></a>
        </div>

    <a href="#content" class="skip-link screen-reader-text">Skip to content</a>

{{-- <div class="top-header-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-md-6">
                <!-- Breaking News Widget -->
                <div class="breaking-news-area d-flex align-items-center">
                    <div class="news-title">
                        <p>Breaking News:</p>
                    </div>
                    <div id="breakingNewsTicker" class="ticker">
                        <ul>
                            @foreach($posts->sortByDesc('created_at')->take(10) as $post)
                                <li>
                                    <a href="{{ route('post.page', ['id'=>$post->id, 'slug'=>$post->slug]) }}">
                                        {{ $post->title }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="top-meta-data d-flex align-items-center justify-content-end">
                    <!-- Top Search Area -->
                    <div class="top-search-area">
                        <form action="{{ route('search') }}" method="get">
                            <input
                                type="search"
                                name="search"
                                id="topSearch"
                                value="{{ request()->search }}"
                                placeholder="Search...">
                            <button type="submit" class="btn">
                                <i class="fa fa-search" aria-hidden="true"></i>
                            </button>
                        </form>
                    </div>
                    <!-- Login -->
                    <a href="{{ route('login') }}" class="login-btn"><i class="fa fa-user" aria-hidden="false"></i></a>
                </div>
            </div>
        </div>
    </div>
</div> --}}
