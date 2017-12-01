{**
* templates/frontend/objects/monograph_full.tpl
*
* Copyright (c) 2014-2017 Simon Fraser University Library
* Copyright (c) 2003-2017 John Willinsky
* Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
*
* @brief Display a full view of a monograph. Expected to be primary object on
*  the page.
*
* Many presses will need to add custom data to this object, either through
* plugins which attach to hooks on the page or by editing the template
* themselves. In order to facilitate this, a flexible layout markup pattern has
* been implemented. If followed, plugins and other content can provide markup
* in a way that will render consistently with other items on the page. This
* pattern is used in the .main_entry column and the .entry_details column. It
* consists of the following:
*
* <!-- Wrapper class which provides proper spacing between components -->
* <div class="item">
*     <!-- Title/value combination -->
*     <div class="label">Abstract</div>
*     <div class="value">Value</div>
* </div>
*
* All styling should be applied by class name, so that titles may use heading
* elements (eg, <h3>) or any element required.
*
* <!-- Example: component with multiple title/value combinations -->
* <div class="item">
*     <div class="sub_item">
*         <div class="label">DOI</div>
*         <div class="value">12345678</div>
*     </div>
*     <div class="sub_item">
*         <div class="label">Published Date</div>
*         <div class="value">2015-01-01</div>
*     </div>
* </div>
*
* <!-- Example: component with no title -->
* <div class="item">
*     <div class="value">Whatever you'd like</div>
* </div>
*
* Core components are produced manually below, but can also be added via
* plugins using the hooks provided:
*
* Templates::Catalog::Book::Main
* Templates::Catalog::Book::Details
*
* @uses $currentPress Press The press currently being viewed
* @uses $monograph Monograph The monograph to be displayed
* @uses $dateFormatShort string String defining date format that is passed to
*       smarty template function
* @uses $series Series The series this monograph is assigned to, if any.
* @uses $publicationFormats array List of PublicationFormat objects to display
* @uses $availableFiles array List of available MonographFiles
* @uses $chapters array List of chapters in monograph. Associative array
* @uses $sharingCode string Code snippet for a social sharing widget
* @uses $blocks array List of HTML snippets to display block elements
* @uses $currency Currency The Currency object representing the press's currency, if configured.
* @uses $licenseUrl string The URL which provides license information.
* @uses $ccLicenseBadge string An HTML string containing a CC license image and
*       text. Only appears when license URL matches a known CC license.
*}
<div class="obj_monograph_full">
    {assign var="urlWeb" value=$monograph->getLocalizedUrlWeb()|strip_unsafe_html}
    {assign var="poznamka" value=$monograph->getLocalizedPoznamka()|strip_unsafe_html}
    {assign var="monographID" value=$monograph->getId()}
    {pluck_files assign=nonChapterFiles files=$availableFiles by="chapter" value=0}

    <h2 class="bookTitle">
        {$monograph->getLocalizedFullTitle()|escape}
    </h2>
    <div class="authorName uppercase">{$monograph->getAuthorString()}{if $monograph->getAKolektiv()==1} {translate key="submission.a_kolektiv"}{/if}</div>
    <div class="monograph_full">
        <div class="grid">
            <div class="grid__cell size--l--3-12">
                {url|assign:coverImageUrl router=$smarty.const.ROUTE_COMPONENT component="submission.CoverHandler" op="cover" submissionId=$monograph->getId() random=$monograph->getId()|uniqid}
                <a href="{$coverImageUrl}" data-rel="lightcase:cover">
                    <div>

                        <img alt="{translate key="catalog.coverImageTitle" monographTitle=$monograph->getLocalizedFullTitle()|strip_tags|escape}" src="{url router=$smarty.const.ROUTE_COMPONENT component="submission.CoverHandler" op="cover" submissionId=$monograph->getId() random=$monograph->getId()|uniqid}" class="box-article-list__imgMunipress"/>

                    </div>
                </a>

                <div class="box-accordion">
                    {* Series *}
                    {if $series}
                        <div class="box-accordion__item">
                            <h3 class="box-accordion__title">
                                <a href="#" class="box-accordion__title__link">
                                    <span class="box-accordion__title__name">{translate key="series.series"}</span>
                                    <span class="icon icon-plus"></span>
                                </a>
                            </h3>
                            <div class="box-accordion__box">
                                <div class="box-accordion__inner">
                                    <div class="value">
                                        <a href="{url page="catalog" op="series" path=$series->getPath()}">
                                            {$series->getLocalizedFullTitle()|escape}
                                        </a>
                                    </div>
                                    {if $series->getOnlineISSN()}
                                        <div class="sub_item">
                                            <div class="label">{translate key="catalog.manage.series.onlineIssn"}</div>
                                            <div class="value">{$series->getOnlineISSN()|escape}</div>
                                        </div>
                                    {/if}
                                    {if $series->getPrintISSN()}
                                        <div class="sub_item">
                                            <div class="label">{translate key="catalog.manage.series.printIssn"}</div>
                                            <div class="value">{$series->getPrintISSN()|escape}</div>
                                        </div>
                                    {/if}
                                </div>
                            </div>
                        </div>
                    {/if}
                    {* Categories *}
                    {assign var=categories value=$monograph->getCategories()}
                    {if !$categories->wasEmpty()}
                        <div class="box-accordion__item is-open">
                            <h3 class="box-accordion__title">
                                <a href="#" class="box-accordion__title__link">
                                    <span class="box-accordion__title__name">{translate key="catalog.categories"}</span>
                                    <span class="icon icon-plus"></span>
                                </a>
                            </h3>
                            <div class="box-accordion__box">
                                <div class="box-accordion__inner">
                                    <ul>
                                        {iterate from=categories item=category}
                                        <li>
                                            <a href="{url op="category" path=$category->getPath()}">
                                                {$category->getLocalizedTitle()|strip_unsafe_html}
                                            </a>
                                        </li>
                                        {/iterate}
                                    </ul>
                                </div>
                            </div>
                        </div>
                    {/if}
                </div>
                {* Copyright statement *}
                {if $monograph->getCopyrightYear() && $monograph->getLocalizedCopyrightHolder()}
                    <div class="item copyright">
                        {translate|escape key="submission.copyrightStatement" copyrightYear=$monograph->getCopyrightYear() copyrightHolder=$monograph->getLocalizedCopyrightHolder()}
                    </div>
                {/if}

                {* License *}
                {if $licenseUrl}
                    <div class="item license">
                        {if $ccLicenseBadge}
                            {$ccLicenseBadge}
                        {else}
                            <a href="{$licenseUrl|escape}">
                                {translate key="submission.license"}
                            </a>
                        {/if}
                    </div>
                {/if}

                {call_hook name="Templates::Catalog::Book::Details"}
            </div>

            <div class="grid__cell size--l--9-12">
                <div class="box-tabs">
                    <ul class="box-tabs__menu">
                        <li class="box-tabs__menu__item">
                            <a href="#tab-1" class="box-tabs__menu__link js-tab-links is-active">{translate key="submission.synopsis"}</a>
                        </li>
                        {if $chapters|@count}
                            <li class="box-tabs__menu__item">
                                <a href="#tab-2" class="box-tabs__menu__link js-tab-links">{translate key="submission.chapters"}</a>
                            </li>
                        {/if}
                        {if $nonChapterFiles|@count || $remoteResources|@count}
                            <li class="box-tabs__menu__item">
                                <a href="#tab-3" class="box-tabs__menu__link js-tab-links">{translate key="submission.download"}</a>
                            </li>
                        {/if}
                        <li class="box-tabs__menu__item">
                            <a href="#tab-4" class="box-tabs__menu__link js-tab-links">{translate key="submission.viceInformaci"}</a>
                        </li>
                        {call_hook|assign:"sharingCode" name="Templates::Catalog::Book::BookInfo::Sharing"}
                        {if !is_null($sharingCode) || !empty($blocks)}
                            <li class="box-tabs__menu__item">
                                <a href="#tab-5" class="box-tabs__menu__link js-tab-links">{translate key="submission.sharing"}</a>
                            </li>
                        {/if}
                        {if $monograph->getCitations()}
                            <li class="box-tabs__menu__item">
                                <a href="#tab-6" class="box-tabs__menu__link js-tab-links">{translate key="submission.citations"}</a>
                            </li>
                        {/if}
                    </ul>
                    {*Anotace + autoři*}
                    <div id="tab-1" class="box-tabs__fragment is-active">
                        <a href="#" class="box-tabs__responsive-link">
                            <span class="box-tabs__responsive-link__name">{translate key="submission.synopsis"}</span>
                            <span class="icon icon-plus"></span>
                        </a>
                        <div class="box-tabs__content">
                            <p>{$monograph->getLocalizedAbstract()|strip_unsafe_html}</p>
                            <div class="item authors">
                                {assign var="authors" value=$monograph->getAuthors()}
                                {foreach from=$publishedMonograph->getAuthors() item=author}
                                    {if $author->getIncludeInBrowse() && $author->getZobrazAutori() == 1}
                                        {assign var=authorId value=$author->getId()}
                                        {url|assign:authorPublications router=$smarty.const.ROUTE_PAGE page="vyhledavaniAutori" op="authorPublications" authorId=$authorId}
                                        <div class="sub_item">
                                            <div class="label">
                                                <a href="{$authorPublications}" data-rel="lightcase:profile">{$author->getFullName()|escape}</a>
                                                <div class="role">
                                                    {$author->getLocalizedUserGroupName()|escape}
                                                </div>
                                            </div>
                                        </div>
                                    {/if}
                                {/foreach}
                            </div>
                        </div>
                    </div>
                    {*Kapitoly*}
                    {if $chapters|@count}
                        <div id="tab-2" class="box-tabs__fragment is-active">
                            <a href="#" class="box-tabs__responsive-link">
                                <span class="box-tabs__responsive-link__name">{translate key="submission.chapters"}</span>
                                <span class="icon icon-plus"></span>
                            </a>
                            <div class="box-tabs__content">
                                <ul>
                                    {foreach from=$chapters item=chapter}
                                        {assign var=chapterId value=$chapter->getId()}
                                        <li>
                                            <div class="title">
                                                {$chapter->getLocalizedTitle()}
                                                {if $chapter->getLocalizedSubtitle() != ''}
                                                    <div class="subtitle">
                                                        {$chapter->getLocalizedSubtitle()|escape}
                                                    </div>
                                                {/if}
                                            </div>
                                            {assign var=chapterAuthors value=$chapter->getAuthorNamesAsString()}
                                            {if $monograph->getAuthorString() != $chapterAuthors}
                                                <div class="authors">
                                                    {$chapterAuthors|escape}
                                                </div>
                                            {/if}
                                            {* Display any files that are assigned to this chapter *}
                                            {pluck_files assign="chapterFiles" files=$availableFiles by="chapter" value=$chapterId}
                                            {if $chapterFiles|@count}
                                                <div class="files">

                                                    {* Display chapter files sorted by publication format so that they are ordered
                                                    consistently across all chapters. *}
                                                    {foreach from=$publicationFormats item=format}
                                                        {pluck_files assign="pubFormatFiles" files=$chapterFiles by="publicationFormat" value=$format->getId()}

                                                        {foreach from=$pubFormatFiles item=file}

                                                            {* Use the publication format name in the download link unless a pub format has multiple files *}
                                                            {assign var=useFileName value=false}
                                                            {if $pubFormatFiles|@count > 1}
                                                                {assign var=useFileName value=true}
                                                            {/if}

                                                            {include file="frontend/components/downloadLink.tpl" downloadFile=$file monograph=$monograph publicationFormat=$format currency=$currency useFilename=$useFileName}
                                                        {/foreach}
                                                    {/foreach}
                                                </div>
                                            {/if}
                                        </li>
                                    {/foreach}
                                </ul>
                            </div>
                        </div>
                    {/if}
                    {*Ke stažení*}
                    {if $nonChapterFiles|@count || $remoteResources|@count}
                        <div id="tab-3" class="box-tabs__fragment">
                            <a href="#" class="box-tabs__responsive-link">
                                <span class="box-tabs__responsive-link__name">{translate key="submission.download"}</span>
                                <span class="icon icon-plus"></span>
                            </a>
                            <div class="box-tabs__content">
                                {foreach from=$publicationFormats item=format}
                                    {assign var=publicationFormatId value=$format->getId()}
                                    {pluck_files assign=pubFormatFiles files=$nonChapterFiles by="publicationFormat" value=$format->getId()}
                                    {if $pubFormatFiles|@count > 0 || $format->getLocalizedUrlYtb() || $format->getRemoteUrl()}
                                        <h4>{$format->getLocalizedName()|escape|truncate:100:"..."}</h4>
                                    {/if}
                                    {if $format->getLocalizedUrlYtb()}
                                        <div class="pub_format_{$publicationFormatId|escape} pub_format_remote">
                                            <a href="{$format->getLocalizedUrlYtb()|escape}" target="_blank" class="remote_resource">
                                                <span class="icon 	icon-youtube-play icon-keStazeni"></span>{translate key="submission.shlednout"}
                                            </a>
                                        </div>
                                    {elseif $format->getRemoteUrl()}
                                        {* Only one resource allowed per format, so mimic single-file-download *}
                                        <div class="pub_format_{$publicationFormatId|escape} pub_format_remote">
                                            <a href="{$format->getRemoteURL()|escape}" target="_blank" class="remote_resource">
                                                {if $format->getLocalizedName() == "E-kniha (HTML)" || $format->getLocalizedName() == "E-book (HTML)"}
                                                    <span class="icon icon-eye icon-keStazeni"></span>{translate key="submission.keShlednuti"}
                                                {else}
                                                    <span class="icon icon-download icon-keStazeni"></span>{translate key="submission.keStazeni"}
                                                {/if}
                                            </a>{if $format->getFileSize()}<span class="tag tag__format">{$format->getFileSize()} MiB</span>{/if}
                                        </div>
                                    {else}
                                        
                                        {* Only display files that haven't been displayed in a chapter *}
                                       
                                        
                                        {if $pubFormatFiles|@count == 1}
                                            <div class="pub_format_{$publicationFormatId|escape} pub_format_single">

                                                {foreach from=$pubFormatFiles item=file}
                                                    {include file="frontend/components/downloadLink.tpl" downloadFile=$file monograph=$monograph publicationFormat=$format currency=$currency}
                                                {/foreach}
                                            </div>

                                            {* Use an itemized presentation if multiple files exists *}
                                        {elseif $pubFormatFiles|@count > 1}
                                            <div class="pub_format_{$publicationFormatId|escape} pub_format_multi">

                                                <span class="value">
                                                    <ul>
                                                        {foreach from=$pubFormatFiles item=file}
                                                            <li>
                                                                    {include file="frontend/components/downloadLink.tpl" downloadFile=$file monograph=$monograph publicationFormat=$format currency=$currency useFilename=true}
                                                            </li>
                                                        {/foreach}
                                                    </ul>
                                                </span><!-- .value -->
                                            </div>
                                        {/if}
                                    {/if}
                                    {if $format->getFlipbook()}
                                        <div class="pub_format_{$publicationFormatId|escape} pub_format_remote">
                                            <a href="{$format->getFlipbook()|escape}" target="_blank" class="cmp_download_link" data-rel="lightcase:flipbook">
                                                <span class="icon icon-book"></span>{translate key="submission.flipbook"}
                                            </a>
                                        </div>
                                    {/if}
                                {/foreach}
                            </div>
                        </div>
                    {/if}
                    {if count($publicationFormats)}
                        <div id="tab-4" class="box-tabs__fragment">
                            <a href="#" class="box-tabs__responsive-link">
                                <span class="box-tabs__responsive-link__name">{translate key="submission.viceInformaci"}</span>
                                <span class="icon icon-plus"></span>
                            </a>
                            <div class="box-tabs__content item publication_format box-accordion">
                                {foreach from=$publicationFormats item="publicationFormat"}
                                    {if $publicationFormat->getIsApproved()}

                                        {assign var=identificationCodes value=$publicationFormat->getIdentificationCodes()}
                                        {assign var=identificationCodes value=$identificationCodes->toArray()}
                                        {assign var=publicationDates value=$publicationFormat->getPublicationDates()}
                                        {assign var=publicationDates value=$publicationDates->toArray()}
                                        {assign var=hasPubId value=false}
                                        {if $enabledPubIdTypes|@count}
                                            {foreach from=$enabledPubIdTypes item=pubIdType}
                                                {if $publicationFormat->getStoredPubId($pubIdType)}
                                                    {php}break;{/php}
                                                {/if}
                                            {/foreach}
                                        {/if}

                                        {* Skip if we don't have any information to print about this pub format *}
                                        {if !$identificationCodes && !$publicationDates && !$hasPubId && !$publicationFormat->getPhysicalFormat() && !$publicationFormat->getFileSize()}
                                            {php}continue;{/php}
                                        {/if}


                                        <div class="box-accordion__item is-open">
                                            <h2 class="box-accordion__title">
                                                <a href="#" class="box-accordion__title__link">
                                                    <span class="box-accordion__title__name">{$publicationFormat->getLocalizedName()|escape}</span>
                                                    <span class="icon icon-plus"></span>
                                                </a>
                                            </h2>
                                            <div class="box-accordion__box">
                                                <div class="box-accordion__inner">
                                                    <table border="0" style="width: 100%;">
                                                        <tbody>
                                                            {* DOI's and other identification codes *}
                                                            {if $identificationCodes}
                                                                {foreach from=$identificationCodes item=identificationCode}
                                                                    <tr>
                                                                        <td class="label">
                                                                            {$identificationCode->getNameForONIXCode()|escape}
                                                                        </td>
                                                                        <td style="width: 75%;">
                                                                            {$identificationCode->getValue()|escape}
                                                                        </td>
                                                                    </tr>
                                                                {/foreach}
                                                            {/if}

                                                            {* Physical dimensions *}
                                                            {if $publicationFormat->getPhysicalFormat()}
                                                                <tr>
                                                                    <td class="label">{translate key="monograph.publicationFormat.productDimensions"}</td>
                                                                    <td style="width: 75%;">{$publicationFormat->getDimensions()|escape}</td>
                                                                </tr>
                                                            {/if}
                                                            {if $publicationFormat->getFileSize()}
                                                                <tr>
                                                                    <td class="label">{translate key="book.velikost"}</td>
                                                                    <td style="width: 75%;">{$publicationFormat->getFileSize()|escape} MiB</td>
                                                                </tr>
                                                            {/if}
                                                            {if $publicationFormat->getPocetStran()}
                                                                <tr>
                                                                    <td class="label">{translate key="submission.pocetStran"}</td>
                                                                    <td>{$publicationFormat->getPocetStran()|escape}</td>
                                                                </tr>
                                                            {/if}
                                                            {if $publicationFormat->getDatumVydani()}
                                                                <tr>
                                                                    <td class="label"> {translate key="submission.datumVydani"}</td>
                                                                    <td style="width: 75%;">{$publicationFormat->getDatumVydani()|date_format:"%Y"}</td>
                                                                </tr>
                                                            {/if}
                                                            {if $publicationFormat->getPoradiVydani()}
                                                                <tr>
                                                                    <td class="label">{translate key="submission.poradiVydani"}</td>
                                                                    <td> {$publicationFormat->getPoradiVydani()|escape}</td>
                                                                </tr>
                                                            {/if}

                                                            {* PubIDs *}
                                                            {if $enabledPubIdTypes|@count}
                                                                {foreach from=$enabledPubIdTypes item=pubIdType}
                                                                    {assign var=storedPubId value=$publicationFormat->getStoredPubId($pubIdType)}
                                                                    {if $storedPubId != ''}
                                                                        <tr class="sub_item pubid {$publicationFormat->getId()|escape}">
                                                                            <td class="label">
                                                                                {$pubIdType}
                                                                            </td>
                                                                            <td>
                                                                            {if $pubIdType == "doi"}
                                                                                <a href="https://doi.org/{$storedPubId|escape}" title="doi">
                                                                                    https://doi.org/{$storedPubId|escape}
                                                                                </a>
                                                                            {else}
                                                                                {$storedPubId|escape}
                                                                            {/if}
                                                                            </td>
                                                                        </tr>
                                                                    {/if}
                                                                {/foreach}
                                                            {/if}
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>

                                    {/if}
                                {/foreach}
                                <div class="box-accordion__item is-open">
                                    <h2 class="box-accordion__title">
                                        <a href="#" class="box-accordion__title__link">
                                            <span class="box-accordion__title__name">{translate key="submission.obecneInformace"}</span>
                                            <span class="icon icon-plus"></span>
                                        </a>
                                    </h2>
                                    <div class="box-accordion__box">
                                        <div class="box-accordion__inner">
                                            <table border="0" style="width: 100%;">
                                                <tbody>
                                                    {if !empty($urlWeb)}
                                                        <tr>
                                                            <td class="label">
                                                                {translate key="submission.url.web"}
                                                            </td>
                                                            <td style="width: 75%;">
                                                                <a href={$urlWeb} target="_blank">{translate key="informace.url.web"}</a>
                                                            </td>
                                                        </tr>
                                                    {/if}
                                                    {foreach from=$authors item=author}
                                                        {if $author->getZobrazOstatni() == 1}
                                                            {assign var=uco value=$author->getUCO()}
                                                            <tr>
                                                                <td class="label">{$author->getLocalizedUserGroupName()}</td>
                                                                <td style="width: 75%;">{$author->getFullName()}
                                                                </td>
                                                            </tr>
                                                        {/if}
                                                    {/foreach}
                                                    {if $keywords}
                                                        <tr>
                                                            <td class="label">
                                                                {translate key="common.keywords"}
                                                            </td>
                                                            <td style="width: 75%;">
                                                                {assign var=prvni value=1}
                                                                {foreach from=$keywords item=klicoveSlovo}
                                                                    {if $prvni}
                                                                        {$klicoveSlovo}
                                                                        {assign var=prvni value=0}
                                                                    {else}
                                                                        , {$klicoveSlovo}
                                                                    {/if}
                                                                {/foreach}
                                                            </td>
                                                        </tr>
                                                    {/if}
                                                    {if $languages}
                                                        <tr>
                                                            <td class="label">
                                                                {translate key="common.languages"}
                                                            </td>
                                                            <td style="width: 75%;">
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
                                                            </td>
                                                        </tr>
                                                    {/if}
                                                    {if !empty($poznamka)}
                                                        <tr>
                                                            <td colspan="2">
                                                                <strong>{translate key="submission.poznamka"}</strong> <br />
                                                                {$poznamka}
                                                            </td>
                                                        </tr>
                                                    {/if}
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                                {call_hook name="Templates::Catalog::Book::Details"}
                            </div>
                        </div>
                    {/if}
                    {if !is_null($sharingCode) || !empty($blocks)}
                        <div id="tab-5" class="box-tabs__fragment">
                            <a href="#" class="box-tabs__responsive-link">
                                <span class="box-tabs__responsive-link__name">{translate key="submission.sharing"}</span>
                                <span class="icon icon-plus"></span>
                            </a>
                            <div class="box-tabs__content">
                                {$sharingCode}
                            </div>
                        </div>
                    {/if}
                    {* References *}
                    {if $monograph->getCitations()}
                        <div id="tab-6" class="box-tabs__fragment">
                            <br />
                            <div class="value">
                                {$monograph->getCitations()|nl2br}
                            </div>
                        </div>
                    {/if}
                </div>
            </div>
        </div>
    </div>
    {if $souvisejiciPublikace}
        <div class="souvisejiciPublikace"> 

            <h4 class="munipress_underline_gray">{translate key="catalog.souvisejiciPublikace"}</a></h4>
            <div class="grid">
                {foreach from=$souvisejiciPublikace item=monograph}
                    <div class="grid__cell size--s--1-2 size--m--1-4 size--l--2-12">
                        <a class="pkp_helpers_image_left tooltip" href="{url page="catalog" op="book" path=$monograph->getId()}" target="_blank" title="{$monograph->getLocalizedFullTitle()|strip_tags|escape}" onclick="location.href='{url page="catalog" op="book" path=$monograph->getId()}';">
                            {assign var=coverImage value=$monograph->getCoverImage()}
                            {if empty($coverImage)}
                                {assign var=coverImageWidth value="103"}
                                {assign var=coverImageHeight value="100"}
                            {else}
                                {assign var=coverImageWidth value=$coverImage.thumbnailWidth}
                                {assign var=coverImageHeight value=$coverImage.thumbnailHeight}
                            {/if}
                            {url|assign:souvisPubl router=$smarty.const.ROUTE_COMPONENT component="submission.CoverHandler" op="thumbnail" submissionId=$monograph->getId() random=$monograph->getId()|uniqid}
                            <div class="box-article-list__containerMunipress">
                                <img class="box-article-list__imgMunipress" height="{$coverImageHeight}" width="{$coverImageWidth}" alt="{$monograph->getLocalizedFullTitle()|strip_tags|escape}" src="{$souvisPubl}" />
                            </div>
                        </a>
                    </div>
                {/foreach}    
            </div>
        </div>
    {/if}
</div><!-- .obj_monograph_full -->
