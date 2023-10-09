@extends('auth.layouts.app')

@push('css')
  
@endpush

@section('main-content')

<div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
        <div class="col-md-12 grid-margin text-primary">
          <h3 class="text-center">Event Listing</h3>
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
              <tr>
                <td>1</td>
                <td>2</td>
                <td>3</td>
              </tr>
              <tr>
                <td>2</td>
                <td>2</td>
                <td>2</td>
              </tr>
              <tr>
                <td>f</td>
                <td>r</td>
                <td>f</td>
              </tr>
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