@include('header')
<div class="pt-1 contenu">
        <div
          class="row d-flex justify-content-center mt-3 pt-2 pb-5 container-fluid mr-0 ml-0"
          style="margin-bottom:5%"
        >
          <div class="col-2" style="position:relative">
            <a href>
              <img src="{{asset('images/1er épisode.png')}}" alt="nav" style="position:absolute">
            </a>
          </div>
          <div class="col-2" style="position:relative">
            <a href>
              <img src="{{asset('images/épisode précédent.png')}}" alt="nav" style="position:absolute">
            </a>
          </div>
          <div class="col-2" style="position:relative">
            <a href>
              <img src="{{asset('images/épisode suivant.png')}}" alt="nav" style="position:absolute">
            </a>
          </div>
          <div class="col-2" style="position:relative">
            <a href>
              <img src="{{asset('images/dernier épisode.png')}}" alt="nav" style="position:absolute">
            </a>
          </div>
        </div>
        <section class="chapitres mt-2">
          <div id="app">
              <chapt1>
              </chapt1>
      </div>
        </section>
        <div class="row d-flex justify-content-center mt-5 pt-2 container-fluid mr-0 ml-0 mb-5">
              <div class="col-2" style="position:relative">
            <a href>
              <img src="{{asset('images/1er épisode.png')}}" alt="nav" style="position:absolute">
            </a>
          </div>
          <div class="col-2" style="position:relative">
            <a href>
              <img src="{{asset('images/épisode précédent.png')}}" alt="nav" style="position:absolute">
            </a>
          </div>
          <div class="col-2" style="position:relative">
            <a href>
              <img src="{{asset('images/épisode suivant.png')}}" alt="nav" style="position:absolute">
            </a>
          </div>
          <div class="col-2" style="position:relative">
            <a href>
              <img src="{{asset('images/dernier épisode.png')}}" alt="nav" style="position:absolute">
            </a>
          </div>
        </div>


        <div
        class="row d-flex justify-content-center mt-3 pt-2 pb-5 container-fluid mr-0 ml-0"
        style="margin-bottom:5%"
      >

        <div class="col-10 bg-light" style="margin-top: 20%"><h1 id="com" class="text-center">COMMENTAIRES :</h1>

          @foreach($com as $item)
      <div class="row container-fluid border border-dark mb-3 ml-1 rounded">

      <div class="col-2 position-relative">
        <img src="{{asset($item->user->profil)}}" alt="" style="max-width:60%;position:absolute;top:10%;z-index:3">
        <img src="{{asset($item->user->fond)}}" alt="" style="max-width:60%;position:absolute;top:10%">
      </div>
        
      <div class="col-10" style="min-height:100px"> 

        <p class="col-12 m-0"><b>{{$item->user->name}}</b> le {{$item->date}}</p>

        <p class="col-12 m-0">{{$item->content}}</p>

      

          <form action="{{route('updateComment',['id'=>$item->id]).'#com'}}" method="POST" enctype="multipart/form-data" class="d-none">
            @method('PUT')
              @csrf

              <textarea style="max-height: 200px" class="col-12" name="content">{{$item->content}}</textarea>
          
              <button type="submit"> Enregistrer </button>

          </form>

        @if($item->user_id == $use)

          <button style="border:none" onclick="modif(this)" class="col-2">Modifier</button>

          <button style="border:none" onclick="cancel(this)" class="d-none">Annuler</button>

          <button style="border:none" class="col-2" onclick="sure(this)">Supprimer</button>

          <p class="d-none">Supprimer ce commentaire ?</p>

          <form action="{{route('deleteComment',['id'=>$item->id]).'#com'}}" method="post" class="d-none">
            @method('DELETE')
            @csrf
            <button class="btn btn-danger" type="submit">Oui</button>
          </form>
          
          <button style="border:none" class="d-none" onclick="nope(this)">Non</button>
        
        @endif

      </div>
      </div>
          @endforeach

          @if (Auth::check())
          <form action="{{route('storeComment').'#com'}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="content"></label>
                <textarea style="max-height: 200px" type="text"
                  class="form-control" name="content" aria-describedby="helpId" placeholder="Écrivez un commentaire !"></textarea>
              </div>
        
            <button type="submit"> Envoyer </button>
            </form>
        @else
        <h4>Pour laisser un commentaire, <a href="{{ route('login') }}">connectez-vous</a> ou <a href="{{ route('register') }}">inscrivez-vous</a> </h4>
        @endif
        
        </div>
        </div>
      </div>

      <script >
      function modif(ele) {
        ele.previousElementSibling.classList.remove("d-none")
        ele.previousElementSibling.previousElementSibling.classList.add("d-none")
        ele.classList.add("d-none")
        ele.nextElementSibling.classList.remove("d-none")
        ele.nextElementSibling.nextElementSibling.classList.add("d-none")
      }

      function cancel(ele) {
        ele.previousElementSibling.classList.remove("d-none")
        ele.previousElementSibling.previousElementSibling.classList.add("d-none")
        ele.previousElementSibling.previousElementSibling.previousElementSibling.classList.remove("d-none")
        ele.classList.add("d-none")
        ele.nextElementSibling.classList.remove("d-none")
      }

      function sure(ele) {
        ele.previousElementSibling.previousElementSibling.classList.add("d-none")
        ele.classList.add("d-none")
        ele.nextElementSibling.classList.remove("d-none")
        ele.nextElementSibling.nextElementSibling.classList.remove("d-none")
        ele.nextElementSibling.nextElementSibling.nextElementSibling.classList.remove("d-none")
      }

      function nope(ele) {
        ele.previousElementSibling.previousElementSibling.classList.add("d-none")
        ele.previousElementSibling.classList.add("d-none")
        ele.classList.add("d-none")
        ele.previousElementSibling.previousElementSibling.previousElementSibling.classList.remove("d-none")
        ele.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.classList.remove("d-none")

      }
</script>
      <script src="{{ mix('js/app.js') }}"></script>