<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editAssignmentTrackerModal<?php echo $assignmenttrackerf['AssignmentID']; ?>">
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
  </svg>
</button>

<!-- Modal -->
<div class="modal fade" id="editAssignmentTrackerModal<?php echo $assignmenttrackerf['AssignmentID']; ?>" tabindex="-1" aria-labelledby="editAssignmentTrackerModalLabel<?php echo $assignmenttrackerf['AssignmentID']; ?>" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="editAssignmentTrackerModalLabel<?php echo $assignmenttrackerf['AssignmentID']; ?>">Edit Assignment</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
        <form method="post" action="">
          <div class="mb-3">
            <label for="AssignmentName<?php echo $assignmenttrackerf['AssignmentID']; ?>" class="form-label">Assignment Name</label>
            <input type="text" class="form-control" id="AssignmentName<?php echo $assignmenttrackerf['AssignmentID']; ?>" name="AssignmentName" value="<?php echo $assignmenttrackerf['AssignmentName']; ?>">
          </div>
          <div class="mb-3">
            <label for="CourseName<?php echo $assignmenttrackerf['AssignmentID']; ?>" class="form-label">Course Name</label>
            <input type="text" class="form-control" id="CourseName<?php echo $assignmenttrackerf['AssignmentID']; ?>" name="CourseName" value="<?php echo $assignmenttrackerf['CourseName']; ?>">
          </div>
          <div class="mb-3">
            <label for="DueDate<?php echo $assignmenttrackerf['AssignmentID']; ?>" class="form-label">Due Date</label>
            <input type="text" class="form-control" id="DueDate<?php echo $assignmenttrackerf['AssignmentID']; ?>" name="DueDate" value="<?php echo $assignmenttrackerf['DueDate']; ?>">
          </div>
          <div class="mb-3">
            <label for="Status<?php echo $assignmenttrackerf['AssignmentID']; ?>" class="form-label">Status</label>
            <input type="text" class="form-control" id="Status<?php echo $assignmenttrackerf['AssignmentID']; ?>" name="Status" value="<?php echo $assignmenttrackerf['Status']; ?>">
          </div>
          
          <input type="hidden" name="tdli" value="<?php echo $assignmenttrackerf['AssignmentID']; ?>">
          <input type="hidden" name="actionType" value="Edit">
          <button type="submit" class="btn btn-primary">Save</button>
        </form>
        
      </div>
    </div>
  </div>
</div>
