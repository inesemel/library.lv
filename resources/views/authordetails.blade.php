<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight dark:text-gray-300">
            {{ __('messages.About_the_author') }}
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
                            <th scope="col" class="px-6 py-4">{{__("messages.Name")}}</th>
                            <th scope="col" class="px-6 py-4">{{__("messages.Pseudonym")}}</th>
                            <th scope="col" class="px-6 py-4">{{__("messages.Birthday")}}</th>
                            <th scope="col" class="px-6 py-4">{{__("messages.Country")}}</th>
                            <th scope="col" class="px-6 py-4">{{__("messages.Books")}}</th>
                            


                        </tr>
                        </thead>
                        <tr  class="border-b dark:border-neutral-500">
                            <td class="whitespace-nowrap px-6 py-4">
                                <a href="{{action([App\Http\Controllers\AuthorController::class, 'author_details'],['id'=> $author->id])}}">
                                    {{ $author->name }}
                                </a>
                            </td>
                            <td class="whitespace-nowrap px-6 py-4">{{ $author->pseudonym }}</td>
                            <td class="whitespace-nowrap px-6 py-4">{{ $author->birthday }}</td>
                            <td class="whitespace-nowrap px-6 py-4">{{ $author->country }}</td>
                            <td class="whitespace-nowrap px-6 py-4">
                                <ul>
                                    @foreach($author->books as $book)
                                        <li>
                                            <a href="{{action([App\Http\Controllers\BookController::class, 'details'],['id'=> $author->id])}}">
                                                {{$book->title}}
                                            </a> 
                                        </li>
                                    @endforeach
                                </ul>                       
                            </td>
                            <td class="whitespace-nowrap px-6 py-4 border-l dark:border-neutral-500 dark:bg-gray-800 text-center">
                                <a href="{{action([App\Http\Controllers\AuthorController::class, 'edit'],['id'=> $author->id])}}">
                                    {{ __("messages.Edit") }}
                                </a>    
                            </td>
                        </tr>
                    </table>
                    </table>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>