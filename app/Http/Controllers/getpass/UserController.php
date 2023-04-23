<?php

namespace App\Http\Controllers\getpass;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use app\Models\user;
use Exception;

class UserController extends Controller
{
    public function findAll(Request $user)
    {
        try{
            $user = new User();
            var_dump($user);

        } catch(Exception $erro){
            return ['retorno'=>'erro','details'=>$erro];
        }
    }
}
