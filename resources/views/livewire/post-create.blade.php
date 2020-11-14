<div class="mb-4">
    <form class="form" wire:submit.prevent="addPost">
        <div class="form-group">
            <label for="body" class="sr-lonly">Your post</label>
            <textarea wire:model="body" class="form-control" name="body"></textarea>
        </div>

        <button class="btn btn-primary">Submit</button>
    </form>
    <hr>
</div>
