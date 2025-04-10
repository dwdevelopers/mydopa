@extends('website.layouts.app')

@section('title', 'Contact Us')

@section('content')
<div class="breadcrumb-block style-shared">
    <div class="breadcrumb-main bg-linear overflow-hidden">
        <div class="container  pt-24 pb-10 relative" style="padding-bottom: 6rem;">
            <div class="main-content w-full h-full flex flex-col items-center justify-center relative z-[1]">
                <div class="text-content">
                    <div class="heading2 text-center">Contact Us</div>
                    <div class="link flex items-center justify-center gap-1 caption1 mt-3">
                        <a href="{{route('website.home')}}" style="color: #000;">Homepage</a>
                        <i class="ph ph-caret-right text-sm text-secondary2"></i>
                        <div class="text-secondary2 capitalize">Contact Us</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="contact-us md:py-20 py-10">
    <div class="container">
        <div class="flex justify-between max-lg:flex-col gap-y-10 ptb-50">
            <div class="left lg:w-2/3 lg:pr-4">
                <div class="heading3">Drop Us A Line</div>
                <div class="body1 text-secondary2 mt-3">Use the form below to get in touch with the sales team</div>
                {{-- Success message --}}
                @if(session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                    {{ session('success') }}
                </div>
                @endif

                {{-- Validation errors --}}
                @if ($errors->any())
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                    <ul class="list-disc pl-5">
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form action="{{ route('website.contact.store') }}" method="POST" class="md:mt-6 mt-4">
                    @csrf
                    <div class="grid sm:grid-cols-2 grid-cols-1 gap-4 gap-y-5 contact-forn-sec">
                        <div class="name">
                            <input name="name" class="border-line px-4 py-3 w-full rounded-lg" type="text" placeholder="Your Name *" required />
                        </div>
                        <div class="email">
                            <input name="email" class="border-line px-4 pt-3 pb-3 w-full rounded-lg" type="email" placeholder="Your Email *" required />
                        </div>
                        <div class="message sm:col-span-2">
                            <textarea name="message" class="border-line px-4 pt-3 pb-3 w-full rounded-lg" rows="3" placeholder="Your Message *" required></textarea>
                        </div>
                    </div>
                    <div class="block-button md:mt-6 mt-4">
                        <button type="submit" class="button-main">Send message</button>
                    </div>
                </form>

            </div>
            <div class="right lg:w-1/4 lg:pl-4 address-sec">
                <div class="item">
                    <div class="heading4">Our Store</div>
                    <p class="mt-3">Mezhathur P.O. Palakkad, Kerala, 679534, India</p>
                    <p> <a href="tel:+91 703499 2442" class="mt-3" style="color: #000;">Phone: <span class="whitespace-nowrap">+91 703499 2442</span></a></p>
                    <p> <a href="tel:++91 703488 2442" class="mt-3" style="color: #000;"><span style="display: inline-block;width:54px;"></span><span class="whitespace-nowrap">+91 703488 2442</span></a></p>
                    <p><a href="mailto:info@mydopa.com" class="mt-1" style="color: #000;">Email: <span class="whitespace-nowrap">info@mydopa.com</span></a></p>
                </div>
                <div class="item mt-10">
                    <div class="heading4">Open Hours</div>
                    <p class="mt-3">Mon - Sat: <span class="whitespace-nowrap">9:00am - 7:00pm</span></p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="map xl:h-[600px] sm:h-[500px] h-[450px] overflow-hidden">
    <!-- <iframe class="w-full h-full" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1087.1466107534056!2d-81.49247136581288!3d36.40281150719292!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8851ac9789084bdd%3A0x854168300ff0fb4b!2sDr%20Pepper.Grapette%20Bottling%20Co.!5e1!3m2!1svi!2s!4v1721783628866!5m2!1svi!2s" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
    <iframe class="w-full h-full" src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d62708.72380666263!2d76.08865163823928!3d10.788684764848057!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m5!1s0x3ba7c7000ced198f%3A0x7eb0aba28063eee3!2sMezhathur%2C%20Mezhathur%2C%20Thrithala%2C%20Palakkad%2C%20Kerala%20679534%2C%20India!3m2!1d10.7884887!2d76.1299322!4m0!5e0!3m2!1sen!2sin!4v1743773966815!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
@endsection
