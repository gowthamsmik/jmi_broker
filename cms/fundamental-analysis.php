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
            color: #000000;
            /* Set the color to a darker shade, e.g., #333 (dark gray) */
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
        .bgcolor{
            background-color:#00A65A;
            color:white;
        }
    </style>
    <title>Your Form</title>
    <script src="https://jmibroker.net/cms/assets/js/tinymce/tinymce.min.js"></script>
<script src="https://jmibroker.net/cms/assets/js/tinymce/themes/modern/theme.min.js"></script>

<script>
  tinymce.init({
    selector: 'textarea',
    plugins: 'preview textcolor image link media code wordcount emoticons', // Add any additional plugins you need
    toolbar: 'undo redo | formatselect | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media | code',
    menubar: 'file edit view insert format tools table help',
  });
</script>

</head>

<body>
    <div class="app-wrapper">

        <div class="app-content pt-3 p-md-3 p-lg-4">
            <div class="container-xl">

            <div class="row g-3 mb-4 align-items-center justify-content-between card">
                    <div class="col-auto">
                        <h1 class="app-page-title mb-0">Fundamental Analysis</h1>
                    </div>
                    <h6>All Fundamental</h6>
                    <div id="success-message" class="border p-3 rounded" style="display: none;background-color:#00A65A;color:white">
                    </div>
                    <hr style="height:2px;border-width:0;color:gray;background-color:#0ffcf8">
                    <p> New Fundamental</p>
                    <form class="add-fundamental-analysis"  enctype="multipart/form-data">
                        <label for="type">Heading</label>
                        <input type="text" id="heading" name="heading" placeholder="Enter Heading">

                        <label for="type">Description</label>
                        <input type="text" id="description" name="description" placeholder="Enter Description">
                        <div class="my-3">
                            <lable for="fileToUpload" >Choose File:</lable>
                            <input type="file" name="fileToUpload" id="fileToUpload" >
                        </div>
                        <br>
                        <button type="submit" value="Add" class="btn bgcolor my-2">Add</button>
                        <button type="reset" value="Clear" class="btn btn-secondary">Clear</button>
                    </form>
                    <!-- <div class="d-flex justify-content-between">
                        <button type="button" class="btn btn-success" onclick="getAllTechnicalAnalysis()">Delete Selected</button>
                    </div> -->
                </div>
                <!-- <form class="technical" id="fundamentalForm">
                    <div class="row">
                        <div class="col">
                            <select id="technicalperpage" name="technicalperpage" onchange="submitForm()">
                                <option value="3">show 3 per page</option>
                                <option value="2">show 2 per page</option>
                                <option value="1">show 1 per page</option>
                            </select>
                        </div>
                    </div>
                </form> -->
                <button type="button" class="btn btn-success my-3" id="deleteAllButton" onclick="deletefundamentalanalysis()" style="display: none;">Delete All</button>
                <div class="tab-content" id="orders-table-tab-content">
                    <div class="tab-pane fade show active" id="orders-all" role="tabpanel"
                        aria-labelledby="orders-all-tab">
                        <div class="app-card app-card-orders-table shadow-sm mb-5">
                            <div class="app-card-body">
                                <div class="table-responsive">
                                    <table class="table app-table-hover mb-0 text-left">
                                        <thead>
                                            <tr class="text-center">
                                                <th class="cell">
                                                    <input type="checkbox" id="selectAllCheckbox"
                                                        onclick="toggleSelectAll()">
                                                </th>

                                                <th class="cell">#</th>
                                                <th class="cell">Heading</th>
                                                <th class="cell">Description</th>
                                                <th class="cell">createdAt</th>
                                                <th class="cell">Manage</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                             $perPage = isset($_GET['technicalperpage']) ? $_GET['technicalperpage'] : 3;
                                            $index = 0;
                                            $page = isset($_GET['page']) ? $_GET['page'] : 1;
                                            // echo "perpage".$perPage,"<br>";
                                            // echo "page".$page;
                                            $getAllMailListAccount = getAllFundamentalAnalysis($page, $perPage);
                                            if ($getAllMailListAccount->num_rows > 0) {
                                                foreach ($getAllMailListAccount as $mailListAccount) {
                                                    $index++;
                                                    ?>
                                                    <tr class="text-center">
                                                        <td class="cell">
                                                            <input type="checkbox" name="selectedRows[]"
                                                                value="<?php echo $mailListAccount['id']; ?>" />
                                                        </td>
                                                        <td class="cell">
                                                            <?php echo $mailListAccount['id']; ?>
                                                        </td>
                                                        <td class="cell"><span class="truncate">
                                                                <?php echo $mailListAccount['heading']; ?>
                                                            </span></td>
                                                        <td class="cell"><span class="truncate">
                                                                <?php echo $mailListAccount['description']; ?>
                                                        </span></td>
                                                        <td class="cell"><span class="truncate">
                                                                <?php echo $mailListAccount['posted_on']; ?>
                                                            </span></td>
                                                        <td class="cell">
                                                        <button type="button" class="btn bgcolor" onclick="viewFundamentalAnalysis(<?php echo $mailListAccount['id']; ?>,'1')">View</button>
                                                            <!-- <button type="button" class="btn btn-success technicalStatus" data-technicalstatus="<?php echo $mailListAccount['technicalstatus']; ?>" data-id="<?php echo $mailListAccount['id']; ?>">
                                                                <?php $buttonname = ($mailListAccount['technicalstatus'] == '0' ? 'published' : 'Unpublished'); ?>
                                                                <?php echo $buttonname; ?>
                                                            </button> -->


                                                            <button type="button" class="btn bgcolor editfundamentalButton" data-toggle="modal" data-target="#editfundamentalModal" data-id="<?php echo $mailListAccount['id']; ?>">
                                                                Edit
                                                            </button>

                                                            <button type="button" class="btn bgcolor"
                                                            onclick="deletefundamentalanalysis(this);">Delete</button>
                                                    </tr>
                                                <?php }
                                            } ?>



                                        </tbody>
                                    </table>
                                </div><!--//table-responsive-->

                            </div><!--//app-card-body-->
                        </div>
                            <div class="modal fade " id="editfundamentalModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="editModalLabel">Edit Fundamental Analysis</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>

                                        <div class="modal-body">
                                        <form class="update-fundamental-analysis"  enctype="multipart/form-data">
                                        <div class="w-full ">
                                            <label for="type">ID</label>
                                            <input type="id" id="editFundamentalId" name="id" class="w-100" readonly>
                                        </div>

                                            <label for="type">Heading</label>
                                            <input type="text" id="editheading" name="heading" >

                                            <label for="type">Description</label>
                                            <input type="text" id="editdescription" name="description" >

                                            <!-- <lable for="fileToUpload" >Choose File:</lable>
                                            <input type="file" name="fileToUpload" id="editfileToUpload" > -->
                                            <div class="my-2">
                                                <button type="submit" value="Add" class="btn bgcolor">Add</button>
                                                <button type="reset" value="Clear" class="btn btn-secondary">Clear</button>
                                        </div>
                                        </form>

                                        </div>
                                        <!-- <div class="modal-footer">
                                            <button type="reset" class="btn btn-secondary" >Close</button>
                                            <button type="submit" class="btn btn-primary" id="saveChangesBtn">Save Changes</button>
                                        </div> -->
                                    </div>
                                </div>
                            </div>

                        <nav class="app-pagination">
                            <ul class="pagination justify-content-end">
                                <?php
                                $totalRecords = getTotalfundamentalAnalysis();
                                $totalPages = ceil($totalRecords / $perPage);

                                for ($i = 1; $i <= $totalPages; $i++) {
                                    echo '<li class="page-item ' . ($page == $i ? 'active' : '') . '"><a class="page-link" href="?page=' . $i . '">' . $i . '</a></li>';
                                }
                                ?>
                            </ul>
                        </nav>

                    </div><!--//tab-pane-->

                </div><!--//tab-content-->
            </div>
        </div>

        <footer class="app-footer">
            <div class="container text-center py-3">


            </div>
        </footer>

        <script>
   function deletefundamentalanalysis() {
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
                    data: { type: 'delete-fundamental-analysis', ids: ids, page: currentPage },
                    success: function (res) {
                        console.log(res);
                        var successMessageDiv = document.getElementById('success-message');
                        successMessageDiv.innerHTML = 'Selected Record Has Been Deleted';
                        successMessageDiv.style.display = 'block';
                        $('html, body').animate({ scrollTop: 0 }, 'fast');
                        setTimeout(function () {
                            window.location.reload();
                        }, 2000);
                    },
                    error: function (err) {
                        console.error(err);
                        alert('Error deleting Accounts');
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
                 deleteAllButton.style = checkboxesChecked() ? 'active' : 'disabled';
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
                function submitForm() {
                    var form = document.getElementById('fundamentalForm');
                    form.submit();
                }
                function viewFundamentalAnalysis(id, view) {
                $.ajax({
                    type: 'POST',
                    url: 'includes/softwareinclude/ajax.php',
                    data: { fundamentalType: view,type: 'session-store-fundamental' },
                    success: function(response) {
                        window.location.href = 'view-fundamental-analysis.php?id=' + id;
                    },
                    error: function(error) {
                        console.error('Error setting session variable:', error);
                    }
                });
            }
</script>

    </div>
</body>


</html>
<?php include('includes/footer.php'); ?>