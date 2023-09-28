<html>
<head>
    <link rel="stylesheet" href={{ asset('css/style.css') }}>
	<title>Login</title>
    <style>
        .container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.login {
    max-width: 400px;
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.login-header {
    font-size: 24px;
    font-weight: bold;
    text-align: center;
    margin-bottom: 20px;
}

.login-container p {
    margin: 0;
    margin-bottom: 10px;
}

.login-container input {
    width: 100%;
    padding: 10px;
    font-size: 16px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.login-container button {
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

.login-container button:hover {
    background-color: #0056b3;
}

.danger {
    color: #dc3545;
    font-size: 14px;
    text-align: center;
    margin-top: 10px;
}

body {
    font-family: Arial, sans-serif;
    background-color: #f8f9fa;
    margin: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

    </style>
</head>
<body>
    <div class="container">
        <div class="login">
            <h2 class="login-header">Login</h2>
            <form method="POST" class="login-container" action="{{ route('login') }}">
                @csrf
                @if(session('message'))
                    <p class="danger">{{ session('message') }}</p>
                @endif
                <p>
                    <input type="text" placeholder="Username" name="username" required>
                </p>
                <p>
                    <input type="password" placeholder="Password" name="password" required>
                </p>
                <p>
                    <button type="Submit">Login</button>
                </p>
            </form>
            <!-- Tambahkan tombol "Register" di bawah formulir login -->
            <p style="text-align: center;">
                Belum punya akun? <a href="{{ route('register') }}">Register</a>
            </p>
        </div>
    </div>
</body>
</html>
