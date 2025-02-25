<x-layout.main>
    <x-slot:title>Editing a Blog Post</x-slot:title>

    <div class="box">
        <form action="{{ route('posts.update', ['post'=>$post->id]) }}" method="POST">
            @method('PUT')
            @csrf
            <br>
            <h2 class="subtitle is-6 is-italic">
                Please fill out all the form fields and click 'Submit'
            </h2>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif


            {{-- Here are all the form fields --}}
            <div class="field">
                <label for="title" class="label">Title</label>
                <div class="control">
                    <input type="text" id="title" name="title" class="input" autofocus value="{{ old('title', $post) }}">
                </div>
            </div>


            <div class="field">
                <label for="slug" class="label">Slug</label>
                <div class="control">
                    <input type="text" id="slug" name="slug" class="input" value="{{ old('slug', $post) }}">
                </div>
            </div>

            <div class="field">
                <label for="description" class="label">Description</label>
                <div class="control">
                    <input type="text" id="description" name="description" class="input" value="{{ old('description', $post) }}">
                </div>
            </div>

            <div class="field">
                <label for="body" class="label">Body</label>
                <div class="control">
                    <input type="text" id="body" name="body" class="input" value="{{ old('body', $post) }}">
                </div>
            </div>

            <div class="field is-grouped">
                <div class="control">
                    <button type="submit" class="button is-primary">Update</button>
                </div>
            </div>
        </form>
    </div>
</x-layout.main>
