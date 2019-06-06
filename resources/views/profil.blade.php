@include('header')

    <div class="pt-1 contenu">
     <div class="position-relative">
            <img src="{{asset('images/profil.png')}}" style="visibility:hidden; max-width:100%">
            <img src="{{asset('images/profil.png')}}" alt="formulaire" style="z-index: 0">
            <img src="{{asset($user->profil)}}" alt="" style="top:7.8%; width:27.2%;left:62.5%;position:absolute;z-index:3">
            <img src="{{asset($user->fond)}}" alt="" style="top:7.8%; width:27.2%;left:62.5%;position:absolute">
            <h3 class="position-absolute texteprofil" style="top:47%; left:45%">{{$user->name}}</h3>
            <button class="position-absolute" style="border:none;top:52%; left:45%" onclick="modif(this)" class="col-2">Modifier nom</button>
            <h3 class="position-absolute texteprofil" style="top:58%; left:22%">{{$user->email}}</h3>

            <form action="{{route('updateUser',['id'=>$user->id])}}" method="POST" enctype="multipart/form-data" class="d-none">
                    @method('PUT')
                      @csrf

                      <input name="name" type="text" class="position-absolute" style="top:49%; left:55%; display:none">{{$user->name}}
                  
                      <button type="submit"> Enregistrer </button>
        
            </form>

            <h3 class="position-absolute texteprofil" style="top:79%; left:30%">{{$user->date}}</h3>

            @if(config('adminlte.logout_method') == 'GET' || !config('adminlte.logout_method') && version_compare(\Illuminate\Foundation\Application::VERSION, '5.3.0', '<'))
            <a href="{{ url(config('adminlte.logout_url', 'auth/logout')) }}" class="position-absolute bg-light p-1" style="top:89%; left:40%">
                <i class="fa fa-fw fa-power-off"></i> Se déconnecter
            </a>
        @else
            <a href="#"
               onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
            class="position-absolute bg-light p-1" style="top:89%; left:40%">
                <i class="fa fa-fw fa-power-off"></i> Se déconnecter
            </a>
            <form id="logout-form" action="{{ url(config('adminlte.logout_url', 'auth/logout')) }}" method="POST" style="display: none;">
                @if(config('adminlte.logout_method'))
                    {{ method_field(config('adminlte.logout_method')) }}
                @endif
                {{ csrf_field() }}
            </form>
        @endif
     </div>
    </div>