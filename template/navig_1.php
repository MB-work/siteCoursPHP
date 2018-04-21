
        
         <ul class="list-group">
<?php

      foreach ($navigation as $key => $val){ ?>
           <li class="list-group-item"> <a href="<? echo $base_url.$val["fichier"]; ?>"><? echo $val["titre"]; ?></a></li>
        <? } ?>
        </ul>