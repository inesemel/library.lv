<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('List of books') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">



                <div class="p-6 text-gray-900">

                    <h3 class='p-4'>All books</h3>
                    <table class="min-w-full text-left text-sm font-light">
                        <thead class="border-b font-medium dark:border-neutral-500"
                        <tr>
                            <th scope="col" class="px-6 py-4">Title</th>
                            <th scope="col" class="px-6 py-4">Pages</th>
                            <th scope="col" class="px-6 py-4">Year</th>
                            <th scope="col" class="px-6 py-4">Authors</th>
                        </tr>
                        </thead>

                        @foreach ($books as $book)
                            <tr  class="border-b dark:border-neutral-500">
                                <td class="whitespace-nowrap px-6 py-4">{{ $book->title }}</td>
                                <td lass="whitespace-nowrap px-6 py-4">{{ $book->pages }}</td>
                                <td lass="whitespace-nowrap px-6 py-4">{{ $book->year }}</td>
                                <td lass="whitespace-nowrap px-6 py-4">
                                    <ul>
                                        @foreach($book->authors as $author)
                                            <li>{{$author->name}}</li>
                                        @endforeach
                                    </ul>                       
                                </td>
                            </tr>
                        @endforeach
                    </table>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>