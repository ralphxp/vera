<?php 
namespace Codx\Comic\Model;


class TenantOut extends Model{

    protected $table = "tenant_out";
    protected $primaryKey = 'out_id';

    public $timestamps = false;


    public function contract()
    {
        return $this->belongsTo(Contract::class, 'contract_id');
    }

    

}