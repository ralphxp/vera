<?php 
namespace Codx\Comic\Model;


class Contact extends Model{

    protected $table = "tenant_contacts";
    protected $primaryKey = 'contact_id';
    public $timestamps = false;

    protected $fillable = [
        'tenant_id',	
        'fname1',	
        'lname1',	
        'occupation1',	
        'nature1',	
        'pno1',	
        'pno2',	
        'e_address1',	
        'p_address1',	
        'city1',	
        'region1',	
        'fname2',	
        'lname2',	
        'occupation2',	
        'nature2',	
        'pno3',	
        'pno4',	
        'e_address2',	
        'p_address2',	
        'city2',	
        'region2'
    ];

    public function tenant()
    {
        return $this->belongsTo(Tenant::class, 'tenant_id');
    }

    

}