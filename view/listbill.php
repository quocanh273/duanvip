
<?php
extract($listbill);
var_dump($listbill);
?>

<table class="table table-bordered table-hover">
    <thead class="thead-dark">
      <tr>
        <th>ID</th>
        <th>Product Name</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Total</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>Laptop</td>
        <td>$1000</td>
        <td>2</td>
        <td>$2000</td>
      </tr>
      <tr>
        <td>2</td>
        <td>Smartphone</td>
        <td>$500</td>
        <td>3</td>
        <td>$1500</td>
      </tr>
      <!-- Add more rows as needed -->
    </tbody>
  </table>
