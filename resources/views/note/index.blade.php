<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Note') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">
                <div class="text-2xl font-bold mb-3">
                    Note List
                </div>
                <a href="{{ route('note.create') }}"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    <span class="fas fa-plus"> </span>
                    Create Note
                </a>
            </div>
            <div class="wrap-container overflow: hidden; mb-4">
                <div class="container">
                    @forelse($notes as $row)
                        <!-- CARD -->
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="card ml-3 mt-2 mb-6" id="card-item"
                                    style="border-radius: 20px !important; box-shadow: 0px 5px 10px #6777EF; width: 800px;">
                                    <div class="card-body d-flex">
                                        <div class="col-lg-10">
                                            <h3 class="title text-2xl font-bold mb-1" style="color:#6777EF;">
                                                {{ $row->title }}</h3>
                                            <p> {{ $row->note }}</p>
                                        </div>

                                        <div class="col-lg-1">
                                            <button wire:click="complete({{ $row->id }})" type="button"
                                                style="position: absolute; bottom: 0;" class="-ml- btn btn-primary">
                                                <span class="fas fa-check"> </span>
                                            </button>
                                        </div>
                                        <!-- trigger modal -->
                                        <div class="col-lg-1">
                                            <button wire:click="detail({{ $row->id }})" type="button"
                                                style="position: absolute; bottom: 0;" class="-ml- btn btn-primary">
                                                <span class="fas fa-expand"> </span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <h2 class="text-2xl text-center mb-3"> ... </h2>
                    @endforelse
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
