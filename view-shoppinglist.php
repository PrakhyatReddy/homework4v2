<div class="row">
  <div class="col">
    <h1>Welcome to your To Do List</h1>
  </div>
  <div class="col-auto">
      <?php
        include "view-shoppinglist-newform.php";
      ?>
  </div>
</div>

<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>Item ID</th>
        <th>Item Name</th>
        <th>Quantity</th>
        <th>Category</th>
        <th>Purchase Status</th>
        <th></th>
        <th></th>
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
              <td>
                <?php
                 include "view-shoppinglist-editform.php";
                ?>
              </td>
          </tr>
    </tbody>
  </table>
</div>

