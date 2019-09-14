<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Arkademy Bootcamp</title>
    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>

</head>
<body>
    <table style="width:100%" border="1">
        <thead>
            <th>Name</th>
            <th>Work</th>
            <th>Salary</th>
        </thead>
        <tbody id="barisData">
        
        </tbody>
    </table>    

    <script type="text/javascript">
        $.ajax({
            type:"GET",
            data:"",
            url:'ambilData.php',
            success:function(result){
                var objResult=JSON.parse(result);
                $.each(objResult,function(key,val){
                    var barisBaru=$("<tr>");
                    barisBaru.html("<td>"+val.nama+"</td><td>"+val.kerja+"</td><td>"+val.gaji+"</td>");
                    var dataHandler=$("#barisData");
                    dataHandler.append(barisBaru);
                })
            }
        })
    </script>


</body>
</html>