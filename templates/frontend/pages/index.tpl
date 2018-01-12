{**
* templates/frontend/pages/index.tpl
*
* Copyright (c) 2014-2017 Simon Fraser University Library
* Copyright (c) 2003-2017 John Willinsky
* Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
*
* @brief Display the front page of the site
*
* @uses $homepageImage array Details about the uploaded homepage image
* @uses $spotlights array Selected spotlights to promote on the homepage
* @uses $featuredMonographs array List of featured releases in this press
* @uses $newReleases array List of new releases in this press
* @uses $announcements array List of announcements
* @uses $numAnnouncementsHomepage int Number of announcements to display on the
*       homepage
* @uses $additionalHomeContent string HTML blob of arbitrary content added by
*  an editor/admin.
*}
{include file="frontend/components/header.tpl"}

<div class="page page_homepage">

    {* Homepage Image *}
    {if $homepageImage}
        <div class="homepage_image">
            <img src="{$publicFilesDir}/{$homepageImage.uploadName|escape:"url"}" alt="{$homepageImage.altText|escape}">
        </div>
    {/if}

    {* Featured *}
    {*{if !empty($featuredMonographs)}
    {include file="frontend/components/monographList.tpl" monographs=$featuredMonographs titleKey="catalog.featured"}
    {/if}
    *}

    {* Announcements *}
    {if $numAnnouncementsHomepage && $announcements|@count && False}
        <div class="cmp_announcements highlight_first">
            <h2>
                {translate key="announcement.announcements"}
            </h2>
            {foreach name=announcements from=$announcements item=announcement}
                {if $smarty.foreach.announcements.iteration > $numAnnouncementsHomepage}
                    {php}break;{/php}
                {/if}
                {if $smarty.foreach.announcements.iteration == 1}
                    {include file="frontend/objects/announcement_summary.tpl" heading="h3"}
                    <div class="more">
                    {else}
                        <article class="obj_announcement_summary">
                            <h4>
                                <a href="{url router=$smarty.const.ROUTE_PAGE page="announcement" op="view" path=$announcement->getId()}">
                                    {$announcement->getLocalizedTitle()|escape}
                                </a>
                            </h4>
                            <div class="date">
                                {$announcement->getDatePosted()}
                            </div>
                        </article>
                    {/if}
                {/foreach}
            </div><!-- .more -->
        </div>
    {/if}
    <div class="homepage_slider">
        {foreach name=announcements from=$announcements item=announcement}
            {if $smarty.foreach.announcements.iteration > $numAnnouncementsHomepage}
                {php}break;{/php}
            {/if}
            {include file="frontend/objects/announcement_summary_slide.tpl" heading="h3"}
        {/foreach}
        {foreach from=$featuredMonographs key=id item=monograph}
            {if isset($monograph)}
                {include file="frontend/objects/monograph_summary_slide.tpl" monograph=$monograph isFeatured=1}
            {/if}
            {assign var=iterator value=$iterator+1}
        {/foreach}
    </div>
    {literal}
        <script>

        </script>
    {/literal}

    {* Additional Homepage Content *}
    {if $additionalHomeContent}
        <div class="additional_content">
            {$additionalHomeContent}
        </div>
    {/if}

    {* New releases *}

    {if !empty($newReleases)}
        <h2>
            {translate key="catalog.newReleases"}
        </h2>
        {include file="frontend/components/monographList.tpl" monographsArray=$newReleases titleKey="catalog.newReleases" slider="true" filtrovani="false"}
    {/if}

    {* Spotlights *}
    {if !empty($spotlights)}
        <h2>
            {translate key="spotlight.spotlights"}
        </h2>
        {include file="frontend/components/spotlights.tpl"}
    {/if}

    {* Reklama *}
    {include file="frontend/components/bannery.tpl"}
</div>
{include file="frontend/components/footer.tpl"}
