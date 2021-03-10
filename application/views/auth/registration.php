<div class="register-box">
    <div class="register-logo">
        <b>Finance</b>LTE
    </div>

    <div class="card">
        <div class="card-body register-card-body">
            <p class="login-box-msg">Register a new account</p>

            <form action="<?php base_url('auth/registration'); ?>" method="POST">
                <div class="input-group mb-0">
                    <input type="text" class="form-control" placeholder="Full name" name="name">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <?= form_error('name', '<small class="text-danger">', '</small>'); ?>
                </div>

                <div class="input-group mb-0">
                    <input type="text" class="form-control" placeholder="Email" name="email">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
                </div>

                <div class="input-group mb-0">
                    <input type="password" class="form-control" placeholder="Password" name="password1">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <?= form_error('password1', '<small class="text-danger">', '</small>'); ?>
                </div>

                <div class="input-group mb-0">
                    <input type="password" class="form-control" placeholder="Retype password" name="password2">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <?= form_error('password2', '<small class="text-danger">', '</small>'); ?>
                </div>

                <div class="row mb-3">
                    <div class="col-4">
                        <button type="submit" name="submit" class="btn btn-primary btn-block toastrDefaultSuccess">Register</button>
                    </div>
                </div>
            </form>

            <a href="<?= base_url(); ?>" class="text-center">I already have a membership</a>
        </div>
    </div>
</div>