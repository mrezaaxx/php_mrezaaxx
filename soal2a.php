<?php 
    if (isset($_POST['submit'])) {
        return true;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form id="form" action="">
    <label for="name">Nama Anda :</label>
    <input type="text" name="name" id="name" width='10px'>

    <button type="submit" name="submit" onclick="return('location : soal2b.php')">Submit</button>
    </form>
</body>
</html>
<script>
    (function()
    {
        $('#form').on('submit', function(e){
        e.preventDefault()
        insert()
        dataDiri = JSON.parse(localStorage.getItem(dataDiri))||[]
        console.log(dataDiri)
        return dataDiri
        })
    })
    function insert(){
     const data = $("#form").serializeArray()
     let dataDiri = JSON.parse(localStorage.getItem(dataDiri))||[]
     let newData = {}
     data.forEach(function(item, index){
            let name = item['name']
            newData[name] = value
        })
    localStorage.setItem('dataDiri', JSON.stringify([...dataDiri, newData]))
    return newData   
    }

</script>
