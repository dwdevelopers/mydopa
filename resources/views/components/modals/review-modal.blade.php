    <div class="modal fade modal_review" id="reviewModal" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Write a Review</h4>
                </div>
                <div class="modal-body">
                    <div class="rating-box">
                        <p><b> would you rate us?</b></p>
                        <div class="stars">
                            <i class='bx bx-star star' data-value="1"></i>
                            <i class='bx bx-star star' data-value="2"></i>
                            <i class='bx bx-star star' data-value="3"></i>
                            <i class='bx bx-star star' data-value="4"></i>
                            <i class='bx bx-star star' data-value="5"></i>
                        </div>

                    </div>

                    <form action="{{ route('website.review') }}" method="POST">
                        @csrf
                        <input type="hidden" name="rating" id="rating" value="0"> <!-- this stores the selected star rating -->

                        <div class="row">
                            <div class="col-lg-6">
                                <label>Name*
                                    <input name="name" type="text" class="form-control" required>
                                </label>
                            </div>
                            <div class="col-lg-6">
                                <label>Email*
                                    <input name="email" type="email" class="form-control" required>
                                </label>
                            </div>
                            <div class="col-lg-12">
                                <label>Phone*
                                    <input name="phone" type="text" class="form-control" required>
                                </label>
                            </div>
                            <div class="col-lg-12">
                                <label>Write a Review*...
                                    <textarea name="review" rows="5" class="form-control" required></textarea>
                                </label>
                            </div>
                        </div>

                        <div class="btn-wrapper mt-3">
                            <button type="submit" class="btn btn-primary btn-submit">Submit</button>
                        </div>
                    </form>

                </div>

            </div>
        </div>
    </div>
