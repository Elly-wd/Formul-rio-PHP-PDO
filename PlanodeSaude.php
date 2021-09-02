<?php
include_once './database.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Plano de Saúde</title>
</head>
<body>

<form action="PlanodeSaude" method="get"></form>
    <?php

    

    //PARTE I

    $Nregs= isset($_GET["Nregis"])?$_GET["Nregis"]:0; //número de registro
    $Vqtd= isset($_GET["qtd"])?$_GET["qtd"]:0; // número de beneficiários
    $Vbenef= isset($_GET["benef"])?$_GET["benef"]:0; 
    
   for ($i= 1; $i <= $Vqtd; $i++) {  
        
            echo "Nome:<input type='text' name='inome'></br> Idade:<input type='number' name='idade' min='1'></br>";
}
   /* switch ($Nregs) {
        case 1:
            if ($idade < 17) {
                $Vqtd.faixa1
            }else if ($idade >18 && <40) {
                $Vqtd.faixa2
            } else {
              echo " Seu plano deu o total de $Vqtd.faixa3 reais"
            }
            
            break;
         case 2:
                if ($idade < 17) {
                    $Vqtd.faixa1
                }else if ($idade >18 && <40) {
                    $Vqtd.faixa2
                } else {
                  echo " Seu plano deu o total de $Vqtd.faixa3 reais"
                }
                
                break;
                case 3:
                    if ($idade < 17) {
                        $Vqtd.faixa1
                    }else if ($idade >18 && <40) {
                        $Vqtd.faixa2
                    } else {
                      echo " Seu plano deu o total de $Vqtd.faixa3 reais"
                    }
                    
                    break;   
                        case 4:
                            if ($idade < 17) {
                                $Vqtd.faixa1
                            }else if ($idade >18 && <40) {
                                $Vqtd.faixa2
                            } else {
                              echo " Seu plano deu o total de $Vqtd.faixa3 reais"
                            }
                            
                            break;
                            case 5:
                                if ($idade < 17) {
                                    $Vqtd.faixa1
                                }else if ($idade >18 && <40) {
                                    $Vqtd.faixa2
                                } else {
                                  echo " Seu plano deu o total de $Vqtd.faixa3 reais"
                                }
                                
                                break;
                                case 6:
                                    if ($idade < 17) {
                                        $Vqtd.faixa1
                                    }else if ($idade >18 && <40) {
                                        $Vqtd.faixa2
                                    } else {
                                      echo " Seu plano deu o total de $Vqtd.faixa3 reais"
                                    }
                                    
                                    break;     
        default:
            # code...
            break;
    }
           */
    ?>
</form>
</body>
</html>