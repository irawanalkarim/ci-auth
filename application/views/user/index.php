        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0"><?= $title; ?></h1>
                        </div><!-- /.col -->
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
                        <div class="col-md-3">
                            <?= $this->session->flashdata('message'); ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="card card-primary card-outline">
                                <div class="card-body box-profile">
                                    <div class="text-center">
                                        <img class="profile-user-img img-fluid img-circle" src="<?= base_url('assets/img/') . $user['image']; ?>" alt="User profile picture">
                                    </div>
                                    <h3 class="profile-username text-center"><?= $user['name']; ?></h3>
                                    <p class="text-muted text-center"><?= $user['email']; ?></p>
                                    <a href="#" class="btn btn-primary btn-block"><b>Edit</b></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


        </div>
        <!-- /.content-wrapper -->