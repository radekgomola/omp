{**
 * templates/manageCatalog/monographs.tpl
 *
 * Copyright (c) 2014 Simon Fraser University Library
 * Copyright (c) 2003-2014 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Present a list of monographs for management.
 *}

{* Generate a unique ID for this monograph list *}
{capture assign=monographContainerId}monographsContainer-{$listName}{/capture}

<script type="text/javascript">
	// Initialize JS handler.
	$(function() {ldelim}
		$('#{$monographContainerId|escape:"javascript"}').pkpHandler(
			'$.pkp.pages.manageCatalog.MonographManagementListHandler'
		);
	{rdelim});
</script>
{if $messageKey}<p>{translate key=$messageKey}</p>{/if}
<div id="{$monographContainerId|escape}">
	{if $category}
		<div id="categoryDescription">
			{$category->getLocalizedDescription()}
		</div>
	{elseif $series}
		<div id="seriesDescription">
			{$series->getLocalizedDescription()}
		</div>
	{/if}
	<div class="pkp_helpers_align_right">
		<div class="submission_actions pkp_linkActions">
			{if $includeFeatureAction && !$publishedMonographs->wasEmpty()}{null_link_action id="feature-$monographContainerId" key="common.feature" image="feature"}{/if}
		</div>
	</div>
                <div id="test">
        <br />
        <br />
        {if $paging != 'false'}
            <div class="pagingPanel">
                <div class="pkp_helpers_align_left">
                    {page_info iterator=$publishedMonographs itemsPerPage=$itemsPerPageHelp}{* This displays the "Items x-y of z" text *}    
                </div>
                
                <div class="pkp_helpers_align_right">
                    {page_links anchor="test" name="managerCatalogPaging" iterator=$publishedMonographs}{* This generates the individual page links *}
                </div>
                
            </div>
        {/if}
	<br />
	<br />
	<ul class="pkp_manageCatalog_monographList pkp_helpers_container_center">
		{if !$publishedMonographs->wasEmpty()}
			{iterate from=publishedMonographs item=monograph}
				{include file="manageCatalog/monograph.tpl"}
			{/iterate}
		{else}
			<p>{translate key="catalog.manage.noMonographs"}</p>
		{/if}
	</ul>
                </div>
</div>
