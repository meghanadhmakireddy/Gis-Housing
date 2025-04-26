<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome | Housing MIS</title>

    @vite('resources/css/app.css')

    <style>
        .gradient-bg {
            background: linear-gradient(135deg,black 0%, #d9e4ff 100%);
            
        }

        main {
            transition: transform 0.5s ease, box-shadow 0.4s ease;
            border-radius: 10px;
        }

        main:hover {
            transform: translateY(-15px);
            box-shadow: 0 15px 25px rgba(0, 9, 5, 14);
        }


        .custom-heading {
            font-size: 2.5rem;
            font-weight: 800;
            color: #1D4ED8;
            margin-bottom: 0.5rem;
            margin-left:38px;
        }

        .custom-subheading {
            font-size: 1.25rem;
            color:bisque;
            margin-bottom: 1.5rem;
            margin-left:7px;
            font-family: italian
        }

        .login-btn, .register-btn {
            padding: 6px 10px;
            border-radius: 8px;
             /* margin: 7px; */
            font-weight: 600;
            color: white;
            border: none;
            transition: background-color 0.3s ease;
        }

        .login-btn {
            background-color: #3B82F6;
        }

        .login-btn:hover {
            background-color:brown;
        }

        .register-btn {
            background-color: #F59E0B;
        }

        .register-btn:hover {
            background-color:brown;
        }

        .top-nav {
            margin-top: 2rem;
        }

        .action-buttons {
            margin-top: 1rem;
        }

        .side-img {
            max-width: 200px;
            height: auto;
           /* opacity: 0.8; */
        }

     
    </style>
</head>
<body class="bg-[#fdfdfc] dark:bg-[#0a0a0a] text-[#1b1b18] flex items-center justify-center min-h-screen flex-col px-6 py-8 gradient-bg">

    <h1 style="color: bisque; font-family: algerian; font-size: 25px; margin-bottom: -70px">M'rise Housing - MIS</h1>

    <header class="w-full max-w-5xl text-sm top-nav flex justify-end">
        @if (Route::has('login'))
            <nav class="flex items-center gap-4">
                @auth
                    <button onclick="location.href='{{ url('/dashboard') }}'" class="login-btn">Dashboard</button>
                @else
                    <button onclick="location.href='{{ route('login') }}'" class="login-btn">Login</button>
                    @if (Route::has('register'))
                        <button onclick="location.href='{{ route('register') }}'" class="register-btn">Register</button>
                    @endif
                @endauth
            </nav>
        @endif
    </header>
    <div class="flex flex-wrapper items-center justify-center w-full max-w-7xl mt-6 gap-4">

        <!-- Left Image -->
        <!-- <img src="{{ asset('images/screenshot (136).png') }}" alt="Left Map" class="side-img" style="margin-right: 40px"> -->

        <!-- Main Content -->
        <main class="text-center max-w-xl w-full bg-white/90 dark:bg-gray-900/70 backdrop-blur-sm shadow-xl p-8 rounded-xl">
            <img src="{{ asset('images/logo.webp') }}" alt="Logo" style="width: 100%; height: auto; border-radius: 12px;">

            <h1 class="custom-heading">Welcome to Housing MIS</h1>
            <p class="custom-subheading">
                A modern and efficient dashboard to manage M'Rise housing schemes with GIS integration and smart tools.
            </p>

            <div class="flex justify-center gap-4 action-buttons">
                @auth
                    <button onclick="location.href='{{ url('/dashboard') }}'" class="login-btn">Go to Dashboard</button>
                @else
                    <button onclick="location.href='{{ route('login') }}'" class="login-btn">Login</button>
                    @if (Route::has('register'))
                        <button onclick="location.href='{{ route('register') }}'" class="register-btn">Register</button>
                    @endif
                @endauth
            </div>
        </main>

        <!-- Right Image -->
        <!-- <img src="{{ asset('images/screenshot (136).png') }}" alt="Right Map" class="side-img" style="margin-left: 3%"> -->
    </div>

</body>
</html>
