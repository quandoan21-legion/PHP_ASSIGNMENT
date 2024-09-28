<?php
class ItemsController extends BaseController
{
    private $__conn, $__ItemsModel, $__temp;
    public function __construct($conn)
    {
        $this->__conn = $conn;
        $this->__ItemsModel = $this->initModel("ItemsModel", $this->__conn);
    }

    public function CreateItemForm()
    {

        $this->__temp = $this->initModel("HomeModel", $this->__conn);
        $Items = $this->__temp->getAllItems();
        $this->view("CreateItem", ["Items" => $Items]);
    }

    public function DeleteItem($data)
    {
        $this->__ItemsModel->delete($data);
        $this->__temp = $this->initModel("HomeModel", $this->__conn);
        $Items = $this->__temp->getAllItems();
        $this->view("home", ["Items" => $Items]);
    }

    public function EditItem($data)
    {
        $this->view("EditItem", ["ID" => $data]);
    }

    public function Edit()
    {
        $data = [];
        $data["ItemCode"] = $_POST["ItemCode"];
        $data["ItemName"] = $_POST["ItemName"];
        $data["ItemQuantity"] = $_POST["ItemQuantity"];
        $data["ItemExpriedDate"] = $_POST["ItemExpriedDate"];
        $data["ItemNote"] = $_POST["ItemNote"];
        $data["ID"] = $_POST["ID"];
        $this->__ItemsModel->edit($data);
        $this->__temp = $this->initModel("HomeModel", $this->__conn);
        $Items = $this->__temp->getAllItems();
        $this->view("home", ["Items" => $Items]);
    }

    public function Add()
    {
        $data = [];
        $data["data"] = '"' . $_POST["ItemCode"] . '", "' . $_POST["ItemName"] . '", "' . $_POST["ItemQuantity"]  . '", "' . $_POST["ItemExpriedDate"]  . '", "' . $_POST["ItemNote"] . '"';
        $this->__ItemsModel->create("item_sale", "item_code, item_name, quantity, expried_date, note", $data);
        $this->__temp = $this->initModel("HomeModel", $this->__conn);
        $Items = $this->__temp->getAllItems();
        $this->view("home", ["Items" => $Items]);
    }
}
