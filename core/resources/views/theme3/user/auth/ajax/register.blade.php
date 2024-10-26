
<div class="d-none" id="currentPath">register_page</div>

<section class="section px-4 pt-120 pb-120">

    <div class="row justify-content-center">
        <div class="col">
            <div class="login-area">


                <form class="action-form mt-50 loginForm" action="{{ route('user.register') }}" method="post">

                    <span style="color: #f0b90b; margin-bottom: 15px; font-size: 19px;"><span style="margin-left: 33%;">Sign Up <br></span><br/>

                    <span style="color: #f0b90b; margin-bottom: 15px; font-size: 19px;"><span style="margin-left: 20%;">to your account <br> </span><br/>
                    @csrf
                    <br>
                    <div class="form-group boxed">
                        <div class="input-wrapper">
                            <input type="text" name="username" id="username" placeholder="Username" class="form-control text-warning" value="{{ old('username') }}">
                            <small class="usernameCheck text-danger"></small>
                        </div>
                    </div><!-- form-group end -->


                    <div class="form-group boxed">
                        <div class="input-wrapper">
                            <input type="email" name="email" id="email" placeholder="Email Address" class="form-control text-warning" value="{{ old('email') }}">
                            <small class="emailCheck text-danger"></small>
                        </div>
                    </div><!-- form-group end -->


                    <div class="form-group boxed">
                        <div class="input-wrapper">
                            <input type="password" name="password" placeholder="Password"
                                class="form-control text-warning" value="{{ old('password') }}">
                        </div>
                    </div><!-- form-group end -->


                    <div class="form-group boxed">
                        <div class="input-wrapper">
                            <input type="password" name="password_confirmation" placeholder="Confirm Password"
                                class="form-control text-warning" value="{{ old('password_confirmation') }}">
                        </div>
                    </div><!-- form-group end -->

                        <input type="hidden" name="ref_by" value="{{ request()->reffer }}">

                    {{-- @if (request()->reffer) --}}
                    <div class="form-group boxed">
                        <div class="input-wrapper">
                            <input type="text" name="reffered_by" id="reffer" placeholder="Reffer Code (Optional)" class="form-control text-warning" value="{{ request()->reffer }}">
                            <small class="refferCheck text-danger"></small>
                        </div>
                    </div><!-- form-group end -->
                    {{-- @endif --}}


                    <button type="submit" class="btn login-btn w-100 mt-3 py-1">Sign Up</button><br/>
                    {{-- <a class="btn sign-up-btn w-100 mt-1 py-1" href="{{route('user.login')}}">Login</a> --}}<br>
                    <p><span style="color: #838383; margin-top: 10px;">Already registered? <font color="#f0b90b" id="loginPageBtn">Log in</font></span></p>
                </form>
            </div>
        </div>
    </div>

</section>

<!-- jquery -->
<script src="{{ asset('asset/theme3/frontend/js/jquery.min.js') }}"></script>

<script>
    // username check
    $(document).on('focusout', '#username', function (e) {
        e.preventDefault();
        let username = $(this).val();
        $.ajax({
            type: "POST",
            url: "{{route('user.username.exist')}}",
            data: {
                _token:"{{ csrf_token() }}",
                username:username
            },
            success: function (res) {
                console.log(res);
                if (res.cls == 'success') {
                    $('.usernameCheck').html('username already exist!');
                } else {
                    $('.usernameCheck').html('');
                }
            }
        });
    });

    // email check
    $(document).on('focusout', '#email', function (e) {
        e.preventDefault();
        let email = $(this).val();
        $.ajax({
            type: "POST",
            url: "{{route('user.email.exist')}}",
            data: {
                _token:"{{ csrf_token() }}",
                email:email
            },
            success: function (res) {
                console.log(res);
                if (res.cls == 'success') {
                    $('.emailCheck').html('email already exist!');
                } else {
                    $('.emailCheck').html('');
                }
            }
        });
    });

    // reffer check
    $(document).on('keyup', '#reffer', function (e) {
        e.preventDefault();
        let reffer = $(this).val();
        if (!reffer) {
            return $('.refferCheck').html('');
        }
        $.ajax({
            type: "POST",
            url: "{{route('user.reffer.exist')}}",
            data: {
                _token:"{{ csrf_token() }}",
                reffer:reffer
            },
            success: function (res) {
                console.log(res);
                if (res.cls == 'success') {
                    $('.refferCheck').removeClass('text-danger').addClass('text-success');
                    $('.refferCheck').html(res.msg);
                } else {
                    $('.refferCheck').removeClass('text-success').addClass('text-danger');
                    $('.refferCheck').html(res.msg);
                }
            }
        });
    });
</script>

