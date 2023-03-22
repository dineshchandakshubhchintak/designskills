<!DOCTYPE html>

<html dir="ltr" lang="en">

<head>



<!-- Meta Tags -->

<meta name="viewport" content="width=device-width,initial-scale=1.0"/>

<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>

<meta name="description" content="LearnPress | Education & Courses HTML Template" />

<meta name="keywords" content="academy, course, education, education html theme, elearning, learning," />

<meta name="author" content="ThemeMascot" />



<!-- Page Title -->

<title>Designskill</title>



<!-- Favicon and Touch Icons -->

<link href="img/logo/fav.png" rel="shortcut icon" type="img/logo/fav.png">

<link href="images/apple-touch-icon.png" rel="apple-touch-icon">

<link href="images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">

<link href="images/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">

<link href="images/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">



<!-- Stylesheet -->

<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">

<link href="css/jquery-ui.min.css" rel="stylesheet" type="text/css">

<link href="css/animate.css" rel="stylesheet" type="text/css">

<link href="css/css-plugin-collections.css" rel="stylesheet"/>

<!-- CSS | menuzord megamenu skins -->

<link id="menuzord-menu-skins" href="css/menuzord-skins/menuzord-rounded-boxed.css" rel="stylesheet"/>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-4XYNJ94051"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-4XYNJ94051');
</script>

</head>
<!-- CSS | Main style file -->

<link href="css/style-main.css" rel="stylesheet" type="text/css">

<!-- CSS | Preloader Styles 

<link href="css/preloader.css" rel="stylesheet" type="text/css">-->

<!-- CSS | Custom Margin Padding Collection -->

<link href="css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">

<!-- CSS | Responsive media queries -->

<link href="css/responsive.css" rel="stylesheet" type="text/css">

<!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->

<!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->



<!-- CSS | Theme Color -->

<link href="css/colors/theme-skin-color-set-1.css" rel="stylesheet" type="text/css">



<!-- external javascripts -->

<script src="js/jquery-2.2.4.min.js"></script>

<script src="js/jquery-ui.min.js"></script>

<script src="js/bootstrap.min.js"></script>

<!-- JS | jquery plugin collection for this theme -->

<script src="js/jquery-plugin-collection.js"></script>



<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->

<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

<!--[if lt IE 9]>

  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>

  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

<![endif]-->

</head>

<body class="">

<div id="wrapper" class="clearfix">

  <!-- preloader 

  <div id="preloader">

    <div id="spinner">

      <img alt="" src="images/preloaders/5.gif">

    </div>

    <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>

  </div>-->

  

  <!-- Header -->

  <?php include 'includes/header.php' ?>

  

  <!-- Start main-content -->

  <div class="main-content bg-lighter">

    <!-- Section: inner-header -->

    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="img/bg6.jpg" style="height:300px">

      <div class="container pt-70 pb-20">

        <!-- Section Content -->

        <div class="section-content">

          <div class="row">

            <div class="col-md-12">

              <h2 class="title text-white text-center">Admission Details</h2>

              

            </div>

          </div>

        </div>

      </div>

    </section>



    <!-- Section: About -->

    <section id="about">

      <div class="container">

        <div class="section-content">

          <div class="row mt-50">

            <div class="col-md-4 col-sm-12 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s;">

             <div class="p-30 bg-theme-colored mt-10">

                <h3 class="text-white mt-0 mb-10">Enquire now</h3>

              <!-- Appilication Form Start-->

              <form id="reservation_form" name="reservation_form" class="reservation-form mt-20" method="post" action="includes/reservation.php" novalidate="novalidate">

                <div class="row">

                  <div class="col-sm-12">

                    <div class="form-group mb-20">

                      <input placeholder="Enter Name" type="text" id="reservation_name" name="reservation_name" required="" class="form-control" aria-required="true">

                    </div>

                  </div>

                  <div class="col-sm-6">

                    <div class="form-group mb-20">

                      <input placeholder="Email" type="text" id="reservation_email" name="reservation_email" class="form-control" required="" aria-required="true">

                    </div>

                  </div>

                  <div class="col-sm-6">

                    <div class="form-group mb-20">

                      <input placeholder="Phone" type="text" id="reservation_phone" name="reservation_phone" class="form-control" required="" aria-required="true">

                    </div>

                  </div>

                  <div class="col-sm-6">

                    <div class="form-group mb-20">

                      <div class="styled-select">

                        <select id="person_select" name="person_select" class="form-control" required="" aria-required="true">

                          <option value="">Select Courses</option>

                          <option value="1 Person">ANIMATION</option>

                          <option value="2 Person">GRAPHIC DESIGN</option>

                          <option value="3 Person">FILM & TV PRODUCTION</option>

                          <option value="4 Person">VFX</option>

                          <option value="5 Person">GAME DESIGN/GAME ART</option>

                          <option value="6 Person">VIDEO EDITING</option>

                          <option value="7 Person">WEB DESIGN TECHNOLOGY</option>

                          <option value="8 Person">INDUSTRIAL DESIGN FOUNDATION</option>

                          <option value="9 Person">PRINTING & PACKAGING</option>

                      </select>

                      </div>

                    </div>

                  </div>

                  <div class="col-sm-6">

                    <div class="form-group mb-20">

                      <input name="Date" class="form-control required date-picker" type="text" placeholder="Date" aria-required="true">

                    </div>

                  </div>

                  <div class="col-sm-12">

                    <div class="form-group">

                      <textarea placeholder="Enter Message" rows="3" class="form-control required" name="form_message" id="form_message" aria-required="true"></textarea>

                    </div>

                  </div>

                  <div class="col-sm-12">

                    <div class="form-group mb-0 mt-10">

                      <input name="form_botcheck" class="form-control" type="hidden" value="">

                      <button type="submit" class="btn btn-colored btn-default text-black btn-lg btn-block" data-loading-text="Please wait...">Submit Request</button>

                    </div>

                  </div>

                </div>

              </form>

              <!-- Application Form End-->



              <!-- Application Form Validation Start-->

              <script type="text/javascript">

                $("#reservation_form").validate({

                  submitHandler: function(form) {

                    var form_btn = $(form).find('button[type="submit"]');

                    var form_result_div = '#form-result';

                    $(form_result_div).remove();

                    form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');

                    var form_btn_old_msg = form_btn.html();

                    form_btn.html(form_btn.prop('disabled', true).data("loading-text"));

                    $(form).ajaxSubmit({

                      dataType:  'json',

                      success: function(data) {

                        if( data.status == 'true' ) {

                          $(form).find('.form-control').val('');

                        }

                        form_btn.prop('disabled', false).html(form_btn_old_msg);

                        $(form_result_div).html(data.message).fadeIn('slow');

                        setTimeout(function(){ $(form_result_div).fadeOut('slow') }, 6000);

                      }

                    });

                  }

                });

              </script>

              <!-- Application Form Validation end -->

              </div>

            </div>

            <div class="col-md-7 mt-20">

              <!--<div class="caption"> <span class="text-uppercase letter-space-4 mb-10 text-theme-colored">Best Services We Provided </span>-->

                <h2 class="text-uppercase text-theme-colored font-weight-600 letter-space-2 mt-5">ABOUT OUR INSTITUTE</h2>

                <p> Design Media & Edutainment School is a hub for innovation and creativity. Pioneered by experienced professional from the creative industry, Design School is unique in its teaching methodology and training standards. We promote design study, research and promotional activities as part of the curriculum. DMES is completely dedicated to higher levels of interdisciplinary research and training in the fields of art and design..</p>

                <p>We are located in Camp, Pune and have a state-of-the-art creative design studio that is successfully providing knowledge and holistic education for students and professional who are aspiring to create a mark in the field of design. Our teaching methodology emphasizes on a practical learning approach inculcate the production practices. This approach is meant to help students face all industry-related challenges..</p>

              </div>

            </div>

          </div>

          <!--<div class="row mt-30 text-justify">

            <div class="col-md-7">

              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas doloribus facere perferendis eveniet ipsam reiciendis cumque aspernatur natus! Voluptatem laudantium totam, quia reiciendis quibusdam voluptate architecto impedit id iste rem mollitia enim reprehenderit fugit exercitationem ab placeat debitis vel excepturi molestiae laboriosam aut. Possimus expedita sint neque voluptatibus, odio, architecto, excepturi corrupti magnam sunt ipsa voluptatem consequuntur iusto quo, molestiae dolorem repudiandae. Consectetur dolorem placeat ratione eum quasi delectus, corrupti.</p>

            </div>

            <div class="col-md-5">

              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro placeat totam eum iusto, dolore velit? Voluptas autem asperiores soluta ducimus, tempore dolorem molestias eaque iusto nesciunt, qui velit quaerat? Ratione error fugit sapiente at doloremque modi voluptatibus et quasi iure quas. Nulla, similique dolores fugit ex. Quia, dolores itaque minus.</p>

            </div>

          </div>

        </div>-->

      </div>

    </section>



    <!-- Section: Divider  -->

    <section class="divider parallax layer-overlay overlay-theme-colored-7" data-bg-img="http://placehold.it/1920x1280" data-parallax-ratio="0.7">

      <div class="container">

        <div class="row">

          <div class="col-md-8 col-md-offset-2">

            <div class="section-content text-center">

              <h2 class="text-white letter-space-4 font-32">Your Personal <span class="text-theme-color-2">Expert</span></h2>

              <h3 class="text-white text-uppercase font-weight-300 mt-0">I will customize your workouts so that you can achieve your training goals. It's Truly Personal</h3>

              <a href="" class="btn btn-default mt-10 btn-md text-uppercase"> Contact Me</a> </div>

          </div>

        </div>

      </div>

    </section>





    <section>



      <div class="container mt-30 mb-30 pt-30 pb-30">

        <div class="row">

          <div class="col-md-10 col-md-offset-1">

            <div class="blog-posts">

              <div class="col-md-12">

                <div class="row list-dashed">

                 <div class="text-center">

                    <H2> AWARDS & ACHIEVEMENTS</H2>

                    </div>

                  <article class="post clearfix mb-30 pb-30">

                    <div class="entry-header">

                      <div class="post-thumb thumb"> 

                        <img src="#" alt="" class="img-responsive img-fullwidth"> 

                      </div>

                    </div>

                    <div class="entry-content border-1px p-20 pr-10">

                      <div class="entry-meta media mt-0 no-bg no-border">

                        

                        <div class="media-body pl-15">

                          <div class="event-content pull-left flip">

                            <h4 class="entry-title text-white text-uppercase m-0 mt-5"><a href="blog-single-right-sidebar.html">Post title here</a></h4>

                      <p class="mt-10">2022 – Our Student Pankaj Sing WON Gold Medal -3D Digital Game ART at the India Skills National Finals.</p>



                      <p class="mt-10">2021 – Our Student Won Gold and Silver medal for 3D Digital Game Art during the Maharashtra State Skills Competition.</p>



                      <p class="mt-10">2021 – Our Student Won gold medal for Graphic Design Skills during the Maharashtra State Skills Competition.</p>



                      <p class="mt-10">2019 - Atulya Sanman award – Maharashtra Times.</p>



                      <p class="mt-10">2019 - Graphic Design Student Winning– Bronze Medal World Skills Kazan Russia.</p>



                      <p class="mt-10">2019 – Graphic Design Student Winning Gold Medal in Italy National Friendly competition..</p>



                      <p class="mt-10">2019 – Graphic Design Student Runner up in Russia Nationals compe.</p>



                      <p class="mt-10">2019 – Game Design Student Winning tournament and cash prize of Rs 1.5 lakh.</p>



                      <p class="mt-10">2019 - Best education institute by Ministry of Skills and entrepreneurship.</p>



                      <p class="mt-10">2016 - Best education institute by Ministry of Skills and entrepreneurship..</p>



                      <p class="mt-10">2017 - Graphic Design Student Winning World Skills Abu Dhabi - Medallion of Excellence and Best of the Nation.</p>



                      <p class="mt-10">2013 - Germany – Medallion of Excellence and Best of the Nation (Candidate Arun Raj).</p>



                      <p class="mt-10">2015 - Brazil - Medallion of Excellence and Best of the Nation (Candidate Sriram Govindarajan).</p>



                      <p class="mt-10">2014 - Oceana New Zeeland, 2018 Budapest Hungary, 2018 – Asia Skills Abu Dhabi, 2018 – Australia Global, 2019 – Russia Nationals, 2019 - Italy Friendly competition.</p>

                      <div class="clearfix">

                        

                      </div>

                    </div>

                  </article>



                  

                  <!--<article class="post clearfix pb-30">

                    <div class="clearfix"></div>

                    <div class="entry-content">

                      <a class="post-link text-center text-white bg-theme-colored display-block font-20 p-30" href="#">

                        kodesolution.com<br><span class="font-13">http://kodesolution.com</span>

                      </a>

                    </div>

                  </article>-->

                </div>

              </div>

              

            </div>

          </div>  

        </div>

      </div>

    </section> 

  </div>  

  <!-- end main-content -->





   <!-- Gallery Grid 3 -->

    <section id="gallery">

      <div class="container pt-70 pb-70">

        <div class="section-title text-center">

          <div class="row">

            <div class="col-md-8 col-md-offset-2">

              <h2 class="mt-0 line-height-1 text-center mb-10 text-black-333 text-uppercase">Our<span class="text-theme-color-2"> GALLERY</span></h2>

              <p class="mb-0 pb-0">OUR CAMPUS HAVE A LOT TO OFFER FOR OUR STUDENTS</p>

            </div>

          </div>

        </div>

        <div class="section-content">

          <div class="row">

            <div class="col-md-12">

              <!-- Portfolio Filter -->

              <div class="portfolio-filter font-alt align-center text-center mb-6 0">

                <a href="#" class="active" data-filter="*">All</a>

                <a href="#photos" class="" data-filter=".photos">Photos</a>

                <a href="#campus" class="" data-filter=".campus">Campus</a>

                <a href="#students" class="mt-10" data-filter=".students">Students</a>

              </div>

              <!-- End Portfolio Filter -->



              <!-- Portfolio Gallery Grid -->

              <div class="gallery-isotope grid-4 gutter-small clearfix" data-lightbox="gallery">

             

                <!-- Portfolio Item Start -->

                <div class="gallery-item photos students">

                  <div class="thumb">

                    <img class="img-fullwidth" src="img/gallery/advisory_1-1.jpg" alt="project">

                    <div class="overlay-shade"></div>

                    <div class="text-holder">

                      <div class="title text-center">Sample Title</div>

                    </div>

                    <div class="icons-holder">

                      <div class="icons-holder-inner">

                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">

                          <a href="img/gallery/advisory_1-1.jpg" data-lightbox-gallery="gallery" title="Your Title Here"><i class="fa fa-picture-o"></i></a>

                        </div>

                      </div>

                    </div>

                  </div>

                </div>

                <!-- Portfolio Item End -->

                

                <!-- Portfolio Item Start -->

                <div class="gallery-item campus">

                  <div class="thumb">

                    <img class="img-fullwidth" src="img/gallery/advisory_2-2.jpg" alt="project">

                    <div class="overlay-shade"></div>

                    <div class="text-holder">

                      <div class="title text-center">Sample Title</div>

                    </div>

                    <div class="icons-holder">

                      <div class="icons-holder-inner">

                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">

                          <a href="img/gallery/advisory_2-2.jpg" data-lightbox-gallery="gallery" title="Your Title Here"><i class="fa fa-picture-o"></i></a>

                        </div>

                      </div>

                    </div>

                  </div>

                </div>

                <!-- Portfolio Item End -->

                

                <!-- Portfolio Item Start -->

                <div class="gallery-item photos">

                  <div class="thumb">

                    <img class="img-fullwidth" src="img/gallery/advisory_3-3.jpg" alt="project">

                    <div class="overlay-shade"></div>

                    <div class="text-holder">

                      <div class="title text-center">Sample Title</div>

                    </div>

                    <div class="icons-holder">

                      <div class="icons-holder-inner">

                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">

                          <a href="img/gallery/advisory_3-3.jpg" data-lightbox-gallery="gallery" title="Your Title Here"><i class="fa fa-picture-o"></i></a>

                        </div>

                      </div>

                    </div>

                  </div>

                </div>

                <!-- Portfolio Item End -->

                

                <!-- Portfolio Item Start -->

                <div class="gallery-item campus students">

                  <div class="thumb">

                    <img class="img-fullwidth" src="img/gallery/advisory_4-4.jpg" alt="project">

                    <div class="overlay-shade"></div>

                    <div class="text-holder">

                      <div class="title text-center">Sample Title</div>

                    </div>

                    <div class="icons-holder">

                      <div class="icons-holder-inner">

                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">

                          <a href="img/gallery/advisory_4-4.jpg" data-lightbox-gallery="gallery" title="Your Title Here"><i class="fa fa-picture-o"></i></a>

                        </div>

                      </div>

                    </div>

                  </div>

                </div>

                <!-- Portfolio Item End -->

                

                <!-- Portfolio Item Start -->

                <div class="gallery-item students">

                  <div class="thumb">

                    <img class="img-fullwidth" src="img/gallery/advisory_5-5.jpg" alt="project">

                    <div class="overlay-shade"></div>

                    <div class="text-holder">

                      <div class="title text-center">Sample Title</div>

                    </div>

                    <div class="icons-holder">

                      <div class="icons-holder-inner">

                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">

                          <a href="img/gallery/advisory_5-5.jpg" data-lightbox-gallery="gallery" title="Your Title Here"><i class="fa fa-picture-o"></i></a>

                        </div>

                      </div>

                    </div>

                  </div>

                </div>

                <!-- Portfolio Item End -->

                

                <!-- Portfolio Item Start -->

                <div class="gallery-item photos">

                  <div class="thumb">

                    <img class="img-fullwidth" src="img/gallery/advisory_6-6.jpg" alt="project">

                    <div class="overlay-shade"></div>

                    <div class="text-holder">

                      <div class="title text-center">Sample Title</div>

                    </div>

                    <div class="icons-holder">

                      <div class="icons-holder-inner">

                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">

                          <a href="img/gallery/advisory_6-6.jpg" data-lightbox-gallery="gallery" title="Your Title Here"><i class="fa fa-picture-o"></i></a>

                        </div>

                      </div>

                    </div>

                  </div>

                </div>

                <!-- Portfolio Item End -->

                

                <!-- Portfolio Item Start -->

                <div class="gallery-item students">

                  <div class="thumb">

                    <img class="img-fullwidth" src="img/gallery/advisory_7-7.jpg" alt="project">

                    <div class="overlay-shade"></div>

                    <div class="text-holder">

                      <div class="title text-center">Sample Title</div>

                    </div>

                    <div class="icons-holder">

                      <div class="icons-holder-inner">

                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">

                          <a href="img/gallery/advisory_7-7.jpg" data-lightbox-gallery="gallery" title="Your Title Here"><i class="fa fa-picture-o"></i></a>

                        </div>

                      </div>

                    </div>

                  </div>

                </div>

                <!-- Portfolio Item End -->

                

                <!-- Portfolio Item Start -->

                <div class="gallery-item photos">

                  <div class="thumb">

                    <img class="img-fullwidth" src="img/gallery/advisory_8-8.jpg" alt="project">

                    <div class="overlay-shade"></div>

                    <div class="text-holder">

                      <div class="title text-center">Sample Title</div>

                    </div>

                    <div class="icons-holder">

                      <div class="icons-holder-inner">

                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">

                          <a href="img/gallery/advisory_8-8.jpg" data-lightbox-gallery="gallery" title="Your Title Here"><i class="fa fa-picture-o"></i></a>

                        </div>

                      </div>

                    </div>

                  </div>

                </div>

                <!-- Portfolio Item End -->

                

                <!-- Portfolio Item Start -->

                <div class="gallery-item campus students">

                  <div class="thumb">

                    <img class="img-fullwidth" src="img/gallery/advisory_9-9.jpg" alt="project">

                    <div class="overlay-shade"></div>

                    <div class="text-holder">

                      <div class="title text-center">Sample Title</div>

                    </div>

                    <div class="icons-holder">

                      <div class="icons-holder-inner">

                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">

                          <a href="img/gallery/advisory_9-9.jpg" data-lightbox-gallery="gallery" title="Your Title Here"><i class="fa fa-picture-o"></i></a>

                        </div>

                      </div>

                    </div>

                  </div>

                </div>

                <!-- Portfolio Item End -->

                

                <!-- Portfolio Item Start -->

                <div class="gallery-item students">

                  <div class="thumb">

                    <img class="img-fullwidth" src="img/gallery/advisory_10-10.jpg" alt="project">

                    <div class="overlay-shade"></div>

                    <div class="text-holder">

                      <div class="title text-center">Sample Title</div>

                    </div>

                    <div class="icons-holder">

                      <div class="icons-holder-inner">

                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">

                          <a href="img/gallery/advisory_10-10.jpg" data-lightbox-gallery="gallery" title="Your Title Here"><i class="fa fa-picture-o"></i></a>

                        </div>

                      </div>

                    </div>

                  </div>

                </div>

                <!-- Portfolio Item End -->

                <div class="gallery-item students">

                  <div class="thumb">

                    <img class="img-fullwidth" src="img/gallery/advisory_11-11.png" alt="project">

                    <div class="overlay-shade"></div>

                    <div class="text-holder">

                      <div class="title text-center">Sample Title</div>

                    </div>

                    <div class="icons-holder">

                      <div class="icons-holder-inner">

                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">

                          <a href="img/gallery/advisory_10-10.jpg" data-lightbox-gallery="gallery" title="Your Title Here"><i class="fa fa-picture-o"></i></a>

                        </div>

                      </div>

                    </div>

                  </div>

                </div>

                <!-- Portfolio Item End -->

                <div class="gallery-item students">

                  <div class="thumb">

                    <img class="img-fullwidth" src="img/gallery/advisory_12-12.png" alt="project">

                    <div class="overlay-shade"></div>

                    <div class="text-holder">

                      <div class="title text-center">Sample Title</div>

                    </div>

                    <div class="icons-holder">

                      <div class="icons-holder-inner">

                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">

                          <a href="img/gallery/advisory_10-10.jpg" data-lightbox-gallery="gallery" title="Your Title Here"><i class="fa fa-picture-o"></i></a>

                        </div>

                      </div>

                    </div>

                  </div>

                </div>

                <!-- Portfolio Item End -->

              </div>

              <!-- End Portfolio Gallery Grid -->



            </div>

          </div>

        </div>

      </div>

    </section>





    <!-- Section: Features -->

    <section class="bg-lighter">

      <div class="container">

        <div class="section-content">

          <div class="row">

            <div class="col-md-6">

              <h3 class="text-uppercase title line-bottom">Our <span class="text-black font-weight-300">Features</span></h3>

              <div class="row">

                <div class="col-md-6">

                  <div class="icon-box p-0 mb-30">

                   <a class="icon bg-theme-colored icon-circled icon-border-effect effect-circle icon-sm pull-left sm-pull-none flip" href="#">

                    <i class="pe-7s-scissors text-white"></i>

                   </a>

                   <div class="icon-box-details ml-sm-0">

                    <h5 class="icon-box-title mt-15 text-uppercase letter-space-2 mb-0">ONE-TO-ONE</h5>

                    <p class="text-gray">Lorem ipsum dolor sit amet, consectetur.</p>

                   </div>

                  </div>

                </div>

                <div class="col-md-6">

                  <div class="icon-box p-0 mb-30">

                   <a class="icon bg-theme-colored icon-circled icon-border-effect effect-circle icon-sm pull-left sm-pull-none flip" href="#">

                    <i class="pe-7s-pen text-white"></i>

                   </a>

                   <div class="icon-box-details ml-sm-0">

                    <h5 class="icon-box-title mt-15 text-uppercase letter-space-2 mb-0">LEARN FROM REAL</h5>

                    <p class="text-gray">Lorem ipsum dolor sit amet, consectetur.</p>

                   </div>

                  </div>

                </div>

                <div class="col-md-6">

                  <div class="icon-box p-0 mb-30">

                   <a class="icon bg-theme-colored icon-circled icon-border-effect effect-circle icon-sm pull-left sm-pull-none flip" href="#">

                    <i class="pe-7s-tools text-white"></i>

                   </a>

                   <div class="icon-box-details ml-sm-0">

                    <h5 class="icon-box-title mt-15 text-uppercase letter-space-2 mb-0">LEARN FROM REAL</h5>

                    <p class="text-gray">Lorem ipsum dolor sit amet, consectetur.</p>

                   </div>

                  </div>

                </div>

                <div class="col-md-6">

                  <div class="icon-box p-0 mb-30">

                   <a class="icon bg-theme-colored icon-circled icon-border-effect effect-circle icon-sm pull-left sm-pull-none flip" href="#">

                    <i class="pe-7s-phone text-white"></i>

                   </a>

                   <div class="icon-box-details ml-sm-0">

                    <h5 class="icon-box-title mt-15 text-uppercase letter-space-2 mb-0">LEARN FROM REAL</h5>

                    <p class="text-gray">Lorem ipsum dolor sit amet, consectetur.</p>

                   </div>

                  </div>

                </div>

                <div class="col-md-6">

                  <div class="icon-box p-0 mb-30">

                   <a class="icon bg-theme-colored icon-circled icon-border-effect effect-circle icon-sm pull-left sm-pull-none flip" href="#">

                    <i class="pe-7s-vector text-white"></i>

                   </a>

                   <div class="icon-box-details ml-sm-0">

                    <h5 class="icon-box-title mt-15 text-uppercase letter-space-2 mb-0">LEARN FROM REAL</h5>

                    <p class="text-gray">Lorem ipsum dolor sit amet, consectetur.</p>

                   </div>

                  </div>

                </div>

                <div class="col-md-6">

                  <div class="icon-box p-0 mb-30">

                   <a class="icon bg-theme-colored icon-circled icon-border-effect effect-circle icon-sm pull-left sm-pull-none flip" href="#">

                    <i class="pe-7s-light text-white"></i>

                   </a>

                   <div class="icon-box-details ml-sm-0">

                    <h5 class="icon-box-title mt-15 text-uppercase letter-space-2 mb-0">LEARN FROM REAL</h5>

                    <p class="text-gray">Lorem ipsum dolor sit amet, consectetur.</p>

                   </div>

                  </div>

                </div>

              </div>

            </div>

            <div class="col-md-6"> 

              <h3 class="text-uppercase title line-bottom">Our <span class="text-black font-weight-300">Working Skill</span></h3>

              <div class="progressbar-container">

                <div class="progress-item mb-30">

                  <div class="progress-title">

                    <h5 class="text-uppercase letter-space-2">Computer</h5>

                  </div>

                  <div class="progress">

                    <div class="progress-bar bg-theme-colored" data-percent="85"></div>

                  </div>

                </div>

                <div class="progress-item mb-30">

                  <div class="progress-title">

                    <h5 class="text-uppercase letter-space-2">Phone</h5>

                  </div>

                  <div class="progress">

                    <div class="progress-bar bg-theme-colored" data-percent="45"></div>

                  </div>

                </div>

                <div class="progress-item mb-30">

                  <div class="progress-title">

                    <h5 class="text-uppercase letter-space-2">Laptop</h5>

                  </div>

                  <div class="progress">

                    <div class="progress-bar bg-theme-colored" data-percent="95"></div>

                  </div>

                </div>

                <div class="progress-item mb-30">

                  <div class="progress-title">

                    <h5 class="text-uppercase letter-space-2">Television</h5>

                  </div>

                  <div class="progress">

                    <div class="progress-bar bg-theme-colored" data-percent="65"></div>

                  </div>

                </div>

                <div class="progress-item mb-30">

                  <div class="progress-title">

                    <h5 class="text-uppercase letter-space-2">Others</h5>

                  </div>

                  <div class="progress">

                    <div class="progress-bar bg-theme-colored" data-percent="88"></div>

                  </div>

                </div>

              </div>

            </div>

          </div>

        </div>

      </div>

    </section>



  </div>

  <!-- end main-content -->

  

  <!-- Footer -->

  <?php include 'includes/footer.php' ?>

  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>

<!-- end wrapper --> 



<!-- Footer Scripts --> 

<!-- JS | Custom script for all pages --> 

<script src="js/custom.js"></script>



</body>

</html>