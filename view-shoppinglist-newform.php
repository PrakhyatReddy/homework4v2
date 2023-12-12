<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newShoppingItemModal">
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
    <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
  </svg>
</button>

<!-- Modal -->
<div class="modal fade" id="newShoppingItemModal" tabindex="-1" aria-labelledby="newShoppingItemModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="newShoppingItemModalLabel">New Shopping Item</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
        <form method="post" action="">
          <div class="mb-3">
            <label for="ItemName" class="form-label">Item Name</label>
            <input type="text" class="form-control" id="ItemName" name="ItemName">
          </div>
          <div class="mb-3">
            <label for="Quantity" class="form-label">Quantity</label>
            <input type="text" class="form-control" id="Quantity" name="Quantity">
          </div>
          <div class="mb-3">
            <label for="Category" class="form-label">Category</label>
            <input type="text" class="form-control" id="Category" name="Category">
          </div>
          <div class="mb-3">
            <label for="Purchased" class="form-label">Purchased</label>
            <input type="text" class="form-control" id="Purchased" name="Purchased">
          </div>

          <input type="hidden" name="actionType" value="Add">
          <button type="submit" class="btn btn-primary">Save</button>
        </form>
        
      </div>
    </div>
  </div>
</div>
