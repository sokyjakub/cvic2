<?php


namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{

    public function showAction($id){
        $user = User::find($id);
        echo $user->firstname."<br>";
        echo $user->lastname."<br>";
        echo $user->Email."<br>";
        echo $user->age."<br>";
        echo $user->update_at;
    }

    public function insertAction(){
        $user = new User();
        $user->firstname = str_random(5);
        $user->lastname = str_random(5);
        $user->Email = $user->firstname . "." . $user->lastname . "@gmail.com";
        $user->age = mt_rand(1,80) . " ";
        $user->save();
    }

    public function updateAction($id){
        $user = User::find($id);
        $user ->update(["age"=>mt_rand(1,80) . " "]);
    }

    public function deleteAction($id){
        $user = User::find($id);
        $user->delete();
    }

    public function showAllAction(){
        $users = User::all();
        foreach ($users as $user){
            echo $user->Email . " " .$user->age . " " . $user->updated_at."<br>";
        }
    }
}