<div class="content-body">
    <div class="container-fluid">



        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Deposit Status</h4>
                        <div class="header-right">
                            <div class="input-group search-area ms-auto d-inline-flex">
                                <input type="text" class="form-control" id="search-input" placeholder="Search here">
                                <div class="input-group-append">
                                    <button type="button" class="input-group-text"><i class="flaticon-381-search-2"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-responsive-md">
                                <thead>
                                    <tr>
                                        <th>No. </th>
                                    	<th>User ID</th>

                                        <th>Units</th>
                                        <th>Amount</th>
                                        <th>Service Charge</th>
                                        
                                        <th>Payment Mode</th>
                                        <th>Status</th>
                                        <th>Date</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    	<?php if(is_array($deposit_list) || is_object($deposit_list)){ ?>

								<?php $cnt = 0; ?>
								@foreach($deposit_list as $value)


                                    <tr>
									<td><?= $cnt += 1?></td>
									<td>{{ $value->user_id_fk }}</td>

                                        <td> {{ $value->units }}</td>
                                        <td>{{currency()}} {{ $value->amount }}</td>
                                        <td>{{currency()}} {{ $value->amount*8/100 }}</td>
                                        <td>{{ $value->payment_mode}}</td>
                                        <td>{{ $value->status}}</td>
                                        <td>{{ $value->created_at}}</td>

                                    </tr>
 @endforeach

                                    <?php } ?>                                </tbody>
                            </table>
                            {{ $deposit_list->withQueryString()->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


