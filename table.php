<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8"/>
      <title>Report</title>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
      <meta http-equiv="Content-type" content="text/html; charset=utf-8">
      <meta content="" name="description"/>
      <meta content="" name="author"/>
      <script language="javascript">
         function Validate3()
         {
         	document.getElementById("htmlcode").value=document.getElementById("divExcel").innerHTML;
         	document.getElementById("frmTallyRpt1").submit();
         	//window.open ("http://thebasilworldschool.in/Admin/Fees/ExcelRpt.php");
         }
      </script>
   </head>
   <body  >
      <input name="btnExcel" id="btnExcel" type="button" value="Export To Excel" onclick="Javascript:Validate3();" class="btn red">
      <div id="divExcel">
         <table >
         <tr>
            <th>Srno</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
         </tr>
         <tr>
            <td >1</td>
            <td >vikash</td>
            <td >vikash@gmail.com</td>
            <td >9255003XXX</td>
         </tr>
         <tr>
            <td >1</td>
            <td >vikash</td>
            <td >vikash@gmail.com</td>
            <td >9255003XXX</td>
         </tr>
         <tr>
            <td >1</td>
            <td >vikash</td>
            <td >vikash@gmail.com</td>
            <td >9255003XXX</td>
         </tr>
         <tr>
            <td >1</td>
            <td >vikash</td>
            <td >vikash@gmail.com</td>
            <td >9255003XXX</td>
         </tr>
         <tr>
            <td >1</td>
            <td >vikash</td>
            <td >vikash@gmail.com</td>
            <td >9255003XXX</td>
         </tr>
         <tr>
            <td >1</td>
            <td >vikash</td>
            <td >vikash@gmail.com</td>
            <td >9255003XXX</td>
         </tr>
      </div>
      <form name="frmTallyRpt1" id="frmTallyRpt1" method="post" action="<?php echo $SubmitURL;?>" enctype="multipart/form-data">
         <!--<input type="hidden" name="Qry" id="Qry" value="<?php echo $ssql;?>">-->
         <input type="hidden" name="htmlcode" id="htmlcode" value="">
      </form>
   </body>
</html>