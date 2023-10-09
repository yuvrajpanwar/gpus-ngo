@extends('auth.layouts.app')


@push('css')
  <style>
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

        @foreach ($images as $item)
            <div class="col-md-2 m-3 border bg-secondary">
                <div style="width: 100px; height: 100px; overflow: hidden; text-align: center;">
                    <img src="{{ asset('public/gallery/fullscreen')}}/{{extract_image_name($item->image)}}" style="max-width: 100%; max-height: 100%; vertical-align: middle;">
                </div>
                <div>
                    <p>this is card content</p>
                </div>
            </div>
        
        @endforeach

      </div>

    </div>
</div>

@endsection

@push('js')

@endpush