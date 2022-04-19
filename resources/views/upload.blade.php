<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload de imagens</title>
</head>
<body>
    
    <form method="post" enctype="multipart/form-data" action="recebeUpload.php">
        Selecione uma imagem: 
        <input name="arquivo" type="file"/>
        <br />
        <input type="submit" value="Salvar"/>
    </form>
    
</body>
</html> 