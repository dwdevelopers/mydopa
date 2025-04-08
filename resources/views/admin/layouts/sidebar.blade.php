<div class="leftside-menu">
    <!-- Brand Logo Light -->
    <a href="index.html" class="logo logo-light">
        <span class="logo-lg">
            <img src="{{ asset('website/assets/images/logo.png')}}" alt="logo">
        </span>
        <span class="logo-sm">
            <img src="{{ asset('website/assets/images/logo.png')}}" alt="small logo">
        </span>
    </a>

    <!-- Brand Logo Dark -->
    <a href="{{route('admin.home')}}" class="logo logo-dark">
        <span class="logo-lg">
            <img src="{{ asset('website/assets/images/logo.png')}}" alt="dark logo">
        </span>
        <span class="logo-sm">
            <img src="{{ asset('website/assets/images/logo.png')}}" alt="small logo">
        </span>
    </a>

    <!-- Sidebar -left -->
    <div class="h-100" id="leftside-menu-container" data-simplebar>
        <!--- Sidemenu -->
        <ul class="side-nav">

            <li class="side-nav-title">Main</li>

            <li class="side-nav-item">
                <a href="{{route('admin.home')}}" class="side-nav-link">
                    <i class="ri-dashboard-3-line"></i>
                    <span> Dashboard </span>
                </a>
            </li>


            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarForms" aria-expanded="false" aria-controls="sidebarForms" class="side-nav-link">
                    <i class="ri-survey-line"></i>
                    <span> Product </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarForms">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{route('categories.index')}}">Category List</a>
                        </li>
                        <li>
                            <a href="{{route('products.index')}}">Product List</a>
                        </li>

                    </ul>
                </div>
            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarPagesAuth" aria-expanded="false" aria-controls="sidebarPagesAuth" class="side-nav-link">
                    <i class="ri-group-2-line"></i>
                    <span> Contact Us </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarPagesAuth">
                    <ul class="side-nav-second-level">
                        <li>
                            {{-- --}}
                            {{-- --}}
                            {{-- --}}
                            <a href="{{route('contactuses.index')}}">List</a>
                        </li>

                    </ul>
                </div>
            </li>
            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarLayouts" aria-expanded="false" aria-controls="sidebarLayouts" class="side-nav-link">
                    <i class="ri-layout-line"></i>
                    <span> Testimonials </span>
                </a>
                <div class="collapse" id="sidebarLayouts">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{route('testimonials.index')}}">List</a>
                        </li>
                        <li>
                            <a href="{{route('testimonials.create')}}">Add</a>
                        </li>

                    </ul>
                </div>
            </li>
            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarLayouts" aria-expanded="false" aria-controls="sidebarLayouts" class="side-nav-link">
                    <i class="ri-layout-line"></i>
                    <span> FAQ's </span>
                </a>
                <div class="collapse" id="sidebarLayouts">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{route('faqs.index')}}">List</a>
                        </li>
                        <li>
                            <a href="{{route('faqs.create')}}">Add</a>
                        </li>

                    </ul>
                </div>
            </li>
            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#questionsLayout" aria-expanded="false" aria-controls="questionsLayout" class="side-nav-link">
                    <i class="ri-layout-line"></i>
                    <span> Questions </span>
                </a>
                <div class="collapse" id="questionsLayout">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{route('questions.index')}}">List</a>
                        </li>


                    </ul>
                </div>
            </li>
            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#reviewsLayout" aria-expanded="false" aria-controls="reviewsLayout" class="side-nav-link">
                    <i class="ri-layout-line"></i>
                    <span> Rating & Review </span>
                </a>
                <div class="collapse" id="reviewsLayout">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{route('reviews.index')}}">List</a>
                        </li>


                    </ul>
                </div>
            </li>
              <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#newsLayout" aria-expanded="false" aria-controls="newsLayout" class="side-nav-link">
                    <i class="ri-layout-line"></i>
                    <span> NewsLetters </span>
                </a>
                <div class="collapse" id="newsLayout">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{route('newsletter.index')}}">List</a>
                        </li>


                    </ul>
                </div>
            </li>
        </ul>
        <!--- End Sidemenu -->

        <div class="clearfix"></div>
    </div>
</div>
