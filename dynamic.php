<?php
session_start();
require 'connect.php';

$matric = $_SESSION['matric'];
echo $matric;

$resource = "SELECT * FROM  course WHERE matric='$matric'";
$resource_query= mysql_query($resource);

$sum = 0;


?>


<h5 style="color:#0ac29d;text-align: center"> DATATABLE OF REGISTERED COURSES</h5>

  <div class="row gutter-xs" style="width:80%;margin-left: 8pc">
            <div class="col-xs-12">
              <div class="card">
                <div class="card-header">
                  <strong style="color:#0ac29d;text-align:center;">REGISTERED COURSES</strong>
<button type="button" onclick="window.print()" style="background:#0ac29d;color:white;width:120px;float: right;margin-right:3pc;margin-top:5px" class="btn" >PRNT COURSES</button>
                </div>

                <div class="card-body">
  <table id="demo-datatables-1" class="table table-striped table-hover table-nowrap dataTable"  cellspacing="0" width="100%">
                    <thead style="color:#0ac29d">
                      <tr>
                        <th style="text-align: center;">COURSE NAME</th>
                        <th style="text-align: center;">COURSE CODE</th>
                        <th style="text-align: center;">COURSE UNIT</th>
                       
                        
                      </tr>
                    </thead >
                    <tfoot style="color:#0ac29d">
                       <tr>
                       <th style="text-align: center;">COURSE NAME</th>
                        <th style="text-align: center;">COURSE CODE</th>
                        <th style="text-align: center;">COURSE UNIT</th>
                      
                      </tr>
                    </tfoot>
                        <?php while($row = mysql_fetch_array($resource_query)):;?>
                    <tbody style="text-align: center;color: grey">
                      
                     <?php $sum = $sum + $row['3'] ?>
                     <tr></tr>
                      <tr>
                        <td><?php echo $row['1']?></td>
                        <td><?php echo $row['2']?></td>
                        <td><?php echo $row['3']?></td>
                      </tr>
                        
                    </tbody>
                     <?php endwhile;?>

                     <tr>
                     <td style="text-align: center;"></td>
                     <td style="text-align: center;"> TOTAL UNITS</td>
                     <td style="text-align: center;"><?php echo $sum?></td>
                     </tr>
                  </table>

       </div>
              </div>
            </div>
          </div>
