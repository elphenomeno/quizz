<?php
//fonction de validation
function est_vide( $valeur):bool{
    return empty($valeur);
}

function est_entier($valeur):bool{
    $entier = (int) $valeur;
    return is_int($entier);

}

function est_numerique($valeur):bool{
    $entier = (int) $valeur;
    return is_int($entier);

}

function est_email($valeur):bool{
    if (filter_var($valeur ,FILTER_VALIDATE_EMAIL)) {
        return true;
    }else {
        return false;
    }
}
function form_valid($arrayError):bool{
    if (count($arrayError)==0) {
        return true;
    }
    return false;
}
 function longueur_password( $valeur,string $key,&$arrayError,int $min=6 , int $max=10){
     if (strlen($valeur) < $min ||strlen($valeur) > $max) {
         $arrayError[$key]= "le password doit etre compris entre $min et $max";
     } elseif (est_vide($valeur)) {
         $arrayError[$key]= "le password est obligatoire";
     } 
      
 }
 function nombre_page_total($array, $nombreElement): int {
    $nombrePage = 0;
    $longueurArray = count($array);
    if ($longueurArray % $nombreElement == 0) {
        $nombrePage = $longueurArray / $nombreElement;
    } else {
        $nombrePage = ($longueurArray / $nombreElement) + 1;
    }
    return $nombrePage;
}

function paginer($array, int $page, int $nombreElement): array {
    $arrayElement = [];
    $indiceDepart = ($page*$nombreElement) - $nombreElement;
    $limitElement = $page * $nombreElement;
for ($i = $indiceDepart; $i < $limitElement; $i++) {
    if ($i >= count($array)) {
        return $arrayElement;
    } else {
        $arrayElement[] = $array[$i];
    }
}
return $arrayElement;
}
    function valide_email( $valeur , string $key, array &$arrayError):void{
        if (est_vide($valeur)) {
            $arrayError[$key]= 'le champs  login est obligatoire';
        }elseif (!est_email($valeur)) {
            $arrayError[$key]= 'saisir un email valide (exemple@gmail.com)';
        }
    }

    function validation_password( $valeur,array &$arrayError, string $key ,int $min=6 , int $max=10):void{
        if (est_vide($valeur)) {
            $arrayError[$key]= 'le champs password est obligatoire';
        }elseif (strlen($valeur) < $min ||strlen($valeur) > $max  ) {
            $arrayError[$key]= "la taille du password est compris entre $min et $max ";
        }
      
    }
    function validation_username( $valeur , string $key,array &$arrayError){
        if (est_vide($valeur)) {
            $arrayError[$key]= 'le champs  est obligatoire';
        }
    }
    
            
        
    
         
    
?>