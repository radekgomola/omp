{**
 * plugins/blocks/bannery/block.tpl
 *
 * Common site sidebar menu -- bannery.
 *
 *}
<div class="block" id="sidebarInformation">
{*	<span class="blockTitle">{translate key="plugins.block.distribuce.link"}</span>*}

<div class="blok_banneru">	
    {*<!-- Jssor Slider Begin -->
    <!-- You can move inline styles to css file or css block. -->
    <div id="slider1_container" style="position: relative; top: 0px; left: 0px; width: 180px;
        height: 80px; margin-bottom: 15px;">

        <!-- Loading Screen -->
        <div u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
                background-color: #000000; top: 0px; left: 0px;width: 100%;height:100%;">
            </div>
            <div style="position: absolute; display: block; background: url({$baseUrl}/images/img/loading.gif) no-repeat center center;
                top: 0px; left: 0px;width: 100%;height:100%;">
            </div>
        </div>

        <!-- Slides Container -->
        <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 180px; height: 65px;
            overflow: hidden;">
            <div><a href="{url router=$smarty.const.ROUTE_PAGE page="underConstruction"}"><img u="image" src="{$baseUrl}/images/img/banner_press/01.jpg" /></a></div>
            <div><a href="{url router=$smarty.const.ROUTE_PAGE page="underConstruction"}"><img u="image" src="{$baseUrl}/images/img/banner_press/02.jpg" /></a></div>
            <div><a href="{url router=$smarty.const.ROUTE_PAGE page="underConstruction"}"><img u="image" src="{$baseUrl}/images/img/banner_press/03.jpg" /></a></div>
            <div><a href="{url router=$smarty.const.ROUTE_PAGE page="underConstruction"}"><img u="image" src="{$baseUrl}/images/img/banner_press/04.jpg" /></a></div>
            <div><a href="{url router=$smarty.const.ROUTE_PAGE page="underConstruction"}"><img u="image" src="{$baseUrl}/images/img/banner_press/05.jpg" /></a></div>
            <div><a href="{url router=$smarty.const.ROUTE_PAGE page="underConstruction"}"><img u="image" src="{$baseUrl}/images/img/banner_press/06.jpg" /></a></div>
            <div><a href="{url router=$smarty.const.ROUTE_PAGE page="underConstruction"}"><img u="image" src="{$baseUrl}/images/img/banner_press/07.jpg" /></a></div>
            <div><a href="{url router=$smarty.const.ROUTE_PAGE page="underConstruction"}"><img u="image" src="{$baseUrl}/images/img/banner_press/08.jpg" /></a></div>
            <div><a href="{url router=$smarty.const.ROUTE_PAGE page="underConstruction"}"><img u="image" src="{$baseUrl}/images/img/banner_press/09.jpg" /></a></div>
            <div><a href="{url router=$smarty.const.ROUTE_PAGE page="underConstruction"}"><img u="image" src="{$baseUrl}/images/img/banner_press/10.jpg" /></a></div>
            <div><a href="{url router=$smarty.const.ROUTE_PAGE page="underConstruction"}"><img u="image" src="{$baseUrl}/images/img/banner_press/11.jpg" /></a></div>
        </div>

        <!-- bullet navigator container -->
        <div u="navigator" class="jssorb03" style="position: absolute; bottom: -8px; left: 3px;">
            <!-- bullet navigator item prototype -->
            <div u="prototype" style="position: absolute; width: 12px; height: 12px; text-align:center; line-height:15px; color:white; font-size:8px;"></div>
        </div>
        <!-- Arrow Left -->
        <span u="arrowleft" class="jssora03l" style="width: 35px; height: 35px; bottom: -10px; right: 3px;">
        </span>
        <!-- Arrow Right -->
        <span u="arrowright" class="jssora03r" style="width: 35px; height: 35px; bottom: -10px; right: -17px">
        </span>
        <!-- Arrow Navigator Skin End -->
        

        <a style="display: none" href="http://www.jssor.com">html slideshow</a>
        <!-- Trigger -->
        <script>
            jssor_slider1_starter('slider1_container');
        </script>
    </div>
    <!-- Jssor Slider End -->
    *}
    <div class="banner_blok"><a href="https://journals.muni.cz/" target="_blank"><img src="{$baseUrl}/images/img/bannery/journals.png" class="link_img bannery" alt="journal.muni.cz"/></a></div>
    <div class="banner_blok"><a href="http://issuu.com/munipress/docs/katalog-aw1516-issuu" target="_blank"><img src="{$baseUrl}/images/img/bannery/katalog_2015-podzim.png" class="link_img bannery" alt="catalog"/></a></div>
    <div class="banner_blok"><a href="http://www.muni.cz/banner/229" target="_blank"><img src="{$baseUrl}/images/img/bannery/12.png" class="link_img bannery" alt="discovery"/></a></div>
  </div>
</div>