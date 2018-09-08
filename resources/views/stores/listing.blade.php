<h1>This is where we display a list of Stores</h1>

@if (count($stores) > 0)

    @foreach ($stores as $store)
        {{$store->name}}
    @endforeach

@endif