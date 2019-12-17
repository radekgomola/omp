 {**
* templates/frontend/objects/monograph_summary.tpl
*
* Copyright (c) 2014-2017 Simon Fraser University Library
* Copyright (c) 2003-2017 John Willinsky
* Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
*
* @brief Display a summary view of a monograph for display in lists
*
* @uses $monograph Monograph The monograph to be displayed
* @uses $isFeatured bool Is this a featured monograph?
*}
<div class="obj_monograph_summary">
    <a href="{url router=$smarty.const.ROUTE_PAGE page="catalog" op="chapter" path=$monograph->getBestId()|to_array:$monograph->getChapterId()}" class="title">
        {$monograph->getChapterName()}
    </a>
    <div class="author" style="margin-bottom: 8px;">
        {$monograph->getChapterAuthorNamesAsString($monograph->getId(), $monograph->getChapterId())|escape}
    </div>
    <div class="author">
        <strong>{translate key="chapter.book"}:</strong> <a href="{url router=$smarty.const.ROUTE_PAGE page="catalog" op="book" path=$monograph->getBestId()}">{$monograph->getLocalizedFullTitle()|escape}</a>
    </a>
    </div>
    
    <div class="date">
        {*		{$monograph->getDatePublished()|date_format:$dateFormatLong}*}
        {$monograph->getDatumVydani()|date_format:"%Y"}
    </div>
</div><!-- .obj_monograph_summary -->
