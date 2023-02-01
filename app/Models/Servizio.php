<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Servizio
 *
 * @property int $id
 * @property string $nome
 * @property string $costo
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Point[] $points
 * @property-read int|null $points_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Vendita[] $vendite
 * @property-read int|null $vendite_count
 * @method static \Illuminate\Database\Eloquent\Builder|Servizio newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Servizio newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Servizio query()
 * @method static \Illuminate\Database\Eloquent\Builder|Servizio whereCosto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Servizio whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Servizio whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Servizio whereNome($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Servizio whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Servizio extends Model
{
    use HasFactory;
    
    /**
     * Points che hanno questo servizio
     */
    public function points()
    {
        return $this->belongsToMany(Point::class);
    }
    
    /**
     * Relazione con le vendite
     */
    public function vendite()
    {
        return $this->belongsToMany(Vendita::class)->withPivot('prezzo');
    }
}
