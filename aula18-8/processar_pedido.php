<?php
session_start();


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $consumo = $_POST['consumo'] ?? '';
    $pao = $_POST['pao'] ?? '';
    $proteina = $_POST['proteina'] ?? '';
    $queijo = $_POST['queijo'] ?? '';
    $vegetais = $_POST['vegetais'] ?? [];
    $molhos = $_POST['molhos'] ?? [];
    $pagamento = $_POST['pagamento'] ?? '';
    
   
    if (empty($consumo) || empty($pao) || empty($proteina) || empty($queijo) || empty($pagamento)) {
        $_SESSION['erro'] = 'Por favor, preencha todos os campos obrigatórios.';
        header('Location: index.php');
        exit;
    }
    
   
    $_SESSION['pedido'] = [
        'consumo' => $consumo,
        'pao' => $pao,
        'proteina' => $proteina,
        'queijo' => $queijo,
        'vegetais' => $vegetais,
        'molhos' => $molhos,
        'pagamento' => $pagamento,
        'data_pedido' => date('d/m/Y H:i:s')
    ];
    
    header('Location: resumo_pedido.php');
    exit;
} else {
     header('Location: index.php');
    exit;
}
?>
