<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login Teranap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
      body {
        background: url('/images/ruangan.png') no-repeat center center fixed;
        background-size: cover;
      }
      .login-box {
        background-color: rgba(135, 206, 250, 0.9);
        padding: 30px;
        border-radius: 10px;
        max-width: 400px;
        margin: 100px auto;
      }
    </style>
</head>
<body>
    <div class="login-box">
        <h3 class="text-center mb-4"><b>TERANAP</b></h3>
        <?php if(session()->getFlashdata('error')): ?>
            <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
        <?php endif ?>
        <form action="/auth/processLogin" method="post">
            <div class="mb-3">
                <label>Username</label>
                <input type="text" name="username" class="form-control" placeholder="Enter Username" required>
            </div>
            <div class="mb-3">
                <label>Password</label>
                <input type="password" name="password" class="form-control" placeholder="Enter Password" required>
            </div>
            <button class="btn btn-primary w-100" type="submit">Login</button>
        </form>
    </div>
</body>
</html>
