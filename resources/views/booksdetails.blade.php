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

                                <td class="whitespace-nowrap px-6 py-4">
                                    <form action="{{ route('book.vote', $book->id) }}" method="POST">
                                        @csrf
                                        <button type="submit" class="group inline-flex items-center hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="-mt-px mr-1 w-5 h-5 stroke-gray-400 dark:stroke-gray-600 group-hover:stroke-gray-600 dark:group-hover:stroke-gray-400">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                            </svg>
                                        </button>
                                    </form>
                                </td>

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
                        @if(filter_var($book->image_url, FILTER_VALIDATE_URL) !== false)
                            <img class="overflow-hidden shadow-sm sm:rounded-lg" style="max-width:300px; height:auto" src="{{ $book->image_url }}" alt="Grāmatas vāks"> {{--$book->image --}}  
                        @else
                            <svg style="max-width:300px; height:auto"
                                width="300mm"
                                height="412mm"
                                viewBox="0 0 300 412"
                                version="1.1"
                                id="svg5"
                                xmlns="http://www.w3.org/2000/svg"
                                xmlns:svg="http://www.w3.org/2000/svg">
                                <defs id="defs2" />
                                <g
                                    id="layer1"
                                    style="display:inline"
                                    transform="translate(45,57.5)">
                                    <rect
                                        style="fill:#f3f4f6;fill-opacity:1;stroke:none;stroke-width:0.2159"
                                        id="rect846"
                                        width="300"
                                        height="412"
                                        x="-45"
                                        y="-57.5" />
                                </g>
                                <g
                                    id="layer5"
                                    style="display:none"
                                    transform="translate(45,57.5)">
                                <path
                                    style="fill:#000000;stroke-width:0.0846667"
                                    d="m 127.76032,131.24624 c -0.10133,-0.0408 -0.27042,-0.19083 -0.37576,-0.3333 l -0.19152,-0.25905 h -5.13181 c -3.87852,0 -5.15662,-0.0248 -5.23341,-0.1016 -0.13634,-0.13634 -0.12882,-0.44774 0.0137,-0.566 0.0836,-0.0694 1.59924,-0.0897 5.52384,-0.0739 l 5.40857,0.0218 0.14949,0.3175 0.1495,0.3175 h 0.91373 c 0.94033,0 1.11693,-0.0557 1.11693,-0.35262 0,-0.2447 0.28162,-0.32471 1.143,-0.32471 0.89787,0 1.143,0.0787 1.143,0.36705 0,0.32572 -0.15779,0.39495 -0.90023,0.39495 -0.58913,0 -0.70444,0.0229 -0.74494,0.14817 -0.0264,0.0815 -0.17415,0.23389 -0.32844,0.33866 -0.25644,0.17414 -0.37462,0.19004 -1.37596,0.18514 -0.60249,-0.003 -1.17833,-0.0388 -1.27966,-0.0796 z m 8.38285,-1.20205 c -0.68667,-0.67994 -1.15803,-1.08615 -1.20351,-1.03716 -0.0411,0.0443 -0.30933,0.41335 -0.59604,0.82014 -0.28671,0.40678 -0.59918,0.78129 -0.69439,0.83224 -0.24257,0.12982 -0.44954,-0.0779 -0.67077,-0.6732 -0.0972,-0.26143 -0.5773,-1.53103 -1.06699,-2.82133 -0.48969,-1.29031 -0.87772,-2.40971 -0.8623,-2.48755 0.0154,-0.0778 0.10425,-0.19058 0.19738,-0.25051 0.18533,-0.11927 0.13538,-0.13596 3.96289,1.32382 1.96446,0.74923 2.17545,0.85402 2.17545,1.08044 0,0.18846 -0.18887,0.35966 -1.0795,0.97848 -0.38418,0.26693 -0.6985,0.50678 -0.6985,0.53299 0,0.0262 0.50482,0.55728 1.12183,1.18013 0.61701,0.62286 1.13383,1.16817 1.14849,1.21181 0.0592,0.17612 -0.16569,0.4274 -0.38245,0.4274 -0.17241,0 -0.47825,-0.25291 -1.35159,-1.1177 z m -1.95189,-1.38194 c 0.36888,-0.53883 0.61908,-0.80211 1.016,-1.06914 1.04118,-0.70046 1.16326,-0.53876 -1.04541,-1.38457 -1.0695,-0.40955 -1.96159,-0.7276 -1.98243,-0.70676 -0.0472,0.0472 1.41294,3.88338 1.47634,3.87872 0.0254,-0.002 0.26633,-0.32508 0.5355,-0.71825 z m 4.39587,1.89004 c -0.14669,-0.14669 -0.12496,-0.35901 0.0532,-0.52028 0.12665,-0.11461 0.34702,-0.14012 1.21073,-0.14012 1.10844,0 1.2591,0.0456 1.2591,0.381 0,0.0978 -0.0457,0.22352 -0.1016,0.2794 -0.14106,0.14106 -2.28041,0.14106 -2.42147,0 z m -10.37092,-0.7169 c -0.0837,-0.0231 -0.17381,-0.15265 -0.20109,-0.28905 l -0.0494,-0.24712 h -5.43158 c -4.77897,0 -5.45418,-0.0158 -5.61975,-0.1318 l -0.18817,-0.1318 v -8.10626 c 0,-6.19199 0.024,-8.13026 0.1016,-8.20787 0.15364,-0.15364 1.03889,-0.13065 1.1726,0.0305 0.17425,0.20997 0.004,0.58134 -0.28093,0.6144 l -0.23127,0.0268 v 7.52971 7.52971 h 3.78178 c 2.07997,0 3.7659,-0.0143 3.7465,-0.0318 -0.0194,-0.0175 -0.89253,-0.22997 -1.94028,-0.47217 -3.71633,-0.85907 -4.01987,-0.93859 -4.1275,-1.08135 -0.083,-0.11008 -0.10583,-1.93638 -0.10583,-8.46385 0,-8.27979 9.1e-4,-8.3244 0.17366,-8.49715 0.0983,-0.0983 0.23608,-0.15409 0.3175,-0.12855 0.0791,0.0248 1.88417,0.57681 4.01124,1.22667 2.12708,0.64986 3.99398,1.24633 4.14867,1.32548 0.44613,0.2283 0.87204,0.59462 1.21653,1.04635 l 0.31886,0.41812 0.25657,-0.38734 c 0.54054,-0.81608 1.15025,-1.12737 3.78097,-1.93041 0.34925,-0.10661 1.60655,-0.49887 2.794,-0.87168 2.95954,-0.92918 2.77199,-0.88565 2.96868,-0.68896 0.15998,0.15998 0.16398,0.36747 0.16398,8.4976 0,9.28025 0.0528,8.51057 -0.59612,8.68531 -0.36428,0.0981 -0.61473,0.0213 -0.70595,-0.21638 -0.0694,-0.18081 0.0763,-0.43763 0.28598,-0.50419 0.16784,-0.0533 0.16943,-0.12675 0.16943,-7.8374 0,-4.28099 -0.0286,-7.78333 -0.0635,-7.78298 -0.0349,3.4e-4 -0.2921,0.0719 -0.5715,0.15901 -0.2794,0.0871 -1.81938,0.56557 -3.42216,1.06327 -1.60279,0.4977 -3.05059,0.97487 -3.21733,1.06037 -0.42219,0.21647 -0.9139,0.72941 -1.17945,1.23037 l -0.2244,0.42334 -0.0231,7.00616 c -0.0138,4.19946 0.008,7.00617 0.0544,7.00617 0.0426,0 0.0987,-0.0552 0.12454,-0.12257 0.0652,-0.16998 0.43398,-0.34717 1.06021,-0.50944 0.61762,-0.16004 0.83701,-0.11691 0.91132,0.17915 0.0757,0.30147 -0.091,0.4309 -0.7754,0.60228 -0.57654,0.14436 -0.58915,0.15348 -0.72547,0.52451 -0.0971,0.26433 -0.1992,0.39359 -0.34032,0.43088 -0.24601,0.065 -1.32917,0.0819 -1.53858,0.024 z m 0.42724,-8.05033 -0.0216,-6.9215 -0.18872,-0.4089 c -0.26574,-0.57579 -0.65499,-1.03909 -1.08449,-1.29079 -0.31617,-0.18529 -2.18282,-0.7946 -5.28846,-1.72627 -0.44238,-0.13271 -1.12818,-0.33929 -1.524,-0.45906 -0.39582,-0.11977 -0.74824,-0.21856 -0.78317,-0.21954 -0.0349,-9.7e-4 -0.0635,3.50086 -0.0635,7.78185 0,7.33989 0.008,7.78612 0.14817,7.82732 0.0815,0.024 1.31022,0.31381 2.7305,0.64394 1.42028,0.33013 2.88713,0.67247 3.25967,0.76075 0.37253,0.0883 1.03191,0.24291 1.46528,0.34362 0.51606,0.11992 0.86665,0.2524 1.016,0.38391 0.12543,0.11045 0.25681,0.20202 0.29197,0.20349 0.0352,0.001 0.0542,-3.112 0.0423,-6.91882 z m 8.42159,7.38236 c -0.22851,-0.16005 -0.24163,-0.38624 -0.0333,-0.57474 0.13244,-0.11985 0.3835,-0.14012 1.73567,-0.14012 h 1.58083 v -7.52475 -7.52475 l -0.24719,-0.0494 c -0.28408,-0.0568 -0.39992,-0.30446 -0.26252,-0.5612 0.0765,-0.14296 0.17597,-0.17253 0.58042,-0.17253 0.26845,0 0.53381,0.0457 0.58969,0.1016 0.0776,0.0776 0.1016,2.01588 0.1016,8.20787 v 8.10626 l -0.18817,0.1318 c -0.1555,0.10892 -0.4904,0.1318 -1.9285,0.1318 -1.4381,0 -1.773,-0.0229 -1.92849,-0.1318 z"
                                    id="path2530" />
                                </g>
                                <g
                          id="layer3"
                          style="display:inline"
                          transform="translate(45,57.5)">
                         <rect
                            style="fill:#b6bfc8;fill-opacity:1;stroke:none;stroke-width:0.2159"
                            id="rect1154"
                            width="32.166065"
                            height="121.51624"
                            x="14.676115"
                            y="-240.00969"
                            transform="rotate(135)" />
                         <rect
                            style="fill:#b6bfc8;fill-opacity:1;stroke:none;stroke-width:0.2159"
                            id="rect1154-3"
                            width="32.166065"
                            height="121.51624"
                            x="-195.33461"
                            y="-29.998983"
                            transform="matrix(-0.70710677,-0.70710679,-0.70710679,0.70710677,0,0)" />
                       </g>
                       <g
                          id="layer4"
                          style="display:none"
                          transform="translate(45,57.5)">
                         <ellipse
                            style="fill:#b6bfc8;fill-opacity:1;stroke:none;stroke-width:0.2159"
                            id="path2131"
                            cx="105"
                            cy="105.03207"
                            rx="49.027771"
                            ry="58.125706" />
                         <rect
                            style="fill:#b6bfc8;fill-opacity:1;stroke:none;stroke-width:0.224977"
                            id="rect2155"
                            width="174.88257"
                            height="128.42769"
                            x="18.195877"
                            y="178.9261"
                            ry="34.798492" />
                       </g>
                     </svg>
                     @endif 
                     
                     

                        </div>
                        <br><br><br>
                        <div class="py-2 font-semibold"><p style="text-align: justify">{{__("messages.Description")}}</p></div> 
                        <table class="whitespace-nowrap py-2">
                            <tr>{{ $book->description }}</tr>
                            <tr>@if ($book->reprint ==1)
                                <li class="py-3">{{__("messages.Reprint")}}</li>
                            @endif</tr>
                            <tr>@if ($book->cased == 1)
                                <li class="py-3">{{__("messages.Cased")}}</li>
                            @endif</tr>
                        </table>
                    </div>
                </div>
            </div>

            </div>
        </div>
    </div>
</x-app-layout>