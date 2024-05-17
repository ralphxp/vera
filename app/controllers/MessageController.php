<?php

namespace Codx\Comic\Controller;


use Codx\Ralph\Engine as View;
use Codx\Comic\Model\TenantOut;
use Codx\Comic\Model\Tenant;
use Codx\Comic\Request;

class MessageController extends Controller{

    public function __construct()
    {
        $this->needAuth();
    }

    public function index(Request $request)
    {
        $tenants = Tenant::get();
        $msg = '';
        return View::view('admin.message', compact('msg'));
    }

    public function store(Request $request)
    {
        return View::view('admin.message', compact('tenants'));
    }
}