<?php

class BCCR extends Provider{

    public function __construct(){
        $this->url = 'https://gee.bccr.fi.cr/Indicadores/Suscripciones/WS/wsindicadoreseconomicos.asmx/ObtenerIndicadoresEconomicos';
        $this->params = array();
    }

    public function getRates(){
        if ( ! empty( $this->params ) ) {
            $this->url .= '?';
            foreach ($this->params as $key => $value) {
                $this->url .= $key . '=' . $value . '&';
            }
            $this->url = rtrim( $this->url, '&' );
        }
        echo print_r( $this->url, true);
        return file_get_contents( $this->url );
    }
}