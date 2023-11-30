<div class="modal-overlay" id="add_service">
     <div class="modal-container modal-form-size modal-sm">
        <div class="modal-header text-light">
            <h4 class="modal-h4-header">Add Services</h4>
            <span class="modal-exit" data-modal-id="add_service">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="25"
                    height="25"
                    fill="currentColor"
                    class="bi bi-x-circle-fill"
                    viewBox="0 0 16 16">
                    <path
                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
                </svg>
            </span>
        </div>
        <div class="modal-body">
            <div class="modalContent">
                <form method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="resources">Service Name:</label>
                        <input class="" type="text" name="resources_name" required />
                    </div>
                    
                <div class="form-group">
                        <label for="resources">Description:</label>
                        <input class="" type="text" name="resources_name" required />
                    </div>

                    <div class="form-group">
                        <label for="resources">Price:</label>
                        <input class="" type="text" name="resources_name" required />
                    </div>

                

                <script>
                    const resourceTypeSelect = document.getElementById('resourceType');
                    const equipmentQuantityDiv = document.getElementById('equipmentQuantity');
                    const quantityInput = document.getElementById('quantityInput');

                        quantityInput.addEventListener('input', function () {
                            quantityInput.value = quantityInput.value.replace(/\D/g, '');
                        });
                    resourceTypeSelect.addEventListener('change', function () {
                        const selectedValue = resourceTypeSelect.value;
                        if (selectedValue === 'EQUIPMENT') {
                            equipmentQuantityDiv.style.display = 'block';
                        } else {
                            equipmentQuantityDiv.style.display = 'none';
                        }
                    });
                </script>


                    <br />
                    <div class="modal-footer">
                        <button
                            type="submit"
                            name="submit_add_resource"
                            class="btn btn-warning text-dark"
                            onsubmit="return validate()">
                            Update
                        </button>
                        <button type="reset" class="btn btn-secondary close">Clear</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>