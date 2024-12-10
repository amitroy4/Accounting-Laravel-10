@extends('layouts.admin')
@section('title','Dashboard')
@section('content')
<div class="container">
    <div class="page-inner">
        <!--Page Header TOP-->
        <div class="page-header">
            <h3 class="page-title-top">Company List</h3>
            <ul class="breadcrumbs">
                <li class="nav-home">
                    <a href="dashboard.php">
                        <i class="icon-home"></i>
                    </a>
                </li>
                <li class="separator">
                    <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                    <a href="#">Configure</a>
                </li>
                <li class="separator">
                    <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                    <a href="#">Company List</a>
                </li>
            </ul>
        </div>
        <!--Page Header TOP-->
        <!--Company Add Form-->
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <!--Double Part Card Header-->
                    <div class="card-header">
                        <div class="c-h-double">
                            <div class="row">
                                <div class="col-md-6 c-h-separator-r">
                                    <h4 class="custom-c-h-main-title"><span class="c-h-icon"><i
                                                class="fas fa-compress"></i></span>Company List</h4>
                                </div>
                                <div class="col-md-6 d-flex justify-content-end">
                                    <a href="{{route('company.create')}}" class="btn btn-primary btn-round">
                                        <i class="fa fa-plus"></i>
                                        Add Company
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Double Part Card Header-->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card custom-c-bg1">
                                    <div class="card-header custom-c-h-bg1">
                                        <h4 class="custom-c-h-title">Company List</h4>
                                    </div>
                                    <div class="card-body">

                                        <div class="table-responsive">
                                            <div id="add-row_wrapper"
                                                class="dataTables_wrapper container-fluid dt-bootstrap4">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <table id="add-row"
                                                            class="display table table-striped table-hover dataTable"
                                                            role="grid" aria-describedby="add-row_info">
                                                            <thead>
                                                                <tr role="row">
                                                                    <th class="sorting_asc" tabindex="0"
                                                                        aria-controls="add-row" rowspan="1" colspan="1"
                                                                        style="width: 50px;" aria-sort="ascending"
                                                                        aria-label="Name: activate to sort column descending">
                                                                        SL</th>
                                                                    <th class="sorting_asc" tabindex="0"
                                                                        aria-controls="add-row" rowspan="1" colspan="1"
                                                                        style="width: 373.033px;" aria-sort="ascending"
                                                                        aria-label="Name: activate to sort column descending">
                                                                        Company</th>
                                                                    <th class="sorting" tabindex="0"
                                                                        aria-controls="add-row" rowspan="1" colspan="1"
                                                                        style="width: 534.283px;"
                                                                        aria-label="Position: activate to sort column ascending">
                                                                        Short Name</th>
                                                                    <th class="sorting" tabindex="0"
                                                                        aria-controls="add-row" rowspan="1" colspan="1"
                                                                        style="width: 308.967px;"
                                                                        aria-label="Office: activate to sort column ascending">
                                                                        Address</th>
                                                                    <th class="sorting" tabindex="0"
                                                                        aria-controls="add-row" rowspan="1" colspan="1"
                                                                        style="width: 308.967px;"
                                                                        aria-label="Office: activate to sort column ascending">
                                                                        Status</th>
                                                                    <th style="width: 120.717px;" class="sorting"
                                                                        tabindex="0" aria-controls="add-row" rowspan="1"
                                                                        colspan="1"
                                                                        aria-label="Action: activate to sort column ascending">
                                                                        Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($companies as $key=>$company)
                                                                <tr role="row" class="odd">
                                                                    <td>{{$key+1}}</td>
                                                                    <td class=" d-flex align-items-center">
                                                                        <img src="{{ asset('storage/' . $company->company_logo) }}" alt="{{ $company->company_name }}" width="100">
                                                                        <div class=" ps-4">
                                                                            <b>{{$company->company_name}}</b> <br>
                                                                           {{$company->company_code}}
                                                                        </div>
                                                                    </td>
                                                                    <td>{{$company->company_short_name}}</td>
                                                                    <td>{{$company->company_address}},{{$company->company_district}}, {{$company->company_zip_code}}</td>
                                                                    <td>
                                                                        @if ($company->status==1)
                                                                        <a class="badge bg-success text-light round" href="{{route('company.activeordeactive',$company->id)}}">
                                                                            Active
                                                                        </a>
                                                                        @else
                                                                        <a class="badge bg-danger text-light round" href="{{route('company.activeordeactive',$company->id)}}">
                                                                            Inactive
                                                                        </a>
                                                                        @endif

                                                                    </td>
                                                                    <td>
                                                                        <div class="form-button-action">
                                                                            <a href="{{route('company.edit',$company->id)}}"
                                                                                data-bs-toggle="tooltip" title=""
                                                                                class="btn btn-link btn-primary "
                                                                                data-original-title="Edit Task">
                                                                                <i class="fas fa-edit"></i>
                                                                            </a>
                                                                            <!-- Delete Button -->
                                                                            <a href="#"
                                                                                class="btn btn-link btn-danger delete-btn"
                                                                                data-form-id="delete-form-{{ $company->id }}"
                                                                                data-bs-toggle="tooltip"
                                                                                title="Remove">
                                                                                <i class="fas fa-times"></i>
                                                                            </a>


                                                                        </div>
                                                                        <!-- Delete Form -->
                                                                        <form id="delete-form-{{ $company->id }}"
                                                                            action="{{ route('company.destroy', $company->id) }}"
                                                                            method="POST"
                                                                            style="display: none;">
                                                                            @csrf
                                                                            @method('DELETE')
                                                                        </form>
                                                                    </td>
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Company Add Form-->
    </div>
</div>
@endsection
@push('script')
<script>
    $(document).ready(function () {
        // Attach click event to delete buttons
        $('.delete-btn').on('click', function (e) {
            e.preventDefault();

            const formId = $(this).data('form-id');
            const form = $('#' + formId);

            swal({
                title: "Are you sure?",
                text: "You will not be able to recover this data!",
                icon: "warning",
                buttons: ["Cancel", "Yes, delete it!"],
                dangerMode: true,
            }).then((willDelete) => {
                if (willDelete) {
                    form.submit();
                    swal("Deleted!", "The record has been deleted.", "success");
                } else {
                    swal("Your data is safe!");
                }
            });
        });
    });
</script>
@endpush
