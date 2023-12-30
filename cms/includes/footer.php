<footer class="app-footer">
    <div class="container text-center py-3">
        <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->


    </div>
</footer><!--//app-footer-->

</div><!--//app-wrapper-->


<!-- Javascript -->
<script src="assets/plugins/popper.min.js"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

<!-- Charts JS -->
<script src="assets/plugins/chart.js/chart.min.js"></script>
<script src="assets/js/index-charts.js"></script>

<!-- Page Specific JS -->
<script src="assets/js/app.js"></script>
<script src="assets/js/jquery.js"></script>
<script>
    var homepag = false;
    $(document).on('submit', '.settings-form', function (e) {
        if (homepag) {
            return;
        }
        e.preventDefault();
        console.log($(this).serialize())
        var forms = $(this).serialize();
        $.ajax({
            url: 'includes/softwareinclude/ajax.php',
            type: 'post',
            data: forms + '&type=page-save',
            success: function (res) {
                console.log(res);
                alert('Page Updated');
                window.location.href='all-lang-pages.php';
            }
        })
        homepag = true;
    })
    var homerupag = false;
    $(document).on('submit', '.settings-ru-form', function (e) {
        if (homerupag) {
            return;
        }
        e.preventDefault();
        console.log($(this).serialize())
        var forms = $(this).serialize();
        $.ajax({
            url: 'includes/softwareinclude/ajax.php',
            type: 'post',
            data: forms + '&type=page-ru-save',
            success: function (res) {
                console.log(res);
                alert('Page Updated');
                window.location.href='all-lang-pages.php';
            }
        })
        homerupag = true;
    })
    var homearpag = false;
    $(document).on('submit', '.settings-ar-form', function (e) {
        if (homearpag) {
            return;
        }
        e.preventDefault();
        console.log($(this).serialize())
        var forms = $(this).serialize();
        $.ajax({
            url: 'includes/softwareinclude/ajax.php',
            type: 'post',
            data: forms + '&type=page-ar-save',
            success: function (res) {
                console.log(res);
                alert('Page Updated');
                window.location.href='all-lang-pages.php';
            }
        })
        homearpag = true;
    })
    var secform = false;
    $(document).on('submit', '.section-form', function (e) {
        if (secform) {
            return;
        }
        e.preventDefault();
        console.log($(this).serialize())
        var forms = $(this).serialize();
        $.ajax({
            url: 'includes/softwareinclude/ajax.php',
            type: 'post',
            data: forms + '&type=section-save',
            success: function (res) {
                console.log(res);
                alert('Section Updated');
                window.location.href='all-lang-sections.php';
            }
        })
        secform = true;
    })
    var secruform = false;
    $(document).on('submit', '.section-ru-form', function (e) {
        if (secruform) {
            return;
        }
        e.preventDefault();
        console.log($(this).serialize())
        var forms = $(this).serialize();
        $.ajax({
            url: 'includes/softwareinclude/ajax.php',
            type: 'post',
            data: forms + '&type=section-ru-save',
            success: function (res) {
                console.log(res);
                alert('Section Updated');
                window.location.href='all-lang-sections.php';
            }
        })
        secruform = true;
    })
    var secarform = false;
    $(document).on('submit', '.section-ar-form', function (e) {
        if (secarform) {
            return;
        }
        e.preventDefault();
        console.log($(this).serialize())
        var forms = $(this).serialize();
        $.ajax({
            url: 'includes/softwareinclude/ajax.php',
            type: 'post',
            data: forms + '&type=section-ar-save',
            success: function (res) {
                console.log(res);
                alert('Section Updated');
                window.location.href='all-lang-sections.php';
            }
        })
        secarform = true;
    })
    var addfaq = false;
    $(document).on('submit', '.add-faq', function (e) {
        if (addfaq) {
            return;
        }
        e.preventDefault();
        var forms = $(this).serialize();
        $.ajax({
            url: 'includes/softwareinclude/ajax.php',
            type: 'post',
            data: forms + '&type=add-faq',
            success: function (res) {
                console.log(res);
                alert('FAQ Added');
                window.location.href = "all-lang-faqs.php"
            }
        })
        addfaq = true;
    })
    var addfaq = false;
    $(document).on('submit', '.add-ru-faq', function (e) {
        if (addfaq) {
            return;
        }
        e.preventDefault();
        var forms = $(this).serialize();
        $.ajax({
            url: 'includes/softwareinclude/ajax.php',
            type: 'post',
            data: forms + '&type=add-ru-faq',
            success: function (res) {
                console.log(res);
                alert('FAQ Added');
                window.location.href = "all-lang-faqs.php"
            }
        })
        addfaq = true;
    })
    var addfaq = false;
    $(document).on('submit', '.add-ar-faq', function (e) {
        if (addfaq) {
            return;
        }
        e.preventDefault();
        var forms = $(this).serialize();
        $.ajax({
            url: 'includes/softwareinclude/ajax.php',
            type: 'post',
            data: forms + '&type=add-ar-faq',
            success: function (res) {
                console.log(res);
                alert('FAQ Added');
                window.location.href = "all-lang-faqs.php"
            }
        })
        addfaq = true;
    })
    function validateField(fieldId) {
        var field = $('#' + fieldId);
        var errorMessage = $('#' + fieldId + 'Error');
        var value = field.val();
        if (value === null || value === '') {
            errorMessage.text('Please enter a value for this field.');
            return false;
        }
        return true;
    }

    function accountValidation() {
        $('.error-message').text('');
        var isValid = true;
        var fieldIds = ['accountGroup', 'accountType', 'leverage', 'currency', 'password', 'investerpassword', 'websiteaccountid'];
        for (var i = 0; i < fieldIds.length; i++) {
            isValid = validateField(fieldIds[i]) && isValid;
        }
        return isValid;
    }
    var addacc = false;
    $(document).on('submit', '.add-account', function (e) {
        e.preventDefault();
        if (addacc) {
            return;
        }
        // Perform validation
        if (accountValidation()) {


            var forms = $(this).serialize();
            console.log("hbjhbdcjh", forms);
            $.ajax({
                url: 'includes/softwareinclude/ajax.php',
                type: 'post',
                data: forms + '&type=add-account',
                success: function (res) {
                    console.log(res);
                    alert('Account Added');
                    history.back();
                }
            });
        }
        addacc = true;
    });
    function fundreqValidation() {
        $('.error-message').text('');
        var isValid = true;
        var fieldIds = ['account', 'amount', 'currency', 'type', 'via', 'websiteaccountid'];
        for (var i = 0; i < fieldIds.length; i++) {
            isValid = validateField(fieldIds[i]) && isValid;
        }
        return isValid;
    }
    var addfunds = false;
    $(document).on('submit', '.add-fund-requests', function (e) {
        if (addfunds) {
            return;
        }
        e.preventDefault();
        if (fundreqValidation()) {

            var forms = $(this).serialize();
            $.ajax({
                url: 'includes/softwareinclude/ajax.php',
                type: 'post',
                data: forms + '&same=add-fund-requests',
                success: function (res) {
                    console.log(res);
                    alert('Fund Request Added');
                    history.back();
                }
            })
        }
        addfunds = true;
    })
    var upfaq = false;
    $(document).on('submit', '.update-faq', function (e) {
        if (upfaq) {
            return;
        }
        e.preventDefault();
        var forms = $(this).serialize();
        $.ajax({
            url: 'includes/softwareinclude/ajax.php',
            type: 'post',
            data: forms + '&type=update-faq',
            success: function (res) {
                console.log(res);
                alert('FAQ Updated');
                window.location.href = "all-lang-faqs.php"
            }
        })
        upfaq = true;
    })
    var uprufaq = false;
    $(document).on('submit', '.update-ru-faq', function (e) {
        if (uprufaq) {
            return;
        }
        e.preventDefault();
        var forms = $(this).serialize();
        $.ajax({
            url: 'includes/softwareinclude/ajax.php',
            type: 'post',
            data: forms + '&type=update-ru-faq',
            success: function (res) {
                console.log(res);
                alert('FAQ Updated');
                window.location.href = "all-lang-faqs.php"
            }
        })
        uprufaq = true;
    })
    var uparfaq = false;
    $(document).on('submit', '.update-ar-faq', function (e) {
        if (uparfaq) {
            return;
        }
        e.preventDefault();
        var forms = $(this).serialize();
        $.ajax({
            url: 'includes/softwareinclude/ajax.php',
            type: 'post',
            data: forms + '&type=update-ar-faq',
            success: function (res) {
                console.log(res);
                alert('FAQ Updated');
                window.location.href = "all-lang-faqs.php"
            }
        })
        uparfaq = true;
    })
    var updateweb = false;
    $(document).on('submit', '.update-website-account', function (e) {
        if (updateweb) {
            return;
        }
        e.preventDefault();
        var id = $('#notification_id');
        var user_id = $('#user_id').val();
        var account_id = $('#account_id').val();
        var account_type = $('#account_type').val();
        var account_group = $('#account_group').val();
        var leverage = $('#leverage').val();

        // if (!user_id || !account_id || !account_type || !account_group || !leverage) {
        //     // Display an alert for validation errors
        //     alert('Please fill in all required fields.');
        //     return;
        // }
        var forms = $(this).serialize();
        $.ajax({
            url: 'includes/softwareinclude/ajax.php',
            type: 'post',
            data: forms + '&type=update-website-account',
            success: function (res) {
                console.log(res);
                alert(' Account Updated');
                window.location.reload();
            }
        })
        updateweb = true;
    })
    var updatedemo = false;
    $(document).on('submit', '.update-demo-account', function (e) {
        if (updatedemo) {
            return;
        }
        e.preventDefault();
        var forms = $(this).serialize();
        $.ajax({
            url: 'includes/softwareinclude/ajax.php',
            type: 'post',
            data: forms + '&type=update-demo-account',
            success: function (res) {
                console.log(res);
                alert('demo Account Updated');
                window.location.href = "demo-account.php"
            }
        })
        updatedemo = true;
    })
    var addnewses = false;
    $(document).on('submit', '.add-news', function (e) {
        if (addnewses) {
            return;
        }
        e.preventDefault();
        var forms = $(this).serialize();
        $.ajax({
            url: 'includes/softwareinclude/ajax.php',
            type: 'post',
            data: forms + '&type=add-news',
            success: function (res) {
                console.log(res);
                alert('News Added');
                //window.location.href = "all-news.php"
            }
        })
        addnewses = true;
    })
    var upnew = false;
    $(document).on('submit', '.update-news', function (e) {
        if (upnew) {
            return;
        }
        e.preventDefault();
        var forms = $(this).serialize();
        $.ajax({
            url: 'includes/softwareinclude/ajax.php',
            type: 'post',
            data: forms + '&type=update-news',
            success: function (res) {
                console.log(res);
                alert('News Updated');
                window.location.href = "all-news.php"
            }
        })
        upnew = true;
    })
    var addfundanal = false;
    $(document).on('submit', '.add-fanalysis', function (e) {
        if (addfundanal) {
            return;
        }
        e.preventDefault();
        var forms = $(this).serialize();
        $.ajax({
            url: 'includes/softwareinclude/ajax.php',
            type: 'post',
            data: forms + '&type=add-fanalysis',
            success: function (res) {
                console.log(res);
                alert('News Added');
                window.location.reload();
            }
        })
        addfundanal = true;
    })
    var updatefund = false;
    $(document).on('submit', '.update-fanalysis', function (e) {
        if (updatefund) {
            return;
        }
        e.preventDefault();
        var forms = $(this).serialize();
        $.ajax({
            url: 'includes/softwareinclude/ajax.php',
            type: 'post',
            data: forms + '&type=update-fanalysis',
            success: function (res) {
                console.log(res);
                alert('News Updated');
                window.location.href = "all-f-analysis.php"
            }
        })
        updatefund = true;
    })
    var fileup = false;
    $(document).on('change', 'input[type="file"]', function (e) {
        if (fileup) { return }
        //console.log($(this).attr('rel'));
        var rel_class = $(this).attr('rel');
        var props = $(this).prop('files');
        var file_data = props[0];
        var form_data = new FormData();
        form_data.append('file', file_data);
        form_data.append('type', 'upload_file');

        $.ajax({
            url: 'includes/softwareinclude/ajax.php',
            dataType: 'text',  // <-- what to expect back from the PHP script, if anything
            cache: false,
            contentType: false,
            processData: false,
            data: form_data,
            type: 'post',
            success: function (res) {
                $('input[name="' + rel_class + '"]').val(res);
            }
        });
        fileup = true;
    })
    var updatefundreq = false;
    $(document).on('submit', '.update-fund-requests', function (e) {
        if (updatefundreq) {
            return;
        }
        e.preventDefault();
        var forms = $(this).serialize();
        $.ajax({
            url: 'includes/softwareinclude/ajax.php',
            type: 'post',
            data: forms + '&same=update-fund-requests',
            success: function (res) {
                console.log(res);
                alert('Fund Requests Account Updated');
                history.back();
            }
        })
        updatefundreq = true;
    })
    var addmail = false;
    $(document).on('submit', '.add-mailer', function (e) {
        if (addmail) {
            return;
        }
        e.preventDefault();
        var forms = $(this).serialize();
        console.log(forms)
        $.ajax({
            url: 'includes/softwareinclude/ajax.php',
            type: 'post',
            data: forms + '&type=add-mailer',
            success: function (res) {
                console.log(res);
                alert('Mail list added Successfully');
                window.location.href = "mailer.php"
            }
        })
        addmail = true;
    })
    var allsearch = false;
    $(document).on('submit', '.all-search-urls', function (e) {
        if (allsearch) {
            return;
        }
        e.preventDefault();
        var forms = $(this).serialize();
        console.log(forms)
        $.ajax({
            url: 'includes/softwareinclude/ajax.php',
            type: 'post',
            data: forms + '&type=all-search-urls',
            success: function (res) {
                console.log(res);
                alert('search added Successfully');
                window.location.href = "all-search-urls.php"
            }
        })
        allsearch = true;
    })
    var addtech = false;
    $(document).on('submit', '.add-technical', function (e) {
        if (addtech) {
            return;
        }
        e.preventDefault();
        var forms = $(this).serialize();
        //echo("ddddddddddddddddddddddddddddddddddd");
        $.ajax({
            url: 'includes/softwareinclude/ajax.php',
            type: 'post',
            data: forms + '&type=add-technical',
            success: function (res) {
                console.log(res);
                var successMessageDiv = document.getElementById('success-message');
                successMessageDiv.innerHTML = ' technical Has Been Added';
                successMessageDiv.style.display = 'block';
                var successMessageDiv = document.getElementById('success-message');
                successMessageDiv.innerHTML = ' technical Has Been Added';
                successMessageDiv.style.display = 'block';
                $('html, body').animate({ scrollTop: 0 }, 'fast');
                setTimeout(function () {
                    window.location.reload();
                }, 3000);
            }
        })
        addtech = true;
    })
    var addfa = false;
    $(document).on('submit', '.add-fundamental-analysis', function (e) {
        if (addfa) {
            return;
        }
        e.preventDefault();
        var forms = new FormData(this);
        forms.append('type', 'add-fundamental-analysis');

        $.ajax({
            url: 'includes/softwareinclude/ajax.php',
            type: 'post',
            data: forms,
            contentType: false,
            processData: false,
            success: function (res) {
                console.log("hhhhhh", res);

                var successMessageDiv = document.getElementById('success-message');
                successMessageDiv.innerHTML = 'Fundamental  Has Been Added';
                successMessageDiv.style.display = 'block';
                $('html, body').animate({ scrollTop: 0 }, 'fast');
                setTimeout(function () {
                    window.location.reload();
                }, 3000);
            }
        });
        addfa = true;
    });
    var techsts = false;
    $(document).on('click', '.technicalStatus', function (e) {
        if (techsts) {
            return;
        }
        e.preventDefault();
        var technicalStatus = $(this).data('technicalstatus');
        var technicalId = $(this).data('id');
        console.log("technicalStatus===========", technicalStatus);
        console.log("technicalId=============", technicalId);
        $.ajax({
            url: 'includes/softwareinclude/ajax.php',
            type: 'post',
            data: {
                type: 'update-technical-status',
                technicalStatus: technicalStatus,
                technicalId: technicalId
            },
            success: function (res) {
                console.log(res);
                var successMessageDiv = document.getElementById('success-message');
                successMessageDiv.innerHTML = 'Selected technical Has Been Updated';
                successMessageDiv.style.display = 'block';
                $('html, body').animate({ scrollTop: 0 }, 'fast');
                setTimeout(function () {
                    window.location.reload();
                }, 3000);

            },
            error: function (err) {
                console.error(err);
                alert('Error updating technical analysis');
            }
        });
        techsts = true;
    });
    $(document).on('click', '.editButton', function () {
        var technicalId = $(this).data('id');
        console.log("id===========", technicalId);
        $.ajax({
            url: 'includes/softwareinclude/ajax.php',
            type: 'post',
            data: { type: 'get-technical-analysis-details', id: technicalId },
            success: function (res) {
                var jsonStartIndex = res.indexOf('{');
                var jsonString = res.substring(jsonStartIndex);
                try {
                    var details = JSON.parse(jsonString);
                    console.log("Parsed JSON:", details);
                    $('#editTechnicalId').val(details.id);
                    $('#editTechnicaltype').val(details.technicaltype);
                    $('#editTechnicaltitle').val(details.title);
                    $('#editTechnicalstatus').val(details.technicalstatus);
                    tinymce.get('details').setContent(details.details);
                    $('#editTechnicalarabic_title').val(details.arabic_title);
                    tinymce.get('editTechnicalarabic_details').setContent(details.arabic_details);
                    $('#editTechnicalrussian_title').val(details.russian_title);
                    tinymce.get('editTechnicalrussian_details').setContent(details.russian_details);
                    $('#editModal').modal('show');

                } catch (error) {
                    console.error('Error parsing JSON:', error);
                    alert('Error fetching Technical Analysis details');
                }
            },

            error: function (err) {
                console.error(err);
            }
        });
    });
    $(document).on('click', '.editfundamentalButton', function () {
        var technicalId = $(this).data('id');
        console.log("id===========", technicalId);
        $.ajax({
            url: 'includes/softwareinclude/ajax.php',
            type: 'post',
            data: { type: 'get-fundamental-analysis-details', id: technicalId },
            success: function (res) {
                var jsonStartIndex = res.indexOf('{');
                var jsonString = res.substring(jsonStartIndex);
                try {
                    var details = JSON.parse(jsonString);
                    console.log("Parsed JddddddddddddSON:", details);
                    $('#editFundamentalId').val(details.id);
                    $('#editheading').val(details.heading);
                    $('#editdescription').val(details.description);
                    $('#editfileToUpload').attr('src', details.image);
                    $('#editfundamentalModal').modal('show');

                } catch (error) {
                    console.error('Error parsing JSON:', error);
                    alert('Error fetching fundamnetal Analysis details');
                }
            },

            error: function (err) {
                console.error(err);
            }
        });
    });
    $('#editModal').on('hide.bs.modal', function () {
        $('body').removeClass('modal-open');
        $('.modal-backdrop').remove();
    });
    $('#editoffersPopup').on('hide.bs.modal', function () {
        $('body').removeClass('modal-open');
        $('.modal-backdrop').remove();
    });
    $('#editfundamentalModal').on('hide.bs.modal', function () {
        $('body').removeClass('modal-open');
        $('.modal-backdrop').remove();
    });
    $('#editadminPopup').on('hide.bs.modal', function () {
        $('body').removeClass('modal-open');
        $('.modal-backdrop').remove();
    });
    $('#donestatus').on('hide.bs.modal', function () {
        $('body').removeClass('modal-open');
        $('.modal-backdrop').remove();
    });
    $('#rejectstatus').on('hide.bs.modal', function () {
        $('body').removeClass('modal-open');
        $('.modal-backdrop').remove();
    });
    var uptech = false;
    $(document).on('submit', '.update-technical', function (e) {
        if (uptech) {
            return;
        }
        e.preventDefault();
        var forms = $(this).serialize();
        console.log("forms", forms);
        console.log("hey")
        $.ajax({
            url: 'includes/softwareinclude/ajax.php',
            type: 'post',
            data: forms + '&type=update-technical',
            success: function (res) {
                console.log(res);

                $('#editModal').modal('hide');
                $('.modal-backdrop').remove();
                var successMessageDiv = document.getElementById('success-message');
                successMessageDiv.innerHTML = 'Selected technical Has Been Updated';
                successMessageDiv.style.display = 'block';
                $('html, body').animate({ scrollTop: 0 }, 'fast');
                setTimeout(function () {
                    window.location.reload();
                }, 2500);
            }
        })
        uptech = true;
    })
    var upfa = false;
    $(document).on('submit', '.update-fundamental-analysis', function (e) {
        if (upfa) {
            return;
        }
        e.preventDefault();
        var forms = new FormData(this);
        forms.append('type', 'update-fundamental-analysis');

        $.ajax({
            url: 'includes/softwareinclude/ajax.php',
            type: 'post',
            data: forms,
            contentType: false,
            processData: false,
            success: function (res) {
                console.log("hhhhhh", res);

                var successMessageDiv = document.getElementById('success-message');
                successMessageDiv.innerHTML = 'Fundamental  Has Been Updated';
                successMessageDiv.style.display = 'block';
                $('html, body').animate({ scrollTop: 0 }, 'fast');
                setTimeout(function () {
                    window.location.reload();
                }, 3000);
            }
        });
        upfa = true;
    });

    var addoff = false;
    $(document).on('submit', '.add-offers', function (e) {
        if (addoff) {
            return;
        }
        e.preventDefault();
        var forms = new FormData(this);
        console.log("forms", forms);

        forms.append('type', 'add-offers');

        $.ajax({
            url: 'includes/softwareinclude/ajax.php',
            type: 'post',
            data: forms,
            contentType: false,
            processData: false,
            success: function (res) {
                console.log(res);
                var successMessageDiv = document.getElementById('success-message');
                successMessageDiv.innerHTML = 'Offers Has Been Added';
                successMessageDiv.style.display = 'block';
                $('html, body').animate({ scrollTop: 0 }, 'fast');
                setTimeout(function () {
                    window.location.reload();
                }, 3000);

            }
        });
        addoff = true;
    });
    // $(document).on('submit', '.add-news', function (e) {
    //     e.preventDefault();
    //     var forms = new FormData(this);
    //     forms.append('type', 'add-news');

    //     $.ajax({
    //         url: 'includes/softwareinclude/ajax.php',
    //         type: 'post',
    //         data: forms,
    //         contentType: false,
    //         processData: false,
    //         success: function (res) {
    //             console.log(res);
    //             alert('News analysis added Successfully');
    //             window.location.href = "ofnewsfers.php"
    //         }
    //     });
    // });
    var editoff = false;
    $(document).on('click', '.editoffersButton', function () {
        if (editoff) {
            return;
        }
        var technicalId = $(this).data('id');
        console.log("id===========", technicalId);
        $.ajax({
            url: 'includes/softwareinclude/ajax.php',
            type: 'post',
            data: { type: 'get-offers-analysis-details', id: technicalId },
            success: function (res) {
                var jsonStartIndex = res.indexOf('{');
                var jsonString = res.substring(jsonStartIndex);
                try {
                    var details = JSON.parse(jsonString);
                    console.log("Parsed JSON:", details);
                    $('#offerId').val(details.id);
                    $('#offerType').val(details.offertype);
                    $('#offerTitle').val(details.title);
                    $('#offerStatus').val(details.offerstatus);
                    tinymce.get('offerDetails').setContent(details.details);
                    $('#offerArabic_title').val(details.arabic_title);
                    tinymce.get('offerArabic_details').setContent(details.arabic_details);
                    $('#offersrussiantitle').val(details.russian_title);
                    tinymce.get('offersrussiandetails').setContent(details.russian_details);

                    $('#editoffersPopup').modal('show');

                } catch (error) {
                    console.error('Error parsing JSON:', error);
                    alert('Error fetching Technical Analysis details');
                }
            },

            error: function (err) {
                console.error(err);
            }
        });
        editoff = true;
    });
    var editoffer = false;
    $(document).on('submit', '.update-offers', function (e) {
        if (editoffer) {
            return;
        }
        e.preventDefault();
        var forms = $(this).serialize();
        console.log("forms", forms);
        console.log("hey")
        $.ajax({
            url: 'includes/softwareinclude/ajax.php',
            type: 'post',
            data: forms + '&type=update-offers',
            success: function (res) {
                console.log(res);
                $('#editoffersPopup').modal('hide');
                $('.modal-backdrop').remove();
                var successMessageDiv = document.getElementById('success-message');
                successMessageDiv.innerHTML = 'Selected technical Has Been Updated';
                successMessageDiv.style.display = 'block';
                $('html, body').animate({ scrollTop: 0 }, 'fast');
                setTimeout(function () {
                    window.location.reload();
                }, 3000);

            }
        })
        editoffer = true;
    })
    var offsts = false;
    $(document).on('click', '.offerStatus', function (e) {
        if (offsts) {
            return;
        }
        e.preventDefault();
        var offerStatus = $(this).data('offerstatus');
        console.log("cnijdsncijwncw", offerStatus);
        var offerId = $(this).data('id');
        $.ajax({
            url: 'includes/softwareinclude/ajax.php',
            type: 'post',
            data: {
                type: 'update-offer-status',
                offerStatus: offerStatus,
                offerId: offerId
            },
            success: function (res) {
                console.log(res);
                var successMessageDiv = $('#success-message'); // Assuming success-message is the ID of your message div
                successMessageDiv.html('Selected technical Has Been Updated');
                successMessageDiv.show();
                $('html, body').animate({ scrollTop: 0 }, 'fast');
                setTimeout(function () {
                    window.location.reload();
                }, 3000);

            },
            error: function (err) {
                console.error(err);
                alert('Error updating technical analysis');
            }
        });
        offsts = true;
    });
    var addwebad = false;
    $(document).on('submit', '.add-website-admins', function (e) {
        if (addwebad) {
            return;
        }
        e.preventDefault();
        var forms = $(this).serialize();
        console.log(forms)
        $.ajax({
            url: 'includes/softwareinclude/ajax.php',
            type: 'post',
            data: forms + '&type=add-website-admins',
            success: function (res) {
                console.log(res, "response");
                var successMessageDiv = document.getElementById('success-message');
                var errorMessageDiv = document.getElementById('error-message');

                // if (res === 'success') {
                successMessageDiv.innerHTML = 'Admin Has Been Added';
                successMessageDiv.style.display = 'block';
                $('html, body').animate({ scrollTop: 0 }, 'fast');
                setTimeout(function () {
                    window.location.reload();
                }, 2500);
                // }
            },
            // error: function (xhr, status, error) {
            //     console.error(xhr.responseText);
            //     var errorMessageDiv = document.getElementById('error-message');
            //     errorMessageDiv.innerHTML = 'Error: ' + xhr.responseText;
            //     errorMessageDiv.style.display = 'block';
            // }
        });
        addwebad = true;
    });

    var editad = false;
    $(document).on('click', '.editadmin', function () {
        if (editad) {
            return;
        }
        var adminId = $(this).data('id');
        console.log("adminId===========", adminId);
        $.ajax({
            url: 'includes/softwareinclude/ajax.php',
            type: 'post',
            data: { type: 'editadmin', id: adminId },
            dataType: 'json',  // Specify the expected data type
            success: function (res) {
                console.log("fun1", res);
                if (res.error) {
                    console.error('Error from server:', res.error);
                } else {
                    $('#adminid').val(res.id);
                    $('#adminname').val(res.name);
                    $('#adminemail').val(res.email);
                    $('#adminroll').val(res.user_role);
                    $('#editadminPopup').modal('show');
                }
            },
            error: function (err) {
                console.error('AJAX error:', err);
            }
        });
        editad = true;
    });
    var updatead = false;
    $(document).on('submit', '.update-admins', function (e) {
        if (updatead) {
            return;
        }
        e.preventDefault();
        var forms = $(this).serialize();
        console.log(forms)
        $.ajax({
            url: 'includes/softwareinclude/ajax.php',
            type: 'post',
            data: forms + '&type=update-admin',
            success: function (res) {
                console.log(res, "response");
                var successMessageDiv = document.getElementById('success-message');
                var errorMessageDiv = document.getElementById('error-message');
                successMessageDiv.innerHTML = 'Admin Has Been Updated';
                successMessageDiv.style.display = 'block';
                $('html, body').animate({ scrollTop: 0 }, 'fast');
                setTimeout(function () {
                    window.location.reload();
                }, 2500);
            },
        })
        updatead = true;
    })
    $(document).on('click', '.openadminpopup', function () {
        console.log("popup");
        $('#changepasswordPopup').modal({
            backdrop: 'false'
        });
        var but = true
        mod.style = but ? 'display:inherit' : "display:none"
    });
    $(document).on('click', '.openuserpopup', function () {
        console.log("popup");
        $('#changeuserpasswordPopup').modal({
            backdrop: 'false'
        });
    });
    var formSubmitted = false;

    $(document).on('submit', '.change-password', function (e) {
        e.preventDefault();
        if (formSubmitted) {
            // If the form has already been submitted, do nothing
            return;
        }
        console.log("jjjjjjjjjjjj");
        var currentPassword = $('#currentpassword').val();
        var newPassword = $('#newpassword').val();
        var confirmNewPassword = $('#confirmnewpassword').val();
        console.log("ffdhvdv");
        if (currentPassword === '' || newPassword === '' || confirmNewPassword === '') {
            alert('All fields are required.');
            return;
        }

        if (newPassword !== confirmNewPassword) {
            alert('New passwords do not match.');
            return;
        }

        var forms = $(this).serialize();
        $.ajax({
            url: 'includes/softwareinclude/ajax.php',
            type: 'post',
            data: forms + '&type=change-password',
            dataType: 'json',
            success: function (response) {
                if (response.status === 'success') {
                    alert("Password updated successfully");
                    $('#changepasswordPopup').on('hide.bs.modal', function () {
                        $('body').removeClass('modal-open');
                        $('.modal-backdrop').remove();
                    });
                }
                else {
                    alert("Error: " + response.message);
                }
            },
            error: function (xhr, status, error) {
                console.log("AJAX Error:", error);
            }
        });

        // Prevent the default form submission and stop propagation
        formSubmitted = true;
    });
    var formSub = false;

    $(document).on('submit', '.change-user-password', function (e) {
        e.preventDefault();
        if (formSub) {
            return;
        }
        formSub = true;

        var email = $('#email').val();
        var newPassword = $('#newpass').val();
        var confirmNewPassword = $('#confirmnewpass').val();

        if (email === '' || newPassword === '' || confirmNewPassword === '') {
            alert('All fields are required.');

            return;
        }

        if (newPassword !== confirmNewPassword) {
            alert('New passwords do not match.');

            return;
        }

        if (newPassword.length < 8) {
            alert('Password must have at least 8 characters');

            return;
        }

        var forms = $(this).serialize();
        $.ajax({
            url: 'includes/softwareinclude/ajax.php',
            type: 'post',
            data: forms + '&type=changuspassw',
            dataType: 'json',
            success: function (response) {
                if (response.status === 'success') {
                    alert("Password updated successfully");
                    window.location.reload();
                    $('#changepasswordPopup').on('hide.bs.modal', function () {
                        $('body').removeClass('modal-open');
                        $('.modal-backdrop').remove();
                    });
                }
                else {
                    alert("Error: " + response.message);
                }
            },
            error: function (xhr, status, error) {
                console.log("AJAX Error:", error);
            }
        });
    });
    var enslide = false;
    $(document).on('submit', '.en-slideshow', function (e) {
        if (enslide) {
            return;
        }
        e.preventDefault();
        var forms = new FormData(this);
        forms.append('type', 'en-slideshow');

        $.ajax({
            url: 'includes/softwareinclude/ajax.php',
            type: 'post',
            data: forms,
            contentType: false,
            processData: false,
            success: function (res) {
                console.log(res);
                var response = JSON.parse(res);
                if (response.error) {
                    alert('Error: ' + "Slider Update Error");
                    window.location.reload();
                } else {
                    alert('Success: ' + "Slider Update Successfully");
                    window.location.reload();
                }
            },
            error: function (err) {
                console.error(err);
                alert('Error in AJAX call');
            }
        });
        enslide = true;
    })
    var addenslide = false;
    $(document).on('submit', '.add-en-slideshow', function (e) {
        if (addenslide) {
            return;
        }
        e.preventDefault();
        var forms = new FormData(this);
        forms.append('type', 'add-en-slideshow');

        $.ajax({
            url: 'includes/softwareinclude/ajax.php',
            type: 'post',
            data: forms,
            contentType: false,
            processData: false,
            success: function (res) {
                console.log(res);
                var response = JSON.parse(res);
                if (response.error) {
                    alert('Error: ' + "Slider Added Error" + respose);
                    window.location.reload();
                } else {
                    alert('Success: ' + "Slider Added Successfully");
                    window.location.reload();
                }
            },
            error: function (err) {
                console.error(err);
                alert('Error in AJAX call');
            }
        });
        addenslide = true;
    })
    var addarslide = false;
    $(document).on('submit', '.add-ru-slideshow', function (e) {
        if (addarslide) {
            return;
        }
        e.preventDefault();
        var forms = new FormData(this);
        forms.append('type', 'add-ru-slideshow');

        $.ajax({
            url: 'includes/softwareinclude/ajax.php',
            type: 'post',
            data: forms,
            contentType: false,
            processData: false,
            success: function (res) {
                console.log(res);
                var response = JSON.parse(res);
                if (response.error) {
                    alert('Error: ' + "Slider Added Error" + respose);
                    window.location.reload();
                } else {
                    alert('Success: ' + "Slider Added Successfully");
                    history.back();
                }
            }
            // error: function (err) {
            //     console.error(err);
            //     alert('Error in AJAX call');
            // }
        });
        addarslide = true;
    })
    var ruslide = false;
    $(document).on('submit', '.ru-slideshow', function (e) {
        if (ruslide) {
            return;
        }
        e.preventDefault();
        var forms = new FormData(this);
        forms.append('type', 'ru-slideshow');

        $.ajax({
            url: 'includes/softwareinclude/ajax.php',
            type: 'post',
            data: forms,
            contentType: false,
            processData: false,
            success: function (res) {
                console.log(res);
                var response = JSON.parse(res);
                if (response.error) {
                    alert('Error: ' + "Slider Update Error");
                    window.location.reload();
                } else {
                    alert('Success: ' + "Slider Update Successfully");
                    history.back();
                }
            },
            error: function (err) {
                console.error(err);
                alert('Error in AJAX call');
            }
        });
        ruslide = true;
    })
    var addarslide = false;
    $(document).on('submit', '.add-ar-slideshow', function (e) {
        if (addarslide) {
            return;
        }
        e.preventDefault();
        var forms = new FormData(this);
        forms.append('type', 'add-ar-slideshow');

        $.ajax({
            url: 'includes/softwareinclude/ajax.php',
            type: 'post',
            data: forms,
            contentType: false,
            processData: false,
            success: function (res) {
                console.log(res);
                var response = JSON.parse(res);
                if (response.error) {
                    alert('Error: ' + "Slider Added Error" + respose);
                    window.location.reload();
                } else {
                    alert('Success: ' + "Slider Added Successfully");
                    history.back();
                }
            }
            // error: function (err) {
            //     console.error(err);
            //     alert('Error in AJAX call');
            // }
        });
        addarslide = true;
    })
    var sts = false
    $(document).on('submit', '.update-status', function (e) {
        e.preventDefault();
        if (sts) {
            return;
        }
        var forms = $(this).serialize();
        $.ajax({
            url: 'includes/softwareinclude/ajax.php',
            type: 'post',
            data: forms + '&type=update-status',
            success: function (res) {
                console.log(res);
                window.location.reload();
            }
        })
        sts = true;
    })
    var rej = false
    $(document).on('submit', '.update-rej-status', function (e) {
        e.preventDefault();
        if (rej) {
            return;
        }
        var forms = $(this).serialize();
        $.ajax({
            url: 'includes/softwareinclude/ajax.php',
            type: 'post',
            data: forms + '&type=update-rej-status',
            success: function (res) {
                console.log(res);
                window.location.reload();
            }
        })
        rej = true;
    })
    var pack = false;
    $(document).on('submit', '.add-package', function (e) {
        if (pack) {
            return;
        }
        e.preventDefault();
        var name = $('input[name="name"]').val().trim();
        if (name === '') {
            alert('Please enter a name.');
            return;
        }

        var price = $('input[name="price"]').val().trim();
        if (price === '' || isNaN(price)) {
            alert('Please enter a valid price.');
            return;
        }

        var discount_line = $('input[name="discount_line"]').val().trim();
        if (discount_line === '') {
            alert('Please enter a discount line.');
            return;
        }

        var tag_line = $('input[name="tag_line"]').val().trim();
        if (tag_line === '') {
            alert('Please enter a tag line.');
            return;
        }

        var description = $('textarea[name="description"]').val().trim();
        if (description === '') {
            alert('Please enter a description.');
            return;
        }
        var forms = $(this).serialize();
        $.ajax({
            url: 'includes/softwareinclude/ajax.php',
            type: 'post',
            data: forms + '&type=add-package',
            success: function (res) {
                console.log(res);
                alert('Packages Added');
                window.location.href = "all-lang-packages.php"
            }
        })
        pack = true;
    })
    var rupack = false;
    $(document).on('submit', '.add-ru-package', function (e) {
        if (rupack) {
            return;
        }
        e.preventDefault();
        var name = $('input[name="name"]').val().trim();
        if (name === '') {
            alert('Please enter a name.');
            return;
        }

        var price = $('input[name="price"]').val().trim();
        if (price === '' || isNaN(price)) {
            alert('Please enter a valid price.');
            return;
        }

        var discount_line = $('input[name="discount_line"]').val().trim();
        if (discount_line === '') {
            alert('Please enter a discount line.');
            return;
        }

        var tag_line = $('input[name="tag_line"]').val().trim();
        if (tag_line === '') {
            alert('Please enter a tag line.');
            return;
        }

        var description = $('textarea[name="description"]').val().trim();
        if (description === '') {
            alert('Please enter a description.');
            return;
        }
        var forms = $(this).serialize();
        $.ajax({
            url: 'includes/softwareinclude/ajax.php',
            type: 'post',
            data: forms + '&type=add-ru-package',
            success: function (res) {
                console.log(res);
                alert('Packages Added');
                window.location.href = "all-lang-packages.php"
            }
        })
        rupack = true;
    })
    var arpack = false;
    $(document).on('submit', '.add-ar-package', function (e) {
        if (arpack) {
            return;
        }
        e.preventDefault();
        var name = $('input[name="name"]').val().trim();
        if (name === '') {
            alert('Please enter a name.');
            return;
        }

        var price = $('input[name="price"]').val().trim();
        if (price === '' || isNaN(price)) {
            alert('Please enter a valid price.');
            return;
        }

        var discount_line = $('input[name="discount_line"]').val().trim();
        if (discount_line === '') {
            alert('Please enter a discount line.');
            return;
        }

        var tag_line = $('input[name="tag_line"]').val().trim();
        if (tag_line === '') {
            alert('Please enter a tag line.');
            return;
        }

        var description = $('textarea[name="description"]').val().trim();
        if (description === '') {
            alert('Please enter a description.');
            return;
        }
        var forms = $(this).serialize();
        $.ajax({
            url: 'includes/softwareinclude/ajax.php',
            type: 'post',
            data: forms + '&type=add-ar-package',
            success: function (res) {
                console.log(res);
                alert('Packages ar Added');
                window.location.href = "all-lang-packages.php"
            }
        })
        arpack = true;
    })
    var updatepackage = false;
    $(document).on('submit', '.update-package', function (e) {
        if (updatepackage) {
            return;
        }
        e.preventDefault();
        var forms = $(this).serialize();
        $.ajax({
            url: 'includes/softwareinclude/ajax.php',
            type: 'post',
            data: forms + '&type=update-package',
            success: function (res) {
                console.log(res);
                alert('Package Updated');
                window.location.href = "all-lang-packages.php"
            }
        })
        updatepackage = true;
    })
    var updaterupackage = false;
    $(document).on('submit', '.update-ru-package', function (e) {
        if (updaterupackage) {
            return;
        }
        e.preventDefault();
        var forms = $(this).serialize();
        $.ajax({
            url: 'includes/softwareinclude/ajax.php',
            type: 'post',
            data: forms + '&type=update-ru-package',
            success: function (res) {
                console.log(res);
                alert('Package Updated');
                window.location.href = "all-lang-packages.php"
            }
        })
        updaterupackage = true;
    })
    var updatearpackage = false;
    $(document).on('submit', '.update-ar-package', function (e) {
        if (updatearpackage) {
            return;
        }
        e.preventDefault();
        var forms = $(this).serialize();
        $.ajax({
            url: 'includes/softwareinclude/ajax.php',
            type: 'post',
            data: forms + '&type=update-ar-package',
            success: function (res) {
                console.log(res);
                alert('Package Updated');
                window.location.href = "all-lang-packages.php"
            }
        })
        updatearpackage = true;
    })
    // $(document).on('click', '.action', function () {
    //     console.log("hello");
    //         var documentId = $(this).data('id');
    //         console.log("documentId===========", documentId);
    //         alert("Are you sure to Approved this document")
    //         $.ajax({
    //             url: 'includes/softwareinclude/ajax.php',
    //             type: 'post',
    //             data: { type: 'updatedocument', id: documentId },
    //             dataType: 'json',
    //             success: function (res) {
    //                 console.log("updatedocument", res);
    //                 if (res.error) {
    //                     console.error('Error from server:', res.error);
    //                 } else if (res.success) {
    //                     console.log('Update successful');

    //                     window.location.reload();
    //                 }
    //             }


    //         });
    //     });
    var openlive = false;
    $(document).on('click', '.openlive', function () {
        if (openlive) {
            return;
        }
        var liveId = $(this).data('id');
        $.ajax({
            url: 'includes/softwareinclude/ajax.php',
            type: 'post',
            data: { type: 'openlive', id: liveId },
            dataType: 'json',  // Specify the expected data type
            success: function (res) {
                console.log("fun1", res);
                if (res.error) {
                    console.error('Error from server:', res.error);
                } else {
                    $('#id').text(res.id);
                    $('#account_id').text(res.account_id);
                    $('#account_type').text(res.account_type);
                    $('#account_group').text(res.account_group);
                    $('#currency').text(res.currency);
                    $('#leverage').text(res.leverage);
                    $('#investor_password').text(res.investor_password);
                    // $('#adminid').val(res.id);
                    // $('#adminname').val(res.name);
                    // $('#adminemail').val(res.email);
                    // $('#adminroll').val(res.user_role);
                    $('#editreferralliveModal').modal('show');
                }
            },
            error: function (err) {
                console.error('AJAX error:', err);
            }
        });
        openlive = true;
    });
    var openlive = false;
    $(document).on('submit', '.open-live', function (e) {
        if (openlive) {
            return;
        }
        e.preventDefault();
        var forms = $(this).serialize();
        $.ajax({
            url: 'includes/softwareinclude/ajax.php',
            type: 'post',
            data: forms + '&type=add-live-account',
            success: function (res) {
                console.log(res);
                alert('Live account added done');
                window.location.reload();
            }
        })
        openlive = true;
    })
    var editlive = false;
    $(document).on('click', '.editlive', function (e) {
        e.preventDefault();
        var notificationValue = $(this).data('login');
        var parts = notificationValue.split(/\s+/);
        var accountPart = parts.find(part => part.includes('Account_id='));
        var accountId = null;
        if (accountPart) {
            accountId = accountPart.split('=')[1];
        }
        $.ajax({
            url: 'includes/softwareinclude/ajax.php',
            type: 'post',
            data: 'accountId=' + accountId + '&type=modal-edit-account',
            success: function (res) {
                console.log("fun1", res);
                var jsonData = JSON.parse(res);
                console.log("jsonData", jsonData);
                $('#user_id').val(jsonData.id);
                $('#account_id').val(jsonData.account_id);
                $('#account_type').val(jsonData.account_type);
                $('#account_group').val(jsonData.account_group);
                $('#currency').val(jsonData.currency);
                $('#leverage').val(jsonData.leverage);
                $('#edit_live_account').modal('show');
            }

        })
        return editlive = true;
    })
    var notificationupdate = false;
    $(document).on('click', '.notificationupdate', function (e) {
        if (notificationupdate) {
            return;
        }
        e.preventDefault();
        var notificationId = $(this).data('notification-id');
        var location=$(this).data('location');
        console.log("Notification ID:", notificationId);

        $.ajax({
            url: 'includes/softwareinclude/ajax.php',
            type: 'post',
            data: 'notificationId=' + notificationId + '&type=notificationId',
            success: function (res) {
                // alert(0);
                window.location.href = location + '.php';

            }

        })
        return notificationupdate = true;
    })
</script>


</body>

</html>