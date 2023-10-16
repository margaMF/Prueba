<?php
//Inicio código de la solución del examen:

function extraerLetrasUnicasMayuscula($palabra) 
{
    $palabraMayuscula = strtoupper($palabra);  
    $longitudPalabra = strlen($palabraMayuscula);
    $res = array();
    for ($i = 0; $i < $longitudPalabra; $i++) 
    {
        if (!in_array($palabraMayuscula[$i], $res) && $palabraMayuscula[$i]!=" ") 
        {
            array_push($res,$palabraMayuscula[$i]);
        }
    }

    return implode($res);
}

function existen_repetidos($palabra)
{
    $longitud = strlen($palabra);
    $resultado = false;
    for ($i = 0; $i < $longitud; $i++) 
    {
        $letra = $palabra[$i];
        for ($j = $i+1;$j<$longitud;$j++)
        {
            if ($letra==$palabra[$j])
            {
                $resultado = true;
                break;
            }
        }
        if ($resultado == true)
        {
            break;
        }
    }
    return $resultado;
}

function contieneLetra($texto,$letra) 
{
    $longitudTexto = strlen($texto);
    $res = false;

    for ($i = 0; $i < $longitudTexto; $i++)
    {
        if ($texto[$i]==$letra)
        {
            $res = true;
            break;
        }
    }
    return $res;
}

function contieneLetrasPalabra($palabra,$frase) 
{

    $condicion_excepcional_existen_repetidos = existen_repetidos($palabra); 
    if ($condicion_excepcional_existen_repetidos)        
    {
        throw new Exception("Hay repetidas en el parámetro palabra");
    }
    $numero_letras_frase = strlen($frase);
    $numero_letras_palabra = strlen($palabra);
    $resultado = true;
    for ($i = 0; $i < $numero_letras_palabra; $i++) 
    {
        $letra = $palabra[$i];
        if (!contieneLetra($frase,$letra)) 
        {
            $resultado = false;
            break;
        }
    }
    return $resultado;
}
 
function contarPalabrasFraseLetra($frase,$letra) 
{
    $res = 0;
    $palabras = explode(" ", $frase); 
    foreach ($palabras as $palabra) 
    {
        if (contieneLetra($palabra,$letra)) 
        {
            $res++; 
        }
    }
    return $res;
}

function obtenerFraseMasPalabrasLetra($parrafo,$letra) 
{
    $resultado = "";

    $frases = explode(".", $parrafo); 
    $maxPalabrasConLetra = 0;
    foreach ($frases as $frase)  
    {
        if (strlen($frase)>0) 
        {
            $numeroPalabrasLetra = contarPalabrasFraseLetra($frase,$letra); 
            if ($numeroPalabrasLetra>$maxPalabrasConLetra) 
            {
                $maxPalabrasConLetra = $numeroPalabrasLetra; 
                $resultado = $frase; 
            }
        }
    }

    return $resultado;
}

//Fin código de la solución del examen

//test del primer ejercicio

function test1()
{   
    print("test1");
    $frase = "oso listo";
    $resultado = extraerLetrasUnicasMayuscula($frase);
    return $resultado=="OSLIT";
}

function test_existen_repetidos()
{
    $palabra = "casx";

    return existen_repetidos($palabra)==false;
}

//test del segundo ejercicio

function test_se_lanza_excepcion()
{
    try
    {
        $palabra = "casa";
        $frase = "la casa es blanca";
        $resultado = contieneLetrasPalabra($palabra,$frase);
        return false;
    } 
    catch (Exception $e)
    {
        print($e);
        return true;
    }
}

function test2()
{   
    print("test2");
    $cadena = "abcs";
    $frase = "La casa es blanca";
    $resultado = contieneLetrasPalabra($cadena,$frase); 
    return $resultado == true;
}

//test del tercer ejercicio

function test3()
{
    print("test3");
    $parrafo = "La rana cantaba la balada. La casa es blanca y la nube es. El pez era amarillo.";
    $letra = "a";

    $resultado = obtenerFraseMasPalabrasLetra($parrafo,$letra);

    return $resultado == " La casa es blanca y la nube es blanca y azul";

}

//ejecución de test
    
var_dump(test_se_lanza_excepcion());