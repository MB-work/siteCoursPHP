<h4>¿ Questions de cours ? </h4>
<ol class="list-group"> 
             

        <? if (isset($data_aside)){
            foreach ($data_aside as $key => $val) { ?>
            <li class="list-group-item">
                <? echo $key." - ". $val; ?>
            </li>
        <? } 
        }?>
</ol>


    
              