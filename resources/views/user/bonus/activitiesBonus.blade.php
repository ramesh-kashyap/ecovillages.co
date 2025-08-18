
<div class="dashboard-body">

    <div class="container-fluid">
        <div class="flex-between mb-32 gap-3">
            <h2 class="fs-30">Same Rank Profit Sharing</h2>
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
                                    <th>Amount</th>
                                    <th>Remark</th>
                                    <th>Date</th>
                                    
                                    <!-- <th>User Id</th>                                     -->
                                </tr>
                            </thead>
                            @if (count($level_income) > 0)

                            <tbody>
                                <?php if (is_array($level_income) || is_object($level_income)) { ?>
                                        <?php date_default_timezone_set('UTC');
                                        $cnt = $level_income->perPage() * ($level_income->currentPage() - 1); ?>
                                        @foreach ($level_income as $value)
                                <tr>
                                    <td> {{ $cnt + $loop->iteration }}
                                    </td>
                                    <td>
                                        <span class="badge badge--success">{{ $value->user_id_fk }}</span>
                                    </td>
                                    <!-- <td>
                                        {{ $value->amt }}
                                    </td> -->
                                    <td>{{ $value->comm }} </td>

                                    <!-- <td>
                                         {{ generalDetail()->cur_text }}
                                    </td> -->
                                    <td>
                                         {{ $value->remarks }}
                                    </td>
                                    <td>
                                         {{ $value->created_at }}
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
                            
                            </tbody>
                            </tbody>

                        </table>

                    </div>
                 @if ($level_income->total() > $level_income->perPage())
    {{ $level_income->withQueryString()->links() }}
@endif


                </div>


            </div>
        </div>
    </div>

</div>