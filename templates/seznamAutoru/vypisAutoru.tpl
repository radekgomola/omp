{**
 * templates/seznamAutoru/vypisAut.tpl
 *
 * Copyright (c) 2013-2014 Simon Fraser University Library
 * Copyright (c) 2003-2014 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * List of the authors
 *
 *}

{strip}
{assign var="pageTitle" value="seznam.vypisAutoru"}
{include file="common/header.tpl"}
{/strip}
<p class="nahoru"><a href="#kotva2">&uarr;</a></p>
<div id="editorialTeam">
{if count($autori) > 0}
	<div id="authors">
        
{*	{if count($autori) == 1}
		<h3>{translate key="user.role.author"}</h3>
	{else}
		<h3>{translate key="user.role.authors"}</h3>
	{/if}*}

	<ol class="editorialTeam">
		{foreach from=$autori item=autor}
                    <div class="member"><li class="autor">&#187; <a href="{url op="vypisAutoruBio" path=$autor->getId()}" {literal}onclick="return hs.htmlExpand(this, {objectType: 'iframe'})"{/literal}>{$autor->getFullName(true)|escape}</a>{if $autor->getSalutation() || $autor->getSuffix()} ({/if}{if $autor->getSalutation()}{$autor->getSalutation()|escape}{/if}{if $autor->getSalutation() && $autor->getSuffix()}, {/if}{if $autor->getSuffix()}{$autor->getSuffix()}{/if}{if $autor->getSalutation() || $autor->getSuffix()}){/if}{if $autor->getLocalizedAffiliation()}, {$autor->getLocalizedAffiliation()|escape}{/if}{if $autor->getCountry()}{assign var=countryCode value=$autor->getCountry()}{assign var=country value=$countries.$countryCode}, {$country|escape}{/if}</li></div>
		{/foreach}
	</ol>
	</div>
{/if}
</div>

{include file="common/footer.tpl"}

