<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight dark:text-gray-300">
            {{ __('messages.About_the_book') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg dark:bg-gray-900 dark:border-gray-700">
                <div class="p-6 text-gray-900 dark:text-gray-300">
                    
                    <h3 class='p-4 font-semibold'>{{__("messages.Details")}}</h3>

                    <table class="min-w-full text-left text-sm font-light">
                        <thead class="border-b font-medium dark:border-neutral-500"
                        <tr>
                            <th scope="col" class="px-6 py-4">{{__("messages.Title")}}</th>
                            <th scope="col" class="px-6 py-4">{{__("messages.Authors")}}</th>
                            <th scope="col" class="px-6 py-4">{{__("messages.Pages")}}</th>
                            <th scope="col" class="px-6 py-4">{{__("messages.Year")}}</th>
                            <th scope="col" class="px-6 py-4">{{__("messages.Publisher")}}</th>
                            <th scope="col" class="px-6 py-4">{{__("messages.Genre")}}</th>
                            


                        </tr>
                        </thead>

                            <tr  class="border dark:border-neutral-500">
                                <td class="whitespace-nowrap px-6 py-4">{{ $book->title }}</td>
                                <td class="whitespace-nowrap px-6 py-4">
                                    <ul>
                                        @foreach($book->authors as $author)
                                            <li>
                                                <a href="{{action([App\Http\Controllers\AuthorController::class, 'author_details'],['id'=> $author->id])}}">
                                                    {{$author->name}}
                                                </a> 
                                            </li>
                                        @endforeach
                                    </ul>                       
                                </td>
                                <td class="whitespace-nowrap px-6 py-4">{{ $book->pages }}</td>
                                <td class="whitespace-nowrap px-6 py-4">{{ $book->year }}</td>
                               
                                <td class="whitespace-nowrap px-6 py-4">{{ $publisher->title }}</td>
                                <td class="whitespace-nowrap px-6 py-4">{{ $book->genre }}</td>

                                @can('is-admin')
                                    <td class="whitespace-nowrap px-6 py-4 border-l dark:border-neutral-500 dark:bg-gray-800 text-center">
                                        <a href="{{action([App\Http\Controllers\BookController::class, 'edit'],['id'=> $book->id])}}">
                                            {{ __("messages.Edit") }}
                                        </a>    
                                    </td>
                                @endcan
                            </tr>
                    </table>

                </div>

            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden min-w-full text-left text-sm font-light dark:bg-gray-900 dark:text-gray-300">
                        <div class="px-10 py-2 rowspan-2 float-left">
                            <img class="overflow-hidden shadow-sm sm:rounded-lg" src="https://www.zvaigzne.lv/images/books/100509/300x0_cover.jpg" alt="Grāmatas vāks"> {{--$book->image --}}
                        </div>
                        <br><br><br>
                        <div class="py-2 font-semibold"><p style="text-align: justify">Discription</p></div> 
                        <table class="whitespace-nowrap py-2">
                            <tr>{{ $book->description }}</tr>
                            <tr>@if ($book->reprint ==1)
                                <li class="py-3">{{__("Reprint")}}</li>
                            @endif</tr>
                            <tr>@if ($book->cased == 1)
                                <li class="py-3">{{__("Cased")}}</li>
                            @endif</tr>
                        </table>
                    </div>
                </div>
            </div>

            </div>
        </div>
    </div>
</x-app-layout>