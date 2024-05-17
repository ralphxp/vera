<?php 
namespace Codx\Comic\Model;


class TenantIn extends Model{

    protected $table = "tenant_in";
    protected $primaryKey = 'in_id';
    public $timestamps = false;


    public function contract()
    {
        return $this->belongsTo(Contract::class, 'contract_id');
    }

    

}