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
                           <h4 class="custom-c-h-main-title"><span class="c-h-icon"><i class="fas fa-compress"></i></span>Create new Project Category</h4>
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
                        <div class="card custom-c-bg1">
                           <div class="card-header custom-c-h-bg1">
                              <h4 class="custom-c-h-title">Create new Project Category</h4>
                           </div>
                           <div class="card-body custom-c-b-padding">
                              <div class="row">
                                 <div class="col-12">
                                    <div class="form-group custom-padding">
                                       <label for="largeInput">Project Category Name</label>
                                       <input type="text" class="form-control form-control" id="defaultInput" placeholder="Project Category Name">
                                    </div>
                                 </div>
                                 <div class="col-12">
                                    <div class="form-group custom-padding">
                                       <label for="largeInput">Project Category ID</label>
                                       <input type="text" class="form-control form-control" id="defaultInput" placeholder="Project Category ID">
                                    </div>
                                 </div>
                                 <div class="col-12">
                                    <div class="form-group custom-padding">
                                       <label for="defaultSelect">Status</label>
                                       <select class="form-select form-control" id="defaultSelect">
                                          <option>Active</option>
                                       </select>
                                    </div>
                                 </div>
                                 <!--Submit & Cancel Button-->
                                    <div class="col-12">
                                          <div class="button-custom-margin">
                                             <div class="double-buttons">
                                                <a class="cancel-btn" href="#">Cancel</a>
                                                <a class="submit-btn" href="#">Submit</a>
                                                <span class="or">or</span>
                                             </div>
                                          </div>
                                       </div>
                                    <!--Submit & Cancel Button-->
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-8">
                        <div class="card custom-c-bg1">
                           <div class="card-header custom-c-h-bg1">
                              <h4 class="custom-c-h-title">Project Categories</h4>
                           </div>
                           <div class="card-body custom-c-b-padding">

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
