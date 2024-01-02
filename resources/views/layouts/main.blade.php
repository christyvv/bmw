<!doctype html>
<html lang="en">

<head>
  <title>Admin Bina Mitra Wahana</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <!--     Fonts and icons     -->
  <link href='https://fonts.googleapis.com/css?family=Poppins:300,400,500,700|Poppins+Slab:400,700|Material+Icons' type="text/css" rel='stylesheet'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- Material Kit CSS -->
  <link href="{{ url('admin/assets/css/material-dashboard.css') }}" rel="stylesheet" />
</head>

<body class="light-edition">
  <div class="wrapper">
    <div class="sidebar" data-color="purple" data-background-color="black" data-image="./assets/img/bmw.jpg" >
      <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
      <div class="logo">
        <a href="{{ route('website') }}" class="simple-text logo-normal" ><img
            src="{{ url('web/assets/img/bmw.png') }}" style="width: 8%; margin-right:10px">
          <strong style="font-size: 14px">Bina Mitra Wahana</strong>
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav" style="font-family: poppins">
            <li class="nav-item {{ Route::is('berita') ? 'active' : '' }}">
              <a class="nav-link" href="{{ route('berita') }}">
                <i class="material-icons">newspaper</i>
                <p style="font-size: 12px">Berita</p>
              </a>
            </li>
            <li class="nav-item {{ Route::is('prestasi') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('prestasi') }}">
                <i class="material-icons">star</i>
                <p style="font-size: 12px">Prestasi</p>
              </a>
            </li>
            <li class="nav-item {{ Route::is('fasilitas') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('fasilitas') }}">
                    <i class="material-icons">house</i>
                    <p style="font-size: 12px">Fasilitas</p>
                </a>
            </li>
            <li class="nav-item {{ Route::is('galeri') ? 'active' : '' }}">
              <a class="nav-link" href="{{ route('galeri') }}">
                  <i class="material-icons">image</i>
                <p style="font-size: 12px">Galeri</p>
              </a>
            </li>
          <li class="nav-item {{ Route::is('kontak') ? 'active' : '' }}">
          <a class="nav-link" href="{{ route('kontak') }}">
              <i class="material-icons">phone</i>
              <p style="font-size: 12px">Kontak</p>
            </a>
          </li>
          <!-- your sidebar here -->
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <i class="material-icons" style="margin-left: 15px">face</i>
            <a class="navbar-brand" style="font-family: poppins; font-size: 14px; font-weight:500; margin-left:7px" href="{{ route('berita') }}">Bina Mitra Wahana (Admin)</a>
          </div>

        </div>
      </nav>

      <!-- End Navbar -->
      <div class="content">
        @yield('content')
      </div>

      <footer class="footer">
        <div class="container-fluid">
          <nav class="float-right">
            <ul>
              <li>
                  <a href="{{ route('berita') }}">
                    <i class="material-icons">school</i>
                  Bina Mitra Wahana
                </a>
              </li>
            </ul>
          </nav>

          <!-- your footer here -->
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="{{ url('admin/assets/js/core/popper.min.js')}}"></script>
  <script src="{{ url('admin/assets/js/core/jquery.min.js')}}"></script>
  <script src="{{ url('admin/assets/js/core/bootstrap-material-design.min.js')}}"></script>
  <script src="https://unpkg.com/default-passive-events"></script>
  <script src="{{ url('admin/assets/js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>
  <!-- Place this tag in your head or just before your close body tag. -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chartist JS -->
  <script src="{{ url('admin/assets/js/plugins/chartist.min.js') }}"></script>
  <!--  Notifications Plugin    -->
  <script src="{{ url('admin/assets/js/plugins/bootstrap-notify.js') }}"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{ url('admin/assets/js/material-dashboard.js?v=2.1.0') }}"></script>
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="{{ url('/assets/demo/demo.js') }}"></script>
  <script>
    $(document).ready(function() {
      $().ready(function() {
        $sidebar = $('.sidebar');

        $sidebar_img_container = $sidebar.find('.sidebar-background');

        $full_page = $('.full-page');

        $sidebar_responsive = $('body > .navbar-collapse');

        window_width = $(window).width();

        $('.fixed-plugin a').click(function(event) {
          // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
          if ($(this).hasClass('switch-trigger')) {
            if (event.stopPropagation) {
              event.stopPropagation();
            } else if (window.event) {
              window.event.cancelBubble = true;
            }
          }
        });

        $('.fixed-plugin .active-color span').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-color', new_color);
          }

          if ($full_page.length != 0) {
            $full_page.attr('filter-color', new_color);
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.attr('data-color', new_color);
          }
        });

        $('.fixed-plugin .background-color .badge').click(function() {
          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('background-color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-background-color', new_color);
          }
        });

        $('.fixed-plugin .img-holder').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).parent('li').siblings().removeClass('active');
          $(this).parent('li').addClass('active');


          var new_image = $(this).find("img").attr('src');

          if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            $sidebar_img_container.fadeOut('fast', function() {
              $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
              $sidebar_img_container.fadeIn('fast');
            });
          }

          if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $full_page_background.fadeOut('fast', function() {
              $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
              $full_page_background.fadeIn('fast');
            });
          }

          if ($('.switch-sidebar-image input:checked').length == 0) {
            var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
            $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
          }
        });

        $('.switch-sidebar-image input').change(function() {
          $full_page_background = $('.full-page-background');

          $input = $(this);

          if ($input.is(':checked')) {
            if ($sidebar_img_container.length != 0) {
              $sidebar_img_container.fadeIn('fast');
              $sidebar.attr('data-image', '#');
            }

            if ($full_page_background.length != 0) {
              $full_page_background.fadeIn('fast');
              $full_page.attr('data-image', '#');
            }

            background_image = true;
          } else {
            if ($sidebar_img_container.length != 0) {
              $sidebar.removeAttr('data-image');
              $sidebar_img_container.fadeOut('fast');
            }

            if ($full_page_background.length != 0) {
              $full_page.removeAttr('data-image', '#');
              $full_page_background.fadeOut('fast');
            }

            background_image = false;
          }
        });

        $('.switch-sidebar-mini input').change(function() {
          $body = $('body');

          $input = $(this);

          if (md.misc.sidebar_mini_active == true) {
            $('body').removeClass('sidebar-mini');
            md.misc.sidebar_mini_active = false;

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

          } else {

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

            setTimeout(function() {
              $('body').addClass('sidebar-mini');

              md.misc.sidebar_mini_active = true;
            }, 300);
          }

          // we simulate the window Resize so the charts will get updated in realtime.
          var simulateWindowResize = setInterval(function() {
            window.dispatchEvent(new Event('resize'));
          }, 180);

          // we stop the simulation of Window Resize after the animations are completed
          setTimeout(function() {
            clearInterval(simulateWindowResize);
          }, 1000);

        });
      });
    });
  </script>
</body>

</html>

