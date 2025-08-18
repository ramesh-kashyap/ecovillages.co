<div class="dashboard-body">

    <div class="container-fluid py-60">
        <div class="row justify-content-center">
            <div class="col-xxl-8 col-lg-10">
                <div class="card custom--card">
                    <div class="card-header">
                        <h5 class="card-title">Withdraw </h5>
                    </div>
                    <div class="card-body">
                        <p>{{ currency() }} {{ number_format(Auth::user()->available_balance(), 2) }}</p>
                        <form id="depositForm" method="post" action="{{route('user.Withdraw-Request')}}">
                            @csrf
                            <!-- <input type="hidden" name="_token" value="wQAMB8LqAZT4SPIOLVY6kKpuDYUltnNJPNvTVECF" autocomplete="off"> -->
                            <div class="row">
                                <!-- <div class="col-md-6"> -->
                                <div class="form-group">
                                    <label class="form--label">Amount</label>
                                    <input type="number" class="form-control form--control md-style md-style"
                                        placeholder="Enter Amount" name="amount" required>
                                </div>
                                <!-- </div> -->
                                <!-- <div class="col-md-6">
            <div class="form-group">
                <label class="form--label">Email   </label>
                                    <input type="email"
                    class="form-control form--control md-style"
                    name="email"
                    value=""
                     required >
                            </div>
        </div> -->
                                <!-- <div class="col-md-6">-->
                                <div class="form-group">
                                    <label class="form--label">Network</label>
                                    <select class="form-select form--control md-style select2" name="paymentMode"
                                        id="network" data-minimum-results-for-search="-1" name="gender" required>
                                        <option value="bank-transfer">BANK TRANSFER</option>
                                        <!-- <option value="usdtBep20">USDT.BEP20</option> -->
                                    </select>
                                    <!-- </div> -->
                                </div>
                                <div class="form-group">
                                    <label class="form--label">Transaction Password</label>
                                    <input type="number" class="form-control form--control md-style md-style"
                                         placeholder="Enter Transaction Password" name="transaction_password" required>
                                </div>

                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn--base w-100">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
