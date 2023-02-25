<div>
    <table class="table min-w-full mt-4">
        <thead>
            <tr>
                <th class="px-6 py-3 text-sm leading-4 tracking-wider text-left border-b-2 border-gray-300">Name</th>
                <th class="px-6 py-3 text-sm leading-4 tracking-wider text-left border-b-2 border-gray-300"></th>
            </tr>
        </thead>
        <tbody wire:sortable="updateOrder">
            @forelse ($products as $product)
            <tr wire:sortable.item="{{ $product->id }}" wire:key="product-{{ $product->id }}">
                <td class="px-6 py-4 text-sm leading-5 whitespace-no-wrap border-b border-gray-500">
                    {{ $product->name }}
                </td>
                <td class="px-6 py-4 text-sm leading-5 whitespace-no-wrap border-b border-gray-500">
                    <button
                            class="inline-flex items-center px-4 py-2 text-xs font-semibold tracking-widest text-white uppercase transition duration-150 ease-in-out bg-gray-800 border border-transparent rounded-md hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25">
                        Edit
                    </button>
                    <button
                            class="inline-flex items-center px-4 py-2 text-xs font-semibold tracking-widest text-white uppercase transition duration-150 ease-in-out bg-red-600 border border-transparent rounded-md focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25">
                        Delete
                    </button>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="3">No products found.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>