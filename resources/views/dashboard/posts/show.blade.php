<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Show Post
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-6 shadow-sm sm:rounded-lg">
                <h3>{{ $post->title }}</h3>
                <p class="mt-3">{{ $post->content }}</p>

                <p class="mt-3"><strong>Published:</strong> {{ $post->is_publish ? 'Yes' : 'No' }}</p>
                <p><strong>Created At:</strong> {{ $post->created_at->format('Y-m-d') }}</p>
                <p><strong>Updated At:</strong> {{ $post->updated_at->format('Y-m-d') }}</p>

                <div class="mt-3">
                    <strong>Categories:</strong>
                    @foreach ($post->categories as $category)
                        <span class="badge bg-secondary">{{ $category->name }}</span>
                    @endforeach
                </div>

                <a href="{{ route('dashboard.posts.index') }}" class="btn btn-secondary mt-4">Back</a>
                <a href="{{ route('dashboard.posts.edit', $post->id) }}" class="btn btn-secondary mt-4">Edit</a>
            </div>
        </div>
    </div>
</x-app-layout>

