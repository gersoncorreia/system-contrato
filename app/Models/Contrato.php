<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contrato extends Model
{
    use HasFactory;
    protected $table = 'contratos';
    protected $fillable = [
        'receita_despesa','numero','orgao_codigo'
        ,'orgao_nome','unidade_codigo','unidade_nome_resumido'
        ,'unidade_nome','fornecedor_tipo','fonecedor_cnpj_cpf_idgener'
        ,'fornecedor_nome','codigo_tipo','tipo'
        ,'categoria','processo','objeto'
        ,'fundamento_legal','informacao_complementar','codigo_modalidade'
        ,'modalidade','unidade_compra','licitacao_numero'
        ,'data_assinatura','data_publicacao','vigencia_inicio'
        ,'vigencia_fim','valor_inicial','valor_global'
        ,'num_parcelas','valor_parcela','valor_acumulado'
        ,'situacao','cd_contrato'
    ];
}
