<x-app-layout>
    <x-slot name="header">
        <h2 class="">
            Spam Detection
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <form action="{{route('posts.store')}}" method="post">
                        @csrf
                        <label for="">Title</label>
                        <input name="title" class="bg-pink border border-gray-300 rounded-lg mb-5 py-2 px-4 block w-full appearance-none leading-normal" type="text">

                        <label for="">Body</label>
                        <textarea name="body" rows="10" class="bg-pink border border-gray-300 rounded-lg mb-5 py-2 px-4 block w-full appearance-none leading-normal"></textarea>

                        <button type="submit" class="btn btn-primary">Save Post!</button>

                        <x-spam-detector></x-spam-detector>
                    </form>

                    {{-- Check if we've any flash messages --}}
                    @include('Partials.messenger')

                </div>
            </div>
        </div>
    </div>

</x-app-layout>
