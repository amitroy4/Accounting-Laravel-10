@extends('layouts.admin')
@section('title','Dashboard')
@section('content')
<div class="container">
    <div class="page-inner">
        <!--Page Header TOP-->
        <div class="page-header">
            <h3 class="page-title-top">Create new Branch</h3>
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
                    <a href="#">Create new Branch</a>
                </li>
            </ul>
        </div>
        <!--Page Header TOP-->
        <!--Branch Add Form-->
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <!--Double Part Card Header-->
                    <div class="card-header">
                        <div class="c-h-double">
                            <div class="row">
                                <div class="col-md-5 c-h-separator-r">
                                    <h4 class="custom-c-h-main-title"><span class="c-h-icon"><i
                                                class="fas fa-compress"></i></span>Create New Branch</h4>
                                </div>
                                <div class="col-md-5">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Double Part Card Header-->
                    <div class="card-body">
                        <form action="{{route('branch.store')}}" id="branchForm" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="card custom-c-bg1">
                                        <div class="card-header custom-c-h-bg1">
                                            <h4 class="custom-c-h-title">Branch Information</h4>
                                        </div>
                                        <div class="card-body custom-c-b-padding">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group custom-padding">
                                                        <label for="largeInput">Branch Name <span
                                                                class="text-danger">*</span></label>
                                                        <input type="text" class="form-control form-control"
                                                            id="branch_name" name="branch_name"
                                                            placeholder="Branch Name" required>
                                                        @error('branch_name')
                                                        <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group custom-padding">
                                                        <label for="largeInput">Branch Code</label>
                                                        <input type="text" class="form-control form-control"
                                                            id="branch_code" name="branch_code"
                                                            placeholder="Branch Code" readonly>
                                                        @error('branch_code')
                                                        <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group custom-padding">
                                                        <label for="branch">Parent Company or Branch</label>
                                                        <select class="form-select form-control" id="parent_branch"
                                                            name="parent_branch">
                                                            <option value="">Select</option>
                                                            @foreach ($branches as $branch)
                                                            <option value="{{$branch->id}}">{{$branch->branch_name}}
                                                            </option>
                                                            @endforeach
                                                        </select>
                                                        @error('parent_branch')
                                                        <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group custom-padding">
                                                        <label for="opening_time">Branch Opening Time</label>
                                                        <input type="time" class="form-control" id="opening_time"
                                                            name="opening_time">
                                                        @error('opening_time')
                                                        <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group custom-padding">
                                                        <label for="closing_time">Branch Closing Time</label>
                                                        <input type="time" class="form-control" id="closing_time"
                                                            name="closing_time">
                                                        @error('closing_time')
                                                        <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group custom-padding">
                                                        <label for="branch_address">Branch Address<span
                                                            class="text-danger">*</span></label>
                                                        <input type="text" class="form-control form-control"
                                                            id="branch_address" name="branch_address"
                                                            placeholder="Branch Address" required>
                                                        @error('branch_address')
                                                        <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group custom-padding">
                                                        <label for="branch_district">District</label>
                                                        <input type="text" class="form-control form-control"
                                                            id="branch_district" name="branch_district"
                                                            placeholder="District">
                                                        @error('branch_district')
                                                        <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group custom-padding">
                                                        <label for="branch_zipcode">Zip Code</label>
                                                        <input type="text" class="form-control form-control"
                                                            id="branch_zipcode" name="branch_zipcode"
                                                            placeholder="Zip Code">
                                                        @error('branch_zipcode')
                                                        <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group custom-padding">
                                                        <label for="branch_logo">Branch Logo</label>
                                                        <input type="file" class="form-control form-control"
                                                            id="branch_logo" name="branch_logo"
                                                            placeholder="Branch Logo">
                                                        <div id="logoPreview" class="mt-2" style="display:none;">
                                                            <img id="previewImg" src="" alt="Logo Preview"
                                                                class="img-fluid" style="max-width: 100px;">
                                                        </div>
                                                        @error('branch_logo')
                                                        <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group custom-padding">
                                                        <label for="status">Status</label>
                                                        <select class="form-select form-control" id="status" name="status">
                                                            <option value="1">Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--Submit & Cancel Button-->
                                            <div class="row">
                                                <div class="col-md-5 m-auto">
                                                    <div class="button-custom-margin">
                                                        <div class="double-buttons">
                                                            <a class="cancel-btn" href="{{route('branch.index')}}">Cancel</a>
                                                            <a class="submit-btn" href="#">Submit</a>
                                                            <span class="or">or</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--Submit & Cancel Button-->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card custom-c-bg1">
                                        <div class="card-header custom-c-h-bg1">
                                            <h4 class="custom-c-h-title">Branch Contact Information</h4>
                                        </div>
                                        <div class="card-body custom-c-b-padding">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group custom-padding">
                                                        <label for="contact_person_name">Contact Person Name</label>
                                                        <input type="text" class="form-control form-control"
                                                            id="contact_person_name" name="contact_person_name"
                                                            placeholder="Contact Person Name">
                                                        @error('contact_person_name')
                                                        <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group custom-padding">
                                                        <label for="branch_contact_number">Branch Contact Number</label>
                                                        <input type="text" class="form-control form-control"
                                                            id="branch_contact_number" name="branch_contact_number"
                                                            placeholder="Branch Contact Number">
                                                        @error('branch_contact_number')
                                                        <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group custom-padding">
                                                        <label for="branch_land_line">Branch Land Line Number</label>
                                                        <input type="text" class="form-control form-control"
                                                            id="branch_land_line" name="branch_land_line"
                                                            placeholder="Branch Land Line Number">
                                                        @error('branch_land_line')
                                                        <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group custom-padding">
                                                        <label for="branch_whatsapp">Branch Whatsapp Number</label>
                                                        <input type="text" class="form-control form-control"
                                                            id="branch_whatsapp" name="branch_whatsapp"
                                                            placeholder="Branch Whatsapp Number">
                                                        @error('branch_whatsapp')
                                                        <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group custom-padding">
                                                        <label for="branch_email">Branch Email Address</label>
                                                        <input type="text" class="form-control form-control"
                                                            id="branch_email" name="branch_email"
                                                            placeholder="Branch Email Address">
                                                        @error('branch_email')
                                                        <span class="text-danger">{{ $message }}</span>
                                                        @enderror
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
        <!--Branch Add Form-->
    </div>
</div>
@endsection
@push('script')
<script>
    $(document).ready(function () {
        $('.submit-btn').on('click', function (e) {
            e.preventDefault(); // Prevent the default link behavior

            // Check if the form is valid
            if ($('#branchForm')[0].checkValidity()) {
                $('#branchForm')[0].submit(); // Use the native submit method
            } else {
                $('#branchForm')[0].reportValidity(); // Show validation messages
            }
        });
        // When the user types in the input field
        $('#branch_name').on('keyup', function () {
            var inputName = $('#branch_name').val(); // Get the value from input field
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
            $('#branch_code').val(result);

        });
    });

    // Handle file selection and preview
    $('#branch_logo').change(function (event) {
        const file = event.target.files[0]; // Get the selected file
        const reader = new FileReader();

        reader.onload = function (e) {
            $('#previewImg').attr('src', e.target.result); // Set the image source to the selected file
            $('#logoPreview').show(); // Show the image preview section
        }

        if (file) {
            reader.readAsDataURL(file); // Read the file as a data URL
        }
    });

</script>
@endpush
