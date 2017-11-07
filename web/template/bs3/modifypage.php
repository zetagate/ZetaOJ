<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title><?php echo $OJ_NAME?></title>  
    <?php include("template/$OJ_TEMPLATE/css.php");?>	    


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="http://cdn.bootcss.com/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">
    <?php include("template/$OJ_TEMPLATE/nav.php");?>	    
      <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron">
	<form action="modify.php" method="post">
<br><br>
<center><table class="table table-bordered">
<tr><td colspan=2 height=40 width=500>&nbsp;&nbsp;&nbsp;정보 수정</tr>
<tr><td width=25%>User ID:
<td width=75%><?php echo $_SESSION['user_id']?>
<?php require_once('./include/set_post_key.php');?>
</tr>
<tr><td>한마디:
<td><input name="nick" class="form-control" size=50 type=text value="<?php echo $row['nick']?>" >
</tr>
<tr><td>비밀번호(필수):
<td><input name="opassword" class="form-control"  size=20 type=password>
</tr>
<tr><td>비밀번호 변경:
<td><input name="npassword" class="form-control"  size=20 type=password>
</tr>
<tr><td>재입력:
<td><input name="rptpassword" class="form-control"  size=20 type=password>
</tr>
<tr><td>소속:
<td><input name="school" class="form-control"  size=30 type=text value="<?php echo $row['school']?>" >
</tr>
<tr><td>Email(비공개):
<td><input name="email" class="form-control"  size=30 type=text value="<?php echo htmlentities($row['email'],ENT_QUOTES,"UTF-8")?>" >
</tr>
<tr><td>
<td><input value="Submit" name="submit" type="submit">
&nbsp; &nbsp;
<input value="Reset" name="reset" type="reset">
</tr>
</table></center>
<br>
<a href=export_ac_code.php>Download All AC Source</a>
<br>
      </div>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <?php include("template/$OJ_TEMPLATE/js.php");?>	    
  </body>
</html>
