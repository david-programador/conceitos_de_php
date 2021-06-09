<?php
    // PHP = Personal Home Page

    //Variáveis
    //Concatenar
    //Variável de variável
    //Comparar valores
    //>= <= == !=
    //=== !==
    //Looping
    //Funções
    //Classes


    $nome = 'David';
    //Definindo uma variável

    echo $nome;
    //printando na tela só o a variável

    echo '<br>';
    //para quebrar linha ultilizando o código html com print

    ?><br /><?php
    //outro modo para quebrar linha (fechei e coloquei br e depois abri de novo a tag php)

    echo 'O meu nome é ' .$nome;
    //(concatenei no php) Adicionei escrita antes da variável (nesse exemplo precisa do . antes da variável .$nome;)
     

    ?><br /><?php
    ?><br /><?php


    $David = 'Bla bla!';
    //Variável de variável (coloquei o Bla bla dentro do meu nome)

    echo 'O meu nome é ' .$$nome;
    //concatenei com uma variável de variável - printei a escrita mais a variável de variável 


    ?><br /><?php
    ?><br /><?php


    $idade = '20';
    //declarei a variável idade como valor string 20

    if($idade == 20){
        echo 'Verdadeiro';
    }else{
        echo 'Falso';
    } //fiz uma comparação simples com dois sinais de == e comparou somente o os números não se o valor era string ou inteiro


    ?><br /><?php


    if($idade === 20){
        echo 'Verdadeiro';
    }else{
        echo 'Falso';
    } //realizei uma comparação para ver se o valor é idêntico com três sinais === e viu o valor se era inteiro


    ?><br /><?php
    ?><br /><?php

    if($idade != 20){
        echo 'verdadeiro';
    }else{
        echo 'falso';
    }//fiz uma comparação simples para ver se o número é diferente e a resposta foi falso

    ?><br /><?php

    if($idade !== 20){
        echo 'verdadeiro';
    }else{
        echo 'falso';
    }//fiz uma total comparação para ver se até o tipo de dado é diferente e a resposta foi sim, pois é string e eu comparei com um número inteiro
    //diferente da de cima usei três sinais !==



    echo '<br><br>'; //print com código html de quebra de linha
  


    for($i = 0; $i <= 10; $i++){
        echo $i;
        echo '<hr>';
    }//Looping for, com print do contador e com print de linha após cada número 


    echo '<br>';



    $i = 0;

    while($i < 10){
        echo $i;
        echo '<br>';
        $i++;
    }//Loopin com While, com um contador até 9 e com quebra de linha
    

    echo '<br><br>';

    printNumero(30);//chamei a função e dei um valor para a variável n. (posso chamar essa função varias vezes e dar valores diferentes para esta variável)
    function printNumero($n){//função básicamente é um trecho de código que ele não vai ser executado por padrão, ele só vai ser executado quando você quizer que ele seja executado, isso é quando você chamar.
        echo $n;
    }


    echo '<br><br>';


    class Pessoa{//uma classe pessoa com dois atributos de uma pessoa

        public $nome;
        public $idade;

        public function __construct($nome,$idade){//método construtor da classe
            $this->nome = $nome; //esse this faz referência ao de cima que está dentro da class e o $nome faz referência ao parâmetro (this quer dizer esta em português)
            $this->idade = $idade; //esse this faz referência ao de cima que está dentro da class e o $nome faz referência ao parâmetro (this quer dizer esta em português)
        }

        public function printNomeEIdade(){
            echo $this->nome;
            echo '<br>';
            echo $this->idade;
        }
    }

    $pessoa = new Pessoa('David','20');//chamei a class(instânciei uma classe, ou seja criei esse objeto) primeiro criei uma variável depois atribui o valor dela criando um novo objeto pessoa, ou seja criando um novo registro de uma pessoa, com os parâmetros nome e idade


    $pessoa->printNomeEIdade(); //chamei a função que está dentro da classe para printar a pessoa


        echo '<br><br>';


    $pessoa2 = new Pessoa('Davidson','20'); //criei o registro de uma nova pessoa e coloquei como pessoa2

    $pessoa2->printNomeEIdade(); //printei na tela a pessoa2.


    
?>
