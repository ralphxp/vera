<?php 
namespace Codx\Comic\Model;


class Payment extends Model{

    protected $table = "payment";
    protected $primaryKey = 'payment_id';
    public $timestamps = false;

    protected $fillable = [
        'tenant_id',
        'ref_no',
        'amount',
        'pay_from',
        'pay_to'
    ];

    public function tenant()
    {
        return $this->belongsTo(Tenant::class, 'tenant_id');
    }

    

}