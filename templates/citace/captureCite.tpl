{**
 * templates/citace/captureCite.tpl
 *
 * Copyright (c) 2013-2014 Simon Fraser University Library
 * Copyright (c) 2003-2014 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Capture Citation
 *
 *}
{strip}
{assign var=pageTitle value="monografie.captureCite"}
{include file="munipressCommon/headerBio.tpl"}
{/strip}

{if $galleyId}
	{url|assign:"articleUrl" page="article" op="view" path=$articleId|to_array:$galleyId}
{else}
	{url|assign:"articleUrl" page="article" op="view" path=$articleId}
{/if}
<div id="captureCite">
<h3>{$article->getLocalizedTitle()|strip_unsafe_html}</h3>

<form action="#">
<label for="citeType">{translate key="rt.captureCite.format"}</label>&nbsp;&nbsp;<select onchange="document.location='{url|escape:"javascript" path=$articleId|to_array:$galleyId:"REPLACE"}'.replace('REPLACE', this.options[this.selectedIndex].value)">
	{foreach from=$citationPlugins item=thisCitationPlugin}
		<option {if $citationPlugin && $citationPlugin->getName() == $thisCitationPlugin->getName()}selected="selected" {/if}value="{$thisCitationPlugin->getName()|escape}">{$thisCitationPlugin->getCitationFormatName()|escape}</option>
	{/foreach}
</select>
	
</form>

{call_hook name="Template::citace::CaptureCite"}
</div>



