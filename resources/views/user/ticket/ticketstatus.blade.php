@include('layouts.upnl.header')
<div class="dashboard-body">

    <div class="container-fluid">
        <div class="flex-between mb-32 gap-3">
            <h2 class="fs-30">Support Tickets</h2>
            <div class="flex-align gap-2">
                <a href="{{route('user.ticket')}}"
                    class="btn btn--sm btn--base "> <i class="fas fa-plus"></i>
                    New Ticket</a>
            </div>
        </div>
        <div class="row justify-content-center mt-4">
            <div class="col-md-12">
                <div class="card custom--card h-100">
                    <div class="card-body">
                        <table class="table table table--responsive--md">
                            <thead>
                                <tr>
                                    <th>Massege</th>
                                    <th>Status</th>
                                    <th>Category</th>
                                    <th>Last Reply</th>
                                    <th>User Id</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($tickets as $key => $withdraw)
                                <tr>
                                    <td> {{ $withdraw->msg }}
                                    </td>
                                    <td>
                                        <span class="badge badge--success">{{ $withdraw->status}}</span>
                                    </td>
                                    <td>
                                        {{ $withdraw->category }}
                                    </td>
                                    <td>{{ $withdraw->created_at}} </td>

                                    <td>
                                        {{ $withdraw->user_id_fk }}
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            </tbody>

                        </table>

                    </div>
                    {{ $tickets->links() }}
                </div>


            </div>
        </div>
    </div>

</div>
@include('layouts.upnl.footer')