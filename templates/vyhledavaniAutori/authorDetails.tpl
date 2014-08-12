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
<ul>
    {$publishedMonographs|@print_r}
    <br /><br />{$publishedMonographs->getId()}
{foreach from=$publishedMonographs item=monograph}
    
    <br /><br /><br />{$monograph|@print_r}
{*	{assign var=issueId value=$article->getIssueId()}
	{assign var=issue value=$issues[$issueId]}
	{assign var=issueUnavailable value=$issuesUnavailable.$issueId}
	{assign var=sectionId value=$article->getSectionId()}
	{assign var=journalId value=$article->getJournalId()}
	{assign var=journal value=$journals[$journalId]}
	{assign var=section value=$sections[$sectionId]}
	{if $issue->getPublished() && $section && $journal}*}
        {assign var=jmeno value=$monograph->getLocalizedTitle()}
	<li>
{*		<a href="{url page="catalog" op="book" path=$monograph->getId()}" target="_blank">{$monograph->getLocalizedTitle()}</a>*}
	</li>
{/foreach}
</ul>
</div>
{include file="common/footer.tpl"}

