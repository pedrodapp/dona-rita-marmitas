<?php
    if(isset($_GET['action']))
        $action = $_GET['action'];
    else
        $action = "form";

    if($action == "form"):
?>
<form action="?page=contato&action=enviar" method="POST" class="form-contact">
    <div><h1>Pedidos</h1></div>
    <div>
        <input type="text" placeholder="Nome" name="nome">
    </div>
    <div>
        <input type="email" placeholder="E-mail" name="email">
    </div>
    <div>
        <input type="text" placeholder="Telefone" name="telefone">
    </div>
    <div>
        <textarea name="mensagem" placeholder="Coloque as informações do seu pedido e entraremos em contato" rows="9"></textarea>
    </div>
    <div>
        <button class="form-button">Fazer pedido</button>
    </div>
</form>

<style>

    .form-contact h1 {
      margin-top: 10px;
    }
    
    .form-contact {
      width: 100%;
    }
    
    .form-contact div {
      text-align: center;
    }
    
    .form-contact input,
    textarea {
      font-family: inherit;
      font-size: 16px;
      margin-top: 20px;
      padding: 14px;
      width: 100%;
      border: 1px solid #5ab38f;
      border-radius: 3px;
      background-color: #f2fffd;
    }
    
    .form-contact button {
      color: #fff;
      background-color: #6cc4a1;
      padding: 12px;
      border: 0;
      border-radius: 3px;
      margin: 20px 0 20px 0;
      font-size: 20px;
      font-family: inherit;
      min-width: 150px;
      cursor: pointer;
    }
    
    .message {
      border: 1px solid #5ab38f;
      background-color: #f2fffd;
      padding: 40px;
      font-size: 18px;
      text-align: center;
      width: 100%;
      border-radius: 3px;
    }

    .form-button {
        width: 103%;
        text-decoration: none;
        color: #fff;
        background-color: #6cc4a1;
        padding: 12px 48px;
        font-weight: bold;
        border-radius: 2px;
    }

    .form-button:hover {
      background-color: #5ab38f;
      transition: 0.2s;
    }
    
</style>
<?php endif ?>

<?php 
    if($action == "enviar"):
?>
    <div class="message" style="min-height: 55vh; text-align:center; align:center; margin-left:290px; margin-top:50px; margin-bottom:-150px; font-size:22px; line-height:1.7;">
        <strong>Obrigado por pedir conosco.</strong>
        <p>Entraremos em contato pelo seu Whatsapp!</p>
        <br>
        <strong>🛵🛵🛵</strong>        
    </div>
<?php
    endif
?>