<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giỏ Hàng</title> 
   
</head>
<body>
    
<div class="cartDetail closeSearch">
    <?php require_once "./mvc/Views/User/blocks/BreadCrum.php"?>
    <div class="cartTable__bottom">
                <button class="cartTable__button">Hoàn tác</button>
            </div> 
    <section class="sectionCart">
        <div class="cartTable">
            <div class="cartTable__Column--Left">
                <div class="cartTable__Title">
                    <h1>Giỏ Hàng <span class="cartTable__Title--CountProduct"></span> </h1>
                </div>
                
                <div class="cartTable__Contain">
                    <table>
                        <thead>
                            <tr>
                                <th>Sản phẩm</th>
                                <th>Đơn giá</th>
                                <th>Số lượng</th>
                                <th>Thành tiền</th>
                            </tr>
                        </thead>

                        <tbody class="cartTable__Contain--Body">

                        </tbody>
                    </table>
                </div>
            </div> 
            <div class="cartTable__Column--Right">

            </div>
        </div>
    </section>
</div>
</body>
</html>