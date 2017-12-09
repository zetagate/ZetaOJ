<!DOCTYPE html>
<html>
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
<hr>
<center>
  <!--<font size="+3"><?php echo $OJ_NAME?> Online Judge FAQ</font>-->
  <font size="+3">Zeta Online Judge FAQ</font>
</center>
<hr>
<!--
<table border="1">
  <tr>
    <td>C:</td>
    <td><font color=blue>gcc Main.c -o Main  -fno-asm -O2 -Wall -lm -static -std=c99 -DONLINE_JUDGE</font></td>
  </tr>
  <tr>
    <td>C++:</td>
    <td><font color=blue>g++ -fno-asm -Wall -lm -static -std=c++11 -DONLINE_JUDGE -o Main Main.cc</font></td>
  </tr>
  <tr>
    <td>Pascal:</td>
    <td><font color=blue>fpc Main.pas -oMain -O1 -Co -Cr -Ct -Ci </font></td>
  </tr>
  <tr>
    <td>Java:</td>
    <td><font color="blue">javac -J-Xms32m -J-Xmx256m Main.java</font>
    <br>
    <font size="-1" color="red">*Java has 2 more seconds and 512M more memory when running and judging.</font>
    </td>
  </tr>
</table>
-->
컴파일 정보입니다.
<pre>
<b>C</b>
gcc 5.4.0
gcc Main.c -o Main -fno-asm -O2 -Wall -lm --static -std=<b>c99</b> -DONLINE_JUDGE
</pre>
<pre>
<b>C++</b>
clang 3.8.0
<b>clang++</b> -fno-asm -O2 -Wall -lm --static -std=<b>c++14</b> -DONLINE_JUDGE -o Main Main.cc
</pre>
<pre>
<b>Java</b>
javac 1.8.0_131
javac -J-Xms32m -J-Xmx256m Main.java
</pre>
<pre>
<b>Python</b>
준비중입니다...
</pre>

</font>
<hr>
<font color=green>Q</font> : 입력과 출력은 어떻게 하나요?<br>
  <font color=red>A</font> : 채점을 위해서 입력은 stdin을 통해 받게 되며, stdout을 통해 출력하게 됩니다.
사용자가 작성한 프로그램은 파일 입출력을 하는 것이 금지되어 있으며, 이러한 경우, <font color=red>런타임 에러</font> 를 받게 됩니다.<br>
  <br>
다음은 1001번 문제를 각 언어로 푼 예시코드입니다.
<br>
<b>C++</b>:<br>
<pre><font color="blue">
#include &lt;iostream&gt;
using namespace std;
int main(){
    int a, b;
    cin >> a >> b;
    cout << a+b << endl;
    return 0;
}
</font></pre>
<br><br>
<b>C</b>:<br>
<pre><font color="blue">
#include &lt;stdio.h&gt;
int main(){
    int a, b;
    scanf("%d %d", &amp;a, &amp;b);
    printf("%d\n", a+b);
    return 0;
}
</font></pre>
<br><br>
<b>Java</b>:<br>
<pre><font color="blue">
import java.util.*;
public class Main{
    public static void main(String args[]){
        Scanner cin = new Scanner(System.in);
        int a, b;
        a = cin.nextInt();
        b = cin.nextInt();
	System.out.println(a + b);
    }
}
</font></pre>

<hr>
<font color=green>Q</font> : 제가 테스트했을 때는 잘 되는데 여기 올리면 Error가 뜹니다. 왜 그런가요?<br>
<font color=red>A</font> : 일반적으로 MS-VC++(Visual Studio)를 사용했을 경우에 발생하며, GCC와의 차이점에 의하여 발생합니다. 표준 문법이나 함수를 사용하여 다시 제출해 보세요.<br>
<hr>

<font color=green>Q</font> : 정답비교 기능이 작동하지 않습니다. <br>
<font color=red>A</font> : 출력이 한 줄인 문제인 경우, 개행을 해야 정답비교 결과를 볼 수 있습니다.<br>
<hr>

<font color=green>Q</font> : 채점 결과의 뜻은 무엇인가요?<br>
<font color=red>A</font> : 채점 결과의 의미는 다음과 같습니다.<br>
<font color=blue>대기중</font> : 채점이 밀려서 아직 완료되지 않은 상태입니다. 
<br>
<font color=blue>재채점 대기중</font> : 테스트 데이터를 수정했을 경우에 해당 제출 코드를 다시 채점하게 되어 대기 상태로 들어가는 경우입니다.
<br>
<font color=blue>컴파일 중</font> : 컴파일 중입니다.<br>
<font color="blue">채점 중</font>: 채점 진행 중입니다.<br>
<font color=blue>맞았다!</font> : 모든 테스트 데이터를 통과한 경우입니다!<br>
<font color=blue>Presentation Error</font> : 출력 형식이 잘못된 경우입니다.<br>
<font color=blue>틀렸다!</font> : 답이 틀린 케이스가 존재합니다.<br>
<font color=blue>시간 초과</font> : 제한시간 초과입니다.<br>
<font color=blue>메모리 초과</font> : 메모리 제한 초과입니다.<br>
<font color=blue>출력 초과</font> : 출력이 너무 많은 경우입니다. 무한 루프에 빠졌을 경우 일어날 수 있습니다.<br>
<font color=blue>런타임 에러</font> : 실행 중에 에러가 발생한 경우입니다.<br>
<font color=blue>컴파일 에러</font> : 컴파일 에러가 발생하여 컴파일이 실패한 경우입니다.<br>
  <br>

<hr>
<center>
<!--
  <font color=green >질문 게시판 : <a href="bbs.php"><php echo $OJ_NAME?></a></font>
-->
</center>
<hr>
<center>
  <table width=100% border=0>
    <tr>
      <td align=right width=65%>
      <a href = "index.php"><font color=red><?php echo $OJ_NAME?></font></a> 
      <a href = "https://github.com/zhblue/hustoj"><font color=red>17.10.25</font></a></td>
    </tr>
  </table>
</center>
      </div>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <?php include("template/$OJ_TEMPLATE/js.php");?>	    

  </body>
</html>
