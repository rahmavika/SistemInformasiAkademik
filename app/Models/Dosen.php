<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Dosen extends Model
{
    use HasFactory;

    protected $fillable = ['nik', 'nama', 'email', 'no_telp', 'prodi_id', 'alamat'];

    public function prodi(){
        return $this->belongsTo(Prodi::class);
    }

    public function scopePencarian(Builder $query): void
    {
        if ($search = request('search')) {
            $query->where('nama', 'like', '%' . $search . '%')
                  ->orWhere('email', 'like', '%' . $search . '%')
                  ->orWhere('nik', 'like', '%' . $search . '%');
        }
    }
}
