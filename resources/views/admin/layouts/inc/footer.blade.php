  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
      <div class="p-3">
          <h5>Title</h5>
          <p>Sidebar content</p>
          <div>
              <form action="{{ route('logout') }}" method="POST">
                  @csrf
                  <button type="submit" class="btn btn-primary">Logout</button>
              </form>
          </div>
      </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
      <!-- To the right -->
      <div class="float-right d-none d-sm-inline"></div>
      <!-- Default to the left -->
      <strong>Copyright &copy; 2021 <a href="https://github.com/jakdev047">Jubayer Alam Khan</a>.</strong> All rights
      reserved.
  </footer>
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->

  <!-- jQuery -->
  <script src="{{ asset('assets/admin/plugins/jquery/jquery.min.js') }}"></script>
  <!-- Bootstrap 4 -->
  <script src="{{ asset('assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <!-- AdminLTE App -->
  <script src="{{ asset('assets/admin/dist/js/adminlte.min.js') }}"></script>

  <!-- DataTables  & Plugins -->
  <script src="{{ asset('assets/admin/plugins/datatables/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('assets/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
  <script src="{{ asset('assets/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
  <script src="{{ asset('assets/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
  <script src="{{ asset('assets/admin/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
  <script src="{{ asset('assets/admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
  <script src="{{ asset('assets/admin/plugins/jszip/jszip.min.js') }}"></script>
  <script src="{{ asset('assets/admin/plugins/pdfmake/pdfmake.min.js') }}"></script>
  <script src="{{ asset('assets/admin/plugins/pdfmake/vfs_fonts.js') }}"></script>
  <script src="{{ asset('assets/admin/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
  <script src="{{ asset('assets/admin/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
  <script src="{{ asset('assets/admin/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>

  <script>
      $(function() {
          $("#categoryList").DataTable({
              "responsive": true,
              "lengthChange": false,
              "autoWidth": false,
              "buttons": ["csv", "excel", "pdf", "print"]
          }).buttons().container().appendTo('#categoryList_wrapper .col-md-6:eq(0)');
      });

  </script>
  </body>

  </html>
