<?php
                
                   
                $fp = fsockopen("tcp://119.146.68.41", 5000, $errno, $errstr);
              
                if (!$fp)
                {
                    $out= "ERROR: $errno - $errstr\n";
                } else
                {
                   fwrite($fp,"MVP666FGF");

                       $out= fread($fp, 8192);
                       $kk= fread($fp, 8192);
                     $out=mb_convert_encoding($out,"utf-8", "GBK"); 
                
                    
                
                    fclose($fp);
                }
$data=$out;
//Bz38x-5y0Az19x-3y1Az19x-3y1


include('go_connect.php');
if(substr($data,0,1)=='A')
    {
    $z=strpos($data,'z');

    $x=strpos($data,'x');
 
    $y=strpos($data,'y');
    
    $zdata=substr($data,$z+1,$x-$z-1);
       $xdata=substr($data,$x+1,$y-$x-1);
    $ydata=substr($data,$y+1,strlen($data)-$y-1);
    if($zdata!='19' && $zdata!='20')
    {   $tip=$zdata;
        $time=date('Y-m-d H:i:s',time());
     $sql="insert into san (time,x,xz,yz,zz) values ('{$time}','{$tip}','{$xdata}','{$ydata}','{$zdata}')";
     mysql_query($sql);
    }
   
 
  
} 
if(substr($data,0,1)=='B')
    {
    $z2=strpos($data,'z');

    $x2=strpos($data,'x');
 
    $y2=strpos($data,'y');
    
    $zdata2=substr($data,$z2+1,$x2-$z2-1);
     $xdata2=substr($data,$x2+1,$y2-$x2-1);
    $ydata2=substr($data,$y2+1,strlen($data)-$y2-1);
    if($zdata2!='21' && $zdata2!='22')
    {   $tip2=$zdata2;
        $time=date('Y-m-d H:i:s',time());
     $sql="insert into san2 (time,x,xz,yz,zz) values ('{$time}','{$tip2}','{$xdata2}','{$ydata2}','{$zdata2}')";
     mysql_query($sql);
    }
   
   
  
}         
 

?>
   <!DOCTYPE html>  
<html>

<head>  
<meta charset="utf-8">  
    <meta http-equiv="refresh" content="2">
<title>远程山体检测系统</title>  
<link rel="stylesheet" href="http://yui.yahooapis.com/3.0.0/build/cssreset/reset-min.css">  
<style>  
    .col{padding:10px;width:100%;background-color:#FAEBD7;float:left;}
.fluid-input{display:inline-block;width:100%;_overflow:hidden;}
.fluid-input-inner{display:block;padding-right:10px;#zoom:1;}
.fluid-input .text, .fluid-input textarea{border:2px #ccc solid;padding:3px;width:250px;}
.fluid-input textarea{height:100px;}
    #title{
        font-size:30px;
        color:#DEB887;
    }
    #all{
        position:center;
      
    }
            
</style>  
</head>

<body>
   <img src="http://tryagain3-photo.stor.sinaapp.com/2aca9bccbbb368156b85ec2edb1075c6.jpg" width=100% height=120px>
<div id='all'>
     <center>
         <div id='title'>远程山体检测系统</div>
<div class="col">  
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <meta name="viewport" content="width=device-width, initial-scale=1">

<h2>节点一数据</h2>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Z轴：<input type='text' value="<?php include('go_connect.php'); $sql='select * from san order by time desc';
$result=mysql_query($sql);
$row=mysql_fetch_array($result);
if(!isset($row['zz']))
   echo $zdata;
   else
   echo $row['zz'];
?>">度<br>
    
X轴加速度：<input type='text' value="<?php include('go_connect.php'); $sql='select * from san order by time desc';
$result=mysql_query($sql);
$row=mysql_fetch_array($result);
if(!isset($row['xz']))
   echo $xdata;
   else
   echo $row['xz'];?>">g<br>
    
Y轴加速度：<input type='text' value="<?php include('go_connect.php'); $sql='select * from san order by time desc';
$result=mysql_query($sql);
$row=mysql_fetch_array($result);
if(!isset($row['yz']))
   echo $ydata;
   else
   echo $row['yz'];?>">g<br>
    
Z轴中异常数据<b class="fluid-input"><b class="fluid-input-inner"><textarea><?php include('go_connect.php');
$sql="select distinct x,time from san order by time desc";
$result=mysql_query($sql);
while($row=mysql_fetch_array($result)){

echo $row['time']." ";
echo $row['x']."\n";
}


?></textarea></b></b>
    
    

</div>
    <div class="col">  
  


<h2>节点二数据</h2>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Z轴：<input type='text' value="<?php include('go_connect.php'); $sql='select * from san2 order by time desc';
$result=mysql_query($sql);
$row=mysql_fetch_array($result);
if(!isset($row['zz']))
   echo $zdata2;
   else
   echo $row['zz'];?>">度<br>
        
X轴加速度：<input type='text' value="<?php include('go_connect.php'); $sql='select * from san2 order by time desc';
$result=mysql_query($sql);
$row=mysql_fetch_array($result);
if(!isset($row['xz']))
   echo $xdata2;
   else
   echo $row['xz'];?>">g<br>
        
Y轴加速度：<input type='text' value="<?php include('go_connect.php'); $sql='select * from san2 order by time desc';
$result=mysql_query($sql);
$row=mysql_fetch_array($result);
if(!isset($row['yz']))
   echo $ydata2;
   else
   echo $row['yz'];?>">g<br>
        
Z轴中异常数据<b class="fluid-input"><b class="fluid-input-inner"><textarea><?php include('go_connect.php');
$sql="select distinct x,time from san2 order by time desc";
$result=mysql_query($sql);
while($row=mysql_fetch_array($result)){

echo $row['time']." ";
echo $row['x']."\n";
}


?></textarea></b></b>
    
   
  
</div>
    </center>
    </div>
</body>

</html>  
