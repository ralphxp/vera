<?php 
namespace Codx\Comic\Model;


class Contract extends Model{

    protected $table = "contract";

    protected $primaryKey = 'contract_id';
    public $timestamps = false;

    protected $fillable = [
        'tenant_id',
        'house_id',
        'duration_month',
        'total_rent',
        'terms',
        'rent_per_term',
        'start_day',
        'end_day',
        'date_contract_sign',
        'status'
    ];


    public function house()
    {
        return $this->belongsTo(House::class, 'house_id');
    }

    public function tenant()
    {
        return $this->belongsTo(Tenant::class, 'tenant_id');
    }

    public function tenantIn()
    {
        return $this->hasOne(TenantIn::class, 'contract_id');
    }

    public function tenantOut()
    {
        return $this->hasOne(TenantOut::class, 'contract_id');
    }
    

}