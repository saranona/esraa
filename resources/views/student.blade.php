@extends ('master1')
@section ('content')

<table>
<tr>
<td>id</td>
<td>name</td>
<td>description</td>
</tr>
<tr>
@foreach ($Student as $member)
<td>{{$member->id}}</td> 
<td>{{$member->name}}</td> 
<td>{{$member->description}}</td> 
</tr>
@endforeach
</table>
@stop
