
@extends('layouts.master')

@section('content')


<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.css' />

<br>
<h1 class="w3-center"><img src="{{ url('/') }}/storage/images/icons/calendar.png" width="50" height="50" >ตรวจสอบห้องพักว่าง</h1>
<br>

<div id='calendar'></div>

@endsection


@section('script')
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.js'></script>
<script>
    $(document).ready(function() {
        // page is now ready, initialize the calendar...
        $('#calendar').fullCalendar({
            // put your options and callbacks here
            events : [
                @foreach($tasks as $task)
                {
                    title : '{{ $task->username }}',
                    start : '{{ $task->checkin_date }}',
                    end : '{{ $task->checkout_date }}',
                    url : '{{ route('tasks.edit', $task->id) }}'
                },
                @endforeach
            ]
        })
    });
</script>
@endsection
