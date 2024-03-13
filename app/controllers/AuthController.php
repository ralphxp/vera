<?php
namespace Codx\Comic\Controller;

use Codx\Ralph\Engine as View;
use \Codx\Comic\Request;
use \Codx\Comic\Response;
use \Codx\Comic\Model\User;

use Illuminate\Support\Facades\Auth;


class AuthController extends Controller{

    public function login(Request $request)
    {
        $credentials = Auth::user();
        var_dump($credentials);

        // $user = User::auth([
        //     "u_name" => "Admin"
        // ]);
    }

    public function auth()
    {
        echo("logged");
    }
}