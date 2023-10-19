<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <style>
        div{
            padding: 20px;
        }
        .header,.footer{
            background-color: yellow;
        }
        </style> -->
        <!-- <base href="http://localhost/MVC_TTDTKP/"> -->
        <base href="http://localhost/MVC_TTDTKP/">
        <link rel="stylesheet" href="./public/css/style.css">

        <base rel="stylesheet" href="../../public/css/style.css">
        <base rel="stylesheet" href="index.php?public/css/style.css">
        <base rel="stylesheet" href="public/css/style.css">
    <title>Document</title>
</head>
<body>
    <h2>Áo Đẹp</h2>
    <h3> 
        <?php
        //   print_r($data["number"]);
        echo $data["number"];
        while ($row = mysqli_fetch_array($data['SV'])) {
        echo $row['hoten'];
        }
        ?>
    </h3>
    <div class="herder">header</div>
    <div class="content">
        <?php
            require_once "./mvc/views/page/" . $data['page']. ".php";        
        ?>
    </div>
    <div class="footer">footer</div>
</body>
</html>