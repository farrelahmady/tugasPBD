<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Note') }}
        </h2>
    </x-slot>

    <form class="container mt-5" action="/note" method="post">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="">
            @error('title')
                {{ message }}
            @enderror
        </div>
        <div class="mb-3">
            <input id="note" type="hidden" name="note" value="">
            <trix-editor class="form-control" input="note"></trix-editor>
        </div>
        <button type="submit" class="btn btn-primary">Save Note</button>
    </form>

</x-app-layout>
