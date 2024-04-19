<?php

namespace Marco\Study;

require_once './vendor/autoload.php';

//Sistema da IntegratedAirLines
$sistema = new IntegratedAirlines();

// Adicionar aeroportos
$aeroporto1 = new Aeroporto('Aeroporto de São Paulo', 'NonSei', '014221', 3, 3, new Cidade('São Paulo'), new Porte("Médio"));
$aeroporto2 = new Aeroporto('Aeroporto de Guarulhos', 'NonSei', '048219', 3, 3, new Cidade('São Paulo'), new Porte("Grande"));

//Adicionando os aeroportos da Integrated
$sistema->addAeroporto($aeroporto1);
$sistema->addAeroporto($aeroporto2);

//Piloto
$piloto = new Piloto('Juscelino Firmino', 'juscefirmino@gmail.com', 5000, 1000, 'Jato');

// Dois comissários
$comissario1 = new Comissario('Maria', 'maria@gol.com.br', 2500, true);
$comissario2 = new Comissario('Pedro', 'Pedro@gol.com.br', 2500, true);

// Adicionar aeronaves
$aeronave1 = new Aeronave('Boeing 747', 500, 'Disponível');
$aeronave2 = new Aeronave('Airbus A380', 600, 'Disponível');
$sistema->addAeronave($aeronave1); //Adicionei Aeronaves ao Integrado
$sistema->addAeronave($aeronave2); //Adicionei Aeronaves ao Integrado

// Adicionar voos
$voo1 = new Voo($aeroporto1, $aeroporto2, DateTime::createDateTime('2024-04-10 08:00:00'), DateTime::createDateTime('2024-04-10 10:30:00'), $aeronave1, 'Agendado');
$sistema->addVoo($voo1);

// Adicionar usuários
$usuario1 = new Usuario('Juscelino Junior', 'Juscelino@gmail.com', '14876423938');
$usuario2 = new Usuario('Ivan Ferreira', 'IvanFerreira@gmail.com', '14876423938');
$sistema->addUsuario($usuario1);
$sistema->addUsuario($usuario2);

// Bagagem dos passageiros
$bagagem1 = new Bagagem('BAG912', 20);
$bagagem2 = new Bagagem('BAG281', 15);
$usuario1->addBagagem($bagagem1);
$usuario2->addBagagem($bagagem2);


$pessoa1 = new Pessoa('Juscelino Junior', 'Juscelino@gmail.com');
$pessoa2 = new Pessoa('Ivan Ferreira', 'IvanFerreira@gmail.com');

// Adicionar passagens
$passagem1 = new Passagem('VAMOLA1948', 500.00, $voo1, $pessoa1);
$passagem2 = new Passagem('SALVE19412', 600.00, $voo1, $pessoa2);

//Adicionada as passagens no sistema da Integrated
$sistema->addPassagem($passagem1);
$sistema->addPassagem($passagem2);

echo "------------------------------------------------------------------------------------------" . PHP_EOL;
//Aeronave
echo "Aeronave: ";
echo $aeronave1->getModelo();

echo PHP_EOL;

//Check-In passageiros
echo "Passageiros: " . PHP_EOL;
$checkin1 = new Checkin($usuario1, $passagem1);
$checkin2 = new Checkin($usuario2, $passagem2);
if ($checkin1->validar($usuario1, $passagem1)) {
  echo "Check-in de {$usuario1->getNome()} confirmado" . PHP_EOL;
}
if ($checkin2->validar($usuario2, $passagem2)) {
  echo "Check-in de {$usuario2->getNome()} confirmado" . PHP_EOL;
}
echo PHP_EOL;

//Quais os voos da gigantesca Integrated Air Lines?
echo "Qual voo?:" . PHP_EOL;
foreach ($sistema->getVoos() as $voo) {
  echo "Voo de {$voo->getOrigem()->getNomeAeroporto()} para {$voo->getDestino()->getNomeAeroporto()}, Status: {$voo->getStatus()}" . PHP_EOL;
  echo "Horário de Saída: {$voo->getHorarioSaida()->format('Y-m-d H:i:s')}" . PHP_EOL;
  echo "Horário de Chegada: {$voo->getHorarioChegada()->format('Y-m-d H:i:s')}" . PHP_EOL;

  echo PHP_EOL;
  echo "Equipe de viagem: " . PHP_EOL;
  echo "Nome do Piloto: " . $piloto->getNome() . PHP_EOL;
  echo "Nome do(a) Comissário(a): " . $comissario1->getNome() . PHP_EOL;
  echo "Nome do(a) Comissário(a): " . $comissario2->getNome() . PHP_EOL;

  echo PHP_EOL;

  echo "/// PÓS CHEGADA NO DESTINO" . PHP_EOL;
  $checkout1 = new Checkout($usuario1, $passagem1);
  $checkout2 = new Checkout($usuario2, $passagem2);

  //Checkout
  echo PHP_EOL;
  $checkout1->realizarCheckout();
  $checkout2->realizarCheckout();
  $voo1->setStatus("Status: Voo Finalizado");
  ;
  echo $voo1->getStatus();

  echo PHP_EOL;

  echo "------------------------------------------------------------------------------------------" . PHP_EOL;


  echo "------------------------------------------------------------------------------------------" . PHP_EOL;

  echo "------------------------------------------------------------------------------------------" . PHP_EOL;
}