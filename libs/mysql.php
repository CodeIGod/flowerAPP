<?php

class mysql
{
    public $mysql;
    public $tableName;

    function __construct($tableName)
    {
        $this->mysql = new mysqli('localhost', 'root', '', 'flowerapp', 3306);
        $this->tableName = $tableName;
        $this->mysql();
        $this->wheres='';
        $this->limits='';
    }

    function mysql()
    {
        if ($this->mysql->connect_errno) {
            echo '数据库连接失败，失败原因是' . $this->mysql->connect_errno;
            exit();
        }
        $this->mysql->query('set names utf8');
    }

    /////////////附加条件//////////
    function where($info){
        $this->wheres='where '.$info;
        return $this;
    }
    function limit($info){
        $this->limit='limit '.$info;
        return $this;
    }
    /////////////增//////////////
    function insert($info)
    {
        if (is_string($info) && strpos($info, 'nsert')) {
            $sql = $info;
        } else {
            $keys = array_keys($info);
            $sql = "INSERT INTO $this->tableName (";
            for ($i = 0; $i < count($keys); $i++) {
                $sql .= $keys[$i] . ',';
            }
            $sql = substr($sql, 0, -1).") values (";
            foreach ($info as $v) {
                $sql .= "'" . $v . "',";
            }
            $sql = substr($sql, 0, -1) . ")";
        }
        $this->mysql->query($sql);
        return $this->mysql->affected_rows;
    }

    /////////////删//////////////
    function delete($info){
        $sql="DELETE FROM $this->tableName WHERE $info";
        $this->mysql->query($sql);
        return $this->mysql->affected_rows;
    }
    /////////////改//////////////
    function update($info){
        if (is_string($info) && strpos($info,'pdate')){
            $sql=$info;
        }else{
            $sql="update $this->tableName set ";
            foreach ($info as $key=>$v){
                $sql.=$key."='{".$v."}',";
            }
            $sql=substr($sql,0,-1).' '.$this->wheres;
        }
        $this->mysql->query($sql);
        return $this->mysql->affected_rows;
    }
    /////////////查//////////////
    function select($info){
        if (is_string($info) && strpos($info,'elect')){
            $sql=$info;
        }else{
            $sql="select $info from $this->tableName $this->wheres";
        }
        return $this->mysql->query($sql)->fetch_all(MYSQLI_ASSOC);
    }

}