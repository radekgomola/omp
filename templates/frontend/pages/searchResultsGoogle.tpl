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
	<div class="gcse-search"></div>

</div><!-- .page -->

{include file="frontend/components/footer.tpl"}
