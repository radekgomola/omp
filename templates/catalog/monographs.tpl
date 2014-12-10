{**
 * templates/catalog/monographs.tpl
 *
 * Copyright (c) 2014 Simon Fraser University Library
 * Copyright (c) 2003-2014 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Display a public-facing monograph list in the catalog.
 *}
<script type="text/javascript">
	// Initialize JS handler.
	$(function() {ldelim}
		$('#monographListContainer').pkpHandler(
			'$.pkp.pages.catalog.MonographPublicListHandler'
		);
	{rdelim});
</script>

<div class="pkp_catalog_monographs" id="monographListContainer">
        {if $search=='ano'}
            {assign var=count value=$publishedMonographs|@count}
        {else}           
            {assign var=count value=$publishedMonographs->getCount()}
        {/if}
    
	{if $monographListTitleKey}
		{translate|assign:"monographListTitle" key=$monographListTitleKey}
                {*<h3>{$monographListTitle}</h3><br />*}
                
	{else}
		{translate|assign:"monographListTitle" key="catalog.browseTitles"}
	{/if}
        <h3 class="pkp_helpers_munipress_underline">{$monographListTitle}</h3>
        {if $paging != 'false'}
            <div class="pagingPanel">
                <div class="pkp_helpers_align_left">
                        {if $trideni && $trideni == 'lex_desc'}
                            <a href="{url router=$smarty.const.ROUTE_PAGE page="catalog" op="category" path="munispace" sort="lex_asc"}" target="_self" class="sorting desc">Abecedně</a> | 
                        {else}
                            <a href="{url router=$smarty.const.ROUTE_PAGE page="catalog" op="category" path="munispace" sort="lex_desc"}" target="_self" class="sorting {if $trideni == 'pub_asc' || $trideni == 'pub_desc'} stejne {else}asc{/if}">Abecedně</a> | 
                        {/if}
                        {if $trideni && $trideni == 'pub_desc'}
                            <a href="{url router=$smarty.const.ROUTE_PAGE page="catalog" op="category" path="munispace" sort="pub_asc"}" target="_self" class="sorting desc">Podle data vydání</a>
                        {else}
                            <a href="{url router=$smarty.const.ROUTE_PAGE page="catalog" op="category" path="munispace" sort="pub_desc"}" target="_self" class="sorting {if $trideni == 'lex_asc' || $trideni == 'lex_desc' || !$trideni} stejne {else}asc{/if}">Podle data vydání</a>
                        {/if}
                </div>
                
                <div class="pkp_helpers_align_right">
                    <div class="vypis_polozek">
                        {page_info iterator=$publishedMonographs itemsPerPage=$itemsPerPageHelp}{* This displays the "Items x-y of z" text *}
                    </div>
                    {page_links anchor="monographListContainer" name="catalogPaging" iterator=$publishedMonographs sort=$trideni}{* This generates the individual page links *}
                </div>
                
            </div>
        {/if}
	{if $count>0}
 		<ul class="pkp_helpers_clear" style="margin-left: 5px;">
                {if $search=='ano'}
                    {foreach from=$publishedMonographs item=publishedMonograph}
                        {include file="catalog/monograph.tpl" publishedMonograph=$publishedMonograph}
                    {/foreach}
                {else}

		{iterate from=publishedMonographs item=publishedMonograph name=loop}
			{include file="catalog/monograph.tpl" publishedMonograph=$publishedMonograph inline=true vyhledavaniAutori=$vyhledavaniAutori}
		{/iterate}
                {/if}
		</ul>
	{/if}
</div>
