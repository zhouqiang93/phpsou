<?php
/**
�������ȨΪ���򿪷���guigou���У��ؼ�λ���Ѿ���ͼ�浵������ñ�ϵͳ���������ۣ����ǽ�����׷���䷨�����ε�Ȩ����
�������ߣ�guigou QQ��568435757
��ϵ���䣺13888221411@126.com
�ٴ���������������ԭʼ���������������ߵ��Ͷ��ɹ���
*/
$file = "./include/lock.txt";
if(!file_exists($file))
{
	header("Location: ./install");
}

require('include/conn.php');
$siteconfig="select * from phpsou_siteconfig";
$site_query=mysql_query($siteconfig);
while($site=mysql_fetch_array($site_query,MYSQL_ASSOC)) 
{
	$title=$site['adtitle'];
	$name=$site['name'];  
	$keywords=$site['Keywords'];
	$description=$site['description'];
}
$smarty->assign("title",$title); 
$smarty->assign("name",$name); 
$smarty->assign("keywords",$keywords); 
$smarty->assign("description",$description); 



$sql="select * from phpsou_about where is_show order by sortid asc";
$cate_query=mysql_query($sql);
while($cate=mysql_fetch_array($cate_query,MYSQL_ASSOC)) 
{ 
   @$about[]=array("title"=>$cate[title],"about_id"=>$cate[about_id],"url"=>$cate[url]); 
} 
$smarty->assign("about",$about); 

$smarty->display('index.tpl');
?>
