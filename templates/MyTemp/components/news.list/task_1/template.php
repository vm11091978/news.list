<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
// $this->setFrameMode(true);
?>

<div class="orbit" role="region" aria-label="Favorite Space Pictures" data-orbit>
	<div class="orbit-wrapper">
		<div class="orbit-controls">
			<button class="orbit-previous"><span class="show-for-sr">Предыдущий</span>&#9664;&#xFE0E;</button>
			<button class="orbit-next"><span class="show-for-sr">Следующий</span>&#9654;&#xFE0E;</button>
		</div>
		<ul class="orbit-container">

		<?foreach ($arResult as $item): ?>

			<?
				$file = CFile::ResizeImageGet($item["PREVIEW_PICTURE"], array('width' => 1000,'height' => 300), BX_RESIZE_IMAGE_EXACT, true);
				//pr($file);
			?> 

			<li class="orbit-slide">
				<figure class="orbit-figure">
					<img class="orbit-image" src="<?=$file['src']?>" alt="Space">
					<figcaption class="orbit-caption"><?=$item['NAME']?></figcaption>
				</figure>
			</li>

		<?endforeach;?>

		</ul>
	</div>

	<nav class="orbit-bullets">

		<?foreach ($arResult as $item=>$key): ?>
			<button data-slide="<?=$key?>"><span class="show-for-sr"><?=$item['NAME']?></span></button>
		<?endforeach;?>

	</nav>
</div>