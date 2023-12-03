<div class="row">
  <div class="col">
    <h1>Welcome to your To Do List</h1>
  </div>
  <div class="col-auto">
      <?php
        include "view-todolist-newform.php";
      ?>
  </div>
</div>

<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>Task ID</th>
        <th>Task Name</th>
        <th>Priority</th>
        <th>Due Date</th>
        <th>Status</th>
      </tr>
    </thead>

    <tbody>
      <?php
        while ($todolistf =$todolist->fetch_assoc()){
      ?>
          <tr>
              <td><?php echo $todolistf['TaskID']; ?></td>
              <td><?php echo $todolistf['TaskName']; ?></td>
              <td><?php echo $todolistf['Priority']; ?></td>
              <td><?php echo $todolistf['DueDate']; ?></td>
              <td><?php echo $todolistf['Status']; ?></td>
          </tr>
      <?php
        }
      ?>
    </tbody>
  </table>
</div>
