<div class="content-body" style="min-height: 732px;">
    <div class="container-fluid">
        <div class="row page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Reward </a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)">Reward Income</a></li>
            </ol>
        </div>
        <!-- row -->
        <div class="row justify-content-center mt-4">
            <div class="col-md-12">
                <div class="card custom--card h-100">
                    <!-- <div class="card-header">
                        <form class="table-search-wrapper">
                            <div class="input-group style-left">
                                <input type="text" class="form-control form--control md-style" name="search" placeholder="Search by Name, Username, Email" value="{{ request()->search }}">
                                <button class="input-group-text">
                                    <img src="{{asset('')}}user/images/search.png" width="20" height="20" alt="">
                                </button>
                            </div>
                        </form>
                    </div> -->
                    <div class="card-body">
                        <table class="table table table--responsive--md">
                            <thead>
                                <tr>
                                    <th>Sr No</th>
                                    <th>Rank</th>
                                    <th>Leg 1</th>
                                    <th>Leg 2</th>
                                    <th>Leg 3</th>
                                    <th>Status</th>
                                    <th>Rewards</th>
                                </tr>
                            </thead>
                            <tbody>
                            <tbody>
                                @php
                                // Collect all approved reward levels
                                $approvedLevels = collect($rewardIncomes)
                                ->where('status', 'Approved')
                                ->pluck('level')
                                ->map(function ($v) { return (int) $v; })
                                ->unique()
                                ->toArray();
                                @endphp

                                @foreach([
                                ['rank' => 'Manager', 'reward' => '5000','business'=>'2.50 Lakh'],
                                ['rank' => 'Form Manager', 'reward' => '15000','business'=>'7 Lakh'],
                                ['rank' => 'Sen. Form Manager', 'reward' => '40000','business'=>'20 Lakh'],
                                ['rank' => 'Asso Manager', 'reward' => '1 Lakh','business'=>'50 Lakh'],
                                ['rank' => 'Asso Sen. Manager', 'reward' => '2.5 Lakh','business'=>'1.10 CR'],
                                ['rank' => 'Platinum Rank', 'reward' => '7.5 Lakh','business'=>'2.50 CR'],
                                ['rank' => 'Diamond', 'reward' => '20 Lakh','business'=>'7.50 CR'],
                                ['rank' => 'Green Diamond', 'reward' => '50 Lakh','business'=>'16.50 CR'],
                                ['rank' => 'Crown Diamond', 'reward' => '1 Cr','business'=>'35.50 CR'],
                                ['rank' => 'Ambassador', 'reward' => '2 Cr','business'=>'75.50 CR'],
                                ['rank' => 'Crown Ambassador', 'reward' => '5 Cr','business'=>'125.50 CR'],
                                ] as $i => $row)
                                @php
                                $level = $i + 1;
                                $highlight = in_array($level, $approvedLevels);
                                @endphp

                                <tr @if($highlight) style="background-color: #d4edda" @endif>
                                    <td>{{ $level }}</td>
                                    <td>{{ $row['rank'] }}</td>
                                    <td>{{ $row['business'] }} </td>
                                    <td>{{ $row['business'] }}</td>
                                    <td>{{ $row['business'] }}</td>
                                    <td>{{ $row['reward'] }}</td>
                                    <td>{{ $highlight ? 'Approved' : 'Pending' }}</td>
                                </tr>
                                @endforeach
                            </tbody>

                            </tbody>

                        </table>
                    </div>
                </div>


            </div>
        </div>
    </div>

</div>