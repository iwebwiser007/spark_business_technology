@extends('layout.layouts')
@section('content')
<section class="main-banner blog-banner">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="blog-card">
          <div class="blog-img mt-5 bg-light p-3 rounded-5">
            <img class="rounded-5" loading="lazy" src="{{ asset('storage/app/public/portfolio/' . $portfolio->image) }}" alt="blog-post" style="height: 700px;object-fit: contain;" />
          </div>
          <div class="mt-5">
            <h1 class="row justify-content-center">{{$portfolio->title}}</h1>
            <p class="row justify-content-center">{{$portfolio->description}}</p>
          </div>

          <div style="display: flex;justify-content: space-between;max-width: 100%;margin: auto;background: #fff;" class="mt-5 rounded-5 p-5">
            <p style=" text-align: left;" class="mb-0"><strong>Country: </strong>{{ $portfolio->country }}</p>
            <p style="text-align: center;" class="mb-0"><strong>Industry Name: </strong>{{ $portfolio->industry }}</p>
            <p style=" text-align: right;" class="mb-0"><strong>Solution: </strong>{{ $portfolio->solution }}</p>
          </div>


          <div class="mb-5">
            <p>{!! $portfolio->html_content !!}</p>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>

@endsection

