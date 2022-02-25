<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Financas
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $titulo
 * @property float $valor
 * @property string $categoria
 * @property string $data
 * @method static \Illuminate\Database\Eloquent\Builder|Financas newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Financas newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Financas query()
 * @method static \Illuminate\Database\Eloquent\Builder|Financas whereCategoria($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Financas whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Financas whereData($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Financas whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Financas whereTitulo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Financas whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Financas whereValor($value)
 * @mixin \Eloquent
 */
class Financas extends Model
{
    use HasFactory;
}
