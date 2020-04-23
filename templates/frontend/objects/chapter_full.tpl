{**
*}


<div class="obj_chapter_full">
    {assign var="title" value=$chapter->getLocalizedFullTitle()|escape}
    {assign var="abstract" value=$chapter->getLocalizedAbstract()|strip_unsafe_html}
    {assign var="authors" value=$chapter->getAuthors()}
    {assign var="doi" value=$chapter->getDoi()}
    {assign var="titleMonograph" value=$monograph->getLocalizedFullTitle()}
    {assign var="titleMonograph" value=$monograph->getLocalizedFullTitle()}
    {assign var="datumVydani" value=$monograph->getDatumVydani()|date_format:"%Y"}
    {assign var="chapterId" value=$chapter->getId()}
    {assign var="references" value=$chapter->getReferences()}

    <h2 class="bookTitle authorName">
        <a href="{url router=$smarty.const.ROUTE_PAGE page="catalog" op="book" path=$monograph->getBestId()}" class="title">
            {$titleMonograph}
        </a>
    </h2>    
    {translate key="submission.chapter.solo"}
    <div class="obj_monograph_full">
        <div class="grid"> 
            <div class="grid__cell size--l--7-12">
                <h3>
                    {$title}
                </h3>        
                <div class="item authors">
                    {assign var=counter value=1}
                    {iterate name="authorsListLoop" from=authors item=author}{assign var=authorId value=$author->getId()}{url|assign:authorPublications router=$smarty.const.ROUTE_PAGE page="vyhledavaniAutori" op="authorPublications" authorId=$authorId}{if $counter >1}, {/if}<a href="{$authorPublications}" data-rel="lightcase:profile">{$author->getFullName()|escape}</a>{assign var=counter value=$counter+1}{/iterate}
                </div>
                {if $datumVydani}<strong>{translate key="submission.datumVydani"}</strong>: {$datumVydani}{/if}
                <br /><br />
                {if $doi}
                    <a href="https://doi.org/{$doi|escape}" title="doi">
                        https://doi.org/{$doi|escape}
                    </a>
                {/if}
            </div>
            <div class="grid__cell size--l--5-12">
                {* Display any files that are assigned to this chapter *}
                {pluck_files assign="chapterFiles" files=$availableFiles by="chapter" value=$chapterId}
                {if $chapterFiles|@count}
                    <div class="soubory">

                        {* Display chapter files sorted by publication format so that they are ordered
                        consistently across all chapters. *}

                        {foreach from=$publicationFormats item=format}
                            {assign var=publicationFormatId value=$format->getId()}
                            {pluck_files assign="pubFormatFiles" files=$chapterFiles by="publicationFormat" value=$format->getId()}
                            {if $format->getRemoteUrl()}
                                {* Only one resource allowed per format, so mimic single-file-download *}
                                <div class="pub_format_{$publicationFormatId|escape} pub_format_remote">
                                    <a href="{$format->getRemoteURL()|escape}" target="_blank" class="remote_resource piwik_download" download>
                                        {if $format->getLocalizedName() == "E-kniha (HTML)" || $format->getLocalizedName() == "E-book (HTML)"}
                                            <span class="icon icon-eye icon-keStazeni"></span>{translate key="submission.keShlednuti"}
                                        {else}
                                            <span class="icon icon-download icon-keStazeni"></span>{translate key="submission.keStazeni"}
                                        {/if}
                                    </a>{if $format->getFileSize()}<span class="tag tag__format">{$format->getFileSize()} MiB</span>{/if}
                                </div>
                            {else}
                                {if $pubFormatFiles|@count == 1}
                                    <div class="pub_format_{$publicationFormatId|escape} pub_format_single">

                                        {foreach from=$pubFormatFiles item=file}
                                            {include file="frontend/components/downloadLink.tpl" downloadFile=$file monograph=$monograph publicationFormat=$format currency=$currency initCode=$initCode fakulta=$fakulta}
                                        {/foreach}
                                    </div>

                                    {* Use an itemized presentation if multiple files exists *}
                                {elseif $pubFormatFiles|@count > 1}
                                    <div class="pub_format_{$publicationFormatId|escape} pub_format_multi">

                                        <span class="value">
                                            <ul>
                                                {foreach from=$pubFormatFiles item=file}
                                                    <li>
                                                        {include file="frontend/components/downloadLink.tpl" downloadFile=$file monograph=$monograph publicationFormat=$format currency=$currency useFilename=true initCode=$initCode fakulta=$fakulta}
                                                    </li>
                                                {/foreach}
                                            </ul>
                                        </span><!-- .value -->
                                    </div>
                                {/if}
                            {/if}
                        {/foreach}
                    </div>
                {/if}
            </div>
        </div>
        <hr />
        {if $abstract}
        <h4 class="helper_border_bottom">{translate key="submission.synopsis"}</h4>
        <p>{$abstract}</p>
        <hr />   
        {/if}
        {* references *}
        {if $references}
            <div class="box-accordion__item">
                <h3 class="box-accordion__title">
                    <a href="#" class="box-accordion__title__link">
                        <span class="box-accordion__title__name">{translate key="chapter.references"}</span>
                        <span class="icon icon-plus"></span>
                    </a>
                </h3>
                <div class="box-accordion__box">
                    <div class="box-accordion__inner">
                        {$references}
                    </div>
                </div>
            </div>
        {/if}
    </div><!-- .obj_monograph_full -->
</div>
