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
                    <a href="/">
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
                                                                    <th class="sorting_asc" tabindex="0"
                                                                        aria-controls="add-row" rowspan="1" colspan="1"
                                                                        style="width: 373.033px;" aria-sort="ascending"
                                                                        aria-label="Name: activate to sort column descending">
                                                                        Brands</th>
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
                                                                        <img src="{{ asset('storage/' . $company->company_logo) }}" alt="Company_logo" width="100">
                                                                        <div class=" ps-4">
                                                                            <b>{{$company->company_name}}</b> <br>
                                                                           {{$company->company_code}}
                                                                        </div>
                                                                    </td>
                                                                    <td>{{$company->company_short_name}}</td>
                                                                    <td>
                                                                        @foreach ($company->branches as $branch)
                                                                            <p>
                                                                                {{ $branch->branch_name }}
                                                                                <a href="#" class="text-danger ml-10 branchRemove" data-company-id="{{ $company->id }}">
                                                                                    <i class="fa fa-times text-danger"></i>
                                                                                </a>

                                                                                {{-- Hidden form for removing the branch --}}
                                                                                <form action="{{ route('company.branch.remove', ['company_id' => $company->id, 'branch_id' => $branch->id]) }}"
                                                                                      method="POST"
                                                                                      class="d-none branchRemoveForm_{{ $company->id }}">
                                                                                    @csrf
                                                                                    @method('DELETE')

                                                                                </form>
                                                                            </p>
                                                                        @endforeach
                                                                    </td>
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
                                                                            <a href="#" data-company-id="{{$company->id}}"
                                                                                class="btn btn-link btn-info company-branches"
                                                                                data-bs-toggle="modal"
                                                                                data-bs-target="#modal-form">
                                                                                <i class="fas fa-plus"></i>
                                                                            </a>
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

 <!-- Modal form -->
 <div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-hidden="true"  >
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
        <div class="modal-content">
            <div class="modal-body p-0">
                <div class="card mb-0">
                    <div class="card-header text-left">
                        <h3 class="fw-bolder text-info">Branch Assign</h3>
                    </div>
                    <form action="{{route('company.branch')}}" method="POST" >
                        @csrf
                        @method('POST')
                        <div class="card-body">
                            <div class="select2-input">
                                <input type="hidden" id="company_id" name="company_id">
                                <label class="form-label" for="branch_id">Select Branchs</label>
                                <select name="branch_id[]" id="branch_id" class="form-select select2" multiple>
                                    @foreach ($branches as $branch)
                                    <option value="{{ $branch->id }}">{{ $branch->branch_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="text-end">
                                <button
                                    type="submit"
                                    class="btn btn-round btn-info mt-4 mb-0" >
                                    Save
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('script')
<script>
    $(document).ready(function () {
        $('.select2').select2({
            theme: "bootstrap",
            placeholder: "Select Branches",
            allowClear: true
        });

        $(document).on('click', '.company-branches', function (e) {
            e.preventDefault();
            // Get the company ID from the button
            const companyId = $(this).data('company-id');
            $('#company_id').val(companyId);

        });

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

        $(document).on('click', '.branchRemove', function (e) {
            e.preventDefault(); // Prevent default action

            let companyId = $(this).data('company-id');
            // Find the corresponding form
            const form = $('branchRemoveForm_' + companyId);
            console.log(form);
            // form.submit();
            // Confirmation alert using SweetAlert
            swal({
                title: "Are you sure?",
                text: "This branch will be unassigned from the company.",
                icon: "warning",
                buttons: ["Cancel", "Yes, unassign it!"],
                dangerMode: true,
            }).then((willDelete) => {
                if (willDelete) {
                    form.submit(); // Submit the form
                } else {
                    swal("No changes made.", "The branch was not unassigned.", "info");
                }
            });
        });

    });
</script>
@endpush
