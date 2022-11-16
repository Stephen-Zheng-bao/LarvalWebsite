<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Welcome') }}
            @auth
                {{ Auth::user()->name }}
            @endauth
        </h2>
    </x-slot>
    <!-- TODO: We need a for loop for every product in the database-->
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="mt-6 bg-white shadow-sm rounded-lg divide-y">
                        @foreach ($items as $item)
                            <div class="p-6 flex space-x-2">
                                <div class="flex-1">
                                    <p class="mt-4 text-lg text-gray-900">Product: {{ $item-> productName}}</p>
                                    <p class="mt-4 text-lg text-gray-900">Cost: {{ $item-> productCost}}</p>
                                    <p class="mt-4 text-lg text-gray-900">Quantity: £{{ $item-> productQuantity}}</p>
                                    <p class="mt-4 text-lg text-gray-900">Description: {{ $item-> productDescription }}</p>
                                    <p class="mt-4 text-lg text-gray-900">Rating: {{ $item-> productRating }} Star</p>
                                </div>
                                <x-primary-button class="mt-4">{{ __('Buy it') }}</x-primary-button>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
