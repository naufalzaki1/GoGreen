<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>GOGREEN</title>

    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    <link rel="icon" href="{{ asset('assets/images/favicon.ico')}}" type="image/x-icon" />
  </head>

  <!-- page wrapper -->
  <body class="page-wrapper">
    <!-- .preloader -->
    <div class="preloader"></div>

    <!-- main header area -->
    @include('layouts.header')
    <!-- end main header area -->

    <!-- Banner -->
    <div id="banner">
      <div class="rev_slider_wrapper">
        <!-- START REVOLUTION SLIDER 5.0 auto mode -->
        <div id="main_slider" class="rev_slider" data-version="5.0">
          <ul>
            <!-- SLIDE1  -->
            <li
              data-index="rs-377"
              data-transition="curtain-1"
              data-slotamount="1"
              data-easein="default"
              data-easeout="default"
              data-masterspeed="default"
              data-thumb="{{asset('assets/images/slider/1.jpg')}}"
              data-rotate="0"
              data-saveperformance="off"
              data-title="Business Solutions"
              data-description=""
            >
              <!-- MAIN IMAGE -->
              <img
                src="{{asset('assets/images/slider/1.jpg')}}"
                alt="image"
                data-bgposition="center center"
                data-bgfit="cover"
                data-bgrepeat="no-repeat"
                class="rev-slidebg"
              />
              <!-- LAYERS -->

              <!-- LAYER NR. 1 -->
              <div
                class="tp-caption tp-resizeme rs-parallaxlevel-3"
                data-x="['center','center','center','center']"
                data-hoffset="['0','0','0','0']"
                data-y="['middle','middle','middle','middle']"
                data-voffset="['-104','-104','-150','-50']"
                data-width="none"
                data-height="none"
                data-transform_idle="o:1;"
                data-transform_in="z:0;rX:0deg;rY:0;rZ:0;sX:1.5;sY:1.5;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;"
                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                data-start="1000"
                data-splitout="none"
                data-responsive_offset="on"
                data-elementdelay="0.05"
                style="z-index: 5"
              >
                <div class="tp-title">Save The World</div>
              </div>

              <!-- LAYER NR. 2 -->
              <div
                class="tp-caption tp-resizeme"
                data-x="['center','center','center','center']"
                data-hoffset="['0','0','0','0']"
                data-y="['middle','middle','middle','middle']"
                data-voffset="['-25','-25','-75','30']"
                data-width="none"
                data-height="none"
                data-transform_idle="o:1;"
                data-transform_in="z:0;rX:0deg;rY:0;rZ:0;sX:1.5;sY:1.5;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;"
                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                data-start="1500"
                data-splitout="none"
                data-responsive_offset="on"
                data-elementdelay="0.05"
                style="z-index: 5"
              >
                <h1>Go Green Save the Planet</h1>
              </div>

              <!-- LAYER NR. 3 -->
              <div
                class="tp-caption tp-resizeme"
                data-x="['center','center','center','center']"
                data-hoffset="['0','0','0','0']"
                data-y="['middle','middle','middle','middle']"
                data-voffset="['31','31','-20','70']"
                data-width="none"
                data-height="none"
                data-whitespace="nowrap"
                data-transform_idle="o:1;"
                data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                data-mask_in="x:0px;y:[100%];"
                data-mask_out="x:inherit;y:inherit;"
                data-start="2000"
                data-splitin="none"
                data-splitout="none"
                data-responsive_offset="on"
                style="z-index: 7; white-space: nowrap"
              >
                <div class="text">
                  Change must come before it is too late, we will never find
                  nature destroyed forever.
                </div>
              </div>

              <!-- LAYER NR. 4 -->
              <div
                class="tp-caption tp-resizeme"
                data-x="['center','center','center','center']"
                data-hoffset="['0','0','0','0']"
                data-y="['middle','middle','middle','middle']"
                data-voffset="['104','104','40','120']"
                data-width="none"
                data-height="none"
                data-whitespace="nowrap"
                data-transform_idle="o:1;"
                data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                data-mask_in="x:0px;y:[100%];"
                data-mask_out="x:inherit;y:inherit;"
                data-start="2500"
                data-splitin="none"
                data-splitout="none"
                data-responsive_offset="on"
                style="z-index: 6; white-space: nowrap"
              >
                <div class="button">
                  <a href="#" class="btn-one">Learn More</a>
                  <a href="#" class="btn-two">Join With Us</a>
                </div>
              </div>
            </li>

            <!-- SLIDE2  -->
            <li
              data-index="rs-378"
              data-transition="zoomin"
              data-slotamount="7"
              data-easein="Power4.easeInOut"
              data-easeout="Power4.easeInOut"
              data-masterspeed="2000"
              data-thumb="{{asset('assets/images/slider/1.jpg')}}"
              data-rotate="0"
              data-saveperformance="off"
              data-title="Successful Careers"
              data-description=""
            >
              <!-- MAIN IMAGE -->
              <img
                src="{{asset('assets/images/slider/1.jpg')}}"
                alt=""
                data-bgposition="top center"
                class="rev-slidebg"
                data-no-retina
              />

              <!-- LAYER NR. 1 -->
              <div
                class="tp-caption tp-resizeme rs-parallaxlevel-3"
                data-x="['center','center','center','center']"
                data-hoffset="['0','0','0','0']"
                data-y="['middle','middle','middle','middle']"
                data-voffset="['-104','-104','-150','-50']"
                data-width="none"
                data-height="none"
                data-transform_idle="o:1;"
                data-transform_in="z:0;rX:0deg;rY:0;rZ:0;sX:1.5;sY:1.5;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;"
                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                data-start="1000"
                data-splitout="none"
                data-responsive_offset="on"
                data-elementdelay="0.05"
                style="z-index: 5"
              >
                <div class="tp-title">Save The World</div>
              </div>

              <!-- LAYER NR. 2 -->
              <div
                class="tp-caption tp-resizeme"
                data-x="['center','center','center','center']"
                data-hoffset="['0','0','0','0']"
                data-y="['middle','middle','middle','middle']"
                data-voffset="['-25','-25','-75','25']"
                data-width="none"
                data-height="none"
                data-transform_idle="o:1;"
                data-transform_in="z:0;rX:0deg;rY:0;rZ:0;sX:1.5;sY:1.5;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;"
                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                data-start="1500"
                data-splitout="none"
                data-responsive_offset="on"
                data-elementdelay="0.05"
                style="z-index: 5"
              >
                <h1>Go Green Save the Planet</h1>
              </div>

              <!-- LAYER NR. 3 -->
              <div
                class="tp-caption tp-resizeme"
                data-x="['center','center','center','center']"
                data-hoffset="['0','0','0','0']"
                data-y="['middle','middle','middle','middle']"
                data-voffset="['31','31','-20','70']"
                data-width="none"
                data-height="none"
                data-whitespace="nowrap"
                data-transform_idle="o:1;"
                data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                data-mask_in="x:0px;y:[100%];"
                data-mask_out="x:inherit;y:inherit;"
                data-start="2000"
                data-splitin="none"
                data-splitout="none"
                data-responsive_offset="on"
                style="z-index: 7; white-space: nowrap"
              >
                <div class="text">to Get Our Global Clean.. Go Green</div>
              </div>

              <!-- LAYER NR. 4 -->
              <div
                class="tp-caption tp-resizeme"
                data-x="['center','center','center','center']"
                data-hoffset="['0','0','0','0']"
                data-y="['middle','middle','middle','middle']"
                data-voffset="['104','104','60','120']"
                data-width="none"
                data-height="none"
                data-whitespace="nowrap"
                data-transform_idle="o:1;"
                data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                data-mask_in="x:0px;y:[100%];"
                data-mask_out="x:inherit;y:inherit;"
                data-start="2500"
                data-splitin="none"
                data-splitout="none"
                data-responsive_offset="on"
                style="z-index: 6; white-space: nowrap"
              >
                <div class="button">
                  <a href="#" class="btn-one">Learn More</a>
                  <a href="#" class="btn-two">Join With Us</a>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
      <!-- END REVOLUTION SLIDER -->
    </div>
    <!-- End of #banner -->

    <!-- welcome section -->
    <section class="welcome-section">
      <div class="container">
        <div class="welcome-title centred">
          <div class="title-top">4+ volunteer</div>
          <div class="title">People working with us since 2023!!</div>
          <div class="title-text font_size_16">
            Leverage the employment of a team of volunteers who work hard to
            protect the earth with their various efforts and initiatives.<br />
            Collaborative thinking to advance thinking to advance the overall
            value proposition.
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 col-sm-6 col-xs-12 welcome-column">
            <div class="single-item">
              <div class="img-box">
                <figure><img src="{{asset('assets/images/welcome/1.jpg')}}" alt="" /></figure>
              </div>
              <div class="lower-content">
                <div class="content-text">
                  <h3>Solar System</h3>
                  <div class="text font_size_16">Velit esse molestie</div>
                </div>
                <div class="button">
                  <a href="#"><i class="fa fa-angle-right"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12 welcome-column">
            <div class="single-item">
              <div class="img-box">
                <figure><img src="{{asset('assets/images/welcome/2.jpg')}}" alt="" /></figure>
              </div>
              <div class="lower-content">
                <div class="content-text">
                  <h3>Wind Refine</h3>
                  <div class="text font_size_16">Velit esse molestie</div>
                </div>
                <div class="button">
                  <a href="#"><i class="fa fa-angle-right"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12 welcome-column">
            <div class="single-item">
              <div class="img-box">
                <figure><img src="{{asset('assets/images/welcome/3.jpg')}}" alt="" /></figure>
              </div>
              <div class="lower-content">
                <div class="content-text">
                  <h3>Recycling System</h3>
                  <div class="text font_size_16">Velit esse molestie</div>
                </div>
                <div class="button">
                  <a href="#"><i class="fa fa-angle-right"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- welcome section end -->

    <!-- service section -->
    <section class="service-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12 service-column">
            <div class="tab-content-area">
              <ul class="nav nav-pills nav-justified">
                <li>
                  <a data-toggle="pill" href="#menu1"
                    ><i class="flaticon-nature-1"></i> RECYCLING</a
                  >
                </li>
                <li>
                  <a data-toggle="pill" href="#menu2"
                    ><i class="flaticon-leave"></i> ECO SYSTEM</a
                  >
                </li>
                <li class="active">
                  <a data-toggle="pill" href="#menu3"
                    ><i class="flaticon-technology"></i> WIND ENERGY</a
                  >
                </li>
                <li>
                  <a data-toggle="pill" href="#menu4"
                    ><i class="flaticon-weather"></i> WATER REFINING</a
                  >
                </li>
                <li>
                  <a data-toggle="pill" href="#menu5"
                    ><i class="flaticon-nature"></i> SAVING FORESTS</a
                  >
                </li>
              </ul>

              <div class="tab-content">
                <div id="menu1" class="tab-pane fade">
                  <div class="service-content">
                    <div class="service-title">RECYCLING</div>
                    <div class="content-text">
                      <div class="img-box">
                        <figure>
                          <img src="{{asset('assets/images/service/1.png')}}" alt="" />
                        </figure>
                      </div>
                      <p>
                        The implant fixture is first placed, so that it ilikely
                        to osseointegrate, then a dental prosthetic is added.
                        then a dental prosthetic is added.then a dental
                        prosthetic is added.
                      </p>
                    </div>
                    <ul class="list-content">
                      <li>
                        Being eco-friendly today is becoming more and more
                        important.
                      </li>
                      <li>
                        We use non-violent, creative confrontation to expose
                        global
                      </li>
                      <li>
                        We use the support of more than 1 million activists
                      </li>
                    </ul>
                  </div>
                </div>
                <div id="menu2" class="tab-pane fade">
                  <div class="service-content">
                    <div class="service-title">ECO SYSTEM</div>
                    <div class="content-text">
                      <div class="img-box">
                        <figure>
                          <img src="{{asset('assets/images/service/2.png')}}" alt="" />
                        </figure>
                      </div>
                      <p>
                        The implant fixture is first placed, so that it ilikely
                        to osseointegrate, then a dental prosthetic is added.
                        then a dental prosthetic is added.then a dental
                        prosthetic is added.
                      </p>
                    </div>
                    <ul class="list-content">
                      <li>
                        Being eco-friendly today is becoming more and more
                        important.
                      </li>
                      <li>
                        We use non-violent, creative confrontation to expose
                        global
                      </li>
                      <li>
                        We use the support of more than 1 million activists
                      </li>
                    </ul>
                  </div>
                </div>
                <div id="menu3" class="tab-pane fade in active">
                  <div class="service-content">
                    <div class="service-title">WIND ENERGY</div>
                    <div class="content-text">
                      <div class="img-box">
                        <figure>
                          <img src="{{asset('assets/images/service/3.png')}}" alt="" />
                        </figure>
                      </div>
                      <p>
                        The implant fixture is first placed, so that it ilikely
                        to osseointegrate, then a dental prosthetic is added.
                        then a dental prosthetic is added.then a dental
                        prosthetic is added.
                      </p>
                    </div>
                    <ul class="list-content">
                      <li>
                        Being eco-friendly today is becoming more and more
                        important.
                      </li>
                      <li>
                        We use non-violent, creative confrontation to expose
                        global
                      </li>
                      <li>
                        We use the support of more than 1 million activists
                      </li>
                    </ul>
                  </div>
                </div>
                <div id="menu4" class="tab-pane fade">
                  <div class="service-content">
                    <div class="service-title">WATER REFINING</div>
                    <div class="content-text">
                      <div class="img-box">
                        <figure>
                          <img src="{{asset('assets/images/service/4.png')}}" alt="" />
                        </figure>
                      </div>
                      <p>
                        The implant fixture is first placed, so that it ilikely
                        to osseointegrate, then a dental prosthetic is added.
                        then a dental prosthetic is added.then a dental
                        prosthetic is added.
                      </p>
                    </div>
                    <ul class="list-content">
                      <li>
                        Being eco-friendly today is becoming more and more
                        important.
                      </li>
                      <li>
                        We use non-violent, creative confrontation to expose
                        global
                      </li>
                      <li>
                        We use the support of more than 1 million activists
                      </li>
                    </ul>
                  </div>
                </div>
                <div id="menu5" class="tab-pane fade">
                  <div class="service-content">
                    <div class="service-title">SAVING Forests</div>
                    <div class="content-text">
                      <div class="img-box">
                        <figure>
                          <img src="{{asset('assets/images/service/5.png')}}" alt="" />
                        </figure>
                      </div>
                      <p>
                        The implant fixture is first placed, so that it ilikely
                        to osseointegrate, then a dental prosthetic is added.
                        then a dental prosthetic is added.then a dental
                        prosthetic is added.
                      </p>
                    </div>
                    <ul class="list-content">
                      <li>
                        Being eco-friendly today is becoming more and more
                        important.
                      </li>
                      <li>
                        We use non-violent, creative confrontation to expose
                        global
                      </li>
                      <li>
                        We use the support of more than 1 million activists
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- service section end -->

    <!-- helping-us -->
    <section class="helping-us">
      <div class="container">
        <div class="helping-title centred">
          <div class="sec-title"><h2>Helping Us By Donating</h2></div>
          <div class="tit-text font_size_16">
            Together, we can make a real difference in preserving the Earth's
            sustainability. <br />
            You'll have the opportunity to get involved in a variety of
            environmental projects, from tree planting to beach cleanups, and
            more.
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-sm-12 col-xs-12 helping-column">
            <div class="video-gallery">
              <img
                src="{{asset('assets/images/home/video-gallery.jpg')}}"
                alt="Awesome Video Gallery"
              />
              <div class="overlay-gallery">
                <div class="icon-holder">
                  <div class="icon">
                    <a
                      class="html5lightbox"
                      title="Plan a tree"
                      href="https://www.youtube.com/watch?v=fFr6E-JOj-k"
                      ><img src="{{asset('assets/images/home/play-btn.png')}}" alt="Play Button"
                    /></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-sm-12 col-xs-12 helping-column">
            <div class="helping-content">
              <div class="title">
                Join <span>Campaign</span> & helping <br />us by donating
              </div>
              <div class="text font_size_16">
                With every donation you make, you provide vital protection for
                the Earth. Your donation supports important projects such as
                reforestation, renewable energy, and wildlife habitat
                protection. Let's work together to keep the Earth green.
              </div>
              <div class="info-box">
                <div class="single-info">
                  <div class="img-box">
                    <figure><img src="{{asset('assets/images/home/info1.png')}}" alt="" /></figure>
                  </div>
                  <h4>Donate Now</h4>
                </div>
                <div class="single-info">
                  <div class="img-box">
                    <figure><img src="{{asset('assets/images/home/info2.png')}}" alt="" /></figure>
                  </div>
                  <h4>Sponsor Projects</h4>
                </div>
                <div class="single-info">
                  <div class="img-box">
                    <figure><img src="{{asset('assets/images/home/info3.png')}}" alt="" /></figure>
                  </div>
                  <h4>Be a Volunteer</h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- helping-us end -->

    <!-- gallery section -->
    <section class="gallery-section">
      <div class="container-fluid">
        <div class="four-column-carousel">
          <div class="single-item">
            <div class="single-item-overlay">
              <div class="img-box">
                <img src="{{asset('assets/images/gallery/1.jpg')}}" alt="" />
                <a href="gallery.html" class="overlay">
                  <div class="inner-box">
                    <div class="content">
                      <div class="text">Plant Seedling And Growth</div>
                      <span>Environment</span>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>
          <div class="single-item">
            <div class="single-item-overlay">
              <div class="img-box">
                <img src="{{asset('assets/images/gallery/2.jpg')}}" alt="" />
                <a href="gallery.html" class="overlay">
                  <div class="inner-box">
                    <div class="content">
                      <div class="text">Plant Seedling And Growth</div>
                      <span>Environment</span>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>
          <div class="single-item">
            <div class="single-item-overlay">
              <div class="img-box">
                <img src="{{asset('assets/images/gallery/3.jpg')}}" alt="" />
                <a href="gallery.html" class="overlay">
                  <div class="inner-box">
                    <div class="content">
                      <div class="text">Plant Seedling And Growth</div>
                      <span>Environment</span>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>
          <div class="single-item">
            <div class="single-item-overlay">
              <div class="img-box">
                <img src="{{asset('assets/images/gallery/4.jpg')}}" alt="" />
                <a href="gallery.html" class="overlay">
                  <div class="inner-box">
                    <div class="content">
                      <div class="text">Plant Seedling And Growth</div>
                      <span>Environment</span>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="link-text centred">
          Please click on button arrow in order to view more or
          <a href="#">View all</a>
        </div>
      </div>
    </section>
    <!-- gallery section end -->

    <!-- news section -->
    <section class="news-section">
      <div class="container">
        <div class="news-title">
          <div class="sec-title"><h2>Latest News</h2></div>
          <div class="tit-text">
            Leverage agile frameworks to provide a robust synopsis for high
            level overviews.
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 col-sm-6 col-xs-12 news-column">
            <div class="single-item">
              <div class="single-item-overlay">
                <div class="img-box">
                  <img src="{{asset('assets/images/news/1.jpg')}}" alt="" />
                  <div class="overlay">
                    <div class="inner-box">
                      <ul class="content">
                        <li>
                          <a href="blog-details.html"
                            ><i class="fa fa-link"></i
                          ></a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="lower-content">
                <div class="meta">Ecology</div>
                <h5>
                  <a href="blog-details.html">How to save animals in future</a>
                </h5>
                <div class="text">
                  <p>
                    Cras dapibus ullamcorper dictum. Vivamus nec erat placerat
                    felis scelerisque porttitor nec eratin ac turpis.
                  </p>
                </div>
                <div class="button-content">
                  By Joevan <span>15 Mar 2024</span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12 news-column">
            <div class="single-item">
              <div class="single-item-overlay">
                <div class="img-box">
                  <img src="{{asset('assets/images/news/2.jpg')}}" alt="" />
                  <div class="overlay">
                    <div class="inner-box">
                      <ul class="content">
                        <li>
                          <a href="blog-details.html"
                            ><i class="fa fa-link"></i
                          ></a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="lower-content">
                <div class="meta">Natural</div>
                <h5>
                  <a href="blog-details.html">Get Clear Environment System</a>
                </h5>
                <div class="text">
                  <p>
                    Cras dapibus ullamcorper dictum. Vivamus nec erat placerat
                    felis scelerisque porttitor nec eratin ac turpis.
                  </p>
                </div>
                <div class="button-content">
                  By Adrian <span>19 Sep 2024</span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12 news-column">
            <div class="single-item">
              <div class="single-item-overlay">
                <div class="img-box">
                  <img src="{{asset('assets/images/news/3.jpg')}}" alt="" />
                  <div class="overlay">
                    <div class="inner-box">
                      <ul class="content">
                        <li>
                          <a href="blog-details.html"
                            ><i class="fa fa-link"></i
                          ></a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="lower-content">
                <div class="meta">Environment</div>
                <h5>
                  <a href="blog-details.html">Creating ideas to save energy</a>
                </h5>
                <div class="text">
                  <p>
                    Cras dapibus ullamcorper dictum. Vivamus nec erat placerat
                    felis scelerisque porttitor nec eratin ac turpis.
                  </p>
                </div>
                <div class="button-content">
                  By Dani <span>25 Jan 2024</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- news section end -->

    <!-- testimonials section -->
    <section class="testimonials-section">
      <div class="testimonial-area">
        <div class="container">
          <div class="sec-title"><h2>What our Client Says</h2></div>
          <div class="tit-text">
            Cras dapibus ullamcorper dictum. Vivamus nec erat placerat felis<br />
            scelerisque porttitor nec eratin ac turpis.
          </div>
          <div class="three-column-carousel">
            <div class="testimonials-content">
              <div class="author-info">
                <div class="author">
                  <h4>Afzal</h4>
                  <div class="author-title">Imam masjid</div>
                </div>
                <div class="author-img">
                  <figure><img src="{{asset('assets/images/testimonial/1.jpg')}}" alt="" /></figure>
                </div>
              </div>
              <div class="text">
                “Saya sangat terkesan dengan web ini! Sangat banyak membantu
                serta memberikan informasi yang lengkap. Dengan bantuan web ini,
                saya lebih tau sebab akibat jika tidak ada perlindungan kita.
                Terima kasih atas kontribusi yang sangat berarti!”
              </div>
            </div>
            <div class="testimonials-content">
              <div class="author-info">
                <div class="author">
                  <h4>Dyto</h4>
                  <div class="author-title">Info tugas</div>
                </div>
                <div class="author-img">
                  <figure><img src="{{asset('assets/images/testimonial/2.jpg')}}" alt="" /></figure>
                </div>
              </div>
              <div class="text">
                “"Saya benar-benar terkesan dengan web ini! Dengan fitur dan
                konten yang berkualitas, web ini telah menjadi sumber
                pengetahuan yang memberikan informasi. Terima kasih kepada tim
                atas usaha dalam menyediakan layanan yang sangat membantu bagi
                banyak orang!”
              </div>
            </div>
            <div class="testimonials-content">
              <div class="author-info">
                <div class="author">
                  <h4>Zhilan</h4>
                  <div class="author-title">User mm mage</div>
                </div>
                <div class="author-img">
                  <figure><img src="{{asset('assets/images/testimonial/3.jpg')}}" alt="" /></figure>
                </div>
              </div>
              <div class="text">
                “Web ini sungguh luar biasa! Saya sekarang memiliki pemahaman
                yang jelas tentang cara memilah dan mendaur ulang sampah dengan
                benar. Saya juga menemukan banyak ide kreatif untuk mengurangi
                limbah di rumah saya. Terima kasih kepada web ini.”
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="brand-area">
        <div class="container">
          <ul class="brand-slider">
            <li>
              <a href="#"
                ><figure><img src="{{asset('assets/images/brand/1.png')}}" alt="" /></figure
              ></a>
            </li>
            <li>
              <a href="#"
                ><figure><img src="{{asset('assets/images/brand/2.png')}}" alt="" /></figure
              ></a>
            </li>
            <li>
              <a href="#"
                ><figure><img src="{{asset('assets/images/brand/3.png')}}" alt="" /></figure
              ></a>
            </li>
            <li>
              <a href="#"
                ><figure><img src="{{asset('assets/images/brand/4.png')}}" alt="" /></figure
              ></a>
            </li>
            <li>
              <a href="#"
                ><figure><img src="{{asset('assets/images/brand/5.png')}}" alt="" /></figure
              ></a>
            </li>
          </ul>
        </div>
      </div>
    </section>
    <!-- testimonials section end -->

    @include('layouts.footer')
    <!-- main-footer-area end -->

    <!--End pagewrapper-->

    <!-- donate popup -->
    <div id="donate-popup" class="donate-popup">
      <div class="close-donate theme-btn">
        <span class="fa fa-close"></span>
      </div>
      <div class="popup-inner">
        <div class="container">
          <div class="donate-form-area">
            <h2>Donation Information</h2>
            <h4>How much would you like to donate:</h4>
            <form action="#" class="donate-form default-form">
              <ul class="chicklet-list clearfix">
                <li>
                  <input
                    type="radio"
                    id="donate-amount-1"
                    name="donate-amount"
                  />
                  <label for="donate-amount-1" data-amount="1000">$1000</label>
                </li>
                <li>
                  <input
                    type="radio"
                    id="donate-amount-2"
                    name="donate-amount"
                    checked="checked"
                  />
                  <label for="donate-amount-2" data-amount="2000">$2000</label>
                </li>
                <li>
                  <input
                    type="radio"
                    id="donate-amount-3"
                    name="donate-amount"
                  />
                  <label for="donate-amount-3" data-amount="3000">$3000</label>
                </li>
                <li>
                  <input
                    type="radio"
                    id="donate-amount-4"
                    name="donate-amount"
                  />
                  <label for="donate-amount-4" data-amount="4000">$4000</label>
                </li>
                <li>
                  <input
                    type="radio"
                    id="donate-amount-5"
                    name="donate-amount"
                  />
                  <label for="donate-amount-5" data-amount="5000">$5000</label>
                </li>
                <li class="other-amount">
                  <div
                    class="input-container"
                    data-message="Every dollar you donate helps end hunger."
                  >
                    <span>Or</span
                    ><input
                      type="text"
                      id="other-amount"
                      placeholder="Other Amount"
                    />
                  </div>
                </li>
              </ul>
              <h3>Donor Information</h3>
              <div class="form-bg">
                <div class="row clearfix">
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                      <p>Your Name*</p>
                      <input type="text" name="fname" placeholder="" />
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                      <p>Email*</p>
                      <input type="text" name="fname" placeholder="" />
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                      <p>Address*</p>
                      <input type="text" name="fname" placeholder="" />
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                      <p>Phn Num*</p>
                      <input type="text" name="fname" placeholder="" />
                    </div>
                  </div>
                </div>
              </div>
              <ul class="payment-option">
                <li>
                  <h4>Choose your payment method:</h4>
                </li>
                <li>
                  <div class="checkbox">
                    <label>
                      <input name="pay-us" type="checkbox" />
                      <span>Paypal</span>
                    </label>
                  </div>
                </li>
                <li>
                  <div class="checkbox">
                    <label>
                      <input name="pay-us" type="checkbox" />
                      <span>Offline Donation</span>
                    </label>
                  </div>
                </li>
                <li>
                  <div class="checkbox">
                    <label>
                      <input name="pay-us" type="checkbox" />
                      <span>Credit Card</span>
                    </label>
                  </div>
                </li>
                <li>
                  <div class="checkbox">
                    <label>
                      <input name="pay-us" type="checkbox" />
                      <span>Debit Card</span>
                    </label>
                  </div>
                </li>
              </ul>
              <div class="center">
                <button class="btn-one" type="submit">Donate Now</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- donate popup -->

    <!--Scroll to top-->
    <div class="scroll-to-top scroll-to-target" data-target=".main-header">
      <span class="icon fa fa-angle-up"></span>
    </div>

    <!--jquery js -->

    <script type="text/javascript" src="{{asset('assets/js/jquery-2.1.4.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/js/wow.js')}}"></script>
    <script src="{{asset('assets/js/validation.js')}}"></script>
    <script src="{{asset('assets/js/isotope.js')}}"></script>
    <script src="{{asset('assets/js/jquery.fancybox.pack.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/SmoothScroll.js')}}"></script>
    <script src="{{asset('assets/js/html5lightbox/html5lightbox.js')}}"></script>

    <!-- revolution -->
    <script src="{{asset('vendor/revolution/jquery.themepunch.tools.min.js')}}"></script>
    <script src="{{asset('vendor/revolution/jquery.themepunch.revolution.min.js')}}"></script>
    <script
      type="text/javascript"
      src="{{asset('vendor/revolution/revolution.extension.slideanims.min.js')}}"
    ></script>
    <script
      type="text/javascript"
      src="{{asset('vendor/revolution/revolution.extension.layeranimation.min.js')}}"
    ></script>
    <script
      type="text/javascript"
      src="{{asset('vendor/revolution/revolution.extension.navigation.min.js')}}"
    ></script>
    <script
      type="text/javascript"
      src="{{asset('vendor/revolution/revolution.extension.kenburn.min.js')}}"
    ></script>
    <script
      type="text/javascript"
      src="{{asset('vendor/revolution/revolution.extension.actions.min.js')}}"
    ></script>
    <script
      type="text/javascript"
      src="{{asset('vendor/revolution/revolution.extension.parallax.min.js')}}"
    ></script>
    <script
      type="text/javascript"
      src="{{asset('vendor/revolution/revolution.extension.migration.min.js')}}"
    ></script>

    <script src="{{asset('assets/js/script.js')}}"></script>

    <!-- End of .page_wrapper -->
  </body>
</html>
