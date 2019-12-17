{**
* templates/frontend/pages/chapter.tpl
*
* Copyright (c) 2014-2017 Simon Fraser University Library
* Copyright (c) 2003-2017 John Willinsky
* Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
*
* @brief Display the page which represents a single book.
*
* @uses $representationId int Publication format ID
* @uses $availableFiles array List of available MonographFiles
* @uses $publishedMonograph PublishedMonograph The published monograph object.
* @uses $series Series The series this monograph is assigned to, if any.
*}

{assign var=chapterTitle value=$chapter->getLocalizedFullTitle()|cat:" In: "|cat:$monograph->getLocalizedFullTitle()}
{include file="frontend/components/header.tpl" pageTitleTranslated=$chapterTitle}

<div class="page page_chapter">

    {* Display book details *}
    {include file="frontend/objects/chapter_full.tpl" monograph=$monograph chapter=$chapter}

    {* Display Dublin Core metadata *}
{*    {include file="frontend/objects/chapter_dublinCore.tpl" monograph=$monograph chapter=$chapter}*}

    {* Display Google Scholar metadata *}
{*    {include file="frontend/objects/chapter_googleScholar.tpl" monograph=$monograph chapter=$chapter}*}

</div><!-- .page -->

{include file="frontend/components/footer.tpl"}
