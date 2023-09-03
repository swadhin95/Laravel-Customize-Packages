@extends('master')
@section('content')
<div class="card my-5  container-fluid">
    <div class="card-header">
        <h5>P-58 MODC : Create</h5>
    </div>
    <form action="{{ route('p58modc.store') }}" method="post">@csrf
        <div class="card-body">

            <table style="width: 100%;">
                <p style="text-align: end; margin: 90px 0 0 0; "><span style=" border: 1px solid black">BAF Form P-58 B</span></p>
                <tr>
                    <td>
                        <p style="font-size: larger; text-align: center;"><u><b>Competency Assessment Report- MODC(Air)</b></u></p>
                        <p style="text-align: center;">[Sergeant (MODC) and applies for upper ranks]</p>
                        <p style="font-size: 25px; text-align: center;"><u><b>Part I(For Person)</b></u></p>
                    </td>
                </tr>
            </table>
            <hr>

            <div>
                <p>1 . <u><b>Duration of Report : </b></u></p>
            </div>
            <div class="mb-3 row">
                <div class="col-sm-12 col-md-6 col-lg-6 row">
                    <label for="date_duration_from" class="col-sm-6 col-md-6 col-lg-6 col-form-label">From</label>
                    <div class="col-sm-6 col-md-6 col-lg-6">
                        <input type="date" name="date_duration_from" id="date_duration_from">
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 row">
                    <label for="date_duration_to" class="col-sm-6 col-md-6 col-lg-6 col-form-label col-form-label-sm">To</label>
                    <div class="col-sm-6 col-md-6 col-lg-6">
                        <input type="date" name="date_duration_to" id="date_duration_to">
                    </div>
                </div>
            </div>
            <div>
                <p>2 . <u><b>Reasons for making the report : </b></u></p>
            </div>
            <div class="mb-3 row">
                <div class="col-sm-6 col-md-6 col-lg-6 row">
                    <label class="col-sm-6 col-md-6 col-lg-6 col-form-label">Annual</label>
                    <div class="col-sm-6 col-md-6 col-lg-6">
                        <input type="text" name="reason_annual">
                    </div>
                </div>

                <div class="col-sm-6 col-md-6 col-lg-6 row">
                    <label class="col-sm-6 col-md-3 col-lg-6 col-form-label">Special Reason:</label>
                    <div class="col-sm-6 col-md-9 col-lg-6">
                        <input type="text" name="special_reason" id="special_reason">
                    </div>
                </div>
            </div>

            <div>
                <p>3 . <u><b>Job information : </b></u></p>
            </div>
            <div class="mb-3 row">
                <div class="col-4 row">
                    <label for="bd" class="col-5 col-form-label">BD/</label>
                    <div class="col-6">
                        <input type="text" name="job_info_bd" id="bd">
                    </div>
                </div>
                <div class="col-4 row">
                    <label for="rank" class="col-5 col-form-label">Rank:</label>
                    <div class="col-6">
                        <input type="text" name="job_info_rank" id="rank">
                    </div>
                </div>
                <div class="col-4 row">
                    <label for="name" class="col-5 col-form-label">Name:</label>
                    <div class="col-6">
                        <input type="text" name="job_info_name" id="name">
                    </div>
                </div>
                <div class="col-4 row">
                    <label for="cccupation" class="col-5 col-form-label">Occupation:</label>
                    <div class="col-6">
                        <input type="text" name="job_info_cccupation" id="cccupation">
                    </div>
                </div>

                <div class="col-4 row">
                    <label class="col-5 col-form-label">Date of joining to the job: </label>
                    <div class="col-6">
                        <input type="date" name="job_info_date_join">
                    </div>
                </div>
                <div class="col-4 row">
                    <label class="col-5 col-form-label">Entry no:</label>
                    <div class="col-6">
                        <input type="text" name="job_info_entry_no">
                    </div>
                </div>
                <div class="col-4 row">
                    <label class="col-5 col-form-label">Total duration of employment:</label>
                    <div class="col-6">
                        <input type="text" name="job_duration_year">
                    </div>
                </div>
                <div class="col-4 row">
                    <label class="col-5 col-form-label">year:</label>
                    <div class="col-6">
                        <input type="text" name="job_duration_month">
                    </div>
                </div>
                <div class="col-4 row">
                    <label class="col-5 col-form-label">month. Base/Unit:</label>
                    <div class="col-6">
                        <input type="text" name="job_info_base">
                    </div>
                </div>
                <div class="col-4 row">
                    <label class="col-5 col-form-label">Duration of staying current base/unit:</label>
                    <div class="col-6">
                        <input type="text" name="stay_duration_year">
                    </div>
                </div>
                <div class="col-4 row">
                    <label class="col-5 col-form-label">year:</label>
                    <div class="col-6">
                        <input type="text" name="stay_duration_month">
                    </div>
                </div>
                <div class="col-4 row">
                    <label class="col-5 col-form-label">month. Duration of staying current area:</label>
                    <div class="col-6">
                        <input type="text" name="area_duration_year">
                    </div>
                </div>
                <div class="col-4 row">
                    <label class="col-5 col-form-label">year:</label>
                    <div class="col-6">
                        <input type="text" name="area_duration_month">
                    </div>
                </div>
                <div class="col-4 row">
                    <label class="col-5 col-form-label">month.</label>
                </div>

            </div>



            <div class=" mb-3 row">
                <div class="col-12 row">
                    <div class="col-1">4 . </div>
                    <label class="col-4 col-form-label"><b>a. Current responsibilities and duties:</b></label>
                    <div class="col-6">
                        <input type="text" name="current_duties">
                    </div>
                </div>
                <div class="col-12 row">
                    <div class="col-1"></div>
                    <label class="col-10 col-form-label"><b>b. Details of any other work during the assessment period :</label>

                </div>

            </div>
            <table style="width: 100%;">
                <tr>
                    <table style="width: 100%;text-align:center" class="table-bordered table-responsive" id="table">
                        <thead>
                            <tr>
                                <th rowspan="2">Action</th>
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
                            <tr>
                                <td>
                                    <button type="button" name="add" id="add" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i></button>
                                </td>
                                <td><input type="text" name="base_unit[]" </td>
                                <td><input type="text" name="des_duties[]" </td>
                                <td><input type="text" name="duties_from[]" </td>
                                <td><input type="text" name="duties_to[]" </td>
                            </tr>
                    </table>
            </table>


            <div class=" mt-5 row">
                <p>5 . <u><b>Medical Details:</b></u></p>

            </div>


            <table style="width: 100%;text-align:center" class="table-bordered table-responsive">
                <tr>
                    <td>Medical Catagory</td>
                    <td><input type="text" name="med_details_catagory"> </td>
                    <td>Date of Birth </td>
                    <td><input type="date" name="med_details_date_of_birth"> </td>
                    <td rowspan="4"><input type="text" name="med_details_signature"><br>signature of medical officer</td>
                </tr>
                <tr>
                    <td>Current Weight</td>
                    <td><input type="text" name="med_details_current_weight"> </td>
                    <td>Age</td>
                    <td><input type="text" name="med_details_age"> </td>
                </tr>
                <tr>
                    <td>Excessive/inadequate weight</td>
                    <td><input type="text" name="med_details_extra_weight"> </td>
                    <td>Height</td>
                    <td><input type="text" name="med_details_height"> </td>
                </tr>
                <tr>
                    <td>Qualified/unqualified</td>
                    <td><input type="text" name="med_details_qualified_unqualified"> </td>
                    <td></td>
                    <td></td>
                </tr>

            </table>


            <div class=" mt-5 row">
                <p>6 . <u><b>Physical ability test(where applicable):</b></u></p>

            </div>

            <table style="width: 100%;text-align:center" class="table-bordered table-responsive">
                <tr>
                    <th>Physical ability test</th>
                    <th>Date </th>
                    <th>Result</th>
                    <td rowspan="5"><input type="text" name="signature_gsto_physical"><br>signature of GSTO/Officer-in-Charge sports</td>
                </tr>
                <tr>
                    <td>1st trimester examination</td>
                    <td><input type="date" name="first_trimester_date"> </td>
                    <td> <input type="radio" id="result1" name="first_tri_result" value="Pass">
                        <label for="result1">Pass</label>
                        <input type="radio" id="result2" name="first_tri_result" value="Fail">
                        <label for="result2">Fail</label>
                        <input type="radio" id="result3" name="first_tri_result" value="Absent">
                        <label for="result3">Absent</label>
                        <input type="radio" id="result4" name="first_tri_result" value="Exemption">
                        <label for="result4">Exemption</label>
                    </td>
                </tr>
                <tr>
                    <td>2nd trimester examination</td>
                    <td><input type="date" name="second_trimester_date"> </td>
                    <td> <input type="radio" id="result1" name="sec_tri_result" value="Pass">
                        <label for="result1">Pass</label>
                        <input type="radio" id="result2" name="sec_tri_result" value="Fail">
                        <label for="result2">Fail</label>
                        <input type="radio" id="result3" name="sec_tri_result" value="Absent">
                        <label for="result3">Absent</label>
                        <input type="radio" id="result4" name="sec_tri_result" value="Exemption">
                        <label for="result4">Exemption</label>
                    </td>
                </tr>
                <tr>
                    <td>3rd trimester examination</td>
                    <td><input type="date" name="third_trimester_date"> </td>
                    <td> <input type="radio" id="result1" name="thi_tri_result" value="Pass">
                        <label for="result1">Pass</label>
                        <input type="radio" id="result2" name="thi_tri_result" value="Fail">
                        <label for="result2">Fail</label>
                        <input type="radio" id="result3" name="thi_tri_result" value="Absent">
                        <label for="result3">Absent</label>
                        <input type="radio" id="result4" name="thi_tri_result" value="Exemption">
                        <label for="result4">Exemption</label>
                    </td>
                </tr>
                <tr>
                    <td>4th trimester examination</td>
                    <td><input type="date" name="forth_trimester_date"> </td>
                    <td> <input type="radio" id="result1" name="for_tri_result" value="Pass">
                        <label for="result1">Pass</label>
                        <input type="radio" id="result2" name="for_tri_result" value="Fail">
                        <label for="result2">Fail</label>
                        <input type="radio" id="result3" name="for_tri_result" value="Absent">
                        <label for="result3">Absent</label>
                        <input type="radio" id="result4" name="for_tri_result" value="Exemption">
                        <label for="result4">Exemption</label>
                    </td>
                </tr>
            </table>

            <div class=" mt-5 row">
                <p>7 . <u><b>Musketry firing:</b></u></p>

            </div>


            <table style="width: 100%;text-align:center" class="table-bordered table-responsive mb-3">
                <tr>
                    <th>Part</th>
                    <th>Rifle </th>
                    <th>SMG</th>
                    <th>Pistol</th>
                    <th>Comment</th>
                    <td rowspan="4"><input type="text" name="signature_gsto_firing"><br>signature of GSTO/Officer-in-Charge sports</td>
                </tr>
                <tr>
                    <td>1st Part</td>
                    <td> <input type="radio" id="result1" name="fir_rif_result" value="participate">
                        <label for="result1">Participate</label>
                        <input type="radio" id="result2" name="fir_rif_result" value="fail">
                        <label for="result2">Absent</label>
                        <input type="radio" id="result3" name="fir_rif_result" value="exemption">
                        <label for="result3">Exemption</label>
                        <input type="radio" id="result4" name="fir_rif_result" value="not_applicable">
                        <label for="result4">Not Applicable</label>
                    </td>
                    <td> <input type="radio" id="result1" name="fir_smg_result" value="participate">
                        <label for="result1">Participate</label>
                        <input type="radio" id="result2" name="fir_smg_result" value="fail">
                        <label for="result2">Absent</label>
                        <input type="radio" id="result3" name="fir_smg_result" value="exemption">
                        <label for="result3">Exemption</label>
                        <input type="radio" id="result4" name="fir_smg_result" value="not_applicable">
                        <label for="result4">Not Applicable</label>
                    </td>
                    <td> <input type="radio" id="result1" name="fir_pis_result" value="participate">
                        <label for="result1">Participate</label>
                        <input type="radio" id="result2" name="fir_pis_result" value="fail">
                        <label for="result2">Absent</label>
                        <input type="radio" id="result3" name="fir_pis_result" value="exemption">
                        <label for="result3">Exemption</label>
                        <input type="radio" id="result4" name="fir_pis_result" value="not_applicable">
                        <label for="result4">Not Applicable</label>
                    </td>
                    <td><input type="text" name="fir_comment"></td>
                </tr>
                <tr>
                    <td>2nd Part</td>
                    <td> <input type="radio" id="result1" name="sec_rif_result" value="participate">
                        <label for="result1">Participate</label>
                        <input type="radio" id="result2" name="sec_rif_result" value="fail">
                        <label for="result2">Absent</label>
                        <input type="radio" id="result3" name="sec_rif_result" value="exemption">
                        <label for="result3">Exemption</label>
                        <input type="radio" id="result4" name="sec_rif_result" value="not_applicable">
                        <label for="result4">Not Applicable</label>
                    </td>
                    <td> <input type="radio" id="result1" name="sec_smg_result" value="participate">
                        <label for="result1">Participate</label>
                        <input type="radio" id="result2" name="sec_smg_result" value="fail">
                        <label for="result2">Absent</label>
                        <input type="radio" id="result3" name="sec_smg_result" value="exemption">
                        <label for="result3">Exemption</label>
                        <input type="radio" id="result4" name="sec_smg_result" value="not_applicable">
                        <label for="result4">Not Applicable</label>
                    </td>
                    <td> <input type="radio" id="result1" name="sec_pis_result" value="participate">
                        <label for="result1">Participate</label>
                        <input type="radio" id="result2" name="sec_pis_result" value="fail">
                        <label for="result2">Absent</label>
                        <input type="radio" id="result3" name="sec_pis_result" value="exemption">
                        <label for="result3">Exemption</label>
                        <input type="radio" id="result4" name="sec_pis_result" value="not_applicable">
                        <label for="result4">Not Applicable</label>
                    </td>
                    <td><input type="text" name="sec_comment"></td>
                </tr>
                <tr>
                    <td>thi Part</td>
                    <td> <input type="radio" id="result1" name="thi_rif_result" value="participate">
                        <label for="result1">Participate</label>
                        <input type="radio" id="result2" name="thi_rif_result" value="fail">
                        <label for="result2">Absent</label>
                        <input type="radio" id="result3" name="thi_rif_result" value="exemption">
                        <label for="result3">Exemption</label>
                        <input type="radio" id="result4" name="thi_rif_result" value="not_applicable">
                        <label for="result4">Not Applicable</label>
                    </td>
                    <td> <input type="radio" id="result1" name="thi_smg_result" value="participate">
                        <label for="result1">Participate</label>
                        <input type="radio" id="result2" name="thi_smg_result" value="fail">
                        <label for="result2">Absent</label>
                        <input type="radio" id="result3" name="thi_smg_result" value="exemption">
                        <label for="result3">Exemption</label>
                        <input type="radio" id="result4" name="thi_smg_result" value="not_applicable">
                        <label for="result4">Not Applicable</label>
                    </td>
                    <td> <input type="radio" id="result1" name="thi_pis_result" value="participate">
                        <label for="result1">Participate</label>
                        <input type="radio" id="result2" name="thi_pis_result" value="fail">
                        <label for="result2">Absent</label>
                        <input type="radio" id="result3" name="thi_pis_result" value="exemption">
                        <label for="result3">Exemption</label>
                        <input type="radio" id="result4" name="thi_pis_result" value="not_applicable">
                        <label for="result4">Not Applicable</label>
                    </td>
                    <td><input type="text" name="thi_comment"></td>
                </tr>
            </table>

            <div class=" row">
                <div class="col-6">
                    <td>Date : <input type="date" name="date_fir_bottom"></td>
                </div>
                <div class="col-6">
                    <td>Signature of MODC(Air) <input type="text" name="signature_modc_air"></td>
                </div>
            </div>


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
                        <p style="border:1px solid black; border-radius:5px; padding:3px; text-align:center; width:50px"><input type="radio" name="appropriate_box" value="Good"></p>
                    </td>
                    <td align="center">
                        <p>Satisfactory</p>
                        <p style="border:1px solid black; border-radius:5px; padding:3px; text-align:center; width:50px"><input type="radio" name="appropriate_box" value="Satisfactory"></p>
                    </td>
                    <td align="center">
                        <p>Unsatisfactory</p>
                        <p style="border:1px solid black; border-radius:5px; padding:3px; text-align:center; width:50px"><input type="radio" name="appropriate_box" value="Unsatisfactory"></p>
                    </td>
                </tr>
                <tr>
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
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        10
                                    </span>
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        9
                                    </span>
                                </td>
                            </tr>
                            <tr align="center">
                                <td>
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <input type="radio" name="knowledge_radio" value="10">
                                    </span>
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <input type="radio" name="knowledge_radio" value="09">
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
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        8
                                    </span>
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        7
                                    </span>
                                </td>
                            </tr>
                            <tr align="center">
                                <td>
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <input type="radio" name="knowledge_radio" value="08">
                                    </span>
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <input type="radio" name="knowledge_radio" value="07">
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
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        6
                                    </span>
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        5
                                    </span>
                                </td>
                            </tr>
                            <tr align="center">
                                <td>
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <input type="radio" name="knowledge_radio" value="06">
                                    </span>
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <input type="radio" name="knowledge_radio" value="05">
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
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        4
                                    </span>
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        3
                                    </span>
                                </td>
                            </tr>
                            <tr align="center">
                                <td>
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <input type="radio" name="knowledge_radio" value="04">
                                    </span>
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <input type="radio" name="knowledge_radio" value="03">
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
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        2
                                    </span>
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        1
                                    </span>
                                </td>
                            </tr>
                            <tr align="center">
                                <td>
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <input type="radio" name="knowledge_radio" value="02">
                                    </span>
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <input type="radio" name="knowledge_radio" value="01">
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
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        10
                                    </span>
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        9
                                    </span>
                                </td>
                            </tr>
                            <tr align="center">
                                <td>
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <input type="radio" name="competence_radio" value="10">
                                    </span>
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <input type="radio" name="competence_radio"  value="09">
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
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        8
                                    </span>
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        7
                                    </span>
                                </td>
                            </tr>
                            <tr align="center">
                                <td>
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <input type="radio" name="competence_radio" value="08">
                                    </span>
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <input type="radio" name="competence_radio" value="07">
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
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        6
                                    </span>
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        5
                                    </span>
                                </td>
                            </tr>
                            <tr align="center">
                                <td>
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <input type="radio" name="competence_radio" value="06">
                                    </span>
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <input type="radio" name="competence_radio" value="05">
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
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        4
                                    </span>
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        3
                                    </span>
                                </td>
                            </tr>
                            <tr align="center">
                                <td>
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <input type="radio" name="competence_radio" value="04">
                                    </span>
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <input type="radio" name="competence_radio" value="03">
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
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        2
                                    </span>
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        1
                                    </span>
                                </td>
                            </tr>
                            <tr align="center">
                                <td>
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <input type="radio" name="competence_radio" value="02">
                                    </span>
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <input type="radio" name="competence_radio" value="01">
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
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        10
                                    </span>
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        9
                                    </span>
                                </td>
                            </tr>
                            <tr align="center">
                                <td>
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <input type="radio" name="dutiful_radio" value="10">
                                    </span>
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <input type="radio" name="dutiful_radio" value="09">
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
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        8
                                    </span>
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        7
                                    </span>
                                </td>
                            </tr>
                            <tr align="center">
                                <td>
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <input type="radio" name="dutiful_radio" value="08">
                                    </span>
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <input type="radio" name="dutiful_radio" value="07">
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
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        6
                                    </span>
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        5
                                    </span>
                                </td>
                            </tr>
                            <tr align="center">
                                <td>
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <input type="radio" name="dutiful_radio" value="06">
                                    </span>
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <input type="radio" name="dutiful_radio" value="05">
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
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        4
                                    </span>
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        3
                                    </span>
                                </td>
                            </tr>
                            <tr align="center">
                                <td>
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <input type="radio" name="dutiful_radio" value="04">
                                    </span>
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <input type="radio" name="dutiful_radio" value="03">
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
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        2
                                    </span>
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        1
                                    </span>
                                </td>
                            </tr>
                            <tr align="center">
                                <td>
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <input type="radio" name="dutiful_radio" value="02">
                                    </span>
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <input type="radio" name="dutiful_radio" value="01">
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
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        10
                                    </span>
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        9
                                    </span>
                                </td>
                            </tr>
                            <tr align="center">
                                <td>
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <input type="radio" name="obedience_radio" value="10">
                                    </span>
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <input type="radio" name="obedience_radio" value="09">
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
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        8
                                    </span>
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        7
                                    </span>
                                </td>
                            </tr>
                            <tr align="center">
                                <td>
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <input type="radio" name="obedience_radio" value="08">
                                    </span>
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <input type="radio" name="obedience_radio" value="07">
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
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        6
                                    </span>
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        5
                                    </span>
                                </td>
                            </tr>
                            <tr align="center">
                                <td>
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <input type="radio" name="obedience_radio" value="06">
                                    </span>
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <input type="radio" name="obedience_radio" value="05">
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
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        4
                                    </span>
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        3
                                    </span>
                                </td>
                            </tr>
                            <tr align="center">
                                <td>
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <input type="radio" name="obedience_radio" value="04">
                                    </span>
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <input type="radio" name="obedience_radio" value="03">
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
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        2
                                    </span>
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        1
                                    </span>
                                </td>
                            </tr>
                            <tr align="center">
                                <td>
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <input type="radio" name="obedience_radio" value="02">
                                    </span>
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <input type="radio" name="obedience_radio" value="01">
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
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        10
                                    </span>
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        9
                                    </span>
                                </td>
                            </tr>
                            <tr align="center">
                                <td>
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <input type="radio" name="responsibility_radio" value="10">
                                    </span>
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <input type="radio" name="responsibility_radio" value="09">
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
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        8
                                    </span>
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        7
                                    </span>
                                </td>
                            </tr>
                            <tr align="center">
                                <td>
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <input type="radio" name="responsibility_radio" value="08">
                                    </span>
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <input type="radio" name="responsibility_radio" value="07">
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
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        6
                                    </span>
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        5
                                    </span>
                                </td>
                            </tr>
                            <tr align="center">
                                <td>
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <input type="radio" name="responsibility_radio" value="06">
                                    </span>
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <input type="radio" name="responsibility_radio" value="05">
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
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        4
                                    </span>
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        3
                                    </span>
                                </td>
                            </tr>
                            <tr align="center">
                                <td>
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <input type="radio" name="responsibility_radio" value="04">
                                    </span>
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <input type="radio" name="responsibility_radio" value="03">
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
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        2
                                    </span>
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        1
                                    </span>
                                </td>
                            </tr>
                            <tr align="center">
                                <td>
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <input type="radio" name="responsibility_radio" value="02">
                                    </span>
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <input type="radio" name="responsibility_radio" value="01">
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
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        10
                                    </span>
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        9
                                    </span>
                                </td>
                            </tr>
                            <tr align="center">
                                <td>
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <input type="radio" name="reliability_radio" value="10">
                                    </span>
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <input type="radio" name="reliability_radio" value="09">
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
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        8
                                    </span>
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        7
                                    </span>
                                </td>
                            </tr>
                            <tr align="center">
                                <td>
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <input type="radio" name="reliability_radio" value="08">
                                    </span>
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <input type="radio" name="reliability_radio" value="07">
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
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        6
                                    </span>
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        5
                                    </span>
                                </td>
                            </tr>
                            <tr align="center">
                                <td>
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <input type="radio" name="reliability_radio" value="06">
                                    </span>
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <input type="radio" name="reliability_radio" value="05">
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
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        4
                                    </span>
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        3
                                    </span>
                                </td>
                            </tr>
                            <tr align="center">
                                <td>
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <input type="radio" name="reliability_radio" value="04">
                                    </span>
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <input type="radio" name="reliability_radio" value="03">
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
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        2
                                    </span>
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        1
                                    </span>
                                </td>
                            </tr>
                            <tr align="center">
                                <td>
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <input type="radio" name="reliability_radio" value="02">
                                    </span>
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <input type="radio" name="reliability_radio" value="01">
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
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        10
                                    </span>
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        9
                                    </span>
                                </td>
                            </tr>
                            <tr align="center">
                                <td>
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <input type="radio" name="fitness_radio" value="10">
                                    </span>
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <input type="radio" name="fitness_radio" value="09">
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
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        8
                                    </span>
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        7
                                    </span>
                                </td>
                            </tr>
                            <tr align="center">
                                <td>
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <input type="radio" name="fitness_radio" value="08">
                                    </span>
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <input type="radio" name="fitness_radio" value="07">
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
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        6
                                    </span>
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        5
                                    </span>
                                </td>
                            </tr>
                            <tr align="center">
                                <td>
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <input type="radio" name="fitness_radio" value="06">
                                    </span>
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <input type="radio" name="fitness_radio" value="05">
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
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        4
                                    </span>
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        3
                                    </span>
                                </td>
                            </tr>
                            <tr align="center">
                                <td>
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <input type="radio" name="fitness_radio" value="04">
                                    </span>
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <input type="radio" name="fitness_radio" value="03">
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
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        2
                                    </span>
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        1
                                    </span>
                                </td>
                            </tr>
                            <tr align="center">
                                <td>
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <input type="radio" name="fitness_radio" value="02">
                                    </span>
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <input type="radio" name="fitness_radio" value="01">
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
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        10
                                    </span>
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        9
                                    </span>
                                </td>
                            </tr>
                            <tr align="center">
                                <td>
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <input type="radio" name="honest_radio" value="10">
                                    </span>
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <input type="radio" name="honest_radio" value="09">
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
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        8
                                    </span>
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        7
                                    </span>
                                </td>
                            </tr>
                            <tr align="center">
                                <td>
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <input type="radio" name="honest_radio" value="08">
                                    </span>
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <input type="radio" name="honest_radio" value="07">
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
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        6
                                    </span>
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        5
                                    </span>
                                </td>
                            </tr>
                            <tr align="center">
                                <td>
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <input type="radio" name="honest_radio" value="06">
                                    </span>
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <input type="radio" name="honest_radio" value="05">
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
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        4
                                    </span>
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        3
                                    </span>
                                </td>
                            </tr>
                            <tr align="center">
                                <td>
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <input type="radio" name="honest_radio" value="04">
                                    </span>
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <input type="radio" name="honest_radio" value="03">
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
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        2
                                    </span>
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        1
                                    </span>
                                </td>
                            </tr>
                            <tr align="center">
                                <td>
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <input type="radio" name="honest_radio" value="02">
                                    </span>
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <input type="radio" name="honest_radio" value="01">
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
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        10
                                    </span>
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        9
                                    </span>
                                </td>
                            </tr>
                            <tr align="center">
                                <td>
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <input type="radio" name="enthusiasm_radio" value="10">
                                    </span>
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <input type="radio" name="enthusiasm_radio" value="09">
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
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        8
                                    </span>
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        7
                                    </span>
                                </td>
                            </tr>
                            <tr align="center">
                                <td>
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <input type="radio" name="enthusiasm_radio" value="08">
                                    </span>
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <input type="radio" name="enthusiasm_radio" value="07">
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
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        6
                                    </span>
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        5
                                    </span>
                                </td>
                            </tr>
                            <tr align="center">
                                <td>
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <input type="radio" name="enthusiasm_radio" value="06">
                                    </span>
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <input type="radio" name="enthusiasm_radio" value="05">
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
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        4
                                    </span>
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        3
                                    </span>
                                </td>
                            </tr>
                            <tr align="center">
                                <td>
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <input type="radio" name="enthusiasm_radio" value="04">
                                    </span>
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <input type="radio" name="enthusiasm_radio" value="03">
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
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        2
                                    </span>
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        1
                                    </span>
                                </td>
                            </tr>
                            <tr align="center">
                                <td>
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <input type="radio" name="enthusiasm_radio" value="02">
                                    </span>
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <input type="radio" name="enthusiasm_radio" value="01">
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
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        10
                                    </span>
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        9
                                    </span>
                                </td>
                            </tr>
                            <tr align="center">
                                <td>
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <input type="radio" name="supervision_radio" value="10">
                                    </span>
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <input type="radio" name="supervision_radio" value="09">
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
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        8
                                    </span>
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        7
                                    </span>
                                </td>
                            </tr>
                            <tr align="center">
                                <td>
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <input type="radio" name="supervision_radio" value="08">
                                    </span>
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <input type="radio" name="supervision_radio" value="07">
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
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        6
                                    </span>
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        5
                                    </span>
                                </td>
                            </tr>
                            <tr align="center">
                                <td>
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <input type="radio" name="supervision_radio" value="06">
                                    </span>
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <input type="radio" name="supervision_radio" value="05">
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
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        4
                                    </span>
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        3
                                    </span>
                                </td>
                            </tr>
                            <tr align="center">
                                <td>
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <input type="radio" name="supervision_radio" value="04">
                                    </span>
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <input type="radio" name="supervision_radio" value="03">
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
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        2
                                    </span>
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        1
                                    </span>
                                </td>
                            </tr>
                            <tr align="center">
                                <td>
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <input type="radio" name="supervision_radio" value="02">
                                    </span>
                                    <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin: 0 25px 0 0">
                                        <input type="radio" name="supervision_radio" value="01">
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


            <div class="mt-3 row" style="padding-top: 20px;">
                <div class="col-6">10 . <b>Total Marks:</b><input type="text" name="total_marks"></div>
                <div class="col-6"><b>Classification:</b><input type="text" name="classification"></div>
            </div>


            <div class=" mt-5 row">
                <p>11 . <u><b>The overall grading will be on the basis of total score as follows:</b></u></p>

            </div>

            <table style="width: 100%; margin:0 0 20px 0;">
                <tr>
                    <table style="width: 100%;text-align:center" class="table-bordered table-responsive">
                        <tr>
                            <th>Score Grading </th>
                            <th>Title Grading</th>
                            <th>Rate of classification according to manpower</th>
                        </tr>
                        <tr>
                            <td>91-100  <input type="string" name="grade_ten">  10</td>
                            <td>Outstanding</td>
                            <td>Not exceeding 5%</td>
                        </tr>
                        <tr>
                            <td>81-90  <input type="string" name="grade_nine">  9</td>
                            <td rowspan="2">Well above avarage</td>
                            <td>Not exceeding 6%</td>
                        </tr>
                        <tr>
                            <td>76-80  <input type="string" name="grade_eight">  8</td>
                            <td>Not exceeding 9%</td>
                        </tr>
                        <tr>
                            <td>66-75  <input type="string" name="grade_seven">  7</td>
                            <td rowspan="2">Above avarage</td>
                            <td>Not exceeding 20%</td>
                        </tr>
                        <tr>
                            <td>56-65  <input type="string" name="grade_six">  6</td>
                            <td rowspan="5"></td>
                        </tr>
                        <tr>
                            <td>46-55  <input type="string" name="grade_five">  5</td>
                            <td rowspan="2">Avarage</td>
                        </tr>
                        <tr>
                            <td>36-45  <input type="string" name="grade_four">  4</td>
                        </tr>
                        <tr>
                            <td>30-35  <input type="string" name="grade_three">  3</td>
                            <td> below Avarage</td>
                        </tr>
                        <tr>
                            <td>29 and below  <input type="string" name="grade_two">  2</td>
                            <td>Weak</td>
                        </tr>
                    </table>
                </tr>
            </table>

            <table style="width: 100%; margin:50px 0 0 0;">
                <tr>
                    <td>
                        <p>12 . <u><b>Fitness for Promotion:</b></u><br>(Cross the appropriate box)</p>
                    </td>
                    <td>
                        <p><span style="border: 1px solid black; padding:5px;"><label for="fit">Fit for Promotion</label></span></p>
                        <span style="border:1px solid black; border-radius:3px; width:40px;padding:4px 10px 4px 10px;">
                            <input type="radio" id="fit" name="fitness_promotion_radio" value="Fit">
                        </span>


                    </td>
                    <td>
                        <p><span style="border: 1px solid black; padding:5px;"><label for="not_fit">Not yet fit for Promotion</label></span></p>
                        <span style="border:1px solid black; border-radius:3px; width:40px;padding:4px 10px 4px 10px;">
                            <input type="radio" id="not_fit" name="fitness_radio" value="Not Fit">
                        </span>
                    </td>
                    <td>
                        <p><span style="border: 1px solid black; padding:5px;"><label for="unfit">Unfit for Promotion</label></span></p>
                        <span style="border:1px solid black; border-radius:3px; width:40px;padding:4px 10px 4px 10px;">
                            <input type="radio" id="unfit" name="fitness_radio" value="Unfit">
                        </span>
                    </td>
                    <td>
                        <p><span style="border: 1px solid black; padding:5px;"><label for="not_app">Not Applicable</label></span></p>
                        <span style="border:1px solid black; border-radius:3px; width:40px;padding:4px 10px 4px 10px;">
                            <input type="radio" id="not_app" name="fitness_radio" value="Not applicable">
                        </span>
                    </td>
                </tr>
            </table>

            <div class=" mb-5 mt-5 row">
                <div class="col-12">
                    <p>13 . <u><b>General Comment:</b></u></p>
                </div>
                <div class="col-12 mb-3">
                    <textarea name="general_comment" style="height:200px; width:100%"></textarea>
                </div>
                <div class="col-12 row">
                    <div class="col-4">
                        <p>Date : <input type="date" name="general_officer_date"></p>
                    </div>

                    <div class="col-4 offset-4 row">
                        <div class="col-12 row">
                            <label class="col-5 col-form-label">Signature:</label>
                            <div class="col-6">
                                <input type="text" name="general_officer_sign">
                            </div>
                        </div>
                        <div class="col-12 row">
                            <label class="col-5 col-form-label">Name:</label>
                            <div class="col-6">
                                <input type="text" name="general_officer_name">
                            </div>
                        </div>
                        <div class="col-12 row">
                            <label class="col-5 col-form-label">Rank:</label>
                            <div class="col-6">
                                <input type="text" name="general_officer_rank">
                            </div>
                        </div>
                        <div class="col-12 row">
                            <label class="col-12 col-form-label">Initiating officer</label>

                        </div>

                    </div>
                </div>
            </div>


            <div class=" row">
                <div class=" row">
                    <div class="col-12">
                        <p>(To be seen and signed by the appraisee if his total score is below average/poor or there is any adverse remarks)</p>
                    </div>
                </div>
                <div class=" row">
                    <div class="col-12">
                        <p>14. I have seen the below average report/adverse remarks.</p>
                    </div>
                </div>

                <div class="col-12 row">
                    <div class="col-4">
                        <p>Date : <input type="date" name="signature_appraisee_date"></p>
                    </div>

                    <div class="col-4 offset-4 row">
                        <div class="col-12 row">
                            <label class="col-5 col-form-label">Signature of Appraisee:</label>
                            <div class="col-6">
                                <input type="text" name="signature_of_appraisee">
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class=" mb-5 mt-5 row">
                <div class="col-12">
                    <p>15. <u>Remarks Reviewing Officer</u> :</p>
                </div>
                <div class="col-12 mb-3">
                    <textarea name="remarks_reviewing_officer" style="height:150px; width:100%"></textarea>
                </div>
                <div class="col-12 row">
                    <div class="col-4">
                        <p>Date : <input type="date" name="reviewing_officer_date"></p>
                    </div>

                    <div class="col-4 offset-4 row">
                        <div class="col-12 row">
                            <label class="col-5 col-form-label">Signature:</label>
                            <div class="col-6">
                                <input type="text" name="reviewing_officer_sign">
                            </div>
                        </div>
                        <div class="col-12 row">
                            <label class="col-5 col-form-label">Name:</label>
                            <div class="col-6">
                                <input type="text" name="reviewing_officer_name">
                            </div>
                        </div>
                        <div class="col-12 row">
                            <label class="col-5 col-form-label">Rank:</label>
                            <div class="col-6">
                                <input type="text" name="reviewing_officer_rank">
                            </div>
                        </div>
                        <div class="col-12 row">
                            <label class="col-12 col-form-label">Reviewing officer</label>

                        </div>

                    </div>
                </div>
            </div>


            <div class=" mb-5 mt-5 row">
                <div class="col-12">
                    <p>16. <u>Remarks Senior Reviewing Officer/Officer Commanding</u> :</p>
                </div>
                <div class="col-12 mb-3">
                    <textarea name="remarks_commanding_officer" style="height:100px; width:100%"></textarea>
                </div>
                <div class="col-12 row">
                    <div class="col-4">
                        <p>Date : <input type="date" name="commanding_officer_date"></p>
                    </div>

                    <div class="col-4 offset-4 row">
                        <div class="col-12 row">
                            <label class="col-5 col-form-label">Signature:</label>
                            <div class="col-6">
                                <input type="text" name="commanding_officer_sign">
                            </div>
                        </div>
                        <div class="col-12 row">
                            <label class="col-5 col-form-label">Name:</label>
                            <div class="col-6">
                                <input type="text" name="commanding_officer_name">
                            </div>
                        </div>
                        <div class="col-12 row">
                            <label class="col-5 col-form-label">Rank:</label>
                            <div class="col-6">
                                <input type="text" name="commanding_officer_rank">
                            </div>
                        </div>
                        <div class="col-12 row">
                            <label class="col-12 col-form-label">Senior Reviewing Officer/Officer Commanding</label>

                        </div>

                    </div>
                </div>
            </div>


            <table width="100%" class="table-responsive mt-5" cellspacing="0" cellpadding="0">
                <tr align="center" style="border-bottom: 1px solid black;">
                    <th colspan="4" style="font-size: 25px; padding-bottom:5px"><u>PART-III (FOR BAF Record Officer)<u>
                    </th>
                </tr>
                <tr>
                    <td style="border: 1px solid black; padding:10px">
                        <table>
                            <tr>
                                <td colspan="6" style="padding-bottom: 2rem;"><strong><u>Checked and Found Correct</u></strong></td>
                            </tr>
                            <tr style="padding-bottom: 3rem;">
                                <td width="15%">NCOIC Docu-III Section:</td>
                                <td>BD/<input style="width:60%; margin:5px" type="text" name="ncoic_docu_bd"></td>
                                <td>Name<input style="width:60%; margin:5px" type="text" name="ncoic_docu_name"></td>
                                <td>Rank<input style="width:60%; margin:5px" type="text" name="ncoic_docu_rank"></td>
                                <td>Signature<input style="width:60%; margin:5px" type="text" name="ncoic_docu_sign"></td>
                                <td>Date<input style="width:60%; margin:5px" type="date" name="ncoic_docu_date"></td>
                            </tr>
                            <tr>
                                <td width="15%">WOIC Docu-III Section:</td>
                                <td>BD/<input style="width:60%; margin:5px" type="text" name="woic_docu_bd"></td>
                                <td>Name<input style="width:60%; margin:5px" type="text" name="woic_docu_name"></td>
                                <td>Rank<input style="width:60%; margin:5px" type="text" name="woic_docu_rank"></td>
                                <td>Signature<input style="width:60%; margin:5px" type="text" name="woic_docu_sign"></td>
                                <td>Date<input style="width:60%; margin:5px" type="date" name="woic_docu_date"></td>
                            </tr>
                            <tr>
                                <td colspan="6" style="padding-bottom: 2rem;"><strong><u>Verified and Database Updated</u></strong></td>
                            </tr>
                            <tr style="padding-bottom: 3rem;">
                                <td width="15%">NCOIC R&D Cell:</td>
                                <td>BD/<input style="width:60%; margin:5px" type="text" name="ncoic_rnd_docu_bd"></td>
                                <td>Name<input style="width:60%; margin:5px" type="text" name="ncoic_rnd_docu_name"></td>
                                <td>Rank<input style="width:60%; margin:5px" type="text" name="ncoic_rnd_docu_rank"></td>
                                <td>Signature<input style="width:60%; margin:5px" type="text" name="ncoic_rnd_docu_sign"></td>
                                <td>Date<input style="width:60%; margin:5px" type="date" name="ncoic_rnd_docu_date"></td>
                            </tr>
                            <tr>
                                <td width="15%">WOIC R&D Cell:</td>
                                <td>BD/<input style="width:60%; margin:5px" type="text" name="woic_rnd_docu_bd"></td>
                                <td>Name<input style="width:60%; margin:5px" type="text" name="woic_rnd_docu_name"></td>
                                <td>Rank<input style="width:60%; margin:5px" type="text" name="woic_rnd_docu_rank"></td>
                                <td>Signature<input style="width:60%; margin:5px" type="text" name="woic_rnd_docu_sign"></td>
                                <td>Date<input style="width:60%; margin:5px" type="date" name="woic_rnd_docu_date"></td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>










        </div>
        <div class="card-footer" align="center">
            <button type="submit" class="btn btn-sm btn-success">Save</button>
        </div>
    </form>
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
                        <input type="text" name="base_unit[]" >
                    </td>
                    <td>
                        <input type="text" name="des_duties[]">
                    </td>
                    <td>
                        <input type="text" name="duties_from[]">
                    </td>
                    <td>
                        <input type="text" name="duties_to[]">
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