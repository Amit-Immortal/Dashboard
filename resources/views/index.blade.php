<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Immortal - Dashboard</title>
    <style>
    @import url('https://fonts.googleapis.com/css?family=Raleway:400,700');

    body {
        background: #c0c0c0;
        font-family: Raleway, sans-serif;
        color: #666;
    }

    .login {
        margin: 20px auto;
        padding: 40px 50px;
        max-width: 300px;
        border-radius: 5px;
        background: #fff;
        box-shadow: 1px 1px 1px #666;
    }

    .login input {
        width: 100%;
        display: block;
        box-sizing: border-box;
        margin: 10px 0;
        padding: 14px 12px;
        font-size: 16px;
        border-radius: 2px;
        font-family: Raleway, sans-serif;
    }

    .login input[type=text],
    .login input[type=password] {
        border: 1px solid #c0c0c0;
        transition: .2s;
    }

    .login input[type=text]:hover {
        border-color: #4C3BCF;
        outline: none;
        transition: all .2s ease-in-out;
    }

    .login input[type=submit] {
        border: none;
        background: #4B70F5;
        color: white;
        font-weight: bold;
        transition: 0.2s;
        margin: 20px 0px;
    }

    .login input[type=submit]:hover {
        background: #4C3BCF;
    }

    .login h2 {
        margin: 20px 0 0;
        color: #4B70F5;
        font-size: 28px;
    }

   

    .login p {
        margin-bottom: 40px;
    }

    .links {
        display: table;
        width: 100%;
        box-sizing: border-box;
        border-top: 1px solid #c0c0c0;
        margin-bottom: 10px;
    }

    .links a {
        display: table-cell;
        padding-top: 10px;
    }

    .links a:first-child {
        text-align: left;
    }

    .links a:last-child {
        text-align: right;
    }

    .login h2,
    .login p,
    .login a {
        text-align: center;
    }

    .login a {
        text-decoration: none;
        font-size: .8em;
    }

    .login a:visited {
        color: inherit;
    }

    .login a:hover {
        text-decoration: underline;
    }
    </style>
</head>

<body>
    <form class="login" method="POST" id="form_submit">
        @csrf
        <h2>Welcome, User!</h2>
        <h3 style="text-align: center; font-size: 30px;">Login</h3>
        <input type="email" placeholder="User" name="email" />
        <input type="password" placeholder="Password" name="password" />
        <input type="submit" value="Log In" />
        <div class="links">
            <a href="#">Forgot password</a>
            <a href="#">Register</a>
        </div>
    </form>
</body>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
$(document).ready(function() {
    $('#form_submit').on('submit', function(e) {
        e.preventDefault();

        var formData = $(this).serialize();

        $.ajax({
            url: '{{ url("/login") }}',
            method: 'POST',
            data: formData,
            success: function(response) {
                if (response.code == 0) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: response.message,
                        showConfirmButton: true
                    });
                } else {
                    window.location.href = '{{ url("/dashboard") }}';
                }
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText);
            }
        });
    });
});
</script>

</html>