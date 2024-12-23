@extends('layouts.admin')
@section('title','Dashboard')
@section('content')
<div class="container">
   <div class="page-inner">
      <!--Page Header TOP-->
      <div class="page-header">
         <h3 class="page-title-top">Voucher List</h3>
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
               <a href="#">Voucher List</a>
            </li>
         </ul>
      </div>
      <!--Page Header TOP-->
      <div class="card">
         <div class="card-header">
            <div class="card-title">Hoverable Table</div>
         </div>
         <div class="card-body">
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
   </div>
</div>
@endsection
@push('script')

@endpush
