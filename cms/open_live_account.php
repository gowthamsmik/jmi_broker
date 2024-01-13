
<section>
	<div id="open_live_account" class="modal " data-backdrop="static" data-keyboard="false" data-toggle="modal"
		role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">

					<h4 class="modal-title">Add Live Account</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body">
					<form class="open-live">
						<!-- Inside the modal form -->
						<!-- Inside the modal form -->
						<input type="hidden" id="notification_id" name="notification_id" value="">


						<div class="control-group">
							<div class="col-sm-12">
								<div class="controls">
									<input type="number" class="form-control" name="user_id" id="user_id"
										placeholder="User_id" required />
								</div>
							</div>
							<div class="col-sm-12">
								<br />
								<div class="controls">
									<input type="text" class="form-control" name="mt4login" id="mt4login"
										placeholder="MT4 Login" required />
								</div>
							</div>
							<div class="col-sm-12">
								<br />
								<div class="controls">
									<input type="text" class="form-control" name="mt4password" id="mt4password"
										placeholder="MT4 Password" required />
								</div>
							</div>
							<div class="col-sm-12">
								<br />
								<div class="controls">
									<input type="text" class="form-control" name="mt4investor" id="mt4investor"
										placeholder="MT4 Investor password" required />
								</div>
							</div>
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
							<div class="col-sm-12 mt-3">
								<div class="controls">
									<button type="submit" class="btn btn-success submit">Add Live Account</button>
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