<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetails extends Model
{
   	public $timestamps = false; //set time to false
    protected $fillable = [
    	'order_code', 'product_coupon', 'product_feeship','product_id', 'product_name','product_price','product_sales_quantity'
    ];
    protected $primaryKey = 'order_details_id';
 	protected $table = 'pdh_order_details';
 	public function product(){
 		return $this->belongsTo('App\Models\Products','product_id');
 	}
}
