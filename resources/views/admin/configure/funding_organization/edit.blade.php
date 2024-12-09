@extends('layouts.admin')
@section('title','Dashboard')
@section('content')
<div class="container">
    <div class="page-inner">
        <!--Page Header TOP-->
        <div class="page-header">
            <h3 class="page-title-top">Funding Organization</h3>
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
                    <a href="#">Funding Organization</a>
                </li>
            </ul>
        </div>
        <!--Page Header TOP-->
        <!--Company Add Form-->
        <form action="{{ route('funding_organization.update', $fundingorganization->id) }}" id="fundingorganizationForm"
            method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <!--Double Part Card Header-->
                        <div class="card-header">
                            <div class="c-h-double">
                                <div class="row">
                                    <div class="col-md-5 c-h-separator-r">
                                        <h4 class="custom-c-h-main-title"><span class="c-h-icon"><i
                                                    class="fas fa-compress"></i></span>Edit Funding Organization</h4>
                                    </div>
                                    <div class="col-md-5">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Double Part Card Header-->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="card custom-c-bg1">
                                        <div class="card-header custom-c-h-bg1">
                                            <h4 class="custom-c-h-title">Funding Organization Information</h4>
                                        </div>
                                        <div class="card-body custom-c-b-padding">
                                            <!--1st Row -->
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group custom-padding">
                                                        <label for="funding_organization_name">Funding Organization
                                                            Name <span class="text-danger">*</span></label>
                                                        <input type="text" class="form-control form-control"
                                                            id="funding_organization_name"
                                                            name="funding_organization_name"
                                                            value="{{$fundingorganization->funding_organization_name}}"
                                                            placeholder="Funding Organization Name" required>
                                                        @error('funding_organization_name')
                                                        <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group custom-padding">
                                                        <label for="organization_code">Organization Code</label>
                                                        <input type="text" class="form-control form-control"
                                                            id="organization_code" name="organization_code"
                                                            value="{{$fundingorganization->organization_code}}"
                                                            placeholder="Organization Code" readonly>
                                                        @error('organization_code')
                                                        <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group custom-padding">
                                                        <label for="country">Country</label>
                                                        <select class="form-select form-control" id="country"
                                                            name="country">
                                                            @foreach($countries as $code => $name)
                                                            <option value="{{ $code }}"
                                                                {{ old('country', $fundingorganization->country) == $code ? 'selected' : '' }}>
                                                                {{ $name }} ({{ $code }})</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group custom-padding">
                                                        <label for="organization_address">Organization Address <span
                                                                class="text-danger">*</span></label>
                                                        <input type="text" class="form-control form-control"
                                                            id="organization_address" name="organization_address"
                                                            value="{{$fundingorganization->organization_address}}"
                                                            placeholder="Organization Address" required>
                                                        @error('organization_address')
                                                        <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group custom-padding">
                                                        <label for="donor_type">Donor Type</label>
                                                        <select class="form-select form-control" id="donor_type"
                                                            name="donor_type">
                                                            <option value="1"
                                                                {{ old('donor_type', $fundingorganization->donor_type) == 1 ? 'selected' : '' }}>
                                                                1</option>
                                                            <option value="2"
                                                                {{ old('donor_type', $fundingorganization->donor_type) == 2 ? 'selected' : '' }}>
                                                                2</option>
                                                            <option value="3"
                                                                {{ old('donor_type', $fundingorganization->donor_type) == 3 ? 'selected' : '' }}>
                                                                3</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group custom-padding">
                                                        <label for="organization_contact_number">Organization Contact
                                                            Number</label>
                                                        <input type="text" class="form-control form-control"
                                                            id="organization_contact_number"
                                                            name="organization_contact_number"
                                                            value="{{ old('organization_contact_number', $fundingorganization->organization_contact_number) }}"
                                                            placeholder="Organization Contact Number">
                                                        @error('organization_contact_number')
                                                        <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group custom-padding">
                                                        <label for="organization_email">Organization E-mail</label>
                                                        <input type="text" class="form-control form-control"
                                                            id="organization_email" name="organization_email"
                                                            value="{{ old('organization_email', $fundingorganization->organization_email) }}"
                                                            placeholder="Organization E-mail">
                                                        @error('organization_email')
                                                        <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group custom-padding">
                                                        <label for="organization_website">Organization Website</label>
                                                        <input type="text" class="form-control form-control"
                                                            id="organization_website" name="organization_website"
                                                            value="{{ old('organization_website', $fundingorganization->organization_website) }}"
                                                            placeholder="Organization Website">
                                                        @error('organization_website')
                                                        <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
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
                                                <div class="col-md-6">
                                                    <div class="form-group custom-padding">
                                                        <label for="status">Status</label>
                                                        <select class="form-select form-control" id="status"
                                                            name="status">
                                                            <option value="1"
                                                                {{ old('status', $fundingorganization->status) == 1 ? 'selected' : '' }}>
                                                                Active</option>
                                                            <option value="0"
                                                                {{ old('status', $fundingorganization->status) == 0 ? 'selected' : '' }}>
                                                                Inactive</option>
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
                                                                href="{{route('funding_organization.index')}}">Cancel</a>
                                                            <a class="submit-btn" href="#">Update</a>
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
                                            <h4 class="custom-c-h-title">Contact Person Details</h4>
                                        </div>
                                        <div class="card-body custom-c-b-padding">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group custom-padding">
                                                        <label for="contact_person_name">Contact Person Name</label>
                                                        <input type="text" class="form-control form-control"
                                                            id="contact_person_name" name="contact_person_name"
                                                            value="{{ old('contact_person_name', $fundingorganization->contact_person_name) }}"
                                                            placeholder="Contact Person Name">
                                                        @error('contact_person_name')
                                                        <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group custom-padding">
                                                        <label for="contact_person_designation">Designation</label>
                                                        <input type="text" class="form-control form-control"
                                                            id="contact_person_designation"
                                                            name="contact_person_designation"
                                                            value="{{ old('contact_person_designation', $fundingorganization->contact_person_designation) }}"
                                                            placeholder="Designation">
                                                        @error('contact_person_designation')
                                                        <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group custom-padding">
                                                        <label for="contact_person_number">Personal Contact
                                                            Number</label>
                                                        <input type="text" class="form-control form-control"
                                                            id="contact_person_number" name="contact_person_number"
                                                            value="{{ old('contact_person_number', $fundingorganization->contact_person_number) }}"
                                                            placeholder="Personal Contact Number">
                                                        @error('contact_person_number')
                                                        <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group custom-padding">
                                                        <label for="contact_person_whatsapp_number">Personal Whatsapp
                                                            Number</label>
                                                        <input type="text" class="form-control form-control"
                                                            id="contact_person_whatsapp_number"
                                                            name="contact_person_whatsapp_number"
                                                            value="{{ old('contact_person_whatsapp_number', $fundingorganization->contact_person_whatsapp_number) }}"
                                                            placeholder="Personal Whatsapp Number">
                                                        @error('contact_person_whatsapp_number')
                                                        <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group custom-padding">
                                                        <label for="contact_person_email">Personal Email Address</label>
                                                        <input type="text" class="form-control form-control"
                                                            id="contact_person_email" name="contact_person_email"
                                                            value="{{ old('contact_person_email', $fundingorganization->contact_person_email) }}"
                                                            placeholder="Personal Email Address">
                                                        @error('contact_person_email')
                                                        <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div> <!-- End of row -->
                        </div>
                    </div>
                </div>
            </div>
        </form>

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
            if ($('#fundingorganizationForm')[0].checkValidity()) {
                $('#fundingorganizationForm')[0].submit(); // Use the native submit method
            } else {
                $('#fundingorganizationForm')[0].reportValidity(); // Show validation messages
            }
        });
    });

    // function confirmDelete(form) {
    //     swal({
    //         title: "Are you sure?",
    //         text: "You will not be able to recover this data!",
    //         icon: "warning",
    //         buttons: ["Cancel", "Yes, delete it!"],
    //         dangerMode: true,
    //     }).then((willDelete) => {
    //         if (willDelete) {
    //             form.submit();
    //             swal("Deleted!", "Company has been deleted.", "success");
    //         } else {
    //             swal("Your data is safe!");
    //         }
    //     });
    // }

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
                    url: '{{ url("/dashboard/funding_organization/files/delete") }}/' + documentId,
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
                swal("Deleted!", "Company has been deleted.", "success");
            } else {
                swal("Your data is safe!");
            }
        });
    }

</script>
@endpush
