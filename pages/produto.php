<?php
    require_once('dados/produtos.php');

    $id = null;

    if(isset($_GET['id'])){
        $id = $_GET['id'];

        if(!isset($produtos[$id]))
            $id = null;
    }
    
    if(is_null($id)){
?>   
<?php
    } else {
?>
    <section class="pagina-produtos">
        <div class="produto-foto">
            <img src="images/<?php echo $produtos[$id]['imagem']?>" alt="<?php echo $produtos[$id]['nome']?>">
        </div>
        <div class="produto-descricao">
            <h1><?php echo $produtos[$id]['nome']?></h1>
            <h2><?php echo "R$ ".number_format($produtos[$id]['preco'], 2, ",", ".") ?> <span class="preco-unidade">/unidade</span></h2>
            <p>
            <?php echo $produtos[$id]['tamanho']?>
            </p>
            <p>
            <?php echo $produtos[$id]['descricao']?>
            </p>
            <div class="produto-botao">
                <a href="index.php?page=contato" class="button">
                    Fazer pedido
                </a>
            </div>
        </div>
    </section>
    <style>

    .pagina-produtos {
        min-height: 55vh;        
        display: flex; 
        align-items: center;        
    }

    .produto-foto {
        width: 45%;      
        margin-right: 80px;
        margin-left: 80px;
    }
    
    .produto-foto img {
        width: 100%; 
        border-radius: 5px;          
    }

    .produto-descricao {
        width: 55%;
        height: 80%;       
    }

    .produto-descricao h1 {
        margin-bottom: 20px;
        font-size: 1.8rem;
    }

    .produto-descricao h2 {
        margin-bottom: 20px;
        font-size: 1.4rem;
    }

    .produto-botao {
        margin-top: 40px;
    }

    .button {
        text-decoration: none;
        color: #fff;
        background-color: #6cc4a1;
        padding: 12px 48px;
        font-weight: bold;
        border-radius: 2px;
    }

    .button:hover {
        background-color: #5ab38f;
        transition: 0.2s;
    }


</style>
<?php
    }
?>

