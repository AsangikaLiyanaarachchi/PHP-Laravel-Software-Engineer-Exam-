<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Posts</title>
    <!-- You can link to your CSS here -->
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
        }

        .container {
            width: 80%;
            margin: 0 auto;
            padding-top: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            background-color: #fff;
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        tr:hover {
            background-color: #f2f2f2;
        }

        .no-data {
            text-align: center;
            font-size: 18px;
            color: #888;
        }

        .btn {
            display: inline-block;
            padding: 8px 12px;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-size: 14px;
            border: none;
            cursor: pointer;
        }

        .btn-edit {
            background-color: #2196F3;
        }

        .btn-edit:hover {
            background-color: #1976D2;
        }

        .btn-delete {
            background-color: #E53935;
        }

        .btn-delete:hover {
            background-color: #C62828;
        }

        .btn-add {
            background-color: #4CAF50;
        }

        .btn-add:hover {
            background-color: #388E3C;
        }

        .btn-back {
            background-color: #555;
        }

        .btn-back:hover {
            background-color: #444;
        }

        .action-buttons {
            display: flex;
            gap: 5px;
        }

    </style>
</head>

<body>

<div class="container">
    <h1>Posts</h1>

    <!-- Add Post Button -->
    <a href="{{ route('create') }}" class="btn btn-add">Add Post</a>

    @if($posts->isNotEmpty())
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Content</th>
                    <th>Created At</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($posts as $post)
                    <tr>
                        <td>{{ $post->id }}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{ Str::limit($post->content, 50) }}</td> <!-- Limiting content length -->
                        <td>{{ $post->created_at->format('Y-m-d H:i') }}</td> <!-- Formatting date -->
                        <td class="action-buttons">
                            <!-- Edit Button -->
                            <a href="{{ route('post.edit', $post->id) }}" class="btn btn-edit">Edit</a>
                            
                            <!-- Delete Button with Form -->
                            <form action="{{ route('update.post', $post->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this post?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-delete">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p class="no-data">No posts available.</p>
    @endif

    <!-- Back to Home Button -->
    <a href="{{ route('home') }}" class="btn btn-back">Back to Home</a>
</div>

</body>

</html>
