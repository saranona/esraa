@extends('master1')
@section('content')
<form action="egypt"  method="put">
<table>
<td>name</td><td><input type="text" name="name"></td><br>
<td>username</td><td><input type="text" name="username"></td><br>
<td>email</td><td><input type="text" name="email"></td><br>
<td>password</td><td><input type="text" name="password"><td>
<td><input type="submit" value="submit"><td><br>
</table>
</form>

@stop
