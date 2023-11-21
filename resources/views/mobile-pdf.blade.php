<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,max-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        crossorigin="anonymous">
    <style>
        .custom-box-table{
            border-collapse: collapse;
            border-collapse:separate;
            border-spacing:0 10px;
        }
        .user-input {
            background-color: #4472C4;
            color: #fff;
            border: 1px solid black;
            padding: 3px;
        }

        .custom-box-table td {
            width: 230px !important
        }

        .w-50 {
            width: 50% !important;
        }

        .fl {
            float: left !important;
        }

        .fr {
            float: right !important;
        }

        .cb {
            clear: both !important;
        }

        .text-center {
            text-align: center !important;
        }

        .navbar-brand {
            display: inline-block;
            padding-top: 0.3125rem;
            padding-bottom: 0.3125rem;
            margin-right: 1rem;
            font-size: 1.25rem;
            line-height: inherit;
            white-space: nowrap;
        }

        .navbar-brand {
            color: rgba(0, 0, 0, 0.9);
        }

        .navbar-brand {
            color: #fff;
        }

        .font-weight-bold {
            font-weight: 700 !important;
        }

        .form-group {
            margin-bottom: 1rem;
        }

        .form-group {
            display: -ms-flexbox;
            display: flex;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            -ms-flex-flow: wrap;
            flex-flow: wrap;
            -ms-flex-align: center;
            align-items: center;
            margin-bottom: 0;
        }

        .rounded {
            border-radius: 0.25rem !important;
        }



        .mx-0 {
            margin-right: 0 !important;
        }

        .mx-0 {
            margin-left: 0 !important;
        }

        .col-sm-2 {
            -ms-flex: 0 0 16.666667%;
            flex: 0 0 16.666667%;
            max-width: 16.666667%;
        }

        .col-sm-12 {
            -ms-flex: 0 0 100%;
            flex: 0 0 100%;
            max-width: 100%;
        }

        .col-md-3 {
            -ms-flex: 0 0 25%;
            flex: 0 0 25%;
            max-width: 25%;
        }

        .col-lg-2 {
            -ms-flex: 0 0 16.666667%;
            flex: 0 0 16.666667%;
            max-width: 16.666667%;
        }

        .px-2 {
            padding-right: 0.5rem !important;
        }

        .px-2 {
            padding-left: 0.5rem !important;
        }

        .mx-2 {
            margin-right: 0.5rem !important;
        }

        .mx-2 {
            margin-left: 0.5rem !important;
        }

        .col-md-7 {
            -ms-flex: 0 0 58.333333%;
            flex: 0 0 58.333333%;
            max-width: 58.333333%;
        }

        .col-lg-5 {
            -ms-flex: 0 0 41.666667%;
            flex: 0 0 41.666667%;
            max-width: 41.666667%;
        }

        .offset-lg-2 {
            margin-left: 16.666667%;
        }

        .mx-5 {
            margin-right: 3rem !important;
        }

        .mx-5 {
            margin-left: 3rem !important;
        }

        .input-group {
            /* width: auto; */
            margin:auto;
        }

        .input-group {
            position: relative;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            -ms-flex-align: stretch;
            align-items: stretch;
            width: 100%;
        }

        .mx-3 {
            margin-right: 1rem !important;
        }

        .mx-3 {
            margin-left: 1rem !important;
        }

        .input-group-prepend {
            margin-right: -1px;
        }

        .input-group-text {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: center;
            align-items: center;
            padding: 0.375rem 0.75rem;
            margin-bottom: 0;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #495057;
            text-align: center;
            white-space: nowrap;
            background-color: #e9ecef;
            border: 1px solid #ced4da;
            border-radius: 0.25rem;
        }

        .text-light {
            color: #f8f9fa !important;
        }

        .form-control {
            display: block;
            width: 100%;
            height: calc(1.5em + 0.75rem + 2px);
            padding: 0.375rem 0.75rem;
            /* font-size: 1rem; */
            font-weight: 400;
            line-height: 1.5;
            color: #495057;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid #ced4da;
            border-radius: 0.25rem;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }

        .form-control {
            transition: none;
        }

        .form-control {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
        }

        .form-control {
            height: auto;
        }

        .form-control {
            display: inline-block;
            width: auto;
            vertical-align: middle;
        }

        .form-control-lg {
            padding-right: 0;
            padding-left: 0;
        }

        .form-control-lg {
            height: calc(1.5em + 1rem + 2px);
            padding: 0.5rem 1rem;
            font-size: 1.25rem;
            line-height: 1.5;
            border-radius: 0.3rem;
        }

        .overflow-hidden {
            overflow: hidden !important;
        }

        .col-md-2 {
            -ms-flex: 0 0 16.666667%;
            flex: 0 0 16.666667%;
            max-width: 16.666667%;
        }

        .py-3 {
            padding-top: 1rem !important;
        }
        .py-1{
            padding-bottom: 0.25rem !important;
            padding-top: 0.25rem !important;
        }
        .px-3{
            padding-left: 1rem !important;
            padding-right: 1rem !important;
        }

        .py-3 {
            padding-bottom: 1rem !important;
        }
        .my-3{
            margin-bottom: 1rem !important;
            margin-top: 1rem !important;
        }

        .col-md-1 {
            -ms-flex: 0 0 8.333333%;
            flex: 0 0 8.333333%;
            max-width: 8.333333%;
        }

        .table {
            width: 100%;
            margin-bottom: 1rem;
            color: #212529;
        }

        .table {
            border-collapse: collapse !important;
        }

        .table-responsive-xl {
            display: block;
            width: 100%;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
        }

        .col-2 {
            /* -ms-flex: 0 0 16.666667%;
            flex: 0 0 16.666667%; */
            max-width: 16.666667%;
        }

        .justify-content-center {
            -ms-flex-pack: center !important;
            justify-content: center !important;
        }

        /* .custom-table::after {
  content: "";
  position: absolute;
  top: 375px;
  right: 0;
  height: 143px;
  width: 1px;
  background-color: black;

} */
        /* .custom-table::before {
  content: "";
  position: absolute;
  top: 529px;
  right: 0;
  height: 410px;
  width: 1px;
  background-color: black;
}
tr:last-child::after {
    content: "";
  position: absolute;
  top: 938px;
  right: 0;
  height: 1px;
  width: 743px;
  background-color: black;
} */
    </style>
    <style>
        .table-heading {
            /* width: 1px !important */
        }

        .custom-table tr td {
            /* width:1px!important; */
        }

        #coin_to_sell {
            min-width: 140px;
            border-radius: 10px;
            background-color: #FFFFFF;
            height: 44px;
            border: 1px solid #ced4da;
            padding: 0.1rem 0.75rem;
        }

        .custom-container {
            margin-left: auto;
            margin-right: auto;
            padding-left: 15px;
            padding-right: 15px;
        }

        /* Responsive custom container styles */
        @media (min-width: 576px) {

            /* Small devices (576px and up) */
            .custom-container {
                max-width: 720px;
                /* Increased from 540px */
            }
        }

        @media (min-width: 768px) {

            /* Medium devices (768px and up) */
            .custom-container {
                max-width: 960px;
                /* Increased from 720px */
            }
        }

        @media (min-width: 992px) {

            /* Large devices (992px and up) */
            .custom-container {
                max-width: 1200px;
                /* Increased from 960px */
            }
        }

        @media (min-width: 1200px) {

            /* Extra-large devices (1200px and up) */
            .custom-container {
                max-width: 1400px;
                /* Increased from 1140px */
            }
        }

        .custom-table .table-responsive {
            overflow-x: auto;
        }

        .custom-table {
            width: 100%;
        }

        .custom-box {
            margin-top: 20px !important;
            margin-right: 20px;
            display: inline-block !important;
            border: 1px solid #ccc;
            border-radius: 8px;
            padding: 10px;
            min-height: 200px;
            max-width: 200px;
        }

        .target-column {
            /* background-color: #00B050 !important; */
            /* color: white !important; */
        }

        .icon-cell {
            border: none !important;
        }

        .label-fixed-height {
            height: 110px;
            display: flex;
            align-items: center;
        }

        .label-fixed-height-nar {
            height: 15px;
            display: flex;
            align-items: center;
        }

        .custom-table {
            /* border: 2px solid #5C5B7B;
            border-collapse: separate;
            border-spacing: 0; */
        }

        .custom-table th {
            border: 1px solid black;
            padding: 5px;
            color: black !important;
            font-weight: normal;
        }

        .custom-table td {
            border: 1px solid black;
            padding: 5px;
        }


        .custom-table td,
        th {
            border-top: none !important;
            /* background-color: #5C5B7B; */
        }

        .custom-table .col-2 {
            /* width: 20.6667% !important; */
        }

        .invalid-feedback {
            display: block;
            color: red;
            font-size: 12px;
        }

        .custom-label {
            color: black;
        }


        .custom-input {
            background-color: #4472C4 !important;
            border: none !important;
            border-radius: 10px 10px 10px 10px !important;
            padding-left: 5px !important;
            box-shadow: none !important;
            -moz-appearance: textfield;
            font-size: 1rem!important;


        }

        .custom-input::-webkit-inner-spin-button,
        .custom-input::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;


        }

        .custom-input::placeholder {
            color: white !important;
        }

        .custom-selectbox::placeholder {
            color: white;
        }

        .custom-selectbox {
            background-color: #4472C4 !important;
            border: none !important;
            color: #8589A4;
            border-radius: 10px !important;
            box-shadow: none !important;


        }

        .custom-span-rounded {
            border-radius: 10px 0px 0px 10px !important;
        }

        .custom-select2 {
            color: black !important;
            background-color: #4472C4 !important;
        }

        .select2-search__field {
            color: white !important;
            background-color: #4472C4 !important;
            border: none !important;
            outline: none;

        }

        .select2-selection {
            border: none !important;
            background-color: #4472C4 !important;
        }

        .select2-dropdown {
            border: none !important;
            background-color: #4472C4 !important;
        }

        .select2-results {
            color: white !important;
            font-size: 1rem;
            font-weight: bold;

        }

        .select2-selection__rendered {
            color: white !important;
            background-color: #4472C4 !important;
            font-size: 1rem;
            margin-top: 5px;
            font-weight: bold;

        }

        .select2-results__options {
            max-height: 200px;
            overflow-y: auto;
        }

        .select2-selection {
            outline: none;
        }

        .select2-results__options::-webkit-scrollbar {
            display: none;
        }

        .select2-results__options {
            -ms-overflow-style: none;
            /* IE and Edge */
            scrollbar-width: none;
            /* Firefox */
        }

        .custom-button-export {
            background-color: #4472C4 !important;
            border: none !important;
            border-radius: 10px !important;
            color: #6168AE !important;
            box-shadow: none !important;
            font-size: 1.5rem !important;
        }

        #export_select {
            color: #8589A4 !important;
        }

        #export_select option {
            font-size: 1.25rem;
            color: white;
            padding: 10px !important;
        }

        .form-control {
            color: white !important;
            /* font-size:11px!important; */
        }

        .table-warning {
            background: yellow !important;
            color: red !important;
        }

        .fa-percent,
        .fa-money-bill,
        .fa-coins {
            font-size: 1.25rem !important;
        }

        .input-group {
            width: 100% !important;
            margin: auto;
        }


        .form-group.text-center.rounded {
            display: block;
            width: 90%;
            margin: auto;
        }

        .column-main {
            width: 100%;
            max-width: 100%;
        }

        .column-1.child {
            float: left;
            width: 45%;
            text-align: left;
        }

        .column-1.child label.label-text {
            padding-right: 30px;
            s
        }

        .column-2.child {
            float: right;
            width: 45%;
            text-align: right;
        }

        input#coin_to_sell {
            width: 10% !important;
            padding: 0px !important;
            text-align: center;
        }

        .column-2.child label.label-text {
            padding-right: 15px;
            max-width: 50% !important;
        }

        .column-2.child label {
            text-align: left;
            height: auto !important;
            padding: 10px 50px;
            max-width: 50% !important;
            margin-top: 30px !important;

        }

        .form-group.text-right {
            display: block;
        }

        .w-100 {
            width: 100% !important;
        }

        .w-50 {
            width: 50% !important;
        }

        .w-45 {
            width: 45% !important;
        }

        .w-25 {
            width: 25% !important;
        }

        .w-75 {
            width: 75% !important;
        }

        .float-left {
            float: left !important;
        }

        .float-right {
            float: right !important;
        }

        .clearfix {
            clear: both !important;
        }

        .form-control {
            border-radius: 10px !important;
            border-color: #4472C4 !important;
            border-width: 2px !important;
            background-color: #4472C4 !important;
            color: white !important;
        }

        .mr-50 {
            margin-right: 50px !important;
        }

        .mt-5 {
            margin-top: 5px !important;
        }

        .mb-5 {
            margin-bottom: 5px !important;
        }

        .d-ib {
            display: inline-block !important;
        }

        .var {
            vertical-align: middle !important;
        }

        .ml-auto {
            margin-left: auto !important;
        }

        .text-right {
            text-align: right !important;
        }

        .pb-5 {
            padding-bottom: 5px !important;
        }

        .card {
            border: 1px solid grey;
        }

        .rounded-md {
            border-radius: 10px !important;
        }

        .p-3 {
            padding: 6px !important;
        }

        .p-10 {
            padding: 1px !important;
        }

        .text-center {
            text-align: center !important;
        }

        .mt-100 {
            margin-top: 100px !important;
        }

        .m-15 {
            margin: 15px !important;
        }

        .t1 {
            border-collapse: separate;
        }
    </style>
</head>

<body
    style="line-height:1.4;min-height: 100vh;padding-bottom:20px;background-color: white !important;  font-family: sans-serif;font-size: 3vw!important;width:650px;margin-left:10%">
    <div>
        <div class="">
            <table style="width: 100%">
                <tbody>
                    <tr>
                        <td class="text-center" style="width: 20%;">
                            <div class="logo text-center">
                                <img clas src="{{public_path('images/logo.png')}}" alt="" srcset="" width="100"
                                    height="100">

                            </div>
                        </td>
                        <td class="text-left" style="width: 80%;">
                            <h3 class="text-left navbar-text" style="color:black;font-size:3vw;"><span
                                    style="font-weight:bold;font-style:italic;margin-left:7%">Crypto Wiz
                                    Guy<sup>®</sup></span> presents <br />
                                <span style="font-weight:bold;color:#28a745">The Selling-for-PROFIT Calculator</span>
                            </h3>

                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" style="padding-left:50px!important;">
                            <div style="width: 90%!important">
                                <label style="margin-bottom:0px">IMPORTANT: Save as PDF or print before closing,
                                    resetting, reloading, or
                                    leaving this page.<br>
                                    <label class="font-weight-bold w-100"
                                        style="text-align:center!important;margin-left:20%">Crypto Wiz Guy does
                                        not save your work.</label><br>
                                    <label class="mt-2">IMPORTANT: See here for entering Investor's output data into Coinbase.
                                        The calculator does not make a sale or place an
                                        order on Coinbase.</label>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>

            <h2 class="col-12 text-center user-area" style="font-weight:normal;margin-top:2px;margin-bottom:2px!important">Investor's Input area </h2>
            <div style="padding-left:50px!important;">
            <label class="info-text col-12 mx-1" style="width:90%">Enter the six required values and scroll down, choose the valid Alternative values you want, and scroll down again.</label>
            </div>
            <table class="text-center custom-box-table" style="width:70%;margin-top:1rem;margin-bottom:1rem;">
                <tbody>
                    <tr>
                        <td style="text-align:right;padding-right:1rem;">Cost Method Memo</td>
                        <td  style="text-align:center; white-space: nowrap;overflow: hidden;text-overflow: ellipsis;font-size: 13px;">
                            <input type="text" value="{{$cost_method_memo ?? '-'}}" class="user-input mt-5"
                                style="width:80%;padding:0px">
                        </td>
                        <td style="text-align: left">
                            <label for="" class="px-2">Required (need help?)</label>
                        </td>
                    </tr>
                    <tr>
                        <td style="text-align:right;padding-right:1rem;">Selector</td>
                        <td style="text-align:center; white-space: nowrap;overflow: hidden;text-overflow: ellipsis;font-size: 13px;">
                            <input type="text" value="{{$coin_pair ?? '-'}}" class="user-input mt-5" style="width:80%;min-height:20px;margin;padding:0px">
                        </td>
                        <td style="text-align: left">
                            <label for="" class="px-2">Required</label>
                        </td>
                    </tr>
                    <tr>
                        <td style="text-align:right;padding-right:1rem;">$ Cost of Coins on hand</td>
                        <td style="text-align:center; white-space: nowrap;overflow: hidden;text-overflow: ellipsis;font-size: 13px;">
                            <span style="position: absolute;top:377px;left:330px;color:white">$</span>
                            <input type="text" value="{{$basis_coins_on_hand ? number_format($basis_coins_on_hand,2) : ''}}" class="user-input mt-5"
                                style="width:100%">
                        </td>
                        <td style="text-align: left">
                            <label for="" class="px-2">Required (need help?)</label>
                        </td>
                    </tr>
                    <tr>
                        <td style="text-align:right;padding-right:1rem;"># Coins on hand</td>
                        <td style="text-align:center; white-space: nowrap;overflow: hidden;text-overflow: ellipsis;font-size: 13px;">
                            <span style="position: absolute;top:423px;left:330px;color:white">#</span>
                            <input type="text" class="user-input mt-5" style="width:100%" value="{{$coins_on_hand ? number_format($coins_on_hand,8) : ''}}">
                        </td>
                        <td style="text-align: left">
                            <label for="" class="px-2">Required</label>
                        </td>
                    </tr>
                    <tr>
                        <td style="text-align:right;padding-right:1rem;">Coins to sell # or %</td>
                        <td style="text-align:center; white-space: nowrap;overflow: hidden;text-overflow: ellipsis;font-size: 13px;">
                            <span style="position: absolute;top:469px;left:510px;color:white">{{$coin_sell_symbol ?? '%'}}</span>
                            <input type="text" value="{{$percentage_coins_to_sell ?? ''}}" class="user-input mt-5"
                                style="width:80%">
                        </td>
                        <td style="text-align: left">
                            <label for="" class="px-2">Required</label>
                        </td>
                    </tr>
                    <tr>
                        <td style="text-align:right;padding-right:1rem;">Selling fee %</td>
                        <td style="text-align:center; white-space: nowrap;overflow: hidden;text-overflow: ellipsis;font-size: 13px;">
                            <span style="position: absolute;top:514px;left:510px;color:white">%</span>
                            <input type="text" value="{{$fee_rate}}" class="user-input mt-5" style="width:80%">
                        </td>
                        <td style="text-align: left">
                            <label for="" class="px-2">Required (need help?)</label>
                        </td>
                    </tr>
                </tbody>
            </table>
            <table class="table custom-table" style="border-top:1px solid black;color:black;font-size: 13px; border-spacing:0px 0px!important">
                <tbody>
                    <tr>
                        <th style="width:155px">
                            <div class="rounded-md" style="min-height: 50px">
                                <p style="min-width:50px;padding-right:0px;padding-left:0px;width:98%; text-align:left"><span style="font-size:18px">Guidance</span><br> Make TARGET Inputs, below, more than these values:, and/or lower % of coins to sell</p>
                            </div>
                        </th>
                        <td style="width:150px;text-align:left">

                                <p class="custom-label-new" style="min-height: 50px">Actual recent Coinbase market price $</p>

                                <input type="text"
                                value="$ {{$guidance_selling_price_full_coin ?? ''}}"
                                class="form-control" style="min-width:50px;padding-right:0px;padding-left:0px;width:95%;background-color:white!important;border-color:white!important;color:black!important" placeholder="">

                        </td>
                        <td style="width:150px;text-align:left">

                                <p class="custom-label-new" style="min-height: 50px">Net profit (loss) $</p>
                                <input type="text"
                                    value="$ {{$guidance_net_profit_loss ?? ''}}"
                                    class="form-control" style="min-width:50px;padding-right:0px;padding-left:0px;width:95%;background-color:white!important;border-color:white!important;color:black!important" placeholder="">

                        </td>
                        <td style="width:150px;text-align:left">

                                <p class="custom-label-new" style="min-height: 50px">Net profit (loss) % (ratio to this sell’s cost)</p>
                                <label class="form-control" style="padding-right:0px;padding-left:0px;width:95%;background-color:white!important;border-color:white!important;color:black!important">% {{$guidance_net_profit_loss_percentage?? ''}}</label>

                        </td>
                    </tr>
                </tbody>
            </table>
            @if(
                isset($selling_price_result['selling_price_per_coin']) && $selling_price_result['selling_price_per_coin'] < $coin_pair_price
                ||isset($net_profit_loss_result['selling_price_per_coin']) && $net_profit_loss_result['selling_price_per_coin'] < $coin_pair_price
                ||isset($net_profit_loss_percentage_result['selling_price_per_coin']) && $net_profit_loss_percentage_result['selling_price_per_coin'] < $coin_pair_price
                ||isset($net_proceeds_bank_result['selling_price_per_coin']) && $net_proceeds_bank_result['selling_price_per_coin'] < $coin_pair_price
                ||isset($net_proceeds_percentage_result['selling_price_per_coin']) && $net_proceeds_percentage_result['selling_price_per_coin'] < $coin_pair_price
              )
            <table style="width: 100%!important;margin-top:-20px!important; margin-bottom:5px!important">
                <tbody>
                    <tr class="table-warning">
                        <th style="font-size: 13px;margin-top:-10px!important;margin-left:20px!important;text-align:center;padding-top:5px;padding-bottom:5px">Make selling price for one full coin greater than Recent Coinbase market price</th>
                    </tr>
                </tbody>
            </table>
            @endif
            <table class="table custom-table" style=";color:black;font-size: 13px;border-spacing:0px 0px!important">
                <tbody>
                    <tr style="">
                        {{-- empty th for adjustment --}}
                        <th rowspan="2" style="border:none"></th>
                        {{-- <th rowspan="2" style="" class="text-center">Recent Coinbase market price
                            <span class="font-weight-bold input-group-text text-light selector-price"
                                style="border:none!important;color:#28a745!important; background-color: white">$
                                {{$coin_pair_price}}</span>
                        </th> --}}
                        <th colspan="3"
                            style="border:1px solid black!important;color:#28a745!important;font-weight:bold!important"
                            class="text-center">KNOW your PROFIT before you sell</th>
                    </tr>
                    <tr>
                        <th style="text-align: left!important">Alternative 1 <br> Selling Price TARGET $</th>
                        <th style="text-align: left!important">Alternative 2 <br> Net profit (loss) TARGET $</th>
                        <th style="text-align: left!important">Alternative 3 <br> Net profit (loss) TARGET % [ratio to
                            this sell's cost]</th>

                    </tr>

                    <tr style="background-color:#4472C4;color:white">

                        <th style="vertical-align: middle"
                            style="background-color: white!important;color:#4472C4!important;font-weight:bold;border:none!important">Fill in one or more of
                            the blue boxes.</th>
                        <td width="150px"><input type="text" class="custom-input form-control" value="$ {{$selling_price_target ? number_format($selling_price_target,2) : ''}}"
                                placeholder="Amount" step="0.00000001">
                        </td>
                        <td width="150px"><input type="text" class="custom-input form-control" value="$ {{$net_profit_loss_target ? number_format($net_profit_loss_target,2) : ''}}"
                                placeholder="Amount" step="0.00000001"></td>
                        <td width="150px">
                            <input type="text" class="custom-input form-control"
                                value="% {{$net_profit_loss_percentage_ratio_target ?? ''}}" placeholder="Target"
                                step="0.00000001">
                        </td>

                    </tr>
                    <tr>
                        {{-- <td style="border:none;"></td> --}}
                        <td colspan="4" style="border:none;border-bottom:1px solid black">
                            <p class="text-center user-area" style="margin:0px!important;font-weight:;font-size:18px!important;">Output area</p>
                            {{-- <h2 class="col-12 text-center user-area" style="font-weight:normal;margin-top:2px;margin-bottom:2px!important">User output area </h2> --}}

                        </td>
                    </tr>
                    <tr style="color:#28a745;font-weight:bold!important">

                        <th class="col-2 table-heading" style="color:#28a745!important;font-weight:bold!important">Net
                            profit (loss) $ </th>
                        <td class="col-2 float-right"><span class="float-left">$</span> <span class="float-right">{{isset($selling_price_result['net_profit_loss']) ?
                            number_format($selling_price_result['net_profit_loss'],2) : '' }}</span></td>
                        <td class="col-2 float-right target-column"><span class="float-left">$</span> <span class="float-right">{{isset($net_profit_loss_result['net_profit_loss']) ?
                            number_format($net_profit_loss_result['net_profit_loss'],2) : '' }}</span></td>
                        <td class="col-2 float-right"><span class="float-left">$</span> <span class="float-right">{{isset($net_profit_loss_percentage_result['net_profit_loss']) ?
                            number_format($net_profit_loss_percentage_result['net_profit_loss'],2) : '' }}</span></td>

                    </tr>
                    <tr style="border:1px solid black!important">
                        <th class="col-2 table-heading">Enter in Coinbase. # of Coins to sell. See here </th>
                        <td class="col-2 float-right {{isset($selling_price_result['coin_sell'])  && $selling_price_result['coin_sell']< 0.000016 ? 'table-warning' : ''}}"><span class="float-left">#</span> <span class="float-right">{{isset($selling_price_result['coin_sell']) ?
                            number_format($selling_price_result['coin_sell'],8) : '' }}</span></td>

                        <td class="col-2 float-right {{isset($net_profit_loss_result['coin_sell'])  && $net_profit_loss_result['coin_sell']< 0.000016 ? 'table-warning' : ''}}"><span class="float-left">#</span> <span class="float-right">{{isset($net_profit_loss_result['coin_sell']) ?
                            number_format($net_profit_loss_result['coin_sell'],8) : '' }}</span></td>


                        <td class="col-2 float-right {{isset($net_profit_loss_percentage_result['coin_sell'])  && $net_profit_loss_percentage_result['coin_sell']< 0.000016 ? 'table-warning' : ''}}"><span class="float-left">#</span> <span class="float-right">{{isset($net_profit_loss_percentage_result['coin_sell']) ?
                            number_format($net_profit_loss_percentage_result['coin_sell'],8) : '' }}</span></td>




                    </tr>

                    <tr>

                        <th class="col-2 table-heading">Enter in Coinbase. $ Selling price for one full coin. See here
                        </th>
                        <td class="col-2 float-right target-column {{isset($selling_price_result['selling_price_per_coin']) && $selling_price_result['selling_price_per_coin'] < $coin_pair_price ? 'table-warning' : '' }}"><span class="float-left">$</span> <span class="float-right">{{isset($selling_price_result['selling_price_per_coin']) ?
                            number_format($selling_price_result['selling_price_per_coin'],2) : '' }}</span></td>
                        <td class="col-2 float-right {{isset($net_profit_loss_result['selling_price_per_coin']) && $net_profit_loss_result['selling_price_per_coin'] < $coin_pair_price ? 'table-warning' : '' }}"><span class="float-left">$</span> <span class="float-right">{{isset($net_profit_loss_result['selling_price_per_coin']) ?
                            number_format($net_profit_loss_result['selling_price_per_coin'],2) : '' }}</span></td>
                        <td class="col-2 float-right {{isset($net_profit_loss_percentage_result['selling_price_per_coin']) && $net_profit_loss_percentage_result['selling_price_per_coin'] < $coin_pair_price ? 'table-warning' : '' }}"><span class="float-left">$</span> <span class="float-right">{{isset($net_profit_loss_percentage_result['selling_price_per_coin']) ?
                            number_format($net_profit_loss_percentage_result['selling_price_per_coin'],2) : '' }}</span></td>


                    </tr>
                    <tr>

                        <th class="col-2 table-heading">Net profit (loss) % [ratio to this sell's cost] </th>
                        <td class="col-2 float-right"><span class="float-right">{{isset($selling_price_result['net_profit_loss_percentage_ratio']) ?
                            number_format($selling_price_result['net_profit_loss_percentage_ratio'],8) : '' }} % </span></td>
                        <td class="col-2 float-right"><span class="float-right">{{isset($net_profit_loss_result['net_profit_loss_percentage_ratio']) ?
                            number_format($net_profit_loss_result['net_profit_loss_percentage_ratio'],8) : '' }} % </span></td>
                        <td class="col-2 float-right target-column">
                            <span class="float-right">{{isset($net_profit_loss_percentage_result['net_profit_loss_percentage_ratio']) ?
                            number_format($net_profit_loss_percentage_result['net_profit_loss_percentage_ratio'],8) :
                            '' }} % </span></td>

                    </tr>
                    <tr>
                        <th class="col-2 table-heading"># Coins after sale</th>
                        <td class="col-2 float-right"><span class="float-left">#</span> <span class="float-right">{{isset($selling_price_result['coins_after_sale']) ?
                            number_format($selling_price_result['coins_after_sale'],8) : '' }}</span></td>
                        <td class="col-2 float-right"><span class="float-left">#</span> <span class="float-right">{{isset($net_profit_loss_result['coins_after_sale']) ?
                            number_format($net_profit_loss_result['coins_after_sale'],8) : '' }}</span></td>
                        <td class="col-2 float-right"><span class="float-left">#</span> <span class="float-right">{{isset($net_profit_loss_percentage_result['coins_after_sale']) ?
                            number_format($net_profit_loss_percentage_result['coins_after_sale'],8) : '' }}</span></td>

                    </tr>

                    <!-- Add more s here -->
                </tbody>
            </table>

            <table style="width:100%;font-size: 13px; border-spacing:0px 0px!important">
                <tbody>
                    <tr>
                        <td class="text-center">This custom mobile report from Crypto Wiz Guy<sup>®</sup></td>
                    </tr>
                    <tr>
                        <td class="text-center">was prepared {{$filename}} exclusively for [Investor's name].</td>
                    </tr>
                    <tr>
                        <td class="text-center">Refer to Terms of Use and Privacy Policy</td>
                    </tr>
                </tbody>
            </table>
        </div>
        {{-- end --}}


    </div>
    </div>
</body>

</html>
