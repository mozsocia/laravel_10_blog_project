@extends('layouts.app')

@section('content')



  <section class="section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-9 mb-5 mb-lg-0">
          <article>
            @if ($blogPost->image)
              <div class="post-slider mb-4">
                <img src="{{ asset($blogPost->image) }}" class="card-img" alt="post-thumb">
              </div>
            @endif

            <h1 class="h2">{{ $blogPost->title }}</h1>
            <ul class="card-meta my-3 list-inline">
              <li class="list-inline-item">
                <i class="ti-calendar"></i>{{ $blogPost->created_at->format('j M, Y') }}
              </li>
            </ul>

            <div class="content">
              <p>{{ $blogPost->content }}</p>
            </div>
          </article>
        </div>

        <div class="col-lg-9 col-md-12">
          <div class="mb-5 border-top mt-4 pt-5">
            <h3 class="mb-4">Comments</h3>

            @if ($blogPost->comments->isEmpty())
              <p>No comments found.</p>
            @else
              <div class="media d-block d-sm-flex mb-4 pb-4">
                @foreach ($blogPost->comments as $comment)
                  <a class="d-inline-block mr-2 mb-3 mb-md-0" href="#">
                    <img src="images/post/user-01.jpg" class="mr-3 rounded-circle" alt="">
                  </a>
                  <div class="media-body">
                    <a href="#!" class="h4 d-inline-block mb-3">{{ $comment->name }}</a>

                    <p>{{ $comment->content }}</p>

                    <span
                      class="text-black-800 mr-3 font-weight-600">{{ $comment->created_at->format('j M, Y \a\t g:i a') }}</span>

                  </div>
                @endforeach
              </div>
            @endif
          </div>

          <div>
            <h3 class="mb-4">Add Comment</h3>
            <form action="{{ route('blog.comment.store', $blogPost->id) }}" method="POST">
              @csrf
              <div class="row">
                <div class="form-group col-md-4">
                  <input class="form-control shadow-none" type="text" name="name" placeholder="Name" required>
                </div>
                <div class="form-group col-md-12">
                  <textarea class="form-control shadow-none" name="content" rows="7" placeholder="Comment" required></textarea>
                </div>
              </div>
              <button class="btn btn-primary" type="submit">Add Comment</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>



@endsection
