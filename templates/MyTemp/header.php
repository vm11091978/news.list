<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
IncludeTemplateLangFile(__FILE__);
?><!DOCTYPE html>
<html lang="ru">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">

<?$APPLICATION->ShowHead();?>
<link rel="shortcut icon" href="<?=SITE_TEMPLATE_PATH."/images/favicon.604825ed.ico"?>" type="image/x-icon">
<link href="<?=SITE_TEMPLATE_PATH."/css/common.css"?>" rel="stylesheet">

<?if (!isset($_GET["print_course"])):?>
	<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH."/css/print_style.css"?>" type="text/css" media="print" />
<?else:?>
	<meta name="robots" content="noindex, follow" />
	<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH."/css/print_style.css"?>" type="text/css" />
<?endif?>

<script type="text/javascript">
function ShowSwf(sSwfPath, width1, height1)
{
	var scroll = 'no';
	var top=0, left=0;
	if(width1 > screen.width-10 || height1 > screen.height-28)
		scroll = 'yes';
	if(height1 < screen.height-28)
		top = Math.floor((screen.height - height1)/2-14);
	if(width1 < screen.width-10)
		left = Math.floor((screen.width - width1)/2);
	width = Math.min(width1, screen.width-10);
	height = Math.min(height1, screen.height-28);
	window.open('<?=SITE_TEMPLATE_PATH."/js/swfpg.php"?>?width='+width1+'&height='+height1+'&img='+sSwfPath,'','scrollbars='+scroll+',resizable=yes, width='+width+',height='+height+',left='+left+',top='+top);
}
</script>
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH."/js/imgshw.js"?>"></script>
<title><?$APPLICATION->ShowTitle()?></title>
</head>

<body>
<div id="panel"><?$APPLICATION->ShowPanel();?></div>
<div id="workarea-row">