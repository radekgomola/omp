{**
 * templates/seznamAutoru/vypisAutoruBio.tpl
 *
 * Copyright (c) 2013-2014 Simon Fraser University Library
 * Copyright (c) 2003-2014 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * View the biography of authors.
 *
 *}
{strip}
{assign var="pageTitle" value="seznam.vypisAutoru.profil"}
{include file="seznamAutoru/headerBio.tpl"}
{/strip}
{literal}
<script type="text/javascript">
<!--
	if (self.blur) { self.focus(); }
// -->
</script>
{/literal}

{assign var=pageTitleTranslated value=$user->getFullName()|escape}
{if !$pageTitleTranslated}{translate|assign:"pageTitleTranslated" key=$pageTitle}{/if}

<div id="container" style="padding-top:10px">
<div id="body">
<div id="top"></div>
<h1>{translate key="seznam.vypisAutoru.profil"}</h1>
<div class="separator"></div>
<div id="main">

{literal}
<script type="text/javascript">
<!--
	if (self.blur) { self.focus(); }
// -->
</script>
{/literal}

<div id="profilePicContent" style="float: right;">
	{assign var="profileImage" value=$user->getSetting('profileImage')}
	{if $profileImage}
		<img height="{$profileImage.height|escape}" width="{$profileImage.width|escape}" alt="{translate key="user.profile.profileImage"}" src="{$sitePublicFilesDir}/{$profileImage.uploadName}" />
	{/if}
</div>

<div id="mainContent">
<h2>{$pageTitleTranslated}</h2>

<div id="content" style="top:0px; width:600px;">
<p>
	
	{if $publishEmail}
		{assign_mailto var=address address=$user->getEmail()|escape}
		<p><strong>E-mail:</strong> {icon name="mail" url=$address}</p>
	{/if}
	{if $user->getUrl()}<a href="{$user->getUrl()|escape:"quotes"}" target="_new">{$user->getUrl()|escape}</a><br/>{/if}
	{if $user->getLocalizedAffiliation()}{$user->getLocalizedAffiliation()|escape}{assign var=needsComma value=1}{/if}{if $country}{if $needsComma}, {/if}{$country|escape}{/if}
  {$user->getLocalizedBiography()|nl2br|strip_unsafe_html}</p>

</div><!-- content -->
</div><!-- mainContent -->
</div><!-- main -->
</div><!-- body -->
</div><!-- container -->
</body>
</html>

