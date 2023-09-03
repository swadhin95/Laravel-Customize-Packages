@extends('master')
@section('content')
    <div class="card my-5  container-fluid">
        <div class="card-header">
            <h5>P-58 MODC : View</h5>
        </div>
        <div class="card-body">
            <table style="width: 100%;">
                <p style="text-align: end; margin: 90px 0 0 0; "><span style=" border: 1px solid black">BAF Form P-58
                        B</span></p>
                <tr>
                    <td>
                        <p style="font-size: larger; text-align: center;"><u><b>Competency Assessment Report-
                                    MODC(Air)</b></u></p>
                        <p style="text-align: center;">[Sergeant (MODC) and applies for upper ranks]</p>
                        <p style="text-align: center;"><b>First part(For Person)</b></p>
                    </td>
                </tr>
            </table>
            <hr>
            <table style="width: 100%;">
                <tr>
                    <td>
                        <p>1 . <u><b>Duration of Report : </b></u>From :{{ $datam->date_duration_from }} To
                            :{{ $datam->date_duration_to }} </p>
                    </td>
                </tr>
            </table>
            <hr>
            <table style="width: 100%;">
                <tr>
                    <td>
                        <div>
                            <p>2 . <u><b>Reasons for making the report : </b></u></p>
                        </div>
                        <div class="mb-3 row">
                            <div class="col-6 row">
                                <label class="col-6 col-form-label">Annual</label>
                                <div class="col-6">
                                    {{ $datam->reason_annual }}
                                </div>
                            </div>

                            <div class="col-6 row">
                                <label for="special_reason" class="col-6 col-form-label">Special Reason:</label>
                                <div class="col-6">
                                    {{ $datam->special_reason }}
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
            <hr>
            <table style="width: 100%;">
                <tr>
                    <td>
                        <p>3 . <u><b>Job information : </b></u></p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>BD/ {{ $datam->job_info_bd }}Rank :{{ $datam->job_info_rank }}Name :
                            {{ $datam->job_info_name }} Occupation "{{ $datam->job_info_cccupation }}
                            Date of joining to the job : {{ $datam->job_info_date_join }}Entry no
                            {{ $datam->job_info_entry_no }} Total duration of employment:
                            {{ $datam->job_duration_year }} year :{{ $datam->job_duration_month }}
                            month. Base/Unit :{{ $datam->job_info_base }} Duration of staying current base/unit :
                            {{ $datam->stay_duration_year }} year : {{ $datam->stay_duration_month }}
                            month. Duration of staying current area : {{ $datam->area_duration_year }} year
                            {{ $datam->area_duration_month }} month.
                        </p>
                    </td>
                </tr>
            </table>
            <hr>
            <table style="width: 100%;">
                <tr>
                    <td>
                        <p>4 . <b>a. Current responsibilities and duties:</b> {{ $datam->current_duties }} </p>
                        <p style="padding-left: 20px;"><b>b. Details of any other work during the assessment period :</b>
                        </p>
                    </td>
                </tr>
                <tr>
                    <table style="width: 100%;text-align:center" class="table-bordered table-responsive" id="table">
                        <thead>
                            <tr>
                                <th rowspan="2">Base/Unit </th>
                                <th rowspan="2">Description of the duties</th>
                                <th colspan="2">Duration </th>
                            </tr>
                            <tr>
                                <th>From </th>
                                <th>To </th>
                            </tr>
                        </thead>
                        <tbody>


                            @foreach ($datam['base_unit'] as $key => $base_unit)
                                <tr>
                                    <td> {{ $base_unit }}</td>
                                    <td> {{ $datam['des_duties'][$key] }} </td>
                                    <td> {{ $datam['duties_from'][$key] }} </td>
                                    <td> {{ $datam['duties_to'][$key] }} </td>
                                </tr>
                            @endforeach


                        </tbody>

                    </table>
                </tr>
            </table>
            <table style="width: 100%; margin:20px 0 0 0;">
                <tr>
                    <td>
                        <p>5 . <u><b>Medical Details:</b></u></p>

                    </td>
                </tr>
                <tr>
                    <table style="width: 100%;text-align:center" class="table-bordered table-responsive">
                        <tr>
                            <td>Medical Catagory</td>
                            <td>{{ $datam->med_details_catagory }} </td>
                            <td>Date of Birth </td>
                            <td> {{ $datam->med_details_date_of_birth }}</td>
                            <td rowspan="4"> {{ $datam->med_details_signature }}<br>signature of medical officer</td>
                        </tr>
                        <tr>
                            <td>Current Weight</td>
                            <td>{{ $datam->med_details_current_weight }}</td>
                            <td>Age</td>
                            <td>{{ $datam->med_details_age }} </td>
                        </tr>
                        <tr>
                            <td>Excessive/inadequate weight</td>
                            <td> {{ $datam->med_details_extra_weight }} </td>
                            <td>Height</td>
                            <td> {{ $datam->med_details_height }} </td>
                        </tr>
                        <tr>
                            <td>Qualified/unqualified</td>
                            <td>{{ $datam->med_details_qualified_unqualified }} </td>
                            <td></td>
                            <td></td>
                        </tr>

                    </table>
                </tr>
            </table>
            <table style="width: 100%; margin:20px 0 0 0;">
                <tr>
                    <td>
                        <p>6 . <u><b>Physical ability test(where applicable):</b></u></p>

                    </td>
                </tr>
                <tr>
                    <table style="width: 100%;text-align:center" class="table-bordered table-responsive">
                        <tr>
                            <th>Physical ability test</th>
                            <th>Date </th>
                            <th>Result</th>
                            <td rowspan="5">{{ $datam->signature_gsto_physical }}<br>signature of GSTO/Officer-in-Charge
                                sports</td>
                        </tr>
                        <tr>
                            <td>1st trimester examination</td>
                            <td> {{ $datam->first_trimester_date }} </td>
                            <td>
                                <label>{!! $datam->first_tri_result == 'Pass' ? 'Pass' : '<del>Pass</del>' !!}</label>
                                <label>{!! $datam->first_tri_result == 'Fail' ? 'Fail' : '<del>Fail</del>' !!}</label>
                                <label>{!! $datam->first_tri_result == 'Absent' ? 'Absent' : '<del>Absent</del>' !!}</label>
                                <label>{!! $datam->first_tri_result == 'Exemption' ? 'Exemption' : '<del>Exemption</del>' !!}</label>
                            </td>
                        </tr>
                        <tr>
                            <td>2nd trimester examination</td>
                            <td>{{ $datam->second_trimester_date }} </td>
                            <td>
                                <label>{!! $datam->sec_tri_result == 'Pass' ? 'Pass' : '<del>Pass</del>' !!}</label>
                                <label>{!! $datam->sec_tri_result == 'Fail' ? 'Fail' : '<del>Fail</del>' !!}</label>
                                <label>{!! $datam->sec_tri_result == 'Absent' ? 'Absent' : '<del>Absent</del>' !!}</label>
                                <label>{!! $datam->sec_tri_result == 'Exemption' ? 'Exemption' : '<del>Exemption</del>' !!}</label>
                            </td>
                        </tr>
                        <tr>
                            <td>3rd trimester examination</td>
                            <td> {{ $datam->third_trimester_date }} </td>
                            <td>
                                <label>{!! $datam->thi_tri_result == 'Pass' ? 'Pass' : '<del>Pass</del>' !!}</label>
                                <label>{!! $datam->thi_tri_result == 'Fail' ? 'Fail' : '<del>Fail</del>' !!}</label>
                                <label>{!! $datam->thi_tri_result == 'Absent' ? 'Absent' : '<del>Absent</del>' !!}</label>
                                <label>{!! $datam->thi_tri_result == 'Exemption' ? 'Exemption' : '<del>Exemption</del>' !!}</label>
                            </td>
                        </tr>
                        <tr>
                            <td>4th3rd trimester examination</td>
                            <td> {{ $datam->forth_trimester_date }}</td>
                            <td>
                                <label>{!! $datam->for_tri_result == 'Pass' ? 'Pass' : '<del>Pass</del>' !!}</label>
                                <label>{!! $datam->for_tri_result == 'Fail' ? 'Fail' : '<del>Fail</del>' !!}</label>
                                <label>{!! $datam->for_tri_result == 'Absent' ? 'Absent' : '<del>Absent</del>' !!}</label>
                                <label>{!! $datam->for_tri_result == 'Exemption' ? 'Exemption' : '<del>Exemption</del>' !!}</label>
                            </td>
                        </tr>
                    </table>
                </tr>
            </table>
            <table style="width: 100%; margin:20px 0 0 0;">
                <tr>
                    <td>
                        <p>7 . <u><b>Musketry firing:</b></u></p>

                    </td>
                </tr>
                <tr>
                    <table style="width: 100%;text-align:center" class="table-bordered table-responsive">
                        <tr>
                            <th>Part</th>
                            <th>Rifle </th>
                            <th>SMG</th>
                            <th>Pistol</th>
                            <th>Comment</th>
                            <td rowspan="4"> {{ $datam->signature_gsto_firing }}<br>signature of GSTO/Officer-in-Charge sports</td>
                        </tr>
                        <tr>
                            <td>1st Part</td>
                            <td>
                                <label>{!! $datam->fir_rif_result == 'participate' ? 'participate' : '<del>participate</del>' !!}</label>
                                <label>{!! $datam->fir_rif_result == 'fail' ? 'fail' : '<del>fail</del>' !!}</label>
                                <label>{!! $datam->fir_rif_result == 'exemption' ? 'exemption' : '<del>exemption</del>' !!}</label>
                                <label>{!! $datam->fir_rif_result == 'not_applicable' ? 'not_applicable' : '<del>not_applicable</del>' !!}</label>
                            </td>
                            <td>
                                <label>{!! $datam->fir_smg_result == 'participate' ? 'participate' : '<del>participate</del>' !!}</label>
                                <label>{!! $datam->fir_smg_result == 'fail' ? 'fail' : '<del>fail</del>' !!}</label>
                                <label>{!! $datam->fir_smg_result == 'exemption' ? 'exemption' : '<del>exemption</del>' !!}</label>
                                <label>{!! $datam->fir_smg_result == 'not_applicable' ? 'not_applicable' : '<del>not_applicable</del>' !!}</label>
                            </td>
                            <td>
                                <label>{!! $datam->fir_pis_result == 'participate' ? 'participate' : '<del>participate</del>' !!}</label>
                                <label>{!! $datam->fir_pis_result == 'fail' ? 'fail' : '<del>fail</del>' !!}</label>
                                <label>{!! $datam->fir_pis_result == 'exemption' ? 'exemption' : '<del>exemption</del>' !!}</label>
                                <label>{!! $datam->fir_pis_result == 'not_applicable' ? 'not_applicable' : '<del>not_applicable</del>' !!}</label>
                            </td>
                            <td>{{ $datam->fir_comment }} </td>
                        </tr>
                        <tr>
                            <td>2nd Part</td>
                            <td>
                                <label>{!! $datam->sec_rif_result == 'participate' ? 'participate' : '<del>participate</del>' !!}</label>
                                <label>{!! $datam->sec_rif_result == 'fail' ? 'fail' : '<del>fail</del>' !!}</label>
                                <label>{!! $datam->sec_rif_result == 'exemption' ? 'exemption' : '<del>exemption</del>' !!}</label>
                                <label>{!! $datam->sec_rif_result == 'not_applicable' ? 'not_applicable' : '<del>not_applicable</del>' !!}</label>
                            </td>
                            <td>
                                <label>{!! $datam->sec_smg_result == 'participate' ? 'participate' : '<del>participate</del>' !!}</label>
                                <label>{!! $datam->sec_smg_result == 'fail' ? 'fail' : '<del>fail</del>' !!}</label>
                                <label>{!! $datam->sec_smg_result == 'exemption' ? 'exemption' : '<del>exemption</del>' !!}</label>
                                <label>{!! $datam->sec_smg_result == 'not_applicable' ? 'not_applicable' : '<del>not_applicable</del>' !!}</label>
                            </td>
                            <td>
                                <label>{!! $datam->sec_pis_result == 'participate' ? 'participate' : '<del>participate</del>' !!}</label>
                                <label>{!! $datam->sec_pis_result == 'fail' ? 'fail' : '<del>fail</del>' !!}</label>
                                <label>{!! $datam->sec_pis_result == 'exemption' ? 'exemption' : '<del>exemption</del>' !!}</label>
                                <label>{!! $datam->sec_pis_result == 'not_applicable' ? 'not_applicable' : '<del>not_applicable</del>' !!}</label>
                            </td>
                            <td>{{ $datam->sec_comment }} </td>
                        </tr>
                        <tr>
                            <td>thi Part</td>
                            <td>
                                <label>{!! $datam->thi_rif_result == 'participate' ? 'participate' : '<del>participate</del>' !!}</label>
                                <label>{!! $datam->thi_rif_result == 'fail' ? 'fail' : '<del>fail</del>' !!}</label>
                                <label>{!! $datam->thi_rif_result == 'exemption' ? 'exemption' : '<del>exemption</del>' !!}</label>
                                <label>{!! $datam->thi_rif_result == 'not_applicable' ? 'not_applicable' : '<del>not_applicable</del>' !!}</label>
                            </td>
                            <td>
                                <label>{!! $datam->thi_smg_result == 'participate' ? 'participate' : '<del>participate</del>' !!}</label>
                                <label>{!! $datam->thi_smg_result == 'fail' ? 'fail' : '<del>fail</del>' !!}</label>
                                <label>{!! $datam->thi_smg_result == 'exemption' ? 'exemption' : '<del>exemption</del>' !!}</label>
                                <label>{!! $datam->thi_smg_result == 'not_applicable' ? 'not_applicable' : '<del>not_applicable</del>' !!}</label>
                            </td>
                            <td>
                                <label>{!! $datam->thi_pis_result == 'participate' ? 'participate' : '<del>participate</del>' !!}</label>
                                <label>{!! $datam->thi_pis_result == 'fail' ? 'fail' : '<del>fail</del>' !!}</label>
                                <label>{!! $datam->thi_pis_result == 'exemption' ? 'exemption' : '<del>exemption</del>' !!}</label>
                                <label>{!! $datam->thi_pis_result == 'not_applicable' ? 'not_applicable' : '<del>not_applicable</del>' !!}</label>
                            </td>
                            <td> {{ $datam->thi_comment }}</td>
                        </tr>
                    </table>
                </tr>
                <tr>
                    <div class="row">
                        <div class="col-6">
                            <td>Date : {{ $datam->date_fir_bottom }}</td>
                        </div>
                        <div class="col-6">
                            <td>Signature of MODC(Air) : {{ $datam->signature_modc_air }}</td>
                        </div>
                    </div>
                </tr>
            </table>
            <hr>





            <table width="100%" class="table-responsive mt-5" cellspacing="0" cellpadding="0">
                <tr align="center" style="border-bottom: 1px solid black;">
                    <th colspan="4" style="font-size: 25px; padding-bottom:5px"><u>PART-II (FOR ASSESSOR)<u>
                    </th>
                </tr>
                <tr>
                    <td>
                        <p>8. <u>Character and general behaviour</u> :</p>
                        <p style="padding-left: 10px;">(Cross the appropriate box)</p>
                    </td>
                    <td align="center">
                        <p>Good</p>
                        <p style="border:1px solid black; border-radius:5px; padding:3px; text-align:center; width:50px">
                            <label>{!! $datam->appropriate_box == 'Good' ? '✅' : '❌' !!}</label></p>
                    </td>
                    <td align="center">
                        <p>Satisfactory</p>
                        <p style="border:1px solid black; border-radius:5px; padding:3px; text-align:center; width:50px">
                            <label>{!! $datam->appropriate_box == 'Satisfactory' ? '✅' : '❌' !!}</label></p>
                    </td>
                    <td align="center">
                        <p>Unsatisfactory</p>
                        <p style="border:1px solid black; border-radius:5px; padding:3px; text-align:center; width:50px">
                            <label>{!! $datam->appropriate_box == 'Unsatisfactory' ? '✅' : '❌' !!}</label></p>
                    </td>
                </tr>
                <tr style="border-top: 1px solid black;">
                    <td colspan="4" style="padding-top: 5px;">
                        <span>9. <u>Trade Proficiency and General Ability</u> :</span>
                        <span>(Cross the appropriate box)</span>
                    </td>
                </tr>
            </table>
            <table width="100%" class="table-responsive table-bordered" cellspacing="0" cellpadding="0">
                <tr>
                    <td style="padding-left: 10px;">a. Professional Knowledge</td>
                    <td>
                        <table cellspacing="0" cellpadding="10">
                            <tr align="center">
                                <td>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        10
                                    </span>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        9
                                    </span>
                                </td>
                            </tr>
                            <tr align="center">
                                <td>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <label>{!! $datam->knowledge_radio == '10' ? '✅' : 'x' !!}</label>
                                    </span>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <label>{!! $datam->knowledge_radio == '09' ? '✅' : 'x' !!}</label>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Has Extensive Professional Knowledge
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td>
                        <table cellspacing="0" cellpadding="10">
                            <tr align="center">
                                <td>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        8
                                    </span>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        7
                                    </span>
                                </td>
                            </tr>
                            <tr align="center">
                                <td>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <label>{!! $datam->knowledge_radio == '08' ? '✅' : 'x' !!}</label>
                                    </span>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <label>{!! $datam->knowledge_radio == '07' ? '✅' : 'x' !!}</label>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Has Extensive Professional Knowledge
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td>
                        <table cellspacing="0" cellpadding="10">
                            <tr align="center">
                                <td>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        6
                                    </span>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        5
                                    </span>
                                </td>
                            </tr>
                            <tr align="center">
                                <td>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <label>{!! $datam->knowledge_radio == '06' ? '✅' : 'x' !!}</label>
                                    </span>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <label>{!! $datam->knowledge_radio == '05' ? '✅' : 'x' !!}</label>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Has Extensive Professional Knowledge
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td>
                        <table cellspacing="0" cellpadding="10">
                            <tr align="center">
                                <td>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        4
                                    </span>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        3
                                    </span>
                                </td>
                            </tr>
                            <tr align="center">
                                <td>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <label>{!! $datam->knowledge_radio == '04' ? '✅' : 'x' !!}</label>
                                    </span>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <label>{!! $datam->knowledge_radio == '03' ? '✅' : 'x' !!}</label>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Professional knowledge are limited but interest in acquiring knowledge
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td>
                        <table cellspacing="0" cellpadding="10">
                            <tr align="center">
                                <td>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        2
                                    </span>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        1
                                    </span>
                                </td>
                            </tr>
                            <tr align="center">
                                <td>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <label>{!! $datam->knowledge_radio == '02' ? '✅' : 'x' !!}</label>
                                    </span>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <label>{!! $datam->knowledge_radio == '01' ? '✅' : 'x' !!}</label>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Professional knowledge are so limited and there is no interest in learning
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>

                <tr>
                    <td style="padding-left: 10px;">b. Professional Competence</td>
                    <td>
                        <table cellspacing="0" cellpadding="10">
                            <tr align="center">
                                <td>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        10
                                    </span>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        9
                                    </span>
                                </td>
                            </tr>
                            <tr align="center">
                                <td>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <label>{!! $datam->competence_radio == '10' ? '✅' : 'x' !!}</label>
                                    </span>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <label>{!! $datam->competence_radio == '09' ? '✅' : 'x' !!}</label>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Has Outstanding Professional Ability
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td>
                        <table cellspacing="0" cellpadding="10">
                            <tr align="center">
                                <td>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        8
                                    </span>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        7
                                    </span>
                                </td>
                            </tr>
                            <tr align="center">
                                <td>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <label>{!! $datam->competence_radio == '08' ? '✅' : 'x' !!}</label>
                                    </span>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <label>{!! $datam->competence_radio == '07' ? '✅' : 'x' !!}</label>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Has Extensive Professional Competence
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td>
                        <table cellspacing="0" cellpadding="10">
                            <tr align="center">
                                <td>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        6
                                    </span>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        5
                                    </span>
                                </td>
                            </tr>
                            <tr align="center">
                                <td>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <label>{!! $datam->competence_radio == '06' ? '✅' : 'x' !!}</label>
                                    </span>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <label>{!! $datam->competence_radio == '05' ? '✅' : 'x' !!}</label>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    There are acceptable competencies
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td>
                        <table cellspacing="0" cellpadding="10">
                            <tr align="center">
                                <td>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        4
                                    </span>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        3
                                    </span>
                                </td>
                            </tr>
                            <tr align="center">
                                <td>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <label>{!! $datam->competence_radio == '04' ? '✅' : 'x' !!}</label>
                                    </span>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <label>{!! $datam->competence_radio == '03' ? '✅' : 'x' !!}</label>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Professional work is often wrong
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td>
                        <table cellspacing="0" cellpadding="10">
                            <tr align="center">
                                <td>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        2
                                    </span>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        1
                                    </span>
                                </td>
                            </tr>
                            <tr align="center">
                                <td>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <label>{!! $datam->competence_radio == '02' ? '✅' : 'x' !!}</label>
                                    </span>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <label>{!! $datam->competence_radio == '01' ? '✅' : 'x' !!}</label>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Weak in Professional work
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>

                <tr>
                    <td style="padding-left: 10px;">c. Dutiful and caution</td>
                    <td>
                        <table cellspacing="0" cellpadding="10">
                            <tr align="center">
                                <td>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        10
                                    </span>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        9
                                    </span>
                                </td>
                            </tr>
                            <tr align="center">
                                <td>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <label>{!! $datam->dutiful_radio == '10' ? '✅' : 'x' !!}</label>
                                    </span>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <label>{!! $datam->dutiful_radio == '09' ? '✅' : 'x' !!}</label>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Outstanding dutiful and caution
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td>
                        <table cellspacing="0" cellpadding="10">
                            <tr align="center">
                                <td>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        8
                                    </span>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        7
                                    </span>
                                </td>
                            </tr>
                            <tr align="center">
                                <td>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <label>{!! $datam->dutiful_radio == '08' ? '✅' : 'x' !!}</label>
                                    </span>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <label>{!! $datam->dutiful_radio == '07' ? '✅' : 'x' !!}</label>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Extensive dutiful and caution
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td>
                        <table cellspacing="0" cellpadding="10">
                            <tr align="center">
                                <td>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        6
                                    </span>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        5
                                    </span>
                                </td>
                            </tr>
                            <tr align="center">
                                <td>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <label>{!! $datam->dutiful_radio == '06' ? '✅' : 'x' !!}</label>
                                    </span>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <label>{!! $datam->dutiful_radio == '05' ? '✅' : 'x' !!}</label>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    General dutiful and caution
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td>
                        <table cellspacing="0" cellpadding="10">
                            <tr align="center">
                                <td>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        4
                                    </span>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        3
                                    </span>
                                </td>
                            </tr>
                            <tr align="center">
                                <td>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <label>{!! $datam->dutiful_radio == '04' ? '✅' : 'x' !!}</label>
                                    </span>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <label>{!! $datam->dutiful_radio == '03' ? '✅' : 'x' !!}</label>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Limited dutiful and caution
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td>
                        <table cellspacing="0" cellpadding="10">
                            <tr align="center">
                                <td>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        2
                                    </span>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        1
                                    </span>
                                </td>
                            </tr>
                            <tr align="center">
                                <td>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <label>{!! $datam->dutiful_radio == '02' ? '✅' : 'x' !!}</label>
                                    </span>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <label>{!! $datam->dutiful_radio == '01' ? '✅' : 'x' !!}</label>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Not dutiful and caution
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>

                <tr>
                    <td style="padding-left: 10px;">d. Obedience and Discipline</td>
                    <td>
                        <table cellspacing="0" cellpadding="10">
                            <tr align="center">
                                <td>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        10
                                    </span>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        9
                                    </span>
                                </td>
                            </tr>
                            <tr align="center">
                                <td>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <label>{!! $datam->obedience_radio == '10' ? '✅' : 'x' !!}</label>
                                    </span>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <label>{!! $datam->obedience_radio == '09' ? '✅' : 'x' !!}</label>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Has Outstanding Obedience and discipline
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td>
                        <table cellspacing="0" cellpadding="10">
                            <tr align="center">
                                <td>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        8
                                    </span>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        7
                                    </span>
                                </td>
                            </tr>
                            <tr align="center">
                                <td>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <label>{!! $datam->obedience_radio == '08' ? '✅' : 'x' !!}</label>
                                    </span>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <label>{!! $datam->obedience_radio == '07' ? '✅' : 'x' !!}</label>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Discipline and very loyal
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td>
                        <table cellspacing="0" cellpadding="10">
                            <tr align="center">
                                <td>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        6
                                    </span>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        5
                                    </span>
                                </td>
                            </tr>
                            <tr align="center">
                                <td>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <label>{!! $datam->obedience_radio == '06' ? '✅' : 'x' !!}</label>
                                    </span>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <label>{!! $datam->obedience_radio == '05' ? '✅' : 'x' !!}</label>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Satisfactory discipline and loyal
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td>
                        <table cellspacing="0" cellpadding="10">
                            <tr align="center">
                                <td>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        4
                                    </span>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        3
                                    </span>
                                </td>
                            </tr>
                            <tr align="center">
                                <td>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <label>{!! $datam->obedience_radio == '04' ? '✅' : 'x' !!}</label>
                                    </span>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <label>{!! $datam->obedience_radio == '03' ? '✅' : 'x' !!}</label>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Very low Level discipline and loyal
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td>
                        <table cellspacing="0" cellpadding="10">
                            <tr align="center">
                                <td>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        2
                                    </span>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        1
                                    </span>
                                </td>
                            </tr>
                            <tr align="center">
                                <td>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <label>{!! $datam->obedience_radio == '02' ? '✅' : 'x' !!}</label>
                                    </span>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <label>{!! $datam->obedience_radio == '01' ? '✅' : 'x' !!}</label>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Not discipline and loyal at all
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>

                <tr>
                    <td style="padding-left: 10px;">e. Responsibility awareness and interest in work</td>
                    <td>
                        <table cellspacing="0" cellpadding="10">
                            <tr align="center">
                                <td>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        10
                                    </span>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        9
                                    </span>
                                </td>
                            </tr>
                            <tr align="center">
                                <td>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <label>{!! $datam->responsibility_radio == '10' ? '✅' : 'x' !!}</label>
                                    </span>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <label>{!! $datam->responsibility_radio == '09' ? '✅' : 'x' !!}</label>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Has Outstanding Responsibility awareness and interest in work
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td>
                        <table cellspacing="0" cellpadding="10">
                            <tr align="center">
                                <td>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        8
                                    </span>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        7
                                    </span>
                                </td>
                            </tr>
                            <tr align="center">
                                <td>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <label>{!! $datam->responsibility_radio == '08' ? '✅' : 'x' !!}</label>
                                    </span>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <label>{!! $datam->responsibility_radio == '07' ? '✅' : 'x' !!}</label>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Has Extensive Responsibility awareness and interest in work
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td>
                        <table cellspacing="0" cellpadding="10">
                            <tr align="center">
                                <td>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        6
                                    </span>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        5
                                    </span>
                                </td>
                            </tr>
                            <tr align="center">
                                <td>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <label>{!! $datam->responsibility_radio == '06' ? '✅' : 'x' !!}</label>
                                    </span>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <label>{!! $datam->responsibility_radio == '05' ? '✅' : 'x' !!}</label>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Has satisfactory Responsibility awareness and interest in work
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td>
                        <table cellspacing="0" cellpadding="10">
                            <tr align="center">
                                <td>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        4
                                    </span>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        3
                                    </span>
                                </td>
                            </tr>
                            <tr align="center">
                                <td>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <label>{!! $datam->responsibility_radio == '04' ? '✅' : 'x' !!}</label>
                                    </span>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <label>{!! $datam->responsibility_radio == '03' ? '✅' : 'x' !!}</label>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Responsibility awareness and interest in work is limited
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td>
                        <table cellspacing="0" cellpadding="10">
                            <tr align="center">
                                <td>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        2
                                    </span>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        1
                                    </span>
                                </td>
                            </tr>
                            <tr align="center">
                                <td>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <label>{!! $datam->responsibility_radio == '02' ? '✅' : 'x' !!}</label>
                                    </span>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <label>{!! $datam->responsibility_radio == '01' ? '✅' : 'x' !!}</label>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Responsibility awareness and interest in work is very low
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>

                <tr>
                    <td style="padding-left: 10px;">f. Achieve reliability and Loyalty</td>
                    <td>
                        <table cellspacing="0" cellpadding="10">
                            <tr align="center">
                                <td>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        10
                                    </span>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        9
                                    </span>
                                </td>
                            </tr>
                            <tr align="center">
                                <td>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <label>{!! $datam->reliability_radio == '10' ? '✅' : 'x' !!}</label>
                                    </span>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <label>{!! $datam->reliability_radio == '09' ? '✅' : 'x' !!}</label>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Has Outstanding reliability and Loyalty
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td>
                        <table cellspacing="0" cellpadding="10">
                            <tr align="center">
                                <td>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        8
                                    </span>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        7
                                    </span>
                                </td>
                            </tr>
                            <tr align="center">
                                <td>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <label>{!! $datam->reliability_radio == '08' ? '✅' : 'x' !!}</label>
                                    </span>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <label>{!! $datam->reliability_radio == '07' ? '✅' : 'x' !!}</label>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Has Extensive reliability and Loyalty
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td>
                        <table cellspacing="0" cellpadding="10">
                            <tr align="center">
                                <td>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        6
                                    </span>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        5
                                    </span>
                                </td>
                            </tr>
                            <tr align="center">
                                <td>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <label>{!! $datam->reliability_radio == '06' ? '✅' : 'x' !!}</label>
                                    </span>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <label>{!! $datam->reliability_radio == '05' ? '✅' : 'x' !!}</label>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Has satisfactory reliability and Loyalty
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td>
                        <table cellspacing="0" cellpadding="10">
                            <tr align="center">
                                <td>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        4
                                    </span>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        3
                                    </span>
                                </td>
                            </tr>
                            <tr align="center">
                                <td>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <label>{!! $datam->reliability_radio == '04' ? '✅' : 'x' !!}</label>
                                    </span>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <label>{!! $datam->reliability_radio == '03' ? '✅' : 'x' !!}</label>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Not satisfactory reliability and Loyalty
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td>
                        <table cellspacing="0" cellpadding="10">
                            <tr align="center">
                                <td>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        2
                                    </span>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        1
                                    </span>
                                </td>
                            </tr>
                            <tr align="center">
                                <td>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <label>{!! $datam->reliability_radio == '02' ? '✅' : 'x' !!}</label>
                                    </span>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <label>{!! $datam->reliability_radio == '01' ? '✅' : 'x' !!}</label>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Not reliable and Loyal at all
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>

                <tr>
                    <td style="padding-left: 10px;">g. Physical fitness and interest in performing hard work</td>
                    <td>
                        <table cellspacing="0" cellpadding="10">
                            <tr align="center">
                                <td>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        10
                                    </span>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        9
                                    </span>
                                </td>
                            </tr>
                            <tr align="center">
                                <td>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <label>{!! $datam->fitness_radio == '10' ? '✅' : 'x' !!}</label>
                                    </span>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <label>{!! $datam->fitness_radio == '09' ? '✅' : 'x' !!}</label>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Has Outstanding Physical fitness and interest in performing hard work
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td>
                        <table cellspacing="0" cellpadding="10">
                            <tr align="center">
                                <td>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        8
                                    </span>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        7
                                    </span>
                                </td>
                            </tr>
                            <tr align="center">
                                <td>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <label>{!! $datam->fitness_radio == '08' ? '✅' : 'x' !!}</label>
                                    </span>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <label>{!! $datam->fitness_radio == '07' ? '✅' : 'x' !!}</label>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Has Extensive Physical fitness and interest in performing hard work
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td>
                        <table cellspacing="0" cellpadding="10">
                            <tr align="center">
                                <td>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        6
                                    </span>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        5
                                    </span>
                                </td>
                            </tr>
                            <tr align="center">
                                <td>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <label>{!! $datam->fitness_radio == '06' ? '✅' : 'x' !!}</label>
                                    </span>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <label>{!! $datam->fitness_radio == '05' ? '✅' : 'x' !!}</label>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Has satisfactory Physical fitness and interest in performing hard work
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td>
                        <table cellspacing="0" cellpadding="10">
                            <tr align="center">
                                <td>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        4
                                    </span>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        3
                                    </span>
                                </td>
                            </tr>
                            <tr align="center">
                                <td>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <label>{!! $datam->fitness_radio == '04' ? '✅' : 'x' !!}</label>
                                    </span>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <label>{!! $datam->fitness_radio == '03' ? '✅' : 'x' !!}</label>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Not satisfactory Physical fitness and interest in performing hard work
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td>
                        <table cellspacing="0" cellpadding="10">
                            <tr align="center">
                                <td>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        2
                                    </span>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        1
                                    </span>
                                </td>
                            </tr>
                            <tr align="center">
                                <td>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <label>{!! $datam->fitness_radio == '02' ? '✅' : 'x' !!}</label>
                                    </span>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <label>{!! $datam->fitness_radio == '01' ? '✅' : 'x' !!}</label>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Not Physically fit and interest in performing hard work
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>

                <tr>
                    <td style="padding-left: 10px;">h. Honesty</td>
                    <td>
                        <table cellspacing="0" cellpadding="10">
                            <tr align="center">
                                <td>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        10
                                    </span>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        9
                                    </span>
                                </td>
                            </tr>
                            <tr align="center">
                                <td>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <label>{!! $datam->honest_radio == '10' ? '✅' : 'x' !!}</label>
                                    </span>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <label>{!! $datam->honest_radio == '09' ? '✅' : 'x' !!}</label>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Has Outstanding honesty and fully loyal
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td>
                        <table cellspacing="0" cellpadding="10">
                            <tr align="center">
                                <td>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        8
                                    </span>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        7
                                    </span>
                                </td>
                            </tr>
                            <tr align="center">
                                <td>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <label>{!! $datam->honest_radio == '08' ? '✅' : 'x' !!}</label>
                                    </span>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <label>{!! $datam->honest_radio == '07' ? '✅' : 'x' !!}</label>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Extensive honest and loyal
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td>
                        <table cellspacing="0" cellpadding="10">
                            <tr align="center">
                                <td>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        6
                                    </span>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        5
                                    </span>
                                </td>
                            </tr>
                            <tr align="center">
                                <td>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <label>{!! $datam->honest_radio == '06' ? '✅' : 'x' !!}</label>
                                    </span>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <label>{!! $datam->honest_radio == '05' ? '✅' : 'x' !!}</label>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Satisfactory honest
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td>
                        <table cellspacing="0" cellpadding="10">
                            <tr align="center">
                                <td>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        4
                                    </span>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        3
                                    </span>
                                </td>
                            </tr>
                            <tr align="center">
                                <td>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <label>{!! $datam->honest_radio == '04' ? '✅' : 'x' !!}</label>
                                    </span>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <label>{!! $datam->honest_radio == '03' ? '✅' : 'x' !!}</label>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Fairly honest
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td>
                        <table cellspacing="0" cellpadding="10">
                            <tr align="center">
                                <td>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        2
                                    </span>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        1
                                    </span>
                                </td>
                            </tr>
                            <tr align="center">
                                <td>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <label>{!! $datam->honest_radio == '02' ? '✅' : 'x' !!}</label>
                                    </span>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <label>{!! $datam->honest_radio == '01' ? '✅' : 'x' !!}</label>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Not honest at all
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>

                <tr>
                    <td style="padding-left: 10px;">i. Mentally enthusiasm and courage</td>
                    <td>
                        <table cellspacing="0" cellpadding="10">
                            <tr align="center">
                                <td>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        10
                                    </span>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        9
                                    </span>
                                </td>
                            </tr>
                            <tr align="center">
                                <td>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <label>{!! $datam->enthusiasm_radio == '10' ? '✅' : 'x' !!}</label>
                                    </span>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <label>{!! $datam->enthusiasm_radio == '09' ? '✅' : 'x' !!}</label>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Has Outstanding mentally enthusiasm and courage
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td>
                        <table cellspacing="0" cellpadding="10">
                            <tr align="center">
                                <td>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        8
                                    </span>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        7
                                    </span>
                                </td>
                            </tr>
                            <tr align="center">
                                <td>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <label>{!! $datam->enthusiasm_radio == '08' ? '✅' : 'x' !!}</label>
                                    </span>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <label>{!! $datam->enthusiasm_radio == '07' ? '✅' : 'x' !!}</label>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Extensive Mentally enthusiasm and courage
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td>
                        <table cellspacing="0" cellpadding="10">
                            <tr align="center">
                                <td>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        6
                                    </span>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        5
                                    </span>
                                </td>
                            </tr>
                            <tr align="center">
                                <td>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <label>{!! $datam->enthusiasm_radio == '06' ? '✅' : 'x' !!}</label>
                                    </span>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <label>{!! $datam->enthusiasm_radio == '05' ? '✅' : 'x' !!}</label>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Satisfactory Mentally enthusiasm and courage
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td>
                        <table cellspacing="0" cellpadding="10">
                            <tr align="center">
                                <td>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        4
                                    </span>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        3
                                    </span>
                                </td>
                            </tr>
                            <tr align="center">
                                <td>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <label>{!! $datam->enthusiasm_radio == '04' ? '✅' : 'x' !!}</label>
                                    </span>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <label>{!! $datam->enthusiasm_radio == '03' ? '✅' : 'x' !!}</label>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Fairly Mentally enthusiasm and courage
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td>
                        <table cellspacing="0" cellpadding="10">
                            <tr align="center">
                                <td>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        2
                                    </span>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        1
                                    </span>
                                </td>
                            </tr>
                            <tr align="center">
                                <td>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <label>{!! $datam->enthusiasm_radio == '02' ? '✅' : 'x' !!}</label>
                                    </span>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <label>{!! $datam->enthusiasm_radio == '01' ? '✅' : 'x' !!}</label>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Not Mentally enthusiasm and courage
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>

                <tr>
                    <td style="padding-left: 10px;">j. Supervision, control, coordination and organizational capacity</td>
                    <td>
                        <table cellspacing="0" cellpadding="10">
                            <tr align="center">
                                <td>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        10
                                    </span>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        9
                                    </span>
                                </td>
                            </tr>
                            <tr align="center">
                                <td>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <label>{!! $datam->supervision_radio == '10' ? '✅' : 'x' !!}</label>
                                    </span>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <label>{!! $datam->supervision_radio == '09' ? '✅' : 'x' !!}</label>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Has Outstanding Supervision, control, coordination and organizational capacity
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td>
                        <table cellspacing="0" cellpadding="10">
                            <tr align="center">
                                <td>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        8
                                    </span>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        7
                                    </span>
                                </td>
                            </tr>
                            <tr align="center">
                                <td>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <label>{!! $datam->supervision_radio == '08' ? '✅' : 'x' !!}</label>
                                    </span>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <label>{!! $datam->supervision_radio == '07' ? '✅' : 'x' !!}</label>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Satisfactory Supervision, control, coordination and organizational capacity
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td>
                        <table cellspacing="0" cellpadding="10">
                            <tr align="center">
                                <td>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        6
                                    </span>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        5
                                    </span>
                                </td>
                            </tr>
                            <tr align="center">
                                <td>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <label>{!! $datam->supervision_radio == '06' ? '✅' : 'x' !!}</label>
                                    </span>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <label>{!! $datam->supervision_radio == '05' ? '✅' : 'x' !!}</label>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    General Supervision, control, coordination and organizational capacity
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td>
                        <table cellspacing="0" cellpadding="10">
                            <tr align="center">
                                <td>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        4
                                    </span>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        3
                                    </span>
                                </td>
                            </tr>
                            <tr align="center">
                                <td>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <label>{!! $datam->supervision_radio == '04' ? '✅' : 'x' !!}</label>
                                    </span>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <label>{!! $datam->supervision_radio == '03' ? '✅' : 'x' !!}</label>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Fairly Supervision, control, coordination and organizational capacity
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td>
                        <table cellspacing="0" cellpadding="10">
                            <tr align="center">
                                <td>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        2
                                    </span>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        1
                                    </span>
                                </td>
                            </tr>
                            <tr align="center">
                                <td>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <label>{!! $datam->supervision_radio == '02' ? '✅' : 'x' !!}</label>
                                    </span>
                                    <span
                                        style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <label>{!! $datam->supervision_radio == '01' ? '✅' : 'x' !!}</label>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Not Supervision, control, coordination and organizational capacity
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>



            </table>
            <div class="row" style="padding-top: 20px;">
                <div class="col-6">10 . <b>Total Marks:</b> {{ $datam->total_marks }}</div>
                <div class="col-6"><b>Classification:</b>{{ $datam->classification }} </div>
            </div>
            <hr>






            <table style="width: 100%; margin:20px 0 0 0;">
                <tr>
                    <td>
                        <p>11 . <u><b>The overall grading will be on the basis of total score as follows:</b></u></p>

                    </td>
                </tr>
                <tr>
                    <table style="width: 100%;text-align:center" class="table-bordered table-responsive">
                        <tr>
                            <th>Score Grading </th>
                            <th>Title Grading</th>
                            <th>Rate of classification according to manpower</th>
                        </tr>
                        <tr>
                            <td>91-100 {{ $datam->grade_ten }} / 10</td>
                            <td>Outstanding</td>
                            <td>Not exceeding 5%</td>
                        </tr>
                        <tr>
                            <td>81-90  {{ $datam->grade_nine }}/ 9</td>
                            <td rowspan="2">Well above avarage</td>
                            <td>Not exceeding 6%</td>
                        </tr>
                        <tr>
                            <td>76-80 {{ $datam->grade_eight }}/ 8</td>
                            <td>Not exceeding 9%</td>
                        </tr>
                        <tr>
                            <td>66-75 {{ $datam->grade_seven }}/ 7</td>
                            <td rowspan="2">Above avarage</td>
                            <td>Not exceeding 20%</td>
                        </tr>
                        <tr>
                            <td>56-65 {{ $datam->grade_six }} / 6</td>
                            <td rowspan="5"></td>
                        </tr>
                        <tr>
                            <td>46-55 {{ $datam->grade_five }}/ 5</td>
                            <td rowspan="2">Avarage</td>
                        </tr>
                        <tr>
                            <td>36-45 {{ $datam->grade_four }} / 4</td>
                        </tr>
                        <tr>
                            <td>30-35 {{ $datam->grade_three }} / 3</td>
                            <td> below Avarage</td>
                        </tr>
                        <tr>
                            <td>29 and below {{ $datam->grade_two }}/ 2</td>
                            <td>Weak</td>
                        </tr>
                    </table>
                </tr>
            </table>
            <hr>
            <table style="width: 100%; margin:20px 0 0 0;">
                <tr>
                    <td>
                        <p>12 . <u><b>Fitness for Promotion:</b></u><br>(Cross the appropriate box)</p>
                    </td>
                    <td>
                        <p><span style="border: 1px solid black; padding:5px;"><label for="fit">Fit for
                                    Promotion</label></span></p>
                        <label>{!! $datam->fitness_promotion_radio == 'Fit' ? '✅' : '❌' !!}</label>
                    </td>
                    <td>
                        <p><span style="border: 1px solid black; padding:5px;"><label for="not_fit">Not yet fit for
                                    Promotion</label></span></p>
                        <label>{!! $datam->fitness_promotion_radio == 'Not Fit' ? '✅' : '❌' !!}</label>

                    </td>
                    <td>
                        <p><span style="border: 1px solid black; padding:5px;"><label for="unfit">Unfit for
                                    Promotion</label></span></p>
                        <label>{!! $datam->fitness_promotion_radio == 'Unfit' ? '✅' : '❌' !!}</label>

                    </td>
                    <td>
                        <p><span style="border: 1px solid black; padding:5px;"><label for="not_app">Not
                                    Applicable</label></span></p>
                        <label>{!! $datam->fitness_promotion_radio == 'Not applicable' ? '✅' : '❌' !!}</label>

                    </td>
                </tr>
            </table>
            <hr>
            <table style="width: 100%; margin:20px 0 0 0;">
                <tr>
                    <td>
                        <p>13 . <u><b>General Comment:</b></u></p>
                    </td>
                </tr>
                <tr>
                    <td>
                        {{ $datam->general_comment }}
                    </td>
                </tr>
            </table>
            <table style="width: 100%; margin:20px 0 0 0;">

                <div class="row">
                    <div>
                        <tr>
                            <td width="60%">
                                <p style="padding-top:8rem">Date : {{ $datam->general_officer_date }}</p>
                            </td>
                            <td width="40%">
                                <p>Signature : {{ $datam->general_officer_sign }}</p>

                                <p>Name : {{ $datam->general_officer_name }} </p>

                                <p>Rank :{{ $datam->general_officer_rank }} </p>
                                <p>Initiating officer</p>
                            </td>
                        </tr>

                    </div>

                </div>
            </table>


            <table style="width: 100%; margin:20px 0 0 0;">
                <tr>
                    <td colspan="2" style="padding-top: 40px;">
                        (To be seen and signed by the appraisee if his total score is below average/poor or there is any
                        adverse remarks)
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <p>14. I have seen the below average report/adverse remarks.</p>
                    </td>
                </tr>
                <tr>
                    <td width="50%" style="padding: 4rem 0 1rem 0;">Date:  {{ $datam->signature_appraisee_date }}</td>
                    <td style="padding: 4rem 0 1rem 0;">
                        Signature of Appraisee:  {{ $datam->signature_of_appraisee }}
                    </td>
                </tr>
            </table>
            <hr>
            <table style="width: 100%; margin:20px 0 0 0;">
                <tr style="border-top: 1px solid black">
                    <td colspan="2" style="padding-top: 1rem;">
                        <p>15. <u>Remarks Reviewing Officer</u> :</p>
                        <p> {{ $datam->remarks_reviewing_officer }}</p>
                    </td>
                </tr>
                <tr style="border-bottom: 1px solid black;">
                    <td width="60%" style="padding-top: 8rem;">Date: {{ $datam->reviewing_officer_date }}</td>
                    <td>
                        <p>Signature : {{ $datam->reviewing_officer_sign }}</p>

                        <p>Name : {{ $datam->reviewing_officer_name }} </p>

                        <p>Rank :{{ $datam->reviewing_officer_rank }} </p>
                        <p>Reviewing Officer</p>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" style="padding-top: 2rem;">
                        <p>16. <u>Remarks Senior Reviewing Officer/Officer Commanding</u> :</p>
                        <p> {{ $datam->remarks_commanding_officer }} </p>
                    </td>
                </tr>
                <tr style="border-bottom: 1px solid black;">
                    <td width="60%" style="padding-top: 8rem;">Date: {{ $datam->commanding_officer_date }}</td>
                    <td>
                        <p>Signature : {{ $datam->commanding_officer_sign }}</p>

                        <p>Name : {{ $datam->commanding_officer_name }} </p>

                        <p>Rank :{{ $datam->commanding_officer_rank }} </p>
                        <p>Senior Reviewing Officer/Officer Commanding</p>
                    </td>
                </tr>
            </table>

            <table width="100%" class="table-responsive mt-5" cellspacing="0" cellpadding="0">
                <tr align="center" style="border-bottom: 1px solid black;">
                    <th colspan="4" style="font-size: 25px; padding-bottom:5px"><u>PART-III (FOR BAF Record Officer)<u>
                    </th>
                </tr>
                <tr>
                    <td style="border: 1px solid black; padding:10px">
                        <table>
                            <tr>
                                <td colspan="6" style="padding-bottom: 2rem;"><strong><u>Checked and Found
                                            Correct</u></strong></td>
                            </tr>
                            <tr style="padding-bottom: 3rem;">
                                <td width="15%">NCOIC Docu-III Section:</td>
                                <td>BD/{{ $datam->ncoic_docu_bd }}</td>
                                <td>Name:{{ $datam->ncoic_docu_name }}</td>
                                <td>Rank:{{ $datam->ncoic_docu_rank }}</td>
                                <td>Signature:{{ $datam->ncoic_docu_sign }}</td>
                                <td>Date:{{ $datam->ncoic_docu_date }}</td>
                            </tr>
                            <tr>
                                <td width="15%">WOIC Docu-III Section:</td>
                                <td>BD/{{ $datam->woic_docu_bd }}</td>
                                <td>Name:{{ $datam->woic_docu_name }}</td>
                                <td>Rank:{{ $datam->woic_docu_rank }}</td>
                                <td>Signature:{{ $datam->woic_docu_sign }}</td>
                                <td>Date:{{ $datam->woic_docu_date }}</td>
                            </tr>
                            <tr>
                                <td colspan="6" style="padding-bottom: 2rem;"><strong><u>Verified and Database
                                            Updated</u></strong></td>
                            </tr>
                            <tr style="padding-bottom: 3rem;">
                                <td width="15%">NCOIC R&D Cell:</td>
                                <td>BD/{{ $datam->ncoic_rnd_docu_bd }}</td>
                                <td>Name:{{ $datam->ncoic_rnd_docu_name }}</td>
                                <td>Rank:{{ $datam->ncoic_rnd_docu_rank }}</td>
                                <td>Signature:{{ $datam->ncoic_rnd_docu_sign }}</td>
                                <td>Date:{{ $datam->ncoic_rnd_docu_date }}</td>
                            </tr>
                            <tr>
                                <td width="15%">WOIC R&D Cell:</td>
                                <td>BD/{{ $datam->woic_rnd_docu_bd }}</td>
                                <td>Name:{{ $datam->woic_rnd_docu_name }}</td>
                                <td>Rank:{{ $datam->woic_rnd_docu_rank }}</td>
                                <td>Signature:{{ $datam->woic_rnd_docu_sign }}</td>
                                <td>Date:{{ $datam->woic_rnd_docu_date }}</td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>










        </div>
    </div>
    @push('js')
        <script type="text/javascript">
            var i = 0;
            $("#add").click(function() {
                console.log('inn');
                ++i;

                let html = `
                <tr>
                    <td>
                        <button type="button" class="btn btn-danger remove-tr"><i class="fa fa-trash"></i></button>                  
                    </td>
                    <td>
                        <input type="text"  {{ $datam->title }} name="base_unit[]" >
                    </td>
                    <td>
                        <input type="text"  {{ $datam->title }} name="des_duties[]">
                    </td>
                    <td>
                        <input type="text"  {{ $datam->title }} name="duties_from[]">
                    </td>
                    <td>
                        <input type="text"  {{ $datam->title }} name="duties_to[]">
                    </td>
                </tr> 
            `;
                $("#table").append(html);

            });
            $(document).on('click', '.remove-tr', function() {

                $(this).parents('tr').remove();

            });
        </script>
    @endpush
    @push('css')
        <style>
            .table {
                width: 100% !important;
                border-collapse: collapse;
                border: 1px solid black;
                align-items: center;
            }

            .table tr {
                border: 1px solid black;
            }

            .table th {
                border: 1px solid black;
            }

            .table td {
                border: 1px solid black;
            }

            /* .checkmark {
                position: absolute;
                top: 0;
                left: 0;
                height: 25px;
                width: 25px;
                background-color: #eee;
            } */

        </style>
    @endpush
@endsection
