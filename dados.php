<?php
//array para armazenar valores do header
$paginas['Home'] = '
<div class="home"> 
<h2 classh>Dona Rita</h2> <h3>Marmitas</h3>
<p>Feitas com muito amor e carinho</p>
<a class= "btn-contato" href="contato.php?">Contate-nos</a>
</div> 
    ';
$paginas['Cardapio'] = '
    ';

//array para controle de marmitas

$marmitas = array(
    0  =>   array(
        "id" =>"1",
        "img" => "./img/Bona pettite.png",
        "nome" => "Bona pettite",
        "Descriçao" => "venha experimentar",
        "preço" => "R$20,00",
        "ingredientes" => "Arroz, Feijão, Batata, Coxa de frango",
        "peso" => "900g"
    ),
    
    1  =>   array(
        "id" =>"2",
        "nome" => "Marmita Verde",
        "img" => "./img/Vegana.jpg",
        "Descriçao" => "venha experimentar",
        "preço" => "R$20,00",
        "ingredientes" => "Brocolis, pasta de abacate, ovo, couve e rucula",
        "peso" => "900g"

    ),
    2  =>   array(
        "id" =>"3",
        "nome" => "Marmita FIT",
        "img" => "./img/MarmitaFIT.jpg",
        "Descriçao" => "venha experimentar",
        "preço" => "R$20,00",
        "ingredientes" => "Delicioso Brocolis na manteiga, com cubos de frango",
        "peso" => "900g"

    ),
    3  =>   array(
        "id" =>"4",
        "nome" => "Churras de Domingo",
        "img" => "./img/Churras.jpg",
        "Descriçao" => "venha experimentar",
        "preço" => "R$90,00",
        "ingredientes" => "Suculenta Picanha assada, com fritas",
        "peso" => "900g"

    ),
    4  =>   array(
        "id" =>"5",
        "nome" => "Carreteiro de Vó",
        "img" => "./img/MarmitaVó.jpg",
        "Descriçao" => "venha experimentar",
        "preço" => "R$30,00",
        "ingredientes" => "Arroz carreteiro com frangoa assado",
        "peso" => "900g"

    ),
    5  =>   array(
        "id" =>"6",
        "nome" =>"Big Familly", 
        "img" =>"./img/BigFamilly.jpg",
        "Descriçao" => "venha experimentar",
        "preço" => "R$20,00",
        "ingredientes" => "Arroz, Feijão, Batata, Coxa de frango",
        "peso" => "1,5kg"

    ),
)
?>