@extends('website.layouts.app')

@section('title', 'Product')

@section('content')

<!-- shop-banner start -->
<div class="shop-banner lg:h-full md:h-[580px] sm:h-[40px] h-[40px] only-desk" style="background-image: url('{{ asset('website/assets/images/product-shop/shop-banner.jpg') }}');">
    <div class="container w-full h-full flex ">
        <div class="text-content sm:w-1/2 w-2/3">
            <div class="text-display md:mt-5 mt-2">Herbal health supplement for parkinson’s disease</div>
            <img src="{{ asset('website/assets/images/product-shop/box.png')}}" alt="mockup" class="shop-banner-inner-img">
        </div>

    </div>
</div>
<div class="shop-banner lg:h-full md:h-[580px] sm:h-[40px] h-[40px] only-mob" style="background-image: url('{{ asset('website/assets/images/product-shop/shop-banner-mob.jpg') }}');">
    <div class="container w-full h-full flex ">
        <div class="text-content ">
            <div class="text-display md:mt-5 mt-2">Herbal health supplement for parkinson’s disease</div>
        </div>

    </div>
</div>
<!-- shop-banner end -->
<!-- <div class="home-page">
    <div class="slider-block style-two bg-linear  lg:h-[680px] md:h-[580px] sm:h-[500px] h-[420px] w-full">
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
                                    <img src="{{ asset('website/assets/images/product-shop/shop-banner.jpg')}}" alt="bg-cos1-1" class="w-full h-full object-cover  only-desk" />
                                    <img src="{{ asset('website/assets/images/slider/bg-cos1-1-mob.jpg')}}" alt="bg-cos1-1" class="w-full h-full object-cover only-mob" />
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div> -->


<!-- Product-Showcase start-->
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
            <p>VIAMS MYDOPA is an exclusive blend of precious herbs, meticulously
                formulated based on Ayurvedic wisdom. It provides natural L-dopa while
                stimulating dopamine production in the brain, offering a dual benefit for
                individuals with Parkinson’s Disease. This safe and effective herbal
                supplement supports symptom management and enhances overall
                quality of life.</p>
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
                    <div class="blk_tag">BEST RESULT </div>
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
            <button class="buy-now">Buy It Now</button>
        </div>
    </div>
</div>

<!-- ========================benefit sec start============================= -->

<div class="benefit-block md:py-20 py-10">
    <div class="container">
        <div class="list-benefit grid items-start md:grid-cols-3 grid-cols-1 xl:gap-[160px] lg:gap-20 gap-10 gap-y-6">
            <div class="benefit-item flex flex-col items-center justify-center">
                <div class="icon-wrapper">
                    <img src="{{ asset('website/assets/images/avatar/icons-01.svg')}}" alt="">
                </div>
                <div class="body1   text-center mt-5">Standardized herbal
                    extracts for precise
                    dosage</div>

            </div>
            <div class="benefit-item flex flex-col items-center justify-center">
                <div class="icon-wrapper">
                    <img src="{{ asset('website/assets/images/avatar/icons-02.svg')}}" alt="">
                </div>
                <div class="body1   text-center mt-5">Free from synthetic
                    additives and
                    preservatives.</div>

            </div>
            <div class="benefit-item flex flex-col items-center justify-center">
                <div class="icon-wrapper">
                    <img src="{{ asset('website/assets/images/avatar/icons-03.svg')}}" alt="">
                </div>
                <div class="body1  text-center mt-5">100% natural
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
                                <h2>What About <br> MYDOPA?</h2>
                            </div>
                        </div>
                        <div class="card">
                            <div class="vector-sec">
                                <img src="{{ asset('website/assets/images/product-shop/flower.svg')}}" alt="vector img">
                            </div>
                            <button class="image" data-toggle="modal" data-target="#video1Modal">
                                <img src="{{ asset('website/assets/images/videos/video2.gif')}}" alt="Doctor">
                            </button>
                            <h3>Why choose this?</h3>
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
                            <h3>Who can take it</h3>
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

  <!-- feature start -->
  <div class="shop-banner feature lg:h-full md:h-[580px] sm:h-[40px] h-[40px] only-desk"
        style="background-image: url('{{ asset('website/assets/images/product-shop/feature.jpg') }}');">
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
    <div class="shop-banner feature lg:h-full md:h-[580px] sm:h-[40px] h-[40px] only-mob"
        style="background-image: url('{{ asset('website/assets/images/product-shop/feature-mob.jpg') }}');">
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
    {{-- <div class="reviewsec">
        <div class="container">
            <h2 class="mainTitle">Customer Reviews</h2>

            <div class="review-inner_block ">
                <div class=" review_grid all_review">
                    <div class="rating-box">
                        <div class="stars">
                            <i class='bx bx-star star'></i>
                            <i class='bx bx-star star'></i>
                            <i class='bx bx-star star'></i>
                            <i class='bx bx-star star'></i>
                            <i class='bx bx-star star'></i>
                        </div>
                    </div>
                    <div class="review_text">
                        <p>4.73 out of 5</p>
                        <p>Based on 22 reviews</p>
                    </div>
                </div>
                <div class="review_grid rating_sec">
                    <div class="five_star_rating single_star_sec">
                        <div class="rating-box">
                            <div class="stars">
                                <i class='bx bx-star star'></i>
                                <i class='bx bx-star star'></i>
                                <i class='bx bx-star star'></i>
                                <i class='bx bx-star star'></i>
                                <i class='bx bx-star star'></i>
                            </div>
                        </div>
                        <div class="rating_progrss">
                            <progress max="100" value="80" class="html5" style="border-radius: 0;">
                                <div class="progress-bar">
                                    <span style="width: 80%">20%</span>
                                </div>
                            </progress>
                        </div>
                        <div class="rating_count">
                            <span>17</span>
                        </div>
                    </div>
                    <div class="five_star_rating single_star_sec">
                        <div class="rating-box">
                            <div class="stars">
                                <i class='bx bx-star star'></i>
                                <i class='bx bx-star star'></i>
                                <i class='bx bx-star star'></i>
                                <i class='bx bx-star star'></i>
                                <i class='bx bx-star star'></i>
                            </div>
                        </div>
                        <div class="rating_progrss">
                            <progress max="100" value="20" class="html5" style="border-radius: 0;">
                                <div class="progress-bar">
                                    <span style="width: 20%">20%</span>
                                </div>
                            </progress>
                        </div>
                        <div class="rating_count">
                            <span>4</span>
                        </div>
                    </div>
                    <div class="five_star_rating single_star_sec">
                        <div class="rating-box">
                            <div class="stars">
                                <i class='bx bx-star star'></i>
                                <i class='bx bx-star star'></i>
                                <i class='bx bx-star star'></i>
                                <i class='bx bx-star star'></i>
                                <i class='bx bx-star star'></i>
                            </div>
                        </div>
                        <div class="rating_progrss">
                            <progress max="100" value="80" class="html5" style="border-radius: 0;">
                                <div class="progress-bar">
                                    <span style="width: 80%">80%</span>
                                </div>
                            </progress>
                        </div>
                        <div class="rating_count">
                            <span>17</span>
                        </div>
                    </div>
                    <div class="five_star_rating single_star_sec">
                        <div class="rating-box">
                            <div class="stars">
                                <i class='bx bx-star star'></i>
                                <i class='bx bx-star star'></i>
                                <i class='bx bx-star star'></i>
                                <i class='bx bx-star star'></i>
                                <i class='bx bx-star star'></i>
                            </div>
                        </div>
                        <div class="rating_progrss">
                            <progress max="100" value="80" class="html5" style="border-radius: 0;">
                                <div class="progress-bar">
                                    <span style="width: 80%">80%</span>
                                </div>
                            </progress>
                        </div>
                        <div class="rating_count">
                            <span>17</span>
                        </div>
                    </div>
                    <div class="five_star_rating single_star_sec">
                        <div class="rating-box">
                            <div class="stars">
                                <i class='bx bx-star star'></i>
                                <i class='bx bx-star star'></i>
                                <i class='bx bx-star star'></i>
                                <i class='bx bx-star star'></i>
                                <i class='bx bx-star star'></i>
                            </div>
                        </div>
                        <div class="rating_progrss">
                            <progress max="100" value="80" class="html5" style="border-radius: 0;">
                                <div class="progress-bar">
                                    <span style="width: 80%">80%</span>
                                </div>
                            </progress>
                        </div>
                        <div class="rating_count">
                            <span>17</span>
                        </div>
                    </div>

                </div>
                <div class="review_grid add_rating">
                    <button type="button" class="btn btn-primary btn-review" data-toggle="modal" data-target="#reviewModal">
                        Write a Review
                    </button>
                    <button type="button" class="btn btn-primary btn-question" data-toggle="modal" data-target="#questionModal">
                        Ask a Question
                    </button>

                </div>

            </div>
        </div>
        <hr class="hrline">

        <div class="review_tabs_sec">
            <div class="container">
                <div class="row">
                    <div class="col-12">

                        <div class="faqs-block   tab-content ">
                            <div class="container">
                                <div class="flex max-md:flex-wrap justify-between gap-y-8 flex-col">
                                    <div class="left ">
                                        <div class="menu-tab flex  gap-5">
                                            <div class=" tab-item inline-block w-fit heading6  text-secondary2 hover:text-black duration-300 active" data-item="how to buy">Reviews (12)</div>
                                            <div class="tab-item inline-block w-fit heading6  text-secondary2 hover:text-black duration-300" data-item="payment methods">Questions (24)</div>

                                        </div>
                                    </div>

                                    <div class="right list-question ">
                                        <div class="tab-question flex flex-col " data-item="how to buy">

                                            <div class="single_review">
                                                <div class="rating-box">
                                                    <div class="stars">
                                                        <i class='bx bx-star star'></i>
                                                        <i class='bx bx-star star'></i>
                                                        <i class='bx bx-star star'></i>
                                                        <i class='bx bx-star star'></i>
                                                        <i class='bx bx-star star'></i>
                                                    </div>
                                                </div>
                                                <h4 class="author_name">Avisweta Dash </h4>
                                                <h3 class="review_overview">Good product , Great Benefits</h3>
                                                <p class="review_description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation
                                                    ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero
                                                    eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.
                                                    Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation
                                                    ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                                            </div>
                                            <div class="single_review">
                                                <div class="rating-box">
                                                    <div class="stars">
                                                        <i class='bx bx-star star'></i>
                                                        <i class='bx bx-star star'></i>
                                                        <i class='bx bx-star star'></i>
                                                        <i class='bx bx-star star'></i>
                                                        <i class='bx bx-star star'></i>
                                                    </div>
                                                </div>
                                                <h4 class="author_name">Avisweta Dash </h4>
                                                <h3 class="review_overview">Good product , Great Benefits</h3>
                                                <p class="review_description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation
                                                    ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero
                                                    eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.
                                                    Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation
                                                    ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                                            </div>
                                            <div class="single_review">
                                                <div class="rating-box">
                                                    <div class="stars">
                                                        <i class='bx bx-star star'></i>
                                                        <i class='bx bx-star star'></i>
                                                        <i class='bx bx-star star'></i>
                                                        <i class='bx bx-star star'></i>
                                                        <i class='bx bx-star star'></i>
                                                    </div>
                                                </div>
                                                <h4 class="author_name">Avisweta Dash </h4>
                                                <h3 class="review_overview">Good product , Great Benefits</h3>
                                                <p class="review_description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation
                                                    ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero
                                                    eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.
                                                    Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation
                                                    ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                                            </div>

                                        </div>
                                        <div class="tab-question flex flex-col gap-5 pt-30" data-item="payment methods">
                                            <div class="question-item px-7 py-5 rounded-[20px] overflow-hidden border border-line cursor-pointer ">
                                                <div class="heading flex items-center justify-between gap-6">
                                                    <div class="heading6">NEW! Plus sizes for Woman</div>
                                                    <i class="ph ph-caret-right text-2xl"></i>
                                                </div>
                                                <div class="content body1 text-secondary">
                                                    The courier companies have adapted their procedures to guarantee the safety of our employees and our community. We thank you for your patience, as there may be some delays to deliveries. We remind you that you can still find us at Mango.com and on all our online channels. Our customer services are still there for you, to answer any questions you may have, although due to the current situation, we are operating with longer waiting times.
                                                </div>
                                            </div>
                                            <div class="question-item px-7 py-5 rounded-[20px] overflow-hidden border border-line cursor-pointer">
                                                <div class="heading flex items-center justify-between gap-6">
                                                    <div class="heading6">How does COVID-19 affect my online orders and store purchases?</div>
                                                    <i class="ph ph-caret-right text-2xl"></i>
                                                </div>
                                                <div class="content body1 text-secondary">The courier companies have adapted their procedures to guarantee the safety of our employees and our community. We thank you for your patience, as there may be some delays to deliveries. We remind you that you can still find us at Mango.com</div>
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
    </div> --}}

    <!-- ===============================Review sec end================================ -->


    <!-- ===============================faq sec start================================ -->

 @include('website.faq')
    {{-- <div class="why_mydopa faqSec">
        <div class="container">
            <h2 class="mainTitle">FAQ's</h2>

            <div class="faq-inner_block ">

                        <div class="faq-one__right fadein">
                            <div class="panel-group faq-accordion theme-accordion-s1 faq-one-accrodion" id="accordion">
                                <div class="panel panel-default">
                                    <div class="panel-heading accrodion-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse-1"
                                            aria-expanded="true">Who should use Parkisnsons Balance?</a>
                                    </div>
                                    <div id="collapse-1" class="panel-collapse collapse in">
                                        <div class="panel-body">
                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad
                                                minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate
                                                velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue
                                                duis dolore te feugait nulla facilisi.
                                                Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion"
                                            href="#collapse-2">Who should use Parkisnsons Balance?</a>
                                    </div>
                                    <div id="collapse-2" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p>You can place an order easily through our mobile app.
                                                Just download the app, select your service, and schedule a pickup.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion"
                                            href="#collapse-3">Who should use Parkisnsons Balance?</a>
                                    </div>
                                    <div id="collapse-3" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p>Flat 50% off on first order when you place it through our
                                                app.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion"
                                            href="#collapse-4">Who should use Parkisnsons Balance?</a>
                                    </div>
                                    <div id="collapse-4" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p>Yes, we offer secure online payment options through our app for your
                                                convenience.
                                                You can pay using credit/debit cards, UPI, or other digital wallets.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion"
                                            href="#collapse-5">Who should use Parkisnsons Balance?</a>
                                    </div>
                                    <div id="collapse-5" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p>Turnaround times depend on the service selected.
                                                Typically, ironing takes minimum 4 hours, wash
                                                and fold orders are completed within 24-48 hours,
                                                while dry cleaning may take up to 72 hours.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion"
                                            href="#collapse-6">Who should use Parkisnsons Balance?
                                        </a>
                                    </div>
                                    <div id="collapse-6" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p>Yes, we specialize in caring for delicate fabrics
                                                and specialty garments. Rest assured, we handle them with extra care.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion"
                                            href="#collapse-7">Who should use Parkisnsons Balance?</a>
                                    </div>
                                    <div id="collapse-7" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p>We use premium, eco-friendly detergents and cleaning agents
                                                that are gentle on fabrics and safe for the environment.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion"
                                            href="#collapse-8">Who should use Parkisnsons Balance?</a>
                                    </div>
                                    <div id="collapse-8" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p>Yes, we provide contactless pickup and delivery for your safety and
                                                convenience. </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion"
                                            href="#collapse-9">Who should use Parkisnsons Balance?
                                        </a>
                                    </div>
                                    <div id="collapse-9" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p>You earn reward points with every order.
                                                These points can be redeemed for discounts on future services.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion"
                                            href="#collapse-10">Who should use Parkisnsons Balance?</a>
                                    </div>
                                    <div id="collapse-10" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p>Your satisfaction is our priority. Please reach out to our customer
                                                support team via the app or call us directly, and we’ll resolve the
                                                issue promptly.</p>
                                            </p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>


            </div>
        </div>
    </div> --}}

    <!-- ===============================faq sec end================================ -->

@endsection
@push('scripts')
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
@endpush
