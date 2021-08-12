 <?php
            session_start();

    
      include('../assets/include/db.php');
echo '<div class=" ">
   <table class="table-bordered table-hover   bg-white text-center table-responsive w-100"  style="display: block;width:100%;">
      <thead class=" bg-light-primary text-primary">
         <tr class=" "  >
    
            <th class="   p-4  "  >  Id </th>
         <th  class="     w-50"    >  Service  </th>
         <th  class="     w-50"     >  Action  </th>
         </tr>
      </thead>
      <tbody style="" class="datatable-body ">';

$sql="SELECT id,title,process_detail FROM services";
$run=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($run)) {
    echo '
         <tr  class="datatable-row p-0" >
            <td class="  datatable-toggle-detail  p-5 " contenteditable="ture">  '.$row['id'].' </td>';
          echo '<td class="  datatable-toggle-detail " >'.$row['title'].' </td>';  
    if($row['process_detail']==0) {
      echo ' <td class="  datatable-toggle-detail" >
           <a href="services_process_create.php?s_id='.$row['id'].'" class="btn btn-sm btn-light-primary   border">Create Process	</a>
            </td>
          </tr>
         
    ';    
    }
    else {
          echo ' <td class="  datatable-toggle-detail" >
           <a href="services_process_edit.php?s_id='.$row['id'].'" class="btn btn-sm btn-primary   border">Update Process	</a>
            </td>
          </tr>
         
    ';
    }
    
}
echo '  </tbody>
   </table>

      
</div>';
    
          ?>
