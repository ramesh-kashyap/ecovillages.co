<div class="content-body" style="min-height: 732px;">
    <div class="container-fluid">
        <div class="row page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Password</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)">Change Password</a></li>
            </ol>
        </div>
        <!-- row -->

        <div class="card custom--card">
            <div class="card-body">
                <form method="POST" action="{{ route('user.edit-password') }}">
                    @csrf

                    <div class="form-group">
                        <label class="form--label">Current Password</label>
                        <input type="password"
                            class="form-control form--control md-style"
                            name="old_password"
                            required
                            autocomplete="old_password">
                    </div>

                    <div class="form-group">
                        <label class="form--label">Password</label>
                        <input type="password"
                            class="form-control form--control md-style"
                            name="password"
                            required
                            autocomplete="new-password">
                    </div>

                    <div class="form-group">
                        <label class="form--label">Confirm Password</label>
                        <input type="password"
                            class="form-control form--control md-style"
                            name="password_confirmation"
                            required
                            autocomplete="new-password">
                    </div>

                    <div class="form-group mt-4">
                        <button type="submit" class="btn me-2 btn-primary">Submit</button>
                    </div>
                </form>

                <!-- @include('partials.notify') -->

            </div>
        </div>

    </div>

</div>