@extends('layouts.admin')
@section('title','Dashboard')
@section('content')
<div class="container">
   <div class="page-inner">
      <!--Page Header TOP-->
      <div class="page-header">
         <h3 class="page-title-top">Create new Branch</h3>
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
               <a href="#">Create new Branch</a>
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
                           <h4 class="custom-c-h-main-title"><span class="c-h-icon"><i class="fas fa-compress"></i></span>Create New Branch</h4>
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
                              <h4 class="custom-c-h-title">Branch Information</h4>
                           </div>
                           <div class="card-body custom-c-b-padding">
                              <div class="row">
                                 <div class="col-md-6">
                                    <div class="form-group custom-padding">
                                       <label for="largeInput">Branch Name</label>
                                       <input type="text" class="form-control form-control" id="defaultInput" placeholder="Branch Name">
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="form-group custom-padding">
                                       <label for="largeInput">Branch ID</label>
                                       <input type="text" class="form-control form-control" id="defaultInput" placeholder="Branch ID">
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="form-group custom-padding">
                                       <label for="defaultSelect">Parent Company or Branch</label>
                                       <select class="form-select form-control" id="defaultSelect">
                                          <option>Active</option>
                                       </select>
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="form-group custom-padding">
                                       <label>Branch Opening Time</label>
                                       <div class="input-group">
                                          <input type="text" class="form-control" id="timepicker" name="timepicker">
                                          <span class="input-group-text">
                                          <i class="fa fa-clock"></i>
                                          </span>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="form-group custom-padding">
                                       <label>Branch Closing Time</label>
                                       <div class="input-group">
                                          <input type="text" class="form-control" id="timepicker" name="timepicker">
                                          <span class="input-group-text">
                                          <i class="fa fa-clock"></i>
                                          </span>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="form-group custom-padding">
                                       <label for="largeInput">Branch Address</label>
                                       <input type="text" class="form-control form-control" id="defaultInput" placeholder="Branch Address">
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="form-group custom-padding">
                                       <label for="largeInput">District</label>
                                       <input type="text" class="form-control form-control" id="defaultInput" placeholder="District">
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="form-group custom-padding">
                                       <label for="largeInput">Zip Code</label>
                                       <input type="text" class="form-control form-control" id="defaultInput" placeholder="Zip Code">
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="form-group custom-padding">
                                       <label for="largeInput">Branch Logo</label>
                                       <input type="file" class="form-control form-control" id="defaultInput" placeholder="Branch Logo">
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="form-group custom-padding">
                                       <label for="defaultSelect">Status</label>
                                       <select class="form-select form-control" id="defaultSelect">
                                          <option>Active</option>
                                       </select>
                                    </div>
                                 </div>
                              </div>
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
                                       <label for="largeInput">Contact Person Name</label>
                                       <input type="text" class="form-control form-control" id="defaultInput" placeholder="Contact Person Name">
                                    </div>
                                 </div>
                                 <div class="col-12">
                                    <div class="form-group custom-padding">
                                       <label for="largeInput">Branch Contact Number</label>
                                       <input type="text" class="form-control form-control" id="defaultInput" placeholder="Branch Contact Number">
                                    </div>
                                 </div>
                                 <div class="col-12">
                                    <div class="form-group custom-padding">
                                       <label for="largeInput">Branch Land Line Number</label>
                                       <input type="text" class="form-control form-control" id="defaultInput" placeholder="Branch Land Line Number">
                                    </div>
                                 </div>
                                 <div class="col-12">
                                    <div class="form-group custom-padding">
                                       <label for="largeInput">Branch Whatsapp Number</label>
                                       <input type="text" class="form-control form-control" id="defaultInput" placeholder="Branch Whatsapp Number">
                                    </div>
                                 </div>
                                 <div class="col-12">
                                    <div class="form-group custom-padding">
                                       <label for="largeInput">Branch Email Address</label>
                                       <input type="text" class="form-control form-control" id="defaultInput" placeholder="Branch Email Address">
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

@endpush
