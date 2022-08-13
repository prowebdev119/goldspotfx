{include file="logo.tpl"} 

    


<section class="main-page">
        <div class="main-page-img"></div>
        <div class="main-inset">
            <div class="container">

                <div class="row">
                    <div class="col-md-12">
                        <div class="title">
                            <i></i>
                            <span>[  News  ]</b></span>
                        </div>
                        <div class="main-page-content">
                            <div class="row">
                                <div class="col-md-12">
<div ng-controller="NewsController" ng-init="initDT()">
    <div block-ui="news" style="min-height: 100px" tasty-table bind-reload="dT_ReloadCallBack"
         bind-resource-callback="dT_GetResource" bind-init="dT_Init"
         bind-filters="dT_FilterBy">
      {literal}  <style type="text/css">
            .news-table {
                border: none;
            }

            .news-table td {
                border: none;
                border-bottom: dashed 1px #ddd;
                padding: 15px 0px
            }
        </style> {/literal} 
        <div  ng-cloak ng-show="rows.length">
            <table width="100%" class="news-table">
                <div tasty-thead></div>
                <tbody>
                <tr ng-repeat="row in rows">
                   

<table width="100%" class="news-table">

{if $news}
{section name=s loop=$news}
<tr>
 <td align=justify><a name="{$news[s].id}"></a><b>{$news[s].title}</b><br>
  {$news[s].full_text}<br>
  <small><i>{$news[s].d}</i></small>
 </td>
</tr>
{/section}
{else}
<tr>
 <td colspan=3 align=center>
<div ng-cloak="" ng-show="rows &amp;&amp; !rows.length" class="error-block" style="text-align: center;margin-left: 305px;">No news found</div></td>
</tr>
{/if}


</table>

</div></div>
    </div>
    </div>
</div>
</div>
</div>
</div>
</div>
</section>
{include file="footer2.tpl"} 