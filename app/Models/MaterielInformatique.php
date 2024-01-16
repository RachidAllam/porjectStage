<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaterielInformatique extends Model
{
    use HasFactory;
    protected $primaryKey = 'Num_Inv';
    protected $fillable = ['type', 'marque', 'dateDacquisition', 'EF', 'etat', 'codeGresa'];

    public function etablissement()
    {
        return $this->belongsTo(Etablissement::class, 'codeGresa', 'codeGresa');
    }
}
