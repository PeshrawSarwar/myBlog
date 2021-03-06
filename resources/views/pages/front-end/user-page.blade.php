@extends('layouts.app')

@section('title', $user->name)

@section('content')
<!-- ##### Breadcrumb Area Start ##### -->
    <div class="vizew-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('home.index') }}">
                                    <i class="fa fa-home" aria-hidden="true"></i>
                                    Home
                                </a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">     {{ $user->name }}
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
 <!-- ##### Archive Grid Posts Area Start ##### -->



            <div class="col-12 col-lg-12">
                @include('pages.front-end.user.user-post')
            </div>





@endsection
