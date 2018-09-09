{{--
    USAGE:
    @include('stores.display-box', ['stores' => $stores, 'collapse' => 'true'])
 --}}
<div class="row">

@foreach ($stores as $store)
    @if (isset($collapse))
       <div class="col store-col sm12 m6 l3 no-padding">
   @else
       <div class="col store-col sm12 m6 l3">
   @endif
           <div class="card hoverable">
               @if ($store->image)
               <div class="card-image">
                   <img src="/storage/{{$store->image}}" alt="{{$store->name}}" style="max-height:200px; object-fit:cover">
                   <span class="card-title">{{$store->name}}</span>
               </div>
               @else
                   <div class="card-image">
                       <img src="/img/640x400.png" alt="{{$store->name}}" style="max-height:200px; object-fit:cover">
                       {{--<img src="http://lorempixel.com/640/400/food/" alt="{{$store->name}}" class="darken-4">--}}
                       <span class="card-title">{{$store->name}}</span>
                   </div>
                @endif
           </div>
       </div>

@endforeach
</div>