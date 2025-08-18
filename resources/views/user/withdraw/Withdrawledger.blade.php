<div class="dashboard-body">
   <div class="py-5 ">
      <div class="container-fluid ">
         <div class="row justify-content-center">
            <div class="col-md-12">
               <div class="card custom--card">
                  <!-- <div class="card-header">
                     <form class="table-search-wrapper" action="{{ route('user.DepositHistory') }}" method="GET">
                         <div class="input-group style-left">
                             <input type="text"name="title" class="form-control form--control md-style"id="exampleFormControlInput1" placeholder="Title"value="{{ @$search }}">
                             <button class="input-group-text" type="button">
                                 <i class="las la-search"></i>
                             </button>
                         </div>
                         
                     </form>
                     </div> -->
                  <div class="modal-header">
                     <h5 class="modal-title">Withdraw Ledger</h5>
                  </div>
                  <div class="card-body p-0" style="overflow-x:scroll">
                            <table class="table table--responsive--md desktop-max-width">
                        <thead>
                           <tr>
                              <th>Date</th>
                              <th class="text-center">Id</th>
                              <th class="text-center">Referral Income</th>
                              <th class="text-center">Farming Income</th>
                              <th class="text-center">Reccuring Income</th>
                              <th class="text-center">Reward Income</th>
                              <th class="text-center">Total Income</th>
                              <th class="text-center">Deduction</th>
                              <th class="text-center">Service Charge</th>
                              <th>Payable Amount</th>
                           </tr>
                        </thead>
                        <tbody id="table-body">
                           @forelse ($withdraw_report as $key => $value)
                           <tr>
                              <!-- <td data-label="Subject"> 
                                 <a href="https://script.viserlab.com/viserasset/ticket/view/270604" class="fw-bold">
                                     {{ $loop->iteration }}
                                 </a>
                                 </td> -->
                              <td data-label="Last Reply">{{ $value->created_at }}</td>
                              <td data-label="Action">{{ $value->id }}</td>
                              <td data-label="Priority">{{ currency() }} {{ $value->referral_income }}</td>
                              <td data-label="Action">{{ $value->farming_income}}</td>
                              <td data-label="Action">{{ $value->reccuring_income }}</td>
                              <td data-label="Action">{{ $value->reward_income }}</td>
                              <td data-label="Action">{{ $value->total }}</td>
                              <td data-label="Action">{{ $value->deduction }}</td>
                              <td data-label="Action">{{ $value->service_charge }}</td>
                              <td data-label="Action">{{ $value->	withdraw_amt}}</td>
                           </tr>
                           @empty
                           <tr>
                              <td colspan="100%">
                                 <div class="empty-message">
                                    <p class="empty-message-icon">
                                       <img src="https://script.viserlab.com/viserasset/assets/templates/basic/images/no-data.gif" alt="image">
                                    </p>
                                    <p class="empty-message-text">No deposit history found</p>
                                 </div>
                              </td>
                           </tr>
                           @endforelse
                        </tbody>
                        @if ($withdraw_report->total() > 10)
                        {{ $withdraw_report->links() }}
                        @endif
                     </table>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div id="detailModal" class="modal custom--modal fade" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title">Details</h5>
               <span type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
               <i class="las la-times"></i>
               </span>
            </div>
            <div class="modal-body">
               <ul class="list-group userData mb-2">
               </ul>
               <div class="feedback"></div>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn--dark btn--sm" data-bs-dismiss="modal">Close</button>
            </div>
         </div>
      </div>
   </div>
</div>