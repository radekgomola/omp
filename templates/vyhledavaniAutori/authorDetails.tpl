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
{assign var="pageTitle" value="search.authorDetails"}
{include file="common/header.tpl"}
{/strip}
<div id="authorDetails">
{*<h3>{$lastName|escape}, {$firstName|escape}{if $middleName} {$middleName|escape}{/if}{if $affiliation}, {$affiliation|escape}{/if}{if $country}, {$country|escape}{/if}</h3>*}

{include file="catalog/monographs.tpl" publishedMonographs=$publishedMonographs}

</div>
{include file="common/footer.tpl"}

