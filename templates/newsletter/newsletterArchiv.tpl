{**
* templates/underConstruction/under_construction.tpl
*
* Under construction page.
*}
{strip}
{assign var="pageTitle" value="newsletter.archiv"}
{include file="common/header.tpl"}
{/strip}
<br />
<div>
    
    <style type="text/css">
        <!--
        .display_archive {font-family: arial,verdana; font-size: 12px;}
        .campaign {line-height: 125%; margin: 5px;}
        //-->
    </style>
    <div class="campaign">
07/09/2014 -
<a target="_blank" title="Novinky Nakladatelství Masarykovy univerzity: Newsletter #2" href="http://us3.campaign-archive1.com/?u=43fbe1373f33592efcd5310c5&id=5456786539">Novinky Nakladatelství Masarykovy univerzity: Newsletter #2</a>
</div>
<div class="campaign">
06/04/2014 -
<a target="_blank" title="Novinky Nakladatelství Masarykovy univerzity: Newsletter #1" href="http://us3.campaign-archive1.com/?u=43fbe1373f33592efcd5310c5&id=b3c449f6f6">Novinky Nakladatelství Masarykovy univerzity: Newsletter #1</a>
</div>
    <br />
    <br />
    <h3><a href="{url router=$smarty.const.ROUTE_PAGE page="newsletter"}">{translate key="newsletter.prihlasit"}</a> </h3>
</div>
{include file="common/footer.tpl"}
