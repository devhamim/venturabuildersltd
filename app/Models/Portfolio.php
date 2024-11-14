<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Portfolio extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function user()
    {
        return $this->hasOne(User::class, 'id','user_id');
    }

    public function call_to_port_cat()
    {
        return $this->hasOne(PortfolioCategory::class, 'id','portfolio_category_id');
    }
}
