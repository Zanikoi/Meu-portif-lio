<?php
   $nome = addcslashes($_POST['nome']);
   $email = addcslashes($_POST['email']);
   $celular = addcslashes($_POST['celular']);
   $msg = addcslashes($_POST['msg']);

   $para = "adam.andrade@alu.ufc.br";
   $assunto = "Email do portifólio";

   $corpo = "Nome: ".$nome."\n".
   "Email: ".$email."\n".
   "Celular: ".$celular."\n".
  "Mensagem: ".$msg;

   $cabeca = "From: adam.andrade.2002@gmail.com".$email."\n"."Reply-to: ".$email."\n"."X=Mailer:PHP/".phpversion();

   if(mail($para, $assunto, $corpo, $cabeca)){
        echo("E-mail enviado com sucesso");
   }else {
        echo("Houve um problema ao enviar o email");
   }

?>