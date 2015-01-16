{**
 * templates/catalog/monograph.tpl
 *
 * Copyright (c) 2014 Simon Fraser University Library
 * Copyright (c) 2003-2014 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Display a public-facing monograph in the catalog.
 *}

<li class="pkp_catalog_monograph {if $inline}pkp_helpers_align_left{/if} {if $souvisejiciPublikace}souvisejici_publikace{/if}" >
	<a class="pkp_helpers_image_left" href="{url page="catalog" op="book" path=$publishedMonograph->getId()}" {if $vyhledavaniAutori=="true"}target="_blank"{/if}>
		{include file="controllers/monographList/coverImage.tpl" monograph=$publishedMonograph}
	</a>
	<div class="pkp_catalog_monographDetails">
		<div class="pkp_catalog_monographTitle"><a href="{url router=$smarty.const.ROUTE_PAGE page="catalog" op="book" path=$publishedMonograph->getId()}" {if $vyhledavaniAutori=="true"}target="_blank"{/if}>{$publishedMonograph->getLocalizedFullTitle()}</a></div>
		<div class="pkp_catalog_monograph_authorship">
                    {$publishedMonograph->getAuthorString()|escape}, {if $publishedMonograph->getAKolektiv()==1}{translate key="submission.aKol"}{/if}
		</div>
        </div>
        {if !$souvisejiciPublikace}
            <div class="pkp_catalog_monograph_date">
                            {translate key="submission.datumVydani"}: {$publishedMonograph->getDatumVydani()|date_format:"%Y"}
            </div>
        {/if}
</li>

