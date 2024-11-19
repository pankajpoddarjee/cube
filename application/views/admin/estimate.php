<style>
    #context-menu {
    position: absolute;
    display: none;
    background: #fff;
    border: 1px solid #ccc;
    box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2);
    z-index: 1000;
    list-style: none;
    padding: 5px 0;
    min-width: 150px;
}

#context-menu li {
    padding: 8px 12px;
    cursor: pointer;
}

#context-menu li:hover {
    background-color: #f0f0f0;
}

</style>
<div class="container-fluid">

    <!-- Card start -->
    <div class="card mb-4">
        <div class="card-header">
            <div class="card-title">Estimate <strong class="">(<?php echo get_project_name_by_id($project_id);?>) <strong class="">(<?php echo get_job_name_by_id($job_id);?>)</strong><div class="card-title float-md-right" style="float:right">
                <!-- <a class="btn btn-success" href="<?php echo base_url('admin/project/'.$project_id.'/addJobs'); ?>">Add Jobs</a> -->
            </div></div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="" class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Ref Code</th>
                        <th scope="col">Description</th>
                        <th scope="col">Blank</th>
                        <th scope="col">BC%</th>
                        <th scope="col">Factor</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Total</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php 
                        if (isset($properties) && count($properties) > 0) { 
                            $i = 1;
                            foreach ($properties as $property) { 
                        ?>
                        <tr>
                            <th scope="row"><?php echo $i; ?></th>
                            <td><?php echo $property->ref_code; ?></td>
                            <td class="property-name"><?php echo $property->property_name; ?></td>
                            <td>
                                <!-- <select class="form-control" name="unit[<?php echo $property->id; ?>]" id="unit-<?php echo $property->id; ?>">
                                    <option value="">Select</option>
                                    <option value="area">Area</option>
                                    <option value="length">Length</option>
                                    <option value="lengthbycenter">Length By Center</option>
                                    <option value="volume">Volume</option>
                                    <option value="volumebylength">Volume By Length</option>
                                    <option value="verticlearea">Verticle Area</option>
                                </select> -->
                            </td>
                            <td>
                                <input 
                                    class="form-control" 
                                    type="text" 
                                    id="bc-<?php echo $property->id; ?>" 
                                    name="bc[<?php echo $property->id; ?>]" 
                                    placeholder="Enter BC%">
                            </td>
                            <td>
                                <!-- <input 
                                    class="form-control" 
                                    type="text" 
                                    id="factor-<?php echo $property->id; ?>" 
                                    name="factor[<?php echo $property->id; ?>]" 
                                    placeholder="Enter Factor"> -->
                            </td>
                            <td>
                                <!-- <input 
                                    class="form-control" 
                                    type="text" 
                                    id="quantity-<?php echo $property->id; ?>" 
                                    name="quantity[<?php echo $property->id; ?>]" 
                                    placeholder="Enter Quantity"> -->
                            </td>
                            <td>
                                <input 
                                    class="form-control" 
                                    type="text" 
                                    id="total-<?php echo $property->id; ?>" 
                                    name="total[<?php echo $property->id; ?>]" 
                                    placeholder="Enter Total">
                            </td>
                        </tr>
                        <?php 
                                $i++; 
                            } 
                        } else { 
                        ?>
                        <tr>
                            <td colspan="7">No Record Found</td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
	<!-- Card end -->

   
</div>
<script>
    document.addEventListener('DOMContentLoaded', () => {
    const contextMenu = document.createElement('ul');
    contextMenu.id = 'context-menu';
    contextMenu.innerHTML = `<li id="add-new-item" class="text-info">Add New Item</li>`;
    document.body.appendChild(contextMenu);

    const propertyNames = document.querySelectorAll('.property-name');

    let currentRow; // Variable to track the current row
    let uniqueId = document.querySelectorAll('tbody tr').length; // Initialize ID based on current row count

    // Show context menu
    propertyNames.forEach(property => {
        property.addEventListener('contextmenu', (event) => {
            event.preventDefault();
            const { clientX: mouseX, clientY: mouseY } = event;
            contextMenu.style.top = `${mouseY}px`;
            contextMenu.style.left = `${mouseX}px`;
            contextMenu.style.display = 'block';

            currentRow = property.closest('tr'); // Get the current row
        });
    });

    // Add new row action
    document.getElementById('add-new-item').addEventListener('click', () => {
        if (currentRow) {
            uniqueId++; // Increment the unique ID for the new row
            const newRow = document.createElement('tr');
            newRow.innerHTML = `
                <th scope="row"></th>
                <td></td>
                <td>
                    <input type="text" id="description-${uniqueId}" name="description[${uniqueId}]" class="form-control" placeholder="Enter Description">
                </td>
                <td>
                    <select id="unit-${uniqueId}" name="unit[${uniqueId}]" class="form-control">
                        <option value="">Select</option>
                        <option value="area">Area</option>
                        <option value="length">Length</option>
                        <option value="lengthbycenter">Length By Center</option>
                        <option value="volume">Volume</option>
                        <option value="volumebylength">Volume By Length</option>
                        <option value="verticlearea">Verticle Area</option>
                    </select>
                </td>
                <td><input type="text" id="bc-${uniqueId}" name="bc[${uniqueId}]" class="form-control" placeholder="Enter BC%"></td>
                <td><input type="text" id="factor-${uniqueId}" name="factor[${uniqueId}]" class="form-control factor-input" placeholder="Enter Factor"></td>
                <td><input type="text" id="quantity-${uniqueId}" name="quantity[${uniqueId}]" class="form-control quantity-input" placeholder="Enter Quantity"></td>
                <td><input type="text" id="total-${uniqueId}" name="total[${uniqueId}]" class="form-control total-input" placeholder="Total" readonly></td>
            `;
            currentRow.parentNode.insertBefore(newRow, currentRow.nextSibling); // Insert after the current row

            updateRowIndices(); // Update row numbering
            attachCalculationListeners(newRow); // Attach event listeners to the new row
            currentRow = null; // Reset the current row
        }
        contextMenu.style.display = 'none';
    });

    // Hide context menu
    document.addEventListener('click', (event) => {
        if (!contextMenu.contains(event.target)) {
            contextMenu.style.display = 'none';
        }
    });

    // Update row numbering
    function updateRowIndices() {
        const rows = document.querySelectorAll('tbody tr');
        rows.forEach((row, index) => {
            const firstCell = row.querySelector('th[scope="row"]');
            if (firstCell) firstCell.textContent = index + 1;
        });
    }

    // Function to attach event listeners to calculate total
    function attachCalculationListeners(row) {
        const factorInput = row.querySelector('.factor-input');
        const quantityInput = row.querySelector('.quantity-input');
        const totalInput = row.querySelector('.total-input');

        if (factorInput && quantityInput && totalInput) {
            const calculateTotal = () => {
                const factor = parseFloat(factorInput.value) || 0;
                const quantity = parseFloat(quantityInput.value) || 0;
                totalInput.value = (factor * quantity).toFixed(2); // Calculate total and set value
            };

            factorInput.addEventListener('input', calculateTotal);
            quantityInput.addEventListener('input', calculateTotal);
        }
    }

    // Attach calculation listeners to existing rows
    document.querySelectorAll('tbody tr').forEach(attachCalculationListeners);
});

</script>






