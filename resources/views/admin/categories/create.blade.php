<x-admin-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
          {{ __('Dashboard') }}
      </h2>
  </x-slot>

  <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="flex m-2 p-2">
              <a href="{{ route('admin.categories.index') }}" class="text-white px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg">Category Index</a>
          </div>
          
          <form method="POST" action="{{ route('admin.categories.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="mb-6">
              <label for="name" class="block mb-2 text-xl font-medium text-gray-900">Name</label>
              <input type="text" id="name" name="name" 
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('name') border-red-400 @enderror" 
                placeholder="Catrgory Name" 
                >
            </div>
            {{-- TODO: Error handling in the front end --}}
            @error('name')
              <div class="text-sm font-bold text-red-400">{{ $message }}</div>
            @enderror
            
            <label class="mb-5 block text-xl font-semibold text-[#07074D]">
              Upload File
            </label>
    
            <div class="mb-6">
              <label
              for="image"
              class="relative flex min-h-[200px] items-center justify-center rounded-md border border-dashed border-[#e0e0e0] p-12 text-center"
              >
              <input type="file" name="image" id="image" />
                
                </div>
              </label>
              @error('image')
              <div class="text-sm font-bold text-red-400">{{ $message }}</div>
              @enderror
              <div class="mb-6">
                <label for="description" class="block mb-2 text-xl font-medium text-gray-900 ">Description</label>
                <textarea id="description" name="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-blue-500 dark:focus:border-blue-500 
                @error('description')
                border-red-400
                @enderror" placeholder="Description..." ></textarea>
              </div>
              @error('description')
              <div class="text-sm font-bold text-red-400">{{ $message }}</div>
              @enderror
              <div class="flex justify-end mt-6">
                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Store</button>
              </div>
            </div>
          </form>
      </div>
  </div>
</x-admin-layout>
  