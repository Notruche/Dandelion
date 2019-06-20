@include('header')
<div class="pt-1 contenu">
        <div
          class="row d-flex justify-content-center mt-3 pt-2 pb-5 container-fluid mr-0 ml-0"
          style="margin-bottom:5%"
        >
          <div class="col-2" style="position:relative">
              <a href="{{route('showChapitre',['id'=> 1])}}">
              <img src="{{asset('images/1er épisode.png')}}" alt="nav" style="position:absolute">
            </a>
          </div>
          <div class="col-2" style="position:relative">
            @if($chapt->num=="1")
            <a href="{{route('showChapitre',['id'=> 1])}}">
              <img src="{{asset('images/épisode précédent.png')}}" alt="nav" style="position:absolute">
            </a>
            @endif
            @if($chapt->num!=="1")
            <a href="{{route('showChapitre',['id'=> $chapt->id -1])}}">
              <img src="{{asset('images/épisode précédent.png')}}" alt="nav" style="position:absolute">
            </a>
            @endif
          </div>
          <div class="col-2" style="position:relative">
            @if($chapt->num=="3")
            <a href="{{route('showChapitre',['id'=> 3])}}">
              <img src="{{asset('images/épisode suivant.png')}}" alt="nav" style="position:absolute">
            </a>
            @endif
            @if($chapt->num!=="3")
            <a href="{{route('showChapitre',['id'=> $chapt->id +1])}}">
              <img src="{{asset('images/épisode suivant.png')}}" alt="nav" style="position:absolute">
            </a>
            @endif
          </div>
          <div class="col-2" style="position:relative">
              <a href="{{route('showChapitre',['id'=> 3])}}">
              <img src="{{asset('images/dernier épisode.png')}}" alt="nav" style="position:absolute">
            </a>
          </div>
        </div>
        <section class="chapitres mt-2">
          <div id="app">
              @if($chapt->num=="1")
              <chapt1>
              </chapt1>
              <div class="fb-share-button" data-href="http://www.pekolio.com/chapitres/1" data-layout="button" data-size="large"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fwww.pekolio.com%2Fchapitres%2F1&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Partager</a></div>
              @endif
              @if($chapt->num=="2")
              <chapt2>
              </chapt2>
              <div class="fb-share-button mb-4" data-href="http://www.pekolio.com/chapitres/2" data-layout="button" data-size="large"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fwww.pekolio.com%2Fchapitres%2F2&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Partager</a></div>
              @endif
              @if($chapt->num=="3")
              <chapt3>
              </chapt3>
              <div class="fb-share-button" data-href="http://www.pekolio.com/chapitres/3" data-layout="button" data-size="large"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fwww.pekolio.com%2Fchapitres%2F3&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Partager</a></div>
              @endif
      </div>
        </section>
        <div
          class="row d-flex justify-content-center mt-3 pt-2 pb-5 container-fluid mr-0 ml-0"
          style="margin-bottom:10%"
        >
          <div class="col-2" style="position:relative">
              <a href="{{route('showChapitre',['id'=> 1])}}">
              <img src="{{asset('images/1er épisode.png')}}" alt="nav" style="position:absolute">
            </a>
          </div>
          <div class="col-2" style="position:relative">
            @if($chapt->num=="1")
            <a href="{{route('showChapitre',['id'=> 1])}}">
              <img src="{{asset('images/épisode précédent.png')}}" alt="nav" style="position:absolute">
            </a>
            @endif
            @if($chapt->num!=="1")
            <a href="{{route('showChapitre',['id'=> $chapt->id -1])}}">
              <img src="{{asset('images/épisode précédent.png')}}" alt="nav" style="position:absolute">
            </a>
            @endif
          </div>
          <div class="col-2" style="position:relative">
            @if($chapt->num=="3")
            <a href="{{route('showChapitre',['id'=> 3])}}">
              <img src="{{asset('images/épisode suivant.png')}}" alt="nav" style="position:absolute">
            </a>
            @endif
            @if($chapt->num!=="3")
            <a href="{{route('showChapitre',['id'=> $chapt->id +1])}}">
              <img src="{{asset('images/épisode suivant.png')}}" alt="nav" style="position:absolute">
            </a>
            @endif
          </div>
          <div class="col-2" style="position:relative">
              <a href="{{route('showChapitre',['id'=> 3])}}">
              <img src="{{asset('images/dernier épisode.png')}}" alt="nav" style="position:absolute">
            </a>
          </div>
        </div>


        @if($chapt->num=="2")
        @if (Auth::check())
        <div class="position-relative">
        <img src="{{asset('images/sondage.png')}}" alt="imgfin">
        <img onclick="check1(this)" class="box1" src="{{asset('images/box.png')}}" alt="" style="position:absolute;top:35%;left:10%;max-height:11%">
        <img onclick="check2(this)" class="box2" src="{{asset('images/box.png')}}" alt="" style="position:absolute;top:50%;left:10%;max-height:11%">
        <img onclick="check3(this)" class="box3" src="{{asset('images/box.png')}}" alt="" style="position:absolute;top:65%;left:10%;max-height:11%">
        <img onclick="check4(this)" class="box4" src="{{asset('images/box.png')}}" alt="" style="position:absolute;top:80%;left:10%;max-height:11%">
        <img src="{{asset('images/tir.png')}}" alt="" style="position:absolute;top:35%;left:20%;max-height:11%">
        <img src="{{asset('images/chaise.png')}}" alt="" style="position:absolute;top:50%;left:20%;max-height:11%">
        <img src="{{asset('images/chamboule.png')}}" alt="" style="position:absolute;top:65%;left:20%;max-height:11%">
        <img src="{{asset('images/course.png')}}" alt="" style="position:absolute;top:80%;left:20%;max-height:11%">
        </div>
        @else
        <div class="position-relative text-center text-white">
            <img src="{{asset('images/sondage1fini.png')}}" alt="imgfin">
            <h2 style="position:absolute;top:50%;width:100%">
                Pour participer au sondage, <a href="{{ route('login') }}">connectez-vous</a> ou <a href="{{ route('register') }}">inscrivez-vous</a></h2>
        </div>
          @endif
          <div class="m-4 mb-0 text-center text-white">
            <h3> Lors des sondages, vous incarnez les habitants de camping qui votent pour prendre une décision qui influencera sur la suite de l'histoire. Vous n'avez qu'une voix alors choisissez bien !</h3>
          </div>
        @endif


        @if($chapt->num=="3")
        @if (Auth::check())
        <div class="position-relative">
        <img src="{{asset('images/sondage-EP3.png')}}" alt="imgfin">
        @else
        <div class="position-relative text-center text-white">
            <img src="{{asset('images/sondage3fini.png')}}" alt="imgfin">
            <h2 style="position:absolute;top:50%;width:100%">
                Pour participer au sondage, <a href="{{ route('login') }}">connectez-vous</a> ou <a href="{{ route('register') }}">inscrivez-vous</a></h2>
        </div>
          @endif
          <div class="m-4 mb-0 text-center text-white">
            <h3> Lors des sondages, vous incarnez les habitants de camping qui votent pour prendre une décision qui influencera sur la suite de l'histoire. Vous n'avez qu'une voix alors choisissez bien !</h3>
          </div>
        @endif

        <div
        class="row d-flex justify-content-center mt-3 pt-2 pb-5 container-fluid mr-0 ml-0"
        style="margin-bottom:5%"
      >

        <div class="col-12 text-white">
          <div class="position:relative">
          <img src="{{asset('images/commentaires.png')}}" style="max-width:100%; visibility:hidden">
          <img src="{{asset('images/commentaires.png')}}" style="max-width:100%; position:absolute; left:0; right:0; top:0; margin:auto">
        </div>

          @foreach($com as $item)
      <div class="row container-fluid border border-white mb-3 ml-1 rounded pt-2 pb-2">

      <div class="col-2 position-relative">
        <img src="{{asset($item->user->profil)}}" alt="" style="max-width:60%;position:absolute;top:10%;z-index:3">
        <img src="{{asset($item->user->fond)}}" alt="" style="max-width:60%;position:absolute;top:10%">
      </div>
        
      <div class="col-10" style="min-height:120px"> 

        <h4 class="col-12 m-0"><b>{{$item->user->name}}</b> le {{$item->date}}</h4>

        <h3 class="col-12 m-0">{{$item->content}}</h3>

      

          <form action="{{route('updateComment',['id'=>$item->id]).'#com'}}" method="POST" enctype="multipart/form-data" class="d-none">
            @method('PUT')
              @csrf

              <textarea style="max-height: 200px" class="col-12" name="content">{{$item->content}}</textarea>
          
              <button type="submit"> Enregistrer </button>

          </form>

        @if($item->user_id == $use)

          <button style="border:none" onclick="modif(this)" class="col-sm-12 mb-1 col-lg-3">Modifier</button>

          <button style="border:none" onclick="cancel(this)" class="d-none">Annuler</button>

          <button style="border:none" class="col-sm-12 mb-1 col-lg-3" onclick="sure(this)">Supprimer</button>

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
                  <input type="hidden"
            class="form-control" name="chapitre_id" aria-describedby="helpId" value="{{$chapt->id}}">
              </div>
        
            <button type="submit"> Envoyer </button>
            </form>
        @else
        <h3>Pour laisser un commentaire, <a href="{{ route('login') }}">connectez-vous</a> ou <a href="{{ route('register') }}">inscrivez-vous</a> </h3>
        @endif
        
        </div>
        </div>
      </div>

      <script >

      function check1(ele) {
        document.querySelector(".box1").src="{{asset('images/box.png')}}"
        document.querySelector(".box2").src="{{asset('images/box.png')}}"
        document.querySelector(".box3").src="{{asset('images/box.png')}}"
        document.querySelector(".box4").src="{{asset('images/box.png')}}"
        ele.src="{{asset('images/boxcoché.png')}}"
      }

      function check2(ele) {
        document.querySelector(".box1").src="{{asset('images/box.png')}}"
        document.querySelector(".box2").src="{{asset('images/box.png')}}"
        document.querySelector(".box3").src="{{asset('images/box.png')}}"
        document.querySelector(".box4").src="{{asset('images/box.png')}}"
        ele.src="{{asset('images/boxcoché.png')}}"
      }

      function check3(ele) {
        document.querySelector(".box1").src="{{asset('images/box.png')}}"
        document.querySelector(".box2").src="{{asset('images/box.png')}}"
        document.querySelector(".box3").src="{{asset('images/box.png')}}"
        document.querySelector(".box4").src="{{asset('images/box.png')}}"
        ele.src="{{asset('images/boxcoché.png')}}"
      }

      function check4(ele) {
        document.querySelector(".box1").src="{{asset('images/box.png')}}"
        document.querySelector(".box2").src="{{asset('images/box.png')}}"
        document.querySelector(".box3").src="{{asset('images/box.png')}}"
        document.querySelector(".box4").src="{{asset('images/box.png')}}"
        ele.src="{{asset('images/boxcoché.png')}}"
      }

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
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v3.3"></script>
      <script src="{{ mix('js/app.js') }}"></script>