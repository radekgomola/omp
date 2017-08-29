{**
* templates/frontend/objects/spotlight.tpl.tpl
*
* Copyright (c) 2014-2017 Simon Fraser University Library
* Copyright (c) 2003-2017 John Willinsky
* Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
*
* @brief Display a spotlight
*
* @uses $spotlight Spotlight The spotlight to be displayed
* @uses $item Book|Series|Author The item this spotlight is about
* @uses $assocType bit The type of item this spotlight is about. Matches a
*       constant representing a book, series or author.
* @uses $coverImage array A cover image related to $item
* @uses $coverImageUrl string The url to $coverImage
* @uses $targetUrl string The url this spotlight links to
* @uses $hasCoverImage string Does this spotlight have a cover image? String
*       is empty or set to the desired CSS class
* @uses $description string A description to display with this spotlight
*}
{*<div class="obj_spotlight {$hasCoverImage} {$type}">

    {if $coverImage}
        <a class="cover_image" href="{$targetUrl}">
            <img alt="{$item->getLocalizedFullTitle()|strip_tags|escape}" src="{$coverImageUrl}">
        </a>
    {/if}

    <div class="call_to_action">
        <h3 class="title">
            {$spotlight->getLocalizedTitle()|escape}
        </h3>
        <div class="type">
            {if $assocType == $smarty.const.SPOTLIGHT_TYPE_SERIES}
                {translate key="series.series"}
            {else}
                {translate key="spotlight"}
            {/if}
        </div>
        {if $description}
            <div class="description">
                {$description|strip_unsafe_html}
            </div>
        {/if}
        <a class="read_more" href="{$targetUrl}" title="{translate|escape key="common.readMoreWithTitle" title=$spotlight->getLocalizedTitle()}">
            {translate key="common.readMore"}
        </a>
    </div>
</div>*}

<a href="{$targetUrl}" class="box-article-grid box-article-grid--noimg">

    <div class="box-article-grid__content">
        <div class="row">
            {if $coverImage}
                <img alt="{$item->getLocalizedFullTitle()|strip_tags|escape}" src="{$coverImageUrl}" class="spotlight_img">
            {/if}
            <h2 class="box-article-grid__title">{$spotlight->getLocalizedTitle()|escape}</h2>
            <p class="box-article-grid__meta meta">
                <span class="meta__item"><strong>{$authors|strip_unsafe_html}</strong>
            </p>
        </div>
        {if $description}
            <p class="box-article-list__desc">
                {$description|strip_unsafe_html}
            </p>
        {/if}

        <div class="center btn-dole">
            <span class="btn btn-primary btn-border btn-s">
                <span>{translate key="common.readMore"}</span>
            </span>
        </div>
    </div>
</a>