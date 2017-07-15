<?php

/**
 * Created by PhpStorm.
 * User: rafae
 * Date: 15/07/2017
 * Time: 13:25
 */
abstract class Peca implements PecaInterface
{
    public $cor;

    /**
     * Peca constructor.
     * @param $cor
     */
    public function __construct($cor)
    {
        $this->cor = $cor;
    }

    public function movimentar(){}
}