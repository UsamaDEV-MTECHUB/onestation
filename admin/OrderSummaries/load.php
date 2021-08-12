 <?php
            session_start();

    
      include('../assets/include/db.php');
echo '<div class="datatable datatable-default datatable-primary datatable-loaded">
   <table class="table-bordered table-hover datatable-sm datatable-table  text-center datatable-sm "  style="display: block;">
      <thead class="datatable-head bg-light-primary text-primary">
         <tr class="datatable-row p-5" >
    
            <th class="datatable-cell  datatable-cell-sort " style="width:50px" >  Id </th>
            <th  class="datatable-cell datatable-cell-sort "  style="width:100px"  >  IP adress </th>
            <th  class="datatable-cell datatable-cell-sort " style="width:100px"  > date </th>
            <th  class="datatable-cell datatable-cell-sort " style="width:100px"  >  Transaction Id</th>
            <th  class="datatable-cell datatable-cell-sort " style="width:200px"  >  Customer Name </th>
            <th  class="datatable-cell datatable-cell-sort " style="width:100px"  > Amount </th>

            <th  class="datatable-cell datatable-cell-sort  " style="width:100px">  Action </th>
         </tr>
      </thead>
      <tbody style="" class="datatable-body ">';

$sql="SELECT * FROM order_summary";
$run=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($run)) {
    echo '
         <tr  class="datatable-row p-0" >
            <td class="datatable-cell datatable-toggle-detail " style="width:50px" >  '.$row['id'].' </td>
            <td class="datatable-cell datatable-toggle-detail " style="width:100px" >  '.$row['my_ip'].' </td>
            <td class="datatable-cell datatable-toggle-detail " style="width:100px" >  '.$row['date'].' </td>
            <td class="datatable-cell datatable-toggle-detail " style="width:100px" >  '.$row['transaction_id'].' </td>
            <td class="datatable-cell datatable-toggle-detail " style="width:200px" >  '.$row['c_firstName'].'  '.$row['c_lastName'].'</td>
            <td class="datatable-cell datatable-toggle-detail " style="width:100px" >  '.$row['transaction_amount'].' </td>
         
            <td class="datatable-cell datatable-toggle-detail  "style="width:100px">';  
          
                echo '
            <a onclick="del_service('.$row['id'].');" class="btn btn-sm btn-clean btn-icon mr-1 border" title="Delete"><i class="fas fa-trash fa-1x"></i>	</a>
            <a href="vieworder.php?orderid='.$row['id'].'&my_ip='.$row['my_ip'].'&date='.$row['date'].'" class="btn btn-sm btn-clean btn-icon  border" title="Delete"><i class="fas fa-eye  fa-1x"></i>	</a>
             </td>
          </tr>
         
    ';
}
echo '  </tbody>
   </table>

      
</div>';
    
          ?>
