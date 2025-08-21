
<div class="content-body" style="min-height: 732px;">
    <div class="container-fluid">
        <div class="row page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="javascript:void(0)">ROI </a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)">ROI Income</a></li>
            </ol>
        </div>
        <!-- row -->
        <div class="row justify-content-center mt-4">
            <div class="col-md-12">
                <div class="card custom--card h-100">
                    <div class="card-body">
                        <table class="table table table--responsive--md">
                            <thead>
                                <tr>
                                    <th>Sr No</th>
                                    <th>User Id</th>
                                    <th>Package</th>
                                    <th>Amount</th>
                                    <th>Remarks</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            @if (count($level_income) > 0)

                            <tbody>
                                @php $cnt = $level_income->perPage() * ($level_income->currentPage() - 1); @endphp
                                @foreach ($level_income as $value)
                                <tr>
                                    <td> {{ $cnt + $loop->iteration }}
                                    </td>
                                    <td>
                                        <span class="badge badge--success">{{ $value->user_id_fk }}</span>
                                    </td>
                                    <td>
                                        {{ $value->amt }}
                                    </td>
                                    <td>{{ $value->comm }} {{ generalDetail()->cur_text }}</td>

                                    <td>
                                        {{ $value->remarks }}
                                    </td>
                                    <td>
                                           {{ date('D, d M Y H:i:s', strtotime($value->created_at)) }}
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            @else
                            <tbody>
                                <tr>
                                    <td colspan="100%">
                                        <div class="empty-message ">
                                          
                                            <p class="empty-message-text text-center">No history found</p>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                            @endif

                        </table>

                        </tbody>
                        </tbody>

                        </table>

                    </div>
                    @if ($level_income->total() > 10)
    {{ $level_income->withQueryString()->links() }}
@endif

                </div>


            </div>
        </div>
    </div>

</div>