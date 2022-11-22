<x-app-layout>

        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Welcome') }}
            @auth
                {{ Auth::user()->name }}
            @endauth
        </h2>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <div class="container">

        <h3 class="title"> products </h3>

        <div id="filterSection">

            <div class="filterInline">
                <div id="productButtons">
                    <button class="buttonValue">All</button>
                    <button class="buttonValue">HeadSet</button>
                    <button class="buttonValue">Keyboards</button>
                    <button class="buttonValue">Mouse</button>
                    <button class="buttonValue">Monitors</button>
                </div>
            </div>
        </div>


        <div class="productsContainer">
            <div class="productsPopup">
            @foreach ($items as $item)

                    <div class="popup" data-target="{{ $item->id}}">
                        <i class="fas fa-times"></i>
                        <img src="" alt="">
                        <h3>{{ $item-> productName}}</h3>
                        <p>{{ $item-> productDescription }}</p>
                        <div class="product-Cost">£{{ $item-> productCost}}</div>
                        <div class="buttons">
                            <a href="" class="cart">Add to cart</a>
                        </div>
                        {{--@for ($i = 0; $i < 10; $i++)
                            The current value is {{ $i }}
                        @endfor--}}
                    </div>

            @endforeach
            </div>

            @foreach ($items as $item)
            <div class="product" data-name="{{ $item->id}}">
                <img src="" alt="">
                <h3><h3>{{ $item-> productName}}</h3></h3>
                <div class="product-Cost">£{{ $item-> productCost}}</div>
            </div>
                @endforeach

        </div>

    </div>



    <script>
        let popupContainer = document.querySelector('.productsPopup');
        let popupBox = popupContainer.querySelectorAll('.popup');

        document.querySelectorAll('.productsContainer .product').forEach(product =>{
            product.onclick = () =>{
                popupContainer.style.display = 'flex';
                let name = product.getAttribute('data-name');
                popupBox.forEach(popup =>{
                    let target = popup.getAttribute('data-target');
                    if(name == target){
                        popup.classList.add('active');
                    }
                });
            };
        });

        popupBox.forEach(close =>{
            close.querySelector('.fa-times').onclick = () =>{
                close.classList.remove('active');
                popupContainer.style.display = 'none';
            };
        });
    </script>
















    {{--<div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="mt-6 bg-white shadow-sm rounded-lg divide-y">
                        @foreach ($items as $item)

                                <div class="p-6 flex space-x-2">
                                    <div class="flex-1">
                                    --}}{{--<img src="{{ url($product->image) }}" alt="" class="w-full max-h-60">--}}{{--
                                        <p class="mt-4 text-lg text-gray-900">Product: {{ $item-> productName}}</p>
                                        <p class="mt-4 text-lg text-gray-900">Cost: {{ $item-> productCost}}</p>
                                        <p class="mt-4 text-lg text-gray-900">Quantity: £{{ $item-> productQuantity}}</p>
                                        <p class="mt-4 text-lg text-gray-900">Description: {{ $item-> productDescription }}</p>
                                        <p class="mt-4 text-lg text-gray-900">Rating: {{ $item-> productRating }} Star</p>
                                    </div>
                                </div>
                                    --}}{{--<form action="{{route('basket.store'}}" method="post">--}}{{--
                                @csrf
                                @auth
                                    <input type="hidden" value="{{ Auth::user()->id }}" name="userid">
                                @endauth
                                    <input type="hidden" value="{{ $item->id }}" name="itemid">
                                    <input type="hidden" value="1" name="quantity">
                                    --}}{{--<input type="hidden" value="{{ $item->image }}"  name="image">--}}{{--
                                    <input type="hidden" value="1" name="quantity">
                                <x-primary-button class="mt-4">{{ __('Buy it') }}</x-primary-button>

                            --}}{{--</form>--}}{{--
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>--}}
</x-app-layout>
