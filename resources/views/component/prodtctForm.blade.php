<form action="{{ route('create.submit') }}" method="post" enctype="multipart/form-data">
    @csrf
    <!-- product id -->
    <div class="mb-3">
        <label for="product_id" class="text-sm font-semibold capitalize">product id</label><br>
        <input type="text" id="product_id" name="product_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-base rounded-lg w-full focus:outline-none focus:border-[#233a95] focus:ring-1 focus:ring-[#233a95] p-2.5"  value="{{ old('product_id') }}">  
        @error('product_id')
            <div class="text-red-600">{{ $message }}</div>
        @enderror  
    </div>
    <!-- name -->
    <div class="mb-3">
        <label for="name" class="text-sm font-semibold capitalize">product Name</label><br>
        <input type="text" id="name" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-base rounded-lg w-full focus:outline-none focus:border-[#233a95] focus:ring-1 focus:ring-[#233a95] p-2.5"  value="{{ old('name') }}"> 
        @error('name')
            <div class="text-red-600">{{ $message }}</div>
        @enderror   
    </div>
    <!-- description -->
    <div class="mb-3">
        <label for="description" class="text-sm font-semibold capitalize">description</label><br>
        <textarea type="text" id="description" name="description" class="bg-gray-50 border border-gray-300 text-gray-900 text-base rounded-lg w-full focus:outline-none focus:border-[#233a95] focus:ring-1 focus:ring-[#233a95] p-2.5"  value="" >{{ old('description') }}</textarea> 
        @error('description')
            <div class="text-red-600">{{ $message }}</div>
        @enderror
    </div>
    <!-- price -->
    <div class="mb-3">
        <label for="price" class="text-sm font-semibold capitalize">price</label>
        <input type="text" id="price" name="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-base rounded-lg w-full focus:outline-none focus:border-[#233a95] focus:ring-1 focus:ring-[#233a95] p-2.5"  value="{{ old('price') }}">   
        @error('price')
            <div class="text-red-600">{{ $message }}</div>
        @enderror 
    </div>
    <!-- stock -->
    <div class="mb-3">
        <label for="stock" class="text-sm font-semibold capitalize">stock</label>
        <input type="text" id="stock" name="stock" class="bg-gray-50 border border-gray-300 text-gray-900 text-base rounded-lg w-full focus:outline-none focus:border-[#233a95] focus:ring-1 focus:ring-[#233a95] p-2.5"  value="{{ old('stock') }}"> 
        @error('stock')
            <div class="text-red-600">{{ $message }}</div>
        @enderror    
    </div>
    <!-- images -->
    <div class="mb-3">
        <label for="image" class="text-sm font-semibold capitalize">Image</label>
        <input type="file" id="image" name="image" class="bg-gray-50 border border-gray-300 text-gray-900 text-base rounded-lg w-full focus:outline-none focus:border-[#233a95] focus:ring-1 focus:ring-[#233a95] p-2.5"  value="{{ old('image') }}"> 
        @error('image')
            <div class="text-red-600">{{ $message }}</div>
        @enderror    
    </div>
    <input type="submit" name="create" class="w-full text-center mt-2.5 p-2.5 bg-[#233a95] rounded-md hover:bg-black text-white font-medium cursor-pointer transition" value="Save">
</form>