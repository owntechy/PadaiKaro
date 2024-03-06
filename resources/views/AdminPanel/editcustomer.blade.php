{{-- -----------------------------------------------🙏JAI SHREE RAM🚩------------------------------------------------------------- --}}
<x-app-layout>
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Anant TVS</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Edit Customer</a></li>
                                <li class="breadcrumb-item active">Edit Customer</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    @if ($mymess = Session::get('success'))
                        <div class="alert border-0 alert-success text-center" role="alert" id="successAlert">
                            <strong>{{ $mymess }}</strong>
                        </div>
                    @endif
                    @if ($mymess = Session::get('error'))
                        <div class="alert border-0 alert-danger text-center" role="alert" id="dangerAlert">
                            <strong>{{ $mymess }}</strong>
                        </div>
                    @endif
                    <div class="card">
                        <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1">Edit Customer</h4>
                            <div class="flex-shrink-0">
                                <div class="form-check form-switch form-switch-right form-switch-md">
                                    <a href="{{ route('viewallcustomers') }}"><button
                                            type="button"class="btn btn-outline-primary waves-effect waves-light btn-sm">View
                                            Customers</button></a>
                                </div>
                            </div>
                        </div><!-- end card header -->
                        <div class="card-body">
                            <div class="live-preview">
                                <form action="{{ route('updatecustomer') }}" method="POST">
                                    @csrf
                                    <div class="row gy-4">
                                        <div class="col-lg-4 col-md-6">
                                            <div>
                                                <label for="placeholderInput" class="form-label">Name</label>
                                                <input type="text" class="form-control" id="placeholderInput"
                                                    placeholder="enter name" name="customername"
                                                    value="{{ $customer->customername }}">
                                                <input type="hidden" name="customerid" value="{{ $customer->id }}">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div>
                                                <label for="placeholderInput" class="form-label">Phone No.</label>
                                                <input type="text" class="form-control" id="placeholderInput"
                                                    placeholder="enter mobile no" name="customerphoneno"
                                                    value="{{ $customer->customerphoneno }}">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div>
                                                <label for="placeholderInput" class="form-label">E-mail</label>
                                                <input type="email" class="form-control" id="placeholderInput"
                                                    placeholder="enter email address" name="customeremailaddress"
                                                    value="{{ $customer->customeremailaddress }}">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div>
                                                <label for="placeholderInput" class="form-label">City</label>
                                                <input type="text" class="form-control" id="placeholderInput"
                                                    placeholder="enter city" name="customercity"
                                                    value="{{ $customer->customercity }}">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div>
                                                <label for="placeholderInput" class="form-label">State</label>
                                                <input type="text" class="form-control" id="placeholderInput"
                                                    placeholder="enter state" name="customerstate"
                                                    value="{{ $customer->customerstate }}">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div>
                                                <label for="placeholderInput" class="form-label">Country</label>
                                                <input type="text" class="form-control" id="placeholderInput"
                                                    placeholder="enter country" name="customercountry"
                                                    value="{{ $customer->customercountry }}">
                                            </div>
                                        </div>
                                        <div class="col-xxl-12 col-md-6">
                                            <div>
                                                <label for="exampleFormControlTextarea5"
                                                    class="form-label">Address</label>
                                                <textarea name="customeraddress" class="form-control" id="exampleFormControlTextarea5" rows="3">{{ $customer->customeraddress }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit"
                                            class="btn btn-primary waves-effect waves-light float-end">Update
                                            Customer</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        setTimeout(function() {
            $('#successAlert').fadeOut('slow');
        }, 2000);

        setTimeout(function() {
            $('#dangerAlert').fadeOut('slow');
        }, 2000);
    </script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</x-app-layout>
