<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.6.14/dist/sweetalert2.all.min.js"></script>
<?php

include_once "config.php";

extract($_POST);

$query = "INSERT INTO `tb_produtos` (`NomeProduto`, `DescricaoProduto`, `PrecoProduto`, `ImagemProduto`, `TextoAlternativoProduto`, `PromoInfoProduto`, `PromoBackgroundProduto`, `DataCriacaoProduto`) VALUES ('$NomeProduto', '$DescProduto', '$PrecoProduto', 'img', '$TxtAlternativo', '$InfoPromo', '$BackProduto', NOW())";

$retorno = mysqli_query($conexao, $query);

?>