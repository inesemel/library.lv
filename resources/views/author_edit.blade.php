<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editing an author') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <div class="p-6 text-gray-900">
                    <form method="POST" action={{ action([App\Http\Controllers\AuthorController::class, 'update'], [ 'author' => $author->id]) }}>
                        @csrf
                        @method('PUT')

                        <fieldset>
                            <legend style="font-size: 150%">{{__("Edit")}}</legend>

                            <div class="p-3">
                                <label for="author_name">{{__("Name")}}</label>
                                <br>
                                <input type="text" name="author_name" id="author_name" value="{{ old('name', $author->name) }}" style="width: 100%"/>
                            </div>

                            <div class="p-3">
                                <label for="author_pseudonym">{{__("Pseudonym")}}</label>
                                <br>
                                <input type="text" name="author_pseudonym" id="author_pseudonym" value="{{ old('Pseudonym', $author->pseudonym) }}" />
                            </div>

                            <div class="p-3">
                                <label for="author_year">{{__("Birthday")}}</label>
                                <br>
                                <input type="date" name="author_year" id="author_year" value="{{ old('Birthday', $author->birthday) }}" />
                            </div>

                            <div class="p-3">
                                <label for="author_country">{{__("Country")}}</label>
                                <br>
                                <input type="text" name="author_country" id="author_country" value="{{ old('Country', $author->country) }}" />
                            </div>

                            <div class="p-4">
                                <label for="book_id">{{__("Books")}}</label>
                                <br>
                                @foreach ($books->sortBy('title') as $book)
                                    <label>
                                        <input type="checkbox" name="books[]" value="{{ $book->id }}" {{ $author->books->contains($book) ? 'checked' : '' }}>
                                        {{ $book->title }}
                                    </label>
                                    <br>
                                @endforeach
                            </div>
                        </fieldset>
                        <table class="min-w-full text-left font-light">
                        <td class=" text-left">
                            <form method="POST" action="{{ route('authors.destroy', $author->id) }}">
                                @csrf
                                @method('DELETE')
                                <script>
                                    function confirmDelete() {
                                        return confirm("Do you really want to delete this author?");
                                    }
                                </script>
                                <button class="border max-w-7xl mx-auto sm:px-6 lg:px-8 text-right" style="background-color:rgb(255, 233, 233)" type="submit" onclick="return confirmDelete()">
                                    {{__("Delete")}}
                                </button>
                            </form>
                        </td>
                        <td class=" text-right">
                            <button class="border max-w-7xl mx-auto sm:px-6 lg:px-8 text-right" style="background-color:rgb(243, 244, 246)" type="submit">
                                {{__("Save")}}
                            </button>
                        </td> 
                        <table> 
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>