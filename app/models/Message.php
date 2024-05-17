<?php 
namespace Codx\Comic\Model;


class Message extends Model{

    protected $table = "payment";
    protected $primaryKey = 'payment_id';
    public $timestamps = false;

    public function tenant()
    {
        return $this->belongsTo(Tenant::class, 'tenant_id');
    }

    

}