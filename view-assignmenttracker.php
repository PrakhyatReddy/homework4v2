<h1>Welcome to your Assignment Tracker</h1>

<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>Assignment ID</th>
        <th>Assignment</th>
        <th>Course</th>
        <th>Due Date</th>
        <th>Status</th>
      </tr>
    </thead>

    <tbody>
      <?php
        while ($assignmenttrackerf =$assignmenttracker->fetch_assoc()){
      ?>
          <tr>
              <td><?php echo $assignmenttrackerf['AssignmentID']; ?></td>
              <td><?php echo $assignmenttrackerf['AssignmentName']; ?></td>
              <td><?php echo $assignmenttrackerf['CourseName']; ?></td>
              <td><?php echo $assignmenttrackerf['DueDate']; ?></td>
              <td><?php echo $assignmenttrackerf['Status']; ?></td>
          </tr>
      <?php
        }
      ?>
    </tbody>
  </table>
</div>

