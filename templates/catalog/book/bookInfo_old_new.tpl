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

<div class="bookInfo">
    {*{assign var="cena" value=$publishedMonograph->getLocalizedCena()|strip_unsafe_html}
    {assign var="cena_ebook" value=$publishedMonograph->getLocalizedCenaEbook()|strip_unsafe_html}
    {assign var="pocetStran" value=$publishedMonograph->getLocalizedPocetStran()|strip_unsafe_html}*}
    {assign var="muPracoviste" value=$publishedMonograph->getLocalizedMuPracoviste()|strip_unsafe_html}
    {*{assign var="urlOC" value=$publishedMonograph->getLocalizedUrlOC()|strip_unsafe_html}
    {assign var="urlOC_ebook" value=$publishedMonograph->getLocalizedUrlOCEbook()|strip_unsafe_html}*}
    {assign var="urlWeb" value=$publishedMonograph->getLocalizedUrlWeb()|strip_unsafe_html}
    {assign var="bibliografickaCitace" value=$publishedMonograph->getLocalizedBibliografickaCitace()|strip_unsafe_html}
    {assign var="poznamka" value=$publishedMonograph->getLocalizedPoznamka()|strip_unsafe_html}
    {assign var="rightsTyp" value=$publishedMonograph->getLocalizedRightsTyp()|strip_unsafe_html}
    {assign var="rightsDrzitel" value=$publishedMonograph->getLocalizedRightsDrzitel()|strip_unsafe_html}
    {assign var="rightsTrvani" value=$publishedMonograph->getLocalizedRightsTrvani()|strip_unsafe_html}
    {assign var="dedikace" value=$publishedMonograph->getLocalizedDedikace()|strip_unsafe_html}
    
    
	<div class="bookInfoHeader">
		<h3>{$publishedMonograph->getLocalizedFullTitle()|strip_unsafe_html}</h3>
		<div class="authorName">{$publishedMonograph->getAuthorString()}</div>
	</div>

	<div id="bookInfoTabs">
		<ul>
			<li><a href="#abstractTab">{translate key="submission.synopsis"}</a></li>
			{if $publishedMonograph->getWorkType() == WORK_TYPE_EDITED_VOLUME && $chapters|@count != 0}<li><a href="#contentsTab">{translate key="common.contents"}</a></li>{/if}
			{if $availableFiles|@count != 0}<li><a href="#downloadTab">{translate key="submission.download"}</a></li>{/if}
                        
                        <li {if count($publicationFormats) < 1 && empty($poznamka) && empty($bibliografickaCitace) && empty($urlWeb)  &&empty($muPracoviste) && empty($rightsTyp) && empty($rightsDrzitel) && empty($rightsTrvani) && empty($dedikace))}style="display:none"{/if}><a href="#viceInfoTab">{translate key="submission.viceInformaci"}</a></li>
			{call_hook|assign:"sharingCode" name="Templates::Catalog::Book::BookInfo::Sharing"}
			{if !is_null($sharingCode) || !empty($blocks)}
				<li><a href="#sharingTab">{translate key="submission.sharing"}</a></li>
			{/if}
                        
                </ul>
                <div id="viceInfoTab" class="vice_informaciTab">
                    {assign var=publicationFormats value=$publishedMonograph->getPublicationFormats(true)}
                    <div class="tabulka_info">
                        <ul>
                    {assign var=viceInformaci value=0}
                    {if count($publicationFormats) >= 1}
                                {foreach from=$publicationFormats item="publicationFormat"}
                                        {if $publicationFormat->getIsApproved()}
                                            {include file="catalog/book/bookPublicationFormatInfoMunipress.tpl" publicationFormat=$publicationFormat availableFiles=$availableFiles}
                                        {/if}{* $publicationFormat->getIsApproved() *}
                                {/foreach}{* $publicationFormats *}
                                        {assign var=viceInformaci value=1}
                    {/if}
                    {if !empty($muPracoviste)}
                        <li>
                            {translate key="submission.muPracoviste"} <span class="vpravo">{$muPracoviste}</span>
                        </li>
                        {assign var=viceInformaci value=1}
                    {/if}
                    {if !empty($muPracoviste)}
                        <li>
                            {translate key="submission.muPracoviste"} <span class="vpravo">{$muPracoviste}</span>
                        </li>
                        {assign var=viceInformaci value=1}
                    {/if}
                    {if !empty($urlWeb)}
                        <li>
                            {translate key="submission.url.web"} <span class="vpravo"><a href={$urlWeb} target="_blank">{translate key="informace.url.web"}</a></span>
                        </li>
                        {assign var=viceInformaci value=1}
                    {/if}
                    </ul>                
                    </div>
                    <div class="textoveInfo">

                        {if !empty($bibliografickaCitace)}
                            <h3>{translate key="submission.bibliografickaCitace"}</h3> 
                            {$bibliografickaCitace}
                            {assign var=viceInformaci value=1}
                        {/if}

                        {if !empty($poznamka)}
                            <h3>{translate key="submission.poznamka"}</h3> 
                            {$poznamka}
                            {assign var=viceInformaci value=1}
                        {/if}
                    </div>


                    {if $viceInformaci == 1}<hr />{/if}


                    <div class="tabulka_info">
                        <ul>
                    {if !empty($rightsTyp)}
                        <li>
                            {translate key="submission.rights.typ"} <span class="vpravo">{$rightsTyp}</span>
                        </li>
                    {/if}
                    {if !empty($rightsDrzitel)}
                        <li>
                            {translate key="submission.rights.drzitel"} <span class="vpravo">{$rightsDrzitel}</span>
                        </li>
                    {/if}
                    {if !empty($rightsTrvani)}
                        <li>
                            {translate key="submission.rights.trvani"} <span class="vpravo">{$rightsTrvani}</span>
                        </li>
                    {/if}
                    </ul>                
                    </div>
                    <div class="textoveInfo">

                        {if !empty($dedikace)}
                            <h3>{translate key="submission.dedikace"}</h3> 
                            {$dedikace}
                        {/if}

                    </div>
                </div>
		<div id="abstractTab">
			{$publishedMonograph->getLocalizedAbstract()|strip_unsafe_html}

			<br />
                        {assign var=authors value=$publishedMonograph->getAuthors()}
                        {translate key="catalog.autori"}:
			{foreach from=$authors item=author}
                            {assign var=biography value=$author->getLocalizedBiography()|strip_unsafe_html}
                            {assign var=url value=$author->getUrl()|strip_unsafe_html}
                            {assign var=uco value=$author->getUCO()|strip_unsafe_html}
                            <p>{if $biography != '' || $url != ''}<a href="#" onclick="return hs.htmlExpand(this, {ldelim} contentId: 'autor_bio_{$author->getId()}' {rdelim} )" class="highslide">
                                    {$author->getFullName()}</a>
				{elseif $uco != '' && $uco != '0' && $biography == '' && $url == ''}<a href='http://www.muni.cz/people/{$uco}' class="highslide" target="_blank">{$author->getFullName()}</a>
                                {else}
                                    {$author->getFullName()}
                                {/if}</p>
                                 
                                    {if $biography != '' || $url != ''}
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
                                                {if $url != ''}<a href="{$url()|escape:"quotes"}" target="_new">{$user->getUrl()|escape}</a><br/>{/if}
                                                {if $uco != '' && $uco != '0'}
                                                    <table style="border:none">
                                                        <tbody>
                                                            <tr>
                                                                <td style="padding-right:15px;">
                                                                    {translate key="vizitka.identifikace"}
                                                                </td><td>
                                                                    {$uco|escape} <em>{translate key="vizitka.uco"}</em>
                                                                </td>
                                                            </tr><tr>
                                                                <td>                    
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
		{if $availableFiles|@count != 0}
		<div id="downloadTab">
			{assign var=publicationFormats value=$publishedMonograph->getPublicationFormats()}
			{assign var=currency value=$currentPress->getSetting('currency')}
			{if !$loggedInUsername}<p>{translate key="catalog.loginRequiredForPayment"}</p>{/if}
			{if $useCollapsedView}
				<ul class="odr_prazdne">
					{foreach from=$publicationFormats item=publicationFormat}
						{if $publicationFormat->getIsAvailable()}
                                                    <strong>{$publicationFormat->getLocalizedName()|escape}</strong>
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


