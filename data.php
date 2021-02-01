<?php

 function getReports()
 {
    return json_decode(file_get_contents(__DIR__.'/data.json'), true) ;
    
 }

 function getReportbyId($id) 
 {
   $reports = getReports();
   foreach ($reports as $report) {
      if ($report['id'] == $id){
         return $report;
      }
   }
   return null;
 }

 function createReport($data) 
 {
   $reports = getReports();

   $data['id'] = rand(1000000, 2000000);

   $reports[] = $data;

   putJson($reports);

   return $data;
 }

 function updateReport($data, $id) 
 {
   $reports = getReports();
   foreach ($reports as $i => $report) {
      if ($report['id'] == $id){
         $reports[$i] = array_merge($report, $data);
      }
   }
   putJson($reports);
 }

 function deleteReport($data, $id) 
 {
    $deleteReport = [];
   $reports = getReports();
   foreach ($reports as $i => $report) {
      if ($report['id'] == $id){
         $reports[$i] = $deleteReport = array_merge($report, $data);
      }
   }

   putJson($reports);

   return $deleteReport;
 }

 function putJson($reports)
{
   file_put_contents(__DIR__.'/data.json', json_encode($reports, JSON_PRETTY_PRINT));
}

?>

