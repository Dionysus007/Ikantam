<h2><p>
        <b> Список загружаемых файлов </b>
    </p>
</h2>

<table border="1" >
    <tr>
        <th align="center"> Код файла </th>
        <th align="center">Путь к файлу</th>
        <th align="center"> Название файла </th>
    </tr>
    <? include_once "inc_file_show.php"; ?>
</table>

<h2><p>
        <b> Форма для загрузки файлов </b>
    </p>
</h2>
<form action="upload.php" method="post" enctype="multipart/form-data">
    <input type="file" name="filename"><br> 
    <input type="submit" value="Загрузить"><br>
</form>