<?php

namespace BAF\ACR\Http\Controllers;

use BAF\ACR\Http\Controllers\ACRController;
use Illuminate\Support\Str;
use Illuminate\Database\QueryException;
use Exception;
use Illuminate\Support\Facades\Redirect;
use BAF\ACR\Http\Requests\P58modcRequest;
use BAF\ACR\Models\P58modc;

class P58modcController extends ACRController
{
    public function index()
    {
        $data  =   P58modc::orderBy('id', 'desc')->get();
        $formattedArray = [];
        if (!is_null($data)) {
            foreach ($data as $key => $datam) {
                
                array_push($formattedArray, $datam);
            }
        }
        return view('acr::p58modc.index', compact('formattedArray'));
    }

    public function create()
    {
        return view('acr::p58modc.create');
    }

    
    public function store(P58modcRequest $request)
    {
        try
        {
            $validated      = $request->validated();
            $p58modc        = new P58modc();
            $columns        = $p58modc->getTableColumns();
            $mutableColumns = $this->processMutableColumns($columns);

            foreach($mutableColumns as $mutableColumn)
            {
                $mutableColumn              = strtolower($mutableColumn);
                $p58modc->$mutableColumn   =   $request->input($mutableColumn);
            }
        
            $p58modc->uuid = (String) Str::uuid();
            
            $p58modc->save();
            
            return redirect()
                        ->route('p58modc.index')
                        ->withMessage('P-58 Modc has been created successfully!');
        }
        catch (Exception $th)
        {
            return redirect()
                        ->route('p58modc.create')
                        ->withErrors($th->getMessage());
        }
        catch (QueryException $th)
        {
            return redirect()
                        ->route('p58modc.create')
                        ->withErrors($th->getMessage());
        }
    }

    public function view($p58modc)
    {
        $datam= P58modc::find($p58modc);

        
        try
        {
            return view('acr::p58modc.view', compact('datam'));
        }
        catch (Exception $th)
        {
            return redirect()
                        ->route('p58modc.index')
                        ->withErrors($th->getMessage());
        }
        catch (QueryException $th)
        {
            return redirect()
                        ->route('p58modc.index')
                        ->withErrors($th->getMessage());
        }
    }

    public function edit($p58modc)
    {
        $dataEdit = P58modc::find($p58modc);
        try
        {
            return view('acr::p58modc.edit', compact('dataEdit'));
        }
        catch (Exception $th)
        {
            return redirect()
                        ->route('p58modc.index')
                        ->withErrors($th->getMessage());
        }
        catch (QueryException $th)
        {
            return redirect()
                        ->route('p58modc.index')
                        ->withErrors($th->getMessage());
        }
    }

    public function update(P58modcRequest $request, $p58modc)
    {
        $dataEdited = P58modc::find($p58modc);
                    
        try
        {
            $validated         =   $request->validated();
            $columns           =   $dataEdited->getTableColumns();
            $mutableColumns    =   $this->processMutableColumns($columns);

            foreach($mutableColumns as $mutableColumn)
            {
                $dataEdited->$mutableColumn   =   $request->input($mutableColumn);
            }

            $dataEdited->save();

            return redirect()
                ->route('p58modc.index')
                ->withMessage('P-58 MODC has been updated successfully!');
        }
        catch (Exception $th)
        {
            return redirect()
                        ->route('p58modc.edit', $dataEdited->id)
                        ->withErrors($th->getMessage());
        }
        catch (QueryException $th)
        {
            return redirect()
                        ->route('p58modc.edit', $dataEdited->id)
                        ->withErrors($th->getMessage());
        }
    }

    public function delete($p58modc)
    {
        $deletedData = P58modc::find($p58modc);
        try
        {
            $deletedData->delete();

            return redirect()
                        ->route('p58modc.index')
                        ->withMessage('P-58 MODC has been deleted successfully!');
        }
        catch (Exception $th)
        {
            return redirect()
                        ->route('p58modc.index')
                        ->withErrors($th->getMessage());
        }
        catch (QueryException $th)
        {
            return redirect()
                        ->route('p58modc.index')
                        ->withErrors($th->getMessage());
        }
    }

    public function downloadPdf(P58modc $p58modc)
    {
        
        $mpdf = new \Mpdf\Mpdf([
            'default_font_size' => 18,
        ]);
        $pdf = view('acr::p58modc.pdf', compact('p58modc'));
        $mpdf->WriteHTML($pdf);
        $mpdf->Output(); 
   
    }


}



