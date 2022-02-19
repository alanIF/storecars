<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transacao extends Model
{
    use HasFactory;
    protected $table= "transacao";
    protected $fillable= ['descricao','tipo', 'id_veiculo' ,'user_id', 'data_operacao'];
}
