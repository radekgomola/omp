{**
* templates/catalog/book/souvisejiciPublikace.tpl
*
* Copyright (c) 2014 Simon Fraser University Library
* Copyright (c) 2003-2014 John Willinsky
* Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
*
* Display the information pane of a public-facing book view in the catalog.
*}

{if $souvisejiciPublikace}
    <div class="souvisejiciPublikace"> 
        
        <h4 class="munipress_underline_gray">{translate key="catalog.souvisejiciPublikace"}</a></h4>
        <ul class="souvisejiciPublikaceSeznam">
        {foreach from=$souvisejiciPublikace item=jednaPublikace}
            <li class="pkp_catalog_monograph pkp_helpers_align_left souvisejici_publikace" >
                <a class="pkp_helpers_image_left tooltip" href="{url page="catalog" op="book" path=$jednaPublikace->getId()}" target="_blank" title="{$jednaPublikace->getLocalizedFullTitle()|strip_tags|escape}">
                    {include file="controllers/monographList/coverImage.tpl" monograph=$jednaPublikace}
                </a>
            </li>
        {/foreach}    
        </ul>
    </div>
{/if}

