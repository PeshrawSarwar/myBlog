@extends('layouts.adminPanel')

@section('title', 'Dashboard')


@section('content')
<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->

        <div class="card card-widget widget-user">
            <div class="widget-user-header bg-info">
                <h3 class="widget-user-username">
                    {{ auth()->user()->name }}
                </h3>
                <h5 class="widget-user-desc">
                    {{ $profile->description }}
                </h5>
            </div>
            <div class="widget-user-image">
                <img class="img-circle elevation-2" src="{{ $profile->avatar_path }}" alt="">
            </div>
            <div class="card-footer">
                <div class="row"></div>
            </div>
        </div>

        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{ $admin }}</h3>
                <p>Admin</p>
              </div>
              <div class="icon">
                <i class="fas fa-user-shield"></i>
              </div>
              <a href="{{ route('admin.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{ $postAll->count() }}</h3>
                <p>Your Posts</p>
              </div>
              <div class="icon">
                <i class="fas fa-clone"></i>
              </div>
              <a href="{{ route('post.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box  bg-gradient-success">
              <div class="inner">
                <h3>{{  $posts  }}</h3>
                <p>All Posts</p>
              </div>
              <div class="icon">
                <i class="fas fa-clone"></i>
              </div>
              <a href="{{ route('post.index2') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{ $category }}</h3>

                <p>Categories</p>
              </div>
              <div class="icon">
                <i class="fas fa-directions"></i>
              </div>
              <a href="{{ route('category.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>{{ $tags }}</h3>

                <p>Tags</p>
              </div>
              <div class="icon">
                <i class="fas fa-tags"></i>
              </div>
              <a href="{{ route('tag.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-primary">
              <div class="inner">
                <h3>{{ $message }}</h3>

                <p>Messages</p>
              </div>
              <div class="icon">
                <i class="fas fa-envelope-open"></i>
              </div>
              <a href="{{ route('contact.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box  bg-gradient-warning">
              <div class="inner">
                <h3>{{ $comment }}</h3>

                <p>Comment</p>
              </div>
              <div class="icon">
                <i class="fas fa-comments"></i>

              </div>
              <a href="#" class="small-box-footer"> <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
    </div>
</section>
@endsection
