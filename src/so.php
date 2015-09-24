?<meta charset="UTF-8"/>
<?
    $search=$_POST['search'];
    $so=trim($search);
    if (empty($so))
    {
        echo '<br><br><center><h1>请输入关键词开始进行搜索<h1></center>';
        exit();
    }elseif(strlen($so)<3){
        echo '<br><br><center><h1>关键词不能小于3个字符！<h1></center>';
        exit();
    };
    
	$url="http://api.sheyun.org/api.php?so=$so"; 

    //获取源码开始
    $content=file_get_contents($url);
    //获取源码结束
    $table_change = array('<br><p>'=>'</br><table class="am-table am-table-bordered"><thead><tr><th style="width: 25%;">来源 </th><th>数据 </th></tr></thead><tbody><tr><td>');
    $table_change += array('</p><br>' => '</td><td>');
    $table_change += array('</br><p>' => '</td></tr><tr><td>');
    echo strtr($content,$table_change);
	echo '</td></tr></tbody></table>';


?>