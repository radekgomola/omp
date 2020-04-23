{**
 * templates/frontend/pages/searchResults.tpl
 *
 * Copyright (c) 2014-2017 Simon Fraser University Library
 * Copyright (c) 2003-2017 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @brief Display the page to view the catalog.
 *
 * @uses $publishedMonographs array List of published monographs
 * @uses $searchQuery string The search query, if one was just made
 *}
{include file="frontend/components/header.tpl" pageTitle="common.search"}

<div class="page page_search">

	{* Breadcrumb *}
	{include file="frontend/components/breadcrumbs.tpl" type="category" currentTitleKey="common.search"}
	<div class="monograph_count">
{*		{translate key="catalog.browseTitles" numTitles=$publishedMonographs|@count}*}
            {translate key="catalog.browseTitles" numTitles=$publishedMonographs->getCount()}
	</div>

	{* No query - this may happen because of a screen reader, so don't show an
	   error, just leave them with the search form *}
	{if $searchQuery == '' }

	{* No published titles *}
{*	{elseif !$publishedMonographs|@count}*}
        {elseif $publishedMonographs->getCount()<=0}
		<div class="search_results">
			{translate key="catalog.noTitlesSearch" searchQuery=$searchQuery}
			<a href="#search-form">
				{translate key="search.searchAgain"}
			</a>
		</div>

	{* Monograph List *}
	{else}
		<div class="search_results">
{*			{if $publishedMonographs|@count > 1}*}
                        {if $publishedMonographs->getCount() > 1}
{*				{translate key="catalog.foundTitlesSearch" searchQuery=$searchQuery number=$publishedMonographs|@count}*}
                                {translate key="catalog.foundTitlesSearch" searchQuery=$searchQuery number=$publishedMonographs->getCount()}
			{else}
				{translate key="catalog.foundTitleSearch" searchQuery=$searchQuery}
			{/if}
			<a href="#search-form">
				{translate key="search.searchAgain"}
			</a>
		</div>
{*		{include file="frontend/components/monographList.tpl" monographsArray=$publishedMonographs filtrovani="false"}*}
                {include file="frontend/components/monographList.tpl" monographs=$publishedMonographs filtrovani="false"}
	{/if}

	<a name="search-form"></a>
	{include file="frontend/components/searchForm_simple.tpl" header=false simpleSearch=true}

</div><!-- .page -->

{include file="frontend/components/footer.tpl"}
