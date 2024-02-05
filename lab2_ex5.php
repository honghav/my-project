<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab2_Ex5</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
     crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
      integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==
      " crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<style>
    *{padding: 0; box-sizing: border-box; margin: 0;}
    .card{
        width: 19%;
        box-shadow: 0 14px 28px rgba(0,0,0,0.25),
        0 10px 10px rgba(0,0,0,0.22);
        transition: all .3s;
    }
    .image{
        width: 200px;
        height: 200px;
        margin-left: 15px;
       
    }
    .icon{
        padding: 0 2rem 0 30px;
        color: darkgray;
    }
    p{
        margin-top: -20px;
        padding: 0 2rem 0 30px;
        font-size: 15px;
    }
    h5{
        padding: 0 2rem 0 30px;
    }
    .text-dark{
        margin-left: -50px;
    }
    p:hover{
        color: gold;
    }
    .card:hover{
        transform: translateY(20px);
    }
</style>
<body>
    <?php

        // Create array
        $data = [
            [
                "model" => "",
                "name" => "Titan 18 HX A14VI",
                "core" => "i9-14900HX",
                "RAM" => "128GB",
                "SSD" => "4TB",
                "original_price" => "$5,399.99",
                "discount_price" => "",
                "image" => "https://www.goldonecomputer.com/image/cache/catalog/Products/MSI/2024/Gaming%20/MSI-Titan-18-HX-330x409.jpg"
            ],

            [
                "model" => "",
                "name" => "Acer Aspire 5 A515-
                            58GM",
                "core" => "i7 1355U",
                "RAM" => "8GB",
                "SSD" => "512",
                "original_price" => "$649.00",
                "discount_price" => "$699.00",
                "image" => "https://www.goldonecomputer.com/image/cache/catalog/Products/ACER/2023/Gaming%20/Acer-A515-Gaming-330x409.jpg"
            ],
            [
                "model" => "",
                "name" => "Asus Vivobook X415MA_EK769W",
                "core" => "Celeron N4020",
                "RAM" => "4GB",
                "SSD" => "512GB",
                "original_price" => "$289.00",
                "discount_price" => "$359.00",
                "image" => "https://www.goldonecomputer.com/image/cache/catalog/Products/ASUS/2022/X415MA%20GREY-330x409.jpg"
            ],
            [
                "model" => "",
                "name" => "MacBook Pro 16",
                "core" => "M3
                          Max",
                "RAM" => "36GB",
                "SSD" => '1TB / 16.2"',
                "original_price" => "$3,629.00",
                "discount_price" => "",
                "image" => "https://www.goldonecomputer.com/image/cache/catalog/Apple/2023/Mac-Pro-16-M3-Max-1-330x409.jpg"
            ],
            [
                "model" => "",
                "name" => "MacBook Pro 16",
                "core" => "M3
                           Pro",
                "RAM" => "36GB",
                "SSD" => '512GB / 16.2"',
                "original_price" => "$3,099.00",
                "discount_price" => "$3,099.00",
                "image" => "https://www.goldonecomputer.com/image/cache/catalog/Apple/2023/Mac-Pro-16-M3-Max-1-330x409.jpg"
            ],
            [
                "model" => "",
                "name" => "Lenovo ThinkPad E16
                           G1",
                "core" => "i5 1335U",
                "RAM" => "16GB",
                "SSD" => "512GB",
                "original_price" => "$799.00",
                "discount_price" => "",
                "image" => "https://www.goldonecomputer.com/image/cache/catalog/Products/LENOVO/2023/Notebook%20/ThinkPad-E16-Gen-1-330x409.jpg"
            ],

            [
                "model" => "",
                "name" => "Acer Aspire 5 A515-
                           58GM",
                "core" => "i5 1335U",
                "RAM" => "8GB",
                "SSD" => "512",
                "original_price" => "$549.00",
                "discount_price" => "$599.00",
                "image" => "https://www.goldonecomputer.com/image/cache/catalog/Products/ACER/2023/Gaming%20/Acer-A515-Gaming-330x409.jpg"
            ],
            [
                "model" => "",
                "name" => "MacBook Pro 14",
                "core" => "M3
                           Max",
                "RAM" => "18GB",
                "SSD" => '512GB / 16.2"',
                "original_price" => "$2,669.00",
                "discount_price" => "$2,699.00",
                "image" => "https://www.goldonecomputer.com/image/cache/catalog/Apple/2023/Mac-Pro-14-M3-Pro-1-330x409.jpg"
            ],
            [
                "model" => "",
                "name" => "MacBook Pro 14",
                "core" => "M3
                           Max",
                "RAM" => "36GB",
                "SSD" => '1TB / 14.2"',
                "original_price" => "$3,399.00",
                "discount_price" => "",
                "image" => "https://www.goldonecomputer.com/image/cache/catalog/Apple/2023/Mac-Pro-14-M3-Max-330x409.jpg"
            ],
            [
                "model" => "",
                "name" => "MacBook Pro 14",
                "core" => "M3
                           Pro",
                "RAM" => "18GB",
                "SSD" => '1TB / 14.2"',
                "original_price" => "$2,599.99",
                "discount_price" => "",
                "image" => "https://www.goldonecomputer.com/image/cache/catalog/Apple/2023/Mac-Pro-14-M3-Pro-1-330x409.jpg"
            ]
        ];

    ?>
    <
    <img src="" alt="" srcset=""> class="icon-magento"></
    <img src="" alt="" srcset="">>

    <div class="container mt-5">
        <div class="row d-flex justify-content-between">
            <?php foreach($data as $d) {?>
                <div class="card p-1 mb-3">
                    <img class="image" src="<?php echo $d['image'] ?>" alt="">
                    <div class="icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <p class="mt-1">
                        <?php echo $d['name'] . "( " . $d['core'] . " / " . $d['RAM'] . " / " . "SSD " . $d['SSD'] . ")"."..."; ?>
                    </p>
                    <div class="price d-flex">
                        <h5 class="text-danger"><?php echo $d['original_price'] ?></h5>
                        <h5 class="text-dark"><del><?php echo $d['discount_price'] ?></del></h5>
                    </div>
                    <input type="submit" class="btn btn-success form-control mt-2" name="buy_now" value="Buy Now">
                </div>
            <?php } ?>
        </div>
    </div>

</body>
</html>