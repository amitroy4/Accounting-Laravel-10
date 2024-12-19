@extends('layouts.admin')
@section('title','Web Setting')
@section('content')
<div class="container">
    <div class="page-inner">
        <!--Page Header TOP-->
        <div class="page-header">
            <h3 class="page-title-top">Web Setting</h3>
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
                    <a href="#">Web</a>
                </li>
                <li class="separator">
                    <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                    <a href="#">Setting</a>
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
                                    <h4 class="custom-c-h-main-title"><span class="c-h-icon">
                                        <i class="fas fa-compress"></i></span>Settings</h4>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!--Double Part Card Header-->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card">
                                    <form action="{{route('websetting.update',$websetting->id)}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-group">
                                            <label for="company">Company Name <span class="required-label">*</span>
                                            </label>
                                            <input type="text" class="form-control @error('company_name') is-invalid @enderror" id="company_name" name="company_name" value="{{ old('company_name', $websetting->company_name) }}" placeholder="Enter Company Name" required>
                                                @error('company_name')
                                                <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="adddress">Company Address <span class="required-label">*</span></label>
                                            <input type="text" class="form-control @error('company_address') is-invalid @enderror" id="company_address" name="company_address" value="{{ old('company_address', $websetting->company_address) }}" placeholder="Enter Company Address">
                                            @error('company_address')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="contact">Contact No <span class="required-label">*</span></label>
                                            <input type="text" class="form-control @error('contact') is-invalid @enderror" id="contact" name="contact" value="{{ old('contact', $websetting->contact) }}" placeholder="Enter Contact No">
                                            @error('contact')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="website">Company Website <span class="required-label">*</span></label>
                                            <input type="text" class="form-control @error('website') is-invalid @enderror" id="website" name="website" value="{{ old('website', $websetting->website) }}" placeholder="Enter Company Website">
                                            @error('website')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email ID <span class="required-label">*</span></label>
                                            <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email', $websetting->email) }}" placeholder="Enter Email ID">
                                            @error('email')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="landphone">Land Phone Number <span class="required-label">*</span></label>
                                            <input type="text" class="form-control @error('landphone') is-invalid @enderror" id="landphone" name="landphone" value="{{ old('landphone', $websetting->landphone) }}" placeholder="Enter Land Phone Number">
                                            @error('landphone')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="footerText">Footer text <span class="required-label">*</span></label>
                                            <input type="text" class="form-control @error('footerText') is-invalid @enderror" id="footerText" name="footerText" value="{{ old('landphone', $websetting->footerText) }}" placeholder="Enter Footer text">
                                            @error('footerText')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="logo">Company Logo <span class="required-label">*</span></label>
                                            <input type="file" class="form-control" id="logo" name="logo" value="{{$websetting->logo}}"  placeholder="Enter Company Logo">
                                            <img src="{{ asset('storage/' . $websetting->logo) }}" id="logo_preview" alt="Logo Preview" width="100" class="mb-2 {{ $websetting->logo ? '' : 'd-none' }} mt-2">
                                            @error('logo')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="system_logo">System Logo <span class="required-label">*</span></label>
                                            <input type="file" class="form-control" id="system_logo" name="system_logo" value="{{$websetting->system_logo}}"  placeholder="Enter System Logo">
                                            <img src="{{ asset('storage/' . $websetting->system_logo) }}" id="sys_logo_preview" alt="Logo Preview" width="100" class="mb-2 {{ $websetting->system_logo ? '' : 'd-none' }} mt-2">
                                            @error('logo')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="favicon">Favicon <span class="required-label">*</span></label>
                                            <input type="file" class="form-control" id="favicon" name="favicon" value="{{$websetting->favicon}}"  placeholder="favicon">
                                            <img src="{{ asset('storage/' . $websetting->favicon) }}" id="favicon_preview" alt="Logo Preview" width="100" class="mb-2 {{ $websetting->favicon ? '' : 'd-none' }} mt-2">
                                            @error('logo')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-secondary">Save</button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="card shadow-sm">
                                    <div class="card-body text-left">

                                        <div class="mb-4">
                                            <img src="{{ asset('storage/' . $websetting->logo) }}" class="img-fluid rounded" alt="Company Logo" style="max-width: 150px;">
                                        </div>

                                        <ul class="list-unstyled">
                                            <li class="mb-3">
                                                <strong>Company Name:</strong> {{ $websetting->company_name ?? 'N/A' }}
                                            </li>
                                            <li class="mb-3">
                                                <strong>Company Address:</strong> {{ $websetting->company_address ?? 'N/A' }}
                                            </li>
                                            <li class="mb-3">
                                                <strong>Contact No:</strong> {{ $websetting->contact ?? 'N/A' }}
                                            </li>
                                            <li class="mb-3">
                                                <strong>Company Website:</strong> <a href="{{ $websetting->website ?? '#' }}">{{ $websetting->website ?? 'N/A' }}</a>
                                            </li>
                                            <li class="mb-3">
                                                <strong>Email ID:</strong> <a href="mailto:{{ $websetting->email ?? 'N/A' }}">{{ $websetting->email ?? 'N/A' }}</a>
                                            </li>
                                            <li class="mb-3">
                                                <strong>Land Line Number:</strong> {{ $websetting->landphone ?? 'N/A' }}
                                            </li>
                                            <li class="mb-3">
                                                <strong></strong> {{ $websetting->footerText ?? 'N/A' }}
                                            </li>
                                        </ul>
                                        <div class="mb-4 d-flex justify-content-between">
                                            Favicon: <img src="{{ asset('storage/' . $websetting->favicon) }}" class="img-fluid rounded-circle" alt="Company Logo" style="max-width: 150px;">
                                            System logo: <img src="{{ asset('storage/' . $websetting->system_logo) }}" class="img-fluid rounded" alt="Company Logo" style="width: 150px;">
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
<script>
    $(document).ready(function(){
        function handleImagePreview(input, previewId) {
            const file = input.files[0];
            const reader = new FileReader();

            reader.onload = function(e) {
                $(previewId).attr('src', e.target.result).removeClass('d-none');
            };

            if (file) {
                reader.readAsDataURL(file);
            } else {
                $(previewId).addClass('d-none');
            }
        }

        // Event handlers for image uploads
        $("#logo").on('change', function() {
            handleImagePreview(this, '#logo_preview');
        });
        $("#system_logo").on('change', function() {
            handleImagePreview(this, '#sys_logo_preview');
        });
        $("#favicon").on('change', function() {
            handleImagePreview(this, '#favicon_preview');
        });

    });
</script>
@endpush
