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
                                                                        style="width: 373.033px;" aria-sort="ascending"
                                                                        aria-label="Name: activate to sort column descending">
                                                                        Name</th>
                                                                    <th class="sorting" tabindex="0"
                                                                        aria-controls="add-row" rowspan="1" colspan="1"
                                                                        style="width: 534.283px;"
                                                                        aria-label="Position: activate to sort column ascending">
                                                                        Position</th>
                                                                    <th class="sorting" tabindex="0"
                                                                        aria-controls="add-row" rowspan="1" colspan="1"
                                                                        style="width: 308.967px;"
                                                                        aria-label="Office: activate to sort column ascending">
                                                                        Office</th>
                                                                    <th style="width: 120.717px;" class="sorting"
                                                                        tabindex="0" aria-controls="add-row" rowspan="1"
                                                                        colspan="1"
                                                                        aria-label="Action: activate to sort column ascending">
                                                                        Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tfoot>
                                                                <tr>
                                                                    <th rowspan="1" colspan="1">Name</th>
                                                                    <th rowspan="1" colspan="1">Position</th>
                                                                    <th rowspan="1" colspan="1">Office</th>
                                                                    <th rowspan="1" colspan="1">Action</th>
                                                                </tr>
                                                            </tfoot>
                                                            <tbody>
                                                                <tr role="row" class="odd">
                                                                    <td class="sorting_1">Airi Satou</td>
                                                                    <td>Accountant</td>
                                                                    <td>Tokyo</td>
                                                                    <td>
                                                                        <div class="form-button-action">
                                                                            <button type="button"
                                                                                data-bs-toggle="tooltip" title=""
                                                                                class="btn btn-link btn-primary btn-lg"
                                                                                data-original-title="Edit Task">
                                                                                <i class="fa fa-edit"></i>
                                                                            </button>
                                                                            <button type="button"
                                                                                data-bs-toggle="tooltip" title=""
                                                                                class="btn btn-link btn-danger"
                                                                                data-original-title="Remove">
                                                                                <i class="fa fa-times"></i>
                                                                            </button>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr role="row" class="odd">
                                                                    <td class="sorting_1">Airi Satou</td>
                                                                    <td>Accountant</td>
                                                                    <td>Tokyo</td>
                                                                    <td>
                                                                        <div class="form-button-action">
                                                                            <button type="button"
                                                                                data-bs-toggle="tooltip" title=""
                                                                                class="btn btn-link btn-primary btn-lg"
                                                                                data-original-title="Edit Task">
                                                                                <i class="fa fa-edit"></i>
                                                                            </button>
                                                                            <button type="button"
                                                                                data-bs-toggle="tooltip" title=""
                                                                                class="btn btn-link btn-danger"
                                                                                data-original-title="Remove">
                                                                                <i class="fa fa-times"></i>
                                                                            </button>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr role="row" class="even">
                                                                    <td class="sorting_1">Ashton Cox</td>
                                                                    <td>Junior Technical Author</td>
                                                                    <td>San Francisco</td>
                                                                    <td>
                                                                        <div class="form-button-action">
                                                                            <button type="button"
                                                                                data-bs-toggle="tooltip" title=""
                                                                                class="btn btn-link btn-primary btn-lg"
                                                                                data-original-title="Edit Task">
                                                                                <i class="fa fa-edit"></i>
                                                                            </button>
                                                                            <button type="button"
                                                                                data-bs-toggle="tooltip" title=""
                                                                                class="btn btn-link btn-danger"
                                                                                data-original-title="Remove">
                                                                                <i class="fa fa-times"></i>
                                                                            </button>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr role="row" class="odd">
                                                                    <td class="sorting_1">Brielle Williamson</td>
                                                                    <td>Integration Specialist</td>
                                                                    <td>New York</td>
                                                                    <td>
                                                                        <div class="form-button-action">
                                                                            <button type="button"
                                                                                data-bs-toggle="tooltip" title=""
                                                                                class="btn btn-link btn-primary btn-lg"
                                                                                data-original-title="Edit Task">
                                                                                <i class="fa fa-edit"></i>
                                                                            </button>
                                                                            <button type="button"
                                                                                data-bs-toggle="tooltip" title=""
                                                                                class="btn btn-link btn-danger"
                                                                                data-original-title="Remove">
                                                                                <i class="fa fa-times"></i>
                                                                            </button>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr role="row" class="even">
                                                                    <td class="sorting_1">Cedric Kelly</td>
                                                                    <td>Senior Javascript Developer</td>
                                                                    <td>Edinburgh</td>
                                                                    <td>
                                                                        <div class="form-button-action">
                                                                            <button type="button"
                                                                                data-bs-toggle="tooltip" title=""
                                                                                class="btn btn-link btn-primary btn-lg"
                                                                                data-original-title="Edit Task">
                                                                                <i class="fa fa-edit"></i>
                                                                            </button>
                                                                            <button type="button"
                                                                                data-bs-toggle="tooltip" title=""
                                                                                class="btn btn-link btn-danger"
                                                                                data-original-title="Remove">
                                                                                <i class="fa fa-times"></i>
                                                                            </button>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr role="row" class="odd">
                                                                    <td class="sorting_1">Colleen Hurst</td>
                                                                    <td>Javascript Developer</td>
                                                                    <td>San Francisco</td>
                                                                    <td>
                                                                        <div class="form-button-action">
                                                                            <button type="button"
                                                                                data-bs-toggle="tooltip" title=""
                                                                                class="btn btn-link btn-primary btn-lg"
                                                                                data-original-title="Edit Task">
                                                                                <i class="fa fa-edit"></i>
                                                                            </button>
                                                                            <button type="button"
                                                                                data-bs-toggle="tooltip" title=""
                                                                                class="btn btn-link btn-danger"
                                                                                data-original-title="Remove">
                                                                                <i class="fa fa-times"></i>
                                                                            </button>
                                                                        </div>
                                                                    </td>
                                                                </tr>
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

@endpush
