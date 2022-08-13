<?php
    require_once('dados/produtos.php');
    
    foreach($produtos as $id => $produto):
?>

<a href="index.php?page=produto&id=<?php echo $id?>">
    <div class="card-produto">
        <img src="images/<?php echo $produto['imagem']?>" alt="<?php echo $produto['nome']?>">
        <h3 class="nome"><?php echo $produto['nome']?></h3>
        <h4 class="tamanho"><?php echo $produto['tamanho']?></h4>
        <h4 class="preco"><?php echo "R$ ".number_format($produtos[$id]['preco'], 2, ",", ".") ?></h4>
        <br>
        <a href="index.php?page=produto&id=<?php echo $id?>"  class="button">Ver mais</a>
    </div>
</a>

<?php
    endforeach
?>