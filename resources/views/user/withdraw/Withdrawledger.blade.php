<div class="content-body" style="min-height: 732px;">
   <div class="container-fluid">
      <div class="row page-titles">
         <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Withdraw</a></li>
            <li class="breadcrumb-item"><a href="javascript:void(0)">Withdraw Ledger</a></li>
         </ol>
      </div>
      <!-- row -->

      <div class="row">
         <div class="col-lg-12">
            <div class="card">
               <div class="card-header">
                  <h4 class="card-title">Withdraw Ledger</h4>
               </div>
               <div class="card-body">
                  <div class="table-responsive">
                     <table class="table table-responsive-md">
                        <thead>
                           <tr>
                              <th style="width:80px;"><strong>Date</strong></th>
                              <th><strong>Id</strong></th>
                              <th><strong>Referral Income</strong></th>
                              <th><strong>Farming Income</strong></th>
                              <th><strong>Reccuring Income</strong></th>
                              <th><strong>Total Income</strong></th>
                              <th><strong>Deduction</strong></th>
                              <th><strong>Service Charge</strong></th>
                              <th>Payable Amount</th>

                           </tr>
                        </thead>
                        @if (!empty($deposit_list) && count($deposit_list) > 0)
                        <tbody>
                           <?php if (is_array($deposit_list) || is_object($deposit_list)) { ?>
                              <?php $cnt = 0; ?>
                              @foreach($deposit_list as $value) <tr>

                                 <td data-label="Last Reply">{{ $value->created_at }}</td>
                                 <td>{{ $value->id }}</td>
                                 <td>{{ currency() }} {{ $value->referral_income }}</td>
                                 <td>{{ $value->farming_income}}</td>
                                 <td>{{ $value->reccuring_income }}</td>
                                 <td>{{ $value->reward_income }}</td>
                                 <td>{{ $value->total }}</td>
                                 <td>{{ $value->deduction }}</td>
                                 <td>{{ $value->service_charge }}</td>
                                 <td>{{ $value->	withdraw_amt}}</td>



                              </tr>
                              @endforeach

                           <?php } ?>

                        </tbody>
                        @else

                        <tbody>
                           <tr>
                              <td colspan="100%">
                                 <div class="empty-message ">

                                    <p class="empty-message-text text-center">No deposit history found</p>
                                 </div>
                              </td>
                           </tr>
                        </tbody>
                        @endif
                     </table>
                     @if ($deposit_list->hasPages())
                     <div class="pagination-wrapper">
                        {{ $deposit_list->appends(request()->except('page'))->links('pagination::bootstrap-4') }}
                     </div>
                     @endif
                  </div>
               </div>
            </div>
         </div>

      </div>
   </div>
</div>