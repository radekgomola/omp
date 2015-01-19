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
{include file="munipressCommon/headerBio.tpl"}
{/strip}
<div id="authorDetails">
    <h2>{$pageTitleName} {if $author->getZobrazHlavicka() != 1}({$author->getLocalizedUserGroupName()}){/if}
    </h2>
{include file="catalog/monographs.tpl" publishedMonographs=$publishedMonographs vyhledavaniAutori="true" title ='false'}

</div>


