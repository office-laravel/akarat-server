  <!-- قائمة سفلية -->
  {{-- <div class="fixed-bottom">
    <div class="bottom-nav-container ">
      <nav class="navbar navbar-light">
        <ul class="navbar-nav d-flex flex-row justify-content-between w-100">
          <li class="nav-item text-center flex-fill">
            <a class="nav-link nav-link-pad" href="{{ url('/') }}"><i class="fas fa-home icon-style"></i><br><span>الرئيسية</span></a>
          </li>        
          <li class="nav-item text-center flex-fill">
            <a class="nav-link nav-link-pad" href="{{ url('/package/all') }}"><i class="fa fa-sitemap icon-style"></i><br><span>الباقات</span></a>
          </li>         
          @if (Auth::check())
          <li class="nav-item text-center flex-fill">
            <a class="nav-link nav-link-pad" href="{{ route('mainPageSetting.userr',Auth::guard()->user()->name) }}"><i class="fas fa-user icon-style"></i><br><span>حسابي</span></a>
          </li>
          @endif
        </ul>
      </nav>
    </div>
  </div> --}}


  <footer>
      <div class="_5e3d939d">
          <div class="_948d9e0a _1c23732d">
              <div class="_948d9e0a _33338b0e _95d4067f">
                  <div class="_948d9e0a _26a923bb d7383df5">
                      <div class="fa001e6f"><a class="_79f1b2cc" href="/about/aboutus.html" title="نبذة عنا"
                              aria-label="About us">نبذة عنا</a><span class="d1c6dbb9"> | </span><a class="_79f1b2cc"
                              href="/contactus.html" title="اتصل بنا" aria-label="Contact us">اتصل بنا</a><span
                              class="d1c6dbb9"> | </span><a class="_79f1b2cc" href="/terms.html"
                              title="سياسة الخصوصية و الشروط" aria-label="Terms and privacy policy">سياسة الخصوصية و
                              الشروط</a></div>
                      <div class="_799f1e51">
                          <div class="e9dfae0b">
                              <div class="a74b5409 _10a67884">
                                  <div class="_71701e2c"><a href="https://www.facebook.com/BayutEgypt/"
                                          title="اتبعنا على Facebook" aria-label="Follow us on facebook">
                                          <div class="ac4f4c81 _6ffa5c35"></div>
                                      </a></div>
                                  <div class="_71701e2c"><a href="https://www.linkedin.com/company/bayut-egypt/about/"
                                          title="اتبعنا على LinkedIn" aria-label="Follow us on linkedin">
                                          <div class="_06ad97e8 _6ffa5c35"></div>
                                      </a></div>
                                  <div class="_71701e2c"><a href="https://www.instagram.com/bayutegypt/"
                                          title="اتبعنا على Instagram" aria-label="Follow us on instagram">
                                          <div class="a7caaae4 _6ffa5c35"></div>
                                      </a></div>
                                  <div class="_71701e2c"><a
                                          href="https://www.youtube.com/channel/UClKhxlGKHPFw683GYr5Y8Ig"
                                          title="اتبعنا على Youtube" aria-label="Follow us on youtube">
                                          <div class="_7659151e _6ffa5c35"></div>
                                      </a></div>
                              </div>
                          </div>
                        
                      </div>
                  </div>
                  <div class="_948d9e0a _88b6e259 _371e9918">
                      
                  </div>
                  <div class="_948d9e0a _26a923bb d7383df5">
                      <div class="f7d46e08">© 2008 - 2025 Bayut.eg المنصة العقارية في سوريا</div>
                      <div class="f8c3cae7"><span class="_7533e206" aria-label="Scroll to top"></span><span
                              class="_72478b4e">إلى الأعلى</span></div>
                  </div>
              </div>
          </div>
      </div>
  </footer>

  <!-- Bootstrap core JavaScript و JQuery-->
  <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script> -->

  <script src="{{ url('/public/assets/site/js/jquery-3.7.1.min.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>


  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  {{-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> --}}
  <script src="{{ url('/public/ckeditor/ckeditor.js') }}"></script>
  <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
  <script src="https://unpkg.com/leaflet-draw@1.0.4/dist/leaflet.draw.js"></script>

  <script>
      $(document).ready(function() {
          $(".navbar-toggler").click(function() {
              $("#sidebar").addClass("active");
          });
          $("#closeSidebar").click(function() {
              $("#sidebar").removeClass("active");
          });
          $(".has-submenu").click(function(e) {
              e.preventDefault();
              $(this).next(".submenu").slideToggle();
              $(this).find(".toggle-submenu").toggleClass("open");
          });
      });
  </script>
  @if (session('success'))
      <script>
          swal("{{ session('success') }}");
      </script>
  @endif
  @if (session('pass'))
      <script>
          swal("تمت العملية بنجاح", "بامكانك الدخول الى حسابك", "success");
      </script>
  @endif

  @yield('js')
  <script>
      //Map
      var token = '{{ csrf_token() }}';
      //Map end
  </script>
  <!--  Map -->
  @yield('map-js')
  <!--  Map end -->
  </body>
