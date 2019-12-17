{**
* templates/frontend/components/statistics.tpl
*
*}


{assign var=dateStart value="2019-05-25"}
{assign var=dateToday value=$smarty.now|date_format:"%Y-%m-%d"}
{url|assign:urlLP router=$smarty.const.ROUTE_PAGE page="catalog" op="book" path=$monograph->getBestId()}
{translate key="submission.statistics.description"}
<br />
<h4>Landing Page</h4>
{*<div id="widgetIframeGraph">
<iframe style="width:100%;height:350px;" src="https://journals.muni.cz/analytics/index.php?module=Widgetize&action=iframe&forceView=1&viewDataTable=graphEvolution&widget=1&moduleToWidgetize=VisitsSummary&actionToWidgetize=getEvolutionGraph&idSite=12&disableLink=1&widget=1&period=day&date=yesterday&disableLink=1&segment=actionUrl=={$urlLP}" scrolling="no" frameborder="0" marginheight="0" marginwidth="0">

</iframe>
</div>*}
<br/>
<div id="widgetIframeLandingPage">
    <iframe style="width:100%;height:210px;" src="https://journals.muni.cz/analytics/index.php?module=Widgetize&action=iframe&forceView=1&viewDataTable=sparklines&widget=1&moduleToWidgetize=VisitsSummary&actionToWidgetize=get&idSite=12&disableLink=1&widget=1&period=range&date={$dateStart},{$dateToday}&segment=pageUrl=@{$urlLP}" scrolling="no" frameborder="0" marginheight="0" marginwidth="0">

    </iframe>
</div>    

{foreach from=$publicationFormats item=publicationFormat}
    {assign var=publicationFormatId value=$publicationFormat->getId()}
    {assign var=nazevFormatu value=$publicationFormat->getLocalizedName()}
    {if !$nazevFormatu|strstr:"Android" && !$nazevFormatu|strstr:"iOS"}
    {if $nazevFormatu|strstr:"E-kniha" || $nazevFormatu|strstr:"E-book"}
        
            {pluck_files assign=pubFormatFiles files=$nonChapterFiles by="publicationFormat" value=$publicationFormat->getId()}
            <h4>{$nazevFormatu|escape|truncate:100:"..."}</h4>

            {url|assign:viewUrl router=$smarty.const.ROUTE_PAGE page="catalog" op="view" path=$monograph->getBestId()|to_array:$publicationFormatId}
            {url|assign:downloadUrl router=$smarty.const.ROUTE_PAGE page="catalog" op="download" path=$monograph->getBestId()|to_array:$publicationFormatId}

            {if !$publicationFormat->getRemoteUrl()}

                {* Only one resource allowed per format, so mimic single-file-download *}
                <div class="widgetIframeFormat">
                    <iframe style="width:100%;height:210px;" src="https://journals.muni.cz/analytics/index.php?module=Widgetize&action=iframe&forceView=1&viewDataTable=sparklines&widget=1&moduleToWidgetize=VisitsSummary&actionToWidgetize=get&idSite=12&disableLink=1&widget=1&period=range&date={$dateStart},{$dateToday}&segment=actionUrl=@{$viewUrl},actionUrl=@{$downloadUrl}" scrolling="no" frameborder="0" marginheight="0" marginwidth="0">

                    </iframe>
                </div> 
            {else}
                <div class="widgetIframeFormatRemote">
                    <iframe style="width:100%;height:210px;" src="https://journals.muni.cz/analytics/index.php?module=Widgetize&action=iframe&forceView=1&viewDataTable=sparklines&widget=1&moduleToWidgetize=VisitsSummary&actionToWidgetize=get&idSite=12&disableLink=1&widget=1&segment=actionUrl=@{$publicationFormat->getRemoteUrl()}&period=range&date={$dateStart},{$dateToday}" scrolling="no" frameborder="0" marginheight="0" marginwidth="0">

                    </iframe>
                </div> 
            {/if}
        {/if}
    {/if}
{/foreach}

{include file="frontend/components/altmetrics.tpl" doiAltmetric=$doiAltmetric isbnAltmetric=$isbnAltmetric} 



{* Generate the download URL 
{url|assign:downloadUrl op="view" path=$monograph->getBestId()|to_array:$publicationFormatId:$downloadFile->getBestId():$downloadFile->getFlipbookChecker()}
{*Show icon

{if $downloadFile->getDocumentType()==$smarty.const.DOCUMENT_TYPE_PDF}
{assign var=iconType value="icon-file-pdf-o"}
{elseif $downloadFile->getDocumentType()==$smarty.const.DOCUMENT_TYPE_HTML}
{assign var=iconType value="icon-eye"}
{elseif $downloadFile->getDocumentType()==$smarty.const.DOCUMENT_TYPE_ZIP && $downloadFile->flipbookFileExists()}
{assign var=iconType value="icon-book"}
{else}
{assign var=iconType value="icon-download"}
{/if}
{* Display the download link 
<a href="{$downloadUrl}{if $zlatyFond}#zlaty-fond{else}#preview{/if}" class="cmp_download_link {$downloadFile->getDocumentType()}" >
{if $useFilename}
{if $downloadFile->getDirectSalesPrice() && $downloadFile->getSalesType() == "directSales"}
<span class="icon {$iconType}"></span>{translate key="payment.directSales.purchase" format=$downloadFile->getLocalizedName() amount=$currency->format($downloadFile->getDirectSalesPrice()) currency=$currency->getCodeAlpha()}
{elseif $downloadFile->getDirectSalesPrice() && $downloadFile->getSalesType() == "forRegistered"}
<span class="icon {$iconType}"></span>{translate key="payment.directSales.forRegistered.view" format=$downloadFile->getLocalizedName()}
{else}
<span class="icon {$iconType}"></span>{$downloadFile->getLocalizedName()}
{/if}
{if !($downloadFile->getDocumentType()==$smarty.const.DOCUMENT_TYPE_ZIP && $downloadFile->flipbookFileExists())}
<span class="tag tag__format">{$downloadFile->getDocumentType()}, {$downloadFile->getNiceFileSize()}</span>
{/if}
{else}
{if $downloadFile->getDirectSalesPrice() && $downloadFile->getSalesType() == "directSales"}
<span class="icon {$iconType}"></span>{translate key="payment.directSales.purchase" format=$publicationFormat->getLocalizedName() amount=$currency->format($downloadFile->getDirectSalesPrice()) currency=$currency->getCodeAlpha()}
{elseif $downloadFile->getDirectSalesPrice() && $downloadFile->getSalesType() == "forRegistered"}
<span class="icon {$iconType}"></span>{translate key="payment.directSales.forRegistered.view" format=$publicationFormat->getLocalizedName()}
{else}
<span class="icon {$iconType}"></span>{$publicationFormat->getLocalizedName()}
{/if}
{if !($downloadFile->getDocumentType()==$smarty.const.DOCUMENT_TYPE_ZIP && $downloadFile->flipbookFileExists())}
<span class="tag tag__format">{$downloadFile->getDocumentType()}, {$downloadFile->getNiceFileSize()}</span>
{/if}
{/if}
</a>











{assign var=urlLP value="{$baseURL}/}
{assign var=urlPDF value=}
{assign var=urlDownload value=}
{assign var=urlFlipbook value=}*}


{*<div id="widgetIframeGraph"><iframe width="100%" height="350" src="https://journals.muni.cz/analytics/index.php?module=Widgetize&action=iframe&forceView=1&viewDataTable=graphEvolution&widget=1&moduleToWidgetize=VisitsSummary&actionToWidgetize=getEvolutionGraph&idSite=12&period=day&date=yesterday&disableLink=1&widget=1" scrolling="no" frameborder="0" marginheight="0" marginwidth="0"></iframe></div>

<div id="widgetIframeLandingPage"><iframe width="100%" height="350" src="https://journals.muni.cz/analytics/index.php?module=Widgetize&action=iframe&forceView=1&viewDataTable=sparklines&widget=1&moduleToWidgetize=VisitsSummary&actionToWidgetize=get&idSite=12&period=day&date=yesterday&disableLink=1&widget=1" scrolling="no" frameborder="0" marginheight="0" marginwidth="0"></iframe></div>

<div id="widgetIframeGraphPDF"><iframe width="100%" height="350" src="https://journals.muni.cz/analytics/index.php?module=Widgetize&action=iframe&forceView=1&viewDataTable=graphEvolution&widget=1&moduleToWidgetize=VisitsSummary&actionToWidgetize=getEvolutionGraph&idSite=12&period=day&date=yesterday&disableLink=1&widget=1" scrolling="no" frameborder="0" marginheight="0" marginwidth="0"></iframe></div>

<div id="widgetIframePDF"><iframe width="100%" height="350" src="https://journals.muni.cz/analytics/index.php?module=Widgetize&action=iframe&forceView=1&viewDataTable=sparklines&widget=1&moduleToWidgetize=VisitsSummary&actionToWidgetize=get&idSite=12&period=day&date=yesterday&disableLink=1&widget=1" scrolling="no" frameborder="0" marginheight="0" marginwidth="0"></iframe></div>
*}



{*  Graf na začátku - posledních 30 dní

https://journals.muni.cz/analytics/index.php?module=Widgetize&action=iframe&forceView=1&viewDataTable=graphEvolution&widget=1&moduleToWidgetize=VisitsSummary&actionToWidgetize=getEvolutionGraph&idSite=12&period=day&date=yesterday&disableLink=1&widget=1

https://journals.muni.cz/analytics/index.php?module=Widgetize&action=iframe&forceView=1&viewDataTable=sparklines&widget=1&moduleToWidgetize=VisitsSummary&actionToWidgetize=get&idSite=12&period=day&date=yesterday&disableLink=1&widget=1 &period=range&date=2018-05-28,2019-05-28&disableLink=1&segment=actionUrl==https://munispace.muni.cz/library/catalog/book/1235

Landing Page (od data)

https://journals.muni.cz/analytics/index.php?module=Widgetize&action=iframe&containerId=VisitOverviewWithGraph&widget=1&moduleToWidgetize=CoreHome&actionToWidgetize=renderWidgetContainer&idSite=12&period=range&date=2018-05-28,2019-05-28&disableLink=1&segment=actionUrl==https://munispace.muni.cz/library/catalog/book/1235

https://journals.muni.cz/analytics/index.php?module=Widgetize&action=iframe&forceView=1&viewDataTable=sparklines&widget=1&moduleToWidgetize=VisitsSummary&actionToWidgetize=get&idSite=12&disableLink=1&widget=1&period=range&date=2018-05-28,2019-05-28&segment=actionUrl==https://munispace.muni.cz/library/catalog/book/1235

PDF - zobrazení a stažení  (od data)

https://journals.muni.cz/analytics/index.php?module=Widgetize&action=iframe&containerId=VisitOverviewWithGraph&widget=1&moduleToWidgetize=CoreHome&actionToWidgetize=renderWidgetContainer&idSite=12&period=range&date=2018-05-28,2019-05-28&disableLink=1&widget=1&segment=actionUrl=@https://munispace.muni.cz/library/catalog/view/1158/3349/864-2/0,downloadUrl=@https://munispace.muni.cz/library/catalog/download/1158/3349/864-2

https://journals.muni.cz/analytics/index.php?module=Widgetize&action=iframe&forceView=1&viewDataTable=sparklines&widget=1&moduleToWidgetize=VisitsSummary&actionToWidgetize=get&idSite=12&disableLink=1&widget=1&period=range&date=2018-05-28,2019-05-28&disableLink=1&widget=1&segment=actionUrl=@https://munispace.muni.cz/library/catalog/view/1158/3349/864-2/0,downloadUrl=@https://munispace.muni.cz/library/catalog/download/1158/3349/864-2



https://journals.muni.cz/analytics/index.php?module=API&method=ImageGraph.get&apiModule=VisitsSummary&apiAction=get&token_auth=anonymous&graphType=evolution&width=500&height=250&idSite=12&period=day&date=previous&segment=actionUrl=@https://munispace.muni.cz/library/catalog/view/1158/3349/864-2/0,downloadUrl=@https://munispace.muni.cz/library/catalog/download/1158/3349/864-2

&method=ImageGraph.get&apiModule=VisitsSummary&apiAction=get&token_auth=anonymous&graphType=evolution&width=500&height=250



https://journals.muni.cz/analytics/index.php?module=Widgetize&action=iframe&forceView=1&viewDataTable=graphEvolution&widget=1&moduleToWidgetize=VisitsSummary&actionToWidgetize=getEvolutionGraph&idSite=12&period=day&date=yesterday&disableLink=1&widget=1*}