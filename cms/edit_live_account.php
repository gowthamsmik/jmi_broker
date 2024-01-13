<section>
    <div id="edit_live_account" class="modal fade" role="dialog">
        <div class="modal-dialog" >

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Edit Live Account</h4>
                </div>
                <div class="modal-body">

                    <form class="update-website-account">
                    <input type="hidden" id="notification_id" name="notification_id" value="">
                        <div class="control-group">
                            <div class="col-sm-12">
                                <div class="controls">
                                    <input type="number" class="form-control" name="user_id" id="user_id"
                                        placeholder="User_id" required />

                                </div>
                            </div>
                            <div class="col-sm-12 mt-2">
                                <div class="controls">
                                    <input type="number" class="form-control" name="account_id" id="account_id"
                                        placeholder="account_id" readonly />

                                </div>
                            </div>
                            <!-- <div class="col-sm-12">
                                <br />
                                <div class="controls">
                                    <input type="number" class="form-control" name="mt4login" id="mt4login"
                                        placeholder="MT4 Login" required />
                                </div>
                            </div> -->
                            <div class="col-sm-12">
                                <br />
                                <div class="controls">
                                    <select class="form-control" name="account_type" id="account_type">
                                        <option value="" disabled selected>- Select Type-</option>
                                        <option value="1">Individual</option>
                                        <option value="2">IB</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <br />
                                <div class="controls">
                                    <select class="form-control" name="account_group" id="account_group" required>
                                        <option value="" disabled selected>- Select group-</option>

                                        <option value="3" class="forlive">Variable Spread Account</option>
                                        <option value="5" class="forlive">Scalping Account</option>
                                        <option value="1" class="forlive">Fixed Spread Account</option>
                                        <option value="4" class="forlive"> Bonus Account</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <br />
                                <div class="controls">
                                    <select class="form-control" name="leverage" id="leverage" required>
                                        <option value="" disabled selected>- Select Leverage-</option>
                                        <option value="1">1:1</option>
                                        <option value="5">1:5</option>
                                        <option value="10">1:10</option>
                                        <option value="25">1:25</option>
                                        <option value="50">1:50</option>
                                        <option value="100">1:100</option>
                                        <option value="200">1:200</option>
                                        <option value="300" class="hideleverage">1:300</option>
                                        <option value="400" class="hideleverage">1:400</option>
                                        <option value="500" class="hideleverage">1:500</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="controls">
                                    <button type="submit" class="btn btn-success submit">Edit Live Account</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
</section>