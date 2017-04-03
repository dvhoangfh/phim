<!--   -->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Xem phim</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="/plugins/datatables/dataTables.bootstrap.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="/plugins/select2/select2.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/dist/css/AdminLTE.min.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="/dist/css/skins/_all-skins.min.css">
    <link rel="stylesheet" type="text/css" href="/dist/css/my-admin-css.css">
    <base href="{{ url('/') }}" />

  </head>
  <body class="hold-transition skin-blue sidebar-mini sidebar-collapse">
    <div class="wrapper">

      <header class="main-header">
        <!-- Logo -->
        <a href="../../index2.html" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>XP</b></span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Xem phim</b></span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button" id="show-menu">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <div class="navbar-custom-menu pullleft">
            <ul class="nav navbar-nav">
              <li class="dropdown tasks-menu">
                <a href="{{route('phim')}}">
                  Danh sách phim
                </a>
              </li>
              <li class="dropdown tasks-menu">
                <a href="{{route('phimbo')}}">
                  Danh sách phim bộ
                </a>
              </li>
              <li class="dropdown tasks-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  Quản lý banner <i class="fa fa-angle-down"></i>
                </a>
                <ul class="dropdown-menu">
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu dropdown-list">
                      <li>
                        <a href="#">
                          <i class="fa fa-users text-aqua"></i> Danh sách người dùng
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-warning text-yellow"></i> Dropdown 1
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-users text-red"></i> Dropdown 2
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-shopping-cart text-green"></i> Dropdown 3
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-user text-red"></i> Dropdown 4
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-user text-red"></i> Dropdown 4
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-user text-red"></i> Dropdown 4
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-user text-red"></i> Dropdown 4
                        </a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li class="dropdown tasks-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  Quản lý banner <i class="fa fa-angle-down"></i>
                </a>
                <ul class="dropdown-menu">
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu dropdown-list">
                      <li>
                        <a href="#">
                          <i class="fa fa-users text-aqua"></i> Danh sách người dùng
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-warning text-yellow"></i> Dropdown 1
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-users text-red"></i> Dropdown 2
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-shopping-cart text-green"></i> Dropdown 3
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-user text-red"></i> Dropdown 4
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-user text-red"></i> Dropdown 4
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-user text-red"></i> Dropdown 4
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-user text-red"></i> Dropdown 4
                        </a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="{{route('logout')}}">
                  <i class="fa fa-power-off"></i>
                  <span class="hidden-xs">Sign Out</span>
                </a>
              </li>
            </ul>
          </div>
        </nav>

      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar admin-menu">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li>
              <a href="{{route('theloai')}}">
                <i class="fa fa-bookmark-o"></i> <span>Thể loại</span>
                <small class="label pull-right bg-blue">3</small>
              </a>
            </li>
            <li>
              <a href="{{route('quocgia')}}">
                <i class="fa fa-map"></i> <span>Quốc gia</span>
                <small class="label pull-right bg-red">3</small>
              </a>
            </li>
            <li>
              <a href="{{route('banner')}}">
                <i class="fa fa-image"></i> <span>Banner</span>
                <small class="label pull-right bg-red">3</small>
              </a>
            </li>
            <li>
              <a href="{{route('phim')}}">
                <i class="fa fa-film"></i> <span>Phim</span>
                <small class="label pull-right bg-yellow">12</small>
              </a>
            </li>
            <li>
              <a href="{{route('phimbo')}}">
                <i class="fa fa-list"></i> <span>Phim bộ</span>
                <small class="label pull-right bg-yellow">7</small>
              </a>
            </li>
            <li>
              <a href="{{route('logout')}}">
                <i class="fa fa-sign-out"></i> <span>Đăng xuất</span>
              </a>
            </li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper admincontent">
        @if (!empty(Session::get('flash_message')))
            <div id="alertmessage" class="alert alert-{!! Session::get('flash_level') !!}">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong>Thông báo từ hệ thống:</strong>
                {!! Session::get('flash_message') !!}
            </div> <!-- /.alert message -->
        @endif
		    @yield('content')


      </div><!-- /.content-wrapper -->
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 1.0
        </div>
        <strong>Copyright &copy; 2016-2017 <a target="_blank" href="http://facebook.com/kellyfa12">Hoang Do</a>.</strong> All rights reserved.
      </footer>

      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->

    <!--  -->
    <div class="modal modal-xs fade" id="deleted" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4>Confirm</h4>
                </div>
                <div class="modal-body">
                    Are you sure!
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-danger btn-ok">Delete</a>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery 2.1.4 -->
    <script src="/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="/bootstrap/js/bootstrap.min.js"></script>
    <!-- Angular JS -->
    <script src="/angular/angular.min.js"></script>

    <!-- DataTables -->
    <script src="/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="/plugins/datatables/dataTables.bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="/plugins/fastclick/fastclick.min.js"></script>
    <!-- iCheck 1.0.1 -->
    <script src="/plugins/iCheck/icheck.min.js"></script>
    <!-- Select2 -->
    <script src="/plugins/select2/select2.full.min.js"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <!-- AdminLTE App -->
    <script src="/dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="/dist/js/demo.js"></script>
    <!-- App Angular JS -->
    <script src="/app/app.js"></script>

    <!-- page script -->
    <script>
      $(function () {
        $(".textarea").wysihtml5();
        $(".select2").select2();
        $("#example1").DataTable();
        $(".datatable").DataTable({
          "aLengthMenu": [[10, 15, 25,50, -1], [10, 15, 25,50, "Tất cả"]],
          "iDisplayLength": 10,
          "language": {
              "lengthMenu": "Hiển thị _MENU_ dòng mỗi trang",
              "zeroRecords": "Không tìm thấy",
              "info": "Trang _PAGE_/_PAGES_",
              "infoEmpty": "Không có dữ liệu",
              "infoFiltered": "(lọc trong tổng số _MAX_)",
              "sSearch":       "Tìm kiếm: ",
              "oPaginate": {
                  "sFirst":    "Đầu",
                  "sPrevious": "Trước",
                  "sNext":     "Tiếp",
                  "sLast":     "Cuối"
              }
          }
      });
        // $('#example2').DataTable({
        //   "paging": true,
        //   "lengthChange": false,
        //   "searching": false,
        //   "ordering": true,
        //   "info": true,
        //   "autoWidth": false
        // });
      });
    </script>
    <script type="text/javascript">
        const BASE_URL = $('base').attr('href');
          $.ajaxSetup({
             headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
          });
        $('.alert').delay(6000).slideUp(500); 
        $('#deleted').on('show.bs.modal', function(e) {
            $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
        });
  </script>
  <script type="text/javascript">
      $(document).ready(function() {

        $(document).on("click","#show-menu",function() {
          $('.admin-menu').show();
          $(this).attr("id","newId");
          $('.admin-menu').css({"display":"block"});
          
        });

        $(document).on("click","#newId",function() {
          $(this).attr("id","show-menu");
          $(".admin-menu").removeAttr( 'style' );
        });

        // $('#newId').on(click(function() {
        //   alert('aa');
        //   // $('.admin-menu').css({"background-color":"red"});
        //   // $('aside[class="admin-menu"]').css({"dislay":"none !important"});
        //   // $(this).attr("id","show-menu");
        // });
        
      });
    </script>
    @yield('script')
  </body>
</html>
