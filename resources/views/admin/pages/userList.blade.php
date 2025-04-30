@extends('layouts.admin')
@section('title', 'Manage Users');
@section('content')
    {{-- users --}}
                <div class="my-2">
                    <div class="overflow-x-auto">
                        <div class="shadow-md rounded-lg">
                            <h1 class="font-[700] uppercase">900 TICKET USERS LIST</h1>


                                <table class="w-full table-auto">
                                <thead class="uppercase bg-gray-700 text-white">
                                    <tr>
                                        <th class="py-2 px-4 text-left">User ID</th>
                                        <th class="py-2 px-4 text-left">Name</th>
                                        <th class="py-2 px-4 text-left">Email</th>
                                        <th class="py-2 px-4 text-left">Total Completed Orders</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white text-gray-500">
                                @forelse ($users as $users )
                                    <tr class="py-2">
                                        <td class="px-4">{{ $users->id}}</td>
                                        <td class="px-4">{{$users->firstname . ' ' . $users->lastname}}</td>
                                        <td class="px-4">{{$users->email}}</td>
                                        <td class="px-4">N/A</td>
                                    </tr>
                                @empty
                                    <div class="mt-[15px]">
                    <div class="flex items-center flex-col justify-center gap-0">
                        <img src="{{ asset('image/error.svg') }}" alt="lorem ipsum">
                        Sorry no registers users
                        <div class="text-[13px] font-[300]">
                            <a href="{{ route('admin.create.event') }}">Create an account </a>
                        </div>
                    </div>
                </div>
                  @endforelse
                                </tbody>
                            </table>







                        </div>
                    </div>
                </div>
@endsection
