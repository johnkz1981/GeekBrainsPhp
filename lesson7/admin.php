<?php
include('bd.php');
$ordersQuery = mysqli_query($link, 'SELECT * FROM orders');
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<h2>Админка</h2>
<?php
while ($row = mysqli_fetch_assoc($ordersQuery)):
  $products_html = '';
  foreach (json_decode($row['products']) as $product):

    $products_html .= <<<PRODUCT
<div class="products_row">
  <div class="good">{$product->good}</div>
  <div class="description">$product->description</div>
  <div class="price">{$product->price}</div>
  <div class="good_img">{$product->good_img}</div>
</div>
PRODUCT;
  endforeach;

  echo <<<ORDERS
<div class="orders">
<div class="orders__detail">
<div class="id_user">{$row['id_user']}</div>
  <div class="status">{$row['status']}</div>
  <div class="date">{$row['date']}</div>
  <div>
  <input 
  type="button" 
  value="отказано" 
  class="button-status orders__button-reject" 
  name="reject"
  data-button="status">
  <input 
  type="button" 
  value="отправлен" 
  class="button-status orders__button-delivery" 
  name="delivery"
  data-button="status">
  <input 
  type="button" 
  value="выполнено" 
  class="button-status orders__button-success" 
  name="success"
  data-button="status">
  </div>
  </div>
  <div class="products_table">
    $products_html
  </div>
</div>
ORDERS;
endwhile;
?>
<script>
  const orders = document.querySelectorAll('.orders');

  for (const order of orders) {
    order.addEventListener('click', event => {
          if (event.target.dataset.button === 'status') {
            console.log(event.target.name);
          }
        }
    )
  }
</script>
</body>
</html>
