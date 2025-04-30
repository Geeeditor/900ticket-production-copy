@extends('layouts.admin')
@section('title', 'Admin Management Page')
@section('style')
@endsection
@section('content')
    <div class="flex flex-wrap py-1 md:py-0">
                    <div class="w-full md:w-1/2 md:p-2">
                        <a href="{{route('admin.users')}}" class="block bg-gray-200 p-4 md:p-10 shadow-sm shadow-gray-400 hover:scale-[1.03] duration-75 font-[700]  rounded-md uppercase  text-[20px]">
                            <img src="{{asset('image/profile.svg')}}" alt="profile">
                            Total Users
                            <span class="font-sans ">
                                {{$totalUsers}}
                            </span>
                        </a>
                    </div>
                    <div class="w-full md:w-1/2 md:p-2">
                        <a href="javascript:void(0)" class="block bg-gray-200 p-4 md:p-10 shadow-sm shadow-gray-400 hover:scale-[1.03] duration-75 font-[700] rounded-md">
                            <img src="{{asset('image/order.svg')}}" alt="Manage Order">
                            Manage Orders
                        </a>
                    </div>
                    <div class="w-full md:w-1/2 md:p-2">
                        <a href="javascript:void(0)" class="block bg-gray-200 p-4 md:p-10 shadow-sm shadow-gray-400 hover:scale-[1.03] duration-75 font-[700] rounded-md">
                            <img src="{{asset('image/complaints.svg')}}" alt="Complaints Desk">
                            Complaints Desk
                        </a>
                    </div>
                    <div class="w-full md:w-1/2 md:p-2">
                        <a href="javascript:void(0)" class="block bg-gray-200 p-4 md:p-10 shadow-sm shadow-gray-400 hover:scale-[1.03] duration-75 font-[700] rounded-md">
                            <img src="{{asset('image/message.svg')}}" alt="Announcement">
                            Send an Announcement
                        </a>
                    </div>
                </div>
@endsection
