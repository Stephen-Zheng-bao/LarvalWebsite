<x-app-layout>
    <!-- TODO: This is an admin page that see a list of customer, list of currently placed order and a list of product in stock-->


        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Page') }}
        </h2>
        <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="mt-6 bg-white shadow-sm rounded-lg divide-y">
                        @foreach ($items as $item)
                                <div class="p-6 flex space-x-2">
                                    <div class="flex-1">
                                        <p class="mt-4 text-lg text-gray-900">Product: {{ $item-> productName}}</p>
                                        <p class="mt-4 text-lg text-gray-900">Cost: £{{ $item-> productCost}}</p>
                                        <p class="mt-4 text-lg text-gray-900">Quantity: {{ $item-> productQuantity}}</p>
                                        <p class="mt-4 text-lg text-gray-900">Description: {{ $item-> productDescription }}</p>
                                        <p class="mt-4 text-lg text-gray-900">Rating: {{ $item-> productRating }} Star</p>
                                    </div>
                                    <form action="{{  url('/adminEdit')}}">
                                        <button class="mt-4">Edit</button>
                                        <input type="hidden" name="productID" value="{{  $item->id}}">
                                    </form>
                                </div>
                        @endforeach
                        @foreach ($users as $user)
                            <div class="p-6 flex space-x-2">
                                <div class="flex-1">
                                    <p class="mt-4 text-lg text-gray-900">UserName:{{  $user->name}}</p>
                                    <p class="mt-4 text-lg text-gray-900">Email:{{  $user->email}}</p>
                                </div>
                            </div>
                        @endforeach
                        @foreach ($past as $past)
                            <div class="p-6 flex space-x-2">
                                <div class="flex-1">
                                    <p class="mt-4 text-lg text-gray-900">User id:{{  $past->user_id}}</p>
                                    <p class="mt-4 text-lg text-gray-900">Item id:{{  $past->item_id}}</p>
                                    <p class="mt-4 text-lg text-gray-900">Order Quantity:{{  $past->orderQuantity}}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
