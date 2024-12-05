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
                                       <label for="largeInput">Funding Organization Name</label>
                                       <input type="text" class="form-control form-control" id="defaultInput" placeholder="Funding Organization Name">
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="form-group custom-padding">
                                       <label for="largeInput">Organization ID</label>
                                       <input type="text" class="form-control form-control" id="defaultInput" placeholder="Organization ID">
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="form-group custom-padding">
                                       <label for="defaultSelect">Country</label>
                                       <select class="form-select form-control" id="defaultSelect">
                                          <option>Country</option>
                                       </select>
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="form-group custom-padding">
                                       <label for="largeInput">Organization Address</label>
                                       <input type="text" class="form-control form-control" id="defaultInput" placeholder="Organization Address">
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="form-group custom-padding">
                                       <label for="defaultSelect">Donor Type</label>
                                       <select class="form-select form-control" id="defaultSelect">
                                          <option>Donor Type</option>
                                       </select>
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="form-group custom-padding">
                                       <label for="largeInput">Organization Contact Number</label>
                                       <input type="text" class="form-control form-control" id="defaultInput" placeholder="Organization Contact Number">
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="form-group custom-padding">
                                       <label for="largeInput">Organization E-mail</label>
                                       <input type="text" class="form-control form-control" id="defaultInput" placeholder="Organization E-mail">
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="form-group custom-padding">
                                       <label for="largeInput">Organization Website</label>
                                       <input type="text" class="form-control form-control" id="defaultInput" placeholder="Organization Website">
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="form-group custom-padding">
                                       <label for="largeInput">Documents</label>
                                       <input type="file" class="form-control form-control" id="defaultInput" placeholder="Documents">
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
                              <h4 class="custom-c-h-title">Contact Person Details</h4>
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
                                       <label for="largeInput">Designation</label>
                                       <input type="text" class="form-control form-control" id="defaultInput" placeholder="Designation">
                                    </div>
                                 </div>
                                 <div class="col-12">
                                    <div class="form-group custom-padding">
                                       <label for="largeInput">Personal Contact Number</label>
                                       <input type="text" class="form-control form-control" id="defaultInput" placeholder="Personal Contact Number">
                                    </div>
                                 </div>
                                 <div class="col-12">
                                    <div class="form-group custom-padding">
                                       <label for="largeInput">Personal Whatsapp Number</label>
                                       <input type="text" class="form-control form-control" id="defaultInput" placeholder="Personal Whatsapp Number">
                                    </div>
                                 </div>
                                 <div class="col-12">
                                    <div class="form-group custom-padding">
                                       <label for="largeInput">Personal Email Address</label>
                                       <input type="text" class="form-control form-control" id="defaultInput" placeholder="Personal Email Address">
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
