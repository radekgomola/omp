{**
* templates/catalog/book/bookFiles.tpl
*
* Copyright (c) 2014 Simon Fraser University Library
* Copyright (c) 2003-2014 John Willinsky
* Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
*
* Displays a book file list with download/payment links in the public catalog.
*}
{assign var=calameoHash value=$publicationFormat->getLocalizedCalameoHash()}
{assign var=keStazeniUrl value=$publicationFormat->getLocalizedUrlStazeni()}
{if !empty($availableFiles[$publicationFormatId]) || $calameoHash || $keStazeniUrl}
<li>    
    <strong>{$publicationFormat->getLocalizedName()|escape|truncate:100:"..."}</strong>
    
     <div class="publicationFormatLink">
         {if $keStazeniUrl}
            <div class="oneLink">
                <a href="{$keStazeniUrl}" target="_blank">
                    <img src="{$baseUrl}/images/design/download_square_small.png"/>{translate key="submission.keStazeni"}
                </a>
            </div>
        {/if}
        
        {if $calameoHash}
            <div class="oneLink">
                <a href="https://v.calameo.com/?bkcode={$calameoHash}" {literal}onclick="return hs.htmlExpand(this, {objectType: 'iframe'});"{/literal}>
                    <img src="{$baseUrl}/images/design/flash_player_logo.png"/>{translate key="submission.flipbook"}
                </a>
            </div>
        {/if}
    
        

        {foreach from=$availableFiles[$publicationFormatId] item=availableFile}{* There will be at most one of these *}
                {if $availableFile->getDocumentType()==$smarty.const.DOCUMENT_TYPE_PDF && !$calameoHash}
                    {url|assign:downloadUrl op="view" path=$publishedMonograph->getId()|to_array:$publicationFormatId:$availableFile->getFileIdAndRevision()}
                {else}
                    {url|assign:downloadUrl op="download" path=$publishedMonograph->getId()|to_array:$publicationFormatId:$availableFile->getFileIdAndRevision()}
                {/if}


                <a href="{$downloadUrl}">
                    <span title="{$availableFile->getDocumentType()|upper|escape}" class="sprite {$availableFile->getDocumentType()|escape}"></span>                    {if $availableFile->getDirectSalesPrice()}
                    {translate key="payment.directSales.purchase amount=$availableFile->getDirectSalesPrice() currency=$currency"}
                    {else}
                        {* {translate key="payment.directSales.download"}*}{*<span title="{translate key="monograph.accessLogoOpen.altText"}" class="sprite openaccess"></span>*}
                        {translate key="bookfile.download"}   
                        {/if}</a>
                    
        {/foreach}
            
            </div>
</li>
{/if}

