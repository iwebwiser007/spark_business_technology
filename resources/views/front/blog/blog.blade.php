@extends('layout.layouts')

@section('title', 'Blog | Spark Business Technology')

@section('keywords', 'Blog, App Development, Software Development, Technology News, Spark Business')

@section('description', 'Stay up to date with the latest articles, news, and insights from Spark Business Technology')

@section('content')
  <!-- ============================= -->
  <!-- Blog Banner Start here... -->
  <!-- ============================= -->
  <section class="main-banner blog-banner">
    <div class="container-fluid">
      <div class="max-content-width">
        <div class="row justify-content-center">
          <div class="col-12 col-md-10 col-lg-7">
            <div class="banner-content">
              <h4 class="title">
                Welcome to Our Blog
              </h4>
              <p class="description">
                Get the latest updates, insights, and articles from the world of app and software development.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Blog Banner End here... -->

  <!-- ============================= -->
  <!-- Blog Post List Start here... -->
  <!-- ============================= -->
  <section class="blog-posts">
    <div class="container">
      <div class="row">
        <!-- Blog Post 1 -->
         @foreach($blogs as $blog)
        <div class="col-12 col-md-6 col-lg-4">
          <div class="blog-card">
            <div class="blog-img">
            <a href="{{ route('blog.show', $blog->slug) }}"><img loading="lazy" src="{{ asset('storage/app/public/images/thumbnails/' . $blog->thumbnail_image) }}" alt="blog-post"/></a>
            </div>
            <div class="card-content">
              <h4 class="title">
                <a href="{{ route('blog.show', $blog->slug) }}" class="stretched-link">{{$blog->title}}</a>
              </h4>
              <p class="meta">
                <span class="date">{{$blog->created_at}}</span>
              </p>
              <p class="description">
                {{$blog->description}}
              </p>
              <a href="{{ route('blog.show', $blog->slug) }}" class="read-more">Read More</a>
              </div>
          </div>
        </div>
        @endforeach
       
      </div>
    </div>
  </section>
  <!-- Blog Post List End here... -->
@endsection



