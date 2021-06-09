
                <!-- Begin Page Content -->
                <div class="container-fluid ml-5">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Obat</h1>
              
                    </div>

                    <!-- Content Row -->
                    <div class = "row">
                        <div class = "col-md-8">
                            <form action="<?php echo base_url() ?>obat/insertdata" method = "post" enctype = "multipart/form-data">
                                <div class = "form-group">
                                    <label for="">Kode Obat</label>
                                    <input type="text" name = "KODE_OBAT" class = "form-control">
                                </div>
                                <div class = "form-group">
                                    <label for="">Kode supplier</label>
                                    <select name="KODE_SUPPLIER" class = "form-control">
                                        <?php foreach ($query as $qr) :  ?>
                                        <option>Pilih</option>
                                        <option value="<?= $qr['KODE_SUPPLIER']; ?>"><?= $qr['KODE_SUPPLIER']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>

                                    <div class = "form-group">
                                    <label for="">Nama Obat</label>
                                    <input type="text" name = "NAMA_OBAT" class = "form-control">
                                </div>
                                <div class = "form-group">
                                    <label for="">Produsen</label>
                                    <input type="text" name = "PRODUSEN" class = "form-control">
                                </div>
                                <div class = "form-group">
                                    <label for="">harga</label>
                                    <input type="text" name = "HARGA" class = "form-control">
                                </div>
                                <div class = "form-group">
                                    <label for="">jumlah stok</label>
                                    <input type="text" name = "JML_STOK" class = "form-control">
                                </div>
                                <div class = "form-group">
                                    <label for="">file input</label>
                                    <input type="file" name = "FOTO">
                                </div>
                                
                                <div class = "form-group">
                                   <button class = "btn btn-primary btn-sm" type = "submit">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>