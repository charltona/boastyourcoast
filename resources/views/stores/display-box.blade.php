{{--
    USAGE:
    @include('stores.display-box', ['stores' => $stores, 'collapse' => 'true'])
 --}}
<div class="row">

@foreach ($stores as $store)
    @if (isset($collapse))
       <div class="col sm12 m6 l3 no-padding">
   @else
       <div class="col sm12 m6 l3">
   @endif
           <div class="card">
               @if ($store->image)
               <div class="card-image">
                   <img src="/storage/{{$store->image}}" alt="{{$store->name}}" style="max-height:200px; object-fit:cover">
               </div>
               @else
                   <div class="card-image">
                       <img src="http://lorempixel.com/640/400/food/{{$loop->index}}" alt="{{$store->name}}" class="darken-4">
                   </div>
                @endif
               <div class="card-content">
                   <span class="card-title">{{$store->name}}</span>
               </div>
           </div>
       </div>

@endforeach
</div>