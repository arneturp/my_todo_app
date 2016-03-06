@extends('app')

@section('content')
<h1>Add new task</h1>
<form action="/task" method="post">
   {!! csrf_field() !!}
   <input type="text" name="name" value="" placeholder="Title">
   <input type="text" name="description" value="" placeholder="Description">
   <button type="submit">Save</button>
</form>

@endsection
