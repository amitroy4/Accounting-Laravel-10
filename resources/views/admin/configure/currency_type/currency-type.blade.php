@extends('layouts.admin')
@section('title','Dashboard')
@section('content')
<div class="container">
   <div class="page-inner">
      <!--Page Header TOP-->
      <div class="page-header">
         <h3 class="page-title-top">Currency Type</h3>
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
               <a href="#">Currency Type</a>
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
                           <h4 class="custom-c-h-main-title"><span class="c-h-icon"><i class="fas fa-compress"></i></span>Add new Currency Type</h4>
                        </div>
                        <div class="col-md-5">
                        </div>
                     </div>
                  </div>
               </div>
               <!--Double Part Card Header-->
               <div class="card-body">
                  <div class="row">
                    @if ($currencytype)
                    <div class="col-md-4">
                        <form
                            action="{{ route('currency_type.update', $currencytype->id) }}"
                            id="currencyTypeForm"
                            method="POST"
                            enctype="multipart/form-data"
                        >
                            @csrf
                            @method('PUT') <!-- Use PUT for update -->
                            <div class="card custom-c-bg1">
                                <div class="card-header custom-c-h-bg1">
                                    <h4 class="custom-c-h-title">Update Currency Type</h4>
                                </div>
                                <div class="card-body custom-c-b-padding">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group custom-padding">
                                                <label for="currency_name">Currency Name <span class="text-danger">*</span></label>
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    id="currency_name"
                                                    name="currency_name"
                                                    value="{{ $currencytype->currency_name }}"
                                                    placeholder="Taka, Dollar, Rupee ..."
                                                    required
                                                >
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group custom-padding">
                                                <label for="currency_short_name">Currency Short Name</label>
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    id="currency_short_name"
                                                    name="currency_short_name"
                                                    value="{{ $currencytype->currency_short_name }}"
                                                    placeholder="BDT, USD, RS.."
                                                >
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group custom-padding">
                                                <label for="defaultSelect">Country</label>
                                                <select
                                                    class="form-select form-control"
                                                    id="country"
                                                    name="country"
                                                >
                                                    @foreach($countries as $code => $name)
                                                        <option
                                                            value="{{ $code }}"
                                                            {{ $currencytype->country == $code ? 'selected' : '' }}
                                                        >
                                                            {{ $name }} ({{ $code }})
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group custom-padding">
                                                <label for="currency_code">Currency Code</label>
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    id="currency_code"
                                                    name="currency_code"
                                                    value="{{ $currencytype->currency_code }}"
                                                    placeholder="Currency Code"
                                                    readonly
                                                >
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group custom-padding">
                                                <label for="status">Status</label>
                                                <select
                                                    class="form-select form-control"
                                                    id="status"
                                                    name="status"
                                                >
                                                    <option
                                                        value="1"
                                                        {{ $currencytype->status == 1 ? 'selected' : '' }}
                                                    >
                                                        Active
                                                    </option>
                                                    <option
                                                        value="0"
                                                        {{ $currencytype->status == 0 ? 'selected' : '' }}
                                                    >
                                                        Inactive
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <!--Submit & Cancel Button-->
                                        <div class="col-12">
                                            <div class="button-custom-margin">
                                                <div class="double-buttons">
                                                    <a class="cancel-btn" href="{{route('currency_type.index')}}">Cancel</a>
                                                    <a class="submit-btn" href="#">Update</a>
                                                    <span class="or">or</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Submit & Cancel Button-->
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                    @else
                    <div class="col-md-4">
                        <form action="{{route('currency_type.store')}}" id="currencyTypeForm"
                                    method="POST" enctype="multipart/form-data">
                                    @csrf
                        <div class="card custom-c-bg1">
                           <div class="card-header custom-c-h-bg1">
                              <h4 class="custom-c-h-title">Create new Currency Type</h4>
                           </div>
                           <div class="card-body custom-c-b-padding">
                              <div class="row">
                                 <div class="col-12">
                                    <div class="form-group custom-padding">
                                       <label for="currency_name">Currency Name <span class="text-danger">*</span></label>
                                       <input type="text" class="form-control form-control" id="currency_name" name="currency_name" placeholder="Taka, Dollar, Rupee ..." required>
                                    </div>
                                 </div>
                                 <div class="col-12">
                                    <div class="form-group custom-padding">
                                       <label for="currency_short_name">Currency Short Name</label>
                                       <input type="text" class="form-control form-control" id="currency_short_name" name="currency_short_name" placeholder="BDT, USD, RS..">
                                    </div>
                                 </div>
                                 <div class="col-12">
                                    <div class="form-group custom-padding">
                                       <label for="defaultSelect">Country</label>
                                       <select class="form-select form-control" id="country">
                                        @foreach($countries as $code => $name)
                                        <option value="{{ $code }}"> {{ $name }} ({{ $code }})</option>
                                    @endforeach
                                       </select>
                                    </div>
                                 </div>
                                 <div class="col-12">
                                    <div class="form-group custom-padding">
                                       <label for="currency_code">Currency Code</label>
                                       <input type="text" class="form-control form-control" id="currency_code" name="currency_code" placeholder="Currency Code" readonly>
                                    </div>
                                 </div>
                                 <div class="col-12">
                                    <div class="form-group custom-padding">
                                       <label for="status">Status</label>
                                       <select class="form-select form-control" id="status" name="status">
                                          <option value="1">Active</option>
                                          <option value="0">Inactive</option>
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
                        </form>
                     </div>
                    @endif

                     <div class="col-md-8">
                        <div class="card custom-c-bg1">
                           <div class="card-header custom-c-h-bg1">
                              <h4 class="custom-c-h-title">Currency Types</h4>
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
                                                            style="width: 50px;" aria-sort="ascending"
                                                            aria-label="Name: activate to sort column descending">
                                                            SL</th>
                                                        <th class="sorting_asc" tabindex="0"
                                                            aria-controls="add-row" rowspan="1" colspan="1"
                                                            style="width: 373.033px;" aria-sort="ascending"
                                                            aria-label="Name: activate to sort column descending">
                                                            Currency Name</th>
                                                        <th class="sorting" tabindex="0"
                                                            aria-controls="add-row" rowspan="1" colspan="1"
                                                            style="width: 534.283px;"
                                                            aria-label="Position: activate to sort column ascending">
                                                            Currency Code</th>
                                                        <th class="sorting" tabindex="0"
                                                            aria-controls="add-row" rowspan="1" colspan="1"
                                                            style="width: 308.967px;"
                                                            aria-label="Office: activate to sort column ascending">
                                                            Status</th>
                                                        <th style="width: 120.717px;" class="sorting"
                                                            tabindex="0" aria-controls="add-row" rowspan="1"
                                                            colspan="1"
                                                            aria-label="Action: activate to sort column ascending">
                                                            Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($currencytypes as $key =>
                                                    $currency_type)
                                                    <tr role="row" class="odd">
                                                        <td>{{$key+1}}</td>
                                                        <td>{{$currency_type->currency_name}} ({{$currency_type->currency_short_name}})</td>
                                                        <td>{{$currency_type->currency_code}}
                                                        </td>
                                                        <td>
                                                            @if ($currency_type->status==1)
                                                            <a class="badge bg-success text-light round"
                                                                href="{{route('currency_type.activeordeactive',$currency_type->id)}}">
                                                                Active
                                                            </a>
                                                            @else
                                                            <a class="badge bg-danger text-light round"
                                                                href="{{route('currency_type.activeordeactive',$currency_type->id)}}">
                                                                Inactive
                                                            </a>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            <div class="form-button-action">
                                                                <a
                                                                    href="{{route('currency_type.edit',$currency_type->id)}}">
                                                                    <button type="button"
                                                                        data-bs-toggle="tooltip" title=""
                                                                        class="btn btn-link btn-primary btn-lg"
                                                                        data-original-title="Edit Task">
                                                                        <i class="fa fa-edit"></i>
                                                                    </button>
                                                                </a>
                                                                <form
                                                                    action="{{ route('currency_type.destroy', $currency_type->id) }}"
                                                                    method="POST" style="display:inline;"
                                                                    onsubmit="event.preventDefault(); confirmDelete(this);">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit"
                                                                        data-bs-toggle="tooltip"
                                                                        title="Remove"
                                                                        class="btn btn-link btn-danger">
                                                                        <i class="fa fa-times"></i>
                                                                    </button>
                                                                </form>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    @endforeach
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
      <!--Branch Add Form-->
   </div>
</div>
@endsection
@push('script')
<script>
    $(document).ready(function () {
        $('.submit-btn').on('click', function (e) {
            e.preventDefault(); // Prevent the default link behavior

            // Check if the form is valid
            if ($('#currencyTypeForm')[0].checkValidity()) {
                $('#currencyTypeForm')[0].submit(); // Use the native submit method
            } else {
                $('#currencyTypeForm')[0].reportValidity(); // Show validation messages
            }
        });
        // When the user types in the input field
        $('#currency_name').on('keyup', function () {
            var inputName = $('#currency_name').val(); // Get the value from input field
            var currentYear = new Date().getFullYear(); // Get the current year (e.g., 2024)

            // Check if the input has at least 3 characters

            // Get the first 3 characters of the input name
            var prefix = inputName.substring(0, 3).toUpperCase();

            // Get the last two digits of the current year
            var yearSuffix = currentYear.toString().slice(-2);

            // Generate a random 3-digit number
            var randomNumber = Math.floor(100 + Math.random() *
            900); // Generate a number between 100 and 999

            // Format the final result
            var result = prefix + '-' + yearSuffix + randomNumber;

            // Display the result in the <p> element
            $('#currency_code').val(result);

        });

    });

    function confirmDelete(form) {
        swal({
            title: "Are you sure?",
            text: "You will not be able to recover this data!",
            icon: "warning",
            buttons: ["Cancel", "Yes, delete it!"],
            dangerMode: true,
        }).then((willDelete) => {
            if (willDelete) {
                form.submit();
                swal("Deleted!", "Company has been deleted.", "success");
            } else {
                swal("Your data is safe!");
            }
        });
    }

</script>
@endpush

