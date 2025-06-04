<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Sistem Restoran</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg,  #1e3c72 0%, #2a5298 50%, #3b82f6 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
            overflow: auto;
            padding: 20px 0;
        }
        
        @keyframes float {
            0% { transform: translate(-50px, -50px) rotate(0deg); }
            100% { transform: translate(-50px, -50px) rotate(360deg); }
        }
        .login-container {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        .login-header {
            text-align: center;
            margin-bottom: 30px;
        }

        .login-header h2 {
            color: #1e3c72;
            margin-bottom: 8px;
            font-size: 28px;
            font-weight: 700;
            text-shadow: 0 2px 4px rgba(30, 60, 114, 0.1);
        }

         .login-header p {
            color: #4a5568;
            font-size: 15px;
            font-weight: 400;
        }

        .form-group {
            margin-bottom: 20px;
            position: relative;
        }

         .form-group label {
            display: block;
            margin-bottom: 10px;
            color: #2d3748;
            font-weight: 600;
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

       .form-group input {
            width: 100%;
            padding: 12px 18px;
            border: 2px solid #e2e8f0;
            border-radius: 12px;
            font-size: 16px;
            background: rgba(255, 255, 255, 0.9);
            transition: all 0.3s ease;
            position: relative;
        }

        .form-group input:focus {
            outline: none;
        border-color: #3b82f6;
            background: rgba(255, 255, 255, 1);
            box-shadow: 
                0 0 0 3px rgba(59, 130, 246, 0.1),
                0 4px 12px rgba(59, 130, 246, 0.15);
            transform: translateY(-2px);
        }
        .form-group input::placeholder {
            color: #a0aec0;
        }

        .login-btn {
            width: 100%;
            padding: 14px;
            background: linear-gradient(135deg, #1e40af 0%, #3b82f6 50%, #60a5fa 100%);
            color: white;
            border: none;
            border-radius: 12px;
            font-size: 16px;
            font-weight: 700;
            cursor: pointer;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 1px;
            box-shadow: 0 8px 25px rgba(59, 130, 246, 0.3);
            position: relative;
            overflow: hidden;
        }

        .login-btn:hover {
            transform: translateY(-2px);
        }

        .login-btn:active {
            transform: translateY(0);
        }

        .form-footer {
            text-align: center;
            margin-top: 20px;
            color: #666;
            font-size: 14px;
        }

       

        /* Responsive */
        @media (max-width: 480px) {
            .login-container {
                margin: 20px;
                padding: 30px 20px;
            }
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="login-header">
            <h2>Restoran Login</h2>
            <p>Selamat Datang di Rumase!</p>
            <p>Silakan masuk dengan akun Anda</p>
        </div>

        <form action="verifikasi_login.php" method="POST">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="Masukkan username" required>
            </div>

            <div class="form-group">
                <label for="pass">Password</label>
                <input type="password" id="pass" name="pass" placeholder="Masukkan password" required>
            </div>

            <button type="submit" name="login" class="login-btn">
                Masuk
            </button>
        </form>

        <div class="form-footer">
            <p>© 2024 Sistem Restoran</p>
        </div>
    </div>
</body>
</html>