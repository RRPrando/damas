<?php

/**
 * Created by PhpStorm.
 * User: rafae
 * Date: 15/07/2017
 * Time: 13:29
 */

namespace SRC;

class Tabuleiro implements TabuleiroInterface
{
    public static function montarTabuleiro()
    {
        $linha0 = array(" ", "B", " ", "B", " ", "B", " ", "B");
        $linha1 = array("B", " ", "B", " ", "B", " ", "B", " ");
        $linha2 = $linha0;
        $linha3 = array(" ", " ", " ", " ", " ", " ", " ", " ");
        $linha4 = $linha3;
        $linha5 = array("P", " ", "P", " ", "P", " ", "P", " ");
        $linha6 = array(" ", "P", " ", "P", " ", "P", " ", "P");
        $linha7 = $linha5;

        $tabuleiro = array(
            $linha0, $linha1, $linha2, $linha3,
            $linha4, $linha5, $linha6, $linha7
        );

        return $tabuleiro;
    }

    public static function exportarTabuleiro($tabuleiro)
    {
        file_put_contents('tabuleiro.json', json_encode($tabuleiro));
    }

    public static function montarHTML($tabuleiro)
    {
        $html = "<table border=1>";
        foreach ($tabuleiro as $linha) {
            $html .= "<tr>";
            foreach ($linha as $coluna) {
                $html .= "<td width='50' height='50'>" . $coluna . "</td>";
            }
            $html .= "</tr>";
        }
        $html .= "</table>";

        return $html;
    }
}
