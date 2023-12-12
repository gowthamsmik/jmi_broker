<!DOCTYPE html>
<html lang='en'>

<head>
   <?php include('includes/compatibility.php'); ?>
   <meta name='description' content=''>
   <title>Title Here</title>
   <?php include("includes/softwareinclude/config.php"); ?>
   <?php include("includes/style.php");
   $demoAccountURL = $siteurl . "cpanel/open-demo-account.php?tab=1";
   $liveAccountURL = $siteurl . "cpanel/open-live-account.php?tab=1";
   ?>
   <style>
      .bg_color {
         background-image: linear-gradient(to right, #FED801, #FFF8CE);
      }

      p{
         text-align:justify;
      }
   </style>
</head>

<body>
   <?php include('includes/header.php'); ?>

   <section class='career-banner' style="background-image: url('cms/<?php echo getPageMetaByIDKeyGroup(13, 'Banner Background', 'Banner'); ?>');">
      <div class='container'>
         <div class='banner-cont text-center tx-white mn-hd mn-btn'>
            <h2>
               <?php echo getPageMetaByIDKeyGroup(13, 'Banner Heading 1', 'Banner'); ?>
            </h2>
            <h6>
               <?php echo getPageMetaByIDKeyGroup(13, 'Banner Description', 'Banner'); ?>
            </h6>
            <a href='<?php echo getPageMetaByIDKeyGroup(13, 'Banner Button URL', 'Banner'); ?>' class='ol-btn signUp'>
               <?php echo getPageMetaByIDKeyGroup(13, 'Banner Button Text', 'Banner'); ?>
            </a>
         </div>
      </div>
   </section>

   <section class='grey-section careerSection1'>
      <div class='container'>
         <div class='greySec-cont1'>
            <div class='mn-hd'>
               <div class='row'>
                  <div class='col-md-5'>
                     <h3 class='tx-blue'>
                        <?php echo getPageMetaByIDKeyGroup(13, 'Heading', 'At JMI Brokers LTD'); ?>
                     </h3>
                  </div>
                  <div class='col-md-7'>
                     <p class='p-fs5 tx-grey300'>
                        <?php echo getPageMetaByIDKeyGroup(13, 'Description', 'At JMI Brokers LTD'); ?>
                     </p>
                  </div>
               </div>
            </div>
         </div>

         <div class='greySec-cont2'>
            <div class='mn-hd'>
               <h3 class='tx-blue'>
                  <?php echo getPageMetaByIDKeyGroup(13, 'Heading', 'JMI University'); ?>
               </h3>
               <p class='p-fs5 tx-grey300 paraPad'>
                  <?php echo getPageMetaByIDKeyGroup(13, 'Description', 'JMI University'); ?>
               </p>
               <p class='p-fs5 tx-grey300'>
                  <?php echo getPageMetaByIDKeyGroup(13, 'Description 2', 'JMI University'); ?>
               </p>
            </div>
         </div>
      </div>
   </section>

   <section class='career-section2'>
      <div class='container'>
         <div class='careerSec-cont'>
            <div class='row'>
               <div class='col-md-3'>
                  <div class='career-card'>
                     <div class='mn-hd mn-btn'>
                        <h5 class='tx-blue'>
                           <?php echo getPageMetaByIDKeyGroup(13, 'Heading', 'JMIs goal'); ?>
                        </h5>
                        <div class='inner-cont'>
                           <p class='tx-grey300 p-fs3'>
                              <?php echo getPageMetaByIDKeyGroup(13, 'Description', 'JMIs goal'); ?>
                           </p>
                        </div>
                        <a class='gd-btn' href='<?php echo getPageMetaByIDKeyGroup(13, 'Button URL', 'JMIs goal'); ?>'>
                           <?php echo getPageMetaByIDKeyGroup(13, 'Button Text', 'JMIs goal'); ?>
                           <span>
                              <svg xmlns='http://www.w3.org/2000/svg' width='30' height='21' viewBox='0 0 30 21'
                                 fill='none'>
                                 <path d='M2.85547 11.9004L27.1412 11.9004' stroke='black' stroke-width='2'
                                    stroke-linecap='round' stroke-linejoin='round' />
                                 <path d='M21.4297 4.90039L28.5725 11.9004L21.4297 18.9004' stroke='black'
                                    stroke-width='2' stroke-linecap='round' stroke-linejoin='round' />
                              </svg>
                           </span>
                        </a>

                     </div>
                  </div>
               </div>

               <div class='col-md-3'>
                  <div class='career-card'>
                     <div class='mn-hd mn-btn'>
                        <h5 class='tx-blue'>
                           <?php echo getPageMetaByIDKeyGroup(13, 'Heading', 'A focus on employees'); ?>
                        </h5>
                        <div class='inner-cont'>
                           <p class='tx-grey300 p-fs3'>
                              <?php echo getPageMetaByIDKeyGroup(13, 'Description', 'A focus on employees'); ?>
                           </p>
                        </div>
                        <a class='gd-btn'
                           href='<?php echo getPageMetaByIDKeyGroup(13, 'Button URL', 'A focus on employees'); ?>'>
                           <?php echo getPageMetaByIDKeyGroup(13, 'Button Text', 'A focus on employees'); ?>
                           <span>
                              <svg xmlns='http://www.w3.org/2000/svg' width='30' height='21' viewBox='0 0 30 21'
                                 fill='none'>
                                 <path d='M2.85547 11.9004L27.1412 11.9004' stroke='black' stroke-width='2'
                                    stroke-linecap='round' stroke-linejoin='round' />
                                 <path d='M21.4297 4.90039L28.5725 11.9004L21.4297 18.9004' stroke='black'
                                    stroke-width='2' stroke-linecap='round' stroke-linejoin='round' />
                              </svg>
                           </span>
                        </a>

                     </div>
                  </div>
               </div>

               <div class='col-md-3'>
                  <div class='career-card'>
                     <div class='mn-hd mn-btn'>
                        <h5 class='tx-blue'>
                           <?php echo getPageMetaByIDKeyGroup(13, 'Heading', 'International career opportunities'); ?>
                        </h5>
                        <div class='inner-cont'>
                           <p class='tx-grey300 p-fs3'>
                              <?php echo getPageMetaByIDKeyGroup(13, 'Description', 'International career opportunities'); ?>
                           </p>
                        </div>
                        <a class='gd-btn'
                           href='<?php echo getPageMetaByIDKeyGroup(13, 'Button URL', 'International career opportunities'); ?>'>
                           <?php echo getPageMetaByIDKeyGroup(13, 'Button Text', 'International career opportunities'); ?>
                           <span>
                              <svg xmlns='http://www.w3.org/2000/svg' width='30' height='21' viewBox='0 0 30 21'
                                 fill='none'>
                                 <path d='M2.85547 11.9004L27.1412 11.9004' stroke='black' stroke-width='2'
                                    stroke-linecap='round' stroke-linejoin='round' />
                                 <path d='M21.4297 4.90039L28.5725 11.9004L21.4297 18.9004' stroke='black'
                                    stroke-width='2' stroke-linecap='round' stroke-linejoin='round' />
                              </svg>
                           </span>
                        </a>

                     </div>
                  </div>
               </div>

               <div class='col-md-3 '>
                  <div class='career-card'>
                     <div class='mn-hd mn-btn '>
                        <h5 class='tx-blue'>
                           <?php echo getPageMetaByIDKeyGroup(13, 'Heading', 'JMI Health'); ?>
                        </h5>
                        <div class='inner-cont'>
                           <p class='tx-grey300 p-fs3'>
                              <?php echo getPageMetaByIDKeyGroup(13, 'Description', 'JMI Health'); ?>
                           </p>
                        </div>
                        <a class='gd-btn' href='<?php echo getPageMetaByIDKeyGroup(13, 'Button URL', 'JMI Health'); ?>'>
                           <?php echo getPageMetaByIDKeyGroup(13, 'Button Text', 'JMI Health'); ?>
                           <span>
                              <svg xmlns='http://www.w3.org/2000/svg' width='30' height='21' viewBox='0 0 30 21'
                                 fill='none'>
                                 <path d='M2.85547 11.9004L27.1412 11.9004' stroke='black' stroke-width='2'
                                    stroke-linecap='round' stroke-linejoin='round' />
                                 <path d='M21.4297 4.90039L28.5725 11.9004L21.4297 18.9004' stroke='black'
                                    stroke-width='2' stroke-linecap='round' stroke-linejoin='round' />
                              </svg>
                           </span>
                        </a>

                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>

   <section class='career-section3'>
      <div class='container'>
         <div class='careerSec3-card'>
            <div class='card-cont'>
               <div class='mn-hd mn-btn'>
                  <h3 class='tx-gd'>Be a Member of the <br> Community</h3>
                  <div class='card-form'>
                     <!-- <form class="d-flex">
                        <div class="input-group">
                           <input type="text" class="form-control p-3" placeholder="Upload your cv">
                           <span class="input-group-text bg_color">Choosen file</span>
                        </div>
                     </form> -->

                     <form id="uploadForm" class="d-flex">
                        <div class="input-group">
                           <input type="file" id="fileInput" class="form-control p-3" accept=".pdf"
                              style="display: none;">
                           <input type="text" class="form-control p-3 rounded-start" id="fileName" placeholder="Upload your CV"
                              readonly>
                           <label for="fileInput" class="input-group-text bg_color" style="cursor: pointer;">Choose File</label>
                        </div>
                        
                     </form>


                  </div>
                  <p class='tx-white p-fs6'>Allowed Type:.PDF - Max Size:2MB</p>
                  <button type="button" class="btn ml-2 bg_color text-black" onclick="uploadFile()">Upload</button>
               </div>
            </div>

            <div class='card-img text-end w-75'>
               <img src='assets/images/career/2.png' alt='404'>
            </div>
         </div>
      </div>
   </section>

   <?php include('includes/news-letter.php'); ?>

   <?php include('includes/footer-cta.php'); ?>

   <?php include('includes/footer-apparea.php'); ?>


   <?php include('includes/footer.php'); ?>
   <?php include('includes/scripts.php'); ?>
</body>


<script>
    function uploadFile() {
        var fileNameInput = document.getElementById('fileName');
        var fileInput = document.getElementById('fileInput');

        if (fileInput.files.length > 0) {
            var selectedFile = fileInput.files[0];
            var fileSize = selectedFile.size; // in bytes
            var maxSize = 2 * 1024 * 1024; // 2MB

            if (selectedFile.type === 'application/pdf' && fileSize <= maxSize) {
                // Use FormData to send the file and additional data
                var formData = new FormData();
                formData.append('file', selectedFile);
                formData.append('fileName', fileNameInput.value);

                // Perform the AJAX call
                $.ajax({
                    type: 'POST',
                    url: 'resumeUpload.php', // Replace 'resumeUpload.php' with your server-side script
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function (response) {
                        alert('File uploaded successfully: ' + fileNameInput.value);
                    },
                    error: function (error) {
                        console.error(error);
                        alert('Failed to upload file.');
                    }
                });
            } else {
                if (selectedFile.type !== 'application/pdf') {
                    alert('Please choose a PDF file.');
                } else {
                    alert('File size exceeds the limit of 2MB. Please choose a smaller file.');
                }
                fileNameInput.value = '';
                fileInput.value = ''; // Clear the file input
            }
        } else {
            alert('Please choose a file before uploading.');
        }
    }

    document.getElementById('fileInput').addEventListener('change', function () {
        var fileNameInput = document.getElementById('fileName');
        var fileInput = this;

        if (fileInput.files.length > 0) {
            var selectedFile = fileInput.files[0];
            var fileSize = selectedFile.size; // in bytes
            var maxSize = 2 * 1024 * 1024; // 2MB

            if (selectedFile.type === 'application/pdf' && fileSize <= maxSize) {
                fileNameInput.value = selectedFile.name;
            } else {
                if (selectedFile.type !== 'application/pdf') {
                    alert('Please choose a PDF file.');
                } else {
                    alert('File size exceeds the limit of 2MB. Please choose a smaller file.');
                }
                fileNameInput.value = '';
                fileInput.value = ''; // Clear the file input
            }
        }
    });
</script>



</html>