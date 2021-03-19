<html> 
    <head> 
        <title></title> 
    </head> 
    <body> <h2> Pert4_perkalian</h2> 

    <form method="post" action=""> 
    MASUKKAN ANGKA <input type="text" name="bil1" /><br />
    <input type="submit" name="submit" value="Submit" /> 
    <input type="reset" name="reset" value="Reset" /> 
    </form> 

    <?php
    if(isset($_POST['submit']))
    {
    $bil1= $_POST['bil1'];
    for($a=1;$a<=$bil1;$a++)
    {
        for($b=1;$b<=$bil1;$b++)
        {
        $total=$a*$b;
        echo "<p> $a x $b=$total";
        }
    }
    }
?>
</body> 
</html>