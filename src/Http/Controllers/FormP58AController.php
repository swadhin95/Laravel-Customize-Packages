<?php

namespace BAF\ACR\Http\Controllers;

use BAF\ACR\Http\Controllers\ACRController;
use Illuminate\Database\QueryException;
use Exception;
use Illuminate\Support\Facades\Redirect;



class FormP58AController extends ACRController
{

    // public function index()
    // {
    //     $data =  Form33::orderBy('id', 'desc')->get();

    //     $formatedArray = [];

    //     if (!is_null($data)) {
    //         foreach ($data as $key => $datam) {
    //             $datam->product_calculations_date    = json_decode($datam->product_calculations_date);
    //             $datam->ref_no                       = json_decode($datam->ref_no);
    //             $datam->counting_of_goods            = json_decode($datam->counting_of_goods);
    //             $datam->unit_of_goods                = json_decode($datam->unit_of_goods);
    //             $datam->stored_workable              = json_decode($datam->stored_workable);
    //             $datam->stored_repairable            = json_decode($datam->stored_repairable);
    //             $datam->temporary_loan_workable      = json_decode($datam->temporary_loan_workable);
    //             $datam->stock_6_workable             = json_decode($datam->stock_6_workable);
    //             $datam->stock_6_repairable           = json_decode($datam->stock_6_repairable);
    //             $datam->total_workable               = json_decode($datam->total_workable);
    //             $datam->total_repairable             = json_decode($datam->total_repairable);
    //             $datam->stock_record_workable        = json_decode($datam->stock_record_workable);
    //             $datam->stock_record_repairable      = json_decode($datam->stock_record_repairable);
    //             $datam->surplus_workable             = json_decode($datam->surplus_workable);
    //             $datam->surplus_repairable           = json_decode($datam->surplus_repairable);
    //             $datam->deficiencies_workable        = json_decode($datam->deficiencies_workable);
    //             $datam->deficiencies_repairable      = json_decode($datam->deficiencies_repairable);
    //             $datam->remarks                      = json_decode($datam->remarks);
    //             array_push($formatedArray, $datam);
    //         }
    //     }

    //     return view('bafforms::form33.index', compact('formatedArray'));
    // }

    public function create()
    {
        return view('acr::formP58a.view');
    }

    // public function store(Form33Request $request)
    // {
    //     try {
    //         $form33 = new Form33;
    //         $columns = $form33->getTableColumns();
    //         $mutableColumns =  $this->processMutableColumns($columns);
    //         foreach ($mutableColumns as $mutableColumn) {
    //             $form33->$mutableColumn   =   $request->input($mutableColumn);
    //         }

    //         $form33->product_calculations_date    = json_encode($form33->product_calculations_date);
    //         $form33->ref_no                       = json_encode($form33->ref_no);
    //         $form33->counting_of_goods            = json_encode($form33->counting_of_goods);
    //         $form33->unit_of_goods                = json_encode($form33->unit_of_goods);
    //         $form33->stored_workable              = json_encode($form33->stored_workable);
    //         $form33->stored_repairable            = json_encode($form33->stored_repairable);
    //         $form33->temporary_loan_workable      = json_encode($form33->temporary_loan_workable);
    //         $form33->stock_6_workable             = json_encode($form33->stock_6_workable);
    //         $form33->stock_6_repairable           = json_encode($form33->stock_6_repairable);
    //         $form33->total_workable               = json_encode($form33->total_workable);
    //         $form33->total_repairable             = json_encode($form33->total_repairable);
    //         $form33->stock_record_workable        = json_encode($form33->stock_record_workable);
    //         $form33->stock_record_repairable      = json_encode($form33->stock_record_repairable);
    //         $form33->surplus_workable             = json_encode($form33->surplus_workable);
    //         $form33->surplus_repairable           = json_encode($form33->surplus_repairable);
    //         $form33->deficiencies_workable        = json_encode($form33->deficiencies_workable);
    //         $form33->deficiencies_repairable      = json_encode($form33->deficiencies_repairable);
    //         $form33->remarks                      = json_encode($form33->remarks);
    //         $form33->save();

    //         return redirect()
    //             ->route('form33.index')
    //             ->with('success', 'Data has been created successfully!');
    //     } catch (Exception $th) {
    //         return redirect()
    //             ->back()
    //             ->withErrors($th->getMessage())
    //             ->with('failed', 'Oops! something went wrong');
    //     } catch (QueryException $th) {
    //         return redirect()
    //             ->back()
    //             ->withErrors($th->getMessage())
    //             ->with('failed', 'Oops! something went wrong');
    //     }
    // }

    // public function edit($form33)
    // {

    //     try {
    //         $form33 = Form33::findOrFail($form33);
    //         $form33->product_calculations_date    = json_decode($form33->product_calculations_date);
    //         $form33->ref_no                       = json_decode($form33->ref_no);
    //         $form33->counting_of_goods            = json_decode($form33->counting_of_goods);
    //         $form33->unit_of_goods                = json_decode($form33->unit_of_goods);
    //         $form33->stored_workable              = json_decode($form33->stored_workable);
    //         $form33->stored_repairable            = json_decode($form33->stored_repairable);
    //         $form33->temporary_loan_workable      = json_decode($form33->temporary_loan_workable);
    //         $form33->stock_6_workable             = json_decode($form33->stock_6_workable);
    //         $form33->stock_6_repairable           = json_decode($form33->stock_6_repairable);
    //         $form33->total_workable               = json_decode($form33->total_workable);
    //         $form33->total_repairable             = json_decode($form33->total_repairable);
    //         $form33->stock_record_workable        = json_decode($form33->stock_record_workable);
    //         $form33->stock_record_repairable      = json_decode($form33->stock_record_repairable);
    //         $form33->surplus_workable             = json_decode($form33->surplus_workable);
    //         $form33->surplus_repairable           = json_decode($form33->surplus_repairable);
    //         $form33->deficiencies_workable        = json_decode($form33->deficiencies_workable);
    //         $form33->deficiencies_repairable      = json_decode($form33->deficiencies_repairable);
    //         $form33->remarks                      = json_decode($form33->remarks);
            
    //         return view('bafforms::form33.edit', compact('form33'));
    //     } catch (Exception $th) {

    //         return redirect()
    //             ->back()
    //             ->withErrors($th->getMessage())
    //             ->with('failed', 'Oops! something went wrong');
    //     } catch (QueryException $th) {

    //         return redirect()
    //             ->back()
    //             ->withErrors($th->getMessage())
    //             ->with('failed', 'Oops! something went wrong');
    //     }
    // }

    // public function update(Form33Request $request, Form33 $form33)
    // {
    //     try {
    //         $columns = $form33->getTableColumns();
    //         $mutableColumns =  $this->processMutableColumns($columns);
    //         foreach ($mutableColumns as $mutableColumn) {
    //             $form33->$mutableColumn   =   $request->input($mutableColumn);
    //         }

    //         $form33->product_calculations_date    = json_encode($form33->product_calculations_date);
    //         $form33->ref_no                       = json_encode($form33->ref_no);
    //         $form33->counting_of_goods            = json_encode($form33->counting_of_goods);
    //         $form33->unit_of_goods                = json_encode($form33->unit_of_goods);
    //         $form33->stored_workable              = json_encode($form33->stored_workable);
    //         $form33->stored_repairable            = json_encode($form33->stored_repairable);
    //         $form33->temporary_loan_workable      = json_encode($form33->temporary_loan_workable);
    //         $form33->stock_6_workable             = json_encode($form33->stock_6_workable);
    //         $form33->stock_6_repairable           = json_encode($form33->stock_6_repairable);
    //         $form33->total_workable               = json_encode($form33->total_workable);
    //         $form33->total_repairable             = json_encode($form33->total_repairable);
    //         $form33->stock_record_workable        = json_encode($form33->stock_record_workable);
    //         $form33->stock_record_repairable      = json_encode($form33->stock_record_repairable);
    //         $form33->surplus_workable             = json_encode($form33->surplus_workable);
    //         $form33->surplus_repairable           = json_encode($form33->surplus_repairable);
    //         $form33->deficiencies_workable        = json_encode($form33->deficiencies_workable);
    //         $form33->deficiencies_repairable      = json_encode($form33->deficiencies_repairable);
    //         $form33->remarks                      = json_encode($form33->remarks);
    //         $form33->save();

    //         return redirect()
    //             ->route('form33.index')
    //             ->with('success', 'Data has been updated successfully!');
    //     } catch (Exception $th) {
    //         return redirect()
    //             ->route('form594.edit', $form33->id)
    //             ->withErrors($th->getMessage())
    //             ->with('failed', 'Oops! something went wrong');
    //     } catch (QueryException $th) {
    //         return redirect()
    //             ->route('form594.edit', $form33->id)
    //             ->withErrors($th->getMessage())
    //             ->with('failed', 'Oops! something went wrong');
    //     }
    // }

    // public function delete($form33)
    // {
    //     try {
    //         Form33::findOrFail($form33)->delete();
    //         return Redirect()
    //             ->back()
    //             ->with('destroy', 'Deleted successfully!');
    //     } catch (Exception $th) {

    //         return redirect()
    //             ->back()
    //             ->withErrors($th->getMessage())
    //             ->with('failed', 'Oops! something went wrong');
    //     } catch (QueryException $th) {

    //         return redirect()
    //             ->back()
    //             ->withErrors($th->getMessage())
    //             ->with('failed', 'Oops! something went wrong');
    //     }
    // }

    // public function downloadPdf(Form33  $form33)
    // {
    //     try {
    //         $form33->product_calculations_date    = json_decode($form33->product_calculations_date);
    //         $form33->ref_no                       = json_decode($form33->ref_no);
    //         $form33->counting_of_goods            = json_decode($form33->counting_of_goods);
    //         $form33->unit_of_goods                = json_decode($form33->unit_of_goods);
    //         $form33->stored_workable              = json_decode($form33->stored_workable);
    //         $form33->stored_repairable            = json_decode($form33->stored_repairable);
    //         $form33->temporary_loan_workable      = json_decode($form33->temporary_loan_workable);
    //         $form33->stock_6_workable             = json_decode($form33->stock_6_workable);
    //         $form33->stock_6_repairable           = json_decode($form33->stock_6_repairable);
    //         $form33->total_workable               = json_decode($form33->total_workable);
    //         $form33->total_repairable             = json_decode($form33->total_repairable);
    //         $form33->stock_record_workable        = json_decode($form33->stock_record_workable);
    //         $form33->stock_record_repairable      = json_decode($form33->stock_record_repairable);
    //         $form33->surplus_workable             = json_decode($form33->surplus_workable);
    //         $form33->surplus_repairable           = json_decode($form33->surplus_repairable);
    //         $form33->deficiencies_workable        = json_decode($form33->deficiencies_workable);
    //         $form33->deficiencies_repairable      = json_decode($form33->deficiencies_repairable);
    //         $form33->remarks                      = json_decode($form33->remarks);
            
    //         $pdf = view('bafforms::form33.pdf', compact('form33'));

    //         $mpdf = new \Mpdf\Mpdf([
    //             'default_font_size' => 12,
    //             'default_font' => 'nikosh',
    //             'configs' => ['c', 'A4', '', '', 10, 10, 10, 10, 9, 9]
    //         ]);
    //         $mpdf->mirrorMargins = 0;
    //         $mpdf->addPage('L');
    //         $mpdf->WriteHTML($pdf);
    //         $mpdf->Output('form33.pdf', 'D');
    //     } catch (\Mpdf\MpdfException $th) {
    //         return redirect()
    //             ->back()
    //             ->withErrors($th->getMessage())
    //             ->with('failed', 'Oops! something went wrong');
    //     }
    // }
}
