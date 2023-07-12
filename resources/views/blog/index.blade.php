@if (session('success'))
  <div class="alert alert-success">
    {{ session('success') }}
  </div>
@endif

@if ($blogPosts->isEmpty())
  <p>No blog posts found.</p>
@else
  <ul>
    @foreach ($blogPosts as $blogPost)
      <li>
        <a href="{{ route('blog.show', $blogPost->id) }}">{{ $blogPost->title }}</a>
        @if ($blogPost->image)
          <img src="{{ asset($blogPost->image) }}" alt="Blog Post Image">
        @endif
      </li>
    @endforeach
  </ul>
@endif
