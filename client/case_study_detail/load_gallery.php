 <?php
            session_start();

    
      include('../assets/include/db.php');
echo '<div class="datatable  mt-5 card datatable-default datatable-primary datatable-loaded">
<div class="row">
<div class="col">
<h2 class=" p-5 ml-5">Case study detail
</h2>
</div>
<div class="col">
<a  class="btn btn-primary font-weight-bolder float-right mr-5 mt-3" type="button"  data-toggle="modal" data-target="#showservice">
<i class="fas fa-plus fa-1x"></i>Add case study detail</a>
</div>
</div>


   <table class="table-bordered table-hover text-center datatable-sm datatable-table  datatable-sm "  style="display: block;">
      <thead class="datatable-head bg-light-primary text-primary">
         <tr class="datatable-row p-5" >
    
            <th class="datatable-cell  datatable-cell-sort text-center" style="width:100px" >  Id </th>
            <th  class="datatable-cell datatable-cell-sort "  style="width:150px" >  Vertical  </th>
            <th  class="datatable-cell datatable-cell-sort "  style="width:100px" >  Image </th>
            <th  class="datatable-cell datatable-cell-sort "  style="width:150px" >  title </th>

            <th  class="datatable-cell datatable-cell-sort   text-center" style="width:100px">  Action </th>
         </tr>
      </thead>
      <tbody style="" class="datatable-body text-center">';

$sql="SELECT * FROM  case_study_detail";
$run=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($run)) {
    echo '
         <tr  class="datatable-row p-0" >
            <td class="datatable-cell datatable-toggle-detail  text-center" style="width:100px" >  '.$row['id'].' </td>
            <td  style="width:150px" >
            
            ';
    ?>
     
    <?php
    $sqll="SELECT * FROM  vertical WHERE id='$row[v_id]'";
$runl=mysqli_query($conn,$sqll);
while($rowl=mysqli_fetch_assoc($runl)) {
    echo '<span class="badge badge-dark">'.$rowl['heading'].'</span>'; }
    ?>

<?php
    echo '</td>
            <td class="datatable-cell datatable-toggle-detail "  style="width:100px"> <img src="../'.$row['image'].'" width=100px/> </td>
            <td class="datatable-cell datatable-toggle-detail "  style="width:150px"> '.$row['title'].'  </td>
         
            <td class="datatable-cell datatable-toggle-detail  text-center "style="width:100px">';  
          
                echo '
            <a onclick="del_about_gallery('.$row['id'].');" class="btn btn-sm btn-clean btn-icon mr-1 border" title="Delete"><i class="fas fa-trash fa-1x"></i>	</a>
            <a onclick="edit_about_gallery('.$row['id'].');" class="btn btn-sm btn-clean btn-icon  border" title="Delete"><i class="fas fa-edit  fa-1x"></i>	</a>
             </td>
           
          </tr>
         
    ';
}
echo '  </tbody>
   </table>

      
</div>';
    
          ?>
