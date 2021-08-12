 <?php
            session_start();

    
      include('../assets/include/db.php');
echo '<div class="">
   <table class="table bg-white table-hover table-bordered text-center "  >
      <thead class=" bg-light-primary text-primary">
         <tr class=" " scope="row" >
    
            <th>  Id </th>
            <th>  Category  </th>
            <th>  Title </th>
            <th  class="w-25">  Subtitle </th>
            <th  class=" w-25" >  Description </th>
            <th >  Action </th>
         </tr>
      </thead>
      <tbody style="" class="datatable-body ">';

$sql="SELECT * FROM services";
$run=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($run)) {
    echo '
         <tr  class=" p-0" >
            <td class="  " >  '.$row['id'].' </td>';
    ?>
    
     <?php

                            
                    $sqll="SELECT * FROM service_category WHERE id='$row[s_cat_id]'";
                    $runn=mysqli_query($conn,$sqll);
                    while($rows=mysqli_fetch_assoc($runn)) {
                    echo '<td class="  " ><span class="badge badge-primary">  '.$rows['name'].'</span> </td>';  
                        }
                
    ?>
<?php 
    echo '
            <td class="  " >  '.$row['title'].' </td>
            <td class="  " >  '.$row['subtitle'].' </td>
            <td class="" >  '.substr($row['description'],0,50).' ... </td>
            <td class=" " ><a onclick="del_service('.$row['id'].');" class="btn btn-sm btn-clean btn-icon mr-1 border" title="Delete"><i class="fas fa-trash fa-1x"></i>	</a>
            <a onclick="edit_service('.$row['id'].');" class="btn btn-sm btn-clean btn-icon  border" title="Delete"><i class="fas fa-edit  fa-1x"></i>	</a>
             </td>
          </tr>
         
    ';
}
echo '  </tbody>
   </table>

      
</div>';
    
          ?>
