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
                                    <!-- Illustrations -->
                                    <div class="card shadow mb-4" >
                                        <div class="card-header py-3" >
                                            <div class="text-center">
                                                <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 15rem;"
                                                         src="<?= base_url('img/'.$data['foto']) ?>" alt="...">
                                            </div>

                                            <p align="right">
                                                <form action="" method="post" id="text-editor"  name="ajax_form" id="ajax_form" class="user" enctype="multipart/form-data">
                                            </p>
                                                <!-- Hidden -->
                                                    <?php
                                                        $ambil = $data['like'];
                                                        $tekan = $ambil + 1;
                                                    ?>
                                                    <input id="id" name="id" type="text" value="<?=$data['id'];?>"  /hidden>
                                                    <input id="like" name="like" type="text" value="<?=$tekan;?>"  /hidden>

                                                <!-- Hidden -->

                                                <div class="form-group row">
                                                    <div class="offset-0 col-9">
                                                    <button name="submit" type="submit" class="btn btn-primary" value="Save">LIKE (<?=$data['like']?>)</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="card-body">

                                            <p>
                                                <b>POST:</b> <?= htmlentities($data ['post'])?> 
                                            </p>

                                            <form action="" method="post" id="text-editor"  name="ajax_form" id="ajax_form" class="user" enctype="multipart/form-data">
                                                <!-- Hidden -->
                                                    <input id="id" name="id" type="text" value="<?=$data['id'];?>"  /hidden>
        
                                                <!-- Hidden -->
        
        
                                                <div class="form-group row">
                                                    <div class="col-6">
                                                        <input id="post" name="post" type="text"  class="form-control" plcaholder="Comment" required="required">
                                                    </div>
                                                    <div class="col-6">
                                                        <button name="submit" type="submit" class="btn btn-primary" value="Save">Commentt</button> 
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