@extends('layouts.app')
@section('title', 'Login')
@section('content')

    <div class="flex min-h-screen">
      <!-- Gambar Sebelah Kiri -->
      <div class="hidden md:flex w-4/6 items-center justify-center relative ">
        <img
          src="{{ asset('images/pexels-christian-heitz-285904-842711.jpg') }}"
          class="object-cover w-full h-full filter drop-shadow-2xl "
        />
        <div class="absolute inset-0 bg-gradient-to-r from-transparent via-transparent to-black"></div>
        <!--<div class="absolute inset-0 flex items-left justify-left p-10">
          <h1 class="text-white text-4xl font-bold">BINA</h1>
          <div class="absolute inset-0 flex items-left justify-left p-10">
            <img src="{{ asset('images/cloud-svgrepo-com.svg') }}" alt="BINA Logo">
          </div>
        </div><!-->
        
    </div>
      <!-- Form Login Sebelah Kanan -->
      <div class="w-full md:w-2/6 flex items-center justify-center bg-black bg-opacity-70 p-6">
          <div class="w-full max-w-md bg-white rounded-lg shadow-md p-10 space-y-6 ">
            <h2 class="text-2xl font-bold text-center mb-4">Login Bina Cloud</h2>
            <form action="#" method="POST">
              <div class="mb-4">
                <label for="email" id="email-label" class="block text-sm font-medium text-gray-700">Email</label>
              <input type="email" id="email" name="email" required
                class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
            </div>
            <div class="mb-6">
              <label for="password" id="password-label" class="block text-sm font-medium text-gray-700">Password</label>
              <input type="password" id="password" name="password" required
                class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
            </div>
            <div class="flex items-center justify-between">
                      <div class="flex items-start">
                          <div class="flex items-center h-5">
                            <input id="remember" aria-describedby="remember" type="checkbox" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800" required="">
                          </div>
                          <div class="ml-3 text-sm">
                            <label for="remember" class="text-gray-500 dark:text-gray-300">Remember me</label>
                          </div>
                      </div>
                      <a href="#" class="text-sm font-medium text-primary-600 hover:underline dark:text-primary-500">Forgot password?</a>
                  </div>
            <div class="mt-4">
              <button type="button" id="login-button" class="w-full text-center text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Login</button>
            </div>
          </form>
            <p class="mt-4 text-center text-sm text-gray-600">
                Don't have an account? <a href="signup" class="text-blue-600 hover:text-blue-800">Sign up</a>
            </p>
        </div>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
@endsection