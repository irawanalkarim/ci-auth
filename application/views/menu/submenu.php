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
                <div class="row">
                    <div class="col-md-6">

                    </div>
                </div>
                <div class="col-md-10">
                    <?php if (validation_errors()) : ?>
                        <div class="alert alert-danger">
                            <?= validation_errors(); ?>
                        </div>
                    <?php endif; ?>
                    <?= $this->session->flashdata('message'); ?>
                    <div class="card">
                        <div class="card-header border-transparent">
                            <h3 class="card-title">All Submenu</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table m-0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Title</th>
                                            <th>Menu</th>
                                            <th>Url</th>
                                            <th>Icon</th>
                                            <th>Is Active?</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1; ?>
                                        <?php foreach ($submenu as $sm) : ?>
                                            <tr>
                                                <td><?= $i; ?></td>
                                                <td><?= $sm['title']; ?></td>
                                                <td><?= $sm['menu']; ?></td>
                                                <td><?= $sm['url']; ?></td>
                                                <td><?= $sm['icon']; ?></td>
                                                <td><?= $sm['is_active']; ?></td>
                                                <td>
                                                    <span class="badge badge-success">Edit</span>
                                                    <span class="badge badge-danger">Delete</span>
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
                            <a href="#" class="btn btn-sm btn-info float-left" data-toggle="modal" data-target="#modal-default">Add Submenu</a>
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
                <h4 class="modal-title">Add Submenu</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('menu/submenu'); ?>" method="post">
                    <div class="form-group">
                        <input type="text" class="form-control" id="title" placeholder="Submenu title" name="title">
                    </div>
                    <div class="form-group">
                        <select class="custom-select" name="menu_id">
                            <option>Select Menu</option>
                            <?php foreach ($menu as $m) : ?>
                                <option value="<?= $m['id']; ?>"><?= $m['menu']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="url" placeholder="Submenu Url" name="url">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="icon" placeholder="Submenu Icon" name="icon">
                    </div>
                    <div class="form-group">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="is_active" name="is_active" checked>
                            <label for="is_active" class="custom-control-label">Active ?</label>
                        </div>
                    </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save Menu</button>
            </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>