<?php

namespace App\Models;

use Illuminate\database\Eloquent\factories\Hasfactory;
use Illuminate\Database\Eloquent\Model;

class buku extends Model
{
    //
    use Hasfactory;

    protected $table = 'buku';

    protected $fillable = [
        'judul' ,
        'id_pengarang',
        'idkategori',
        'tahunterbit',
        'sinopsis',
        'cover',
    ];

    public function kategori()
    {
        return $this->belongsTo(related: Category::class);
    }
}
