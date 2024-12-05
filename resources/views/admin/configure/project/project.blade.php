@extends('layouts.admin')
@section('title','Dashboard')
@section('content')
<div class="container">
   <div class="page-inner">
      <!--Page Header TOP-->
      <div class="page-header">
         <h3 class="page-title-top">Add new Project</h3>
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
               <a href="#">Add new Project</a>
            </li>
         </ul>
      </div>
      <!--Page Header TOP-->
      <!--Project Add Form-->
      <div class="row">
         <div class="col-md-12">
            <div class="card">
               <!--Double Part Card Header-->
               <div class="card-header">
                  <div class="c-h-double">
                     <div class="row">
                        <div class="col-md-5 c-h-separator-r">
                           <h4 class="custom-c-h-main-title"><span class="c-h-icon"><i class="fas fa-compress"></i></span>Create New Project</h4>
                        </div>
                        <div class="col-md-5">
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
                              <h4 class="custom-c-h-title">Project Information</h4>
                           </div>
                           <div class="card-body custom-c-b-padding">
                              <!--1st Row -->
                              <div class="row">
                                 <div class="col-md-6">
                                    <div class="form-group custom-padding">
                                       <label for="largeInput">Project Name</label>
                                       <input type="text" class="form-control form-control" id="defaultInput" placeholder="Project Name">
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="form-group custom-padding">
                                       <label for="largeInput">Project Short Name</label>
                                       <input type="text" class="form-control form-control" id="defaultInput" placeholder="Project Short Name">
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="form-group custom-padding">
                                       <label for="largeInput">Project ID</label>
                                       <input type="text" class="form-control form-control" id="defaultInput" placeholder="Project ID">
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="form-group custom-padding">
                                       <label for="defaultSelect">Parent Project</label>
                                       <select class="form-select form-control" id="defaultSelect">
                                          <option>Project-1</option>
                                       </select>
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="form-group custom-padding">
                                       <label for="largeInput">Project Area / Address</label>
                                       <input type="text" class="form-control form-control" id="defaultInput" placeholder="Project Area / Address">
                                    </div>
                                 </div>
                                 <div class="col-md-4">
                                    <div class="form-group custom-padding">
                                       <label for="defaultSelect">Project Category</label>
                                       <select class="form-select form-control" id="defaultSelect">
                                          <option>Category</option>
                                       </select>
                                    </div>
                                 </div>
                                 <div class="col-md-4">
                                    <div class="form-group custom-padding">
                                       <label for="largeInput">Project Budget</label>
                                       <input type="text" class="form-control form-control" id="defaultInput" placeholder="Project Budget">
                                    </div>
                                 </div>
                                 <div class="col-md-4">
                                    <div class="form-group custom-padding">
                                       <label for="defaultSelect">Currency Type</label>
                                       <select class="form-select form-control" id="defaultSelect">
                                          <option>Yes</option>
                                       </select>
                                    </div>
                                 </div>
                                 <div class="col-md-4">
                                    <div class="form-group custom-padding">
                                       <label for="defaultSelect">Is Core Project?</label>
                                       <select class="form-select form-control" id="defaultSelect">
                                          <option>Yes</option>
                                       </select>
                                    </div>
                                 </div>
                                 <div class="col-md-4">
                                    <div class="form-group custom-padding">
                                       <label>Start Date</label>
                                       <div class="input-group">
                                          <input type="text" class="form-control" id="datepicker" name="datepicker">
                                          <span class="input-group-text">
                                          <i class="fa fa-calendar-check"></i>
                                          </span>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-md-4">
                                    <div class="form-group custom-padding">
                                       <label for="defaultSelect">Status</label>
                                       <select class="form-select form-control" id="defaultSelect">
                                          <option>Yes</option>
                                       </select>
                                    </div>
                                 </div>
                                 <div class="col-md-4">
                                    <div class="form-group custom-padding">
                                       <label for="defaultSelect">Is Core Project?</label>
                                       <select class="form-select form-control" id="defaultSelect">
                                          <option>No</option>
                                       </select>
                                    </div>
                                 </div>
                                 <div class="col-md-4">
                                    <div class="form-group custom-padding">
                                       <label>Project Start Date</label>
                                       <div class="input-group">
                                          <input type="text" class="form-control" id="datepicker" name="datepicker">
                                          <span class="input-group-text">
                                          <i class="fa fa-calendar-check"></i>
                                          </span>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-md-4">
                                    <div class="form-group custom-padding">
                                       <label>Project End Date</label>
                                       <div class="input-group">
                                          <input type="text" class="form-control" id="datepicker" name="datepicker">
                                          <span class="input-group-text">
                                          <i class="fa fa-calendar-check"></i>
                                          </span>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-md-4">
                                    <div class="form-group custom-padding">
                                       <label for="defaultSelect">Approval Type</label>
                                       <select class="form-select form-control" id="defaultSelect">
                                          <option>Yes</option>
                                       </select>
                                    </div>
                                 </div>
                                 <div class="col-md-4">
                                    <div class="form-group custom-padding">
                                       <label for="largeInput">Project Approval Authority</label>
                                       <input type="text" class="form-control form-control" id="defaultInput" placeholder="Project Approval Authority">
                                    </div>
                                 </div>
                                 <div class="col-md-4">
                                    <div class="form-group custom-padding">
                                       <label for="largeInput">Approval Reference Number</label>
                                       <input type="text" class="form-control form-control" id="defaultInput" placeholder="Approval Reference Number">
                                    </div>
                                 </div>
                                 <div class="col-md-4">
                                    <div class="form-group custom-padding">
                                       <label for="largeInput">Approval Date</label>
                                       <input type="text" class="form-control form-control" id="defaultInput" placeholder="Approval Date">
                                    </div>
                                 </div>
                                 <div class="col-md-4">
                                    <div class="form-group custom-padding">
                                       <label for="largeInput">Project Documents</label>
                                       <input type="file" class="form-control form-control" id="defaultInput" placeholder="Project Documents">
                                    </div>
                                 </div>
                                 <div class="col-md-4">
                                    <div class="form-group custom-padding">
                                       <label for="defaultSelect">Status</label>
                                       <select class="form-select form-control" id="defaultSelect">
                                          <option>Yes</option>
                                       </select>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="card-header custom-c-h-bg1">
                              <h4 class="custom-c-h-title">Funding Organization</h4>
                           </div>
                           <div class="card-body custom-c-b-padding">
                              <div class="row">
                                 <div class="col-md-6">
                                    <div class="form-group custom-padding">
                                       <label for="defaultSelect">Funding Organization</label>
                                       <select class="form-select form-control" id="defaultSelect">
                                          <option>Organization Name</option>
                                       </select>
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="form-group custom-padding">
                                       <label for="largeInput">Funded Percentage</label>
                                       <input type="text" class="form-control form-control" id="defaultInput" placeholder="Funded Percentage">
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="form-group custom-padding">
                                       <label for="largeInput">Funded Amount</label>
                                       <input type="text" class="form-control form-control" id="defaultInput" placeholder="Funded Amount">
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
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--Project Add Form-->
   </div>
</div>
@endsection
@push('script')

@endpush
