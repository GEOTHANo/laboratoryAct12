<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CREATE YOUR OWN BLOG</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
</head>
<body>
    <div class="container">
        <div class="card shadow-lg border-0 mt-5">
            <div class="card-header">
                <h1>CREATE YOUR OWN BLOG</h1>
            </div>
            <div class="card-body">
                <form action="{{ route('blogs.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" name="title" id="title" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="content" class="form-label">Content</label>
                        <textarea name="content" id="content" rows="5" class="form-control" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="Author" class="form-label">Author</label>
                        <input type="text" name="author" id="author" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Create Blog</button>
                </form>
            </div>
            <div class="card-footer text-muted">
                <a href="{{ route('blogs.index') }}" class="btn btn-secondary">View Blogs</a>
            </div>
        </div>
    </div>
    <!-- Bootstrap JS and dependencies -->
    <script src="{{ asset('build/assets/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>