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
       
        @if(auth()->user()->hasRole('Admin'))

        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight m-4">
            {{ __('Admin Dashboard') }}
        </h2>

        <div class='nav'>
        
        <h3>
        <a href="{{route('view.leads')}}" class="text-blue">All Leads</a>
        </h3>
        
        <h3><a href="{{route('user.index')}}" class="text-blue">View User</a></h3>
        <h3><a href="{{route('leadassign.show')}}" class="text-blue">Edit Lead Assign</a></h3>
        <h3><a href="{{route('leadassign.info')}}" class="text-blue">View Lead Assign</a></h3>
        <!-- <h3>All Leads</h3> -->

        </div>
        @endif

        @if(!auth()->user()->hasRole('Admin'))
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight m-4">
            {{ __('User Dashboard') }}
            <!-- {{ !Auth::user()->get('id')}} -->
            {{$id=Auth::id()}}

        </h2>
        <div class='nav'>
        
        <h3>
        <a href="{{route('view.leads')}}" class="text-blue">All Leads</a>
        </h3>
        <h3>
            <a href="{{url('/mylead/show/')}}/{{auth()->user()->id}}" class="text-blue">Edit Leads</a>
        </h3>
        <h3>
            <a href="{{route('mylead.info',$id)}}" class="text-blue">My Leads</a>
        <h3>
        <h3>
            <a href="{{route('mylead.followup',$id)}}" class="text-blue">Followup Table</a>
        <h3>
       
                @endif
    </x-slot>



    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                     {{auth()->user()->name}} "logged in!"
                    <br/>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

</body>
</html>

   
