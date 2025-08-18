<div class="dashboard-body">

    <div class="container-fluid py-60">
        <div class="row justify-content-center">
            <div class="col-xxl-8 col-lg-10">
                <div class="card custom--card">
                    <div class="card-header">
                        <h5 class="card-title">Bank Details</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('user.bank-update') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form--label">Account Holder</label>
                                        <input type="text" class="form-control form--control md-style"
                                            name="account_holder" placeholder="enter your Account Holder" value="{{ $bank_value?->account_holder }}"
 required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form--label">Account Number</label>
                                        <input type="number" class="form-control form--control md-style md-style" value="{{ $bank_value?->account_no }}"

                                            placeholder="enter your Account Number" name="account_number" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form--label">Bank Name</label>
                                        <input type="text" class="form-control form--control md-style md-style"value="{{ $bank_value?->bank_name }}"

                                            placeholder="enter your Bank name" name="bank_name" placeholder="Check time"
                                            required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form--label">Branch Name</label>
                                        <input type="text" class="form-control form--control md-style"value="{{ $bank_value?->branch_name }}"

                                            name="branch_name" placeholder="enter your Branch Name" required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form--label">IFSC Code</label>
                                        <input type="text" class="form-control form--control md-style"value="{{ $bank_value?->ifsc_code}}"

                                            name="ifsc_code" placeholder="enter your IFSC code " step="any" required>
                                    </div>
                                </div>
            
                                            <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form--label">Aadhar card No</label>
                                        <input type="text" class="form-control form--control md-style"value="{{ $bank_value?->aadhar_no}}"

                                            name="aadhar_no" placeholder="enter your Aadhar card No " step="any" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form--label">Pancard No</label>
                                        <input type="text" class="form-control form--control md-style"value="{{ $bank_value?->pancard_no }}"

                                            name="pancard_no" placeholder="enter your Pancard No " step="any" required>
                                    </div>
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