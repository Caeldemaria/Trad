@extends(template().'layout.auth')



@section('content')
    @push('seo')
        <meta name='description' content="{{ @$general->seo_description }}">
    @endpush
 <span style="color: #FFFFFF; margin-bottom: 10px; font-size: 19px;"><span style="margin-left: 20%;">Login your account</span><br/>
                <form class="action-form mt-50 loginForm" id="loginForm" action="{{ route('user.login') }}" method="post">
                    @csrf

                    {{-- <div class="form-group boxed">
                        <div class="input-wrapper">
                            <input type="email" name="email" placeholder="@lang('enter email address')"
                                class="form-control text-warning" value="{{ old('email') }}">
                        </div>
                    </div><!-- form-group end --> --}}
                    
                    <span style="color: #f0b90b; margin-bottom: 10px; font-size: 19px;"><span style="margin-left: 10%;">aftar login you can Trade</span><br/>
                    <br>
<p><font color="#f0b90b" id="registerPageBtn">Username</font></p>
                    <div class="form-group boxed">
                        <div class="input-wrapper">
                            <input type="text" name="username" placeholder="@lang('Username')"
                                class="form-control text-warning" value="{{ old('username') }}">
                        </div>
                    </div><!-- form-group end -->

<p><font color="#f0b90b" id="registerPageBtn">Password</font></p>
                    <div class="form-group boxed">
                        <div class="input-wrapper">
                            {{-- <label class="label">@lang('Password')</label> --}}
                            <input type="password" name="password" placeholder="@lang('Password')"
                                class="form-control text-warning" value="{{ old('password') }}">
                        </div>
                    </div><!-- form-group end -->
                    
                    

                    <button type="submit" class="btn login-btn w-100 mt-3 py-1 loginSubmitBtn">Login</button><br/>
                    {{-- <a class="btn sign-up-btn w-100 mt-1 py-1" href="{{route('user.register')}}">Sign Up</a> --}}
                    <br>
                     <p><span style="color: #838383; margin-top: 10px;">Not a member? <font color="#f0b90b" id="registerPageBtn">Sign Up</font></span></p>
                </form>
            </div>
        </div>
    </div>

</section>
@endsection

@push('script')
    <script>
        "use strict";

        function submitUserForm() {
            var response = grecaptcha.getResponse();
            if (response.length == 0) {
                document.getElementById('g-recaptcha-error').innerHTML =
                    "<span class='text-danger'>@changeLang('Captcha field is required.')</span>";
                return false;
            }
            return true;
        }

        function verifyCaptcha() {
            document.getElementById('g-recaptcha-error').innerHTML = '';
        }
    </script>
@endpush
