{**
 * plugins/blocks/cz_en_blok/block.tpl
 *
 * Copyright (c) 2013-2014 Simon Fraser University Library
 * Copyright (c) 2003-2014 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Common site sidebar menu -- CZ EN toggle.
 *
 *}

{if $enableCz_en_blok}
<div class="block" id="sidebarCzEn">             
	<form action="#">
            {translate|assign:"langCzEn" key="jazyk.vyber"}
            {if $langCzEn == "cs_CZ"}
                <img src="{$baseUrl}/images/vlajky/cz_square_small_grey.png" class="lang_img" style="float:left;"/>
                <input id="tlacitko" type="submit" class="lang_cz_en en" onclick="location.href={if $languageToggleNoUser}'{$currentUrl|escape}{if strstr($currentUrl, '?')}&amp;{else}?{/if}setLocale=en_US'{else}('{url|escape:"javascript" router=$smarty.const.ROUTE_PAGE page="user" op="setLocale" path="NEW_LOCALE" source=$smarty.server.REQUEST_URI}'.replace('NEW_LOCALE', 'en_US')){/if}" />
            {else}     
                <input id="tlacitko" type="submit" class="lang_cz_en cz" onclick="location.href={if $languageToggleNoUser}'{$currentUrl|escape}{if strstr($currentUrl, '?')}&amp;{else}?{/if}setLocale=cs_CZ'{else}('{url|escape:"javascript" router=$smarty.const.ROUTE_PAGE page="user" op="setLocale" path="NEW_LOCALE" source=$smarty.server.REQUEST_URI}'.replace('NEW_LOCALE', 'cs_CZ')){/if}" />
                <img src="{$baseUrl}/images/vlajky/en_square_small_grey.png" class="lang_img_en"/>
            {/if}                    
	</form>
</div>
{/if}
