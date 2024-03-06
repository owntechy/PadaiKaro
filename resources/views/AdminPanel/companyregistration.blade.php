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
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Company Registration</a></li>
                                <li class="breadcrumb-item active">Company Registration</li>
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
                            <h4 class="mb-0 card-title flex-grow-1">Company Registration</h4>
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
                                <form action="{{route('createcompanyregistration')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row gy-4">
                                        <div class="col-lg-4 col-md-6">
                                            <div>
                                                <label for="placeholderInput" class="form-label">Name</label>
                                                <input type="text" class="form-control" id="placeholderInput"
                                                    placeholder="enter name" name="customername">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div>
                                                <label for="placeholderInput" class="form-label">Mobile No.</label>
                                                <input type="text" class="form-control" id="placeholderInput"
                                                    placeholder="enter mobile no" name="mobileno">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div>
                                                <label for="placeholderInput" class="form-label">WhatsApp Number</label>
                                                <input type="text" class="form-control" id="placeholderInput"
                                                    placeholder="enter whatsapp number" name="whatsappnumber">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div>
                                                <label for="placeholderInput" class="form-label">Gmail Address</label>
                                                <input type="email" class="form-control" id="placeholderInput"
                                                    placeholder="enter gmail address" name="gmail">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div>
                                                <label for="placeholderInput" class="form-label">Suppot Email</label>
                                                <input type="email" class="form-control" id="placeholderInput"
                                                    placeholder="enter support email" name="supportemail">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div>
                                                <label for="placeholderInput" class="form-label">Head Office</label>
                                                <input type="text" class="form-control" id="placeholderInput"
                                                    placeholder="enter headoffice" name="headoffice">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div>
                                                <label for="placeholderInput" class="form-label">Upload Logo</label>
                                                <input type="file" class="form-control" id="placeholderInput"
                                                    placeholder="upload logo" name="logo">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div>
                                                <label for="placeholderInput" class="form-label">Facebook Link</label>
                                                <input type="text" class="form-control" id="placeholderInput"
                                                    placeholder="enter facebook link" name="facebooklink">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div>
                                                <label for="placeholderInput" class="form-label">Instagram Link</label>
                                                <input type="text" class="form-control" id="placeholderInput"
                                                    placeholder="enter instagram link" name="instagramlink">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div>
                                                <label for="placeholderInput" class="form-label">Youtube Link</label>
                                                <input type="text" class="form-control" id="placeholderInput"
                                                    placeholder="enter youtube link" name="youtubelink">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div>
                                                <label for="placeholderInput" class="form-label">Twitter Link</label>
                                                <input type="text" class="form-control" id="placeholderInput"
                                                    placeholder="enter twitter link" name="twitterlink">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div>
                                                <label for="placeholderInput" class="form-label">LinkedIn Link</label>
                                                <input type="text" class="form-control" id="placeholderInput"
                                                    placeholder="enter linkedin link" name="linkedinlink">
                                            </div>
                                        </div>
                                        <div class="col-xxl-12 col-md-6">
                                            <div>
                                                <label for="exampleFormControlTextarea5" class="form-label">Register
                                                    Address</label>
                                                <textarea name="customeraddress" class="form-control" id="exampleFormControlTextarea5" rows="3"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-success waves-effect waves-light float-end">Register</button>
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
