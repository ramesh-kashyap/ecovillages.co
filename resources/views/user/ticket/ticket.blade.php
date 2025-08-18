@include('layouts.upnl.header')

<div class="dashboard-body">
    <div class="content-body">
    <div class="container-fluid">
      @if(Session::has('success'))
    <div class="alert alert-success">
        {{ Session::get('success') }}
    </div>
@endif

@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <div class="container-fluid">
        <div class="flex-between mb-32 gap-3">
            <h2 class="fs-30">Open Ticket</h2>
            <div class="flex-align gap-2">
                <a href="#" class="btn btn--sm btn--base mb-2">Raise A Ticket</a>
            </div>
        </div>

        <div class="row justify-content-center mt-4">
            <div class="col-md-12">
                <div class="card custom--card">
                    <div class="card-body">
                        <form method="POST" action="{{ route('user.SubmitTicket') }}"
                            class="disableSubmission">
                            @csrf
                            <div class="row">
                                <!-- <div class="form-group col-md-6">
                                    <label class="form--label">Select Subject</label>
                                    <input type="text" placeholder="Describe The Issue" name="message"
                                        class="form-control form--control md-style" required>
                                </div> -->
                                <div class="form-group col-md-6">
                                    <label class="form--label">Priority</label>
                                    <select name="category" class="form-select md-style form--control select2"
                                        data-minimum-results-for-search="-1" required>
                                        <option selected="DEPOSIT NOT CREDITED">DEPOSIT NOT CREDITED</option>
                                        <option value="WITHDRAWAL NOT CREDITED">WITHDRAWAL NOT CREDITED</option>
                                        <option value="WITHDRAWAL REJECTED">WITHDRAWAL REJECTED</option>
                                        <option value="DEPOSIT REJECTED">DEPOSIT REJECTED</option>
                                        <option value="LESS AMOUNT CREDITED AFTER WITHDRAWAL.">LESS AMOUNT CREDITED
                                            AFTER WITHDRAWAL.</option>
                                        <option value="OTHERS">OTHERS</option>
                                    </select>
                                </div>
                                <div class="col-12 form-group">
                                    <label class="form--label">Message</label>
                                    <textarea type="text" placeholder="Describe The Issue" name="message"
                                        class="form-control form--control" required></textarea>
                                </div>


                                <!-- <div class="col-md-9">
                                    <button type="button" class="btn btn-dark btn--sm addAttachment my-2"> <i
                                            class="fas fa-plus"></i> Add Attachment </button>
                                    <p class="mb-2"><span class="text--info">Max 5 files can be uploaded
                                            | Maximum upload size is 128MB | Allowed File Extensions:
                                            .jpg, .jpeg, .png, .pdf, .doc, .docx</span></p>
                                    <div class="row fileUploadsContainer">
                                    </div>
                                </div> -->
                                <div class="col-md-3">
                                    <button class="btn btn--base btn--md  w-100 my-2" type="submit">Submit </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<script>
    let clearmsg = () => {
      const myTimeout = setTimeout(function() {
        document.getElementById("msg").innerHTML = "";
      }, 3000);
    }
  </script>
@include('layouts.upnl.footer')
