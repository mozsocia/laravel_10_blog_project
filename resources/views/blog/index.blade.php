@extends('layouts.app')

@section('content')
  <section class="section-sm">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 mb-5 mb-lg-0">
          <h2 class="h5 section-title">Recent Post</h2>

          @if (session('success'))
            <div class="alert alert-success">
              {{ session('success') }}
            </div>
          @endif

          @if ($blogPosts->isEmpty())
            <p>No blog posts found.</p>
          @else
            @foreach ($blogPosts as $blogPost)
              <article class="card mb-4">
                <div class="row card-body">
                  <div class="col-md-4 mb-4 mb-md-0">
                    <div class="post-slider slider-sm">

                      @if ($blogPost->image)
                        <img src="{{ asset($blogPost->image) }}" class="card-img" alt="post-thumb"
                          style="height:200px; object-fit: cover;">
                      @endif

                    </div>
                  </div>
                  <div class="col-md-8">
                    <h3 class="h4 mb-3"><a class="post-title"
                        href="{{ route('blog.show', $blogPost->id) }}">{{ $blogPost->title }}</a>
                    </h3>

                    <p>
                      @php
                        $contentWords = explode(' ', $blogPost->content);
                        $shortContent = implode(' ', array_slice($contentWords, 0, 20));
                      @endphp
                      {{ $shortContent }}...</p>
                    <a href="{{ route('blog.show', $blogPost->id) }}" class="btn btn-outline-primary">Read More</a>
                  </div>
                </div>
              </article>
            @endforeach
          @endif




        </div>
      </div>
    </div>
  </section>
@endsection
