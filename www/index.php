<?
preg_match_all('/([a-z]{1,8}(?:-[a-z]{1,8})?)(?:;q=([0-9.]+))?/', strtolower($_SERVER["HTTP_ACCEPT_LANGUAGE"]), $matches); // Получаем массив $matches с соответствиями
$langs = array_combine($matches[1], $matches[2]); // Создаём массив с ключами $matches[1] и значениями $matches[2]
foreach ($langs as $n => $v)
$langs[$n] = $v ? $v : 1; // Если нет q, то ставим значение 1
arsort($langs); // Сортируем по убыванию q
$default_lang = key($langs); // Берём 1-й ключ первого (текущего) элемента (он же максимальный по q)

if(in_array($default_lang, ["ua-ua","ru-ru","by-by","az-az","am-am","by-by","kz-kz","kg-kg","md-md","tj-tj","tm-tm","uz-uz"])) {
    header("Location:http://alfasintez.com.ua/ua/");
}
else {
    header("Location:http://alfasintez.com.ua/en/");
}

?>




<?
/* ---------------v2---------------- 
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
?>
<style>
    body{background:#ECF0F1}
    .BG-1st-page {
        position: absolute;
        width: 100%;
        height: 100%;
        background-size: cover !important;
    }
    @media screen and (min-width:1200px){.BG-1st-page{background:url(/upload/av-alfasintez/fon1_1920x1000.jpg) center no-repeat;}}
    @media screen and (max-width:1199px){.BG-1st-page{background:url(/upload/av-alfasintez/fon1_1024x770.jpg) center no-repeat;}}
    @media screen and (max-width:992px) {.BG-1st-page{background:url(/upload/av-alfasintez/fon1_770x1024.jpg) center no-repeat;}}
    @media screen and (max-width:450px){.BG-1st-page{background:url(/upload/av-alfasintez/fon1_375x667.jpg) center no-repeat;}}
    .load{position:absolute;top:50%;left:50%;transform:translate(-50%, -50%);  width:100px;height:100px; }
    .load hr{border:0;margin:0;width:40%;height:40%;position:absolute;border-radius:50%;animation:spin 2s ease infinite}
    .load :first-child{background:#8DC04B;animation-delay:-1.5s}
    .load :nth-child(2){background:#8DC04B;animation-delay:-1s}
    .load :nth-child(3){background:#8DC04B;animation-delay:-0.5s}
    .load :last-child{background:#8DC04B}

    @keyframes spin{
        0%,100%{transform:translate(0)}
        25%{transform:translate(160%)}
        50%{transform:translate(160%, 160%)}
        75%{transform:translate(0, 160%)}
    }
    @media screen and (-ms-high-contrast: active), (-ms-high-contrast: none) {
        .load{display: none;}}
</style>
<div class="BG-1st-page"></div>
<div class="load">
    <hr/><hr/><hr/><hr/>
</div>
<script>
    $( document ).ready(function() {
        var Russian = ["UA","RU","BY","AZ","AM","BY","KZ","KG","MD","TJ","TM","UZ"];
        //*********** IF IE***********
        if (navigator.appName == 'Microsoft Internet Explorer' ||  !!(navigator.userAgent.match(/Trident/) || navigator.userAgent.match(/rv:11/)) || (typeof $.browser !== "undefined" && $.browser.msie == 1))
        {
            someTimeout = 0;
            window.setTimeout("document.location = '/ru/';", someTimeout);
            return;
        };
        $.getJSON("http://ip-api.com/json/?callback=?", function(data) {
            for(var i = 0; i <= Russian.length; i++){
                console.log( Russian[i]);
                console.log( data.countryCode);
                if(data.countryCode == Russian[i]){
                    someTimeout = 0;
                    window.setTimeout("document.location = '/ru/';", someTimeout);
                    return;
                }
            };
            someTimeout = 0;
            window.setTimeout("document.location = '/en/';", someTimeout);
        });
    });
</script>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?> */?>