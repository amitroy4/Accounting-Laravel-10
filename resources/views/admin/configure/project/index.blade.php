@extends('layouts.admin')
@section('title','Dashboard')
@section('content')
<div class="container">
    <div class="page-inner">
        <!--Page Header TOP-->
        <div class="page-header">
            <h3 class="page-title-top">Project List</h3>
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
                    <a href="#">Project List</a>
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
                                                class="fas fa-compress"></i></span>Project List</h4>
                                </div>
                                <div class="col-md-6 d-flex justify-content-end">
                                    <a href="{{route('project.create')}}"
                                        class="btn btn-primary btn-round">
                                        <i class="fa fa-plus"></i>
                                        Add Project
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
                                        <h4 class="custom-c-h-title">Project List</h4>
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
                                                                        Project Name</th>
                                                                    <th class="sorting" tabindex="0"
                                                                        aria-controls="add-row" rowspan="1" colspan="1"
                                                                        style="width: 534.283px;"
                                                                        aria-label="Position: activate to sort column ascending">
                                                                        Short Name</th>
                                                                    <th class="sorting" tabindex="0"
                                                                        aria-controls="add-row" rowspan="1" colspan="1"
                                                                        style="width: 308.967px;"
                                                                        aria-label="Office: activate to sort column ascending">
                                                                        Parent Project</th>
                                                                    <th class="sorting" tabindex="0"
                                                                        aria-controls="add-row" rowspan="1" colspan="1"
                                                                        style="width: 308.967px;"
                                                                        aria-label="Office: activate to sort column ascending">
                                                                        Project Budget</th>
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
                                                                @foreach ($projects as $key => $project)
                                                                <tr role="row" class="odd">
                                                                    <td>{{$key+1}}</td>
                                                                    <td><b>{{$project->project_name}}</b></td>
                                                                    <td><b>{{$project->project_short_name}}</b> <br>
                                                                        {{$project->project_code}}
                                                                    </td>
                                                                    <td>{{$project->parentProject?$project->parentProject->project_name:'N/A'}}
                                                                    </td>
                                                                    <td>{{$project->project_budget}}
                                                                    </td>
                                                                    <td>
                                                                        @if ($project->status==1)
                                                                        <a class="badge bg-success text-light round"
                                                                            href="{{route('project.activeordeactive',$project->id)}}">
                                                                            Active
                                                                        </a>
                                                                        @else
                                                                        <a class="badge bg-danger text-light round"
                                                                            href="{{route('project.activeordeactive',$project->id)}}">
                                                                            Inactive
                                                                        </a>
                                                                        @endif
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-button-action align-items-center">
                                                                            <a
                                                                                href="{{route('project.edit',$project->id)}}">
                                                                                <button type="button"
                                                                                    data-bs-toggle="tooltip" title=""
                                                                                    class="btn btn-link btn-primary btn-lg"
                                                                                    data-original-title="Edit Task">
                                                                                    <i class="fa fa-edit"></i>
                                                                                </button>
                                                                            </a>
                                                                            <form
                                                                                action="{{ route('project.destroy', $project->id) }}"
                                                                                method="POST" style="display:inline;"
                                                                                onsubmit="event.preventDefault(); confirmDelete(this);">
                                                                                @csrf
                                                                                @method('DELETE')
                                                                                <button type="submit"
                                                                                    data-bs-toggle="tooltip"
                                                                                    title="Remove"
                                                                                    class="btn btn-link btn-danger">
                                                                                    <i class="fa fa-times"></i>
                                                                                </button>
                                                                            </form>
                                                                            <a href="javascript:void(0);">
                                                                                <button type="button"
                                                                                    class="addFileButton btn btn-link btn-primary btn-lg"
                                                                                    data-id="{{ $project->id }}"
                                                                                    title="Add File"
                                                                                    data-original-title="Add File"
                                                                                    data-bs-target="#fileUploadModal"
                                                                                    data-bs-toggle="modal">
                                                                                    <i class="fa fa-file"
                                                                                        aria-hidden="true"></i>
                                                                                </button>
                                                                            </a>

                                                                        </div>
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

        <!-- Modal -->
        <div class="modal fade" id="fileUploadModal" tabindex="-1" aria-labelledby="fileUploadModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="fileUploadModalLabel">Document Upload</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{route('project.addfile')}}" id="fundingOrganizationForm" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <input type="text" id="organization_code" name="organization_code" style="display: none;">
                        <div class="col-md-12">
                            <div class="form-group custom-padding">
                                <label for="organization_documents" class="form-label">Documents</label>
                                <input
                                    type="file"
                                    class="form-control"
                                    id="organization_documents"
                                    name="organization_documents[]"
                                    multiple>
                            </div>
                            <div id="preview-container" class="mt-3 row g-1">
                                <!-- Previews will be displayed here -->
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Upload</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <!--Company Add Form-->
    </div>
</div>
@endsection
@push('script')
<script>
    function confirmDelete(form) {
        swal({
            title: "Are you sure?",
            text: "You will not be able to recover this data!",
            icon: "warning",
            buttons: ["Cancel", "Yes, delete it!"],
            dangerMode: true,
        }).then((willDelete) => {
            if (willDelete) {
                form.submit();
                swal("Deleted!", "Company has been deleted.", "success");
            } else {
                swal("Your data is safe!");
            }
        });
    }

    // // Trigger the file input when the corresponding button is clicked
    $(document).on('click', '.addFileButton', function () {
        let fundingOrganizationId = $(this).data('id'); // Get the organization ID from the button
        $('#organization_code').val(fundingOrganizationId);
        // $('.fileInput[data-id="' + fundingOrganizationId + '"]').click(); // Trigger the corresponding file input
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
                        preview = `<img src="${e.target.result}" class="img-thumbnail" style="max-width: 100px; max-height: 100px;">`;
                    } else if (fileType === 'application/pdf') {
                        preview = `<embed src="${e.target.result}" type="application/pdf" class="border" style="width: 100px; height: 100px;">`;
                    } else {
                        preview = `<div class="alert alert-secondary p-2" style="width: 100px; height: 100px; display: flex; align-items: center; justify-content: center;">${file.name}</div>`;
                    }

                    // Append preview with a remove button
                    previewContainer.append(`
                        <div class="col-md-3 text-center position-relative">
                            ${preview}
                            <button type="button" class="btn btn-sm btn-danger remove-btn position-absolute top-0 end-1 m-1" data-index="${index}">&times;</button>
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
