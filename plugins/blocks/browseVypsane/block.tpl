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

    <span class="blockTitle munipress_underline_gray" style="padding-top: 0px;"><a href="{url router=$smarty.const.ROUTE_PAGE page="catalog" op="newReleases"}">{translate key="navigation.newReleases"}</a></span>
    <span class="blockTitle munipress_underline_gray" style="padding-top: 0px;"><a href="{url router=$smarty.const.ROUTE_PAGE page="vyhledavaniAutori"}">AUTORI</a></span>
    <span class="blockTitle">{translate key="plugins.block.category"}</span>
    <div class="browseCategoryContainer munipress_underline_gray">
        {assign var=test value=true}
        {iterate from=browseCategories item=browseCategory}
        {assign var=categoryParentId value=$browseCategory->getParentId()}
        {assign var=categoryId value=$browseCategory->getId()}
        {if !$browseCategory->getParentId()}                                    
            {if $test == true}    
                {assign var=test value=false}
                {assign var=active value=false}
            {else}
                {if $id <> 26 && $id <> 32}
                    {if !empty($content)}
                        {capture assign='cont'}
                            <ul class="block_ul_browse block_ul">
                                {foreach from=$content item=jeden}
                                    {$jeden}
                                {/foreach}
                            </ul>
                        {/capture}
                    {else}
                        {assign var=cont value=''}
                    {/if}

                    <div id="menu" class="left full">
                        {include file="controllers/extrasOnDemand.tpl"
                                                              active = $active
                                                              id=$id
                                                              widgetWrapper="#menu"
                                                              moreDetailsTextNT=$name
                                                              lessDetailsTextNT=$name
                                                              extraContent=$cont
                                                              cesta=$cesta
                        }
                    </div>
                {elseif $id == 26}
                    {if !empty($content)}
                        {capture assign='munispace'}
                            <ul class="block_ul">
                                {foreach from=$content item=jeden}
                                    {$jeden}
                                {/foreach}
                            </ul>
                        {/capture}
                    {else}
                        {assign var=munispace value=''}
                    {/if}
                {elseif $id == 32}
                    {if !empty($content)}
                        {capture assign='faculties'}
                            <ul class="block_ul">
                                {foreach from=$content item=jeden}
                                    {$jeden}
                                {/foreach}
                            </ul>
                        {/capture}
                    {else}
                        {assign var=faculties value=''}
                    {/if}
                {/if}

            {/if}
            {assign var=content value=''}
            {assign var=name value=$browseCategory->getLocalizedTitle()|escape}
            {assign var=cesta value=$browseCategory->getPath()}
            {assign var=id value=$browseCategory->getId()}
            {if $browseBlockSelectedCategory == $browseCategory->getPath()}
            {assign var=active value=true}{else}{assign var=active value=false}
            {/if}
            {assign var=activeChild value=false}
        {/if}

        {if $browseCategory->getParentId()}
            {if $browseBlockSelectedCategory == $browseCategory->getPath()}
                {assign var=active value=true}
                {assign var=activeChild value=true}
            {else}
                {assign var=activeChild value=false}
            {/if}
            {capture append='content'} 
                <li>

                    <a href="{url router=$smarty.const.ROUTE_PAGE page="catalog" op="category" path=$browseCategory->getPath()}" class="{if $activeChild}munipress_helpers_bold munipress_helpers_black{/if}">{$browseCategory->getLocalizedTitle()|escape}</a>
                </li>
            {/capture}
        {/if}
        {/iterate} 

        {*            Iteruje posledni polozku -> protoze vypisuji kategorie zpetne*}
        
        {if $id <> 26 && $id <> 32}
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
                        cesta=$cesta
            }
            </div> 
        {elseif $id == 26}
            {if !empty($content)}
                {capture assign='munispace'}
                    <ul class="block_ul">
                        {foreach from=$content item=jeden}
                            {$jeden}
                        {/foreach}
                    </ul>
                {/capture}
            {else}
                {assign var=munispace value=''}
            {/if}
        {elseif $id == 32}
            {if !empty($content)}
                {capture assign='faculties'}
                    <ul class="block_ul">
                        {foreach from=$content item=jeden}
                            {$jeden}
                        {/foreach}
                    </ul>
                {/capture}
            {else}
                {assign var=faculties value=''}
            {/if}
        {/if}
    </div> 

    <div id="browseMunispace" class="munipress_underline_gray">
        <span class="blockTitle {if  $browseBlockSelectedCategory == 'munispace'}munipress_helpers_bolder{/if}" style="padding-top: 10px;"><a href="{url router=$smarty.const.ROUTE_PAGE page="catalog" path="munispace" op="category"}">{translate key="browse.munispace"}</a></span>
        {$munispace}
    </div>
    <div id="browseFaculties" class="munipress_underline_gray">
        <span class="blockTitle" style="padding-top: 10px;">{translate key="browse.faculties"}</span>
        {$faculties}
    </div>
    <div id="browseSeriesContainer">
        <span class="blockTitle" style="padding-top:10px;">{translate key="plugins.block.edice"}</span>
        <ul class="block_ul">
            {iterate from=browseSeries item=browseSeriesItem}
            <li>

                <a class="block_link {if $browseBlockSelectedSeries == $browseSeriesItem->getPath()}munipress_helpers_bold munipress_helpers_black{/if}" href="{url router=$smarty.const.ROUTE_PAGE page="catalog" op="series" path=$browseSeriesItem->getPath()}">{$browseSeriesItem->getLocalizedTitle()|escape}</a>
            </li>
            {/iterate}    
    </div>
</div>
