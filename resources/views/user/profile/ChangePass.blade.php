 <div class="dashboard-body">

     <div class="container-fluid">
         <div class="flex-between mb-32 gap-3">
             <h2 class="fs-30">Change Password</h2>
         </div>
         <div class="row justify-content-center mt-4">
             <div class="col-md-8">

                 <div class="card custom--card">
                     <div class="card-body">
                         <form method="POST" action="{{ route('user.edit-password') }}">
                             @csrf 

                             <div class="form-group">
                                 <label class="form--label">Current Password</label>
                                 <input type="password"
                                     class="form-control form--control md-style"
                                     name="old_password"
                                     required
                                     autocomplete="old_password">
                             </div>

                             <div class="form-group">
                                 <label class="form--label">Password</label>
                                 <input type="password"
                                     class="form-control form--control md-style"
                                     name="password"
                                     required
                                     autocomplete="new-password"> 
                             </div>

                             <div class="form-group">
                                 <label class="form--label">Confirm Password</label>
                                 <input type="password"
                                     class="form-control form--control md-style"
                                     name="password_confirmation"
                                     required
                                     autocomplete="new-password"> 
                             </div>

                             <div class="form-group">
                                 <button type="submit"
                                     class="btn btn--md btn--base w-100">Submit</button>
                             </div>
                         </form>

                         <!-- @include('partials.notify') -->

                     </div>
                 </div>
             </div>
         </div>
     </div>

 </div>