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
<p class="nahoru"><a href="#kotva2">&uarr;</a></p>
<div id="editorialTeam">
    <div id="authors">
        {foreach from=$abeceda item=pismeno}
            <a href="{url op="index" path=$pismeno}" style="padding-right:5px;">{$pismeno}</a>
        {/foreach}
        {if count($poleAutoru) > 0}
            <br /><hr />
            <div style="position: relative; top: -7px; right: -300px; width: 350px;">
                {*{foreach from=$poleAutoru item=user}
                <div id="autorBio-{$user->getId()}" style="position:absolute; visibility: hidden; ">
                {if $publishEmail}
                {assign_mailto var=address address=$user->getEmail()|escape}
                <p><strong>E-mail:</strong> {icon name="mail" url=$address}</p>
                {/if}
                {if $user->getUrl()}<a href="{$user->getUrl()|escape:"quotes"}" target="_new">{$user->getUrl()|escape}</a><br/>{/if}
                {if $user->getUCO()}
                <table style="border:none">
                <tbody>
                <tr>
                <td style="padding-right:15px;">
                {translate key="vizitka.identifikace"}
                </td><td>
                {$user->getUCO()|escape} <em>{translate key="vizitka.uco"}</em>
                </td>
                </tr><tr>
                <td>                    
                {translate key="vizitka.url"}
                </td><td>
                <a href="http://www.muni.cz/people/{$user->getUCO()|escape:"quotes"}" target="_new">http://www.muni.cz/people/{$user->getUCO()|escape}</a><br/>
                </td>
                </tr>
                </tbody>
                </table>
                {/if}
                {if $user->getLocalizedAffiliation()}{$user->getLocalizedAffiliation()|escape}{assign var=needsComma value=1}{/if}{if $country}{if $needsComma}, {/if}{$country|escape}{/if}
                {$user->getLocalizedBiography()|nl2br|strip_unsafe_html}</p>
                <p>
                {assign var=idecko value=$user->getId()}
                {foreach from = $prispevkyMonograph.$idecko item=publikace}
                &#187;<a href="{url page="catalog" op="book" path=$idecko}" target="_blank">{$publikace->getLocalizedFullTitle()}</a><br />
                {/foreach}

                </div>
                {/foreach}*}
            </div>
            {literal}
            <style>
                .menu {
                    position: relative;
                    color: #000000; 
                    padding: 0; 
                    margin: 0; 
                    list-style-type: none;
                    float:left;
                    display: block;
                    height: 100%;
                }
                .menu ul {
                    top: -0px;
                    margin-top: 0px; 
                    position: absolute;
                    visibility: hidden; 
                    margin: 0; 
                    margin: 0; 
                    list-style-type: none;
                    width: 600px;
                }
                .menu li {
                    float: left; 
                    padding: 2px 2px 0 2px; 
                    width: 200px; 
                    background-color: green;
                     }
                .menu a {
                    padding: 2px; 
                    text-align: left; 
                    padding-left: 15px; 
                    color: black; 
                    text-decoration: none; 
                    font-weight: bold;}
                .menu ul a:link {color: #fff; border-bottom: none; padding-left: 15px;}
                .menu ul a:visited {color: #fff; border-bottom: none; padding-left: 15px; }
                .menu ul a:hover {color: #4f4f4f; background-color: rgb(233,233,233);}
                .menu li:hover ul, ul.menu li.hover ul { 
                    visibility: visible;
                }
                .menu li li {float: left; border: none; padding: 0; margin-left: 200px; height: 100%; background-color: red;}
            </style>
            {/literal}
            <table>
                {foreach from=$poleAutoru item=autor}
                    <tr>
                        <td>
                            <ul class="menu">


                                <li > <a href="{url op="vypisAutoruBio" path=$autor->getId()}" {literal}onclick="return hs.htmlExpand(this, {objectType: 'iframe'})"{/literal}  >{$autor->getFullName(true)|escape}</a>{if $autor->getSalutation() || $autor->getSuffix()} ({/if}{if $autor->getSalutation()}{$autor->getSalutation()|escape}{/if}{if $autor->getSalutation() && $autor->getSuffix()}, {/if}{if $autor->getSuffix()}{$autor->getSuffix()}{/if}{if $autor->getSalutation() || $autor->getSuffix()}){/if}{if $autor->getLocalizedAffiliation()}, {$autor->getLocalizedAffiliation()|escape}{/if}{if $autor->getCountry()}{assign var=countryCode value=$autor->getCountry()}{assign var=country value=$countries.$countryCode}, {$country|escape}{/if}
                                    <ul>
                                        <li>

                                            <div id="autorBio-{$autor->getId()}" style="width: 500px; height:100%">
                                                {if $publishEmail}
                                                    {assign_mailto var=address address=$autor->getEmail()|escape}
                                                    <p><strong>E-mail:</strong> {icon name="mail" url=$address}</p>
                                                {/if}
                                                {if $autor->getUrl()}<a href="{$autor->getUrl()|escape:"quotes"}" target="_new">{$autor->getUrl()|escape}</a><br/>{/if}
                                                
                                                    <table>
                                                        <tbody>
                                                            {if $autor->getUCO()}
                                                            <tr>
                                                                <td style="padding-right:15px;">
                                                                    {translate key="vizitka.identifikace"}
                                                                </td><td>
                                                                    {$autor->getUCO()|escape} <em>{translate key="vizitka.uco"}</em>
                                                                </td>
                                                            </tr><tr>
                                                                <td>                    
                                                                    {translate key="vizitka.url"}
                                                                </td><td>
                                                                    <a href="http://www.muni.cz/people/{$autor->getUCO()|escape:"quotes"}" target="_new">http://www.muni.cz/people/{$autor->getUCO()|escape}</a><br/>
                                                                </td>
                                                            </tr>
                                                        
                                                {/if}
                                                <tr>
                                                    <td>
                                        {if $autor->getLocalizedAffiliation()}{$autor->getLocalizedAffiliation()|escape}{assign var=needsComma value=1}{/if}{if $country}{if $needsComma}, {/if}{$country|escape}{/if}
                                                        </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                        {$autor->getLocalizedBiography()|strip_unsafe_html}
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                            {assign var=idecko value=$autor->getId()}
                                            {foreach from = $prispevkyMonograph.$idecko item=publikace}
                                                &#187;<a href="{url page="catalog" op="book" path=$idecko}" target="_blank">{$publikace->getLocalizedFullTitle()}</a><br />
                                            {/foreach}
                                                            </td>
                                                        </tr>
                </tbody>
                </table>
                                                                
                                    </div>                      

                                
                            </li>   
                        </ul>
                    </li>
                </ul>
            </td>
        </tr>
        {/foreach} 
    </table>


   {* <ul class="sf-menu">
        {foreach from=$poleAutoru item=autor}

            <li >&#187; <a href="{url op="vypisAutoruBio" path=$autor->getId()}" {literal}onclick="return hs.htmlExpand(this, {objectType: 'iframe'})"{/literal} onMouseOver="show('autorBio-{$autor->getId()}')" onMouseOut="hide('autorBio-{$autor->getId()}')" >{$autor->getFullName(true)|escape}</a>{if $autor->getSalutation() || $autor->getSuffix()} ({/if}{if $autor->getSalutation()}{$autor->getSalutation()|escape}{/if}{if $autor->getSalutation() && $autor->getSuffix()}, {/if}{if $autor->getSuffix()}{$autor->getSuffix()}{/if}{if $autor->getSalutation() || $autor->getSuffix()}){/if}{if $autor->getLocalizedAffiliation()}, {$autor->getLocalizedAffiliation()|escape}{/if}{if $autor->getCountry()}{assign var=countryCode value=$autor->getCountry()}{assign var=country value=$countries.$countryCode}, {$country|escape}{/if}


                <ul>
                    <li>
                        <div id="autorBio-{$autor->getId()}" style="position:absolute;">
                            {if $publishEmail}
                                {assign_mailto var=address address=$autor->getEmail()|escape}
                                <p><strong>E-mail:</strong> {icon name="mail" url=$address}</p>
                            {/if}
                            {if $autor->getUrl()}<a href="{$autor->getUrl()|escape:"quotes"}" target="_new">{$autor->getUrl()|escape}</a><br/>{/if}
                            {if $autor->getUCO()}
                                <table style="border:none">
                                    <tbody>
                                        <tr>
                                            <td style="padding-right:15px;">
                                                {translate key="vizitka.identifikace"}
                                            </td><td>
                                                {$autor->getUCO()|escape} <em>{translate key="vizitka.uco"}</em>
                                            </td>
                                        </tr><tr>
                                            <td>                    
                                                {translate key="vizitka.url"}
                                            </td><td>
                                                <a href="http://www.muni.cz/people/{$autor->getUCO()|escape:"quotes"}" target="_new">http://www.muni.cz/people/{$autor->getUCO()|escape}</a><br/>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            {/if}
                    {if $autor->getLocalizedAffiliation()}{$autor->getLocalizedAffiliation()|escape}{assign var=needsComma value=1}{/if}{if $country}{if $needsComma}, {/if}{$country|escape}{/if}
                    {$autor->getLocalizedBiography()|nl2br|strip_unsafe_html}</p>
                    <p>
                        {assign var=idecko value=$autor->getId()}
                        {foreach from = $prispevkyMonograph.$idecko item=publikace}
                            &#187;<a href="{url page="catalog" op="book" path=$idecko}" target="_blank">{$publikace->getLocalizedFullTitle()}</a><br />
                        {/foreach}

                </div>
            </li>
            <li>
                TEST2
            </li>
        </ul>

    </li>
{/foreach}
</ul>*}
</div>

</div>

</div>
{/if}
</div>

{include file="common/footer.tpl"}

