<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<header class="main-header">
      <!-- header top -->
      <div class="header-top">
        <div class="container">
          <div class="row">
            <div class="col-md-3 col-sm-4 col-xs-12">
              <div class="logo-box">
                <a href="index.html"
                  ><figure><img src="{{asset('assets/images/home/logo.png')}}" alt="" /></figure
                ></a>
              </div>
            </div>
            <div class="col-md-9 col-sm-8 col-xs-12">
              <div class="info-area">
                <div class="">
                  <div class="single-info">
                    <div class="icon-box"><i class="flaticon-home"></i></div>
                    <div class="text">
                      Kampus C Unair,<br />
                      Surabaya, Indonesia
                    </div>
                  </div>
                  <div class="single-info">
                    <div class="icon-box">
                      <i class="flaticon-telephone"></i>
                    </div>
                    <div class="text">
                      (+62) 8222211111<br />
                      (+62) 8111122222
                    </div>
                  </div>
                  <ul class="social-top trn_5">
                    <li>
                      <a href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-instagram"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-google-plus"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- header-top end -->

      <!-- main header -->
      <div class="theme_menu stricky">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 menu-column">
              <div class="menu-area">
                <nav class="main-menu">
                  <div class="navbar-header">
                    <button
                      type="button"
                      class="navbar-toggle"
                      data-toggle="collapse"
                      data-target=".navbar-collapse"
                    >
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </button>
                  </div>
                  <div class="navbar-collapse collapse clearfix">
                    <ul class="navigation clearfix">
                      <li><a href="{{route('home')}}">Home</a></li>
                      <li><a href="{{route('about')}}">About</a></li>
                      <li><a href="{{route('services')}}">Services</a></li>
                      <li><a href="{{route('gallery')}}">Gallery</a></li>
                      <li><a href="{{route('blog')}}">Blog</a></li>
                      <li><a href="{{route('contact')}}">Contact Us</a></li>
                    </ul>
                    <!-- mobile menu -->
                    <ul class="mobile-menu clearfix">
                      <li>
                        <a href="index.html">Home</a>
                      </li>
                      <li>
                        <a href="about.html">About</a>
                      </li>
                      <li>
                        <a href="service.html">Services</a>
                      </li>
                      <li>
                        <a href="gallery.html">Gallery</a>
                      </li>
                      <li>
                        <a href="blog.html">Blog</a>
                      </li>
                      <li>
                        <a href="contact.html">Contact Us</a>
                      </li>
                    </ul>
                  </div>
                </nav>
                <div class="donate-box">
                  <button class="donate-box-btn" onclick="{{route('login')}}">Donate Now</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
</body>
</html>