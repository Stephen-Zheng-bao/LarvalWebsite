<x-app-layout>
    {{--This is Product List--}}
    <div class="container px-6 mx-auto">
        <div class="flex justify-center my-6">
            <div class="flex flex-col w-full p-8 text-gray-800 bg-white shadow-lg pin-r pin-y md:w-4/5 lg:w-4/5">
                <h3 class="text-3xl text-bold">Product List</h3>
                <div class="flex-1">
                    <table class="w-full text-sm lg:text-base" cellspacing="0">
                        <thead>
                        <tr class="h-12 uppercase">

                            <th >Name</th>
                            <th class="hidden text-center md:table-cell"> Quantity</th>
                            <th class="hidden text-center md:table-cell"> Price</th>
                            <th class="hidden text-center md:table-cell"> Update </th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach ($items as $item)
                            <tr>
                                <td class="text-center md:table-cell">
                                    <p class="mb-2 md:ml-4 text-an">{{ $item->productName }}</p>
                                </td>

                                <td class="hidden text-center md:table-cell">
                                    <form action="{{ route('editAdmin') }}" method="POST">
                                        <input type="number" name="quantity" min=1 value="{{ $item->productQuantity }}"
                                                   class="text-center bg-gray-300" />
                                </td>

                                <td class="hidden text-center md:table-cell">
                                    <span class="text-sm font-medium lg:text-base">
                                        ${{ $item->productCost }}
                                    </span>
                                </td>
                                <td class="hidden text-center md:table-cell">
                                        @csrf
                                        <input type="hidden" value="{{ $item->id }}" name="id">
                                        <x-primary-button type="submit" class="px-2 pb-2 ml-2 text-white bg-blue-500">update</x-primary-button>

                                </td>
                            </tr>
                            </form>
                        @endforeach


                        </tbody>
                    </table>

                    <div>


                    </div>
                    <td class="hidden text-right md:table-cell"></td>



                </div>
            </div>
        </div>
    </div>
    {{--This is the customer List--}}
    <div class="container px-6 mx-auto">
        <div class="flex justify-center my-6">
            <div class="flex flex-col w-full p-8 text-gray-800 bg-white shadow-lg pin-r pin-y md:w-4/5 lg:w-4/5">
                <h3 class="text-3xl text-bold">Customer List</h3>
                <div class="flex-1">
                    <table class="w-full text-sm lg:text-base" cellspacing="0">
                        <thead>
                        <tr class="h-12 uppercase">

                            <th class="hidden text-center md:table-cell"> ID</th>
                            <th class="hidden text-center md:table-cell"> Name</th>
                            <th class="hidden text-center md:table-cell"> Email</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach ($users as $user)
                            <tr>
                                <td class="hidden text-center md:table-cell">
                                    <p class="mb-2 md:ml-4 text-an">{{ $user->id }}</p>

                                </td>

                                <td class="hidden text-center md:table-cell">{{$user->name}}</td>


                                <td class="hidden text-center md:table-cell">
                                    <span class="text-sm font-medium lg:text-base">
                                        {{ $user->email}}
                                    </span>
                                </td>

                            </tr>
                        @endforeach
                        </tbody>
                    </table>



                </div>
            </div>
        </div>
    </div>
    {{--This is past Order--}}
    <div class="container px-6 mx-auto">
        <div class="flex justify-center my-6">
            <div class="flex flex-col w-full p-8 text-gray-800 bg-white shadow-lg pin-r pin-y md:w-4/5 lg:w-4/5">
                <h3 class="text-3xl text-bold">Customer Order</h3>
                <div class="flex-1">
                    <table class="w-full text-sm lg:text-base" cellspacing="0">
                        <thead>
                        <tr class="h-12 uppercase">

                            <th >ID</th>
                            <th class="hidden text-center md:table-cell"> User ID</th>
                            <th class="hidden text-center md:table-cell"> Item ID</th>
                            <th class="hidden text-center md:table-cell"> Item Name </th>

                            <th class="hidden text-center md:table-cell"> Price</th>
                            <th class="hidden text-center md:table-cell"> <span class="hidden lg:inline">Quantity</span></th>
                            <th class="hidden text-center md:table-cell"> <span class="hidden lg:inline">Total Price</span> </th>

                        </tr>
                        </thead>
                        <tbody>

                        @foreach ($past as $order)
                            <tr>
                                <td class="hidden text-center md:table-cell">
                                    <p class="mb-2 md:ml-4 text-an">{{ $order-> id}}</p>

                                </td>
                                <td class="hidden text-center md:table-cell">
                                    <p class="mb-2 md:ml-4 text-an">{{ $order-> user_id}}</p>

                                </td>
                                <td class="hidden text-center md:table-cell">
                                    <p class="mb-2 md:ml-4 text-an">{{ $order-> item_id}}</p>

                                </td>
                                <td class="hidden text-center md:table-cell">
                                    <p class="mb-2 md:ml-4 text-an">{{ $order-> productName}}</p>

                                </td>
                                <td class="hidden text-center md:table-cell">
                                    <p class="mb-2 md:ml-4 text-an">£{{ $order-> price}}</p>

                                </td>


                                <td class="hidden text-center md:table-cell">
                                    <span class="text-sm font-medium lg:text-base">
                                        {{ $order-> orderQuantity}}
                                    </span>
                                </td>

                                <td class="hidden text-center md:table-cell">
                                    <span class="text-sm font-medium lg:text-base">
                                        £{{ $order-> orderQuantity * $order-> price}}
                                    </span>
                                </td>

                            </tr>
                        @endforeach
                        </tbody>
                    </table>



                </div>
            </div>
        </div>
    </div>
</x-app-layout>
