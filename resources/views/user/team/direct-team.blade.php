<div class="content-body" style="min-height: 732px;">
    <div class="container-fluid">
        <div class="row page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Direct </a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)">Direct Team</a></li>
            </ol>
        </div>
        <!-- row -->

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Direct Team</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-responsive-md">
                                <thead>


                                    <tr>
                                        <th style="width:80px;"><strong>S.No</strong></th>
                                        <th><strong>Username</strong></th>
                                        <th><strong>Name</strong></th>
                                        <th><strong>Email</strong></th>
                                        <th><strong>Phone</strong></th>
                                        <th><strong>Package</strong></th>
                                        <th><strong>Joining Date</strong></th>
                                        <th><strong>Status</strong></th>


                                    </tr>
                                </thead>

                                <tbody>
                                    @forelse ($direct_team as $index => $user)

                                    <tr>
                                        <td><strong>
                                              {{ $index + 1 }}

                                            </strong></td>
                                        <td>{{ $user->username }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->phone }}</td>
                                      
                                         <td>{{ Auth::user()->investments()->sum('amount') }}</td>
                                        <td><span class="badge light badge-success">{{ ucfirst($user->active_status) }}</span></td>
                                        <td>{{ $value->jdate}}</td>

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
                            {{ $direct_team->appends(request()->query())->links() }}


                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>