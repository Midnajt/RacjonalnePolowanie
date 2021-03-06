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
                $this->kontakt = 'Kontakt';
                $this->dlaczegoHodowlaRacjonalnePolowanie = 'Dlaczego hodowla Racjonalne Polowanie?';
                $this->txt1 = 'Hodowla jest prowadzona przez my??liwego kt??ry ??owiectwo ma we krwi od pokole?? i od dekad towarzyszy mu czteronogi przyjaciel podczas polowa??.';
                $this->txt2 = 'Pies my??liwski z odpowiedniej linii i hodowli to gwarancja dobrego u??ytkowego psa my??liwskiego i ta hodowla zapewni Ci to.';
                $this->tresuraWyzla = 'Tresura wy????a';
                $this->txt3 = 'Pies powinien by?? od najm??odszych dni otoczony opiek??, socjalizowany oraz uczony wsp????pracy z cz??owiekiem.';
                $this->txt4 = 'Odpowiednie wzmacnianie wi??zi, a wraz z tym ch??ci do wsp????pracy, nagradzanie w??a??ciwych reakcji, nauka pos??usze??stwa to na pocz??tek. Potem nadchodz?? kolejne etapy w zale??no??ci od przeznaczenia Twojego psa.';
                $this->miedzynarodowaFederacjaKynologiczna = 'Mi??dzynarodowa Federacja Kynologiczna';
                $this->txt5 = 'FCI jest nadrz??dn?? jednostk?? dla najwa??niejszych organizacji kynologicznych.';
                $this->txt6 = 'Federacja zrzesza cz??onk??w na ca??ym ??wiecie i ka??dy z nich posiada certyfikat potwierdzaj??cy przynale??no????.';
                $this->txt7 = 'Mo??esz nas znale???? na li??cie hodowc??w po wpisaniu pierwszych liter nazwy naszej hodowli na oficjalnej stronie FCI, kt??r?? znajdziesz';
                $this->tutaj = 'tutaj';
                $this->txt8 = 'Polski Zwi??zek Kynologiczny nale??y do federacji.';
                $this->wyzelNiemieckiKrotkowlosy = 'Wy??e?? niemiecki kr??tkow??osy ??? niezawodny, rodzinny pies my??liwski';
                $this->txt9 = 'Z nosem przy ziemi, przemierzaj??c pola i lasy ??? to ulubione zaj??cie wy????a niemieckiego kr??tkow??osego. Ten inteligentny pies my??liwski to szczeg??lny pies do pracy, potrzebuj??cy wiele wysi??ku i wybiegania. Po wysi??ku lubi by?? razem ze swoj?? rodzin?? i okazuje si?? przywi??zanym jej cz??onkiem.';
                $this->txt10 = 'Pe??na pasji i energii, zr??wnowa??ona i z silnymi nerwami. Yuma to pies kt??ry uwielbia polowa?? na pi??ro i z zaanga??owaniem g??osi postrza??ki.';
                $this->txt11 = 'Pewny siebie i ch??tny do pracy pies kt??ry zosta?? konsekwetnie wychowany, doskonale panuje nad swoim instynktami ??owieckimi.';
                $this->osiagnieciaIRodowody = 'Osi??gni??cia i rodowody';
                $this->txt = '';
        }
    }
}
