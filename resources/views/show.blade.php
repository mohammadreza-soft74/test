@include("haader.header")
@csrf

@foreach($records->getCollection()->all() as $record)
    <div class="alert-success">
<h10>id : {{$record->id}}</h10><br><hr>
<h10>username : {{$record->username}}</h10><br><hr>
<h10>password : {{$record->password}}</h10><br><hr>
<h10>city : {{$record->city}}</h10><br><hr>
    </div>
    <hr>
@endforeach

<div class="text-center">
    {{$records->links()}}
</div>
@include("foote.footer")