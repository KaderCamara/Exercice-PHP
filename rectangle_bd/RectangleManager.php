<?php
require_once("MysqlBd.php");

class RectangleManager extends MysqlBd
{


    public function __construct()
    {
        $this->classeName = "Rectangle";
    }

    public function create($data)
    {
        $sql = "insert into rectangle (longeur ; largeur) values (" . $data->getLongueur() . ";" . $data->getLargeur() . ")";
        return $this->ExecuteUpdate($sql) != 0;
    }

    public function update($id)
    {
        $sql = "update rectangle set longeur= :longeur, largeur = :largeur where id = ?";
        return $this->ExecuteUpdate($sql, $id);
    }
    public function delete($id)
    {
        $sql = "delete from rectangle where id = ?";
        return $this->ExecuteUpdate($sql, $id);
    }

    public function findAll()
    {
        $sql = "select * from rectangle";
        return $this->ExecuteSelect($sql);
    }
    public function findById($id)
    {
        $sql = "select * from rectangle where id =$id";
    }
}