<?php
    class TrangChu extends Controller
    {
        function show()
        {
            $temp = self::model("SanPhamModel");
            $result = $temp->saleHome();
            $proDuctSale = $temp->productSale();
            $bestProDuctSelling = $temp->bestProductSelling();
            $getStarProduct = $temp->getStarProduct();
            $news = json_decode($this->model("TinTucModel")->loadNews(null,false,9),true);
// Trong mỗi action của controller
$pageTitle = "Tiêu đề trang mới"; // Đặt tiêu đề mong muốn




// Load view với layout và dữ liệu

            self::view("master",
                ["product" => $result,
                 "page" => "TrangChu",
                 "productSale" => $proDuctSale,
                 "bestProSelling" => $bestProDuctSelling,
                 "star"=> json_decode($getStarProduct,true),
                 "news" => $news,
                ]
            );
        }

        function loadBannerEvent()
        {
            $result = $this->modelAdmin("EventModel")->apiListEvent();

            echo $result;
        }
    }
?>