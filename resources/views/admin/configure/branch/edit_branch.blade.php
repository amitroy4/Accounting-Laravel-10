@extends('layouts.admin')
@section('title', 'Edit Branch')
@section('content')
<div class="container">
    <div class="page-inner">
        <!-- Page Header TOP -->
        <div class="page-header">
            <h3 class="page-title-top">Edit Branch</h3>
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
                    <a href="#">Edit Branch</a>
                </li>
            </ul>
        </div>
        <!-- Page Header TOP -->
        <!-- Branch Edit Form -->
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="custom-c-h-main-title">
                            <span class="c-h-icon"><i class="fas fa-edit"></i></span> Edit Branch
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('branch.update', $branch->id) }}" id="branchForm" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
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
                                                        <label for="branch_name">Branch Name <span class="text-danger">*</span></label>
                                                        <input type="text" class="form-control" id="branch_name" name="branch_name" placeholder="Branch Name" value="{{ $branch->branch_name }}">
                                                        @error('branch_name')
                                                        <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group custom-padding">
                                                        <label for="branch_code">Branch Code <span class="text-danger">*</span></label>
                                                        <input type="text" class="form-control" id="branch_code" name="branch_code" placeholder="Branch Code" value="{{ $branch->branch_code }}" readonly>
                                                        @error('branch_code')
                                                        <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group custom-padding">
                                                        <label for="parent_branch">Parent Company or Branch</label>
                                                        <select class="form-select form-control" id="parent_branch" name="parent_branch">
                                                            <option value="">Select</option>
                                                            @foreach ($branches as $parent)

                                                            <option value="{{ $parent->id }}" {{ $branch->parent_branch == $parent->id ? 'selected' : '' }}>
                                                                {{ $parent->branch_name }}
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
                                                        <label for="opening_time">Branch Opening Time <span class="text-danger">*</span></label>
                                                        <input type="time" class="form-control" id="opening_time" name="opening_time" value="{{ $branch->opening_time }}">
                                                        @error('opening_time')
                                                        <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group custom-padding">
                                                        <label for="closing_time">Branch Closing Time <span class="text-danger">*</span></label>
                                                        <input type="time" class="form-control" id="closing_time" name="closing_time" value="{{ $branch->closing_time }}">
                                                        @error('closing_time')
                                                        <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group custom-padding">
                                                        <label for="branch_address">Branch Address</label>
                                                        <input type="text" class="form-control" id="branch_address" name="branch_address" placeholder="Branch Address" value="{{ $branch->branch_address }}">
                                                        @error('branch_address')
                                                        <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group custom-padding">
                                                        <label for="branch_district">District</label>
                                                        <input type="text" class="form-control" id="branch_district" name="branch_district" placeholder="District" value="{{ $branch->branch_district }}">
                                                        @error('branch_district')
                                                        <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group custom-padding">
                                                        <label for="branch_zipcode">Zip Code</label>
                                                        <input type="text" class="form-control" id="branch_zipcode" name="branch_zipcode" placeholder="Zip Code" value="{{ $branch->branch_zipcode }}">
                                                        @error('branch_zipcode')
                                                        <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group custom-padding">
                                                        <label for="branch_logo">Branch Logo</label>
                                                        <input type="file" class="form-control" id="branch_logo" name="branch_logo">
                                                        <div id="logoPreview" class="mt-2">
                                                            @if($branch->branch_logo)
                                                            <img id="previewImg" src="{{ asset('storage/'.$branch->branch_logo) }}" alt="Logo Preview" class="img-fluid" style="max-width: 100px;">
                                                            @endif
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
                                                            <option value="1" {{ $branch->status == 1 ? 'selected' : '' }}>Active</option>
                                                            <option value="0" {{ $branch->status == 0 ? 'selected' : '' }}>Inactive</option>
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
                                                        <label for="contact_person_name">Contact Person Name<span class="text-danger">*</span></label>
                                                        <input type="text" class="form-control" id="contact_person_name" name="contact_person_name" placeholder="Contact Person Name" value="{{ $branch->contact_person_name }}">
                                                        @error('contact_person_name')
                                                        <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group custom-padding">
                                                        <label for="branch_contact_number">Branch Contact Number <span class="text-danger">*</span></label>
                                                        <input type="text" class="form-control" id="branch_contact_number" name="branch_contact_number" placeholder="Branch Contact Number" value="{{ $branch->branch_contact_number }}">
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
                                                            placeholder="Branch Land Line Number" value="{{ $branch->branch_land_line }}">
                                                        @error('branch_land_line')
                                                        <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group custom-padding">
                                                        <label for="branch_whatsapp">Branch Whatsapp Number <span
                                                                class="text-danger">*</span></label>
                                                        <input type="text" class="form-control form-control"
                                                            id="branch_whatsapp" name="branch_whatsapp"
                                                            placeholder="Branch Whatsapp Number" value="{{ $branch->branch_whatsapp}}">
                                                        @error('branch_whatsapp')
                                                        <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group custom-padding">
                                                        <label for="branch_email">Branch Email<span class="text-danger">*</span></label>
                                                        <input type="email" class="form-control" id="branch_email" name="branch_email" placeholder="Branch Email" value="{{ $branch->branch_email }}">
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
                        <!-- Branch Edit Form -->
                    </div>
                </div>
            </div>
        </div>
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
});
$(document).ready(function() {
        // Handle file selection and preview
        $('#branch_logo').change(function(event) {
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
        if ($('#branch_logo').val() != '') {
            $('#logoPreview').hide(); // Ensure the preview is hidden initially if no file is selected
            $('#existingLogo').show(); // Show the existing logo if there is one
        }
    });
</script>
@endpush
