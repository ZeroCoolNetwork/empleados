<?php

class REQUEST {

    public static function limpiarCadena($valor) {
        $valor = str_ireplace("SELECT", "", $valor);
        $valor = str_ireplace("COPY", "", $valor);
        $valor = str_ireplace("DELETE", "", $valor);
        $valor = str_ireplace("DROP", "", $valor);
        $valor = str_ireplace("DUMP", "", $valor);
        $valor = str_ireplace(" OR ", "", $valor);
        $valor = str_ireplace("%", "", $valor);
        $valor = str_ireplace("LIKE", "", $valor);
        $valor = str_ireplace("--", "", $valor);
        $valor = str_ireplace("^", "", $valor);
        $valor = str_ireplace("[", "", $valor);
        $valor = str_ireplace("]", "", $valor);
        $valor = str_ireplace("\\", "", $valor);
        $valor = str_ireplace("!", "", $valor);
        $valor = str_ireplace("¡", "", $valor);
        $valor = str_ireplace("?", "", $valor);
        $valor = str_ireplace("=", "", $valor);
        $valor = str_ireplace("&", "", $valor);
        return $valor;
    }

    public static function POST($val) {
        $data = utf8_encode($_POST[$val]);
        $data = self::limpiarCadena($data);
        return $data;
    }

    public static function GET($val) {
        $data = utf8_encode($_GET[$val]);
        $data = self::limpiarCadena($data);
        return $data;
    }

    public static function RECEIVE($val) {
        $data = utf8_encode($_REQUEST[$val]);
        $data = self::limpiarCadena($data);
        return $data;
    }

}
