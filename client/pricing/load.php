 <?php
            session_start();

    
      include('../assets/include/db.php');
echo '<div class="datatable datatable-default datatable-primary datatable-loaded">
   <table class="table-bordered table-hover datatable-sm datatable-table  text-center datatable-sm "  style="display: block;">
      <thead class="datatable-head bg-light-primary text-primary">
         <tr class="datatable-row p-5" >
    
            <th class="datatable-cell  datatable-cell-sort " style="width:50px" >  Id </th>
            <th  class="datatable-cell datatable-cell-sort w-25"  > Service </th>
            <th  class="datatable-cell datatable-cell-sort w-25"  > Package Title </th>
            <th  class="datatable-cell datatable-cell-sort w-25"  > Price ($)</th>

            <th  class="datatable-cell datatable-cell-sort  " style="width:100px">  Action </th>
         </tr>
      </thead>
      <tbody style="" class="datatable-body ">';

$sql="SELECT * FROM pricing";
$run=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($run)) {
    echo '
         <tr  class="datatable-row p-0" >
            <td class="datatable-cell datatable-toggle-detail " style="width:50px" >  '.$row['id'].' </td>';
?>

<?php

$sqll="SELECT id,title FROM services WHERE id='$row[s_id]'";
$runl=mysqli_query($conn,$sqll);
while($rowl=mysqli_fetch_assoc($runl)) {
    echo '<td class="datatable-cell datatable-toggle-detail w-25" > <span class="badge w-75 bg-light-primary ">'.$rowl['title'].' </span>  </td>';
}
    ?>


            
<?php            echo '<td class="datatable-cell datatable-toggle-detail w-25" >  '.$row['title'].' </td>
            <td class="datatable-cell datatable-toggle-detail w-25" >  '.$row['price'].' </td>
         
            <td class="datatable-cell datatable-toggle-detail  "style="width:100px">';  
          

            if($row['pricing_detail']==0) {
               echo '
                    <a href="pricing_create.php?p_id='.$row['id'].'" class="btn btn-sm btn-light-primary   border">Create  Pricing 	</a>
                    
                  
             ';    
             }
             else {
                   echo '
                    <a href="pricing_edit.php?p_id='.$row['id'].'" class="btn btn-sm btn-primary   border">Update Pricing	</a>
           
                  
             ';
             }


                echo '
                <a onclick="edit_service('.$row['id'].');" class="btn btn-sm btn-clean btn-icon  border" title="Delete"><i class="fas fa-edit  fa-1x"></i>	</a>
           
            <a onclick="del_service('.$row['id'].');" class="btn btn-sm btn-clean btn-icon mr-1 border" ><i class="fas fa-trash fa-1x"></i>	</a>
             </td>
          </tr>
         
    ';
}
echo '  </tbody>
   </table>

      
</div>';
    
          ?>
