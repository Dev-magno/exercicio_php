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

retornarArgumento();
echo "<br>";

// Q7
function verificarSenha($senha){
    // variaveis para verificar se false ou true
    $temMaiscula = false;
    $temMinuscula = false;
    $temDigito = false;
    $temOito = false;

    // Verifica o comprimento da senha
    if(strlen($senha) >= 8){
        $temOito = true;
    }
    
    // faz uma iteração no array e verificar cada caractere da senha
    foreach(str_split($senha) as $s){
         if(ctype_upper($s)){
            $temMaiscula = true;
        }
        elseif(ctype_lower($s)){
            $temMinuscula = true;
        }
        elseif(ctype_digit($s)){
            $temDigito = true;
        }
    }

      // verifica se a senha atende a todos os requisitos
        if($temMaiscula && $temMinuscula && $temDigito && $temOito){
            echo "Senha válida!<br>";
        }
        else{
            echo "Senha inválida!";
        }
}
verificarSenha("1Mnut674");

//Q8
$idade = 18;
echo  ($idade >= 18)? "Maior" : "Menor";
 echo "<br>";

// Q9
$alunos = array(
    'Junior' => 9.5,
    'Maria' => 10,
    'Paulo' => 6,
    'Ana' => 8.5,
    'Pedro' => 5.5,
    'Julia' => 6.5
);

foreach($alunos as $nome => $nota){
    if($nota >= 7)
    echo "Aluno: $nome, Nota: $nota";
    echo "<br>";
}

// Q10
// função para caulcular o circulo passando o parâmetro raio
function calcularAreaCirculo($raio){ 
    $pi = 3.14159; // Define a constante Pi com valor aproximado 3.14159
   $area = $pi * ($raio * $raio); // calcula a area do circulo usando a formula a = pi * r^2
   return $area; // retorna a área calculada
    
}

// Valor teste
$raio = 4; // define um valor teste para raio
$area = calcularAreaCirculo($raio); // chama a função calcularAreaCirculo com o valor de teste e armazena o resultado na variavel $area
echo "A área do círculo com valor teste raio $raio é $area"; // imprime a área do circulo com o valor de teste do raio
echo "<br>";
// Q11
function numerosPares($n){
    $pares = array(); // inicia um array vazio para armazenar números pares
    for ($a = 0; $a <= $n; $a++){ // faz a iteração de 0 até o número fornecido
        if($a % 2 == 0){ // verifica se o número é par
            $pares[] = $a; // adicona o número par ao array esperado
        }
    }
    return $pares; // retorna o array com os números pares até zero
}

$numero = 10; // 
$meuArray = numerosPares($numero); // chama a função com o valor do teste passado e armaneza o resultado em $meuArray

// percorre e faz a exibição do array resultante 
foreach ($meuArray as $numeroPar) { 
    echo $numeroPar . " ";  // exibe cada número par 
}

// Q 12
// função para calcular o século com o parâmetro $ano
function calcularSeculo($ano){
    if($ano % 100 == 0) { 
        $seculo = $ano / 100; // divide o ano por 100 tendo em vista a quantidade do meso para um século
    }else {
        $seculo = floor($ano / 100) + 1; // divide por cem, arredonda para baixo e adiciona 1
    }
    return $seculo; // retorna o século calculado 
    
}

// teste da função
$ano = 300; // ano desejado para saber a qual século pertence
$seculo = calcularSeculo($ano); // chama a função para fazer o calculo do século
echo "<O ano $ano está no século $seculo"; // exibe o resultado do calculo e mostra o século a quem pertence o número desejado

// Q 13
// função para calcular o século com o parâmetro $ano
function stringPalindromo($string){
    if(strrev($string) === $string){ // Verifica se a string é igual à sua versão invertida
       return 'Palíndromo';
    } else{
       return 'Não é Palíndromo';
    }   
}

// teste da função
$result = "DAD"; // string desejada para verificar se é um palíndromo
$string = stringPalindromo($result); // chama a função para verificar a string
echo $string; // exibe o resultado