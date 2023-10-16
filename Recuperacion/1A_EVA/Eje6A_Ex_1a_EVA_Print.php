<?php

class AnalizarTexto
{
    private $texto;

    function __construct($frase)
    {
        $this->texto = strtoupper($frase);
    }
    public function mostrarVocales()
    {
        $numero_letras = strlen($this->texto);
        $abecedario = "ABCDEFGHIJKLMNOPQRSUVWXYZ";

        $numero_letras_abecedario = strlen($abecedario);

        $contadores = [];

        for ($i = 0; $i < $numero_letras_abecedario; $i++)
        {
            $contadores[$i] = 0;
        } 

        for ($i = 0; $i < $numero_letras; $i++)
        {
            print("recorriendo la frase, letra:");
            print($this->texto[$i]);
            print("<br>");
            for ($i_contadores = 0; $i_contadores < $numero_letras_abecedario; $i_contadores++)
            {
                if ($abecedario[$i_contadores]==$this->texto[$i])
                {
                    print("encontrada la letra, incrementamos su contador:");
                    print($abecedario[$i_contadores]);
                    
                    print("<br>");
                    
                    $contadores[$i_contadores] = $contadores[$i_contadores] + 1;
                     
                    break;
                }
            }
        }

        echo "<table>";
        echo "<tr>";
        for ($i = 0; $i < $numero_letras_abecedario; $i++)
        {
            echo "<td>";
            echo  $abecedario[$i];
            echo "</td>";
        }
        echo "</tr>";
        echo "<tr>";
        for ($i = 0; $i < $numero_letras_abecedario; $i++)
        {
            echo "<td>";
            echo  $contadores[$i];
            echo "</td>";
        }
        echo "</tr>";

        echo "</table>";

        return 0;
    }

    function mostrarPalabras()
    {
        $palabras = explode(" ", $this->texto);
        $palabras_encontradas = []; 
        foreach ($palabras as $palabra)
        {
            if (!in_array($palabra, $palabras_encontradas))
            {
                array_push($palabras_encontradas,$palabra);
            }
        }

        $numero_palabras_encontradas = count($palabras_encontradas);

        foreach ($palabras_encontradas as $palabra_encontrada)
        {
            echo $palabra_encontrada.",";
        }

    }
}

 
$frase = "una mosca volava per la llum i la llum es va apagar";

$analizador = new AnalizarTexto($frase);
$analizador->mostrarVocales();
$analizador->mostrarPalabras();