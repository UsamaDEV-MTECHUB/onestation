 <?php
            session_start();

    
      include('../assets/include/db.php');
echo '<div class=" ">
   <table class="table-bordered table-hover   bg-white text-center table-responsive w-100"  style="display: block;">
      <thead class=" bg-light-primary text-primary">
         <tr class=" "  >
    
            <th class="   p-4  "  >  Id </th>
            <th  class="    "   style="width:200px;" >  category </th>
          
         <th  class="     "   style="width:200px;"  >  Service  </th>
           <th  class="    "  >  overview </th>
            <th  class="    "  >  backend </th>
            <th  class="    "   >  frontend </th>
            <th  class="   " style="width:200px;"   >  architecture </th>
            
            <th  class=" " style="width:100px;"  >  Action </th>
         </tr>
      </thead>
      <tbody style="" class="datatable-body ">';

$sql="SELECT * FROM service_detail";
$run=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($run)) {
    echo '
         <tr  class="datatable-row p-0" >
            <td class="  datatable-toggle-detail  p-5" >  '.$row['id'].' </td>';
     ?>
  <?php

                            
                    $sqll="SELECT * FROM service_category WHERE id='$row[s_cat_id]'";
                    $runn=mysqli_query($conn,$sqll);
                    while($rows=mysqli_fetch_assoc($runn)) {
                    echo '<td class="  datatable-toggle-detail " ><span class="badge bg-light-primary">  '.$rows['name'].'</span> </td>';  
                        }
                
    ?>
    <?php

                            
                    $sql_ser="SELECT id,title FROM services WHERE id='$row[s_id]'";
                    $run_ser=mysqli_query($conn,$sql_ser);
                    while($row_ser=mysqli_fetch_assoc($run_ser)) {
                    echo '<td class="  datatable-toggle-detail " > <span class="badge badge-primary"> '.$row_ser['title'].' </span></td>';  
                        }
                
    ?>
     
<?php echo '
     
            <td class="  datatable-toggle-detail " >  '.htmlspecialchars(substr($row['overview'],0,50)).'... </td>
            <td class="  datatable-toggle-detail " >  '.htmlspecialchars(substr($row['backend'],0,50)).'... </td>
            <td class="  datatable-toggle-detail " >  '.htmlspecialchars(substr($row['frontend'],0,50)).'... </td>
            <td class="  datatable-toggle-detail " >  '.htmlspecialchars(substr($row['architecture'],0,50)).'... </td>
       
            <td class="  datatable-toggle-detail" >
           ';
    if($row['overview']=='' && $row['backend']=='' && $row['frontend']=='' && $row['architecture']=='' ) {
    echo '
            <a onclick="edit('.$row['id'].');" class="btn btn-sm btn-clean btn-icon  border" title=""><i class="fas fa-pen-nib  fa-1x"></i>	</a>';     
    }
    else 
    {  echo '
            <a onclick="edit('.$row['id'].');" class="btn btn-sm btn-clean btn-icon  border" title="Delete"><i class="fas fa-edit  fa-1x"></i>	</a>';}
  echo '
             </td>
          </tr>
         
    ';
}
echo '  </tbody>
   </table>

      
</div>';
    
          ?>
