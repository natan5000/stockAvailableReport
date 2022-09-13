<?php 
	require_once("../include/functions.php");
	$d = new curl();
    $code = $_GET["id"];
    $data = $d->productDetails($code);
   
?>
<table id="dtBasicExample" class="table" cellspacing="0" width="100%">
    <thead class="thead-dark">
        <tr>                                                                                                
            <th style="width: 20%;" class="hTable left blueText fw f13">Box # </th>
            <th style="width: 20%;" class="hTable left blueText fw f13">Last Operation Date</th>
            <th style="width: 20%;" class="hTable last blueText fw f13">Available Qty</th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach($data as $values)    {                                            
        ?>
        <tr>                                                          
            <td>
                <?= $values['code']?>
            </td>  
            <td>
                <?= date("d-m-Y",strtotime($values['date_last']))?>
            </td>
            <td>

                <?= $values['stock']?>
            </td>   
        </tr>
        <?php
            }                                         
        ?>
    </tbody>
</table>
