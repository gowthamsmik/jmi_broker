<div class="app-wrapper">

    <div class="app-content pt-3 p-md-3 p-lg-4">
        <div class="container-xl">

            <div class="row g-3 mb-4 align-items-center justify-content-between">
                <div class="col-auto">
                <h1 class="app-page-title mb-0">الصفحات باللغة العربية</h1>
                </div>
                <div>

                </div>
                <div class="col-auto">
                    <div class="page-utilities">
                        <div class="row g-2 justify-content-start justify-content-md-end align-items-center">
                            <div class="col-auto">
                                <!-- <form class="table-search-form row gx-1 align-items-center">
                                        <div class="col-auto">
                                            <input type="text" id="search-orders" name="searchorders" class="form-control search-orders" placeholder="Search">
                                        </div>
                                        <div class="col-auto">
                                            <button type="submit" class="btn app-btn-secondary">Search</button>
                                        </div>
                                    </form> -->

                            </div><!--//col-->
                            <div class="col-auto">

                                <!-- <select class="form-select w-auto" >
                                          <option selected value="option-1">All</option>
                                          <option value="option-2">This week</option>
                                          <option value="option-3">This month</option>
                                          <option value="option-4">Last 3 months</option>

                                    </select> -->
                            </div>
                            <div class="col-auto">

                            </div>
                        </div><!--//row-->
                    </div><!--//table-utilities-->
                </div><!--//col-auto-->
            </div><!--//row-->


            <!-- <nav id="orders-table-tab" class="orders-table-tab app-nav-tabs nav shadow-sm flex-column flex-sm-row mb-4">
                    <a class="flex-sm-fill text-sm-center nav-link active" id="orders-all-tab" data-bs-toggle="tab" href="#orders-all" role="tab" aria-controls="orders-all" aria-selected="true">All</a>
                    <a class="flex-sm-fill text-sm-center nav-link"  id="orders-paid-tab" data-bs-toggle="tab" href="#orders-paid" role="tab" aria-controls="orders-paid" aria-selected="false">Paid</a>
                    <a class="flex-sm-fill text-sm-center nav-link" id="orders-pending-tab" data-bs-toggle="tab" href="#orders-pending" role="tab" aria-controls="orders-pending" aria-selected="false">Pending</a>
                    <a class="flex-sm-fill text-sm-center nav-link" id="orders-cancelled-tab" data-bs-toggle="tab" href="#orders-cancelled" role="tab" aria-controls="orders-cancelled" aria-selected="false">Cancelled</a>
                </nav> -->


            <div class="tab-content" id="orders-table-tab-content">
                <div class="tab-pane fade show active" id="orders-all" role="tabpanel" aria-labelledby="orders-all-tab">
                    <div class="app-card app-card-orders-table shadow-sm mb-5">
                        <div class="app-card-body">
                            <div class="table-responsive">
                                <table class="table app-table-hover mb-0 text-left">
                                    <thead>
                                        <tr>
                                            <th class="cell">ID</th>
                                            <th class="cell">اسم الصفحة</th>
                                            <th class="cell"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $getAllPages = getAllPages();
                                        if ($getAllPages->num_rows > 0) {
                                            foreach ($getAllPages as $thispage) { ?>
                                                <tr>
                                                    <td class="cell">
                                                        <?php echo $thispage['page_id']; ?>
                                                    </td>
                                                    <td class="cell"><span class="truncate">
                                                            <?php echo $thispage['ar_pages']; ?>
                                                        </span></td>
                                                    <td class="cell">
                                                        <a class="btn-sm app-btn-secondary"
                                                            href="<?php echo $webeurl; ?><?php echo $thispage['page_slug']; ?>">عرض</a>
                                                        <a class="btn-sm app-btn-secondary"
                                                            href="edit-ar-page.php?id=<?php echo $thispage['page_id']; ?>">تحرير</a>
                                                    </td>
                                                </tr>
                                            <?php }
                                        } ?>

                                    </tbody>
                                </table>
                            </div><!--//table-responsive-->

                        </div><!--//app-card-body-->
                    </div><!--//app-card-->
                    <nav class="app-pagination">
                        <!-- <ul class="pagination justify-content-center">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">Next</a>
                                </li>
                            </ul> -->
                    </nav><!--//app-pagination-->

                </div><!--//tab-pane-->

            </div><!--//tab-content-->



        </div><!--//container-fluid-->
    </div><!--//app-content-->

    <footer class="app-footer">
        <div class="container text-center py-3">
            <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->


        </div>
    </footer><!--//app-footer-->

</div><!--//app-wrapper-->
<?php include('includes/footer.php'); ?>