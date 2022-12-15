<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="css/login.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
</head>

<body>
    <div class="login-box">
        <h2>Register</h2>
        <form action="/register" method="post">
            @csrf
            <div class="user-box">
                <input type="text" name="name" required="" class="" value="{{ old('name') }}">
                <label>Username</label>
            </div>
            @error('name')
                <div class="validasiError">{{ $message }}</div>
            @enderror
            <div class="user-box">
                <input type="text" name="email" required="" value="{{ old('email') }}">
                <label>Email Address</label>
            </div>
            @error('email')
                <div class="validasiError">{{ $message }}</div>
            @enderror
            <div class="user-box">
                <input type="password" name="password" required="" value="{{ old('password') }}">
                <label>Password</label>
            </div>
            @error('password')
                <div class="validasiError">{{ $message }}</div>
            @enderror
            <div class="d-flex justify-content-between">
                <div class="btnCustom">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <button type="submit">
                        Submit
                    </button>
                </div>
                <div class="btnCustom">
                    <a href="/login">
                        <i class="ri-arrow-go-back-line"></i>
                    </a>
                </div>
            </div>
        </form>
    </div>
</body>

</html>
