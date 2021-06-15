<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
		div[id=d1] {
			background-color: #3CBC8D;
			color: white;
			padding:20px;
		}
		
	</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("input").change(function(){
  	var i; 
  	var subCount=0; 
  	var s; var s1=0; var s2=0; var s3=0; var s4=0; var s5=0; var s6=0;
  	var sum1=0;
  	try{
    for (i = 1; i <= 10; i++)
    {
    	s= "t"+i;
       if(document.getElementById(s.toString()).value >0){       	s1++;
       	var x = document.getElementById(s.toString()).value;
       	if(x<4 || x>10){ 
			alert("please enter valid value");   
			sum1=sum1+0;
       	} else if(x<5){       		sum1=sum1+44;       		
       	}else if(x<6){       		sum1=sum1+49;       		
       	}else if(x<7){       		sum1=sum1+54;       		
       	}else if(x<8){       		sum1=sum1+59;       		
       	}else if(x<9){       		sum1=sum1+65;       		
       	}else if(x<10){       		sum1=sum1+75;       		
       	}else if(x<11){       		sum1=sum1+92;       		
       	} 
       }
    } 
    subCount=subCount+s1;
    sum2=0;
    for (i = 11; i <= 20; i++)
    {
    	s= "t"+i;
       if(document.getElementById(s.toString()).value >0){       	s2++;
       	var x = document.getElementById(s.toString()).value;
       	if(x<4 || x>10){ sum2=sum2+0;
			alert("please enter valid value");  
       	} else if(x<5){       		sum2=sum2+44;       		
       	}else if(x<6){       		sum2=sum2+49;       		
       	}else if(x<7){       		sum2=sum2+54;       		
       	}else if(x<8){       		sum2=sum2+59;       		
       	}else if(x<9){       		sum2=sum2+65;       		
       	}else if(x<10){       		sum2=sum2+75;       		
       	}else if(x<11){       		sum2=sum2+92;       		
       	} 
       }
    }  	
    subCount=subCount+s2;



	sum3=0;
    for (i = 21; i <= 30; i++)
    {
    	s= "t"+i;
       if(document.getElementById(s.toString()).value >0){       	s3++;
       	var x = document.getElementById(s.toString()).value;
       	if(x<4 || x>10){ sum3=sum3+0;
			alert("please enter valid value");  
       	} else if(x<5){       		sum3=sum3+44;       		
       	}else if(x<6){       		sum3=sum3+49;       		
       	}else if(x<7){       		sum3=sum3+54;       		
       	}else if(x<8){       		sum3=sum3+59;       		
       	}else if(x<9){       		sum3=sum3+65;       		
       	}else if(x<10){       		sum3=sum3+75;       		
       	}else if(x<11){       		sum3=sum3+92;       		
       	} 
       }
    } 
	subCount=subCount+s3;

	sum4=0;
    for (i = 31; i <= 40; i++)
    {
    	s= "t"+i;
       if(document.getElementById(s.toString()).value >0){       	s4++;
       	var x = document.getElementById(s.toString()).value;
       	if(x<4 || x>10){ sum4=sum4+0;
			alert("please enter valid value");  
       	} else if(x<5){       		sum4=sum4+44;       		
       	}else if(x<6){       		sum4=sum4+49;       		
       	}else if(x<7){       		sum4=sum4+54;       		
       	}else if(x<8){       		sum4=sum4+59;       		
       	}else if(x<9){       		sum4=sum4+65;       		
       	}else if(x<10){       		sum4=sum4+75;       		
       	}else if(x<11){       		sum4=sum4+92;       		
       	} 
       }
    } 
	subCount=subCount+s4;

	sum5=0;
    for (i = 41; i <= 50; i++)
    {
    	s= "t"+i;
       if(document.getElementById(s.toString()).value >0){       	s5++;
       	var x = document.getElementById(s.toString()).value;
       	if(x<4 || x>10){ sum5=sum5+0;
			alert("please enter valid value");  
       	} else if(x<5){       		sum5=sum5+44;       		
       	}else if(x<6){       		sum5=sum5+49;       		
       	}else if(x<7){       		sum5=sum5+54;       		
       	}else if(x<8){       		sum5=sum5+59;       		
       	}else if(x<9){       		sum5=sum5+65;       		
       	}else if(x<10){       		sum5=sum5+75;       		
       	}else if(x<11){       		sum5=sum5+92;       		
       	} 
       }
    } 
	subCount=subCount+s5;

	sum6=0;
    for (i = 51; i <= 60; i++)
    {
    	s= "t"+i;
       if(document.getElementById(s.toString()).value >0){       	s6++;
       	var x = document.getElementById(s.toString()).value;
       	if(x<4 || x>10){ sum6=sum6+0;
			alert("please enter valid value");  
       	} else if(x<5){       		sum6=sum6+44;       		
       	}else if(x<6){       		sum6=sum6+49;       		
       	}else if(x<7){       		sum6=sum6+54;       		
       	}else if(x<8){       		sum6=sum6+59;       		
       	}else if(x<9){       		sum6=sum6+65;       		
       	}else if(x<10){       		sum6=sum6+75;       		
       	}else if(x<11){       		sum6=sum6+92;       		
       	} 
       }
    } 

	subCount=subCount+s6;



     document.getElementById("percent").innerHTML = subCount; 
     document.getElementById("Sem1").innerHTML = sum1; 
     document.getElementById("Sem1p").innerHTML = Math.round(sum1/s1).toFixed(2); 
     document.getElementById("Sem2").innerHTML = sum2; 
     document.getElementById("Sem2p").innerHTML = Math.round(sum2/s2).toFixed(2); 
	 document.getElementById("Sem3").innerHTML = sum3; 
	 document.getElementById("Sem3p").innerHTML = Math.round(sum3/s3).toFixed(2);
	 document.getElementById("Sem4").innerHTML = sum4;
	 document.getElementById("Sem4p").innerHTML = Math.round(sum4/s4).toFixed(2);
     document.getElementById("Sem5").innerHTML = sum5;
	 document.getElementById("Sem5p").innerHTML = Math.round(sum5/s5).toFixed(2); 
     document.getElementById("Sem6").innerHTML = sum6; 
	 document.getElementById("Sem6p").innerHTML = Math.round(sum6/s6).toFixed(2);
     document.getElementById("demo").innerHTML = Math.round((sum1+sum2+sum3+sum4+sum5+sum6)/subCount).toFixed(2); 
 }
    catch(err) {
document.getElementById("demo").innerHTML = err.message;
    }
  });
});
</script>
</head>
<body>
	<center>
	<h1>Heading</h1>
	<div style="width:75%; display: flex;" id="d1"> 
	
<div style="width:20%; display: inline;" >
	Sem-I<br>
 1 .<input type="number" id="t1" /> <br>

 2 .<input type="number" id="t2" /> <br>
 3 .<input type="number" id="t3" /><br>
 4 .<input type="number" id="t4" /><br>
 5 .<input type="number" id="t5" /><br>
 6 .<input type="number" id="t6" /><br>
 7 .<input type="number" id="t7" /><br>
 8 .<input type="number" id="t8" /><br>
 9 .<input type="number" id="t9" /><br>
10<input type="number" id="t10" /><br>
<table>
	<tr><td>Marks Total: </td><td> <p id="Sem1"></p></td></tr>
	<tr><td>Percentage: </td><td> <p id="Sem1p"></p></td></tr>

</table>
</div>
<div style="width:20%; display: inline;">
	Sem-II<br>
1 .<input type="number" id="t11" /> <br>
2 .<input type="number" id="t12" /> <br>
3 .<input type="number" id="t13" /><br>
4 .<input type="number" id="t14" /><br>
5 .<input type="number" id="t15" /><br>
6 .<input type="number" id="t16" /><br>
7 .<input type="number" id="t17" /><br>
8 .<input type="number" id="t18" /><br>
9 .<input type="number" id="t19" /><br>
10<input type="number" id="t20" /><br>
<table>
	<tr><td>Marks Total: </td><td> <p id="Sem2"></p></td></tr>
	<tr><td>Percentage: </td><td> <p id="Sem2p"></p></td></tr>

</table>
</div> 
<div style="width:20%; display: inline;">
	Sem-III<br>
1 .<input type="number" id="t21" /> <br>
2 .<input type="number" id="t22" /> <br>
3 .<input type="number" id="t23" /><br>
4 .<input type="number" id="t24" /><br>
5 .<input type="number" id="t25" /><br>
6 .<input type="number" id="t26" /><br>
7 .<input type="number" id="t27" /><br>
8 .<input type="number" id="t28" /><br>
9 .<input type="number" id="t29" /><br>
10<input type="number" id="t30" /><br>
<table>
	<tr><td>Marks Total: </td><td> <p id="Sem3"></p></td></tr>
	<tr><td>Percentage: </td><td> <p id="Sem3p"></p></td></tr>
</table>
</div>
<div style="width:20%; display: inline;">
	Sem-IV<br>
1 .<input type="number" id="t31" /> <br>
2 .<input type="number" id="t32" /> <br>
3 .<input type="number" id="t33" /><br>
4 .<input type="number" id="t34" /><br>
5 .<input type="number" id="t35" /><br>
6 .<input type="number" id="t36" /><br>
7 .<input type="number" id="t37" /><br>
8 .<input type="number" id="t38" /><br>
9 .<input type="number" id="t39" /><br>
10<input type="number" id="t40" /><br>
<table>
	<tr><td>Marks Total: </td><td> <p id="Sem4"></p></td></tr>
	<tr><td>Percentage: </td><td> <p id="Sem4p"></p></td></tr>
</table>
</div>

<div style="width:20%; display: inline;">
	Sem-V<br>
1 .<input type="number" id="t41" /> <br>
2 .<input type="number" id="t42" /> <br>
3 .<input type="number" id="t43" /><br>
4 .<input type="number" id="t44" /><br>
5 .<input type="number" id="t45" /><br>
6 .<input type="number" id="t46" /><br>
7 .<input type="number" id="t47" /><br>
8 .<input type="number" id="t48" /><br>
9 .<input type="number" id="t49" /><br>
10<input type="number" id="t50" /><br>
<table>
	<tr><td>Marks Total: </td><td> <p id="Sem5"></p></td></tr>
	<tr><td>Percentage: </td><td> <p id="Sem5p"></p></td></tr>
</table>
</div>



<div style="width:20%; display: inline;">
 Sem-VI<br>
1 .<input type="number" id="t51" /> <br>
2 .<input type="number" id="t52" /> <br>
3 .<input type="number" id="t53" /><br>
4 .<input type="number" id="t54" /><br>
5 .<input type="number" id="t55" /><br>
6 .<input type="number" id="t56" /><br>
7 .<input type="number" id="t57" /><br>
8 .<input type="number" id="t58" /><br>
9 .<input type="number" id="t59" /><br>
10<input type="number" id="t60" /><br>
<table>
	<tr><td>Marks Total: </td><td> <p id="Sem6"></p></td></tr>
	<tr><td>Percentage: </td><td> <p id="Sem6p"></p></td></tr>
</table>
</div>

</div>
<br>
<br>

<div id="" style="width:50%; display: inline;"><h4 id="" style="color: darkblue;">
Total Subject:</h4>	</div>
<div id="percent" name="percent" style="width:20%; display: inline; ">
</div><strong>
<div id="" style="width:20%; display: inline; "><h2 id="" style="color: blue;">Overall Percentage: </h2> </div> 
<div id="demo" style="width:20%; display: inline; "></div></strong>
</center>
</body>
</html>
