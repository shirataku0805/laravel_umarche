@php
if($type === 'shops'){
  $path = 'storage/shops/';
}
if($type === 'prodacts'){
  $path = 'storage/prodacts/';
}

@endphp

<div>
  @if(empty($filename))
      <img src="{{ asset('images/no_image.jpg') }}">
  @else
      <img src="{{ asset($path . $filename) }}">
  @endif
</div>
