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
    protected $cor;
    protected $origem;
    protected $destino;
    protected $tabuleiro;

    /**
     * Peca constructor.
     * @param $cor
     */
    public function __construct($cor, Tabuleiro $tabuleiro)
    {
        $this->cor = $cor;
        $this->tabuleiro = $tabuleiro;
    }
    /**
     * @return mixed
     */
    public function getOrigem()
    {
        return $this->origem;
    }
    /**
     * @param mixed $origem
     */
    public function setOrigem($origem)
    {
        $this->origem = $origem;
    }
    /**
     * @return mixed
     */
    public function getDestino()
    {
        return $this->destino;
    }
    /**
     * @param mixed $destino
     */
    public function setDestino($destino)
    {
        $this->destino = $destino;
    }

    public function movimentar(){}
}
