{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Final Project</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: url('plnet ud 1.png') no-repeat;
            background-size: cover;
            background-position: center;
        }

        .input_box{
            width: 420px;
            background: transparent;
            text-align: center;
            color: white;

        }

        .input_box h1{
            font-size: 75px;
            text-align: center;
            background-image: linear-gradient(to right, #36D9A8, #4CC1D0);
            -webkit-background-clip: text;
            color: transparent;
            letter-spacing: 5px;
        

        }

        .input_box .input-box{
            width: 100%;
            height: 50px;
            margin: 20px 0px;
        }

        .input-box input{
            width: 100%;
            height: 100%;
            background: transparent;
            border: none;
            outline: none;
            border: 2px solid rgb(255, 255, 255, 2);
            border-radius: 40px;
            padding: 20px 45px 20px 20px;
            color: white;
        }

        .input-box input::placeholder{
            color: white;
        }

        .input-box i{
            position: absolute;
            right: 20px;
            top: 50%;
            transform: translateY(-50%);
            font-size: 20px;
        }

        .input_box .btn{
            display: inline-block;
            width: 50%;
            height: 45px;
            background: #7F2EAA;
            border: none;
            outline: none;
            border-radius: 40px;
            box-shadow: 0 0 10px rgba(0, 0, 0, .1);
            cursor: pointer;
            color: white;
            font-weight: 600;
            margin-top: 30px;
            font-size: 25px;
        }

        .input_box .register-link{
            font-size: 14.5px;
            text-align: center;
            margin: 20px 0 15px;

        }

        .register-link p a{
            color: white;
            text-decoration: none;
            font-weight: 600;
        }

        .register-link p a:hover {
            text-decoration: underline;
        }

        .input_box h3{
            margin-top: 40px;
            margin-right: 250px;
            align-items: center;
            font-size: 25px;
        }
    </style>

</head>
<body>
    <!-- ----------------------------Login Page---------------------------- -->
    <div class="input_box">
        <form action="">
            <h1>Login</h1>

            <h3>Team Name</h3>
            <div class="input-box">
                <input type="text" placeholder="Enter team name" required>
            </div>

            <h3>Password</h3>
            <div class="input-box">
                <input type="password" placeholder="Enter password" required>
            </div>

            <button type="submit" class="btn" onclick="func()">Login</button>

            <div class="register-link">
                <p>Don't have an account? <a href="4Team_Register.html">Register</a></p>
            </div>
        </form>
    </div>
    <!-- ----------------------------------------------------------------------- -->


    <!-- ----------------------------Java Script---------------------------- -->
    <script>
        function redirectToAnotherPage() {
            var teamName = document.getElementById("teamName").value;
            var password = document.getElementById("password").value;

            if (teamName !== "" && password !== "") {
                window.location.href = "2Dashboard.html";
            } else {
                alert("Please fill in both Team Name and Password.");
            }
        }
    </script>
    <!-- ----------------------------------------------------------------------- -->


</body>
</html>