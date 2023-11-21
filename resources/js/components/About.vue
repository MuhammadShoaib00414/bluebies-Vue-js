<template>
    <div class="container">
        <h1>Input Fields</h1>
                <label>Enter Value:</label>
            <input v-model="formattedValue"/>
            <p>Float Value for Calculation: {{ floatValue }}</p>
        <div class="row border border-dark">
            <div class="col-md-3">
                <div class="form-group">
                    <label for="input1">Fee rate:</label>
                    <input type="number" class="form-control" v-model="fee_rate" placeholder="Enter value">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="input2">Basis of coins on hand $:</label>
                    <input type="number" class="form-control" v-model="basis_coins_on_hand" placeholder="Enter value">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="input2">Coins on hand:</label>
                    <input type="number" class="form-control" v-model="coins_on_hand" placeholder="Enter value">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="input2">% of coins to sell:</label>
                    <input type="number" class="form-control" v-model="percentage_coins_to_sell" placeholder="Enter value">
                </div>
            </div>
        </div>
        <div class="row border mt-2 border-dark">
            <div class="col-md-3">
                <div class="form-group">
                    <label>Selling price $ target:</label>
                    <input type="number" class="form-control" v-model="selling_price_target" @input="fetchCoinPrice" id="input5"
                        placeholder="Enter value for outer">
                </div>
            </div>
            <div class="col-md-12">
                <h2>Selling Price Result:</h2>
                <div id="selling_result">
                </div>
            </div>
        </div>
        <div class="row border mt-2 border-dark">
            <div class="col-md-3">
                <div class="form-group">
                    <label>Net proceeds $ target to bank or re-invest:</label>
                    <input type="number" class="form-control" v-model="net_proceeds_bank_target" @input="calculatNetProceedsBankResult" id="input5"
                        placeholder="Enter value for outer">
                </div>
            </div>
            <div class="col-md-12">
                <h2>Net proceeds $ target to bank or re-invest Result:</h2>
                <div id="net_proceeds_bank_result">
                </div>
            </div>
        </div>
        <div class="row border mt-2 border-dark">
            <div class="col-md-3">
                <div class="form-group">
                    <label>Net proceeds % target [ratio to this sell's basis]:</label>
                    <input type="number" class="form-control" v-model="net_proceeds_percentage_ratio_target" @input="calculatNetProceedsPercentageResult" placeholder="Enter value for outer">
                </div>
            </div>
            <div class="col-md-12">
                <h2>Net proceeds % target [ratio to this sell's basis] Result:</h2>
                <div id="net_proceeds_percentage_ratio_result">
                </div>
            </div>
        </div>
        <div class="row border mt-2 border-dark">
            <div class="col-md-3">
                <div class="form-group">
                    <label>Net profit (loss) $ target:</label>
                    <input type="number" class="form-control" v-model="net_profit_loss_target" @input="calculatNetProfitLossResult" placeholder="Enter value for outer">
                </div>
            </div>
            <div class="col-md-12">
                <h2>Net profit (loss) $ target Result:</h2>
                <div id="net_profit_loss_result">
                </div>
            </div>
        </div>
        <div class="row border mt-2 border-dark">
            <div class="col-md-3">
                <div class="form-group">
                    <label> Net profit (loss) % target [ratio to this sell's basis]:</label>
                    <input type="number" class="form-control" v-model="net_profit_loss_percentage_ratio_target" @input="calculatNetProfitLossPercentageResult" placeholder="Enter value for outer">
                </div>
            </div>
            <div class="col-md-12">
                <h2> Net profit (loss) % target [ratio to this sell's basis] Result:</h2>
                <div id="net_profit_loss_percentage_result">
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    name: 'Home',
    data() {
        return {
        fee_rate : 0.40,
        basis_coins_on_hand : 28000,
        coins_on_hand : 1.1,
        percentage_coins_to_sell : 10,
        selling_price_target : 45000,
        net_proceeds_bank_target : null,
        net_proceeds_percentage_ratio_target :null,
        net_profit_loss_target : null,
        net_profit_loss_percentage_ratio_target : null,
        formattedValue: '', // The comma-separated value entered by the user
        floatValue: 0.0,    // The float value used for calculations
        }


        },
        computed: {
        formattedValueWithCommas() {
            console.log('compute')
        return this.formattedValue.replace(/\B(?=(\d{3})+(?!\d))/g, ',');
        },
    },
    methods: {
        updateFloatValue() {
      const numericValue = parseFloat(this.formattedValue.replace(/,/g, ''));
      if (!isNaN(numericValue)) {
          console.log(numericValue);
        this.floatValue = numericValue;
      } else {
        this.floatValue = 0.0;
      }
    },
        fetchCoinPrice(){
            async function fetchUSDTPrices() {
  try {
    const pairsUrl = 'https://api.pro.coinbase.com/products/';
    const pairsResponse = await axios.get(pairsUrl);
    const pairsData = pairsResponse.data;

    const usdtPairs = pairsData.filter(pair => pair.quote_currency === 'USDT');

    const tickerUrls = usdtPairs.map(pair => `https://api.pro.coinbase.com/products/${pair.id}/ticker/`);

    const tickerResponses = await Promise.all(tickerUrls.map(url => axios.get(url)));
    const tickerData = tickerResponses.map(response => response.data);

    tickerData.forEach(data => {
      const productId = data.product_id;
      const price = data.price;
      console.log(`Trading Pair: ${productId}, Price: ${price}`);
    });
  } catch (error) {
    console.error('Error fetching USDT prices:', error);
  }
}

fetchUSDTPrices();

        },
        calculateSellingPriceResult: function () {
            let percentage_coins_to_sell = this.percentage_coins_to_sell / 100; //Percentage of coins to sell
            let coin_sell = this.coins_on_hand * percentage_coins_to_sell; //Coins to sell
            let selling_price_per_coin = this.selling_price_target == 0 ? 0 : this.selling_price_target; //Selling price per full coin
            let gross_proceeds = coin_sell * selling_price_per_coin; //Gross proceeds
            let variable_selling_fee = gross_proceeds * this.fee_rate / 100; //Variable selling fee
            let net_proceeds_bank = gross_proceeds - variable_selling_fee; //Net proceeds $ to bank or reinvest

            let net_profit_loss = net_proceeds_bank - (this.basis_coins_on_hand * (percentage_coins_to_sell)); //Net profit (loss) $

            let net_proceeds_percentage_ratio = this.basis_coins_on_hand == 0 || percentage_coins_to_sell == 0 ? 0 : net_proceeds_bank / (this.basis_coins_on_hand * (percentage_coins_to_sell / 100)); //Net proceeds % [ratio to this sell's basis]

            let net_profit_loss_percentage_ratio = this.selling_price_target == 0 || this.basis_coins_on_hand == 0 || percentage_coins_to_sell == 0 ? 0 : net_profit_loss / (this.basis_coins_on_hand * percentage_coins_to_sell / 100); //Net profit (loss) % [ratio to this sell's basis]

            let gain_exclude_selling = net_profit_loss + variable_selling_fee; //Gain (exclude selling fee)

            let basis_after_sale = this.basis_coins_on_hand * (1 - percentage_coins_to_sell); //Basis after sale

            let coins_after_sale = this.coins_on_hand * (1 - percentage_coins_to_sell); //Coins after sale

            let obj = {
                coin_sell: coin_sell,
                selling_price_per_coin: selling_price_per_coin,
                gross_proceeds: gross_proceeds,
                variable_selling_fee: variable_selling_fee,
                net_proceeds_bank: net_proceeds_bank,
                net_profit_loss: Math.abs(net_profit_loss),
                net_proceeds_percentage_ratio: net_proceeds_percentage_ratio,
                net_profit_loss_percentage_ratio: net_profit_loss_percentage_ratio,
                gain_exclude_selling: Math.abs(gain_exclude_selling),
                basis_after_sale: basis_after_sale,
                coins_after_sale: coins_after_sale
            }
            let template = this.assignToTemplate(obj);
            document.getElementById('selling_result').innerHTML = template;

        },
        calculatNetProceedsBankResult(){
            // 2nd point
            let percentage_coins_to_sell = this.percentage_coins_to_sell / 100; //Percentage of coins to sell

            let coin_sell = this.coins_on_hand * percentage_coins_to_sell; //Coins to sell


            let fee_rate = this.fee_rate / 100; //Fee rate

            let variable_selling_fee = (this.net_proceeds_bank_target * fee_rate)/(1-fee_rate); //Variable selling fee



            let selling_price_per_coin = this.coins_on_hand == 0 || this.percentage_coins_to_sell == 0 ? 0 : ((this.net_proceeds_bank_target + variable_selling_fee)/(this.coins_on_hand * percentage_coins_to_sell)); //Selling price per full coin
            let gross_proceeds = coin_sell * selling_price_per_coin; //Gross proceeds

            let net_proceeds_bank = this.net_proceeds_bank_target == 0 ? 0 : this.net_proceeds_bank_target; //Net proceeds $ to bank or reinvest

            let net_profit_loss = net_proceeds_bank -  (this.basis_coins_on_hand * percentage_coins_to_sell); //Net profit (loss) $

            let net_proceeds_percentage_ratio = this.basis_coins_on_hand == 0 || percentage_coins_to_sell == 0 ? 0 : net_proceeds_bank / (this.basis_coins_on_hand * (percentage_coins_to_sell / 100)); //Net proceeds % [ratio to this sell's basis]

            let net_profit_loss_percentage_ratio = this.selling_price_target == 0 || this.basis_coins_on_hand == 0 || percentage_coins_to_sell == 0 ? 0 : net_profit_loss / (this.basis_coins_on_hand * percentage_coins_to_sell / 100); //Net profit (loss) % [ratio to this sell's basis]

            let gain_exclude_selling = net_profit_loss + variable_selling_fee; //Gain (exclude selling fee)

            let basis_after_sale = this.basis_coins_on_hand * (1 - percentage_coins_to_sell); //Basis after sale

            let coins_after_sale = this.coins_on_hand * (1 - percentage_coins_to_sell); //Coins after sale

            let obj = {
                coin_sell: coin_sell,
                selling_price_per_coin: selling_price_per_coin,
                gross_proceeds: gross_proceeds,
                variable_selling_fee: variable_selling_fee,
                net_proceeds_bank: net_proceeds_bank,
                net_profit_loss: Math.abs(net_profit_loss),
                net_proceeds_percentage_ratio: net_proceeds_percentage_ratio,
                net_profit_loss_percentage_ratio: net_profit_loss_percentage_ratio,
                gain_exclude_selling: Math.abs(gain_exclude_selling),
                basis_after_sale: basis_after_sale,
                coins_after_sale: coins_after_sale
            }
            let template = this.assignToTemplate(obj);
            document.getElementById('net_proceeds_bank_result').innerHTML = template;
        },
        calculatNetProceedsPercentageResult(){
            // 3rd point 3. Net proceeds % target [ratio to this sell's basis]
            let percentage_coins_to_sell = this.percentage_coins_to_sell / 100; //Percentage of coins to sell
            let coin_sell = this.coins_on_hand * percentage_coins_to_sell; //Coins to sell


            let fee_rate = this.fee_rate/100; //Fee rate





            let net_proceeds_percentage_ratio = this.net_proceeds_percentage_ratio_target == 0 ? 0 : this.net_proceeds_percentage_ratio_target / 100 //Net proceeds % [ratio to this sell's basis]

            let net_proceeds_bank = net_proceeds_percentage_ratio * (this.basis_coins_on_hand * percentage_coins_to_sell); //Net proceeds $ to bank or reinvest
            let variable_selling_fee = (net_proceeds_bank * fee_rate)/(1-fee_rate); //Variable selling fee
            let selling_price_per_coin = this.coins_on_hand == 0 || this.percentage_coins_to_sell == 0 ? 0 : (net_proceeds_bank + variable_selling_fee) / (this.coins_on_hand * percentage_coins_to_sell); //Selling price per full coin
            let gross_proceeds = coin_sell * selling_price_per_coin; //Gross proceeds
            let net_profit_loss = net_proceeds_bank -  (this.basis_coins_on_hand * percentage_coins_to_sell); //Net profit (loss) $

            let net_profit_loss_percentage_ratio = this.selling_price_target == 0 || this.basis_coins_on_hand == 0 || percentage_coins_to_sell == 0 ? 0 : net_profit_loss / (this.basis_coins_on_hand * percentage_coins_to_sell / 100); //Net profit (loss) % [ratio to this sell's basis]

            let gain_exclude_selling = net_profit_loss + variable_selling_fee; //Gain (exclude selling fee)

            let basis_after_sale = this.basis_coins_on_hand * (1 - percentage_coins_to_sell); //Basis after sale

            let coins_after_sale = this.coins_on_hand * (1 - percentage_coins_to_sell); //Coins after sale

            let obj = {
                coin_sell: coin_sell,
                selling_price_per_coin: selling_price_per_coin,
                gross_proceeds: gross_proceeds,
                variable_selling_fee: variable_selling_fee,
                net_proceeds_bank: net_proceeds_bank,
                net_profit_loss: Math.abs(net_profit_loss),
                net_proceeds_percentage_ratio: net_proceeds_percentage_ratio,
                net_profit_loss_percentage_ratio: net_profit_loss_percentage_ratio,
                gain_exclude_selling: Math.abs(gain_exclude_selling),
                basis_after_sale: basis_after_sale,
                coins_after_sale: coins_after_sale
            }
            let template = this.assignToTemplate(obj);
            document.getElementById('net_proceeds_percentage_ratio_result').innerHTML = template;
        },

        calculatNetProfitLossResult(){
        // 4. Net profit (loss) $ target
            let percentage_coins_to_sell = this.percentage_coins_to_sell / 100; //Percentage of coins to sell
            let coin_sell = this.coins_on_hand * percentage_coins_to_sell; //Coins to sell
            let fee_rate = this.fee_rate/100; //Fee rate
            let net_profit_loss = this.net_profit_loss_target == 0 ? 0 : this.net_profit_loss_target //Net profit (loss) $


            let net_proceeds_bank = net_profit_loss + (this.basis_coins_on_hand * percentage_coins_to_sell); //Net proceeds $ to bank or reinvest
            let net_proceeds_percentage_ratio = this.basis_coins_on_hand == 0 || percentage_coins_to_sell == 0 ? 0 : net_proceeds_bank / (this.basis_coins_on_hand * percentage_coins_to_sell / 100)  //Net proceeds % [ratio to this sell's basis]
            let variable_selling_fee = (net_proceeds_bank * fee_rate)/(1-fee_rate); //Variable selling fee
            let selling_price_per_coin = this.coins_on_hand == 0 || this.percentage_coins_to_sell == 0 ? 0 : (net_proceeds_bank + variable_selling_fee) / (this.coins_on_hand * percentage_coins_to_sell); //Selling price per full coin
            let gross_proceeds = coin_sell * selling_price_per_coin; //Gross proceeds

            let net_profit_loss_percentage_ratio = this.selling_price_target == 0 || this.basis_coins_on_hand == 0 || percentage_coins_to_sell == 0 ? 0 : net_profit_loss / (this.basis_coins_on_hand * percentage_coins_to_sell / 100); //Net profit (loss) % [ratio to this sell's basis]

            let gain_exclude_selling = net_profit_loss + variable_selling_fee; //Gain (exclude selling fee)

            let basis_after_sale = this.basis_coins_on_hand * (1 - percentage_coins_to_sell); //Basis after sale

            let coins_after_sale = this.coins_on_hand * (1 - percentage_coins_to_sell); //Coins after sale

            let obj = {
                coin_sell: coin_sell,
                selling_price_per_coin: selling_price_per_coin,
                gross_proceeds: gross_proceeds,
                variable_selling_fee: variable_selling_fee,
                net_proceeds_bank: net_proceeds_bank,
                net_profit_loss: Math.abs(net_profit_loss),
                net_proceeds_percentage_ratio: net_proceeds_percentage_ratio,
                net_profit_loss_percentage_ratio: net_profit_loss_percentage_ratio,
                gain_exclude_selling: Math.abs(gain_exclude_selling),
                basis_after_sale: basis_after_sale,
                coins_after_sale: coins_after_sale
            }
            let template = this.assignToTemplate(obj);
            document.getElementById('net_profit_loss_result').innerHTML = template;
        },
        calculatNetProfitLossPercentageResult(){
            // 5. Net profit (loss) % target [ratio to this sell's basis]
            let percentage_coins_to_sell = this.percentage_coins_to_sell / 100; //Percentage of coins to sell
            let coin_sell = this.coins_on_hand * percentage_coins_to_sell; //Coins to sell
            let fee_rate = this.fee_rate/100; //Fee rate
            let net_profit_loss_percentage_ratio = this.net_profit_loss_percentage_ratio_target == 0 ? 0 : this.net_profit_loss_percentage_ratio_target //Net profit (loss) % [ratio to this sell's basis]

            let net_profit_loss = (this.basis_coins_on_hand * percentage_coins_to_sell) * (net_profit_loss_percentage_ratio/100) ; //Net profit (loss) $
            let net_proceeds_bank = net_profit_loss + (this.basis_coins_on_hand * percentage_coins_to_sell); //Net proceeds $ to bank or reinvest

            let net_proceeds_percentage_ratio = this.basis_coins_on_hand == 0 || percentage_coins_to_sell == 0 ? 0 : net_proceeds_bank / (this.basis_coins_on_hand * percentage_coins_to_sell / 100)  //Net proceeds % [ratio to this sell's basis]
            let variable_selling_fee = (net_proceeds_bank * fee_rate)/(1-fee_rate); //Variable selling fee
            let selling_price_per_coin = this.coins_on_hand == 0 || this.percentage_coins_to_sell == 0 ? 0 : (net_proceeds_bank + variable_selling_fee) / (this.coins_on_hand * percentage_coins_to_sell); //Selling price per full coin
            let gross_proceeds = coin_sell * selling_price_per_coin; //Gross proceeds


            let gain_exclude_selling = net_profit_loss + variable_selling_fee; //Gain (exclude selling fee)

            let basis_after_sale = this.basis_coins_on_hand * (1 - percentage_coins_to_sell); //Basis after sale

            let coins_after_sale = this.coins_on_hand * (1 - percentage_coins_to_sell); //Coins after sale

            let obj = {
                coin_sell: coin_sell,
                selling_price_per_coin: selling_price_per_coin,
                gross_proceeds: gross_proceeds,
                variable_selling_fee: variable_selling_fee,
                net_proceeds_bank: net_proceeds_bank,
                net_profit_loss: Math.abs(net_profit_loss),
                net_proceeds_percentage_ratio: net_proceeds_percentage_ratio,
                net_profit_loss_percentage_ratio: net_profit_loss_percentage_ratio,
                gain_exclude_selling: Math.abs(gain_exclude_selling),
                basis_after_sale: basis_after_sale,
                coins_after_sale: coins_after_sale
            }
            let template = this.assignToTemplate(obj);
            document.getElementById('net_profit_loss_percentage_result').innerHTML = template;
        },

        assignToTemplate(obj) {

            return `
        <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    <label>Coin To Sell</label>
                    <p>${obj.coin_sell}</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label>Selling price per full coin $</label>
                    <p>${obj.selling_price_per_coin}</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label>Net proceeds $ to bank or reinvest </label>
                    <p>${obj.net_proceeds_bank}</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label> Net profit (loss) $ </label>
                    <p>${obj.net_profit_loss}</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label> Gross proceeds $ </label>
                    <p>${obj.gross_proceeds}</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label> Variable selling fee $  </label>
                    <p>${obj.variable_selling_fee}</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label> Net proceeds % [ratio to this sell's basis]</label>
                    <p>${obj.net_proceeds_percentage_ratio}</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label>Net profit (loss) % [ratio to this sell's basis]</label>
                    <p>${obj.net_profit_loss_percentage_ratio}</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label> Gain (loss) $ [excludes selling fees] </label>
                    <p>${obj.gain_exclude_selling}</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label> Basis after sale $ </label>
                    <p>${obj.basis_after_sale}</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label>Coins after sale</label>
                    <p>${obj.coins_after_sale}</p>
                </div>
            </div>

        </div>
        `;
        }
    }
}
</script>
