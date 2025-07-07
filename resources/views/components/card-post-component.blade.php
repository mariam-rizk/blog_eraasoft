<div>
    <!-- The biggest battle is the war against ignorance. - Mustafa Kemal Atatürk -->
        <!-- Post preview-->
        @props (['title', 'content', 'created_at'])
        <div class="post-preview">
            <a href="post.html">
                <h2 class="post-title">{{$title}}</h2>
                <p class="post-content">{{$content}}</p>
            </a>
            
            <p class="post-meta">
                Posted by
                <a href="#!">Start Bootstrap</a>
                on {{ $created_at  }}
            </p>
        </div>
        <!-- Divider-->
        <hr class="my-4" />
</div>