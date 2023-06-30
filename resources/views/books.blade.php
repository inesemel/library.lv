<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight dark:text-gray-300">
            {{ __('messages.List_of_books') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg dark:bg-gray-900 dark:border-gray-700">
                <div class="p-6 text-gray-900  dark:text-gray-300">

                    <h3 class='p-4 font-semibold'>{{__("messages.All_books")}}</h3>
                    <a href="{{action([App\Http\Controllers\BookController::class, 'create'])}}" class="scale-100 p-6 border-black bg-gray-100 dark:bg-gray-800 rounded-lg shadow shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[0.99] transition-all duration-250 focus:outline focus:outline-2 focus:outline-indigo-500">
                        <p>
                            {{ __('messages.Add_new_book') }} 
                        </p>
                    </a>    
                    <table class="min-w-full text-left text-sm font-light">
                        <thead class="border-b font-medium dark:border-neutral-500"
                        <tr>
                            <th scope="col" class="px-6 py-4">{{__("messages.Title")}}</th>
                            <th scope="col" class="px-6 py-4">{{__("messages.Pages")}}</th>
                            <th scope="col" class="px-6 py-4">{{__("messages.Year")}}</th>
                            <th scope="col" class="px-6 py-4">{{__("messages.Authors")}}</th>
                            <!-- <th scope="col" class="px-6 py-4">{{__("Publisher")}}</th> -->

                        </tr>
                        </thead>

                        @foreach ($books as $book)
                            <tr  class="border-b dark:border-neutral-500">
                                <td class="whitespace-nowrap px-6 py-4">
                                    <a href="{{action([App\Http\Controllers\BookController::class, 'details'],['id'=> $book->id])}}">
                                        {{ $book->title }}
                                    </a>
                                </td>
                                <td class="whitespace-nowrap px-6 py-4">{{ $book->pages }}</td>
                                <td class="whitespace-nowrap px-6 py-4">{{ $book->year }}</td>
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
                                @can('is-admin')
                                    <td class="whitespace-nowrap px-6 py-4 border-l text-center dark:border-neutral-500">
                                        <a href="{{action([App\Http\Controllers\BookController::class, 'edit'],['id'=> $book->id])}}">
                                            {{ __("messages.Edit") }}
                                        </a>    
                                    </td>
                                @endcan
                                <td>
                                <form action="{{ route('book.vote', $book->id) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="group inline-flex items-center hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-indigo-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="-mt-px mr-1 w-5 h-5 stroke-gray-400 dark:stroke-gray-600 group-hover:stroke-gray-600 dark:group-hover:stroke-gray-400">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                        </svg>
                                    </button>
                                </form>
                                </td>
                            </tr>
                        @endforeach
                    </table>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>