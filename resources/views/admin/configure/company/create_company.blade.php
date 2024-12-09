@extends('layouts.admin')
@section('title','Dashboard')
@section('content')
<div class="container">
    <div class="page-inner">
        <!--Page Header TOP-->
        <div class="page-header">
            <h3 class="page-title-top">Add Company</h3>
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
                    <a href="#">Add Company</a>
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
                                <div class="col-md-5 c-h-separator-r">
                                    <h4 class="custom-c-h-main-title"><span class="c-h-icon"><i
                                                class="fas fa-compress"></i></span>Add Company</h4>
                                </div>
                                <div class="col-md-5">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Double Part Card Header-->
                    <div class="card-body">
                        <form action="{{route('company.store')}}" id="companyForm" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="card custom-c-bg1">
                                        <div class="card-header custom-c-h-bg1">
                                            <h4 class="custom-c-h-title">Company Information</h4>
                                        </div>
                                        <div class="card-body custom-c-b-padding">
                                            <!--1st Row -->
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group custom-padding">
                                                        <label for="company_name">Company Name <span
                                                                class="text-danger">*</span></label>
                                                        <input type="text" name="company_name" class="form-control"
                                                            id="company_name" placeholder="Company Name" required>
                                                        @error('company_name')
                                                        <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group custom-padding">
                                                        <label for="company_short_name">Company Short Name</label>
                                                        <input type="text" name="company_short_name"
                                                            class="form-control" id="company_short_name"
                                                            placeholder="Company Short Name">
                                                        @error('company_short_name')
                                                        <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group custom-padding">
                                                        <label for="company_address">Company Address<span
                                                                class="text-danger">*</span></label>
                                                        <input type="text" name="company_address" class="form-control"
                                                            id="company_address" placeholder="Company Address" required>
                                                        @error('company_address')
                                                        <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group custom-padding">
                                                        <label for="company_district">District</label>
                                                        <input type="text" name="company_district" class="form-control"
                                                            id="company_district" placeholder="District">
                                                        @error('company_district')
                                                        <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group custom-padding">
                                                        <label for="company_zip_code">Zip Code</label>
                                                        <input type="text" name="company_zip_code" class="form-control"
                                                            id="company_zip_code" placeholder="Zip Code">
                                                        @error('company_zip_code')
                                                        <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group custom-padding">
                                                        <label for="company_code">Company Code</label>
                                                        <input type="text" name="company_code" class="form-control"
                                                            id="company_code" placeholder="Company Code" readonly>
                                                        @error('company_code')
                                                        <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group custom-padding">
                                                        <label for="company_registration_number">Registration
                                                            Number</label>
                                                        <input type="text" name="company_registration_number"
                                                            class="form-control" id="company_registration_number"
                                                            placeholder="Registration Number">
                                                        @error('company_registration_number')
                                                        <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group custom-padding">
                                                        <label for="company_logo">Company Logo</label>
                                                        <input type="file" name="company_logo" class="form-control"
                                                            id="company_logo">

                                                        <div id="logoPreview" class="mt-2" style="display:none;">
                                                            <img id="previewImg" src="" alt="Logo Preview"
                                                                class="img-fluid" style="max-width: 100px;">
                                                        </div>

                                                        @error('company_logo')
                                                        <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group custom-padding">
                                                        <label for="status">Status</label>
                                                        <select name="status" class="form-select form-control"
                                                            id="status">
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
                                                            <a class="cancel-btn"
                                                                href="{{route('company.index')}}">Cancel</a>
                                                            <a class="submit-btn" href="#">Submit</a>
                                                            <button type="submit" style="display: none;">Submit</button>
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
                                            <h4 class="custom-c-h-title">Contact Information</h4>
                                        </div>
                                        <div class="card-body custom-c-b-padding">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group custom-padding">
                                                        <label for="company_contact_number">Contact Number</label>
                                                        <input type="text" name="company_contact_number"
                                                            class="form-control" id="company_contact_number"
                                                            placeholder="Contact Number">
                                                        @error('company_contact_number')
                                                        <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group custom-padding">
                                                        <label for="company_land_line">Land Line Number</label>
                                                        <input type="text" name="company_land_line" class="form-control"
                                                            id="company_land_line" placeholder="Land Line Number">
                                                        @error('company_land_line')
                                                        <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group custom-padding">
                                                        <label for="company_whatsapp_number">Whatsapp Number</label>
                                                        <input type="text" name="company_whatsapp_number"
                                                            class="form-control" id="company_whatsapp_number"
                                                            placeholder="Whatsapp Number">
                                                        @error('company_whatsapp_number')
                                                        <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group custom-padding">
                                                        <label for="company_email">Email Address</label>
                                                        <input type="email" name="company_email" class="form-control"
                                                            id="company_email" placeholder="Email Address">
                                                        @error('company_email')
                                                        <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group custom-padding">
                                                        <label for="company_website">Company Website</label>
                                                        <input type="text" name="company_website" class="form-control"
                                                            id="company_website" placeholder="Company Website">
                                                        @error('company_website')
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
        <!--Company Add Form-->
    </div>
</div>
@endsection
@push('script')
<script>
    $(document).ready(function () {
        $('.submit-btn').on('click', function (e) {
            e.preventDefault(); // Prevent the default link behavior

            // Check if the form is valid
            if ($('#companyForm')[0].checkValidity()) {
                $('#companyForm')[0].submit(); // Use the native submit method
            } else {
                $('#companyForm')[0].reportValidity(); // Show validation messages
            }
        });
    });

    $(document).ready(function () {
        // Handle file selection and preview
        $('#company_logo').change(function (event) {
            const file = event.target.files[0]; // Get the selected file
            const reader = new FileReader();

            reader.onload = function (e) {
                $('#previewImg').attr('src', e.target
                .result); // Set the image source to the selected file
                $('#logoPreview').show(); // Show the image preview section
            }

            if (file) {
                reader.readAsDataURL(file); // Read the file as a data URL
            }
        });

        // When the user types in the input field
        $('#company_name').on('keyup', function () {
            var inputName = $('#company_name').val(); // Get the value from input field
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
            $('#company_code').val(result);

        });
    });

</script>
@endpush
