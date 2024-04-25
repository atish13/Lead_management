<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        html{
            color:white;
        }


            .nav
            {
                display:flex;
                /* border:2px solid white; */
                flex-direction:row;
                justify-content:first;
            }
            .nav h3
            {
                margin:10px 20px;
            }
    </style>
</head>
<body>
<x-app-layout>
    
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
        @if(auth()->user()->hasRole('Admin'))
        <div class='nav'>
        <h3>
        <a href="{{route('view.leads')}}" class="text-blue">All Leads</a>
        </h3>
        <h3><a href="{{route('user.index')}}" class="text-blue">View User</a></h3>
        <h3><a href="{{route('user.index')}}" class="text-blue">Lead Assign</a></h3>
        <!-- <h3>All Leads</h3> -->

        </div>
        @endif

        @if(auth()->user()->hasRole('user'))
            <h2> hello,user</h2>
        @endif
    </x-slot>

    {{ Auth::user()->hasRole('admin') }}


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                    <br/>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

</body>
</html>

   
