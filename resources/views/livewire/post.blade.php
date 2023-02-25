<div class="container">
    <h1>My Blog</h1>

    <form wire:submit.prevent="save">
        <div class="form-group">
            <label for="title">Title</label>
            <input wire:model="title" type="text" class="form-control" id="title" placeholder="Enter title">
            @error('title') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label for="body">Body</label>
            <textarea wire:model="body" class="form-control" id="body" rows="5" placeholder="Enter body"></textarea>
            @error('body') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>

    <hr>

    <ul class="list-group">
        @foreach ($posts as $post)
        <li class="list-group-item">
            <h5>{{ $post->title }}</h5>
            <p>{{ $post->body }}</p>
            <div class="d-flex">
                <button class="btn btn-sm btn-outline-primary" wire:click="edit({{ $post->id }})">Edit</button>
                <button class="btn btn-sm btn-outline-danger ml-2" wire:click="delete({{ $post->id }})">Delete</button>
            </div>
        </li>
        @endforeach
    </ul>
</div>