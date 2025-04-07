@extends('website.layouts.app')

@section('title', 'Product')

@section('content')

<!-- shop-banner start -->
<div class="shop-banner lg:h-full md:h-[580px] sm:h-[40px] h-[40px]" style="background-image: url('{{ asset('website/assets/images/product-shop/shop-banner.jpg') }}');">
    <div class="container w-full h-full flex items-center">
        <div class="text-content sm:w-1/2 w-2/3">
            <div class="text-display md:mt-5 mt-2">Herbal health supplement for parkinson’s disease</div>
            <img src="{{ asset('website/assets/images/product-shop/box.png')}}" alt="mockup" class="shop-banner-inner-img">
        </div>

    </div>
</div>
<!-- shop-banner end -->



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



<!-- benefits starts -->
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
                    <iframe class="h-full w-full" src="https://www.youtube.com/embed/XFWoLiOKBt0?si=QdURubTrYAmvDLc0&controls=0&autoplay=1&mute=1&rel=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

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
                    <iframe class="h-full w-full" src="https://www.youtube.com/embed/huOVTcPUc_4?si=yRH0DqbR02dAoqyW&controls=0&autoplay=1&mute=1&rel=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

                </div>
                <h3>Who can take it</h3>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing
                    elit, sed diam nonummy nibh euismod tincidunt ut
                    laoreet dolore magna aliquam erat volutpat. Ut wisi
                    enim ad minim veniam, quis nostrud exerci tation
                    ullamcorper suscipit lobortis nisl ut aliquip ex ea </p>
                <span class="number">02</span>
            </div>

            <div class="list-product hide-product-sold grid lg:grid-cols-3 grid-cols-2 sm:gap-[30px] gap-[20px] mt-7" data-item="9"></div>

            <div class="list-pagination w-full flex items-center gap-4 mt-10"></div>
        </div>
    </section>
</div>
<!--  about mydopa end-->

<!-- feature start -->
<div class="shop-banner feature lg:h-full md:h-[580px] sm:h-[40px] h-[40px]" style="background-image: url('{{ asset('website/assets/images/product-shop/feature.jpg') }}');">
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
        <tr><td>1</td><td>Kapikachu</td><td>Mucuna pruriens</td><td>300 mg</td></tr>
        <tr><td>2</td><td>Aswagandha</td><td>Withania Somnifera</td><td>300 mg</td></tr>
        <tr><td>3</td><td>Hareethaki</td><td>Terminalia chebula</td><td>300 mg</td></tr>
        <tr><td>4</td><td>Vibeethaki</td><td>Terminalia Bellarica</td><td>300 mg</td></tr>
        <tr><td>5</td><td>Amalaka</td><td>Emblica officinalis</td><td>300 mg</td></tr>
        <tr><td>6</td><td>Cow milk</td><td></td><td>QS</td></tr>
      </tbody>
    </table>
  </div>

  <div class="tab-content tb-2" id="why">
    <ul>
        <li>Mydopa is a complete herbal health supplement for people with PARKINSON’S DISEASE.</li>
        <li>The key ingredients in Mydopa are the natural source of L-Dopa approximately 200 mg per sachet.</li>
        <li>Mydopa promotes overall brain health, protects healthy brain cells, and repairs degenerated brain cells. </li>
        <li>Mydopa promotes natural DOPAMINE production.</li>
        <li>Mydopa arrests further degeneration of brain cells.</li>
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
