<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight dark:text-gray-200">
            {{ __('messages.List_of_authors') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-200 dark:bg-gray-900">

                    <h3 class='p-4 font-semibold'>{{__("messages.All_authors")}}</h3>
                    @can('is-admin')
                        <a href="{{action([App\Http\Controllers\AuthorController::class, 'create'])}}" class="scale-100 p-6 border-black bg-gray-100 dark:bg-gray-800 rounded-lg shadow shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[0.99] transition-all duration-250 focus:outline focus:outline-2 focus:outline-indigo-500">
                            <p>
                                {{ __("messages.Add_new_author") }} 
                            </p>
                        </a>   
                    @endcan
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
                        @foreach ($authors as $author)
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
                            @can('is-admin')
                            <td class="whitespace-nowrap px-6 py-4 border-l text-center dark:border-neutral-500">
                                <a href="{{action([App\Http\Controllers\AuthorController::class, 'edit'],['id'=> $author->id])}}">
                                    {{ __("messages.Edit") }}
                                </a>    
                            </td>
                            @endcan
                        </tr>
                    @endforeach
                    </table>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>