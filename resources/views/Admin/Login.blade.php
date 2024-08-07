<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Login - SB Admin</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header">
                        <h3 class="text-center font-weight-light my-2">Login</h3>
                    </div>
                    <div class="card-body">
                        <form id="login_form">

                            <div class="form-floating mb-3">
                                <input class="form-control" name="email" type="email" />
                                <label>Email address</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" name="password" type="password" />
                                <label>Password</label>
                            </div>

                            <div class="form-floating mb-3">
                                <div class="form-floating mb-3">
                                    <div id="error" style="height: 3rem;" role="alert"></div>
                                </div>
                            </div>

                            <a class="btn btn-primary" onclick="Login()">Login</a>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        function Login() {
            $.get("{{ route('LoginUser') }}", $("#login_form").serialize(),
                function(data) {

                    // console.log(data);

                    if (data.success) {
                        window.location.href = "Dashboard";
                    } else {
                        swal("Error!", data.message, "error");
                    }
                }
            );
        }
    </script>


</body>

</html>
