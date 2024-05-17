<?php 
namespace Codx\Comic\Model;


class House extends Model{

    protected $table = "house";

    protected $primaryKey = 'house_id';

    protected $fillable = [
        'house_name',
        'rent_per_month',
        'compartment',
        'status'
    ];

    

}