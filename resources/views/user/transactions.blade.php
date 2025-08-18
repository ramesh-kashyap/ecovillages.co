  <div class="dashboard-body">

                    <div class="container-fluid">
                        <div class="flex-between mb-32 gap-3">
                            <h2 class="fs-30">Transactions</h2>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-md-12">
                                <div class="show-filter mb-3 text-end">
                                    <button type="button" class="btn btn--base showFilterBtn btn-sm"><i
                                            class="las la-filter"></i>
                                        Filter</button>
                                </div>
                                <div class="card custom--card responsive-filter-card mb-4">
                                    <div class="card-body">
                                        <form>
                                            <div class="d-flex flex-wrap gap-3 gap-lg-4 table-filter-wrapper">
                                                <div class="flex-grow-1">
                                                    <label class="form--label">Transaction Number</label>
                                                    <input type="search" name="search" value=""
                                                        class="form-control form--control md-style">
                                                </div>
                                                <div class="flex-grow-1 select2-parent">
                                                    <label class="form--label d-block">Type</label>
                                                    <select name="trx_type"
                                                        class="form-select form--control md-style select2"
                                                        data-minimum-results-for-search="-1">
                                                        <option value="">All</option>
                                                        <option value="+">Plus</option>
                                                        <option value="-">Minus</option>
                                                    </select>
                                                </div>
                                                <div class="flex-grow-1 select2-parent">
                                                    <label class="form--label d-block">Remark</label>
                                                    <select class="form-select form--control select2 md-style"
                                                        data-minimum-results-for-search="-1" name="remark">
                                                        <option value="">All</option>
                                                        <option value="balance_add">
                                                            Balance add</option>
                                                        <option value="balance_subtract">
                                                            Balance subtract</option>
                                                        <option value="capital_return">
                                                            Capital return</option>
                                                        <option value="deposit">
                                                            Deposit</option>
                                                        <option value="interest">
                                                            Interest</option>
                                                        <option value="invest">
                                                            Invest</option>
                                                        <option value="invest_compound">
                                                            Invest compound</option>
                                                        <option value="referral_commission">
                                                            Referral commission</option>
                                                        <option value="withdraw">
                                                            Withdraw</option>
                                                        <option value="withdraw_reject">
                                                            Withdraw reject</option>
                                                    </select>
                                                </div>
                                                <div class="flex-grow-1 align-self-end">
                                                    <button class="btn btn--base btn--md w-100"><i
                                                            class="las la-filter"></i>
                                                        Filter</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="card custom--card">
                                    <div class="card-body p-0">
                                        <table class="table table--responsive--md">
                                            <thead>
                                                <tr>
                                                    <th>Trx</th>
                                                    <th>Transacted</th>
                                                    <th>Amount</th>
                                                    <th>Post Balance</th>
                                                    <th>Detail</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td colspan="100%">
                                                        <div class="empty-message ">
                                                            <p class="empty-message-icon">
                                                                <img src="https://script.viserlab.com/viserasset/assets/templates/basic/images/no-data.gif"
                                                                    alt="image">
                                                            </p>
                                                            <p class="empty-message-text">No transaction history found
                                                            </p>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>