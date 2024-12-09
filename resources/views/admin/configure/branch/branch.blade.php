@extends('layouts.admin')
@section('title','Dashboard')
@section('content')
<div class="container">
    <div class="page-inner">
        <!--Page Header TOP-->
        <div class="page-header">
            <h3 class="page-title-top">branch List</h3>
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
                    <a href="#">branch List</a>
                </li>
            </ul>
        </div>
        <!--Page Header TOP-->
        <!--branch Add Form-->
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <!--Double Part Card Header-->
                    <div class="card-header">
                        <div class="c-h-double">
                            <div class="row">
                                <div class="col-md-6 c-h-separator-r">
                                    <h4 class="custom-c-h-main-title"><span class="c-h-icon"><i
                                                class="fas fa-compress"></i></span>branch List</h4>
                                </div>
                                <div class="col-md-6 d-flex justify-content-end">
                                    <a href="{{route('branch.create')}}" class="btn btn-primary btn-round">
                                        <i class="fa fa-plus"></i>
                                        Add branch
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
                                        <h4 class="custom-c-h-title">branch List</h4>
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
                                                                        Branch</th>
                                                                    <th class="sorting_asc" tabindex="0"
                                                                        aria-controls="add-row" rowspan="1" colspan="1"
                                                                        style="width: 373.033px;" aria-sort="ascending"
                                                                        aria-label="Name: activate to sort column descending">
                                                                        Parent Branch</th>
                                                                    <th class="sorting" tabindex="0"
                                                                        aria-controls="add-row" rowspan="1" colspan="1"
                                                                        style="width: 534.283px;"
                                                                        aria-label="Position: activate to sort column ascending">
                                                                        Address</th>
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
                                                                @foreach ($branches as $key => $branch)
                                                                <tr role="row" class="odd">
                                                                    <td>{{$key+1}}</td>
                                                                    <td class=" d-flex align-items-center">
                                                                        <img src="{{ asset('storage/' . $branch->branch_logo) }}" alt="{{ $branch->branch_name }}" width="100">
                                                                        <div class=" ps-4">
                                                                           <b>{{$branch->branch_name}}</b> <br>
                                                                            {{$branch->branch_code}}
                                                                        </div>
                                                                    </td>
                                                                    <td>{{ $branch->parentBranch ? $branch->parentBranch->branch_name : 'Main Branch' }}
                                                                    </td>
                                                                    <td>{{$branch->branch_address}},{{$branch->branch_district}}, {{$branch->branch_zipcode}}</td>
                                                                    <td>
                                                                        @if ($branch->status==1)
                                                                        <a class="badge bg-success text-light round" href="{{route('branch.activeordeactive',$branch->id)}}">
                                                                            Active
                                                                        </a>
                                                                        @else
                                                                        <a class="badge bg-danger text-light round" href="{{route('branch.activeordeactive',$branch->id)}}">
                                                                            Inactive
                                                                        </a>
                                                                        @endif
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-button-action">
                                                                            <a href="{{route('branch.edit',$branch->id)}}">
                                                                                <button type="button"
                                                                                data-bs-toggle="tooltip" title=""
                                                                                class="btn btn-link btn-primary btn-lg"
                                                                                data-original-title="Edit Task">
                                                                                <i class="fa fa-edit"></i>
                                                                            </button>
                                                                            </a>
                                                                            <form action="{{ route('branch.destroy', $branch->id) }}" method="POST" style="display:inline;"  onsubmit="event.preventDefault(); confirmDelete(this);">
                                                                                @csrf
                                                                                @method('DELETE')
                                                                                <button type="submit" data-bs-toggle="tooltip" title="Remove" class="btn btn-link btn-danger">
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
        <!--branch Add Form-->
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
                swal("Deleted!", "Branch has been deleted.", "success");
            } else {
                swal("Your Branch is safe!");
            }
        });
    }
</script>
@endpush
