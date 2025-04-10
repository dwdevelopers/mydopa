<div class="why_mydopa faqSec">
    <div class="container">
        <h2 class="mainTitle">FAQ's</h2>

        <div class="faq-inner_block">
            <div class="faq-one__right fadein">
                <div class="panel-group faq-accordion theme-accordion-s1 faq-one-accrodion" id="accordion">
                    @foreach ($faqs as $index => $faq)
                        <div class="panel panel-default">
                            <div class="panel-heading accrodion-title">
                                <a data-toggle="collapse"
                                   data-parent="#accordion"
                                   href="#collapse-{{ $index }}"
                                   aria-expanded="{{ $index == 0 ? 'true' : 'false' }}">
                                    {{ $faq->question }}
                                </a>
                            </div>
                            <div id="collapse-{{ $index }}"
                                 class="panel-collapse collapse @if($index == 0) in @endif">
                                <div class="panel-body">
                                  <p>{!! $faq->answer !!}</p>

                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
