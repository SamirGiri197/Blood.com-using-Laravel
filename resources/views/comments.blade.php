<div class="comments">
    @foreach ($comments as $comment)
        <div class="comment">
            <div class="comment-header">
                <span class="comment-author">{{ $comment->user->name }}</span>
                <span class="comment-date">{{ $comment->created_at->diffForHumans() }}</span>
            </div>
            <div class="comment-body">
                {{ $comment->body }}
            </div>
            @can('delete', $comment)
                <form action="{{ route('comments.destroy', $comment) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                </form>
            @endcan
        </div>
    @endforeach

    @auth
        <form action="{{ route('comments.store', $bloodRequest) }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="body">Add a comment</label>
                <textarea name="body" id="body" rows="3" class="form-control @error('body') is-invalid @enderror"></textarea>
                @error('body')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    @endauth
</div>
