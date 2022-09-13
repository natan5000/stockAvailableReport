<?php
	require_once("./include/functions.php");    
    $d = new curl();
    $data = $d->stockAvailable();
?> 
       <div class="container mt-3 card" > 
            <div class="row">
                <div class="col-xl-12 mt-3"> 
                    <div class="row">
                        <div class="col-md-12">                 
                            <center><h3>Stock Available</h3></center>
                        </div>
                    </div>                    
                </div>
                
                <div class="container p-3">                                           	
                                                                           
                    <table id="dtBasicExample" class="table" cellspacing="0" width="100%">
                        <thead class="thead-dark">
                            <tr>                                                                                                
                                
                                <th style="width: 20%;" class="hTable left blueText fw f13">Product</th>                           
                                <th style="width: 20%;" class="hTable last blueText fw f13">Last Operation Date</th>
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
                                <?= date("d-m-Y",strtotime($values['date']))?>
                                </td>
                                <td>
                                    <p id="demo" class="text-primary " style="cursor: pointer;"  onclick="myFunction('<?= $values['id']?>')" ><?= $values['qty']?></p>
                                </td>                                      
                                                                             
                                
                            </tr>
                            <?php
                            }
                                                                     
                            ?>
                        </tbody>
                    </table>
                </div> 
            </div>                                    
        </div>
        <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        
                        <h4 class="modal-title">Product detail</h4>
                    </div>
                    <div class="modal-body">
                        

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Ok</button>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
<script type="text/javascript">
    function myFunction($id) {       
       event.preventDefault();
       var num1 = $id;
       
           $('.modal-body').load('./reports/detailsProduct.php?id='+num1,function(){
               $('#myModal').modal({show:true});
           });   
   }
    $(document).ready(function () {
        $('#dtBasicExample').DataTable();
        $('.dataTables_length').addClass('bs-select');
    });
</script>         