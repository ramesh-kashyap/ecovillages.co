@include('layouts.upnl.header')
<div class="content-body" style="min-height: 732px;">
    <div class="container-fluid">
        <div class="row page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Support Tickets </a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)">New Ticket</a></li>
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