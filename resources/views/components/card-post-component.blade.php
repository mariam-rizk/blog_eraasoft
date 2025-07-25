<div>
    <!-- The biggest battle is the war against ignorance. - Mustafa Kemal Atatürk -->
        <!-- Post preview-->
        @props (['post'])
        <div class="post-preview">
            <a href="{{ route('posts.show', $post->id) }}">
                <h2 class="post-title">{{ $post->title }}</h2>
                <p class="post-content">{{ $post->content }}</p>
            </a>
            
            <p class="post-meta">
                Posted by
                <a href="#!">{{ $post->user->name ?? 'Unknown' }}</a>
                on {{ $post->created_at  }}
            </p>
        </div>
        <!-- Divider-->
        <hr class="my-4" />
</div>