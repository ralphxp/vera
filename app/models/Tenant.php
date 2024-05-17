<?php 
namespace Codx\Comic\Model;


class Tenant extends Model{

    protected $table = "tenant";
    protected $primaryKey = 'tenant_id';
    public $timestamps = false;

    protected $fillable = [
        'fname',
        'lname',
        'programme',
        'reg_no',
        'occupation',
        'p_no',
        'pno1',
        'e_address',
        'p_address',
        'city',
        'region',
        'u_name',
        'p_word',
        'status'
    ];

    public function contact()
    {
        return $this->hasOne(Contact::class, 'tenant_id');
    }

    public function contacts()
    {
        return $this->hasMany(Contact::class, 'tenant_id');
    }

    public function contract()
    {
        return $this->hasOne(Contract::class, 'tenant_id')->where('status', 'active');
    }

    public function payment()
    {
        return $this->hasOne(Payment::class, 'tenant_id');
    }

    // public function in()
    // {
    //     return $this->hasOne(TenantIn::class, 'tenant_id');
    // }

    // public function out()
    // {
    //     return $this->hasOne(TenantOut::class, 'tenant_id');
    // }

}