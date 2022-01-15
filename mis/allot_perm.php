<? session_start();
include('config.php');

if($_SESSION['username']){ 

include('header.php');
?>
<link rel="stylesheet" type="text/css" href="../datatable/dataTables.bootstrap.css">

            <div class="pcoded-content">
                <div class="pcoded-inner-content">
                    <div class="main-body">
                        <div class="page-wrapper">
                            <div class="page-body">
                                <div class="card">
                                    <div class="card-block">
                                        
                                        <? 
                                            $id = $_GET['id'];
                                            $sql = mysqli_query($con,"select * from mis_loginusers where id = '".$id."'");
                                            $sql_result = mysqli_fetch_assoc($sql);
                                            
                                            $zone = $sql_result['zone'];
                                            $zone = explode (",", $zone);
                                            
                                            
                                            ?>
                                        
                                        <form action="process_allot_perm.php" method="POST">
                                            <input type="hidden" name="userid" value="<? echo $id; ?>">
                                            
                                            <div class="row">
                                                <?
                                                    $zone_sql = mysqli_query($con,"select distinct(Zone) as zone from sites where Zone <> ''");
                                                    while($zone_sql_result = mysqli_fetch_assoc($zone_sql)){ ?> 
                                                        <div class="col-sm-3">                                               
                                                           <input type="checkbox" class="zone" name="zone[]" value="<? echo $zone_sql_result['zone']?>"  <? if(in_array($zone_sql_result['zone'],$zone)){ echo 'checked' ; } ?> >
                                                           <? echo $zone_sql_result['zone'];?>
                                                        </div> 
                                                    <? } ?>
                                                    
                                                    

                                        </div>
                                             
                                             <hr>
                                             <div class="custrow" id="here">
                                                 
                                             </div>
                                             
                                       
                                       <div class="row">
                                           <div class="col-sm-4">
                                               <br><br>
                                               <input type="submit" name="submit" class="btn btn-danger">
                                           </div>
                                       </div>
                                          
                                        </form>
                                         
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
                    
                    
    <? include('footer.php');
    }
else{ ?>
    
    <script>
        window.location.href="login.php";
    </script>
<? }
    ?>
    
    <script>
    
    
    var userid = '<?php echo $_GET['id'];?>'
    var searchIDs = $('input.zone:checked').map(function(){
        
      return $(this).val();
        
    });
    

    
    var zone = searchIDs.get().join();
      $.ajax({
            type: "POST",
            url: 'perm_ajax.php',
            data: 'zone='+zone+'&user='+userid,
            success:function(msg) {
                $("#here").html(msg);
            }
          });

    
    $(document).on('change','.zone',function(){
   
    var searchIDs = $('input.zone:checked').map(function(){
        
      return $(this).val();
        
    });

      $.ajax({
            type: "POST",
            url: 'perm_ajax.php',
            data: 'zone='+searchIDs.get()+'&user='+userid,
            success:function(msg) {
                $("#here").html(msg);
            }
          });
    
});
    </script>

</body>

</html>
                                        
                                        