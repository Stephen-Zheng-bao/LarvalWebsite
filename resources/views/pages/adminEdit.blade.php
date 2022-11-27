<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="mt-6 bg-white shadow-sm rounded-lg divide-y">
                        @foreach ($item as $item)
                                <form method="post" action="{{route('adminEdit.edit')}}">
                                @csrf
                                    <div class="flex-1">
                                        <p class="mt-4 text-lg text-gray-900">Name: {{ $item-> productName}}</p>
                                        <input id="pname" type="text" placeholder="{{  $item->productName}}">
                                        <p class="mt-4 text-lg text-gray-900">Cost: £{{ $item-> productCost}}</p>
                                        <input id="pcost" type="number" placeholder="{{  $item->productCost}}" min="0">
                                        <p class="mt-4 text-lg text-gray-900">Quantity: {{ $item-> productQuantity}}</p>
                                        <input id="pquantity" type="number" placeholder="{{  $item->productQuantity}}" min="0">
                                        <p class="mt-4 text-lg text-gray-900">Description: {{ $item-> productDescription }}</p>
                                        <input id="pdescription" type="text" placeholder="{{  $item->productDescription}}">
                                        <p class="mt-4 text-lg text-gray-900">Rating: {{ $item-> productRating }} Star</p>
                                        <input id="prate" type="number" placeholder="{{  $item->productRating}}" min="0" max="5">
                                    </div>
                                    <input type="hidden" value="{{  $item->id}}" name="pid">
                                    <button type="submit" class="mt-4">{{ __('Save Changes') }}</button>
                                </form>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>