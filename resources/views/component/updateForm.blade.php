<form action="{{ route('edit.update', $data->id) }}" method="POST">
    @csrf
    
    <!-- Product ID -->
    <div class="mb-3">
        <label for="product_id" class="text-sm font-semibold capitalize">Product ID</label><br>
        <input type="text" id="product_id" name="product_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-base rounded-lg w-full focus:outline-none focus:border-[#233a95] focus:ring-1 focus:ring-[#233a95] p-2.5" value="{{ $data['product_id'] }}">  
        @error('product_id')
            <div class="text-red-600">{{ $message }}</div>
        @enderror  
    </div>

    <!-- Product Name -->
    <div class="mb-3">
        <label for="name" class="text-sm font-semibold capitalize">Product Name</label><br>
        <input type="text" id="name" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-base rounded-lg w-full focus:outline-none focus:border-[#233a95] focus:ring-1 focus:ring-[#233a95] p-2.5" value="{{ $data['name'] }}"> 
        @error('name')
            <div class="text-red-600">{{ $message }}</div>
        @enderror   
    </div>

    <!-- Description -->
    <div class="mb-3">
        <label for="description" class="text-sm font-semibold capitalize">Description</label><br>
        <textarea id="description" name="description" class="bg-gray-50 border border-gray-300 text-gray-900 text-base rounded-lg w-full focus:outline-none focus:border-[#233a95] focus:ring-1 focus:ring-[#233a95] p-2.5">{{ $data['description'] }}</textarea> 
        @error('description')
            <div class="text-red-600">{{ $message }}</div>
        @enderror
    </div>

    <!-- Price -->
    <div class="mb-3">
        <label for="price" class="text-sm font-semibold capitalize">Price</label>
        <input type="text" id="price" name="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-base rounded-lg w-full focus:outline-none focus:border-[#233a95] focus:ring-1 focus:ring-[#233a95] p-2.5" value="{{ $data['price'] }}">   
        @error('price')
            <div class="text-red-600">{{ $message }}</div>
        @enderror 
    </div>

    <!-- Stock -->
    <div class="mb-3">
        <label for="stock" class="text-sm font-semibold capitalize">Stock</label>
        <input type="text" id="stock" name="stock" class="bg-gray-50 border border-gray-300 text-gray-900 text-base rounded-lg w-full focus:outline-none focus:border-[#233a95] focus:ring-1 focus:ring-[#233a95] p-2.5" value="{{ $data['stock'] }}"> 
        @error('stock')
            <div class="text-red-600">{{ $message }}</div>
        @enderror    
    </div>

    <!-- Submit Button -->
    <input type="submit" name="update" class="w-full text-center mt-2.5 p-2.5 bg-[#233a95] rounded-md hover:bg-black text-white font-medium cursor-pointer transition" value="Save">
</form>
