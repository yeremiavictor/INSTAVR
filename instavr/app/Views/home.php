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
                            <?php foreach($Posts as $row): ?>
                                    <!-- Illustrations -->
                                    <div class="card shadow mb-4" >
                                        <div class="card-header py-3" >
                                            <div class="text-center">
                                                <a href="<?= base_url('post/feed/'.$row['id'])?> ">
                                                    <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 15rem;"
                                                    src="<?= base_url('img/'.$row['foto']) ?>" alt="...">
                                                </a>
                                                <p align="left"><button href="<?= base_url('post/feed/'.$row['id'])?> " class="btn btn-primary">LIKE (<?=$row['like']?>)</button></p>


                                            </div>
                                        </div>
                                        <div class="card-body">


                                            <p><b>POST: </b> <?= htmlentities($row ['post'])?> </p>
                                            <p><b>Comment: </b><?= htmlentities($row ['comment'])?> </p>
                                            
                                        </div>
                                    </div>
                            <?php endforeach; ?>


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