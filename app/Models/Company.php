<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    /**
     * os atributos que suportam inserção em massa
     *
     * @var array
     */
    protected $fillable = [
        'tipo',
        'nome',
        'razao_social',
        'documento',
        'ie_rg',
        'nome_contato',
        'celular',
        'email',
        'telefone',
        'cep',
        'logradouro',
        'bairro',
        'cidade',
        'estado',
        'observacao'
    ];


    /**
     * retorna empresas por tipo
     *
     * @param string $tipo
     * @return Collection
     */
    public static function allForType(string $tipo): Collection
    {
        return self::where('tipo', $tipo)->get();
    }
}
