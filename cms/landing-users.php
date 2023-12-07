<?php include('includes/header.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        form {
            max-width: 400px;
            /* Set the maximum width of the form */
            margin: auto;
            /* Center the form horizontally */
        }

        label {
            display: block;
            /* Display labels as block elements */
            margin-bottom: 5px;
            /* Add some space below labels */
        }

        input[type="text"] {
            width: 100%;
            height: 40px;
            /* Make text input boxes 100% width */
            padding: 8px;
            /* Add padding to the text input boxes */
            box-sizing: border-box;
            /* Include padding and border in the total width */
            margin-bottom: 10px;
            /* Add some space below input boxes */
        }

        select {
            width: 100%;
            /* Make select boxes 100% width */
            padding: 8px;
            /* Add padding to the select boxes */
            box-sizing: border-box;
            /* Include padding and border in the total width */
            margin-bottom: 10px;
            /* Add some space below select boxes */
        }
        h6 {
            margin-bottom: 3px;
        }
        p {
            margin-bottom: 0;
            margin-top: 0;
        }
        label {
        color: #000000; /* Set the color to a darker shade, e.g., #333 (dark gray) */
        display: block;
        margin-bottom: 5px;
    }
        input[type="submit"],
        input[type="reset"] {
            padding: 10px;
            /* Add padding to the buttons */
            box-sizing: border-box;
            /* Include padding and border in the total width */
            cursor: pointer;
            /* Change cursor to pointer on hover */
        }

        input[type="submit"] {
            background-color: blue;
            /* Set background color for the "Add" button */
            color: white;
            /* Set text color for the "Add" button */
        }

        input[type="reset"] {
            background-color: grey;
            /* Set background color for the "Clear" button */
            color: white;
            /* Set text color for the "Clear" button */
        }
    </style>
    <title>Your Form</title>
</head>

<body>
    <div class="app-wrapper">

        <div class="app-content pt-3 p-md-3 p-lg-4">
            <div class="container-xl">

                <div class="row g-3 mb-4 align-items-center justify-content-between card">
                    <div class="col-auto mb-3">
                        <h1 class="app-page-title mb-0">All Landing Users</h1>
                    </div>
                    <h6>Landing Users</h6>
                    <hr style="height:2px;border-width:0;color:gray;background-color:#0ffcf8">
                    <form class="landingusers">
                        <div class="row">
                            <div class="col">
                                <select id="perpage" name="perpage">
                                    <option value="25">show 25 per page</option>
                                    <option value="50">show 50 per page</option>
                                    <option value="75">show 75 per page</option>
                                </select>
                            </div>
                            <div class="col">
                                <select id="searchtype" name="searchtype">
                                    <option value="phone">Search Mobile</option>
                                    <option value="name">Search Name</option>
                                    <option value="email">Search Email</option>
                                    <option value="created_at">Search Date</option>
                                    <option value="country">Search Country</option>
                                </select>
                            </div>
                            <div class="col">
                                <input type="text" id="search" name="search">
                            </div>
                            <div class="col">
                            <button type="submit" class="btn btn-success">Search</button>
                            </div>
                        </div>
                    </form>
                    <div class="row mt-5 my-3">
                        <div class="col">
                            <button type="button" class="btn btn-success">Export All</button>
                        </div>
                        <div class="col">
                            <button type="button" class="btn btn-success" onclick="deletelandingusers()">Delete Selected</button>
                        </div>
                    </div>
                </div>
                <div class="tab-content" id="orders-table-tab-content">
			        <div class="tab-pane fade show active" id="orders-all" role="tabpanel" aria-labelledby="orders-all-tab">
					    <div class="app-card app-card-orders-table shadow-sm mb-5">
						    <div class="app-card-body">
							    <div class="table-responsive">
							        <table class="table app-table-hover mb-0 text-left">
										<thead>
											<tr class="text-center">
											<th class="cell">
												<input type="checkbox" id="selectAllCheckbox" onclick="toggleSelectAll()">
											</th>
												<th class="cell">#</th>
												<th class="cell">Name</th>
												<th class="cell">Email</th>
												<th class="cell">Country</th>
                                                <th class="cell">Mobile</th>
                                                <th class="cell">Date</th>
                                                <th class="cell">Landing</th>
                                                <th class="cell">Cookie</th>
                                                <th class="cell">Manage</th>
											</tr>
										</thead>
										<tbody>
										 <?php
										 $index=0;
                                         $perPage = isset($_GET['perpage']) ? $_GET['perpage'] : 3;
                                         $page = isset($_GET['page']) ? $_GET['page'] : 1;
                                         $searchType = isset($_GET['searchtype']) ? $_GET['searchtype'] : '';
                                         $searchValue = isset($_GET['search']) ? $_GET['search'] : '';
                                         $getAlllandingusers = getAlllandingusers($searchType, $searchValue, $perPage, $page);
											if($getAlllandingusers -> num_rows > 0){
												foreach($getAlllandingusers as $getAlllandingusers){
													$index++;
													?>
													<tr class="text-center">
													<td class="cell">
														<input type="checkbox" name="selectedRows[]" value="<?php echo $getAlllandingusers['id']; ?>" />
													</td>
                                                    <td class="cell">   <span class="truncate"><?php echo $getAlllandingusers['id'];?></span></td>
														<td class="cell"><span class="truncate"><?php echo $getAlllandingusers['name'];?></span></td>
														<td class="cell"><span class="truncate"><?php echo $getAlllandingusers['email'];?></span></td>
														<td class="cell"><span class="truncate"><?php echo $getAlllandingusers['country'];?></span></td>
                                                        <td class="cell"><span class="truncate"><?php echo $getAlllandingusers['phone'];?></span></td>
                                                        <td class="cell"><span class="truncate"><?php echo $getAlllandingusers['created_at'];?></span></td>
                                                        <td class="cell"><span class="truncate"><?php echo $getAlllandingusers['landing_name'];?></span></td>
                                                        <td class="cell"><span class="truncate"><?php echo $getAlllandingusers['cookie'];?></span></td>
                                                        <td class="cell">
                                                        <button type="button" class="btn btn-success" onclick="deletelandingusers(this);">Delete</button>
													</tr>
												<?php }
											} ?>
										</tbody>
									</table>
						        </div>
						    </div>
						</div><!--//app-card-->
						<nav class="app-pagination">
                            <ul class="pagination justify-content-end">
                                <?php
                                    $totalRecords = getTotallandingusers($searchType,$searchValue);

                                $totalPages = ceil($totalRecords / $perPage);

                                for ($i = 1; $i <= $totalPages; $i++) {
                                    echo '<li class="page-item ' . ($page == $i ? 'active' : '') . '"><a class="page-link" href="?page=' . $i . '&show=' . $perPage . '&searchtype=' . $searchType . '&search=' . $searchValue . '">' . $i . '</a></li>';
                                }
                                ?>
                            </ul>
                        </nav>


			        </div>
				</div>
            </div>
        </div>
        <footer class="app-footer">
            <div class="container text-center py-3">
            </div>
        </footer>

        <script>
   function deletelandingusers() {
            var selectedRows = document.querySelectorAll('input[name="selectedRows[]"]:checked');
            var currentPage = <?php echo $page; ?>;
            var perPage = <?php echo $perPage; ?>;

            if (selectedRows.length === 0) {
                alert('Please select at least one row to delete.');
                return;
            }

            if (confirm('Are you sure you want to delete the selected records?')) {
                var ids = Array.from(selectedRows).map(function (row) {
                    return row.value;
                });

                // Send an AJAX request to delete the selected records on the current page
                $.ajax({
                    url: 'includes/softwareinclude/ajax.php',
                    type: 'post',
                    data: { type: 'delete-landing-users', ids: ids, page: currentPage },
                    success: function (res) {
                        console.log(res);
                        alert('Selected records Deleted');

                        // Optionally, you can reload the page or update the table without a page reload
                        window.location.href = "landing-users.php";

                        // Update the "Delete All" button status after deletion
                        var deleteAllButton = document.getElementById('deleteAllButton');
                        deleteAllButton.disabled = true;
                        deleteAllButton.style.display = 'none';  // Hide the button after deletion
                    },
                    error: function (err) {
                        console.error(err);
                        alert('Error deleting Website Accounts');
                    }
                });
            }
        }

    function toggleSelectAll() {
        var checkboxes = document.querySelectorAll('input[name="selectedRows[]"]');
        var selectAllCheckbox = document.getElementById('selectAllCheckbox');
        var deleteAllButton = document.getElementById('deleteAllButton');

        checkboxes.forEach(function (checkbox) {
            checkbox.checked = selectAllCheckbox.checked;
        });

        // Enable or disable the "Delete All" button based on the number of selected checkboxes
        deleteAllButton.disabled = !checkboxesChecked();
        deleteAllButton.style.display = checkboxesChecked() ? 'inline-block' : 'none';
    }

    function checkboxesChecked() {
        var checkboxes = document.querySelectorAll('input[name="selectedRows[]"]');
        var checkedCount = 0;

        checkboxes.forEach(function (checkbox) {
            if (checkbox.checked  ) {
                checkedCount++;
            }
        });

        return checkedCount > 1;
    }

    // Call toggleSelectAll on page load to set the initial state of the button
    window.onload = function () {
        toggleSelectAll();
    };
</script>
    </div>
</body>


</html>
<?php include('includes/footer.php'); ?>