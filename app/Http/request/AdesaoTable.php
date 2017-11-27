<?php



namespace App\Http\request;

use Illuminate\Database\Eloquent\Model;

class AdesaoTable
{


    protected $table = 'mk_produtos';

 protected $fillable = ['EAN', 'ADM','DESCRICAO','MARCA','CTL','IDP','ID'];



}

