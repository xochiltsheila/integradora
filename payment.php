<?php

class Payment{

    private $Apikey="Key_tr9kY52r5D6AqZhaTWz9XQ";
    private $ApiVersion="2.0.0";

    public function __construct($token,$card,$name,$gmail,$monto){

        $this->token=$token;
        $this->card=$card;
        $this->name=$name;
        $this->gmail=$gmail
       // $this->monto=$monto

    }

    public function play(){

        //\Conekta\Conekta::setApikey($this->Apikey);
        //\Conecta\Conecta::setApiVersion($this->ApiVersion);

        if(!$this->Validate())
            return false;

            return true;
}

public function validate(){
    if($this->card=="" || $this->name=="" || $this->description=="" || $this->monto=="" || $this->gmail=="");
    $this->error="El número de tarjeta, el nombre, monto y gmail son obligatorios";
    return false;
}
    //if(strlen($this->card)<=14){
        //$this->error="El número de la tarjeta debe tener al menos 15 digitos";
        //return false;
    }

    if(!filter_var($this->gmail, FILTER_VALIDATE_EMAIL)){

    }

    if($this->monto<=20){
        $this->error="El monto debe ser mayor de 20 pesos";
    }
    return true;






?>