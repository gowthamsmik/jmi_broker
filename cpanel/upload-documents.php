<!DOCTYPE html>
<html lang="en">
<?php
if (!isset($_SESSION['sessionuser'])) {
    session_start();
}


?>

<head>
    <?php include("../includes/softwareinclude/config.php") ?>
    <?php include("../includes/compatibility.php"); ?>
    <title>JMI | Control Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/layout.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/host-style.css">
    <link rel="shortcut icon" href="../assets/images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="../assets/images/favicon.ico" type="image/x-icon">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <style>
        .button_color {
            background-color: #FFBF10 !important;
        }

        .button_color:hover {
            background-color: #0342AB !important;
        }

        table {
            width: 90%;
        }

        .td {
            border: 2px solid black;
            text-align: center;
        }

        .header {
            border: 2px solid black;
            text-align: center;
            background-color: #FFBF10 !important;
            color: white;
            font-weight: '700';
            font-size: 24px;
        }

        table,
        tr,
        td {
            border: 2px solid black;
            height: 50px;
            border-collapse: collapse;
        }
    </style>
</head>

<body>
    <?php include("../includes/header.php");
         include("../includes/softwareinclude/functions.php");
    ?>
   

    <?php $SessionUserId = $_SESSION['sessionuserid'];
$userDocuments = getUserDocuments();
$userDocumentsCount = count($userDocuments);
$userbyadmin=getUser($SessionUserId);?>
    <div class='layout'>
        <?php include("sidebar.php"); ?>
        <div class="content">
            <p class="fs-3"><?php echo $lang['controlPanel']?> | <?php echo $lang['uploadDocuments']?></p>

            <p class="fs-4 mt-4"><?php echo $lang['profile_documents']?></p>
            <hr>
            <div class="px-3 mx-3 mt-4">
                <div>
                    <div class="d-flex align-items-center gap-2 row">
                        <div class="col-md-3"><label for="" class="form-label fs-5"><?php echo $lang['document_type']?></label></div>
                        <div class="col-md-7">
                            <select class="form-select rounded-3 box-shadow py-2 px-3" id="docType">
                                <option disabled>-Select-</option>
                                <optgroup label="Proof of ID">
                                    <option value="1">National Identity Card</option>
                                    <option value="2">Passport</option>
                                    <option value="3">Driver's License</option>
                                </optgroup>
                                <optgroup label="Proof of address">
                                    <option value="4">Bank Account Statement</option>
                                    <option value="5">Credit Card Statement</option>
                                    <option value="5">Phone Bill</option>
                                    <option value="6">Electricity Bill</option>
                                </optgroup>
                                <optgroup label="Card Scans">
                                    <option value="7">Credit Card Scan</option>
                                </optgroup>
                            </select>
                        </div>
                    </div>
                    <div class="d-flex align-items-center gap-2 row mt-4">
                        <div class="col-md-3"><label for="" class="form-label fs-5"><?php echo $lang['select_file']?></label></div>
                        <div class="col-md-7">
                            <input type="file" name="fileInput" id="fileInput"
                                class="form-control px-4 py-3 h-auto rounded-3 box-shadow border bg-white"
                                accept="image/*,application/pdf">
                        </div>
                    </div>
                    <div class="d-flex align-items-center gap-2 row mt-4">
                        <div class="col-md-3"><label for="" class="form-label fs-5"><?php echo $lang['document_description']?></label></div>
                        <div class="col-md-7">
                            <textarea name="" id="description" cols="10" rows="3"
                                class="form-control px-4 py-3 h-auto rounded-3 box-shadow border bg-white"></textarea>
                        </div>
                    </div>
                    <div class="d-flex align-items-center gap-2 row mt-4">
                        <div class="col-md-3"></div>
                        <div class="col-md-7">
                            <button class="btn button_color w-100 text-white" onclick="uploadDocument()"><?php echo $lang['document_update']?></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-5 table_scroll" style="display:<?php echo $userDocumentsCount > 0 ? '' : 'none' ?>">
                <div class="fs-3 border-bottom border-gray"><?php echo $lang['documnet_subheader']?></div>

                <div class="table m-5" style="width:800px;">
                    <table border="1">
                        <tr class="p-5">
                            <th class="header">#</th>
                            <th class="header"><?php echo $lang['document_filetype']?></th>
                            <th class="header"><?php echo $lang['document_file']?></th>
                            <th class="header"><?php echo $lang['document_description']?></th>
                            <th class="header"><?php echo $lang['document_status']?></th>
                            <th class="header"><?php echo $lang['document_action']?></th>
                        </tr>
                        <?php
                        // Assuming $userDocuments is an array containing user document data
                        $count=1;
                        foreach ($userDocuments as $document) {
                           
                            echo '<tr class="p-2">';
                            echo '<td class="td">' . $count . '</td>';
                            $typeLabels = [
                                '1' => 'National Identity Card',
                                '2' => 'Passport',
                                '3' => 'Driver\'s License',
                                '4' => 'Bank Account Statement',
                                '5' => 'Credit Card Statement',
                                '6' => 'Phone Bill',
                                '7' => 'Electricity Bill',
                            ];

                            $typeValue = $document['type'];

                            echo '<td class="td">' . ($typeLabels[$typeValue] ?? 'Unknown Type') . '</td>';
                            echo '<td class="td"><a class="btn button_color w-50 m-1 text-white" href="' . $document['document'] . '">' . $lang['document_view'] . '</a></td>';
                            echo '<td class="td">' . $document['description'] . '</td>';
                            $statusLabels = [
                                '1' => 'Approved',
                                '2' => 'InReview',
                                '3' => 'Declined',
                            ];
                            $statusValue = $document['status'];
                            echo '<td class="td">' . ($statusLabels[$statusValue] ?? 'Unknown Type') . '</td>';
                            echo '<td class="td"><a class="btn button_color w-60 text-white" onclick="confirmDelete(' . $document['id'] . ')">' . $lang['document_delete'] . '</a></td>';

                            // Add more columns as needed 
                            echo '</tr>';
                            $count++;
                        }
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <?php include("../includes/footer.php"); ?>
    <?php include("../includes/scripts.php"); ?>
</body>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    function uploadDocument() {
        var documentType = $('select[id=docType]').val();
        
        var documentFile = $('input[id=fileInput]')[0].files[0];
        var documentDescription = $('textarea[id=description]').val();
        // Validation checks
        if (!documentType) {
            alert('Please select a document type.');
            return;
        }

        if (!documentFile) {
            alert('Please choose a document file.');
            return;
        }

        if (!documentDescription.trim()) {
            alert('Please enter a document description.');
            return;
        }

        var formData = new FormData();
        formData.append('documentType', documentType);
        formData.append('documentFile', documentFile);
        formData.append('documentDescription', documentDescription);
        console.log("lop", documentFile);
        $.ajax({
            type: 'POST',
            url: 'includes/upload_documents.php',
            data: formData,
            contentType: false,
            processData: false,
            success: function (response) {
                if(response=="success")
                    alert("Document Uploaded Successfully");
                else{
                    alert(response)
                }
                 window.location.href = "";

            },
            error: function (error) {
                console.error(error);
                alert("Failed to Upload Document.");
            }
        });
    }
    
    function confirmDelete(documentId) {
        var confirmDelete = confirm("Are you sure you want to delete this document, You can't undo this?");
        var formData = new FormData();
        formData.append('document_id', documentId);
        if (confirmDelete) {
            // User clicked OK, perform AJAX call
           
            $.ajax({
                type: "POST",
                url: "includes/delete_documents.php", 
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) {
                  
                    if(response=="deleted")
                        alert("Document Deleted Successfully ");
                    else{
                        alert("Can't Delete the Document")
                    }
                    window.location.href = "";
                    console.log(response);
                },
                error: function(xhr, status, error) {
                    // Handle errors
                    alert("error");
                    //console.error(xhr.responseText);
                    console.log(error);
                }
            });
        } else {
            // User clicked Cancel, do nothing
           
        }
    }
</script>



</html>