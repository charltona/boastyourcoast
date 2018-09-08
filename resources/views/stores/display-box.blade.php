{{--
    USAGE:
    @include('stores.display-box', ['stores' => $stores])
 --}}
@foreach ($stores as $store)

   <div class="row">
       <div class="col sm12-m6 l3">
           <div class="card">
               <div class="card-image">
                   <img src="/storage/{{$store->image}}" alt="{{$store->name}}">
                   <span class="card-title">{{$store->name}}</span>
               </div>
           </div>
       </div>
   </div>

@endforeach