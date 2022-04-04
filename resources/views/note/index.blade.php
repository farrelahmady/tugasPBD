<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Note') }}
        </h2>
    </x-slot>
    <div class="py-8">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-5 py-4">
                <div class="text-2xl font-bold mb-3">
                    Note List
                </div>
                <a href="{{ route('note.create') }}"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    <span class="fas fa-plus"> </span>
                    Create Note
                </a>
                <div class="wrap-container mt-4">
                    <div class="container">
                        @forelse($notes as $row)
                            <!-- CARD -->
                            <div class="row">
                                <div class="card mt-2 mb-4" id="card-item"
                                    style="border-radius: 20px !important; box-shadow: 0px 5px 10px #3b82f6; width: 100%;">
                                    <div class="card-body d-flex">
                                        <div class="col-lg-11 ml-2">
                                            <h3 class="title font-bold mt-2" style="color:#3b82f6;">
                                                {{ $row->title }}</h3>
                                            <p> {!! $row->note !!}</p>
                                        </div>
                                        <div class="col-lg-1 ml-4">
                                            <form action="{{ route('note.destroy', $row->id) }}" method="POST">
                                                @csrf
                                                @method('delete')
                                                <button type="submit"
                                                    class="btn btn-danger mt-2">
                                                    <span class="fas fa-trash"> </span>
                                                </button>
                                            </form>
                                            <a href="/note/{{ $row->id }}/edit"
                                                class="btn btn-warning mt-3">
                                                <span class="fas fa-edit"> </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <h2 class="text-2xl text-center"> ... </h2>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
