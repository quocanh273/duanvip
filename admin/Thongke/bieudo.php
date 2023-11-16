
<script src="https://www.gstatic.com/charts/loader.js"></script>
<div
id="myChart" style="width:100%; max-width:100%; height:800px;">
</div>

<script>
  
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {

// Set Data
const data = google.visualization.arrayToDataTable([
  ['Danh mục', 'Số lượng sản phẩm'],
  <?php
  $tongdm = count($listthongke);
  $i=1;
foreach($listthongke as $value){
    extract($value);
    if($i == $tongdm)
        $dauplay = "";
    else
        $dauplay =",";

        echo "['".$value['ten_loai']."',".$value['countsp']."]".$dauplay;
$i=+1;
    }


?>
//   ['Italy',54.8],
//   ['France',48.6],
//   ['Spain',44.4],
//   ['USA',23.9],
//   ['Argentina',14.5]
]);

// Set Options

const options = {
  title:'Biểu đồ thống kê danh mục và danh sách sản phẩm',
  is3D:true
};

// Draw
const chart = new google.visualization.PieChart(document.getElementById('myChart'));
chart.draw(data, options);

}
</script>