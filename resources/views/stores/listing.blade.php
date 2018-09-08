<h1>This is where we display a list of Stores</h1>

@if (count($stores) > 0)
<ul>
    @foreach ($stores as $store)
     <li>   {{$store->name}}</li>
    @endforeach
</ul>
@endif