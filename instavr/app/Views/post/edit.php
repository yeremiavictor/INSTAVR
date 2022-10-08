<?= $this->extend('layout/layout') ?>

    <?= $this->section('content') ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                    <?= $this->include('layout/topbar') ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Content Column -->

                        <div class="col-lg-12 mb-4">

                                <div class="d-sm-flex mb-3">
                                    <a href="<?= base_url('/post')?>" class="btn btn-danger btn-icon-split btn-sm">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-chevron-left"></i>
                                        </span>
                                        <span class="text">Kembali</span>
                                    </a>
                                </div>

                            <!-- Illustrations -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">POST</h6>
                                </div>
                                <div class="card-body">

                                    <!-- CONTENT -->
                                    <form action="" method="post" id="text-editor"  name="ajax_form" id="ajax_form" class="user" enctype="multipart/form-data">
                                        <!-- Hidden -->
                                            <input id="id" name="id" type="text" value="<?=$data['id'];?>"  /hidden>

                                        <!-- Hidden -->

                                    <div class="text-center">
                                        <img src="<?=base_url("img/".$data['foto'])?>" class=""  height="150"/>
                                    </div>


                                        <div class="form-group row">
                                            <label for="post" class="col-3 col-form-label">Post</label> 
                                            <div class="col-9">
                                            <input id="post" name="post" type="text" value="<?=$data['post'];?>" class="form-control" required="required">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="offset-0 col-9">
                                            <button name="submit" type="submit" class="btn btn-primary" value="Save">Edit Post!</button>
                                            </div>
                                        </div>
                                    </form>
  

                                </div>
                            </div>

                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
                <?= $this->include("layout/footer") ?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

<?= $this->endSection() ?>