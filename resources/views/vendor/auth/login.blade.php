<!DOCTYPE html>
<html lang="ja">

<head>
    @include('vendor.inc.head')
</head>

<body>
    <div class="l-wrapper">
        <section id="page-login" class="page-login">
            <figure class="page-login__img-wrapper">
                <img src="{{ asset('backend/assets/images/login2.jpg') }}" alt="" class="page-login__img" />
            </figure>
            <div class="page-login__content">
                <div class="form-box">
                    <h2>Login</h2>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form method="POST" action="{{ route('vendor.login') }}">
                        @csrf

                        <div class="input-group">
                            <label for="email" class="form-label">{{ __('Username') }}</label>
                            <input type="email" id="email" class="form-control" name="email"
                                value="{{ old('email') }}" required autofocus autocomplete="username" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <div class="input-group">
                            <label for="password" class="form-label">{{ __('Password') }}</label>
                            <input type="password" id="password" class="form-control" name="password" required
                                autocomplete="current-password" />
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>

                        <div class="remember">
                            <label for="remember_me">
                                <input type="checkbox" id="remember_me" name="remember" />{{ __('Remember me') }}
                            </label>
                        </div>
                        <div class="input-group">
                            <button type="submit" class="form-control">{{ __('LOG IN') }}</button>
                        </div>
                        <div class="input">
                            @if (Route::has('admin.password.request'))
                                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                    href="{{ route('vendor.password.request') }}">
                                    {{ __('Forgot your password?') }}
                                </a>
                            @endif
                        </div>
                        <div class="input-group">
                            <p>Don't have an account? <a href="{{ route('vendor.register') }}">{{ __('SIGN UP') }}</a>
                            </p>
                        </div>
                    </form>
                    <h3>Login with social media</h3>
                    <ul class="social-list">
                        <li class="social-item">
                            <i class="fa-brands fa-facebook"></i>
                        </li>
                        <li class="social-item">
                            <i class="fa-brands fa-twitter"></i>
                        </li>
                        <li class="social-item">
                            <i class="fa-brands fa-instagram"></i>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
    </div>

    @include('vendor.inc.script')
</body>

</html>
