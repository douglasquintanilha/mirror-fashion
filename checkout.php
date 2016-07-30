<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mirror Fashion</title>
    <meta name="viewport" content="width=device-width">
</head>
<body>
    <h1>Ótima escolha!</h1>
    <p>Obrigado por comprar no Mirro Fashion. Preencha seus dados para efetivar a compra.</p>
    <h2>Sua compra</h2>
    <dl>
        <dt>Cor</dt>
        <dd><?= $_POST['cor']?></dd>    
        <dt>Tamanho</dt>
        <dd><?= $_POST['tamanho'] ?></dd>
    </dl>
</body>
</html>
