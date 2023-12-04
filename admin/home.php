<?php 
// extract($tonghd);

?>
   <main>
			<div class="head-title">
				<div class="left">
					<h1>Tổng Quan</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Trang Chủ</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Tổng Quan	</a>
						</li>
					</ul>
				</div>
			
			</div>

			<ul class="box-info">
				<li>
					<i class='bx bxs-calendar-check' ></i>
					<span class="text">
						<h3><?= $tonghd ?></h3>
						<p>Đơn Hàng</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-group' ></i>
					<span class="text">
						<h3><?= $tongkh?> </h3>
						<p>Khách Hàng</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-dollar-circle' ></i>
					<span class="text">
						<h3>$<?= $tongdh?></h3>
						<p>Doanh Thu</p>
					</span>
				</li>
			</ul>
			
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

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<!-- <script>
    // Chart.js code
    document.addEventListener('DOMContentLoaded', function () {
        // Frequent Buyer Chart
        var frequentBuyerChart = new Chart(document.getElementById('frequentBuyerChart'), {
            type: 'bar',
            data: {
                labels: <?php echo json_encode(array_column($listuserbuyhot, 'ten_dang_nhap')); ?>,
                datasets: [{
                    label: 'Số lượng hóa đơn đã thanh toán',
                    data: <?php echo json_encode(array_column($listuserbuyhot, 'so_luong_hoa_don')); ?>,
                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                    borderColor: 'rgba(255, 99, 132, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    });
</script> -->
<script>
    // Function to create a bar chart
    function createBarChart(labels, data, chartTitle, chartContainerId) {
        var ctx = document.getElementById(chartContainerId).getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [{
                    label: chartTitle,
                    data: data,
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    }

    // Product Sales Bar Chart
    var productLabels = <?= json_encode(array_column($listsphot, 'name_product')) ?>;
    var productData = <?= json_encode(array_column($listsphot, 'product_count')) ?>;
    createBarChart(productLabels, productData, 'Sản phẩm bán chạy nhất', 'productSalesChart');

    // User Purchases Bar Chart
    var userLabels = <?= json_encode(array_column($listuserbuyhot, 'ten_dang_nhap')) ?>;
    var userData = <?= json_encode(array_column($listuserbuyhot, 'so_luong_hoa_don')) ?>;
    createBarChart(userLabels, userData, 'Tài khoản thường xuyên mua hàng', 'userPurchasesChart');
</script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<div class="table-responsive mt-5">
    <h3>Sản phẩm đang bán chạy nhất hiện nay</h3>
    <canvas id="productSalesChart" width="400" height="200"></canvas>
    
</div>

<div class="table-responsive mt-5">
    <h3>Tài khoản thường xuyên mua hàng</h3>
    <canvas id="userPurchasesChart" width="400" height="200"></canvas>
</div>
<script>
    // Function to create a bar chart
    function createBarChart(labels, data, chartTitle, chartContainerId) {
        var ctx = document.getElementById(chartContainerId).getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [{
                    label: chartTitle,
                    data: data,
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    }

    // Product Sales Bar Chart
    var productLabels = <?= json_encode(array_column($listsphot, 'name_product')) ?>;
    var productData = <?= json_encode(array_column($listsphot, 'product_count')) ?>;
    createBarChart(productLabels, productData, 'Sản phẩm bán chạy nhất', 'productSalesChart');

    // User Purchases Bar Chart
    var userLabels = <?= json_encode(array_column($listuserbuyhot, 'ten_dang_nhap')) ?>;
    var userData = <?= json_encode(array_column($listuserbuyhot, 'so_luong_hoa_don')) ?>;
    createBarChart(userLabels, userData, 'Tài khoản thường xuyên mua hàng', 'userPurchasesChart');
</script>