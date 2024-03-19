<?php
session_start();
error_reporting(0);
include('../includes/dbconnection.php');
error_reporting(0);
if (strlen($_SESSION['vpmsaid']==0)) {
  header('location:logout.php');
  } else{
    if(isset($_POST['submit']))
  {
    $fdate=$_POST['fromdate'];
    $tdate=$_POST['todate'];
    $_SESSION['fdate']=$fdate;
    $_SESSION['tdate']=$tdate;
    echo "<script>window.location.href='phistory.php'</script>";
  }
  ?>
<!doctype html>
<html class="no-js" lang="">
<head>
    
    <title>Reports</title>
    
</head>
<body>
   <?php include_once('dashboard.php');?>
   <div  style="margin-left: 30%;margin-top: -56%;width:550px"  class="card-body card-block">
                                <form style="display:inline-block;font-size:20px;background-color: aliceblue;width:500px"  method="post" enctype="multipart/form-data" class="form-horizontal" name="bwdatesreport">
                                <h1 style="margin-left: 10%;font-size:35px;">Between Dates parking</h1>
                                    <p style="font-size:16px; color:red" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>
                                    <div style="font-size:25px;margin-left: 5%;" class="row form-group">
                                        <div class="col col-md-3"><label  for="text-input" class=" form-control-label">From Date</label></div>
                                        <div  class="col-12 col-md-9"><input style="display: inline-flexbox;margin-left: 30px;margin: -3px;padding: 5px 5px;border-top: -1px;width: 300px;" type="date" name="fromdate" id="fromdate" class="form-control" required="true"></div>
                                    </div>
                                    <div style="font-size:25px;margin-left: 5%;"  class="row form-group">
                                        <div class="col col-md-3"><label for="email-input" class=" form-control-label">To Date</label></div>
                                        <div class="col-12 col-md-9"><input style="display: inline-flexbox;margin-left: 30px;margin: -3px;padding: 5px 5px;border-top: -1px;width: 300px;"type="date" name="todate"  class="form-control" required="true"></div>
                                    </div>                                   
                                    
        <button type="submit" style="padding-bottom:10px;margin-left: 50px;
    width: 80%;
    margin-left: 30px;
    padding: 5px 5px;
    border-radius: 50px;margin-top: 5px;background-color: blue;" class="btn btn-primary btn-sm" name="submit" >Submit</button></p>
                                </form>
                            </div>
</body>
</html>
<?php }  ?>