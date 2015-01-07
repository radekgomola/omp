{**
* templates/catalog/monograph.tpl
*
* Copyright (c) 2014 Simon Fraser University Library
* Copyright (c) 2003-2014 John Willinsky
* Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
*
* Display a public-facing monograph in the catalog.
*}

<li class="pkp_gallery_record">
    <div class="pkp_gallery_record_block">
        <a class="pkp_helpers_image_left" href="{url router=$smarty.const.ROUTE_PAGE page="photoGallery" op="record" path=$oneRecord->getId()}">
            {include file="controllers/photoGalleryList/coverImage.tpl" record=$oneRecord}
        </a>
        <div class="pkp_gallery_recordTitle"><a href="{url router=$smarty.const.ROUTE_PAGE page="photoGallery" op="record" path=$oneRecord->getId()}">{$oneRecord->getLocalizedFullTitle()}</a>
        </div>
        <div class="pkp_gallery_description_small">
            {$oneRecord->getDescription()|escape}
        </div>
    </div>
</li>

