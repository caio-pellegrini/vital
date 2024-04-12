<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>

    <div class="py-12">
        <div id="send-message-container">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                            {{ __('Send a message') }}
                        </h2>
                        <form action="{{ route('send-message') }}" method="POST">
                            @csrf
                            <div class="mb-4">
                                <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
                                <input name="message" id="message" class="form-textarea mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" rows="3" required >
                            </div>
                            <div class="mb-4">
                                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Send</button>
                            </div>
                        </form>
                        @if(isset($responseMessage))
                            <div class="response bg-gray-100 border border-gray-300 p-3 rounded mt-4">
                                <strong>Response:</strong> {{ $responseMessage }}
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    
</x-app-layout>
