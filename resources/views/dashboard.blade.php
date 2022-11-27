<x-app-layout>

        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Welcome') }}
            @auth
                {{ Auth::user()->name }}
            @endauth
        </h2>

    <!-- TODO: We need a for loop for every product in the database-->
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="mt-6 bg-white shadow-sm rounded-lg divide-y">
                        @foreach ($items as $item)

                                <div class="p-6 flex space-x-2">
                                    <div class="flex-1">
                                    {{--<img src="{{ url($product->image) }}" alt="" class="w-full max-h-60">--}}
                                        <p class="mt-4 text-lg text-gray-900">Product: {{ $item-> productName}}</p>
                                        <p class="mt-4 text-lg text-gray-900">Cost: £{{ $item-> productCost}}</p>
                                        <p class="mt-4 text-lg text-gray-900">Quantity: {{ $item-> productQuantity}}</p>
                                        <p class="mt-4 text-lg text-gray-900">Description: {{ $item-> productDescription }}</p>
                                        <p class="mt-4 text-lg text-gray-900">Rating: {{ $item-> productRating }} Star</p>
                                    </div>
                                </div>
                                    {{--<form action="{{route('basket.store'}}" method="post">--}}
                                @csrf
                                @auth
                                    <input type="hidden" value="{{ Auth::user()->id }}" name="userid">
                                @endauth
                                    <input type="hidden" value="{{ $item->id }}" name="itemid">
                                    <input type="hidden" value="1" name="quantity">
                                    {{--<input type="hidden" value="{{ $item->image }}"  name="image">--}}
                                    <input type="hidden" value="1" name="quantity">
                                <x-primary-button class="mt-4">{{ __('Buy it') }}</x-primary-button>

                            {{--</form>--}}
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
