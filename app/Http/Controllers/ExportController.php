<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\View;

class ExportController extends Controller
{
    public function export(Request $request) {

    $data = $request->validate([
        'coin_pair_price'   =>'nullable',
        'coin_pair' => 'nullable',
        'fee_rate'  => 'required',
        'basis_coins_on_hand' => 'required',
        'coins_on_hand' => 'required',
        'percentage_coins_to_sell' => 'required',
        'selling_price_target'      => 'required_without_all:net_proceeds_bank_target,net_proceeds_percentage_ratio_target,net_profit_loss_target,net_profit_loss_percentage_ratio_target',
        'net_proceeds_bank_target' => 'required_without_all:selling_price_target,net_proceeds_percentage_ratio_target,net_profit_loss_target,net_profit_loss_percentage_ratio_target',
        'net_proceeds_percentage_ratio_target' => 'required_without_all:selling_price_target,net_proceeds_bank_target,net_profit_loss_target,net_profit_loss_percentage_ratio_target',
        'net_profit_loss_target' => 'required_without_all:selling_price_target,net_proceeds_bank_target,net_proceeds_percentage_ratio_target,net_profit_loss_percentage_ratio_target',
        'net_profit_loss_percentage_ratio_target' => 'required_without_all:selling_price_target,net_proceeds_bank_target,net_proceeds_percentage_ratio_target,net_profit_loss_target',
        'selling_price_result' => 'nullable',
        'net_proceeds_bank_result' => 'nullable',
        'net_proceeds_percentage_result' => 'nullable',
        'net_profit_loss_result' => 'nullable',
        'net_profit_loss_percentage_result' => 'nullable',
        'cost_method_memo'=> 'nullable',
        'guidance_selling_price_full_coin' => 'nullable',
        'guidance_net_profit_loss_percentage' => 'nullable',
        'guidance_net_profit_loss' => 'nullable',
        'guidance_net_proceeds' => 'nullable',
        'guidance_net_proceeds_percentage' => 'nullable',
        'coin_sell_symbol' => 'nullable',
    ]);

        // pdf start
        $timestamp = Carbon::now()->format('Y m d H:i:s');
        // YYYY MM DD HH:MM:SEC Zulu
        $filename = "CryptoWizGuy desktop report for [Investor] at ". $timestamp .".pdf";
        $data['filename'] = $timestamp . ' Zulu';

        $view = View::make('pdf',$data);

        // Get the rendered HTML
        $html = $view->render();
        // Generate PDF using Dompdf
        $pdf = PDF::loadHtml($html);

        $pdf->set_paper(array(0,0,650,1000));
        // $pdfPath = public_path('storage/' . $filename);
        return $pdf->stream($filename);
        // $pdf->save($pdfPath);

        // pdf end
        // return response()->json([
        //     'url' => $url,
        //     'filename' => $filename
        // ]);

    }

    public function mobileExport(Request $request) {

        $data = $request->validate([
            'coin_pair_price'   =>'nullable',
            'coin_pair' => 'nullable',
            'fee_rate'  => 'required',
            'basis_coins_on_hand' => 'required',
            'coins_on_hand' => 'required',
            'percentage_coins_to_sell' => 'required',
            'selling_price_target'      => 'required_without_all:net_proceeds_bank_target,net_proceeds_percentage_ratio_target,net_profit_loss_target,net_profit_loss_percentage_ratio_target',
            'net_proceeds_bank_target' => 'required_without_all:selling_price_target,net_proceeds_percentage_ratio_target,net_profit_loss_target,net_profit_loss_percentage_ratio_target',
            'net_proceeds_percentage_ratio_target' => 'required_without_all:selling_price_target,net_proceeds_bank_target,net_profit_loss_target,net_profit_loss_percentage_ratio_target',
            'net_profit_loss_target' => 'required_without_all:selling_price_target,net_proceeds_bank_target,net_proceeds_percentage_ratio_target,net_profit_loss_percentage_ratio_target',
            'net_profit_loss_percentage_ratio_target' => 'required_without_all:selling_price_target,net_proceeds_bank_target,net_proceeds_percentage_ratio_target,net_profit_loss_target',
            'selling_price_result' => 'nullable',
            'net_proceeds_bank_result' => 'nullable',
            'net_proceeds_percentage_result' => 'nullable',
            'net_profit_loss_result' => 'nullable',
            'net_profit_loss_percentage_result' => 'nullable',
            'cost_method_memo'=> 'nullable',
            'guidance_selling_price_full_coin' => 'nullable',
            'guidance_net_profit_loss_percentage' => 'nullable',
            'guidance_net_profit_loss' => 'nullable',
            'guidance_net_proceeds' => 'nullable',
            'guidance_net_proceeds_percentage' => 'nullable',
            'coin_sell_symbol' => 'nullable',

        ]);

            // pdf start
            $timestamp = Carbon::now()->format('Y m d H:i:s');
            // $filename = $timestamp . '-Zulu.pdf';
            $filename = "CryptoWizGuy mobile report for [Investor] at ". $timestamp .".pdf";
            $data['filename'] = $timestamp . ' Zulu';

            $view = View::make('mobile-pdf',$data);

            // return view('mobile-pdf',$data);

            // Get the rendered HTML
            $html = $view->render();
            // Generate PDF using Dompdf
            $pdf = PDF::loadHtml($html);
            $pdf->set_paper(array(0,0,650,1000));
            // $pdfPath = public_path('storage/' . $filename);
            return $pdf->stream($filename);
            // $pdf->save($pdfPath);

            // // pdf end
            // $url = asset('storage/' . $filename);

            // return response()->json([
            //     'url' => $url,
            //     'filename' => $filename
            // ]);

        }


}

