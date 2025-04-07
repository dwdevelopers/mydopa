   <div class="why_mydopa faqSec">
        <div class="container">
            <h2 class="mainTitle">FAQ's</h2>

            <div class="faq-inner_block ">

                <div class="faq-one__right fadein">
                    <div class="panel-group faq-accordion theme-accordion-s1 faq-one-accrodion" id="accordion">
                        @foreach ($faqs as $faq )

                        <div class="panel panel-default">
                            <div class="panel-heading accrodion-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse-1" aria-expanded="true">{{$faq->question}}</a>
                            </div>
                            <div id="collapse-1" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    <p>{{$faq->answer}}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>

            </div>
        </div>
    </div>
