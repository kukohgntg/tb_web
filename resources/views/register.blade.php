<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Rental Buku | Register</title>
    <style>
        body {
            background-color: #f8f9fa;
        }

        .main {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            /* Tambahkan ini */
        }

        .register-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            position: relative;
            /* Tambahkan ini */
        }

        .alert {
            position: absolute;
            top: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 400px;
            margin: auto;
            z-index: 1;
        }

        .register-box {
            width: 400px;
            border: solid 1px #ced4da;
            border-radius: 8px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-top: 80px;
            /* Sesuaikan nilai margin sesuai kebutuhan */
        }

        form div {
            margin-bottom: 15px;
        }

        form label {
            font-weight: bold;
        }

        form textarea {
            resize: vertical;
        }

        form button {
            background-color: #007bff;
            color: #fff;
            transition: background-color 0.3s ease;
        }

        form button:hover {
            background-color: #0056b3;
        }

        .text-center a {
            color: #007bff;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .text-center a:hover {
            color: #0056b3;
        }
    </style>
</head>

<body>
    <div class="main">
        <div class="register-container">
            @if ($errors->any() || session('status'))
                <div class="alert alert-danger">
                    @if ($errors->any())
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif
                    @if (session('status'))
                        {{ session('message') }}
                    @endif
                </div>
            @endif

            <div class="register-box">
                <form action="" method="post">
                    @csrf
                    <div>
                        <label for="username" class="form-label">Username</label>
                        <input type="text" name="username" id="username" class="form-control" required>
                    </div>
                    <div>
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" id="password" class="form-control" required>
                    </div>
                    <div>
                        <label for="phone" class="form-label">Phone</label>
                        <input type="text" name="phone" id="phone" class="form-control" required>
                    </div>
                    <div>
                        <label for="address" class="form-label">Address</label>
                        <textarea name="address" id="address" cols="" rows="5" class="form-control" required></textarea>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary form-control">Register</button>
                    </div>
                    <div class="text-center">
                        Have an account? <a href="login">Login</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
