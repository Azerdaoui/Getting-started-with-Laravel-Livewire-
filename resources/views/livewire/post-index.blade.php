<div>
    @livewire('post-create')
    
    @foreach($posts as $post)
        @livewire('post-single', [
            'post' => $post
        ])
    @endforeach
</div>
