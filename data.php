<?php
if(isset($_POST)){
    $oDadosCampos = tratarDadosCampos($_POST);
    salvarDadosjson($oDadosCampos);

}

function tratarDadosCampos($oDadosCampos){
    return (object) [ 
        "ID"=> $oDadosCampos['ID'],
        "sNome"=> $oDadosCampos['sNome'],
        "sSobrenome"=> $oDadosCampos['sSobrenome'],
        "sEmail"=> $oDadosCampos['sEmail'],
        "sTel"=> $oDadosCampos['sTel']
    ];  
}
function salvarDadosjson($oDadosCampos){
    $sArquivo = 'contact.json';
    
    $aDadosAtuais = json_decode(file_get_contents($sArquivo), true);
    
    if(isset($aDadosAtuais)){
        array_push($aDadosAtuais, $oDadosCampos);

        $sDadosPersitir = json_encode($aDadosAtuais, JSON_PRETTY_PRINT);

        file_put_contents($sArquivo, $sDadosPersitir);   
        
        return;
    }
    
    $aDados = [];

    array_push($aDados,$oDadosCampos);

    $sDadosPersitir = json_encode($aDados, JSON_PRETTY_PRINT);

    file_put_contents($sArquivo, $sDadosPersitir);
    
}
?>