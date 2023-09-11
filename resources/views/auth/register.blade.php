<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>تسجيل مستخدم</title>
    <link href="{{ asset('siteasset/logo.png') }}" rel="icon">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;600;700;900&family=Dancing+Script:wght@400;500;600;700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            transition: all .3s;
            user-select: none;
            direction: rtl;
            font-family: 'Cairo', sans-serif !important;

        }


        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: #D19C97;
        }


        .mytra-login {
            width: 800px;
            height: auto;
            display: flex;

        }

        .mytra-login form {
            background: #fff;
            width: 50%;
            padding: 25px 50px;
        }

        .mytra-login .poster {
            width: 50%;
            background: url('https://i.pinimg.com/564x/00/09/47/000947ba4d456a1c7a91da24a8cc4d1e.jpg');
            background-size: cover;
            background-position: 33%;
        }


        .mytra-login form img {
            width: 80px;
        }

        .mytra-login form .heading {
            font-size: 1.4em;
            margin-top: 15px;
        }

        .mytra-login form p {
            font-size: .95em;
            color: #444;
            margin-bottom: 40px;
        }

        .mytra-login form label {
            display: block;
            margin-top: 20px;
            color: #444;
        }

        .mytra-login form input {
            border: none;
            outline: none;
            border-bottom: 1px solid #000;
            width: 100%;
            padding: 10px 0px;
        }



        .mytra-login form .forgot {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 20px;
            color: #444;
            font-size: .85em;
        }

        .mytra-login form .forgot label {
            margin-top: 0;
            font-size: 1em;
        }

        .mytra-login form .forgot input {
            width: auto;
        }


        .mytra-login form .forgot a {
            color: #E72744;
            cursor: pointer;
        }


        .mytra-login form button {
            border: none;
            outline: none;
            margin-top: 40px;
            padding: 12px 0px;
            border-radius: 5px;
            cursor: pointer;
        }

        .mytra-login form .login {
            width: 60%;
            color: #fff;
            background: #E72744;
        }

        .mytra-login form .login:hover {
            background: #fff;
            color: #E72744;
            box-shadow: 0 0 10px #ccc;
        }

        .mytra-login form .signup {
            width: 38.5%;
            color: #E72744;
            background: #fff;
            box-shadow: 0 0 10px #ccc;
        }
        .mytra-login form .signup a{
            text-decoration: none;
            color: #e72744;
        }
        .mytra-login form .signup:hover {
            background: #e72744;
        }
        .mytra-login form .signup a:hover {
            color: #fff;
        }


        @media (min-width: 0px) and (max-width: 800px) {


            .mytra-login {
                display: block;
                width: 350px;
                height: auto;
            }

            .mytra-login form {
                width: 100%;
                padding: 40px 40px;
            }

            .mytra-login .poster {
                display: none;
            }

            .mytra-login form .signup {
                width: 38%;
            }

        }
    </style>
</head>

<body>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <!-- jQuery Ripples JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.ripples/0.5.3/jquery.ripples.min.js"></script>


    <div class="mytra-login">

        <form method="POST" action="{{ route('register') }}">
            @csrf
            <a href="{{ route('home') }}"><img src="{{ asset('siteasset/logo.png') }}"></a>
            {{-- <h1 class="heading">
                مرحبًا بكم في موقع تنظيم حفلات الزفاف
            </h1>
            <p>يرجى تسجيل الدخول إلى حسابك</p> --}}

            <!-- name Address -->
            <div>

                <x-input-label for="name" :value="__('الاسم كاملاً')" />
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"
                    required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Email Address -->
            <div>

                <x-input-label for="email" :value="__('الإيميل')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                    required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('كلمة المرور')" />

                <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="current-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password-->
            <div class="mt-4">
                <x-input-label for="password_confirmation" :value="__('تأكيد كلمة المرور')" />

                <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required/>

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>


            <button class="login">تسجيل</button>
            <button class="signup"><a  href="{{ route('login') }}">لدي حساب بالفعل</a></button>
        </form>

        <div class="poster">
        </div>
    </div>
    <!---mytra-login---->

    <script>
        $(document).ready(function() {
            $("body").ripples({
                resolution: 512,
                dropRadius: 20,
                perturbance: 0.04,
            });

            $(".poster").ripples({
                resolution: 512,
                dropRadius: 20,
                perturbance: 0.04,
            });
        });
    </script>

</body>

</html>


