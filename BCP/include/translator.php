<?php

class Translator {

    public $oHodowli;
    public $naszePsy;
    public $galeria;
    public $kontakt;
    public $dlaczegoHodowlaRacjonalnePolowanie;
    public $txt1;
    public $txt2;
    public $tresuraWyzla;
    public $txt3;
    public $txt4;
    public $miedzynarodowaFederacjaKynologiczna;
    public $txt5;
    public $txt6;
    public $tutaj;
    public $txt7;
    public $txt8;
    public $wyzelNiemieckiKrotkowlosy;
    public $txt9;
    public $txt10;
    public $txt11;
    public $txt12;
    public $osiagnieciaIRodowody;
    public $txt;

    function translate(){

        $lang = $_GET["lang"];

        switch($lang){
            case 'eng':

                $this->oHodowli = 'About breeding';
                $this->naszePsy = 'Our dogs';
                $this->galeria = 'Gallery';
                $this->kontakt = 'Contact';
                $this->dlaczegoHodowlaRacjonalnePolowanie = 'Why Racjonalne Polowanie breeding?';
                $this->txt1 = 'The breeding is conducted by a hunter who has been hunting in his blood for generations and has been accompanied by his four-legged friend during hunting for decades.';
                $this->txt2 = 'A hunting dog from the appropriate line and breeding is a guarantee of a good working hunting dog and this breeding will provide you with it.';
                $this->tresuraWyzla = 'Pointer training';
                $this->txt3 = 'The dog should be cared for, socialized and taught to cooperate with humans from an early age.';
                $this->txt4 = "Adequate strengthening of ties, and along with this willingness to cooperate, rewarding the right reactions, learning obedience is the beginning. Then come the next steps depending on your dog's destiny.";
                $this->miedzynarodowaFederacjaKynologiczna = 'International Cynological Federation';
                $this->txt5 = 'The FCI is the overarching unit for the most important cynological organizations.';
                $this->txt6 = 'The federation has members all over the world and each of them has a certificate confirming membership.';
                $this->txt7 = 'You can find us on the breeders list after entering the first letters of the name of our kennel on the official FCI website, which you will find';
                $this->tutaj = 'here';
                $this->txt8 = 'The Polish Kennel Club belongs to the federation.';
                $this->wyzelNiemieckiKrotkowlosy = 'German Shorthaired Pointer - a reliable family hunting dog';
                $this->txt9 = 'Nose to the ground, traversing fields and forests - this is the favorite activity of the German Shorthaired Pointer. This intelligent hunting dog is a special work dog that needs a lot of effort and running. After exercise, he enjoys being with his family and turns out to be an attached member of it.';
                $this->txt10 = 'Full of passion and energy, balanced and with strong nerves. Yuma is a dog that loves to hunt feathers and preaches gunshots with commitment.';
                $this->txt11 = 'A dog that is self-confident and willing to work, which has been consistently raised, perfectly controls its hunting instincts.';
                $this->osiagnieciaIRodowody = 'Achievements and pedigrees';
                $this->txt = '';
                break;
            default:

                $this->oHodowli = 'O hodowli';
                $this->naszePsy = 'Nasze psy';
                $this->galeria = 'Galeria';
                $this->kontakt = 'kontakt';
                $this->dlaczegoHodowlaRacjonalnePolowanie = 'Dlaczego hodowla Racjonalne Polowanie?';
                $this->txt1 = 'Hodowla jest prowadzona przez myśliwego który łowiectwo ma we krwi od pokoleń i od dekad towarzyszy mu czteronogi przyjaciel podczas polowań.';
                $this->txt2 = 'Pies myśliwski z odpowiedniej linii i hodowli to gwarancja dobrego użytkowego psa myśliwskiego i ta hodowla zapewni Ci to.';
                $this->tresuraWyzla = 'Tresura wyżła';
                $this->txt3 = 'Pies powinien być od najmłodszych dni otoczony opieką, socjalizowany oraz uczony współpracy z człowiekiem.';
                $this->txt4 = 'Odpowiednie wzmacnianie więzi, a wraz z tym chęci do współpracy, nagradzanie właściwych reakcji, nauka posłuszeństwa to na początek. Potem nadchodzą kolejne etapy w zależności od przeznaczenia Twojego psa.';
                $this->miedzynarodowaFederacjaKynologiczna = 'Międzynarodowa Federacja Kynologiczna';
                $this->txt5 = 'FCI jest nadrzędną jednostką dla najważniejszych organizacji kynologicznych.';
                $this->txt6 = 'Federacja zrzesza członków na całym świecie i każdy z nich posiada certyfikat potwierdzający przynależność.';
                $this->txt7 = 'Możesz nas znaleźć na liście hodowców po wpisaniu pierwszych liter nazwy naszej hodowli na oficjalnej stronie FCI, którą znajdziesz';
                $this->tutaj = 'tutaj';
                $this->txt8 = 'Polski Związek Kynologiczny należy do federacji.';
                $this->wyzelNiemieckiKrotkowlosy = 'Wyżeł niemiecki krótkowłosy – niezawodny, rodzinny pies myśliwski';
                $this->txt9 = 'Z nosem przy ziemi, przemierzając pola i lasy — to ulubione zajęcie wyżła niemieckiego krótkowłosego. Ten inteligentny pies myśliwski to szczególny pies do pracy, potrzebujący wiele wysiłku i wybiegania. Po wysiłku lubi być razem ze swoją rodziną i okazuje się przywiązanym jej członkiem.';
                $this->txt10 = 'Pełna pasji i energii, zrównoważona i z silnymi nerwami. Yuma to pies który uwielbia polować na pióro i z zaangażowaniem głosi postrzałki.';
                $this->txt11 = 'Pewny siebie i chętny do pracy pies który został konsekwetnie wychowany, doskonale panuje nad swoim instynktami łowieckimi.';
                $this->osiagnieciaIRodowody = 'Osiągnięcia i rodowody';
                $this->txt = '';
        }
    }
}
