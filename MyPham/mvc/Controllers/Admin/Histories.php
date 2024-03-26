<?php
class Histories extends controller
{
    private $model;

    function __construct()
    {
        $this->model = $this->modelAdmin("HistoriesModel");
    }

    function show()
    {
        self::viewAdmin('master', ['page' => "Histories"]);
    }

    function apiListBill()
    {
        $keyword = isset($_POST["keyword"]) ? $_POST["keyword"] : null;
        $IDCategory = isset($_POST["IDCategory"]) ? $_POST["IDCategory"] : null;

        $result = $this->model->apiListBill($keyword, $IDCategory);

        echo $result;
    }

    function removeBill()
    {
        $ID = isset($_POST["ID"]) ? $_POST["ID"] : null;

        $this->model->removeBill($ID);
    }
}
