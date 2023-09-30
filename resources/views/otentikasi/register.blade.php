<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        /* Gaya CSS untuk form registrasi */
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            justify-content: center;
            align-items: center;
        }

        .container {
            max-width: 600px;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .register-header {
            font-size: 24px;
            font-weight: bold;
            text-align: center;
            margin-bottom: 20px;
        }

        .register-container p {
            margin: 0;
            margin-bottom: 10px;
        }

        .register-container input {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
            max-width: 400px;
        }
        .button{
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
            max-width: 400px;
        }

        .register-container button {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .register-container button:hover {
            background-color: #0056b3;
        }

        .danger {
            color: #dc3545;
            font-size: 14px;
            text-align: center;
            margin-top: 10px;
        }
    </style>
</head>
<body>
<div class="container">
    <h2 class="register-header">Register</h2>
    <form method="POST" class="register-container" action="{{ route('register') }}">
        @csrf
        @if(session('message'))
            <p class="danger">{{ session('message') }}</p>
        @endif
        <p>
            <input type="text" placeholder="Name" name="name" required>
        </p>
        <p>
            <input type="email" placeholder="Email" name="email" required>
        </p>
        <p>
            <input type="password" placeholder="Password" name="password" required>
        </p>
        <p>
            <input type="password" placeholder="Confirm Password" name="password_confirmation" required>
        </p>
        <p>
            <input type="text" placeholder="Nama Lengkap" name="nama_lengkap" required>
        </p>
        <p>
            <input type="number" placeholder="Nomor KTP" name="no_ktp" required>
        </p>
        <p>
            <input type="number" placeholder="Nomor BPJS" name="no_bpjs" required>
        </p>
        <p>
            <input type="number" placeholder="NPWP" name="npwp" required>
        </p>
        <p>
            <input type="text" placeholder="Pekerjaan" name="pekerjaan" required>
        </p>
        <p>
            <input type="number" placeholder="Nomor HP" name="nomor_hp" required>
        </p>
        <p>
            <button class="button" type="submit">Register</button>
        </p>
    </form>
</div>
</body>
</html>
