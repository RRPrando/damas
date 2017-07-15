<?php

/**
 * Created by PhpStorm.
 * User: rafae
 * Date: 15/07/2017
 * Time: 13:25
 */

namespace SRC;

abstract class Peca implements PecaInterface
{
    public $cor;
    public $posicao;

    /**
     * Peca constructor.
     * @param $cor
     */
    public function __construct($cor)
    {
        $this->cor = $cor;
    }
    /**
     * @return mixed
     */
    public function getPosicao()
    {
        return $this->posicao;
    }
    /**
     * @param mixed $posicao
     */
    public function setPosicao($posicao)
    {
        $this->posicao = $posicao;
    }

    public function movimentar()
    {
    }
}
