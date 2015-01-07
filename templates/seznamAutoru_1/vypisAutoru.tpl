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
{*{assign var='pocet' value="count($autori)"}*}
{if count($autori) > 0}
	<div id="authors">
            <div style="float:left">
        {counter assign=i start=0 print=false}        
        {foreach from=$abeceda item=pismeno}
            {assign var=neprazdne value==false}
                    {foreach from=$autori item=autor}
                        {assign var=firstletter value=$autor->getLastName()|mb_substr:0:1}
                        {assign var=first2letters value=$autor->getLastName()|mb_substr:0:2}
                        {if ($firstletter==$pismeno && $first2letters!='Ch') || $first2letters == $pismeno || (not in_array($firstletter, $abeceda) && not in_array($firstletter, $abeceda) && $pismeno == 'ostatni')}          
                            {if $neprazdne==false}
                                <ol class="vypisAutoru">{$pismeno}
                                {assign var=neprazdne value=true}
                            {/if}
                            {counter}
                                <div class="member"><li class="autor">&#187; <a href="{url op="vypisAutoruBio" path=$autor->getId()}" {literal}onclick="return hs.htmlExpand(this, {objectType: 'iframe'})"{/literal}>{$autor->getFullName(true)|escape}</a>{if $autor->getSalutation() || $autor->getSuffix()} ({/if}{if $autor->getSalutation()}{$autor->getSalutation()|escape}{/if}{if $autor->getSalutation() && $autor->getSuffix()}, {/if}{if $autor->getSuffix()}{$autor->getSuffix()}{/if}{if $autor->getSalutation() || $autor->getSuffix()}){/if}{if $autor->getLocalizedAffiliation()}, {$autor->getLocalizedAffiliation()|escape}{/if}{if $autor->getCountry()}{assign var=countryCode value=$autor->getCountry()}{assign var=country value=$countries.$countryCode}, {$country|escape}{/if}</li></div>
                        {/if}
                    {/foreach}
            {if $neprazdne==true}
                </ol>
            {/if}
            {if $i>(count($autori)/2)}
            </div><div style="float:right; min-width:380px;">
            {/if}
        {/foreach}
        </div>
        
	</div>
{/if}
{foreach from=$autoriPrispevku item='test'}
    {$test->getLastName()} + email {$test->getUrl()}<br />

{/foreach}
</div>

{include file="common/footer.tpl"}

