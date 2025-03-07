<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        @foreach ($tables as $table)
        <a href="{{ route('admin.orders.create') }}"
        class="px-4 py-2 bg-green-500 hover:bg-green-700 rounded-lg text-white">{{$table->name}}</a>
        @endforeach
        <div class="flex justify-end m-2 p-2">
            <a href="{{ route('admin.orders.create') }}"
            class="px-4 py-2 bg-blue-500 hover:bg-blue-700 rounded-lg text-white">Nuevo Horario</a>
        </div>

<div class="flex flex-col">
<div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
<div class="inline-block py-2 min-w-full sm:px-6 lg:px-8">
<div class="overflow-hidden shadow-md sm:rounded-lg">
    <table class="min-w-full">
        <thead class="bg-gray-50 dark:bg-gray-700">
            <tr>
                <th scope="col"
                class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                Id
                </th>
                <th scope="col"
                    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                    Doctor
                </th>
                <th scope="col"
                    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                    Hospital
                </th>
                <th scope="col"
                    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                    Status
                </th>
                <th scope="col"
                    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                    Horario
                </th>
                <th scope="col" class="relative py-3 px-6">
                    <span class="sr-only">Edit</span>
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $order)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <td
                    class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $order->id }}
                </td>
                    <td
                        class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $order->customer_name }}
                    </td>
                    <td
                        class="py-4 px-6 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                        {{ $order->table->name }}
                    </td>
                    <td
                        class="py-4 px-6 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                        {{ $order->status->name }}
                    </td>
                    <td
                        class="py-4 px-6 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                        {{ $order->order_date }}
                    </td>
                    <td class="py-4 px-6 text-sm font-medium text-right whitespace-nowrap">
                        <div class="flex space-x-2">
                            <a href="{{ route('admin.ordersmenu.index', $order->id) }}"
                                class="px-4 py-2 bg-green-500 hover:bg-green-700 rounded-lg  text-white">Menu</a>
                            <a href="{{ route('admin.orders.edit', $order->id) }}"
                                class="px-4 py-2 bg-green-500 hover:bg-green-700 rounded-lg  text-white">Edit</a>
                            <a href="{{ route('admin.orders.show', $order->id)}}" class="px-4 py-2 bg-green-500 hover:bg-green-700 rounded-lg  text-white">invoice</a>
                                <form
                                class="px-4 py-2 bg-red-500 hover:bg-red-700 rounded-lg text-white"
                                method="POST"
                                action="{{ route('admin.orders.destroy', $order->id) }}"
                                onsubmit="return confirm('Are you sure?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
</div>
</div>
</div>
</div>
        </div>
    </div>
</x-admin-layout>
