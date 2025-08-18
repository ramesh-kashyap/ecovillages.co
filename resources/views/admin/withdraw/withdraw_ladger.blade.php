<!--**********************************
            Content body start
        ***********************************-->
<div class="content-body">
    <div class="container-fluid">

        <div class="row page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Payment </a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)">Payment Ledger</a></li>
            </ol>
        </div>
        <!-- row -->


        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Payment Ledger</h4>
                    </div>
                    <div class="card-body">
                        
                          <form action="{{ route('admin.paymentledger') }}" method="GET">
                                        <div class="row">
                                            <div class="col-xl-4">
                                                <div class="form-group mb-3">
                                                    <input type="text" style="height: 3rem;" Placeholder="Search Users"
                                                        name="search" class="form-control" value="{{ @$search }}">
                                                </div>
                                            </div>
                                            <div class="col-xl-2">
                                                <div class="form-group mb-3">
                                                    <select name="limit" style="height: 3rem;" class="form-control">
                                                        <option value="10">10</option>
                                                        <option value="25">25</option>
                                                        <option value="50">50</option>
                                                        <option value="100">100</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xl-2">
                                                <div class="form-group mb-3">
                                                    <input type="submit" style="padding: 0.6rem 2rem;" name="submit"
                                                        class="btn btn-outline-theme btn-lg d-block w-100 btn-primary"
                                                        value="Search" />
                                                </div>
                                            </div>
                                            <div class="col-xl-2">
                                                <div class="form-group mb-3">
                                                    <a href="{{ route('admin.paymentledger') }}" style="padding: 0.6rem 2rem;"
                                                        name="reset"
                                                        class="btn btn-outline-theme btn-lg d-block w-100 btn-primary"
                                                        value="Reset">Reset</a>
                                                </div>
                                            </div>
        
        
                                        </div>
                                    </form>
                                    
                                    
                        <div class="table-responsive">
                            <table id="example" class="display" style="min-width: 845px">
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
                                    <p class="empty-message-text">No Payment history found</p>
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
</div>
<!--**********************************
            Content body end
        ***********************************-->
