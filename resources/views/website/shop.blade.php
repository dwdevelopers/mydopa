@extends('website.layouts.app')

@section('title', 'Shop Page')

@section('content')

<!-- shop-banner start -->
<div class="shop-banner lg:h-full md:h-[580px] sm:h-[40px] h-[40px]">
    <div class="container w-full h-full flex items-center">
        <div class="text-content sm:w-1/2 w-2/3">
            <div class="text-display md:mt-5 mt-2">Herbal health supplement for parkinson’s disease</div>
            <img src="{{ asset('website/assets/images/product-shop/box.png')}}" alt="mockup" class="shop-banner-inner-img">
        </div>
         
    </div>
</div>
<!-- shop-banner end -->



<!-- Product-Showcase start-->
 <div class="product-showcase">
 <div class="product-container">
        <div class="product-image">
            <img src="{{ asset('website/assets/images/product-shop/product-1.jpg')}}" alt="Mydopa Product" class="main-img">
            <div class="thumbnail-gallery">
                <button class="prev"><i class='bx bx-chevron-left bx-flip-vertical' ></i></button>
                <img src="{{ asset('website/assets/images/product-shop/product-1.jpg')}}" alt="Thumbnail">
                <img src="{{ asset('website/assets/images/product-shop/product-2.jpg')}}" alt="Thumbnail">
                <img src="{{ asset('website/assets/images/product-shop/product-3.jpg')}}" alt="Thumbnail">
                <img src="{{ asset('website/assets/images/product-shop/product-4.jpg')}}" alt="Thumbnail">
                <img src="{{ asset('website/assets/images/product-shop/product-5.jpg')}}" alt="Thumbnail">
                <button class="next"><i class='bx bx-chevron-left bx-flip-horizontal' ></i></button>
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
                    <p>MRP (incl. of all taxes)</P>
                </div>
                <div class="plan most-popular">
                    <span class="discount">SAVE ₹ 947</span>
                    <h3>2 Month</h3>
                    <p>60 Sachets</p>
                    <p class="rs">₹ 1,849 <span>₹ 2,796</span></p>
                    <p>MRP (incl. of all taxes)</p>
                </div>
                <div class="plan">
                    <span class="discount">SAVE ₹ 499</span>
                    <h3>1 Month</h3>
                    <p>30 Sachets</p>
                    <p class="rs">₹ 949 <span>₹ 1,398</span></p>
                    <p>MRP (incl. of all taxes)</p>
                </div>
            </div>
            <button class="buy-now">Buy It Now</button>
        </div>
    </div>
 </div>

 <script>
    document.addEventListener("DOMContentLoaded", function () {
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


<!-- benefits starts -->
<div class="benefit-block md:py-20 py-10">
    <div class="container">
        <div class="list-benefit grid items-start md:grid-cols-3 grid-cols-1 xl:gap-[160px] lg:gap-20 gap-10 gap-y-6">
            <div class="benefit-item flex flex-col items-center justify-center">
            <img src="{{ asset('website/assets/images/product-shop/icon1.svg')}}" alt="icon">
                <div class="body1 font-semibold uppercase text-center mt-5">Standardized herbal extracts for precise dosage.</div>
            </div>
            <div class="benefit-item flex flex-col items-center justify-center">
            <img src="{{ asset('website/assets/images/product-shop/icons02.svg')}}" alt="icon">
                <div class="body1 font-semibold uppercase text-center mt-5">Free from synthetic additives and preservatives.</div>
            </div>
            <div class="benefit-item flex flex-col items-center justify-center">
            <img src="{{ asset('website/assets/images/product-shop/icon4.svg')}}" alt="icon">
                <div class="body1 font-semibold uppercase text-center mt-5">100% natural and plant-based ingredients.</div>
            </div>
        </div>
    </div>
</div>
<!-- benefits end -->

<!--  about mydopa start-->
<div class="about">
<section class="mydopa-section">
        <div class="text">
            <h2>What About <br> MYDOPA?</h2>
        </div>
        <div class="cards">
            <div class="card">
                <div class="image">
                    <img src="{{ asset('website/assets/images/product-shop/doctor1.jpg')}}" alt="Doctor">
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
                    <img src="{{ asset('website/assets/images/product-shop/doctor2.jpg')}}" alt="Doctor">
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

@endsection