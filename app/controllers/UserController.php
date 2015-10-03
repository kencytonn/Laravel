<?php
class UserController extends \BaseController{

    public function index(){
        return View::make('test_form');
    }
    public function store(){

        $input = Input::all();
        $user = new User;

        $user->username = $input['username'];
        $user->email = $input['email'];
        $user->password = Hash::make($input['password']);
        $user->save($input);

     return Redirect::to('/display');
    }
    public function show(){
        $user = User::all();
        echo $user;
    }
}