{**
 * templates/photoGallery/records.tpl
 *
 * Copyright (c) 2014 Simon Fraser University Library
 * Copyright (c) 2003-2014 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Display a public-facing photo galleries list in the photo gallery.
 *}

<div class="pkp_gallery_list" id="photoGalleryListContainer">
        {assign var=count value=$photoGalleries->getCount()}
    
	{if $count>0}
            <ul class="pkp_helpers_clear">
		{iterate from=photoGalleries item=oneRecord name=loop}
			{include file="photoGallery/record.tpl" oneRecord=$oneRecord}
		{/iterate}
            </ul>
	{/if}
</div>
