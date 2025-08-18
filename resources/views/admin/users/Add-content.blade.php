   <!--**********************************
            Content body start
        ***********************************-->
   <div class="content-body">
       <div class="container-fluid">
           <div class="row page-titles">
               <ol class="breadcrumb">
                   <li class="breadcrumb-item active"><a href="javascript:void(0)">Add Content</a></li>
                   <li class="breadcrumb-item"><a href="javascript:void(0)">Add Content</a></li>
               </ol>
           </div>
           <!-- row -->
           <div class="row">


               <div class="col-xl-6 col-lg-12">
                   <div class="card">
                       <div class="card-header">
                           <h4 class="card-title">Add Content</h4>
                       </div>
                       <div class="card-body">
                           <div class="basic-form">
                               <form action="{{ route('admin.add_content_post') }}" method="POST">
                                   @csrf
                                   <div class="row">
                                       <div class="mb-3 col-md-12">
                                           <label class="form-label">Add Team Member</label>
                                           <input placeholder="Enter add team member" required min="50" class="form-control" type="number" name="member" value="{{ old('member', $contents->member) }}">
                                       </div>

                                       <div class="mb-3 col-md-12">
                                           <label class="form-label">Complete Works</label>
                                           <input placeholder="Enter complete works" class="form-control" type="text" name="complete_works" value="{{ old('work', $contents->work) }}">
                                       </div>

                                       <div class="mb-3 col-md-12">
                                           <label class="form-label">Award Winning</label>
                                           <input placeholder="Enter award winning" class="form-control" type="text" name="award_winning" value="{{ old('award', $contents->award) }}">
                                       </div>

                                       <div class="mb-3 col-md-12">
                                           <label class="form-label">Average Rating</label>
                                           <input placeholder="Enter average rating" class="form-control" type="text" name="average_rating" value="{{ old('average', $contents->average) }}">
                                       </div>
                                   </div>

                                   <div class="mb-3">
                                       <div class="form-check">
                                           <input class="form-check-input" type="checkbox" name="check" value="1">
                                           <label class="form-check-label">Check me out</label>
                                       </div>
                                   </div>

                                   <button type="submit" class="btn btn-primary submit-btn">Submit</button>
                               </form>

                           </div>
                       </div>
                   </div>
               </div>




           </div>
       </div>
   </div>

   <script src="https://code.jquery.com//jquery-3.3.1.min.js"></script>
   <script>
       function amtValue() {
           var amt = document.getElementById('PACKAGE_AMT').value;
           if (amt % 100 == 0) {
               return true;
           } else {
               alert('Please enter valid amount Multiple of $ 100  ');
               return false;
           }
       }



       $('.check_sponsor_exist').keyup(function(e) {
           var ths = $(this);
           var res_area = $(ths).attr('data-response');
           var sponsor = $(this).val();
           // alert(sponsor); 
           $.ajax({
               type: "POST",
               url: "{{ route('getUserName') }}",
               data: {
                   "user_id": sponsor,
                   "_token": "{{ csrf_token() }}",
               },
               success: function(response) {
                   // alert(response);      
                   if (response != 1) {
                       // alert("hh");
                       $(".submit-btn").prop("disabled", false);
                       $('#' + res_area).html(response).css('color', '#000').css('font-weight', '800')
                           .css('margin-buttom', '10px');
                   } else {
                       // alert("hi");
                       $(".submit-btn").prop("disabled", true);
                       $('#' + res_area).html("User Not exists!").css('color', 'red').css(
                           'margin-buttom', '10px');
                   }
               }
           });
       });


       $('.check_amount').keyup(function(e) {
           var ths = $(this);
           var res_area = $(ths).attr('data-response');
           var amt = $(this).val();
           if (amt % 100 == 0) {
               $('#' + res_area).html("");
               $(".submit-btn").prop("disabled", false);
           } else {
               $(".submit-btn").prop("disabled", true);
               $('#' + res_area).html("Please enter valid amount Multiple of $ 100!").css('color', 'red').css(
                   'margin-buttom', '10px');
           }


       });

       $('.first-code-send').click(function(e) {
           var ths = $(this);


           // alert(sponsor); 
           $.ajax({
               type: "POST",
               url: "{{ route('admin.send_code') }}",
               data: {
                   "emailId": "",
                   "_token": "{{ csrf_token() }}",
               },
               success: function(response) {
                   // alert(response);      
                   if (response) {
                       // alert("hh");
                       iziToast.success({
                           message: 'Email send Successfully',
                           position: "topRight"
                       });
                   } else {
                       // alert("hi");
                       iziToast.error({
                           message: 'Error!',
                           position: "topRight"
                       });
                   }
               }
           });
       });
   </script>

   <!--**********************************
            Content body end
        ***********************************-->