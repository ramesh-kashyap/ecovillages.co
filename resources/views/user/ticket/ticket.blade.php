@include('layouts.upnl.header')
<div class="content-body" style="min-height: 732px;">
    <div class="container-fluid">
        <div class="row page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Open Ticket </a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)">Raise A Ticket </a></li>
            </ol>
        </div>
        <!-- row -->
              

                <div class="row justify-content-center mt-4">

                    <div class="col-md-12">
                        <div class="card custom--card">
                              <div class="card-header">
                <h5 class="card-title">Raise A Ticket</h5>
            </div>
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
                                        <div class="form-group col-md-12">
                                            <label class="text-label form-label">Priority</label>
                                            <select name="category" class="default-select wide form-control" id="validationCustom05" style="display: none;"
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
                                        <div class="form-group mt-4">
                                            <button type="submit" class="btn me-2 btn-primary">Submit</button>
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