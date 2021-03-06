<?php
include_once 'functions.php';
sec_session_start();
header("Content-Type: application/json; charset=UTF-8");
$obj = getParam('x', '-1');
$categ_id = getParam('categ_id', '-1');
$product= getParam('product', '-1');


function buildTree(array $flatList)
{
    $grouped = [];
    foreach ($flatList as $node){
        $grouped[$node['parent_id']][] = $node;
    }

    $fnBuilder = function($siblings) use (&$fnBuilder, $grouped) {
        foreach ($siblings as $k => $sibling) {
            $id = $sibling['id'];
            if(isset($grouped[$id])) {
                $sibling['children'] = $fnBuilder($grouped[$id]);
            }
            $siblings[$k] = $sibling;
        }
        return $siblings;
    };

    $tree = $fnBuilder($grouped[0]);

    return $tree;
}

if ($obj == "get_categ") {

    $stmt = $mysqli->prepare("select id, parent_id, name, img from aquilon_categ where active=1 order by id");
    $stmt->execute();
    $result = $stmt->get_result();
    $arr = $result->fetch_all(MYSQLI_ASSOC);
    $tree = buildTree($arr, 'parent_id', 'id');
//    print_r($tree);
    echo json_encode($tree);



    //echo json_encode(getCatalogsName(false));
}
else if ($obj == "get_categ_parent") {
    $categ_predicat=" and parent_id=0";
    if($categ_id!='-1') $categ_predicat=" and parent_id=".$categ_id;

    $showDeleted = getParam('deleted', 'false');
    $active='(1)';
    if($showDeleted=='true') $active='(0,1)';

    $back = getParam('back', 0);

    if($back==1) $categ_predicat=" and parent_id IN (select parent_id from aquilon_categ where active in  ".$active." and id=".$categ_id.")";
   
    
    $stmt = $mysqli->prepare("select id, parent_id, name, img, active from aquilon_categ where active in ".$active.$categ_predicat." order by id");
    $stmt->execute();
    $result = $stmt->get_result();
    $arr = $result->fetch_all(MYSQLI_ASSOC);

    echo json_encode($arr);
}
/*else if ($obj == "get_categ_db") {
    echo json_encode(getCatalogsName(true));
}*/
else if($obj =="get_top_products")
{
    $out2 = array();
    $discont=0;
    //if (isset($_SESSION['discont']) && $_SESSION['discont']!=0) $discont=$_SESSION['discont']/100;
    if (isset($_SESSION['user']) && get_class($_SESSION['user']) == 'User_Model')
        if ($_SESSION['user']->getDiscont()!=0) $discont=$_SESSION['user']->getDiscont()/100;

    $stmt = $mysqli->prepare("select  id_categ, id, name, art, img, coast-coast*".$discont." as coast, count from aquilon_products where active=1 ORDER BY RAND() LIMIT 9");
    //$stmt = $mysqli->prepare("SELECT id_categ, id, name, art, img, coast-coast*".$discont." as coast, count, COUNT(id_products), id_products FROM aquilon_order_details INNER JOIN aquilon_products ON id=id_products  where active=1 GROUP BY id_products ORDER BY 6 LIMIT 5");
        $stmt->execute();
        $result = $stmt->get_result();
        //$outp = $result->fetch_all(MYSQLI_ASSOC);

        while ($value = $result->fetch_row()) {

            $active='';
            if (isset($_SESSION['favouritet'])) {
            foreach ($_SESSION['favouritet'] as $id=>$count){
                if($value[1]==$id) $active='active';
            }
        }
            $out2[] = array('id_categ'=>$value[0], 'id'=>$value[1], 'name'=>$value[2], 'art'=>$value[3], 'img'=>$value[4], 'coast'=>$value[5], 'count'=>$value[6], 'active'=>$active);
            
            //$log = date('Y-m-d H:i:s') .$value['id_categ'].$value['id'].$value['name'].$value['img'].$value['coast'].$active;
            //file_put_contents('D:/log.txt', $log . PHP_EOL, FILE_APPEND);
        }
        $stmt->close();
        /*дополним до 5 если меньше */
        if(count($out2)<5){
            $stmt = $mysqli->prepare("select  id_categ, id, name, art, img, coast-coast*".$discont." as coast, count from aquilon_products where active=1 ORDER BY RAND() LIMIT ".(5-count($out2)));
            $stmt->execute();
            $result = $stmt->get_result();
                while ($value = $result->fetch_row()) {
                    $active='';
                    if (isset($_SESSION['favouritet'])) {
                        foreach ($_SESSION['favouritet'] as $id=>$count){
                            if($value[1]==$id) $active='active';
                        }
                    }
                $out2[] = array('id_categ'=>$value[0], 'id'=>$value[1], 'name'=>$value[2], 'art'=>$value[3], 'img'=>$value[4], 'coast'=>$value[5], 'count'=>$value[6], 'active'=>$active);
            }
            $stmt->close();
        }



        echo json_encode($out2);
}
else if($obj =="get_all_products")
{
    $categ_predicat="";
    if($categ_id!='-1') $categ_predicat=" and id_categ=".$categ_id;
    $product_predicat="";
    if($product!='-1') $product_predicat=" and id=".$product;
    $out2 = array();
    $discont=0;
    if (isset($_SESSION['user']) && get_class($_SESSION['user']) == 'User_Model')
        if ($_SESSION['user']->getDiscont()!=0) $discont=$_SESSION['user']->getDiscont()/100;
    $stmt = $mysqli->prepare("select  id_categ, id, name, img, coast - coast*".$discont." as coast, count, art, description from aquilon_products where active=1 ".$categ_predicat.$product_predicat);
    
        $stmt->execute();
        $result = $stmt->get_result();
        //$outp = $result->fetch_all(MYSQLI_ASSOC);
        while ($value = $result->fetch_row()) {

            $active='';
            if (isset($_SESSION['favouritet'])) {
            foreach ($_SESSION['favouritet'] as $id=>$count){
                if($value[1]==$id) $active='active';
            // $log = date('Y-m-d H:i:s') .' '.$value[1].' '.$id;
            //file_put_contents('D:/log.txt', $log . PHP_EOL, FILE_APPEND);
            }
        }
            $out2[] = array('id_categ'=>$value[0], 'id'=>$value[1], 'name'=>$value[2], 'img'=>$value[3], 'coast'=>$value[4], 
            'count'=>$value[5], 'art'=>$value[6], 'description'=>$value[7],
            
            'active'=>$active);
    }
    $stmt->close();
        echo json_encode($out2);
}
else if($obj =="get_all_products_db")
{
    $categ_predicat="";
    if($categ_id!='-1') $categ_predicat=" and id_categ=".$categ_id;

    $showDeleted = getParam('deleted', 'false');
    $active='(1)';
    if($showDeleted=='true') $active='(0,1)';


    $stmt = $mysqli->prepare("select  id_categ, id, name, img, coast, count, art, description, active from aquilon_products where active in ".$active.$categ_predicat);
    
        $stmt->execute();
        $result = $stmt->get_result();
        $outp = $result->fetch_all(MYSQLI_ASSOC);
        echo json_encode($outp);
}else if($obj =="get_favor_products")
{

    if (!empty($_SESSION['favouritet'])) {
        $id_array = array();
        
        if($product!='-1'){
            $id_array[] = $product;
        }else{
            foreach ($_SESSION['favouritet'] as $id=>$count){ // пробегаем по содержимому, вычилсяя сумму и количество
                $id_array[] = $id;	 
                    }
            }

                    $array = implode("','",$id_array);
                    $discont=0;
                    if (isset($_SESSION['user']) && get_class($_SESSION['user']) == 'User_Model')
                        if ($_SESSION['user']->getDiscont()!=0) $discont=$_SESSION['user']->getDiscont()/100;
                    $stmt = $mysqli->prepare("select  id_categ, id, name, img, coast - coast*".$discont." as coast, count, art, 'active' as active from aquilon_products where active=1 and id IN ('".$array."') ");
                    $stmt->execute();
        $result = $stmt->get_result();
        $outp = $result->fetch_all(MYSQLI_ASSOC);
        $stmt->close();
        echo json_encode($outp);

}else
    echo json_encode(-1);

}else if($obj =="get_cart_products")
{
    $user_id = getParam('user_id', -1);

    if (!empty($_SESSION['cart'])) {
        $out2 = array();
        $id_array = array();
        
        if($product!='-1'){
            $id_array[] = $product;
        }else{
            foreach ($_SESSION['cart'] as $id=>$count){ // пробегаем по содержимому, вычилсяя сумму и количество
                $id_array[] = $id;	 

                    }
            }
            
                    $array = implode("','",$id_array);
                    $discont=0;
                    if (isset($_SESSION['user']) && get_class($_SESSION['user']) == 'User_Model')
                        if ($_SESSION['user']->getDiscont()!=0) $discont=$_SESSION['user']->getDiscont()/100;
                    $stmt = $mysqli->prepare("select  id_categ, id, name, img, coast - coast*".$discont." as coast, count, art from aquilon_products where active=1 and id IN ('".$array."') ");
                    $stmt->execute();
        $result = $stmt->get_result();
        while ($value = $result->fetch_row()) {

            if (isset($_SESSION['cart'][$value[1]])) {
                $c=$_SESSION['cart'][$value[1]];
                if($c>$value[5])
                $c=$value[5];

                $out2[] = array('id_categ'=>$value[0], 'id'=>$value[1], 'name'=>$value[2], 'img'=>$value[3], 'coast'=>$value[4], 
            'balance'=>$value[5], 'art'=>$value[6], 
            
            'count'=>$c);

        }
    }
    $stmt->close();

        //$outp = $result->fetch_all(MYSQLI_ASSOC);
        echo json_encode($out2);

}else
    echo json_encode(-1);

}else if($obj =="get_orders")
{
    $order_id = getParam('order_id', -1);
    $users_account = getParam('users', -1);
    $predicat_user='';
    if($users_account!=-1){
        if (isset($_SESSION['user']) && get_class($_SESSION['user']) == 'User_Model')
        {
            $predicat_user='where u.id='.$_SESSION['user']->getUser_id();
        }else{
            logout();
        }
    }
    if($order_id==-1)
    {
        $stmt = $mysqli->prepare("select o.id, o.date_order, u.name, u.phone, u.email, o.description, sum(d.count*d.price) as coast, o.exec, o.descript_manager, o.date_manager from aquilon_orders o inner join aquilon_users u on o.id_user=u.id inner join aquilon_order_details d on o.id=d.id_order ".$predicat_user." group by o.id, o.date_order, u.name, o.exec, u.phone, u.email, o.description, o.descript_manager, o.date_manager order by o.date_order desc");
        $stmt->execute();
        $result = $stmt->get_result();
        $outp = $result->fetch_all(MYSQLI_ASSOC);
        $stmt->close();
    }else{

        $stmt = $mysqli->prepare("select o.id, o.date_order, u.name, u.phone, u.email, o.description, sum(d.count*d.price) as coast, o.exec, o.descript_manager, o.date_manager from aquilon_orders o inner join aquilon_users u on o.id_user=u.id inner join aquilon_order_details d on o.id=d.id_order where o.id=".$order_id." group by o.id, o.date_order, u.name, o.exec, u.phone, u.email, o.description, o.descript_manager, o.date_manager order by o.date_order desc");
        $stmt->execute();
        $result = $stmt->get_result();
        $outp = $result->fetch_all(MYSQLI_ASSOC);
        $stmt->close();

        $stmt = $mysqli->prepare("select p.name, p.art, d.count, d.price, d.count*d.price as sum from aquilon_products p inner join aquilon_order_details d on d.id_products=p.id where d.id_order=".$order_id);
        $stmt->execute();
        $result = $stmt->get_result();
        $outp_one_order = $result->fetch_all(MYSQLI_ASSOC);
        $stmt->close();
        array_push($outp, $outp_one_order);
    }



        echo json_encode($outp);
       
    

}else if($obj =="get_users")
{
    $name = getParam('name', '');
    if($name!='')
    {
        $stmt = $mysqli->prepare("select id, name, phone, email, registr,dt, discont from aquilon_users where upper(name) like '%".mb_strtoupper($name)."%' or upper(email) like '%".mb_strtoupper($name)."%'");
    }
    else{
        $stmt = $mysqli->prepare("select id, name, phone, email, registr,dt, discont from aquilon_users");
    }
    $stmt->execute();
        $result = $stmt->get_result();
        $outp = $result->fetch_all(MYSQLI_ASSOC);
        $stmt->close();
        echo json_encode($outp);
}else if($obj == 'user_login_name')
{
    if (isset($_SESSION['user']) && get_class($_SESSION['user']) == 'User_Model')
        $result = ['code' => 1, 'name' => htmlentities($_SESSION['user']->getName())];
    else
        $result =  ['code' => 0, 'name' => 'Вход для зарегистрированных пользователей'];
    
    echo json_encode($result);
}
else if($obj == 'get_user_account')
{
    if (isset($_SESSION['user']) && get_class($_SESSION['user']) == 'User_Model'){
        $stmt = $mysqli->prepare("select id, name, phone, email, discont from aquilon_users where registr=1 and id=".$_SESSION['user']->getUser_id());
        $stmt->execute();
        $result = $stmt->get_result();
        $outp = $result->fetch_all(MYSQLI_ASSOC);
        $stmt->close();
        echo json_encode($outp);
    }
    else
    {
        logout();
    }
}
else if($obj == 'get_user_info')
{
    if (isset($_SESSION['user']) && get_class($_SESSION['user']) == 'User_Model'){
        $stmt = $mysqli->prepare("select id, name, phone, email from aquilon_users where registr=1 and id=".$_SESSION['user']->getUser_id());
        $stmt->execute();
        $result = $stmt->get_result();
        $outp = $result->fetch_all(MYSQLI_ASSOC);
        $stmt->close();
        echo json_encode($outp);
    }
    else
    {
        $out2[] = array('id' => -1, 'name'=>'', 'phone'=>'', 'email'=>'');
        echo json_encode($out2);
    }
}else if($obj=='get_search')
{
    $showDeleted = getParam('deleted', 'false');
    $active='1';
    if($showDeleted=='true') $active='0';
    $search_string = htmlspecialchars(strip_tags(getParam('search_string', '')));
    $convertedText = mb_convert_encoding($search_string, 'utf-8', mb_detect_encoding($search_string));
    $sql="select id_categ, id, name, img, coast, count, art, description from aquilon_products where UPPER(NAME) LIKE '%".mb_strtoupper($convertedText)."%' OR UPPER(art) LIKE '%".mb_strtoupper($convertedText)."%' AND active=".$active;

    $stmt = $mysqli->prepare($sql);
    $stmt->execute();
    $result = $stmt->get_result();
    $outp = $result->fetch_all(MYSQLI_ASSOC);
    $stmt->close();
    echo json_encode($outp);
}






