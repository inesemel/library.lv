<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight dark:text-gray-300">
            {{ __('messages.Editing_the_book') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg dark:text-gray-300 dark:bg-gray-900">

                <div class="p-6 text-gray-900 dark:text-gray-300 dark:bg-gray-900">
                    <form method="POST" action={{ action([App\Http\Controllers\BookIssueController::class, 'store']) }}>
                        @csrf
                        

                        <fieldset>
                            <legend class="font-semibold">{{__("messages.Create")}}</legend>
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
                                <label for="book_id">{{__("messages.Select_a_book")}}</label>
                                <br>
                                <select id="book_id" name="book_id" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                                
                                @foreach ($books as $book)
                                    <option value="{{ $book->id }}" {{ old('book_id') == $book->id ? 'selected' : '' }}>{{ $book->title }}</option>
                                
                                    <br>
                                @endforeach
                                </select>
                            </div>

                            <div class="p-3">
                                <label for="user_id">{{__("messages.User_ID")}}</label>
                                <br>
                                <x-text-input id="user_id" name="user_id" type="number"/>
                            </div>

                            <div class="p-3">
                                <label for="return_date">{{__("messages.Return_date")}}</label>
                                <br>
                                <x-text-input type="date" name="return_date" id="return_date"  />
                            </div>
                             

                        </fieldset>
                        
                        <div class="px-6 py-4 text-right">
                            <x-primary-button class="max-w-7xl mx-auto sm:px-6 lg:px-8 dark:bg-indigo-400" type="submit">
                                {{__("messages.Save")}}
                            </x-primary-button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>