{{-- -----------------------------------------------🙏JAI SHREE RAM🚩------------------------------------------------------------- --}}
<x-app-layout>
    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Padaikaro</h4>

                        <div class="page-title-right">
                            <ol class="m-0 breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Master</a></li>
                                <li class="breadcrumb-item active">Add Master</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header align-items-center d-flex">
                            <h4 class="mb-0 card-title flex-grow-1">Add Master</h4>
                            {{-- <div class="flex-shrink-0">
                                <div class="form-check form-switch form-switch-right form-switch-md">

                                </div>
                            </div> --}}
                        </div><!-- end card header -->
                        <div class="card-body">
                            <div class="live-preview">
                                <form action="{{route('createmaster')}}" method="POST">
                                 @csrf
                                <div class="row gy-4">
                                    <div class="col-xxl-3 col-md-6">
                                        <div>
                                            <label for="placeholderInput" class="form-label">Label</label>
                                            <input type="text" class="form-control" id="placeholderInput"
                                                placeholder="enter label" name="label">
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-md-6">
                                        <div>
                                            <label for="placeholderInput" class="form-label">Value</label>
                                            <input type="text" class="form-control" id="placeholderInput"
                                                placeholder="enter value" name="value">
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-md-6">
                                        <div class="p-1 mt-4">
                                            <button type="submit" class="btn btn-success waves-effect waves-light">Add</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        @if ($message = Session::get('success'))
                            <div class="text-center border-0 alert alert-success" role="alert" id="successAlert">
                                <strong>{{ $message }}</strong>
                            </div>
                        @endif
                        @if ($message = Session::get('failure'))
                            <div class="text-center border-0 alert alert-danger" role="alert" id="dangerAlert">
                                <strong>{{ $message }}</strong>
                            </div>
                        @endif
                        <div class="card-body">
                            <table class="table table-nowrap">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Label</th>
                                        <th scope="col">Value</th>
                                        <th scope="col">Type</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($masterdata as $index => $row)
                                    <tr>
                                        <th scope="row" class="fw-semibold">{{ $index + 1 }}</th>
                                        <td>{{$row->label}}</td>
                                        <td>{{$row->value}}</td>
                                        <td>{{$row->type}}</td>
                                        <td>{{$row->status}}</td>
                                        <td><a href="/deletemastercat/{{$row->id}}/masterpage"><button class="btn btn-outline-danger btn-sm">delete</button></a></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        setTimeout(function(){
            $('#successAlert').fadeOut('slow');
        }, 2000);

        setTimeout(function(){
            $('#dangerAlert').fadeOut('slow');
        }, 2000);
    </script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</x-app-layout>
