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

        .bgcolor {
            background-color: #00A65A;
            color: white;
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

                <div class="row g-3 mb-1 align-items-center justify-content-between card">
                    <div class="col-auto">
                        <h1 class="app-page-title mb-0 text-start">Technical Analysis</h1>
                    </div>
                    <h6>All Technical</h6>
                    <div id="success-message" class="border p-3 rounded"
                        style="display: none;background-color:#00A65A;color:white">
                    </div>
                    <hr style="height:2px;border-width:0;color:gray;background-color:blue">

                    <p> New Technical</p>
                    <form class="add-technical">
                        <label for="type">Type</label>
                        <select id="technicaltype" name="technicaltype">
                            <option value="1">GBP/USD</option>
                            <option value="2">EUR/USD</option>
                            <option value="3">USD/JPY</option>
                            <option value="4">AUD/USD</option>
                            <option value="5">GOLD</option>
                            <option value="6">OIL</option>
                            <option value="7">DOW Jones</option>
                        </select>

                        <label for="technicalstatus">Publish</label>
                        <select id="technicalstatus" name="technicalstatus">
                            <option value="1">Publish Now</option>
                            <option value="0">Publish Later</option>
                        </select>

                        <label for="title">English Title</label>
                        <input type="text" id="title" name="title" placeholder="Enter name">

                        <label for="details">English Details</label>
                        <textarea name="details" class="tinymce"></textarea><br />

                        <label for="arabic_title">Arabic Title</label>
                        <input type="text" id="arabic_title" name="arabic_title" placeholder="Enter name" dir="rtl">

                        <label for="arabic_details">Arabic Details</label>
                        <textarea name="arabic_details" class="tinymce" dir="rtl"></textarea><br />

                        <label for="title">Russian Title</label>
                        <input type="text" id="russian_title" name="russian_title" placeholder="Enter name">

                        <label for="details">Russian Details</label>
                        <textarea name="russian_details" class="tinymce"></textarea><br />

                        <button type="submit" value="Add" class="btn bgcolor my-3">Add</button>
                        <button type="reset" value="Clear" class="btn btn-secondary">Clear</button>
                    </form>
                    <!-- <div class="d-flex justify-content-between">
                        <button type="button" class="btn btn-success" onclick="getAllTechnicalAnalysis()">Delete Selected</button>
                    </div> -->
                </div>
                <!-- <form class="technical" id="technicalForm">
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
                <button type="button" class="btn bgcolor my-3" id="deleteAllButton" onclick="deletetechnicalanalysis()"
                    style="display: none;">Delete All</button>
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
                                                <th class="cell">Title</th>
                                                <th class="cell">Type</th>
                                                <th class="cell">Status</th>
                                                <th class="cell">createdAt</th>
                                                <th class="cell">Manage</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $perPage = isset($_GET['technicalperpage']) ? $_GET['technicalperpage'] : 3;

                                            $index = 0;
                                            $page = isset($_GET['page']) ? $_GET['page'] : 1;
                                            // echo "perpage".$perPage;
                                            // echo "page".$page;
                                            $getAllMailListAccount = getAllTechnicalAnalysis($page, $perPage);
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
                                                            <?php echo $index; ?>
                                                        </td>
                                                        <td class="cell"><span class="truncate">
                                                                <?php echo $mailListAccount['title']; ?>
                                                            </span></td>
                                                        <td class="cell status-cell"
                                                            data-status="<?php echo $mailListAccount['technicaltype']; ?>"
                                                            style="color: #fff; padding: 0px; border-radius: 5px;
                                                                <?php
                                                                $statusValue = $mailListAccount['technicaltype'];
                                                                $statusLabel = '';

                                                                switch ($statusValue) {
                                                                    case '1':
                                                                        $statusLabel = 'GBP/USD';
                                                                        break;
                                                                    case '2':
                                                                        $statusLabel = 'EUR/USD';
                                                                        break;
                                                                    case '3':
                                                                        $statusLabel = 'USD/JPY';
                                                                        break;
                                                                    case '4':
                                                                        $statusLabel = 'AUD/USD';
                                                                        break;
                                                                    case '5':
                                                                        $statusLabel = 'GOLD';
                                                                        break;
                                                                    case '6':
                                                                        $statusLabel = 'OIL';
                                                                        break;
                                                                    case '7':
                                                                        $statusLabel = 'DOW Jones';
                                                                        break;
                                                                    default:
                                                                        $statusLabel = 'nothing';
                                                                        break;
                                                                }
                                                                echo "color: " . ($statusValue == '8' ? 'red' : 'black') . ";";
                                                                ?>">
                                                            <?php echo $statusLabel; ?>
                                                        </td>
                                                        <td class="cell status-cell"
                                                            data-status="<?php echo $mailListAccount['technicalstatus']; ?>"
                                                            style="color: #fff; padding: 0px; border-radius: 5px;
                                                                <?php
                                                                $statusValue = $mailListAccount['technicalstatus'];
                                                                $statusLabel = '';

                                                                switch ($statusValue) {
                                                                    case '0':
                                                                        $statusLabel = 'UnPublished';
                                                                        break;
                                                                    case '1':
                                                                        $statusLabel = 'Published';
                                                                        break;
                                                                    default:
                                                                        $statusLabel = 'UnknownStatus';
                                                                        break;
                                                                }
                                                                echo "color: " . ($statusValue == '1' ? 'green' : 'red') . ";"; // Set background color based on status
                                                                ?>">
                                                            <?php echo $statusLabel; ?>
                                                        </td>

                                                        <!-- <td class="cell"><span class="truncate">
                                                                <?php echo $mailListAccount['technicalstatus']; ?>
                                                            </span></td> -->
                                                        <td class="cell"><span class="truncate">
                                                                <?php echo $mailListAccount['created_at']; ?>
                                                            </span></td>
                                                        <td class="cell">
                                                            <button type="button" class="btn bgcolor"
                                                                onclick="viewTechnicalAnalysis(<?php echo $mailListAccount['id']; ?>,'1')">View</button>
                                                            <button type="button" class="btn bgcolor technicalStatus"
                                                                data-technicalstatus="<?php echo $mailListAccount['technicalstatus']; ?>"
                                                                data-id="<?php echo $mailListAccount['id']; ?>">
                                                                <?php $buttonname = ($mailListAccount['technicalstatus'] == '0' ? 'published' : 'Unpublished'); ?>
                                                                <?php echo $buttonname; ?>
                                                            </button>


                                                            <button type="button" class="btn bgcolor editButton"
                                                                data-toggle="modal" data-target="#editModal"
                                                                data-id="<?php echo $mailListAccount['id']; ?>">
                                                                Edit
                                                            </button>

                                                            <button type="button" class="btn bgcolor"
                                                                onclick="deletetechnicalanalysis(this);">Delete</button>
                                                    </tr>
                                                <?php }
                                            } ?>



                                        </tbody>
                                    </table>
                                </div><!--//table-responsive-->

                            </div><!--//app-card-body-->
                        </div>
                        <div class="modal fade " id="editModal" tabindex="-1" role="dialog"
                            aria-labelledby="editModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="editModalLabel">Edit Technical Analysis</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>

                                    <div class="modal-body">
                                        <form class="update-technical">
                                            <input type="text" id="editTechnicalId" name="id" readonly>
                                            <label for="type">Type</label>
                                            <select id="editTechnicaltype" name="technicaltype">
                                                <option value="1">GBP/USD</option>
                                                <option value="2">EUR/USD</option>
                                                <option value="3">USD/JPY</option>
                                                <option value="4">AUD/USD</option>
                                                <option value="5">GOLD</option>
                                                <option value="6">OIL</option>
                                                <option value="7">DOW Jones</option>
                                            </select>

                                            <label for="technicalstatus">Publish</label>
                                            <select id="editTechnicalstatus" name="technicalstatus">
                                                <option value="1">Publish Now</option>
                                                <option value="0">Publish Later</option>
                                            </select>

                                            <label for="title">English Title</label>
                                            <input type="text" id="editTechnicaltitle" name="title">

                                            <label for="editTechnicaldetails">English Details</label>
                                            <textarea name="details" id="details" class="tinymce"></textarea><br />

                                            <label for="arabic_title">Arabic Title</label>
                                            <input type="text" id="editTechnicalarabic_title" name="arabic_title"
                                                dir="rtl">

                                            <label for="arabic_details">Arabic Details</label>
                                            <textarea name="arabic_details" id="editTechnicalarabic_details"
                                                class="tinymce" dir="rtl"></textarea><br />


                                            <label for="title">Russian Title</label>
                                            <input type="text" id="editTechnicalrussian_title" name="russian_title"
                                                placeholder="Enter name">

                                            <label for="details">Russian Details</label>
                                            <textarea name="russian_details" id="editTechnicalrussian_details"
                                                class="tinymce"></textarea><br />

                                            <button type="submit" class="btn btn-primary">Update</button>
                                            <button type="reset" class="btn btn-secondary"
                                                data-dismiss="modal">Clear</button>
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
                                $totalRecords = getTotalTechnicalAnalysis();
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
            function deletetechnicalanalysis() {
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
                        data: { type: 'delete-technical-analysis', ids: ids, page: currentPage },
                        success: function (res) {
                            console.log("cddsdddddddddddddddddddd", res);
                            var successMessageDiv = document.getElementById('success-message');
                            successMessageDiv.innerHTML = 'Selected Records Deleted';
                            successMessageDiv.style.display = 'block';

                            var successMessageDiv = document.getElementById('success-message');
                            successMessageDiv.innerHTML = 'Selected technical Has Been Deleted';
                            successMessageDiv.style.display = 'block';
                            $('html, body').animate({ scrollTop: 0 }, 'fast');
                            setTimeout(function () {
                                window.location.reload();
                            }, 2500);
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
                deleteAllButton.style = checkboxesChecked() ? 'active' : 'disabled';
            }

            function checkboxesChecked() {
                var checkboxes = document.querySelectorAll('input[name="selectedRows[]"]');
                var checkedCount = 0;

                checkboxes.forEach(function (checkbox) {
                    if (checkbox.checked) {
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
                var form = document.getElementById('technicalForm');
                form.submit();
            }
            function viewTechnicalAnalysis(id, view) {
                $.ajax({
                    type: 'POST',
                    url: 'includes/softwareinclude/ajax.php',
                    data: { viewType: view, type: 'session-store-technical' },
                    success: function (response) {
                        window.location.href = 'view-technical-analysis.php?id=' + id;
                    },
                    error: function (error) {
                        console.error('Error setting session variable:', error);
                    }
                });
            }

        </script>

    </div>
</body>


</html>
<?php include('includes/footer.php'); ?>