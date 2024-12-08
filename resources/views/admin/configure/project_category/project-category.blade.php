@extends('layouts.admin')
@section('title','Dashboard')
@section('content')
<div class="container">
    <div class="page-inner">
        <!--Page Header TOP-->
        <div class="page-header">
            <h3 class="page-title-top">Project Category</h3>
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
                    <a href="#">Project Category</a>
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
                                                class="fas fa-compress"></i></span>Create new Project Category</h4>
                                </div>
                                <div class="col-md-5">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Double Part Card Header-->
                    <div class="card-body">

                        <div class="row">
                            <div class="col-md-4">
                                @if ($project_category)
                                <form action="{{ route('project_category.update', $project_category->id) }}" id="projectCategoryForm"
                                    method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT') <!-- Laravel's method directive for PUT -->
                                    <div class="card custom-c-bg1">
                                        <div class="card-header custom-c-h-bg1">
                                            <h4 class="custom-c-h-title">Update Project Category</h4>
                                        </div>
                                        <div class="card-body custom-c-b-padding">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group custom-padding">
                                                        <label for="project_category_name">Project Category Name<span
                                                            class="text-danger">*</span></label>
                                                        <input type="text" class="form-control" id="project_category_name" name="project_category_name"
                                                            placeholder="Project Category Name" value="{{ $project_category->project_category_name}}">
                                                        @error('project_category_name')
                                                        <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group custom-padding">
                                                        <label for="project_category_code">Project Category Code<span
                                                            class="text-danger">*</span></label>
                                                        <input type="text" class="form-control" id="new_project_category_code" name="project_category_code"
                                                            placeholder="Project Category Code" value="{{ $project_category->project_category_code}}" readonly>
                                                        @error('project_category_code')
                                                        <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group custom-padding">
                                                        <label for="status">Status</label>
                                                        <select class="form-select form-control" id="status" name="status">
                                                            <option value="1" {{ $project_category->status == 1 ? 'selected' : '' }}>Active</option>
                                                            <option value="0" {{ $project_category->status == 0 ? 'selected' : '' }}>Inactive</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <!--Submit & Cancel Button-->
                                                <div class="col-12">
                                                    <div class="button-custom-margin">
                                                        <div class="double-buttons">
                                                            <a class="cancel-btn" href="{{route('project_category.index')}}">Cancel</a>
                                                            <a class="submit-btn" href="#">Update</a>
                                                            <span class="or">or</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--Submit & Cancel Button-->
                                            </div>
                                        </div>
                                    </div>
                                </form>

                                @else
                                <form action="{{route('project_category.store')}}" id="projectCategoryForm"
                                    method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="card custom-c-bg1">
                                        <div class="card-header custom-c-h-bg1">
                                            <h4 class="custom-c-h-title">Create new Project Category</h4>
                                        </div>
                                        <div class="card-body custom-c-b-padding">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group custom-padding">
                                                        <label for="project_category_name">Project Category Name</label>
                                                        <input type="text" class="form-control form-control"
                                                            id="project_category_name" name="project_category_name"
                                                            placeholder="Project Category Name">
                                                        @error('project_category_name')
                                                        <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group custom-padding">
                                                        <label for="project_category_code">Project Category Code</label>
                                                        <input type="text" class="form-control form-control"
                                                            id="project_category_code" name="project_category_code"
                                                            placeholder="Project Category Code" readonly>
                                                        @error('project_category_code')
                                                        <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group custom-padding">
                                                        <label for="status">Status</label>
                                                        <select class="form-select form-control" id="status"
                                                            name="status">
                                                            <option value="1">Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <!--Submit & Cancel Button-->
                                                <div class="col-12">
                                                    <div class="button-custom-margin">
                                                        <div class="double-buttons">
                                                            <a class="cancel-btn" href="{{route('project_category.index')}}">Cancel</a>
                                                            <a class="submit-btn" href="#">Submit</a>
                                                            <span class="or">or</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--Submit & Cancel Button-->
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                @endif
                            </div>
                            <div class="col-md-8">
                                <div class="card custom-c-bg1">
                                    <div class="card-header custom-c-h-bg1">
                                        <h4 class="custom-c-h-title">Project Categories</h4>
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
                                                                        Project Code</th>
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
                                                                @foreach ($project_categories as $key =>
                                                                $project_category)
                                                                <tr role="row" class="odd">
                                                                    <td>{{$key+1}}</td>
                                                                    <td>{{$project_category->project_category_name}}
                                                                    </td>
                                                                    <td>{{$project_category->project_category_code}}
                                                                    </td>
                                                                    <td>
                                                                        @if ($project_category->status==1)
                                                                        <a class="badge bg-success text-light round"
                                                                            href="{{route('project_category.activeordeactive',$project_category->id)}}">
                                                                            Active
                                                                        </a>
                                                                        @else
                                                                        <a class="badge bg-danger text-light round"
                                                                            href="{{route('project_category.activeordeactive',$project_category->id)}}">
                                                                            Inactive
                                                                        </a>
                                                                        @endif
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-button-action">
                                                                            <a
                                                                                href="{{route('project_category.edit',$project_category->id)}}">
                                                                                <button type="button"
                                                                                    data-bs-toggle="tooltip" title=""
                                                                                    class="btn btn-link btn-primary btn-lg"
                                                                                    data-original-title="Edit Task">
                                                                                    <i class="fa fa-edit"></i>
                                                                                </button>
                                                                            </a>
                                                                            <form
                                                                                action="{{ route('project_category.destroy', $project_category->id) }}"
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
            if ($('#projectCategoryForm')[0].checkValidity()) {
                $('#projectCategoryForm')[0].submit(); // Use the native submit method
            } else {
                $('#projectCategoryForm')[0].reportValidity(); // Show validation messages
            }
        });
        $('#project_category_code').val(generateRandomNumber());
    });

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

</script>
@endpush
