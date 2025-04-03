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
                            <div class="container w-full h-full flex ">
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

    <div class="reviewsec">
        <div class="container">
            <h2 class="mainTitle">Customer Reviews</h2>

            <div class="review-inner_block ">
                <div class=" review_grid all_review">
                    <div class="rating-box">
                        <div class="stars">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                    </div>
                    <div class="review_text">
                        <p>4.73 out of 5</p>
                        <p>Based on 22 reviews</p>
                    </div>
                </div>
                <div class="review_grid rating_sec">
                    <div class="five_star_rating">
                        <div class="rating-box">
                            <div class="stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
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
                <div class="review_grid add_rating"></div>

            </div>
        </div>
    </div>

    <!-- ===============================Review sec end================================ -->


    <div class="community-story-block md:mt-20 mt-10"  style="margin-bottom: 50px;">
        <div class="container">
            <div class="heading3 text-center">Community Storiesssss</div>
            <div class="mt-3 text-center">Trust - lovely guests</div>
            <div class="list-product grid lg:grid-cols-4 md:grid-cols-3 grid-cols-2 md:gap-[30px] gap-[16px] md:mt-10 mt-6">
                <div class="product-item block h-full relative aspect-[3/4] md:rounded-2xl rounded-xl overflow-hidden cursor-pointer" data-item="53">
                    <div class="bg-img w-full h-full">
                        <iframe class="w-full h-full" src="https://www.youtube.com/embed/lnTWVAyMHg0?si=jCD4v1XxwsVwCn64&controls=0&autoplay=1&mute=1&rel=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                    <div class="product-infor flex items-center sm:gap-4 gap-2 absolute sm:left-5 left-3 sm:bottom-5 bottom-3 w-full">
                        <div class="product-img sm:w-[52px] w-10 sm:h-[52px] h-10 rounded-full overflow-hidden flex-shrink-0">
                            <img src="{{ asset('website/assets/images/product/cosmetic/1-1.png')}}" alt="8-1" class="w-full h-full object-cover" />
                        </div>
                        <div class="product-name w-full">
                            <div class="text-white capitalize">Tinted eye Balm</div>
                            <div class="flex items-center gap-2 mt-1">
                                <div class="product-price text-white">$20.00</div>
                                <div class="product-origin-price caption1 text-white">
                                    <del>$25.00</del>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-item block h-full aspect-[3/4] relative md:rounded-2xl rounded-xl overflow-hidden cursor-pointer" data-item="45">
                    <div class="bg-img h-full w-full">
                        <iframe class="w-full h-full" src="https://www.youtube.com/embed/SQKGyw0d-fU?si=TylurstsiRYdJkQ-&controls=0&autoplay=1&mute=1&rel=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                    <div class="product-infor flex items-center sm:gap-4 gap-2 absolute sm:left-5 left-3 sm:bottom-5 bottom-3 w-full">
                        <div class="product-img sm:w-[52px] w-10 sm:h-[52px] h-10 rounded-full overflow-hidden flex-shrink-0">
                            <img src="{{ asset('website/assets/images/product/1000x1000.png')}}" alt="4-1" class="w-full h-full object-cover" />
                        </div>
                        <div class="product-name w-full">
                            <div class="text-white capitalize">Tinted eye Balm</div>
                            <div class="flex items-center gap-2 mt-1">
                                <div class="product-price text-white">$20.00</div>
                                <div class="product-origin-price caption1 text-white">
                                    <del>$25.00</del>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-item block h-full aspect-[3/4] relative md:rounded-2xl rounded-xl overflow-hidden cursor-pointer" data-item="41">
                    <div class="bg-img h-full w-full">
                        <iframe class="h-full w-full" src="https://www.youtube.com/embed/XFWoLiOKBt0?si=QdURubTrYAmvDLc0&controls=0&autoplay=1&mute=1&rel=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                    <div class="product-infor flex items-center sm:gap-4 gap-2 absolute sm:left-5 left-3 sm:bottom-5 bottom-3 w-full">
                        <div class="product-img sm:w-[52px] w-10 sm:h-[52px] h-10 rounded-full overflow-hidden flex-shrink-0">
                            <img src="{{ asset('website/assets/images/product/1000x1000.png')}}" alt="3-1" class="w-full h-full object-cover" />
                        </div>
                        <div class="product-name w-full">
                            <div class="text-white capitalize">Face Tan Booster</div>
                            <div class="flex items-center gap-2 mt-1">
                                <div class="product-price text-white">$20.00</div>
                                <div class="product-origin-price caption1 text-white">
                                    <del>$25.00</del>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-item block h-full aspect-[3/4] relative md:rounded-2xl rounded-xl overflow-hidden cursor-pointer" data-item="46">
                    <div class="bg-img h-full w-full">
                        <iframe class="h-full w-full" src="https://www.youtube.com/embed/huOVTcPUc_4?si=yRH0DqbR02dAoqyW&controls=0&autoplay=1&mute=1&rel=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                    <div class="product-infor flex items-center sm:gap-4 gap-2 absolute sm:left-5 left-3 sm:bottom-5 bottom-3 w-full">
                        <div class="product-img sm:w-[52px] w-10 sm:h-[52px] h-10 rounded-full overflow-hidden flex-shrink-0">
                            <img src="{{ asset('website/assets/images/product/1000x1000.png')}}" alt="5-1" class="w-full h-full object-cover" />
                        </div>
                        <div class="product-name w-full">
                            <div class="text-white capitalize">Tinted eye Balm</div>
                            <div class="flex items-center gap-2 mt-1">
                                <div class="product-price text-white">$20.00</div>
                                <div class="product-origin-price caption1 text-white">
                                    <del>$25.00</del>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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

    <div class="lookbook-block cos1 bg-surface md:py-20 py-10 md:mt-20 mt-10 product_sec">
        <div class="container  pt-40">
            <div class="heading3 text-center">Our Best Sellers</div>
            <div class="mt-3 text-center">Trust - lovely guests</div>
        </div>
        <div class="container lg:flex items-center">


            <div class="list-product hide-product-sold  lg:pl-[15px] grid lg:grid-cols-4 grid-cols-2 sm:gap-[30px] gap-[20px]">
                <div class="product-item grid-type" data-item="41">
                    <div class="product-main cursor-pointer block">
                        <div class="product-thumb bg-white relative overflow-hidden ">
                            <div class="product-tag text-button-uppercase text-white bg-red px-3 py-0.5 inline-block rounded-full absolute top-3 left-3 z-[1]">
                                Sale</div>
                            <div class="product-img w-full h-full aspect-[3/4]">
                                <img class="w-full h-full object-cover duration-700" src="{{ asset('website/assets/images/product/cosmetic/1-1.png')}}" alt="img" />
                                <img class="w-full h-full object-cover duration-700" src="{{ asset('website/assets/images/product/cosmetic/1-2.png')}}" alt="img" />
                            </div>
                        </div>

                        <div class="product-infor mt-4 lg:mb-7">
                            <div class="product-name text-title duration-300" style="opacity: 1; visibility:visible">Raglan Sleeve T-shirt</div>
                            <div class="product-price-block flex items-center gap-2 flex-wrap mt-1 duration-300 relative z-[1]" style="    transform: none !important;">
                                <div class="product-price text-title">₹30.00</div>
                                <div class="product-origin-price caption1 text-secondary2">
                                    <del> ₹42.00</del>
                                </div>
                                <div class="product-sale caption1 font-medium bg-green px-3 py-0.5 inline-block rounded-full">
                                    -30%</div>
                            </div>
                            <p class="tax-details">MRP (incl. of all taxes)</p>
                            <div class="cart_btn_wrapper">
                                <button class="cart_btn">Add To
                                    Cart</button>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="product-item grid-type" data-item="52">
                    <div class="product-main cursor-pointer block">
                        <div class="product-thumb bg-white relative overflow-hidden ">
                            <div class="product-tag text-button-uppercase text-white bg-red px-3 py-0.5 inline-block rounded-full absolute top-3 left-3 z-[1]">
                                Sale</div>
                            <div class="product-img w-full h-full aspect-[3/4]">
                                <img class="w-full h-full object-cover duration-700" src="{{ asset('website/assets/images/product/cosmetic/1-1.png')}}" alt="img" />
                                <img class="w-full h-full object-cover duration-700" src="{{ asset('website/assets/images/product/cosmetic/1-2.png')}}" alt="img" />
                            </div>
                        </div>

                        <div class="product-infor mt-4 lg:mb-7">
                            <div class="product-name text-title duration-300" style="opacity: 1; visibility:visible">Raglan Sleeve T-shirt</div>
                            <div class="product-price-block flex items-center gap-2 flex-wrap mt-1 duration-300 relative z-[1]" style="    transform: none !important;">
                                <div class="product-price text-title">₹30.00</div>
                                <div class="product-origin-price caption1 text-secondary2">
                                    <del> ₹42.00</del>
                                </div>
                                <div class="product-sale caption1 font-medium bg-green px-3 py-0.5 inline-block rounded-full">
                                    -30%</div>
                            </div>
                            <p class="tax-details">MRP (incl. of all taxes)</p>
                            <div class="cart_btn_wrapper">
                                <button class="cart_btn">Add To
                                    Cart</button>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="product-item grid-type" data-item="49">
                    <div class="product-main cursor-pointer block">
                        <div class="product-thumb bg-white relative overflow-hidden ">
                            <div class="product-tag text-button-uppercase text-white bg-red px-3 py-0.5 inline-block rounded-full absolute top-3 left-3 z-[1]">
                                Sale</div>
                            <div class="product-img w-full h-full aspect-[3/4]">
                                <img class="w-full h-full object-cover duration-700" src="{{ asset('website/assets/images/product/cosmetic/1-1.png')}}" alt="img" />
                                <img class="w-full h-full object-cover duration-700" src="{{ asset('website/assets/images/product/cosmetic/1-2.png')}}" alt="img" />
                            </div>
                        </div>

                        <div class="product-infor mt-4 lg:mb-7">
                            <div class="product-name text-title duration-300" style="opacity: 1; visibility:visible">Raglan Sleeve T-shirt</div>
                            <div class="product-price-block flex items-center gap-2 flex-wrap mt-1 duration-300 relative z-[1]" style="    transform: none !important;">
                                <div class="product-price text-title">₹30.00</div>
                                <div class="product-origin-price caption1 text-secondary2">
                                    <del> ₹42.00</del>
                                </div>
                                <div class="product-sale caption1 font-medium bg-green px-3 py-0.5 inline-block rounded-full">
                                    -30%</div>
                            </div>
                            <p class="tax-details">MRP (incl. of all taxes)</p>
                            <div class="cart_btn_wrapper">
                                <button class="cart_btn">Add To
                                    Cart</button>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="product-item grid-type" data-item="45" style="display: block;">
                    <div class="product-main cursor-pointer block">
                        <div class="product-thumb bg-white relative overflow-hidden ">
                            <div class="product-tag text-button-uppercase text-white bg-red px-3 py-0.5 inline-block rounded-full absolute top-3 left-3 z-[1]">
                                Sale</div>
                            <div class="product-img w-full h-full aspect-[3/4]">
                                <img class="w-full h-full object-cover duration-700" src="{{ asset('website/assets/images/product/cosmetic/1-1.png')}}" alt="img" />
                                <img class="w-full h-full object-cover duration-700" src="{{ asset('website/assets/images/product/cosmetic/1-2.png')}}" alt="img" />
                            </div>
                        </div>

                        <div class="product-infor mt-4 lg:mb-7">
                            <div class="product-name text-title duration-300" style="opacity: 1; visibility:visible">Raglan Sleeve T-shirt</div>
                            <div class="product-price-block flex items-center gap-2 flex-wrap mt-1 duration-300 relative z-[1]" style="    transform: none !important;">
                                <div class="product-price text-title">₹30.00</div>
                                <div class="product-origin-price caption1 text-secondary2">
                                    <del> ₹42.00</del>
                                </div>
                                <div class="product-sale caption1 font-medium bg-green px-3 py-0.5 inline-block rounded-full">
                                    -30%</div>
                            </div>
                            <p class="tax-details">MRP (incl. of all taxes)</p>
                            <div class="cart_btn_wrapper">
                                <button class="cart_btn">Add To
                                    Cart</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="benefit-block md:py-20 py-10 grid-three-sec md:mt-20 mt-10">
        <div class="container">
            <div class="list-benefit grid items-start md:grid-cols-3 grid-cols-1 xl:gap-[160px] lg:gap-20 gap-10 gap-y-6 grid-three-sec-inner">
                <div class="benefit-item flex flex-col items-center justify-center grid-three-sec-left grid-three-sec-common">
                    <div class="grid-three-sec-block">
                        <div class="loader">
                            <span class="count counter-loaded">90</span>
                            <span class="percen">%</span>
                        </div>
                        <h3>Your Immunity</h3>
                        <p>With 70-80% of immune cells being present
                            in the gut, there is an intricate interplay
                            between the intestinal microbiota and the
                            local mucosal immune system</p>
                    </div>
                    <div class="grid-three-sec-block">
                        <div class="loader">
                            <span class="count counter-loaded">80</span>
                            <span class="percen">%</span>
                        </div>
                        <h3>Your Immunity</h3>
                        <p>With 70-80% of immune cells being present
                            in the gut, there is an intricate interplay
                            between the intestinal microbiota and the
                            local mucosal immune system</p>
                    </div>

                </div>
                <div class="benefit-item flex flex-col items-center justify-center grid-three-sec-center" data-aos="fade-up">
                    <img src="https://thegoodbug.com/cdn/shop/files/Stick_PNG.png?v=1675427933" alt="">
                </div>
                <div class="benefit-item flex flex-col items-center justify-center grid-three-sec-right grid-three-sec-common">
                    <div class="grid-three-sec-block">
                        <div class="loader">
                            <span class="count counter-loaded">70</span>
                            <span class="percen">%</span>
                        </div>
                        <h3>Your Immunity</h3>
                        <p>With 70-80% of immune cells being present
                            in the gut, there is an intricate interplay
                            between the intestinal microbiota and the
                            local mucosal immune system</p>
                    </div>
                    <div class="grid-three-sec-block">
                        <div class="loader">
                            <span class="count counter-loaded">60</span>
                            <span class="percen">%</span>
                        </div>
                        <h3>Your Immunity</h3>
                        <p>With 70-80% of immune cells being present
                            in the gut, there is an intricate interplay
                            between the intestinal microbiota and the
                            local mucosal immune system</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- New Arrivals Start-->
    <div class="lookbook-block cos1 bg-surface md:py-20 py-10 md:mt-20  product_sec">
        <div class="container  pt-40">
            <div class="heading3 text-center">New Arrivals</div>
            <div class="mt-3 text-center">Trust - lovely guests</div>
        </div>
        <div class="container lg:flex items-center">


            <div class="list-product hide-product-sold  lg:pl-[15px] grid lg:grid-cols-4 grid-cols-2 sm:gap-[30px] gap-[20px]">

                <div class="product-item grid-type" data-item="41">
                    <div class="product-main cursor-pointer block">
                        <div class="product-thumb bg-white relative overflow-hidden ">
                            <div class="product-tag text-button-uppercase text-white bg-red px-3 py-0.5 inline-block rounded-full absolute top-3 left-3 z-[1]">
                                Sale</div>
                            <div class="product-img w-full h-full aspect-[3/4]">
                                <img class="w-full h-full object-cover duration-700" src="{{ asset('website/assets/images/product/cosmetic/1-1.png')}}" alt="img" />
                                <img class="w-full h-full object-cover duration-700" src="{{ asset('website/assets/images/product/cosmetic/1-2.png')}}" alt="img" />
                            </div>
                        </div>

                        <div class="product-infor mt-4 lg:mb-7">
                            <div class="product-name text-title duration-300" style="opacity: 1; visibility:visible">Raglan Sleeve T-shirt</div>
                            <div class="product-price-block flex items-center gap-2 flex-wrap mt-1 duration-300 relative z-[1]" style="    transform: none !important;">
                                <div class="product-price text-title">₹30.00</div>
                                <div class="product-origin-price caption1 text-secondary2">
                                    <del> ₹42.00</del>
                                </div>
                                <div class="product-sale caption1 font-medium bg-green px-3 py-0.5 inline-block rounded-full">
                                    -30%</div>
                            </div>
                            <p class="tax-details">MRP (incl. of all taxes)</p>
                            <div class="cart_btn_wrapper">
                                <button class="cart_btn">Add To
                                    Cart</button>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="product-item grid-type" data-item="52">
                    <div class="product-main cursor-pointer block">
                        <div class="product-thumb bg-white relative overflow-hidden ">
                            <div class="product-tag text-button-uppercase text-white bg-red px-3 py-0.5 inline-block rounded-full absolute top-3 left-3 z-[1]">
                                Sale</div>
                            <div class="product-img w-full h-full aspect-[3/4]">
                                <img class="w-full h-full object-cover duration-700" src="{{ asset('website/assets/images/product/cosmetic/1-1.png')}}" alt="img" />
                                <img class="w-full h-full object-cover duration-700" src="{{ asset('website/assets/images/product/cosmetic/1-2.png')}}" alt="img" />
                            </div>
                        </div>

                        <div class="product-infor mt-4 lg:mb-7">
                            <div class="product-name text-title duration-300" style="opacity: 1; visibility:visible">Raglan Sleeve T-shirt</div>
                            <div class="product-price-block flex items-center gap-2 flex-wrap mt-1 duration-300 relative z-[1]" style="    transform: none !important;">
                                <div class="product-price text-title">₹30.00</div>
                                <div class="product-origin-price caption1 text-secondary2">
                                    <del> ₹42.00</del>
                                </div>
                                <div class="product-sale caption1 font-medium bg-green px-3 py-0.5 inline-block rounded-full">
                                    -30%</div>
                            </div>
                            <p class="tax-details">MRP (incl. of all taxes)</p>
                            <div class="cart_btn_wrapper">
                                <button class="cart_btn">Add To
                                    Cart</button>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="product-item grid-type" data-item="49">
                    <div class="product-main cursor-pointer block">
                        <div class="product-thumb bg-white relative overflow-hidden ">
                            <div class="product-tag text-button-uppercase text-white bg-red px-3 py-0.5 inline-block rounded-full absolute top-3 left-3 z-[1]">
                                Sale</div>
                            <div class="product-img w-full h-full aspect-[3/4]">
                                <img class="w-full h-full object-cover duration-700" src="{{ asset('website/assets/images/product/cosmetic/1-1.png')}}" alt="img" />
                                <img class="w-full h-full object-cover duration-700" src="{{ asset('website/assets/images/product/cosmetic/1-2.png')}}" alt="img" />
                            </div>
                        </div>

                        <div class="product-infor mt-4 lg:mb-7">
                            <div class="product-name text-title duration-300" style="opacity: 1; visibility:visible">Raglan Sleeve T-shirt</div>
                            <div class="product-price-block flex items-center gap-2 flex-wrap mt-1 duration-300 relative z-[1]" style="    transform: none !important;">
                                <div class="product-price text-title">₹30.00</div>
                                <div class="product-origin-price caption1 text-secondary2">
                                    <del> ₹42.00</del>
                                </div>
                                <div class="product-sale caption1 font-medium bg-green px-3 py-0.5 inline-block rounded-full">
                                    -30%</div>
                            </div>
                            <p class="tax-details">MRP (incl. of all taxes)</p>
                            <div class="cart_btn_wrapper">
                                <button class="cart_btn">Add To
                                    Cart</button>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="product-item grid-type" data-item="45" style="display: block;">
                    <div class="product-main cursor-pointer block">
                        <div class="product-thumb bg-white relative overflow-hidden ">
                            <div class="product-tag text-button-uppercase text-white bg-red px-3 py-0.5 inline-block rounded-full absolute top-3 left-3 z-[1]">
                                Sale</div>
                            <div class="product-img w-full h-full aspect-[3/4]">
                                <img class="w-full h-full object-cover duration-700" src="{{ asset('website/assets/images/product/cosmetic/1-1.png')}}" alt="img" />
                                <img class="w-full h-full object-cover duration-700" src="{{ asset('website/assets/images/product/cosmetic/1-2.png')}}" alt="img" />
                            </div>
                        </div>

                        <div class="product-infor mt-4 lg:mb-7">
                            <div class="product-name text-title duration-300" style="opacity: 1; visibility:visible">Raglan Sleeve T-shirt</div>
                            <div class="product-price-block flex items-center gap-2 flex-wrap mt-1 duration-300 relative z-[1]" style="    transform: none !important;">
                                <div class="product-price text-title">₹30.00</div>
                                <div class="product-origin-price caption1 text-secondary2">
                                    <del> ₹42.00</del>
                                </div>
                                <div class="product-sale caption1 font-medium bg-green px-3 py-0.5 inline-block rounded-full">
                                    -30%</div>
                            </div>
                            <p class="tax-details">MRP (incl. of all taxes)</p>
                            <div class="cart_btn_wrapper">
                                <button class="cart_btn">Add To
                                    Cart</button>
                            </div>

                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <!-- New Arrivals end-->

    <!-- benefits strats -->


    <!-- benefits end -->

    <div class="collection-block md:pt-20 pt-10 cos1 bg-surface pb-70 product-swiper">
        <div class="container lg:flex mt-50">
            <div class="heading lg:w-1/4 lg:pr-[15px] max-lg:pb-8">
                <!-- <div class="heading3 md:pb-5 pb-3">Everything you need to prepare the look</div> -->
                <img src="https://thegoodbug.com/cdn/shop/files/Digestive_health.jpg?v=1675428003" alt="">
                <a href="shop-breadcrumb-img.html" class="text-button pb-1 border-b-2 border-black duration-300 hover:border-green">Shop Now</a>
            </div>
            <div class="list-product hide-product-sold lg:w-3/4 lg:pl-[15px]  sm:gap-[30px] gap-[20px]">

                <div class="list-collection relative section-swiper-navigation style-outline style-center style-small-border ">
                    <div class="swiper-button-prev"></div>
                    <div class="swiper swiper-collection-eight h-full relative">
                        <div class="swiper-wrapper product_sec">
                            <div class="swiper-slide">
                                <div class="product-item grid-type" data-item="41">
                                    <div class="product-main cursor-pointer block">
                                        <div class="product-thumb bg-white relative overflow-hidden ">
                                            <div class="product-tag text-button-uppercase text-white bg-red px-3 py-0.5 inline-block rounded-full absolute top-3 left-3 z-[1]">
                                                Sale</div>
                                            <div class="product-img w-full h-full aspect-[3/4]">
                                                <img class="w-full h-full object-cover duration-700" src="{{ asset('website/assets/images/product/cosmetic/1-1.png')}}" alt="img" />
                                                <img class="w-full h-full object-cover duration-700" src="{{ asset('website/assets/images/product/cosmetic/1-2.png')}}" alt="img" />
                                            </div>
                                        </div>

                                        <div class="product-infor mt-4 lg:mb-7">
                                            <div class="product-name text-title duration-300" style="opacity: 1; visibility:visible">Raglan Sleeve T-shirt</div>
                                            <div class="product-price-block flex items-center gap-2 flex-wrap mt-1 duration-300 relative z-[1]" style="    transform: none !important;">
                                                <div class="product-price text-title">₹30.00</div>
                                                <div class="product-origin-price caption1 text-secondary2">
                                                    <del> ₹42.00</del>
                                                </div>
                                                <div class="product-sale caption1 font-medium bg-green px-3 py-0.5 inline-block rounded-full">
                                                    -30%</div>
                                            </div>
                                            <p class="tax-details">MRP (incl. of all taxes)</p>
                                            <div class="cart_btn_wrapper">
                                                <button class="cart_btn">Add To
                                                    Cart</button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="product-item grid-type" data-item="41">
                                    <div class="product-main cursor-pointer block">
                                        <div class="product-thumb bg-white relative overflow-hidden ">
                                            <div class="product-tag text-button-uppercase text-white bg-red px-3 py-0.5 inline-block rounded-full absolute top-3 left-3 z-[1]">
                                                Sale</div>
                                            <div class="product-img w-full h-full aspect-[3/4]">
                                                <img class="w-full h-full object-cover duration-700" src="{{ asset('website/assets/images/product/cosmetic/1-1.png')}}" alt="img" />
                                                <img class="w-full h-full object-cover duration-700" src="{{ asset('website/assets/images/product/cosmetic/1-2.png')}}" alt="img" />
                                            </div>
                                        </div>

                                        <div class="product-infor mt-4 lg:mb-7">
                                            <div class="product-name text-title duration-300" style="opacity: 1; visibility:visible">Raglan Sleeve T-shirt</div>
                                            <div class="product-price-block flex items-center gap-2 flex-wrap mt-1 duration-300 relative z-[1]" style="    transform: none !important;">
                                                <div class="product-price text-title">₹30.00</div>
                                                <div class="product-origin-price caption1 text-secondary2">
                                                    <del> ₹42.00</del>
                                                </div>
                                                <div class="product-sale caption1 font-medium bg-green px-3 py-0.5 inline-block rounded-full">
                                                    -30%</div>
                                            </div>
                                            <p class="tax-details">MRP (incl. of all taxes)</p>
                                            <div class="cart_btn_wrapper">
                                                <button class="cart_btn">Add To
                                                    Cart</button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="product-item grid-type" data-item="41">
                                    <div class="product-main cursor-pointer block">
                                        <div class="product-thumb bg-white relative overflow-hidden ">
                                            <div class="product-tag text-button-uppercase text-white bg-red px-3 py-0.5 inline-block rounded-full absolute top-3 left-3 z-[1]">
                                                Sale</div>
                                            <div class="product-img w-full h-full aspect-[3/4]">
                                                <img class="w-full h-full object-cover duration-700" src="{{ asset('website/assets/images/product/cosmetic/1-1.png')}}" alt="img" />
                                                <img class="w-full h-full object-cover duration-700" src="{{ asset('website/assets/images/product/cosmetic/1-2.png')}}" alt="img" />
                                            </div>
                                        </div>

                                        <div class="product-infor mt-4 lg:mb-7">
                                            <div class="product-name text-title duration-300" style="opacity: 1; visibility:visible">Raglan Sleeve T-shirt</div>
                                            <div class="product-price-block flex items-center gap-2 flex-wrap mt-1 duration-300 relative z-[1]" style="    transform: none !important;">
                                                <div class="product-price text-title">₹30.00</div>
                                                <div class="product-origin-price caption1 text-secondary2">
                                                    <del> ₹42.00</del>
                                                </div>
                                                <div class="product-sale caption1 font-medium bg-green px-3 py-0.5 inline-block rounded-full">
                                                    -30%</div>
                                            </div>
                                            <p class="tax-details">MRP (incl. of all taxes)</p>
                                            <div class="cart_btn_wrapper">
                                                <button class="cart_btn">Add To
                                                    Cart</button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="product-item grid-type" data-item="41">
                                    <div class="product-main cursor-pointer block">
                                        <div class="product-thumb bg-white relative overflow-hidden ">
                                            <div class="product-tag text-button-uppercase text-white bg-red px-3 py-0.5 inline-block rounded-full absolute top-3 left-3 z-[1]">
                                                Sale</div>
                                            <div class="product-img w-full h-full aspect-[3/4]">
                                                <img class="w-full h-full object-cover duration-700" src="{{ asset('website/assets/images/product/cosmetic/1-1.png')}}" alt="img" />
                                                <img class="w-full h-full object-cover duration-700" src="{{ asset('website/assets/images/product/cosmetic/1-2.png')}}" alt="img" />
                                            </div>
                                        </div>

                                        <div class="product-infor mt-4 lg:mb-7">
                                            <div class="product-name text-title duration-300" style="opacity: 1; visibility:visible">Raglan Sleeve T-shirt</div>
                                            <div class="product-price-block flex items-center gap-2 flex-wrap mt-1 duration-300 relative z-[1]" style="    transform: none !important;">
                                                <div class="product-price text-title">₹30.00</div>
                                                <div class="product-origin-price caption1 text-secondary2">
                                                    <del> ₹42.00</del>
                                                </div>
                                                <div class="product-sale caption1 font-medium bg-green px-3 py-0.5 inline-block rounded-full">
                                                    -30%</div>
                                            </div>
                                            <p class="tax-details">MRP (incl. of all taxes)</p>
                                            <div class="cart_btn_wrapper">
                                                <button class="cart_btn">Add To
                                                    Cart</button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="product-item grid-type" data-item="41">
                                    <div class="product-main cursor-pointer block">
                                        <div class="product-thumb bg-white relative overflow-hidden ">
                                            <div class="product-tag text-button-uppercase text-white bg-red px-3 py-0.5 inline-block rounded-full absolute top-3 left-3 z-[1]">
                                                Sale</div>
                                            <div class="product-img w-full h-full aspect-[3/4]">
                                                <img class="w-full h-full object-cover duration-700" src="{{ asset('website/assets/images/product/cosmetic/1-1.png')}}" alt="img" />
                                                <img class="w-full h-full object-cover duration-700" src="{{ asset('website/assets/images/product/cosmetic/1-2.png')}}" alt="img" />
                                            </div>
                                        </div>

                                        <div class="product-infor mt-4 lg:mb-7">
                                            <div class="product-name text-title duration-300" style="opacity: 1; visibility:visible">Raglan Sleeve T-shirt</div>
                                            <div class="product-price-block flex items-center gap-2 flex-wrap mt-1 duration-300 relative z-[1]" style="    transform: none !important;">
                                                <div class="product-price text-title">₹30.00</div>
                                                <div class="product-origin-price caption1 text-secondary2">
                                                    <del> ₹42.00</del>
                                                </div>
                                                <div class="product-sale caption1 font-medium bg-green px-3 py-0.5 inline-block rounded-full">
                                                    -30%</div>
                                            </div>
                                            <p class="tax-details">MRP (incl. of all taxes)</p>
                                            <div class="cart_btn_wrapper">
                                                <button class="cart_btn">Add To
                                                    Cart</button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="product-item grid-type" data-item="41">
                                    <div class="product-main cursor-pointer block">
                                        <div class="product-thumb bg-white relative overflow-hidden ">
                                            <div class="product-tag text-button-uppercase text-white bg-red px-3 py-0.5 inline-block rounded-full absolute top-3 left-3 z-[1]">
                                                Sale</div>
                                            <div class="product-img w-full h-full aspect-[3/4]">
                                                <img class="w-full h-full object-cover duration-700" src="{{ asset('website/assets/images/product/cosmetic/1-1.png')}}" alt="img" />
                                                <img class="w-full h-full object-cover duration-700" src="{{ asset('website/assets/images/product/cosmetic/1-2.png')}}" alt="img" />
                                            </div>
                                        </div>

                                        <div class="product-infor mt-4 lg:mb-7">
                                            <div class="product-name text-title duration-300" style="opacity: 1; visibility:visible">Raglan Sleeve T-shirt</div>
                                            <div class="product-price-block flex items-center gap-2 flex-wrap mt-1 duration-300 relative z-[1]" style="    transform: none !important;">
                                                <div class="product-price text-title">₹30.00</div>
                                                <div class="product-origin-price caption1 text-secondary2">
                                                    <del> ₹42.00</del>
                                                </div>
                                                <div class="product-sale caption1 font-medium bg-green px-3 py-0.5 inline-block rounded-full">
                                                    -30%</div>
                                            </div>
                                            <p class="tax-details">MRP (incl. of all taxes)</p>
                                            <div class="cart_btn_wrapper">
                                                <button class="cart_btn">Add To
                                                    Cart</button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
        </div>
    </div>



    <div class="testimonial-block style-four relative">
        <div class="container relative w-full h-full">
            <div class="content md:w-1/2 lg:py-[110px] py-16">
                <div class="heading4 font-normal normal-case">I absolutely love this shop! The products are high-quality
                    and the customer service is excellent. I always leave with exactly what I need and a smile on my
                    face.</div>
                <div class="flex items-center gap-5 mt-8">
                    <div class="avatar">
                        <img src="{{ asset('website/assets/images/avatar/1.png')}}" alt="avatar" class="sm:w-20 w-14 sm:h-20 h-14 rounded-full" />
                    </div>
                    <div class="infor">
                        <div class="body1 font-semibold uppercase pb-1">Emma cardi</div>
                        <div class="rate flex items-center gap-0.5">
                            <i class="ph-fill ph-star text-[#ECB018]"></i>
                            <i class="ph-fill ph-star text-[#ECB018]"></i>
                            <i class="ph-fill ph-star text-[#ECB018]"></i>
                            <i class="ph-fill ph-star text-[#ECB018]"></i>
                            <i class="ph-fill ph-star text-[#ECB018]"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-img absolute top-0 left-0 w-full h-full z-[-1]">
            <img src="{{ asset('website/assets/images/banner/bg-testi-cos.png')}}" alt="bg-img" class="w-full h-full object-cover" />
        </div>
    </div>

    <div class="news-block md:pt-16 pt-10 pb-70">
        <div class="container">
            <div class="heading3 text-center">News insight</div>
            <div class="list-blog grid lg:grid-cols-3 sm:grid-cols-2 md:gap-[30px] gap-4 md:mt-10 mt-6">
                <a href="blog-detail1.html" class="blog-item style-one h-full cursor-pointer">
                    <div class="blog-main h-full block">
                        <div class="blog-thumb rounded-[20px] overflow-hidden">
                            <img src="https://anvogue-html.vercel.app/assets/images/blog/1.png" alt="blog-img" class="w-full duration-500" />
                        </div>
                        <div class="blog-infor mt-7">
                            <div class="blog-tag bg-green py-1 px-2.5 rounded-full text-button-uppercase inline-block">Jean, glasses</div>
                            <div class="heading6 blog-title mt-3 duration-300">Fashion Trends to Watch Out for in Summer 2024</div>
                            <div class="flex items-center gap-2 mt-2">
                                <div class="blog-author caption1 text-secondary">by Chris Evans</div>
                                <span class="w-[20px] h-[1px] bg-black"></span>
                                <div class="blog-date caption1 text-secondary">Dec 20, 2024</div>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="blog-detail1.html" class="blog-item style-one h-full cursor-pointer">
                    <div class="blog-main h-full block">
                        <div class="blog-thumb rounded-[20px] overflow-hidden">
                            <img src="https://anvogue-html.vercel.app/assets/images/blog/2.png" alt="blog-img" class="w-full duration-500" />
                        </div>
                        <div class="blog-infor mt-7">
                            <div class="blog-tag bg-green py-1 px-2.5 rounded-full text-button-uppercase inline-block">Jean, shoes</div>
                            <div class="heading6 blog-title mt-3 duration-300">How to Build a Sustainable and Stylish Wardrobe 2024</div>
                            <div class="flex items-center gap-2 mt-2">
                                <div class="blog-author caption1 text-secondary">by Alex Balde</div>
                                <span class="w-[20px] h-[1px] bg-black"></span>
                                <div class="blog-date caption1 text-secondary">Dec 12, 2024</div>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="blog-detail1.html" class="blog-item style-one h-full cursor-pointer max-lg:hidden max-sm:block">
                    <div class="blog-main h-full block">
                        <div class="blog-thumb rounded-[20px] overflow-hidden">
                            <img src="https://anvogue-html.vercel.app/assets/images/blog/3.png" alt="blog-img" class="w-full duration-500" />
                        </div>
                        <div class="blog-infor mt-7">
                            <div class="blog-tag bg-green py-1 px-2.5 rounded-full text-button-uppercase inline-block">Jean, skirt</div>
                            <div class="heading6 blog-title mt-3 duration-300">Fashion and Beauty Tips for Busy Professionals 2024</div>
                            <div class="flex items-center gap-2 mt-2">
                                <div class="blog-author caption1 text-secondary">by Leona Pablo</div>
                                <span class="w-[20px] h-[1px] bg-black"></span>
                                <div class="blog-date caption1 text-secondary">Dec 10, 2024</div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

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


@endsection