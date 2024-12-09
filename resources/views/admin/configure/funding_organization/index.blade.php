@extends('layouts.admin')
@section('title','Dashboard')
@section('content')
<div class="container">
    <div class="page-inner">
        <!--Page Header TOP-->
        <div class="page-header">
            <h3 class="page-title-top">Funding Organization List</h3>
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
                    <a href="#">Funding Organization List</a>
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
                                                class="fas fa-compress"></i></span>Funding Organization List</h4>
                                </div>
                                <div class="col-md-6 d-flex justify-content-end">
                                    <a href="{{route('funding_organization.create')}}" class="btn btn-primary btn-round">
                                        <i class="fa fa-plus"></i>
                                        Add Funding Organization
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
                                        <h4 class="custom-c-h-title">Funding Organization List</h4>
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
                                                                        Funding Organization</th>
                                                                    <th class="sorting" tabindex="0"
                                                                        aria-controls="add-row" rowspan="1" colspan="1"
                                                                        style="width: 534.283px;"
                                                                        aria-label="Position: activate to sort column ascending">
                                                                        Country</th>
                                                                    <th class="sorting" tabindex="0"
                                                                        aria-controls="add-row" rowspan="1" colspan="1"
                                                                        style="width: 308.967px;"
                                                                        aria-label="Office: activate to sort column ascending">
                                                                        Address</th>
                                                                    <th class="sorting" tabindex="0"
                                                                        aria-controls="add-row" rowspan="1" colspan="1"
                                                                        style="width: 308.967px;"
                                                                        aria-label="Office: activate to sort column ascending">
                                                                        Email</th>
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
                                                                @foreach ($funding_organizations as $key => $funding_organization)
                                                                <tr role="row" class="odd">
                                                                    <td>{{$key+1}}</td>
                                                                    <td>
                                                                        {{$funding_organization->funding_organization_name}} <br>
                                                                        {{$funding_organization->organization_code}}
                                                                    </td>
                                                                    <td>{{$countries[$funding_organization->country] ?? 'Unknown Country'}}</td>
                                                                    <td>{{$funding_organization->organization_address}}</td>
                                                                    <td>{{$funding_organization->organization_email}}</td>
                                                                    <td>
                                                                        @if ($funding_organization->status==1)
                                                                        <a class="badge bg-success text-light round" href="{{route('funding_organization.activeordeactive',$funding_organization->id)}}">
                                                                            Active
                                                                        </a>
                                                                        @else
                                                                        <a class="badge bg-danger text-light round" href="{{route('funding_organization.activeordeactive',$funding_organization->id)}}">
                                                                            Inactive
                                                                        </a>
                                                                        @endif
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-button-action">
                                                                            <a href="{{route('funding_organization.edit',$funding_organization->id)}}">
                                                                                <button type="button"
                                                                                data-bs-toggle="tooltip" title=""
                                                                                class="btn btn-link btn-primary btn-lg"
                                                                                data-original-title="Edit Task">
                                                                                <i class="fa fa-edit"></i>
                                                                            </button>
                                                                            </a>
                                                                            <form action="{{ route('funding_organization.destroy', $funding_organization->id) }}" method="POST" style="display:inline;"  onsubmit="event.preventDefault(); confirmDelete(this);">
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
</script>
@endpush
