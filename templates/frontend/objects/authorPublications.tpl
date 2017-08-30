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
{assign var="pageTitleName" value=$author->getFullName(false, true)|escape}
{include file="frontend/components/headerBio.tpl"}
{/strip}

<div id="authorDetails" style="border-shadow: 0 1px 5px rgba(63, 105, 160, 0.3) inset;">
    <h2>{$pageTitleName} {if $author->getUserGroupId()!= 13}({$author->getLocalizedUserGroupName()}){/if}
    </h2>
{include file="frontend/components/monographList.tpl" monographs=$publishedMonographs filtrovani="false" smallSlide="true" paging="false"}

</div>