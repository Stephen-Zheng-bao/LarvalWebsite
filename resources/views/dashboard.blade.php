<x-app-layout>




    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <div class="container">

        <h3 class="title"> products </h3>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Welcome') }}
            @auth
                {{ Auth::user()->name }}
            @endauth
        </h2>
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

                        </div>
                    </div>
                </div>
                </form>


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
                        <img src="{{ URL::asset('/image/'.$item->productImage)}}" alt="" id="my_image">
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
                <img src="{{ URL::asset('/image/'.$item->productImage)}}" alt="" id="my_image">
                <h3><h3>{{ $item-> productName}}</h3></h3>
                <div class="product-Cost">£{{ $item-> productCost}}</div>
            </div>
                @endforeach

        </div>

    </div>



    <script>
        let popupContainer = document.querySelector('.productsPopup');
        let popupBox = popupContainer.querySelectorAll('.popup');

       /* let popupImage = document.querySelectorAll('.product img');*/

/*
        function show(item) {
            item.style.display = 'flex';}
        function hide(item) {
            item.style.display = 'None';}

*/


            document.querySelectorAll('.productsContainer .product').forEach(product =>{
            product.onclick = () =>{


                popupContainer.style.display = 'flex';


                /*popupImage.forEach(hide)*/

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
                /*popupImage.forEach(show)*/
            };
        });
    </script>

</x-app-layout>
