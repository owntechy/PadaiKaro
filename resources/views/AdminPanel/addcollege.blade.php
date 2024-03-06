{{-- -----------------------------------------------🙏JAI SHREE RAM🚩------------------------------------------------------------- --}}
<x-app-layout>
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">PadaiKaro</h4>

                        <div class="page-title-right">
                            <ol class="m-0 breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">College Registration</a></li>
                                <li class="breadcrumb-item active">College Registration</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    @if ($mymess = Session::get('success'))
                        <div class="text-center border-0 alert alert-success" role="alert" id="successAlert">
                            <strong>{{ $mymess }}</strong>
                        </div>
                    @endif
                    @if ($mymess = Session::get('error'))
                        <div class="text-center border-0 alert alert-danger" role="alert" id="dangerAlert">
                            <strong>{{ $mymess }}</strong>
                        </div>
                    @endif
                    <div class="card">
                        <div class="card-header align-items-center d-flex">
                            <h4 class="mb-0 card-title flex-grow-1">College Registration</h4>
                            <div class="flex-shrink-0">
                                {{-- <div class="form-check form-switch form-switch-right form-switch-md">
                                    <a href="{{ route('viewallcustomers') }}"><button
                                            type="button"class="btn btn-outline-primary waves-effect waves-light btn-sm">View
                                            Customers</button></a>
                                </div> --}}
                            </div>
                        </div><!-- end card header -->
                        <div class="card-body">
                            <div class="live-preview">
                                <form action="{{route('createaddcollege')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row gy-4">
                                        <div class="col-lg-3 col-md-6">
                                            <div>
                                                <label for="placeholderInput" class="form-label">College Name</label>
                                                <input type="text" class="form-control" id="placeholderInput"
                                                    placeholder="enter course duration" name="collegename">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <div>
                                                <label for="placeholderInput" class="form-label">University Name</label>
                                                <input type="text" class="form-control" id="placeholderInput"
                                                    placeholder="enter course duration" name="universityname">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <div>
                                                <label for="placeholderInput" class="form-label">Upload Cover Image</label>
                                                <input type="file" class="form-control" id="placeholderInput"
                                                    placeholder="upload cover image" name="coverimage">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <div>
                                                <label for="placeholderInput" class="form-label">Upload Logo</label>
                                                <input type="file" class="form-control" id="placeholderInput"
                                                    placeholder="upload logo" name="logo">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <div>
                                                <label for="placeholderInput" class="form-label">City</label>
                                                <input type="text" class="form-control" id="placeholderInput"
                                                    placeholder="enter city" name="city">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <div>
                                                <label for="placeholderInput" class="form-label">State</label>
                                                <input type="text" class="form-control" id="placeholderInput"
                                                    placeholder="enter state" name="state">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <div>
                                                <label for="placeholderInput" class="form-label">Country</label>
                                                <input type="text" class="form-control" id="placeholderInput"
                                                    placeholder="enter country" name="country">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <div>
                                                <label for="placeholderInput" class="form-label">PIN Code</label>
                                                <input type="text" class="form-control" id="placeholderInput"
                                                    placeholder="enter pincode" name="pincode">
                                            </div>
                                        </div>
                                        <div class="col-xxl-12 col-md-6">
                                            <div>
                                                <label for="exampleFormControlTextarea5" class="form-label">Discription</label>
                                                <textarea name="discription" class="form-control" id="exampleFormControlTextarea5" rows="3"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-success waves-effect waves-light float-end">Submit</button>
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
