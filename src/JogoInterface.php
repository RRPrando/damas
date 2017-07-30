<?php
/**
 * Created by PhpStorm.
 * User: rafae
 * Date: 30/07/2017
 * Time: 11:24
 */

namespace SRC;


interface JogoInterface
{
    public function iniciarJogo();
    public function validar_movimentacao($origem, $destino, $array);
    public function posicao_existente($origem, $destino, $array);
    public function posicao_vazia($origem, $destino, $array);
    public function posicao_valida($origem, $destino, $array);
    public function movimentacao_diagonal_frente($origem, $destino, $array);
}