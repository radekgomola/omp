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
<div id="main">

{literal}
<script type="text/javascript">
<!--
	if (self.blur) { self.focus(); }
// -->
</script>
{/literal}

{*<div id="profilePicContent" style="float: right;">
	{assign var="profileImage" value=$user->getSetting('profileImage')}
	{if $profileImage}
		<img height="{$profileImage.height|escape}" width="{$profileImage.width|escape}" alt="{translate key="user.profile.profileImage"}" src="{$sitePublicFilesDir}/{$profileImage.uploadName}" />
	{/if}
</div>*}

<div id="mainContent">
<h2>{$pageTitleTranslated}</h2>
<div id="content" class="vypisAutoruBio">

	
    {if $publishEmail || $user->getUrl() || $user->getUCO() || $user->getLocalizedAffiliation() || $country}                 
        <div class="tabulka_bio">
            <ul>
                {if $publishEmail}
                    {assign_mailto var=address address=$user->getEmail()|escape}
                    <li>
                        E-mail <span class="vpravo">{icon name="mail" url=$address}</span>
                    </li>
                {/if}
                {if $user->getUCO()}
                    <li>
                        {translate key="vizitka.identifikace"} <span class="vpravo">{$user->getUCO()|escape}</span><br />{translate key="vizitka.uco"}
                    </li>
                    <li>
                        {translate key="vizitka.url"} <span class="vpravo"><a href="http://www.muni.cz/people/{$user->getUCO()|escape:"quotes"}" target="_new">http://www.muni.cz/people/{$user->getUCO()|escape}</a></span>
                    </li>
                {/if}
                {if $user->getLocalizedAffiliation()}
                    <li>
                        {translate key="vizitka.affiliation"}<span class="vpravo">{$user->getLocalizedAffiliation()|escape}</span>
                    </li>
                {/if}
                {if $user->getUrl()}
                    <li>
                        {translate key="vizitka.web"} <span class="vpravo"><a href="{$user->getUrl()|escape:"quotes"}" target="_new">{$user->getUrl()|escape}</a></span>
                    </li>
                {/if}
                {if $country}
                    <li>
                        {translate key="vizitka.country"}<span class="vpravo">{$country|escape}</span>
                    </li>
                {/if}
            </ul>            
        </div>
    {/if}
    
    <h3>{translate key="vizitka.biografie"}</h3>
    {$user->getLocalizedBiography()|nl2br|strip_unsafe_html}
    

{assign var=uLastName value=$user->getLastName()}
{assign var=uFirstName value=$user->getFirstName()}
{assign var=uEmail value=$user->getEmail()}
{assign var=poprve value="false"}

    {foreach from=$autoriPrispevku item='prispevek'}
        {assign var=pLastName value=$prispevek->getLastName()}
        {assign var=pFirstName value=$prispevek->getFirstName()}
        {assign var=pEmail value=$prispevek->getEmail()}
        
        
            {if $pLastName == $uLastName && 
                $pFirstName == $uFirstName &&
                $pEmail == $uEmail}
                {if $poprve == "false"}
                    <h3>{translate key=prispevky.publikace}</h3>
                    {assign var=poprve value="true"}
                {/if}
                
                {assign var=idecko value=$prispevek->getSubmissionId()}
                &#187;<a href="{url page="catalog" op="book" path=$idecko}" target="_blank">{$prispevkyMonograph.$idecko->getLocalizedFullTitle()}</a><br />
            {/if}
    {/foreach}
</p>

</div><!-- content -->
</div><!-- mainContent -->
</div><!-- main -->
</body>
</html>

