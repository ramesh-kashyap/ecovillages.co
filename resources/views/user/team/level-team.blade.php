<div class="dashboard-body">

    <div class="container-fluid">
        <div class="flex-between mb-32 gap-3">
            <h2 class="fs-30">Level Team</h2>
            <!-- <div class="flex-align gap-2">
                <a href="{{route('user.ticket')}}"
                    class="btn btn--sm btn--base "> <i class="fas fa-plus"></i>
                    New Ticket</a>
            </div> -->
        </div>
        <div class="row justify-content-center mt-4">
            <div class="col-md-12">
                <div class="card custom--card h-100">
                     <div class="card custom--card">
            
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
                                        <div class="empty-message ">
                                            <p class="empty-message-icon">
                                                <img src="https://script.viserlab.com/viserasset/assets/templates/basic/images/no-data.gif"
                                                    alt="image">
                                            </p>
                                            <p class="empty-message-text">No history found</p>
                                        </div>
                                    </td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>

                        </tbody>
                        </tbody>

                        </table>

                    </div>
                    {{ $direct_team->appends(request()->query())->links() }}
                </div>


            </div>
        </div>
    </div>

</div>