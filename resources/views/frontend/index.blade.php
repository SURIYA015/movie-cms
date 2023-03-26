<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://www.macodeid.com/">

  <title>NutriFolio</title>

  <link rel="shortcut icon" href="../assets/favicon.ico" type="image/x-icon">

  <link rel="stylesheet" type="text/css" href="../assets/css/themify-icons.css">

  <link rel="stylesheet" type="text/css" href="../assets/css/custom.css">

  <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" type="text/css" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" type="text/css" href="../assets/vendor/owl-carousel/owl.carousel.css">

  <link rel="stylesheet" type="text/css" href="../assets/vendor/perfect-scrollbar/css/perfect-scrollbar.css">

  <link rel="stylesheet" type="text/css" href="../assets/vendor/nice-select/css/nice-select.css">

  <link rel="stylesheet" type="text/css" href="../assets/vendor/fancybox/css/jquery.fancybox.min.css">

  <link rel="stylesheet" type="text/css" href="../assets/css/virtual.css">

  <link rel="stylesheet" type="text/css" href="../assets/css/topbar.virtual.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
</head>
<body class="theme-red">
  <script>
    $(document).ready(function(){
      @if(session()->has('success'))
        toastr.success("{{ session('success') }}")
      @elseif(session()->has('error'))
        toastr.error("{{ __(session('error')) }}")
      @elseif(session()->has('info'))
        toastr.info("{{ session('info') }}")
      @endif
    });
  </script>

  <!-- Back to top button -->
  <div class="btn-back_to_top">
    <span class="ti-arrow-up"></span>
  </div>

  <!-- Setting button -->
  <div class="config">
    <div class="template-config">
      <!-- Settings -->
      <div class="d-block">
        <button class="btn btn-fab btn-sm" id="sideel" title="set-colour"><span class="ti-palette"></span></button>
      </div>
      <!-- Puschase -->
      {{-- <div class="d-block">
        <a href="https://macodeid.com/projects/virtual-folio/" class="btn btn-fab btn-sm" title="Get this template" data-toggle="tooltip" data-placement="left"><span class="ti-download"></span></a>
      </div> --}}
      <!-- Help -->
      {{-- <div class="d-block">
        <a href="#" class="btn btn-fab btn-sm" title="Help" data-toggle="tooltip" data-placement="left"><span class="ti-help"></span></a>
      </div> --}}
    </div>
    <div class="set-menu">
      <p>Select Color</p>
      <div class="color-bar" data-toggle="selected">
        <span class="color-item bg-theme-red selected" data-class="theme-red"></span>
        <span class="color-item bg-theme-blue" data-class="theme-blue"></span>
        <span class="color-item bg-theme-green" data-class="theme-green"></span>
        <span class="color-item bg-theme-orange" data-class="theme-orange"></span>
        <span class="color-item bg-theme-purple" data-class="theme-purple"></span>
      </div>
      {{-- <select class="custom-select d-block my-2" id="change-page">
        <option value="">Choose Page</option>
        <option value="index">Topbar</option>
        <option value="blog-topbar">Blog (Topbar)</option>
        <option value="index-2">Minibar</option>
        <option value="blog-minibar">Blog (Minibar)</option>
      </select> --}}
    </div>
  </div>

  <div class="vg-page page-home" id="home" style="background-image: url(../assets/img/bg_image_3.jpg)">
    <!-- Navbar -->
    <div class="navbar navbar-expand-lg navbar-dark sticky" data-offset="500">
      <div class="container">
        <a href="" class="navbar-brand">Piku's NH</a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#main-navbar" aria-expanded="true">
          <span class="ti-menu"></span>
        </button>
        <div class="collapse navbar-collapse" id="main-navbar">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a href="#home" class="nav-link" data-animate="scrolling">Home</a>
            </li>
            <li class="nav-item">
              <a href="#about" class="nav-link" data-animate="scrolling">About</a>
            </li>
            <li class="nav-item">
              <a href="#portfolio" class="nav-link" data-animate="scrolling">Certifications</a>
            </li>
            <li class="nav-item">
              <a href="#blog" class="nav-link" data-animate="scrolling">Blog</a>
            </li>
            <li class="nav-item">
              <a href="#contact" class="nav-link" data-animate="scrolling">Contact</a>
            </li>
          </ul>
          <ul class="nav ml-auto">
            <li class="nav-item">
              <a target="_blank" href="https://www.linkedin.com/in/pinky-kuppuswamy-b3b5b4172/" class="btn btn-fab btn-theme no-shadow">In</a>
            </li>
          </ul>
        </div>
      </div>
    </div> <!-- End Navbar -->
    <!-- Caption header -->
    <div class="caption-header text-center wow zoomInDown">
      <h5 class="fw-normal">Welcome</h5>
      <h1 class="fw-light mb-4">I'm <b class="fg-theme">Pinky</b> Kuppuswamy</h1>
      <div class="badge">Dietician & Nutritionist</div>
    </div> <!-- End Caption header -->
    <div class="floating-button"><span class="ti-mouse"></span></div>
  </div>

  <div class="vg-page page-about" id="about">
    <div class="container py-5">
      <div class="row">
        <div class="col-lg-4 py-3">
          <div class="img-place wow fadeInUp">
            <img src="../assets/img/person.jpeg" alt="">
          </div>
        </div>
        <div class="col-lg-6 offset-lg-1 wow fadeInRight">
          <h1 class="fw-light myname">Pinky Kuppuswamy</h1>
          <h5 class="fg-theme mb-3">Dietician & Nutritionist</h5>
          <p class="text-muted">An organized and creative professional focused on
            conducting detailed nutritional consultations and creating
            personalized meal plans to meet the needs of each client, with
            proven Sales & Marketing skills seeking a challenging and
            dynamic position with a growing firm to add some value for
            the better growth and profit of the organization along with
            developing my knowledge.
            </p>
          <ul class="theme-list">
            <li><b>From:</b> INDIA</li>
            <li><b>Lives In:</b> CHEMBUR, MUMBAI</li>
            <li><b>Age:</b> 25</li>
            <li><b>Gender:</b> Female</li>
          </ul>
          <a target="_blank" href="{{ asset('assets/img/Resume.pdf')}}" class="btn btn-theme-outline">Download CV</a>
        </div>
      </div>
    </div>
    <div class="container py-5">
      <h1 class="text-center fw-normal wow fadeIn">My Skills</h1>
      <div class="row py-3">
        <div class="col-md-6">
          <div class="px-lg-3">
            <h4 class="wow fadeInUp">Nutritionist skills</h4>
            <div class="progress-wrapper wow fadeInUp">
              <span class="caption">Diet Planning</span>
              <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">100%</div>
              </div>
            </div>
            <div class="progress-wrapper wow fadeInUp">
              <span class="caption">Nutritional Counselling</span>
              <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">100%</div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 mobile-space">
          <div class="px-lg-3">
            <h4 class="wow fadeInUp">Soft Skills</h4>
            <div class="progress-wrapper wow fadeInUp">
              <span class="caption">Strong Communication</span>
              <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
              </div>
            </div>
            <div class="progress-wrapper wow fadeInUp">
              <span class="caption">Analytical and Problem solving</span>
              <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
              </div>
            </div>
            <div class="progress-wrapper wow fadeInUp">
              <span class="caption">Convincing Ability</span>
              <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
              </div>
            </div>
            <div class="progress-wrapper wow fadeInUp">
              <span class="caption">Taking intiative and willingness to learn</span>
              <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container pt-5">
      <div class="row">
        <div class="col-md-6 wow fadeInRight">
          <h2 class="fw-normal">Education</h2>
          <ul class="timeline mt-4 pr-md-5">
            <li>
              <div class="title">2014 - 2017</div>
              <div class="details">
                <h5>Bachelors in Science, Microbiology</h5>
                <small class="fg-theme">University of Mumbai</small>
                <p>N.R. Swamy College of Commerce and Economics & Smt. Thirumalai College of Science</p>
              </div>
            </li>
            <li>
              <div class="title">2018 - 2020</div>
              <div class="details">
                <h5>Post Graduate Diploma in Healthcare Management</h5>
                <small class="fg-theme">All India Council for Technical Education.</small>
                <p>Welingkar Institute of Management</p>
              </div>
            </li>
            <li>
              <div class="title"> 2019 - 2021</div>
              <div class="details">
                <h5>Post Graduate Diploma in Dietetics & Applied Nutrition</h5>
                <small class="fg-theme">University of Mumbai</small>
                <p>Ramniranjan Jhunjhunwala College of Arts, Science & Commerce</p>
              </div>
            </li>
          </ul>
        </div>
        <div class="col-md-6 wow fadeInRight" data-wow-delay="200ms">
          <h2 class="fw-normal">Experience</h2>
          <ul class="timeline mt-4 pr-md-5">
          <li>
              <div class="title">2021 - present</div>
              <div class="details">
                <h5>Dietitian</h5>
                <small class="fg-theme">Mumbai</small>
                <p>Altius Customer Services Pvt Ltd</p>
              </div>
            </li>

            <li>
              <div class="title">2021 - 2021</div>
              <div class="details">
                <h5>Dietitian Intern</h5>
                <small class="fg-theme">Mumbai</small>
                <p>Sushrut Hospital & Research Centre</p>
              </div>
            </li>

            <li>
              <div class="title">2017 – 2021</div>
              <div class="details">
                <h5>Back Office Assistant</h5>
                <small class="fg-theme">Mumbai</small>
                <p>Rashtriya Chemicals and Fertilizer Limited</p>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  {{-- <div class="vg-page page-service">
    <div class="container">
      <div class="text-center wow fadeInUp">
        <div class="badge badge-subhead">Service</div>
      </div>
      <h1 class="fw-normal text-center wow fadeInUp">What can i do?</h1>
      <div class="row mt-5">
        <div class="col-md-6 col-lg-4 col-xl-3">
          <div class="card card-service wow fadeInUp">
            <div class="icon">
              <span class="ti-paint-bucket"></span>
            </div>
            <div class="caption">
              <h4 class="fg-theme">Web Design</h4>
              <p>There are many variations of passages of Lorem Ipsum available</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 col-xl-3">
          <div class="card card-service wow fadeInUp">
            <div class="icon">
              <span class="ti-search"></span>
            </div>
            <div class="caption">
              <h4 class="fg-theme">SEO</h4>
              <p>There are many variations of passages of Lorem Ipsum available</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 col-xl-3">
          <div class="card card-service wow fadeInUp">
            <div class="icon">
              <span class="ti-vector"></span>
            </div>
            <div class="caption">
              <h4 class="fg-theme">UI/UX Design</h4>
              <p>There are many variations of passages of Lorem Ipsum available</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 col-xl-3">
          <div class="card card-service wow fadeInUp">
            <div class="icon">
              <span class="ti-desktop"></span>
            </div>
            <div class="caption">
              <h4 class="fg-theme">Web Development</h4>
              <p>There are many variations of passages of Lorem Ipsum available</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> --}}

  {{-- <div class="vg-page page-funfact" style="background-image: url(../assets/img/bg_banner.jpg);">
    <div class="container">
      <div class="row section-counter">
        <div class="col-md-6 col-lg-3 py-4 wow fadeIn">
          <h1 class="number" data-number="768">768</h1>
          <span>Clients</span>
        </div>
        <div class="col-md-6 col-lg-3 py-4 wow fadeIn">
          <h1 class="number" data-number="230">230</h1>
          <span>Project Compleate</span>
        </div>
        <div class="col-md-6 col-lg-3 py-4 wow fadeIn">
          <h1 class="number" data-number="97">97</h1>
          <span>Project Ongoing</span>
        </div>
        <div class="col-md-6 col-lg-3 py-4 wow fadeIn">
          <h1 class="number" data-number="699">699</h1>
          <span>Client Satisfaction</span>
        </div>
      </div>
    </div>
  </div> --}}

  <!-- Portfolio page -->
  <div class="vg-page page-portfolio" id="portfolio">
    <div class="container">
      <div class="text-center wow fadeInUp">
        <div class="badge badge-subhead">Certificate</div>
      </div>
      <h1 class="text-center fw-normal wow fadeInUp">See my Certifications</h1>
      <div class="filterable-button py-3 wow fadeInUp" data-toggle="selected">
        <button class="btn btn-theme-outline selected" data-filter="*">All</button>
        <button class="btn btn-theme-outline" data-filter=".stanford">university of stanford</button>
        <button class="btn btn-theme-outline" data-filter=".ecmec">idf school of diabetes</button>
        <button class="btn btn-theme-outline" data-filter=".copenhagen">university of copenhagen</button>
        <button class="btn btn-theme-outline" data-filter=".hsc">health and sciences academy</button>
      </div>

      <div class="gridder my-3">
        <div class="grid-item ecmec wow zoomIn">
          <div class="img-place" data-src="../assets/img/work/Certificate for Prevention of Type 2 Diabetes.jpg" data-fancybox data-caption="<h5 class='fg-theme'>PREVENTION ON TYPE 2 DIABETES</h5> <p>Completed on : 10 June 2019</p>">
            <img src="../assets/img/work/Certificate for Prevention of Type 2 Diabetes.jpg" alt="">
            <div class="img-caption">
              <h5 class="fg-theme">Prevention of Type 2 Diabetes</h5>
              <p>Completed on : 10 June 2019</p>
            </div>
          </div>
        </div>
        <div class="grid-item ecmec wireframes wow zoomIn">
          <div class="img-place" data-src="../assets/img/work/Cetificate for Diabetes and CVD.jpg" data-fancybox data-caption="<h5 class='fg-theme'>Diabetes and CVD</h5> <p>Completed on : 11 June 2019</p>">
            <img src="../assets/img/work/Cetificate for Diabetes and CVD.jpg" alt="">
            <div class="img-caption">
              <h5 class="fg-theme">Diabetes and CVD</h5>
              <p>Completed on : 11 June 2019</p>
            </div>
          </div>
        </div>
        <div class="grid-item ecmec ios wow zoomIn">
          <div class="img-place" data-src="../assets/img/work/Cetificate in Diabetic Retinopathy.jpg" data-fancybox data-caption="<h5 class='fg-theme'>Diabetic Retinopathy</h5> <p>Completed on : 13 June 2019</p>">
            <img src="../assets/img/work/Cetificate in Diabetic Retinopathy.jpg" alt="">
            <div class="img-caption">
              <h5 class="fg-theme">Diabetic Retinopathy</h5>
              <p>Completed on : 13 June 2019</p>
            </div>
          </div>
        </div>
        <div class="grid-item stanford ui-ux wow zoomIn">
          <div class="img-place" data-src="../assets/img/work/Stanford Food and Nutrition.jpg" data-fancybox data-caption="<h5 class='fg-theme'>Food and Nutrition</h5> <p>Completed on : 7 Feb 2019</p>">
            <img src="../assets/img/work/Stanford Food and Nutrition.jpg" alt="">
            <div class="img-caption">
              <h5 class="fg-theme">Food and Nutrition</h5>
              <p>Completed on : 7 Feb 2019</p>
            </div>
          </div>
        </div>
        <div class="grid-item copenhagen ios wow zoomIn">
          <div class="img-place" data-src="../assets/img/work/Diabetes-The essential facts.jpg" data-fancybox data-caption="<h5 class='fg-theme'>Diabetes-The essential facts</h5> <p>Completed on : 19 June 2019</p>">
            <img src="../assets/img/work/Diabetes-The essential facts.jpg" alt="">
            <div class="img-caption">
              <h5 class="fg-theme">Diabetes-The essential facts</h5>
              <p>Completed on : 19 June 2019</p>
            </div>
          </div>
        </div>
        <div class="grid-item hsc ui-ux wireframes wow zoomIn">
          <div class="img-place" data-src="../assets/img/work/certificate for starter Nutrition Course.jpg" data-fancybox data-caption="<h5 class='fg-theme'>starter Nutrition Course</h5> <p>Completed on : 05 June 2019</p>">
            <img src="../assets/img/work/certificate for starter Nutrition Course.jpg" alt="">
            <div class="img-caption">
              <h5 class="fg-theme">starter Nutrition Course</h5>
              <p>Completed on : 05 June 2019</p>
            </div>
          </div>
        </div>
      </div> <!-- End gridder -->
      <div class="text-center wow fadeInUp">
        <a href="javascript:void(0)" class="btn btn-theme">Load More</a>
      </div>
    </div>
  </div> <!-- End Portfolio page -->

  <!-- Testimonial -->
  <div class="vg-page page-testimonial">
    <div class="container">
      <h1 class="text-center fw-normal wow fadeInUp">What Nutritionist Says?</h1>
      <div class="row justify-content-center mt-5 wow fadeInUp">
        <div class="col-md-9">
          <div class="owl-carousel testi-carousel">
            <div class="item">
              <div class="row">
                <div class="col-md-6">
                  <div class="img-place">
                    <img src="../assets/img/testimonials/timehealth.jpg" alt="">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="caption">
                    <div class="testi-content">“Time and health are two precious assets that we don’t recognize and appreciate until they have been depleted.” </div>
                    <div class="testi-info">
                      {{-- <div class="thumb-profile">
                        <img src="../assets/img/testimonials/testimonials_1.jpg" alt="">
                      </div> --}}
                      {{-- <div class="tagline">
                        <h5 class="mb-0">Satria Nugraha</h5>
                        <span class="text-muted">CEO Nutshell</span>
                      </div> --}}
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="row">
                <div class="col-md-6">
                  <div class="img-place">
                    <img src="../assets/img/testimonials/health.jpg" alt="">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="caption">
                    <div class="testi-content">“He who has health has hope, and he who has hope has everything.”</div>
                    <div class="testi-info">
                      {{-- <div class="thumb-profile">
                        <img src="../assets/img/testimonials/testimonials_2.jpg" alt="">
                      </div> --}}
                      {{-- <div class="tagline">
                        <h5 class="mb-0">Selena Arrini</h5>
                        <span class="text-muted">CEO BigTree</span>
                      </div> --}}
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> <!-- End testimonial -->

  <!-- Client -->
  {{-- <div class="vg-page page-client">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-lg-4 col-xl-3 item">
          <div class="img-place wow fadeInUp">
            <img src="../assets/img/logo/company_1.svg" alt="">
          </div>
        </div>
        <div class="col-md-6 col-lg-4 col-xl-3 item">
          <div class="img-place wow fadeInUp">
            <img src="../assets/img/logo/company_2.svg" alt="">
          </div>
        </div>
        <div class="col-md-6 col-lg-4 col-xl-3 item">
          <div class="img-place wow fadeInUp">
            <img src="../assets/img/logo/company_3.svg" alt="">
          </div>
        </div>
        <div class="col-md-6 col-lg-4 col-xl-3 item">
          <div class="img-place wow fadeInUp">
            <img src="../assets/img/logo/company_4.svg" alt="">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-4 col-xl-3 item">
          <div class="img-place wow fadeInUp">
            <img src="../assets/img/logo/company_5.svg" alt="">
          </div>
        </div>
        <div class="col-md-6 col-lg-4 col-xl-3 item">
          <div class="img-place wow fadeInUp">
            <img src="../assets/img/logo/company_6.svg" alt="">
          </div>
        </div>
        <div class="col-md-6 col-lg-4 col-xl-3 item">
          <div class="img-place wow fadeInUp">
            <img src="../assets/img/logo/company_7.svg" alt="">
          </div>
        </div>
        <div class="col-md-6 col-lg-4 col-xl-3 item">
          <div class="img-place wow fadeInUp">
            <img src="../assets/img/logo/company_8.svg" alt="">
          </div>
        </div>
      </div>
    </div>
  </div> <!-- End client --> --}}

  <!-- Blog -->
  <div class="vg-page page-blog" id="blog">
    <div class="container">
      <div class="text-center">
        <div class="badge badge-subhead wow fadeInUp">Blog</div>
      </div>
      <h1 class="text-center fw-normal wow fadeInUp">Latest Post</h1>
      <div class="row post-grid">
        <div class="col-md-6 col-lg-4 wow fadeInUp">
          <div class="card">
            <a target="_blank" href="https://pikusnutrihealth.blogspot.com/2020/07/balancing-your-hormones.html">
                <div class="img-place">
                    <img src="../assets/img/work/blog1.jpg" alt="">
                </div>
            </a>
            <div class="caption">
              <a target="_blank" href="https://pikusnutrihealth.blogspot.com/2020/07/balancing-your-hormones.html" class="post-category">Hormones</a>
              <a target="_blank" href="https://pikusnutrihealth.blogspot.com/2020/07/balancing-your-hormones.html" class="post-title">Balancing your Hormones</a>
              <span class="post-date"><span class="sr-only">Published on</span> July 12, 2020</span>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 wow fadeInUp">
          <div class="card">
              <a target="_blank" href="https://pikusnutrihealth.blogspot.com/2019/08/health-requires-healthy-food.html">
                <div class="img-place">
                    <img src="../assets/img/work/blog2.jpg" alt="">
                </div>
              </a>
            <div class="caption">
              <a target="_blank" href="https://pikusnutrihealth.blogspot.com/2019/08/health-requires-healthy-food.html" class="post-category">Health requires healthy food</a>
              <a target="_blank" href="https://pikusnutrihealth.blogspot.com/2019/08/health-requires-healthy-food.html" class="post-title">Why is it necessary to eat healthy foods?</a>
              <span class="post-date"><span class="sr-only">Published on</span> August 6 , 2019</span>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 wow fadeInUp">
          <div class="card">
              <a target="_blank" href="https://www.practo.com/healthfeed/nutrient-to-focus-on-water-40152/post">
                <div class="img-place">
                    <img src="../assets/img/work/blog3.jpg" alt="">
                </div>
              </a>
            <div class="caption">
              <a target="_blank" href="https://www.practo.com/healthfeed/nutrient-to-focus-on-water-40152/post" class="post-category">Water</a>
              <a target="_blank" href="https://www.practo.com/healthfeed/nutrient-to-focus-on-water-40152/post" class="post-title">Nutrient to Focus On :</a>
              <span class="post-date"><span class="sr-only">Published on</span> Jan 8, 2020</span>
            </div>
          </div>
        </div>
        {{-- <div class="col-12 text-center py-3 wow fadeInUp">
          <a href="blog-fullbar.html" class="btn btn-theme">See All Post</a>
        </div> --}}
      </div>
    </div>
  </div> <!-- End blog -->

  <!-- Contact -->
  <div class="vg-page page-contact" id="contact">
    <div class="container-fluid">
      <div class="text-center wow fadeInUp">
        <div class="badge badge-subhead">Contact</div>
      </div>
      <h1 class="text-center fw-normal wow fadeInUp">Get in touch</h1>
      <div class="row py-5">
        <div class="col-lg-7 px-0 pr-lg-3 wow zoomIn">
          <div class="vg-maps">
            <div id="google-maps" style="width: 100%; height: 100%;"></div>
          </div>
        </div>
        <div class="col-lg-5">
          <form action="{{route('contact.store')}}" method="post" class="vg-contact-form">
                        @csrf
            <div class="form-row">
              <div class="col-12 mt-3 wow fadeInUp">
                <input class="form-control" value="{{old('name')}}" maxlength="30" minlength="3" type="text" name="name" placeholder="Your Name" required>
              </div>
              @if ($errors->has('name'))
                  <div class="text-danger matp-13">
                      <li> {{ $errors->first('name') }} </li>
                  </div>
              @endif
              <div class="col-12 mt-3 wow fadeInUp">
                <input class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" value="{{ old('email') }}" type="email" maxlength="50" minlength="5" name="email" placeholder="Email Address" required>
              </div>
              @if ($errors->has('email'))
                  <div class="text-danger matp-13">
                      <li> {{ $errors->first('email') }} </li>
                  </div>
              @endif
              <div class="col-12 mt-3 wow fadeInUp">
                <input class="form-control" value="{{ old('mobile') }}" type="text" maxlength="40" minlength="5" name="mobile" placeholder="Mobile No." required>
              </div>
              @if ($errors->has('mobile'))
                  <div class="text-danger matp-13">
                      <li> {{ $errors->first('mobile') }} </li>
                  </div>
              @endif
              <div class="col-12 mt-3 wow fadeInUp">
                <textarea class="form-control" name="message" rows="6" maxlength="200" minlength="5" placeholder="Enter message here.." required>{{ old('message') }}</textarea>
              </div>
              @if ($errors->has('message'))
                  <div class="text-danger matp-13">
                      <li> {{ $errors->first('message') }} </li>
                  </div>
              @endif
              <button type="submit" class="btn btn-theme mt-3 wow fadeInUp ml-1">Send Message</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div> <!-- End Contact -->

  <!-- Footer -->
  <div class="vg-footer">
    <h1 class="text-center">Piku's NH</h1>
    {{-- <h1 class="text-center">
      <img src="../assets/img/logo/nutrition.png" alt="">
    </h1> --}}
    <div class="container">
      <div class="row">
        <div class="col-lg-4 py-3">
          <div class="footer-info">
            <p>Where to find me</p>
            <hr class="divider">
            <p class="fs-large fg-white">MMRDA Colony Chembur, Mumbai 400074 INDIA</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 py-3">
          <div class="float-lg-right">
            <p>Follow me</p>
            <hr class="divider">
            <ul class="list-unstyled">
              <li><a target="_blank" href="https://www.linkedin.com/in/pinky-kuppuswamy-b3b5b4172/">Linkedin</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 py-3">
          <div class="float-lg-right">
            <p>Contact me</p>
            <hr class="divider">
            <ul class="list-unstyled">
              <li>pinkykani75@gmail.com</li>
              <li>+91-8691989571</li>
            </ul>
          </div>
        </div>
      </div>
      <!-- <div class="row justify-content-center mt-3">
        <div class="col-12 mb-3">
          <h3 class="fw-normal text-center">Subscribe</h3>
        </div>
        <div class="col-lg-6">
          <form class="mb-3">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Email address">
              <input type="submit" class="btn btn-theme no-shadow" value="Subscribe">
            </div>
          </form>
        </div> -->
        <div class="col-12">
          <p class="text-center mb-0 mt-4">Copyright &copy;{{date("Y")}}. All right reserved Pinky Kuppuswamy | Design & Developed by <a target="_blank" href="https://suriyawebdev.000webhostapp.com/">Suriya Kuppuswamy</a></p>
        </div>
      </div>
    </div>
  </div> <!-- End footer -->


  <script src="../assets/js/jquery-3.5.1.min.js"></script>

  <script src="../assets/js/bootstrap.bundle.min.js"></script>

  <script src="../assets/vendor/owl-carousel/owl.carousel.min.js"></script>

  <script src="../assets/vendor/perfect-scrollbar/js/perfect-scrollbar.js"></script>

  <script src="../assets/vendor/isotope/isotope.pkgd.min.js"></script>

  <script src="../assets/vendor/nice-select/js/jquery.nice-select.min.js"></script>

  <script src="../assets/vendor/fancybox/js/jquery.fancybox.min.js"></script>

  <script src="../assets/vendor/wow/wow.min.js"></script>

  <script src="../assets/vendor/animateNumber/jquery.animateNumber.min.js"></script>

  <script src="../assets/vendor/waypoints/jquery.waypoints.min.js"></script>

  <script src="../assets/js/google-maps.js"></script>

  <script src="../assets/js/topbar-virtual.js"></script>

  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBSRSpqPAxCNoMuxmP-BWu1DM4eKGGulE0&callback=initMap"></script>

  <script>
    $('img').bind('contextmenu', function(e) {
      return false;
    });
  </script>

</body>
</html>
