<?php

namespace Codx\Comic\Controller;


use Codx\Ralph\Engine as View;
use Codx\Comic\Model\TenantOut;
use Codx\Comic\Model\Tenant;
use Codx\Comic\Request;

use Codx\Comic\Auth;

class FormController extends Controller{

    public function __construct()
    {
        $this->needAuth();
    }

    public function out()
    {
        $user = Auth::user();
        $tenants = Tenant::get();
        if($user->role == 'admin')
        {
            return View::view('admin.forms.out', compact('tenants'));
        }
        return View::view('manager.forms.out', compact('tenants'));
    }

    public function storeOut(Request $request)
    {
        $tenant = Tenant::findOrFail($request->tenant);
        if(!$tenant->contract->tenantIn)
        {
            
            $in = $tenant->contract->tenantIn;
            $in->contract_id = $tenant->contract->contract_id;
            $in->stat_keyholder = $request->key;
            $in->stat_electricityRemote = $request->remote;
            $in->no_bulbs = $request->nbulb;
            $in->stat_bulbs = $request->bulb;
            $in->stat_paint = $request->paint;
            $in->stat_Windows = $request->window;
            $in->stat_toiletSink = $request->tsink;
            $in->stat_washingSink = $request->wsink;
            $in->stat_doorLock = $request->lock;
            $in->stat_toiletDoorLock = $request->tlock;
            $in->water_units = 30;
            $in->comments = $request->msg;
            $in->save();
            $message = "Form submitted successfully";
            
            return View::view('tenant.in', compact('message'));
        }else{
            $message = "Successfully updated";
            return View::view('tenant.in', compact('message'));
        }
        return View::view('admin.forms.out', compact('tenants'));
    }

    public function tenantIn()
    {
        $user = Tenant::findOrFail(Auth::user()->tenant_id);
        $user = Tenant::findOrFail($user->tenant_id);
        if(!$user->payment)
        {
            $message = "You have not made any payment yet";
            return View::view('tenant.pay', compact('message'));
        }
        $message = "";
        return View::view('tenant.in', compact('message'));
    }

    public function tenantOut()
    {
        $message = "";
        return View::view('tenant.out', compact('message'));
    }

    public function store(Request $request)
    {
        $tenant = Tenant::findOrFail($request->tenant);
        if(!$tenant->contract->tenantIn)
        {
            
            $in = $tenant->contract->tenantIn;
            $in->contract_id = $tenant->contract->contract_id;
            $in->stat_keyholder = $request->key;
            $in->stat_electricityRemote = $request->remote;
            $in->no_bulbs = $request->nbulb;
            $in->stat_bulbs = $request->bulb;
            $in->stat_paint = $request->paint;
            $in->stat_Windows = $request->window;
            $in->stat_toiletSink = $request->tsink;
            $in->stat_washingSink = $request->wsink;
            $in->stat_doorLock = $request->lock;
            $in->stat_toiletDoorLock = $request->tlock;
            $in->water_units = 30;
            $in->comments = $request->msg;
            $in->save();
            $message = "Form submitted successfully";
            return View::view('tenant.in', compact('message'));
        }else{
            $message = "Successfully updated";
            return View::view('tenant.in', compact('message'));
        }
    }
}