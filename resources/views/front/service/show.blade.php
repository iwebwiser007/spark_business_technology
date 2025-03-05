@extends('layout.layouts')
@if($metaTags)
@section('title', $metaTags['title']) <!-- Use title from metaTags or fallback to default title -->
@endif
@section('service_meta')
@if(isset($metaTags))
@foreach ($metaTags as $key => $value)
@if ($key === 'title')
<!-- Title will be handled separately in the layout -->
@continue
@elseif (is_array($value)) <!-- Handling nested meta tags (like og, twitter) -->
@foreach ($value as $subKey => $subValue)
{{--<meta property="{{ $key . ':' . $subKey }}" content="{{ $subValue }}">--}}

@if (is_array($subValue))
@foreach ($subValue as $item)
<meta property="{{ $key . ':' . $subKey }}" content="{{ htmlspecialchars($item) }}">
@endforeach
@else
<meta property="{{ $key . ':' . $subKey }}" content="{{ htmlspecialchars($subValue) }}">
@endif

@endforeach
@else
<meta name="{{ $key }}" content="{{ $value }}">
@endif
@endforeach
@endif
@endsection

@section('content')
{!! $service->html_content !!}
 @endsection    



 