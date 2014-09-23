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
{$publishedMonographs->getCount()}<br />
{$itemsPerPageHelp}<br />
<div class="pkp_catalog_monographs" id="monographListContainer">
	{if $monographListTitleKey}
		{translate|assign:"monographListTitle" key=$monographListTitleKey}
	{else}
		{translate|assign:"monographListTitle" key="catalog.browseTitles" numTitles=$publishedMonographs->getCount()}
	{/if}
	<h2><em>{$monographListTitle}</em></h2>
	<div class="pagingPanel" style="border: 2px #000 solid">
            <br />
            {page_info iterator=$publishedMonographs itemsPerPage=$itemsPerPageHelp}{* This displays the "Items x-y of z" text *}
            {page_links anchor="monographListContainer" name="catalogPaging" iterator=$publishedMonographs}{* This generates the individual page links *}
            <br />
        </div>
	{if $publishedMonographs->getCount()>0}
 		<ul class="pkp_helpers_clear">
		{iterate from=publishedMonographs item=publishedMonograph}
			{include file="catalog/monograph.tpl" publishedMonograph=$publishedMonograph}
		{/iterate}
		</ul>
	{/if}
</div>
