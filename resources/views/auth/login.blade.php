<link rel="stylesheet" href="{{ ('css/login.css') }}">
<form action="/login-proses" method="POST">
    @csrf

    <h3>Login Admin</h3>

    <input type="email" name="email" placeholder="Email" required><br>

    <input type="password" name="password" placeholder="Password" required><br>

    <button type="submit">Login</button>

    @if(session('error'))
        <p style="color:red">{{ session('error') }}</p>
    @endif
</form>
