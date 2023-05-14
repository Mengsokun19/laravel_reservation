<x-admin-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
          {{ __('Dashboard') }}
      </h2>
  </x-slot>
  
  <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="flex m-2 p-2">
              <a href="{{ route('admin.reservations.index') }}" class="text-white px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg">Reservations Index</a>
          </div>
          
          <form method="POST" action="{{ route('admin.reservations.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="flex mb-6">
              <div class="w-1/2 ">
                <label for="first_name" class="mb-2 text-xl font-medium text-gray-900 ">First Name</label>
                <input type="name" id="first_name" name="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="First Name" required>
              </div>
              <div class="w-1/2 px-2">
                <label for="last_name" class="mb-2 text-xl font-medium text-gray-900 ">Last Name</label>
                <input type="name" id="last_name" name="last_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Last Name" required>
              </div>
            </div>

            <div class="flex mb-6">
              <div class="w-1/2">
                <label for="email" class="mb-2 text-xl font-medium text-gray-900">Email</label>
                <input type="email" id="email" name="email"
                  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
              </div>
              <div class="w-1/2 px-2">
                <label for="phone" class="mb-2 text-xl font-medium text-gray-900">Phone Number</label>
                <input type="phone" id="phone" name="phone"
                  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
              </div>
            </div>

            <div class="mb-6">
              <label for="reservation_date" class="block mb-2 text-xl font-medium text-gray-900">Reservation Date</label>
              <input type="datetime-local" id="reservation_date" name="reservation_date" 
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
            </div>
            @error('reservation_date')
              <div class="text-sm font-bold text-red-400">{{ $message }}</div>
            @enderror
            <div class="mb-6">
              <label for="guest_number" class="block mb-2 text-xl font-medium text-gray-900">Guest Number</label>
              <input type="number" id="guest_number" name="guest_number" 
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
            </div>
            <div class="mb-6">
              <label for="table_id" class="block mb-2 text-xl font-medium text-gray-900">Table</label>
              <select id="table_id" name="table_id" class="block mb-2 p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Description...">
                  @foreach ($tables as $table)
                    <option value="{{ $table->id }}">{{ $table->name }} ({{ $table->guest_number }} Guests)</option>
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
  