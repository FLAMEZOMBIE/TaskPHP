<!DOCTYPE html>
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
   <title>Belajar PHP</title>
</head>
<body>
   <fieldset id ="ini">
    <h2><label for="ini">Input Data</label></h2>
   <form method="GET" action="prosesData.php">
    <table>
   <tr>
        <td><label for="nama">Nama </label></td>
        <td>:</td>
        <td><input type="text" name="nama"></td>
    </tr>
    <tr>
        <td><label for="email">E-mail</label></td>
        <td>:</td>
        <td><input type="email" name="email"></td>
    </tr>
    <tr>
    <td><input type="submit" value="Proses Data" name="submit"></td>
    </tr>   
</table> 
</form>
</fieldset>
</body>
</html>