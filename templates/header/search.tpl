{**
* templates/header/search.tpl
*
* Copyright (c) 2014 Simon Fraser University Library
* Copyright (c) 2003-2014 John Willinsky
* Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
*
* Common search box.
*}
<script type="text/javascript">
    $(function () {ldelim}
            $('#topSearchFormField').jLabel();
    {rdelim});
</script>

<div class="pkp_structure_search pkp_helpers_align_right">
    <div class="munipress_search" >
        <form id="topSearchForm" action="{url router=$smarty.const.ROUTE_PAGE page="catalog" op="results"}" method="post">
            <fieldset>
                <button class="go">{*{translate key="common.go"}*}<img src="{$baseUrl}/images/design/button_search.png" alt="search"/></button>
                <input id="topSearchFormField" name="query" value="{$searchQuery|escape}" type="text" {*title="{translate key="common.searchCatalog"}..."*} />
                
            </fieldset>
        </form>
    </div>
    <div class="munipress_user">
        {if $isUserLoggedIn}
            <div class="profile">{translate key="user.hello"}&nbsp;<a href="{url router=$smarty.const.ROUTE_PAGE page="user" op="profile"}">{$loggedInUsername|escape}</a></div>
                {*{null_link_action id="toggleHelp" key="help.toggleInlineHelpOn"}*}

            {if $isUserLoggedInAs}
                <a href="{url router=$smarty.const.ROUTE_PAGE page="login" op="signOutAsUser"}"><img src="{$baseUrl}/images/design/button_logout.png" alt="logout"/></a>
                {else}
                <a href="{url router=$smarty.const.ROUTE_PAGE page="login" op="signOut"}"><img src="{$baseUrl}/images/design/button_logout.png" alt="logout"/></a>
                {/if}
                {if $isUserLoggedIn}
                    {if array_intersect(array(ROLE_ID_SITE_ADMIN), $userRoles)}
                    <a href="{if $multipleContexts}{url router=$smarty.const.ROUTE_PAGE context="index" page="admin" op="index"}{else}{url router=$smarty.const.ROUTE_PAGE page="admin" op="index"}{/if}"><img src="{$baseUrl}/images/design/button_admin.png" alt="settings"/></a>
                {/if}
            {/if}
            {*{if $multipleContexts}
                {include file="header/contextSwitcher.tpl"}
            {/if}*}
        {elseif !$notInstalled}
            {if !$hideRegisterLink}
            <a href="{url router=$smarty.const.ROUTE_PAGE page="user" op="register"}" class="button_link"><img src="{$baseUrl}/images/design/button_register.png" alt="register"/></a>
                {/if}
            <a href="{url router=$smarty.const.ROUTE_PAGE page="login"}" class="button_link"><img src="{$baseUrl}/images/design/button_login.png" alt="login"/></a>
            {/if}
    </div>
</div>
