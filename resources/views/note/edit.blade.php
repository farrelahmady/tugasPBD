<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Update Note') }}
        </h2>
    </x-slot>

    <form class="container mt-5" action="/note/{{ $note->id }}" method="post">
        @method('put')
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $note->title) }}">
        </div>
        <div class="mb-3" class="bg-primary">
            <input id="note" type="hidden" name="note" value="{{ old('note', $note->note) }}">
            <trix-editor class="form-control" input="note"></trix-editor>
        </div>

        <button type="submit" class="btn btn-primary">Save Note</button>
    </form>

</x-app-layout>
