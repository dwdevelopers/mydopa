<footer class="footer">
    <div class="container">
        <div class="footer-content">
            <div class="newsletter">
                <h2>Get gut friendly advice & <br> tips straight into your inbox!</h2>
                <p>We only share no nonsense, expert-recommended & science-backed info that'll help you transform your health. Sign up now.</p>
                <div class="subscribe-form">
                    <form action="{{ route('website.newsletter.store') }}" method="POST">
                        @csrf
                        <input type="email" name="email" placeholder="Mail" required>
                        <button type="submit">→</button>
                    </form>
                </div>
            </div>
            <div class="contact-info">
                <div class="footer-logo">
                    <img src="{{ asset('website/assets/images/product-shop/footer-logo.png')}}" alt="VIAMS Logo">
                </div>
                <div class="address">
                    <p>Mezhathur P.O. Palakkad, Kerala, 679534, India</p>
                    <p>Email us: <br><a href="mailto:info@mydopa.com">info@mydopa.com</a></p>
                    <p>Call us:<br> <div class="contactNumber" style="margin-top: -20px;"> <a href="tel:+917034992442">+91 703499 2442</a><a href="tel:+917034882442">+91 703488 2442</a></div></p>
           

                        <p>Rate Us on Google <br><a style="cursor:pointer" onclick="redirectToReview()">Click Here to Submit Your Review</a></p>
   <div class="social-Links">
                    <div class="icon-wrapper">
                        <a href="https://www.facebook.com/MyDopa.Parkinsons.medicine" target="_blank"> <img src="{{ asset('website/assets/images/fb.png')}}" alt="VIAMS Logo"></a>
                    </div>
                    <div class="icon-wrapper">
                         <a href="https://www.instagram.com/mydopa_viams/?hl=en" target="_blank">  <img src="{{ asset('website/assets/images/instagram.png')}}" alt="VIAMS Logo"></a>
                    </div>
                </div>
                </div>
             
            </div>

        </div>
    </div>
</footer>

<div class="footer-bottom">
    <p>© 2025, Mydopa. All rights reserved.</p>
    <p>Designed & Developed by <a href="https://dawsonwalsh.com/" target="blank">DW</a></p>
</div>
