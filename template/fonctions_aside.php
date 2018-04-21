    <h4>¡ Fonctions utiles à tester !</h4>
<ul class="list-group">
    
          
              <? 
         
        if (isset($data_aside)){
            foreach ($data_aside as $key => $val) { ?>
        <? if (isset($val["url"])) { ?> 
            <li class="list-group-item"><a href="<? echo $val["url"]; ?>" target="blank">
         <? } ?>  <? echo $val["nom"]; ?>
                <? if (isset($val["url"])) { ?>   </a>
                 </li>
                <? } ?>
           
        <? 
            }
        } ?>
</ul>