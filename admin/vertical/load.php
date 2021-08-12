 <?php
            session_start();

    
      include('../assets/include/db.php');
echo '<div class="datatable datatable-default datatable-primary datatable-loaded">
   <table class="table-bordered table-hover datatable-sm datatable-table  text-center datatable-sm "  style="display: block;">
      <thead class="datatable-head bg-light-primary text-primary">
         <tr class="datatable-row p-5" >
    
            <th class="datatable-cell  datatable-cell-sort " style="width:50px" >  Id </th>
            <th  class="datatable-cell datatable-cell-sort " style="width:150px" >  Heading </th>
            <th  class="datatable-cell datatable-cell-sort " style="width:150px" >  Title </th>
            <th  class="datatable-cell datatable-cell-sort " style="width:150px" >  Overview heading</th>
            <th  class="datatable-cell datatable-cell-sort " style="width:150px" >  Overview detail </th>
            <th  class="datatable-cell datatable-cell-sort " style="width:150px" >  Result_title </th>
            <th  class="datatable-cell datatable-cell-sort " style="width:150px" >  Result description </th>

            <th  class="datatable-cell datatable-cell-sort  " style="width:100px">  Action </th>
         </tr>
      </thead>
      <tbody style="" class="datatable-body ">';

$sql="SELECT * FROM vertical";
$run=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($run)) {
    echo '
         <tr  class="datatable-row p-0" >
            <td class="datatable-cell datatable-toggle-detail " style="width:50px" >  '.$row['id'].' </td>
            <td class="datatable-cell datatable-toggle-detail " style="width:150px" >  '.$row['heading'].' </td>
            <td class="datatable-cell datatable-toggle-detail " style="width:150px">  '.$row['title'].' </td>
            <td class="datatable-cell datatable-toggle-detail " style="width:150px">  '.$row['overview_heading'].' </td>
            <td class="datatable-cell datatable-toggle-detail " style="width:150px">  '.$row['overview_detail'].' </td>
            <td class="datatable-cell datatable-toggle-detail " style="width:150px">  '.$row['result_title'].' </td>
            <td class="datatable-cell datatable-toggle-detail " style="width:150px">  '.$row['result_description'].' </td>
         
            <td class="datatable-cell datatable-toggle-detail  "style="width:100px">';  
          
                echo '
            <a onclick="del_service('.$row['id'].');" class="btn btn-sm btn-clean btn-icon mr-1 border" title="Delete"><i class="fas fa-trash fa-1x"></i>	</a>
            <a onclick="edit_service('.$row['id'].');" class="btn btn-sm btn-clean btn-icon  border" title="Delete"><i class="fas fa-edit  fa-1x"></i>	</a>
             </td>
          </tr>
         
    ';
}
echo '  </tbody>
   </table>

      
</div>';
    
          ?>
