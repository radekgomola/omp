{**
* templates/frontend/components/monographList.tpl
*
* Copyright (c) 2014-2017 Simon Fraser University Library
* Copyright (c) 2003-2017 John Willinsky
* Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
*
* @brief Display a list of monographs.
*
* @uses $monographs array List of monographs to display
* @uses $featured array Optional list of monograph IDs to feature in the list
* @uses $titleKey string Optional translation key for a title for the list
* @uses $heading string HTML heading element, default: h2
*}
{if !$heading}
    {assign var="heading" value="h2"}
{/if}
<div class="monographListContainert">

    {* Optional title *}
    {*{if $titleKey}
    <{$heading} class="title">
    {translate key=$titleKey}
    </{$heading}>
    {/if}*}

    {* Show featured items first *}
    {if $filtrovani != "false"}
        {include file="frontend/components/filteringSorting.tpl" filtrovani=$filtrovani}
    {/if}
    {*{if $featured && count($featured) > 0}
    {foreach from=$featured key=id item=array_key}
    {if isset($monographs[$id])}
    {include file="frontend/objects/monograph_summary.tpl" monograph=$monographs[$id] isFeatured=1}
    {/if}
    {/foreach}
    {/if}
    *}
    {if $monographs AND $paging != "false"}
        <p class="paging paging--center">
            <span class="paging__pages">
                {page_links anchor="monographListContainer" name="catalogPaging" iterator=$monographs trideni=$trideni obor=$filtrovaniObor rok=$filtrovaniRok jazyk=$filtrovaniJazyk fakulta=$filtrovaniFakulta}
            </span>
        </p>
    {/if}
    {if $slider == "true"}
        <section class="slider">
            {if isset($monographsArray)}
                {foreach name="monographListLoop" from=$monographsArray key=key item=monograph}
                    {include file="frontend/objects/monograph_slide.tpl" monograph=$monograph}
                {/foreach}
            {else}
                {iterate name="monographListLoop" from=monographs item=monograph}
                {assign var=key value = $monograph->getId()}
                {include file="frontend/objects/monograph_slide.tpl" monograph=$monograph}
                {/iterate}
            {/if}
        </section>
    {elseif $smallSlide == "true"}
        {if isset($monographsArray)}

            {foreach name="monographListLoop" from=$monographsArray key=key item=monograph}
                {include file="frontend/objects/monograph_smallSlide.tpl" monograph=$monograph}
            {/foreach}
        {else}
            {iterate name="monographListLoop" from=monographs item=monograph}
            {include file="frontend/objects/monograph_smallSlide.tpl" monograph=$monograph}
            {/iterate}
        {/if}
    {else}
        {assign var=counter value=1}
        <div class="crossroad-std">
            <ul class="grid">
                {if isset($monographsArray)}

                    {foreach name="monographListLoop" from=$monographsArray key=key item=monograph}
                        <li class="grid__cell size--m--2-4 size--l--4-12">
                            {include file="frontend/objects/monograph_summary.tpl" monograph=$monograph}
                        </li>
                        {assign var=counter value=$counter+1}
                    {/foreach}

                {else}
                    {iterate name="monographListLoop" from=monographs item=monograph}
                    {assign var=key value = $monograph->getId()}
                    <li class="grid__cell size--m--2-4 size--l--4-12">
                        {include file="frontend/objects/monograph_summary.tpl" monograph=$monograph}
                    </li>
                    {/iterate}
                {/if}
            </ul>
        </div>
        {if $monographs AND $paging != "false"}
            <p class="paging paging--center">
                <span class="paging__pages">
                    {page_links anchor="monographListContainer" name="catalogPaging" iterator=$monographs trideni=$trideni obor=$filtrovaniObor rok=$filtrovaniRok jazyk=$filtrovaniJazyk fakulta=$filtrovaniFakulta}
                </span>
                <span class="paging__pager">
                    <strong class="paging__pager__item is-active">{page_info iterator=$monographs itemsPerPage=$itemsPerPageHelp}</strong>
                </span> 
            </p>
        {/if}
    {/if}
            {*{assign var=counter value=1}
            {foreach name="monographListLoop" from=$monographs item=monograph key=key}
                {if is_array($featured) && array_key_exists($key, $featured)}
                    {php}continue;{/php}
                {/if}
                {if $counter is odd by 1}
                    <div class="row">
                    {/if}
                    {include file="frontend/objects/monograph_summary.tpl" monograph=$monograph}
                    {if $counter is even by 1}
                    </div>
                {/if}
                {assign var=counter value=$counter+1}
            {/foreach}
            {* Close .row if we have an odd number of titles *}
           {* {if $counter > 1 && $counter is even by 1}
            </div>
        {/if}*}
    </div>
