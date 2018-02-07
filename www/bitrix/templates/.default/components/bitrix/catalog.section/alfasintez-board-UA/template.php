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
$this->setFrameMode(true);
CModule::IncludeModule("iblock")
?>
<div class="alfasintez-catalog-wrap col-md-12 row">
    <i class="fa fa-angle-left alfa-prod-nav" aria-hidden="true"></i>
    <div class="alfasintez-catalog-section">
        <?if($arParams["DISPLAY_TOP_PAGER"]):?>
            <?=$arResult["NAV_STRING"]?><br />
        <?endif;?>
        <?foreach($arResult["ITEMS"] as $cell=>$arElement):?>

            <?  $this->AddEditAction($arElement['ID'], $arElement['EDIT_LINK'], CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($arElement['ID'], $arElement['DELETE_LINK'], CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BCS_ELEMENT_DELETE_CONFIRM')));
            ?>

            <div class="col-md-4 nopadding" style=" background-image: url(<?=$arElement["PREVIEW_PICTURE"]["SRC"]?>)">
                <?//<div class="catalog-btn catalog-btn-main hidden-sm hidden-xs"><a href="	<?=$arElement["PROPERTIES"]["price_link"]["VALUE"] " target="_blank">технические характеристики</a></div> */?>
                <div class="catalog-hover">
                    <div class="catalog-hover-inner">
                        <div class="catalog-title text-center text-uppercase"><?=$arElement["PROPERTIES"]["NAME_UA"]["VALUE"]?></div><br>
                        <div class="text-right pull-left catalog-product-box">
                            <ul class="text-left catalog-product-list">
                                <li>
                                    <?
                                    if($arElement["PROPERTIES"]["PROPERTIONS"]["VALUE"] != false){
                                        echo("Розмір: " . $arElement["PROPERTIES"]["PROPERTIONS"]["VALUE"]);
                                    }
                                    ?>
                                </li>
                                <li>
                                    <?
                                    if($arElement["PROPERTIES"]["MATERIAL"]["VALUE"] != false){
                                        echo("Матеріал: " . $arElement["PROPERTIES"]["MATERIAL"]["VALUE"]);
                                    }
                                    ?>
                                </li>
                                <li>
                                    <?
                                    if($arElement["PROPERTIES"]["CAPACITY"]["VALUE"] != false){
                                        echo("Місткість: " . $arElement["PROPERTIES"]["CAPACITY"]["VALUE"]);
                                    }
                                    ?>
                                </li>

                            </ul>
                        </div>
                        <br>
                            <?if($arElement["PROPERTIES"]["price_link_ru"]["VALUE"]){?>
                            <div class="catalog-btn "><a href="	<?echo (CFile::GetPath($arElement["PROPERTIES"]["price_link_ru"]["VALUE"]));?>" target="_blank">Специфікація</a></div>
                            <?}?>

                    </div>
                </div>
            </div>
        <?endforeach; // foreach($arResult["ITEMS"] as $arElement):?>

        <?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
            <br /><?=$arResult["NAV_STRING"]?>
        <?endif;?>
    </div>
    <i class="fa fa-angle-right alfa-prod-nav" aria-hidden="true"></i>
</div>
