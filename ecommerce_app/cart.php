<?php include 'header.php'; ?>


<table class="table table-hover mt-5 mb-5">
<?php foreach($_SESSION as $names => $product):  ?>
  <thead>
    <tr>
      <th scope="col">Products </th>
      <th scope="col">titre</th>
      <th scope="col">Price</th>
      <th scope="col">action</th>
    </tr>
  </thead>
  <tbody>
    <tr class="table-success">
      <th scope="row"></th>
      <td><?php echo !empty($product['titre']) ? $product['titre'] : "---";  ?> </td>
      <td><?php echo !empty($product['total']) ? $product['total'] : "---";  ?> </td>
      <td> <a href="delete.php" class="btn btn-danger"> <i class="fa fa-trash"> </i> </a> </td>
    </tr>
<?php endforeach; ?>
    </tbody>
</table>

<button type="button" class="btn btn-success btn-sm">Buy This Now </button>


<?php include 'footer.php'; ?>