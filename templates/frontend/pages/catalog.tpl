{**
 * templates/frontend/pages/catalog.tpl
 *
 * Copyright (c) 2014-2017 Simon Fraser University Library
 * Copyright (c) 2003-2017 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @brief Display the page to view the catalog.
 *
 * @uses $publishedMonographs array List of published monographs
 *}
{include file="frontend/components/header.tpl" pageTitle="navigation.catalog"}

<div class="page page_catalog">
	<div class="monograph_count">
		{translate key="catalog.browseTitles" numTitles=$publishedMonographs->getCount()}
	</div>

	{* No published titles *}
	{if !$publishedMonographs|@count}
		<h2>
			{translate key="catalog.allBooks"}
		</h2>
		<p>{translate key="catalog.noTitles"}</p>

	{* Monograph List *}
	{else}
{*		{include file="frontend/components/monographList.tpl" monographs=$publishedMonographs featured=$featuredMonographIds}*}
                {include file="frontend/components/monographList.tpl" monographs=$publishedMonographs featured=$featuredMonographs}
	{/if}

</div><!-- .page -->

{include file="frontend/components/footer.tpl"}
