<!-- Navbar Area -->

<nav class="navbar navbar-expand-lg d-block">
    <div class="navbar-head">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <div class="site-branding navbar-brand">
                        <h1 class="site-title">My Blog</h1>
                        <p class="site-description">Welcome to our web blog website</p>
                    </div>
                </div>

                <div class="col-lg-8 navbar-ad-section">
                    <a href="" class="newscard-ad-728-90">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSfg22-4mMRcw2Czveup_uxxo1Rh82eue8THA&usqp=CAU" alt="" class="img-fluid">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="navigation-bar">
        <div class="navigation-bar-top">
            <div class="container">
                <button class="navbar-toggler menu-toggle" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label=""></button>
                <span class="search-toggle"></span>
            </div>
            <div class="search-bar">
                <div class="container">
                    <div class="search-block off">
                        <form action="{{ route('search') }}" method="get" class="search-form">
                            <div class="input-group">
                                <input
                                class="form-control s"
                                type="search"
                                name="search"
                                id="topSearch"
                                value="{{ request()->search }}"
                                placeholder="Search...">
                           <div class="input-group-prepend">
                            <button type="submit" class="btn btn-theme">
                                <i class="fa fa-search" aria-hidden="true"></i>
                            </button>
                            </div>
                           </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="navbar-main">
            <div class="container">
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div id="site-navigation" class="main-navigation" role="navigation">
                        <ul class="nav-menu navbar-nav d-lg-block">
                            <li id="menu-item-209" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-209">
                                <a href="/">
                                    Home
                                </a>
                            </li>
                            @foreach($categories as $category)
                            <li id="menu-item-209" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-209">
                                <a href="{{ route('category.page', ['id'=>$category->id, 'slug'=>$category->slug]) }}">
                                    {{ $category->name }}</a>
                            </li>
                            @endforeach



                            <li id="menu-item-140" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-140 dropdown-parent"><a href="#">"Support"</a>
                            <span class="dropdown-toggle">
                                <span class="dropdown-icon"></span>
                                <ul class="sub-menu">
                                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-142">
                                        <a href="">Forum</a>
                                    </li>
                                </ul>
                            </span>
                            </li>

                        </ul>
                    </div>
                </div>

                <div class="nav-search">
                    <span class="search-toggle"></span>
                </div>





            </div>
        </div>
    </div>
</nav>
{{-- <div class="vizew-main-menu" id="sticker">
    <div class="classy-nav-container breakpoint-off">
        <div class="container">

            <!-- Menu -->
            <nav class="classy-navbar justify-content-between" id="vizewNav">

                <!-- Nav brand -->
                <a href="{{ route('home') }}" class="nav-brand">
                    @foreach ($settings as $setting)
                        <img src="{{ URL::asset(Storage::url('images/logo/' . $setting->logo))}}" alt="{{$setting->name}}">
                    @endforeach
                </a>

                <!-- Navbar Toggler -->
                <div class="classy-navbar-toggler">
                    <span class="navbarToggler">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </div>

                <div class="classy-menu">

                    <!-- Close Button -->
                    <div class="classycloseIcon">
                        <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                    </div>

                    <!-- Nav Start -->
                    <div class="classynav">
                        <ul>
                            <li>
                                <a href="{{ route('home.index') }}">Home</a>
                            </li>
                            @foreach ($categories as $category)
                                <li>
                                    <a href="{{ route('category.page', ['id'=>$category->id, 'slug'=>$category->slug]) }}">
                                        {{ $category->name }}
                                    </a>
                                    @if(count($category->childrenRecursive))
                                        @include('layouts.front-end.subCategory',['subcategories' => $category->childrenRecursive])
                                    @endif
                                </li>
                            @endforeach
                            <li>
                                <a href="{{ route('contact.page') }}">contact</a>
                            </li>
                        </ul>
                    </div>
                    <!-- Nav End -->
                </div>
            </nav>
        </div>
    </div>
</div> --}}
