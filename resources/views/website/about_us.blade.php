@extends('website.layouts.app')

@section('title', 'About Us')

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
                Over a decade of clinical research, patient trials, and continuous refinement led to the creation of <strong>MYDOPA</strong>—a natural, steroid-free, and preservative-free Ayurvedic formulation developed to support brain health and enhance the quality of life for individuals affected by neurodegenerative conditions.
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
        </div>
      </div>
    </div>
  </div>
</div>

</div>



@endsection