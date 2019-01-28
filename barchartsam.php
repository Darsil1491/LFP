<?php
  include("config.php");
  $chaka = 100;
  $choko = 50;

  //=================================SUMMARY============================
  $sql_query_TOTAL_sp = "SELECT * FROM lfpstatustable1 WHERE prov = 'S. Leyte'";
  $result = mysqli_query($conn,$sql_query_TOTAL_sp);
  $sum_TOTAL_sp = 0;
  while($row = mysqli_fetch_array($result)){
              $TOTAL_sp = $row[8];
              $sum_TOTAL_sp += $TOTAL_sp;
        }

  $sql_query_TOTAL_sp = "SELECT * FROM lfpstatustable1 WHERE prov = 'S. Leyte' AND  Status = 'COMPLETED'";
  $result = mysqli_query($conn,$sql_query_TOTAL_sp);
  $sum_COMPLETED_sp = 0;
  while($row = mysqli_fetch_array($result)){
              $COMPLETED_sp = $row[8];
              $sum_COMPLETED_sp += $COMPLETED_sp;
        }
  $sql_query_ONGOING = "SELECT * FROM lfpstatustable1 WHERE prov = 'S. Leyte' AND  status = 'ON-GOING'";
  $result = mysqli_query($conn,$sql_query_ONGOING);
  $sum_ONGOING_sp = 0;
  while($row = mysqli_fetch_array($result)){
              $ONGOING_sp = $row[8];
              $sum_ONGOING_sp += $ONGOING_sp;
        }

  $sql_query_PRE = "SELECT * FROM lfpstatustable1 WHERE prov = 'S. Leyte' AND  status IN ('PRE-PROCUREMENT' , 'ITB/AD POSTED' , 'BID EVALUATION' , 'NOA ISSUANCE' , 'NTP/PO ISSUANCE')";
  $result = mysqli_query($conn,$sql_query_PRE);
  $sum_PRE_sp = 0;
  while($row = mysqli_fetch_array($result)){
              $PRE_sp = $row[8];
              $sum_PRE_sp += $PRE_sp;
        }

  $sql_query_DED = "SELECT * FROM lfpstatustable1 WHERE prov = 'S. Leyte' AND  status IN ('MOA SIGNED' , 'DED PREPARATION' , 'DED REVIEW/APPROVAL' , 'DED RE-SUBMISSION' , 'DED REVIEW/APPROVAL OF RE-SUBMISSION')";
  $result = mysqli_query($conn,$sql_query_DED);
  $sum_DED_sp = 0;
  while($row = mysqli_fetch_array($result)){
              $DED_sp = $row[8];
              $sum_DED_sp += $DED_sp;
        }

  $sql_query_NOTYETSTARTED = "SELECT * FROM lfpstatustable1 WHERE prov = 'S. Leyte' AND  status IN ('NOT YET STARTED' , 'FS/PP PREPARATION' , 'FS/PP REVIEW/APPROVAL' , 'FS/PP RE-SUBMISSION' , 'FS/PP REVIEW/APPROVAL OF RE-SUBMISSION')";
  $result = mysqli_query($conn,$sql_query_NOTYETSTARTED);
  $sum_NOTYETSTARTED_sp = 0;
  while($row = mysqli_fetch_array($result)){
              $NOTYETSTARTED_sp = $row[8];
              $sum_NOTYETSTARTED_sp += $NOTYETSTARTED_sp;
        }

  $sql_query_SUSPENDED = "SELECT * FROM lfpstatustable1 WHERE prov = 'S. Leyte' AND  status = 'SUSPENDED'";
  $result = mysqli_query($conn,$sql_query_SUSPENDED);
  $sum_SUSPENDED_sp = 0;
  while($row = mysqli_fetch_array($result)){
              $SUSPENDED_sp = $row[8];
              $sum_SUSPENDED_sp += $SUSPENDED_sp;
        }

  $sql_query_CANCELLED = "SELECT * FROM lfpstatustable1 WHERE prov = 'S. Leyte' AND  status = 'CANCELLED'";
  $result = mysqli_query($conn,$sql_query_CANCELLED);
  $sum_CANCELLED_sp = 0;
  while($row = mysqli_fetch_array($result)){
              $CANCELLED_sp = $row[8];
              $sum_CANCELLED_sp += $CANCELLED_sp;
        }

  $sql_query_NS = "SELECT * FROM lfpstatustable1 WHERE prov = 'S. Leyte' AND  status = 'NS'";
  $result = mysqli_query($conn,$sql_query_NS);
  $sum_NS_sp = 0;
  while($row = mysqli_fetch_array($result)){
              $NS_sp = $row[8];
              $sum_NS_sp += $NS_sp;
        }


  //===============2012==================================
  $sql_query_TOTAL_sp2 = "SELECT * FROM lfpstatustable1 WHERE prov = 'S. Leyte' AND  proj_year = '2012'";
  $result2 = mysqli_query($conn,$sql_query_TOTAL_sp2);
  $sum_TOTAL_sp2 = 0;
  while($row = mysqli_fetch_array($result2)){
              $TOTAL_sp2 = $row[8];
              $sum_TOTAL_sp2 += $TOTAL_sp2;
        }

  $sql_query_TOTAL_sp2 = "SELECT * FROM lfpstatustable1 WHERE prov = 'S. Leyte' AND  status = 'COMPLETED' AND proj_year = '2012'";
  $result2 = mysqli_query($conn,$sql_query_TOTAL_sp2);
  $sum_COMPLETED_sp2 = 0;
  while($row = mysqli_fetch_array($result2)){
              $COMPLETED_sp2 = $row[8];
              $sum_COMPLETED_sp2 += $COMPLETED_sp2;
        }
  $sql_query_ONGOING2 = "SELECT * FROM lfpstatustable1 WHERE prov = 'S. Leyte' AND  status = 'ON-GOING' AND proj_year = '2012'";
  $result2 = mysqli_query($conn,$sql_query_ONGOING2);
  $sum_ONGOING_sp2 = 0;
  while($row = mysqli_fetch_array($result2)){
              $ONGOING_sp2 = $row[8];
              $sum_ONGOING_sp2 += $ONGOING_sp2;
        }

  $sql_query_PRE2 = "SELECT * FROM lfpstatustable1 WHERE prov = 'S. Leyte' AND  status IN ('PRE-PROCUREMENT' , 'ITB/AD POSTED' , 'BID EVALUATION' , 'NOA ISSUANCE' , 'NTP/PO ISSUANCE') AND proj_year = '2012'";
  $result2 = mysqli_query($conn,$sql_query_PRE2);
  $sum_PRE_sp2 = 0;
  while($row = mysqli_fetch_array($result2)){
              $PRE_sp2 = $row[8];
              $sum_PRE_sp2 += $PRE_sp2;
        }

  $sql_query_DED2 = "SELECT * FROM lfpstatustable1 WHERE prov = 'S. Leyte' AND  status IN ('MOA SIGNED' , 'DED PREPARATION' , 'DED REVIEW/APPROVAL' , 'DED RE-SUBMISSION' , 'DED REVIEW/APPROVAL OF RE-SUBMISSION') AND proj_year = '2012'";
  $result2 = mysqli_query($conn,$sql_query_DED2);
  $sum_DED_sp2 = 0;
  while($row = mysqli_fetch_array($result2)){
              $DED_sp2 = $row[8];
              $sum_DED_sp2 += $DED_sp2;
        }

  $sql_query_NOTYETSTARTED2 = "SELECT * FROM lfpstatustable1 WHERE prov = 'S. Leyte' AND  status IN ('NOT YET STARTED' , 'FS/PP PREPARATION' , 'FS/PP REVIEW/APPROVAL' , 'FS/PP RE-SUBMISSION' , 'FS/PP REVIEW/APPROVAL OF RE-SUBMISSION') AND proj_year = '2012'";
  $result2 = mysqli_query($conn,$sql_query_NOTYETSTARTED2);
  $sum_NOTYETSTARTED_sp2 = 0;
  while($row = mysqli_fetch_array($result2)){
              $NOTYETSTARTED_sp2 = $row[8];
              $sum_NOTYETSTARTED_sp2 += $NOTYETSTARTED_sp2;
        }

  $sql_query_SUSPENDED2 = "SELECT * FROM lfpstatustable1 WHERE prov = 'S. Leyte' AND  status = 'SUSPENDED' AND proj_year = '2012'";
  $result2 = mysqli_query($conn,$sql_query_SUSPENDED2);
  $sum_SUSPENDED_sp2 = 0;
  while($row = mysqli_fetch_array($result2)){
              $SUSPENDED_sp2 = $row[8];
              $sum_SUSPENDED_sp2 += $SUSPENDED_sp2;
        }

  $sql_query_CANCELLED2 = "SELECT * FROM lfpstatustable1 WHERE prov = 'S. Leyte' AND  status = 'CANCELLED' AND proj_year = '2012'";
  $result2 = mysqli_query($conn,$sql_query_CANCELLED2);
  $sum_CANCELLED_sp2 = 0;
  while($row = mysqli_fetch_array($result2)){
              $CANCELLED_sp2 = $row[8];
              $sum_CANCELLED_sp2 += $CANCELLED_sp2;
        }

  $sql_query_NS2 = "SELECT * FROM lfpstatustable1 WHERE prov = 'S. Leyte' AND  status = 'NS' AND proj_year = '2012'";
  $result2 = mysqli_query($conn,$sql_query_NS2);
  $sum_NS_sp2 = 0;
  while($row = mysqli_fetch_array($result2)){
              $NS_sp2 = $row[8];
              $sum_NS_sp2 += $NS_sp2;
        }

  //===============2013==================================
  $sql_query_TOTAL_sp3 = "SELECT * FROM lfpstatustable1 WHERE prov = 'S. Leyte' AND  proj_year = '2013'";
  $result3 = mysqli_query($conn,$sql_query_TOTAL_sp3);
  $sum_TOTAL_sp3 = 0;
  while($row = mysqli_fetch_array($result3)){
              $TOTAL_sp3 = $row[8];
              $sum_TOTAL_sp3 += $TOTAL_sp3;
        }

  $sql_query_TOTAL_sp3 = "SELECT * FROM lfpstatustable1 WHERE prov = 'S. Leyte' AND  Status = 'COMPLETED' AND proj_year = '2013'";
  $result3 = mysqli_query($conn,$sql_query_TOTAL_sp3);
  $sum_COMPLETED_sp3 = 0;
  while($row = mysqli_fetch_array($result3)){
              $COMPLETED_sp3 = $row[8];
              $sum_COMPLETED_sp3 += $COMPLETED_sp3;
        }
  $sql_query_ONGOING3 = "SELECT * FROM lfpstatustable1 WHERE prov = 'S. Leyte' AND  status = 'ON-GOING' AND proj_year = '2013'";
  $result3 = mysqli_query($conn,$sql_query_ONGOING3);
  $sum_ONGOING_sp3 = 0;
  while($row = mysqli_fetch_array($result3)){
              $ONGOING_sp3 = $row[8];
              $sum_ONGOING_sp3 += $ONGOING_sp3;
        }

  $sql_query_PRE3 = "SELECT * FROM lfpstatustable1 WHERE prov = 'S. Leyte' AND  status IN ('PRE-PROCUREMENT' , 'ITB/AD POSTED' , 'BID EVALUATION' , 'NOA ISSUANCE' , 'NTP/PO ISSUANCE') AND proj_year = '2013'";
  $result3 = mysqli_query($conn,$sql_query_PRE3);
  $sum_PRE_sp3 = 0;
  while($row = mysqli_fetch_array($result3)){
              $PRE_sp3 = $row[8];
              $sum_PRE_sp3 += $PRE_sp3;
        }

  $sql_query_DED3 = "SELECT * FROM lfpstatustable1 WHERE prov = 'S. Leyte' AND  status IN ('MOA SIGNED' , 'DED PREPARATION' , 'DED REVIEW/APPROVAL' , 'DED RE-SUBMISSION' , 'DED REVIEW/APPROVAL OF RE-SUBMISSION') AND proj_year = '2013'";
  $result3 = mysqli_query($conn,$sql_query_DED3);
  $sum_DED_sp3 = 0;
  while($row = mysqli_fetch_array($result3)){
              $DED_sp3 = $row[8];
              $sum_DED_sp3 += $DED_sp3;
        }

  $sql_query_NOTYETSTARTED3 = "SELECT * FROM lfpstatustable1 WHERE prov = 'S. Leyte' AND  status IN ('NOT YET STARTED' , 'FS/PP PREPARATION' , 'FS/PP REVIEW/APPROVAL' , 'FS/PP RE-SUBMISSION' , 'FS/PP REVIEW/APPROVAL OF RE-SUBMISSION') AND proj_year = '2013'";
  $result3 = mysqli_query($conn,$sql_query_NOTYETSTARTED3);
  $sum_NOTYETSTARTED_sp3 = 0;
  while($row = mysqli_fetch_array($result3)){
              $NOTYETSTARTED_sp3 = $row[8];
              $sum_NOTYETSTARTED_sp3 += $NOTYETSTARTED_sp3;
        }

  $sql_query_SUSPENDED3 = "SELECT * FROM lfpstatustable1 WHERE prov = 'S. Leyte' AND  status = 'SUSPENDED' AND proj_year = '2013'";
  $result3 = mysqli_query($conn,$sql_query_SUSPENDED3);
  $sum_SUSPENDED_sp3 = 0;
  while($row = mysqli_fetch_array($result3)){
              $SUSPENDED_sp3 = $row[8];
              $sum_SUSPENDED_sp3 += $SUSPENDED_sp3;
        }

  $sql_query_CANCELLED3 = "SELECT * FROM lfpstatustable1 WHERE prov = 'S. Leyte' AND  status = 'CANCELLED' AND proj_year = '2013'";
  $result3 = mysqli_query($conn,$sql_query_CANCELLED3);
  $sum_CANCELLED_sp3 = 0;
  while($row = mysqli_fetch_array($result3)){
              $CANCELLED_sp3 = $row[8];
              $sum_CANCELLED_sp3 += $CANCELLED_sp3;
        }

  $sql_query_NS3 = "SELECT * FROM lfpstatustable1 WHERE prov = 'S. Leyte' AND  status = 'NS' AND proj_year = '2013'";
  $result3 = mysqli_query($conn,$sql_query_NS3);
  $sum_NS_sp3 = 0;
  while($row = mysqli_fetch_array($result3)){
              $NS_sp3 = $row[8];
              $sum_NS_sp3 += $NS_sp3;
        }


  //===============2014==================================
  $sql_query_TOTAL_sp4 = "SELECT * FROM lfpstatustable1 WHERE prov = 'S. Leyte' AND  proj_year = '2014'";
  $result4 = mysqli_query($conn,$sql_query_TOTAL_sp4);
  $sum_TOTAL_sp4 = 0;
  while($row = mysqli_fetch_array($result4)){
              $TOTAL_sp4 = $row[8];
              $sum_TOTAL_sp4 += $TOTAL_sp4;
        }

  $sql_query_TOTAL_sp4 = "SELECT * FROM lfpstatustable1 WHERE prov = 'S. Leyte' AND  Status = 'COMPLETED' AND proj_year = '2014'";
  $result4 = mysqli_query($conn,$sql_query_TOTAL_sp4);
  $sum_COMPLETED_sp4 = 0;
  while($row = mysqli_fetch_array($result4)){
              $COMPLETED_sp4 = $row[8];
              $sum_COMPLETED_sp4 += $COMPLETED_sp4;
        }
  $sql_query_ONGOING4 = "SELECT * FROM lfpstatustable1 WHERE prov = 'S. Leyte' AND  status = 'ON-GOING' AND proj_year = '2014'";
  $result4 = mysqli_query($conn,$sql_query_ONGOING4);
  $sum_ONGOING_sp4 = 0;
  while($row = mysqli_fetch_array($result4)){
              $ONGOING_sp4 = $row[8];
              $sum_ONGOING_sp4 += $ONGOING_sp4;
        }

  $sql_query_PRE4 = "SELECT * FROM lfpstatustable1 WHERE prov = 'S. Leyte' AND  status IN ('PRE-PROCUREMENT' , 'ITB/AD POSTED' , 'BID EVALUATION' , 'NOA ISSUANCE' , 'NTP/PO ISSUANCE') AND proj_year = '2014'";
  $result4 = mysqli_query($conn,$sql_query_PRE4);
  $sum_PRE_sp4 = 0;
  while($row = mysqli_fetch_array($result4)){
              $PRE_sp4 = $row[8];
              $sum_PRE_sp4 += $PRE_sp4;
        }

  $sql_query_DED4 = "SELECT * FROM lfpstatustable1 WHERE prov = 'S. Leyte' AND  status IN ('MOA SIGNED' , 'DED PREPARATION' , 'DED REVIEW/APPROVAL' , 'DED RE-SUBMISSION' , 'DED REVIEW/APPROVAL OF RE-SUBMISSION') AND proj_year = '2014'";
  $result4 = mysqli_query($conn,$sql_query_DED4);
  $sum_DED_sp4 = 0;
  while($row = mysqli_fetch_array($result4)){
              $DED_sp4 = $row[8];
              $sum_DED_sp4 += $DED_sp4;
        }

  $sql_query_NOTYETSTARTED4 = "SELECT * FROM lfpstatustable1 WHERE prov = 'S. Leyte' AND  status IN ('NOT YET STARTED' , 'FS/PP PREPARATION' , 'FS/PP REVIEW/APPROVAL' , 'FS/PP RE-SUBMISSION' , 'FS/PP REVIEW/APPROVAL OF RE-SUBMISSION') AND proj_year = '2014'";
  $result4 = mysqli_query($conn,$sql_query_NOTYETSTARTED4);
  $sum_NOTYETSTARTED_sp4 = 0;
  while($row = mysqli_fetch_array($result4)){
              $NOTYETSTARTED_sp4 = $row[8];
              $sum_NOTYETSTARTED_sp4 += $NOTYETSTARTED_sp4;
        }

  $sql_query_SUSPENDED4 = "SELECT * FROM lfpstatustable1 WHERE prov = 'S. Leyte' AND  status = 'SUSPENDED' AND proj_year = '2014'";
  $result4 = mysqli_query($conn,$sql_query_SUSPENDED4);
  $sum_SUSPENDED_sp4 = 0;
  while($row = mysqli_fetch_array($result4)){
              $SUSPENDED_sp4 = $row[8];
              $sum_SUSPENDED_sp4 += $SUSPENDED_sp4;
        }

  $sql_query_CANCELLED4 = "SELECT * FROM lfpstatustable1 WHERE prov = 'S. Leyte' AND  status = 'CANCELLED' AND proj_year = '2014'";
  $result4 = mysqli_query($conn,$sql_query_CANCELLED4);
  $sum_CANCELLED_sp4 = 0;
  while($row = mysqli_fetch_array($result4)){
              $CANCELLED_sp4 = $row[8];
              $sum_CANCELLED_sp4 += $CANCELLED_sp4;
        }

  $sql_query_NS4 = "SELECT * FROM lfpstatustable1 WHERE prov = 'S. Leyte' AND  status = 'NS' AND proj_year = '2014'";
  $result4 = mysqli_query($conn,$sql_query_NS4);
  $sum_NS_sp4 = 0;
  while($row = mysqli_fetch_array($result4)){
              $NS_sp4 = $row[8];
              $sum_NS_sp4 += $NS_sp4;
        }



  //===============2015==================================
  $sql_query_TOTAL_sp5 = "SELECT * FROM lfpstatustable1 WHERE prov = 'S. Leyte' AND  proj_year = '2015'";
  $result5 = mysqli_query($conn,$sql_query_TOTAL_sp5);
  $sum_TOTAL_sp5 = 0;
  while($row = mysqli_fetch_array($result5)){
              $TOTAL_sp5 = $row[8];
              $sum_TOTAL_sp5 += $TOTAL_sp5;
        }

  $sql_query_TOTAL_sp5 = "SELECT * FROM lfpstatustable1 WHERE prov = 'S. Leyte' AND  Status = 'COMPLETED' AND proj_year = '2015'";
  $result5 = mysqli_query($conn,$sql_query_TOTAL_sp5);
  $sum_COMPLETED_sp5 = 0;
  while($row = mysqli_fetch_array($result5)){
              $COMPLETED_sp5 = $row[8];
              $sum_COMPLETED_sp5 += $COMPLETED_sp5;
        }
  $sql_query_ONGOING5 = "SELECT * FROM lfpstatustable1 WHERE prov = 'S. Leyte' AND  status = 'ON-GOING' AND proj_year = '2015'";
  $result5 = mysqli_query($conn,$sql_query_ONGOING5);
  $sum_ONGOING_sp5 = 0;
  while($row = mysqli_fetch_array($result5)){
              $ONGOING_sp5 = $row[8];
              $sum_ONGOING_sp5 += $ONGOING_sp5;
        }

  $sql_query_PRE5 = "SELECT * FROM lfpstatustable1 WHERE prov = 'S. Leyte' AND  status IN ('PRE-PROCUREMENT' , 'ITB/AD POSTED' , 'BID EVALUATION' , 'NOA ISSUANCE' , 'NTP/PO ISSUANCE') AND proj_year = '2015'";
  $result5 = mysqli_query($conn,$sql_query_PRE5);
  $sum_PRE_sp5 = 0;
  while($row = mysqli_fetch_array($result5)){
              $PRE_sp5 = $row[8];
              $sum_PRE_sp5 += $PRE_sp5;
        }

  $sql_query_DED5 = "SELECT * FROM lfpstatustable1 WHERE prov = 'S. Leyte' AND  status IN ('MOA SIGNED' , 'DED PREPARATION' , 'DED REVIEW/APPROVAL' , 'DED RE-SUBMISSION' , 'DED REVIEW/APPROVAL OF RE-SUBMISSION') AND proj_year = '2015'";
  $result5 = mysqli_query($conn,$sql_query_DED5);
  $sum_DED_sp5 = 0;
  while($row = mysqli_fetch_array($result5)){
              $DED_sp5 = $row[8];
              $sum_DED_sp5 += $DED_sp5;
        }

  $sql_query_NOTYETSTARTED5 = "SELECT * FROM lfpstatustable1 WHERE prov = 'S. Leyte' AND  status IN ('NOT YET STARTED' , 'FS/PP PREPARATION' , 'FS/PP REVIEW/APPROVAL' , 'FS/PP RE-SUBMISSION' , 'FS/PP REVIEW/APPROVAL OF RE-SUBMISSION') AND proj_year = '2015'";
  $result5 = mysqli_query($conn,$sql_query_NOTYETSTARTED5);
  $sum_NOTYETSTARTED_sp5 = 0;
  while($row = mysqli_fetch_array($result5)){
              $NOTYETSTARTED_sp5 = $row[8];
              $sum_NOTYETSTARTED_sp5 += $NOTYETSTARTED_sp5;
        }

  $sql_query_SUSPENDED5 = "SELECT * FROM lfpstatustable1 WHERE prov = 'S. Leyte' AND  status = 'SUSPENDED' AND proj_year = '2015'";
  $result5 = mysqli_query($conn,$sql_query_SUSPENDED5);
  $sum_SUSPENDED_sp5 = 0;
  while($row = mysqli_fetch_array($result5)){
              $SUSPENDED_sp5 = $row[8];
              $sum_SUSPENDED_sp5 += $SUSPENDED_sp5;
        }

  $sql_query_CANCELLED5 = "SELECT * FROM lfpstatustable1 WHERE prov = 'S. Leyte' AND  status = 'CANCELLED' AND proj_year = '2015'";
  $result5 = mysqli_query($conn,$sql_query_CANCELLED5);
  $sum_CANCELLED_sp5 = 0;
  while($row = mysqli_fetch_array($result5)){
              $CANCELLED_sp5 = $row[8];
              $sum_CANCELLED_sp5 += $CANCELLED_sp5;
        }

  $sql_query_NS5 = "SELECT * FROM lfpstatustable1 WHERE prov = 'S. Leyte' AND  status = 'NS' AND proj_year = '2015'";
  $result5 = mysqli_query($conn,$sql_query_NS5);
  $sum_NS_sp5 = 0;
  while($row = mysqli_fetch_array($result5)){
              $NS_sp5 = $row[8];
              $sum_NS_sp5 += $NS_sp5;
        }



  //===============2016==================================
  $sql_query_TOTAL_sp6 = "SELECT * FROM lfpstatustable1 WHERE prov = 'S. Leyte' AND  proj_year = '2016'";
  $result6 = mysqli_query($conn,$sql_query_TOTAL_sp6);
  $sum_TOTAL_sp6 = 0;
  while($row = mysqli_fetch_array($result6)){
              $TOTAL_sp6 = $row[8];
              $sum_TOTAL_sp6 += $TOTAL_sp6;
        }

  $sql_query_TOTAL_sp6 = "SELECT * FROM lfpstatustable1 WHERE prov = 'S. Leyte' AND  Status = 'COMPLETED' AND proj_year = '2016'";
  $result6 = mysqli_query($conn,$sql_query_TOTAL_sp6);
  $sum_COMPLETED_sp6 = 0;
  while($row = mysqli_fetch_array($result6)){
              $COMPLETED_sp6 = $row[8];
              $sum_COMPLETED_sp6 += $COMPLETED_sp6;
        }
  $sql_query_ONGOING6 = "SELECT * FROM lfpstatustable1 WHERE prov = 'S. Leyte' AND  status = 'ON-GOING' AND proj_year = '2016'";
  $result6 = mysqli_query($conn,$sql_query_ONGOING6);
  $sum_ONGOING_sp6 = 0;
  while($row = mysqli_fetch_array($result6)){
              $ONGOING_sp6 = $row[8];
              $sum_ONGOING_sp6 += $ONGOING_sp6;
        }

  $sql_query_PRE6 = "SELECT * FROM lfpstatustable1 WHERE prov = 'S. Leyte' AND  status IN ('PRE-PROCUREMENT' , 'ITB/AD POSTED' , 'BID EVALUATION' , 'NOA ISSUANCE' , 'NTP/PO ISSUANCE') AND proj_year = '2016'";
  $result6 = mysqli_query($conn,$sql_query_PRE6);
  $sum_PRE_sp6 = 0;
  while($row = mysqli_fetch_array($result6)){
              $PRE_sp6 = $row[8];
              $sum_PRE_sp6 += $PRE_sp6;
        }

  $sql_query_DED6 = "SELECT * FROM lfpstatustable1 WHERE prov = 'S. Leyte' AND  status IN ('MOA SIGNED' , 'DED PREPARATION' , 'DED REVIEW/APPROVAL' , 'DED RE-SUBMISSION' , 'DED REVIEW/APPROVAL OF RE-SUBMISSION') AND proj_year = '2016'";
  $result6 = mysqli_query($conn,$sql_query_DED6);
  $sum_DED_sp6 = 0;
  while($row = mysqli_fetch_array($result6)){
              $DED_sp6 = $row[8];
              $sum_DED_sp6 += $DED_sp6;
        }

  $sql_query_NOTYETSTARTED6 = "SELECT * FROM lfpstatustable1 WHERE prov = 'S. Leyte' AND  status IN ('NOT YET STARTED' , 'FS/PP PREPARATION' , 'FS/PP REVIEW/APPROVAL' , 'FS/PP RE-SUBMISSION' , 'FS/PP REVIEW/APPROVAL OF RE-SUBMISSION') AND proj_year = '2016'";
  $result6 = mysqli_query($conn,$sql_query_NOTYETSTARTED6);
  $sum_NOTYETSTARTED_sp6 = 0;
  while($row = mysqli_fetch_array($result6)){
              $NOTYETSTARTED_sp6 = $row[8];
              $sum_NOTYETSTARTED_sp6 += $NOTYETSTARTED_sp6;
        }

  $sql_query_SUSPENDED6 = "SELECT * FROM lfpstatustable1 WHERE prov = 'S. Leyte' AND  status = 'SUSPENDED' AND proj_year = '2016'";
  $result6 = mysqli_query($conn,$sql_query_SUSPENDED6);
  $sum_SUSPENDED_sp6 = 0;
  while($row = mysqli_fetch_array($result6)){
              $SUSPENDED_sp6 = $row[8];
              $sum_SUSPENDED_sp6 += $SUSPENDED_sp6;
        }

  $sql_query_CANCELLED6 = "SELECT * FROM lfpstatustable1 WHERE prov = 'S. Leyte' AND  status = 'CANCELLED' AND proj_year = '2016'";
  $result6 = mysqli_query($conn,$sql_query_CANCELLED6);
  $sum_CANCELLED_sp6 = 0;
  while($row = mysqli_fetch_array($result6)){
              $CANCELLED_sp6 = $row[8];
              $sum_CANCELLED_sp6 += $CANCELLED_sp6;
        }

  $sql_query_NS6 = "SELECT * FROM lfpstatustable1 WHERE prov = 'S. Leyte' AND  status = 'NS' AND proj_year = '2016'";
  $result6 = mysqli_query($conn,$sql_query_NS6);
  $sum_NS_sp6 = 0;
  while($row = mysqli_fetch_array($result6)){
              $NS_sp6 = $row[8];
              $sum_NS_sp6 += $NS_sp6;
        }



  //===============2017==================================
  $sql_query_TOTAL_sp7 = "SELECT * FROM lfpstatustable1 WHERE prov = 'S. Leyte' AND  proj_year = '2017'";
  $result7 = mysqli_query($conn,$sql_query_TOTAL_sp7);
  $sum_TOTAL_sp7 = 0;
  while($row = mysqli_fetch_array($result7)){
              $TOTAL_sp7 = $row[8];
              $sum_TOTAL_sp7 += $TOTAL_sp7;
        }

  $sql_query_TOTAL_sp7 = "SELECT * FROM lfpstatustable1 WHERE prov = 'S. Leyte' AND  Status = 'COMPLETED' AND proj_year = '2017'";
  $result7 = mysqli_query($conn,$sql_query_TOTAL_sp7);
  $sum_COMPLETED_sp7 = 0;
  while($row = mysqli_fetch_array($result7)){
              $COMPLETED_sp7 = $row[8];
              $sum_COMPLETED_sp7 += $COMPLETED_sp7;
        }
  $sql_query_ONGOING7 = "SELECT * FROM lfpstatustable1 WHERE prov = 'S. Leyte' AND  status = 'ON-GOING' AND proj_year = '2017'";
  $result7 = mysqli_query($conn,$sql_query_ONGOING7);
  $sum_ONGOING_sp7 = 0;
  while($row = mysqli_fetch_array($result7)){
              $ONGOING_sp7 = $row[8];
              $sum_ONGOING_sp7 += $ONGOING_sp7;
        }

  $sql_query_PRE7 = "SELECT * FROM lfpstatustable1 WHERE prov = 'S. Leyte' AND  status IN ('PRE-PROCUREMENT' , 'ITB/AD POSTED' , 'BID EVALUATION' , 'NOA ISSUANCE' , 'NTP/PO ISSUANCE') AND proj_year = '2017'";
  $result7 = mysqli_query($conn,$sql_query_PRE7);
  $sum_PRE_sp7 = 0;
  while($row = mysqli_fetch_array($result7)){
              $PRE_sp7 = $row[8];
              $sum_PRE_sp7 += $PRE_sp7;
        }

  $sql_query_DED7 = "SELECT * FROM lfpstatustable1 WHERE prov = 'S. Leyte' AND  status IN ('MOA SIGNED' , 'DED PREPARATION' , 'DED REVIEW/APPROVAL' , 'DED RE-SUBMISSION' , 'DED REVIEW/APPROVAL OF RE-SUBMISSION') AND proj_year = '2017'";
  $result7 = mysqli_query($conn,$sql_query_DED7);
  $sum_DED_sp7 = 0;
  while($row = mysqli_fetch_array($result7)){
              $DED_sp7 = $row[8];
              $sum_DED_sp7 += $DED_sp7;
        }

  $sql_query_NOTYETSTARTED7 = "SELECT * FROM lfpstatustable1 WHERE prov = 'S. Leyte' AND  status IN ('NOT YET STARTED' , 'FS/PP PREPARATION' , 'FS/PP REVIEW/APPROVAL' , 'FS/PP RE-SUBMISSION' , 'FS/PP REVIEW/APPROVAL OF RE-SUBMISSION') AND proj_year = '2017'";
  $result7 = mysqli_query($conn,$sql_query_NOTYETSTARTED7);
  $sum_NOTYETSTARTED_sp7 = 0;
  while($row = mysqli_fetch_array($result7)){
              $NOTYETSTARTED_sp7 = $row[8];
              $sum_NOTYETSTARTED_sp7 += $NOTYETSTARTED_sp7;
        }

  $sql_query_SUSPENDED7 = "SELECT * FROM lfpstatustable1 WHERE prov = 'S. Leyte' AND  status = 'SUSPENDED' AND proj_year = '2017'";
  $result7 = mysqli_query($conn,$sql_query_SUSPENDED7);
  $sum_SUSPENDED_sp7 = 0;
  while($row = mysqli_fetch_array($result7)){
              $SUSPENDED_sp7 = $row[8];
              $sum_SUSPENDED_sp7 += $SUSPENDED_sp7;
        }

  $sql_query_CANCELLED7 = "SELECT * FROM lfpstatustable1 WHERE prov = 'S. Leyte' AND  status = 'CANCELLED' AND proj_year = '2017'";
  $result7 = mysqli_query($conn,$sql_query_CANCELLED7);
  $sum_CANCELLED_sp7 = 0;
  while($row = mysqli_fetch_array($result7)){
              $CANCELLED_sp7 = $row[8];
              $sum_CANCELLED_sp7 += $CANCELLED_sp7;
        }

  $sql_query_NS7 = "SELECT * FROM lfpstatustable1 WHERE prov = 'S. Leyte' AND  status = 'NS' AND proj_year = '2017'";
  $result7 = mysqli_query($conn,$sql_query_NS7);
  $sum_NS_sp7 = 0;
  while($row = mysqli_fetch_array($result7)){
              $NS_sp7 = $row[8];
              $sum_NS_sp7 += $NS_sp7;
        }




  //===============2018==================================
  $sql_query_TOTAL_sp8 = "SELECT * FROM lfpstatustable1 WHERE prov = 'S. Leyte' AND  proj_year = '2018'";
  $result8 = mysqli_query($conn,$sql_query_TOTAL_sp8);
  $sum_TOTAL_sp8 = 0;
  while($row = mysqli_fetch_array($result8)){
              $TOTAL_sp8 = $row[8];
              $sum_TOTAL_sp8 += $TOTAL_sp8;
        }

  $sql_query_TOTAL_sp8 = "SELECT * FROM lfpstatustable1 WHERE prov = 'S. Leyte' AND  Status = 'COMPLETED' AND proj_year = '2018'";
  $result8 = mysqli_query($conn,$sql_query_TOTAL_sp8);
  $sum_COMPLETED_sp8 = 0;
  while($row = mysqli_fetch_array($result8)){
              $COMPLETED_sp8 = $row[8];
              $sum_COMPLETED_sp8 += $COMPLETED_sp8;
        }
  $sql_query_ONGOING8 = "SELECT * FROM lfpstatustable1 WHERE prov = 'S. Leyte' AND  status = 'ON-GOING' AND proj_year = '2018'";
  $result8 = mysqli_query($conn,$sql_query_ONGOING8);
  $sum_ONGOING_sp8 = 0;
  while($row = mysqli_fetch_array($result8)){
              $ONGOING_sp8 = $row[8];
              $sum_ONGOING_sp8 += $ONGOING_sp8;
        }

  $sql_query_PRE8 = "SELECT * FROM lfpstatustable1 WHERE prov = 'S. Leyte' AND  status IN ('PRE-PROCUREMENT' , 'ITB/AD POSTED' , 'BID EVALUATION' , 'NOA ISSUANCE' , 'NTP/PO ISSUANCE') AND proj_year = '2018'";
  $result8 = mysqli_query($conn,$sql_query_PRE8);
  $sum_PRE_sp8 = 0;
  while($row = mysqli_fetch_array($result8)){
              $PRE_sp8 = $row[8];
              $sum_PRE_sp8 += $PRE_sp8;
        }

  $sql_query_DED8 = "SELECT * FROM lfpstatustable1 WHERE prov = 'S. Leyte' AND  status IN ('MOA SIGNED' , 'DED PREPARATION' , 'DED REVIEW/APPROVAL' , 'DED RE-SUBMISSION' , 'DED REVIEW/APPROVAL OF RE-SUBMISSION') AND proj_year = '2018'";
  $result8 = mysqli_query($conn,$sql_query_DED8);
  $sum_DED_sp8 = 0;
  while($row = mysqli_fetch_array($result8)){
              $DED_sp8 = $row[8];
              $sum_DED_sp8 += $DED_sp8;
        }

  $sql_query_NOTYETSTARTED8 = "SELECT * FROM lfpstatustable1 WHERE prov = 'S. Leyte' AND  status IN ('NOT YET STARTED' , 'FS/PP PREPARATION' , 'FS/PP REVIEW/APPROVAL' , 'FS/PP RE-SUBMISSION' , 'FS/PP REVIEW/APPROVAL OF RE-SUBMISSION') AND proj_year = '2018'";
  $result8 = mysqli_query($conn,$sql_query_NOTYETSTARTED8);
  $sum_NOTYETSTARTED_sp8 = 0;
  while($row = mysqli_fetch_array($result8)){
              $NOTYETSTARTED_sp8 = $row[8];
              $sum_NOTYETSTARTED_sp8 += $NOTYETSTARTED_sp8;
        }

  $sql_query_SUSPENDED8 = "SELECT * FROM lfpstatustable1 WHERE prov = 'S. Leyte' AND  status = 'SUSPENDED' AND proj_year = '2018'";
  $result8 = mysqli_query($conn,$sql_query_SUSPENDED8);
  $sum_SUSPENDED_sp8 = 0;
  while($row = mysqli_fetch_array($result8)){
              $SUSPENDED_sp8 = $row[8];
              $sum_SUSPENDED_sp8 += $SUSPENDED_sp8;
        }

  $sql_query_CANCELLED8 = "SELECT * FROM lfpstatustable1 WHERE prov = 'S. Leyte' AND  status = 'CANCELLED' AND proj_year = '2018'";
  $result8 = mysqli_query($conn,$sql_query_CANCELLED8);
  $sum_CANCELLED_sp8 = 0;
  while($row = mysqli_fetch_array($result8)){
              $CANCELLED_sp8 = $row[8];
              $sum_CANCELLED_sp8 += $CANCELLED_sp8;
        }

  $sql_query_NS8 = "SELECT * FROM lfpstatustable1 WHERE prov = 'S. Leyte' AND  status = 'NS' AND proj_year = '2018'";
  $result8 = mysqli_query($conn,$sql_query_NS8);
  $sum_NS_sp8 = 0;
  while($row = mysqli_fetch_array($result8)){
              $NS_sp8 = $row[8];
              $sum_NS_sp8 += $NS_sp8;
        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>DILG LFPs REGION VIII</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" 
      type="image/png" 
      href="dilg.png">
  <link rel="stylesheet" href="bootstrap.min.css">
  <script src="jquery.min.js"></script>
  <script src="bootstrap.min.js"></script>
  <script src="chart/amcharts.js"></script>
<script src="chart/pie.js"></script>
<script src="chart/export.min.js"></script>
<link rel="stylesheet" href="chart/export.css" type="text/css" media="all" />
<script src="chart/light.js"></script>

<script type="text/javascript" src="jquery2.min.js"></script>
<script type="text/javascript" src="fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
<script type="text/javascript" src="fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<link rel="stylesheet" type="text/css" href="fancybox/jquery.fancybox-1.3.4.css" media="screen" />

<script type="text/javascript">
    $(document).ready(function() {

      $("#various0").fancybox({
        'width'       : '100%',
        'height'      : '100%',
        'autoScale'     : true,
        'transitionIn'    : 'none',
        'transitionOut'   : 'none',
        'type'        : 'iframe'
      });

      $("#various1").fancybox({
        'width'       : '100%',
        'height'      : '100%',
        'autoScale'     : true,
        'transitionIn'    : 'none',
        'transitionOut'   : 'none',
        'type'        : 'iframe'
      });

      $("#various2").fancybox({
        'width'       : '100%',
        'height'      : '100%',
        'autoScale'     : true,
        'transitionIn'    : 'none',
        'transitionOut'   : 'none',
        'type'        : 'iframe'
      });

      $("#various3").fancybox({
        'width'       : '100%',
        'height'      : '100%',
        'autoScale'     : true,
        'transitionIn'    : 'none',
        'transitionOut'   : 'none',
        'type'        : 'iframe'
      });

      $("#various4").fancybox({
        'width'       : '100%',
        'height'      : '100%',
        'autoScale'     : true,
        'transitionIn'    : 'none',
        'transitionOut'   : 'none',
        'type'        : 'iframe'
      });

      $("#various5").fancybox({
        'width'       : '100%',
        'height'      : '100%',
        'autoScale'     : true,
        'transitionIn'    : 'none',
        'transitionOut'   : 'none',
        'type'        : 'iframe'
      });

      $("#various6").fancybox({
        'width'       : '100%',
        'height'      : '100%',
        'autoScale'     : true,
        'transitionIn'    : 'none',
        'transitionOut'   : 'none',
        'type'        : 'iframe'
      });

      $("#various7").fancybox({
        'width'       : '100%',
        'height'      : '100%',
        'autoScale'     : true,
        'transitionIn'    : 'none',
        'transitionOut'   : 'none',
        'type'        : 'iframe'
      });

      ///////////////////////////////////////////////////////////////////////////////////////

      $("#various8").fancybox({
        'width'       : '100%',
        'height'      : '100%',
        'autoScale'     : true,
        'transitionIn'    : 'none',
        'transitionOut'   : 'none',
        'type'        : 'iframe'
      });

      $("#various9").fancybox({
        'width'       : '100%',
        'height'      : '100%',
        'autoScale'     : true,
        'transitionIn'    : 'none',
        'transitionOut'   : 'none',
        'type'        : 'iframe'
      });

      $("#various10").fancybox({
        'width'       : '100%',
        'height'      : '100%',
        'autoScale'     : true,
        'transitionIn'    : 'none',
        'transitionOut'   : 'none',
        'type'        : 'iframe'
      });

      $("#various11").fancybox({
        'width'       : '100%',
        'height'      : '100%',
        'autoScale'     : true,
        'transitionIn'    : 'none',
        'transitionOut'   : 'none',
        'type'        : 'iframe'
      });

      $("#various12").fancybox({
        'width'       : '100%',
        'height'      : '100%',
        'autoScale'     : true,
        'transitionIn'    : 'none',
        'transitionOut'   : 'none',
        'type'        : 'iframe'
      });

      $("#various13").fancybox({
        'width'       : '100%',
        'height'      : '100%',
        'autoScale'     : true,
        'transitionIn'    : 'none',
        'transitionOut'   : 'none',
        'type'        : 'iframe'
      });

      $("#various14").fancybox({
        'width'       : '100%',
        'height'      : '100%',
        'autoScale'     : true,
        'transitionIn'    : 'none',
        'transitionOut'   : 'none',
        'type'        : 'iframe'
      });

      $("#various15").fancybox({
        'width'       : '100%',
        'height'      : '100%',
        'autoScale'     : true,
        'transitionIn'    : 'none',
        'transitionOut'   : 'none',
        'type'        : 'iframe'
      });

      ///////////////////////////////////////////////////////////////////////////////////////////////////

      $("#various16").fancybox({
        'width'       : '100%',
        'height'      : '100%',
        'autoScale'     : true,
        'transitionIn'    : 'none',
        'transitionOut'   : 'none',
        'type'        : 'iframe'
      });

      $("#various17").fancybox({
        'width'       : '100%',
        'height'      : '100%',
        'autoScale'     : true,
        'transitionIn'    : 'none',
        'transitionOut'   : 'none',
        'type'        : 'iframe'
      });

      $("#various18").fancybox({
        'width'       : '100%',
        'height'      : '100%',
        'autoScale'     : true,
        'transitionIn'    : 'none',
        'transitionOut'   : 'none',
        'type'        : 'iframe'
      });

      $("#various19").fancybox({
        'width'       : '100%',
        'height'      : '100%',
        'autoScale'     : true,
        'transitionIn'    : 'none',
        'transitionOut'   : 'none',
        'type'        : 'iframe'
      });

      $("#various20").fancybox({
        'width'       : '100%',
        'height'      : '100%',
        'autoScale'     : true,
        'transitionIn'    : 'none',
        'transitionOut'   : 'none',
        'type'        : 'iframe'
      });

      $("#various21").fancybox({
        'width'       : '100%',
        'height'      : '100%',
        'autoScale'     : true,
        'transitionIn'    : 'none',
        'transitionOut'   : 'none',
        'type'        : 'iframe'
      });

      $("#various22").fancybox({
        'width'       : '100%',
        'height'      : '100%',
        'autoScale'     : true,
        'transitionIn'    : 'none',
        'transitionOut'   : 'none',
        'type'        : 'iframe'
      });

      $("#various23").fancybox({
        'width'       : '100%',
        'height'      : '100%',
        'autoScale'     : true,
        'transitionIn'    : 'none',
        'transitionOut'   : 'none',
        'type'        : 'iframe'
      });

      //////////////////////////////////////////////////////////////////////////////////////////

      $("#various24").fancybox({
        'width'       : '100%',
        'height'      : '100%',
        'autoScale'     : true,
        'transitionIn'    : 'none',
        'transitionOut'   : 'none',
        'type'        : 'iframe'
      });

      $("#various25").fancybox({
        'width'       : '100%',
        'height'      : '100%',
        'autoScale'     : true,
        'transitionIn'    : 'none',
        'transitionOut'   : 'none',
        'type'        : 'iframe'
      });

      $("#various26").fancybox({
        'width'       : '100%',
        'height'      : '100%',
        'autoScale'     : true,
        'transitionIn'    : 'none',
        'transitionOut'   : 'none',
        'type'        : 'iframe'
      });

      $("#various27").fancybox({
        'width'       : '100%',
        'height'      : '100%',
        'autoScale'     : true,
        'transitionIn'    : 'none',
        'transitionOut'   : 'none',
        'type'        : 'iframe'
      });

      $("#various28").fancybox({
        'width'       : '100%',
        'height'      : '100%',
        'autoScale'     : true,
        'transitionIn'    : 'none',
        'transitionOut'   : 'none',
        'type'        : 'iframe'
      });

      $("#various29").fancybox({
        'width'       : '100%',
        'height'      : '100%',
        'autoScale'     : true,
        'transitionIn'    : 'none',
        'transitionOut'   : 'none',
        'type'        : 'iframe'
      });

      $("#various30").fancybox({
        'width'       : '100%',
        'height'      : '100%',
        'autoScale'     : true,
        'transitionIn'    : 'none',
        'transitionOut'   : 'none',
        'type'        : 'iframe'
      });

      $("#various31").fancybox({
        'width'       : '100%',
        'height'      : '100%',
        'autoScale'     : true,
        'transitionIn'    : 'none',
        'transitionOut'   : 'none',
        'type'        : 'iframe'
      });

      /////////////////////////////////////////////////////////////////////////////////////////////////////

      $("#various32").fancybox({
        'width'       : '100%',
        'height'      : '100%',
        'autoScale'     : true,
        'transitionIn'    : 'none',
        'transitionOut'   : 'none',
        'type'        : 'iframe'
      });

      $("#various33").fancybox({
        'width'       : '100%',
        'height'      : '100%',
        'autoScale'     : true,
        'transitionIn'    : 'none',
        'transitionOut'   : 'none',
        'type'        : 'iframe'
      });

      $("#various34").fancybox({
        'width'       : '100%',
        'height'      : '100%',
        'autoScale'     : true,
        'transitionIn'    : 'none',
        'transitionOut'   : 'none',
        'type'        : 'iframe'
      });

      $("#various35").fancybox({
        'width'       : '100%',
        'height'      : '100%',
        'autoScale'     : true,
        'transitionIn'    : 'none',
        'transitionOut'   : 'none',
        'type'        : 'iframe'
      });

      $("#various36").fancybox({
        'width'       : '100%',
        'height'      : '100%',
        'autoScale'     : true,
        'transitionIn'    : 'none',
        'transitionOut'   : 'none',
        'type'        : 'iframe'
      });

      $("#various37").fancybox({
        'width'       : '100%',
        'height'      : '100%',
        'autoScale'     : true,
        'transitionIn'    : 'none',
        'transitionOut'   : 'none',
        'type'        : 'iframe'
      });

      $("#various38").fancybox({
        'width'       : '100%',
        'height'      : '100%',
        'autoScale'     : true,
        'transitionIn'    : 'none',
        'transitionOut'   : 'none',
        'type'        : 'iframe'
      });

      $("#various39").fancybox({
        'width'       : '100%',
        'height'      : '100%',
        'autoScale'     : true,
        'transitionIn'    : 'none',
        'transitionOut'   : 'none',
        'type'        : 'iframe'
      });

      ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

      $("#various40").fancybox({
        'width'       : '100%',
        'height'      : '100%',
        'autoScale'     : true,
        'transitionIn'    : 'none',
        'transitionOut'   : 'none',
        'type'        : 'iframe'
      });

      $("#various41").fancybox({
        'width'       : '100%',
        'height'      : '100%',
        'autoScale'     : true,
        'transitionIn'    : 'none',
        'transitionOut'   : 'none',
        'type'        : 'iframe'
      });

      $("#various42").fancybox({
        'width'       : '100%',
        'height'      : '100%',
        'autoScale'     : true,
        'transitionIn'    : 'none',
        'transitionOut'   : 'none',
        'type'        : 'iframe'
      });

      $("#various43").fancybox({
        'width'       : '100%',
        'height'      : '100%',
        'autoScale'     : true,
        'transitionIn'    : 'none',
        'transitionOut'   : 'none',
        'type'        : 'iframe'
      });

      $("#various44").fancybox({
        'width'       : '100%',
        'height'      : '100%',
        'autoScale'     : true,
        'transitionIn'    : 'none',
        'transitionOut'   : 'none',
        'type'        : 'iframe'
      });

      $("#various45").fancybox({
        'width'       : '100%',
        'height'      : '100%',
        'autoScale'     : true,
        'transitionIn'    : 'none',
        'transitionOut'   : 'none',
        'type'        : 'iframe'
      });

      $("#various46").fancybox({
        'width'       : '100%',
        'height'      : '100%',
        'autoScale'     : true,
        'transitionIn'    : 'none',
        'transitionOut'   : 'none',
        'type'        : 'iframe'
      });

      $("#various47").fancybox({
        'width'       : '100%',
        'height'      : '100%',
        'autoScale'     : true,
        'transitionIn'    : 'none',
        'transitionOut'   : 'none',
        'type'        : 'iframe'
      });

      //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


      $("#various48").fancybox({
        'width'       : '100%',
        'height'      : '100%',
        'autoScale'     : true,
        'transitionIn'    : 'none',
        'transitionOut'   : 'none',
        'type'        : 'iframe'
      });


      $("#various49").fancybox({
        'width'       : '100%',
        'height'      : '100%',
        'autoScale'     : true,
        'transitionIn'    : 'none',
        'transitionOut'   : 'none',
        'type'        : 'iframe'
      });


      $("#various50").fancybox({
        'width'       : '100%',
        'height'      : '100%',
        'autoScale'     : true,
        'transitionIn'    : 'none',
        'transitionOut'   : 'none',
        'type'        : 'iframe'
      });

      $("#various51").fancybox({
        'width'       : '100%',
        'height'      : '100%',
        'autoScale'     : true,
        'transitionIn'    : 'none',
        'transitionOut'   : 'none',
        'type'        : 'iframe'
      });

      $("#various52").fancybox({
        'width'       : '100%',
        'height'      : '100%',
        'autoScale'     : true,
        'transitionIn'    : 'none',
        'transitionOut'   : 'none',
        'type'        : 'iframe'
      });

      $("#various53").fancybox({
        'width'       : '100%',
        'height'      : '100%',
        'autoScale'     : true,
        'transitionIn'    : 'none',
        'transitionOut'   : 'none',
        'type'        : 'iframe'
      });

      $("#various54").fancybox({
        'width'       : '100%',
        'height'      : '100%',
        'autoScale'     : true,
        'transitionIn'    : 'none',
        'transitionOut'   : 'none',
        'type'        : 'iframe'
      });

      $("#various55").fancybox({
        'width'       : '100%',
        'height'      : '100%',
        'autoScale'     : true,
        'transitionIn'    : 'none',
        'transitionOut'   : 'none',
        'type'        : 'iframe'
      });

      ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

      $("#various56").fancybox({
        'width'       : '100%',
        'height'      : '100%',
        'autoScale'     : true,
        'transitionIn'    : 'none',
        'transitionOut'   : 'none',
        'type'        : 'iframe'
      });

      $("#various57").fancybox({
        'width'       : '100%',
        'height'      : '100%',
        'autoScale'     : true,
        'transitionIn'    : 'none',
        'transitionOut'   : 'none',
        'type'        : 'iframe'
      });

      $("#various58").fancybox({
        'width'       : '100%',
        'height'      : '100%',
        'autoScale'     : true,
        'transitionIn'    : 'none',
        'transitionOut'   : 'none',
        'type'        : 'iframe'
      });

      $("#various59").fancybox({
        'width'       : '100%',
        'height'      : '100%',
        'autoScale'     : true,
        'transitionIn'    : 'none',
        'transitionOut'   : 'none',
        'type'        : 'iframe'
      });

      $("#various60").fancybox({
        'width'       : '100%',
        'height'      : '100%',
        'autoScale'     : true,
        'transitionIn'    : 'none',
        'transitionOut'   : 'none',
        'type'        : 'iframe'
      });

      $("#various61").fancybox({
        'width'       : '100%',
        'height'      : '100%',
        'autoScale'     : true,
        'transitionIn'    : 'none',
        'transitionOut'   : 'none',
        'type'        : 'iframe'
      });

      $("#various62").fancybox({
        'width'       : '100%',
        'height'      : '100%',
        'autoScale'     : true,
        'transitionIn'    : 'none',
        'transitionOut'   : 'none',
        'type'        : 'iframe'
      });

      $("#various63").fancybox({
        'width'       : '100%',
        'height'      : '100%',
        'autoScale'     : true,
        'transitionIn'    : 'none',
        'transitionOut'   : 'none',
        'type'        : 'iframe'
      });

    });
  </script>

<style>

body { padding: 50px; }

h1 { padding-left: 20px; padding-right: 20px;}

.chartdiv {
  width   : 100%;
  height    : 500px;
  font-size : 11px;
  float: right;
} 


.modal-dialog{
width:95%;} 

</style>

<script src="chart/amcharts.js"></script>
<script src="chart/serial.js"></script>
<script src="chart/export.min.js"></script>
<link rel="stylesheet" href="chart/export.css" type="text/css" media="all" />
<script src="chart/light.js"></script>

<!--SUMMARY -->
<script>

TOTAL = '<?php echo $sum_TOTAL_sp ;?>';
COMPLETED = '<?php echo $sum_COMPLETED_sp ;?>';
ONGOING = '<?php echo $sum_ONGOING_sp ;?>';
PRE = '<?php echo $sum_PRE_sp ;?>';
DED = '<?php echo $sum_DED_sp ;?>';
NOTYETSTARTED = '<?php echo $sum_NOTYETSTARTED_sp ;?>';
SUSPENDED = '<?php echo $sum_SUSPENDED_sp ;?>';
CANCELLED = '<?php echo $sum_CANCELLED_sp ;?>';
NSY = '<?php echo $sum_NS_sp ;?>';

  var chart = AmCharts.makeChart( "chartdiv", {
  "hideCredits":true,
  "type": "pie",
  "theme": "light",
  "dataProvider": [ {
    "status": "Completed",
    "value": COMPLETED,
    "color": "#33cc33",
  }, {
    "status": "On-Going",
    "value": ONGOING,
    "color": "#1a53ff",
  }, {
    "status": "PRE Procurement",
    "value": PRE,
    "color": "#ff0066"
  }, {
    "status": "DED Prep",
    "value": DED,
    "color": "#cc66ff"
  }, {
    "status": "Under Prep / Not Yet Started",
    "value": NOTYETSTARTED,
    "color": "#999966"
  }, {
    "status": "Suspended",
    "value": SUSPENDED,
    "color": "#663300"
  }, {
    "status": "Cancelled",
    "value": CANCELLED,
    "color": "#ff0000"
  }, {
    "status": "No Status Yet",
    "value": NSY,
    "color": "#ffff66"
  }],
  "startDuration": 1,
   "balloon": {
   //"hideBalloonTime": 1000, // 1second
    "disableMouseEvents": false, // allow click
    "fixedPosition": true,
    //"fadeOutDuration": 200,
    "fillAlpha": 1,
    "enabled": true
  },
  "valueField": "value",
  "titleField": "status",
  "colorField": "color",
  "outlineAlpha": 0.4,
  "depth3D": 30,                                                                                    
  "balloonText": "<b>[[title]]</b><br><span style='font-size:14px'><b>[[value]]</b> ([[percents]]%)</a></span>",
  "angle": 50,
  "export": {
    "enabled": true
  }
} );
  </script>

<!-- 2012 -->
<script>
TOTAL = '<?php echo $sum_TOTAL_sp2 ;?>';
COMPLETED = '<?php echo $sum_COMPLETED_sp2 ;?>';
ONGOING = '<?php echo $sum_ONGOING_sp2 ;?>';
PRE = '<?php echo $sum_PRE_sp2 ;?>';
DED = '<?php echo $sum_DED_sp2 ;?>';
NOTYETSTARTED = '<?php echo $sum_NOTYETSTARTED_sp2 ;?>';
SUSPENDED = '<?php echo $sum_SUSPENDED_sp2 ;?>';
CANCELLED = '<?php echo $sum_CANCELLED_sp2 ;?>';
NSY = '<?php echo $sum_NS_sp2 ;?>';

  AmCharts.makeChart( "chartdiv2", {
  "hideCredits":true,
  "type": "pie",
  "theme": "light",
  "dataProvider": [ {
    "status": "Completed",
    "value": COMPLETED,
    "color": "#33cc33",
  }, {
    "status": "On-Going",
    "value": ONGOING,
    "color": "#1a53ff",
  }, {
    "status": "PRE Procurement",
    "value": PRE,
    "color": "#ff0066"
  }, {
    "status": "DED Prep",
    "value": DED,
    "color": "#cc66ff"
  }, {
    "status": "Under Prep / Not Yet Started",
    "value": NOTYETSTARTED,
    "color": "#999966"
  }, {
    "status": "Suspended",
    "value": SUSPENDED,
    "color": "#663300"
  }, {
    "status": "Cancelled",
    "value": CANCELLED,
    "color": "#ff0000"
  }, {
    "status": "No Status Yet",
    "value": NSY,
    "color": "#ffff66"
  }],
  "startDuration": 1,
   "balloon": {
   //"hideBalloonTime": 1000, // 1second
    "disableMouseEvents": false, // allow click
    "fixedPosition": true,
    //"fadeOutDuration": 200,
    "fillAlpha": 1,
    "enabled": true
  },
  "valueField": "value",
  "titleField": "status",
  "colorField": "color",
  "outlineAlpha": 0.4,
  "depth3D": 30,                                                                                    
  "balloonText": "<b>[[title]]</b><br><span style='font-size:14px'><b>[[value]]</b> ([[percents]]%)</a></span>",
  "angle": 50,
  "export": {
    "enabled": true
  }
} );
  </script>


<!-- 2013 -->
<script>
TOTAL = '<?php echo $sum_TOTAL_sp3 ;?>';
COMPLETED = '<?php echo $sum_COMPLETED_sp3 ;?>';
ONGOING = '<?php echo $sum_ONGOING_sp3 ;?>';
PRE = '<?php echo $sum_PRE_sp3 ;?>';
DED = '<?php echo $sum_DED_sp3 ;?>';
NOTYETSTARTED = '<?php echo $sum_NOTYETSTARTED_sp3 ;?>';
SUSPENDED = '<?php echo $sum_SUSPENDED_sp3 ;?>';
CANCELLED = '<?php echo $sum_CANCELLED_sp3 ;?>';
NSY = '<?php echo $sum_NS_sp3 ;?>';

  AmCharts.makeChart( "chartdiv3", {
  "hideCredits":true,
  "type": "pie",
  "theme": "light",
  "dataProvider": [ {
    "status": "Completed",
    "value": COMPLETED,
    "color": "#33cc33",
  }, {
    "status": "On-Going",
    "value": ONGOING,
    "color": "#1a53ff",
  }, {
    "status": "PRE Procurement",
    "value": PRE,
    "color": "#ff0066"
  }, {
    "status": "DED Prep",
    "value": DED,
    "color": "#cc66ff"
  }, {
    "status": "Under Prep / Not Yet Started",
    "value": NOTYETSTARTED,
    "color": "#999966"
  }, {
    "status": "Suspended",
    "value": SUSPENDED,
    "color": "#663300"
  }, {
    "status": "Cancelled",
    "value": CANCELLED,
    "color": "#ff0000"
  }, {
    "status": "No Status Yet",
    "value": NSY,
    "color": "#ffff66"
  }],
  "startDuration": 1,
   "balloon": {
   //"hideBalloonTime": 1000, // 1second
    "disableMouseEvents": false, // allow click
    "fixedPosition": true,
    //"fadeOutDuration": 200,
    "fillAlpha": 1,
    "enabled": true
  },
  "valueField": "value",
  "titleField": "status",
  "colorField": "color",
  "outlineAlpha": 0.4,
  "depth3D": 30,                                                                                    
  "balloonText": "<b>[[title]]</b><br><span style='font-size:14px'><b>[[value]]</b> ([[percents]]%)</a></span>",
  "angle": 50,
  "export": {
    "enabled": true
  }
} );
  </script>


 <!-- 2014 -->
<script>
TOTAL = '<?php echo $sum_TOTAL_sp4 ;?>';
COMPLETED = '<?php echo $sum_COMPLETED_sp4 ;?>';
ONGOING = '<?php echo $sum_ONGOING_sp4 ;?>';
PRE = '<?php echo $sum_PRE_sp4 ;?>';
DED = '<?php echo $sum_DED_sp4 ;?>';
NOTYETSTARTED = '<?php echo $sum_NOTYETSTARTED_sp4 ;?>';
SUSPENDED = '<?php echo $sum_SUSPENDED_sp4 ;?>';
CANCELLED = '<?php echo $sum_CANCELLED_sp4 ;?>';
NSY = '<?php echo $sum_NS_sp4 ;?>';

  AmCharts.makeChart( "chartdiv4", {
  "hideCredits":true,
  "type": "pie",
  "theme": "light",
  "dataProvider": [ {
    "status": "Completed",
    "value": COMPLETED,
    "color": "#33cc33",
  }, {
    "status": "On-Going",
    "value": ONGOING,
    "color": "#1a53ff",
  }, {
    "status": "PRE Procurement",
    "value": PRE,
    "color": "#ff0066"
  }, {
    "status": "DED Prep",
    "value": DED,
    "color": "#cc66ff"
  }, {
    "status": "Under Prep / Not Yet Started",
    "value": NOTYETSTARTED,
    "color": "#999966"
  }, {
    "status": "Suspended",
    "value": SUSPENDED,
    "color": "#663300"
  }, {
    "status": "Cancelled",
    "value": CANCELLED,
    "color": "#ff0000"
  }, {
    "status": "No Status Yet",
    "value": NSY,
    "color": "#ffff66"
  }],
  "startDuration": 1,
   "balloon": {
   //"hideBalloonTime": 1000, // 1second
    "disableMouseEvents": false, // allow click
    "fixedPosition": true,
    //"fadeOutDuration": 200,
    "fillAlpha": 1,
    "enabled": true
  },
  "valueField": "value",
  "titleField": "status",
  "colorField": "color",
  "outlineAlpha": 0.4,
  "depth3D": 30,                                                                                    
  "balloonText": "<b>[[title]]</b><br><span style='font-size:14px'><b>[[value]]</b> ([[percents]]%)</a></span>",
  "angle": 50,
  "export": {
    "enabled": true
  }
} );
  </script> 


<!-- 2015 -->
<script>
TOTAL = '<?php echo $sum_TOTAL_sp5 ;?>';
COMPLETED = '<?php echo $sum_COMPLETED_sp5 ;?>';
ONGOING = '<?php echo $sum_ONGOING_sp5 ;?>';
PRE = '<?php echo $sum_PRE_sp5 ;?>';
DED = '<?php echo $sum_DED_sp5 ;?>';
NOTYETSTARTED = '<?php echo $sum_NOTYETSTARTED_sp5 ;?>';
SUSPENDED = '<?php echo $sum_SUSPENDED_sp5 ;?>';
CANCELLED = '<?php echo $sum_CANCELLED_sp5 ;?>';
NSY = '<?php echo $sum_NS_sp5 ;?>';

  AmCharts.makeChart( "chartdiv5", {
  "hideCredits":true,
  "type": "pie",
  "theme": "light",
  "dataProvider": [ {
    "status": "Completed",
    "value": COMPLETED,
    "color": "#33cc33",
  }, {
    "status": "On-Going",
    "value": ONGOING,
    "color": "#1a53ff",
  }, {
    "status": "PRE Procurement",
    "value": PRE,
    "color": "#ff0066"
  }, {
    "status": "DED Prep",
    "value": DED,
    "color": "#cc66ff"
  }, {
    "status": "Under Prep / Not Yet Started",
    "value": NOTYETSTARTED,
    "color": "#999966"
  }, {
    "status": "Suspended",
    "value": SUSPENDED,
    "color": "#663300"
  }, {
    "status": "Cancelled",
    "value": CANCELLED,
    "color": "#ff0000"
  }, {
    "status": "No Status Yet",
    "value": NSY,
    "color": "#ffff66"
  }],
  "startDuration": 1,
   "balloon": {
   //"hideBalloonTime": 1000, // 1second
    "disableMouseEvents": false, // allow click
    "fixedPosition": true,
    //"fadeOutDuration": 200,
    "fillAlpha": 1,
    "enabled": true
  },
  "valueField": "value",
  "titleField": "status",
  "colorField": "color",
  "outlineAlpha": 0.4,
  "depth3D": 30,                                                                                    
  "balloonText": "<b>[[title]]</b><br><span style='font-size:14px'><b>[[value]]</b> ([[percents]]%)</a></span>",
  "angle": 50,
  "export": {
    "enabled": true
  }
  } );
  </script>   


  <!-- 2016 -->
<script>
TOTAL = '<?php echo $sum_TOTAL_sp6 ;?>';
COMPLETED = '<?php echo $sum_COMPLETED_sp6 ;?>';
ONGOING = '<?php echo $sum_ONGOING_sp6 ;?>';
PRE = '<?php echo $sum_PRE_sp6 ;?>';
DED = '<?php echo $sum_DED_sp6 ;?>';
NOTYETSTARTED = '<?php echo $sum_NOTYETSTARTED_sp6 ;?>';
SUSPENDED = '<?php echo $sum_SUSPENDED_sp6 ;?>';
CANCELLED = '<?php echo $sum_CANCELLED_sp6 ;?>';
NSY = '<?php echo $sum_NS_sp6 ;?>';

  AmCharts.makeChart( "chartdiv6", {
  "hideCredits":true,
  "type": "pie",
  "theme": "light",
  "dataProvider": [ {
    "status": "Completed",
    "value": COMPLETED,
    "color": "#33cc33",
  }, {
    "status": "On-Going",
    "value": ONGOING,
    "color": "#1a53ff",
  }, {
    "status": "PRE Procurement",
    "value": PRE,
    "color": "#ff0066"
  }, {
    "status": "DED Prep",
    "value": DED,
    "color": "#cc66ff"
  }, {
    "status": "Under Prep / Not Yet Started",
    "value": NOTYETSTARTED,
    "color": "#999966"
  }, {
    "status": "Suspended",
    "value": SUSPENDED,
    "color": "#663300"
  }, {
    "status": "Cancelled",
    "value": CANCELLED,
    "color": "#ff0000"
  }, {
    "status": "No Status Yet",
    "value": NSY,
    "color": "#ffff66"
  }],
  "startDuration": 1,
   "balloon": {
   //"hideBalloonTime": 1000, // 1second
    "disableMouseEvents": false, // allow click
    "fixedPosition": true,
    //"fadeOutDuration": 200,
    "fillAlpha": 1,
    "enabled": true
  },
  "valueField": "value",
  "titleField": "status",
  "colorField": "color",
  "outlineAlpha": 0.4,
  "depth3D": 30,                                                                                    
  "balloonText": "<b>[[title]]</b><br><span style='font-size:14px'><b>[[value]]</b> ([[percents]]%)</a></span>",
  "angle": 50,
  "export": {
    "enabled": true
  }
} );
  </script> 


  <!-- 2017 -->
<script>
TOTAL = '<?php echo $sum_TOTAL_sp7 ;?>';
COMPLETED = '<?php echo $sum_COMPLETED_sp7 ;?>';
ONGOING = '<?php echo $sum_ONGOING_sp7 ;?>';
PRE = '<?php echo $sum_PRE_sp7 ;?>';
DED = '<?php echo $sum_DED_sp7 ;?>';
NOTYETSTARTED = '<?php echo $sum_NOTYETSTARTED_sp7 ;?>';
SUSPENDED = '<?php echo $sum_SUSPENDED_sp7 ;?>';
CANCELLED = '<?php echo $sum_CANCELLED_sp7 ;?>';
NSY = '<?php echo $sum_NS_sp7 ;?>';

  AmCharts.makeChart( "chartdiv7", {
  "hideCredits":true,
  "type": "pie",
  "theme": "light",
  "dataProvider": [ {
    "status": "Completed",
    "value": COMPLETED,
    "color": "#33cc33",
  }, {
    "status": "On-Going",
    "value": ONGOING,
    "color": "#1a53ff",
  }, {
    "status": "PRE Procurement",
    "value": PRE,
    "color": "#ff0066"
  }, {
    "status": "DED Prep",
    "value": DED,
    "color": "#cc66ff"
  }, {
    "status": "Under Prep / Not Yet Started",
    "value": NOTYETSTARTED,
    "color": "#999966"
  }, {
    "status": "Suspended",
    "value": SUSPENDED,
    "color": "#663300"
  }, {
    "status": "Cancelled",
    "value": CANCELLED,
    "color": "#ff0000"
  }, {
    "status": "No Status Yet",
    "value": NSY,
    "color": "#ffff66"
  }],
  "startDuration": 1,
   "balloon": {
   //"hideBalloonTime": 1000, // 1second
    "disableMouseEvents": false, // allow click
    //"fixedPosition": true,
    //"fadeOutDuration": 200,
    "fillAlpha": 1,
    "enabled": true
  },
  "valueField": "value",
  "titleField": "status",
  "colorField": "color",
  "outlineAlpha": 0.4,
  "depth3D": 30,                                                                                    
  "balloonText": "<b>[[title]]</b><br><span style='font-size:14px'><b>[[value]]</b> ([[percents]]%)</a></span>",
  "angle": 50,
  "export": {
    "enabled": true
  }
} );
  </script>


  <!-- 2018 -->
<script>
TOTAL = '<?php echo $sum_TOTAL_sp8 ;?>';
COMPLETED = '<?php echo $sum_COMPLETED_sp8 ;?>';
ONGOING = '<?php echo $sum_ONGOING_sp8 ;?>';
PRE = '<?php echo $sum_PRE_sp8 ;?>';
DED = '<?php echo $sum_DED_sp8 ;?>';
NOTYETSTARTED = '<?php echo $sum_NOTYETSTARTED_sp8 ;?>';
SUSPENDED = '<?php echo $sum_SUSPENDED_sp8 ;?>';
CANCELLED = '<?php echo $sum_CANCELLED_sp8 ;?>';
NSY = '<?php echo $sum_NS_sp8 ;?>';

  AmCharts.makeChart( "chartdiv8", {
  "hideCredits":true,
  "type": "pie",
  "theme": "light",
  "dataProvider": [ {
    "status": "Completed",
    "value": COMPLETED,
    "color": "#33cc33",
  }, {
    "status": "On-Going",
    "value": ONGOING,
    "color": "#1a53ff",
  }, {
    "status": "PRE Procurement",
    "value": PRE,
    "color": "#ff0066"
  }, {
    "status": "DED Prep",
    "value": DED,
    "color": "#cc66ff"
  }, {
    "status": "Under Prep / Not Yet Started",
    "value": NOTYETSTARTED,
    "color": "#999966"
  }, {
    "status": "Suspended",
    "value": SUSPENDED,
    "color": "#663300"
  }, {
    "status": "Cancelled",
    "value": CANCELLED,
    "color": "#ff0000"
  }, {
    "status": "No Status Yet",
    "value": NSY,
    "color": "#ffff66"
  }],
  "startDuration": 1,
   "balloon": {
   //"hideBalloonTime": 1000, // 1second
    "disableMouseEvents": false, // allow click
    //"fixedPosition": true,
    //"fadeOutDuration": 200,
    "fillAlpha": 1,
    "enabled": true
  },
  "valueField": "value",
  "titleField": "status",
  "colorField": "color",
  "outlineAlpha": 0.4,
  "depth3D": 30,                                                                                    
  "balloonText": "<b>[[title]]</b><br><span style='font-size:14px'><b>[[value]]</b> ([[percents]]%)</a></span>",
  "angle": 50,
  "export": {
    "enabled": true
  }
} );
  </script>  

</head>
<body>

<nav class="navbar navbar-default navbar-fixed-top container-fluid">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">Home</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">List <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="summarylist.php">Summary</a></li>
            <hr>
            <li><a href="biliranlist.php">Biliran</a></li>
            <li><a href="esamarlist.php">Eastern Samar</a></li>
            <li><a href="leytelist.php">Leyte</a></li>
            <li><a href="ormoclist.php">Ormoc</a></li>
            <li><a href="taclobanlist.php">Tacloban</a></li>
            <li><a href="nsamarlist.php">Northern Samar</a></li>
            <li><a href="samarlist.php">Samar</a></li>
            <li><a href="sleytelist.php">Southern Leyte</a></li>
          </ul>
        </li>
      </ul>

      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Matrix <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="targetmatrix.php">Target</a></li>
            <hr>
            <li><a href="summary.php">Summary</a></li>
            <hr>
            <li><a href="biliran.php">Biliran</a></li>
            <li><a href="esamar.php">Eastern Samar</a></li>
            <li><a href="leyte.php">Leyte</a></li>
            <li><a href="ormoc.php">Ormoc</a></li>
            <li><a href="tacloban.php">Tacloban</a></li>
            <li><a href="nsamar.php">Northern Samar</a></li>
            <li><a href="samar.php">Samar</a></li>
            <li><a href="sleyte.php">Southern Leyte</a></li>
          </ul>
        </li>
      </ul>

      <!-- Pie Nav -->
      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Per Province <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="summarypie.php">Summary</a></li>
            <hr>
            <li><a href="biliranpie.php">Biliran</a></li>
            <li><a href="esamarpie.php">Eastern Samar</a></li>
            <li><a href="leytepie.php">Leyte</a></li>
            <li><a href="ormocpie.php">Ormoc</a></li>
            <li><a href="taclobanpie.php">Tacloban</a></li>
            <li><a href="nsamarpie.php">Northern Samar</a></li>
            <li><a href="samarpie.php">Samar</a></li>
            <li><a href="sleytepie.php">Southern Leyte</a></li>
          </ul>
        </li>
      </ul>

      <ul class="nav navbar-nav navbar-right">
        <!-- <li><a href="#">Link</a></li> -->
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About us <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Contact</a></li>
            <li><a href="#">Facebook</a></li>
            <li><a href="#">Website</a></li>
            <!-- <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li> -->
          </ul>
    </div>
  </div>
</nav>

<ul id="myTab" class="nav nav-tabs">
        <li class="active"><a href="#summary" data-target="#summary" data-toggle="tab">SOUTHERN LEYTE</a></li>
        <li><a href="#2012" data-target="#2012" data-toggle="tab">2012</a></li>
        <li><a href="#2013" data-target="#2013" data-toggle="tab">2013</a></li>
        <li><a href="#2014" data-target="#2014" data-toggle="tab">2014</a></li>
        <li><a href="#2015" data-target="#2015" data-toggle="tab">2015</a></li>
        <li><a href="#2016" data-target="#2016" data-toggle="tab">2016</a></li>
        <li><a href="#2017" data-target="#2017" data-toggle="tab">2017</a></li>
        <li><a href="#2018" data-target="#2018" data-toggle="tab">2018</a></li>

        <h4><span style="float: right;">As of <?php echo $dbupdate; ?></span></h4>
</ul>

<div class="container-fluid">
<div id="myTabContent" class="tab-content">

  <div class="tab-pane fade in active" id="summary">

    <!SOUTHERN LEYTE>
    <ul id="myTab" class="nav nav-tabs">
    <h3><b>Southern Leyte | <?php echo $sum_TOTAL_sp; ?> Sps</b></h3>
    <div class="dropdown">
    <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">View List
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
    <li><a id="various0" href="com_sleyte.php">Completed | <?php echo $sum_COMPLETED_sp; ///href="com_biliran.php"?> Sps</a></li>
    <li><a id="various1" href="ongoing_sleyte.php">On-Going | <?php echo $sum_ONGOING_sp; ?> Sps</a></li>
    <li><a id="various2" href="preproc_sleyte.php">Procurement | <?php echo $sum_PRE_sp; ?> Sps</a></li>
    <li><a id="various3" href="dedprep_sleyte.php">DED Prep | <?php echo $sum_DED_sp; ?> Sps</a></li>
    <li><a id="various4" href="underprep_sleyte.php">Under Prep | <?php echo $sum_NOTYETSTARTED_sp; ?> Sps</a></li>
    <li><a id="various5" href="suspended_sleyte.php">Suspended | <?php echo $sum_SUSPENDED_sp; ?> Sps</a></li>
    <li><a id="various6" href="cancelled_sleyte.php">Cancelled | <?php echo $sum_CANCELLED_sp; ?> Sps</a></li>
    <li><a id="various7" href="ns_sleyte.php">No Status Yet | <?php echo $sum_NS_sp; ?> Sps</a></li>
    </ul>
    </div>

    <div id="chartdiv" class="chartdiv"></div>
  </div>

  <div class="tab-pane fade" id="2012">
    <h3><b>Southern Leyte 2012 | <?php echo $sum_TOTAL_sp2; ?> Sps</b></h3>
    <div class="dropdown">
    <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">View List
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
    <li><a id="various8" href="com_sleyte_2012.php">Completed | <?php echo $sum_COMPLETED_sp2; ?> Sps</a></li>
    <li><a id="various9" href="ongoing_sleyte_2012.php">On-Going | <?php echo $sum_ONGOING_sp2; ?> Sps</a></li>
    <li><a id="various10" href="preproc_sleyte_2012.php">Procurement | <?php echo $sum_PRE_sp2; ?> Sps</a></li>
    <li><a id="various11" href="dedprep_sleyte_2012.php">DED Prep | <?php echo $sum_DED_sp2; ?> Sps</a></li>
    <li><a id="various12" href="underprep_sleyte_2012.php">Under Prep | <?php echo $sum_NOTYETSTARTED_sp2; ?> Sps</a></li>
    <li><a id="various13" href="suspended_sleyte_2012.php">Suspended | <?php echo $sum_SUSPENDED_sp2; ?> Sps</a></li>
    <li><a id="various14" href="cancelled_sleyte_2012.php">Cancelled | <?php echo $sum_CANCELLED_sp2; ?> Sps</a></li>
    <li><a id="various15" href="ns_sleyte_2012.php">No Status Yet | <?php echo $sum_NS_sp2; ?> Sps</a></li>
    </ul>
    </div>

    <div id="chartdiv2" class="chartdiv"></div>
  </div>

  <div class="tab-pane fade" id="2013">
    <h3><b>Southern Leyte 2013 | <?php echo $sum_TOTAL_sp3; ?> Sps</b></h3>
    <div class="dropdown">
    <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">View List
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
    <li><a id="various16" href="com_sleyte_2013.php">Completed | <?php echo $sum_COMPLETED_sp3; ?> Sps</a></li>
    <li><a id="various17" href="ongoing_sleyte_2013.php">On-Going | <?php echo $sum_ONGOING_sp3; ?> Sps</a></li>
    <li><a id="various18" href="preproc_sleyte_2013.php">Procurement | <?php echo $sum_PRE_sp3; ?> Sps</a></li>
    <li><a id="various19" href="dedprep_sleyte_2013.php">DED Prep | <?php echo $sum_DED_sp3; ?> Sps</a></li>
    <li><a id="various20" href="underprep_sleyte_2013.php">Under Prep | <?php echo $sum_NOTYETSTARTED_sp3; ?> Sps</a></li>
    <li><a id="various21" href="suspended_sleyte_2013.php">Suspended | <?php echo $sum_SUSPENDED_sp3; ?> Sps</a></li>
    <li><a id="various22" href="cancelled_sleyte_2013.php">Cancelled | <?php echo $sum_CANCELLED_sp3; ?> Sps</a></li>
    <li><a id="various23" href="ns_sleyte_2013.php">No Status Yet | <?php echo $sum_NS_sp3; ?> Sps</a></li>
    </ul>
    </div>

    <div id="chartdiv3" class="chartdiv"></div>
  </div>

  <div class="tab-pane fade" id="2014">
    <h3><b>Southern Leyte 2014 | <?php echo $sum_TOTAL_sp4; ?> Sps</b></span></h3>
    <div class="dropdown">
    <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">View List
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
    <li><a id="various24" href="com_sleyte_2014.php">Completed | <?php echo $sum_COMPLETED_sp4; ?> Sps</a></li>
    <li><a id="various25" href="ongoing_sleyte_2014.php">On-Going | <?php echo $sum_ONGOING_sp4; ?> Sps</a></li>
    <li><a id="various26" href="preproc_sleyte_2014.php">Procurement | <?php echo $sum_PRE_sp4; ?> Sps</a></li>
    <li><a id="various27" href="dedprep_sleyte_2014.php">DED Prep | <?php echo $sum_DED_sp4; ?> Sps</a></li>
    <li><a id="various28" href="underprep_sleyte_2014.php">Under Prep | <?php echo $sum_NOTYETSTARTED_sp4; ?> Sps</a></li>
    <li><a id="various29" href="suspended_sleyte_2014.php">Suspended | <?php echo $sum_SUSPENDED_sp4; ?> Sps</a></li>
    <li><a id="various30" href="cancelled_sleyte_2014.php">Cancelled | <?php echo $sum_CANCELLED_sp4; ?> Sps</a></li>
    <li><a id="various31" href="ns_sleyte_2014.php">No Status Yet | <?php echo $sum_NS_sp4; ?> Sps</a></li>
    </ul>
    </div>

    <div id="chartdiv4" class="chartdiv"></div>
  </div>

  <div class="tab-pane fade" id="2015">
    <h3><b>Southern Leyte 2015 | <?php echo $sum_TOTAL_sp5; ?> Sps</b></h3>
    <div class="dropdown">
    <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">View List
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
    <li><a id="various32" href="com_sleyte_2015.php">Completed | <?php echo $sum_COMPLETED_sp5; ?> Sps</a></li>
    <li><a id="various33" href="ongoing_sleyte_2015.php">On-Going | <?php echo $sum_ONGOING_sp5; ?> Sps</a></li>
    <li><a id="various34" href="preproc_sleyte_2015.php">Procurement | <?php echo $sum_PRE_sp5; ?> Sps</a></li>
    <li><a id="various35" href="dedprep_sleyte_2015.php">DED Prep | <?php echo $sum_DED_sp5; ?> Sps</a></li>
    <li><a id="various36" href="underprep_sleyte_2015.php">Under Prep | <?php echo $sum_NOTYETSTARTED_sp5; ?> Sps</a></li>
    <li><a id="various37" href="suspended_sleyte_2015.php">Suspended | <?php echo $sum_SUSPENDED_sp5; ?> Sps</a></li>
    <li><a id="various38" href="cancelled_sleyte_2015.php">Cancelled | <?php echo $sum_CANCELLED_sp5; ?> Sps</a></li>
    <li><a id="various39" href="ns_sleyte_2015.php">No Status Yet | <?php echo $sum_NS_sp5; ?> Sps</a></li>
    </ul>
    </div>

    <div id="chartdiv5" class="chartdiv"></div>
  </div>

  <div class="tab-pane fade" id="2016">
    <h3><b>Southern Leyte 2016 | <?php echo $sum_TOTAL_sp6; ?> Sps</b></h3>
    <div class="dropdown">
    <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">View List
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
    <li><a id="various40" href="com_sleyte_2016.php">Completed | <?php echo $sum_COMPLETED_sp6; ?> Sps</a></li>
    <li><a id="various41" href="ongoing_sleyte_2016.php">On-Going | <?php echo $sum_ONGOING_sp6; ?> Sps</a></li>
    <li><a id="various42" href="preproc_sleyte_2016.php">Procurement | <?php echo $sum_PRE_sp6; ?> Sps</a></li>
    <li><a id="various43" href="dedprep_sleyte_2016.php">DED Prep | <?php echo $sum_DED_sp6; ?> Sps</a></li>
    <li><a id="various44" href="underprep_sleyte_2016.php">Under Prep | <?php echo $sum_NOTYETSTARTED_sp6; ?> Sps</a></li>
    <li><a id="various45" href="suspended_sleyte_2016.php">Suspended | <?php echo $sum_SUSPENDED_sp6; ?> Sps</a></li>
    <li><a id="various46" href="cancelled_sleyte_2016.php">Cancelled | <?php echo $sum_CANCELLED_sp6; ?> Sps</a></li>
    <li><a id="various47" href="ns_sleyte_2016.php">No Status Yet | <?php echo $sum_NS_sp6; ?> Sps</a></li>
    </ul>
    </div>

    <div id="chartdiv6" class="chartdiv"></div>
  </div>

  <div class="tab-pane fade" id="2017">
    <h3><b>Southern Leyte 2017 | <?php echo $sum_TOTAL_sp7; ?> Sps</b></h3>
    <div class="dropdown">
    <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">View List
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
    <li><a id="various48" href="com_sleyte_2017.php">Completed | <?php echo $sum_COMPLETED_sp7; ?> Sps</a></li>
    <li><a id="various49" href="ongoing_sleyte_2017.php">On-Going | <?php echo $sum_ONGOING_sp7; ?> Sps</a></li>
    <li><a id="various50" href="preproc_sleyte_2017.php">Procurement | <?php echo $sum_PRE_sp7; ?> Sps</a></li>
    <li><a id="various51" href="dedprep_sleyte_2017.php">DED Prep | <?php echo $sum_DED_sp7; ?> Sps</a></li>
    <li><a id="various52" href="underprep_sleyte_2017.php">Under Prep | <?php echo $sum_NOTYETSTARTED_sp7; ?> Sps</a></li>
    <li><a id="various53" href="suspended_sleyte_2017.php">Suspended | <?php echo $sum_SUSPENDED_sp7; ?> Sps</a></li>
    <li><a id="various54" href="cancelled_sleyte_2017.php">Cancelled | <?php echo $sum_CANCELLED_sp7; ?> Sps</a></li>
    <li><a id="various55" href="ns_sleyte_2017.php">No Status Yet | <?php echo $sum_NS_sp7; ?> Sps</a></li>
    </ul>
    </div>

    <div id="chartdiv7" class="chartdiv"></div>
  </div>

  <div class="tab-pane fade" id="2018">
    <h3><b>Southern Leyte 2018 | <?php echo $sum_TOTAL_sp8; ?> Sps</b></h3>
    <div class="dropdown">
    <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">View List
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
    <li><a id="various56" href="com_sleyte_2018.php">Completed | <?php echo $sum_COMPLETED_sp8; ?> Sps</a></li>
    <li><a id="various57" href="ongoing_sleyte_2018.php">On-Going | <?php echo $sum_ONGOING_sp8; ?> Sps</a></li>
    <li><a id="various58" href="preproc_sleyte_2018.php">Procurement | <?php echo $sum_PRE_sp8; ?> Sps</a></li>
    <li><a id="various59" href="dedprep_sleyte_2018.php">DED Prep | <?php echo $sum_DED_sp8; ?> Sps</a></li>
    <li><a id="various60" href="underprep_sleyte_2018.php">Under Prep | <?php echo $sum_NOTYETSTARTED_sp8; ?> Sps</a></li>
    <li><a id="various61" href="suspended_sleyte_2018.php">Suspended | <?php echo $sum_SUSPENDED_sp8; ?> Sps</a></li>
    <li><a id="various62" href="cancelled_sleyte_2018.php">Cancelled | <?php echo $sum_CANCELLED_sp8; ?> Sps</a></li>
    <li><a id="various63" href="ns_sleyte_2018.php">No Status Yet | <?php echo $sum_NS_sp8; ?> Sps</a></li>
    </ul>
    </div>

    <div id="chartdiv8" class="chartdiv"></div>
  </div>

</div>
</div>
</body>
</html>