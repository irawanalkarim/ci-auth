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
                    <?= form_error('menu', '<div class="alert alert-danger">', '</div>'); ?>
                    <?= $this->session->flashdata('message'); ?>
                    <div class="card">
                        <div class="card-header border-transparent">
                            <h3 class="card-title">All Role</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table m-0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Role</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1; ?>
                                        <?php foreach ($role as $r) : ?>
                                            <tr>
                                                <td><?= $i; ?></td>
                                                <td><?= $r['role']; ?></td>
                                                <td>
                                                    <a href="<?= base_url('admin/roleaccess/') . $r['id']; ?>" class="badge badge-primary">Access</a>
                                                    <a href="" class="badge badge-success">Edit</a>
                                                    <a href="" class="badge badge-danger">Delete</a>
                                                </td>
                                            </tr>
                                            <?php $i++; ?>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer clearfix">
                            <a href="#" class="btn btn-sm btn-info float-left" data-toggle="modal" data-target="#modal-default">Add New Role</a>
                        </div>
                        <!-- /.card-footer -->
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Role</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('admin/role'); ?>" method="post">
                    <div class="form-group">
                        <label for="menu">Role Name</label>
                        <input type="text" class="form-control" id="role" placeholder="Enter role name" name="role">
                    </div>

            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save Role</button>
            </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>