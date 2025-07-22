 <div class="reviewsec" id="rating_and_review">
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
                      <p>{{ number_format($averageRating, 2) }} out of 5</p>
                           <p>Based on {{ $rating_count }} reviews</p>

                    </div>
                </div>
                <div class="review_grid rating_sec">
                    @foreach($ratingData as $star => $data)
                    <div class="five_star_rating single_star_sec">
                        <div class="rating-box">
                            <div class="stars">
                                @for($i = 1; $i <= 5; $i++) <i class='bx {{ $i <= $star ? "bxs-star text-warning" : "bx-star text-muted" }} star'></i>
                                    @endfor
                            </div>
                        </div>
                        <div class="rating_progrss">
                            <progress max="100" value="{{ $data['percentage'] }}" class="html5" style="border-radius: 0;">
                                <div class="progress-bar">
                                    <span style="width: {{ $data['percentage'] }}%">{{ $data['percentage'] }}%</span>
                                </div>
                            </progress>
                        </div>
                        <div class="rating_count">
                            <span>{{ $data['count'] }}</span>
                        </div>
                    </div>
                    @endforeach
                </div>

                {{-- <div class="review_grid rating_sec">
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

                </div> --}}
                <div class="review_grid add_rating">
                    <button type="button" class="btn btn-primary btn-review" data-toggle="modal" data-target="#reviewModal">
                        Write a Review
                    </button>
                    @include('components.modals.review-modal')
                    <button type="button" class="btn btn-primary btn-question" data-toggle="modal" data-target="#questionModal">
                        Ask a Question
                    </button>
                    @include('components.modals.question-modal')
                </div>

            </div>
        </div>
        <hr class="hrline">

        <div class="review_tabs_sec">
            <div class="container">
                <div class="row">
                    <div class="col-12">

                        <div class="faqs-block tab-content ">
                            <div class="container">
                                <div class="flex max-md:flex-wrap justify-between gap-y-8 flex-col">
                                    <div class="left ">
                                        <div class="menu-tab flex gap-5">
                                            <div class=" tab-item inline-block w-fit heading6 text-secondary2 hover:text-black duration-300 active" data-item="how to buy">Reviews ({{$rating_count}})</div>
                                            <div class="tab-item inline-block w-fit heading6 text-secondary2 hover:text-black duration-300" data-item="payment methods">Questions ({{$question_count}})</div>

                                        </div>
                                    </div>

                                    <div class="right list-question ">
                                        <div class="tab-questions flex flex-col " data-item="how to buy" style="display: block;">
                                            @foreach ($ratings as $rating )
                                            <div class="single_review">
                                                <div class="rating-box">
                                                    <div class="stars">
                                                        @for ($i = 1; $i <= 5; $i++) <i class='bx {{ $i <= $rating->rating ? "bxs-star text-warning" : "bx-star text-muted" }} star'></i>
                                                            @endfor
                                                    </div>
                                                </div>
                                                <h4 class="author_name">{{$rating->name}} </h4>
                                                <h3 class="review_overview">{{$rating->title}}</h3>
                                                <p class="review_description">{{$rating->review}}</p>
                                            </div>
                                            @endforeach

                                            {{-- <div class="single_review">
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
                                            </div> --}}

                                        </div>
                                        <div class="tab-questions flex flex-col gap-5 pt-30" data-item="payment methods" style="display: none;" >
                                            @foreach($questions as $key => $question)
                                            <div class="question-item px-7 py-5 rounded-[20px] overflow-hidden border border-line cursor-pointer" style="    margin-top: 15px;">
                                                <div class="heading flex items-center justify-between gap-6">
                                                    <div class="heading6">{{ $question->question }}</div>
                                                    <i class="ph ph-caret-right text-2xl transition-transform duration-300"></i>
                                                </div>
                                                <div class="content body1 text-secondary mt-3 hidden">
                                                    {{ $question->answer ?? '' }}
                                                </div>
                                            </div>
                                            @endforeach



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
