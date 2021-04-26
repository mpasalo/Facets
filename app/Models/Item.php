<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Item extends Model
{
    use HasFactory, SoftDeletes;
    
    /**
     * The protected attributes
     *
     * @var array
     */
    protected $guarded = ['id'];

    /**
     * @var array
     */
    protected $casts = [
        'id'           => 'integer',
        'name'         => 'string',
        'item_type_id' => 'integer',
        'is_checked'   => 'boolean'
    ];

    public function type(): BelongsTo
    {
        return $this->belongsTo(ItemType::class);
    }
}
