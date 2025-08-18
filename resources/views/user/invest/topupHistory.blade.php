<div class="dashboard-body">

    <div class="py-5 ">
        <div class="container-fluid ">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card custom--card">
                <div class="card-header">
                        <h4 class="card-title">My Topup Record</h4>
            
                        
                    </div>
                        <div class="card-body p-0">
                            <table class="table table--responsive--md">
                                <thead>
                                    <tr>
                                        <th>S.No</th>
                                        <!--<th class="text-center">User Id</th>-->
                                        <th class="text-center">Amount</th>
                                        <th class="text-center">Date</th>
                                        <th class="text-center">Remarks</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                @if (count($deposit_list) > 0)
                                <tbody>
                                    <?php if (is_array($deposit_list) || is_object($deposit_list)) { ?>
                                        <?php $cnt = 0; ?>
                                        @foreach($deposit_list as $value)
                                        <tr>
                                            <td data-label="Subject">
                                               
                                                    <?= $cnt += 1 ?>
                                                
                                            </td>
                                            <!--<td data-label="Status">-->
                                            <!--    {{ $value->user_id_fk }}-->
                                            <!--</td>-->
                                            <td data-label="Priority">
                                                {{currency()}} {{ $value->amount }}
                                            </td>
                                            <td data-label="Last Reply">{{ $value->sdate}}</td>

                                            <td data-label="Action">
                                                {{ $value->remarks}}
                                            </td>
                                            <td data-label="Status">
                                                <span class="{{ $value->status == 'Active' ? 'badge badge--success' : 'badge badge--danger' }}">{{ ucfirst($value->status) }}</span>
                                            </td>
                                        </tr>
                                        @endforeach

                                    <?php } ?>
                                </tbody>
                                @else
                                <tbody>
                                    <tr>
                                        <td colspan="100%">
                                            <div class="empty-message ">
                                                <p class="empty-message-icon">
                                                    <img src="https://script.viserlab.com/viserasset/assets/templates/basic/images/no-data.gif"
                                                        alt="image">
                                                </p>
                                                <p class="empty-message-text">No deposit history found</p>
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