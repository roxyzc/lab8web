<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="<?= base_url('/style.css'); ?>">
</head>

<body>
    <div class="loginPage">

        <div id="login-wrapper">
            <h1>Sign In</h1>
            <form action="" method="post">
                <div class="p mb-3">
                    <label for="InputForEmail" class="form-label">Email
                        address</label>
                    <input type="email" name="email" class="form-control" id="InputForEmail" value="<?= set_value('email') ?>">
                </div>
                <div class="p mb-3">
                    <label for="InputForPassword" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="InputForPassword">
                </div>
                <?php if (session()->getFlashdata('flash_msg')) : ?>
                    <div class="alert alert-danger"><?= session()->getFlashdata('flash_msg') ?></div>
                <?php endif; ?>
                <button type="submit" class="btn">Login</button>
            </form>
        </div>
    </div>
</body>

</html>