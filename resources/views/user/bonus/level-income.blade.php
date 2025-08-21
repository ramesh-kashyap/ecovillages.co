

<div class="content-body" style="min-height: 732px;">
    <div class="container-fluid">
        <div class="row page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Farming </a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)">Farming Income</a></li>
            </ol>
        </div>
        <!-- row -->

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Farming Income</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-responsive-md">
                                <thead>


                                    <tr>
                                        <th style="width:80px;"><strong>S.No</strong></th>
                                        <th><strong>User Id</strong></th>
                                        <th><strong>Amount</strong></th>
                                        <th><strong>Remark</strong></th>
                                        <th><strong>DATE</strong></th>

                                    </tr>
                                </thead>
                            @if (count($level_income) > 0)

                                <tbody>
                                    <?php if (is_array($level_income) || is_object($level_income)) { ?>
                                        <?php date_default_timezone_set('UTC');
                                        $cnt = $level_income->perPage() * ($level_income->currentPage() - 1); ?>
                                        @foreach ($level_income as $value)
                                        <tr>
                                            <td><strong>
                                                    {{ $cnt + $loop->iteration }}

                                                </strong></td>
                                            <td>{{ $value->user_id_fk }}</td>
                                            <td> {{currency()}} {{ $value->comm }}</td>
                                            <td><span class="badge light badge-success">{{ $value->remarks}}</span></td>
                                            <td>{{ $value->created_at}}</td>

                                        </tr>
                                        @endforeach

                                    <?php } ?>
                                    @else

                                    <tr>
                                        <td colspan="100%">
                                            <div class="empty-message ">

                                                <p class="empty-message-text text-center">No deposit history found</p>
                                            </div>
                                        </td>
                                    </tr>

                                    @endif


                                </tbody>

                                <tbody>

                                </tbody>

                            </table>
                              @if ($level_income->total() > $level_income->perPage())
                    {{ $level_income->withQueryString()->links() }}
                    @endif

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>