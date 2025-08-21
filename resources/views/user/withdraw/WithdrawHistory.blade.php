

<div class="content-body" style="min-height: 732px;">
    <div class="container-fluid">
        <div class="row page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Withdraw</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)">Withdraw History</a></li>
            </ol>
        </div>
        <!-- row -->

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Withdraw History</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-responsive-md">
                                <thead>


                                    <tr>
                                        <th style="width:80px;"><strong>S.No</strong></th>
                                        <th><strong>User Id</strong></th>
                                        <th><strong>Amount</strong></th>
                                        <th><strong>Payment Mode</strong></th>
                                        <th><strong>Status</strong></th>
                                        <th><strong>DATE</strong></th>

                                    </tr>
                                </thead>

                                <tbody>

                                    @forelse ($withdraw_report as $key => $value)
                                    <tr>
                                        <td><strong>
                                                {{ $loop->iteration }}

                                        </strong></td>
                                        <td>{{ $value->user_id_fk }}</td>
                                        <td> {{currency()}} {{ $value->amount }}</td>
                                        <td><span class="badge light badge-success">{{ $value->payment_mode}}</span></td>
                                        <td><span class="{{ $value->status == 'Active' ? 'badge badge--success' : 'badge badge--danger' }}">{{ ucfirst($value->status) }}</span></td>
                                        <td>{{ $value->created_at}}</td>

                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="100%">
                                            <div class="empty-message ">

                                                <p class="empty-message-text text-center">No deposit history found</p>
                                            </div>
                                        </td>
                                    </tr>

                                    @endforelse

                                </tbody>

                                <tbody>

                                </tbody>
                                
                            </table>
                          @if ($withdraw_report->total() > 10)
                                {{ $withdraw_report->links() }}
                                @endif
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>