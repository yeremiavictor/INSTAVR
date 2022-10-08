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
                                    <a href="<?= base_url('/post/add')?>" class="btn btn-primary btn-icon-split btn-sm">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-plus"></i>
                                        </span>
                                        <span class="text">Upload</span>
                                    </a>
                                </div>

                            <!-- Illustrations -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">My POST</h6>
                                </div>
                                <div class="card-body">

                                    <!-- CONTENT -->
                                        <div class="table-responsive">
                                            <table class="table-sm table-bordered" id="dataTable" width="100%" cellspacing="0">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center">Image</th>
                                                        <th class="text-center">Post</th>
                                                        <th class="text-center">Like</th>
                                                        <th class="text-center">Comment</th>
                                                        <th class="text-center">Opsi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <?php foreach($Posts as $row): ?>
                                                        <tr>
                                                            <td class="text-center">
                                                                <img width="100px" src="<?= base_url("img/".$row ['foto']) ?>" alt="">
                                                            </td>
                                                            <td class="text-center">
                                                                <?= htmlentities($row ['post'])?> 
                                                            </td>
                                                            <td class="text-center">
                                                                <?= htmlentities($row ['like'])?> 
                                                            </td>
                                                            <td class="text-center">
                                                                <?= htmlentities($row ['comment'])?> 
                                                            </td>
                                                            <td class="text-center">
                                                                <!-- <a href="service/preview/<?php //echo $row['id']; ?>"
                                                                class="btn btn-small text-success"><i class="fas fa-eye"></i> </a> -->
                                                                

                                                                                                                                            

                                                                    <a href="post/det/<?php echo $row['id']; ?>"
                                                                    class="btn btn-small text-warning" data-toggle="tooltip" title="Buka Data"><i class="fas fa-folder-open"></i> </a>

                                                                    <a href="#" data-href="<?= base_url('Post/delete/'.$row['id'].'') ?>" onclick="confirmToDelete(this)"
                                                                    class="btn btn-small text-danger"><i class="fas fa-trash"></i> </a>
                                                            </td>
                                                            
                                                        </tr>
                                                    
                                                    <?php endforeach; ?>

                                                </tbody>
                                            </table>

                                            <!-- Delete -->
                                                <div id="confirm-dialog" class="modal" tabindex="-1" role="dialog">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                    <div class="modal-body">
                                                        <h2 class="h2">Apakah Anda Yakin?</h2>
                                                        <p>Posting yang telah dihapus tidak dapat dikembalikan.</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <a href="#" role="button" id="delete-button" class="btn btn-danger">Hapus</a>
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                                    </div>
                                                    </div>
                                                </div>
                                                </div>

                                                <script>
                                                function confirmToDelete(el){
                                                    $("#delete-button").attr("href", el.dataset.href);
                                                    $("#confirm-dialog").modal('show');
                                                }
                                                </script>



                                        </div>

                                    <!-- <div class="text-center">
                                        <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;"
                                            src="img/undraw_posting_photo.svg" alt="...">
                                    </div>
                                    <p>Add some quality, svg illustrations to your project courtesy of <a
                                            target="_blank" rel="nofollow" href="https://undraw.co/">unDraw</a>, a
                                        constantly updated collection of beautiful svg images that you can use
                                        completely free and without attribution!</p>
                                    <a target="_blank" rel="nofollow" href="https://undraw.co/">Browse Illustrations on
                                        unDraw &rarr;</a> -->
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