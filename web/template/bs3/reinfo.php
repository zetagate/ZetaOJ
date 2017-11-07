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
	
<pre id='errtxt' class="alert alert-error"><?php echo $view_reinfo?></pre>
<div id='errexp'>Explain:</div>
<script>
var pats=new Array();
var exps=new Array();
pats[0]=/A Not allowed system call.* /;
exps[0]="허용되지 않는 시스템 호출";
pats[1]=/Segmentation fault/;
exps[1]="접근해서는 안 되는 메모리 영역에 접근";
pats[2]=/Floating point exception/;
exps[2]="부동 소수점 에러(0으로 나눈 것이 있는지 확인)";
pats[3]=/buffer overflow detected/;
exps[3]="버퍼 오버플로우";
pats[4]=/Killed/;
exps[4]="프로세스 죽음";
pats[5]=/Alarm clock/;
exps[5]="시간 초과(무한루프 등)";
function explain(){
//alert("asdf");
var errmsg=document.getElementById("errtxt").innerHTML;
var expmsg="보조 설명：<br>";
for(var i=0;i<pats.length;i++){
var pat=pats[i];
var exp=exps[i];
var ret=pat.exec(errmsg);
if(ret){
expmsg+=ret+":"+exp+"<br>";
}
}
document.getElementById("errexp").innerHTML=expmsg;
//alert(expmsg);
}
explain();
</script>
      </div>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <?php include("template/$OJ_TEMPLATE/js.php");?>	    
  </body>
</html>
