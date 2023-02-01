<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Vendita
 *
 * @property int $id
 * @property int $point_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 */
class Vendita extends Model
{
    use HasFactory;
    
    /**
     * m2m points
     */
    public function points()
    {
        return $this->belongsTo(Point::class);
    }
    
    /**
     * Relazione con i servizi
     */
    public function servizi()
    {
        return $this->belongsToMany(Servizio::class)->withPivot('prezzo');
    }
	
	//Altri metodi interessant che potrebbero starci qui sono
	//getBestSales(), vendie piu recenti, etc
}
