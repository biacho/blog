<div class="card m-2">
    <div class="card-body">
        <h5 class="card-title">{{ $post->title }}</h5>
        <h6 class="card-subtitle mb-2 fs-6">
            <span class="text-muted fst-italic">{{ $post->created_at }}</span> 
            by 
            <span class="">{{ $post->user->name }}</span>
        </h6>
        <p class="card-text">{{ $post->content }}</p>
    </div>
    @auth
    <div class="card-footer">
        <div style="display:flex; flex-direction:row;">
            <div class="me-1">
                <form action="/edit/{{ $post->id }}" method="GET">
                    <button type="submit" class="btn btn-secondary">Edit</button>
                </form>
            </div>
            <div class="mx-1">
                <form action="/delete" method="POST">
                    @csrf
                    <input name="post_id" value="{{ $post->id }}" hidden>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>
    @endif
</div>
