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
    <span class="blockTitle munipress_underline_gray" style="padding-top: 10px;"><a href="{url router=$smarty.const.ROUTE_PAGE page="vyhledavaniAutori"}">{translate key="browse.byAuthors"}</a></span>
   
        {assign var=test value=true}
        {foreach from=$browseCategories item=browseCategory}
            {assign var=categoryParentId value=$browseCategory->getParentId()}
            {assign var=categoryId value=$browseCategory->getId()} 
            {assign var=name value=$browseCategory->getLocalizedTitle()|escape}
            {assign var=cesta value=$browseCategory->getPath()}
            {assign var=id value=$browseCategory->getId()}
            {if $browseBlockSelectedCategory == $cesta}
                {assign var=active value=true}{else}{assign var=active value=false}
            {/if}
            {if !$categoryParentId}
                {*Ediční řady*}
                {if $id <> 26 && $id <> 32 && $id <> 1} 
                    {capture append='edicniRady'}
                        <a href="{url router=$smarty.const.ROUTE_PAGE page="catalog" op="category" path=$cesta}" class="{if $active}munipress_helpers_bold munipress_helpers_black{/if}">{$name}</a>
                    {/capture}
                {/if}
            {elseif $categoryParentId == 26}                
                {capture append='munispace'}
                            <a href="{url router=$smarty.const.ROUTE_PAGE page="catalog" op="category" path=$cesta}" class="{if $active}munipress_helpers_bold munipress_helpers_black{/if}">{$name}</a>
                {/capture}
            {elseif $categoryParentId == 32}  
                {if $active}
                    {assign var=activeFaculties value=true}{else}{assign var=active value=false}
                {/if}
                {capture append='faculties'}
                            <a href="{url router=$smarty.const.ROUTE_PAGE page="catalog" op="category" path=$cesta}" class="{if $active}munipress_helpers_bold munipress_helpers_black{/if}">{$name}</a>
                {/capture}
            {elseif $categoryParentId == 1}    
                {if $active}
                    {assign var=activeBranches value=true}{else}{assign var=active value=false}
                {/if}
                {capture append='branches'}
                            <a href="{url router=$smarty.const.ROUTE_PAGE page="catalog" op="category" path=$cesta}" class="{if $active}munipress_helpers_bold munipress_helpers_black{/if}">{$name}</a>
                {/capture}
            {/if}           
           
        {/foreach}
    {*<span class="blockTitle">{translate key="plugins.block.category"}</span>
    <div class="munipress_underline_gray">
        <ul class="block_ul">
            {foreach from=$edicniRady item=jeden}
                <li>
                    {$jeden}
                </li>
            {/foreach}
        </ul>
    </div> *}
    <div id="browseMunispace" class="munipress_underline_gray">
        <span class="blockTitle {if  $browseBlockSelectedCategory == 'munispace'}munipress_helpers_bolder{/if}" style="padding-top: 10px;"><a href="{url router=$smarty.const.ROUTE_PAGE page="catalog" path="munispace" op="category"}">{translate key="browse.munispace"}</a></span>
        <ul class="block_ul">
            {foreach from=$munispace item=jeden}
                <li>
                    {$jeden}
                </li>
            {/foreach}
            <li>
                <a href="https://journals.muni.cz" target="_blank">{translate key="navigation.munispace.journals"}</a>
            </li>
        </ul>
    </div>
    
    <div id="browseObory" class="munipress_underline_gray">
        <span class="blockTitle" style="padding-top: 10px;">{translate key="browse.obory"}</span>   
        {capture assign=obory}
            <ul class="block_ul">
                {foreach from=$branches item=jeden}
                        <li>
                            {$jeden}
                        </li>
                {/foreach}
            </ul>
        {/capture}
        <div id="Obory" class="left full">
            {include file="controllers/extrasOnDemand.tpl"
                        active=$activeBranches
                        id=obory
                        widgetWrapper="#Obory"
                        moreDetailsText=browse.zobrazit
                        lessDetailsText=browse.skryt
                        extraContent=$obory
            }
        </div>
    </div>
    
    <div id="browseFaculties" {*class="munipress_underline_gray"*}>
        <span class="blockTitle" style="padding-top: 10px;">{translate key="browse.faculties"}</span>
       {capture assign=fakulty}
            <ul class="block_ul">
                {foreach from=$faculties item=jeden}
                        <li>
                            {$jeden}
                        </li>
                {/foreach}
            </ul>
        {/capture}
        <div id="Fakulty" class="left full">
            {include file="controllers/extrasOnDemand.tpl"
                        active=$activeFaculties
                        id=fakulty
                        widgetWrapper="#Fakulty"
                        moreDetailsText=browse.zobrazit
                        lessDetailsText=browse.skryt
                        extraContent=$fakulty
            }
        </div>
    </div>
    {*<div id="browseSeriesContainer">
        <span class="blockTitle" style="padding-top:10px;">{translate key="plugins.block.edice"}</span>
        <ul class="block_ul">
            {iterate from=browseSeries item=browseSeriesItem}
            <li>

                <a class="block_link {if $browseBlockSelectedSeries == $browseSeriesItem->getPath()}munipress_helpers_bold munipress_helpers_black{/if}" href="{url router=$smarty.const.ROUTE_PAGE page="catalog" op="series" path=$browseSeriesItem->getPath()}">{$browseSeriesItem->getLocalizedTitle()|escape}</a>
            </li>
            {/iterate}    
    </div>*}
</div>
