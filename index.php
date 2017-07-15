<?php
/**
 * Created by PhpStorm.
 * User: rafae
 * Date: 15/07/2017
 * Time: 13:44
 */

require_once "./src/TabuleiroInterface.php";
require_once "./src/Tabuleiro.php";

$tabuleiro = Tabuleiro::montarTabuleiro();
Tabuleiro::exportarTabuleiro($tabuleiro);

echo Tabuleiro::montarHTML($tabuleiro);
