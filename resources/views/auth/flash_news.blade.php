@extends('auth.layouts.app')


@push('css')
  <style>
    td{
      text-align: center;
      font-weight: bold; 
      color: #4B49AC; 
    }
    th{
      text-align: center;
    }
    .table-container {
        width: 100%;            
        overflow-x: auto;      
        white-space: nowrap;    
    }
  </style>
@endpush

@section('main-content')

<div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
        <div class="col-md-12 grid-margin text-primary">
          <h3 class="text-center">News Listing</h3>
        </div>
      </div>

      <div class="row">
        <div class= "container table-container">
          <table id="table" class="table table-bordered ">
            <thead>
              <th>Id No.</th>
              <th>Title</th>
              <th>Flash News</th>
              <th>Action</th>
            </thead>
            <tbody>

              @foreach ($news as $item)
                <tr>
                  <td>{{$item->id}}</td>
                  <td>{{$item->news_title}}</td>
                  <td >{{$item->news_description}}</td>                  
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

  <script>
    $(document).ready(function() {
      $('#table').DataTable();
    });
  </script>
    
@endpush