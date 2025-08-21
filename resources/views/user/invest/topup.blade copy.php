<div class="dashboard-body">
  <style>
    .card-title1 {
      padding: 6px;
      /*border:1px solid green;*/
      width: 220px;
      color: green;
      border-radius: 10px;
    }

    .card-title {
      padding-bottom: 20px;

    }
  </style>







  <div class="container-fluid py-60">
    <div class="row justify-content-center">
      <div class="col-xxl-8 col-lg-10">
        <div class="card custom--card">
          <div class="card-header">
            <h4 class="card-title">Make Topup</h4>
            <p class="card-title1">Topup Balance : {{ currency() }}{{ number_format(Auth::user()->FundBalance(), 2) }} </p>

          </div>
          <div class="card-body">
            <form id="depositForm" method="post"
              action="{{ route('user.confirmTopup') }}" id="myForm">
              @csrf
              <div class="row">

                <!--<div class="form-group">-->
                <!--    <label class="form--label">Topup ID:</label>-->
                <!--    <input type="number" class="form-control form--control md-style"-->
                <!--      name="userid"  placeholder="Enter your Topup ID"  required >-->

                <!--</div>-->
                <div class="form-group">
                  <label class="form--label">Topup Amount (Min ₹10000)</label>
                  <input type="number" class="form-control form--control md-style"
                    name="amount" placeholder="Enter your Amount" required id="amountInput">
                  <p id="amountError" class="text-danger" style="font-size:13px; margin-top: 5px;"></p>
                </div>


                <div class="form-group">
                  <label class="form--label">Payment Mode</label>
                  <select name="payment_mode" class="form-control form--control md-style" required>
                    <option value="INR">INR</option>
                    <option value="USDT">USDT</option>
                  </select>

                </div>
                <div class="form-group">
                  <label class="form--label">Transaction Password</label>
                  <input type="text" class="form-control form--control md-style"
                    name="transaction_password" placeholder="Enter your transaction password" required>

                </div>
                <div class="form-group">
                  <label class="form--label">Remarks</label>
                  <textarea id="topupAmount" rows="4" name="remarks" placeholder="write your remarks" style="width: 100%; padding: 10px; font-size: 1rem; border: 1px solid #ccc; border-radius: 10px; box-sizing: border-box; "></textarea>
                </div>


              </div>
              <label>
                <input type="checkbox" id="agreeCheckbox">
                <p style="display: inline;">I agree to the</p> <span data-toggle="modal" data-target="#exampleModalLong" style="margin-left: 10px; color: blue;">terms</span>

              </label>

              <div class="form-group">
                <button type="submit" id="submitBtn" disabled class="btn btn--base w-100 submitBtn">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>



<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Dear {{ Auth::user()->name }},</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Welcome to EcoVillage! We’re delighted to have you join our growing community committed to sustainable living and chemical-free farming.</p></br>

        <p>Your decision to be a part of EcoVillage reflects a powerful commitment to organic agriculture, environmental wellness, and the empowerment of local farming communities. Together, we are cultivating a future that thrives on harmony with nature and responsible land stewardship.</p></br>

        <p>At EcoVillage, we’re dedicated to providing outstanding support to ensure your journey with us is smooth, rewarding, and inspiring. If you have any questions, feedback, or need assistance at any point, please feel free to call us at +91 7508640347 or email us at info@ecovillages.co.in. Our team is always here to help.</p></br>
        <p>Thank you once again for being part of this movement. With your support, we’re one step closer to creating a truly sustainable and thriving future.</p></br>

        <p>Warm regards,</p></br>
        <p>EcoVillage</p>
      </div>
      <div class="modal-footer">

      </div>
    </div>
  </div>
</div>



<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
  const checkbox = document.getElementById('agreeCheckbox');
  const submitBtn = document.getElementById('submitBtn');
  checkbox.addEventListener('change', function() {
    submitBtn.disabled = !this.checked;
  });

  // Optional: Prevent form submission if checkbox is unchecked (extra safety)
  document.getElementById('myForm').addEventListener('submit', function(e) {
    if (!checkbox.checked) {
      e.preventDefault(); // Form submit roko
      alert("Please check the box before submitting the form.");
    }
  });
</script>


<script>
  $(document).ready(function() {
    $('#amountInput').on('input', function() {
      const amount = parseInt($(this).val());
      const allowedValues = [10000, 500000, 750000];
      const errorElement = $('#amountError');
      const submitBtn = $('.submitBtn'); // Make sure your submit button has class="submitBtn"

      if (isNaN(amount) || amount < 10000) {
        errorElement.text("Amount must be at least ₹10,000.");
        submitBtn.prop('disabled', true);
        return;
      }

      if (!allowedValues.includes(amount) && amount % 10000 !== 0) {
        errorElement.text("Amount must be a multiple of ₹10,000 or exactly ₹5,00,000 or ₹7,50,000.");
        submitBtn.prop('disabled', true);
        return;
      }

      // ✅ Valid input
      errorElement.text("");
      submitBtn.prop('disabled', false);
    });
  });
</script>