<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Point
 *
 * @property int $id
 * @property string $name
 * @property string $luogo
 * @property string $nome
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Servizio[] $servizi
 * @property-read int|null $servizi_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Vendita[] $vendite
 * @property-read int|null $vendite_count
 * @method static \Illuminate\Database\Eloquent\Builder|Point newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Point newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Point query()
 * @method static \Illuminate\Database\Eloquent\Builder|Point whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Point whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Point whereLuogo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Point whereNome($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Point whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Point extends Model
{
    use HasFactory;
    
    /**
     * Servizi che appartengono al Point
     */
    public function servizi()
    {
        return $this->belongsToMany(Servizio::class);
    }
    
    /**
     * Vendite del point
     */
    public function vendite()
    {
        return $this->hasMany(Vendita::class);
    }
}
