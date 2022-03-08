<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login Caffe</title>
    <link href="<?=base_url()?>/assets/css/sb-admin-2.min.css" rel="stylesheet">
</head>

<body>
    &nbsp;
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <?php if(session()->getFlashdata('msg')):?>
                    <div class="alert alert-danger"><?=session()->getFlashdata('msg')?></div>
                    <?php endif ;?>
                    <form action="<?=base_url('login')?>" method="post">
                <div class="card shadow mb-3 border-left-info align-text-center">
                    <h3 class="card-title text-center bg-info"><strong><i>Please Sign In!</i></strong></h3>
                    <div class="card-body bg-default">
                        <div class="form-group">
                            <label for="username"><h5>Username</h5></label>
                            <input type="text" name="username" id="username" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="password"><h5>Password</h5></label>
                            <input type="password" name="password" id="password" class="form-control">
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-info"><strong>Login</strong></button>
                    </div>
                </div>
            </form>
            </div>
            <div class="col-md-3">
                <img src="<?=base_url('assets/img/gblogin.png')?>" height="340" width="250">
            </div>
        </div>
    </div>
</body>

</html>
