<x-layout.main>
    <x-slot:title>{{ $post->title }}</x-slot:title>
    <!--Blog Return Button-->
    <div class="return-button">
        <a href="{{ route('posts.index') }}"
           class="{{ Request::route()->getName() === 'posts.index' ? "active" : "" }}">
            <i class="fas fa-chevron-left"></i>
        </a>
    </div>

    <div>
        {!! $post->body !!}
    </div>



</x-layout.main>
