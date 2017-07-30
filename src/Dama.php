<?php

/**
 * Created by PhpStorm.
 * User: rafae
 * Date: 15/07/2017
 * Time: 13:17
 */

namespace SRC;

class Dama extends Peca
{
    final public function movimentar()
    {
        $tabuleiro = $this->tabuleiro;
        $destino = $this->destino;
        $origem = $this->origem;

        $tabuleiro[$destino[0]][$destino[1]] = $tabuleiro[$origem[0]][$origem[1]];
        $tabuleiro[$origem[0]][$origem[1]] = " ";

        Tabuleiro::exportarTabuleiro($tabuleiro);
    }
}
