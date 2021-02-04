<?php

/**
 * @param $jugada una jugada de 4 colores
 * @return bool | array
 * retorna true si la jugada es válida (se aportan 4 colores=
 * Si no es válida, retorna un array con dos mensajes:
 * mesajeJugar = > un texto para la sección de jugar (el menu)
 * msj=> otro texto pra la sección de información
 */
function valida_jugada ($jugada)
{


}


/**
 * @param array $arrayColores los colores de la calve
 * @return string html con texto para mostrar la clave con sus colores
 */
function mostrar_clave(array $arrayColores): string
{


}

/*
 * Mostrará un formulario con los 4 select para jugar
 * No hacer
 */
function mostrar_formulario_jugar():string
{
    //Creamos 4 submits

    $selectores = ""; //quitamos el warning inicializanso
    for ($n = 0; $n < 4; $n++) { //1 para cada select
//        ....
           foreach (COLORES as $color) { //En cada select option para cada color
//               .....

        }
//           .....
    }
    return $selectores;
}


/**
 * @return array 4 colores no repetidos de la constante de colores
 */
function generar_clave(): array
{
}

/**
 * @param $clave
 * compara la clave con la jugada
 * Anota el resultado que son los colores acertados y de ellos cuantos
 * Están en la posiciòn correcta
 */
function comparaJugada(array $jugada, array $clave): array
{
}


/**
 * @param array $jugadas
 * @return string obtiene todas las jugadas a partir de la varialbe de sesión
 *generará un código html para visualizarlo
 * La implementación de esta función la facilito
 */
function obtener_jugadas(): string
{
    $jugadas = $_SESSION['jugadas'] ??  [];
    if ($jugadas ==[])
        return "No hay jugadas actualmente";
    $numeroJugadas = count($jugadas);

    $htmlJugadas = obtener_jugada_actual($jugadas);
    $htmlJugadas .="<hr />";
    $htmlJugadas .="Histórico de jugadas";

    $jugadas = array_reverse($jugadas);
    $htmlJugadas .= obtener_listado_jugadas_anteriores($jugadas,$numeroJugadas);
    return $htmlJugadas;

}

/**
 * @param $jugadas
 * @param string $htmlJugadas
 * @param $numeroJugadaActual
 * @return string
 */
function obtener_listado_jugadas_anteriores(array $jugadas, int $numeroJugadas ): string
{
}

/**
 * @return string un html para mostrar el histórico completo
 * He preferido implementar una función, aunque es muy parecida a las anteriores
 * Pero el html en la página final es un poco distinto.
 * La información la saca de la variable de sesión de jugadas
 */
function obtener_listado_final_jugadas(): string
{

}

/**
 * @param $jugadas un array con todas las jugadas (también la podría sacar de la variable de sesión )
 * @return string html con infrormación de la jugada anterior
 */
function obtener_jugada_actual($jugadas): string
{
}

?>