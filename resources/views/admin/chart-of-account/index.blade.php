@extends('layouts.admin')
@section('title','Master COA')
@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
<style>

    .tree,
    .tree ul {
        list-style-type: none;
        padding-left: 2rem;
    }

    .tree li {
        position: relative;
        padding: 0.5rem 0;
    }

    .tree li::before {
        content: "";
        position: absolute;
        top: 0;
        left: -1rem;
        border-left: 1px solid #ccc;
        height: 100%;
        width: 1px;
    }

    .tree li::after {
        content: "";
        position: absolute;
        top: 1.25rem;
        left: -1rem;
        border-top: 1px solid #ccc;
        width: 1rem;
    }

    .tree li:last-child::before {
        height: 1.25rem;
    }

    .tree .toggle {
        cursor: pointer;
    }

    .tree .collapsed ul {
        display: none;
    }
    .disabled {
        pointer-events: none;
        cursor: not-allowed; /* Optional: changes the cursor to indicate it's disabled */

    }
</style>
<div class="container">
   <div class="page-inner">

      <!--Page Header TOP-->
      <div class="page-header">
         <h3 class="page-title-top">Chart of Accounts</h3>
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
               <a href="#">Chart of Accounts</a>
            </li>
         </ul>
      </div>
      <!--Page Header TOP-->

      <!--Chart of Accounts Start-->
      <div class="row">
         <!--Create or Update Chart of Accounts-->
         <div class="col-md-7">
            <div class="card">
               <div class="card-header">
                  <ul class="nav nav-pills nav-secondary  nav-pills-no-bd nav-pills-icons justify-content-center" id="pills-tab-with-icon" role="tablist">
                     <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="pills-home-tab-icon" data-bs-toggle="pill" href="#pills-home-icon" role="tab" aria-controls="pills-home-icon" aria-selected="true">
                        <i class="fas fa-edit"></i>
                        Create Cart of Accounts
                        </a>
                     </li>
                     <li class="nav-item" role="presentation">
                        <a @disabled(true) class="nav-link" id="pills-contact-tab-icon" data-bs-toggle="pill" href="#pills-contact-icon" role="tab" aria-controls="pills-contact-icon" aria-selected="false" tabindex="-1">
                        <i class="fas fa-file-import"></i>
                        Update Chart of Accounts
                        </a>
                     </li>
                  </ul>
               </div>
               <div class="card-body">
                  <div class="tab-content" id="pills-with-icon-tabContent">
                        <div class="tab-pane fade show active" id="pills-home-icon" role="tabpanel" aria-labelledby="pills-home-tab-icon">
                            <div class="card custom-card-bg-1">
                                <div class="card-header create-bg-1">
                                    <h4 class="custom-card-title">Create Chart of Accounts </h4>
                                </div>
                                <div class="card-body">
                                    <form action="{{route('chart-of-accounts.store')}}" method="post">
                                        @csrf
                                        @method('POST')
                                        <!--Create Chart of Accounts Form  -->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="defaultSelect">Company</label>
                                                    <select class="form-select form-control select2" id="select2" name="company_id">
                                                        <option value="">Select Company</option>
                                                        @foreach ($companies as $company)
                                                        <option value="{{$company->id}}">{{$company->company_name}}</option>
                                                        @endforeach
                                                    </select>
                                                    @error('company_id')
                                                    <span class="text-danger">{{$message}}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="project-select-2">Project</label>
                                                    <select class="form-select form-control select2" id="project-select-2" name="project_id">
                                                        <option value="">Select Project</option>
                                                        @foreach ($projects as $project)
                                                        <option value="{{$project->id}}">{{$project->project_name}}</option>
                                                        @endforeach
                                                    </select>
                                                    @error('project_id')
                                                    <span class="text-danger">{{$message}}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="largeInput">Ledger Head Name</label>
                                                    <input type="text" class="form-control" id="defaultInput" placeholder="Ledger Head Name" name="account_name">
                                                    @error('account_name')
                                                    <span class="text-danger">{{$message}}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="defaultSelect">Parent Account</label>
                                                    <select class="form-select form-control select2" id="coa-select2" name="parent_coa_id">
                                                        <option>Select Parent Chart Of Account</option>
                                                        @foreach ($parent_heads as $parent_head )
                                                            <option value="{{$parent_head->id}}">{{$parent_head->account_name}}</option>
                                                        @endforeach
                                                    </select>
                                                    @error('parent_coa_id')
                                                    <span class="text-danger">{{$message}}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="defaultSelect">Is Transaction Head</label>
                                                    <select class="form-select form-control" id="defaultSelect" name="has_leaf">
                                                        <option value="1">Yes</option>
                                                        <option value="0" selected>No</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Create Chart of Accounts Form-->
                                        <!--Submit & Cancel Button-->
                                        <div class="row">
                                            <div class="col-md-5 m-auto">
                                                <div class="button-custom-margin">
                                                    <div class="double-buttons">
                                                    <a class="cancel-btn" href="#"><i class="fas fa-reply"></i>Cancel</a>
                                                    <a class="submit-btn" href="#" id="submit-btn">Create<i class="fas fa-edit ml-4"></i></a>
                                                    <span class="or">or</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Submit & Cancel Button-->
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-contact-icon" role="tabpanel" aria-labelledby="pills-contact-tab-icon">
                            <div class="card custom-card-bg-1">
                                <div class="card-header update-bg-1">
                                    <h4 class="custom-card-title">Update Chart of Accounts </h4>
                                </div>
                                <form id="updateformSubmit" >
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                    <input type="hidden" name="account_id" id="account_id">
                                    <!--Create Chart of Accounts Form  -->
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="company_id">Company</label>
                                                <select class="form-select form-control select2" id="company_id" name="company_id">
                                                    <option value="">Select Company</option>
                                                    @foreach ($companies as $company)
                                                    <option value="{{$company->id}}">{{$company->company_name}}</option>
                                                    @endforeach
                                                </select>
                                                @error('company_id')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                            <label for="project_id">Project</label>
                                            <select class="form-select form-control select2" id="project_id" name="project_id">
                                                <option value="">Select Project</option>
                                                @foreach ($projects as $project)
                                                <option value="{{$project->id}}">{{$project->project_name}}</option>
                                                @endforeach
                                            </select>
                                            @error('project_id')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="account_name">Ledger Head Name</label>
                                                <input type="text" class="form-control" id="account_name" name="account_name" placeholder="Ledger Head Name">
                                            </div>
                                            @error('account_name')
                                            <span class="text-danger">{{$message}}</span>

                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="parent_coa_id">Parent Account</label>
                                                <select class="form-select form-control select2" id="parent_coa_id" name="parent_coa_id">
                                                    <option value="">Select Parent Chart Of Account</option>
                                                    @foreach ($parent_heads as $parent_head )
                                                    <option value="{{$parent_head->id}}">{{$parent_head->account_name}}</option>
                                                    @endforeach
                                                </select>
                                                @error('parent_coa_id')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="has_leaf">Is Transaction Head</label>
                                                <select class="form-select form-control" id="has_leaf" name="has_leaf">
                                                    <option value="1">Yes</option>
                                                    <option value="0" selected>No</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Create Chart of Accounts Form-->
                                    <!--Submit & Cancel Button-->
                                    <div class="row">
                                        <div class="col-md-5 m-auto">
                                            <div class="button-custom-margin">
                                                <div class="double-buttons">
                                                    <a class="delete-btn" href="#"><i class="fas fa-trash"></i>Delete</a>
                                                    <a class="update-btn" id="update-btn" href="#">Update<i class="fas fa-retweet"></i></a>
                                                    <span class="or">or</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <!--Submit & Cancel Button-->
                                </div>
                                </form>
                            </div>
                        </div>
                  </div>
               </div>
            </div>
         </div>
         <!--Create or Update Chart of Accounts-->

         <!--Master Chart of Accounts-->
         <div class="col-md-5">
            <div class="card">
               <div class="card-header">
                  <div class="text-center">
                     <h4 class="custom-card-title">Chart of Accounts </h4>
                  </div>
               </div>
               <div class="card-body">
                    <ul class="tree">
                        @foreach ($chart_of_accounts as $account)
                            <li>
                                @if ($account->child_account->count())
                                    <span class="toggle"><i class="bi bi-chevron-right"></i></span>
                                @endif
                                @php
                                // Define the root account names
                                $rootAccounts = ['Asset', 'Liability', 'Income', 'Expense'];
                                $isRootAccount = in_array($account->account_name, $rootAccounts);
                            @endphp

                            <!-- Disable the <a> tag for root accounts -->
                            <a href="#"
                               class="coa-header {{ $isRootAccount ? 'disabled' : '' }}"
                               data-account-id="{{ $account->id }}"
                               @if($isRootAccount) style="pointer-events: none; " @endif>
                                {{ $account->account_name }}
                            </a>
                                {{-- <a href="#" class="coa-header" data-account-id="{{$account->id}}">{{ $account->account_name }}</a> --}}

                                @if ($account->child_account->count())
                                    <ul>
                                        @include('admin.chart-of-account.partials.tree', ['accounts' => $account->child_account])
                                    </ul>
                                @endif
                            </li>
                        @endforeach
                    </ul>

               </div>
            </div>
         </div>
         <!--Master Chart of Accounts-->

      </div>
      <!--Chart of Accounts End-->
    </div>
</div>
@endsection
@push('script')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const toggles = document.querySelectorAll('.toggle');
        toggles.forEach(toggle => {
            toggle.addEventListener('click', function() {
                const parentLi = this.closest('li');
                parentLi.classList.toggle('collapsed');
                const icon = this.querySelector('i');
                icon.classList.toggle('bi-chevron-right');
                icon.classList.toggle('bi-chevron-down');
            });
        });
    });

    $('.select2').select2({
        theme: "bootstrap"
    });
    $('#submit-btn').on('click', function(e){
        e.preventDefault();
        var form = $(this).closest('form');
        form.submit();

    });

    $('.coa-header').on('click', function(e){
        e.preventDefault();

        var accountId = $(this).data('account-id');
        console.log(accountId);
        $('#pills-home-tab-icon').removeClass('active');
        $('#pills-contact-tab-icon').addClass('active');

        $('#pills-home-icon').removeClass('show active');
        $('#pills-contact-icon').addClass('tab-pane fade show active');

        $.ajax({
            url: `/chart-of-accounts/${accountId}/edit`, // Endpoint to get chart of account data
            method: 'GET',
            // dataType: 'json',
            success: function (response) {
                // console.log('Chart of Account Data:', response);

                // Populate the form fields with the data
                $('#account_id').val(response.id);
                $('#company_id').val(response.company_id).trigger('change'); // Populate and trigger select2 change event
                $('#project_id').val(response.project_id).trigger('change');
                $('#account_name').val(response.account_name);
                if(response.parent_coa_id != null){
                    $('#parent_coa_id').val(response.parent_coa_id).trigger('change');
                }
                $('#has_leaf').val(response.has_leaf);
                $('.delete-btn').attr('data-account-id', response.id);

            },
            error: function (xhr, status, error) {
                console.error('Error fetching chart of account data:', error);
                alert('Failed to fetch chart of account data. Please try again.');
            }
        });

    });

    $('#update-btn').on('click', function(e){
        e.preventDefault();
        var form = $(this).closest('form');
        form.submit();

    });

    $('#updateformSubmit').on('submit', function(e){
        e.preventDefault();

        var accountId = $('#account_id').val();
        var formData = new FormData(this);

        $.ajax({
            url: `/chart-of-accounts/${accountId}`,
            method: 'POST', // Use POST with '_method' for PUT
            data: formData,
            processData: false, // Required for FormData
            contentType: false, // Required for FormData
            success: function (response) {
                location.reload();

            },
            error: function (xhr, status, error) {
                console.error('Update Error:', error);
                $.notify({
                    // Options
                    message: status.message
                }, {
                    // Settings
                    type: 'danger',
                    delay: 3000,
                    allow_dismiss: true,
                    placement: {
                        from: "top",
                        align: "right"
                    }
                });
                alert('Failed to update Chart of Account.');
            }
        });

    });

    $('.delete-btn').on('click', function(e){
        e.preventDefault();
        const accountId = $(this).data('account-id');

        swal({
            title: "Are you sure?",
            text: "You will not be able to recover this data!",
            icon: "warning",
            buttons: ["Cancel", "Yes, delete it!"],
            dangerMode: true,
        }).then((willDelete) => {
            if (willDelete) {
                // Make the AJAX request to delete the account
                $.ajax({
                    url: `/chart-of-accounts/${accountId}`,
                    method: 'DELETE',
                    data: {
                        _token: $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function (response) {
                        swal("Deleted!", response.message, "success")
                            .then(() => {
                                location.reload();
                            });
                    },
                    error: function (xhr, status, error) {
                        try {
                            var response = JSON.parse(xhr.responseText); // Parse response as JSON
                            errorMessage = response.message || 'Failed to delete the record. Please try again.';
                        } catch (e) {
                            errorMessage = 'An unexpected error occurred. Please try again.';
                        }

                        // Show the error message using SweetAlert
                        swal("Error!", errorMessage, "error");
                    }
                });
            } else {
                swal("Your data is safe!");
            }
        });

    });

    $(document).ready(function () {
        $('#company-select').on('change', function () {
            const companyId = $(this).val();
            const projectSelect = $('#project-select');

            // Clear the project dropdown
            projectSelect.empty();
            projectSelect.append('<option value="">Select Project</option>');

            if (companyId) {
                // Make AJAX call to fetch projects
                $.ajax({
                    url: `/get-projects/${companyId}`,
                    type: 'GET',
                    success: function (projects) {
                        projects.forEach(function (project) {
                            projectSelect.append(`<option value="${project.id}">${project.project_name}</option>`);
                        });
                    },
                    error: function (xhr) {
                        console.error('Error fetching projects:', xhr.responseText);
                    }
                });
            }
        });
    });


</script>
@endpush


