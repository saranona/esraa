@extends('master1')
@section('content')
<Form action="egypt", method="post">
name<input type="text" name="name">
username<input type="text" name="username">
email<input type="text" name="email">
password<input type="text" name="password">
<input type="submit" value="submit">
<form>
@stop
