@extends('layouts.app')
@section('content')
    <section class="py-12">
        <div class="container m-auto">
            <div class="grid grid-cols-12">
                <div class="col-span-12 lg:col-span-6">
                    <div class="bg-gray-100 shadow-sm">
                        <!-- form head -->
                        <div class="bg-sky-600 p-2 flex justify-between items-center">
                           <h1 class="text-white text-sm sm:text-lg lg:text-2xl font-semibold capitalize">
                                update product
                            </h1>
                            <!-- create a new product link --> 
                            <a href="{{ route('index') }}" class="flex items-center bg-yellow-500 px-4 py-2.5 rounded-md">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4">
                                    <path fill-rule="evenodd" d="M9.53 2.47a.75.75 0 0 1 0 1.06L4.81 8.25H15a6.75 6.75 0 0 1 0 13.5h-3a.75.75 0 0 1 0-1.5h3a5.25 5.25 0 1 0 0-10.5H4.81l4.72 4.72a.75.75 0 1 1-1.06 1.06l-6-6a.75.75 0 0 1 0-1.06l6-6a.75.75 0 0 1 1.06 0Z" clip-rule="evenodd" />
                                  </svg>
                                 <span class="capitalize text-sm font-semibold ms-1.5">Back</span>
                            </a>    
                        </div>
                        <!-- end forme head -->
                        <!-- form body -->
                        <div class="bg-gray-100 px-2.5 py-4">
                           @include('component.updateForm') 
                        </div>
                        <!-- end form body -->
                     </div>
                </div>
            </div>
        </div>
    </section>
@endsection