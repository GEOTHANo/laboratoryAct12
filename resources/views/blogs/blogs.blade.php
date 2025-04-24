<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BLOG LIST</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

</head>
<body>
    <div class="container">
        <div class="card shadow-lg border-0 mt-5">
            <div class="card-header">
                <h1>CREATE YOUR OWN BLOG</h1>
            </div>
            
                @foreach ($blogs as $post)
                    <div class="card mb-3">
                        <div class="card-body">
                            <h4>{{ $post->title }}</h4>
                            <p>{{ $post->content }}</p>
                            <p><strong>Author:</strong> {{ $post->author }}</p>
                            <a href="{{ route('blogs.edit', $post->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('blogs.destroy', $post->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" onclick="return confirm('Delete this blog?')">Delete</button>
                            </form>
                        </div>
                    </div>
                @endforeach
                <a href="{{ route('blogs.create') }}" class="btn btn-primary mb-3">Create New Blog</a>
                <form method="POST" action="/logout" class="mt-3">
                    @csrf
                    <button type="submit" class="btn btn-danger w-100">Logout</button>
                </form>
        </div>
    </div>
    <!-- Bootstrap JS and dependencies -->
    <script src="{{ asset('build/assets/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>