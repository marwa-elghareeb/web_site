<!DOCTYPE html>
<html lang="ar">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>مصنع سابقة الحديث للزجاج واالألومنيوم</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('public/portal/assets/img/logo1.png')}}" rel="icon">
  <link href="{{ asset('public/portal/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Almarai&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('public/portal/assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{ asset('public/portal/assets/vendor/bootstrap/css/bootstrap.rtl.min.css')}}" rel="stylesheet">
  <link href="{{ asset('public/portal/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{ asset('public/portal/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{ asset('public/portal/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{ asset('public/portal/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('public/portal/assets/css/style.css')}}" rel="stylesheet">
  <style>
    .bb{
      background: #676ca0;
    border: 0;
    padding: 10px 24px;
    color: #fff;
    transition: 0.4s;
    border-radius: 50px;
}
    </style>

  <!-- =======================================================
  * Template Name: Remember - v4.10.0
  * Template URL: https://bootstrapmade.com/remember-free-multipurpose-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body dir="rtl">

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:{{ $settingData->email}}">{{ $settingData->email}}</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>{{ $settingData->phone}}</span></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">

        <a href="https://wa.me/{{ $settingData->phone	}}" class="twitter" target="_blank"><i class="bi bi-whatsapp"></i></a>
        <a href="{{ $settingData->twitter}}" class="twitter" target="_blank"><i class="bi bi-twitter"></i></a>
        <a href="{{ $settingData->facebook}}" class="facebook" target="_blank"><i class="bi bi-facebook"></i></a>
        <a href="{{ $settingData->instagram}}" class="instagram" target="_blank"><i class="bi bi-instagram"></i></a>
        <a href="{{ $settingData->linkedin}}" class="linkedin" target="_blank"><i class="bi bi-linkedin"></i></i></a>
        <a href="#" class="info-icons"><i class="fas fa-language"></i></a>
      
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex justify-content-between">

      <div class="logo">
        <!--<h1 class="text-light"><a href="index.html">مصنع سابقة الحديث</a></h1>-->
        <!-- Uncomment below if you prefer to use an image logo -->
         <a href="index.html"><img src="{{ URL ::to ('public/upload/'.$settingData->image)}}" alt="" class="img-fluid"></a>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">الرئيسية</a></li>
          <li><a class="nav-link scrollto" href="#about">من نحن </a></li>
          <li><a class="nav-link scrollto" href="#services">خدماتنا</a></li>
          <li><a class="nav-link scrollto " href="#portfolio">اعمالنا</a></li>
          <li><a class="nav-link scrollto" href="#team">فريق العمل</a></li>
          <!---li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li-->
          <li><a class="nav-link scrollto" href="#contact">تواصل معنا</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
<!-- ======= Hero Section ======= -->
<section id="hero">
    <div class="hero-container" data-aos="fade-up">
      <h1>  مرحبا بكم فى سابقه الحديث للزجاج و الألومنيوم     </h1>
      <h2>متخصصين في صناعة الزجاج و الالمنيوم بأعلى معايير الجودة </h2>
      <a href="#contact" class="btn-get-started scrollto">اطلب الآن</a>
    </div>
  </section><!-- End Hero -->


  @yield('content')





  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">

      <div class="container">

        <div class="row  justify-content-center">
          <div class="col-lg-6">
            <h3>اشترك معانا</h3>
            <p>استمتع بالمزيد من الاخبار والاعلانات الخاصه بمصنع سابقه الحديث للزجاج والالمونيوم</p>
          </div>
        </div>

        <div class="row footer-newsletter justify-content-center">
          <div class="col-lg-6">
            <form action="" method="post">
              <input type="email" name="email" 
              placeholder="البريد الالكترونى" required><input type="submit" value="اشترك الان">
            </form>
          </div>
        </div>

        <div class="social-links">
        <a href="https://wa.me/{{ $settingData->phone	}}" class="twitter"><i class="bx bxl-whatsapp"></i></a>
          <a href="{{ $settingData->twitter	}}" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="{{ $settingData->facebook}}" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="{{ $settingData->instagram}}" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="{{ $settingData->linkedin}}" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>

      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; جميع الحقوق محفوظه <strong><span>اسم الشركه </span></strong>. 
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/remember-free-multipurpose-bootstrap-template/ -->
        صمم بواسطه  <a href="#">اسم الشركه</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('public/portal/assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{ asset('public/portal/assets/vendor/aos/aos.js')}}"></script>
  <script src="{{ asset('public/portal/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('public/portal/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{ asset('public/portal/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{ asset('public/portal/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{ asset('public/portal/assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('public/portal/assets/js/main.js')}}"></script>

</body>

</html>

