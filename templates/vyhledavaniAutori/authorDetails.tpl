{**
 * templates/search/authorDetails.tpl
 *
 * Copyright (c) 2013-2014 Simon Fraser University Library
 * Copyright (c) 2003-2014 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Index of published articles by author.
 *
 *}
{strip}
{assign var="pageTitleName" value=$author->getFullName()}
{include file="common/header.tpl"}
{/strip}
<div id="authorDetails">

{include file="catalog/monographs.tpl" publishedMonographs=$publishedMonographs}

</div>
{include file="common/footer.tpl"}

