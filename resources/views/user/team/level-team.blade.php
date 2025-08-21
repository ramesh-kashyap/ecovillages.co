<div class="content-body" style="min-height: 732px;">
    <div class="container-fluid">
        <div class="row page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Level </a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)">Level Team</a></li>
            </ol>
        </div>
        <!-- row -->
        <div class="row justify-content-center mt-4">
            <div class="col-md-12">
                <div class="card custom--card h-100">
                    <div class="card-header">
                        <h4 class="card-title">Level Team</h4>
                    </div>
                    <div class="card-header">
                        <form method="GET" action="{{ route('user.level-team') }}" class="d-flex align-items-center gap-2 flex-wrap">
                            <!-- Search Input -->
                            <input type="text" name="search" class="form-control form-control-sm" placeholder="Search..."
                                value="{{ request('search') }}" style="width: 150px; height: 50px;">

                            <!-- Start Date -->
                            <input type="date" name="start_date" class="form-control form-control-sm"
                                value="{{ request('start_date') }}" style="width: 130px; height: 50px;">

                            <!-- End Date -->
                            <input type="date" name="end_date" class="form-control form-control-sm"
                                value="{{ request('end_date') }}" style="width: 130px; height: 50px;">

                            <!-- Limit Dropdown -->
                            <select name="limit" class="form-control form-control-sm" style="width: 80px; height: 50px;">
                                <option value="10" {{ request('limit') == 10 ? 'selected' : '' }}>10</option>
                                <option value="25" {{ request('limit') == 25 ? 'selected' : '' }}>25</option>
                                <option value="50" {{ request('limit') == 50 ? 'selected' : '' }}>50</option>
                            </select>

                            <!-- Search Button -->
                            <button type="submit" class="btn btn-primary btn-sm"
                                style="height:  50px;">Search</button>

                            <!-- Reset Button -->
                            <a href="{{ route('user.level-team') }}" class="btn btn-secondary btn-sm"
                                style="height:  50px;">Reset</a>
                        </form>
                    </div>
                    <div class="card-body">
                        <table class="table table table--responsive--md">
                            <thead>
                                <tr>
                                    <th>Sr No</th>
                                    <th>Username</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Package </th>

                                    <th>Joining Date</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($direct_team as $index => $user)
                                <tr>
                                    <td>{{ $index + 1 }}
                                    </td>
                                    <td>
                                        <span>{{ $user->username }}</span>
                                    </td>
                                    <td>
                                        {{ $user->name }}
                                    </td>
                                    <td>{{ $user->email }}</td>

                                    <td>{{ $user->phone }}

                                    </td>
                                    <td>{{ Auth::user()->investments()->sum('amount') }}</td>
                                    <td>
                                        {{ $user->jdate }}
                                    </td>
                                    <td>
                                        <span class="{{ $user->active_status == 'Active' ? 'badge badge--success' : 'badge badge--danger' }}">{{ ucfirst($user->active_status) }}</span>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="100%">
                                        <div class="empty-message item-center">
                                          
                                            <p class="empty-message-text text-center">No history found</p>
                                        </div>
                                    </td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>


                    </div>
                    {{ $direct_team->appends(request()->query())->links() }}
                </div>


            </div>
        </div>
    </div>

</div>