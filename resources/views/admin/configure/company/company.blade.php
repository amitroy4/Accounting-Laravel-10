@extends('layouts.admin')
@section('title','Dashboard')
@section('content')
<div class="container">
   <div class="page-inner">
      <!--Page Header TOP-->
      <div class="page-header">
         <h3 class="page-title-top">Add Company</h3>
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
               <a href="#">Add Company</a>
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
                        <div class="col-md-5 c-h-separator-r">
                           <h4 class="custom-c-h-main-title"><span class="c-h-icon"><i class="fas fa-compress"></i></span>Add Company</h4>
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
                              <h4 class="custom-c-h-title">Company Information</h4>
                           </div>
                           <div class="card-body custom-c-b-padding">
                              <!--1st Row -->
                              <div class="row">
                                 <div class="col-md-6">
                                    <div class="form-group custom-padding">
                                       <label for="largeInput">Company Name</label>
                                       <input type="text" class="form-control form-control" id="defaultInput" placeholder="Company Name">
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="form-group custom-padding">
                                       <label for="largeInput">Company Short Name</label>
                                       <input type="text" class="form-control form-control" id="defaultInput" placeholder="Company Short Name">
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="form-group custom-padding">
                                       <label for="largeInput">Company Address</label>
                                       <input type="text" class="form-control form-control" id="defaultInput" placeholder="Company Address">
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
                                       <label for="largeInput">Company ID</label>
                                       <input type="text" class="form-control form-control" id="defaultInput" placeholder="Company ID">
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="form-group custom-padding">
                                       <label for="largeInput">Registration Number</label>
                                       <input type="text" class="form-control form-control" id="defaultInput" placeholder="Registration Number">
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="form-group custom-padding">
                                       <label for="largeInput">Company Logo</label>
                                       <input type="file" class="form-control form-control" id="defaultInput" placeholder="Company Logo">
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
                              <h4 class="custom-c-h-title">Contact Information</h4>
                           </div>
                           <div class="card-body custom-c-b-padding">
                              <div class="row">
                                 <div class="col-12">
                                    <div class="form-group custom-padding">
                                       <label for="largeInput">Contact Number</label>
                                       <input type="text" class="form-control form-control" id="defaultInput" placeholder="Contact Number">
                                    </div>
                                 </div>
                                 <div class="col-12">
                                    <div class="form-group custom-padding">
                                       <label for="largeInput">Land Line Number</label>
                                       <input type="text" class="form-control form-control" id="defaultInput" placeholder="Land Line Number">
                                    </div>
                                 </div>
                                 <div class="col-12">
                                    <div class="form-group custom-padding">
                                       <label for="largeInput">Whatsapp Number</label>
                                       <input type="text" class="form-control form-control" id="defaultInput" placeholder="Whatsapp Number">
                                    </div>
                                 </div>
                                 <div class="col-12">
                                    <div class="form-group custom-padding">
                                       <label for="largeInput">Email Address</label>
                                       <input type="text" class="form-control form-control" id="defaultInput" placeholder="Email Address">
                                    </div>
                                 </div>
                                 <div class="col-12">
                                    <div class="form-group custom-padding">
                                       <label for="largeInput">Company Website</label>
                                       <input type="text" class="form-control form-control" id="defaultInput" placeholder="Company Website">
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

@endpush
