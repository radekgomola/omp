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
{literal}
    <script type="text/javascript">
        function show(id) {
            document.getElementById(id).style.visibility = "visible";
        }
        function hide(id) {
            document.getElementById(id).style.visibility = "hidden";
        }
    </script>
{/literal}
<script type="text/javascript">
        hs.minWidth = 300;
        hs.minHeight = 200;
        hs.width = 400;
</script>
<div id="editorialTeam">
    <div id="authors" class="blok_seznamu_autoru">
        {foreach from=$abeceda item=pismeno}
            {if $pismeno == 'ostatni'}
                {translate|assign:"zobrazenePismeno" key=abeceda.ostatni}
            {else}
                {assign var=zobrazenePismeno value=$pismeno}
            {/if}
            {if $pismeno == $cestaPismeno}
                <span class="pismeno_selected">{$zobrazenePismeno}</span>
            {else}    
                <a href="{url op="index" path=$pismeno}" >{$zobrazenePismeno}</a>
            {/if}
        {/foreach}
        <hr />
        {*<img src="{$baseUrl}/images/design/linka_autori.png" />*}

        {if count($poleAutoru) > 0}
            
             <ul class="seznamAutoru">
                 {strip}
    {foreach from=$poleAutoru item=autor}              
                    
                    <li><a href="{url op="vypisAutoruBio" path=$autor->getId()}" onclick="return hs.htmlExpand(this, {ldelim}objectType: 'iframe'{rdelim})">
                    {$autor->getFullName(true)|escape}
                        </a>
                {if $autor->getSalutation() || $autor->getSuffix()} ({/if}
                {if $autor->getSalutation()}{$autor->getSalutation()|escape}{/if}
                {if $autor->getSalutation() && $autor->getSuffix()},{/if}
                {if $autor->getSuffix()} {$autor->getSuffix()}{/if}
                {if $autor->getSalutation() || $autor->getSuffix()}){/if}
                {if $autor->getLocalizedAffiliation()}, {$autor->getLocalizedAffiliation()|escape}{/if}
                {*{if $autor->getCountry()}
                    {assign var=countryCode value=$autor->getCountry()}
                    {assign var=country value=$countries.$countryCode}
                    , {$country|escape}
                {/if}*}
                        
            </li>        
    {/foreach}
    {/strip}
    </ul>
   {/if}
</div>

</div>

{include file="common/footer.tpl"}

