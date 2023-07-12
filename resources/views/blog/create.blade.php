@if ($errors->any())
  <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif

<form action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data">
  @csrf

  <div>
    <label for="title">Title:</label>
    <input type="text" name="title" id="title" required>
  </div>

  <div>
    <label for="content">Content:</label>
    <textarea name="content" id="content" required></textarea>
  </div>

  <div>
    <label for="image">Image:</label>
    <input type="file" name="image" id="image">
  </div>

  <button type="submit">Create Blog Post</button>
</form>
