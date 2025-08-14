@extends('website.layouts.app')

<!-- @section('title', 'About Us') -->
@section("meta_title", "Best supplement for brain health and Parkinsons in India")
@section('meta_description', 'An ayurvedic remedy for Parkinson’s and brain support. Trusted in India for natural brain support supplements and Parkinson’s care. Best herbal neuro support.')

@section('content')
<!-- <div class="breadcrumb-block style-shared">
  <div class="breadcrumb-main bg-linear overflow-hidden">
    <div class="container  pt-24 pb-10 relative" style="padding-bottom: 6rem;">
      <div class="main-content w-full h-full flex flex-col items-center justify-center relative z-[1]">
        <div class="text-content">
          <div class="heading2 text-center">About Us</div>
          <div class="link flex items-center justify-center gap-1 caption1 mt-3">
            <a href="{{route('website.home')}}" style="color: #000;">Homepage</a>
            <i class="ph ph-caret-right text-sm text-secondary2"></i>
            <div class="text-secondary2 capitalize">About Us</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div> -->



<div class="about  res-mt-0">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="about-section">

          <!-- Section 1: Introduction -->
          <div class="block full">
            <div class="abt-text about-head">
              <h1>About MYDOPA</h1>
              <h2 class="heading-1">
                MYDOPA is not just a product—it is a promise born from tradition, research, and a deep-rooted commitment to transforming the lives of people living with Parkinson’s disease.
              </h2>
              <p class="head-text-1">
                At the heart of MYDOPA is the legacy of Dr. K.V. Vijayan Institute of Ayurveda Medical Science (VIAMS), Mezhathur, a name synonymous with authentic Ayurvedic healing for over four generations. What began in 1974 as a humble Vaidyasala (traditional Ayurvedic clinic) founded by the visionary Late Dr. K.V. Vijayan, has evolved into a center of excellence in integrative neurocare.
              </p>
              <p class="head-text-1">
                Our founders, Dr. Vijith K.V., Managing Director & Chief Physician, and Dr. Neethu S. Jith, Medical Superintendent & Director, carry forward this legacy with unwavering dedication. With their guidance, VIAMS has grown into a full-fledged Ayurvedic hospital nestled in the serene landscapes of Palakkad, Kerala—a region known as the cradle of Ayurveda.
              </p>
            </div>
          </div>

          <div class="missionsec">

            <div class="left-block">
              <img src="{{ asset('website/assets/images/avatar/mission.svg')}}" alt="mission icon" class="missionIcon">
              <h3 class="heading-2">Our Mission</h3>
              <p>
                To bring the healing power of Ayurveda to individuals living with Parkinson’s and other neurodegenerative disorders—through evidence-based, ethical, and accessible care.
              </p>
            </div>
            <div class="right-block">
              <img src="{{ asset('website/assets/images/avatar/legacy.svg')}}" alt="legacy icon" class="missionIcon">
              <h3 class="heading-2">Our Legacy, Your Healing</h3>
              <p>
                From the hands of great-grandfathers and grandfathers who practiced Ayurveda by tradition, to a new era shaped by scientific rigor, our journey has been one of compassion, learning, and innovation.
              </p>
              <p>
                <strong>MYDOPA</strong> stands as a symbol of this journey—a bridge between ancient wisdom and modern neurological care.
              </p>
            </div>

          </div>

          <!-- Section 2: Birth of MYDOPA (With Image) -->
          <div class="block bg-block pt-30 pb-20">
            <div class="abt-text">
              <h2>The Birth of MYDOPA</h2>
              <p>
                In 2013, after completing his formal education in Ayurveda, Dr. Vijith K.V. redefined the vision of VIAMS by launching a focused research program on Parkinson’s disease—a condition often underserved by natural therapies.
              </p>
              <p>
                Over a decade of clinical research, patient trials, and continuous refinement led to the creation of <strong>MYDOPA</strong>—a natural, steroid-free, and preservative-free herbal formulation developed to support brain health and enhance the quality of life for individuals affected by neurodegenerative conditions.
              </p>
            </div>
            <div class="image" style="background-image: url('website/assets/images/product-shop/box.png');"></div>
          </div>

          <!-- Section 3: Highlights -->
          <div class="row whatset pt-40">
            <div class="col-lg-6">
              <img src="{{ asset('website/assets/images/product-shop/doctor1.jpg')}}" alt="mission icon" class="missionIcon">
            </div>
            <div class="col-lg-6 block">
              <div class="abt-text">
                <h3 class="heading-2">What Sets MYDOPA Apart</h3>
                <ul>
                  <li>Backed by 12+ years of dedicated research</li>
                  <li>Free from steroids and preservatives</li>
                  <li>Crafted using time-tested Ayurvedic herbs</li>
                  <li>Integrated holistic protocol including Panchakarma, Physiotherapy, ASLP, Yoga, Dietetics, and Psychological Counseling</li>
                </ul>
              </div>
            </div>
          </div>

          <div class="certificate-sec">
            <h3 class="heading-2">Certifications </h3>
            <div class="row whatset pt-40">
              <div class="col-lg-6">
                <a href="{{ asset('website/assets/images/report1/1-v.jpg') }}" class="zoom-gallery" title="Slide 1">
                  <img src="{{ asset('website/assets/images/report1/1-v.jpg') }}" alt="Slide 1" class="missionIcon">
                </a>
              </div>
              <div class="col-lg-6 ">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">

                  <!-- Indicators -->
                  <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                  </ol>

                  <!-- Wrapper for slides -->
                  <div class="carousel-inner" role="listbox">
                    <div class="item active">
                      <a href="{{ asset('website/assets/images/report2/1-v.jpg') }}" class="zoom-gallery" title="Slide 2">
                        <img src="{{ asset('website/assets/images/report2/1-v.jpg') }}" alt="Slide 2">
                      </a>
                    </div>

                    <div class="item">
                      <a href="{{ asset('website/assets/images/report2/2-v.jpg') }}" class="zoom-gallery" title="Slide 3">
                        <img src="{{ asset('website/assets/images/report2/2-v.jpg') }}" alt="Slide 3">
                      </a>
                    </div>

                    <div class="item">
                      <a href="{{ asset('website/assets/images/report2/3-v.jpg') }}" class="zoom-gallery" title="Slide 4">
                        <img src="{{ asset('website/assets/images/report2/3-v.jpg') }}" alt="Slide 4">
                      </a>
                    </div>
                  </div>

                  <!-- Left and right controls -->
                  <!-- <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#000" class="bi bi-arrow-left-short" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5" />
                    </svg>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#000" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8" />
                    </svg>
                    <span class="sr-only">Next</span>
                  </a> -->
                </div>
              </div>
            </div>
          </div>


        </div>
      </div>
    </div>
  </div>
</div>

</div>


<script>
  $(document).ready(function() {
    $('.carousel-inner').magnificPopup({
      delegate: 'a.zoom-gallery', // child items selector, by clicking on it popup will open
      type: 'image',
      gallery: {
        enabled: true, // Enable gallery mode
        navigateByImgClick: true,
        preload: [0, 1] // preload previous and next images
      },
      image: {
        titleSrc: 'title',
        verticalFit: true
      }
    });
  });

  $(document).ready(function() {
    $('.certificate-sec').magnificPopup({
      delegate: 'a.zoom-gallery',
      type: 'image',
      gallery: {
        enabled: true,
        navigateByImgClick: true,
        preload: [0, 1]
      },
      image: {
        titleSrc: 'title',
        verticalFit: true
      }
    });
  });
</script>



@endsection