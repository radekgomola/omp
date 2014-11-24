{**
 * lib/pkp/templates/common/header.tpl
 *
 * Copyright (c) 2014 Simon Fraser University Library
 * Copyright (c) 2003-2014 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Common site header.
 *}
<!DOCTYPE html>
<html>
    {if $pageTitleName}
        {assign var=pageTitleTranslated value=$pageTitleName}
    {else}
        {if !$pageTitleTranslated}{translate|assign:"pageTitleTranslated" key=$pageTitle}{/if}
    {/if}
    {include file="core:common/headerHead.tpl"}
{*<head>
	<meta http-equiv="Content-Type" content="text/html; charset={$defaultCharset|escape}" />
	<title>{$pageTitleTranslated|strip_tags}</title>
	<meta name="description" content="{$metaSearchDescription|escape}" />
	<meta name="keywords" content="{$metaSearchKeywords|escape}" />
	<meta name="generator" content="{$applicationName} {$currentVersionString|escape}" />
	{$metaCustomHeaders}
	{if $displayFavicon}<link rel="icon" href="{$faviconDir}/{$displayFavicon.uploadName|escape:"url"}" type="{$displayFavicon.mimeType|escape}" />{/if}

	
	{* FIXME: Replace with a smarty template that includes {translate} keys, see #6443. 
	{if $currentLocale !== 'en_US'}<script src="{$baseUrl}/lib/pkp/js/lib/plupload/i18n/{$currentLocale|escape}.js"></script>{/if}

	{foreach from=$stylesheets item=styleSheetList}{* For all priority sets STYLE_PRIORITY_... 
		{foreach from=$styleSheetList item=cssUrl}{* For all stylesheet URLs within this priority set 
			<link rel="stylesheet" href="{$cssUrl}" type="text/css" />
		{/foreach}
	{/foreach}
</head>*}
<body>

