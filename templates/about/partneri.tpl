{**
 * templates/about/description.tpl
 *
 * Copyright (c) 2014 Simon Fraser University Library
 * Copyright (c) 2003-2014 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Description of the Press.
 *}
{strip}
{assign var="pageTitle" value="about.partneri.long"}
{include file="common/header.tpl"}
{/strip}

{url|assign:editUrl page="management" op="settings" path="press" anchor="masthead"}
{include file="common/linkToEditPage.tpl" editUrl=$editUrl}

<div id="partneri">
	{$partneriInfo.partneri|nl2br}
</div>

{include file="common/footer.tpl"}
