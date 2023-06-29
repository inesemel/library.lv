<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight dark:text-gray-300">
            {{ __('Editing an author') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg dark:bg-gray-900">

                <div class="p-6 text-gray-900 dark:text-gray-300">
                    <form method="POST" action={{ action([App\Http\Controllers\AuthorController::class, 'update'], [ 'author' => $author->id]) }}>
                        @csrf
                        @method('PUT')

                        <fieldset>
                            <legend style="font-size: 150%">{{__("Edit")}}</legend>

                            <div class="p-3">
                                <label for="author_name">{{__("Name")}}</label>
                                <br>
                                <x-text-input type="text" name="author_name" id="author_name" value="{{ old('name', $author->name) }}" style="width: 100%"/>
                            </div>

                            <div class="p-3">
                                <label for="author_pseudonym">{{__("Pseudonym")}}</label>
                                <br>
                                <x-text-input type="text" name="author_pseudonym" id="author_pseudonym" value="{{ old('Pseudonym', $author->pseudonym) }}" />
                            </div>

                            <div class="p-3">
                                <label for="author_year">{{__("Birthday")}}</label>
                                <br>
                                <x-text-input type="date" name="author_year" id="author_year" value="{{ old('Birthday', $author->birthday) }}" />
                            </div>

                            <div class="p-3">
                                <label for="author_country">{{__("Country")}}</label>
                                <br>
                                <x-text-input type="text" name="author_country" id="author_country" value="{{ old('Country', $author->country) }}" />
                            </div>

                            <div class="p-4">
                                <label for="book_id">{{__("Books")}}</label>
                                <br>
                                @foreach ($books->sortBy('title') as $book)
                                    <label>
                                        <input type="checkbox" name="books[]" value="{{ $book->id }}" {{ $author->books->contains($book) ? 'checked' : '' }}
                                        class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm"/>
                                        {{ $book->title }}
                                    </label>
                                    <br>
                                @endforeach
                            </div>
                        </fieldset>
                        <table class="min-w-full text-left font-light my-3">
                            <td class=" text-left">
                                <form method="POST" action="{{ route('authors.update', $author->id)}}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <x-primary-button class="max-w-7xl mx-auto sm:px-6 lg:px-8 dark:bg-indigo-400" type="submit">
                                        {{__("Save")}}
                                    </x-primary-button>
                                </form>

                                    <script>
                                        function confirmDelete() {
                                            return confirm("Do you really want to delete this author?");
                                        }
                                    </script>
                            </td>

                            <td class=" text-right"> 
                                <form action="{{ route('authors.destroy', $author->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <x-danger-button class=" max-w-7xl mx-auto sm:px-6 lg:px-8 text-right" type="submit" onclick="return confirmDelete()">
                                        {{__("Delete")}}
                                    </x-danger-button>
                                </form>

                            </td>
                        <table>  
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>