<?php

/**
 * Created by PhpStorm.
 * User: rafae
 * Date: 15/07/2017
 * Time: 13:24
 */

namespace SRC;

interface TabuleiroInterface
{
    public static function montarTabuleiro();
    public static function exportarTabuleiro($tabuleiro);
    public static function importarTabuleiro();
    public static function montarHTML($tabuleiro);
}
