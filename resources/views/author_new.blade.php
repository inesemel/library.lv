<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight dark:text-gray-300">
            {{ __('Adding a new author') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg dark:text-gray-300 dark:bg-gray-900">

                <div class="p-6 text-gray-900 dark:text-gray-300 dark:bg-gray-900">
                    <form method="POST" action={{ action([App\Http\Controllers\AuthorController::class, 'store']) }}>
                        @csrf
                        

                        <fieldset>
                            <legend class="font-semibold">{{__("Add new author")}}</legend>
                            @if ($errors->any())
                                <div class="alert alert-danger text-red-800 dark:text-red-500">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <div class="p-3">
                                <label for="author_name">{{__("Name")}}</label>
                                <br>
                                <x-text-input type="text" name="author_name" id="author_name"  style="width: 100%"/>
                            </div>

                            <div class="p-3">
                                <label for="author_pseudonym">{{__("Pseudonym")}}</label>
                                <br>
                                <x-text-input type="text" name="author_pseudonym" id="author_pseudonym" style="width: 100%"/>
                            </div>

                            <div class="p-3">
                                <label for="author_year">{{__("Birthday")}}</label>
                                <br>
                                <x-text-input type="date" name="author_year" id="author_year"/>
                            </div>

                            <div class="p-3">
                                <label for="author_country">{{__("Country")}}</label>
                                <br>
                                <x-text-input type="text" name="author_country" id="author_country" />
                            </div>

                            <div class="p-4">
                                <label for="book_id">{{__("Books")}}</label>
                                <br>
                                @foreach ($books->sortBy('title') as $book)
                                    <label>
                                        <input type="checkbox" name="books[]" value="{{ $book->id }}"
                                        class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                                        {{ $book->title }}
                                    </label>
                                    <br>
                                @endforeach                         
                        </fieldset>
                        
                        <div class="px-6 py-4 text-right">
                            <x-primary-button class="max-w-7xl mx-auto sm:px-6 lg:px-8 dark:bg-indigo-400" type="submit">
                                {{__("Save")}}
                            </x-primary-button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>