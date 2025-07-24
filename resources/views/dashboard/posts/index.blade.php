<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            All Posts
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="d-flex justify-content-between mb-3">
                        <h2>All Posts</h2>
                        <a href="{{ route('dashboard.posts.create') }}" class="btn btn-primary">Add Post</a>
                    </div>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Content</th>
                                <th>Published</th>
                                <th>Categories</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $post)
                                <tr>
                                    <td>{{ $post->title }}</td>
                                    <td>{{ Str::limit($post->content, 50) }}</td>
                                    <td>{{ $post->is_publish ? 'Yes' : 'No' }}</td>
                                    <td>
                                        @foreach ($post->categories as $category)
                                            <span class="badge bg-secondary">{{ $category->name }}</span>
                                        @endforeach
                                    </td>
                                    <td>{{ $post->created_at->format('Y-m-d') }}</td>
                                    <td>{{ $post->updated_at->format('Y-m-d') }}</td>
                                    <td>
                                        <a href="{{ route('dashboard.posts.show', $post->id) }}" class="btn btn-sm btn-primary">Show</a>
                                        <a href="{{ route('dashboard.posts.edit', $post->id) }}" class="btn btn-sm btn-warning">Edit</a>

                                        <form action="{{ route('dashboard.posts.destroy', $post->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this post?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>


