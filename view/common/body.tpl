<!DOCTYPE html>
<html><head>
    <title>{$title}</title>
    {$styles}
    <link rel="shortcut icon" href="custom/img/favicon.png" type="image/x-icon">
     <link rel="stylesheet" href="standart/css/style.css">
     <link rel="stylesheet" href="standart/css/bootstrap.css">

    <link rel="stylesheet" href="custom/css/style.css">
       <link rel="icon" href="" type="image/x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
  </head>
  <body>
	  
	  


<div class="bar">
	  {* change this one to your own logo *}
      <div class="logo"></div>
      {* this is main menu *}
		<div class="padding-20 uppercase">
		<div class="list-group">
		  <a href="{ROUTE_MAIN}" class="list-group-item {if $tab_active eq ''}active{/if}">{$nav_title_main}</a>
		  <a href="{ROUTE_ARTICLES}" class="list-group-item {if $tab_active eq T_A_ARTICLES}active{/if}">{$nav_title_articles}</a>
		  <a href="{ROUTE_PROJECTS}" class="list-group-item {if $tab_active eq T_A_PROJECTS}active{/if}">{$nav_title_projects}</a>
		  <a href="{ROUTE_CONTACTS}" class="list-group-item {if $tab_active eq T_A_CONTACTS}active{/if}">{$nav_title_social}</a>
		  <a href="{ROUTE_SOCIAL}" class="list-group-item {if $tab_active eq T_A_SOCIAL}active{/if}">{$nav_title_contacts}</a>
		</div>
		</div>
       {* languages *}
		<p class="margin-"><b>Choose language</b></p>
		{include file=$pagination}




    
      <footer>
        © 2015 artndev.space
      </footer>
    </div>
    
   {block name="body"}
   fff
   
   {/block} 
    
    
    



</body></html>
