{{-- -----------------------------------------------🙏JAI SHREE RAM🚩------------------------------------------------------------- --}}
<x-app-layout>
    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Padai Karo</h4>
                        <div class="page-title-right">
                            <ol class="m-0 breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">All Courses</a></li>
                                <li class="breadcrumb-item active">All Courses</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
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
                        <div class="card-header align-items-center d-flex">
                            <h4 class="mb-0 card-title flex-grow-1">All Courses</h4>
                            <div class="flex-shrink-0">
                                <div class="form-check form-switch form-switch-right form-switch-md">
                                    {{-- <a href="{{ route('createcustomer') }}"><button type="button"class="btn btn-secondary waves-effect waves-light">Go Back</button></a> --}}
                                    <a href="{{ route('viewaddcoursepage') }}"><button
                                            type="button"class="btn btn-success waves-effect waves-light">Add New
                                            Course</button></a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body table-responsive">
                            <table class="table text-center table-nowrap table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Type</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Duration</th>
                                        <th scope="col">Fees</th>
                                        <th scope="col">Logo</th>
                                        <th scope="col">Discription</th>
                                        <th colspan="2">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($coursedata as $index => $row)
                                        <tr>
                                            <th scope="row" class="fw-semibold">{{ $index + 1}}</th>
                                            <td>{{ $row->coursename }}</td>
                                            <td>{{ $row->courseactualname }}</td>
                                            <td>{{ $row->duration }}</td>
                                            <td>{{ $row->fees }}</td>
                                            <td>
                                                @if ($row->courselogo)
                                                    <img src="{{ asset('uploads/' . $row->courselogo) }}" alt="Logo" class="rounded-pill" height="50px" width="50px;">
                                                @else
                                                    <p>No image available</p>
                                                @endif
                                            </td>
                                            <td>{{ $row->coursediscription }}</td>
                                            <td class="align-middle white-space-nowrap pe-0">
                                                <a href="/editcourse/{{ $row->id }}">
                                                    <button
                                                        type="button"class="btn btn-outline-primary btn-sm">Edit
                                                    </button>
                                                </a>
                                            </td>
                                            <td class="align-middle white-space-nowrap pe-0">
                                                <a href="/deletecourse/{{ $row->id }}">
                                                    <button
                                                        type="button"class="btn btn-outline-danger btn-sm">Delete
                                                    </button>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="pagination justify-content-end">
                                {{ $coursedata->links('pagination::bootstrap-4') }} <!--Pagination-->
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
    {{-- <script>
        $(document).ready(function() {
            $('.openModalBtn').on('click', function() {
                var recordId = $(this).data('record-id');
                console.log(recordId);
                $('#modalbody').empty();
                var columntwo = `
                    <div class="row">
                            <div class="col-lg-3"><span class="fw-semibold">Name:<p class="fw-light fs-5">${recordId.customername}</p></span></div>
                            <div class="col-lg-3"><span class="fw-semibold">Phone:<p class="fw-light fs-5">${recordId.customerphoneno}</p></span></div>
                            <div class="col-lg-3"><span class="fw-semibold">Email:<p class="fw-light fs-5">${recordId.customeremailaddress}</p></span></div>
                            <div class="col-lg-3"><span class="fw-semibold">City:<p class="fw-light fs-5">${recordId.customercity}</p></span></div>
                            <div class="mt-3 col-lg-3"><span class="fw-semibold">State:<p class="fw-light fs-5">${recordId.customerstate}</p></span></div>
                            <div class="mt-3 col-lg-3"><span class="fw-semibold">Country:<p class="fw-light fs-5">${recordId.customercountry}</p></span></div>
                            <div class="p-3 col-lg-12">
                                <span class="fw-semibold">Description: <p class="fw-light">${recordId.customeraddress}</p></span>
                            </div>
                    </div>`;

                $('#modalbody').append(columntwo);
            });
        });
    </script> --}}

    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI/
                                            =" crossorigin="anonymous"></script>
</x-app-layout>
