@extends('website.layouts.app')

@section('title', 'Home')

@section('content')

<div class="home-page">
    <div class="slider-block style-two bg-linear lg:h-[680px] md:h-[580px] sm:h-[500px] h-[420px] w-full">
        <div class="slider-main h-full w-full home-banner">
            <div class="swiper swiper-slider h-full relative">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="slider-item h-full w-full relative overflow-hidden">
                            <div class="container-fluid w-full h-full flex ">
                                <div class="text-content  w-2/3">

                                    <div class="text-display md:mt-5 mt-2 mt-70">Herbal health
                                        supplement for
                                        parkinson’s
                                        disease</div>

                                </div>
                                <div class="sub-img absolute left-0 top-0 w-full h-full z-[-1]">
                                    <img src="{{ asset('website/assets/images/slider/bg-cos1-1.jpg')}}" alt="bg-cos1-1" class="w-full h-full object-cover  only-sm-desk" />
                                    <img src="{{ asset('website/assets/images/slider/bg-cos1-1-mob.jpg')}}" alt="bg-cos1-1" class="w-full h-full object-cover only-sm-mob" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="swiper-slide">
<div class="slider-item h-full w-full relative overflow-hidden">
<div class="container w-full h-full flex items-center">
<div class="text-content sm:w-1/2 w-2/3">
<div class="text-sub-display">Sale! Up To 50% Off!</div>
<div class="text-display md:mt-5 mt-2">Elevate Your Beauty with Our Cosmetics
</div>
<div class="body1 mt-4">Check out our latest collection of chic and trendy
outfits that will keep you looking stylish all year round.</div>
<a href="shop-breadcrumb-img.html" class="button-main md:mt-8 mt-3"> Shop
Now</a>
</div>
<div class="sub-img absolute left-0 top-0 w-full h-full z-[-1]">
<img src="{{ asset('website/assets/images/slider/bg-cos1-2.png')}}" alt="bg-cos1-2" class="w-full h-full object-cover" />
</div>
</div>
</div>
</div>
<div class="swiper-slide">
<div class="slider-item h-full w-full relative overflow-hidden">
<div class="container w-full h-full flex items-center">
<div class="text-content sm:w-1/2 w-2/3">
<div class="text-sub-display">Sale! Up To 50% Off!</div>
<div class="text-display md:mt-5 mt-2">Unleash Your Inner Glamour</div>
<div class="body1 mt-4">Check out our latest collection of chic and trendy
outfits that will keep you looking stylish all year round.</div>
<a href="shop-breadcrumb-img.html" class="button-main md:mt-8 mt-3"> Shop
Now</a>
</div>
<div class="sub-img absolute left-0 top-0 w-full h-full z-[-1]">
<img src="{{ asset('website/assets/images/slider/bg-cos1-3.png')}}" alt="bg-cos1-3" class="w-full h-full object-cover" />
</div>
</div>
</div>
</div> -->
                </div>
                <!-- <div class="swiper-pagination"></div> -->
            </div>
        </div>
    </div>



    <!-- ====================== wellbeing sec starts =============================== -->

    <div class="why_mydopa wellbeing">
        <div class="container">
            <h2 class="mainTitle">Wellbeing Through Ayurveda </h2>
            <div class="inner_block d-end">
                <div class="right_sec w-50">
                    <div class="img-wrapper">
                        <img src="{{ asset('website/assets/images/banner/main-product.png')}}" alt="">
                    </div>
                </div>
                <div class="left_sec w-50">
                    <div class="left-content-wrapper">

                        <p class="doctors_message">VIAMS MYDOPA is an exclusive blend of precious herbs,
                            meticulously formulated based on Ayurvedic wisdom. It
                            provides natural L-dopa while stimulating dopamine
                            production in the brain, offering a dual benefit for individuals with Parkinson’s Disease. This safe and effective herbal
                            supplement supports symptom management and enhances
                            overall quality of life.
                        </p>

                        <a href="{{route('website.product')}}" class="btn btn-primary">Read More</a>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <!-- ========================wellbeing sec end============================= -->
    <!-- ========================benefit sec start============================= -->

    <div class="benefit-block md:py-20 py-10">
        <div class="container">
            <div class="list-benefit grid items-start md:grid-cols-3 grid-cols-1 xl:gap-[160px] lg:gap-20 gap-10 gap-y-6">
                <div class="benefit-item flex flex-col items-center justify-center">
                    <div class="icon-wrapper">
                        <img src="{{ asset('website/assets/images/avatar/icons-01.svg')}}" alt="">
                    </div>
                    <div class="body1 text-center mt-5">Standardized herbal
                        extracts for precise
                        dosage</div>

                </div>
                <div class="benefit-item flex flex-col items-center justify-center">
                    <div class="icon-wrapper">
                        <img src="{{ asset('website/assets/images/avatar/icons-02.svg')}}" alt="">
                    </div>
                    <div class="body1 text-center mt-5">Free from synthetic
                        additives and
                        preservatives.</div>

                </div>
                <div class="benefit-item flex flex-col items-center justify-center">
                    <div class="icon-wrapper">
                        <img src="{{ asset('website/assets/images/avatar/icons-03.svg')}}" alt="">
                    </div>
                    <div class="body1 text-center mt-5">100% natural
                        and plant-based
                        ingredients.</div>

                </div>
            </div>
        </div>
    </div>

    <!-- ========================benefit sec end============================= -->


    <!--  about mydopa start-->
    <div class="about">
        <section class="mydopa-section about-wrapper">

            <div class="right-sec">
                <div class="horizontal-scroll">
                    <div class="cards" id="horizontal">
                        <div class="card">
                            <div class="text ">
                                <h2>MYDOPA  <br> The Freedom to Move</h2>
                            </div>
                        </div>
                        <div class="card">
                            <div class="vector-sec">
                                <img src="{{ asset('website/assets/images/product-shop/flower.svg')}}" alt="vector img">
                            </div>
                            <button class="image" data-toggle="modal" data-target="#video1Modal">
                                <img src="{{ asset('website/assets/images/videos/video2.gif')}}" alt="Doctor">
                            </button>
                            <h3>Why choose Mydopa?</h3>
                            <p>MYDOPA is a unique Ayurvedic formulation developed after 12 years of research to support
                                individuals with Parkinson’s disease and other neurodegenerative disorders. It is available in
                                granule sachets (1500 mg) and capsules (500 mg) for easy and flexible use. </p>
                            <span class="number">01</span>
                        </div>
                        <div class="card">
                            <div class="vector-sec">
                                <img src="{{ asset('website/assets/images/product-shop/flower.svg')}}" alt="vector img">
                            </div>
                            <button class="image" data-toggle="modal" data-target="#video2Modal">
                                <img src="{{ asset('website/assets/images/videos/video1.gif')}}" alt="Doctor">
                            </button>
                            <h3>Who can take it?</h3>
                            <p>MYDOPA is suitable for patients diagnosed with Parkinson’s disease, Parkinsonism, 
                                or other neurodegenerative conditions that involve tremors, stiffness, or motor deficits. </p>
                            <span class="number">02</span>
                        </div>
                        <div class="card">
                            <div class="vector-sec">
                                <img src="{{ asset('website/assets/images/product-shop/flower.svg')}}" alt="vector img">
                            </div>
                            <button class="image" data-toggle="modal" data-target="#video3Modal">
                                <img src="{{ asset('website/assets/images/videos/video3.gif')}}" alt="Doctor">
                            </button>
                            <h3>How to use?</h3>
                            <p>MYDOPA is available as 1500 mg granules (mix with warm water or milk) and 500 mg capsules (taken with warm water 2–3 times daily). Use under medical supervision, ideally within our integrated care model.</p>
                            <span class="number">03</span>
                        </div>
                        <div class="card">
                            <div class="vector-sec">
                                <img src="{{ asset('website/assets/images/product-shop/flower.svg')}}" alt="vector img">
                            </div>
                            <button class="image" data-toggle="modal" data-target="#video4Modal">
                                <img src="{{ asset('website/assets/images/videos/video4.gif')}}" alt="Doctor">
                            </button>
                            <h3>How it works?</h3>
                            <p>MYDOPA is designed to help balance dopamine levels naturally, improve motor
                                coordination, reduce tremors, and support overall brain and nerve function. It works by
                                combining potent Ayurvedic herbs traditionally used for neurological health. </p>
                            <span class="number">04</span>
                        </div>
                        <div class="card">
                            <div class="vector-sec">
                                <img src="{{ asset('website/assets/images/product-shop/flower.svg')}}" alt="vector img">
                            </div>
                            <button class="image" data-toggle="modal" data-target="#video5Modal">
                                <img src="{{ asset('website/assets/images/videos/video05.gif')}}" alt="Doctor">
                            </button>
                            <h3>Who should consult?</h3>
                            <p>Anyone considering taking MYDOPA, especially those already on standard Parkinson’s
                                 medications should consult their doctor or an Ayurvedic specialist. This ensures
                                 proper dosage adjustments and safe integration with existing treatments. </p>
                            <span class="number">05</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!--  about mydopa end-->

    <div class="product-showcase " style="padding-bottom: 40px;">
        <div class="product-container">
            <div class="product-image">
                <img src="{{ asset('website/assets/images/product-shop/product-1.jpg')}}" alt="Mydopa Product" class="main-img">
                <div class="thumbnail-gallery">
                    <button class="prev"><i class='bx bx-chevron-left bx-flip-vertical'></i></button>
                    <img src="{{ asset('website/assets/images/product-shop/product-1.jpg')}}" alt="Thumbnail">
                    <img src="{{ asset('website/assets/images/product-shop/product-2.jpg')}}" alt="Thumbnail">
                    <img src="{{ asset('website/assets/images/product-shop/product-3.jpg')}}" alt="Thumbnail">
                    <img src="{{ asset('website/assets/images/product-shop/product-4.jpg')}}" alt="Thumbnail">
                    <img src="{{ asset('website/assets/images/product-shop/product-5.jpg')}}" alt="Thumbnail">
                    <button class="next"><i class='bx bx-chevron-left bx-flip-horizontal'></i></button>
                </div>
            </div>
            <div class="product-details">
                <h1>Mydopa</h1>
                <p></p>
                <ul>
                    <li>✔ Controls tremors and improves motor function.</li>
                    <li>✔ For a healthy and active life with Parkinson’s.</li>
                    <li>✔ A natural alternative to artificial dopaminergic medicines.</li>
                    <li>✔ Natural Source of L-Dopa.</li>
                    <li>✔ Arrests degeneration of Brain cells</li>
                    <li>✔ Good Aphrodisiac.</li>
                    <li>✔ Supports cognitive health and gut health.</li>
                </ul>
                <div class="pricing-options">
                    <div class="plan best-result">
                        <span class="discount">SAVE ₹ 1,495</span>
                        <h3>3 Month</h3>
                        <p>90 Sachets</p>
                        <p class="rs">₹ 2,699 <span>₹ 4,104</span></p>
                        <p class="pb-10">MRP (incl. of all taxes)</P>
                        <div class="blk_tag">BEST RESULT</div>
                    </div>
                    <div class="plan most-popular">
                        <span class="discount">SAVE ₹ 947</span>
                        <h3>2 Month</h3>
                        <p>60 Sachets</p>
                        <p class="rs">₹ 1,849 <span>₹ 2,796</span></p>
                        <p class="pb-10">MRP (incl. of all taxes)</p>
                        <div class="blk_tag">MOST POPULAR
                        </div>
                    </div>
                    <div class="plan">
                        <span class="discount">SAVE ₹ 499</span>
                        <h3>1 Month</h3>
                        <p>30 Sachets</p>
                        <p class="rs">₹ 949 <span>₹ 1,398</span></p>
                        <p class="pb-10">MRP (incl. of all taxes)</p>
                    </div>
                </div>
                <a href="https://viams.in/product/mydopa-herbal-health-supplement-for-parkinsons-disease/" class="buy-now" >Buy It Now</a>
            </div>
        </div>
    </div>

    <!-- feature start -->
    <div class="shop-banner feature lg:h-full md:h-[580px] sm:h-[40px] h-[40px] only-desk" style="background-image: url('{{ asset('website/assets/images/product-shop/feature.jpg') }}');">
        <div class="list-text">
            <ul>
                <li>
                    <img src="{{ asset('website/assets/images/product-shop/icons-01.svg')}}" alt="icon">
                    <h2>Natural source <br> of L-dopa</h2>
                </li>
                <li>
                    <img src="{{ asset('website/assets/images/product-shop/icons-02.svg')}}" alt="icon">
                    <h2>Controls tremors and <br> improves motor function</h2>
                </li>
                <li>
                    <img src="{{ asset('website/assets/images/product-shop/icons-03.svg')}}" alt="icon">
                    <h2>Arrests degeneration <br> of brain cells</h2>
                </li>
                <li>
                    <img src="{{ asset('website/assets/images/product-shop/icons-04.svg')}}" alt="icon">
                    <h2>Supports cognitives <br> and gut health</h2>
                </li>
            </ul>
        </div>
    </div>
    <div class="shop-banner feature lg:h-full md:h-[580px] sm:h-[40px] h-[40px] only-mob" style="background-image: url('{{ asset('website/assets/images/product-shop/feature-mob.jpg') }}');">
        <div class="list-text">
            <ul>
                <li>
                    <img src="{{ asset('website/assets/images/product-shop/icons-01.svg')}}" alt="icon">
                    <h2>Natural source <br> of L-dopa</h2>
                </li>
                <li>
                    <img src="{{ asset('website/assets/images/product-shop/icons-02.svg')}}" alt="icon">
                    <h2>Controls tremors and <br> improves motor function</h2>
                </li>
                <li>
                    <img src="{{ asset('website/assets/images/product-shop/icons-03.svg')}}" alt="icon">
                    <h2>Arrests degeneration <br> of brain cells</h2>
                </li>
                <li>
                    <img src="{{ asset('website/assets/images/product-shop/icons-04.svg')}}" alt="icon">
                    <h2>Supports cognitives <br> and gut health</h2>
                </li>
            </ul>
        </div>
    </div>
    <!-- feature end -->




    <!-- ===============================Review sec start================================ -->

 @include('website.review-rating')

    <!-- ===============================Review sec end================================ -->

    <!-- ===============================faq sec start================================ -->

 @include('website.faq')

    <!-- ===============================faq sec end================================ -->

    <!-- =============================================== -->

</div>
@endsection
@push('scripts')
{{-- rating script --}}
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const stars = document.querySelectorAll('.star');
        const ratingInput = document.getElementById('rating');

        stars.forEach(star => {
            star.addEventListener('click', function() {
                const value = parseInt(this.getAttribute('data-value'));

                // Set rating input
                ratingInput.value = value;

                // Update star styles
                stars.forEach(s => {
                    const starValue = parseInt(s.getAttribute('data-value'));
                    if (starValue <= value) {
                        s.classList.remove('bx-star');
                        s.classList.add('bxs-star'); // solid filled star
                        s.style.color = '#FFC107'; // yellow/gold
                    } else {
                        s.classList.remove('bxs-star');
                        s.classList.add('bx-star'); // outlined star
                        s.style.color = ''; // reset color
                    }
                });
            });
        });
    });

</script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        let counters = document.querySelectorAll(".counter-loaded");
        let speed = 20; // Speed of counting animation

        counters.forEach(counter => {
            let target = +counter.innerText; // Convert text to number
            let count = 0;

            let updateCount = () => {
                if (count < target) {
                    count += 1; // Increment count
                    counter.innerText = count; // Update text
                    setTimeout(updateCount, speed); // Recursive call
                } else {
                    counter.innerText = target; // Ensure final value is accurate
                }
            };

            updateCount(); // Start animation
        });
    });
</script>

<script>
    $(document).on('show.bs.modal', function() {
        var scrollbarWidth = window.innerWidth - document.documentElement.clientWidth;
        $('body').css('padding-right', scrollbarWidth + 'px');
    });

    $(document).on('hidden.bs.modal', function() {
        $('body').css('padding-right', '');
    });
</script>
{{-- <script>
    document.querySelectorAll('.tab-item').forEach(tab => {
        tab.addEventListener('click', () => {
            document.querySelectorAll('.tab-item').forEach(t => t.classList.remove('active'));
            tab.classList.add('active');

            const target = tab.getAttribute('data-item');
            document.querySelectorAll('.tab-question').forEach(content => {
                content.style.display = content.getAttribute('data-item') === target ? 'block' : 'none';
            });
        });
    });
</script> --}}
<script>
    document.addEventListener("DOMContentLoaded", function() {
        document.querySelectorAll('.question-item .heading').forEach(heading => {
            heading.addEventListener('click', function() {
                const questionItem = this.closest('.question-item');
                const content = questionItem.querySelector('.content');
                const icon = questionItem.querySelector('i');

                // Toggle content visibility
                content.classList.toggle('hidden');

                // Toggle icon rotation
                icon.classList.toggle('rotate-90');
            });
        });
    });

</script>
@endpush
