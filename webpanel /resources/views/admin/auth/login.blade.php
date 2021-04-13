@extends('admin.layout.auth')
@section('style')
<link rel="stylesheet" type="text/css" href="../css/login.css">
<link rel="stylesheet" type="text/css" href="../css/tabs.css">
@endsection
@section('content')
<section class="hero is-black is-fullheight">
    <div class="hero-body">
        <div class="container has-text-centered">
            <div class="column is-4 is-offset-4">
                <h3 class="title has-text-white">Login</h3>
                <hr class="login-hr">
                <div class="box">
                    <form id="signup-1" method="POST" action="{{ url('/admin/login') }}">
                        {{ csrf_field() }}
                        <div class="field">
                            <div class="control">
                                <input class="input is-large" name="email" type="email" placeholder="Your Email"
                                    autofocus="">
                            </div>
                            @if ($errors->has('email'))
                            <p class="help is-danger">{{ $errors->first('email') }}</p>
                            @endif
                        </div>

                        <div class="field">
                            <div class="control">
                                <input class="input is-large" name="password" type="password" placeholder="Your Password">
                            </div>
                            @if ($errors->has('password'))
                            <p class="help is-danger">{{ $errors->first('password') }}</p>
                            @endif
                            
                        </div>
                        <div class="field">
                            <div class="control">
                        <select class="input is-large" name="login_type" id="">
                            <option value="admin">Admin</option>
                            <option value="dispatcher">Dispatcher</option>
                            <option value="account">Account</option>
                            <option value="dispute">Dispute</option>
                        </select>
                            </div>
                        </div>
                        <button type="submit" class="button is-block is-info is-large is-fullwidth">Login <i
                                class="fa fa-sign-in" aria-hidden="true"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('scripts')
<script>
    document.querySelectorAll("#nav li").forEach(function (navEl) {
        navEl.onclick = function () {
            toggleTab(this.id, this.dataset.target);
        }
    });

    function toggleTab(selectedNav, targetId) {
        var navEls = document.querySelectorAll("#nav li");

        navEls.forEach(function (navEl) {
            if (navEl.id == selectedNav) {
                navEl.classList.add("is-active");
            } else {
                if (navEl.classList.contains("is-active")) {
                    navEl.classList.remove("is-active");
                }
            }
        });

        var tabs = document.querySelectorAll(".tab-pane");

        tabs.forEach(function (tab) {
            if (tab.id == targetId) {
                tab.style.display = "block";
            } else {
                tab.style.display = "none";
            }
        });
    }

</script>
@endsection
