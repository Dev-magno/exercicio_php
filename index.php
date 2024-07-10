<?php 
// Q1 / Q2
$nome = 'Magno';
$idade = 40;
$enedereco = 'Rua seiS, Vila operária';
$curso = 'PHP';
echo "Olá eu sou,  $nome  tenho  $idade  anos, moro na  $enedereco  e faço o curso de  $curso  no SENACA <br>";

// Q3
$num1 = 20;
$num2 = 10;
echo "Soma: " . $num1 + $num2 . "<br>";
echo "Subtração: " .$num1 - $num2 . "<br>";
echo "Multiplicação: " . $num1 * $num2 . "<br>";
echo "Divisão: " . $num1 / $num2 . "<br>";

// Q4
$n1 = 10;
$n2 = 14;
if($n1 == $n2){
    echo "$n1 é igual a $n2";
}
elseif($n1 < $n2){
    echo "$n1 é menor que $n2 <br>";
}

else{

    echo "$n1 é maior que $n2";
}

// Q5
$Curso = "programador webd";
if(str_contains($Curso, "a") && str_contains($Curso, "o")){
    echo "Contém <br>";
}
else{
    echo "Não Contém";
}

//Q6
function retornarArgumento($n3=10){
    return $n3 = 10;
}

echo retornarArgumento();

// Q7
function verificarSenha($senha){
    if(ctype_upper($senha) && ctype_lower($senha) && ctype_digit($senha) && strlen($senha)>=8){
    
        echo 'Válida';
    }

    else{
       
        echo 'Inválida';
    }

}

verificarSenha('1234Mcm2');
