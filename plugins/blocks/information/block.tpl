{**
 * plugins/blocks/information/block.tpl
 *
 * Copyright (c) 2014 Simon Fraser University Library
 * Copyright (c) 2003-2014 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Common site sidebar menu -- information links.
 *
 *}
{if !empty($forReaders) || !empty($forAuthors) || !empty($forLibrarians)}
<div class="block" id="sidebarInformation">
	<span class="blockTitle">{translate key="plugins.block.information.link"}</span>
	<ul>
		{if !empty($forReaders)}<li><a href="{url router=$smarty.const.ROUTE_PAGE page="information" op="readers"}">{translate key="navigation.infoForReaders"}</a></li>{/if}
		{*{if !empty($forLibrarians)}<li><a href="{url router=$smarty.const.ROUTE_PAGE page="information" op="librarians"}">{translate key="navigation.infoForLibrarians"}</a></li>{/if}*}
                {if !empty($proDistributory)}<li><a href="{url router=$smarty.const.ROUTE_PAGE page="information" op="distributori"}">{translate key="navigation.infoProDistributory"}</a></li>{/if}
                {if !empty($proMedia)}<li><a href="{url router=$smarty.const.ROUTE_PAGE page="information" op="media"}">{translate key="navigation.infoProMedia"}</a></li>{/if}
                <br /><li><a href="{url router=$smarty.const.ROUTE_PAGE page="forAuthors"}">{translate key="navigation.infoForAuthors"}</a></li>
                {if !empty($doiCrossref)}<li><a href="{url router=$smarty.const.ROUTE_PAGE page="information" op="crossref"}">{translate key="navigation.infoDoiCrossref"}</a></li>{/if}
                {if !empty($keStazeni)}<br /><li><a href="{url router=$smarty.const.ROUTE_PAGE page="information" op="stahovani"}">{translate key="navigation.infoKeStazeni"}</a></li>{/if}
	</ul>
</div>
{/if}
