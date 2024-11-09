@extends('layouts.app')

@section('content')
    <section class="py-12">
      <div class="container mx-auto px-6">
         <div class="bg-gray-100 shadow-sm">
            <!-- table head -->
            <div class="bg-sky-600 p-2 flex justify-between items-center">
               <h1 class="text-white text-lg lg:text-2xl font-semibold capitalize">
                    product management system
                </h1>
                <!-- create a new product link --> 
                <a href="{{ route('create') }}" class="flex items-center bg-yellow-500 px-4 py-2.5 rounded-md">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                      </svg>
                     <span class="capitalize text-sm font-semibold ms-1.5">add new product</span>
                </a>    
            </div>
            <!-- sorting and search -->
            <div class="flex justify-between items-center py-8 px-4">
                <div></div>
                <form action="{{ route('index') }}" method="get" class="w-full lg:w-1/4">   
                    
                    <div class="relative">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                            </svg>
                        </div>
                        <input type="text" name="search" class="w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500" placeholder="Search your product..." />
                        <button type="submit" class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
                    </div>
                </form>
  
            </div>

            <!-- end table head -->
            <!-- table body -->
            <div class="relative overflow-x-auto p-2.5 py-4">
                @include('component.ProductTable')
                <!-- Pagination Links -->
                <div class="my-2.5">
                    {{ $product->appends(['search' => $search])->links() }}
                </div>
            </div>
            <!-- end table body -->
         </div>   
      </div>
    </section>
@endsection