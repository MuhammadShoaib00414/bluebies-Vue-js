<template>
    <layout>
        <div class="col-10 col-md-12 navbar-text-div mt-1">
            <h3 class="text-center navbar-text" style="color:black;font-size:2rem;"><span class="font-italic font-weight-bold">Crypto Wiz
                    Guy<sup>®</sup></span> presents <br/>
                    <span class="text-success font-weight-bold">The Selling-for-PROFIT Calculator</span>
                    <p class="text-center mt-1 mb-0 mobile-only" style="color:black;font-size:11px"><a href="#">For "How to use this tool." See blog</a></p>
                </h3>

            <!-- <h3 class="font-weight-bold" style="color:black;font-size:2vh">The Selling-for-PROFIT
                Calculator</h3> -->
        </div>
        <div class="mt-3" id="desktop">
            <!-- <h3 class="text-center font-weight-bold" style="color:black;font-size:2rem">Crypto Wiz Guy® presents</h3>
            <h3 class="text-center font-weight-bold mt-3" style="color:black;font-size:2rem">The Selling-for-PROFIT
                Calculator</h3> -->
            <div class="text-center" style="font-size:1.3rem">
                <label style="color:black" class="desktop-only"><a href="#">For "How to use this tool." See here</a></label>
                <div class="row">
                    <div class="col-2"></div>
                    <div class="col-8">
                        <div class="info-text text-center">
                            <label style="margin-bottom:0px">IMPORTANT: Save as PDF or print before closing, resetting,
                                reloading, or
                                leaving this page.</label>
                            <label class="font-weight-bold w-100" style="text-align:center;vertical-align:top">Crypto Wiz
                                Guy does
                                not save your work.</label>

                            <label class="mt-2">IMPORTANT: See here for entering Investor's output data into Coinbase. The
                                calculator does not make a sale or place an
                                order on Coinbase.</label>
                        </div>
                    </div>
                    <div class="col-2"></div>
                </div>
                <div class="row mx-0 mt-5">
                    <div class="col-sm-2"></div>
                    <!-- <div class="col-sm-12 col-md-12 col-lg-2 selector-col">
                        <label class="mt-2 selector-col px-2"><i class="fas fa-coins mx-2"></i> Selector</label>
                        <select id="coin_to_sell" v-model="selected_coin" @change="getCoinPrice">
                            <option v-if="loading" disabled value="">Loading...</option>
                            <option v-else disabled value="">Coin Pair</option>
                            <option v-for="item in pairs" :value="item.id" :key="item.id">{{ item.display_name }}
                            </option>
                        </select>
                    </div> -->
                    <!-- <div class="col-sm-12 col-md-12 col-lg-5 offset-lg-2 desktop-only">
                        <div class="form-group selector-col">
                            <label class="mt-2 px-2">Latest Trade Price from Coinbase</label>
                            <div class="input-group" style="">
                                <div class="input-group-prepend">
                                    <span class="font-weight-bold input-group-text text-light"
                                        style="border:none!important;background-color:#00B050!important;font-size: 1rem;padding-left: 20px!important;border-radius:10px 0px 0px 10px!important;">$</span>
                                </div>

                                <input disabled
                                    class="font-weight-bold form-control form-control-lg overflow-hidden text-light"
                                    style="font-size: 1rem; border-radius:0px 10px 10px 0px;border-color:#00B050;border-width: 2px;background-color:#00B050;"
                                    :value="loading ? 'Loading...' : selected_coin_price">
                            </div>
                        </div>

                    </div> -->
                </div>
            </div>
            <!-- <div class="row mx-0 d-flex justify-content-end">
                <div class="col-sm-12 col-md-3 col-lg-2 mb-3 text-center">
                    <select id="export_select"
                        class="custom-input form-control-lg w-100" v-model="export_type" style="">
                        <option disabled value="">Type</option>
                        <option value="pdf">PDF</option>
                        <option value="xls">XLS</option>
                    </select>
                </div>
                <div class="col-sm-12 col-md-3 col-lg-2 mb-3 w-100">
                    <button class="custom-button-export btn w-100" :disabled="export_type == ''"
                        style="background-color:black;border-color:black" @click="exportFile">Export</button>
                </div>
            </div> -->
            <!-- <div class="row mx-0 d-flex justify-content-end">
                <div class="col-sm-12 col-md-3 col-lg-2 mb-3 w-100">
                    <button class="custom-button-export btn w-100" style="background-color:black;border-color:black"
                        @click="exportFile">Export</button>
                </div>
            </div> -->
            <!-- <div class="row mb-5 ml-lg-5 user-input-row justify-content-center" style=""> -->

            <div class="row mb-5" style="display: flex;justify-content: center;">
                <h5 class="col-12 text-center user-area">Investor's Input area </h5>
                <label class="info-text text-center col-12" style="font-size:1.3rem">Enter the six required values and scroll down, choose the valid Alternative values you want, and scroll down again.</label>
                <div class="col-sm-12 col-md-2 col-lg-2 mt-3 custom-box">
                    <div class="form-group text-center">
                        <div class="input-content">
                            <label for="amount" class="custom-label">Cost Method Memo (need help?)</label>
                            <div class="icon-image">
                                <img :src="cost_method_icon" class="icons-img" width="50" height="50">
                            </div>
                            <select id="cost_method_memo" v-model="cost_method_memo">
                                <option disabled selected value="">-</option>
                                <option value="FIFO">FIFO</option>
                                <option value="LIFO">LIFO</option>
                                <option value="HIFO">HIFO</option>
                                <option value="Specific">Specific</option>
                                <option value="Average">Average</option>
                                <option value="Estimate">Estimate</option>
                            </select>
                            <div class="invalid-feedback d-block text-center" v-if="!isCostMethodMemoValid">
                                {{ errors.cost_method_memo }}</div>
                            <label class="required pt-2">Required</label>

                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-2 col-lg-2  mt-3 custom-box">
                    <div class="form-group text-center">
                        <div class="input-content">
                            <label for="amount" class="custom-label">Selector</label>
                            <div class="icon-image">
                                <img :src="selector_icon" class="icons-img" width="50" height="50">
                            </div>
                            <select id="coin_to_sell" v-model="selected_coin" @change="getCoinPrice">
                                <option v-if="loading" disabled value="">Loading...</option>
                                <option v-else disabled value="">Coin Pair</option>
                                <option v-for="item in pairs" :value="item.id" :key="item.id">{{ item.display_name }}
                                </option>
                            </select>
                            <label class="required pt-2">Required</label>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-2 col-lg-2  mt-3 custom-box">
                    <div class="form-group text-center">
                        <div class="input-content">
                            <label for="amount" class="custom-label">$ Cost of Coins on hand (need help?)</label>
                            <div class="icon-image">
                                <img :src="dollar_icon" class="icons-img" width="50" height="50">
                            </div>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="custom-span-rounded font-weight-bold input-group-text text-light"
                                        style=" border:none!important;background-color:#4472C4!important;font-size: 12px;">$</span>
                                </div>
                                <input type="text" inputmode="decimal" class="custom-input form-control form-control-md"
                                    v-model="basis_coins_on_hand" @input="baseChanged();"
                                    @change="roundInputsTargets($event, 'basis_coins_on_hand'),this.showError()" placeholder="">

                                    <span class="ml-2 table-warning" v-if="!isSellingPriceTargetValid">{{
                                    errors.basis_coins_on_hand
                                }}</span>


                            </div>
                            <label class="required pt-2">Required</label>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-2 col-lg-2  mt-3 custom-box">
                    <div class="form-group text-center">

                        <div class="input-content">

                            <label for="purchase_price" class="custom-label "># Coins on hand </label>
                            <div class="icon-image">
                                <img :src="coins_icon" class="icons-img" width="50" height="50">
                            </div>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="custom-span-rounded font-weight-bold input-group-text text-light"
                                        style=" border:none!important;background-color:#4472C4!important;font-size: 12px;">
                                        #
                                    </span>
                                </div>
                                <input type="text" class="custom-input form-control form-control-md" v-model="coins_on_hand"
                                    @input="baseChanged();" @change="roundInputsTargets($event, 'coins_on_hand', 8),this.showError()"
                                    placeholder="">

                                    <span class="ml-2 table-warning" v-if="!isSellingPriceTargetValid">{{
                                    errors.coins_on_hand
                                }}</span>
                            </div>
                            <label class="required pt-2">Required</label>
                        </div>

                    </div>
                </div>
                <div class="col-sm-12 col-md-2 col-lg-2 mt-3 custom-box">
                    <div class="form-group text-center">

                        <div class="input-content">

                            <label for="purchase_price" class="custom-label">Coins to sell # or %</label>
                            <div class="icon-image">
                                <img :src="percentage_icon" class="icons-img" width="50" height="50">
                            </div>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                    <span class="custom-span-rounded font-weight-bold input-group-text text-light"
                                        style=" border:none!important;background-color:#4472C4!important;font-size: 12px;">
                                        <button class="btn btn-outline-secondary dropdown-toggle py-0 px-1 shadow-0 border-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" @click="coin_sell_symbol = '%'; baseChanged()">% of coins</a>
                                    <a class="dropdown-item" @click="coin_sell_symbol = '#'; baseChanged()"># of coins</a>
                                </div>{{ coin_sell_symbol }}</span>
                                </div>
                                <input type="number" max="100" min="1" class="custom-input form-control form-control-md"
                                    v-model="percentage_coins_to_sell"
                                    @input="baseChanged(); limitDecimalPoints($event, 'percentage_coins_to_sell', 8),this.showError()"
                                    @change="roundInputValue($event, 'percentage_coins_to_sell', 8);" placeholder="">

                                    <div class="invalid-feedback d-block text-center" v-if="!isPercentageOfCoinsOnHandValid">
                                    {{ errors.percentage_coins_to_sell }}</div>


                            </div>
                            <label class="required pt-2">Required</label>
                        </div>


                    </div>
                </div>
                <div class="col-sm-12 col-md-2 col-lg-2 mt-3 custom-box">
                    <div class="form-group text-center">

                        <div class="input-content">

                            <label for="purchase_price" class="custom-label">Selling fee % (need help?)</label>
                            <div class="icon-image">
                                <img :src="fee_rate_icon" class="icons-img" width="50" height="50">
                            </div>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="custom-span-rounded font-weight-bold input-group-text text-light"
                                        style=" border:none!important;background-color:#4472C4!important;font-size: 12px;">%</span>
                                </div>
                                <input type="number" max="100" min="0.1" class="custom-input form-control form-control-md"
                                    v-model="fee_rate" @input="baseChanged(); limitDecimalPoints($event, 'fee_rate', 3),this.showError()"
                                    @change="roundInputValue($event, 'fee_rate', 3)" placeholder="">
                                    <div class="invalid-feedback d-block text-center" v-if="!isFeeRateValid">
                                    {{ errors.fee_rate }}</div>
                                    <span class="ml-2 table-warning" v-if="!isSellingPriceTargetValid">{{
                                    errors.fee_rate
                                }}</span>
                            </div>
                            <label class="required pt-2">Required</label>
                        </div>


                    </div>
                </div>
                <!-- <div class="col-md-12 col-lg-3">
                <div class="form-group">
                    <label for="purchase_price" class="label-fixed-height-narrow">Fee rate</label>
                    <input type="number" class="custom-input form-control form-control-lg" v-model="fee_rate"
                         placeholder="% Fee">
                </div>
            </div> -->
            </div>
            <!-- extra cards here -->
            <table class="table mobile-table custom-table" style="border:none;color:black" v-if="upperInputsFilled">
                <tbody>
                    <tr>
                    <td style="border-top:1px solid black!important">
                        <div class="form-group text-center">
                            <div class="input-content text-left">
                                <label style="font-size:16px"><span style="font-size:20px">Guidance</span><br> Make TARGET
                                    Inputs, below, more than these values:, and/or lower % or # of coins to sell</label>
                            </div>
                        </div>
                    </td>
                    <td style="border-top:1px solid black!important">
                        <div class="form-group text-left">

                            <div class="input-content">

                                <label for="purchase_price" class="custom-label" style="min-height:100px">Actual recent Coinbase market price $</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="custom-span-rounded font-weight-bold input-group-text text-light"
                                            style=" border:none!important;background-color:white!important;color:black!important;font-size: 12px;">$</span>
                                    </div>
                                    <input type="text" max="100" min="1" class="custom-input form-control form-control-md"
                                        disabled v-model="guidance_selling_price_full_coin" placeholder=""
                                        style="background-color:white!important;color:black!important">

                                </div>
                            </div>
                        </div>
                    </td>
                    <td style="border-top:1px solid black!important">
                        <div class="form-group text-left">

                            <div class="input-content">

                                <label for="purchase_price" class="custom-label" style="min-height:100px">Net profit (loss)
                                    $</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="custom-span-rounded font-weight-bold input-group-text text-light"
                                            style=" border:none!important;background-color:white!important;color:black!important;font-size: 12px;">$</span>
                                    </div>
                                    <input type="text" max="100" min="1" class="custom-input form-control form-control-md"
                                        disabled v-model="guidance_net_profit_loss" placeholder=""
                                        style="background-color:white!important;color:black!important">

                                </div>

                            </div>
                        </div>
                    </td>
                    <td style="border-top:1px solid black!important">
                        <div class="form-group text-left">

                            <div class="input-content">

                                <label for="purchase_price" class="custom-label" style="min-height:100px">Net profit (loss)
                                    % (ratio to this sell’s cost)</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="custom-span-rounded  font-weight-bold input-group-text text-light"
                                            style=" border:none!important;background-color:white!important;color:black!important;font-size: 12px;">
                                            %
                                        </span>
                                    </div>
                                    <input type="text" class="custom-input form-control form-control-md" disabled
                                        v-model="guidance_net_profit_loss_percentage" placeholder=""
                                        style="background-color:white!important;color:black!important">
                                </div>
                            </div>

                        </div>
                    </td>
                    <td style="border-top:1px solid black!important">
                        <div class="form-group text-left">

                            <div class="input-content">

                                <label for="purchase_price" class="custom-label" style="min-height:100px">Net proceeds
                                    $</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="custom-span-rounded font-weight-bold input-group-text text-light"
                                            style=" border:none!important;background-color:white!important;color:black!important;font-size: 12px;">$</span>
                                    </div>
                                    <input type="text" max="100" min="1" class="custom-input form-control form-control-md"
                                        disabled v-model="guidance_net_proceeds" placeholder=""
                                        style="background-color:white!important;color:black!important">
                                </div>
                            </div>


                        </div>
                    </td>
                    <td style="border-top:1px solid black!important">
                        <div class="form-group text-left">

                            <div class="input-content">

                                <label for="purchase_price" class="custom-label" style="min-height:100px">Net proceeds %
                                    (ratio to this sells cost)</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="custom-span-rounded font-weight-bold input-group-text text-light"
                                            style=" border:none!important;background-color:white!important;color:black!important;font-size: 12px;">%</span>
                                    </div>
                                    <input type="text" max="100" min="0.1" class="custom-input form-control form-control-md"
                                        disabled v-model="guidance_net_proceeds_percentage" placeholder=""
                                        style="background-color:white!important;color:black!important">
                                </div>
                            </div>


                        </div>
                    </td>
                </tr>
                </tbody>
            </table>
            <div class="row">
                <!-- <div class="col-sm-12 text-center my-3">
                    <p class="h4" style="color: #00B050">Save as PDF, or print before closing or leaving this page</p>
                    <p class="h4 mobile-only">See desktop site for all features</p>
                    <p class="h4">Crypto Wiz Guy does not save your work.</p>
                </div> -->


            </div>
            <div class="row mobile-table-row" style="display:none">
                <table class="table mobile-table custom-table table-responsive-xl" style="border:none;color:black">

                    <tbody>
                        <tr>
                            <th class="icon-cell" rowspan="2" style="border:none"></th>
                            <th class="icon-cell" rowspan="2" style="border:1px solid black!important">
                                <p>Latest trade price from CoinBase</p>
                                <p style="color: #00B050">{{ this.loading ? 'Loading...' : '$ ' + this.selected_coin_price
                                }}
                                </p>
                            </th>
                            <th colspan="5" style="font-size:15px;border:1px solid black!important" class="text-center">KNOW
                                your PROFIT before you sell.</th>
                        </tr>
                        <tr>
                            <!-- <th style="border:none;"></th>
                        <th style="border:none;border-bottom:1px solid black!important"></th> -->
                            <th>Selling Price TARGET $</th>
                            <th>Net profit (loss) TARGET $</th>
                            <th>Net profit (loss) TARGET % [ratio to this sell's basis]</th>
                        </tr>

                        <tr style="background-color:#4472C4;color:white">
                            <th class="icon-cell" style="border:none;background-color:white"></th>
                            <th>Fill in the Blanks</th>
                            <td>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="custom-span-rounded font-weight-bold input-group-text text-light"
                                            style=" border:none!important;background-color:#4472C4!important;font-size: 1rem;">$</span>
                                    </div>
                                    <input type="number" class="custom-input form-control" v-model="selling_price_target"
                                        @change="roundInputValue($event, 'selling_price_target', 2)"
                                        @input="calculateSellingPriceResult(); limitDecimalPoints($event, 'selling_price_target', 2)"
                                        placeholder="">
                                </div>
                                <span class="ml-2 table-warning" v-if="!isSellingPriceTargetValid">{{
                                    errors.selling_price_target
                                }}</span>

                            </td>
                            <td>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="custom-span-rounded font-weight-bold input-group-text text-light"
                                            style=" border:none!important;background-color:#4472C4!important;font-size: 1rem;">$</span>
                                    </div>
                                    <input type="number" class="custom-input form-control" v-model="net_profit_loss_target"
                                        @input="calculatNetProfitLossResult(); limitDecimalPoints($event, 'net_profit_loss_target', 2)"
                                        @change="roundInputValue($event, 'net_profit_loss_target', 2)" placeholder="">
                                </div>
                                <span class="ml-2 table-warning" v-if="!isNetProfitLossTargetValid">{{
                                    errors.net_profit_loss_target }}</span>

                            </td>
                            <td>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="custom-span-rounded font-weight-bold input-group-text text-light"
                                            style=" border:none!important;background-color:#4472C4!important;font-size: 1rem;">$</span>
                                    </div>
                                    <input type="number" class="custom-input form-control"
                                        v-model="net_profit_loss_percentage_ratio_target"
                                        @input="calculatNetProfitLossPercentageResult(); limitDecimalPoints($event, 'net_profit_loss_percentage_ratio_target', 1)"
                                        @change="roundInputValue($event, 'net_profit_loss_percentage_ratio_target', 8)"
                                        placeholder="">
                                </div>
                                <span class="ml-2 table-warning" v-if="!isNetProfitLossPercentageRatioTargetValid">{{
                                    errors.net_profit_loss_percentage_ratio_target
                                }}</span>
                            </td>
                        </tr>
                        <tr>
                            <td style="border:none;"></td>
                            <td colspan="4" style="border:none;border-bottom:1px solid black"></td>
                        </tr>
                        <tr>

                            <th class="col-2 table-heading">Net profit (loss) $</th>
                            <td class="col-2">{{ formatNumber(selling_price_result.net_profit_loss) }} $</td>
                            <td class="col-2 target-column">{{ formatNumber(net_profit_loss_result.net_profit_loss) }} $
                            </td>
                            <td class="col-2">{{ formatNumber(net_profit_loss_percentage_result.net_profit_loss) }} $</td>
                        </tr>
                        <tr>
                            <th class="icon-cell"><i class="fas fa-coins"></i></th>
                            <th class="col-2 table-heading">Enter in Coinbase. Coins to sell</th>
                            <td v-if="selling_price_result.coin_sell < 0.000016" class="table-warning col-2"
                                data-toggle="tooltip" data-placement="top" title="Make > 0.000016">
                                {{ selling_price_result.coin_sell }}</td>
                            <td v-else class="col-2">{{ selling_price_result.coin_sell }} Coins</td>

                            <td v-if="net_profit_loss_result.coin_sell < 0.000016" class="table-warning col-2"
                                data-toggle="tooltip" data-placement="top" title="Make > 0.000016">
                                {{ net_profit_loss_result.coin_sell }}</td>
                            <td v-else class="col-2">{{ net_profit_loss_result.coin_sell }} Coins</td>

                            <td v-if="net_profit_loss_percentage_result.coin_sell < 0.000016" class="table-warning col-2"
                                data-toggle="tooltip" data-placement="top" title="Make > 0.000016">
                                {{ net_profit_loss_percentage_result.coin_sell }}</td>
                            <td v-else class="col-2">{{ net_profit_loss_percentage_result.coin_sell }} Coins
                            </td>

                        </tr>
                        <tr>
                            <th class="col-2 table-heading">Enter in Coinbase. Selling price for one full coin
                            </th>
                            <td class="col-2 target-column">{{ formatNumber(selling_price_result.selling_price_per_coin) }}
                                $
                            </td>
                            <td class="col-2">{{ formatNumber(net_profit_loss_result.selling_price_per_coin) }} $</td>
                            <td class="col-2">{{ formatNumber(net_profit_loss_percentage_result.selling_price_per_coin) }} $
                            </td>
                        </tr>

                        <tr>
                            <th class="icon-cell"><i class="fa-solid fa-percent"></i></th>

                            <th class="col-2 table-heading">Net profit (loss) %</th>
                            <td class="col-2">{{ selling_price_result.net_profit_loss_percentage_ratio }} %
                            </td>
                            <td class="col-2">{{ net_profit_loss_result.net_profit_loss_percentage_ratio }} %
                            </td>
                            <td class="col-2 target-column">
                                {{ net_profit_loss_percentage_result.net_profit_loss_percentage_ratio }} %
                            </td>
                        </tr>

                        <tr>
                            <th class="icon-cell"><i class="fas fa-money-bill"></i></th>

                            <th class="col-2 table-heading">Net proceeds</th>
                            <td v-if="selling_price_result.net_proceeds_bank < 0.01" class="table-warning col-2"
                                data-toggle="tooltip" data-placement="top" title="Make > 0.01">
                                {{ formatNumber(selling_price_result.net_proceeds_bank) }} $</td>
                            <td v-else class="col-2">{{ formatNumber(selling_price_result.net_proceeds_bank) }} $</td>

                            <td v-if="net_profit_loss_result.net_proceeds_bank < 0.01" class="table-warning col-2"
                                data-toggle="tooltip" data-placement="top" title="Make > 0.01">
                                {{ formatNumber(net_profit_loss_result.net_proceeds_bank) }} $</td>
                            <td v-else class="col-2">{{ formatNumber(net_profit_loss_result.net_proceeds_bank) }} $</td>

                            <td v-if="net_profit_loss_percentage_result.net_proceeds_bank < 0.01"
                                class="table-warning col-2" data-toggle="tooltip" data-placement="top" title="Make > 0.01">
                                {{ formatNumber(net_profit_loss_percentage_result.net_proceeds_bank) }} $</td>
                            <td v-else class="col-2">{{ formatNumber(net_profit_loss_percentage_result.net_proceeds_bank) }}
                                $
                            </td>
                        </tr>
                        <tr>
                            <th class="icon-cell"><i class="fa-solid fa-percent"></i></th>

                            <th class="col-2 table-heading">Net proceeds</th>
                            <td class="col-2">{{ selling_price_result.net_proceeds_percentage_ratio }} %</td>
                            <td class="col-2">{{ net_profit_loss_result.net_proceeds_percentage_ratio }} %</td>
                            <td class="col-2">{{ net_profit_loss_percentage_result.net_proceeds_percentage_ratio
                            }} %</td>
                        </tr>

                        <tr>
                            <th class="icon-cell"><i class="fas fa-coins"></i></th>
                            <th class="col-2 table-heading">Coins after sale</th>
                            <td class="col-2">{{ selling_price_result.coins_after_sale }} Coins</td>
                            <td class="col-2">{{ net_profit_loss_result.coins_after_sale }} Coins</td>
                            <td class="col-2">{{ net_profit_loss_percentage_result.coins_after_sale }} Coins
                            </td>
                        </tr>


                        <!-- Add more rows here -->
                    </tbody>

                </table>
            </div>
            <div class="row px-3 my-3">
                <div class="col-12 text-center table-warning py-1" v-if="showPriceError">
                    <h4 class="mt-2"> Make selling price for one full coin greater than Recent Coinbase market price</h4>
                </div>
            </div>
            <table class="table desktop-table custom-table table-responsive-xl" style="border:none;color:black"
                v-if="upperInputsFilled">
                <tbody>
                    <tr style="font-size:15px;">
                        <th colspan="1" rowspan="2" style="border:none!important;" class="text-center"></th>
                        <!-- <th colspan="1" rowspan="2" style="border:none;" class="text-center">Recent Coinbase market price

                            <div class="input-group mt-3" style="">
                                <div class="input-group-prepend">
                                    <span class="font-weight-bold input-group-text text-light selector-price"
                                        style="border:none!important;background-color:#28a745!important;font-size: 1rem;">$</span>
                                </div>

                                <input disabled
                                    class="font-weight-bold form-control form-control-lg overflow-hidden text-light selector-price"
                                    style="font-size: 1rem; border-color:#28a745;background-color:#28a745;"
                                    :value="loading ? 'Loading...' : formatNumber(selected_coin_price)">
                            </div>
                        </th> -->
                        <th colspan="5"
                            style="border:1px solid black!important;color:#28a745!important;font-weight:bold!important"
                            class="text-center">KNOW your PROFIT before you sell</th>
                    </tr>
                    <tr style="font-size:15px;">
                        <!-- <th style="border:none;"></th>
                        <th style="border:none;border-bottom:1px solid black!important"></th> -->
                        <th>Alternative 1 <br> Selling Price TARGET $</th>
                        <th>Alternative 2 <br> Net profit (loss) TARGET $ </th>
                        <th>Alternative 3 <br> Net profit (loss) TARGET % [ratio to this sell's cost]</th>
                        <th>Alternative 4 <br> Net proceeds TARGET $</th>
                        <th>Alternative 5 <br> Net proceeds TARGET % [ratio to this sell's cost]</th>

                    </tr>

                    <tr style="color:white!important">
                        <th
                            style="font-size: 17px!important;border:none!important;color:#2F8ACC!important;font-weight:bold!important;text-align:center">
                            Fill in one or more of the blue boxes.</th>
                        <td style="background-color:#4472C4">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="custom-span-rounded font-weight-bold input-group-text text-light"
                                        style=" border:none!important;background-color:#4472C4!important;font-size: 1rem;">$</span>
                                </div>
                                <!-- <vue-number v-model="selling_price_target" v-bind="number"></vue-number> -->

                                <input type="text" class="custom-input form-control" v-model="selling_price_target"
                                    @input="calculateSellingPriceResult()"
                                    @change="roundInputsTargets($event, 'selling_price_target'), this.showError()"
                                    placeholder="" />
                            </div>
                            <span class="ml-2 table-warning" v-if="!isSellingPriceTargetValid">{{
                                errors.selling_price_target
                            }}</span>

                        </td>
                        <td style="background-color:#4472C4">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="custom-span-rounded font-weight-bold input-group-text text-light"
                                        style=" border:none!important;background-color:#4472C4!important;font-size: 1rem;">$</span>
                                </div>
                                <input type="text" class="custom-input form-control" v-model="net_profit_loss_target"
                                    @input="calculatNetProfitLossResult()"
                                    @change="roundInputsTargets($event, 'net_profit_loss_target'), this.showError()"
                                    placeholder="" />
                            </div>
                            <span class="ml-2 table-warning" v-if="!isNetProfitLossTargetValid">{{
                                errors.net_profit_loss_target }}</span>
                        </td>

                        <td style="background-color:#4472C4">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="custom-span-rounded font-weight-bold input-group-text text-light"
                                        style=" border:none!important;background-color:#4472C4!important;font-size: 1rem;">%</span>
                                </div>
                                <input type="number" class="custom-input form-control"
                                    v-model="net_profit_loss_percentage_ratio_target"
                                    @input="calculatNetProfitLossPercentageResult(); limitDecimalPoints($event, 'net_profit_loss_percentage_ratio_target', 8)"
                                    @change="roundInputValue($event, 'net_profit_loss_percentage_ratio_target', 8), this.showError()"
                                    placeholder="">
                            </div>
                            <span class="ml-2 table-warning" v-if="!isNetProfitLossPercentageRatioTargetValid">{{
                                errors.net_profit_loss_percentage_ratio_target
                            }}</span>
                        </td>
                        <td style="background-color:#4472C4">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="custom-span-rounded font-weight-bold input-group-text text-light"
                                        style=" border:none!important;background-color:#4472C4!important;font-size: 1rem;">$</span>
                                </div>
                                <input type="text" class="custom-input form-control" v-model="net_proceeds_bank_target"
                                    @input="calculatNetProceedsBankResult()"
                                    @change="roundInputsTargets($event, 'net_proceeds_bank_target'), this.showError()"
                                    placeholder="" />
                            </div>
                            <span class="ml-2 table-warning" v-if="!isNetProceedsBankTargetValid">{{
                                errors.net_proceeds_bank_target }}</span>

                        </td>
                        <td style="background-color:#4472C4">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="custom-span-rounded font-weight-bold input-group-text text-light"
                                        style=" border:none!important;background-color:#4472C4!important;font-size: 1rem;">%</span>
                                </div>
                                <input type="number" class="custom-input form-control"
                                    v-model="net_proceeds_percentage_ratio_target"
                                    @input="calculatNetProceedsPercentageResult(); limitDecimalPoints($event, 'net_proceeds_percentage_ratio_target', 8)"
                                    @change="roundInputValue($event, 'net_proceeds_percentage_ratio_target', 8), this.showError()"
                                    placeholder="">
                            </div>
                            <span class="ml-2 table-warning" v-if="!isNetProceedsPercentageRatioTargetValid">{{
                                errors.net_proceeds_percentage_ratio_target }}</span>

                        </td>

                    </tr>
                    <tr v-if="targetInputsFilled">
                        <td colspan="6" style="border:none;border-bottom:1px solid black">
                            <h5 class="text-center py-2 user-area">Output area</h5>
                        </td>
                    </tr>
                    <tr style="color:#28a745;font-weight:bold!important" v-if="targetInputsFilled">

                        <th class="col-2 table-heading" style="color:#28a745!important;font-weight:bold!important">Net
                            profit (loss) $</th>
                        <td class="col-2"> <span class="float-left heading-symbols">$</span><span class="float-right">{{
                            formatNumber(selling_price_result.net_profit_loss) }} </span></td>
                        <td class="col-2 "> <span class="float-left heading-symbols">$</span><span class="float-right">{{
                            formatNumber(net_profit_loss_result.net_profit_loss) }} </span></td>
                        <td class="col-2"> <span class="float-left heading-symbols">$</span><span class="float-right">{{
                            formatNumber(net_profit_loss_percentage_result.net_profit_loss) }} </span></td>
                        <td class="col-2"> <span class="float-left heading-symbols">$</span><span class="float-right">{{
                            formatNumber(net_proceeds_bank_result.net_profit_loss) }} </span></td>
                        <td class="col-2"> <span class="float-left heading-symbols">$</span><span class="float-right">{{
                            formatNumber(net_proceeds_percentage_result.net_profit_loss) }} </span></td>

                    </tr>
                    <tr v-if="targetInputsFilled">
                        <th class="col-2 table-heading">Enter in Coinbase. # of Coins to sell. See here</th>
                        <td v-if="selling_price_result.coin_sell < 0.000016" class="text-right table-warning col-2"
                            data-toggle="tooltip" data-placement="top" title="Make > 0.000016">

                            <span class="float-left heading-symbols">#</span><span class="float-right">{{
                                formatNumber(selling_price_result.coin_sell, 8, 8) }}</span>
                        </td>
                        <td v-else class="text-right col-2">
                            <span class="float-left heading-symbols">#</span><span class="float-right">{{
                                formatNumber(selling_price_result.coin_sell, 8, 8) }}</span>
                        </td>

                        <td v-if="net_profit_loss_result.coin_sell < 0.000016" class="text-right table-warning col-2"
                            data-toggle="tooltip" data-placement="top" title="Make > 0.000016">

                            <span class="float-left heading-symbols">#</span><span class="float-right">{{
                                formatNumber(net_profit_loss_result.coin_sell, 8, 8) }}</span>
                        </td>
                        <td v-else class="text-right col-2">
                            <span class="float-left heading-symbols">#</span><span class="float-right">{{
                                formatNumber(net_profit_loss_result.coin_sell, 8, 8) }}</span>
                        </td>

                        <td v-if="net_profit_loss_percentage_result.coin_sell < 0.000016"
                            class="text-right table-warning col-2" data-toggle="tooltip" data-placement="top"
                            title="Make > 0.000016">

                            <span class="float-left heading-symbols">#</span><span class="float-right">{{
                                formatNumber(net_profit_loss_percentage_result.coin_sell, 8, 8) }}</span>
                        </td>
                        <td v-else class="text-right col-2">
                            <span class="float-left heading-symbols">#</span><span class="float-right">{{
                                formatNumber(net_profit_loss_percentage_result.coin_sell, 8, 8) }}</span>
                        </td>

                        <td v-if="net_proceeds_bank_result.coin_sell < 0.000016" class="text-right table-warning col-2"
                            data-toggle="tooltip" data-placement="top" title="Make > 0.000016">

                            <span class="float-left heading-symbols">#</span><span class="float-right">{{
                                formatNumber(net_proceeds_bank_result.coin_sell, 8, 8) }}</span>
                        </td>
                        <td v-else class="text-right col-2">
                            <span class="float-left heading-symbols">#</span><span class="float-right">{{
                                formatNumber(net_proceeds_bank_result.coin_sell, 8, 8) }}</span>
                        </td>

                        <td v-if="net_proceeds_percentage_result.coin_sell < 0.000016"
                            class="text-right table-warning col-2" data-toggle="tooltip" data-placement="top"
                            title="Make > 0.000016">

                            <span class="float-left heading-symbols">#</span><span class="float-right">{{
                                formatNumber(net_proceeds_percentage_result.coin_sell, 8, 8) }}</span>
                        </td>
                        <td v-else class="text-right col-2">
                            <span class="float-left heading-symbols">#</span><span class="float-right">{{
                                formatNumber(net_proceeds_percentage_result.coin_sell, 8, 8) }}</span>
                        </td>


                    </tr>
                    <tr v-if="targetInputsFilled">

                        <th class="col-2 table-heading">Enter in Coinbase. $ Selling price for one full coin. See here
                        </th>
                        <td class="col-2"
                            :class="errors.selling_price_result_selling_price_per_coin ? 'table-warning' : ''">
                            <span class="float-left heading-symbols">$</span><span class="float-right">{{
                                formatNumber(selling_price_result.selling_price_per_coin) }}</span>
                        </td>
                        <td class="col-2"
                            :class="errors.net_profit_loss_result_selling_price_per_coin ? 'table-warning' : ''">
                            <span class="float-left heading-symbols">$</span><span class="float-right">{{
                                formatNumber(net_profit_loss_result.selling_price_per_coin) }}</span>
                        </td>
                        <td class="col-2"
                            :class="errors.net_profit_loss_percentage_result_selling_price_per_coin ? 'table-warning' : ''">
                            <span class="float-left heading-symbols">$</span><span class="float-right">{{
                                formatNumber(net_profit_loss_percentage_result.selling_price_per_coin) }}</span>
                        </td>
                        <td class="col-2"
                            :class="errors.net_proceeds_bank_result_selling_price_per_coin ? 'table-warning' : ''">
                            <span class="float-left heading-symbols">$</span><span class="float-right">{{
                                formatNumber(net_proceeds_bank_result.selling_price_per_coin) }}</span>
                        </td>
                        <td class="col-2"
                            :class="errors.net_proceeds_percentage_result_selling_price_per_coin ? 'table-warning' : ''">
                            <span class="float-left heading-symbols">$</span><span class="float-right">{{
                                formatNumber(net_proceeds_percentage_result.selling_price_per_coin) }}</span>
                        </td>

                    </tr>

                    <tr v-if="targetInputsFilled">

                        <th class="col-2 table-heading">Net profit (loss) % [ratio to this sell's cost]</th>
                        <td class="col-2 text-right">{{
                            convertToDecimal(selling_price_result.net_profit_loss_percentage_ratio, 8) }} %</td>
                        <td class="col-2 text-right">{{
                            convertToDecimal(net_profit_loss_result.net_profit_loss_percentage_ratio, 8) }}%</td>
                        <td class="col-2 text-right ">{{
                            convertToDecimal(net_profit_loss_percentage_result.net_profit_loss_percentage_ratio, 8) }} %
                        </td>
                        <td class="col-2 text-right">{{
                            convertToDecimal(net_proceeds_bank_result.net_profit_loss_percentage_ratio, 8) }} %</td>
                        <td class="col-2 text-right">
                            {{ convertToDecimal(net_proceeds_percentage_result.net_profit_loss_percentage_ratio, 8) }} %
                        </td>

                    </tr>
                    <tr v-if="targetInputsFilled">

                        <th class="col-2 table-heading">Net proceeds $</th>
                        <td v-if="selling_price_result.net_proceeds_bank < 0.01" class="table-warning col-2"
                            data-toggle="tooltip" data-placement="top" title="Make > 0.01">
                            <span class="float-left heading-symbols">#</span><span class="float-right">{{
                                formatNumber(selling_price_result.net_proceeds_bank) }} </span>
                        </td>
                        <td v-else class="col-2"> <span class="float-left heading-symbols">$</span><span
                                class="float-right">{{ formatNumber(selling_price_result.net_proceeds_bank) }} </span></td>

                        <td v-if="net_profit_loss_result.net_proceeds_bank < 0.01" class="table-warning col-2"
                            data-toggle="tooltip" data-placement="top" title="Make > 0.01">
                            <span class="float-left heading-symbols">$</span><span class="float-right">{{
                                formatNumber(net_profit_loss_result.net_proceeds_bank) }} </span>
                        </td>
                        <td v-else class="col-2"> <span class="float-left heading-symbols">$</span><span
                                class="float-right">{{ formatNumber(net_profit_loss_result.net_proceeds_bank) }} </span>
                        </td>

                        <td v-if="net_profit_loss_percentage_result.net_proceeds_bank < 0.01" class="table-warning col-2"
                            data-toggle="tooltip" data-placement="top" title="Make > 0.01">
                            <span class="float-left heading-symbols">$</span><span class="float-right">{{
                                formatNumber(net_profit_loss_percentage_result.net_proceeds_bank) }} </span>
                        </td>
                        <td v-else class="col-2"> <span class="float-left heading-symbols">$</span><span
                                class="float-right">{{ formatNumber(net_profit_loss_percentage_result.net_proceeds_bank) }}
                            </span></td>

                        <td v-if="net_proceeds_bank_result.net_proceeds_bank < 0.01" class="table-warning col-2"
                            data-toggle="tooltip" data-placement="top" title="Make > 0.01">
                            <span class="float-left heading-symbols">$</span><span class="float-right">{{
                                formatNumber(net_proceeds_bank_result.net_proceeds_bank) }} </span>
                        </td>
                        <td v-else class="col-2 "> <span class="float-left heading-symbols">$</span><span
                                class="float-right">{{ formatNumber(net_proceeds_bank_result.net_proceeds_bank) }} </span>
                        </td>

                        <td v-if="net_proceeds_percentage_result.net_proceeds_bank < 0.01" class="table-warning col-2"
                            data-toggle="tooltip" data-placement="top" title="Make > 0.01">
                            <span class="float-left heading-symbols">$</span><span class="float-right">{{
                                formatNumber(net_proceeds_percentage_result.net_proceeds_bank) }} </span>
                        </td>
                        <td v-else class="col-2"> <span class="float-left heading-symbols">$</span><span
                                class="float-right">{{ formatNumber(net_proceeds_percentage_result.net_proceeds_bank) }}
                            </span></td>

                    </tr>
                    <tr v-if="targetInputsFilled">

                        <th class="col-2 table-heading">Net proceeds % [ratio to this sell's cost]</th>
                        <td class="col-2 text-right">{{
                            convertToDecimal(selling_price_result.net_proceeds_percentage_ratio, 8) }} %</td>
                        <td class="col-2 text-right">{{
                            convertToDecimal(net_profit_loss_result.net_proceeds_percentage_ratio, 8) }} %</td>
                        <td class="col-2 text-right">{{
                            convertToDecimal(net_profit_loss_percentage_result.net_proceeds_percentage_ratio, 8) }} %</td>
                        <td class="col-2 text-right">{{
                            convertToDecimal(net_proceeds_bank_result.net_proceeds_percentage_ratio, 8) }} %</td>
                        <td class="col-2 text-right ">
                            {{ convertToDecimal(net_proceeds_percentage_result.net_proceeds_percentage_ratio, 8) }} %</td>

                    </tr>

                    <tr v-if="targetInputsFilled">

                        <th class="col-2 table-heading">Gross Proceeds $</th>
                        <td class="col-2"> <span class="float-left heading-symbols">$</span><span class="float-right">{{
                            formatNumber(selling_price_result.gross_proceeds) }} </span></td>
                        <td class="col-2"> <span class="float-left heading-symbols">$</span><span class="float-right">{{
                            formatNumber(net_profit_loss_result.gross_proceeds) }} </span></td>
                        <td class="col-2"> <span class="float-left heading-symbols">$</span><span class="float-right">{{
                            formatNumber(net_profit_loss_percentage_result.gross_proceeds) }} </span></td>
                        <td class="col-2"> <span class="float-left heading-symbols">$</span><span class="float-right">{{
                            formatNumber(net_proceeds_bank_result.gross_proceeds) }} </span></td>
                        <td class="col-2"> <span class="float-left heading-symbols">$</span><span class="float-right">{{
                            formatNumber(net_proceeds_percentage_result.gross_proceeds) }} </span></td>

                    </tr>
                    <!-- <tr v-if="targetInputsFilled">
                        <th class="icon-cell"><i class="fa-solid fa-percent"></i></th>

                        <th class="col-2 table-heading">Variable Selling fee</th>
                        <td class="col-2">{{ selling_price_result.variable_selling_percentage }}</td>
                        <td class="col-2">{{ net_proceeds_bank_result.variable_selling_percentage }}</td>
                        <td class="col-2">{{ net_proceeds_percentage_result.variable_selling_percentage }}</td>
                        <td class="col-2">{{ net_profit_loss_result.variable_selling_percentage }}</td>
                        <td class="col-2">{{ net_profit_loss_percentage_result.variable_selling_percentage }}</td>
                    </tr> -->
                    <tr v-if="targetInputsFilled">

                        <th class="col-2 table-heading">Selling fee $</th>
                        <td class="col-2"> <span class="float-left heading-symbols">$</span><span class="float-right">{{
                            formatNumber(selling_price_result.variable_selling_fee) }} </span></td>
                        <td class="col-2"> <span class="float-left heading-symbols">$</span><span class="float-right">{{
                            formatNumber(net_profit_loss_result.variable_selling_fee) }} </span></td>
                        <td class="col-2"> <span class="float-left heading-symbols">$</span><span class="float-right">{{
                            formatNumber(net_profit_loss_percentage_result.variable_selling_fee) }} </span></td>
                        <td class="col-2"> <span class="float-left heading-symbols">$</span><span class="float-right">{{
                            formatNumber(net_proceeds_bank_result.variable_selling_fee) }} </span></td>
                        <td class="col-2"> <span class="float-left heading-symbols">$</span><span class="float-right">{{
                            formatNumber(net_proceeds_percentage_result.variable_selling_fee) }} </span></td>

                    </tr>
                    <!-- <tr v-if="targetInputsFilled">
                        <th class="icon-cell"><i class="fas fa-money-bill"></i></th>

                        <th class="col-2 table-heading">Gain (loss)</th>
                        <td class="col-2">{{ selling_price_result.gain_exclude_selling }}</td>
                        <td class="col-2">{{ net_proceeds_bank_result.gain_exclude_selling }}</td>
                        <td class="col-2">{{ net_proceeds_percentage_result.gain_exclude_selling }}</td>
                        <td class="col-2">{{ net_profit_loss_result.gain_exclude_selling }}</td>
                        <td class="col-2">{{ net_profit_loss_percentage_result.gain_exclude_selling }}</td>
                    </tr> -->
                    <!-- <tr v-if="targetInputsFilled">
                        <th class="icon-cell"><i class="fas fa-money-bill"></i></th>

                        <th class="col-2 table-heading">Basis after sale</th>
                        <td class="col-2">{{ selling_price_result.basis_after_sale }}</td>
                        <td class="col-2">{{ net_proceeds_bank_result.basis_after_sale }}</td>
                        <td class="col-2">{{ net_proceeds_percentage_result.basis_after_sale }}</td>
                        <td class="col-2">{{ net_profit_loss_result.basis_after_sale }}</td>
                        <td class="col-2">{{ net_profit_loss_percentage_result.basis_after_sale }}</td>
                    </tr> -->
                    <tr v-if="targetInputsFilled">
                        <th class="col-2 table-heading"># Coins after sale</th>
                        <td class="col-2 text-right"> <span class="float-left heading-symbols">#</span><span
                                class="float-right">{{ formatNumber(selling_price_result.coins_after_sale, 8, 8) }}</span>
                        </td>
                        <td class="col-2 text-right"> <span class="float-left heading-symbols">#</span><span
                                class="float-right">{{ formatNumber(net_profit_loss_result.coins_after_sale, 8, 8) }}</span>
                        </td>
                        <td class="col-2 text-right"> <span class="float-left heading-symbols">#</span><span
                                class="float-right">{{ formatNumber(net_profit_loss_percentage_result.coins_after_sale, 8,
                                    8)
                                }}</span></td>
                        <td class="col-2 text-right"> <span class="float-left heading-symbols">#</span><span
                                class="float-right">{{ formatNumber(net_proceeds_bank_result.coins_after_sale, 8, 8)
                                }}</span>
                        </td>
                        <td class="col-2 text-right"> <span class="float-left heading-symbols">#</span><span
                                class="float-right">{{ formatNumber(net_proceeds_percentage_result.coins_after_sale, 8, 8)
                                }}</span></td>

                    </tr>

                    <!-- Add more rows here -->
                </tbody>
            </table>
            <div class="col-sm-12 d-flex justify-content-center pt-3" v-if="upperInputsFilled && targetInputsFilled">
                <div class="px-2">
                    <button class="btn"
                        :class="!is_exportable || is_export_in_progress ? 'custom-button-export-disabled ' : 'custom-button-export text-light'"
                        @click="exportFile()" :disabled="!is_exportable || is_export_in_progress">Save
                        PDF</button>
                </div>
                <div class="px-2">
                    <button class="custom-button-export btn text-light" @click="resetInputs()">Reset</button>
                </div>
                <div>
                    <button class="custom-button-export btn text-light" @click="closePage()">Close Calculator</button>
                </div>
            </div>
        </div>
        <div id="mobile" style="font-size:12px!important">
            <div class="text-center">
                <div class="info-text text-left">
                    <label style="margin-bottom:0px">IMPORTANT: Save as PDF or print before closing, resetting, reloading,
                        or leaving this page.</label>
                    <label class="font-weight-bold w-100" style="text-align:center;vertical-align:top">Crypto Wiz Guy does
                        not save your work.</label>

                    <label class="mt-2">IMPORTANT: See here for entering Investor's output data into Coinbase. The calculator does
                        not make a sale or place an
                        order on Coinbase.</label>
                    <!-- <label>Compare CryptoWizGuy.com full subscription and limited non-subscription features.</label> -->
                </div>
                <div class="row mt-2">
                    <div class=col-12>
                        <h5>Investor's input area</h5>
                    </div>
                    <label class="info-text col-12 mx-1">Enter the six required values and scroll down, choose the valid Alternative values you want, and scroll down again.</label>
                </div>
                <!-- Input group -->
                <div class="row mobile-input-row">
                    <div class="col-3 px-0 text-right">
                        <label class="mt-1 selector-col px-2 input-label-text">Cost Method Memo</label>
                    </div>
                    <div class="col-6 px-0">
                        <select id="cost_method_memo_mobile" v-model="cost_method_memo">
                            <option disabled selected value="">-</option>
                            <option value="FIFO">FIFO</option>
                            <option value="LIFO">LIFO</option>
                            <option value="HIFO">HIFO</option>
                            <option value="Specific">Specific</option>
                            <option value="Average">Average</option>
                            <option value="Estimate">Estimate</option>
                        </select>
                        <div class="invalid-feedback d-block text-center" v-if="!isCostMethodMemoValid">
                            {{ errors.cost_method_memo }}</div>
                    </div>
                    <div class="col-3 px-0 text-left">
                        <label class="mt-1 px-2 input-label-text">Required (need help?)</label>
                    </div>
                </div>
                <!-- input group end -->
                <!-- Input group -->
                <div class="row mobile-input-row">
                    <div class="col-3 px-0 text-right">
                        <label class="mt-1 selector-col px-2 input-label-text">Selector</label>
                    </div>
                    <div class="col-6 px-0">
                        <select id="coin_to_sell_mobile" v-model="selected_coin" @change="getCoinPrice"
                            style="display:inline-block">
                            <option v-if="loading" disabled value="">Loading...</option>
                            <option v-else disabled value="">Coin Pair</option>
                            <option v-for="item in pairs" :value="item.id" :key="item.id">{{ item.display_name }}
                            </option>
                        </select>
                    </div>
                    <div class="col-3 px-0 text-left">
                        <label class="mt-1 px-2 input-label-text">Required</label>
                    </div>
                </div>
                <!-- input group end -->

                <!-- Input group -->
                <div class="row mobile-input-row">
                    <div class="col-3 px-0 text-right">
                        <label class="mt-1 selector-col px-2 input-label-text">$ Cost of Coins on hand</label>
                    </div>
                    <div class="col-6 px-0">
                        <div class="input-group input-group-sm">
                            <div class="input-group-prepend">
                                <span class="input-group-text custom-input-mobile-dollar">$</span>
                            </div>

                            <input type="text" inputmode="decimal"
                                class="custom-input-mobile form-control form-control-sm border-left-0"
                                v-model="basis_coins_on_hand" @input="baseChanged()"
                                @change="roundInputsTargets($event, 'basis_coins_on_hand')" placeholder="">
                        </div>
                        <div class="invalid-feedback d-block text-center" v-if="!isBasisOfCoinValid">
                            {{ errors.basis_coins_on_hand }}</div>
                    </div>
                    <div class="col-3 px-0 text-left">
                        <label class="mt-1 px-2 input-label-text">Required (need help?)</label>
                    </div>
                </div>
                <!-- input group end -->
                <!-- Input group -->
                <div class="row mobile-input-row">
                    <div class="col-3 px-0 text-right">
                        <label class="mt-1 selector-col px-2 input-label-text"># Coins on hand update</label>
                    </div>
                    <div class="col-6 px-0">
                        <div class="input-group input-group-sm">
                            <div class="input-group-prepend">
                                <span class="input-group-text custom-input-mobile-dollar">#</span>
                            </div>
                            <input type="text" class="custom-input-mobile form-control form-control-sm border-left-0"
                                v-model="coins_on_hand" @input="baseChanged();"
                                @change="roundInputsTargets($event, 'coins_on_hand', 8), this.showError()" placeholder="">

                        </div>
                        <div class="invalid-feedback d-block text-center" v-if="!isCoinsOnHandValid">
                            {{ errors.coins_on_hand }}</div>
                    </div>
                    <div class="col-3 px-0 text-left">
                        <label class="mt-1 px-2 input-label-text">Required</label>
                    </div>
                </div>
                <!-- input group end -->
                <!-- Input group -->
                <div class="row mobile-input-row">
                    <div class="col-3 px-0 text-right">
                        <label class="mt-1 selector-col px-2 input-label-text">Coins to sell # or %</label>
                    </div>
                    <div class="col-6 px-0">
                        <div class="input-group input-group-sm w-70">
                            <div class="input-group-prepend custom-input-mobile border-right-0 p-0">
                                <button class="btn btn-outline-secondary dropdown-toggle py-0 px-1 shadow-0 border-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                                <div class="dropdown-menu">
                                <a class="dropdown-item" @click="coin_sell_symbol = '%'; baseChanged()">% of coins</a>
                                <a class="dropdown-item" @click="coin_sell_symbol = '#'; baseChanged()"># of coins</a>
                                </div>
                            </div>
                            <input type="number"
                                class="d-inline-block custom-input-mobile form-control form-control-sm border-right-0 border-left-0"
                                v-model="percentage_coins_to_sell"
                                @input="baseChanged(); limitDecimalPoints($event, 'percentage_coins_to_sell', 8); this.showError()"
                                @change="roundInputValue($event, 'percentage_coins_to_sell', 8)" placeholder="">
                            <div class="input-group-append">
                                <span class="input-group-text custom-input-mobile-percentage">{{ coin_sell_symbol }}</span>
                            </div>
                        </div>
                        <div class="invalid-feedback d-block text-center" v-if="!isPercentageOfCoinsOnHandValid">
                            {{ errors.percentage_coins_to_sell }}</div>
                    </div>
                    <div class="col-3 px-0 text-left">
                        <label class="mt-1 px-2 input-label-text">Required</label>
                    </div>
                </div>
                <!-- input group end -->
                <!-- Input group -->
                <div class="row mobile-input-row">
                    <div class="col-3 px-0 text-right">
                        <label class="mt-1 selector-col px-2 input-label-text">Selling fee % (need help?)</label>
                    </div>
                    <div class="col-6 px-0">
                        <div class="input-group input-group-sm w-70">
                            <input type="number"
                                class="d-inline-block  custom-input-mobile form-control form-control-sm border-right-0"
                                v-model="fee_rate" @input="baseChanged(); limitDecimalPoints($event, 'fee_rate', 8)"
                                @change="roundInputValue($event, 'fee_rate', 1)" placeholder="">
                            <div class="input-group-append">
                                <span class="input-group-text custom-input-mobile-percentage">%</span>
                            </div>
                        </div>
                        <div class="invalid-feedback d-block text-center" v-if="!isFeeRateValid">
                            {{ errors.fee_rate }}</div>
                    </div>
                    <div class="col-3 px-0 text-left">
                        <label class="mt-1 px-2 input-label-text">Required (need help?)</label>
                    </div>
                </div>
                <!-- input group end -->

                <!-- mobile table starts -->
                <div class="row mobile-table-row" style="display:none" v-if="upperInputsFilled">
                    <div class="row mb-5" style="display: flex;justify-content: center;">
                    </div>
                    <table class="table mobile-table custom-table table-responsive mt-3 px-1" style="border:none;color:black">
                        <tbody>
                            <tr style="border-top:1px solid black">
                                <th style="border:1px solid black!important;">
                                        <div class="text-left">
                                            <label><span style="font-weight: bold;">Guidance</span><br> Make TARGET Inputs,
                                                below, more than these values:, and/or lower % of coins to sell</label>
                                        </div>


                                </th>
                                <th style="border:1px solid black!important">
                                            <label for="purchase_price" class="text-left"
                                                style="min-height:150px">Actual recent Coinbase market price $</label>
                                                    <span
                                                        class="custom-span-rounded px-0 mx-0 pr-1 input-group-text text-light"
                                                        style=" border:none!important;background-color:white!important;color:black!important;font-size: 12px;">$ {{ guidance_selling_price_full_coin }}</span>
                                </th>
                                <th style="border:1px solid black!important">


                                            <label for="purchase_price" class=" text-left"
                                                style="min-height:150px">Net profit (loss) $</label>
                                                    <span
                                                        class="custom-span-rounded px-0 mx-0 pr-1 input-group-text text-light"
                                                        style=" border:none!important;background-color:white!important;color:black!important;font-size: 12px;">$ {{ guidance_net_profit_loss }}</span>
                                </th>

                                <th style="border:1px solid black!important">
                                            <label for="purchase_price" class=" text-left"
                                                style="min-height:150px">Net profit (loss) % (ratio to this sell’s
                                                cost)</label>
                                                    <span
                                                        class="custom-span-rounded px-0 mx-0 pr-1 input-group-text text-light"
                                                        style=" border:none!important;background-color:white!important;color:black!important;font-size: 12px;">
                                                        % {{ guidance_net_profit_loss_percentage }}
                                                    </span>


                                </th>
                            </tr>
                        </tbody>
                    </table>
                    <div class="row px-3 my-3">
                    <div class="col-12 text-center table-warning py-1" v-if="showPriceError">
                        <h4 class="mt-2 input-label-text"> Make selling price for one full coin greater than Recent Coinbase
                            market price</h4>
                    </div>
                    </div>
                    <table class="table mobile-table custom-table table-responsive mt-3"
                        style="border:none;!important;color:black">

                        <tbody>
                            <tr>
                                <th rowspan="2" style="border:none!important"></th>
                                <!-- <th class="icon-cell" rowspan="2" style="border:1px solid black!important">
                                    <p>Recent Coinbase market price</p>
                                    <p style="color: #00B050">{{ this.loading ? 'Loading...' : '$ ' +
                                        formatNumber(this.selected_coin_price)
                                    }}
                                    </p>
                                </th> -->
                                <th colspan="3"
                                    style="font-size:15px;border:1px solid black!important;color:#28a745!important;font-weight:bold!important"
                                    class="text-center">
                                    <b>KNOW your PROFIT</b> before you sell.
                                </th>
                            </tr>
                            <tr class="text-left">
                                <!-- <th style="border:none;"></th>
                        <th style="border:none;border-bottom:1px solid black!important"></th> -->
                                <th>Alternative 1 <br>Selling Price TARGET $</th>
                                <th>Alternative 2 <br>Net profit (loss) TARGET $ 9</th>
                                <th>Alternative 3 <br>Net profit (loss) TARGET % [ratio to this sell's cost]</th>
                            </tr>

                            <tr style="color:white;">
                                <th style="color:#2F8ACC!important;font-weight:bold!important;border:none">
                                    Fill in one or more of the blue boxes</th>
                                <td style="background-color:#4472C4">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span
                                                class="custom-span-rounded font-weight-bold input-group-text text-light p-0"
                                                style="padding-right:5px!important; border:none!important;background-color:#4472C4!important;font-size: 1rem;">$</span>
                                        </div>
                                        <input type="text" class="custom-input form-control" v-model="selling_price_target"
                                            @change="roundInputsTargets($event, 'selling_price_target'), this.showError()"
                                            @input="calculateSellingPriceResult()" placeholder="">
                                    </div>
                                    <span class="ml-2 table-warning" v-if="!isSellingPriceTargetValid">{{
                                        errors.selling_price_target
                                    }}</span>

                                </td>
                                <td style="background-color:#4472C4">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span
                                                class="custom-span-rounded font-weight-bold input-group-text text-light p-0"
                                                style="padding-right:5px!important; border:none!important;background-color:#4472C4!important;font-size: 1rem;">$</span>
                                        </div>
                                        <input type="text" class="custom-input form-control"
                                            v-model="net_profit_loss_target" @input="calculatNetProfitLossResult()"
                                            @change="roundInputsTargets($event, 'net_profit_loss_target'), this.showError()"
                                            placeholder="">
                                    </div>
                                    <span class="ml-2 table-warning" v-if="!isNetProfitLossTargetValid">{{
                                        errors.net_profit_loss_target }}</span>

                                </td>
                                <td style="background-color:#4472C4">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span
                                                class="custom-span-rounded font-weight-bold input-group-text text-light p-0"
                                                style="padding-right:5px!important; border:none!important;background-color:#4472C4!important;font-size: 1rem;">%</span>
                                        </div>
                                        <input type="number" class="custom-input form-control"
                                            v-model="net_profit_loss_percentage_ratio_target"
                                            @input="calculatNetProfitLossPercentageResult(); limitDecimalPoints($event, 'net_profit_loss_percentage_ratio_target', 3)"
                                            @change="roundInputValue($event, 'net_profit_loss_percentage_ratio_target', 8), this.showError()"
                                            placeholder="">
                                    </div>
                                    <span class="ml-2 table-warning" v-if="!isNetProfitLossPercentageRatioTargetValid">{{
                                        errors.net_profit_loss_percentage_ratio_target
                                    }}</span>
                                </td>
                            </tr>
                            <tr v-if="targetInputsFilled">
                                <td colspan="4" style="border-left:none; border-right:none">
                                    <h5 class="text-center my-2">Output Area</h5>
                                </td>
                                <!-- <td colspan="5" style="border:none;border-bottom:1px solid black"></td> -->
                            </tr>
                            <tr v-if="targetInputsFilled" class="text-success">

                                <th class="col-2 text-left table-heading"
                                    style="color:#28a745!important;font-weight:bold!important">Net profit (loss) $</th>
                                <td class="col-2 text-right"><span class="float-left"
                                        style="font-weight: bold;">$</span><span class="float-right"
                                        style="font-weight: bold;">{{
                                            formatNumber(selling_price_result.net_profit_loss) }}</span></td>
                                <td class="col-2 text-right"><span class="float-left"
                                        style="font-weight: bold;">$</span><span class="float-right"
                                        style="font-weight: bold;">{{ formatNumber(net_profit_loss_result.net_profit_loss)
                                        }}</span></td>
                                <td class="col-2 text-right"><span class="float-left"
                                        style="font-weight: bold;">$</span><span class="float-right"
                                        style="font-weight: bold;">{{
                                            formatNumber(net_profit_loss_percentage_result.net_profit_loss) }}</span></td>
                            </tr>
                            <tr v-if="targetInputsFilled">
                                <th class="col-2 text-left table-heading">Enter in Coinbase. # of Coins to sell. See here
                                </th>
                                <td v-if="selling_price_result.coin_sell < 0.000016" class="table-warning col-2 text-right"
                                    data-toggle="tooltip" data-placement="top" title="Make > 0.000016">
                                    <span class="float-left">#</span><span class="float-right">{{
                                        formatNumber(selling_price_result.coin_sell, 8, 8) }}</span>
                                </td>
                                <td v-else class="col-2 text-right"> <span class="float-left">#</span><span
                                        class="float-right">{{ formatNumber(selling_price_result.coin_sell, 8, 8) }}</span>
                                </td>

                                <td v-if="net_profit_loss_result.coin_sell < 0.000016"
                                    class="table-warning col-2 text-right" data-toggle="tooltip" data-placement="top"
                                    title="Make > 0.000016">
                                    <span class="float-left">#</span><span class="float-right">{{
                                        formatNumber(net_profit_loss_result.coin_sell, 8, 8) }}</span>
                                </td>
                                <td v-else class="col-2 text-right"> <span class="float-left">#</span><span
                                        class="float-right">{{ formatNumber(net_profit_loss_result.coin_sell, 8, 8)
                                        }}</span>
                                </td>

                                <td v-if="net_profit_loss_percentage_result.coin_sell < 0.000016"
                                    class="table-warning col-2 text-right" data-toggle="tooltip" data-placement="top"
                                    title="Make > 0.000016">
                                    <span class="float-left">#</span><span class="float-right">{{
                                        formatNumber(net_profit_loss_percentage_result.coin_sell, 8, 8) }}</span>
                                </td>
                                <td v-else class="col-2 text-right"><span class="float-left">#</span><span
                                        class="float-right">{{ formatNumber(net_profit_loss_percentage_result.coin_sell, 8,
                                            8)
                                        }}</span>
                                </td>

                            </tr>
                            <tr v-if="targetInputsFilled">

                                <th class="col-2 text-left table-heading">Enter in Coinbase. $ Selling price for one full
                                    coin. See here</th>
                                <td class="col-2 text-right"
                                    :class="errors.selling_price_result_selling_price_per_coin ? 'table-warning' : ''">
                                    <span class="float-left">$</span><span class="float-right">{{
                                        formatNumber(selling_price_result.selling_price_per_coin)
                                    }}</span>
                                </td>
                                <td class="col-2"
                                    :class="errors.net_profit_loss_result_selling_price_per_coin ? 'table-warning' : ''">
                                    <span class="float-left">$</span><span class="float-right">{{
                                        formatNumber(net_profit_loss_result.selling_price_per_coin) }}</span>
                                </td>
                                <td class="col-2 text-right"
                                    :class="errors.net_profit_loss_percentage_result_selling_price_per_coin ? 'table-warning' : ''">
                                    <span class="float-left">$</span><span class="float-right">{{
                                        formatNumber(net_profit_loss_percentage_result.selling_price_per_coin) }}</span>
                                </td>
                            </tr>

                            <tr v-if="targetInputsFilled">
                                <th class="col-2 text-left table-heading">Net profit (loss) % [ratio to this sell's cost]
                                </th>
                                <td class="col-2 text-right">{{
                                    formatNumber(selling_price_result.net_profit_loss_percentage_ratio, 8, 8) }} %</td>
                                <td class="col-2 text-right">{{
                                    formatNumber(net_profit_loss_result.net_profit_loss_percentage_ratio, 8, 8) }} %</td>
                                <td class="col-2 text-right">{{
                                    formatNumber(net_profit_loss_percentage_result.net_profit_loss_percentage_ratio, 8, 8)
                                }}
                                    %</td>
                            </tr>

                            <tr v-if="targetInputsFilled">
                                <th class="col-2 text-left table-heading"># Coins after sale</th>
                                <td class="col-2 text-right"><span class="float-left">#</span><span class="float-right">{{
                                    formatNumber(selling_price_result.coins_after_sale, 8, 8) }}</span></td>
                                <td class="col-2 text-right"><span class="float-left">#</span><span class="float-right">{{
                                    formatNumber(net_profit_loss_result.coins_after_sale, 8, 8) }}</span></td>
                                <td class="col-2 text-right"><span class="float-left">#</span><span class="float-right">{{
                                    formatNumber(net_profit_loss_percentage_result.coins_after_sale, 8, 8) }}</span>
                                </td>
                            </tr>


                            <!-- Add more rows here -->
                        </tbody>

                    </table>
                </div>
                <!-- mobile table ends -->

                <div class="col-12 d-flex justify-content-between pt-2" v-if="targetInputsFilled && upperInputsFilled">
                    <button class="mobile-export-button mx-1 mr-5 btn"
                        :class="!is_exportable || is_export_in_progress ? 'mobile-export-button-disabled ' : 'mobile-export-button'"
                        @click="exportFile(true)" :disabled="is_export_in_progress || !is_exportable">Save
                        PDF</button>
                    <button class="mobile-export-button mx-1 mr-5 btn" @click="resetInputs()">Reset</button>
                    <button class="mobile-export-button mx-1 mr-5 btn" @click="closePage()">Close Calculator</button>
                </div>
            </div>

        </div>
    </layout>
</template>
<script>
import Layout from './Layout.vue';
import '@fortawesome/fontawesome-free/css/all.css';
import { useToast } from 'vue-toastification';
import CoinsImage from '../../assets/coins.png';
import DollarImage from '../../assets/dollar.png';
import PercentageImage from '../../assets/percentage.png';
import FeeRateImage from '../../assets/fee-rate.png';
import SelectorImage from '../../assets/selector.png';
import CostMethodImage from '../../assets/cost-method.png';


export default {
    name: 'Calculator',

    components: {
        Layout
    },
    beforeUnmount() {
        window.removeEventListener('beforeunload', this.showWarningMessage);
    },
    created() {
        this.toast = useToast();
    },
    mounted() {
        window.addEventListener('beforeunload', this.showWarningMessage);

        var s2 = $('#coin_to_sell').select2({
            width: '100%',
            theme: 'bootstrap-5',
            class: "font-weight-bold",

        })
        s2.data('select2').$selection.css('height', '32px');
        // s2.data('select2').$selection.css('min-width', '140px');
        s2.data('select2').$selection.css('border', '1px solid #ced4da');
        s2.data('select2').$selection.css('border-radius', '10px');
        // s2.data('select2').$selection.css('border-radius', '10px 10px 0px 0px');
        s2.data('select2').$selection.css('padding', '0.1rem 0.75rem');
        s2.data('select2').$selection.css('background-color', '#FFFFFF');
        $('#coin_to_sell').one('select2:open', function (e) {
            $('input.select2-search__field').prop('placeholder', 'Search...');
        });



        let that = this;
        s2.on('change', function () {
            // Call your function here, passing the selected value if needed
            that.selected_coin = $(this).val();
            that.getCoinPrice();
        })

        var s3 = $('#coin_to_sell_mobile').select2({
            width: '80%',
            class: "font-weight-bold",

        })
        s3.data('select2').$selection.css('padding', '0.1rem 0.75rem');
        s3.data('select2').$selection.css('color', 'white!important');
        s3.data('select2').$selection.css('background-color', '#4472C4');
        $('#coin_to_sell_mobile').one('select2:open', function (e) {
            $('input.select2-search__field').prop('placeholder', 'Search...');
        });

        s3.on('change', function () {
            // Call your function here, passing the selected value if needed
            that.selected_coin = $(this).val();
            that.getCoinPrice();
        })

        var s4 = $('#cost_method_memo').select2({
            width: '100%',
            theme: 'bootstrap-5',
            class: "font-weight-bold",
            minimumResultsForSearch: Infinity,

        })
        s4.data('select2').$selection.css('height', '32px');
        s4.data('select2').$selection.css('border', '1px solid #ced4da');
        s4.data('select2').$selection.css('border-radius', '10px');
        s4.data('select2').$selection.css('padding', '0.1rem 0.75rem');
        s4.data('select2').$selection.css('background-color', '#FFFFFF');
        $('#coin_to_sell').one('select2:open', function (e) {
            $('input.select2-search__field').prop('placeholder', 'Search...');
        });

        s4.on('change', function () {
            // Call your function here, passing the selected value if needed
            that.cost_method_memo = $(this).val();
        })

        var s5 = $('#cost_method_memo_mobile').select2({
            width: '80%',
            class: "font-weight-bold",
            minimumResultsForSearch: Infinity,

        })
        s5.data('select2').$selection.css('padding', '0.1rem 0.75rem');
        s5.data('select2').$selection.css('color', 'white!important');
        s5.data('select2').$selection.css('background-color', '#4472C4');
        $('#cost_method_memo_mobile').one('select2:open', function (e) {
            $('input.select2-search__field').prop('placeholder', 'Search...');
        });
        s5.on('change', function () {
            // Call your function here, passing the selected value if needed
            that.cost_method_memo = $(this).val();
        })

        this.fetchAllPairs();
    },
    data() {
        return {
            coins_icon: CoinsImage,
            dollar_icon: DollarImage,
            percentage_icon: PercentageImage,
            fee_rate_icon: FeeRateImage,
            selector_icon: SelectorImage,
            cost_method_icon: CostMethodImage,
            toast: null,
            errors: {},
            pairs: {},
            loading: false,
            export_type: '',
            selected_coin: '',
            selected_coin_price: '',
            fee_rate: '',
            cost_method_memo: '',
            basis_coins_on_hand: '',
            coins_on_hand: '',
            coins_on_hand_value: '',
            percentage_coins_to_sell: '',
            coin_sell_symbol: '%',
            selling_price_target: '',
            selling_price_target_value: '',
            net_proceeds_bank_target: '',
            net_proceeds_bank_target_value: '',
            net_proceeds_percentage_ratio_target: '',
            net_profit_loss_target: '',
            net_profit_loss_target_value: '',
            net_profit_loss_percentage_ratio_target: '',
            basis_coins_on_hand_value: '',

            selling_price_result: {},
            net_proceeds_bank_result: {},
            net_proceeds_percentage_result: {},
            net_profit_loss_result: {},
            net_profit_loss_percentage_result: {},
            isBasisOfCoinValid: true,
            isCoinsOnHandValid: true,
            isPercentageOfCoinsOnHandValid: true,
            isNetProceedsPercentageRatioValid: true,
            isNetProfitLossValid: true,
            isFeeRateValid: true,
            isCostMethodMemoValid: false,

            is_exportable: false,
            isNetProceedsBankTargetValid: true,
            isNetProceedsPercentageRatioTargetValid: true,
            isNetProfitLossTargetValid: true,
            isNetProfitLossPercentageRatioTargetValid: true,
            isNetProceedsBankTargetValid: true,
            isSellingPriceTargetValid: true,
            wait_time: 1000,
            showPriceError: false,
            is_export_in_progress: false,
            isDownloadToast: false,
            warning_error : false,

        }


    },
    watch: {
        cost_method_memo(newValue) {
            // this.checkValidation();
            $("#cost_method_memo_mobile").val(newValue).trigger('change');
            $("#cost_method_memo").val(newValue).trigger('change');
            this.baseChanged()


        },
        selling_price_target(newValue) {
            if (newValue == '') {
                this.selling_price_target_value = '';
                return
            }
            newValue = newValue.replace(/[a-zA-Z]/g, '');

            this.selling_price_target_value = newValue.replaceAll(',', '');

            let numStr = newValue.toString();
            let parts = numStr.split('.');
            parts[0] = parts[0].replaceAll(',', '');
            parts[0] = Intl.NumberFormat('en-US').format(parts[0])
            // console.log(parts[1].length)
            if (parts.length > 1) {
                parts[1] = parts[1].substring(0, 2);
            }
            numStr = parts.join('.');
            this.selling_price_target = numStr;
            // this.selling_price_target_value = newValue;

        },
        net_profit_loss_target(newValue) {
            if (newValue == '') {
                this.net_profit_loss_target_value = ''
                return
            }
            newValue = newValue.replace(/[a-zA-Z]/g, '');

            this.net_profit_loss_target_value = newValue.replaceAll(',', '');

            let numStr = newValue.toString();
            let parts = numStr.split('.');
            parts[0] = parts[0].replaceAll(',', '');
            parts[0] = Intl.NumberFormat('en-US').format(parts[0])
            if (parts.length > 1) {
                parts[1] = parts[1].substring(0, 2);
            }
            numStr = parts.join('.');
            this.net_profit_loss_target = numStr;
        },
        net_proceeds_bank_target(newValue) {
            if (newValue == '') {
                this.net_proceeds_bank_target_value = ''
                return
            }
            newValue = newValue.replace(/[a-zA-Z]/g, '');

            this.net_proceeds_bank_target_value = newValue.replaceAll(',', '');

            let numStr = newValue.toString();
            let parts = numStr.split('.');
            parts[0] = parts[0].replaceAll(',', '');
            parts[0] = Intl.NumberFormat('en-US').format(parts[0])
            if (parts.length > 1) {
                parts[1] = parts[1].substring(0, 2);
            }
            numStr = parts.join('.');
            this.net_proceeds_bank_target = numStr;
        },
        basis_coins_on_hand(newValue) {
            if (newValue == '') {
                this.basis_coins_on_hand_value = ''
                return
            }
            newValue = newValue.replace(/[a-zA-Z]/g, '');

            this.basis_coins_on_hand_value = newValue.replaceAll(',', '');

            let numStr = newValue.toString();
            let parts = numStr.split('.');
            parts[0] = parts[0].replaceAll(',', '');
            parts[0] = Intl.NumberFormat('en-US').format(parts[0])
            if (parts.length > 1) {
                parts[1] = parts[1].substring(0, 2);
            }
            numStr = parts.join('.');
            this.basis_coins_on_hand = numStr;
        },
        coins_on_hand(newValue) {
            if (newValue == '') {
                this.coins_on_hand_value = '';
                return
            }
            newValue = newValue.replace(/[a-zA-Z]/g, '');

            this.coins_on_hand_value = newValue.replaceAll(',', '');

            let numStr = newValue.toString();
            let parts = numStr.split('.');
            parts[0] = parts[0].replaceAll(',', '');
            parts[0] = Intl.NumberFormat('en-US').format(parts[0])
            // console.log(parts[1].length)
            if (parts.length > 1) {
                parts[1] = parts[1].substring(0, 8);
            }
            numStr = parts.join('.');
            this.coins_on_hand = numStr;

        },
    },
    methods: {
        roundInputsTargets(event, dataProp, decimals = 2) {
            console.log(decimals)
            let numStr = event.target.value.toString();
            numStr = numStr.replaceAll(',', '');
            this[dataProp] = parseFloat(numStr).toFixed(decimals);
            if (isNaN(this[dataProp])) {
                this[dataProp] = ''
            }




        },
        showError() {
            let selling_price_price = parseFloat(this.selling_price_result.selling_price_per_coin)
            let net_proceeds_bank_price = parseFloat(this.net_proceeds_bank_result.selling_price_per_coin)
            let net_proceeds_percentage_price = parseFloat(this.net_proceeds_percentage_result.selling_price_per_coin)
            let net_profit_loss_price = parseFloat(this.net_profit_loss_result.selling_price_per_coin)
            let net_profit_loss_percentage_price = parseFloat(this.net_profit_loss_percentage_result.selling_price_per_coin)
            let selected_coin_price = parseFloat(this.selected_coin_price);
            if (
                (selling_price_price >= selected_coin_price || isNaN(selling_price_price))
                && (net_proceeds_bank_price >= selected_coin_price || isNaN(net_proceeds_bank_price))
                && (net_proceeds_percentage_price >= selected_coin_price || isNaN(net_proceeds_percentage_price))
                && (net_profit_loss_price >= selected_coin_price || isNaN(net_profit_loss_price))
                && (net_profit_loss_percentage_price >= selected_coin_price || isNaN(net_profit_loss_percentage_price))
            ) {
                this.showPriceError = false;
                this.warning_error = false;
                this.checkValidation()
            }
            else if (isNaN(selected_coin_price)) {
                this.showPriceError = false;
                this.warning_error = false;
                this.checkValidation()
            }
            else {
                this.showPriceError = true;
                this.is_exportable = false
                this.warning_error = true;

            }

            if(this.selected_coin_price > this.selling_price_result.selling_price_per_coin){
                this.errors.selling_price_result_selling_price_per_coin = true
                this.warning_error = true;
            }
            else{
                this.errors.selling_price_result_selling_price_per_coin = false;

            }
            if(this.selected_coin_price > this.net_profit_loss_result.selling_price_per_coin){
                this.errors.net_profit_loss_result_selling_price_per_coin = true
                this.warning_error = true;
            }
            else{
                this.errors.net_profit_loss_result_selling_price_per_coin = false;
            }
            if(this.selected_coin_price > this.net_profit_loss_percentage_result.selling_price_per_coin){
                this.errors.net_profit_loss_percentage_result_selling_price_per_coin = true
                this.warning_error = true;
            }
            else{
                this.errors.net_profit_loss_percentage_result_selling_price_per_coin = false;
            }
            if(this.selected_coin_price > this.net_proceeds_bank_result.selling_price_per_coin){
                this.errors.net_proceeds_bank_result_selling_price_per_coin = true
                this.warning_error = true;
            }
            else{
                this.errors.net_proceeds_bank_result_selling_price_per_coin = false;
            }
            if(this.selected_coin_price > this.net_proceeds_percentage_result.selling_price_per_coin){
                this.errors.net_proceeds_percentage_result_selling_price_per_coin = true
                this.warning_error = true;
            }
            else{
                this.errors.net_proceeds_percentage_result_selling_price_per_coin = false;
            }
        },
        closePage() {
            this.$router.go(-1);
        },
        convertToDecimal(val, decimals = 2) {
            if (val == null || val == undefined || val == '') {
                return val;
            }
            return parseFloat(val).toFixed(decimals);

        },
        limitDecimalPoints(event, dataProp, decimals = 8) {
            // Remove any leading or trailing whitespace from the input value
            let value = event.target.value.trim();

            // Parse the input value as a floating-point number
            let floatValue = parseFloat(value);

            // If the input value is a valid number and it exceeds the max decimal points
            if (!isNaN(floatValue) && value.includes('.')) {
                // Get the number of decimal points in the input value
                let decimalCount = value.split('.')[1].length;

                // If the decimal count exceeds the maximum allowed
                if (decimalCount > decimals) {
                    // Round the value to the maximum decimal points
                    let roundedValue = parseFloat(floatValue.toFixed(decimals));

                    // Emit an event to update the input value with the rounded value
                    this[dataProp] = roundedValue.toString();
                }
            }
        },
        formatNumber(value, min_decimals = 2, max_decimals = 2) {
            // Convert the number to the desired format
            let parsed_value = parseFloat(value);
            if (isNaN(parsed_value)) {
                return value;
            }
            return parsed_value.toLocaleString('en-US', {
                minimumFractionDigits: min_decimals,
                maximumFractionDigits: max_decimals,
            });
        },
        showWarningMessage(event) {
            event.preventDefault();
            // The return value is ignored in modern browsers, but still, set a message to display
            event.returnValue = 'Your unsaved changes will be lost.';
        },
        resetInputs(isApi) {
            // reset all inputs
            $("#coin_to_sell_mobile").val('').trigger('change');
            $("#coin_to_sell").val('').trigger('change');

            this.selected_coin = '';
            this.selected_coin_price = '';
            this.basis_coins_on_hand = '';
            this.coins_on_hand = '';
            this.percentage_coins_to_sell = '';
            this.selling_price_target = '';
            this.net_proceeds_bank_target = '';
            this.net_proceeds_percentage_ratio_target = '';
            this.net_profit_loss_target = '';
            this.net_profit_loss_percentage_ratio_target = '';
            this.selling_price_result = {};
            this.net_proceeds_bank_result = {};
            this.net_proceeds_percentage_result = {};
            this.net_profit_loss_result = {};
            this.net_profit_loss_percentage_result = {};
            this.is_exportable = false;
            this.fee_rate = '';
            this.showError();
            if (!isApi) {
                $("#cost_method_memo_mobile").val('').trigger('change');
                $("#cost_method_memo").val('').trigger('change');
                location.reload(true)
            }
        },
        async exportFile(is_mobile = false) {
            console.log(is_mobile)
            const params = {
                cost_method_memo: this.cost_method_memo,
                coin_pair: this.selected_coin,
                coin_pair_price: this.selected_coin_price,
                fee_rate: this.fee_rate,
                basis_coins_on_hand: this.basis_coins_on_hand_value,
                coins_on_hand: this.coins_on_hand_value,
                percentage_coins_to_sell: this.percentage_coins_to_sell,
                coin_sell_symbol: this.coin_sell_symbol,

                selling_price_target: isNaN(this.selling_price_target_value) ? null : this.selling_price_target_value,
                net_proceeds_bank_target: isNaN(this.net_proceeds_bank_target_value) ? null : this.net_proceeds_bank_target_value,
                net_proceeds_percentage_ratio_target: isNaN(this.net_proceeds_percentage_ratio_target) ? null : this.net_proceeds_percentage_ratio_target,
                net_profit_loss_target: isNaN(this.net_profit_loss_target_value) ? null : this.net_profit_loss_target_value,
                net_profit_loss_percentage_ratio_target: isNaN(this.net_profit_loss_percentage_ratio_target) ? null : this.net_profit_loss_percentage_ratio_target,

                selling_price_result: this.selling_price_result,
                net_proceeds_bank_result: this.net_proceeds_bank_result,
                net_proceeds_percentage_result: this.net_proceeds_percentage_result,
                net_profit_loss_result: this.net_profit_loss_result,
                net_profit_loss_percentage_result: this.net_profit_loss_percentage_result,
                guidance_selling_price_full_coin: this.guidance_selling_price_full_coin,
                guidance_net_profit_loss: this.guidance_net_profit_loss,
                guidance_net_profit_loss_percentage: this.guidance_net_profit_loss_percentage,
                guidance_net_proceeds: this.guidance_net_proceeds,
                guidance_net_proceeds_percentage: this.guidance_net_proceeds_percentage,
            }
            this.is_export_in_progress = true;

            this.toast.info("Preparing the file");
            let url = '/api/export';
            if (is_mobile) {
                url = '/api/mobile-export';
            }
            axios({
                url: url,
                method: 'GET',
                params: params,
                responseType: 'blob'
            })
                .then(response => {

                    // const url = response.data.url;

                    // if (url) {

                    // const link = document.createElement('a');
                    // link.href = url;
                    // link.setAttribute('download', response.data.filename);
                    // document.body.appendChild(link);
                    // link.click();
                    // document.body.removeChild(link);



                    // Create a Blob URL for the downloaded content
                    const blobUrl = URL.createObjectURL(response.data);
                    console.log(response.data);

                    // Create a temporary link element
                    const link = document.createElement('a');
                    link.href = blobUrl;
                    let suggestedFilename = 'document.pdf'; // Default filename

                    if (response.headers['content-disposition']) {
                        // Extract the filename using regex and remove leading/trailing spaces or other unwanted characters
                        const filenameMatch = response.headers['content-disposition'].match(/filename\*?=['"]?(?:UTF-8['"]*)?([^;\r\n"']*)['"]?;?/);
                        if (filenameMatch && filenameMatch[1]) {
                            suggestedFilename = filenameMatch[1].trim();
                        }
                    }
                    link.setAttribute('download', suggestedFilename);

                    // Simulate a click on the link to trigger the download
                    link.click();

                    // Clean up by revoking the Blob URL
                    URL.revokeObjectURL(blobUrl);

                    if (!this.isDownloadToast) {
                        this.toast.success(`Download Complete`, {
                            timeout: 0,
                            onClose: () => {
                                this.isDownloadToast = false; // Change the value on toast close
                            }
                            // icon: "fa fa-file-pdf",
                        });
                        this.isDownloadToast = !this.isDownloadToast
                    }
                    // } else {
                    //     this.toast.error('Something went wrong');
                    // }
                })
                .catch(error => {
                    this.toast.error(error.response.data.message);
                })
                .finally(() => {
                    this.is_export_in_progress = false;
                    // this.toast.dismiss(er);
                })
        },
        getCoinPrice() {
            this.loading = true;
            let coin = this.selected_coin;
            if (this.selected_coin == '' || this.selected_coin == null || this.selected_coin == undefined) {
                this.loading = false;
                return;
            }
            axios.get('/api/coin-price/' + this.selected_coin)
                .then(response => {
                    this.resetInputs(true);
                    this.selected_coin = coin;
                    this.selected_coin_price = response.data;
                    this.loading = false;

                })
                .catch(error => {
                    this.selected_coin_price = '-'
                    this.toast.error(error.response.data.message);
                    this.loading = false;
                })
        },
        fetchAllPairs() {
            this.loading = true;
            axios.get('/api/all-pairs')
                .then(response => {
                    this.pairs = response.data;
                    this.loading = false;

                })
                .catch(error => {
                    if (error.response.data.message != '' && error.response.data.message != null) {
                        this.toast.error(error.response.data.message);
                    }
                    this.loading = false;
                })
        },
        calculateSellingPriceResult() {
            if (!this.checkValidation() || this.selling_price_target_value ==  0 || isNaN(this.selling_price_target_value)) {
                this.selling_price_result = {};
                return;
            }
            let percentage_coins_to_sell = this.coin_sell_symbol == '%' ? this.percentage_coins_to_sell / 100 : this.percentage_coins_to_sell / this.coins_on_hand_value; //Percentage of coins to sell
            let coin_sell = this.coins_on_hand_value * percentage_coins_to_sell; //Coins to sell
            let selling_price_per_coin = this.selling_price_target_value == 0 ? 0 : this.selling_price_target_value; //Selling price per full coin
            let gross_proceeds = coin_sell * selling_price_per_coin; //Gross proceeds
            let variable_selling_fee = gross_proceeds * this.fee_rate / 100; //Variable selling fee
            let net_proceeds_bank = gross_proceeds - variable_selling_fee; //Net proceeds $ to bank or reinvest

            let net_profit_loss = net_proceeds_bank - (this.basis_coins_on_hand_value * (percentage_coins_to_sell)); //Net profit (loss) $

            let net_proceeds_percentage_ratio = this.basis_coins_on_hand_value == 0 || percentage_coins_to_sell == 0 ? 0 : net_proceeds_bank / (this.basis_coins_on_hand_value * (percentage_coins_to_sell / 100)); //Net proceeds % [ratio to this sell's basis]

            let net_profit_loss_percentage_ratio = this.selling_price_target_value == 0 || this.basis_coins_on_hand_value == 0 || percentage_coins_to_sell == 0 ? 0 : net_profit_loss / (this.basis_coins_on_hand_value * percentage_coins_to_sell / 100); //Net profit (loss) % [ratio to this sell's basis]

            let gain_exclude_selling = net_profit_loss + variable_selling_fee; //Gain (exclude selling fee)

            let basis_after_sale = this.basis_coins_on_hand_value * (1 - percentage_coins_to_sell); //Basis after sale

            let coins_after_sale = this.coins_on_hand_value * (1 - percentage_coins_to_sell); //Coins after sale

            this.selling_price_result = {
                coin_sell: parseFloat(coin_sell),
                selling_price_per_coin: parseFloat(selling_price_per_coin),
                gross_proceeds: parseFloat(gross_proceeds),
                variable_selling_fee: parseFloat(variable_selling_fee),
                net_proceeds_bank: parseFloat(net_proceeds_bank),
                net_profit_loss: parseFloat(net_profit_loss),
                net_proceeds_percentage_ratio: parseFloat(net_proceeds_percentage_ratio),
                net_profit_loss_percentage_ratio: parseFloat(net_profit_loss_percentage_ratio),
                gain_exclude_selling: parseFloat(Math.abs(gain_exclude_selling)),
                basis_after_sale: parseFloat(basis_after_sale),
                coins_after_sale: parseFloat(coins_after_sale),
                variable_selling_percentage: parseFloat(this.fee_rate),
            }
        },
        calculatNetProceedsBankResult() {
            // 2nd point
            if (!this.checkValidation() || this.net_proceeds_bank_target_value <= 0) {
                this.net_proceeds_bank_result = {};
                return;
            }

            let percentage_coins_to_sell = this.coin_sell_symbol == '%' ? this.percentage_coins_to_sell / 100 : this.percentage_coins_to_sell / this.coins_on_hand_value; //Percentage of coins to sell//Percentage of coins to sell

            let coin_sell = this.coins_on_hand_value * percentage_coins_to_sell; //Coins to sell

            let net_proceeds_bank_target = parseFloat(this.net_proceeds_bank_target_value); //Net proceeds $ to bank or reinvest


            let fee_rate = parseFloat(this.fee_rate) / 100; //Fee rate

            let variable_selling_fee = (net_proceeds_bank_target * fee_rate) / (1 - fee_rate); //Variable selling fee

            let selling_price_per_coin = this.coins_on_hand_value == 0 || this.percentage_coins_to_sell == 0 ? 0 : ((net_proceeds_bank_target + variable_selling_fee) / (this.coins_on_hand_value * percentage_coins_to_sell)); //Selling price per full coin
            let gross_proceeds = coin_sell * selling_price_per_coin; //Gross proceeds

            let net_proceeds_bank = net_proceeds_bank_target == 0 ? 0 : net_proceeds_bank_target; //Net proceeds $ to bank or reinvest

            let net_profit_loss = net_proceeds_bank - (this.basis_coins_on_hand_value * percentage_coins_to_sell); //Net profit (loss) $

            let net_proceeds_percentage_ratio = this.basis_coins_on_hand_value == 0 || percentage_coins_to_sell == 0 ? 0 : net_proceeds_bank / (this.basis_coins_on_hand_value * (percentage_coins_to_sell / 100)); //Net proceeds % [ratio to this sell's basis]

            let net_profit_loss_percentage_ratio = this.selling_price_target_value == 0 || this.basis_coins_on_hand_value == 0 || percentage_coins_to_sell == 0 ? 0 : net_profit_loss / (this.basis_coins_on_hand_value * percentage_coins_to_sell / 100); //Net profit (loss) % [ratio to this sell's basis]

            let gain_exclude_selling = net_profit_loss + variable_selling_fee; //Gain (exclude selling fee)

            let basis_after_sale = this.basis_coins_on_hand_value * (1 - percentage_coins_to_sell); //Basis after sale

            let coins_after_sale = this.coins_on_hand_value * (1 - percentage_coins_to_sell); //Coins after sale

            this.net_proceeds_bank_result = {
                coin_sell: parseFloat(coin_sell),
                selling_price_per_coin: parseFloat(selling_price_per_coin),
                gross_proceeds: parseFloat(gross_proceeds),
                variable_selling_fee: parseFloat(variable_selling_fee),
                net_proceeds_bank: parseFloat(net_proceeds_bank),
                net_profit_loss: parseFloat(net_profit_loss),
                net_proceeds_percentage_ratio: parseFloat(net_proceeds_percentage_ratio),
                net_profit_loss_percentage_ratio: parseFloat(net_profit_loss_percentage_ratio),
                gain_exclude_selling: parseFloat(Math.abs(gain_exclude_selling)),
                basis_after_sale: parseFloat(basis_after_sale),
                coins_after_sale: parseFloat(coins_after_sale),
                variable_selling_percentage: parseFloat(this.fee_rate)
            }

        },
        calculatNetProceedsPercentageResult() {
            // 3rd point 3. Net proceeds target [ratio to this sell's basis]
            if (!this.checkValidation() || this.net_proceeds_percentage_ratio_target <= 0) {
                this.net_proceeds_percentage_result = {};
                return;
            }

            let percentage_coins_to_sell = this.coin_sell_symbol == '%' ? this.percentage_coins_to_sell / 100 : this.percentage_coins_to_sell / this.coins_on_hand_value; //Percentage of coins to sell//Percentage of coins to sell
            let coin_sell = this.coins_on_hand_value * percentage_coins_to_sell; //Coins to sell


            let fee_rate = parseFloat(this.fee_rate) / 100; //Fee rate





            let net_proceeds_percentage_ratio = this.net_proceeds_percentage_ratio_target == 0 ? 0 : this.net_proceeds_percentage_ratio_target / 100 //Net proceeds % [ratio to this sell's basis]

            let net_proceeds_bank = net_proceeds_percentage_ratio * (this.basis_coins_on_hand_value * percentage_coins_to_sell); //Net proceeds $ to bank or reinvest
            let variable_selling_fee = (net_proceeds_bank * fee_rate) / (1 - fee_rate); //Variable selling fee
            let selling_price_per_coin = this.coins_on_hand_value == 0 || this.percentage_coins_to_sell == 0 ? 0 : (net_proceeds_bank + variable_selling_fee) / (this.coins_on_hand_value * percentage_coins_to_sell); //Selling price per full coin
            let gross_proceeds = coin_sell * selling_price_per_coin; //Gross proceeds
            let net_profit_loss = net_proceeds_bank - (this.basis_coins_on_hand_value * percentage_coins_to_sell); //Net profit (loss) $

            let net_profit_loss_percentage_ratio = this.selling_price_target_value == 0 || this.basis_coins_on_hand_value == 0 || percentage_coins_to_sell == 0 ? 0 : net_profit_loss / (this.basis_coins_on_hand_value * percentage_coins_to_sell / 100); //Net profit (loss) % [ratio to this sell's basis]

            let gain_exclude_selling = net_profit_loss + variable_selling_fee; //Gain (exclude selling fee)

            let basis_after_sale = this.basis_coins_on_hand_value * (1 - percentage_coins_to_sell); //Basis after sale

            let coins_after_sale = this.coins_on_hand_value * (1 - percentage_coins_to_sell); //Coins after sale


            this.net_proceeds_percentage_result = {
                coin_sell: parseFloat(coin_sell),
                selling_price_per_coin: parseFloat(selling_price_per_coin),
                gross_proceeds: parseFloat(gross_proceeds),
                variable_selling_fee: parseFloat(variable_selling_fee),
                net_proceeds_bank: parseFloat(net_proceeds_bank),
                net_profit_loss: parseFloat(net_profit_loss),
                net_proceeds_percentage_ratio: parseFloat(this.net_proceeds_percentage_ratio_target),
                net_profit_loss_percentage_ratio: parseFloat(net_profit_loss_percentage_ratio),
                gain_exclude_selling: parseFloat(Math.abs(gain_exclude_selling)),
                basis_after_sale: parseFloat(basis_after_sale),
                coins_after_sale: parseFloat(coins_after_sale),
                variable_selling_percentage: parseFloat(this.fee_rate)
            }

        },

        calculatNetProfitLossResult() {
            // 4. Net profit (loss) $ target
            if (!this.checkValidation() || this.net_profit_loss_target_value == 0) {
                this.net_profit_loss_result = {};
                return;
            }

            let percentage_coins_to_sell = this.coin_sell_symbol == '%' ? this.percentage_coins_to_sell / 100 : this.percentage_coins_to_sell / this.coins_on_hand_value; //Percentage of coins to sell//Percentage of coins to sell
            let coin_sell = this.coins_on_hand_value * percentage_coins_to_sell; //Coins to sell
            let fee_rate = parseFloat(this.fee_rate) / 100; //Fee rate
            let net_profit_loss = parseFloat(this.net_profit_loss_target_value) == 0 ? 0 : parseFloat(this.net_profit_loss_target_value) //Net profit (loss) $


            let net_proceeds_bank = net_profit_loss + (this.basis_coins_on_hand_value * percentage_coins_to_sell); //Net proceeds $ to bank or reinvest
            let net_proceeds_percentage_ratio = this.basis_coins_on_hand_value == 0 || percentage_coins_to_sell == 0 ? 0 : net_proceeds_bank / (this.basis_coins_on_hand_value * percentage_coins_to_sell / 100)  //Net proceeds % [ratio to this sell's basis]
            let variable_selling_fee = (net_proceeds_bank * fee_rate) / (1 - fee_rate); //Variable selling fee
            let selling_price_per_coin = this.coins_on_hand_value == 0 || this.percentage_coins_to_sell == 0 ? 0 : (net_proceeds_bank + variable_selling_fee) / (this.coins_on_hand_value * percentage_coins_to_sell); //Selling price per full coin
            let gross_proceeds = coin_sell * selling_price_per_coin; //Gross proceeds

            let net_profit_loss_percentage_ratio = this.selling_price_target_value == 0 || this.basis_coins_on_hand_value == 0 || percentage_coins_to_sell == 0 ? 0 : net_profit_loss / (this.basis_coins_on_hand_value * percentage_coins_to_sell / 100); //Net profit (loss) % [ratio to this sell's basis]

            let gain_exclude_selling = net_profit_loss + variable_selling_fee; //Gain (exclude selling fee)

            let basis_after_sale = this.basis_coins_on_hand_value * (1 - percentage_coins_to_sell); //Basis after sale

            let coins_after_sale = this.coins_on_hand_value * (1 - percentage_coins_to_sell); //Coins after sale

            this.net_profit_loss_result = {
                coin_sell: parseFloat(coin_sell),
                selling_price_per_coin: parseFloat(selling_price_per_coin),
                gross_proceeds: parseFloat(gross_proceeds),
                variable_selling_fee: parseFloat(variable_selling_fee),
                net_proceeds_bank: parseFloat(net_proceeds_bank),
                net_profit_loss: parseFloat(net_profit_loss),
                net_proceeds_percentage_ratio: parseFloat(net_proceeds_percentage_ratio),
                net_profit_loss_percentage_ratio: parseFloat(net_profit_loss_percentage_ratio),
                gain_exclude_selling: parseFloat(Math.abs(gain_exclude_selling)),
                basis_after_sale: parseFloat(basis_after_sale),
                coins_after_sale: parseFloat(coins_after_sale),
                variable_selling_percentage: parseFloat(this.fee_rate)
            }

        },
        calculatNetProfitLossPercentageResult() {
            // 5. Net profit (loss) target [ratio to this sell's basis]
            if (!this.checkValidation() || this.net_profit_loss_percentage_ratio_target == 0) {
                this.net_profit_loss_percentage_result = {};
                return;
            }


            let percentage_coins_to_sell = this.coin_sell_symbol == '%' ? this.percentage_coins_to_sell / 100 : this.percentage_coins_to_sell / this.coins_on_hand_value; //Percentage of coins to sell//Percentage of coins to sell
            let coin_sell = this.coins_on_hand_value * percentage_coins_to_sell; //Coins to sell
            let fee_rate = parseFloat(this.fee_rate) / 100; //Fee rate
            let net_profit_loss_percentage_ratio = this.net_profit_loss_percentage_ratio_target == 0 ? 0 : this.net_profit_loss_percentage_ratio_target //Net profit (loss) % [ratio to this sell's basis]

            let net_profit_loss = (this.basis_coins_on_hand_value * percentage_coins_to_sell) * (net_profit_loss_percentage_ratio / 100); //Net profit (loss) $
            let net_proceeds_bank = net_profit_loss + (this.basis_coins_on_hand_value * percentage_coins_to_sell); //Net proceeds $ to bank or reinvest

            let net_proceeds_percentage_ratio = this.basis_coins_on_hand_value == 0 || percentage_coins_to_sell == 0 ? 0 : net_proceeds_bank / (this.basis_coins_on_hand_value * percentage_coins_to_sell / 100)  //Net proceeds % [ratio to this sell's basis]
            let variable_selling_fee = (net_proceeds_bank * fee_rate) / (1 - fee_rate); //Variable selling fee
            let selling_price_per_coin = this.coins_on_hand_value == 0 || this.percentage_coins_to_sell == 0 ? 0 : (net_proceeds_bank + variable_selling_fee) / (this.coins_on_hand_value * percentage_coins_to_sell); //Selling price per full coin
            let gross_proceeds = coin_sell * selling_price_per_coin; //Gross proceeds


            let gain_exclude_selling = net_profit_loss + variable_selling_fee; //Gain (exclude selling fee)

            let basis_after_sale = this.basis_coins_on_hand_value * (1 - percentage_coins_to_sell); //Basis after sale

            let coins_after_sale = this.coins_on_hand_value * (1 - percentage_coins_to_sell); //Coins after sale

            this.net_profit_loss_percentage_result = {
                coin_sell: parseFloat(coin_sell),
                selling_price_per_coin: parseFloat(selling_price_per_coin),
                gross_proceeds: parseFloat(gross_proceeds),
                variable_selling_fee: parseFloat(variable_selling_fee),
                net_proceeds_bank: parseFloat(net_proceeds_bank),
                net_profit_loss: parseFloat(net_profit_loss),
                net_proceeds_percentage_ratio: parseFloat(net_proceeds_percentage_ratio),
                net_profit_loss_percentage_ratio: parseFloat(net_profit_loss_percentage_ratio),
                gain_exclude_selling: parseFloat(Math.abs(gain_exclude_selling)),
                basis_after_sale: parseFloat(basis_after_sale),
                coins_after_sale: parseFloat(coins_after_sale),
                variable_selling_percentage: parseFloat(this.fee_rate)
            }


        },
        isNumberValid(number) {
            const numberRegex = /^-?\d*\.?\d*$/;
            // /^\d*\.?\d*$/;
            return numberRegex.test(number);
        },
        validatePercentage(percentage) {
            return percentage > 0 && percentage <= 100;
        },
        checkValidation() {
            this.isBasisOfCoinValid = true;
            this.isCoinsOnHandValid = true;
            this.isPercentageOfCoinsOnHandValid = true;
            this.isFeeRateValid = true;
            this.isCostMethodMemoValid = false;
            this.basis_coins_on_hand_value == '' || this.basis_coins_on_hand_value == null ? this.isBasisOfCoinValid = false : this.isBasisOfCoinValid = true;
            this.coins_on_hand_value == '' || this.coins_on_hand_value == null ? this.isCoinsOnHandValid = false : this.isCoinsOnHandValid = true;
            this.percentage_coins_to_sell == '' || this.percentage_coins_to_sell == null ? this.isPercentageOfCoinsOnHandValid = false : this.isPercentageOfCoinsOnHandValid = true;
            this.fee_rate == '' || this.fee_rate == null ? this.isFeeRateValid = false : this.isFeeRateValid = true;

            this.cost_method_memo == '' || this.cost_method_memo == null ? this.isCostMethodMemoValid = false : this.isCostMethodMemoValid = true;

            // console.log('cost method memo', this.isBasisOfCoinValid, this.isCoinsOnHandValid, this.isPercentageOfCoinsOnHandValid, this.isFeeRateValid, this.isCostMethodMemoValid)
            // if (!this.isBasisOfCoinValid || !this.isCoinsOnHandValid || !this.isPercentageOfCoinsOnHandValid || !this.isFeeRateValid || !this.isCostMethodMemoValid) {
            //     console.log('here test')
            //     return false;
            // }


            // this.selling_price_target_value == '' || this.selling_price_target_value == null ? this.isSellingPriceTargetValid = false : this.isSellingPriceTargetValid = true;
            // this.net_proceeds_bank_target_value == '' || this.net_proceeds_bank_target_value == null ? this.isNetProceedsBankTargetValid = false : this.isNetProceedsBankTargetValid = true;
            // this.net_proceeds_percentage_ratio_target == '' || this.net_proceeds_percentage_ratio_target == null ? this.isNetProceedsPercentageRatioTargetValid = false : this.isNetProceedsPercentageRatioTargetValid = true;
            // this.net_profit_loss_target_value == '' || this.net_profit_loss_target_value == null ? this.isNetProfitLossTargetValid = false : this.isNetProfitLossTargetValid = true;
            // this.net_profit_loss_percentage_ratio_target == '' || this.net_profit_loss_percentage_ratio_target == null ? this.isNetProfitLossPercentageRatioTargetValid = false : this.isNetProfitLossPercentageRatioTargetValid = true;
            let selling_price_target = parseFloat(this.selling_price_target_value)
            if (selling_price_target ==  0) {
                this.errors.selling_price_target = "Make <> 0"
                this.isSellingPriceTargetValid = false;

            }
            else {
                this.errors.selling_price_target = ""
                this.isSellingPriceTargetValid = true;
            }
            // if (!this.isNumberValid(this.selling_price_target_value) && this.isSellingPriceTargetValid) {
            //     this.errors.selling_price_target = "Make > 0"
            //     this.isSellingPriceTargetValid = false;
            // } else if (this.isNumberValid(this.selling_price_target_value) && this.selling_price_target_value <= 0 && this.selling_price_target_value) {
            //     this.errors.selling_price_target = "Make > 0";
            //     this.isSellingPriceTargetValid = false;
            // }
            // else {
            //     this.errors.selling_price_target = "Make > 0"
            // }

            if (this.cost_method_memo == '' || this.cost_method_memo == null) {
                this.isCostMethodMemoValid = false;
                this.errors.cost_method_memo = "Required"
            } else {
                this.isCostMethodMemoValid = true;
                this.errors.cost_method_memo = ""
            }

            let net_proceeds_bank_target = parseFloat(this.net_proceeds_bank_target_value)

            if (net_proceeds_bank_target <= 0) {
                this.errors.net_proceeds_bank_target = "Make > 0"
                this.isNetProceedsBankTargetValid = false;
            }
            else {
                this.errors.net_proceeds_bank_target = ""
                this.isNetProceedsBankTargetValid = true;
            }

            let net_proceeds_percentage_ratio_target = parseFloat(this.net_proceeds_percentage_ratio_target)

            if (net_proceeds_percentage_ratio_target <= 0) {
                this.errors.net_proceeds_percentage_ratio_target = "Make > 0"
                this.isNetProceedsPercentageRatioTargetValid = false;
            }
            else {
                this.errors.net_proceeds_percentage_ratio_target = ""
                this.isNetProceedsPercentageRatioTargetValid = true;
            }


            if (parseFloat(this.net_profit_loss_target_value) == 0) {
                this.errors.net_profit_loss_target = "Make <> 0"
                this.isNetProfitLossTargetValid = false;
            }
            else {
                this.errors.net_profit_loss_target = ""
                this.isNetProfitLossTargetValid = true;
            }



            if (parseFloat(this.net_profit_loss_percentage_ratio_target) == 0) {
                this.errors.net_profit_loss_percentage_ratio_target = "Make <> 0"
                this.isNetProfitLossPercentageRatioTargetValid = false;
            }
            else {
                this.errors.net_profit_loss_percentage_ratio_target = ""
                this.isNetProfitLossPercentageRatioTargetValid = true;
            }

            let basis_coins_on_hand = parseFloat(this.basis_coins_on_hand_value)

            if (basis_coins_on_hand <= 0) {
                this.isBasisOfCoinValid = false;
                this.errors.basis_coins_on_hand = "Make > 0"

            } else {
                this.isBasisOfCoinValid = true;
                this.errors.basis_coins_on_hand = ""
            }
            let coins_on_hand = parseFloat(this.coins_on_hand_value);
            if (coins_on_hand <= 0) {
                this.isCoinsOnHandValid = false;
                this.errors.coins_on_hand = "Make > 0"
            } else {
                this.isCoinsOnHandValid = true;
            }

            let percentage_coins_to_sell = parseFloat(this.percentage_coins_to_sell)
            if(this.coin_sell_symbol == '%'){
                if (percentage_coins_to_sell < 0 || percentage_coins_to_sell > 100) {
                    console.log('inside condition')
                    this.errors.percentage_coins_to_sell = "Make > 0 and <=100"
                    this.isPercentageOfCoinsOnHandValid = false;
                }
                else {
                    this.errors.percentage_coins_to_sell = ""
                    this.isPercentageOfCoinsOnHandValid = true;
                }
            }else{
                if (percentage_coins_to_sell <= 0) {
                    console.log('bingo');
                    this.errors.percentage_coins_to_sell = "Make > 0"
                    this.isPercentageOfCoinsOnHandValid = false;
                }
                else if (percentage_coins_to_sell > coins_on_hand) {
                    console.log('mingo');
                    this.errors.percentage_coins_to_sell = "Make <= " + coins_on_hand;
                    this.isPercentageOfCoinsOnHandValid = false;
                }
                else {
                    this.errors.percentage_coins_to_sell = ""
                    this.isPercentageOfCoinsOnHandValid = true;
                }
            }

            let fee_rate = parseFloat(this.fee_rate)
            if (fee_rate < 0 || fee_rate > 1) {
                this.errors.fee_rate = "Make >= 0 and <= 1"
                this.isFeeRateValid = false;
            }
            else {
                this.errors.fee_rate = ""
                this.isFeeRateValid = true;
            }
            if (
                !(
                    this.isBasisOfCoinValid && this.isCoinsOnHandValid && this.isPercentageOfCoinsOnHandValid && this.isFeeRateValid && this.isCostMethodMemoValid)
            ) {
                console.log('if false')
                this.is_exportable = false;
            } else {
                if (
                    (
                        this.selling_price_target_value == ''
                        || this.selling_price_target_value == null
                        || this.selling_price_target_value == 0
                        || this.selling_price_target_value == 'NaN'
                    )
                    &&
                    (
                        this.net_profit_loss_target_value == ''
                        || this.net_profit_loss_target_value == null
                        || this.net_profit_loss_target_value == 0
                        || this.net_profit_loss_target_value == 'NaN'
                    )

                    &&
                    (
                        this.net_profit_loss_percentage_ratio_target == ''
                        || this.net_profit_loss_percentage_ratio_target == null
                        || this.net_profit_loss_percentage_ratio_target == 0
                        || this.net_profit_loss_percentage_ratio_target == 'NaN'
                    )

                    &&
                    (
                        this.net_proceeds_percentage_ratio_target == ''
                        || this.net_proceeds_percentage_ratio_target == null
                        || this.net_proceeds_percentage_ratio_target == 0
                        || this.net_proceeds_percentage_ratio_target == 'NaN'
                    )
                    // &&
                    // (
                    //     this.cost_method_memo == ''
                    //     || this.cost_method_memo == null
                    //     || this.cost_method_memo == 0
                    //     || this.cost_method_memo == 'NaN'
                    // )
                    &&
                    (this.net_proceeds_bank_target_value == ''
                        || this.net_proceeds_bank_target_value == null
                        || this.net_proceeds_bank_target_value == 0
                        || this.net_proceeds_bank_target_value == 'NaN'
                    )

                ) {
                    console.log('is exportable false')
                    this.is_exportable = false;
                }
                else {
                    console.log('is exportable true', this.net_profit_loss_target == "0")


                    this.is_exportable = (parseFloat(this.selling_price_target_value) != 0
                        && parseFloat(this.net_profit_loss_target_value) != 0
                        && parseFloat(this.net_profit_loss_percentage_ratio_target) != 0
                        && parseFloat(this.net_proceeds_percentage_ratio_target) != 0
                        && parseFloat(this.net_proceeds_bank_target_value) != 0)
                        && !this.warning_error;
                }
            }

            return this.isBasisOfCoinValid
                && this.isCoinsOnHandValid
                && this.isPercentageOfCoinsOnHandValid
                && this.isFeeRateValid
                && this.isCostMethodMemoValid;

            // && this.isSellingPriceTargetValid
            // && this.isNetProceedsBankTargetValid
            // && this.isNetProceedsPercentageRatioTargetValid
            // && this.isNetProfitLossTargetValid
            // && this.isNetProfitLossPercentageRatioTargetValid;

        },
        baseChanged() {
            if (this.checkValidation()) {
                if (!isNaN(parseFloat(this.selling_price_target_value)) && this.selling_price_target_value != '' && this.selling_price_target_value != null && this.isSellingPriceTargetValid) {
                    this.calculateSellingPriceResult();
                }
                if (!isNaN(parseFloat(this.net_profit_loss_target_value)) && this.net_profit_loss_target_value != '' && this.net_profit_loss_target_value != null && this.isNetProfitLossTargetValid) {
                    this.calculatNetProfitLossResult();
                }
                if (!isNaN(parseFloat(this.net_profit_loss_percentage_ratio_target)) && this.net_profit_loss_percentage_ratio_target != '' && this.net_profit_loss_percentage_ratio_target != null && this.isNetProfitLossPercentageRatioTargetValid) {
                    this.calculatNetProfitLossPercentageResult();
                }
                if (!isNaN(parseFloat(this.net_proceeds_percentage_ratio_target)) && this.net_proceeds_percentage_ratio_target != '' && this.net_proceeds_percentage_ratio_target != null && this.isNetProceedsPercentageRatioTargetValid) {
                    this.calculatNetProceedsPercentageResult();
                }
                if (!isNaN(parseFloat(this.net_proceeds_bank_target_value)) && this.net_proceeds_bank_target_value != '' && this.net_proceeds_bank_target_value != null && this.isNetProceedsBankTargetValid) {
                    this.calculatNetProceedsBankResult();
                }
            } else {
                this.selling_price_result = {};
                this.net_profit_loss_result = {};
                this.net_profit_loss_percentage_result = {};
                this.net_proceeds_percentage_result = {};
                this.net_proceeds_bank_result = {};

            }

        },
        roundInputValue(event, dataProp, decimals = 8) {
            this[dataProp] = parseFloat(event.target.value).toFixed(decimals);

            // let value = this[dataProp].toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            // console.log(value)
            // this[dataProp] = value
            // this[dataProp] = Math.round(event.target.value * 100) / 100
            // this[dataProp] = Math.round(parseFloat(this[dataProp]) * 10 ** decimals) / 10 ** decimals;
        },
        calculateGuidanceResult() {

            let is_valid = this.selected_coin != null
                && (this.fee_rate != null && this.fee_rate != '')
                && (this.cost_method_memo != null && this.cost_method_memo != '')
                && (this.basis_coins_on_hand != null && this.basis_coins_on_hand != '')
                && (this.coins_on_hand != null && this.coins_on_hand != '')
                && (this.percentage_coins_to_sell != null && this.percentage_coins_to_sell != '');
            if (!is_valid) {
                this.guidance_selling_price_full_coin = null;
                this.guidance_net_profit_loss_percentage = null;
                this.guidance_net_profit_loss = null;
                this.guidance_net_proceeds = null;
                this.guidance_net_proceeds_percentage = null;
                return;
            }

            let percentage_coins_to_sell = this.coin_sell_symbol == '%' ? this.percentage_coins_to_sell / 100 : this.percentage_coins_to_sell / this.coins_on_hand_value; //Percentage of coins to sell//Percentage of coins to sell
            let coin_sell = this.coins_on_hand_value * percentage_coins_to_sell; //Coins to sell
            let selling_price_per_coin = this.selected_coin_price == 0 ? 0 : this.selected_coin_price; //Selling price per full coin
            let gross_proceeds = coin_sell * selling_price_per_coin; //Gross proceeds
            let variable_selling_fee = gross_proceeds * this.fee_rate / 100; //Variable selling fee
            let net_proceeds_bank = gross_proceeds - variable_selling_fee; //Net proceeds $ to bank or reinvest
            let net_profit_loss = net_proceeds_bank - (this.basis_coins_on_hand_value * (percentage_coins_to_sell)); //Net profit (loss) $
            let net_proceeds_percentage_ratio = this.basis_coins_on_hand_value == 0 || percentage_coins_to_sell == 0 ? 0 : net_proceeds_bank / (this.basis_coins_on_hand_value * (percentage_coins_to_sell / 100)); //Net proceeds % [ratio to this sell's basis]
            let net_profit_loss_percentage_ratio = this.selected_coin_price == 0 || this.basis_coins_on_hand_value == 0 || percentage_coins_to_sell == 0 ? 0 : net_profit_loss / (this.basis_coins_on_hand_value * percentage_coins_to_sell / 100); //Net profit (loss) % [ratio to this sell's basis]


            this.guidance_selling_price_full_coin = this.formatNumber(selling_price_per_coin);
            this.guidance_net_profit_loss_percentage = this.convertToDecimal(net_profit_loss_percentage_ratio, 8);
            this.guidance_net_profit_loss = this.formatNumber(net_profit_loss);
            this.guidance_net_proceeds = this.formatNumber(net_proceeds_bank);
            this.guidance_net_proceeds_percentage = this.convertToDecimal(net_proceeds_percentage_ratio, 8);

        }
    },
    computed: {
        upperInputsFilled() {
            this.calculateGuidanceResult();
            return (this.selected_coin != null || this.selected_coin != '')
                && (this.fee_rate != null && this.fee_rate != '')
                && (this.cost_method_memo != null && this.cost_method_memo != '')
                && (this.basis_coins_on_hand != null && this.basis_coins_on_hand != '')
                && (this.coins_on_hand != null && this.coins_on_hand != '')
                && (this.percentage_coins_to_sell != null && this.percentage_coins_to_sell != '')
        },
        targetInputsFilled() {
            return (this.selling_price_target != null && this.selling_price_target != '')
                || (this.net_profit_loss_target != null && this.net_profit_loss_target != '')
                || (this.net_profit_loss_percentage_ratio_target != null && this.net_profit_loss_percentage_ratio_target != '')
                || (this.net_proceeds_bank_target != null && this.net_proceeds_bank_target != '')
                || (this.net_proceeds_percentage_ratio_target != null && this.net_proceeds_percentage_ratio_target != '')

        },
    }
}
</script>
<style scoped>
.mobile-export-button {
    width: 120px !important;
    padding-left: .5rem;
    padding-right: .5rem;
    padding-top: .25rem;
    padding-bottom: .25rem;
    background-color: #4472C4 !important;
    border: none !important;
    border-radius: 10px !important;
    color: white !important;
}

.mobile-export-button-disabled {
    width: 120px !important;
    padding-left: .5rem;
    padding-right: .5rem;
    padding-top: .25rem;
    padding-bottom: .25rem;
    background-color: #5a6268 !important;
    border: none !important;
    border-radius: 10px !important;
    color: black !important;
}


.custom-table .table-responsive {
    overflow-x: auto;
}

.custom-table {
    width: 100%;
}

.custom-box {
    border: 1px solid #ccc;
    border-radius: 8px;
    padding: 10px;
    min-height: 200px;
}

.target-column {
    background-color: #00B050 !important;
    color: white !important;
}

.icon-cell {
    border: none !important;
}

.mobile-table {
    table-layout: fixed;
}

.mobile-table .icon-cell {
    width: 10%;
    /* Set the desired width for the icon cells */
    text-align: center;
    /* Center the content within the cell */
}</style>
