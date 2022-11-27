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
                            <th class="pl-5 text-left lg:text-right lg:pl-0">
                                <span class="lg:hidden" title="Quantity">Qtd</span>
                                <span class="hidden lg:inline">Quantity</span>
                            </th>
                            <th class="hidden text-right md:table-cell"> Price</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach ($orders as $order)
                            <tr>
                                <td class="text-left md:table-cell">

                                    <p class="mb-2 md:ml-4 text-an">{{ $order->productName }}</p>


                                </td>

                                <td class="hidden text-right md:table-cell"></td>


                                <td class="justify-center mt-9 md:justify-end md:flex">
                                    <div class="h-10 w-30">
                                        <div class="relative flex flex-row w-full h-8">
                                            <p class="mb-2 md:ml-4 text-an">{{ $order->orderQuantity }}</p>
                                </td>

                                <td class="hidden text-right md:table-cell">
                        <span class="text-sm font-medium lg:text-base">
                            ${{ $order->price * $order->orderQuantity}}
                        </span>
                                </td>
                                <td class="hidden text-right md:table-cell">
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
