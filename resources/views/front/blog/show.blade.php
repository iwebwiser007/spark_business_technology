@extends('layout.layouts')

@section('title', $metaTags['title'] ?? 'Default Title') <!-- Use title from metaTags or fallback to default title -->

@section('meta')
@if(isset($metaTags))
@foreach ($metaTags as $key => $value)
@if ($key === 'title')
<!-- Title will be handled separately in the layout -->
@continue
@elseif (is_array($value)) <!-- Handling nested meta tags (like og, twitter) -->
@foreach ($value as $subKey => $subValue)
{{-- <meta property="{{ $key . ':' . $subKey }}" content="{{ $subValue }}"> --}}

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

<section class="main-banner blog-banner">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="blog-card">
                    <div class="blog-img mt-5">
                        <img class="" loading="lazy" src="{{ asset('storage/app/public/images/banners/' . $blog->banner_image) }}" alt="blog-post" style="height: 500px;" />
                    </div>
                    <div class="card-content mt-5">
                        <div class="content">
                            {!! $blog->html_content !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection