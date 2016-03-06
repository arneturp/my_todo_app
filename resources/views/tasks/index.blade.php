@extends('app')

@section('content')
   <h1>All tasks</h1>

   @foreach($tasks as $task)
   <div class="task">
      <h2>{{ $task->name }}</h2>
      <p class="description">{{ $task->description }}</p>

      <form action="task/delete/{{$task->id}}" method="post">
         {!! csrf_field() !!}
         {!! method_field('DELETE') !!}
         <button type="submit" class="delete">Delete task</button>
      </form>
   </div>
   @endforeach

   <a href="/task/new"><button>Add task</button></a>


@stop
