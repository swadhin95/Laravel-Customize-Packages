@extends('master')
@section('content')
<form action="" method="POST">
    <table width="100%" class="table-responsive overflow-hidden" cellspacing="0" cellpadding="0">
        <table width="100%" class="table-responsive mt-5" cellspacing="0" cellpadding="0">
            <tr align="right">
                <td width="30%">
                    <table class="table-bordered" width="15%">
                        <tr>
                            <td align="center">BAF Form P-58A</td>
                        </tr>
                        <tr>
                            <td align="center">(Revised 2013)</td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td align="center">
                    <h3>PERFORMANCE APPRAISAL - BAF AIRMEN</h3>
                    <p class="m-0">(To be used for Corporal and Below)</p>
                    <p style="font-weight: bold;"><u>PART-I (FOR ASSESSEE)</u></p>
                </td>
            </tr>
        </table>
        <table width="100%" class="table-responsive mb-5" cellspacing="" cellpadding="5">

            <tr style="border-top: 1px solid black;">
                <td width="40%" style="padding-top: 10px;">1. Period of Report: <input style="width: 50%;" type="text" name="period_of_report"></td>
                <td width="30%" style="padding-top: 10px;">Form: <input style="width: 80%;" type="text" name="report_from"></td>
                <td width="30%" style="padding-top: 10px;">To: <input style="width: 90%;" type="text" name="report_to"></td>
            </tr>
            <tr style="border-top: 1px solid black;">
                <td style="padding-top: 10px;">1. Occasions: <input style="width: 60%" type="text" name="occasions"></td>
                <td colspan="2" style="padding-top: 10px;">Spacial: (reason: <input style="width: 80%" type="text" name="spacial_reason">)</td>
            </tr>
            <tr style="border-top: 1px solid black;">
                <td colspan="3" style="padding-top: 10px;">
                    <p>3. <u>Service Particulars</u> :</p>
                    <p>
                        BD/<input style="margin:5px" type="text" name="service_particulars_bd">Rank<input style="margin:5px" type="text" name="service_particulars_rank">Name<input style="margin:5px" type="text" name="service_particulars_name">Trade <input style="margin:5px" type="text" name="service_particulars_trade">Date of Enrollment <input style="margin:5px" type="date" name="service_enrollment_date">Entry No <input style="margin:5px" type="text" name="service_particulars_entry_no">Total Svc <input style="margin:5px" type="text" name="service_particulars_total_svc">Year <input style="margin:5px" type="text" name="service_particulars_year">Month <input style="margin:5px" type="text" name="service_particulars_month">Base/unit <input type="text" name="service_particulars_base">Staying period at present base/unit <input style="margin:5px" type="text" name="service_particulars_present_base">Year <input style="margin:5px" type="text" name="service_particulars_base_year">Month <input style="margin:5px" type="text" name="service_particulars_base_month">Staying period as present area <input style="margin:5px" type="text" name="service_particulars_present_area">Year <input style="margin:5px" type="text" name="service_particulars_present_area_year">Month <input style="margin:5px" type="text" name="service_particulars_present_area_month">
                    </p>
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <p><span>4.</span> <span style="padding-left: 40px;"> a. Present appointment:</span> <input style="width:80%" type="text" name="fourth_a_present_appointment"></p>
                    <p style="padding-left: 55px;">b. Aircraft/Equipment/Job on which employed during the appraising period <input style="width:54%" type="text" name="fourth_aircraft_appraising_period"></p>
                </td>
            </tr>
            <tr>
                <table align="center" width="100%" class="table table-responsive" id="table" border="1" cellspacing="0" cellpadding="0">
                    <thead>
                        <tr align="center">
                            <td rowspan="2" width="5%">Action</td>
                            <td rowspan="2">Base/Unit/Flt/Sec</td>
                            <td rowspan="2" width="40%">Aircraft/Equipment/Job in which deployed</td>
                            <td colspan="2">Period</td>
                        </tr>
                        <tr align="center">
                            <td>Form</td>
                            <td>To</td>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>
                                <button style="margin:0; padding-top: 10px;" type="button" name="add" id="add" class="btn btn-sm btn-success"><i class="fa fa-plus"></i></button>
                            </td>
                            <td>
                                <input type="text" name="fourth_base[]">
                            </td>
                            <td>
                                <input type="text" name="fourth_aircraft[]">
                            </td>
                            <td>
                                <input type="text" name="fourth_period_from[]">
                            </td>
                            <td>
                                <input type="text" name="fourth_period_to[]">
                            </td>
                        </tr>
                    </tbody>

                </table>

            </tr>
            <tr>
                <td colspan="3">
                    <p>5. <u>Medical Information</u> :</p>
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <table class="table-responsive table-bordered" style="table-layout:fixed;" width="100%">
                        <tr>
                            <td>a. Medical category</td>
                            <td><input style="width:100%" type="text" name="medical_category"></td>
                            <td>b. Date of birth</td>
                            <td><input style="width:100%" type="text" date_of_birth></td>
                            <td rowspan="4" align="center">
                                <p style="padding-top: 5rem;"><input type="text" medical_officer_sign></p>
                                <p>Signature of Medical Officer</p>
                            </td>
                        </tr>
                        <tr>
                            <td>c. Age</td>
                            <td><input style="width:100%" type="text" name="age"></td>
                            <td>d. Height</td>
                            <td><input style="width:100%" type="text" name="height"></td>
                        </tr>
                        <tr>
                            <td>e. Present Weight</td>
                            <td><input style="width:100%" type="text" name="present_weight"></td>
                            <td>f. Over weight/Under weight</td>
                            <td><input style="width:100%" type="text" over_or_under_weight></td>
                        </tr>
                        <tr>
                            <td>g. fit/Unfit</td>
                            <td><input style="width:100%" type="text" name="fit_or_unfit"></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <p>6. <u>PET (as applicable)</u> :</p>
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <table class="table-responsive table-bordered overflow-hidden" style="table-layout:fixed;" width="100%" cellpadding="5">
                        <tr align="center">
                            <th>PET</th>
                            <th>Date</th>
                            <th>Results</th>
                            <th>PET</th>
                            <th>Date</th>
                            <th>Results</th>
                            <th></th>
                        </tr>
                        <tr align="center">
                            <td width="25%">1st Quarterly Test</td>
                            <td><input type="date"></td>
                            <td>
                                <input type="radio" id="passed" name="1st_pet_result" value="Passed">
                                <label for="passed">Passed/</label>
                                <input type="radio" id="failed" name="1st_pet_result" value="Failed">
                                <label for="failed">Failed/</label>
                                <input type="radio" id="absent" name="1st_pet_result" value="Absent">
                                <label for="absent">Absent/</label>
                                <input type="radio" id="exempted" name="1st_pet_result" value="Exempted">
                                <label for="exempted">Exempted</label>
                            </td>
                            <td width="25%">2nd Quarterly Test</td>
                            <td><input type="date"></td>
                            <td width="25%">
                                <input type="radio" id="passed" name="2nd_pet_result" value="Passed">
                                <label for="passed">Passed/</label>
                                <input type="radio" id="failed" name="2nd_pet_result" value="Failed">
                                <label for="failed">Failed/</label>
                                <input type="radio" id="absent" name="2nd_pet_result" value="Absent">
                                <label for="absent">Absent/</label>
                                <input type="radio" id="exempted" name="2nd_pet_result" value="Exempted">
                                <label for="exempted">Exempted</label>
                            </td>
                            <td rowspan="2" align="center">
                                <input style="width:100%" type="text" name="signature_of_gsto">
                                <p>Signature of GSTO/OIC/Sports</p>
                            </td>
                        </tr>
                        <tr align="center">
                            <td>3rd Quarterly Test</td>
                            <td><input type="date"></td>
                            <td width="25%">
                                <input type="radio" id="passed" name="3rd_pet_result" value="Passed">
                                <label for="passed">Passed/</label>
                                <input type="radio" id="failed" name="3rd_pet_result" value="Failed">
                                <label for="failed">Failed/</label>
                                <input type="radio" id="absent" name="3rd_pet_result" value="Absent">
                                <label for="absent">Absent/</label>
                                <input type="radio" id="exempted" name="3rd_pet_result" value="Exempted">
                                <label for="exempted">Exempted</label>
                            </td>
                            <td>4th Quarterly Test</td>
                            <td><input type="date"></td>
                            <td width="25%">
                                <input type="radio" id="passed" name="4th_pet_result" value="Passed">
                                <label for="passed">Passed/</label>
                                <input type="radio" id="failed" name="4th_pet_result" value="Failed">
                                <label for="failed">Failed/</label>
                                <input type="radio" id="absent" name="4th_pet_result" value="Absent">
                                <label for="absent">Absent/</label>
                                <input type="radio" id="exempted" name="4th_pet_result" value="Exempted">
                                <label for="exempted">Exempted</label>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <p>7. <u>Musketry Firing</u> :</p>
                </td>
            </tr>
            <tr style="border-bottom: 1px solid black;">
                <td colspan="3">
                    <table class="table-responsive table-bordered overflow-hidden" style="table-layout:fixed;" width="100%" cellpadding="5">
                        <tr align="center">
                            <th>Qtr</th>
                            <th>Rifle</th>
                            <th>SMG</th>
                            <th>Pistol</th>
                            <th>Rmks</th>
                            <th></th>
                        </tr>
                        <tr align="center">
                            <td>1st Qrt</td>
                            <td>
                                <input type="radio" id="attended/" name="1st_rifle_attended" value="Attended">
                                <label for="attended">Attended</label>
                                <input type="radio" id="exempted" name="1st_rifle_exempted" value="Exempted">
                                <label for="exempted">Exempted/</label>
                                <input type="radio" id="absent" name="1st_rifle_absent" value="Absent">
                                <label for="absent">Absent/</label>
                                <input type="radio" id="not_applicable" name="1st_rifle_not_applicable" value="Not a/pplicable">
                                <label for="not_applicable">Not applicable</label>
                            </td>
                            <td>
                                <input type="radio" id="attended" name="1st_smg_attended" value="Attended">
                                <label for="attended">Attended/</label>
                                <input type="radio" id="exempted" name="1st_smg_exempted" value="Exempted">
                                <label for="exempted">Exempted/</label>
                                <input type="radio" id="absent" name="1st_smg_absent" value="Absent">
                                <label for="absent">Absent/</label>
                                <input type="radio" id="not_applicable" name="1st_smg_not_applicable" value="Not a/pplicable">
                                <label for="not_applicable">Not applicable</label>
                            </td>
                            <td>
                                <input type="radio" id="attended" name="1st_pistol_attended" value="Attended">
                                <label for="attended">Attended/</label>
                                <input type="radio" id="exempted" name="1st_pistol_exempted" value="Exempted">
                                <label for="exempted">Exempted/</label>
                                <input type="radio" id="absent" name="1st_pistol_absent" value="Absent">
                                <label for="absent">Absent/</label>
                                <input type="radio" id="not_applicable" name="1st_pistol_not_applicable" value="Not applicable">
                                <label for="not_applicable">Not applicable</label>
                            </td>
                            <td>
                                <input style="width:100%" type="text" name="1st_qtr_rmks">
                            </td>
                            <td rowspan="3" align="center">
                                <input style="width:100%; margin-top:60px" type="text" name="firing_signature_gsto">
                                <p>Signature of GSTO/OIC/Sports</p>
                            </td>
                        </tr>
                        <tr align="center">
                            <td>2nd Qrt</td>
                            <td>
                                <input type="radio" id="attended" name="2nd_rifle_attended" value="Attended">
                                <label for="attended">Attended/</label>
                                <input type="radio" id="exempted" name="2nd_rifle_exempted" value="Exempted">
                                <label for="exempted">Exempted/</label>
                                <input type="radio" id="absent" name="2nd_rifle_absent" value="Absent">
                                <label for="absent">Absent/</label>
                                <input type="radio" id="not_applicable" name="2nd_rifle_not_applicable" value="Not a/pplicable">
                                <label for="not_applicable">Not applicable</label>
                            </td>
                            <td>
                                <input type="radio" id="attended" name="2nd_smg_attended" value="Attended">
                                <label for="attended">Attended/</label>
                                <input type="radio" id="exempted" name="2nd_smg_exempted" value="Exempted">
                                <label for="exempted">Exempted/</label>
                                <input type="radio" id="absent" name="2nd_smg_absent" value="Absent">
                                <label for="absent">Absent/</label>
                                <input type="radio" id="not_applicable" name="2nd_smg_not_applicable" value="Not applicable">
                                <label for="not_applicable">Not applicable</label>
                            </td>
                            <td>
                                <input type="radio" id="attended" name="2nd_pistol_attended" value="Attended">
                                <label for="attended">Attended/</label>
                                <input type="radio" id="exempted" name="2nd_pistol_exempted" value="Exempted">
                                <label for="exempted">Exempted/</label>
                                <input type="radio" id="absent" name="2nd_pistol_absent" value="Absent">
                                <label for="absent">Absent/</label>
                                <input type="radio" id="not_applicable" name="2nd_pistol_not_applicable" value="Not applicable">
                                <label for="not_applicable">Not applicable</label>
                            </td>
                            <td>
                                <input style="width:100%" type="text" name="2nd_qtr_rmks">
                            </td>
                        </tr>
                        <tr align="center">
                            <td>3rd Qrt</td>
                            <td>
                                <input type="radio" id="attended" name="3rd_rifle_attended" value="Attended">
                                <label for="attended">Attended/</label>
                                <input type="radio" id="exempted" name="3rd_rifle_exempted" value="Exempted">
                                <label for="exempted">Exempted/</label>
                                <input type="radio" id="absent" name="3rd_rifle_absent" value="Absent">
                                <label for="absent">Absent/</label>
                                <input type="radio" id="not_applicable" name="3rd_rifle_not_applicable" value="Not applicable">
                                <label for="not_applicable">Not applicable</label>
                            </td>
                            <td>
                                <input type="radio" id="attended" name="3rd_smg_attended" value="Attended">
                                <label for="attended">Attended/</label>
                                <input type="radio" id="exempted" name="3rd_smg_exempted" value="Exempted">
                                <label for="exempted">Exempted/</label>
                                <input type="radio" id="absent" name="3rd_smg_absent" value="Absent">
                                <label for="absent">Absent/</label>
                                <input type="radio" id="not_applicable" name="3rd_smg_not_applicable" value="Not applicable">
                                <label for="not_applicable">Not applicable</label>
                            </td>
                            <td>
                                <input type="radio" id="attended" name="3rd_pistol_attended" value="Attended">
                                <label for="attended">Attended/</label>
                                <input type="radio" id="exempted" name="3rd_pistol_exempted" value="Exempted">
                                <label for="exempted">Exempted/</label>
                                <input type="radio" id="absent" name="3rd_pistol_absent" value="Absent">
                                <label for="absent">Absent/</label>
                                <input type="radio" id="not_applicable" name="3rd_pistol_not_applicable" value="Not a/pplicable">
                                <label for="not_applicable">Not applicable</label>
                            </td>
                            <td>
                                <input style="width:100%" type="text" name="3rd_qtr_rmks/">
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr style="border-bottom: 1px solid black;">
                <td>
                    <table width="100%" style="margin-top: 50px;">
                        <tr>
                            <td width="50%">
                                Date: <input type="date" name="appraisee_date">
                            </td>
                            <td width="50%">
                                Signature of Appraisee: <input type="text" name="signature_of_appraisee">
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
        <table width="100%" class="table-responsive mt-5" cellspacing="0" cellpadding="0">
            <tr align="center" style="border-bottom: 1px solid black;">
                <th colspan="4" style="font-size: 25px; padding-bottom:5px">
                    <u>PART-II (FOR ASSESSOR)<u>
                </th>
            </tr>
            <tr>
                <td>
                    <p class="m-0">8. <u>Character and general behaviour</u> :</p>
                    <p style="padding-left: 10px;">(Cross the appropriate box)</p>
                </td>
                <td align="center">
                    <p>Good</p>
                    <p style="border:1px solid black; border-radius:5px; padding:3px; text-align:center; width:50px"><input type="radio" name="general_behaviour" value="Good"></p>
                </td>
                <td align="center">
                    <p>Satisfactory</p>
                    <p style="border:1px solid black; border-radius:5px; padding:3px; text-align:center; width:50px"><input type="radio" name="general_behaviour" value="Satisfactory"></p>
                </td>
                <td align="center">
                    <p>Unsatisfactory</p>
                    <p style="border:1px solid black; border-radius:5px; padding:3px; text-align:center; width:50px"><input type="radio" name="general_behaviour" value="Unsatisfactory"></p>
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
                <td style="padding-left: 10px;">a. Professional Knowledge and Eagerness to Learn More.</td>
                <td>
                    <table cellspacing="0" cellpadding="10">
                        <tr align="center">
                            <td>
                                <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px; margin-right:5px">
                                    10
                                </span>
                                <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin-right:5px">
                                    9
                                </span>
                            </td>
                        </tr>
                        <tr align="center">
                            <td>
                                <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 7px 4px 7px; margin-right:5px">
                                    <input type="radio" name="professional_knowledge" value="10">
                                </span>
                                <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 7px 4px 7px; margin-right:5px">
                                    <input type="radio" name="professional_knowledge" value="9">
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Has extensive knowledge on his trade, goes out of his way to keep up-to date knowledge.
                            </td>
                        </tr>
                    </table>
                </td>
                <td>
                    <table cellspacing="0" cellpadding="10">
                        <tr align="center">
                            <td>
                                <span style="border:1px solid black; border-radius:3px; width:40px; ; padding:4px 8px 4px 8px; margin-right:5px">
                                    8
                                </span>
                                <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin-right:5px">
                                    7
                                </span>
                            </td>
                        </tr>
                        <tr align="center">
                            <td>
                                <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 7px 4px 7px; margin-right:5px">
                                    <input type="radio" name="professional_knowledge" value="8">
                                </span>
                                <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 7px 4px 7px; margin-right:5px">
                                    <input type="radio" name="professional_knowledge" value="7">
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Good knowledge on his trade, well informed and eager.
                            </td>
                        </tr>
                    </table>
                </td>
                <td>
                    <table cellspacing="0" cellpadding="10">
                        <tr align="center">
                            <td>
                                <span style="border:1px solid black; border-radius:3px; width:40px; ; padding:4px 8px 4px 8px; margin-right:5px">
                                    6
                                </span>
                                <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin-right:5px">
                                    5
                                </span>
                            </td>
                        </tr>
                        <tr align="center">
                            <td>
                                <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 7px 4px 7px; margin-right:5px">
                                    <input type="radio" name="professional_knowledge" value="6">
                                </span>
                                <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 7px 4px 7px; margin-right:5px">
                                    <input type="radio" name="professional_knowledge" value="5">
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Has sufficient knowledge to meet all ordinary requirements satisfactorily.
                            </td>
                        </tr>
                    </table>
                </td>
                <td>
                    <table cellspacing="0" cellpadding="10">
                        <tr align="center">
                            <td>
                                <span style="border:1px solid black; border-radius:3px; width:40px; ; padding:4px 8px 4px 8px; margin-right:5px">
                                    4
                                </span>
                                <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin-right:5px">
                                    3
                                </span>
                            </td>
                        </tr>
                        <tr align="center">
                            <td>
                                <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 7px 4px 7px; margin-right:5px">
                                    <input type="radio" name="professional_knowledge" value="4">
                                </span>
                                <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 7px 4px 7px; margin-right:5px">
                                    <input type="radio" name="professional_knowledge" value="3">
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Has limited knowledge but makes some effort to improve.
                            </td>
                        </tr>
                    </table>
                </td>
                <td>
                    <table cellspacing="0" cellpadding="10">
                        <tr align="center">
                            <td>
                                <span style="border:1px solid black; border-radius:3px; width:40px; ; padding:4px 8px 4px 8px; margin-right:5px">
                                    2
                                </span>
                                <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin-right:5px">
                                    1
                                </span>
                            </td>
                        </tr>
                        <tr align="center">
                            <td>
                                <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 7px 4px 7px; margin-right:5px">
                                    <input type="radio" name="professional_knowledge" value="2">
                                </span>
                                <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 7px 4px 7px; margin-right:5px">
                                    <input type="radio" name="professional_knowledge" value="1">
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Lack of knowledge. Makes no effort to improve.
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td style="padding-left: 10px;">b. Practical Ability and willingness.</td>
                <td>
                    <table cellspacing="0" cellpadding="10">
                        <tr align="center">
                            <td>
                                <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px; margin-right:5px">
                                    10
                                </span>
                                <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin-right:5px">
                                    9
                                </span>
                            </td>
                        </tr>
                        <tr align="center">
                            <td>
                                <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 7px 4px 7px; margin-right:5px">
                                    <input type="radio" name="practical_ability" value="10">
                                </span>
                                <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 7px 4px 7px; margin-right:5px">
                                    <input type="radio" name="practical_ability" value="9">
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Consistently outstanding in quality and quantity of work.
                            </td>
                        </tr>
                    </table>
                </td>
                <td>
                    <table cellspacing="0" cellpadding="10">
                        <tr align="center">
                            <td>
                                <span style="border:1px solid black; border-radius:3px; width:40px; ; padding:4px 8px 4px 8px; margin-right:5px">
                                    8
                                </span>
                                <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin-right:5px">
                                    7
                                </span>
                            </td>
                        </tr>
                        <tr align="center">
                            <td>
                                <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 7px 4px 7px; margin-right:5px">
                                    <input type="radio" name="practical_ability" value="8">
                                </span>
                                <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 7px 4px 7px; margin-right:5px">
                                    <input type="radio" name="practical_ability" value="7">
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Produces a good standard of work.
                            </td>
                        </tr>
                    </table>
                </td>
                <td>
                    <table cellspacing="0" cellpadding="10">
                        <tr align="center">
                            <td>
                                <span style="border:1px solid black; border-radius:3px; width:40px; ; padding:4px 8px 4px 8px; margin-right:5px">
                                    6
                                </span>
                                <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin-right:5px">
                                    5
                                </span>
                            </td>
                        </tr>
                        <tr align="center">
                            <td>
                                <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 7px 4px 7px; margin-right:5px">
                                    <input type="radio" name="practical_ability" value="6">
                                </span>
                                <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 7px 4px 7px; margin-right:5px">
                                    <input type="radio" name="practical_ability" value="5">
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Produces a good standard of work.
                            </td>
                        </tr>
                    </table>
                </td>
                <td>
                    <table cellspacing="0" cellpadding="10">
                        <tr align="center">
                            <td>
                                <span style="border:1px solid black; border-radius:3px; width:40px; ; padding:4px 8px 4px 8px; margin-right:5px">
                                    4
                                </span>
                                <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin-right:5px">
                                    3
                                </span>
                            </td>
                        </tr>
                        <tr align="center">
                            <td>
                                <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 7px 4px 7px; margin-right:5px">
                                    <input type="radio" name="practical_ability" value="4">
                                </span>
                                <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 7px 4px 7px; margin-right:5px">
                                    <input type="radio" name="practical_ability" value="3">
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Shows slipshod at times.
                            </td>
                        </tr>
                    </table>
                </td>
                <td>
                    <table cellspacing="0" cellpadding="10">
                        <tr align="center">
                            <td>
                                <span style="border:1px solid black; border-radius:3px; width:40px; ; padding:4px 8px 4px 8px; margin-right:5px">
                                    2
                                </span>
                                <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin-right:5px">
                                    1
                                </span>
                            </td>
                        </tr>
                        <tr align="center">
                            <td>
                                <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 7px 4px 7px; margin-right:5px">
                                    <input type="radio" name="practical_ability" value="2">
                                </span>
                                <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 7px 4px 7px; margin-right:5px">
                                    <input type="radio" name="practical_ability" value="1">
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Fails more often then succeeds.
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td style="padding-left: 10px;">c. Discipline, Loyalty and Moral Standard
                </td>
                <td>
                    <table cellspacing="0" cellpadding="10">
                        <tr align="center">
                            <td>
                                <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px; margin-right:5px">
                                    10
                                </span>
                                <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin-right:5px">
                                    9
                                </span>
                            </td>
                        </tr>
                        <tr align="center">
                            <td>
                                <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 7px 4px 7px; margin-right:5px">
                                    <input type="radio" name="discipline" value="10">
                                </span>
                                <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 7px 4px 7px; margin-right:5px">
                                    <input type="radio" name="discipline" value="9">
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Maintains very high standard of discipline.
                            </td>
                        </tr>
                    </table>
                </td>
                <td>
                    <table align="center" cellspacing="0" cellpadding="10">
                        <tr align="center">
                            <td>
                                <span style="border:1px solid black; border-radius:3px; width:40px; ; padding:4px 8px 4px 8px; margin-right:5px">
                                    8
                                </span>
                                <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin-right:5px">
                                    7
                                </span>
                            </td>
                        </tr>
                        <tr align="center">
                            <td>
                                <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 7px 4px 7px; margin-right:5px">
                                    <input type="radio" name="discipline" value="8">
                                </span>
                                <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 7px 4px 7px; margin-right:5px">
                                    <input type="radio" name="discipline" value="7">
                                </span>
                            </td>
                        </tr>
                        <tr align="center">
                            <td>
                                A good discipline
                            </td>
                        </tr>
                    </table>
                </td>
                <td>
                    <table cellspacing="0" cellpadding="10">
                        <tr align="center">
                            <td>
                                <span style="border:1px solid black; border-radius:3px; width:40px; ; padding:4px 8px 4px 8px; margin-right:5px">
                                    6
                                </span>
                                <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin-right:5px">
                                    5
                                </span>
                            </td>
                        </tr>
                        <tr align="center">
                            <td>
                                <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 7px 4px 7px; margin-right:5px">
                                    <input type="radio" name="discipline" value="6">
                                </span>
                                <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 7px 4px 7px; margin-right:5px">
                                    <input type="radio" name="discipline" value="5">
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Maintains satisfactory standard of discipline.
                            </td>
                        </tr>
                    </table>
                </td>
                <td>
                    <table cellspacing="0" cellpadding="10">
                        <tr align="center">
                            <td>
                                <span style="border:1px solid black; border-radius:3px; width:40px; ; padding:4px 8px 4px 8px; margin-right:5px">
                                    4
                                </span>
                                <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin-right:5px">
                                    3
                                </span>
                            </td>
                        </tr>
                        <tr align="center">
                            <td>
                                <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 7px 4px 7px; margin-right:5px">
                                    <input type="radio" name="discipline" value="4">
                                </span>
                                <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 7px 4px 7px; margin-right:5px">
                                    <input type="radio" name="discipline" value="3">
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Unable to maintain acceptable standard.
                            </td>
                        </tr>
                    </table>
                </td>
                <td>
                    <table cellspacing="0" cellpadding="10">
                        <tr align="center">
                            <td>
                                <span style="border:1px solid black; border-radius:3px; width:40px; ; padding:4px 8px 4px 8px; margin-right:5px">
                                    2
                                </span>
                                <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin-right:5px">
                                    1
                                </span>
                            </td>
                        </tr>
                        <tr align="center">
                            <td>
                                <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 7px 4px 7px; margin-right:5px">
                                    <input type="radio" name="discipline" value="2">
                                </span>
                                <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 7px 4px 7px; margin-right:5px">
                                    <input type="radio" name="discipline" value="1">
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Has no sense of discipline.
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td style="padding-left: 10px;">d. Initiative, Reliability and Confidence.</td>
                <td>
                    <table cellspacing="0" cellpadding="10">
                        <tr align="center">
                            <td>
                                <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px; margin-right:5px">
                                    10
                                </span>
                                <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin-right:5px">
                                    9
                                </span>
                            </td>
                        </tr>
                        <tr align="center">
                            <td>
                                <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 7px 4px 7px; margin-right:5px">
                                    <input type="radio" name="reliability_and_confidence" value="10">
                                </span>
                                <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 7px 4px 7px; margin-right:5px">
                                    <input type="radio" name="reliability_and_confidence" value="9">
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Exceptionally reliable in producing results.
                            </td>
                        </tr>
                    </table>
                </td>
                <td>
                    <table cellspacing="0" cellpadding="10">
                        <tr align="center">
                            <td>
                                <span style="border:1px solid black; border-radius:3px; width:40px; ; padding:4px 8px 4px 8px; margin-right:5px">
                                    8
                                </span>
                                <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin-right:5px">
                                    7
                                </span>
                            </td>
                        </tr>
                        <tr align="center">
                            <td>
                                <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 7px 4px 7px; margin-right:5px">
                                    <input type="radio" name="reliability_and_confidence" value="8">
                                </span>
                                <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 7px 4px 7px; margin-right:5px">
                                    <input type="radio" name="reliability_and_confidence" value="7">
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Highly dependable in carrying out assignments
                            </td>
                        </tr>
                    </table>
                </td>
                <td>
                    <table cellspacing="0" cellpadding="10">
                        <tr align="center">
                            <td>
                                <span style="border:1px solid black; border-radius:3px; width:40px; ; padding:4px 8px 4px 8px; margin-right:5px">
                                    6
                                </span>
                                <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin-right:5px">
                                    5
                                </span>
                            </td>
                        </tr>
                        <tr align="center">
                            <td>
                                <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 7px 4px 7px; margin-right:5px">
                                    <input type="radio" name="reliability_and_confidence" value="6">
                                </span>
                                <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 7px 4px 7px; margin-right:5px">
                                    <input type="radio" name="reliability_and_confidence" value="5">
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Willing to assume responsibility. Usually dependable.
                            </td>
                        </tr>
                    </table>
                </td>
                <td>
                    <table cellspacing="0" cellpadding="10">
                        <tr align="center">
                            <td>
                                <span style="border:1px solid black; border-radius:3px; width:40px; ; padding:4px 8px 4px 8px; margin-right:5px">
                                    4
                                </span>
                                <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin-right:5px">
                                    3
                                </span>
                            </td>
                        </tr>
                        <tr align="center">
                            <td>
                                <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 7px 4px 7px; margin-right:5px">
                                    <input type="radio" name="reliability_and_confidence" value="4">
                                </span>
                                <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 7px 4px 7px; margin-right:5px">
                                    <input type="radio" name="reliability_and_confidence" value="3">
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Inclined to evade responsibility.
                            </td>
                        </tr>
                    </table>
                </td>
                <td>
                    <table cellspacing="0" cellpadding="10">
                        <tr align="center">
                            <td>
                                <span style="border:1px solid black; border-radius:3px; width:40px; ; padding:4px 8px 4px 8px; margin-right:5px">
                                    2
                                </span>
                                <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin-right:5px">
                                    1
                                </span>
                            </td>
                        </tr>
                        <tr align="center">
                            <td>
                                <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 7px 4px 7px; margin-right:5px">
                                    <input type="radio" name="reliability_and_confidence" value="2">
                                </span>
                                <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 7px 4px 7px; margin-right:5px">
                                    <input type="radio" name="reliability_and_confidence" value="1">
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Irresponsible and unreliable.
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td style="padding-left: 10px;">e. Physical Fitness and Acceptance of Arduous Duties.</td>
                <td>
                    <table cellspacing="0" cellpadding="10">
                        <tr align="center">
                            <td>
                                <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px; margin-right:5px">
                                    10
                                </span>
                                <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin-right:5px">
                                    9
                                </span>
                            </td>
                        </tr>
                        <tr align="center">
                            <td>
                                <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 7px 4px 7px; margin-right:5px">
                                    <input type="radio" name="physical_fitness" value="10">
                                </span>
                                <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 7px 4px 7px; margin-right:5px">
                                    <input type="radio" name="physical_fitness" value="9">
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Keep fit for most arduous duties. Exceptional in Parade /PT/Games.
                            </td>
                        </tr>
                    </table>
                </td>
                <td>
                    <table cellspacing="0" cellpadding="10">
                        <tr align="center">
                            <td>
                                <span style="border:1px solid black; border-radius:3px; width:40px; ; padding:4px 8px 4px 8px; margin-right:5px">
                                    8
                                </span>
                                <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin-right:5px">
                                    7
                                </span>
                            </td>
                        </tr>
                        <tr align="center">
                            <td>
                                <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 7px 4px 7px; margin-right:5px">
                                    <input type="radio" name="physical_fitness" value="8">
                                </span>
                                <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 7px 4px 7px; margin-right:5px">
                                    <input type="radio" name="physical_fitness" value="7">
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Keep fit for arduous duties. Above average in Parade/PT/Games.
                            </td>
                        </tr>
                    </table>
                </td>
                <td>
                    <table cellspacing="0" cellpadding="10">
                        <tr align="center">
                            <td>
                                <span style="border:1px solid black; border-radius:3px; width:40px; ; padding:4px 8px 4px 8px; margin-right:5px">
                                    6
                                </span>
                                <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin-right:5px">
                                    5
                                </span>
                            </td>
                        </tr>
                        <tr align="center">
                            <td>
                                <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 7px 4px 7px; margin-right:5px">
                                    <input type="radio" name="physical_fitness" value="6">
                                </span>
                                <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 7px 4px 7px; margin-right:5px">
                                    <input type="radio" name="physical_fitness" value="5">
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Keep fit for normal Air Force duties. Average in Parade /PT/Games.
                            </td>
                        </tr>
                    </table>
                </td>
                <td>
                    <table cellspacing="0" cellpadding="10">
                        <tr align="center">
                            <td>
                                <span style="border:1px solid black; border-radius:3px; width:40px; ; padding:4px 8px 4px 8px; margin-right:5px">
                                    4
                                </span>
                                <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin-right:5px">
                                    3
                                </span>
                            </td>
                        </tr>
                        <tr align="center">
                            <td>
                                <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 7px 4px 7px; margin-right:5px">
                                    <input type="radio" name="physical_fitness" value="4">
                                </span>
                                <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 7px 4px 7px; margin-right:5px">
                                    <input type="radio" name="physical_fitness" value="3">
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Below average in physical fitness. Lacks stamina and interest for Parade /PT/Games
                            </td>
                        </tr>
                    </table>
                </td>
                <td>
                    <table cellspacing="0" cellpadding="10">
                        <tr align="center">
                            <td>
                                <span style="border:1px solid black; border-radius:3px; width:40px; ; padding:4px 8px 4px 8px; margin-right:5px">
                                    2
                                </span>
                                <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin-right:5px">
                                    1
                                </span>
                            </td>
                        </tr>
                        <tr align="center">
                            <td>
                                <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 7px 4px 7px; margin-right:5px">
                                    <input type="radio" name="physical_fitness" value="2">
                                </span>
                                <span style="border:1px solid black; border-radius:3px; width:40px; padding:4px 7px 4px 7px; margin-right:5px">
                                    <input type="radio" name="physical_fitness" value="1">
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Does not accept physical strain and hardship. Avoids Parade/PT/Games.
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
        <table width="100%" class="table-responsive mt-3" cellspacing="0" cellpadding="0">
            <tr>
                <td style="padding-bottom: 10px;" width="10%">10.</td>
                <td style="padding-bottom: 10px;" colspan="">Total Score: <input type="text" name="total_score"></td>
                <td style="padding-bottom: 10px;" colspan="">Overall Grading: <input type="text" name="overall_grading">
                </td>
            </tr>
            <tr style="border-top: 1px solid black; border-bottom:1px solid black">
                <td colspan="3">
                    <p>11. The overall grading will be on the basis of total score as follows :</p>
                    <table class="table-responsive table-bordered" width="100%" cellpadding="5">
                        <tr align="center">
                            <th>Score Grading</th>
                            <th>Title Grading</th>
                            <th>Maximum Percentage</th>
                            <th>Score Grading</th>
                            <th>Title Grading</th>
                        </tr>
                        <tr>
                            <td>46-50 <input type="text" name="outstanding">10</td>
                            <td>Outstanding</td>
                            <td>Not exceeding 5%</td>
                            <td>23-27 <input type="text" name="average">5</td>
                            <td rowspan="2">Average</td>
                        </tr>
                        <tr>
                            <td>43-45 <input type="text" name="well_above_average_9">9</td>
                            <td rowspan="2">Well above average</td>
                            <td>Not exceeding 6%</td>
                            <td>18-22<input type="text" name="average">4</td>
                        </tr>
                        <tr>
                            <td>38-42 <input type="text" name="well_above_average_8">8</td>
                            <td>Not exceeding 9%</td>
                            <td>15-17<input type="text" name="below_average">3</td>
                            <td>Below average</td>
                        </tr>
                        <tr>
                            <td>33-37 <input type="text" name="above_average">7</td>
                            <td rowspan="2">Above average</td>
                            <td>Not exceeding 20%</td>
                            <td>14 and below<input type="text" name="poor">2</td>
                            <td>Poor</td>
                        </tr>
                        <tr>
                            <td>28-32 <input type="text" name="above_average">6</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </table>
                    <strong>Note: Percentage mentioned against overall grading may be relaxed which must be duly recom by the last reviewing offr.</strong>
                </td>
            </tr>
        </table>
        <table width="100%" class="table-responsive" cellspacing="0" cellpadding="0">
            <tr>
                <td>
                    <p class="m-0">12. <u>Fitness for Promotion</u> :</p>
                    <p style="padding-left: 10px;">(Cross the appropriate box)</p>
                </td>
                <td align="center">
                    <p style="width:50px;">Fit for Promotion</p>
                    <p style="border:1px solid black; border-radius:5px; padding:3px; text-align:center; width:50px"><input type="radio" name="fitness_promotion"></p>
                </td>
                <td align="center">
                    <p style="width:100px;">Not yest Fit for Promotion</p>
                    <p style="border:1px solid black; border-radius:5px; padding:3px; text-align:center; width:50px"><input type="radio" name="fitness_promotion"></p>
                </td>
                <td align="center">
                    <p style="width:70px;">Unfit for Promotion</p>
                    <p style="border:1px solid black; border-radius:5px; padding:3px; text-align:center; width:50px"><input type="radio" name="fitness_promotion"></p>
                </td>
                <td align="center">
                    <p style="width:50px;">Not Applicable</p>
                    <p style="border:1px solid black; border-radius:5px; padding:3px; text-align:center; width:50px"><input type="radio" name="fitness_promotion"></p>
                </td>
            </tr>
        </table>
        <table width="100%" class="table-responsive" cellspacing="0" cellpadding="0">
            <tr>
                <td colspan="2">
                    <p>13. <u>General Remarks</u> :</p>
                    <p><textarea name="general_remarks" id="" cols="160" rows="2"></textarea></p>
                </td>
            </tr>
            <tr style="border-bottom: 1px solid black;">
                <td width="60%" style="padding-top: 8rem;">Date: <input type="text" name="general_remarks_date"></td>
                <td>
                    <p>Sign: <input type="text" name="initiating_officer_sign"></p>
                    <p>Name: <input type="text" name="initiating_officer_name"></p>
                    <p>Rank: <input type="text" name="initiating_officer_rank"></p>
                    <p>Initiating Officer</p>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="padding-top: 40px;">
                    (To be seen and signed by the appraisee if his total score is below average/poor or there is any adverse remarks)
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <p>14. I have seen the below average report/adverse remarks.</p>
                </td>
            </tr>
            <tr>
                <td width="50%" style="padding: 4rem 0 1rem 0;">Date: <input type="text" name="signature_appraisee_date"></td>
                <td style="padding: 4rem 0 1rem 0;">
                    Signature of Appraisee: <input type="text" name="signature_of_appraisee">
                </td>
            </tr>
            <tr style="border-top: 1px solid black">
                <td colspan="2" style="padding-top: 1rem;">
                    <p>15. <u>Remarks Reviewing Officer</u> :</p>
                    <p><textarea name="remarks_reviewing_officer" id="" cols="160" rows="2"></textarea></p>
                </td>
            </tr>
            <tr style="border-bottom: 1px solid black;">
                <td width="60%" style="padding-top: 8rem;">Date: <input type="text"></td>
                <td>
                    <p>Sign: <input type="text" name="reviewing_officer_sign"></p>
                    <p>Name: <input type="text" name="reviewing_officer_name"></p>
                    <p>Rank: <input type="text" name="reviewing_officer_rank"></p>
                    <p>Reviewing Officer</p>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="padding-top: 2rem;">
                    <p>16. <u>Remarks Senior Reviewing Officer/Officer Commanding</u> :</p>
                    <p><textarea name="remarks_commanding_officer" id="" cols="160" rows="2"></textarea></p>
                </td>
            </tr>
            <tr style="border-bottom: 1px solid black;">
                <td width="60%" style="padding-top: 8rem;">Date: <input type="text" name="commanding_officer_date"></td>
                <td>
                    <p>Sign: <input type="text" name="commanding_officer_sign"></p>
                    <p>Name: <input type="text" name="commanding_officer_date"></p>
                    <p>Rank: <input type="text" name="commanding_officer_rank"></p>
                    <p>Senior Reviewing Officer/Officer Commanding</p>
                </td>
            </tr>
        </table>
        <table width="100%" class="table-responsive mt-5" cellspacing="0" cellpadding="0">
            <tr align="center" style="border-bottom: 1px solid black;">
                <th colspan="4" style="font-size: 25px; padding-bottom:5px"><u>PART-II (FOR BAF RO)<u>
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
                            <td>Date<input style="width:60%; margin:5px" type="text" name="ncoic_docu_date"></td>
                        </tr>
                        <tr>
                            <td width="15%">WOIC Docu-III Section:</td>
                            <td>BD/<input style="width:60%; margin:5px" type="text"></td>
                            <td>Name<input style="width:60%; margin:5px" type="text"></td>
                            <td>Rank<input style="width:60%; margin:5px" type="text"></td>
                            <td>Signature<input style="width:60%; margin:5px" type="text"></td>
                            <td>Date<input style="width:60%; margin:5px" type="text"></td>
                        </tr>
                        <tr>
                            <td colspan="6" style="padding-bottom: 2rem;"><strong><u>Verified and Database Updated</u></strong></td>
                        </tr>
                        <tr style="padding-bottom: 3rem;">
                            <td width="15%">NCOIC R&D Cell:</td>
                            <td>BD/<input style="width:60%; margin:5px" type="text"></td>
                            <td>Name<input style="width:60%; margin:5px" type="text"></td>
                            <td>Rank<input style="width:60%; margin:5px" type="text"></td>
                            <td>Signature<input style="width:60%; margin:5px" type="text"></td>
                            <td>Date<input style="width:60%; margin:5px" type="text"></td>
                        </tr>
                        <tr>
                            <td width="15%">WOIC R&D Cell:</td>
                            <td>BD/<input style="width:60%; margin:5px" type="text"></td>
                            <td>Name<input style="width:60%; margin:5px" type="text"></td>
                            <td>Rank<input style="width:60%; margin:5px" type="text"></td>
                            <td>Signature<input style="width:60%; margin:5px" type="text"></td>
                            <td>Date<input style="width:60%; margin:5px" type="text"></td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </table>
  
</form>



@push('js')
<script type="text/javascript">
    var i = 0;
    $("#add").click(function() {
        console.log('inn');
        ++i;

        let html =
            `

                <tr>
                    <td width="5%" >
                        <button type="button" class="btn btn-danger remove-tr"><i class="fa fa-trash"></i></button>                  
                    </td>
                    <td>
                        <input type="text" name="fourth_base[]">
                    </td>
                    <td>
                        <input type="text" name="fourth_aircraft[]">
                    </td>
                    <td>
                        <input type="text" name="fourth_period_from[]">
                    </td>
                    <td>
                        <input type="text" name="fourth_period_to[]">
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
        margin-top: 30px;
        width: 100% !important;
        border-collapse: collapse;

        align-items: center;
    }

    .table input {
        width: 100%;
        border: none;
    }

    .table tr {
        border: 1px solid black;
        text-align: center;
    }

    .table th {
        border: 1px solid black;
    }

    .table td {
        border: 1px solid black;
    }
</style>
@endpush
@endsection