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
        <!-- <a href="{{route('view.leads')}}" class="text-blue">All Leads</a> -->
        <a href="#" id="AllLeads" class="text-blue">All Leads</a>
        </h3>
        
        <h3>
            <!-- <a href="{{route('user.index')}}" class="text-blue">View User</a> -->
            <a href="#" class="text-blue" id="ViewUser">View User</a>
        </h3>
        <h3>
            <!-- <a href="{{route('leadassign.show')}}" class="text-blue">Edit Lead Assign</a> -->
            <a href="#" class="text-blue" id="EditLeadAssign">Edit Lead Assign</a>
        </h3>
        <h3>
            <!-- <a href="{{route('leadassign.info')}}" class="text-blue">View Lead Assign</a> -->
            <a href="#" class="text-blue" id="ViewLeadAssign">View Lead Assign</a>
        </h3>
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
        <!-- <a href="{{route('view.leads')}}" class="text-blue">All Leads</a> -->
        <a href="#" id="AllLeads" class="text-white">All Leads</a>

        </h3>
        <h3>
            <!-- <a href="{{url('/mylead/show/')}}/{{auth()->user()->id}}" class="text-blue">Edit Leads</a> -->
            <a href="#" class="text-white" id="EditLeads">Edit Leads</a>
        </h3>
        <h3>
            <!-- <a href="{{route('mylead.info',$id)}}" class="text-blue">My Leads</a> -->
            <a href="#" class="text-white" id="MyLeads">My Leads</a>
        <h3>
        <h3>
            <!-- <a href="{{route('mylead.followup',$id)}}" class="text-blue">Followup Table</a> -->
            <a href="#" class="text-white" id="Followup">Followup Table</a>
        <h3>
       
                @endif
    </x-slot>



    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100" id="content">
                     {{auth()->user()->name}} "logged in!"
                    <br/>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
    $(document).ready(function()
    {
        //Admin

        $("#AllLeads").click(function()
    {
        $.ajax({
        url:"{{ route('view.leads')}}",
        type:"GET",
        success:function(response)
        {
            $("#content").html(response);
        }
         });
    });
    $("#ViewUser").click(function()
    {
        $.ajax({
            url:"{{route('user.index')}}",
            type:"GET",
            success:function(response)
            {
                $("#content").html(response);
            }
        });
    });
    
    $("#EditLeadAssign").click(function()
   {
    $.ajax({
        url:"{{route('leadassign.show')}}",
        type:"GET",
        success:function(res)
        {
            $("#content").html(res);
        }
    });
  });

    $("#ViewLeadAssign").click(function(){
        $.ajax({
            url:"{{route('leadassign.info')}}",
            type:"GET",
            success:function(response)
            {
                $("#content").html(response);
            }
        });
    });

        //user
        $("#EditLeads").click(function()
        {
        $.ajax({
            url:"{{url('/mylead/show/')}}/{{auth()->user()->id}}",
            type:"GET",
            success:function(response)
            {
                $("#content").html(response);
            }
        });
        });

        $("#MyLeads").click(function()
     {
        $.ajax({
            url:"{{url('/mylead/leadinfo/')}}/{{auth()->user()->id}}}",
            type:"GET",
            success:function(res)
            {
                $("#content").html(res);
            }
        });
        });
        $("#Followup").click(function(){
            $.ajax({
                url:"{{url('/mylead/followup/')}}/{{auth()->user()->id}}}",

                type:"GET",
                success:function(res)
                {
                    $("#content").html(res);
                }
            });
        });


    });

   
       

</script>

</body>
</html>

   
