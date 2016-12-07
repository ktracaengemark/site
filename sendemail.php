<?php
//if "email" variable is filled out, send email
  if (isset($_REQUEST['email']))  {
  
  //Email information
  $admin_email = "ktracaengemark@gmail.com";
  $name = $_REQUEST['name'];
  $tel = $_REQUEST['tel'];
  $email = $_REQUEST['email'];
  $message = $_REQUEST['message'];
  
  //send email
  $email=$_POST['email'];
  $name=$_POST['name'];
  $tel=$_POST['tel'];
  $message=$_POST['message'];

  $all=
  "email: ".$email."\r\
  ".
  "name: ".$name."\r\
  ".
  "tel: ".$tel."\r\
  ".
  "message: ".$message."\r\
  ";
  
  //Email response
  echo "Obrigado por Contatar a Ktraca!";
  }
  
  //if "email" variable is not filled out, display the form
  else  {
?>

 <form method="post">
  Nome: <input name="name" type="text" /><br />
  Telefone: <input name="tel" type="text" /><br />
  Email: <input name="email" type="text" /><br />
  Mensagem:<textarea name="message" rows="15" cols="40"></textarea><br />
  <input type="submit" value="Submit" />
  </form>
  
<?php
  }
?>