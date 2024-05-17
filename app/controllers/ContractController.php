<?php
namespace Codx\Comic\Controller;

use Codx\Ralph\Engine as View;
use Codx\Comic\Model\Contract;
use Codx\Comic\Request;

use Codx\Comic\Model\Tenant;
use Codx\Comic\Model\House;


class ContractController extends Controller{

    public function __construct()
    {
        $this->needAuth();
    }

    public function index()
    {
        $contracts = Contract::get();
        $active = Contract::where('status', 'Active')->count();
        $inactive = Contract::where('status', 'iInactive')->count();
       
        $income = 0;
        View::view('admin.contract.index', compact(
            'contracts',
            'income',
            'active',
            'inactive',
        ));
    }
}