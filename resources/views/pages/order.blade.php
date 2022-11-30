<x-app-layout>
    <div class="container px-6 mx-auto">
        <div class="flex justify-center my-6">
            <div class="flex flex-col w-full p-8 text-gray-800 bg-white shadow-lg pin-r pin-y md:w-4/5 lg:w-4/5">

                <h3 class="text-3xl text-bold">Order List</h3>
                <div class="flex-1">
                    <table class="w-full text-sm lg:text-base" cellspacing="0">
                        <thead>
                        <tr class="h-12 uppercase">

                            <th >Name</th>
                            <th class="hidden md:table-cell"></th>
                            <th class="hidden text-center md:table-cell">
                                Quantity
                            </th>
                            <th class="hidden text-center md:table-cell"> Price</th>

                            <th class="hidden text-center md:table-cell"> <span class="text-sm font-medium lg:text-base">Total Price</span></th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach ($orders as $order)
                            <tr>
                                <td class="text-left md:table-cell">

                                    <p class="mb-2 md:ml-4 text-an">{{ $order->productName }}</p>


                                </td>

                                <td class="hidden text-right md:table-cell"></td>


                                <td class="hidden text-center md:table-cell">
                                            {{ $order->orderQuantity }}
                                </td>

                                <td class="hidden text-center md:table-cell">

                                    ${{ $order->price}}

                                </td>
                                <td class="hidden text-center md:table-cell">
                                    <span class="text-sm font-medium lg:text-base">
                                    ${{ $order->price * $order->orderQuantity}}
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
