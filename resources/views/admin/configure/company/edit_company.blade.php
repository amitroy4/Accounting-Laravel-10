@extends('layouts.admin')
@section('title','Dashboard')
@section('content')
<div class="container">
    <div class="page-inner">
        <!--Page Header TOP-->
        <div class="page-header">
            <h3 class="page-title-top">Update Company</h3>
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
                    <a href="#">Update Company</a>
                </li>
            </ul>
        </div>
        <!--Page Header TOP-->
        <!--Company Update Form-->
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <!--Double Part Card Header-->
                    <div class="card-header">
                        <div class="c-h-double">
                            <div class="row">
                                <div class="col-md-5 c-h-separator-r">
                                    <h4 class="custom-c-h-main-title"><span class="c-h-icon"><i
                                                class="fas fa-compress"></i></span>Update Company</h4>
                                </div>
                                <div class="col-md-5">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Double Part Card Header-->
                    <div class="card-body">
                        <form action="{{ route('company.update', $company->id) }}" id="companyForm" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT') <!-- For updating a resource -->

                            <div class="row">
                                <div class="col-md-8">
                                    <div class="card custom-c-bg1">
                                        <div class="card-header custom-c-h-bg1">
                                            <h4 class="custom-c-h-title">Company Information</h4>
                                        </div>
                                        <div class="card-body custom-c-b-pUpdateing">
                                            <!--1st Row -->
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group custom-pUpdateing">
                                                        <label for="company_name">Company Name <span class="text-danger">*</span></label>
                                                        <input type="text" name="company_name" class="form-control" id="company_name"
                                                            value="{{ old('company_name', $company->company_name) }}" placeholder="Company Name" required>
                                                        @error('company_name')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group custom-pUpdateing">
                                                        <label for="company_short_name">Company Short Name</label>
                                                        <input type="text" name="company_short_name" class="form-control" id="company_short_name"
                                                            value="{{ old('company_short_name', $company->company_short_name) }}" placeholder="Company Short Name">
                                                        @error('company_short_name')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group custom-pUpdateing">
                                                        <label for="company_address">Company Address<span class="text-danger">*</span></label>
                                                        <input type="text" name="company_address" class="form-control" id="company_address"
                                                            value="{{ old('company_address', $company->company_address) }}" placeholder="Company Address" required>
                                                        @error('company_address')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group custom-pUpdateing">
                                                        <label for="company_district">District</label>
                                                        <input type="text" name="company_district" class="form-control" id="company_district"
                                                            value="{{ old('company_district', $company->company_district) }}" placeholder="District">
                                                        @error('company_district')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group custom-pUpdateing">
                                                        <label for="company_zip_code">Zip Code</label>
                                                        <input type="text" name="company_zip_code" class="form-control" id="company_zip_code"
                                                            value="{{ old('company_zip_code', $company->company_zip_code) }}" placeholder="Zip Code">
                                                        @error('company_zip_code')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group custom-pUpdateing">
                                                        <label for="company_id_numner">Company Code</label>
                                                        <input type="text" name="company_id_numner" class="form-control" id="company_id_numner"
                                                            value="{{ old('company_id_numner', $company->company_id_numner) }}" placeholder="Company Code">
                                                        @error('company_id_numner')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group custom-pUpdateing">
                                                        <label for="company_registration_number">Registration Number</label>
                                                        <input type="text" name="company_registration_number" class="form-control" id="company_registration_number"
                                                            value="{{ old('company_registration_number', $company->company_registration_number) }}" placeholder="Registration Number">
                                                        @error('company_registration_number')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>


                                                <div class="col-md-6">
                                                    <div class="form-group custom-padding">
                                                        <label for="company_logo">Company Logo</label>
                                                        <input type="file" name="company_logo" class="form-control" id="company_logo">
                                                        <!-- Preview section for new image -->
                                                        <div id="logoPreview" class="mt-2" style="display:none;">
                                                            <img id="previewImg" src="" alt="Logo Preview" class="img-fluid" style="max-width: 100px;">
                                                        </div>

                                                        <!-- Show existing logo if available -->
                                                        <div id="existingLogo" class="mt-2">
                                                            @if($company->company_logo)
                                                                <img src="{{ asset('storage/'.$company->company_logo) }}" alt="Company Logo" width="100">
                                                            @endif
                                                        </div>
                                                        @error('company_logo')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group custom-pUpdateing">
                                                        <label for="status">Status</label>
                                                        <select name="status" class="form-select form-control" id="status">
                                                            <option value="1" {{ $company->status == '1' ? 'selected' : '' }}>Active</option>
                                                            <option value="0" {{ $company->status == '0' ? 'selected' : '' }}>Inactive</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--Submit & Cancel Button-->
                                            <div class="row">
                                                <div class="col-md-5 m-auto">
                                                    <div class="button-custom-margin">
                                                        <div class="double-buttons">
                                                            <a class="cancel-btn" href="{{route('company.index')}}">Cancel</a>
                                                            <a class="submit-btn" href="#">Update</a>
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
                                        <div class="card-body custom-c-b-pUpdateing">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group custom-pUpdateing">
                                                        <label for="company_contact_number">Contact Number</label>
                                                        <input type="text" name="company_contact_number" class="form-control" id="company_contact_number"
                                                            value="{{ old('company_contact_number', $company->company_contact_number) }}" placeholder="Contact Number">
                                                        @error('company_contact_number')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group custom-pUpdateing">
                                                        <label for="company_land_line">Land Line Number</label>
                                                        <input type="text" name="company_land_line" class="form-control" id="company_land_line"
                                                            value="{{ old('company_land_line', $company->company_land_line) }}" placeholder="Land Line Number">
                                                        @error('company_land_line')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group custom-pUpdateing">
                                                        <label for="company_whatsapp_number">Whatsapp Number</label>
                                                        <input type="text" name="company_whatsapp_number" class="form-control" id="company_whatsapp_number"
                                                            value="{{ old('company_whatsapp_number', $company->company_whatsapp_number) }}" placeholder="Whatsapp Number">
                                                        @error('company_whatsapp_number')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group custom-pUpdateing">
                                                        <label for="company_email">Email Address</label>
                                                        <input type="email" name="company_email" class="form-control" id="company_email"
                                                            value="{{ old('company_email', $company->company_email) }}" placeholder="Email Address">
                                                        @error('company_email')
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
        <!--Company Update Form-->
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
$(document).ready(function() {
        // Handle file selection and preview
        $('#company_logo').change(function(event) {
            const file = event.target.files[0]; // Get the selected file
            const reader = new FileReader();

            reader.onload = function(e) {
                $('#previewImg').attr('src', e.target.result); // Set the image source to the selected file
                $('#logoPreview').show(); // Show the image preview section
                $('#existingLogo').hide(); // Hide the existing logo
            }

            if (file) {
                reader.readAsDataURL(file); // Read the file as a data URL
            }
        });

        // Check if there is already an existing logo
        if ($('#company_logo').val() === '') {
            $('#logoPreview').hide(); // Ensure the preview is hidden initially if no file is selected
            $('#existingLogo').show(); // Show the existing logo if there is one
        }
    });
</script>
@endpush
