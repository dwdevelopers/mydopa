<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <title>@yield('title', 'Mydopa | Herbal health supplement for Parkinson’s disease')</title>
    <meta name="description" content="MYDOPA is not just a product—it is a promise born from tradition, research, and a deep-rooted commitment to transforming the lives of people living with Parkinson’s disease.">

    <meta name="keywords" content="MYDOPA, Parkinson’s disease support, Parkinson’s assistive product, product for Parkinson’s patients, traditional Parkinson’s remedy, MYDOPA device, transforming lives with Parkinson’s, assistive technology, Parkinson’s mobility aid">
    <meta name="author" content="Mydopa Team">

    <!-- Open Graph for better social sharing -->
    <meta property="og:title" content="Mydopa | Herbal health supplement for parkinson’s disease">
    <meta property="og:description" content="MYDOPA is not just a product—it is a promise born from tradition, research, and a deep-rooted commitment to transforming the lives of people living with Parkinson’s disease.">
    <meta property="og:image" content="{{ asset('website/assets/images/fav.png')}}"> 
    <meta property="og:url" content="https://mydopa.com/">
    <meta property="og:type" content="website">
    <link rel="canonical" href="https://mydopa.com/" />


    <link rel="shortcut icon" href="{{ asset('website/assets/images/fav.png')}}" type="image/x-icon" />
    <link rel="stylesheet" href="{{ asset('website/assets/css/swiper-bundle.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('website/assets/css/style.css')}}" />
    <link rel="stylesheet" href="{{ asset('website/dist/output-scss.css')}}" />
    <link rel="stylesheet" href="{{ asset('website/dist/output-tailwind.css')}}" />
    <link rel="stylesheet" href="{{ asset('website/assets/css/custom.css')}}?v={{ time() }}" />
    <link rel="stylesheet" href="{{ asset('website/assets/css/bootstrap.min.css')}}" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="{{ asset('website/assets/css/themify-icons.css')}}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@1.2.0/dist/css/splide.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />

    <link rel="stylesheet" href="{{ asset('website/assets/css/custom-product.css')}}?v={{ time() }}" />
    <link rel="stylesheet" href="{{ asset('website/assets/css/custom-content.css')}}?v={{ time() }}" />
    <!-- boxicons-icons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <script src="{{ asset('website/assets/js/jquery.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.7/dist/gsap.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.7/dist/ScrollTrigger.min.js"></script>
    <style>
        .card-bg {
            background-image: url('{{ asset(' website/assets/images/product-shop/feature.jpg') }}');
            background-size: cover;
            background-position: center;
            height: 400px;
            /* or whatever height you need */
        }

        @media (max-width: 768px) {
            .card-bg {
                background-image: url('{{ asset(' website/assets/images/product-shop/feature-mob.jpg') }}');
            }
        }
    </style>

</head>

<body>
    <div id="header" class="relative w-full">

        @include('website.layouts.header')
    </div>
    @yield('content')

    {{-- Footer --}}
    @include('website.layouts.footer')

    <a class="to-top"><i class="ph-bold ph-caret-up"></i></a>

    <script>
        $(document).ready(function() {
            var toTop = $('.to-top');

            $(window).on('scroll', function() {
                if ($(window).scrollTop() > 600) {
                    toTop.addClass('active');
                } else {
                    toTop.removeClass('active');
                }
            });

            toTop.on('click', function() {
                $('html, body').animate({
                    scrollTop: 0
                }, 600);
            });
        });
    </script>

    <!-- Modal -->




    {{-- <div class="modal fade modal_review" id="reviewModal" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Write a Review</h4>
                </div>
                <div class="modal-body">
                    <div class="rating-box">
                        <p><b> would you rate us?</b></p>
                        <div class="stars">
                            <i class='bx bx-star star'></i>
                            <i class='bx bx-star star'></i>
                            <i class='bx bx-star star'></i>
                            <i class='bx bx-star star'></i>
                            <i class='bx bx-star star'></i>
                        </div>
                    </div>

                    <form action="">
                        <div class="row">
                            <div class="col-lg-6">
                                <label for="Name">Name*
                                    <input type="text" class="form-control">
                                </label>
                            </div>
                            <div class="col-lg-6">
                                <label for="email">Email*
                                    <input type="email" placeholder="" class="form-control">
                                </label>
                            </div>
                            <div class="col-lg-12">
                                <label for="Phone">Phone*
                                    <input type="text" placeholder="" class="form-control">
                                </label>
                            </div>
                            <div class="col-lg-12">

                                <label for="review" class="pt-5">Write a Review*...
                                    <textarea name="opinion" cols="30" rows="5" placeholder="" class="form-control"></textarea>
                                </label>
                            </div>

                        </div>
                        <div class="btn-wrapper">
                            <button type="button" class="btn btn-primary btn-submit">Submit</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div> --}}
    {{-- <div class="modal fade modal_review" id="questionModal" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Ask a Question</h4>
                </div>
                <div class="modal-body">

                    <form action="">
                        <div class="row">
                            <div class="col-lg-6">
                                <label for="Name">Name*
                                    <input type="text" class="form-control">
                                </label>
                            </div>
                            <div class="col-lg-6">
                                <label for="email">Email*
                                    <input type="email" placeholder="" class="form-control">
                                </label>
                            </div>
                            <div class="col-lg-12">
                                <label for="Phone">Phone*
                                    <input type="text" placeholder="" class="form-control">
                                </label>
                            </div>
                            <div class="col-lg-12">

                                <label for="review" class="pt-5">Write a Question*...
                                    <textarea name="opinion" cols="30" rows="5" placeholder="" class="form-control"></textarea>
                                </label>
                            </div>

                        </div>
                        <div class="btn-wrapper">
                            <button type="button" class="btn btn-primary btn-submit">Submit</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div> --}}


    <div class="modal-wishlist-block">
        <div class="modal-wishlist-main py-6">
            <div class="heading px-6 pb-3 flex items-center justify-between relative">
                <div class="heading5">Wishlist</div>
                <div class="close-btn absolute right-6 top-0 w-6 h-6 rounded-full bg-surface flex items-center justify-center duration-300 cursor-pointer hover:bg-black hover:text-white">
                    <i class="ph ph-x text-sm"></i>
                </div>
            </div>
            <div class="list-product px-6"></div>
            <div class="footer-modal p-6 border-t bg-white border-line absolute bottom-0 left-0 w-full text-center">
                <a href="wishlist.html" class="button-main w-full text-center uppercase"> View All Wish List</a>
                <div class="text-button-uppercase continue mt-4 text-center has-line-before cursor-pointer inline-block">
                    Or continue shopping</div>
            </div>
        </div>
    </div>

    <div class="modal-cart-block">
        <div class="modal-cart-main flex">
            <div class="left w-1/2 border-r border-line py-6 max-md:hidden">
                <div class="heading5 px-6 pb-3">You May Also Like</div>
                <div class="list px-6">
                    <div class="product-item item py-5 flex items-center justify-between gap-3 border-b border-line" data-item="1">
                        <div class="infor flex items-center gap-5">
                            <div class="bg-img">
                                <img src="./assets/images/product/1000x1000.png" alt="img" class="w-[100px] aspect-square flex-shrink-0 rounded-lg" />
                            </div>
                            <div class="">
                                <div class="name text-button">Faux-leather trousers</div>
                                <div class="flex items-center gap-2 mt-2">
                                    <div class="product-price text-title">$15.00</div>
                                    <div class="product-origin-price text-title text-secondary2">
                                        <del>$25.00</del>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="quick-view-btn button-main py-3 px-5 bg-black hover:bg-green text-white rounded-full whitespace-nowrap">
                            QUICK VIEW</div>
                    </div>
                    <div class="product-item item py-5 flex items-center justify-between gap-3 border-b border-line" data-item="2">
                        <div class="infor flex items-center gap-5">
                            <div class="bg-img">
                                <img src="./assets/images/product/1000x1000.png" alt="img" class="w-[100px] aspect-square flex-shrink-0 rounded-lg" />
                            </div>
                            <div class="">
                                <div class="name text-button">Faux-leather trousers</div>
                                <div class="flex items-center gap-2 mt-2">
                                    <div class="product-price text-title">$15.00</div>
                                    <div class="product-origin-price text-title text-secondary2">
                                        <del>$25.00</del>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="quick-view-btn button-main py-3 px-5 bg-black hover:bg-green text-white rounded-full whitespace-nowrap">
                            QUICK VIEW</div>
                    </div>
                    <div class="product-item item py-5 flex items-center justify-between gap-3 border-b border-line" data-item="3">
                        <div class="infor flex items-center gap-5">
                            <div class="bg-img">
                                <img src="./assets/images/product/1000x1000.png" alt="img" class="w-[100px] aspect-square flex-shrink-0 rounded-lg" />
                            </div>
                            <div class="">
                                <div class="name text-button">Faux-leather trousers</div>
                                <div class="flex items-center gap-2 mt-2">
                                    <div class="product-price text-title">$15.00</div>
                                    <div class="product-origin-price text-title text-secondary2">
                                        <del>$25.00</del>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="quick-view-btn button-main py-3 px-5 bg-black hover:bg-green text-white rounded-full whitespace-nowrap">
                            QUICK VIEW</div>
                    </div>
                    <div class="product-item item py-5 flex items-center justify-between gap-3" data-item="4">
                        <div class="infor flex items-center gap-5">
                            <div class="bg-img">
                                <img src="./assets/images/product/1000x1000.png" alt="img" class="w-[100px] aspect-square flex-shrink-0 rounded-lg" />
                            </div>
                            <div class="">
                                <div class="name text-button">Faux-leather trousers</div>
                                <div class="flex items-center gap-2 mt-2">
                                    <div class="product-price text-title">$15.00</div>
                                    <div class="product-origin-price text-title text-secondary2">
                                        <del>$25.00</del>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="quick-view-btn button-main py-3 px-5 bg-black hover:bg-green text-white rounded-full whitespace-nowrap">
                            QUICK VIEW</div>
                    </div>
                </div>
            </div>
            <div class="right cart-block md:w-1/2 w-full py-6 relative overflow-hidden">
                <div class="heading px-6 pb-3 flex items-center justify-between relative">
                    <div class="heading5">Shopping Cart</div>
                    <div class="close-btn absolute right-6 top-0 w-6 h-6 rounded-full bg-surface flex items-center justify-center duration-300 cursor-pointer hover:bg-black hover:text-white">
                        <i class="ph ph-x text-sm"></i>
                    </div>
                </div>
                <div class="time countdown-cart px-6">
                    <div class="flex items-center gap-3 px-5 py-3 bg-green rounded-lg">
                        <p class="text-3xl">🔥</p>
                        <div class="caption1">
                            Your cart will expire in <span class="text-red caption1 font-semibold"><span class="minute">04</span>:<span class="second">59</span></span> minutes!<br />
                            Please checkout now before your items sell out!
                        </div>
                    </div>
                </div>
                <div class="heading banner mt-3 px-6">
                    <div class="text">
                        Buy <span class="text-button"> $<span class="more-price">150</span>.00 </span>
                        <span>more to get </span>
                        <span class="text-button">freeship</span>
                    </div>
                    <div class="tow-bar-block mt-3">
                        <div class="progress-line"></div>
                    </div>
                </div>
                <div class="list-product px-6"></div>
                <div class="footer-modal bg-white absolute bottom-0 left-0 w-full">
                    <div class="flex items-center justify-center lg:gap-14 gap-8 px-6 py-4 border-b border-line">
                        <div class="note-btn item flex items-center gap-3 cursor-pointer">
                            <i class="ph ph-note-pencil text-xl"></i>
                            <div class="caption1">Note</div>
                        </div>
                        <div class="shipping-btn item flex items-center gap-3 cursor-pointer">
                            <i class="ph ph-truck text-xl"></i>
                            <div class="caption1">Shipping</div>
                        </div>
                        <div class="coupon-btn item flex items-center gap-3 cursor-pointer">
                            <i class="ph ph-tag text-xl"></i>
                            <div class="caption1">Coupon</div>
                        </div>
                    </div>
                    <div class="flex items-center justify-between pt-6 px-6">
                        <div class="heading5">Subtotal</div>
                        <div class="heading5 total-cart">$0.00</div>
                    </div>
                    <div class="block-button text-center p-6">
                        <div class="flex items-center gap-4">
                            <a href="cart.html" class="button-main basis-1/2 bg-white border border-black text-black text-center uppercase">
                                View cart </a>
                            <a href="checkout.html" class="button-main basis-1/2 text-center uppercase"> Check Out </a>
                        </div>
                        <div class="text-button-uppercase continue mt-4 text-center has-line-before cursor-pointer inline-block">
                            Or continue shopping</div>
                    </div>
                    <div class="tab-item note-block">
                        <div class="px-6 py-4 border-b border-line">
                            <div class="item flex items-center gap-3 cursor-pointer">
                                <i class="ph ph-note-pencil text-xl"></i>
                                <div class="caption1">Note</div>
                            </div>
                        </div>
                        <div class="form pt-4 px-6">
                            <textarea name="form-note" id="form-note" rows="4" placeholder="Add special instructions for your order..." class="caption1 py-3 px-4 bg-surface border-line rounded-md w-full"></textarea>
                        </div>
                        <div class="block-button text-center pt-4 px-6 pb-6">
                            <div class="button-main w-full text-center">Save</div>
                            <div class="cancel-btn text-button-uppercase mt-4 text-center has-line-before cursor-pointer inline-block">
                                Cancel</div>
                        </div>
                    </div>
                    <div class="tab-item shipping-block">
                        <div class="px-6 py-4 border-b border-line">
                            <div class="item flex items-center gap-3 cursor-pointer">
                                <i class="ph ph-truck text-xl"></i>
                                <div class="caption1">Estimate shipping rates</div>
                            </div>
                        </div>
                        <div class="form pt-4 px-6">
                            <div class="">
                                <label for="select-country" class="caption1 text-secondary">Country/region</label>
                                <div class="select-block relative mt-2">
                                    <select id="select-country" name="select-country" class="w-full py-3 pl-5 rounded-xl bg-white border border-line">
                                        <option value="Country/region">Country/region</option>
                                        <option value="France">France</option>
                                        <option value="Spain">Spain</option>
                                        <option value="UK">UK</option>
                                        <option value="USA">USA</option>
                                    </select>
                                    <i class="ph ph-caret-down text-xs absolute top-1/2 -translate-y-1/2 md:right-5 right-2"></i>
                                </div>
                            </div>
                            <div class="mt-3">
                                <label for="select-state" class="caption1 text-secondary">State</label>
                                <div class="select-block relative mt-2">
                                    <select id="select-state" name="select-state" class="w-full py-3 pl-5 rounded-xl bg-white border border-line">
                                        <option value="State">State</option>
                                        <option value="Paris">Paris</option>
                                        <option value="Madrid">Madrid</option>
                                        <option value="London">London</option>
                                        <option value="New York">New York</option>
                                    </select>
                                    <i class="ph ph-caret-down text-xs absolute top-1/2 -translate-y-1/2 md:right-5 right-2"></i>
                                </div>
                            </div>
                            <div class="mt-3">
                                <label for="select-code" class="caption1 text-secondary">Postal/Zip Code</label>
                                <input class="border-line px-5 py-3 w-full rounded-xl mt-3" id="select-code" type="text" placeholder="Postal/Zip Code" />
                            </div>
                        </div>
                        <div class="block-button text-center pt-4 px-6 pb-6">
                            <div class="button-main w-full text-center">Calculator</div>
                            <div class="cancel-btn text-button-uppercase mt-4 text-center has-line-before cursor-pointer inline-block">
                                Cancel</div>
                        </div>
                    </div>
                    <div class="tab-item coupon-block">
                        <div class="px-6 py-4 border-b border-line">
                            <div class="item flex items-center gap-3 cursor-pointer">
                                <i class="ph ph-tag text-xl"></i>
                                <div class="caption1">Add A Coupon Code</div>
                            </div>
                        </div>
                        <div class="form pt-4 px-6">
                            <div class="">
                                <label for="select-discount" class="caption1 text-secondary">Enter Code</label>
                                <input class="border-line px-5 py-3 w-full rounded-xl mt-3" id="select-discount" type="text" placeholder="Discount code" />
                            </div>
                        </div>
                        <div class="block-button text-center pt-4 px-6 pb-6">
                            <div class="button-main w-full text-center">Apply</div>
                            <div class="cancel-btn text-button-uppercase mt-4 text-center has-line-before cursor-pointer inline-block">
                                Cancel</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal-sizeguide-block">
        <div class="modal-sizeguide-main md:p-10 p-6 rounded-[32px]">
            <div class="close-btn absolute right-5 top-5 w-6 h-6 rounded-full bg-surface flex items-center justify-center duration-300 cursor-pointer hover:bg-black hover:text-white">
                <i class="ph ph-x text-sm"></i>
            </div>
            <div class="heading3">Size guide</div>
            <div class="md:mt-8 mt-6 progress">
                <div class="flex md:items-center gap-10 justify-between max-md:flex-col gap-y-5 max-md:pr-3">
                    <div class="flex items-center flex-shrink-0 gap-8">
                        <span class="flex-shrink-0 md:w-14">Height</span>
                        <div class="flex items-center justify-center w-20 gap-1 py-2 border border-line rounded-lg flex-shrink-0">
                            <span class="height">200</span>
                            <span class="caption1 text-secondary">Cm</span>
                        </div>
                    </div>
                    <div class="filter-price filter-height w-full">
                        <div class="tow-bar-block">
                            <div class="progress"></div>
                        </div>
                        <div class="range-input">
                            <input class="range-max" type="range" min="0" max="200" value="200" />
                        </div>
                    </div>
                </div>
                <div class="flex md:items-center gap-10 justify-between max-md:flex-col gap-y-5 max-md:pr-3 mt-5">
                    <div class="flex items-center gap-8 flex-shrink-0">
                        <span class="flex-shrink-0 md:w-14">Weight</span>
                        <div class="flex items-center justify-center w-20 gap-1 py-2 border border-line rounded-lg flex-shrink-0">
                            <span class="weight">90</span>
                            <span class="caption1 text-secondary">Kg</span>
                        </div>
                    </div>
                    <div class="filter-price filter-weight w-full">
                        <div class="tow-bar-block">
                            <div class="progress"></div>
                        </div>
                        <div class="range-input">
                            <input class="range-max" type="range" min="0" max="90" value="90" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="heading6 mt-8">suggests for you:</div>
            <div class="list-size-block flex items-center gap-2 flex-wrap mt-3">
                <div class="size-item w-12 h-12 flex items-center justify-center text-button rounded-full bg-white border border-line">
                    XS</div>
                <div class="size-item w-12 h-12 flex items-center justify-center text-button rounded-full bg-white border border-line">
                    S</div>
                <div class="size-item w-12 h-12 flex items-center justify-center text-button rounded-full bg-white border border-line">
                    M</div>
                <div class="size-item w-12 h-12 flex items-center justify-center text-button rounded-full bg-white border border-line">
                    L</div>
                <div class="size-item w-12 h-12 flex items-center justify-center text-button rounded-full bg-white border border-line">
                    XL</div>
                <div class="size-item w-12 h-12 flex items-center justify-center text-button rounded-full bg-white border border-line">
                    2XL</div>
            </div>
        </div>
    </div>

    <div class="modal-compare-block">
        <div class="modal-compare-main py-6">
            <div class="close-btn absolute 2xl:right-6 right-4 2xl:top-6 md:-top-4 top-3 lg:w-10 w-6 lg:h-10 h-6 rounded-full bg-surface flex items-center justify-center duration-300 cursor-pointer hover:bg-black hover:text-white">
                <i class="ph ph-x body1"></i>
            </div>
            <div class="container h-full flex items-center w-full">
                <div class="content-main flex items-center justify-between xl:gap-10 gap-6 w-full max-md:flex-wrap">
                    <div class="heading5 flex-shrink-0 max-md:w-full">Compare <br class="max-md:hidden" />Products</div>
                    <div class="list-product flex items-center w-full gap-4"></div>
                    <div class="block-button flex flex-col gap-4 flex-shrink-0">
                        <a href="compare.html" class="button-main whitespace-nowrap"> Compare Products</a>
                        <div class="button-main clear whitespace-nowrap border border-black bg-white text-black">Clear
                            All Products</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal-quickview-block">
        <div class="modal-quickview-main py-6">
            <div class="flex h-full max-md:flex-col-reverse gap-y-6">
                <div class="left lg:w-[388px] md:w-[300px] flex-shrink-0 px-6">
                    <div class="list-img max-md:flex items-center gap-4">
                        <div class="bg-img w-full aspect-[3/4] max-md:w-[150px] max-md:flex-shrink-0 rounded-[20px] overflow-hidden md:mt-6">
                            <img src="./assets/images/product/1000x1000.png" alt="item" class="w-full h-full object-cover" />
                        </div>
                        <div class="bg-img w-full aspect-[3/4] max-md:w-[150px] max-md:flex-shrink-0 rounded-[20px] overflow-hidden md:mt-6">
                            <img src="./assets/images/product/1000x1000.png" alt="item" class="w-full h-full object-cover" />
                        </div>
                        <div class="bg-img w-full aspect-[3/4] max-md:w-[150px] max-md:flex-shrink-0 rounded-[20px] overflow-hidden md:mt-6">
                            <img src="./assets/images/product/1000x1000.png" alt="item" class="w-full h-full object-cover" />
                        </div>
                        <div class="bg-img w-full aspect-[3/4] max-md:w-[150px] max-md:flex-shrink-0 rounded-[20px] overflow-hidden md:mt-6">
                            <img src="./assets/images/product/1000x1000.png" alt="item" class="w-full h-full object-cover" />
                        </div>
                    </div>
                </div>
                <div class="right w-full px-6">
                    <div class="heading pb-6 flex items-center justify-between relative">
                        <div class="heading5">Quick View</div>
                        <div class="close-btn absolute right-0 top-0 w-6 h-6 rounded-full bg-surface flex items-center justify-center duration-300 cursor-pointer hover:bg-black hover:text-white">
                            <i class="ph ph-x text-sm"></i>
                        </div>
                    </div>
                    <div class="product-infor">
                        <div class="flex justify-between">
                            <div>
                                <div class="category caption2 text-secondary font-semibold uppercase">fashion</div>
                                <div class="name heading4 mt-1">Off-the-Shoulder Blouse</div>
                            </div>
                            <div class="add-wishlist-btn w-10 h-10 flex items-center justify-center border border-line cursor-pointer rounded-lg duration-300 hover:bg-black hover:text-white">
                                <i class="ph ph-heart text-xl"></i>
                            </div>
                        </div>
                        <div class="flex items-center gap-1 mt-3">
                            <div class="rate flex">
                                <i class="ph-fill ph-star text-sm text-yellow"></i>
                                <i class="ph-fill ph-star text-sm text-yellow"></i>
                                <i class="ph-fill ph-star text-sm text-yellow"></i>
                                <i class="ph-fill ph-star text-sm text-yellow"></i><i class="ph-fill ph-star text-sm text-yellow"></i>
                            </div>
                            <span class="caption1 text-secondary">(1.234 reviews)</span>
                        </div>
                        <div class="flex items-center gap-1 gap-y-3 flex-wrap mt-3">
                            <div class="text-xs font-semibold bg-black text-white uppercase py-1 px-3 rounded-full">best
                                seller</div>
                            <div class="flex items-center gap-1">
                                <i class="ph-fill ph-lightning text-red text-xl"></i>
                                <div class="caption1 text-secondary">Selling fast! 22 people have this in their carts.
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center gap-3 flex-wrap mt-5 pb-6 border-b border-line">
                            <div class="product-price heading5">$20.00</div>
                            <div class="w-px h-4 bg-line"></div>
                            <div class="product-origin-price font-normal text-secondary2">
                                <del>$32.00</del>
                            </div>
                            <div class="product-sale caption2 font-semibold bg-green px-3 py-0.5 inline-block rounded-full">
                                -19%</div>
                            <div class="desc text-secondary mt-3">Keep your clothes organized, yet elegant with storage
                                cabinets by Onita Patio Furniture. Traditionally designed, they are perfect to be used
                                in the any place where you need to store.</div>
                        </div>
                        <div class="list-action mt-6">
                            <div class="choose-color">
                                <div class="text-title">Colors: <span class="text-title color"></span></div>
                                <div class="list-color flex items-center gap-2 flex-wrap mt-3">
                                    <div class="color-item w-12 h-12 rounded-xl duration-300 relative active">
                                        <img src="./assets/images/product/color/48x48.png" alt="color" class="rounded-xl" />
                                        <div class="tag-action bg-black text-white caption2 capitalize px-1.5 py-0.5 rounded-sm">
                                            blue</div>
                                    </div>
                                    <div class="color-item w-12 h-12 rounded-xl duration-300 relative">
                                        <img src="./assets/images/product/color/48x48.png" alt="color" class="rounded-xl" />
                                        <div class="tag-action bg-black text-white caption2 capitalize px-1.5 py-0.5 rounded-sm">
                                            red</div>
                                    </div>
                                    <div class="color-item w-12 h-12 rounded-xl duration-300 relative">
                                        <img src="./assets/images/product/color/48x48.png" alt="color" class="rounded-xl" />
                                        <div class="tag-action bg-black text-white caption2 capitalize px-1.5 py-0.5 rounded-sm">
                                            black</div>
                                    </div>
                                </div>
                            </div>
                            <div class="choose-size mt-5">
                                <div class="heading flex items-center justify-between">
                                    <div class="text-title">Size: <span class="text-title size"></span></div>
                                    <div class="caption1 size-guide text-red underline">Size Guide</div>
                                </div>
                                <div class="list-size flex items-center gap-2 flex-wrap mt-3">
                                    <div class="size-item w-12 h-12 flex items-center justify-center text-button rounded-full bg-white border border-line">
                                        S</div>
                                    <div class="size-item w-12 h-12 flex items-center justify-center text-button rounded-full bg-white border border-line active">
                                        M</div>
                                    <div class="size-item w-12 h-12 flex items-center justify-center text-button rounded-full bg-white border border-line">
                                        L</div>
                                    <div class="size-item w-12 h-12 flex items-center justify-center text-button rounded-full bg-white border border-line">
                                        XL</div>
                                </div>
                            </div>
                            <div class="text-title mt-5">Quantity:</div>
                            <div class="choose-quantity flex items-center flex-wrap lg:justify-between gap-5 mt-3">
                                <div class="quantity-block md:p-3 max-md:py-1.5 max-md:px-3 flex items-center justify-between rounded-lg border border-line sm:w-[180px] w-[120px] flex-shrink-0">
                                    <i class="ph-bold ph-minus cursor-pointer body1"></i>
                                    <div class="quantity body1 font-semibold">1</div>
                                    <i class="ph-bold ph-plus cursor-pointer body1"></i>
                                </div>
                                <div class="add-cart-btn button-main w-full text-center bg-white text-black border border-black">
                                    Add To Cart</div>
                            </div>
                            <div class="button-block mt-5">
                                <a href="checkout.html" class="button-main w-full text-center">Buy It Now</a>
                            </div>
                        </div>
                        <div class="flex items-center flex-wrap lg:gap-20 gap-8 gap-y-4 mt-5">
                            <div class="compare flex items-center gap-3 cursor-pointer">
                                <div class="compare-btn md:w-12 md:h-12 w-10 h-10 flex items-center justify-center border border-line cursor-pointer rounded-xl duration-300 hover:bg-black hover:text-white">
                                    <i class="ph-fill ph-arrows-counter-clockwise cursor-pointer heading6"></i>
                                </div>
                                <span>Compare</span>
                            </div>
                            <div class="share flex items-center gap-3 cursor-pointer">
                                <div class="share-btn md:w-12 md:h-12 w-10 h-10 flex items-center justify-center border border-line cursor-pointer rounded-xl duration-300 hover:bg-black hover:text-white">
                                    <i class="ph-fill ph-share-network cursor-pointer heading6"></i>
                                </div>
                                <span>Share Products</span>
                            </div>
                        </div>
                        <div class="more-infor mt-6">
                            <div class="flex items-center gap-4 flex-wrap">
                                <div class="flex items-center gap-1">
                                    <i class="ph ph-arrow-clockwise cursor-pointer body1"></i>
                                    <div class="text-title">Delivery & Return</div>
                                </div>
                                <div class="flex items-center gap-1">
                                    <i class="ph ph-question cursor-pointer body1"></i>
                                    <div class="text-title">Ask A Question</div>
                                </div>
                            </div>
                            <div class="flex items-center flex-wrap gap-1 mt-3">
                                <i class="ph ph-timer cursor-pointer body1"></i>
                                <span class="text-title">Estimated Delivery:</span>
                                <span class="text-secondary">14 January - 18 January</span>
                            </div>
                            <div class="flex items-center flex-wrap gap-1 mt-3">
                                <i class="ph ph-eye cursor-pointer body1"></i>
                                <span class="text-title">38</span>
                                <span class="text-secondary">people viewing this product right now!</span>
                            </div>
                            <div class="flex items-center gap-1 mt-3">
                                <div class="text-title">SKU:</div>
                                <div class="text-secondary">53453412</div>
                            </div>
                            <div class="flex items-center gap-1 mt-3">
                                <div class="text-title">Categories:</div>
                                <div class="list-category text-secondary">fashion, women</div>
                            </div>
                            <div class="flex items-center gap-1 mt-3">
                                <div class="text-title">Tag:</div>
                                <div class="list-tag text-secondary">dress</div>
                            </div>
                        </div>
                        <div class="list-payment mt-7">
                            <div class="main-content lg:pt-8 pt-6 lg:pb-6 pb-4 sm:px-4 px-3 border border-line rounded-xl relative max-md:w-2/3 max-sm:w-full">
                                <div class="heading6 px-5 bg-white absolute -top-[14px] left-1/2 -translate-x-1/2 whitespace-nowrap">
                                    Guranteed safe checkout</div>
                                <div class="list grid grid-cols-6">
                                    <div class="item flex items-center justify-center lg:px-3 px-1">
                                        <img src="./assets/images/payment/Frame-0.png" alt="payment" class="w-full" />
                                    </div>
                                    <div class="item flex items-center justify-center lg:px-3 px-1">
                                        <img src="./assets/images/payment/Frame-1.png" alt="payment" class="w-full" />
                                    </div>
                                    <div class="item flex items-center justify-center lg:px-3 px-1">
                                        <img src="./assets/images/payment/Frame-2.png" alt="payment" class="w-full" />
                                    </div>
                                    <div class="item flex items-center justify-center lg:px-3 px-1">
                                        <img src="./assets/images/payment/Frame-3.png" alt="payment" class="w-full" />
                                    </div>
                                    <div class="item flex items-center justify-center lg:px-3 px-1">
                                        <img src="./assets/images/payment/Frame-4.png" alt="payment" class="w-full" />
                                    </div>
                                    <div class="item flex items-center justify-center lg:px-3 px-1">
                                        <img src="./assets/images/payment/Frame-5.png" alt="payment" class="w-full" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <!-- =================== model for videos starts================= -->

    <div class="modal fade modalVideo" id="video1Modal" tabindex="-1" role="dialog" aria-labelledby="video1Label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">

                <div class="modal-body p-0">
                    <button type="button" class="close ms-auto me-2 mt-2" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <video id="video1" width="100%" controls>
                        <source src="{{ asset('website/assets/images/videos/video1.mp4') }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>

            </div>
        </div>
    </div>
    <div class="modal fade modalVideo" id="video2Modal" tabindex="-1" role="dialog" aria-labelledby="video1Label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">

                <div class="modal-body p-0">
                    <button type="button" class="close ms-auto me-2 mt-2" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <video id="video1" width="100%" controls>
                        <source src="{{ asset('website/assets/images/videos/video2.mp4') }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>

            </div>
        </div>
    </div>
    <div class="modal fade modalVideo" id="video3Modal" tabindex="-1" role="dialog" aria-labelledby="video1Label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">

                <div class="modal-body p-0">
                    <button type="button" class="close ms-auto me-2 mt-2" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <video id="video1" width="100%" controls>
                        <source src="{{ asset('website/assets/images/videos/video03.mp4') }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>

            </div>
        </div>
    </div>
    <div class="modal fade modalVideo" id="video4Modal" tabindex="-1" role="dialog" aria-labelledby="video1Label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">

                <div class="modal-body p-0">
                    <button type="button" class="close ms-auto me-2 mt-2" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <video id="video1" width="100%" controls>
                        <source src="{{ asset('website/assets/images/videos/video4.mp4') }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>

            </div>
        </div>
    </div>
    <div class="modal fade modalVideo" id="video5Modal" tabindex="-1" role="dialog" aria-labelledby="video1Label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">

                <div class="modal-body p-0">
                    <button type="button" class="close ms-auto me-2 mt-2" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <video id="video1" width="100%" controls>
                        <source src="{{ asset('website/assets/images/videos/video5.mp4') }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>

            </div>
        </div>
    </div>

    <!-- =================== model for videos end================= -->

    @stack('scripts')
    <script src="{{ asset('website/assets/js/phosphor-icons.js')}}"></script>
    <script src="{{ asset('website/assets/js/swiper-bundle.min.js')}}"></script>
    <script src="{{ asset('website/assets/js/main.js')}}"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="{{ asset('website/assets/js/bootstrap.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@1.2.0/dist/js/splide.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

    <script>
        AOS.init();
    </script>
    <script>
        // Primary slider.
        var primarySlider = new Splide('#primary_slider', {
            type: 'fade',
            heightRatio: 0.5,
            pagination: false,
            arrows: false,
            cover: true,
        });

        // Thumbnails slider.
        var thumbnailSlider = new Splide('#thumbnail_slider', {
            rewind: true,
            fixedWidth: 100,
            fixedHeight: 64,
            isNavigation: true,
            gap: 10,
            focus: 'center',
            pagination: false,
            cover: true,
            breakpoints: {
                '600': {
                    fixedWidth: 66,
                    fixedHeight: 40,
                }
            }
        }).mount();

        // sync the thumbnails slider as a target of primary slider.
        primarySlider.sync(thumbnailSlider).mount();
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const mainImg = document.querySelector(".main-img");
            const thumbnails = document.querySelectorAll(".thumbnail-gallery img");
            const prevBtn = document.querySelector(".prev");
            const nextBtn = document.querySelector(".next");

            let currentIndex = 0;

            // Update main image function
            function updateMainImage(index) {
                if (index >= 0 && index < thumbnails.length) {
                    mainImg.src = thumbnails[index].src;
                    currentIndex = index;
                }
            }

            // Click event for thumbnails
            thumbnails.forEach((thumb, index) => {
                thumb.addEventListener("click", () => {
                    updateMainImage(index);
                });
            });

            // Previous button functionality
            prevBtn.addEventListener("click", () => {
                if (currentIndex > 0) {
                    updateMainImage(currentIndex - 1);
                } else {
                    updateMainImage(thumbnails.length - 1); // Loop to last image
                }
            });

            // Next button functionality
            nextBtn.addEventListener("click", () => {
                if (currentIndex < thumbnails.length - 1) {
                    updateMainImage(currentIndex + 1);
                } else {
                    updateMainImage(0); // Loop to first image
                }
            });
        });
    </script>


    <script>
        // Loop through all modal IDs
        ['video1Modal', 'video2Modal', 'video3Modal', 'video4Modal', 'video5Modal'].forEach(function(modalId) {
            $('#' + modalId).on('hidden.bs.modal', function() {
                var video = this.querySelector('video');
                if (video) {
                    video.pause();
                    video.currentTime = 0; // Optional: reset to beginning
                }
            });
        });
    </script>

    <script>
        gsap.registerPlugin(ScrollTrigger);

        const cards = gsap.utils.toArray("#horizontal .card");
        const container = document.querySelector("#horizontal");

        // Set xPercent based on screen width
        const isMobile = window.innerWidth <= 576;
        const xPercentValue = isMobile ? -106 * (cards.length - 1) : -90 * (cards.length - 1);

        gsap.to(cards, {
            xPercent: xPercentValue,
            ease: "none",
            scrollTrigger: {
                trigger: container,
                pin: true,
                scrub: 1,
                anticipatePin: 1,
                end: () => "+=" + container.offsetWidth
            }
        });
    </script>
    <script>
        function redirectToReview() {
            const baseUrl = window.location.origin;
            window.location.href = baseUrl + "/#rating_and_review";
        }
    </script>

</body>

</html>