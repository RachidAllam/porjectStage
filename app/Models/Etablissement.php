<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etablissement extends Model
{
    use HasFactory;
    protected $primaryKey = 'idAdmine';
    protected $fillable = ['codeGresa', 'nomEtab_FR', 'nomEtab_AR', 'cycle', 'codeCommune'];

    public function commune()
    {
        return $this->belongsTo(Commune::class, 'codeCommune', 'codeCommune');
    }

    public function materielInformatiques()
    {
        return $this->hasMany(MaterielInformatique::class, 'codeGresa', 'codeGresa');
    }
}
