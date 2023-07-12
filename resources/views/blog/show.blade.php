<h1>{{ $blogPost->title }}</h1>
<p>{{ $blogPost->content }}</p>

@if ($blogPost->image)
  <img src="{{ asset($blogPost->image) }}" alt="Blog Post Image">
@endif

<hr>

<h2>Comments</h2>

@if ($blogPost->comments->isEmpty())
  <p>No comments found.</p>
@else
  <ul>
    @foreach ($blogPost->comments as $comment)
      <li>
        <strong>{{ $comment->name }}</strong>
        <p>{{ $comment->content }}</p>
      </li>
    @endforeach
  </ul>
@endif

<hr>

<h2>Add Comment</h2>

<form action="{{ route('blog.comment.store', $blogPost->id) }}" method="POST">
  @csrf

  <div>
    <label for="name">Name:</label>
    <input type="text" name="name" id="name" required>
  </div>

  <div>
    <label for="content">Comment:</label>
    <textarea name="content" id="content" required></textarea>
  </div>

  <button type="submit">Add Comment</button>
</form>
