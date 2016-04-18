@extends('master1')
@section('content')
<table>
<tr><td>id</td>
<td>name</td>
<td>username</td>
<td>email</td>
<td>password</td>
<td>edit</td>
<td>delete</td>
<td>show</td>
</tr>
<tr>
@foreach ($peoples as $people)
     <td>{{$people->id}}</td>
     <td>{{$people->name}}</td>
     <td>{{$people->username}}</td>
     <td>{{$people->email}}</td>
     <td>{{$people->password}}</td>
      <td><a href="/egypt/{{$people->id}}/edit">Edit</a></td>
      <td><a href="/egypt/{{$people->id}}">Show</a></td>
      <td><a href="/egypt/destroy/{{$people->id}}">delete</a></td>
     </tr>
@endforeach
</table>
@stop
     
     
     
