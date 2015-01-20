{**
 * templates/catalog/book/bookInfo.tpl
 *
 * Copyright (c) 2014 Simon Fraser University Library
 * Copyright (c) 2003-2014 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Display the information pane of a public-facing book view in the catalog.
 *}

<script type="text/javascript">
	// Attach the tab handler.
	$(function() {ldelim}
		$('#bookInfoTabs').pkpHandler(
			'$.pkp.controllers.TabHandler',
			{ldelim}
				notScrollable: true
			{rdelim}
		);
	{rdelim});
</script>

<script type="text/javascript">
  hs.minWidth = 1100;
</script>

<div class="bookInfo">
    {assign var="urlWeb" value=$publishedMonograph->getLocalizedUrlWeb()|strip_unsafe_html}
   
    {assign var="poznamka" value=$publishedMonograph->getLocalizedPoznamka()|strip_unsafe_html}
    {assign var="dedikace" value=$publishedMonograph->getLocalizedDedikace()|strip_unsafe_html}
    {assign var="muPracovisteCode" value=$publishedMonograph->getFakulta()}
    
    {assign var="munipress" value="munipress.fakulty."}    
    {translate|assign:"muPracoviste" key="munipress.fakulty.$muPracovisteCode"}
    
    {assign var=publicationFormats value=$publishedMonograph->getPublicationFormats()}
    {foreach from=$publicationFormats item=publicationFormat}
        {if $publicationFormat->getCalameoHash() || $publicationFormat->getUrlStazeni()}
            {assign var=zobrazDownload value=1}
        {/if}
    {/foreach}
    
	<div class="bookInfoHeader">
		<h3>{$publishedMonograph->getLocalizedFullTitle()|strip_unsafe_html}</h3>
		<div class="authorName">{$publishedMonograph->getAuthorString()}{if $publishedMonograph->getAKolektiv()==1}, {translate key="submission.aKol"}{/if}</div>
	</div>
	<div id="bookInfoTabs">
		<ul>
			<li><a href="#abstractTab">{translate key="submission.synopsis"}</a></li>
			{if $publishedMonograph->getWorkType() == WORK_TYPE_EDITED_VOLUME && $chapters|@count != 0}<li><a href="#contentsTab">{translate key="common.contents"}</a></li>{/if}
			{if $availableFiles|@count != 0 || $zobrazDownload}<li><a href="#downloadTab">{translate key="submission.download"}</a></li>{/if}
                        
                        <li><a href="#viceInfoTab">{translate key="submission.viceInformaci"}</a></li>
			{call_hook|assign:"sharingCode" name="Templates::Catalog::Book::BookInfo::Sharing"}
			{if !is_null($sharingCode) || !empty($blocks)}
				<li><a href="#sharingTab">{translate key="submission.sharing"}</a></li>
			{/if}
                        
                </ul>
                <div id="viceInfoTab">
                    {assign var=publicationFormats value=$publishedMonograph->getPublicationFormats(true)}
                    
                       
                    {assign var=viceInformaci value=0}
                    {if count($publicationFormats) >= 1}
                                {foreach from=$publicationFormats item="publicationFormat"}
                                        {if $publicationFormat->getIsApproved()}
                                            {include file="catalog/book/bookPublicationFormatInfoMunipress.tpl" publicationFormat=$publicationFormat availableFiles=$availableFiles}
                                        {/if}{* $publicationFormat->getIsApproved() *}
                                {/foreach}{* $publicationFormats *}
                                        {assign var=viceInformaci value=1}
                    {/if}
                        <div class="tabulka_info">
                    <ul>
                    {if !empty($cisloVydani) && $cisloVydani !=0}
                        <li>
                            <strong>{translate key="submission.cisloVydani"}</strong><span class="vpravo">{$cisloVydani}.</span>
                        </li>
                        {assign var=viceInformaci value=1}
                    {/if}
                    {*{if !empty($muPracovisteCode)}
                        <li>
                            <strong>{translate key="submission.muPracoviste"}</strong> <span class="vpravo">{$muPracoviste}</span>
                        </li>
                        {assign var=viceInformaci value=1}
                    {/if}*}
                    {if !empty($urlWeb)}
                        <li>
                            <strong>{translate key="submission.url.web"}</strong> <span class="vpravo"><a href={$urlWeb} target="_blank">{translate key="informace.url.web"}</a></span>
                        </li>
                        {assign var=viceInformaci value=1}
                    {/if}
                    {foreach from=$authors item=author}
                        {if $author->getZobrazOstatni() == 1}
                            {assign var=uco value=$author->getUCO()}
                            <li>
                                <strong>{$author->getLocalizedUserGroupName()}</strong> <span class="vpravo">{if $uco != '' && $uco !='0'}<a href='http://www.muni.cz/people/{$uco}' class="highslide" target="_blank">{$author->getFullName()}</a>{else}{$author->getFullName()}{/if}</span>
                            </li>
                        {assign var=viceInformaci value=1}
                        {/if}
                    {/foreach}
                    {if $keywords}
                        <li>
                            <strong>{translate key="common.keywords"}</strong>
                            <span class="vpravo">
                                {assign var=prvni value=1}
                                {foreach from=$keywords item=klicoveSlovo}
                                    {if $prvni}
                                        {$klicoveSlovo}
                                        {assign var=prvni value=0}
                                    {else}
                                    , {$klicoveSlovo}
                                    {/if}
                                {/foreach}
                            </span>
                        </li>
                        {assign var=viceInformaci value=1}
                    {/if}
                    {if $languages}
                        <li>
                            <strong>{translate key="common.languages"}</strong>
                            <span class="vpravo">
                                {strip}
                                    {assign var=prvni value=1}
                                    {foreach from=$languages item=jedenJazyk}
                                        {if $prvni}
                                            {$jedenJazyk}
                                            {assign var=prvni value=0}
                                        {else}
                                            , {$jedenJazyk}
                                        {/if}
                                    {/foreach}
                                {/strip}
                            </span>
                        </li>
                        {assign var=viceInformaci value=1}
                    {/if}                    
                    </ul>                
                    </div>
                    <div class="textoveInfo">

                        {if !empty($poznamka)}
                            <strong>{translate key="submission.poznamka"}</strong> <br />
                            {$poznamka}
                            {assign var=viceInformaci value=1}
                        {/if}
                        
                        {if !empty($dedikace)}
                            <strong>{translate key="submission.dedikace"}</strong> <br />
                            {$dedikace}
                        {/if}
                    </div>                    
                </div>
		<div id="abstractTab">
			{$publishedMonograph->getLocalizedAbstract()|strip_unsafe_html}

			<br />
                        
                        {translate key="catalog.autori"}:
                        {foreach from=$authors item=author}
                            {if $author->getZobrazAutori() == 1}
                                {assign var=uco value=$author->getUCO()|strip_unsafe_html}
                                {assign var=biography value=$author->getLocalizedBiography()|strip_unsafe_html}
                                {assign var=url value=$author->getUrl()|strip_unsafe_html}
                                {assign var=authorId value=$author->getId()}
                                {assign var=autorovyPublikace value=$autorskePublikace[$authorId]}
                                {$autorovyPublikace->getCount()}
                                <p>{if $biography != '' || $url != '' || $autorovyPublikace}<a href="#" onclick="return hs.htmlExpand(this, {ldelim} contentId: 'autor_bio_{$author->getId()}' {rdelim} )" class="highslide">
                                        <strong>{$author->getFullName()}</strong></a>
                               {* {elseif $uco != '' && $uco !='0' && $biography == '' && $url == ''}<a href='http://www.muni.cz/people/{$uco}' class="highslide" target="_blank"><strong>{$author->getFullName()}</strong></a>*}
                                {else}
                                    <strong>{$author->getFullName()}</strong>
                                {/if}</p>

                                {if $biography != '' || $url != '' || $autorovyPublikace}
                                    <div class="highslide-html-content" id="autor_bio_{$author->getId()}">
                                        <div class="highslide-header">
                                            <ul>
                                                <li class="highslide-close">
                                                    <a href="#" onclick="return hs.close(this)">{translate key="highslide.zavrit"}</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="highslide-body">
                                            <h3>
                                                {$author->getFullName()}
                                            </h3>
                                            {if $url != ''}<a href="{$url()|escape:"quotes"}" target="_new">{$autor->getUrl()|escape}</a><br/>{/if}
                                            {if $uco != '' && $uco != '0'}
                                                <table style="border:none">
                                                    <tbody>
                                                        <tr>
                                                            <td style="padding-right:25px; font-weight: bold;">
                                                                {translate key="vizitka.identifikace"}
                                                            </td><td>
                                                                {$uco|escape} <em>{translate key="vizitka.uco"}</em>
                                                            </td>
                                                        </tr><tr>
                                                            <td style="font-weight: bold;">                    
                                                                {translate key="vizitka.url"}
                                                            </td><td>
                                                                <a href="http://www.muni.cz/people/{$uco|escape:"quotes"}" target="_new">http://www.muni.cz/people/{$uco|escape}</a><br/>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            {/if}
                                            {if $biography != ''}
                                                <p>{$biography}</p>
                                            {/if}
                                            <div class="autorovy_publikace">
                                                {include file="catalog/book/authorsMonographs.tpl" publishedMonographs=$autorovyPublikace vyhledavaniAutori="true" title ='false'}
                                            </div>
                                        </div>
                                        <div class="highslide-footer">
                                            <div>
                                                <span class="highslide-resize" title="Resize">
                                                    <span></span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                {/if}
                            {/if}
{*=======
				{if $author->getIncludeInBrowse()}
					<p>{translate key="catalog.aboutTheAuthor" roleName=$author->getLocalizedUserGroupName()}: <strong>{$author->getFullName()}</strong></p>
					{assign var=biography value=$author->getLocalizedBiography()|strip_unsafe_html}
					{if $biography != ''}{$biography}{else}{translate key="catalog.noBioInfo"}{/if}
				{/if}
>>>>>>> omp-1_1_1-0*}
			{/foreach}
		</div>
		{if $publishedMonograph->getWorkType() == WORK_TYPE_EDITED_VOLUME && $chapters|@count != 0}
			<div id="contentsTab">
				{foreach from=$chapters item=chapter}
					<p>
						<strong>{$chapter->getLocalizedTitle()}</strong>
						{if $chapter->getLocalizedSubtitle() != '' }<br />{$chapter->getLocalizedSubtitle()}{/if}
						{assign var=chapterAuthors value=$chapter->getAuthorNamesAsString()}
						<div class="authorName">{$chapterAuthors}</div>
					</p>
				{/foreach}
			</div>
		{/if}
                
		{if $availableFiles|@count != 0 || $zobrazDownload}
		<div id="downloadTab">
			
			{assign var=currency value=$currentPress->getSetting('currency')}
			{if $useCollapsedView}
				<ul class="odr_prazdne">
					{foreach from=$publicationFormats item=publicationFormat}
						{if $publicationFormat->getIsAvailable()}
                                                    {*<strong>{$publicationFormat->getLocalizedName()|escape}</strong>*}
							{include file="catalog/book/bookFiles.tpl" availableFile=$availableFile publicationFormatId=$publicationFormat->getId() publishedMonograph=$publishedMonograph currency=$currency}
						{/if}
					{/foreach}
				</ul>
			{else}
				{foreach from=$publicationFormats item=publicationFormat}
					{assign var=publicationFormatId value=$publicationFormat->getId()}
					{if $publicationFormat->getIsAvailable() && $availableFiles[$publicationFormatId]}
						<div class="publicationFormatDownload" id="publicationFormat-download-{$publicationFormatId|escape}">
							{$publicationFormat->getLocalizedName()|escape}
							<ul class="odr_prazdne">
								{include file="catalog/book/bookFiles.tpl" availableFile=$availableFile publicationFormatId=$publicationFormatId publishedMonograph=$publishedMonograph currency=$currency}
							</ul>
						</div>
					{/if}
				{/foreach}
			{/if}{* useCollapsedView *}
		</div>
		{/if}
		{if !is_null($sharingCode) || !empty($blocks)}
			<div id="sharingTab">
				{$sharingCode}
				{foreach from=$blocks item=block key=blockKey}
					<div id="socialMediaBlock{$blockKey|escape}" class="pkp_helpers_clear">
						{$block}
					</div>
				{/foreach}
			</div>
		{/if}
	</div>
</div>


