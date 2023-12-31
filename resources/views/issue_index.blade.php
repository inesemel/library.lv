<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight dark:text-gray-300">
            {{ __('messages.List_of_book_issues') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg dark:bg-gray-900">



                <div class="p-6 text-gray-900 dark:text-gray-300">
                    <h3 class='p-4 font-semibold'>{{__("messages.My_book_issues")}}</h3>
                    
                    <table class="min-w-full text-left text-sm font-light">
                        <thead class="border-b font-medium dark:border-neutral-500"
                        <tr>
                            <th scope="col" class="px-6 py-4">{{__("messages.Title")}}</th>
                            <th scope="col" class="px-6 py-4">{{__("messages.Issue_date")}}</th>
                            <th scope="col" class="px-6 py-4">{{__("messages.Return_date")}}</th>

                            <!-- <th scope="col" class="px-6 py-4">{{__("Publisher")}}</th> -->

                        </tr>
                        </thead>

                        @foreach ($bookIssues as $bookIssue)
                            <tr  class="border-b dark:border-neutral-500">
                                
                                <td class="whitespace-nowrap px-6 py-4">{{ $bookIssue->book->title }}</td>
                                <td class="whitespace-nowrap px-6 py-4">{{ $bookIssue->issue_date }}</td>
                                <td class="whitespace-nowrap px-6 py-4">{{ $bookIssue->return_date }}</td>
                            </tr>
                        @endforeach
                    </table>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
