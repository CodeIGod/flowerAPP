<?php

class pay extends index_smarty
{
    function __construct()
    {
        parent::__construct();
        $this->db = new mysql('orderlist');
        $this->newdb = new mysql('order_attach');
    }

    /*function index(){
        $oid = $_GET['oid'];
        $data = $this->newdb->where("oid=$oid")->select('*');
        $arr=[];
        $number=[];
        $spec=[];
        $obj = new mysql('goods');
        $db = new mysql('shop');
        $specData = $db->select('spec');
        for($i=0;$i<count($data);$i++){
            $gid = $data[$i]['gid'];
            $num = $data[$i]['gnum'];
            $gspec= $specData[$i]['spec'];
            $goodsData = $obj->where("gid=$gid")->select('*')[0];
            array_push($arr,$goodsData);
            array_push($number,$num);
            array_push($spec,$gspec);
        }
        $this->smarty->assign('goodsData',$arr);
        $this->smarty->assign('num',$number);
        $this->smarty->assign('spec',$spec);
        $this->smarty->display('view/index/pay.html');
    }*/
    function index()
    {
        session_start();
        $uid = $_SESSION['uid'];
        $obj = new mysql('shop');
        $goods = new mysql('goods');
        $adress=new mysql('adress');
        $adr=$adress->where("uid=$uid and ad_status='1'")->select("*")[0];
        $data = $obj->where("uid=$uid")->select('*');
        $arr = [];
        $number = [];
        $spec = [];
        for ($i = 0; $i < count($data); $i++) {
            $gid = $data[$i]['gid'];
            $num = $data[$i]['nums'];
            $gspec = $data[$i]['spec'];
            $goodsData = $goods->where("gid=$gid")->select('*')[0];
            array_push($arr, $goodsData);
            array_push($number, $num);
            array_push($spec, $gspec);
        }
        $this->smarty->assign('goodsData', $arr);
        $this->smarty->assign('num', $number);
        $this->smarty->assign('spec', $spec);
        $this->smarty->assign('adr', $adr);
        $this->smarty->display('view/index/pay.html');
    }

    function add()
    {
        $ototalPrice = $_GET['totalPrice'];
        session_start();
        $uid = $_SESSION['uid'];
        $onum = time();
        $sql = "insert into orderlist (uid,onum,ototalPrice) VALUES ('{$uid}','{$onum}','{$ototalPrice}')";
        $this->db->insert($sql);

        $oid = $this->db->mysql->insert_id;
        $_SESSION['oid'] = $oid;
        $data = json_decode($_GET['arr']);
        $sql = "insert into order_attach (gid,gnum,oid,uid) VALUES ";
        foreach ($data as $v) {
            $sql .= "('" . $v->gid . "','" . $v->gnum . "'," . $oid . "," . $uid . "),";
        }
        $sql = substr($sql, 0, -1);
        $row = $this->newdb->insert($sql);
        if ($row >= 1) {
            echo $oid;
        } else if ($row < 0) {
            echo 'error';
        }

    }

}