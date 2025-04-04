@extends('website.layouts.app')

@section('title', 'Home Page')

@section('content')

<div class="home-page">
    <div class="slider-block style-two bg-linear  lg:h-[680px] md:h-[580px] sm:h-[500px] h-[420px] w-full">
        <div class="slider-main h-full w-full home-banner">
            <div class="swiper swiper-slider h-full relative">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="slider-item h-full w-full relative overflow-hidden">
                            <div class="container-fluid w-full h-full flex ">
                                <div class="text-content sm:w-1/2 w-2/3">

                                    <div class="text-display md:mt-5 mt-2 mt-70">Herbal health
                                        supplement for
                                        parkinson’s
                                        disease</div>

                                </div>
                                <div class="sub-img absolute left-0 top-0 w-full h-full z-[-1]">
                                    <img src="{{ asset('website/assets/images/slider/bg-cos1-1.jpg')}}" alt="bg-cos1-1" class="w-full h-full object-cover" />
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
    <!-- <div class="collection-block cosmetic md:pt-20 pt-10">
    <div class="container">
        <div class="grid sm:grid-cols-2 md:gap-[30px] gap-[16px]">
            <div class="left">
                <a href="shop-breadcrumb1.html" class="collection-item block h-full relative md:rounded-[20px] rounded-xl overflow-hidden cursor-pointer">
                    <div class="bg-img h-full w-full aspect-square">
                        <img src="{{ asset('website/assets/images/collection/body.png')}}" alt="body" class="h-full object-cover" />
                    </div>
                    <div class="collection-name heading5 text-center sm:bottom-[30px] bottom-4 lg:w-[200px] md:w-auto max-lg:px-5 lg:py-3 py-1.5 bg-white rounded-xl duration-500">
                        Body</div>
                </a>
            </div>
            <div class="right grid grid-rows-2 md:gap-[30px] gap-[16px]">
                <div class="top grid grid-cols-2 md:gap-[30px] gap-[16px]">
                    <a href="shop-breadcrumb1.html" class="collection-item block relative md:rounded-[20px] rounded-xl overflow-hidden cursor-pointer">
                        <div class="bg-img h-full">
                            <img src="{{ asset('website/assets/images/collection/skin.png')}}" alt="skin" class="h-full object-cover" />
                        </div>
                        <div class="collection-name heading5 text-center sm:bottom-[30px] bottom-4 lg:w-[200px] md:w-auto max-lg:px-5 lg:py-3 py-1.5 bg-white rounded-xl duration-500">
                            Skin</div>
                    </a>
                    <a href="shop-breadcrumb1.html" class="collection-item block relative md:rounded-[20px] rounded-xl overflow-hidden cursor-pointer">
                        <div class="bg-img h-full">
                            <img src="{{ asset('website/assets/images/collection/hair.png')}}" alt="hair" class="h-full object-cover" />
                        </div>
                        <div class="collection-name heading5 text-center sm:bottom-[30px] bottom-4 lg:w-[200px] md:w-auto max-lg:px-5 lg:py-3 py-1.5 bg-white rounded-xl duration-500">
                            Hair</div>
                    </a>
                </div>
                <div class="bottom">
                    <a href="shop-breadcrumb1.html" class="collection-item block relative md:rounded-[20px] rounded-xl overflow-hidden cursor-pointer">
                        <div class="bg-img h-full">
                            <img src="{{ asset('website/assets/images/collection/accessories-cos.png')}}" alt="accessories-cos" class="h-full object-cover" />
                        </div>
                        <div class="collection-name heading5 text-center sm:bottom-[30px] bottom-4 lg:w-[200px] md:w-auto max-lg:px-5 lg:py-3 py-1.5 bg-white rounded-xl duration-500">
                            Accessories</div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div> -->


    <!-- ====================== wellbeing sec starts  =============================== -->

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

                        <a href="" class="btn btn-primary">Read More</a>
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
                    <div class="body1   text-center mt-5">Standardized herbal
                        extracts for precise
                        dosage</div>

                </div>
                <div class="benefit-item flex flex-col items-center justify-center">
                    <div class="icon-wrapper">
                        <img src="{{ asset('website/assets/images/avatar/icons-01.svg')}}" alt="">
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
        <section class="mydopa-section">
            <div class="text">
                <h2>What About <br> MYDOPA?</h2>
            </div>
            <div class="cards">
                <div class="card">
                    <div class="image">
                        <!-- <img src="{{ asset('website/assets/images/product-shop/doctor1.jpg')}}" alt="Doctor"> -->
                        <iframe class="h-full w-full" src="https://www.youtube.com/embed/huOVTcPUc_4?si=yRH0DqbR02dAoqyW&controls=0&autoplay=1&mute=1&rel=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

                    </div>
                    <h3>Why choose this?</h3>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing
                        elit, sed diam nonummy nibh euismod tincidunt ut
                        laoreet dolore magna aliquam erat volutpat. Ut wisi
                        enim ad minim veniam, quis nostrud exerci tation
                        ullamcorper suscipit lobortis nisl ut aliquip ex ea </p>
                    <span class="number">01</span>
                </div>
                <div class="card">
                    <div class="image">
                    <iframe class="h-full w-full" src="https://www.youtube.com/embed/XFWoLiOKBt0?si=QdURubTrYAmvDLc0&controls=0&autoplay=1&mute=1&rel=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

                    </div>
                    <h3>Who can take it</h3>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing
                        elit, sed diam nonummy nibh euismod tincidunt ut
                        laoreet dolore magna aliquam erat volutpat. Ut wisi
                        enim ad minim veniam, quis nostrud exerci tation
                        ullamcorper suscipit lobortis nisl ut aliquip ex ea </p>
                    <span class="number">02</span>
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
                <button class="buy-now">Buy It Now</button>
            </div>
        </div>
    </div>


    <!-- feature start -->
    <div class="shop-banner feature lg:h-full md:h-[580px] sm:h-[40px] h-[40px]">
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

    <!-- ====================== thumbnail sec starts  =============================== -->

    <!-- <div class="why_mydopa thumbnailSec">
        <div class="container">
            <div class="inner_block ">
                <div class="right_sec w-50">
                    <div class="thumbnail_slider">
                        <div id="primary_slider">
                            <div class="splide__track">
                                <ul class="splide__list">
                                    <li class="splide__slide">
                                        <img src="https://images.pexels.com/photos/1539225/pexels-photo-1539225.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1=1260">
                                    </li>
                                    <li class="splide__slide">
                                        <img src="https://images.pexels.com/photos/858115/pexels-photo-858115.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1=1260">
                                    </li>
                                    <li class="splide__slide">
                                        <img src="https://images.pexels.com/photos/13295150/pexels-photo-13295150.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1=1260">
                                    </li>

                                    <li class="splide__slide">
                                        <img src="https://images.pexels.com/photos/4275890/pexels-photo-4275890.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1=1260">
                                    </li>
                                    <li class="splide__slide">
                                        <img src="https://images.pexels.com/photos/3511104/pexels-photo-3511104.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1=1260">
                                    </li>
                                    <li class="splide__slide">
                                        <img src="https://images.pexels.com/photos/276484/pexels-photo-276484.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1=1260">
                                    </li>
                                    <li class="splide__slide">
                                        <img src="https://images.pexels.com/photos/33545/sunrise-phu-quoc-island-ocean.jpg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1=1260">
                                    </li>
                                    <li class="splide__slide">
                                        <img src="https://images.pexels.com/photos/2026452/pexels-photo-2026452.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1=1260">
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div id="thumbnail_slider">
                            <div class="splide__track">
                                <ul class="splide__list">
                                    <li class="splide__slide">
                                        <img src="https://images.pexels.com/photos/1539225/pexels-photo-1539225.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1=1260">
                                    </li>
                                    <li class="splide__slide">
                                        <img src="https://images.pexels.com/photos/858115/pexels-photo-858115.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1=1260">
                                    </li>
                                    <li class="splide__slide">
                                        <img src="https://images.pexels.com/photos/13295150/pexels-photo-13295150.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1=1260">
                                    </li>

                                    <li class="splide__slide">
                                        <img src="https://images.pexels.com/photos/4275890/pexels-photo-4275890.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1=1260">
                                    </li>
                                    <li class="splide__slide">
                                        <img src="https://images.pexels.com/photos/3511104/pexels-photo-3511104.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1=1260">
                                    </li>
                                    <li class="splide__slide">
                                        <img src="https://images.pexels.com/photos/276484/pexels-photo-276484.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1=1260">
                                    </li>
                                    <li class="splide__slide">
                                        <img src="https://images.pexels.com/photos/33545/sunrise-phu-quoc-island-ocean.jpg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1=1260">
                                    </li>
                                    <li class="splide__slide">
                                        <img src="https://images.pexels.com/photos/2026452/pexels-photo-2026452.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1=1260">
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="left_sec w-50">
                    <div class="left-content-wrapper">
                        <h1 class="purple_title">Mydopa</h1>
                        <ul>
                            <li>Controls tremors and improves motor function.</li>
                            <li>For a healthy and active life with Parkinson’s.</li>
                            <li>A natural alternative to artificial dopaminergic medicines</li>
                            <li>Natural Source of L-Dopa.</li>
                            <li>Arrests degeneration of Brain cells.</li>
                            <li>Good Aphrodisiac</li>
                            <li>Supports cognitive health and gut health</li>
                        </ul>

                        <a href="" class="btn btn-primary">Read More</a>
                    </div>

                </div>

            </div>
        </div>
    </div> -->

    <!-- ========================thumbnail sec end============================= -->


    <!-- ===============================Review sec start================================ -->

   <!-- ===============================Review sec start================================ -->

   <div class="reviewsec">
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
    </div>


    <!-- ===============================Review sec end================================ -->

    <!-- ===============================Review sec end================================ -->


    <!-- ===============================faq sec start================================ -->

    <div class="why_mydopa faqSec">
        <div class="container">
            <h2 class="mainTitle">FAQ's</h2>

            <div class="faq-inner_block ">
                <div class="row">
                    <div class="col-12">
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

            </div>
        </div>
    </div>

    <!-- ===============================faq sec end================================ -->


    <!-- =============================================== -->

</div>

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


@endsection