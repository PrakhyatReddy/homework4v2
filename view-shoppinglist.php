<h1>Welcome to your To Do List</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>Item ID</th>
        <th>Item Name</th>
        <th>Quantity</th>
        <th>Category</th>
        <th>Purchase Status</th>
      </tr>
    </thead>

    <tbody>
      <?php
        while ($shoppinglistf =$shoppinglist->fetch_assoc()){
      ?>
          <tr>
              <td><?php echo $shoppinglistf['ItemID']; ?></td>
              <td><?php echo $shoppinglistf['ItemName']; ?></td>
              <td><?php echo $shoppinglistf['Quantity']; ?></td>
              <td><?php echo $shoppinglistf['Category']; ?></td>
              <td><?php echo $shoppinglistf['Purchased']; ?></td>
          </tr>
      <?php
        }
      ?>
    </tbody>
  </table>
</div>
