




                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Obat</h1>

                        
                    
                    </div>

                    <!-- Content Row -->
                    <table class = "table table-bordered">
                            <thead>
                                <tr>
                                    <th>Kode Obat</th>
                                    <th>Kode Suplier</th>
                                    <th>Nama Obat</th>
                                    <th>Produsen</th>
                                    <th>Harga</th>
                                    <th>jumlah stok</th>
                                    <th>foto</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach($query as $qr) : ?>
                                <tr>
                                    <td><?= $qr['KODE_OBAT']; ?></td>
                                    <td><?= $qr['KODE_SUPPLIER']; ?></td>
                                    <td><?= $qr['NAMA_OBAT']; ?></td>
                                    <td><?= $qr['PRODUSEN']; ?></td>
                                    <td><?= $qr['HARGA']; ?></td>
                                    <td><?= $qr['JML_STOK']; ?></td>
                                    <td><?= $qr['FOTO']; ?></td>
                                    <td>
                                        <a href="" class = "btn btn-danger btn-sm">DELETE</a>
                                        <a href="" class = "btn btn-primary btn-sm">EDIT</a>
                                    </td>   
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>

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