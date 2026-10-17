<!DOCTYPE html>
<html>

<head>
  <link rel="icon" type="image/x-icon" href="favicon.ico">
  <link rel="icon" type="image/svg+xml" href="favicon.svg">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SKKPD | Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <?php echo $__env->make('layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
</head>

<body class="hold-transition login-page" style="background-image: url('gambar/bg.jpg'); background-repeat: no-repeat; background-size: cover;">

    
    <?php echo $__env->make('layouts.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    

    <div class="login-box">
        <div class="login-logo">
            <span class="text-white"><b>Login
                </b>SKKP</span>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg"></p>

                <form action="<?php echo e(route('proses_login')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="input-group mb-3">
                        <input type="text" name="username" class="form-control" placeholder="Username" required
                            autofocus>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control" placeholder="Password" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 mb-5">
                        <button type="submit" name="cek" class="btn btn-primary btn-block mb-2">Sign In</button>
                        
                    </div>
            </div>
            </form>

            <!-- /.social-auth-links -->

        </div>
        <!-- /.login-card-body -->
    </div>
    </div>
    <!-- /.login-box -->

</body>

</html>
<?php /**PATH C:\xampp\htdocs\sppd-master\resources\views/auth/login.blade.php ENDPATH**/ ?>