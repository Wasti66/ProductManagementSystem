<table class="w-full text-sm text-left text-gray-500">
    <thead class="text-base text-gray-900 capitalize bg-gray-50">
        <tr class="text-base">
            <th scope="col" class="px-6 py-3">
                SL
            </th>
            <th scope="col" class="px-6 py-3">
                Product Id
            </th>
            <th scope="col" class="px-6 py-3">
                Name
            </th>
            <th scope="col" class="px-6 py-3">
                Description
            </th>
            <th scope="col" class="px-6 py-3">
                Price
            </th>
            <th scope="col" class="px-6 py-3">
                Stock
            </th>
            <th scope="col" class="px-6 py-3">
                Image
            </th>
            <th scope="col" class="px-6 py-3">
                Action
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach($product as $item)
            
            <tr class="bg-white border-b text-sm">
                <th class="px-6 py-4">
                    {{ $loop->iteration }}
                </th>
                <th class="px-6 py-4">
                    {{$item['product_id']}}
                </th>
                <td class="px-6 py-4">
                    {{$item['name']}}
                </td>
                <td class="px-6 py-4">
                    {{$item['description']}}
                </td>
                <td class="px-6 py-4">
                    {{$item['price']}}
                </td>
                <td class="px-6 py-4">
                    {{$item['stock']}}
                </td>
                <td class="px-6 py-4">
                    <img src="{{ asset($item['image']) }}" alt="Image description" height="60" width="60" alt="{{ asset($item['image']) }}">
                </td>
                <!-- edit -->
                <td class="px-6 py-4 flex">
                  <a href="{{ route('edit',$item['id']) }}" class="text-yellow-600 me-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                      </svg>  
                  </a>
                  <!-- delete -->
                  <form action="{{ route('destroy',$item['id']) }}" method="post">
                    <button type="submit" class="text-red-600">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                          <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                        </svg>
                    </button>
                 </form> 
                </td>    
            </tr>
        @endforeach
    </tbody>
</table>