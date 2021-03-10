<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"><?= $title; ?></h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active"><?= $title; ?></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <?= $this->session->flashdata('message'); ?>
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Change Password</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->

                        <form class="form-horizontal" method="POST" action="<?= base_url('user/changepassword'); ?>">
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-4 col-form-label">Current Password</label>
                                    <div class="col-sm-8">
                                        <input type="password" class="form-control" id="current_password" name="current_password">
                                        <?= form_error('current_password', '<small class="text-danger">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-4 col-form-label">New Password</label>
                                    <div class="col-sm-8">
                                        <input type="password" class="form-control" id="new_password" name="new_password">
                                        <?= form_error('new_password', '<small class="text-danger">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-4 col-form-label">Retype Password</label>
                                    <div class="col-sm-8">
                                        <input type="password" class="form-control" id="retype_password" name="retype_password">
                                        <?= form_error('retype_password', '<small class="text-danger">', '</small>'); ?>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-info">Save</button>
                            </div>
                            <!-- /.card-footer -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>