<div class="dashboard-body">

    <div class="container-fluid py-60">
        <div class="row justify-content-center">
            <div class="col-xxl-8 col-lg-10">
                <div class="card custom--card">
                    <div class="card-header">
                        <h5 class="card-title">Deposit</h5>
                    </div>
                    <div class="card-body">
                        <form id="depositForm" method="post"
                            action="{{ route('user.confirmDeposit') }}">
                            @csrf
                            <div class="row">
                                <div class="form-group">
                                    <label class="form--label">Enter Amount</label>
                                    <input type="number" class="form-control form--control md-style"
                                      name="amount" min="1000" placeholder="Enter your Amount"  required >
                                </div>
                              
                                <div class="form-group">
                                    <label class="form--label">Payment Mode</label>
                                   <select name="paymentMode"
                                    class="form-control form--control md-style" >
                                    <option value="INR">INR</option>
                                 <option value="USDT">USDT</option>
        </select>
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
