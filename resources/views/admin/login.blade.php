<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin-login</title>
    <link rel="stylesheet" href="/css/admin/login.css">
</head>
<body>
     <main class="admin-login-page">

        <section class="admin-login-card">

            <div class="admin-brand">
                <img
                    src="/images/shopelevenlogo.png"
                    alt="ShopEleven logo"
                    class="admin-logo"
                >

                <h1>ShopEleven</h1>
                <p>Admin Dashboard</p>
            </div>


            <div class="login-heading">
                <h2>Welcome back</h2>
                <p>Sign in to manage your store.</p>
            </div>

            @if($errors->any())
                <div class="error-message">
                    {{ $errors->first() }}
                </div>
            @endif
            <form class="admin-login-form" action="/login" method="POST">
                @csrf

                <div class="input-group">
                    <label for="email">Email</label>

                    <input
                        type="email"
                        id="email"
                        name="email"
                        placeholder="Enter your email"
                        autocomplete="email"
                        required
                    >
                </div>


                <div class="input-group">
                    <label for="password">Password</label>

                    <input
                        type="password"
                        id="password"
                        name="password"
                        placeholder="Enter your password"
                        autocomplete="current-password"
                        required
                    >
                </div>


                <div class="login-options">

                    <label class="remember-me">
                        <input type="checkbox" name="remember">
                        <span>Remember me</span>
                    </label>

                    <a href="#">Forgot password?</a>

                </div>


                <button type="submit" class="login-button">
                    Log In
                </button>

            </form>


            <div class="admin-footer">
                <span>ShopEleven</span>
                <span>•</span>
                <span>Admin Portal</span>
            </div>

        </section>

    </main>


</body>
</html>