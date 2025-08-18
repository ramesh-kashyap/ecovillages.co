<div class="dashboard-body">

    <div class="container-fluid">
        <div class="flex-between mb-32 gap-3">
            <h2 class="fs-30">Reccuring Income</h2>
            <!-- <div class="flex-align gap-2">
                <a href="{{route('user.ticket')}}"
                    class="btn btn--sm btn--base "> <i class="fas fa-plus"></i>
                    New Ticket</a>
            </div> -->
        </div>
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
                                            <p class="empty-message-icon">
                                                <img src="https://script.viserlab.com/viserasset/assets/templates/basic/images/no-data.gif"
                                                    alt="image">
                                            </p>
                                            <p class="empty-message-text">No history found</p>
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