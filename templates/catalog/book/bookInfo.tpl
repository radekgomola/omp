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
    {assign var="cisloVydani" value=$publishedMonograph->getCisloVydani()|strip_unsafe_html}
    {if $publishedMonograph->getLicenceZverejnit()==1}
        {assign var="rightsTyp" value=$publishedMonograph->getLicenceTyp()|strip_unsafe_html}
        {assign var="rightsDrzitel" value=$publishedMonograph->getLicenceDrzitel()|strip_unsafe_html}
        {assign var="rightsTrvani" value=$publishedMonograph->getLicenceExpirace()|strip_unsafe_html}
    {/if}
   
    {assign var="typPublikace" value=$publishedMonograph->getLocalizedTypPublikace()|strip_unsafe_html}
    {assign var="poznamka" value=$publishedMonograph->getLocalizedPoznamka()|strip_unsafe_html}
    {assign var="bibliografickaCitace" value=$publishedMonograph->getLocalizedBibliografickaCitace()|strip_unsafe_html}
    {assign var="dedikace" value=$publishedMonograph->getLocalizedDedikace()|strip_unsafe_html}
    {assign var="muPracoviste" value=$publishedMonograph->getLocalizedFakulta()|strip_unsafe_html}
    
    {if $publishedMonograph->getAKolektiv()==1}
        {assign var="a_kol" value=", a kol."}
    {else}
        {assign var="a_kol" value=""}
    {/if}
    
    
	<div class="bookInfoHeader">
		<h3>{$publishedMonograph->getLocalizedFullTitle()|strip_unsafe_html}</h3>
		<div class="authorName">{$publishedMonograph->getAuthorString()}{$a_kol}</div>
	</div>
	<div id="bookInfoTabs">
		<ul>
			<li><a href="#abstractTab">{translate key="submission.synopsis"}</a></li>
			{if $publishedMonograph->getWorkType() == WORK_TYPE_EDITED_VOLUME && $chapters|@count != 0}<li><a href="#contentsTab">{translate key="common.contents"}</a></li>{/if}
			{if $availableFiles|@count != 0}<li><a href="#downloadTab">{translate key="submission.download"}</a></li>{/if}
                        
                        <li><a href="#viceInfoTab">{translate key="submission.viceInformaci"}</a></li>
			{call_hook|assign:"sharingCode" name="Templates::Catalog::Book::BookInfo::Sharing"}
			{if !is_null($sharingCode) || !empty($blocks)}
				<li><a href="#sharingTab">{translate key="submission.sharing"}</a></li>
			{/if}
                        
                </ul>
                <div id="viceInfoTab">
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
                                        <br />
                    {/if}
                    {if !empty($typPublikace)}
                        <li>
                            <strong>{translate key="submission.typ_02_58"}</strong><span class="vpravo">{$typPublikace}</span>
                        </li>
                        {assign var=viceInformaci value=1}
                    {/if}
                    {if !empty($cisloVydani) && $cisloVydani !=0}
                        <li>
                            <strong>{translate key="submission.cisloVydani"}</strong><span class="vpravo">{$cisloVydani}.</span>
                        </li>
                        {assign var=viceInformaci value=1}
                    {/if}
                    {if !empty($muPracoviste)}
                        <li>
                            <strong>{translate key="submission.muPracoviste"}</strong> <span class="vpravo">{$muPracoviste}</span>
                        </li>
                        {assign var=viceInformaci value=1}
                    {/if}
                    {if !empty($urlWeb)}
                        <li>
                            <strong>{translate key="submission.url.web"}</strong> <span class="vpravo"><a href={$urlWeb} target="_blank">{translate key="informace.url.web"}</a></span>
                        </li>
                        {assign var=viceInformaci value=1}
                    {/if}
                    
                    </ul>                
                    </div>
                    <div class="textoveInfo">

                        {if !empty($bibliografickaCitace)}
                            <strong>{translate key="submission.bibliografickaCitace"}</strong> <br />
                            {$bibliografickaCitace}
                            {assign var=viceInformaci value=1}
                            <br />
                        {/if}

                        {if !empty($poznamka)}
                            <strong>{translate key="submission.poznamka"}</strong> <br />
                            {$poznamka}
                            {assign var=viceInformaci value=1}
                        {/if}
                    </div>


                    {if $viceInformaci == 1 && (!empty($rightTyp) || !empty($rightsDrzitel) || !empty($rightsTrvani) || !empty($dedikace)) }<hr />{/if}


                    <div class="tabulka_info">
                        <ul>
                    {if !empty($rightsTyp)}
                        <li>
                            <strong>{translate key="submission.rights.typ"}</strong> <span class="vpravo">{$rightsTyp}</span>
                        </li>
                    {/if}
                    {if !empty($rightsDrzitel)}
                        <li>
                            <strong>{translate key="submission.rights.drzitel"}</strong> <span class="vpravo">{$rightsDrzitel}</span>
                        </li>
                    {/if}
                    {if !empty($rightsTrvani)}
                        <li>
                            <strong>{translate key="submission.rights.trvani"}</strong> <span class="vpravo">{$rightsTrvani}</span>
                        </li>
                    {/if}
                    </ul>                
                    </div>
                    <div class="textoveInfo">

                        {if !empty($dedikace)}
                            <strong>{translate key="submission.dedikace"}</strong> <br />
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
                                    <strong>{$author->getFullName()}</strong></a>
				{elseif $uco != '' && $uco !='0' && $biography == '' && $url == ''}<a href='http://www.muni.cz/people/{$uco}' class="highslide" target="_blank"><strong>{$author->getFullName()}</strong></a>
                                {else}
                                    <strong>{$author->getFullName()}</strong>
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
                                                {if $url != ''}<a href="{$url()|escape:"quotes"}" target="_new">{$autor->getUrl()|escape}</a><br/>{/if}
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


