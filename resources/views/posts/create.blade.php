<x-layout.main>
    <x-slot:title>Creating a New Blog Post</x-slot:title>

    <div class="box">

        <form action="{{ route('posts.store') }}" method="POST">
            @csrf
            <h1 class="introduction">Create a New Blog Post</h1>
            <br>
            <h2>
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
                    <input type="text" name="title" class="input" value="{{ old('title') }}" autofocus>
                </div>
            </div>

            <div class="field">
                <label for="date" class="label">Date</label>
                <div class="control">
                    <input type="text" name="date" class="input" value="{{ old('date') }}">
                </div>
            </div>

            <div class="field">
                <label for="description" class="label">Description</label>
                <div class="control">
                    <input type="text" name="description" class="input" value="{{ old('description') }}">
                </div>
            </div>

            <div class="field">
                <label for="body" class="label">Body</label>
                <div class="control">
                    <input type="text" name="body" class="input" value="{{ old('body') }}">
                </div>
            </div>

            <div class="field is-grouped">
                <div class="control">
                    <button type="submit" class="button">Save</button>
                </div>
            </div>
        </form>

    </div>
</x-layout.main>
