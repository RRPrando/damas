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
    public function validarMovimentacao($origem, $destino, $array);
    public function posicaoExistente($origem, $destino, $array);
    public function posicaoVazia($origem, $destino, $array);
    public function posicaoValida($origem, $destino, $array);
    public function movimentacaoDiagonalFrente($origem, $destino, $array);
}
