<x-admin-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
          {{ __('Dashboard') }}
      </h2>
  </x-slot>
  
  <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="flex m-2 p-2">
              <a href="{{ route('admin.tables.index') }}" class="text-white px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg">Table Index</a>
          </div>
          
          <form method="POST" action="{{ route('admin.tables.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="mb-6">
              <label for="name" class="block mb-2 text-xl font-medium text-gray-900 ">Name</label>
              <input type="name" id="name" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Table Name" required>
            </div>
            <div class="mb-6">
              <label for="guest_number" class="block mb-2 text-xl font-medium text-gray-900">Guest Number</label>
              <input type="number" id="guest_number" name="guest_number"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
            </div>

            <div class="mb-6">
              <label for="status" class="block mb-2 text-xl font-medium text-gray-900">Status</label>
              <select id="status" name="status" class="block mb-2 p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Description...">
                @foreach (App\Enums\TableStatus::cases() as $status)
                  <option value="{{ $status->value }}">{{ $status->name }}</option>
                @endforeach
              </select>
            </div>
            <div class="mb-6">
              <label for="location" class="block mb-2 text-xl font-medium text-gray-900">Location</label>
              <select id="location" name="location" class="block mb-2 p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Description...">
                  @foreach (App\Enums\TableLocation::cases() as $location)
                    <option value="{{ $location->value }}">{{ $location->name }}</option>
                  @endforeach
              </select>
            </div>

            <div class="flex justify-end mt-6">
              <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
            </div>
          </form>

      </div>
  </div>
  </x-admin-layout>
  