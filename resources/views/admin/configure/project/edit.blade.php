@extends('layouts.admin')
@section('title','Dashboard')
@section('content')
<div class="container">
    <div class="page-inner">
        <!--Page Header TOP-->
        <div class="page-header">
            <h3 class="page-title-top">Edit Project</h3>
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
                    <a href="#">Edit Project</a>
                </li>
            </ul>
        </div>
        <!--Page Header TOP-->
        <!--Project Add Form-->
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <!--Double Part Card Header-->
                    <div class="card-header">
                        <div class="c-h-double">
                            <div class="row">
                                <div class="col-md-5 c-h-separator-r">
                                    <h4 class="custom-c-h-main-title"><span class="c-h-icon"><i
                                                class="fas fa-compress"></i></span>Edit Project</h4>
                                </div>
                                <div class="col-md-5">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Double Part Card Header-->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <form action="{{route('project.update',$project->id)}}" id="projectForm" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="card custom-c-bg1">
                                        <div class="card-header custom-c-h-bg1">
                                            <h4 class="custom-c-h-title">Project Information</h4>
                                        </div>
                                        <div class="card-body custom-c-b-padding">
                                            <!--1st Row -->
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group custom-padding">
                                                        <label for="project_name">Project Name<span
                                                                class=" text-danger">*</span></label>
                                                        <input type="text" class="form-control form-control"
                                                            id="project_name" name="project_name"
                                                            placeholder="Project Name"
                                                            value="{{$project->project_name}}" required>
                                                        @error('project_name')
                                                        <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group custom-padding">
                                                        <label for="project_short_name">Project Short Name</label>
                                                        <input type="text" class="form-control form-control"
                                                            id="project_short_name" name="project_short_name"
                                                            placeholder="Project Short Name"
                                                            value="{{$project->project_short_name}}">
                                                        @error('project_short_name')
                                                        <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group custom-padding">
                                                        <label for="project_code">Project Code</label>
                                                        <input type="text" class="form-control form-control"
                                                            id="project_code" name="project_code"
                                                            placeholder="Project Code"
                                                            value="{{$project->project_code}}" readonly>
                                                        @error('project_code')
                                                        <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group custom-padding">
                                                        <label for="parent_project">Parent Project</label>
                                                        <select class="form-select form-control" id="parent_project"
                                                            name="parent_project_id">
                                                            <option value="">Select</option>
                                                            @foreach ($projects as $parentProject)
                                                            <option value="{{ $parentProject->id }}"
                                                                {{ $project->parent_project_id == $parentProject->id ? 'selected' : '' }}>
                                                                {{ $parentProject->project_name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group custom-padding">
                                                        <label for="project_area">Project Area / Address</label>
                                                        <input type="text" class="form-control form-control"
                                                            id="project_area" name="project_area"
                                                            placeholder="Project Area / Address"
                                                            value="{{$project->project_area}}">
                                                        @error('project_code')
                                                        <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group custom-padding">
                                                        <label for="project_category">Project Category</label>
                                                        <select class="form-select form-control" id="project_category"
                                                            name="project_category">
                                                            @foreach ($project_categories as $project_category)
                                                            <option value="{{ $project_category->id }}"
                                                                {{ $project->project_category == $project_category->id ? 'selected' : '' }}>
                                                                {{ $project_category->project_category_name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group custom-padding">
                                                        <label for="project_budget">Project Budget</label>
                                                        <input type="number" class="form-control form-control"
                                                            id="project_budget" name="project_budget"
                                                            placeholder="Project Budget" min="0"
                                                            value="{{$project->project_budget}}">
                                                        @error('project_budget')
                                                        <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group custom-padding">
                                                        <label for="currency_type">Currency Type</label>
                                                        <select class="form-select form-control" id="currency_type"
                                                            name="currency_type">
                                                            @foreach ($currency_types as $currency_type)
                                                            <option value="{{ $currency_type->id }}"
                                                                {{ $project->currency_type == $currency_type->id ? 'selected' : '' }}>
                                                                {{ $currency_type->currency_name }}
                                                                ({{ $currency_type->currency_short_name }})</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group custom-padding">
                                                        <label for="is_core">Is Core Project?</label>
                                                        <select class="form-select form-control" id="is_core"
                                                            name="is_core">
                                                            <option value="1"
                                                                {{ $project->is_core == 1 ? 'selected' : '' }}>Yes
                                                            </option>
                                                            <option value="0"
                                                                {{ $project->is_core == 0 ? 'selected' : '' }}>No
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group custom-padding">
                                                        <label>Project Start Date</label>
                                                        <div class="input-group">
                                                            <input type="date" class="form-control"
                                                                id="project_start_date" name="project_start_date"
                                                                value="{{$project->project_start_date}}">
                                                            <span class="input-group-text">
                                                                <i class="fa fa-calendar-check"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 is-core-no" style="display: none;">
                                                    <div class="form-group custom-padding">
                                                        <label>Project End Date</label>
                                                        <div class="input-group">
                                                            <input type="date" class="form-control"
                                                                id="project_end_date" name="project_end_date"
                                                                value="{{$project->project_end_date}}">
                                                            <span class="input-group-text">
                                                                <i class="fa fa-calendar-check"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 is-core-no" style="display: none;">
                                                    <div class="form-group custom-padding">
                                                        <label for="approval_type">Approval Type</label>
                                                        <select class="form-select form-control" id="approval_type"
                                                            name="approval_type">
                                                            <option value="">Select</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 is-core-no" style="display: none;">
                                                    <div class="form-group custom-padding">
                                                        <label for="project_approval_authority">Project Approval
                                                            Authority</label>
                                                        <input type="text" class="form-control form-control"
                                                            id="project_approval_authority"
                                                            name="project_approval_authority"
                                                            placeholder="Project Approval Authority"
                                                            value="{{$project->project_approval_authority}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-4 is-core-no" style="display: none;">
                                                    <div class="form-group custom-padding">
                                                        <label for="approval_reference_number">Approval Reference
                                                            Number</label>
                                                        <input type="text" class="form-control form-control"
                                                            id="approval_reference_number"
                                                            name="approval_reference_number"
                                                            placeholder="Approval Reference Number"
                                                            value="{{$project->approval_reference_number}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-4 is-core-no" style="display: none;">
                                                    <div class="form-group custom-padding">
                                                        <label for="approval_date">Approval Date</label>
                                                        <input type="date" class="form-control form-control"
                                                            id="approval_date" name="approval_date"
                                                            placeholder="Approval Date"
                                                            value="{{$project->approval_date}}">
                                                    </div>
                                                </div>

                                                <style>
                                                    #preview-container {
                                                        display: flex;
                                                        flex-wrap: wrap;
                                                        gap: 10px;
                                                    }

                                                    .remove-btn {
                                                        cursor: pointer;
                                                        z-index: 10;
                                                    }

                                                </style>
                                                <div class="col-md-4 is-core-no" style="display: none;">

                                                    <div id="preview-container" class="row">
                                                        @foreach ($documents as $document)
                                                        <div class="col-md-3 text-center position-relative">
                                                            @php
                                                            // Extract file extension from the file path
                                                            $fileExtension = pathinfo($document->file_path,
                                                            PATHINFO_EXTENSION);
                                                            @endphp

                                                            @if (in_array(strtolower($fileExtension), ['jpg', 'jpeg',
                                                            'png', 'gif', 'bmp', 'tiff']))
                                                            <img src="{{ asset('storage/' . $document->file_path) }}"
                                                                class="img-thumbnail"
                                                                style="max-width: 120px; max-height: 120px; margin-right:10px;">
                                                            @elseif (strtolower($fileExtension) === 'pdf')
                                                            <embed src="{{ asset('storage/' . $document->file_path) }}"
                                                                type="application/pdf" class="border"
                                                                style="width: 120px; height: 120px;">
                                                            @else
                                                            {{-- You can handle other file types here --}}
                                                            <div class="alert alert-secondary p-2"
                                                                style="width: 120px; height: 120px; display: flex; align-items: center; justify-content: center;">
                                                                {{ basename($document->file_path) }}
                                                            </div>
                                                            @endif
                                                            <!-- Remove button -->
                                                            <button type="button"
                                                                class="btn btn-sm btn-danger remove-btn position-absolute top-0 end-0 m-1"
                                                                data-id="{{ $document->id }}"
                                                                onclick="confirmDelete(this)">&times;</button>
                                                        </div>
                                                        @endforeach

                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group custom-padding">
                                                        <label for="status">Status</label>
                                                        <select class="form-select form-control" id="status"
                                                            name="status">
                                                            <option value="1"
                                                                {{ $project->status == 1 ? 'selected' : '' }}>Yes
                                                            </option>
                                                            <option value="0"
                                                                {{ $project->status == 0 ? 'selected' : '' }}>No
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-header custom-c-h-bg1">
                                            <h4 class="custom-c-h-title">Funding Organization</h4>
                                        </div>
                                        <div class="card-body custom-c-b-padding">
                                            <div class="card-body custom-c-b-padding">
                                                <!-- Add button -->
                                                {{-- <div class="row mb-3">
                                                    <div class="col-md-12 text-end">
                                                        <button type="button" class="btn btn-primary" id="add-row-btn">+
                                                            Funding Organization</button>
                                                    </div>
                                                </div> --}}

                                                <!-- Rows Container -->
                                                @foreach ($project_fundings as $project_funding)
                                                    <div id="funding-rows-container">
                                                        <div class="row mt-3 align-items-center">
                                                            <div class="col-md-5">
                                                                <div class="form-group custom-padding">
                                                                    <label for="funding_organization_id">Funding Organization</label>
                                                                    <select class="form-select form-control" name="funding_organization_id[]" disabled>
                                                                        @foreach ($funding_organizations as $funding_organization)
                                                                            <option value="{{ $funding_organization->id }}"
                                                                                {{ $funding_organization->id == $project_funding->funding_organization_id ? 'selected' : '' }}>
                                                                                {{ $funding_organization->funding_organization_name }}
                                                                            </option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group custom-padding">
                                                                    <label for="funded_percentage">Funded Percentage</label>
                                                                    <input type="text" class="form-control funded-percentage" name="funded_percentage[]"
                                                                        value="{{ $project_funding->funded_percentage }}" placeholder="Funded Percentage" disabled>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group custom-padding">
                                                                    <label for="funded_amount">Funded Amount</label>
                                                                    <input type="text" class="form-control funded-amount" name="funded_amount[]"
                                                                        value="{{ $project_funding->funded_amount }}" placeholder="Funded Amount" disabled>
                                                                </div>
                                                            </div>
                                                            {{-- Uncomment this section if you want to enable row deletion --}}
                                                            {{-- <div class="col-md-1 text-end">
                                                                <button type="button" class="btn btn-danger btn-sm remove-row">
                                                                    <i class="fas fa-times"></i>
                                                                </button>
                                                            </div> --}}
                                                        </div>
                                                    </div>
                                                @endforeach



                                                <!-- Submit & Cancel Buttons -->
                                                <div class="row">
                                                    <div class="col-md-5 m-auto">
                                                        <div class="button-custom-margin">
                                                            <div class="double-buttons">
                                                                <a class="cancel-btn"
                                                                    href="{{route('project.index')}}">Cancel</a>
                                                                <a class="submit-btn" href="#">Submit</a>
                                                                <span class="or">or</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Project Add Form-->
    </div>
</div>
@endsection
@push('script')
<script>
    $(document).ready(function () {

        $('.submit-btn').on('click', function (e) {
            e.preventDefault(); // Prevent the default link behavior
            $('#projectForm').submit(); // Use the native submit method
        });

        $('#project_budget').on('input', function () {
            let value = $(this).val();
            if (value < 0) {
                $(this).val(0); // Set the value to 0 if it's negative
            }
        });

    });


    $(document).ready(function () {
        // Detect changes in the is_core dropdown
        $('#is_core').on('change', function () {
            const is_coreValue = $(this).val();

            if (is_coreValue === '1') {
                // Show the project date fields if "Yes" is selected
                $('.is-core-yes').show();
                $('.is-core-no').hide();
            } else {
                // Hide the project date fields if "No" is selected
                $('.is-core-yes').hide();
                $('.is-core-no').show();
            }
        });

        // Trigger change event on page load to handle default value
        $('#is_core').trigger('change');
    });


    // $(document).ready(function () {
    //     const totalAmount = $('#project_budget').val(); // Define your total amount here
    //     // Add Row Button Click Event
    //     $('#add-row-btn').click(function () {
    //         let newRow = `
    //         <div class="row mt-3 align-items-center">
    //             <div class="col-md-5">
    //                 <div class="form-group custom-padding">
    //                     <label for="funding_organization_id">Funding Organization</label>
    //                     <select class="form-select form-control" name="funding_organization_id[]">
    //                         @foreach ($funding_organizations as $funding_organization)
    //                         <option value="{{$funding_organization->id}}">
    //                             {{$funding_organization->funding_organization_name}}
    //                         </option>
    //                         @endforeach
    //                     </select>
    //                 </div>
    //             </div>
    //             <div class="col-md-3">
    //                 <div class="form-group custom-padding">
    //                     <label for="largeInput">Funded Percentage</label>
    //                     <input type="text" class="form-control funded-percentage" name="funded_percentage[]" placeholder="Funded Percentage">
    //                 </div>
    //             </div>
    //             <div class="col-md-3">
    //                 <div class="form-group custom-padding">
    //                     <label for="funded_amount">Funded Amount</label>
    //                     <input type="text" class="form-control funded-amount" name="funded_amount[]" placeholder="Funded Amount" readonly>
    //                 </div>
    //             </div>
    //             <div class="col-md-1 text-end">
    //                 <button type="button" class="btn btn-danger btn-sm remove-row">
    //                     <i class="fas fa-times"></i>
    //                 </button>
    //             </div>
    //         </div>`;
    //         $('#funding-rows-container').append(newRow);
    //     });

    //     // Keyup event for funded percentage
    //     $(document).on('keyup', '.funded-percentage', function () {
    //         let row = $(this).closest('.row'); // Find the current row
    //         let projectBudget = parseFloat($('#project_budget').val()) ||
    //         0; // Get the project budget (default to 0 if invalid)
    //         let percentage = parseFloat($(this).val()) ||
    //         0; // Get the funded percentage (default to 0 if invalid)

    //         // Calculate the total of all percentages currently entered
    //         let totalPercentage = 0;
    //         $('.funded-percentage').each(function () {
    //             totalPercentage += parseFloat($(this).val()) || 0;
    //         });

    //         // Calculate the remaining percentage that can be entered
    //         let remainingPercentage = 100 - totalPercentage + percentage;

    //         // If remaining percentage is less than the entered percentage, update the value
    //         if (remainingPercentage < 0) {
    //             percentage = percentage + remainingPercentage;
    //             $(this).val(percentage); // Update the input field
    //         }

    //         // Ensure the percentage is between 0 and the remaining percentage
    //         if (percentage > remainingPercentage) {
    //             percentage = remainingPercentage;
    //             $(this).val(percentage); // Update the input field
    //         } else if (percentage < 0) {
    //             percentage = 0;
    //             $(this).val(percentage); // Update the input field
    //         }

    //         let fundedAmount = (projectBudget * percentage) / 100; // Calculate the funded amount
    //         row.find('.funded-amount').val(fundedAmount.toFixed(2)); // Update the funded amount field

    //         let total = 0;
    //         let rowCount = 0;

    //         // Loop through all rows with .funded-percentage
    //         $('.funded-percentage').each(function () {
    //             let rowPercentage = parseFloat($(this).val()) ||
    //             0; // Get the percentage for each row
    //             // Ensure the percentage is between 0 and 100
    //             if (rowPercentage > 100) {
    //                 rowPercentage = 100;
    //                 $(this).val(rowPercentage); // Update the input field
    //             } else if (rowPercentage < 0) {
    //                 rowPercentage = 0;
    //                 $(this).val(rowPercentage); // Update the input field
    //             }
    //             total += rowPercentage; // Add to the total percentage
    //             rowCount++;
    //         });

    //         // Display the total or average percentage wherever needed
    //         if (total.toFixed(2) < 100) {
    //             $('.submit-btn').hide();
    //             $('.or').hide();
    //             $('#add-row-btn').show();
    //         } else {
    //             $('#add-row-btn').hide();
    //             $('.submit-btn').show();
    //             $('.or').show();
    //         }
    //     });

    //     // Remove Row Button Click Event
    //     $(document).on('click', '.remove-row', function () {
    //         $(this).closest('.row').remove(); // Remove the closest row
    //     });
    // });


    function confirmDelete(button) {
        var documentId = $(button).data('id'); // Get the document ID

        swal({
            title: "Are you sure?",
            text: "You will not be able to recover this data!",
            icon: "warning",
            buttons: ["Cancel", "Yes, delete it!"],
            dangerMode: true,
        }).then((willDelete) => {
            if (willDelete) {
                $.ajax({
                    url: '{{ url("/dashboard/project/files/delete") }}/' + documentId,
                    type: 'DELETE', // Use DELETE method here
                    data: {
                        _token: '{{ csrf_token() }}', // CSRF token for security
                    },
                    success: function (response) {
                        location.reload();
                    },
                    error: function (xhr, status, error) {
                        // Handle errors
                        alert('An error occurred while deleting the file.');
                    }
                });
                swal("Deleted!", "Project Approval File has been deleted.", "success");
            } else {
                swal("Your data is safe!");
            }
        });
    }

</script>
@endpush
