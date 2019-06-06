<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <title>Camping Dandelion</title>
    <link href=" {{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body style="background-color:black">

<div class="menu">
    <div>
      <div class="exemple">
      <img src="{{asset('images/bannière.png')}}" alt="bann">
  </div>
      <div class="row pt-4 pb-4 container-fluid m-0 navi d-flex justify-content-between">
        <div class="col-3">
          <a href="{{route('home')}}">
            <img src="{{asset('images/acceuil.png')}}" alt="nav">
          </a>
        </div>
        <div class="col-3">
          <a href="{{route('chapitre')}}">
            <img src="{{asset('images/épisodes.png')}}" alt="nav">
          </a>
        </div>
        <div class="col-3">
            @if (Auth::check())
            <a href="{{route('profil')}}">
                <img src="{{asset('images/profilmenu.png')}}" alt="nav">
              </a>
          @else
          <a href="{{route('login')}}">
              <img src="{{asset('images/connection.png')}}" alt="nav">
            </a>
          @endif
        </div>
        <div class="col-3">
          <a href>
            <img src="{{asset('images/donation.png')}}" alt="nav">
          </a>
        </div>
      </div>
    </div>
  </div>