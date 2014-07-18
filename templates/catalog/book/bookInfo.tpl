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
	<div class="bookInfoHeader">
		<h3>{$publishedMonograph->getLocalizedFullTitle()|strip_unsafe_html}</h3>
		<div class="authorName">{$publishedMonograph->getAuthorString()}</div>
	</div>

	<div id="bookInfoTabs">
		<ul>
			<li><a href="#abstractTab">{translate key="submission.synopsis"}</a></li>
			{if $publishedMonograph->getWorkType() == WORK_TYPE_EDITED_VOLUME && $chapters|@count != 0}<li><a href="#contentsTab">{translate key="common.contents"}</a></li>{/if}
			{if $availableFiles|@count != 0}<li><a href="#downloadTab">{translate key="submission.download"}</a></li>{/if}
			{call_hook|assign:"sharingCode" name="Templates::Catalog::Book::BookInfo::Sharing"}
			{if !is_null($sharingCode) || !empty($blocks)}
				<li><a href="#sharingTab">{translate key="submission.sharing"}</a></li>
			{/if}
                        <li><a href="#viceInfoTab">{translate key="submission.viceInformaci"}</a></li>
		</ul>

                <div id="viceInfoTab">
                    <table class="viceInformaci">
                        <tbody>
                            {if ! empty($publishedMonograph->getLocalizedPocetStran())}
                            <tr>
                                <td class="levyBlok">
                                    <h3>{translate key="submission.pocetStran"} </h3>
                                </td>
                                <td class="pravyBlokBlok">
                                    {$publishedMonograph->getLocalizedPocetStran(null)|strip_unsafe_html}
                                </td>
                            </tr>
                            {/if}
                            {if ! empty($publishedMonograph->getLocalizedMuPracoviste())}
                            <tr>
                                <td class="levyBlok">
                                    <h3>{translate key="submission.muPracoviste"} </h3>
                                </td>
                                <td class="pravyBlokBlok">
                                    {$publishedMonograph->getLocalizedMuPracoviste()|strip_unsafe_html}
                                </td>
                            </tr>
                            {/if}
                            {if ! empty($publishedMonograph->getLocalizedUrlOC())}
                            <tr>
                                <td class="levyBlok">
                                    <h3>{translate key="submission.url.oc"}</h3> 
                                </td>
                                <td class="pravyBlokBlok">
                                    {assign var="urlOC" value=$publishedMonograph->getLocalizedUrlOC()|strip_unsafe_html}
                                    <a href={$urlOC} target="_blank">{translate key="informace.url.oc"}</a>
                                </td>
                            </tr>
                            {/if}
                            {if ! empty($publishedMonograph->getLocalizedUrlWeb())}
                            <tr>
                                <td class="levyBlok">
                                    <h3>{translate key="submission.url.web"} </h3>
                                </td>
                                <td class="pravyBlokBlok">
                                    {assign var="urlWeb" value=$publishedMonograph->getLocalizedUrlWeb()|strip_unsafe_html}
                                    <a href={$urlWeb} target="_blank">{translate key="informace.url.web"}</a>
                                </td>
                            </tr>
                            {/if}
                            {if ! empty($publishedMonograph->getLocalizedBibliografickaCitace())}
                            <tr>
                                <td colspan="2">
                                   <h3> {translate key="submission.bibliografickaCitace"} </h3>
                                   <div class="viceInfoBlok"> 
                                        {$publishedMonograph->getLocalizedBibliografickaCitace()|strip_unsafe_html}
                                   </div>
                                </td>
                            </tr>
                            {/if}
                            {if ! empty($publishedMonograph->getLocalizedPoznamka())}
                            <tr>
                                <td colspan="2">
                                    <h3>{translate key="submission.poznamka"}</h3> 
                                    <div class="viceInfoBlok"> 
                                        {$publishedMonograph->getLocalizedPoznamka()|strip_unsafe_html}
                                    </div>
                                </td>
                            </tr>
                            {/if}
                            <tr>
                                <td colspan="2">
                                    <hr />
                                </td>
                            </tr>
                            <tr>
                                <td class="levyBlok">
                                    <h3>{translate key="submission.rights.typ"}</h3> 
                                </td>
                                <td class="pravyBlokBlok">
                                    {$publishedMonograph->getLocalizedRightsTyp()|strip_unsafe_html}
                                </td>
                            </tr>
                            <tr>
                                <td class="levyBlok">
                                    <h3>{translate key="submission.rights.drzitel"}</h3> 
                                </td>
                                <td class="pravyBlokBlok">
                                    {$publishedMonograph->getLocalizedRightsDrzitel()|strip_unsafe_html}
                                </td>
                            </tr>
                            <tr>
                                <td class="levyBlok">
                                    <h3>{translate key="submission.rights.trvani"}</h3> 
                                </td>
                                <td class="pravyBlokBlok">
                                    {$publishedMonograph->getLocalizedRightsTrvani()|strip_unsafe_html}
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <h3>{translate key="submission.dedikace"} </h3>
                                    <div class="viceInfoBlok"> 
                                        {$publishedMonograph->getLocalizedDedikace()|strip_unsafe_html}
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
		<div id="abstractTab">
			{$publishedMonograph->getLocalizedAbstract()|strip_unsafe_html}

			{assign var=authors value=$publishedMonograph->getAuthors()}
			{foreach from=$authors item=author}
				<p>{translate key="catalog.aboutTheAuthor"}: <strong>{$author->getFullName()}</strong></p>
				{assign var=biography value=$author->getLocalizedBiography()|strip_unsafe_html}
				{if $biography != ''}{$biography}{else}{translate key="catalog.noBioInfo"}{/if}
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
				<ul>
					{foreach from=$publicationFormats item=publicationFormat}
						{if $publicationFormat->getIsAvailable()}
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
							<ul>
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
