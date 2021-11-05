<!-- the @ symbol is blade syntax -->
@extends('layouts.app')

@section('content')
   <div class="flex justify-center">
        <div class="w-4/12 bg-white p-6 rounded-lg">
            <form action={{route('register')}} method="post">
                <div class="mb-4">
                    <label for="name" class="sr-only">Name</label>
                    <input type="text" name="name" class="bg-gray-100 border-2 w-full p-4 rounded-lg" id="name" placeholder="Your Name" value="">
                </div>

                <div class="mb-4">
                    <label for="username" class="sr-only">Username</label>
                    <input type="text" name="username" class="bg-gray-100 border-2 w-full p-4 rounded-lg" id="username" placeholder="Username" value="">
                </div>

                <div class="mb-4">
                    <label for="email" class="sr-only">Email</label>
                    <input type="email" name="email" class="bg-gray-100 border-2 w-full p-4 rounded-lg" id="email" placeholder="Email" value="">
                </div>

                <div class="mb-4">
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" 
                    name="password" class="bg-gray-100 border-2 w-full p-4 rounded-lg" id="password" placeholder="Password" value="">
                </div>

                <div class="mb-4">
                    <label for="password_confirmation" class="sr-only">Confirm Password</label>
                    <input type="password"  name="password_confirmation" class="bg-gray-100 border-2 w-full p-4 rounded-lg" id="password_confirmation" placeholder="Confirm Password" value="">
                </div>

                <div>
                    <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full">Register</button>
                </div>

            </form>
        </div>

   </div>
@endsection