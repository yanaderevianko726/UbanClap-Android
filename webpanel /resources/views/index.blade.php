@extends('user.layout.app')

@section('content')
    <section class="hero is-info is-fullheight">
        <div class="hero-head">
            <nav class="navbar">
                <div class="container">
                    <div class="navbar-brand">
                        <a class="navbar-item" href="../">
                            <img src="{{config('constants.site_logo')}}">
                        </a>
                        <span class="navbar-burger burger" data-target="navbarMenu">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                    </div>
                    <div id="navbarMenu" class="navbar-menu">
                        <div class="navbar-end">
                            {{-- <span class="navbar-item">
                                <a class="button is-white is-outlined" href="{{url('login')}}">
                                    <span class="icon">
                                        <i class="fa fa-home"></i>
                                    </span>
                                    <span>User</span>
                                </a>
                            </span>
                            <span class="navbar-item">
                                <a class="button is-white is-outlined" href="{{ url('/provider/login') }}">
                                    <span class="icon">
                                        <i class="fa fa-superpowers"></i>
                                    </span>
                                    <span>Partner</span>
                                </a>
                            </span> --}}
                        </div>
                    </div>
                </div>
            </nav>
            </div>

            <div class="hero-body">
                <div class="container has-text-centered">
                    <div class="columns  is-3">
                        <div class="column is-8">

                        </div>
                        <div class="column box">
                            <div class="level">
                                    <div class="column left">
                                        <img src="{{asset('asset/img/ride-form-icon.png')}}">
                                    </div>
                                    <div class="right">
                                        <a href="{{url('register')}}">
                                            <h3>Get a @lang('admin.service.home')</h3>
                                            <h5>SIGN UP <i class="fa fa-chevron-right"></i></h5>
                                        </a>
                                    </div>
                                    
                                    <div class="column left">
                                        <img src="{{asset('asset/img/ride-form-icon.png')}}">
                                    </div>
                                    <div class="right">
                                        <a href="{{url('/provider/register')}}">
                                            <h3>Provide a @lang('admin.service.home')</h3>
                                            <h5>SIGN UP <i class="fa fa-chevron-right"></i></h5>
                                        </a>
                                    </div>
                            </div>
                                <p class="note-or">Or <a href="{{url('/provider/login')}}">sign in</a> with your @lang('admin.provider') account.</p>
                            </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    </section>
@endsection
