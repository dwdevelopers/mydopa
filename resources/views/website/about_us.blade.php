@extends('website.layouts.app')

@section('title', 'About Us')

@section('content')
<div class="breadcrumb-block style-shared">
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
</div>
<div class="about md:pt-20 pt-10">
    <div class="about-us-block">
        <div class="container">
            <div class="text flex items-center justify-center">
                <div class="content md:w-5/6 w-full">
                    <div class="heading3 text-center">I'm obsessed with the dress Pippa Middleton wore to her brother's wedding.</div>
                    <div class="body1 text-center md:mt-7 mt-5">
                        Kim Kardashian West needs no introduction. In the 14 years since she first graced our screens in Keeping Up With The Kardashians, she has built her KKW beauty empire, filmed her show, wrapped her show, become a billionaire, studied law, campaigned for the rights of death row inmates, travelled the world to attend events such as Paris Fashion Week, raised four children and launched her wildly successful shapewear brand SKIMS.
                    </div>
                </div>
            </div>
            <!-- <div class="list-img grid sm:grid-cols-3 gap-[30px] md:pt-20 pt-10">
                <div class="bg-img">
                    <img src="{{ asset('website/assets/images/other/about-us1.png')}}" alt="bg-img" class="w-full rounded-[30px]" />
                </div>
                <div class="bg-img">
                    <img src="{{ asset('website/assets/images/other/about-us2.png')}}" alt="bg-img" class="w-full rounded-[30px]" />
                </div>
                <div class="bg-img">
                    <img src="{{ asset('website/assets/images/other/about-us3.png')}}" alt="bg-img" class="w-full rounded-[30px]" />
                </div>
            </div> -->
        </div>
    </div>
</div>

    <!-- ========================benefit sec start============================= -->

    <div class="benefit-block md:py-20 py-10" style="margin-bottom: 50px;margin-top:30px">
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

@endsection
