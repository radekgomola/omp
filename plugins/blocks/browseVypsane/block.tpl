{**
* plugins/blocks/browseVypsane/block.tpl
*
* Copyright (c) 2014 Simon Fraser University Library
* Copyright (c) 2003-2014 John Willinsky
* Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
*
* Common site sidebar menu -- "browse" tools.
*
*}
<div class="block" id="sidebarBrowse">

    <span class="blockTitle pkp_helpers_dotted_underline"><a href="{url router=$smarty.const.ROUTE_PAGE page="catalog" op="newReleases"}">{translate key="navigation.newReleases"}</a></span>
    <span class="blockTitle">{translate key="plugins.block.browse"}</span>

    <form class="pkp_form" action="#">
        <div id="browseCategoryContainer">
            {assign var=test value=true}
            {iterate from=browseCategories item=browseCategory}
            {if !$browseCategory->getParentId()}                                    
                {if $test == true}    
                    {assign var=test value=false}
                    {assign var=active value=false}
                {else}
                    {if !empty($content)}
                        {capture assign='cont'}
                            <ul class="odr_classic2">
                                {foreach from=$content item=jeden}
                                    {$jeden}
                                {/foreach}
                            </ul>
                        {/capture}
                    {else}
                        {assign var=cont value=''}
                    {/if}
                    
                    <div id="userExtraFormFields" class="left full">
                        {include file="controllers/extrasOnDemand.tpl"
                                                      active = $active
                                                      id=$id
                                                      widgetWrapper="#menu"
                                                      moreDetailsTextNT=$name
                                                      lessDetailsTextNT=$name
                                                      extraContent=$cont
                        }
                    </div> 

                {/if}
                {assign var=content value=''}
                {assign var=name value=$browseCategory->getLocalizedTitle()|escape}
                {assign var=cesta value=$browseCategory->getPath()}
                {assign var=id value=$browseCategory->getId()}
                {if $browseBlockSelectedCategory == $browseCategory->getPath()}{assign var=active value=true}{else}{assign var=active value=false}{/if}
                {assign var=activeChild value=false}
            {/if}



        {if $browseCategory->getParentId()}{if $browseBlockSelectedCategory == $browseCategory->getPath()}{assign var=active value=true}{assign var=activeChild value=true}{else}{assign var=activeChild value=false}{/if}{capture append='content'} <li>{if $activeChild}<u>{/if}<a href="{url router=$smarty.const.ROUTE_PAGE page="catalog" op="category" path=$browseCategory->getPath()}">{$browseCategory->getLocalizedTitle()|escape}</a>{if $activeChild}</u>{/if}</li>{/capture}{/if}



        {/iterate}
        {if !empty($content)}
            {capture assign='cont'}
                <ul class="odr_classic2">
                    {foreach from=$content item=jeden}
                        {$jeden}
                    {/foreach}
                </ul>
            {/capture}
        {else}
            {assign var=cont value=''}
        {/if}
        <div id="userExtraFormFields" class="left full">
            {include file="controllers/extrasOnDemand.tpl"
                                                      id=$id
                                                      widgetWrapper="#userExtraFormFields"
                                                      moreDetailsTextNT=$name
                                                      lessDetailsTextNT=$name
                                                      extraContent=$cont
            }
        </div> 
    </div> 

    <div id="browseSeriesContainer">
        <select class="applyPlugin selectMenu" size="1" name="browseSeries" onchange="location.href = ('{url|escape:"javascript" router=$smarty.const.ROUTE_PAGE page="catalog" op="series" path="SERIES_PATH"}'.replace('SERIES_PATH', this.options[this.selectedIndex].value))">
            <option disabled="disabled"{if !$browseBlockSelectedSeries} selected="selected"{/if}>{translate key="plugins.block.browse.series"}</option>
            {iterate from=browseSeries item=browseSeriesItem}
            <option {if $browseBlockSelectedSeries == $browseSeriesItem->getPath()}selected="selected"{/if} value="{$browseSeriesItem->getPath()|escape}">{$browseSeriesItem->getLocalizedTitle()|escape}</option>
            {/iterate}
        </select>
    </div>
</form>
</div>
