<style>
    body {
        /*background: url('img/image.jpg') no-repeat fixed center center;*/
        background: url('{{ asset('img/image.jpg') }}') no-repeat fixed center center;
        background-size: cover;
        font-family: Montserrat;
    }

    .logo {
        width: 213px;
        height: 36px;
        background: url('{{ asset('img/image1.png') }}') no-repeat;
        margin: 30px auto;
    }

    .login-block {
        width: 320px;
        padding: 20px;
        background: #fff;
        border-radius: 5px;
        border-top: 5px solid #ff656c;
        margin: 0 auto;
    }

    .login-block h1 {
        text-align: center;
        color: #000;
        font-size: 18px;
        text-transform: uppercase;
        margin-top: 0;
        margin-bottom: 20px;
    }

    .login-block input {
        width: 100%;
        height: 42px;
        box-sizing: border-box;
        border-radius: 5px;
        border: 1px solid #ccc;
        margin-bottom: 20px;
        font-size: 14px;
        font-family: Montserrat;
        padding: 0 20px 0 50px;
        outline: none;
    }

    .login-block input#username {
        background: #fff url('{{ asset('img/image2.png') }}') 20px top no-repeat;
        background-size: 16px 80px;
    }

    .login-block input#username:focus {
        background: #fff url('{{ asset('img/image3.png') }}') 20px bottom no-repeat;
        background-size: 16px 80px;
    }

    .login-block input#password {
        background: #fff url('{{ asset('img/image4.png') }}') 20px top no-repeat;
        background-size: 16px 80px;
    }

    .login-block input#password:focus {
        background: #fff url('{{ asset('img/image5.png') }}') 20px bottom no-repeat;
        background-size: 16px 80px;
    }

    .login-block input:active, .login-block input:focus {
        border: 1px solid #ff656c;
    }

    .login-block button {
        width: 100%;
        height: 40px;
        background: #ff656c;
        box-sizing: border-box;
        border-radius: 5px;
        border: 1px solid #e15960;
        color: #fff;
        font-weight: bold;
        text-transform: uppercase;
        font-size: 14px;
        font-family: Montserrat;
        outline: none;
        cursor: pointer;
    }

    .login-block button:hover {
        background: #ff7b81;
    }

</style>
<link href="{{ asset('css/font.css') }}" rel="stylesheet" />
<div class="logo"></div>
<div class="login-block">
    <h1>Login</h1>
    <form action="{{route('login.submit')}}" method="post">
        {{ csrf_field() }}
    <input type="text" value="" placeholder="Username" name="username" id="username" />
    <input type="password" value="" placeholder="Password" name="password" id="password" />
    <button type="submit">Login</button>
    </form>
{{--    <a href="{{route('user.signup')}}"><button >Sign Up</button></a>--}}
</div>