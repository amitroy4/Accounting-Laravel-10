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
      <form action="{{route('funding_organization.store')}}" id="fundingOrganizationForm" method="POST"
                            enctype="multipart/form-data">
                            @csrf
      <div class="row">
         <div class="col-md-12">
            <div class="card">
               <!--Double Part Card Header-->
               <div class="card-header">
                  <div class="c-h-double">
                     <div class="row">
                        <div class="col-md-5 c-h-separator-r">
                           <h4 class="custom-c-h-main-title"><span class="c-h-icon"><i class="fas fa-compress"></i></span>Create new Funding Organization</h4>
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
                                       <label for="funding_organization_name">Funding Organization Name</label>
                                       <input type="text" class="form-control form-control" id="funding_organization_name" name="funding_organization_name" placeholder="Funding Organization Name">
                                       @error('funding_organization_name')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="form-group custom-padding">
                                       <label for="organization_code">Organization Code</label>
                                       <input type="text" class="form-control form-control" id="organization_code" name="organization_code" placeholder="Organization Code" readonly>
                                       @error('organization_code')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="form-group custom-padding">
                                       <label for="country">Country</label>
                                       <select class="form-select form-control" id="country" name="country">
                                        @foreach($countries as $code => $name)
                                        <option value="{{ $code }}"> {{ $name }} ({{ $code }})</option>
                                        @endforeach
                                       </select>
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="form-group custom-padding">
                                       <label for="organization_address">Organization Address</label>
                                       <input type="text" class="form-control form-control" id="organization_address" name="organization_address" placeholder="Organization Address">
                                       @error('organization_address')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="form-group custom-padding">
                                       <label for="donor_type">Donor Type</label>
                                       <select class="form-select form-control" id="donor_type" name="donor_type">
                                          <option value="1">1</option>
                                          <option value="2">2</option>
                                          <option value="3">3</option>
                                       </select>
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="form-group custom-padding">
                                       <label for="organization_contact_number">Organization Contact Number</label>
                                       <input type="text" class="form-control form-control" id="organization_contact_number" name="organization_contact_number" placeholder="Organization Contact Number">
                                       @error('organization_contact_number')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="form-group custom-padding">
                                       <label for="organization_email">Organization E-mail</label>
                                       <input type="text" class="form-control form-control" id="organization_email" name="organization_email" placeholder="Organization E-mail">
                                       @error('organization_email')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="form-group custom-padding">
                                       <label for="organization_website">Organization Website</label>
                                       <input type="text" class="form-control form-control" id="organization_website" name="organization_website" placeholder="Organization Website">
                                       @error('organization_website')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
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
                                 <div class="col-md-6">
                                    <div class="form-group custom-padding">
                                        <label for="organization_documents" class="form-label">Documents</label>
                                        <input
                                            type="file"
                                            class="form-control"
                                            id="organization_documents"
                                            name="organization_documents[]"
                                            multiple>
                                    </div>
                                    <div id="preview-container" class="mt-3 row g-3">
                                        <!-- Previews will be displayed here -->
                                    </div>
                                </div>

                                 <div class="col-md-6">
                                    <div class="form-group custom-padding">
                                       <label for="status">Status</label>
                                       <select class="form-select form-control" id="status" name="status">
                                          <option value="1">Active</option>
                                          <option value="2">Inactive</option>
                                       </select>
                                    </div>
                                 </div>
                              </div>
                              <!--Submit & Cancel Button-->
                              <div class="row">
                                 <div class="col-md-5 m-auto">
                                    <div class="button-custom-margin">
                                       <div class="double-buttons">
                                          <a class="cancel-btn" href="{{route('funding_organization.index')}}">Cancel</a>
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
                              <h4 class="custom-c-h-title">Contact Person Details</h4>
                           </div>
                           <div class="card-body custom-c-b-padding">
                              <div class="row">
                                 <div class="col-12">
                                    <div class="form-group custom-padding">
                                       <label for="contact_person_name">Contact Person Name</label>
                                       <input type="text" class="form-control form-control" id="contact_person_name" name="contact_person_name" placeholder="Contact Person Name">
                                       @error('contact_person_name')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                 </div>
                                 <div class="col-12">
                                    <div class="form-group custom-padding">
                                       <label for="contact_person_designation">Designation</label>
                                       <input type="text" class="form-control form-control" id="contact_person_designation" name="contact_person_designation" placeholder="Designation">
                                       @error('contact_person_designation')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                 </div>
                                 <div class="col-12">
                                    <div class="form-group custom-padding">
                                       <label for="contact_person_number">Personal Contact Number</label>
                                       <input type="text" class="form-control form-control" id="contact_person_number" name="contact_person_number" placeholder="Personal Contact Number">
                                       @error('contact_person_number')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                 </div>
                                 <div class="col-12">
                                    <div class="form-group custom-padding">
                                       <label for="contact_person_whatsapp_number">Personal Whatsapp Number</label>
                                       <input type="text" class="form-control form-control" id="contact_person_whatsapp_number" name="contact_person_whatsapp_number" placeholder="Personal Whatsapp Number">
                                       @error('contact_person_whatsapp_number')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                 </div>
                                 <div class="col-12">
                                    <div class="form-group custom-padding">
                                       <label for="contact_person_email">Personal Email Address</label>
                                       <input type="text" class="form-control form-control" id="contact_person_email" name="contact_person_email" placeholder="Personal Email Address">
                                       @error('contact_person_email')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
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
            if ($('#fundingOrganizationForm')[0].checkValidity()) {
                $('#fundingOrganizationForm')[0].submit(); // Use the native submit method
            } else {
                $('#fundingOrganizationForm')[0].reportValidity(); // Show validation messages
            }
        });
    });

    $(document).ready(function () {

        // When the user types in the input field
        $('#funding_organization_name').on('keyup', function () {
            var inputName = $('#funding_organization_name').val(); // Get the value from input field
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
            $('#organization_code').val(result);

        });
    });



    $(document).ready(function () {
        let selectedFiles = []; // Array to manage selected files

        // When files are selected
        $('#organization_documents').on('change', function (e) {
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
            $('#organization_documents')[0].files = dataTransfer.files;

            $(this).parent().remove(); // Remove the preview
        });
    });

</script>
@endpush
