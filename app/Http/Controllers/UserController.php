<?php

namespace App\Http\Controllers;

use App\User;
use App\Commentaire;
use App\Http\Requests\StoreUser;
use Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::all();
        $com = Commentaire::all();
        return view('home',compact('user','com'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUser $request)
    {
        $new = new User;
        $new->name = $request->name;
        $new->email = $request->email;
        $new->password = bcrypt($request->password);
        $new->profil = $request->profil;
        $new->fond = $request->fond;
        $new->save();
        Auth::routes(['verify' => true]);
        Auth::loginUsingId($new->id); 
        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Chapitre  $chapitre
     * @return \Illuminate\Http\Response
     */
    public function show(Chapitre $id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Chapitre  $chapitre
     * @return \Illuminate\Http\Response
     */
    public function edit(Chapitre $chapitre)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Chapitre  $chapitre
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Chapitre $chapitre)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Chapitre  $chapitre
     * @return \Illuminate\Http\Response
     */
    public function destroy(Chapitre $chapitre)
    {
        //
    }

    public function memoire()
    {
        return \File::get(public_path() . '/memoire.html');
    }

    public function rubiks()
    {
        return \File::get(public_path() . '/rubiks.html');
    }

    public function boucho()
    {
        return \File::get(public_path() . '/boucho.html');
    }

    public function portfolio()
    {
        return \File::get(public_path() . '/portfolio.html');
    }
}
