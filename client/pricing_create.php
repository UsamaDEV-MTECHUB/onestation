 <?php
            session_start();
if(isset( $_SESSION['email'])) {
    
}
else {
     header('Location:login.php');
}
          include('assets/include/db.php');
if(isset($_GET['action'])) {
    $action='
    <div class="container pt-5">
    <div class="alert alert-success alert-dismissible fade show " role="alert">
  <strong>Record Updated!</strong> 
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
</div>
';
}
else {
    $action='';
}
          ?>
 <!DOCTYPE html>

 <html lang="en">

 <head>
     <?php
          include('assets/include/script.php');
          ?>

 </head>

 <body id="kt_body" class="quick-panel-right demo-panel-right offcanvas-right header-fixed header-mobile-fixed subheader-enabled aside-enabled aside-fixed aside-minimize-hoverable page-loading">

     <?php
          include('assets/include/header.php');
          ?>

     <div class="d-flex flex-column flex-root">
         <!--begin::Page-->
         <div class="d-flex flex-row flex-column-fluid page">
             <?php
          include('assets/include/websidebar.php');
          ?>

             <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">

                 <?php
          include('assets/include/webheader.php');
          ?>
                 <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                     <?php echo $action;?>
                     <div class="subheader py-6 py-lg-8 ">

                         <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">

                             <div class="d-flex align-items-center flex-wrap mr-1">
                                 <div class="d-flex align-items-baseline flex-wrap mr-5">
                                     <h5 class="text-dark font-weight-bold my-1 mr-5">Pricing</h5>
                                     <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">

                                         <li class="breadcrumb-item">
                                             <a class="text-muted"> Create </a>
                                         </li>

                                        
                                     </ul>
                                 </div>
                             </div>
                             <div class="card-toolbar">

                                 <?php
                                            $_SESSION['pricing_p_id']=$_GET['p_id'];
                                            $sql_ser="SELECT id,title FROM pricing WHERE id='$_GET[p_id]'";
                                            $run_ser=mysqli_query($conn,$sql_ser);
                                            while($row_ser=mysqli_fetch_assoc($run_ser)) {
                                            echo 'Create a Pricing for <span class="badge badge-success">'.$row_ser['title'].' </span> package  ';
                                              
                                                }
                                        
                            ?>

                             </div>
                             <div class="card-toolbar">
                                 <span class="label label-lg label-warning label-inline">Pricing Increment will be auto Generated</span>
                             </div>
                         </div>
                     </div>

                     <div class="d-flex flex-column-fluid">

                         <div class="container " id="box">
                             <form class="insert-form" id="insert_form" method="POST" action="javascript:void(0);" enctype="multipart/form-data">
                                 <button type="button" name="add" id="add" value="add" class="btn btn-light-primary  mb-4 col-2 border-primary"><i class="fa fa-plus"></i> Add New Row</button>
                                 <table class="table table-bordered bg-white table-responsive" id="table_field">
                                     <tr class="bg-primary text-white">
                                         <th class="col-6">description </th>
                                         <th class="col-6">Action </th>
                          
                                     </tr>
                                          <tr ><td colspan="4" style="display:hidden;" id="loadx"></td></tr>
                                
                                     <tr id="none1">
                                         <input type="text" class="form-control d-none" name="p_id" value="<?php echo $_GET['p_id'];?>" />
                                         <td><input type="text" class="form-control " name="description[]" /> </td>
            
                                         <td>
                                             <button  type="button" name="remove" id="remove" value="remove" class="btn btn-danger btn-sm col-12">Remove</button>
                                             </td>
                                     </tr>
                                 </table>

                                 <div align="center">
                                     <button type="submit" name="save" id="save" onclick="adds();" class="btn btn-info col-3">save</button>
                                 </div>
                             </form>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>

     <!-- Modal -->
     <div class="modal  " id="load_icon1" tabindex="-1" role="dialog" aria-labelledby="addservice" aria-hidden="true">
         <div class="modal-dialog  modal-lg modal-dialog-centered" role="document">
             <div class="modal-content">
                      <h5 class="modal-title p-5 mt-5 text-center" id="exampleModalLongTitle">Submitting Form</h5>
                 <div class="modal-body " style="height:200px;" id="showAjaxResults">

                 </div>

             </div>
         </div>
     </div>

     <?php
          include('assets/include/footer_script.php');
          ?>

     <script>
         var x = '<div class="row"><div class="col-12 text-center"> <div class="spinner-border text-primary" role="status"><span class="sr-only">Loading...</span></div></div></div>';




         $(document).ready(function() {
             del=1;
             $('#loadx').hide();
             $('#add').click(function() {
                  $('#loadx').show();
                 document.getElementById('loadx').innerHTML=x;
                   $('#none1').clone().appendTo("#table_field").find("input[type='checkbox'],input[type='text'],textarea").prop('checked',false).val('');
                 del++; 
                                   $('#loadx').hide();
                                     
                  
                
             });
             
             $('#table_field').on('click', '#remove', function() {
                 if(del>1) {
                     if (confirm("this action canot be undo")) {
                 $(this).closest('tr').remove(); 
                     del--;    
                     }
                 
                 }
                 else {
                  //   alert('none');
                 }
               
             });

         });



         function adds() {
               $('#load_icon1').modal({backdrop: 'static', keyboard: false})  ;
                 document.getElementById('showAjaxResults').innerHTML=x;
             
             
              setTimeout(function() { 
              if (fetch('pricing/insert.php', {
                     method: "POST",
                     body: new FormData(document.getElementById('insert_form'))
                 })) {
$('#load_icon1').modal('hide');  
                  window.location="pricing.php?action=done";
             }}, 1000);
             
             
             
         }



    
     </script>
 </body>

 </html>