<?php

class Translator {

    public $oHodowli;
    public $naszePsy;
    public $galeria;
    public $kontakt;

    function translate(){

        $lang = $_GET["lang"];

        switch($lang){
            case 'eng':

                $this->oHodowli = 'About breeding';
                $this->naszePsy = 'Our dogs';
                $this->galeria = 'Gallery';
                $this->kontakt = 'Contact';
                break;
            default:

            $this->oHodowli = 'O hodowli';
            $this->naszePsy = 'Nasze psy';
            $this->galeria = 'Galeria';
            $this->kontakt = 'kontakt';
        }
    }
}
