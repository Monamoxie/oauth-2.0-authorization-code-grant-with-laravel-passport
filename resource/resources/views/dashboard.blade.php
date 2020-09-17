<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> 

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <!-- start -->

                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                    <div>
                        <x-jet-application-logo class="block h-12 w-auto" />
                    </div>

                    <div class="mt-8 text-2xl">
                        Welcome to your Resource Dashboard. You are a {{ $userType }} </b>
                    </div>

                    <div class="mt-6 text-gray-500">
                        @if($userType === 'user')

                            @if(count($userPosts) < 1) 
                                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                                    <strong class="font-bold">You do not have any resource posts yet.</strong> <br/> <br/>
                                    <span class="block sm:inline"> 
                                        <a href="/posts/create">
                                            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Generate</button> 
                                        </a>
                                    </span> 
                                </div>
                            @else
                                <div class="bg-green-100 border border-green-400 text-green-700 px-3 py-3 rounded relative uppercase" role="alert">
                                    <h2 class="font-bold items-center text-xl"> Your Resources! </h2> 
                                </div>
                            @endif

                        @elseif ($userType === 'client') 
                            <div class="bg-green-100 border border-green-400 text-green-700 px-3 py-3 rounded relative uppercase" role="alert">
                                <h2 class="font-bold items-center text-xl"> Your Credentials! </h2>  
                            </div>
                        @endif
                    </div>
                </div>

            
                @if($userType === 'user')
                    <div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2">
                        @if (count($userPosts) > 0)
                            @foreach ($userPosts as $post)
                                <div class="p-6">

                                    <div class="flex items-center">
                                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" 
                                        stroke-width="2" viewBox="0 0 24 24" 
                                        class="w-8 h-8 text-blue-600"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                                        <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold"><a href="https://laravel.com/docs">{{ $post->title  }}</a></div>
                                    </div>

                                    <div class="ml-12">
                                        <div class="mt-2 text-sm text-gray-500">
                                            {{ $post->content }}
                                        </div> 
                                    </div>
                                    
                                </div>
                            @endforeach
                        @endif
                    </div>

                    <div class="bg-gray-200 bg-opacity-25 pt-5 pb-5">
                        <div id="credentials" style="margin: auto; width: 600px; max-width: 100%;">
                            <h4 class="font-bold items-center text-xl"> Applications you authorized to access your account on your behalf </h4>     
                            <passport-authorized-clients></passport-authorized-clients> 
                        </div>
                    </div>
                @elseif ($userType === 'client')
                    <div class="bg-gray-200 bg-opacity-25 pt-5 pb-5">
                        <div id="credentials" style="margin: auto; width: 600px; max-width: 100%;">
                            <passport-clients></passport-clients>
                        </div>
                    </div>
                @endif 
            


                <!-- end -->
            </div>
        </div>
    </div>
</x-app-layout>
