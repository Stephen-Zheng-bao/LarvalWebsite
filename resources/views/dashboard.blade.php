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
                    <table>
                        <tr>
                    <form action="{{ route('dashboard') }}" method="GET">

                        <input type="hidden" value="All" name="filter">
                        <button :href="route('dashboard')" :active="request()->routeIs('dashboard')" class="buttonValue">All</button>
                    </form>
                            </tr>
                        <tr>
                    <form action="{{ route('filter') }}" method="GET">
                        @csrf
                        <input type="hidden" value="HeadSet" name="filter">
                        <button class="buttonValue">HeadSet</button>
                    </form>
                        </tr>
                        <tr>
                    <form action="{{ route('filter') }}" method="GET">
                        @csrf
                        <input type="hidden" value="Keyboard" name="filter">
                        <button class="buttonValue">Keyboard</button>
                    </form>
                        </tr>
                        <tr>
                    <form action="{{ route('filter') }}" method="GET">
                        @csrf
                        <input type="hidden" value="Mouse" name="filter">
                        <button class="buttonValue">Mouse</button>
                    </form>
                        </tr>
                        <tr>
                    <form action="{{ route('filter') }}" method="GET">
                        @csrf
                        <input type="hidden" value="Monitor" name="filter">
                        <button class="buttonValue">Monitor</button>
                    </form>
                        </tr>
                    </table>

                </div>
                <form action="{{route('search')}}" method="GET">
                <div class="container my-5 py-5 px-5 mx-5">
                    <div class="wrap">
                        <div class="search">
                            <input name = "search" type="search" class="searchTerm" placeholder="What are you looking for?">
                            <button type="submit" class="searchButton">
                                <i class="fa fa-search"></i>
                            </button>
                            </form>
                        </div>
                    </div>
                </div>


            </div>

        </div>
        @if ($message = Session::get('success'))
            <div class="p-4 mb-3 bg-green-400 rounded">
                <p class="text-green-800">{{ $message }}</p>
            </div>
        @endif


        <div class="productsContainer">
            <div class="productsPopup">
            @foreach ($items as $item)

                    <div class="popup" data-target="{{ $item->id}}">
                        <i class="fas fa-times"></i>
                        <img src="{{ URL::asset('/image/YazTec.png')}}" alt="">
                        <h3>{{ $item-> productName}}</h3>
                        <p>{{ $item-> productDescription }}</p>
                        <div class="product-Cost">£{{ $item-> productCost}}</div>
                        @auth
                        <form action="{{ route('basket.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @auth
                                <input type="hidden" value="{{ Auth::user()->id }}" name="user">
                            @endauth
                            <input type="hidden" value="{{ $item->id }}" name="item">
                            <input type="hidden" value="{{ $item->productName }}" name="name">
                            <input type="hidden" value="{{ $item->productCost }}" name="price">
                            <input type="hidden" value="1" name="quantity">
                            <x-primary-button class="cart">Add To Cart</x-primary-button>
                        </form>
                        @endauth
                    </div>

            @endforeach
            </div>

            @foreach ($items as $item)
            <div class="product" data-name="{{ $item->id}}">
                <img src="" alt="" id="my_image">
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
