<?php
namespace Codx\Comic\Controller;

use Codx\Ralph\Engine as View;
use Codx\Comic\Model\Contract;
use Codx\Comic\Request;
use Codx\Comic\Auth;

use Codx\Comic\Model\Tenant;
use Codx\Comic\Model\House;
use Codx\Comic\Model\Contact;
use Codx\Comic\Model\TenantIn;
use Codx\Comic\Model\TenantOut;

class TenantController extends Controller{

    public function __construct()
    {
        $this->needAuth();
    }

    public function index()
    {
        $tenants = Tenant::get();
        return View::view('admin.tenants.index', compact('tenants'));
    }

    public function edit(Request $request)
    {
        $tenant = Tenant::findOrFail($request->id);
        $message = '';
        return View::view('admin.tenants.edit', compact('tenant', 'message'));
        
        
    }

    public function update(Request $request)
    {
        $tenant = Tenant::findOrFail($request->id);
        $tenant->status = $request->status;
        $tenant->save();
        $message = "Tenant info updated successfully";
        View::view('admin.tenants.edit', compact('tenant', 'message'));
    }

    public function contact()
    {
        $contacts = Contact::get();
        $user = Auth::user();
        if($user->role != 'tenant')
            View::view('admin.tenants.contact', compact('contacts'));
        else{
            $user = Auth::user();
            $user = Tenant::findOrFail($user->tenant_id);
            $contacts = $user->contacts;
            View::view('tenant.contact', compact('contacts'));
        }
    }

    public function in()
    {
        $tenantIns = TenantIn::with('contract')->get();
       
        View::view('admin.tenants.in', compact('tenantIns'));
    }

    public function Out()
    {
        $tenantOut = TenantOut::with('contract')->get();
       
        View::view('admin.tenants.out', compact('tenantOut'));
    }

    public function account()
    {
        $user = Auth::user();
        $user = Tenant::findOrFail($user->tenant_id);
        return View::view('tenant.account', compact('user'));
    }


    public function payment()
    {
        $user = Auth::user();
        $user = Tenant::findOrFail($user->tenant_id);
        return View::view('tenant.payment', compact('user'));
    }

    public function contract()
    {
        $user = Auth::user();
        $user = Tenant::findOrFail($user->tenant_id);
        return View::view('tenant.contract', compact('user'));
    }

    
}