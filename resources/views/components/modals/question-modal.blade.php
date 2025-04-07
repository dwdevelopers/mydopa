 <div class="modal fade modal_review" id="questionModal" tabindex="-1" role="dialog">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header">
                 <button type="button" class="close" data-dismiss="modal">&times;</button>
                 <h4 class="modal-title">Ask a Question</h4>
             </div>
             <div class="modal-body">

                 <form action="{{ route('website.question.store') }}" method="POST">
                     @csrf
                     <div class="row">
                         <div class="col-lg-6">
                             <label for="Name">Name*
                                 <input type="text"  name="name" class="form-control">
                             </label>
                         </div>
                         <div class="col-lg-6">
                             <label for="email">Email*
                                 <input type="email" name="email" placeholder="" class="form-control">
                             </label>
                         </div>
                         <div class="col-lg-12">
                             <label for="Phone">Phone*
                                 <input type="text" placeholder="" name="phone" class="form-control">
                             </label>
                         </div>
                         <div class="col-lg-12">

                             <label for="review" class="pt-5">Write a Question*...
                                 <textarea  cols="30" rows="5" name="question" placeholder="" class="form-control"></textarea>
                             </label>
                         </div>

                     </div>
                     <div class="btn-wrapper">
                         <button type="submit" class="btn btn-primary btn-submit">Submit</button>
                     </div>
                 </form>
             </div>

         </div>
     </div>
 </div>
