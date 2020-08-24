<?php 

$filiais = [
    'adamantina' => [
        "ANA RITA DE CASSIA SILVA OLIVEIRA", 
        "CARLINDO SANTOS ARAUJO",
        "VANGELI SANDRA FEITOZA RAMOS",
        "JOSE EDIMILSON PEREIRA",
        "GILMARA ARAUJO SANTANA",
        "IBERTO GALDINO NUNES",
        "HELENICE FELICIANO MANFRE",
    ],
    'borborema' => [
        "LUCAS CASTILHO LOPES",
        "SILVANA BROETTO BERTOLDO",
        "RONALDO THIAGO MACHADO GUIMARAES",
        "GISELIA MARIA DA CONCEICAO",
        "HUGO SILVESTRE DE ANDRADE",
        "RAFAEL DA SILVA MARQUES PEREIRA",
        "LUZIA DE MATTOS",
        "LEIDIANE GONCALVES DA SILVA",
        "ADRIANO CARDOSO LYRA",
        "CELINO FERREIRA DA SILVA"	,
        "LISA HELENA MINITTI ESTEVAM PAOLUCCI",
        "HELENA MARIA ALVES MANFRE",
        "JOSE GERALDO CAMARGO PEREIRA",
        "ADRIANO ROQUE DE OLIVEIRA",
        "PEDRO CEZAR MARTENDAL",
        "ELISANGELA BARBOSA TILLER",
        "LEILANE DOS SANTOS OLIVEIRA",
        "ALESSANDRA DANIELE MESQUITA",
        "SELMA APARECIDA DE OLIVEIRA",
        "IONICA DA SILVA VIEIRA",
        "GUSTAVO CARPES POSSAMAI",
    ],
    'cajamar' => [
        "OSVALDO FONSECA",
        "LUCIENI COSTA OLIVEIRA",
        "JOSE NATALINO DO ROSARIO PEREIRA",
        "NELSON DA CRUZ SANTOS",
        "JOSINA PEREIRA PELEGRINO",
        "FRANCISCO ANTONIO DE MORAIS DA SILVA",
        "CLARICE BUENO DA SILVA",
        "RACHEL GALOTE FIGUEIREDO",
        "JORDANA PEREIRA DE SOUZA",
        "VALERIA ROCHA MENDES LIMA",
        "NILTON GOMES DE SOUSA",
        "Elida Paedra Alves De Sousa",
        "ELIENE SILVA VIANA",
        "STEFANIA APARECIDA DE FARIA",
        "IRAILMA SILVA CEZAR",
    ],
];

?>

<table border = "1">
    <tr>
        <th>Nome</th>
        <th>E-mail</th>
        <th>Filial</th>
    </tr>

<!--O primeiro foreach recebe os dados armazenado em filiais, ou seja, adamantina, borborema e cajamar, neste mesmo foreach
é passado o indíce dos nomes que estão dentro. -->   
    <?php foreach($filiais as $filial => $funcionarios): ?> 
        <!--Neste foreach é chamado o indíce de funcionarios declarado anteriormente para verificar todos os nomes existentes
        dentro do array -->
        <?php foreach($funcionarios as $funcionario): ?>
            <tr>
                <td><?php echo $funcionario; ?></td>
                <td><?php   
                $ultimoNome = substr($funcionario, strrpos($funcionario, ' ') + 1);
                $provedor = '@empresax.com.br';
                $separator = '_';
                $funcionario = strtolower($funcionario[0] . $separator .  $ultimoNome . $provedor);
                echo $funcionario;
                ?></td>
                <td><?php echo $filial; ?></td>
            </tr>
        <?php endforeach; ?>
    <?php endforeach; ?> 
</table>
