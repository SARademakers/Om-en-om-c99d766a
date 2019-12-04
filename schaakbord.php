<!DOCTYPE HTML>
<html>
    <head>
        <title>Schaak</title>
    </head>
    <body>
        <h1>Schaakbord</h1>
        <table width="400px" cellspacing="0px" cellpadding="0px" border="1px">
<?php
for($row=1;$row<=8;$row++) {
    echo "<tr>";
    for($col=1;$col<=8;$col++) {
        $total=$row+$col;
        if($total%2==0){
        echo "<td height=50px width=80px bgcolor=#FFFFFF></td>";
    }else {
    echo "<td height=50px width=80px bgcolor=#000000></td>";
    }
}
echo "</tr>";
}
?>
        </table>
    </body>
</html>