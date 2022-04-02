<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Note') }}
        </h2>
    </x-slot>

    <form class="container mt-5" action="" method="post">
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="email" class="form-control" id="title" name="title" value="">
        </div>
        <div class="mb-3">
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <div class="mb-3">
            <input id="x" type="hidden" name="content">
            <trix-editor input="x"></trix-editor>
        </div>

        <button type="submit" class="btn btn-primary">Save Note</button>
    </form>

</x-app-layout>
