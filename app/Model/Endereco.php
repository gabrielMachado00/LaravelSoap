<?php
namespace App\Model;
use Illuminate\Database\Eloquent\Model;
class  Endereco extends Model
{

  protected $table = "enderecos";
    protected $fillable = [
      'id',
      'RUA',
      'LOGRADOURO',
      'CIDADE',
      'NUMERO',
      'latitude',
      'longitude'
    
    ];
}