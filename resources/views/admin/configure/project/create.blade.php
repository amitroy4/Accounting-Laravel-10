@extends('layouts.admin')
@section('title','Dashboard')
@section('content')
<div class="container">
    <div class="page-inner">
        <!--Page Header TOP-->
        <div class="page-header">
            <h3 class="page-title-top">Add new Project</h3>
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
                    <a href="#">Add new Project</a>
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
                                                class="fas fa-compress"></i></span>Create New Project</h4>
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
                                <div class="card custom-c-bg1">
                                    <div class="card-header custom-c-h-bg1">
                                        <h4 class="custom-c-h-title">Project Information</h4>
                                    </div>
                                    <div class="card-body custom-c-b-padding">
                                        <!--1st Row -->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group custom-padding">
                                                    <label for="project_name">Project Name</label>
                                                    <input type="text" class="form-control form-control"
                                                        id="project_name" name="project_name"
                                                        placeholder="Project Name">
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
                                                        placeholder="Project Short Name">
                                                    @error('project_short_name')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group custom-padding">
                                                    <label for="project_code">Project Code</label>
                                                    <input type="text" class="form-control form-control"
                                                        id="project_code" name="project_code" placeholder="Project Code"
                                                        readonly>
                                                    @error('project_code')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group custom-padding">
                                                    <label for="defaultSelect">Parent Project</label>
                                                    <select class="form-select form-control" id="defaultSelect">
                                                        <option>Project-1</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group custom-padding">
                                                    <label for="project_area">Project Area / Address</label>
                                                    <input type="text" class="form-control form-control"
                                                        id="project_area" name="project_area"
                                                        placeholder="Project Area / Address">
                                                    @error('project_code')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group custom-padding">
                                                    <label for="project_category">Project Category</label>
                                                    <select class="form-select form-control" id="project_category">
                                                        @foreach ($project_categories as $project_category)
                                                        <option value="{{$project_category->id}}">
                                                            {{$project_category->project_category_name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group custom-padding">
                                                    <label for="project_budget">Project Budget</label>
                                                    <input type="number" class="form-control form-control"
                                                        id="project_budget" name="project_budget"
                                                        placeholder="Project Budget">
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
                                                        <option value="{{$currency_type->id}}">
                                                            {{$currency_type->currency_name}}
                                                            ({{$currency_type->currency_short_name}})</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group custom-padding">
                                                    <label for="is_core">Is Core Project?</label>
                                                    <select class="form-select form-control" id="is_core"
                                                        name="is_core">
                                                        <option value="1">Yes</option>
                                                        <option value="0">No</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4 is-core-yes" style="display: none;">
                                                <div class="form-group custom-padding ">
                                                    <label>Start Date</label>
                                                    <div class="input-group">
                                                        <input type="date" class="form-control" id="start_date"
                                                            name="start_date">
                                                        <span class="input-group-text">
                                                            <i class="fa fa-calendar-check"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 is-core-yes" style="display: none;">
                                                <div class="form-group custom-padding">
                                                    <label for="status">Status</label>
                                                    <select class="form-select form-control" id="status" name="status">
                                                        <option value="1">Yes</option>
                                                        <option value="0">No</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4 is-core-no" style="display: none;">
                                                <div class="form-group custom-padding">
                                                    <label>Project Start Date</label>
                                                    <div class="input-group">
                                                        <input type="date" class="form-control" id="project_start_date"
                                                            name="project_start_date">
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
                                                        <input type="date" class="form-control" id="project_end_date"
                                                            name="project_end_date">
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
                                                        placeholder="Project Approval Authority">
                                                </div>
                                            </div>
                                            <div class="col-md-4 is-core-no" style="display: none;">
                                                <div class="form-group custom-padding">
                                                    <label for="approval_reference_number">Approval Reference
                                                        Number</label>
                                                    <input type="text" class="form-control form-control"
                                                        id="approval_reference_number" name="approval_reference_number"
                                                        placeholder="Approval Reference Number">
                                                </div>
                                            </div>
                                            <div class="col-md-4 is-core-no" style="display: none;">
                                                <div class="form-group custom-padding">
                                                    <label for="approval_date">Approval Date</label>
                                                    <input type="date" class="form-control form-control"
                                                        id="approval_date" name="approval_date"
                                                        placeholder="Approval Date">
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
                                                <div class="form-group custom-padding">
                                                    <label for="project_documents" class="form-label">Project Documents</label>
                                                    <input
                                                        type="file"
                                                        class="form-control"
                                                        id="project_documents"
                                                        name="project_documents[]"
                                                        placeholder="Project Documents"
                                                        multiple>
                                                </div>
                                                <div id="preview-container" class="mt-3 row g-3">
                                                    <!-- Previews will be displayed here -->
                                                </div>
                                            </div>
                                            <div class="col-md-4 is-core-no" style="display: none;">
                                                <div class="form-group custom-padding">
                                                    <label for="status">Status</label>
                                                    <select class="form-select form-control" id="status" name="status">
                                                        <option value="1">Yes</option>
                                                        <option value="0">No</option>
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
                                            <div class="row mb-3">
                                                <div class="col-md-12 text-end">
                                                    <button type="button" class="btn btn-primary" id="add-row-btn">+
                                                        Funding Organization</button>
                                                </div>
                                            </div>

                                            <!-- Rows Container -->
                                            <div id="funding-rows-container">

                                            </div>

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

        // When the user types in the input field
        $('#project_name').on('keyup', function () {
            var inputName = $('#project_name').val(); // Get the value from input field
            var currentYear = new Date().getFullYear(); // Get the current year (e.g., 2024)

            // Check if the input has at least 3 characters

            // Get the first 3 characters of the input name
            var prefix = inputName.substring(0, 3).toUpperCase();

            // Get the last two digits of the current year
            var yearSuffix = currentYear.toString().slice(-2);

            // Generate a random 3-digit number
            var randomNumber = Math.floor(100 + Math.random() *
                900); // Generate a number between 100 and 999

            // Format the final result
            var result = prefix + '-' + yearSuffix + randomNumber;

            // Display the result in the <p> element
            $('#project_code').val(result);

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


    $(document).ready(function () {
    const totalAmount = $('#project_budget').val(); // Define your total amount here

    // Add Row Button Click Event
    $('#add-row-btn').click(function () {
        let newRow = `
            <div class="row mt-3">
                <div class="col-md-6">
                    <div class="form-group custom-padding">
                        <label for="funding_organization">Funding Organization</label>
                        <select class="form-select form-control" name="funding_organization[]">
                            @foreach ($funding_organizations as $funding_organization)
                            <option value="{{$funding_organization->id}}">
                                {{$funding_organization->funding_organization_name}}
                            </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group custom-padding">
                        <label for="largeInput">Funded Percentage</label>
                        <input type="text" class="form-control funded-percentage" name="funded_percentage[]" placeholder="Funded Percentage">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group custom-padding">
                        <label for="funded_amount">Funded Amount</label>
                        <input type="text" class="form-control funded-amount" name="funded_amount[]" placeholder="Funded Amount" readonly>
                    </div>
                </div>
            </div>`;
        $('#funding-rows-container').append(newRow);
    });

    $(document).on('keyup', '.funded-percentage', function () {
        let row = $(this).closest('.row'); // Find the current row
        let projectBudget = parseFloat($('#project_budget').val()) || 0; // Get the project budget (default to 0 if invalid)
        let percentage = parseFloat($(this).val()) || 0; // Get the funded percentage (default to 0 if invalid)

        // Calculate the total of all percentages currently entered
        let totalPercentage = 0;
        $('.funded-percentage').each(function () {
            totalPercentage += parseFloat($(this).val()) || 0;
        });

        // Calculate the remaining percentage that can be entered
        let remainingPercentage = 100 - totalPercentage + percentage;

        // If remaining percentage is less than the entered percentage, update the value
        if (remainingPercentage < 0) {
            percentage = percentage + remainingPercentage;
            $(this).val(percentage); // Update the input field
        }

        // Ensure the percentage is between 0 and the remaining percentage
        if (percentage > remainingPercentage) {
            percentage = remainingPercentage;
            $(this).val(percentage); // Update the input field
        } else if (percentage < 0) {
            percentage = 0;
            $(this).val(percentage); // Update the input field
        }

        let fundedAmount = (projectBudget * percentage) / 100; // Calculate the funded amount
        row.find('.funded-amount').val(fundedAmount.toFixed(2)); // Update the funded amount field

        let total = 0;
        let rowCount = 0;

        // Loop through all rows with .funded-percentage
        $('.funded-percentage').each(function () {
            let rowPercentage = parseFloat($(this).val()) || 0; // Get the percentage for each row
            // Ensure the percentage is between 0 and 100
            if (rowPercentage > 100) {
                rowPercentage = 100;
                $(this).val(rowPercentage); // Update the input field
            } else if (rowPercentage < 0) {
                rowPercentage = 0;
                $(this).val(rowPercentage); // Update the input field
            }
            total += rowPercentage; // Add to the total percentage
            rowCount++;
        });

        // Display the total or average percentage wherever needed
        if (total.toFixed(2) < 100) {
            $('.submit-btn').hide();
            $('.or').hide();
            $('#add-row-btn').show();
        } else {
            $('#add-row-btn').hide();
            $('.submit-btn').show();
            $('.or').show();
        }
    });
});


$(document).ready(function () {
        let selectedFiles = []; // Array to manage selected files

        // When files are selected
        $('#project_documents').on('change', function (e) {
            const files = Array.from(e.target.files); // Convert FileList to an Array
            const previewContainer = $('#preview-container');
            previewContainer.empty(); // Clear existing previews

            selectedFiles = files; // Update selected files array

            // Loop through files to generate previews
            files.forEach((file, index) => {
                const fileType = file.type;
                const reader = new FileReader();

                reader.onload = function (e) {
                    let preview = '';

                    // Check file type and generate appropriate preview
                    if (fileType.startsWith('image/')) {
                        preview = `<img src="${e.target.result}" class="img-thumbnail" style="max-width: 120px; max-height: 120px;">`;
                    } else if (fileType === 'application/pdf') {
                        preview = `<embed src="${e.target.result}" type="application/pdf" class="border" style="width: 120px; height: 120px;">`;
                    } else {
                        preview = `<div class="alert alert-secondary p-2" style="width: 120px; height: 120px; display: flex; align-items: center; justify-content: center;">${file.name}</div>`;
                    }

                    // Append preview with a remove button
                    previewContainer.append(`
                        <div class="col-md-3 text-center position-relative">
                            ${preview}
                            <button type="button" class="btn btn-sm btn-danger remove-btn position-absolute top-0 end-0 m-1" data-index="${index}">&times;</button>
                        </div>
                    `);
                };

                reader.readAsDataURL(file); // Read file for preview
            });
        });

        // Remove a file from the selection
        $(document).on('click', '.remove-btn', function () {
            const index = $(this).data('index'); // Get file index
            selectedFiles.splice(index, 1); // Remove file from array

            // Update the input files
            const dataTransfer = new DataTransfer();
            selectedFiles.forEach((file) => dataTransfer.items.add(file));
            $('#project_documents')[0].files = dataTransfer.files;

            $(this).parent().remove(); // Remove the preview
        });
    });

</script>
@endpush
