@extends('auth.layouts.app')


@push('css')

  {{-- <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap4.min.css"> --}}

  <style>
    td{
      text-align: center;
      font-weight: bold; 
      color: #4B49AC; 
    }
    th{
      text-align: center;
    }
    i{
      font-size: 24px;
    }
  </style>
@endpush

@section('main-content')

<div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
        <div class="col-md-12 grid-margin text-primary">
          <h3 class="text-center">Gallery Listing</h3>
        </div>
      </div>

      <div class="row">
        <div class= "container">
          <table id="table" class="table table-bordered">
            <thead>
              <th>Gallery Title</th>
              <th>Display</th>
              <th>Action</th>
            </thead>
            <tbody>

              @foreach ($galleries as $gallery)
                <tr>
                  <td>{{$gallery->gallery_name}}</td>
                  <td>{{$gallery->is_enabled}}<a class="btn btn-primary ml-4">Change</a></td>

                  
                  <td><i class="ti-pencil-alt menu-icon text-primary pr-2"></i> <i class="ti-trash menu-icon text-danger"></i></td>
                </tr>    
              @endforeach

            </tbody>
          </table>
        </div>
      </div>

    </div>
</div>

@endsection

@push('js')

  {{-- <script src="https://code.jquery.com/jquery-3.7.0.js"></script> --}}
  {{-- <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script> --}}
  {{-- <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap4.min.js"></script> --}}

  <script>
    $(document).ready(function() {
      $('#table').DataTable();
    });
  </script>
    
@endpush