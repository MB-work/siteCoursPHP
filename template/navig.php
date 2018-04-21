 <ul class="nav navbar-nav">
   <?php
   foreach ($navigation as $key => $val){ ?>
<?php if( isset($navigationSCH[$key] )) { ?>



 <li class="dropdown  <? if ($key == $page) { ?>active<? } ?>   " >
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><? echo $val["titre_cours"]; ?> <span class="caret"></span></a>

<ul class="dropdown-menu">
    	 <?php  foreach ($navigationSCH[$key] as $key2 => $val2){ ?>
		  <li>
		    <a href="<? echo $base_url.$val2["fichier"]; ?>"><? echo $val2["titre"]; ?></a> 
		  </li>
		   <? } ?>
		</ul>
	</li>

<? }else{ ?>


   <li   <? if ($key == $page) { ?>class="active"<? } ?>   > 
    <a href="<? echo $base_url.$val["fichier"]; ?>"><? echo $val["titre_cours"]; ?></a> 

  </li>
  	<? } //fin else?>
   <? } //fin for ?>
 </ul>

