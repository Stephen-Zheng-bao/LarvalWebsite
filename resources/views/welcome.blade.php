<!DOCTYPE html>
<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="mt-6 bg-white shadow-sm rounded-lg divide-y">
                        @foreach ($items as $item)
                            <div class="p-6 flex space-x-2">
                                <div class="flex-1">
                                    <p class="mt-4 text-lg text-gray-900">{{ $item-> productName}}</p>
                                    <p class="mt-4 text-lg text-gray-900">{{ $item-> productCost}}</p>
                                    <p class="mt-4 text-lg text-gray-900">{{ $item-> productQuantity}}</p>
                                    <p class="mt-4 text-lg text-gray-900">{{ $item-> productDescription }}</p>
                                    <p class="mt-4 text-lg text-gray-900">{{ $item-> productRating }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

