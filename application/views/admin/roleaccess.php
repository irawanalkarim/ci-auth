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
                <div class="col-md-6">
                    <?= $this->session->flashdata('message'); ?>
                    <h5>Role : <?= $role['role']; ?></h5>
                    <div class="card">
                        <div class="card-header border-transparent">
                            <h3 class="card-title">Role Access</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table m-0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Menu</th>
                                            <th>Access</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1; ?>
                                        <?php foreach ($menu as $m) : ?>
                                            <tr>
                                                <td><?= $i; ?></td>
                                                <td><?= $m['menu']; ?></td>
                                                <td>
                                                    <div class="form-group mb-0">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="checkaccess" <?= check_access($role['id'], $m['id']); ?> data-role="<?= $role['id']; ?>" data-menu="<?= $m['id']; ?>>
                                                            <label class=" custom-control-label" for="exampleCheck1">Give access.</label>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <?php $i++; ?>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>