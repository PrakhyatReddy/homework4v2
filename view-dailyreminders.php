<h1>Welcome to your Daily Reminders</h1>

<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>Reminder ID</th>
        <th>Reminder</th>
        <th>Time</th>
        <th>Recurring</th>
      </tr>
    </thead>

    <tbody>
      <?php
        while($dailyremindersf = $dailyreminders->fetch_assoc()){
      ?>
          <tr>
              <td><?php echo $dailyremindersf['ReminderID']; ?></td>
              <td><?php echo $dailyremindersf['ReminderText']; ?></td>
              <td><?php echo $dailyremindersf['ReminderTime']; ?></td>
              <td><?php echo $dailyremindersf['Recurring']; ?></td>
          </tr>
      <?php
        }
      ?>
    </tbody>
  </table>
</div>

