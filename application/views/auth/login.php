<div class="login-box">
    <div class="login-logo">
        <b>Finance</b>LTE
    </div>

    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">Sign in to start your session</p>
            <?= $this->session->flashdata('message'); ?>
            <form action="<?= base_url(); ?>" method="post">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Email" name="email" value="<?= set_value('email'); ?>">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
                </div>

                <div class="input-group mb-3">
                    <input type="password" class="form-control" placeholder="Password" name="password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <?= form_error('password', '<small class="text-danger">', '</small>'); ?>
                </div>

                <div class="row mb-3">
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                    </div>
                </div>
            </form>

            <p class="mb-1">
                <a href="forgot-password.html">I forgot my password</a>
            </p>
            <p class="mb-0">
                <a href="<?= base_url('auth/registration'); ?>" class="text-center">Register a new account</a>
            </p>
        </div>
    </div>
</div>