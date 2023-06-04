
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="{{ asset('css/LoginSignin.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.9/css/unicons.css">
    <script src="{{ asset('js/LoginSignin.js') }}"></script>
</head>

<body class="body">
@if ($success = Session::get('success') )
<div id="success-alert" class="alert alert-success text-center" style="position: absolute;width: 100%;" role="alert">
    {{ $success }}
</div>
@endif
    <div class="section">
        <div class="container">
            <div class="row full-height justify-content-center">
                <div class="col-12 text-center align-self-center py-5">
                    <div class="section pb-5 pt-5 pt-sm-2 text-center">
                        <h6 class="mb-0 pb-3"><span>Log In </span><span>Sign Up</span></h6>
                        <input class="checkbox" type="checkbox" id="reg-log" name="reg-log" {{ $checked = Session::get('checked') }}>
                        <label for="reg-log"></label>
                        <div class="card-3d-wrap mx-auto">
                            <div class="card-3d-wrapper">
                                <div class="card-front">
                                    <div class="center-wrap">
                                        <div class="section text-center">
                                            <h4 class="mb-4 pb-3 logsign">Log In</h4>
                                            <form method="POST" action="{{ route('login.customer') }}">
                                                @csrf
                                                <div class="form-group">
                                                    <input type="email" name="logemail" class="form-style"  value="{{ old('logemail') }}"  placeholder="Your Email" id="logemail" autocomplete="off" required >
                                                    <i class="input-icon uil uil-at"></i>
                                                </div>
                                                <div class="form-group mt-2">
                                                    <input type="password" name="logpass" class="form-style" placeholder="Your Password" id="logpass" autocomplete="off" required>
                                                    <i class="input-icon uil uil-lock-alt"></i>
                                                    @if ($errors->has('logpass'))
                                                    <span class="text-danger">{{ $errors->first('logpass') }}</span>
                                                    @endif
                                                </div>
                                                <!-- <a href="#" class="btn mt-4">submit</a> -->
                                                <button type="submit" class="btn mt-4">Đăng Nhập</button>
                                                <p class="mb-0 mt-4 text-center"><a href="#0" class="link">Forgot your password?</a></p>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-back">
                                    <div class="center-wrap">
                                        <div class="section text-center">
                                            <h4 class="mb-4 pb-3 logsign">Sign Up</h4>
                                            <form action="{{ route('signup.customer') }}" method="post">
                                                @csrf
                                                <div class="form-group">
                                                    <input type="text" name="signname" class="form-style" value="{{ old('signname') }}" placeholder="Your Full Name" id="signname" autocomplete="off" required>
                                                    <i class="input-icon uil uil-user"></i>
                                                </div>
                                                <div class="form-group mt-2">
                                                    <input type="email" name="signemail" class="form-style" value="{{ old('signemail') }}" placeholder="Your Email" id="signemail" autocomplete="off" required>
                                                    <i class="input-icon uil uil-at"></i>
                                                </div>
                                                <div class="form-group mt-2">
                                                    <input type="password" name="signpass" class="form-style" value="{{ old('signpass') }}" placeholder="Your Password" id="signpass" autocomplete="off" required>
                                                    <i class="input-icon uil uil-lock-alt"></i>
                                                    @if ($errors->has('signpass'))
                                                    <span class="text-danger">{{ $errors->first('signpass') }}</span>
                                                    @endif
                                                </div>
                                                <button type="submit" class="btn mt-4">Đăng ký</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>