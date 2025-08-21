<div class="content-body" style="min-height: 732px;">
    <div class="container-fluid">
        <div class="row page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Deposit</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)">Deposit History</a></li>
            </ol>
        </div>
        <!-- row -->

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Deposit History</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-responsive-md">
                                <thead>
                                    <tr>
                                        <th style="width:80px;"><strong>S.No</strong></th>
                                        <th><strong>User Id</strong></th>
                                        <th><strong>Amount</strong></th>
                                        <th><strong>DATE</strong></th>
                                        <th><strong>Payment Mode</strong></th>
                                        <th><strong>Status</strong></th>

                                    </tr>
                                </thead>
                                @if (count($deposit_list) > 0)
                                <tbody>
                                    <?php if (is_array($deposit_list) || is_object($deposit_list)) { ?>
                                        <?php $cnt = 0; ?>
                                        @foreach($deposit_list as $value) <tr>
                                            <td><strong><?= $cnt += 1 ?></strong></td>
                                            <td>{{ $value->user_id_fk }}</td>
                                            <td> {{currency()}} {{ $value->amount }}</td>
                                            <td>{{ $value->sdate}}</td>
                                            <td><span class="badge light badge-success">{{ $value->type}}</span></td>
                                            <td><span class="{{ $value->status == 'Active' ? 'badge badge--success' : 'badge badge--danger' }}">{{ ucfirst($value->status) }}</span></td>

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