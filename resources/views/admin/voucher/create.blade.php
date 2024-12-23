@extends('layouts.admin')
@section('title','Dashboard')
@section('content')

    <div class="container">
        <div class="page-inner">
            <!--Page Header TOP-->
            <div class="page-header">
                <h3 class="page-title-top">Create Voucher</h3>
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
                        <a href="#">Voucher</a>
                    </li>
                    <li class="separator">
                        <i class="icon-arrow-right"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">Create Voucher</a>
                    </li>
                </ul>
            </div>
            <!--Page Header TOP-->
            <!--Create Voucher Start-->
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <!--Voucher Type-->
                            <ul class="nav nav-pills nav-secondary  nav-pills-no-bd nav-pills-icons justify-content-center"
                                id="pills-tab-with-icon" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link " id="pills-profile-tab-icon" data-bs-toggle="pill"
                                        href="#receive-voucher" role="tab" aria-controls="receive-voucher"
                                        aria-selected="false" tabindex="-1">
                                        <i class="far fa-user"></i>
                                        Receive Voucher
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" id="pills-home-tab-icon" data-bs-toggle="pill"
                                        href="#payment-voucher" role="tab" aria-controls="payment-voucher"
                                        aria-selected="true">
                                        <i class="icon-home"></i>
                                        Payment Voucher
                                    </a>
                                </li>
                                {{-- <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="pills-contact-tab-icon" data-bs-toggle="pill"
                                        href="#pills-contact-icon" role="tab" aria-controls="pills-contact-icon"
                                        aria-selected="false" tabindex="-1">
                                        <i class="far fa-envelope"></i>
                                        Cash & Bank Voucher
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="pills-contact-tab-icon" data-bs-toggle="pill"
                                        href="#pills-contact-icon" role="tab" aria-controls="pills-contact-icon"
                                        aria-selected="false" tabindex="-1">
                                        <i class="far fa-envelope"></i>
                                        Non Cash Voucher
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="pills-contact-tab-icon" data-bs-toggle="pill"
                                        href="#pills-contact-icon" role="tab" aria-controls="pills-contact-icon"
                                        aria-selected="false" tabindex="-1">
                                        <i class="far fa-envelope"></i>
                                        Accounts Receivable
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="pills-contact-tab-icon" data-bs-toggle="pill"
                                        href="#pills-contact-icon" role="tab" aria-controls="pills-contact-icon"
                                        aria-selected="false" tabindex="-1">
                                        <i class="far fa-envelope"></i>
                                        Accounts Payable
                                    </a>
                                </li> --}}
                            </ul>
                            <!--Voucher Type-->
                        </div>
                        <div class="card-body">
                            <div class="tab-content" id="pills-with-icon-tabContent">
                                <div class="tab-pane fade" id="receive-voucher" role="tabpanel"
                                    aria-labelledby="pills-home-tab-icon">
                                    <!--Receive voucher Voucher Form-->
                                    <div class="card-header voucher-card-header-bg-1">
                                        <h4 class="voucher-custom-card-title">Receive Voucher</h4>
                                    </div>
                                    <div class="card-body">
                                        <!--Voucher Form 1st Part-->
                                        <div class="card custom-voucher-card-bg-1">
                                            <div class="row">

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="defaultSelect">Project</label>
                                                        <select class="form-select form-control" id="defaultSelect">
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Voucher Create Date</label>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" id="datepicker"
                                                                name="datepicker">
                                                            <span class="input-group-text">
                                                                <i class="fa fa-calendar-check"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="defaultSelect">Currency Type</label>
                                                        <select class="form-select form-control" id="defaultSelect">
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="largeInput">Currency Rate</label>
                                                        <input type="text" class="form-control form-control"
                                                            id="defaultInput" placeholder="Currency Rate">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="largeInput">Currency Amount</label>
                                                        <input type="text" class="form-control form-control"
                                                            id="defaultInput" placeholder="Currency Amount">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Voucher Form 1st Part-->
                                        <!--Voucher Form 2nd Part-->
                                        <div class="card custom-voucher-card-bg-2">
                                            <div class="row">
                                                <div class="col-md-7">
                                                    <div class="form-group">
                                                        <label for="defaultSelect">Debit Ledger Head</label>
                                                        <select class="form-select form-control" id="defaultSelect">
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="defaultSelect">Debit Amount</label>
                                                        <select class="form-select form-control" id="defaultSelect">
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-1">
                                                    <div class="form-group" style="margin: 22px 0;">
                                                        <button class="btn btn-secondary">
                                                            <span class="btn-label">
                                                                <i class="fa fa-plus"></i>
                                                            </span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Voucher Form 2nd Part-->
                                        <!--Voucher Form 3rd Part-->
                                        <div class="card custom-voucher-card-bg-1 mt-3">
                                            <!--Credit Head-->
                                            <div class="row">
                                                <div class="col-md-7">
                                                    <div class="form-group">
                                                        <label for="defaultSelect">Credit Ledger Head</label>
                                                        <select class="form-select form-control" id="defaultSelect">
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-5">
                                                    <div class="form-group">
                                                        <label for="largeInput">Credit Amount</label>
                                                        <input type="text" class="form-control form-control"
                                                            id="defaultInput" placeholder="Credit Amount">
                                                    </div>
                                                </div>
                                            </div>
                                            <!--Credit Head-->
                                            <!--Extra Field-->
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="defaultSelect">Bank Name</label>
                                                        <select class="form-select form-control" id="defaultSelect">
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="largeInput">Bank Branch Name</label>
                                                        <input type="text" class="form-control form-control"
                                                            id="defaultInput" placeholder="Bank Branch Name">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="defaultSelect">Cheque Type</label>
                                                        <select class="form-select form-control" id="defaultSelect">
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="largeInput">Cheque Number</label>
                                                        <input type="text" class="form-control form-control"
                                                            id="defaultInput" placeholder="Cheque Number">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Cheque Date</label>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" id="datepicker"
                                                                name="datepicker">
                                                            <span class="input-group-text">
                                                                <i class="fa fa-calendar-check"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Extra Field-->
                                    </div>
                                    <!--Voucher Form 3rd Row-->
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="largeInput">Payment To</label>
                                                <input type="text" class="form-control form-control" id="defaultInput"
                                                    placeholder="Payment To">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="largeInput">Perticular/Narration</label>
                                                <input type="text" class="form-control form-control" id="defaultInput"
                                                    placeholder="Perticular/Narration">
                                            </div>
                                        </div>
                                    </div>
                                    <!--Voucher Table-->
                                    <div class="row">
                                        <div class="col-md-12">
                                            <table class="table table-bordered custom-voucher-table">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Sl</th>
                                                        <th scope="col">Credit Account</th>
                                                        <th scope="col">Currency Type</th>
                                                        <th scope="col">Currency Amount</th>
                                                        <th scope="col">Voucher Amount</th>
                                                        <th scope="col">Payment To</th>
                                                        <th scope="col">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td>Land and Land Development-10101 ( ASSETS )</td>
                                                        <td>USD</td>
                                                        <td>$100.00</td>
                                                        <td> 12,000.00</td>
                                                        <td>Ziro One Limited</td>
                                                        <td>
                                                            <button class="btn voucher-add-button">
                                                                <span class="btn-label">
                                                                </span>
                                                                <i class="fas fa-redo"></i>
                                                                Reset
                                                            </button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!--Voucher Form Last Row-->
                                    <div class="card custom-voucher-card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="largeInput">Total Payment Amount</label>
                                                        <input type="text" class="form-control form-control"
                                                            id="defaultInput" placeholder="Default Input">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="largeInput">Perticular/Narration </label>
                                                        <input type="text" class="form-control form-control"
                                                            id="defaultInput" placeholder="Default Input">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="largeInput">Supporting Documents</label>
                                                        <input type="file" class="form-control form-control"
                                                            id="defaultInput" placeholder="Default Input">
                                                    </div>
                                                </div>
                                            </div>
                                            <!--Recurring Voucher-->
                                            <div class="row">
                                                <div class="col-md-7 m-auto">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label>Is Recurring Voucher ?</label><br>
                                                                <div class="d-flex checkbox-input">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="flexRadioDefault"
                                                                            id="flexRadioDefault1">
                                                                        <label class="form-check-label mb-0"
                                                                            for="flexRadioDefault1">Yes</label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="flexRadioDefault"
                                                                            id="flexRadioDefault2" checked="">
                                                                        <label class="form-check-label mb-0"
                                                                            for="flexRadioDefault2">
                                                                            No
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="form-group">
                                                                <label>Next Voucher Generate Date</label>
                                                                <div class="input-group">
                                                                    <input type="text" class="form-control"
                                                                        id="datepicker" name="datepicker"
                                                                        placeholder="Next Voucher Generate Date">
                                                                    <span class="input-group-text">
                                                                        <i class="fa fa-calendar-check"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--Recurring Voucher-->
                                            <!--Submit & Cancel Button-->
                                            <div class="row">
                                                <div class="col-md-5 m-auto">
                                                    <div class="button-custom-margin">
                                                        <div class="double-buttons">
                                                            <a class="cancel-btn" href="#">Cancel</a>
                                                            <a class="submit-btn" href="#">Submit</a>
                                                            <span class="or">or</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--Submit & Cancel Button-->
                                        </div>
                                    </div>
                                    <!--Voucher Form Last Row-->
                                </div>

                                <div class="tab-pane fade show active" id="payment-voucher" role="tabpanel"
                                    aria-labelledby="pills-home-tab-icon">
                                    <!--Payment Voucher Form-->
                                    <div class="card-header voucher-card-header-bg-1">
                                        <h4 class="voucher-custom-card-title">Payment Voucher</h4>
                                    </div>
                                    <div class="card-body">
                                        <!--Voucher Form 1st Part-->
                                        <div class="card custom-voucher-card-bg-1">
                                            <div class="row">

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="defaultSelect">Project</label>
                                                        <select class="form-select form-control select2" id="projectDropdown">
                                                            <option value="">Select A Project</option>
                                                            @foreach ($projects as $project)
                                                            <option value="{{$project->id}}">{{$project->project_name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Voucher Create Date</label>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" id="datepicker2"
                                                                name="datepicker2">
                                                            <span class="input-group-text">
                                                                <i class="fa fa-calendar-check"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="defaultSelect">Currency Type</label>
                                                        <select class="form-select form-control select2" id="currency_type">
                                                            <option >Select Currency</option>
                                                            @foreach ($currency_types as $currency)
                                                            <option value="{{$currency->id}}">{{$currency->currency_name}} ({{$currency->currency_short_name}})</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="largeInput">Currency Rate</label>
                                                        <input type="text" class="form-control form-control"
                                                            id="defaultInput" placeholder="Currency Rate">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="largeInput">Currency Amount</label>
                                                        <input type="text" class="form-control form-control"
                                                            id="defaultInput" placeholder="Currency Amount">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Voucher Form 1st Part-->
                                        <!--Voucher Form 2nd Part-->
                                        <div class="card custom-voucher-card-bg-2 mt-3 ledger-row">
                                            <div class="row">
                                                <div class="col-md-7">
                                                    <div class="form-group">
                                                        <label for="defaultSelect">Debit Ledger Head</label>
                                                        <select class="form-select form-control select2" id="debitLedgerHead">
                                                            <option value="">Select Chart of Account</option>
                                                            @foreach ($heads as $head)
                                                            <option value="{{$head->id}}">{{$head->account_name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="debitAmount">Debit Amount</label>
                                                        <input type="number" class="form-control" name="debitAmount" id="debitAmount" min="0">
                                                    </div>
                                                </div>
                                                <div class="col-md-1">
                                                    <div class="form-group">
                                                        <button class="btn btn-secondary add-row">
                                                            <span class="btn-label">
                                                                <i class="fa fa-plus"></i>
                                                            </span>
                                                            Add
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="dynamic-rows-container"></div>
                                        <!--Voucher Form 2nd Part-->
                                        <!--Voucher Form 3rd Part-->
                                        <div class="card custom-voucher-card-bg-1 mt-3">
                                            <!--Credit Head-->
                                            <div class="row">
                                                <div class="col-md-7">
                                                    <div class="form-group">
                                                        <label for="defaultSelect">Credit Ledger Head</label>
                                                        <select class="form-select form-control" id="defaultSelect">
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-5">
                                                    <div class="form-group">
                                                        <label for="largeInput">Credit Amount</label>
                                                        <input type="text" class="form-control form-control"
                                                            id="defaultInput" placeholder="Credit Amount">
                                                    </div>
                                                </div>
                                            </div>
                                            <!--Credit Head-->
                                            <!--Extra Field-->
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="defaultSelect">Bank Name</label>
                                                        <select class="form-select form-control" id="defaultSelect">
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="largeInput">Bank Branch Name</label>
                                                        <input type="text" class="form-control form-control"
                                                            id="defaultInput" placeholder="Bank Branch Name">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="defaultSelect">Cheque Type</label>
                                                        <select class="form-select form-control" id="defaultSelect">
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="largeInput">Cheque Number</label>
                                                        <input type="text" class="form-control form-control"
                                                            id="defaultInput" placeholder="Cheque Number">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Cheque Date</label>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" id="datepicker"
                                                                name="datepicker">
                                                            <span class="input-group-text">
                                                                <i class="fa fa-calendar-check"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Extra Field-->
                                    </div>
                                    <!--Voucher Form 3rd Row-->
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="largeInput">Payment To</label>
                                                <input type="text" class="form-control form-control" id="defaultInput"
                                                    placeholder="Payment To">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="largeInput">Perticular/Narration</label>
                                                <input type="text" class="form-control form-control" id="defaultInput"
                                                    placeholder="Perticular/Narration">
                                            </div>
                                        </div>
                                    </div>
                                    <!--Voucher Table-->
                                    <div class="row">
                                        <div class="col-md-12">
                                            <table class="table table-bordered custom-voucher-table">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Sl</th>
                                                        <th scope="col">Credit Account</th>
                                                        <th scope="col">Currency Type</th>
                                                        <th scope="col">Currency Amount</th>
                                                        <th scope="col">Voucher Amount</th>
                                                        <th scope="col">Payment To</th>
                                                        <th scope="col">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td>Land and Land Development-10101 ( ASSETS )</td>
                                                        <td>USD</td>
                                                        <td>$100.00</td>
                                                        <td> 12,000.00</td>
                                                        <td>Ziro One Limited</td>
                                                        <td>
                                                            <button class="btn voucher-add-button">
                                                                <span class="btn-label">
                                                                </span>
                                                                <i class="fas fa-redo"></i>
                                                                Reset
                                                            </button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!--Voucher Form Last Row-->
                                    <div class="card custom-voucher-card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="largeInput">Total Payment Amount</label>
                                                        <input type="text" class="form-control form-control"
                                                            id="defaultInput" placeholder="Default Input">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="largeInput">Perticular/Narration </label>
                                                        <input type="text" class="form-control form-control"
                                                            id="defaultInput" placeholder="Default Input">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="largeInput">Supporting Documents</label>
                                                        <input type="file" class="form-control form-control"
                                                            id="defaultInput" placeholder="Default Input">
                                                    </div>
                                                </div>
                                            </div>
                                            <!--Recurring Voucher-->
                                            <div class="row">
                                                <div class="col-md-7 m-auto">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label>Is Recurring Voucher ?</label><br>
                                                                <div class="d-flex checkbox-input">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="flexRadioDefault"
                                                                            id="flexRadioDefault1">
                                                                        <label class="form-check-label mb-0"
                                                                            for="flexRadioDefault1">Yes</label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="flexRadioDefault"
                                                                            id="flexRadioDefault2" checked="">
                                                                        <label class="form-check-label mb-0"
                                                                            for="flexRadioDefault2">
                                                                            No
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="form-group">
                                                                <label>Next Voucher Generate Date</label>
                                                                <div class="input-group">
                                                                    <input type="text" class="form-control"
                                                                        id="datepicker" name="datepicker"
                                                                        placeholder="Next Voucher Generate Date">
                                                                    <span class="input-group-text">
                                                                        <i class="fa fa-calendar-check"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--Recurring Voucher-->
                                            <!--Submit & Cancel Button-->
                                            <div class="row">
                                                <div class="col-md-5 m-auto">
                                                    <div class="button-custom-margin">
                                                        <div class="double-buttons">
                                                            <a class="cancel-btn" href="#">Cancel</a>
                                                            <a class="submit-btn" href="#">Submit</a>
                                                            <span class="or">or</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--Submit & Cancel Button-->
                                        </div>
                                    </div>
                                    <!--Voucher Form Last Row-->
                                </div>
                                <!--Payment Voucher Form-->
                            </div>
                            <div class="tab-pane fade" id="pills-profile-icon" role="tabpanel"
                                aria-labelledby="pills-profile-tab-icon">
                            </div>
                            <div class="tab-pane fade" id="pills-contact-icon" role="tabpanel"
                                aria-labelledby="pills-contact-tab-icon">
                            </div>
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

        $('#datepicker').datetimepicker({
            format: 'MM/DD/YYYY',
        })
        $('#datepicker2').datetimepicker({
            format: 'MM/DD/YYYY',
        })

        $('.select2').select2({
            theme: "bootstrap",
            placeholder: "Select A Project",
            allowClear: true
        });
        // Listen for changes on the Project dropdown
        $('#projectDropdown').on('change', function () {
            const projectId = $(this).val();
            console.log(projectId);

            // Clear the Debit Ledger Head dropdown
            $('#debitLedgerHead').html('<option value="">Select Chart of Account</option>');

            if (projectId) {
                // Make an AJAX request to fetch chart of accounts for the selected project
                $.ajax({
                    url: `/dashboard/project/get-debit-account/${projectId}`, // Replace with your actual route
                    type: 'GET',
                    success: function (response) {
                        console.log(response);

                        if (response.success && response.debit_accounts) {
                            // Populate the Debit Ledger Head dropdown
                            response.debit_accounts.forEach(function (account) {
                                $('#debitLedgerHead').append(
                                    `<option value="${account.id}">${account.account_name}</option>`
                                );
                            });

                            // Reinitialize Select2 for the updated dropdown
                            $('#debitLedgerHead').select2({
                                theme: "bootstrap",
                                placeholder: "Select Chart of Account",
                                allowClear: true,
                            });
                        }
                    },
                    error: function (xhr, status, error) {
                        console.error('Error fetching chart of accounts:', error);
                        alert('Failed to fetch chart of accounts. Please try again.');
                    }
                });
            }
        });

        // Handle dynamic row addition
        $(document).on('click', '.add-row', function (e) {
            e.preventDefault();
            const ledgerHeads = @json($heads);
            console.log(ledgerHeads);

            const newRowId = $('#dynamic-rows-container .ledger-row').length + 1;

            // Generate options for the select dropdown
            let ledgerOptions = '<option value="">Select Chart of Account</option>';
            ledgerHeads.forEach(head => {
                ledgerOptions += `<option value="${head.id}">${head.account_name}</option>`;
            });

            const newRow = `
                <div class="ledger-row" data-row-id="${newRowId}">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="form-group">
                                <label for="debitLedgerHead-${newRowId}">Debit Ledger Head</label>
                                <select class="form-select form-control select2 debitLedgerHead" id="debitLedgerHead-${newRowId}">
                                    ${ledgerOptions}
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="debitAmount-${newRowId}">Debit Amount</label>
                                <input type="number" class="form-control" name="debitAmount[]" id="debitAmount-${newRowId}" min="0">
                            </div>
                        </div>
                        <div class="col-md-1">
                            <div class="form-group">
                                <button class="btn btn-danger remove-row">
                                    <span class="btn-label">
                                        <i class="fa fa-trash"></i>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>`;
            $('#dynamic-rows-container').append(newRow);

            // Reinitialize Select2 for the newly added row
            $(`#debitLedgerHead-${newRowId}`).select2({
                theme: "bootstrap",
                placeholder: "Select Chart of Account",
                allowClear: true,
            });
        });

        // Handle row removal
        $(document).on('click', '.remove-row', function (e) {
            e.preventDefault();
            $(this).closest('.ledger-row').remove();
        });
    });


</script>
@endpush
