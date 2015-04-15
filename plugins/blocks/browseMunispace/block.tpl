{**
* plugins/blocks/browseMunispace/block.tpl
*
* Copyright (c) 2014 Simon Fraser University Library
* Copyright (c) 2003-2014 John Willinsky
* Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
*
* Common site sidebar menu -- "browse" tools.
*
*}
<div class="block" id="sidebarBrowseMunispace">
    <div id="browseMunispace">
        <span class="blockTitle {if  $browseBlockSelectedCategoryMunispace == 'munispace'}munipress_helpers_bolder{/if}" style="padding-top: 10px;"><a href="{url router=$smarty.const.ROUTE_PAGE page="catalog" path="munispace" op="category"}">{translate key="browse.munispace"}</a></span>
        <ul class="block_ul">
            {iterate from=$categoriesMunispace item=categoryMunispace}
                {assign var=cesta value=$categoryMunispace->getPath()}
                {assign var=name value=$categoryMunispace->getLocalizedTitle()|escape}
                <li>
                    <a href="{url router=$smarty.const.ROUTE_PAGE page="catalog" op="category" path="munispace_books"}" class="{if $browseBlockSelectedCategoryMunispace == $cesta}munipress_helpers_bold munipress_helpers_black{/if}">{$name}</a>
                </li>
            {/iterate}
            <li>
                <a href="https://journals.muni.cz" target="_blank">{translate key="navigation.munispace.journals"}</a>
            </li>
        </ul>
    </div>
</div>
