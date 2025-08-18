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
                    <h5 class="modal-title">Withdraw History</h5>
                </div>
                        <div class="card-body p-0">
                            <table class="table table--responsive--md">
                                <thead>
                                    <tr>
                                        <th>S.No</th>
                                        <th class="text-center">User Id</th>
                                        <th class="text-center">Amount</th>
                                        <!-- <th class="text-center">Service Charge</th> -->
                                        <th class="text-center">Payment Mode</th>
                                        <th>Status</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                <tbody id="table-body">
@forelse ($withdraw_report as $key => $value)
    <tr>
        <td data-label="Subject"> 
            <a href="https://script.viserlab.com/viserasset/ticket/view/270604" class="fw-bold">
                {{ $loop->iteration }}
            </a>
        </td>
        <td data-label="Status">{{ $value->user_id_fk }}</td>
        <td data-label="Priority">{{ currency() }} {{ $value->amount }}</td>        
        <td data-label="Action">{{ $value->payment_mode }}</td>
        <td data-label="Status">
            <span class="badge badge--success">{{ $value->status }}</span>
        </td>
        <td data-label="Last Reply">{{ $value->created_at }}</td>
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

<!--{{ $withdraw_report->links() }}-->

                            </table>
							<!--<ul class="pagination mb-2 mb-sm-0">-->
	      <!--                                  <li class="page-item"><a class="page-link" href="javascript:void(0);"><i class="fa-solid fa-angle-left"></i></a></li>-->
	      <!--                                  <li class="page-item"><a class="page-link" href="javascript:void(0);">1</a></li>-->
	      <!--                                  <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>-->
	      <!--                                  <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>-->
	      <!--                                  <li class="page-item"><a class="page-link " href="javascript:void(0);"><i class="fa-solid fa-angle-right"></i></a></li>-->
	      <!--                              </ul>-->
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
