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
{*{strip}        
{assign var="pageTitleName" value=$author->getFullName(false, true)|escape}
{include file="munipressCommon/headerBio.tpl"}
{/strip}*}

{include file="frontend/components/header.tpl" pageTitle=$author->getFullName(false, true)|escape}
<div id="authorDetails">
    <h2>{$author->getFullName(false, true)|escape} {if $author->getUserGroupId() != 13}({$author->getLocalizedUserGroupName()}){/if}
    </h2>
{include file="frontend/components/monographList.tpl" monographsArray=$publishedMonographs filtrovani="false"}

</div>

{include file="common/frontend/footer.tpl"}