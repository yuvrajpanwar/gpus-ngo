@extends('auth.layouts.app')


@push('css')
  <style>
    .img-card{
                overflow: hidden;
                height:100px;
                width:100%;
                display: flex;
                justify-content: center;
                align-items: center;
                padding-top: 5px;
            }
            .img
            {
                width: 100%;
                height:100%;
                object-fit: cover;
                object-position: center;
            }
  </style>
@endpush

@section('main-content')

<div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
        <div class="col-md-12 grid-margin text-primary">
          <h3 class="text-center">Image List for {{$gallery_name}}</h3>
        </div>
      </div>

      <div class="row">

        @foreach ($images as $item)
            <div class="col-md-2 m-3 border bg-secondary">
                <div class="img-card">
                    <img src="{{ asset('public/gallery/fullscreen')}}/{{extract_image_name($item->image)}}" class="img">
                </div>
                <div>
                    <p class="text-center mt-2"><a class="mr-4" href="#">(Hide)</a><a href="#">(Delete)</a></p>
                </div>
            </div>
        
        @endforeach

      </div>

    </div>
</div>

@endsection

@push('js')

@endpush