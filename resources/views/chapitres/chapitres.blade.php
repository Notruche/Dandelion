@include('header')
    <div class="pt-1 contenu">
        <div class="row container-fluid d-flex justify-content-space-between">

        @foreach($chapt as $item)

            
                <div class="col-4 row container-fluid">
                        <a href="{{route('showChapitre',['id'=> $item->id])}}">
                    <div class="col-12"><img src="{{asset($item->image)}}" alt="" style="max-width:100%"></div>
                    <h5 class="col-12 text-center">Épisode {{$item->num}}</h5>
                </a>
                </div>
            

        @endforeach

    </div>

    </div>

