<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('List of authors') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">



                <div class="p-6 text-gray-900">

                    <h3 class='p-4'>All authors</h3>
                    <table class="min-w-full text-left text-sm font-light">
                        <thead class="border-b font-medium dark:border-neutral-500"
                        <tr>
                            <th scope="col" class="px-6 py-4">{{__("Name")}}</th>
                            <th scope="col" class="px-6 py-4">{{__("Pseudonym")}}</th>
                            <th scope="col" class="px-6 py-4">{{__("Birthday")}}</th>
                            <th scope="col" class="px-6 py-4">{{__("Country")}}</th>
                            <th scope="col" class="px-6 py-4">{{__("Books")}}</th>

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
                            <td class="whitespace-nowrap px-6 py-4 border text-center">
                                <a href="{{action([App\Http\Controllers\AuthorController::class, 'edit'],['id'=> $author->id])}}">
                                    {{ __("Edit") }}
                                </a>    
                            </td>
                        </tr>
                    @endforeach

                    </table>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>