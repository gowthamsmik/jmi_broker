<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .bgcolor {
            background-color: #00A65A;
            color: white;
        }

        /* Add your custom CSS styles here */
        /* Add your custom CSS styles here */
        .change-password {
            max-width: 400px;
            margin: 0 auto;
        }

        .form-row {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .btn.bgcolor {
            background-color: #00A65A;
            color: white;
        }

        .btn-secondary {
            background-color: #ccc;
            color: #333;
        }
    </style>
</head>

<body>
    <div class="modal fade m-0" id="changeuserpasswordPopup" tabindex="-1" role="dialog"
        aria-labelledby="editModalLabel" style="z-index:999px" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Change User Password</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="change-user-password">
                        <div class="form-row">
                            <label for="currentpassword">Current Password</label>
                            <input type="text" id="currentpass" name="currentpass" placeholder="Enter current password">
                        </div>
                        <div class="form-row">
                            <label for="newpassword">New Password</label>
                            <input type="text" id="newpass" name="newpass" placeholder="Enter new password">
                        </div>
                        <div class="form-row">
                            <label for="confirmnewpassword">Confirm New Password</label>
                            <input type="text" id="confirmnewpass" name="confirmnewpass"
                                placeholder="Enter confirm new password">
                        </div>
                        <div class="form-row">
                            <button type="submit" class="btn bgcolor">Update</button>
                            <button type="reset" value="Clear" class="btn btn-secondary">Clear</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <?php include('includes/footer.php'); ?>
</body>

</html>