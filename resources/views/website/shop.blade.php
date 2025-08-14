@extends('website.layouts.app')

<!-- @section('title', 'Product') -->
@section("meta_title", "Trusted natural supplement for Parkinson's patients | MYDOPA")
@section("meta_description", "MYDOPA is a trusted natural supplement for Parkinson's patients, supporting brain health, mobility, and cognitive function with herbal ingredients. Order now.")


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
            <div class="text-display md:mt-5 mt-2">Herbal Health Supplement For Parkinson’s Disease</div>
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
            <h1>MYDOPA</h1>
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
                    <!-- <span class="discount">SAVE ₹ 1,495</span> -->
                    <h3 style="padding-top: 20px;">1 Box</h3>
                    <p>30 Sachets</p>
                    <p class="rs"><span><del style="opacity: .7;">₹ 1200</del> ₹ 600</span> <span style="color: red;font-size:12px">(50% OFF)</span></p>
                    <p class="pb-10">MRP (incl. of all taxes)</P>
                    <div class="blk_tag">BEST RESULT</div>
                    <p class="pb-10" style="padding-top: 30px;">( free shipping across India)</p>
                    <div class="sale-tag">
                        <p>Sale!</p>
                    </div>
                </div>
                <!-- <div class="plan most-popular">
                        <span class="discount">SAVE ₹ 170</span>
                        <h3>2 Box</h3>
                        <p>60 Sachets</p>
                        <p class="rs"><strike>₹ 980</strike> <span style="margin-left: 3px;">₹ 810</span></p>
                        <p class="pb-10">MRP (incl. of all taxes)</p>
                        <div class="blk_tag">MOST POPULAR
                        </div>
                    </div> -->
                <!-- <div class="plan">
                        <span class="discount">SAVE ₹ 200</span>
                        <h3>3 Box</h3>
                        <p>90 Sachets</p>
                        <p class="rs"><strike>₹ 1,350 </strike> <span style="margin-left: 3px;">₹ 1,150</span></p>
                        <p class="pb-10">MRP (incl. of all taxes)</p>
                        <p class="pb-10">( free shipping across India)</p>
                    </div> -->
            </div>
            <a href="https://viams.in/product/mydopa-herbal-health-supplement-for-parkinsons-disease/" class="buy-now">Buy It Now</a>
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
                            <h2>MYDOPA <br>The Freedom to Move</h2>
                        </div>
                    </div>
                    <div class="card">
                        <div class="vector-sec">
                            <img src="{{ asset('website/assets/images/product-shop/flower.svg')}}" alt="vector img">
                        </div>
                        <button class="image" data-toggle="modal" data-target="#video1Modal">
                            <img src="{{ asset('website/assets/images/videos/video2.gif')}}" alt="Doctor">
                        </button>
                        <h3>Why choose MYDOPA?</h3>
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

<!-- tab section start -->
<div class="tabs">
    <div class="tab-buttons">
        <button class="tab active" data-tab="ingredients">Ingredients</button>
        <button class="tab" data-tab="why">Why MYDOPA</button>
        <button class="tab" data-tab="problem">Problem Statement & Solution</button>
        <button class="tab" data-tab="reason">Reason to Believe</button>
        <button class="tab" data-tab="directions">Directions for use</button>
        <button class="tab" data-tab="storage">Storage Instructions</button>
        <button class="tab" data-tab="caution">Caution</button>
    </div>

    <div class="tab-content active" id="ingredients">
        <p>Ingredients – each 1.5 G of sachet is prepared out of:</p>
        <table>
            <thead>
                <tr>
                    <th>Sl. No.</th>
                    <th>Sanskrit Name</th>
                    <th>Scientific Name</th>
                    <th>Quantity</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Kapikachu</td>
                    <td>Mucuna pruriens</td>
                    <td>300 mg</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Aswagandha</td>
                    <td>Withania Somnifera</td>
                    <td>300 mg</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Hareethaki</td>
                    <td>Terminalia chebula</td>
                    <td>300 mg</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Vibeethaki</td>
                    <td>Terminalia Bellarica</td>
                    <td>300 mg</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Amalaka</td>
                    <td>Emblica officinalis</td>
                    <td>300 mg</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Cow milk</td>
                    <td></td>
                    <td>QS</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="tab-content tb-2" id="why">
        <ul>
            <li>MYDOPA is a complete herbal health supplement for people with PARKINSON’S DISEASE.</li>
            <li>The key ingredients in MYDOPA are the natural source of L-Dopa approximately 200 mg per sachet.</li>
            <li>MYDOPA promotes overall brain health, protects healthy brain cells, and repairs degenerated brain cells. </li>
            <li>MYDOPA promotes natural DOPAMINE production.</li>
            <li>MYDOPA arrests further degeneration of brain cells.</li>
        </ul>
    </div>

    <div class="tab-content tb-3" id="problem">
        <div class="accordion">
            <div class="accordion-item">
                <button class="accordion-header">
                    Problem Statement
                    <i class="ph ph-caret-right text-2xl"></i>
                </button>
                <div class="accordion-content">
                    <ul>
                        <li>Parkinson’s Disease leads to a decline in dopamine levels, causing tremors, rigidity, and loss of motor control.</li>
                        <li>Synthetic medications for Parkinson’s often cause side effects and long-term complications.</li>
                        <li>There is a need for a natural, effective, and sustainable solution to manage symptoms and improve quality of life.</li>
                    </ul>
                </div>
            </div>
            <div class="accordion-item">
                <button class="accordion-header">
                    Problem Solution
                    <i class="ph ph-caret-right text-2xl"></i>
                </button>
                <div class="accordion-content">
                    <ul>
                        <li>MYDOPA delivers natural L-dopa derived from Ayurvedic herbs to restore dopamine levels.</li>
                        <li>Stimulates the brain's natural dopamine production for enhanced and sustainable benefits.</li>
                        <li>Provides holistic care with minimal side effects, improving mobility, control, and overall wellbeing.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="tab-content tb-2 tb-4" id="reason">
        <ul>
            <li>Formulated using ancient Ayurvedic wisdom and supported by modern research.</li>
            <li>Contains a blend of herbs known for their neuroprotective and dopamine-boosting properties.</li>
            <li>Trusted by thousands as a safe and effective solution for Parkinson’s Disease management. </li>
        </ul>
    </div>

    <div class="tab-content tb-2 tb-4" id="directions">
        <ul>
            <li>Dissolve the contents of one sachet in half a glass (90 ml) of lukewarm water or a homogenous mixture.</li>
            <li>Stir well continuously to ensure it blends perfectly and drink immediately for best results. </li>
            <li>Each sachet is carefully packed to deliver precise dosage and ensure utmost convenience for each time use.</li>
        </ul>
    </div>
    <div class="tab-content tb-2 tb-4" id="storage">
        <ul>
            <li>Store in a cool, dry place away from direct sunlight and moisture.</li>
            <li>Keep out of reach of children.</li>
            <li> For best results, ensure the sachets are stored at room temperature in their original packaging.</li>
        </ul>
    </div>

    <div class="tab-content tb-2" id="caution">
        <ul>
            <li>Consult your physician before use</li>
            <li>Do not exceed the recommended dosage.</li>
            <h4>Allergy Alert!</h4>
            <p>This product is processed with cow milk.
                Individuals with a milk allergy or lactose
                intolerance should consult their healthcare
                provider before use.
            </p>
        </ul>

    </div>

</div>

<script>
    const tabs = document.querySelectorAll('.tab');
    const contents = document.querySelectorAll('.tab-content');

    tabs.forEach(tab => {
        tab.addEventListener('click', () => {
            tabs.forEach(t => t.classList.remove('active'));
            contents.forEach(c => c.classList.remove('active'));
            tab.classList.add('active');
            document.getElementById(tab.dataset.tab).classList.add('active');
        });
    });


    //f\For Problem Statement & Solution
    const headers = document.querySelectorAll('.accordion-header');

    headers.forEach(header => {
        header.addEventListener('click', () => {
            const content = header.nextElementSibling;
            const isActive = header.classList.contains('active');

            // Close all
            document.querySelectorAll('.accordion-header').forEach(h => h.classList.remove('active'));
            document.querySelectorAll('.accordion-content').forEach(c => c.style.display = 'none');

            // Toggle this
            if (!isActive) {
                header.classList.add('active');
                content.style.display = 'block';
            }
        });
    });
</script>


@endsection
@push('scripts')
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
 <script>
    document.querySelectorAll('.tab-item').forEach(tab => {
        tab.addEventListener('click', () => {
            document.querySelectorAll('.tab-item').forEach(t => t.classList.remove('active'));
            tab.classList.add('active');

            const target = tab.getAttribute('data-item');
            document.querySelectorAll('.tab-questions').forEach(content => {
                content.style.display = content.getAttribute('data-item') === target ? 'block' : 'none';
            });
        });
    });
</script>
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