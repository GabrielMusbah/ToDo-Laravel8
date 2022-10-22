<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;
use App\Models\Item;

class Item extends Model
{
    use HasFactory;

    /**
     * 
     * 
     *  @var array
     * 
     */

    protected $fillable = [

        'description',
        'user_id',

    ];

        /**
     * The items
     *
     * @return \Illuminate\Database\Eloquent\Relations\BeLondsTo
     */
    public function itens()
    {
        return $this->beLondsTo(User::class);
    }

}
