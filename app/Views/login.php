<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login TERANAP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: url('/ruangri.png') no-repeat center center fixed;
            background-size: cover;
        }
        .login-box {
            background: rgba(135, 206, 235, 0.8);
            border-radius: 15px;
            padding: 30px;
            max-width: 400px;
            margin: 100px auto;
        }
        input.form-control {
            border-radius: 10px;
        }
        button {
            border-radius: 10px;
        }
    </style>
</head>
<body>
<div class="login-box">
    <h3 class="text-center mb-4">TERANAP</h3>

    <form method="post" action="/auth/processLogin">
        <?php if(session()->getFlashdata('error')): ?>
            <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
        <?php endif; ?>
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" name="username" class="form-control" placeholder="Enter Username" value="<?= old('username') ?>" required>
        </div>
        <div class="mb-4">
            <label for="password" class="form-label">Passwoard</label>
            <input type="password" name="password" class="form-control" placeholder="Enter Passwoard" required>
        </div>
        <button type="submit" class="btn btn-primary w-100">Login</button>
    </form>
</div>
</body>
</html>
