@extends('layouts.admin')
@section('title','Dashboard')
@section('content')
<div class="container">
   <div class="page-inner">

      <!--Page Header TOP-->
      <div class="page-header">
         <h3 class="page-title-top">Chart of Accounts</h3>
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
               <a href="#">Chart of Accounts</a>
            </li>
         </ul>
      </div>
      <!--Page Header TOP-->

      <!--Chart of Accounts Start-->
      <div class="row">
         <!--Create or Update Chart of Accounts-->
         <div class="col-md-7">
            <div class="card">
               <div class="card-header">
                  <ul class="nav nav-pills nav-secondary  nav-pills-no-bd nav-pills-icons justify-content-center" id="pills-tab-with-icon" role="tablist">
                     <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="pills-home-tab-icon" data-bs-toggle="pill" href="#pills-home-icon" role="tab" aria-controls="pills-home-icon" aria-selected="true">
                        <i class="fas fa-edit"></i>
                        Create Cart of Accounts
                        </a>
                     </li>
                     <li class="nav-item" role="presentation">
                        <a class="nav-link" id="pills-contact-tab-icon" data-bs-toggle="pill" href="#pills-contact-icon" role="tab" aria-controls="pills-contact-icon" aria-selected="false" tabindex="-1">
                        <i class="fas fa-file-import"></i>
                        Update Chart of Accounts
                        </a>
                     </li>
                  </ul>
               </div>
               <div class="card-body">
                  <div class="tab-content" id="pills-with-icon-tabContent">
                     <div class="tab-pane fade show active" id="pills-home-icon" role="tabpanel" aria-labelledby="pills-home-tab-icon">
                        <div class="card custom-card-bg-1">
                            <div class="card-header create-bg-1">
                                <h4 class="custom-card-title">Create Chart of Accounts </h4>
                            </div>
                            <div class="card-body">
                              <!--Create Chart of Accounts Form  -->
                                <div class="row">
                                 <div class="col-md-6">
                                    <div class="form-group">
                                       <label for="defaultSelect">Company</label>
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
                                 <div class="col-md-12">
                                    <div class="form-group">
                                       <label for="largeInput">Ledger Head Name</label>
                                       <input type="text" class="form-control form-control" id="defaultInput" placeholder="Ledger Head Name">
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="form-group">
                                       <label for="defaultSelect">Parent Account</label>
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
                                       <label for="defaultSelect">Is Transaction Head</label>
                                       <select class="form-select form-control" id="defaultSelect">
                                          <option>Yes</option>
                                          <option>No</option>
                                       </select>
                                    </div>
                                 </div>
                              </div>
                              <!--Create Chart of Accounts Form-->
                              <!--Submit & Cancel Button-->
                                    <div class="row">
                                       <div class="col-md-5 m-auto">
                                          <div class="button-custom-margin">
                                             <div class="double-buttons">
                                                <a class="cancel-btn" href="#"><i class="fas fa-reply"></i>Cancel</a>
                                                <a class="submit-btn" href="#">Create<i class="fas fa-edit"></i></a>
                                                <span class="or">or</span>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <!--Submit & Cancel Button-->
                            </div>
                        </div>
                     </div>
                     <div class="tab-pane fade" id="pills-contact-icon" role="tabpanel" aria-labelledby="pills-contact-tab-icon">
                        <div class="card custom-card-bg-1">
                            <div class="card-header update-bg-1">
                                <h4 class="custom-card-title">Update Chart of Accounts </h4>
                            </div>
                            <div class="card-body">
                              <!--Create Chart of Accounts Form  -->
                                <div class="row">
                                 <div class="col-md-6">
                                    <div class="form-group">
                                       <label for="defaultSelect">Company</label>
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
                                 <div class="col-md-12">
                                    <div class="form-group">
                                       <label for="largeInput">Ledger Head Name</label>
                                       <input type="text" class="form-control form-control" id="defaultInput" placeholder="Ledger Head Name">
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="form-group">
                                       <label for="defaultSelect">Parent Account</label>
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
                                       <label for="defaultSelect">Is Transaction Head</label>
                                       <select class="form-select form-control" id="defaultSelect">
                                          <option>Yes</option>
                                          <option>No</option>
                                       </select>
                                    </div>
                                 </div>
                              </div>
                              <!--Create Chart of Accounts Form-->
                              <!--Submit & Cancel Button-->
                                    <div class="row">
                                       <div class="col-md-5 m-auto">
                                          <div class="button-custom-margin">
                                             <div class="double-buttons">
                                                <a class="cancel-btn" href="#"><i class="fas fa-reply"></i>Cancel</a>
                                                <a class="submit-btn" href="#">Update<i class="fas fa-retweet"></i></a>
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
         <!--Create or Update Chart of Accounts-->

         <!--Master Chart of Accounts-->
         <div class="col-md-5">
            <div class="card">
               <div class="card-header">
                  <div class="text-center">
                     <h4 class="custom-card-title">Chart of Accounts </h4>
                  </div>
               </div>
               <div class="card-body">

               </div>
            </div>
         </div>
         <!--Master Chart of Accounts-->

      </div>
      <!--Chart of Accounts End-->
    </div>
</div>
@endsection
@push('script')

@endpush


