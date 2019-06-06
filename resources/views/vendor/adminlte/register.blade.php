@include('header')

    <div class="pt-1 contenu">
        <div class="position-relative">
    <img src="{{asset('images/formulaire inscription.png')}}" style="visibility:hidden; max-width:100%">
     <img src="{{asset('images/formulaire inscription.png')}}" alt="formulaire" style="z-index: 0">
     <div class="register-box">

        <div class="register-box-body mb-4">
                <form action="{{route('storeUser')}}" method="POST">
                        {!! csrf_field() !!}

                        <div class="row " style="position: absolute; top:2.6%; width:40.7%;left:55.75%;margin:0">
                              <div onclick="up()" class="col-12 justify-content-center container-fluid">
                                <div class="position-relative" style="height:100%;margin-bottom:14%">
                                  <img src="{{asset('images/flèchehautnoire.png')}}" alt="" style="max-width:10%;position:absolute;left:0;right:0;margin:auto">
                                </div>
                                </div>
                            <div onclick="left()" class="col-2 p-0">
                                <div class="position-relative" style="height:100%">
                                <img src="{{asset('images/flèchegauchenoire.png')}}" alt="" style="max-width:100%;position:absolute;top:0;bottom:0;margin:auto">
                                </div>
                            </div>
                            <div class="col-8 position-relative p-0">
                              <img src="{{asset('images/chien.png')}}" style="max-width:100%; position:absolute; top:0; left:0; z-index:3" id="profil">
                              <img src="{{asset('images/chien.png')}}" style="max-width:100%; display:hidden">
                              <img src="{{asset('images/bleu.png')}}" style="max-width:100%; position:absolute; top:0; left:0" id="fond">
                            </div>
                            <div onclick="right()" class="col-2 p-0" style="z-index:3">
                                <div class="position-relative" style="height:100%">
                                <img src="{{asset('images/flèchedroitenoire.png')}}" alt="" style="max-width:100%;position:absolute;top:0;bottom:0;margin:auto">
                                </div>
                            </div>
                            <div onclick="down()" class="col-12 justify-content-center container-fluid">
                              <div class="position-relative" style="height:100%">
                                <img src="{{asset('images/flèchebasnoire.png')}}" alt="" style="max-width:10%;position:absolute;left:0;right:0;margin:auto">
                              </div>
                              </div>
                            <input type="hidden" value="images/chien.png" id="photo" name="profil">
                            <input type="hidden" value="images/bleu.png" id="back" name="fond">
                          </div>

                <div class="form-group has-feedback {{ $errors->has('name') ? 'has-error' : '' }}" style="position: absolute; top:45%; width:40%;left:45%;margin:0">
                    <input style="font-size:80%;line-height:100%" type="text" name="name" value="{{ old('name') }}"
                           placeholder="Nom ou Pseudo">
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>


                <div class="form-group has-feedback {{ $errors->has('password') ? 'has-error' : '' }}" style="position: absolute; top:55.5%; width:40%;left:42%;margin:0">
                    <input style="font-size:80%;line-height:100%" type="password" name="password"
                           placeholder="Mot de passe">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>


                <div class="form-group has-feedback {{ $errors->has('password_confirmation') ? 'has-error' : '' }}" style="position: absolute; top:63.5%; width:20%;left:58%;margin:0">
                    <input style="font-size:80%;line-height:100%" type="password" name="password_confirmation"
                           placeholder="Confirmez votre mot de passe">
                    <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
                    @if ($errors->has('password_confirmation'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                        </span>
                    @endif
                </div>


                <div class="form-group has-feedback {{ $errors->has('email') ? 'has-error' : '' }}" style="position: absolute; top:73.7%; width:40%;left:28%;margin:0">
                        <input style="font-size:80%;line-height:100%" type="email" name="email" value="{{ old('email') }}"
                               placeholder="{{ trans('adminlte::adminlte.email') }}">
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>

                    
                <button type="submit"
                        class="btn btn-primary btn-block btn-flat p-0"
                        style="position: absolute; top:86%; width:20%;left:30%">S'inscrire</button>
            </form>
        </div>
        <!-- /.form-box -->
    </div><!-- /.register-box -->
</div>
<div class="auth-links d-flex justify-content-center">
    <h2 style="font-size:150%"><a href="{{ url(config('adminlte.login_url', 'login')) }}"
       class="text-center">J'ai déjà un compte !</a></h2>
</div>
    </div>
    <script >
        window.onload = document.getElementById("photo").value ="images/chien.png", document.getElementById("back").value ="images/bleu.png";

        function up(ele) {
            if (document.getElementById("fond").src =="{{asset('images/bleu.png')}}") {
        document.getElementById("fond").src ="{{asset('images/rouge.png')}}";
        document.getElementById("back").value ="images/rouge.png";
      } else if (document.getElementById("fond").src =="{{asset('images/rouge.png')}}") {
        document.getElementById("fond").src ="{{asset('images/rose.png')}}";
        document.getElementById("back").value ="images/rose.png";
      } else if (document.getElementById("fond").src =="{{asset('images/rose.png')}}") {
        document.getElementById("fond").src ="{{asset('images/orange.png')}}";
        document.getElementById("back").value ="images/orange.png";
      } else if (document.getElementById("fond").src =="{{asset('images/orange.png')}}") {
        document.getElementById("fond").src ="{{asset('images/jaune.png')}}";
        document.getElementById("back").value ="images/jaune.png";
      } else if (document.getElementById("fond").src =="{{asset('images/jaune.png')}}") {
        document.getElementById("fond").src ="{{asset('images/vert.png')}}";
        document.getElementById("back").value ="images/vert.png";
      } else if (document.getElementById("fond").src =="{{asset('images/vert.png')}}") {
        document.getElementById("fond").src ="{{asset('images/violet.png')}}";
        document.getElementById("back").value ="images/violet.png";
      } else if (document.getElementById("fond").src =="{{asset('images/violet.png')}}") {
        document.getElementById("fond").src ="{{asset('images/indigo.png')}}";
        document.getElementById("back").value ="images/indigo.png";
      } else if (document.getElementById("fond").src =="{{asset('images/indigo.png')}}") {
        document.getElementById("fond").src ="{{asset('images/bleu.png')}}";
        document.getElementById("back").value ="images/bleu.png";
      }
        }
  
        function down(ele) {
            if (document.getElementById("fond").src =="{{asset('images/rouge.png')}}") {
        document.getElementById("fond").src ="{{asset('images/bleu.png')}}";
        document.getElementById("back").value ="images/bleu.png";
      } else if (document.getElementById("fond").src =="{{asset('images/rose.png')}}") {
        document.getElementById("fond").src ="{{asset('images/rouge.png')}}";
        document.getElementById("back").value ="images/rouge.png";
      } else if (document.getElementById("fond").src =="{{asset('images/orange.png')}}") {
        document.getElementById("fond").src ="{{asset('images/rose.png')}}";
        document.getElementById("back").value ="images/rose.png";
      } else if (document.getElementById("fond").src =="{{asset('images/jaune.png')}}") {
        document.getElementById("fond").src ="{{asset('images/orange.png')}}";
        document.getElementById("back").value ="images/orange.png";
      } else if (document.getElementById("fond").src =="{{asset('images/vert.png')}}") {
        document.getElementById("fond").src ="{{asset('images/jaune.png')}}";
        document.getElementById("back").value ="images/jaune.png";
      } else if (document.getElementById("fond").src =="{{asset('images/violet.png')}}") {
        document.getElementById("fond").src ="{{asset('images/vert.png')}}";
        document.getElementById("back").value ="images/vert.png";
      } else if (document.getElementById("fond").src =="{{asset('images/indigo.png')}}") {
        document.getElementById("fond").src ="{{asset('images/violet.png')}}";
        document.getElementById("back").value ="images/violet.png";
      } else if (document.getElementById("fond").src =="{{asset('images/bleu.png')}}") {
        document.getElementById("fond").src ="{{asset('images/indigo.png')}}";
        document.getElementById("back").value ="images/indigo.png";
      }
        }
  
        function left(ele) {
            if (document.getElementById("profil").src =="{{asset('images/chien.png')}}") {
        document.getElementById("profil").src ="{{asset('images/cha.png')}}";
        document.getElementById("photo").value ="images/cha.png";
      } else if (document.getElementById("profil").src =="{{asset('images/cha.png')}}") {
        document.getElementById("profil").src ="{{asset('images/cameleon.png')}}";
        document.getElementById("photo").value ="images/cameleon.png";
      } else if (document.getElementById("profil").src =="{{asset('images/cameleon.png')}}") {
        document.getElementById("profil").src ="{{asset('images/escar.png')}}";
        document.getElementById("photo").value ="images/escar.png";
      } else if (document.getElementById("profil").src =="{{asset('images/escar.png')}}") {
        document.getElementById("profil").src ="{{asset('images/gren.png')}}";
        document.getElementById("photo").value ="images/gren.png";
      } else if (document.getElementById("profil").src =="{{asset('images/gren.png')}}") {
        document.getElementById("profil").src ="{{asset('images/kakapo.png')}}";
        document.getElementById("photo").value ="images/kakapo.png";
      } else if (document.getElementById("profil").src =="{{asset('images/kakapo.png')}}") {
        document.getElementById("profil").src ="{{asset('images/pig.png')}}";
        document.getElementById("photo").value ="images/pig.png";
      } else if (document.getElementById("profil").src =="{{asset('images/pig.png')}}") {
        document.getElementById("profil").src ="{{asset('images/piou.png')}}";
        document.getElementById("photo").value ="images/piou.png";
      } else if (document.getElementById("profil").src =="{{asset('images/piou.png')}}") {
        document.getElementById("profil").src ="{{asset('images/chien.png')}}";
        document.getElementById("photo").value ="images/chien.png";
      }
        }
  
        function right(ele) {
      if (document.getElementById("profil").src =="{{asset('images/cha.png')}}") {
        document.getElementById("profil").src ="{{asset('images/chien.png')}}";
        document.getElementById("photo").value ="images/chien.png";
      } else if (document.getElementById("profil").src =="{{asset('images/cameleon.png')}}") {
        document.getElementById("profil").src ="{{asset('images/cha.png')}}";
        document.getElementById("photo").value ="images/cha.png";
      } else if (document.getElementById("profil").src =="{{asset('images/escar.png')}}") {
        document.getElementById("profil").src ="{{asset('images/cameleon.png')}}";
        document.getElementById("photo").value ="images/cameleon.png";
      } else if (document.getElementById("profil").src =="{{asset('images/gren.png')}}") {
        document.getElementById("profil").src ="{{asset('images/escar.png')}}";
        document.getElementById("photo").value ="images/escar.png";
      } else if (document.getElementById("profil").src =="{{asset('images/kakapo.png')}}") {
        document.getElementById("profil").src ="{{asset('images/gren.png')}}";
        document.getElementById("photo").value ="images/gren.png";
      } else if (document.getElementById("profil").src =="{{asset('images/pig.png')}}") {
        document.getElementById("profil").src ="{{asset('images/kakapo.png')}}";
        document.getElementById("photo").value ="images/kakapo.png";
      } else if (document.getElementById("profil").src =="{{asset('images/piou.png')}}") {
        document.getElementById("profil").src ="{{asset('images/pig.png')}}";
        document.getElementById("photo").value ="images/pig.png";
      } else if (document.getElementById("profil").src =="{{asset('images/chien.png')}}") {
        document.getElementById("profil").src ="{{asset('images/piou.png')}}";
        document.getElementById("photo").value ="images/piou.png";
      }
        }
        
  </script>


