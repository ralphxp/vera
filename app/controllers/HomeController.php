<?php
namespace Codx\Comic\Controller;

use Codx\Ralph\Engine as View;
use \Codx\Comic\Model\User;


class HomeController extends Controller{

    public function index()
    {
        $user = User::where('user_id', 1)->get();
        return View::view('index', compact('user'));
    }

    public function auth()
    {
        echo("logged");
    }
}