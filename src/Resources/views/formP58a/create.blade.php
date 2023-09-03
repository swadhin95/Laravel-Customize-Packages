@extends('master')
@section('content')
    <div class="card">
        <div class="card-body">
            <form action="" method="POST">
                <div class="row mt-5">
                    <div class="col-sm-12 col-md-6 col-lg-4 row">
                        <label class="col-sm-6 col-md-6 col-lg-5 col-form-label col-form-label-sm">1. Period of
                            Report:</label>
                        <div class="col-sm-6 col-md-6 col-lg-7">
                            <input class="form-control " type="text" name="period_of_report">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4 row">
                        <label class="col-sm-6 col-md-3 col-lg-3 col-form-label col-form-label-sm">Form:</label>
                        <div class="col-sm-6 col-md-9 col-lg-9 pt-2">
                            <input class="form-control" type="text" name="report_from">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4 row">
                        <label class="col-sm-6 col-md-2 col-lg-2 col-form-label col-form-label-sm">To:</label>
                        <div class="col-sm-6 col-md-10 col-lg-10 pt-2">
                            <input class="form-control" type="text" name="report_to">
                        </div>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-sm-6 col-md-6 col-lg-4 row">
                        <label class="col-sm-6 col-md-6 col-lg-6 col-form-label col-form-label-sm">2. Occasions: </label>
                        <div class="col-sm-6 col-md-6 col-lg-6">
                            <input class="form-control" type="text" name="occasions">
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-8 row">
                        <label class="col-sm-6 col-md-3 col-lg-2 col-form-label col-form-label-sm">Spacial:</label>
                        <div class="col-sm-6 col-md-9 col-lg-10">
                            <input class="form-control" type="text" name="spacial_reason" placeholder="type your reason">
                        </div>
                    </div>
                </div>

                <fieldset class="form-group border p-3 mt-3">
                    <legend class="w-auto px-2 ">
                        3.Service Particulars :
                    </legend>
                    <div class="row">
                        <div class="form-goup col-sm-6 col-md-6 col-lg-4 row">
                            <label for="" class="col-sm-6 col-md-3 col-lg-3 col-form-label">BD/:</label>
                            <div class="col-sm-6 col-md-9 col-lg-9 pt-2">
                                <input class="form-control" type="text" name="svc_particulars_bdnumber">
                            </div>
                        </div>
                        <div class="form-group col-sm-6 col-md-6 col-lg-4 row">
                            <label for="" class="col-sm-6 col-md-3 col-lg-3 col-form-label">Rank:</label>
                            <div class="col-sm-6 col-md-9 col-lg-9 pt-2">
                                <input class="form-control" type="text" name="svc_particulars_rank">
                            </div>
                        </div>
                        <div class="form-group col-sm-6 col-md-6 col-lg-4 row">
                            <label for="" class="col-sm-6 col-md-3 col-lg-3 col-form-label">Name:</label>
                            <div class="col-sm-6 col-md-9 col-lg-9 pt-2">
                                <input class="form-control" type="text" name="svc_particulars_name">
                            </div>
                        </div>

                        <div class="form-group col-sm-6 col-md-6 col-lg-4 row">
                            <label for="" class="col-sm-6 col-md-3 col-lg-3 col-form-label">Trade:</label>
                            <div class="col-sm-6 col-md-9 col-lg-9 pt-2">
                                <input class="form-control" type="text" name="svc_particulars_trade">
                            </div>
                        </div>
                        <div class="form-group col-sm-6 col-md-6 col-lg-4 row">
                            <label for="" class="col-sm-6 col-md-4 col-lg-4  col-form-label">Date of Enrollment:</label>
                            <div class="col-sm-6 col-md-8 col-lg-8 pt-2">
                                <input class="form-control" type="date" name="svc_enrollment_date">
                            </div>
                        </div>
                        <div class="form-group col-sm-6 col-md-6 col-lg-4 row">
                            <label for="" class="col-sm-6 col-md-3 col-lg-3 col-form-label">Entry No:</label>
                            <div class="col-sm-6 col-md-9 col-lg-9 pt-2">
                                <input class="form-control" type="text" name="svc_particulars_entry_no">
                            </div>
                        </div>

                        <div class="form-group col-sm-6 col-md-6 col-lg-4 row">
                            <label for="" class="col-sm-6 col-md-3 col-lg-3  col-form-label">Total Svc:</label>
                            <div class="col-sm-6 col-md-9 col-lg-9 pt-2">
                                <input class="form-control" type="text" name="total_svc">
                            </div>
                        </div>
                        <div class="form-group col-sm-6 col-md-6 col-lg-4 row">
                            <label for="" class="col-sm-6 col-md-3 col-lg-3 col-form-label">Year:</label>
                            <div class="col-sm-6 col-md-9 col-lg-9 pt-2">
                                <input class="form-control" type="text" name="svc_particulars_year">
                            </div>
                        </div>
                        <div class="form-group col-sm-6 col-md-6 col-lg-4 row">
                            <label for="" class="col-sm-6 col-md-3 col-lg-3 col-form-label col-form-label">Month:</label>
                            <div class="col-sm-6 col-md-9 col-lg-9 pt-2">
                                <input class="form-control" type="text" name="svc_particulars_month">
                            </div>
                        </div>

                        <div class="form-group col-sm-6 col-md-6 col-lg-4 row">
                            <label for=""
                                class="col-sm-6 col-md-3 col-lg-3 col-form-label col-form-label">Base/unit:</label>
                            <div class="col-sm-6 col-md-9 col-lg-9 pt-2">
                                <input class="form-control" type="text" name="svc_particulars_base">
                            </div>
                        </div>
                        <div class="form-group col-sm-6 col-md-6 col-lg-4 row">
                            <label for="" class="col-sm-6 col-md-6 col-lg-6 col-form-label col-form-label">Staying period at
                                present
                                base/unit:</label>
                            <div class="col-sm-6 col-md-6 col-lg-6 pt-2">
                                <input class="form-control" type="text" name="svc_particulars_present_base">
                            </div>
                        </div>
                        <div class="form-group col-sm-6 col-md-6 col-lg-4 row">
                            <label for="" class="col-sm-6 col-md-3 col-lg-3 col-form-label col-form-label">Year:</label>
                            <div class="col-sm-6 col-md-9 col-lg-9 pt-2">
                                <input class="form-control" type="text" name="svc_particulars_base_year">
                            </div>
                        </div>

                        <div class="form-group col-sm-6 col-md-6 col-lg-4 row">
                            <label for="" class="col-sm-6 col-md-3 col-lg-3 col-form-label">Month:</label>
                            <div class="col-sm-6 col-md-9 col-lg-9 pt-2">
                                <input class="form-control" type="text" name="svc_particulars_base_month">
                            </div>
                        </div>
                        <div class="form-group col-sm-6 col-md-6 col-lg-4 row">
                            <label for="" class="col-sm-12 col-md-6 col-lg-6 col-form-label">Staying period as present
                                area:</label>
                            <div class="col-sm-12 col-md-6 col-lg-6 pt-2">
                                <input class="form-control" width="100%" type="text"
                                    name="svc_particulars_present_area">
                            </div>
                        </div>
                        <div class="form-group col-sm-6 col-md-6 col-lg-4 row">
                            <label for="" class="col-sm-6 col-md-3 col-lg-3 col-form-label">Year:</label>
                            <div class="col-sm-6 col-md-9 col-lg-9 pt-2">
                                <input class="form-control" type="text" name="svc_particulars_present_area_year">
                            </div>
                        </div>

                        <div class="form-group col-sm-6 col-md-6 col-lg-4 row">
                            <label for="" class="col-sm-6 col-md-3 col-lg-3 col-form-label">Month:</label>
                            <div class="col-sm-6 col-md-9 col-lg-9 pt-2">
                                <input class="form-control" type="text" name="svc_particulars_present_area_month">
                            </div>
                        </div>
                        <div>
                </fieldset>
                <fieldset class="form-group border p-3 mt-3">
                    <legend class="w-auto px-2 ">
                        <p>4.</p>
                    </legend>
                    <div class="row">
                        <div class="col-sm-6 col-md-5 col-lg-5 row">
                            <label for="" class="col-sm-12 col-md-5 col-lg-5 col-form-label">a. Present appointment:</label>
                            <div class="col-sm-12 col-md-7 col-lg-7">
                                <input class="form-control" type="text" name="4th_a_present_appointment">
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-7 col-lg-7 row">
                            <label for="" class="col-sm-12 col-md-6 col-lg-6 col-form-label">b. Aircraft/Equipment/Job on
                                which employed during the appraising period</label>
                            <div class="col-sm-12 col-md-6 col-lg-6">
                                <input class="form-control" type="text" name="4th_aircraft_appraising_period">
                            </div>
                        </div>
                    </div>

                    <div class="table-responsive-md table-responsive-sm table-responsive-lg">
                        <table align="center" width="100%" class="table table-responsive" id="table" border="1"
                            cellspacing="0" cellpadding="0">
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
                                        <button style="margin:0; padding-top: 10px;" type="button" name="add" id="add"
                                            class="btn btn-sm btn-success"><i class="fa fa-plus"></i></button>
                                    </td>
                                    <td>
                                        <input type="text" name="tbl_4_base[]">
                                    </td>
                                    <td>
                                        <input type="text" name="tbl_4_aircraft[]">
                                    </td>
                                    <td>
                                        <input type="text" name="tbl_4_period_from[]">
                                    </td>
                                    <td>
                                        <input type="text" name="tbl_4_period_to[]">
                                    </td>
                                </tr>
                            </tbody>

                        </table>
                    </div>
                </fieldset>
                <fieldset class="form-group border p-3 mt-3">
                    <legend class="w-auto px-2">
                        5. <u>Medical Information</u> :
                    </legend>
                    <div class="row">
                        <div class="col-sm-6 col-md-6 col-lg-4 row">
                            <label for="" class="col-sm-6 col-md-5 col-lg-5 col-form-label">a. Medical category</label>
                            <div class="col-sm-6 col-md-7 col-lg-7 pt-2">
                                <input class="form-control" type="text" name="medical_category">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 row">
                            <label for="" class="col-sm-6 col-md-5 col-lg-4 col-form-label">b. Date of birth</label>
                            <div class="col-sm-6 col-md-7 col-lg-8 pt-2">
                                <input class="form-control" type="date" date_of_birth>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 row">
                            <label for="" class="col-sm-6 col-md-3 col-lg-3 col-form-label">c. Age</label>
                            <div class="col-sm-6 col-md-9 col-lg-9 pt-2">
                                <input class="form-control" type="text" name="age">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 row">
                            <label for="" class="col-sm-6 col-md-3 col-lg-3 col-form-label">d. Height</label>
                            <div class="col-sm-6 col-md-9 col-lg-9 pt-2">
                                <input class="form-control" type="text" name="height">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 row">
                            <label for="" class="col-sm-6 col-md-5 col-lg-5 col-form-label">e. Present Weight</label>
                            <div class="col-sm-6 col-md-7 col-lg-7 pt-2">
                                <input class="form-control" type="text" name="present_weight">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 row">
                            <label for="" class="col-sm-6 col-md-6 col-lg-6 col-form-label">f. Over weight/Under
                                weight</label>
                            <div class="col-sm-6 col-md-6 col-lg-6 pt-2">
                                <input class="form-control" type="text" over_or_under_weight>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-6 col-lg-4 row">
                            <label for="" class="col-sm-6 col-md-5 col-lg-4 col-form-label">g. fit/Unfit</label>
                            <div class="col-sm-6 col-md-7 col-lg-8 pt-2">
                                <input class="form-control" type="text" name="fit_or_unfit">
                            </div>
                        </div>
                    </div>
                    <div class="ms-5 float-md-end float-lg-end float-xl-end ">
                        <div class="pt-5 row">
                            <label for="" class="col-sm-6 col-md-6 col-lg-6 col-form-label">Signature of Medical Officer
                                :</label>
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <input class="form-control" type="text" name="medical_officer_sign">
                            </div>
                        </div>
                    </div>
                </fieldset>
                <fieldset class="form-group border p-3 mt-3">
                    <legend class="w-auto px-2 ">
                        6. <u>PET (as applicable)</u> :
                    </legend>
                    <div class="overlow-hidden">
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-4">
                                <p>1st Quarterly Test</p>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-4 row">
                                <label for="" class="col-sm-6 col-md-4 col-lg-3 col-form-label">Date:</label>
                                <div class="col-sm-6 col-md-8 col-lg-9">
                                    <input type="date" class="form-control" name="1st_quarterly_date">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-4">
                                <input type="radio" class="form-check-input" id="passed" name="1st_pet_result"
                                    value="Passed">
                                <label for="passed" class="form-check-label">Passed</label>
                                <input type="radio" class="form-check-input" id="failed" name="1st_pet_result"
                                    value="Failed">
                                <label for="failed" class="form-check-label">Failed</label>
                                <input type="radio" class="form-check-input" id="absent" name="1st_pet_result"
                                    value="Absent">
                                <label for="absent" class="form-check-label">Absent</label>
                                <input type="radio" class="form-check-input" id="exempted" name="1st_pet_result"
                                    value="Exempted">
                                <label for="exempted" class="form-check-label">Exempted</label>
                            </div>
                        </div>

                        <div class="row">
                            <hr>
                            <div class="col-sm-12 col-md-12 col-lg-4">
                                <p>2nd Quarterly Test</p>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-4 row">
                                <label for="" class="col-sm-4 col-md-4 col-lg-3 col-form-label">Date:</label>
                                <div class="col-sm-8 col-md-8 col-lg-9">
                                    <input type="date" class="form-control" name="2nd_quarterly_date">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-4 ">
                                <input type="radio" class="form-check-input" id="passed" name="2nd_pet_result"
                                    value="Passed">
                                <label for="passed" class="form-check-label">Passed</label>
                                <input type="radio" class="form-check-input" id="failed" name="2nd_pet_result"
                                    value="Failed">
                                <label for="failed" class="form-check-label">Failed</label>
                                <input type="radio" class="form-check-input" id="absent" name="2nd_pet_result"
                                    value="Absent">
                                <label for="absent" class="form-check-label">Absent</label>
                                <input type="radio" class="form-check-input" id="exempted" name="2nd_pet_result"
                                    value="Exempted">
                                <label for="exempted" class="form-check-label">Exempted</label>
                            </div>
                        </div>
                        <div class="row">
                            <hr>
                            <div class="col-sm-12 col-md-12 col-lg-4">
                                <p>3rd Quarterly Test</p>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-4 row">
                                <label for="" class="col-sm-4 col-md-4 col-lg-3 col-form-label">Date:</label>
                                <div class="col-sm-8 col-md-8 col-lg-9">
                                    <input type="date" class="form-control" name="3rd_quarterly_date">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-4">
                                <input type="radio" class="form-check-input" id="passed" name="3rd_pet_result"
                                    value="Passed">
                                <label for="passed" class="form-check-label">Passed</label>
                                <input type="radio" class="form-check-input" id="failed" name="3rd_pet_result"
                                    value="Failed">
                                <label for="failed" class="form-check-label">Failed</label>
                                <input type="radio" class="form-check-input" id="absent" name="3rd_pet_result"
                                    value="Absent">
                                <label for="absent" class="form-check-label">Absent</label>
                                <input type="radio" class="form-check-input" id="exempted" name="3rd_pet_result"
                                    value="Exempted">
                                <label for="exempted" class="form-check-label">Exempted</label>
                            </div>
                        </div>
                        <div class="row">
                            <hr>
                            <div class="col-sm-12 col-md-12 col-lg-4">
                                <p>4th Quarterly Test</p>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-4 row">
                                <label for="" class="col-sm-4 col-md-4 col-lg-3 col-form-label">Date:</label>
                                <div class="col-sm-8 col-md-8 col-lg-9">
                                    <input type="date" class="form-control" name="4th_quarterly_date">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-4">
                                <input type="radio" class="form-check-input" id="passed" name="4th_pet_result"
                                    value="Passed">
                                <label for="passed" class="form-check-label">Passed</label>
                                <input type="radio" class="form-check-input" id="failed" name="4th_pet_result"
                                    value="Failed">
                                <label for="failed" class="form-check-label">Failed</label>
                                <input type="radio" class="form-check-input" id="absent" name="4th_pet_result"
                                    value="Absent">
                                <label for="absent" class="form-check-label">Absent</label>
                                <input type="radio" class="form-check-input" id="exempted" name="4th_pet_result"
                                    value="Exempted">
                                <label for="exempted" class="form-check-label">Exempted</label>
                            </div>
                            <hr>
                        </div>
                        <div class="ms-5 float-md-end float-lg-end float-xl-end">
                            <div class="row">
                                <label for="" class="col-sm-6 col-md-7 col-lg-7 col-form-label">Signature of
                                    GSTO/OIC/Sports</label>
                                <div class="col-sm-6 col-md-5 col-lg-5">
                                    <input class="form-control" type="text" name="sign_of_gsto">
                                </div>
                            </div>
                        </div>
                    </div>
                </fieldset>

                <fieldset class="form-group border p-3 mt-3">
                    <legend w-auto px-2>
                        7. <u>Musketry Firing</u> :
                    </legend>
                    <div>
                        <div class="row">
                            <p><strong><u>1st Quarterly</u> :</strong></p>
                            <div class="col-sm-6 col-md-3 col-lg-4">
                                <p class="">Rifle:</>
                                <div class="row m-0 p-0">
                                    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 m-0 p-0">
                                        <input class="form-check-input" type="radio" id="attended"
                                            name="1st_quarterly_rifle" value="Attended">
                                        <label for="attended" class="form-check-lavel">Attended</label>
                                    </div>
                                    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6  m-0 p-0">
                                        <input type="radio" class="form-check-input" id="exempted"
                                            name="1st_quarterly_rifle" value="Exempted">
                                        <label for="exempted" class="form-check-lavel">Exempted</label>
                                    </div>
                                    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 m-0 p-0">
                                        <input type="radio" class="form-check-input" id="absent" name="1st_quarterly_rifle"
                                            value="Absent">
                                        <label for="absent">Absent</label>
                                    </div>
                                    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 m-0 p-0">
                                        <input type="radio" class="form-check-input" id="not_applicable"
                                            name="1st_quarterly_rifle" value="Not applicable">
                                        <label for="not_applicable">Not applicable</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3 col-lg-4">
                                <p class="">SMG:</p>
                                <div class="row m-0 p-0">
                                    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 m-0 p-0">
                                        <input class="form-check-input" type="radio" id="attended" name="1st_quarterly_smg"
                                            value="Attended">
                                        <label for="attended" class="form-check-lavel">Attended</label>
                                    </div>
                                    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6  m-0 p-0">
                                        <input type="radio" class="form-check-input" id="exempted" name="1st_quarterly_smg"
                                            value="Exempted">
                                        <label for="exempted">Exempted</label>
                                    </div>
                                    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 m-0 p-0">
                                        <input type="radio" class="form-check-input" id="absent" name="1st_quarterly_smg"
                                            value="Absent">
                                        <label for="absent">Absent</label>
                                    </div>
                                    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 m-0 p-0">
                                        <input type="radio" class="form-check-input" id="not_applicable"
                                            name="1st_quarterly_smg" value="Not applicable">
                                        <label for="not_applicable" class="form-check-lavel">Not applicable</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3 col-lg-4">
                                <p class="text-bold">Pistol:</p>
                                <div class="row m-0 p-0">
                                    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 m-0 p-0">
                                        <input class="form-check-input" type="radio" id="attended"
                                            name="1st_quarterly_pistol" value="Attended">
                                        <label for="attended" class="form-check-lavel">Attended</label>
                                    </div>
                                    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6  m-0 p-0">
                                        <input type="radio" class="form-check-input" id="exempted"
                                            name="1st_quarterly_pistol" value="Exempted">
                                        <label for="exempted" class="form-check-lavel">Exempted</label>
                                    </div>
                                    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 m-0 p-0">
                                        <input type="radio" class="form-check-input" id="absent"
                                            name="1st_quarterly_pistol" value="Absent">
                                        <label for="absent" class="form-check-lavel">Absent</label>
                                    </div>
                                    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 m-0 p-0">
                                        <input type="radio" class="form-check-input" id="not_applicable"
                                            name="1st_quarterly_pistol" value="Not applicable">
                                        <label for="not_applicable" class="form-check-lavel">Not applicable</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3 col-lg-12">
                                <label for="" class="">Remarks:</label>
                                <div class="form-floating">
                                    <textarea class="form-control" name="1st_qtr_remarks" id="" cols="30"
                                        rows=""></textarea>
                                </div>

                            </div>
                        </div>
                        <div class="row">
                            <p><strong><u>2nd Quarterly</u> :</strong></p>
                            <div class="col-sm-6 col-md-3 col-lg-4">
                                <p class="">Rifle:</>
                                <div class="row m-0 p-0">
                                    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 m-0 p-0">
                                        <input class="form-check-input" type="radio" id="attended"
                                            name="2nd_quarterly_rifle" value="Attended">
                                        <label for="attended" class="form-check-lavel">Attended</label>
                                    </div>
                                    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6  m-0 p-0">
                                        <input type="radio" class="form-check-input" id="exempted"
                                            name="2nd_quarterly_rifle" value="Exempted">
                                        <label for="exempted" class="form-check-lavel">Exempted</label>
                                    </div>
                                    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 m-0 p-0">
                                        <input type="radio" class="form-check-input" id="absent" name="2nd_quarterly_rifle"
                                            value="Absent">
                                        <label for="absent">Absent</label>
                                    </div>
                                    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 m-0 p-0">
                                        <input type="radio" class="form-check-input" id="not_applicable"
                                            name="2nd_quarterly_rifle" value="Not applicable">
                                        <label for="not_applicable">Not applicable</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3 col-lg-4">
                                <p class="">SMG:</p>
                                <div class="row m-0 p-0">
                                    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 m-0 p-0">
                                        <input class="form-check-input" type="radio" id="attended" name="2nd_quarterly_smg"
                                            value="Attended">
                                        <label for="attended" class="form-check-lavel">Attended</label>
                                    </div>
                                    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6  m-0 p-0">
                                        <input type="radio" class="form-check-input" id="exempted" name="2nd_quarterly_smg"
                                            value="Exempted">
                                        <label for="exempted">Exempted</label>
                                    </div>
                                    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 m-0 p-0">
                                        <input type="radio" class="form-check-input" id="absent" name="2nd_quarterly_smg"
                                            value="Absent">
                                        <label for="absent">Absent</label>
                                    </div>
                                    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 m-0 p-0">
                                        <input type="radio" class="form-check-input" id="not_applicable"
                                            name="2nd_quarterly_smg" value="Not applicable">
                                        <label for="not_applicable" class="form-check-lavel">Not applicable</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3 col-lg-4">
                                <p class="text-bold">Pistol:</p>
                                <div class="row m-0 p-0">
                                    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 m-0 p-0">
                                        <input class="form-check-input" type="radio" id="attended"
                                            name="2nd_quarterly_pistol" value="Attended">
                                        <label for="attended" class="form-check-lavel">Attended</label>
                                    </div>
                                    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6  m-0 p-0">
                                        <input type="radio" class="form-check-input" id="exempted"
                                            name="2nd_quarterly_pistol" value="Exempted">
                                        <label for="exempted" class="form-check-lavel">Exempted</label>
                                    </div>
                                    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 m-0 p-0">
                                        <input type="radio" class="form-check-input" id="absent"
                                            name="2nd_quarterly_pistol" value="Absent">
                                        <label for="absent" class="form-check-lavel">Absent</label>
                                    </div>
                                    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 m-0 p-0">
                                        <input type="radio" class="form-check-input" id="not_applicable"
                                            name="2nd_quarterly_pistol" value="Not applicable">
                                        <label for="not_applicable" class="form-check-lavel">Not applicable</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3 col-lg-12">
                                <label for="" class="">Remarks:</label>
                                <div class="form-floating">
                                    <textarea class="form-control" name="2nd_qtr_remarks" id="" cols="30"
                                        rows=""></textarea>
                                </div>

                            </div>
                        </div>
                        <div class="row">
                            <p><strong><u>3rd Quarterly</u> :</strong></p>
                            <div class="col-sm-6 col-md-3 col-lg-4">
                                <p class="">Rifle:</>
                                <div class="row m-0 p-0">
                                    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 m-0 p-0">
                                        <input class="form-check-input" type="radio" id="attended"
                                            name="3rd_quarterly_rifle" value="Attended">
                                        <label for="attended" class="form-check-lavel">Attended</label>
                                    </div>
                                    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6  m-0 p-0">
                                        <input type="radio" class="form-check-input" id="exempted"
                                            name="3rd_quarterly_rifle" value="Exempted">
                                        <label for="exempted" class="form-check-lavel">Exempted</label>
                                    </div>
                                    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 m-0 p-0">
                                        <input type="radio" class="form-check-input" id="absent" name="3rd_quarterly_rifle"
                                            value="Absent">
                                        <label for="absent">Absent</label>
                                    </div>
                                    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 m-0 p-0">
                                        <input type="radio" class="form-check-input" id="not_applicable"
                                            name="3rd_quarterly_rifle" value="Not applicable">
                                        <label for="not_applicable">Not applicable</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3 col-lg-4">
                                <p class="">SMG:</p>
                                <div class="row m-0 p-0">
                                    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 m-0 p-0">
                                        <input class="form-check-input" type="radio" id="attended" name="3rd_quarterly_smg"
                                            value="Attended">
                                        <label for="attended" class="form-check-lavel">Attended</label>
                                    </div>
                                    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6  m-0 p-0">
                                        <input type="radio" class="form-check-input" id="exempted" name="3rd_quarterly_smg"
                                            value="Exempted">
                                        <label for="exempted">Exempted</label>
                                    </div>
                                    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 m-0 p-0">
                                        <input type="radio" class="form-check-input" id="absent" name="3rd_quarterly_smg"
                                            value="Absent">
                                        <label for="absent">Absent</label>
                                    </div>
                                    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 m-0 p-0">
                                        <input type="radio" class="form-check-input" id="not_applicable"
                                            name="3rd_quarterly_smg" value="Not applicable">
                                        <label for="not_applicable" class="form-check-lavel">Not applicable</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3 col-lg-4">
                                <p class="text-bold">Pistol:</p>
                                <div class="row m-0 p-0">
                                    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 m-0 p-0">
                                        <input class="form-check-input" type="radio" id="attended"
                                            name="3rd_quarterly_pistol" value="Attended">
                                        <label for="attended" class="form-check-lavel">Attended</label>
                                    </div>
                                    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6  m-0 p-0">
                                        <input type="radio" class="form-check-input" id="exempted"
                                            name="3rd_quarterly_pistol" value="Exempted">
                                        <label for="exempted" class="form-check-lavel">Exempted</label>
                                    </div>
                                    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 m-0 p-0">
                                        <input type="radio" class="form-check-input" id="absent"
                                            name="3rd_quarterly_pistol" value="Absent">
                                        <label for="absent" class="form-check-lavel">Absent</label>
                                    </div>
                                    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 m-0 p-0">
                                        <input type="radio" class="form-check-input" id="not_applicable"
                                            name="3rd_quarte2nd_pistol" value="Not applicable">
                                        <label for="not_applicable" class="form-check-lavel">Not applicable</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3 col-lg-12">
                                <label for="" class="">Remarks:</label>
                                <div class="form-floating">
                                    <textarea class="form-control" name="3rd_qtr_remarks" id="" cols="30"
                                        rows=""></textarea>
                                </div>

                            </div>
                        </div>
                        <div class="row pt-5">
                            <div class="col-md-6 col-lg-6"></div>
                            <div class="col-sm-12 col-md-6 col-lg-6 row">
                                <label for="" class="col-sm-6 col-md-6 col-lg-6 col-form-label">Signature of
                                    GSTO/OIC/Sports:</label>
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <input class="form-control" type="text" name="firing_sign_gsto">
                                </div>
                            </div>
                        </div>

                        <div class="row pt-5">
                            <hr>
                            <div class="col-sm-12 col-md-6 col-lg-6 row">
                                <label for="" class="col-sm-6 col-md-3 col-lg-3 col-form-label">Date :</label>
                                <div class="col-sm-6 col-md-9 col-lg-9 pt-2">
                                    <input class="form-control" type="date" name="appraisee_date">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-6 row">
                                <label for="" class="col-sm-6 col-md-6 col-lg-4 col-form-label">Signature of Appraisee
                                    :</label>
                                <div class="col-sm-6 col-md-6 col-lg-8 pt-2">
                                    <input class="form-control" type="text" name="sign_of_appraisee">
                                </div>
                            </div>
                        </div>
                    </div>
                </fieldset>


                <!-- PART-II FOR ASSESSOR-->

                <div style="margin-top: 100px;">
                    <h3 class="text-center"><u>PART-II &#40;FOR ASSESSOR&#41;</u></h3>
                </div>
                <div class="row pt-5">
                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <p class="m-0">8.<u> Character and general behaviour</u> :</p>
                        <p style="padding-left: 10px;">(Cross the appropriate box)</p>
                    </div>
                    <div class="col-sm-12 col-md-8 col-lg-8 row d-flex">
                        <div class="col-sm-12 col-md-3 col-lg-4 col-xl-4 ps-sm-5 ">
                            <p class="ms-1">Good</p>
                            <div class="ms-.25">
                                <p
                                    style="border:1px solid black; border-radius:5px; padding:3px; text-align:center; width:50px">
                                    <input type="radio" class="form-check-input" name="general_behaviour" value="Good">
                                </p>
                            </div>

                        </div>
                        <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 ps-sm-5 ">
                            <p>Satisfactory</p>
                            <div class="ms-3">
                                <p
                                    style="border:1px solid black; border-radius:5px; padding:3px; text-align:center; width:50px">
                                    <input type="radio" class="form-check-input" name="general_behaviour" value="Satisfactory">
                                </p>
                            </div>

                        </div>
                        <div class="col-sm-12 col-md-5 col-lg-4 col-xl-4 ps-sm-5 ">
                            <p>Unsatisfactory</p>
                            <div class="ms-3">
                                <p
                                    style="border:1px solid black; border-radius:5px; padding:3px; text-align:center; width:50px">
                                    <input type="radio" class="form-check-input" name="general_behaviour" value="Unsatisfactory">
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <span>9. <u>Trade Proficiency and General Ability</u> :</span>
                    <span>(Cross the appropriate box) :</span>
                </div>
                <div class="table-responsive-md table-responsive-sm table-responsive-lg table-responsive-xl pt-2">
                    <table width="100%" class="table-bordered" cellspacing="0" cellpadding="0">
                        <tr>
                            <td style="padding-left: 10px;">a. Professional Knowledge and Eagerness to Learn More.</td>
                            <td>
                                <table cellspacing="10" cellpadding="10">
                                    <tr align="center">
                                        <td>
                                            <span
                                                style="border:1px solid black; border-radius:3px; width:40px; padding:4px; margin-right:5px">
                                                10
                                            </span>
                                            <span
                                                style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin-right:5px">
                                                9
                                            </span>
                                        </td>
                                    </tr>
                                    <tr align="center">
                                        <td>
                                            <span
                                                style="border:1px solid black; border-radius:3px; width:40px; padding:4px 7px 4px 7px; margin-right:5px">
                                                <input type="radio" name="professional_knowledge" value="10">
                                            </span>
                                            <span
                                                style="border:1px solid black; border-radius:3px; width:40px; padding:4px 7px 4px 7px; margin-right:5px">
                                                <input type="radio" name="professional_knowledge" value="9">
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Has extensive knowledge on his trade, goes out of his way to keep up-to date
                                            knowledge.
                                        </td>
                                    </tr>
                                </table>
                            </td>
                            <td>
                                <table cellspacing="0" cellpadding="10">
                                    <tr align="center">
                                        <td>
                                            <span
                                                style="border:1px solid black; border-radius:3px; width:40px; ; padding:4px 8px 4px 8px; margin-right:5px">
                                                8
                                            </span>
                                            <span
                                                style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin-right:5px">
                                                7
                                            </span>
                                        </td>
                                    </tr>
                                    <tr align="center">
                                        <td>
                                            <span
                                                style="border:1px solid black; border-radius:3px; width:40px; padding:4px 7px 4px 7px; margin-right:5px">
                                                <input type="radio" name="professional_knowledge" value="8">
                                            </span>
                                            <span
                                                style="border:1px solid black; border-radius:3px; width:40px; padding:4px 7px 4px 7px; margin-right:5px">
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
                                            <span
                                                style="border:1px solid black; border-radius:3px; width:40px; ; padding:4px 8px 4px 8px; margin-right:5px">
                                                6
                                            </span>
                                            <span
                                                style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin-right:5px">
                                                5
                                            </span>
                                        </td>
                                    </tr>
                                    <tr align="center">
                                        <td>
                                            <span
                                                style="border:1px solid black; border-radius:3px; width:40px; padding:4px 7px 4px 7px; margin-right:5px">
                                                <input type="radio" name="professional_knowledge" value="6">
                                            </span>
                                            <span
                                                style="border:1px solid black; border-radius:3px; width:40px; padding:4px 7px 4px 7px; margin-right:5px">
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
                                            <span
                                                style="border:1px solid black; border-radius:3px; width:40px; ; padding:4px 8px 4px 8px; margin-right:5px">
                                                4
                                            </span>
                                            <span
                                                style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin-right:5px">
                                                3
                                            </span>
                                        </td>
                                    </tr>
                                    <tr align="center">
                                        <td>
                                            <span
                                                style="border:1px solid black; border-radius:3px; width:40px; padding:4px 7px 4px 7px; margin-right:5px">
                                                <input type="radio" name="professional_knowledge" value="4">
                                            </span>
                                            <span
                                                style="border:1px solid black; border-radius:3px; width:40px; padding:4px 7px 4px 7px; margin-right:5px">
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
                                            <span
                                                style="border:1px solid black; border-radius:3px; width:40px; ; padding:4px 8px 4px 8px; margin-right:5px">
                                                2
                                            </span>
                                            <span
                                                style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin-right:5px">
                                                1
                                            </span>
                                        </td>
                                    </tr>
                                    <tr align="center">
                                        <td>
                                            <span
                                                style="border:1px solid black; border-radius:3px; width:40px; padding:4px 7px 4px 7px; margin-right:5px">
                                                <input type="radio" name="professional_knowledge" value="2">
                                            </span>
                                            <span
                                                style="border:1px solid black; border-radius:3px; width:40px; padding:4px 7px 4px 7px; margin-right:5px">
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
                                            <span
                                                style="border:1px solid black; border-radius:3px; width:40px; padding:4px; margin-right:5px">
                                                10
                                            </span>
                                            <span
                                                style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin-right:5px">
                                                9
                                            </span>
                                        </td>
                                    </tr>
                                    <tr align="center">
                                        <td>
                                            <span
                                                style="border:1px solid black; border-radius:3px; width:40px; padding:4px 7px 4px 7px; margin-right:5px">
                                                <input type="radio" name="practical_ability" value="10">
                                            </span>
                                            <span
                                                style="border:1px solid black; border-radius:3px; width:40px; padding:4px 7px 4px 7px; margin-right:5px">
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
                                            <span
                                                style="border:1px solid black; border-radius:3px; width:40px; ; padding:4px 8px 4px 8px; margin-right:5px">
                                                8
                                            </span>
                                            <span
                                                style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin-right:5px">
                                                7
                                            </span>
                                        </td>
                                    </tr>
                                    <tr align="center">
                                        <td>
                                            <span
                                                style="border:1px solid black; border-radius:3px; width:40px; padding:4px 7px 4px 7px; margin-right:5px">
                                                <input type="radio" name="practical_ability" value="8">
                                            </span>
                                            <span
                                                style="border:1px solid black; border-radius:3px; width:40px; padding:4px 7px 4px 7px; margin-right:5px">
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
                                            <span
                                                style="border:1px solid black; border-radius:3px; width:40px; ; padding:4px 8px 4px 8px; margin-right:5px">
                                                6
                                            </span>
                                            <span
                                                style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin-right:5px">
                                                5
                                            </span>
                                        </td>
                                    </tr>
                                    <tr align="center">
                                        <td>
                                            <span
                                                style="border:1px solid black; border-radius:3px; width:40px; padding:4px 7px 4px 7px; margin-right:5px">
                                                <input type="radio" name="practical_ability" value="6">
                                            </span>
                                            <span
                                                style="border:1px solid black; border-radius:3px; width:40px; padding:4px 7px 4px 7px; margin-right:5px">
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
                                            <span
                                                style="border:1px solid black; border-radius:3px; width:40px; ; padding:4px 8px 4px 8px; margin-right:5px">
                                                4
                                            </span>
                                            <span
                                                style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin-right:5px">
                                                3
                                            </span>
                                        </td>
                                    </tr>
                                    <tr align="center">
                                        <td>
                                            <span
                                                style="border:1px solid black; border-radius:3px; width:40px; padding:4px 7px 4px 7px; margin-right:5px">
                                                <input type="radio" name="practical_ability" value="4">
                                            </span>
                                            <span
                                                style="border:1px solid black; border-radius:3px; width:40px; padding:4px 7px 4px 7px; margin-right:5px">
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
                                            <span
                                                style="border:1px solid black; border-radius:3px; width:40px; ; padding:4px 8px 4px 8px; margin-right:5px">
                                                2
                                            </span>
                                            <span
                                                style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin-right:5px">
                                                1
                                            </span>
                                        </td>
                                    </tr>
                                    <tr align="center">
                                        <td>
                                            <span
                                                style="border:1px solid black; border-radius:3px; width:40px; padding:4px 7px 4px 7px; margin-right:5px">
                                                <input type="radio" name="practical_ability" value="2">
                                            </span>
                                            <span
                                                style="border:1px solid black; border-radius:3px; width:40px; padding:4px 7px 4px 7px; margin-right:5px">
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
                                            <span
                                                style="border:1px solid black; border-radius:3px; width:40px; padding:4px; margin-right:5px">
                                                10
                                            </span>
                                            <span
                                                style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin-right:5px">
                                                9
                                            </span>
                                        </td>
                                    </tr>
                                    <tr align="center">
                                        <td>
                                            <span
                                                style="border:1px solid black; border-radius:3px; width:40px; padding:4px 7px 4px 7px; margin-right:5px">
                                                <input type="radio" name="discipline" value="10">
                                            </span>
                                            <span
                                                style="border:1px solid black; border-radius:3px; width:40px; padding:4px 7px 4px 7px; margin-right:5px">
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
                                            <span
                                                style="border:1px solid black; border-radius:3px; width:40px; ; padding:4px 8px 4px 8px; margin-right:5px">
                                                8
                                            </span>
                                            <span
                                                style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin-right:5px">
                                                7
                                            </span>
                                        </td>
                                    </tr>
                                    <tr align="center">
                                        <td>
                                            <span
                                                style="border:1px solid black; border-radius:3px; width:40px; padding:4px 7px 4px 7px; margin-right:5px">
                                                <input type="radio" name="discipline" value="8">
                                            </span>
                                            <span
                                                style="border:1px solid black; border-radius:3px; width:40px; padding:4px 7px 4px 7px; margin-right:5px">
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
                                            <span
                                                style="border:1px solid black; border-radius:3px; width:40px; ; padding:4px 8px 4px 8px; margin-right:5px">
                                                6
                                            </span>
                                            <span
                                                style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin-right:5px">
                                                5
                                            </span>
                                        </td>
                                    </tr>
                                    <tr align="center">
                                        <td>
                                            <span
                                                style="border:1px solid black; border-radius:3px; width:40px; padding:4px 7px 4px 7px; margin-right:5px">
                                                <input type="radio" name="discipline" value="6">
                                            </span>
                                            <span
                                                style="border:1px solid black; border-radius:3px; width:40px; padding:4px 7px 4px 7px; margin-right:5px">
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
                                            <span
                                                style="border:1px solid black; border-radius:3px; width:40px; ; padding:4px 8px 4px 8px; margin-right:5px">
                                                4
                                            </span>
                                            <span
                                                style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin-right:5px">
                                                3
                                            </span>
                                        </td>
                                    </tr>
                                    <tr align="center">
                                        <td>
                                            <span
                                                style="border:1px solid black; border-radius:3px; width:40px; padding:4px 7px 4px 7px; margin-right:5px">
                                                <input type="radio" name="discipline" value="4">
                                            </span>
                                            <span
                                                style="border:1px solid black; border-radius:3px; width:40px; padding:4px 7px 4px 7px; margin-right:5px">
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
                                            <span
                                                style="border:1px solid black; border-radius:3px; width:40px; ; padding:4px 8px 4px 8px; margin-right:5px">
                                                2
                                            </span>
                                            <span
                                                style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin-right:5px">
                                                1
                                            </span>
                                        </td>
                                    </tr>
                                    <tr align="center">
                                        <td>
                                            <span
                                                style="border:1px solid black; border-radius:3px; width:40px; padding:4px 7px 4px 7px; margin-right:5px">
                                                <input type="radio" name="discipline" value="2">
                                            </span>
                                            <span
                                                style="border:1px solid black; border-radius:3px; width:40px; padding:4px 7px 4px 7px; margin-right:5px">
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
                                            <span
                                                style="border:1px solid black; border-radius:3px; width:40px; padding:4px; margin-right:5px">
                                                10
                                            </span>
                                            <span
                                                style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin-right:5px">
                                                9
                                            </span>
                                        </td>
                                    </tr>
                                    <tr align="center">
                                        <td>
                                            <span
                                                style="border:1px solid black; border-radius:3px; width:40px; padding:4px 7px 4px 7px; margin-right:5px">
                                                <input type="radio" name="reliability_and_confidence" value="10">
                                            </span>
                                            <span
                                                style="border:1px solid black; border-radius:3px; width:40px; padding:4px 7px 4px 7px; margin-right:5px">
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
                                            <span
                                                style="border:1px solid black; border-radius:3px; width:40px; ; padding:4px 8px 4px 8px; margin-right:5px">
                                                8
                                            </span>
                                            <span
                                                style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin-right:5px">
                                                7
                                            </span>
                                        </td>
                                    </tr>
                                    <tr align="center">
                                        <td>
                                            <span
                                                style="border:1px solid black; border-radius:3px; width:40px; padding:4px 7px 4px 7px; margin-right:5px">
                                                <input type="radio" name="reliability_and_confidence" value="8">
                                            </span>
                                            <span
                                                style="border:1px solid black; border-radius:3px; width:40px; padding:4px 7px 4px 7px; margin-right:5px">
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
                                            <span
                                                style="border:1px solid black; border-radius:3px; width:40px; ; padding:4px 8px 4px 8px; margin-right:5px">
                                                6
                                            </span>
                                            <span
                                                style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin-right:5px">
                                                5
                                            </span>
                                        </td>
                                    </tr>
                                    <tr align="center">
                                        <td>
                                            <span
                                                style="border:1px solid black; border-radius:3px; width:40px; padding:4px 7px 4px 7px; margin-right:5px">
                                                <input type="radio" name="reliability_and_confidence" value="6">
                                            </span>
                                            <span
                                                style="border:1px solid black; border-radius:3px; width:40px; padding:4px 7px 4px 7px; margin-right:5px">
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
                                            <span
                                                style="border:1px solid black; border-radius:3px; width:40px; ; padding:4px 8px 4px 8px; margin-right:5px">
                                                4
                                            </span>
                                            <span
                                                style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin-right:5px">
                                                3
                                            </span>
                                        </td>
                                    </tr>
                                    <tr align="center">
                                        <td>
                                            <span
                                                style="border:1px solid black; border-radius:3px; width:40px; padding:4px 7px 4px 7px; margin-right:5px">
                                                <input type="radio" name="reliability_and_confidence" value="4">
                                            </span>
                                            <span
                                                style="border:1px solid black; border-radius:3px; width:40px; padding:4px 7px 4px 7px; margin-right:5px">
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
                                            <span
                                                style="border:1px solid black; border-radius:3px; width:40px; ; padding:4px 8px 4px 8px; margin-right:5px">
                                                2
                                            </span>
                                            <span
                                                style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin-right:5px">
                                                1
                                            </span>
                                        </td>
                                    </tr>
                                    <tr align="center">
                                        <td>
                                            <span
                                                style="border:1px solid black; border-radius:3px; width:40px; padding:4px 7px 4px 7px; margin-right:5px">
                                                <input type="radio" name="reliability_and_confidence" value="2">
                                            </span>
                                            <span
                                                style="border:1px solid black; border-radius:3px; width:40px; padding:4px 7px 4px 7px; margin-right:5px">
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
                                            <span
                                                style="border:1px solid black; border-radius:3px; width:40px; padding:4px; margin-right:5px">
                                                10
                                            </span>
                                            <span
                                                style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin-right:5px">
                                                9
                                            </span>
                                        </td>
                                    </tr>
                                    <tr align="center">
                                        <td>
                                            <span
                                                style="border:1px solid black; border-radius:3px; width:40px; padding:4px 7px 4px 7px; margin-right:5px">
                                                <input type="radio" name="physical_fitness" value="10">
                                            </span>
                                            <span
                                                style="border:1px solid black; border-radius:3px; width:40px; padding:4px 7px 4px 7px; margin-right:5px">
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
                                            <span
                                                style="border:1px solid black; border-radius:3px; width:40px; ; padding:4px 8px 4px 8px; margin-right:5px">
                                                8
                                            </span>
                                            <span
                                                style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin-right:5px">
                                                7
                                            </span>
                                        </td>
                                    </tr>
                                    <tr align="center">
                                        <td>
                                            <span
                                                style="border:1px solid black; border-radius:3px; width:40px; padding:4px 7px 4px 7px; margin-right:5px">
                                                <input type="radio" name="physical_fitness" value="8">
                                            </span>
                                            <span
                                                style="border:1px solid black; border-radius:3px; width:40px; padding:4px 7px 4px 7px; margin-right:5px">
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
                                            <span
                                                style="border:1px solid black; border-radius:3px; width:40px; ; padding:4px 8px 4px 8px; margin-right:5px">
                                                6
                                            </span>
                                            <span
                                                style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin-right:5px">
                                                5
                                            </span>
                                        </td>
                                    </tr>
                                    <tr align="center">
                                        <td>
                                            <span
                                                style="border:1px solid black; border-radius:3px; width:40px; padding:4px 7px 4px 7px; margin-right:5px">
                                                <input type="radio" name="physical_fitness" value="6">
                                            </span>
                                            <span
                                                style="border:1px solid black; border-radius:3px; width:40px; padding:4px 7px 4px 7px; margin-right:5px">
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
                                            <span
                                                style="border:1px solid black; border-radius:3px; width:40px; ; padding:4px 8px 4px 8px; margin-right:5px">
                                                4
                                            </span>
                                            <span
                                                style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin-right:5px">
                                                3
                                            </span>
                                        </td>
                                    </tr>
                                    <tr align="center">
                                        <td>
                                            <span
                                                style="border:1px solid black; border-radius:3px; width:40px; padding:4px 7px 4px 7px; margin-right:5px">
                                                <input type="radio" name="physical_fitness" value="4">
                                            </span>
                                            <span
                                                style="border:1px solid black; border-radius:3px; width:40px; padding:4px 7px 4px 7px; margin-right:5px">
                                                <input type="radio" name="physical_fitness" value="3">
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Below average in physical fitness. Lacks stamina and interest for Parade
                                            /PT/Games
                                        </td>
                                    </tr>
                                </table>
                            </td>
                            <td>
                                <table cellspacing="0" cellpadding="10">
                                    <tr align="center">
                                        <td>
                                            <span
                                                style="border:1px solid black; border-radius:3px; width:40px; ; padding:4px 8px 4px 8px; margin-right:5px">
                                                2
                                            </span>
                                            <span
                                                style="border:1px solid black; border-radius:3px; width:40px; padding:4px 10px 4px 10px; margin-right:5px">
                                                1
                                            </span>
                                        </td>
                                    </tr>
                                    <tr align="center">
                                        <td>
                                            <span
                                                style="border:1px solid black; border-radius:3px; width:40px; padding:4px 7px 4px 7px; margin-right:5px">
                                                <input type="radio" name="physical_fitness" value="2">
                                            </span>
                                            <span
                                                style="border:1px solid black; border-radius:3px; width:40px; padding:4px 7px 4px 7px; margin-right:5px">
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
                </div>
                <div class="row pt-3">
                    <div class="col-sm-12 col-md-6 col-lg-6 row">
                        <label for="" class="col-sm-6 col-md-5 col-lg-4 col-form-label"> Total Score:</label>
                        <div class="col-sm-6 col-md-7 col-lg-8 pt-2">
                            <input class="form-control" type="text" name="total_score">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6 row">
                        <label for="" class="col-sm-6 col-md-5 col-lg-4 col-form-label">Overall Grading:</label>
                        <div class="col-sm-6 col-md-7 col-lg-8 pt-2">
                            <input class="form-control" type="text" name="overall_grading">
                        </div>
                    </div>
                </div>

                <div class=" pt-3">
                    <p>11. The overall grading will be on the basis of total score as follows :</p>
                    <div class="table-responsive-md table-responsive-sm table-responsive-lg table-responsive-xl">
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
                                <td>23-27 <input type="text" name="average_5">5</td>
                                <td rowspan="2">Average</td>
                            </tr>
                            <tr>
                                <td>43-45 <input type="text" name="well_above_average_9">9</td>
                                <td rowspan="2">Well above average</td>
                                <td>Not exceeding 6%</td>
                                <td>18-22<input type="text" name="average_4">4</td>
                            </tr>
                            <tr>
                                <td>38-42 <input type="text" name="well_above_average_8">8</td>
                                <td>Not exceeding 9%</td>
                                <td>15-17<input type="text" name="below_average">3</td>
                                <td>Below average</td>
                            </tr>
                            <tr>
                                <td>33-37 <input type="text" name="above_average_7">7</td>
                                <td rowspan="2">Above average</td>
                                <td>Not exceeding 20%</td>
                                <td>14 and below<input type="text" name="poor">2</td>
                                <td>Poor</td>
                            </tr>
                            <tr>
                                <td>28-32 <input type="text" name="above_average_6">6</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </table>
                    </div>
                    <div>
                        </p><strong>Note: Percentage mentioned against overall grading may be relaxed which must be duly
                            recom by the last reviewing offr.</strong></p>
                    </div>

                </div>

                <div class="row pt-3">
                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <p class="m-0">12. <u>Fitness for Promotion</u> :</p>
                        <p style="padding-left: 10px;">(Cross the appropriate box)</p>
                    </div>
                    <div class="col-sm-12 col-md-8 col-lg-8 row">
                        <div class="col-sm-6 col-md-3 col-lg-3">
                            <p style="width:80px;text-align:center;">Fit for Promotion</p>
                            <div class="ms-3">
                                <p
                                    style="border:1px solid black; border-radius:5px; padding:3px; text-align:center; width:50px">
                                    <input type="radio" class="form-check-input" name="fitness_promotion">
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3 col-lg-3">
                            <p style="width:100px;text-align:center">Not yest Fit for Promotion</p>
                            <div class="ms-3">
                                <p
                                    style="border:1px solid black; border-radius:5px; padding:3px; text-align:center; width:50px">
                                    <input type="radio" class="form-check-input" name="fitness_promotion">
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3 col-lg-3">
                            <p style="width:80px;text-align:center">Unfit for Promotion</p>
                            <div class="ms-3">
                                <p
                                    style="border:1px solid black; border-radius:5px; padding:3px; text-align:center; width:50px">
                                    <input type="radio" class="form-check-input" name="fitness_promotion">
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3 col-lg-3">
                            <p style="width:80px; text-align:center">Not Applicable</p>
                            <div class="ms-3">
                                <p
                                    style="border:1px solid black; border-radius:5px; padding:3px; text-align:center; width:50px">
                                    <input type="radio" class="form-check-input" name="fitness_promotion">
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <fieldset class="form-group border p-3 mt-3">
                    <legend w-auto px-1>
                        13. <u>General Remarks</u> :
                    </legend>
                    <div class="row">
                        <textarea class="form-control" name="general_remarks" id="" cols="160" rows="2"></textarea>
                        <div class="col-sm-6 col-md-6 col-lg-6 row align-content-end pb-3">
                            <label for="" class="col-sm-4 col-md-3 col-lg-3 col-form-label">Date:</label>
                            <div class="col-sm-8 col-md-9 col-lg-9">
                                <input class="form-control w-50" type="date" name="initiating_officer_date">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-6 pt-3">

                            <div class="row">
                                <label for="" class="col-sm-6 col-md-3 col-lg-3 col-form-label">Sign:</label>
                                <div class="col-sm-6 col-md-9 col-lg-9 pt-2">
                                    <input class="form-control w-75" type="text" name="initiating_officer_sign">
                                </div>
                            </div>
                            <div class="row">
                                <label for="" class="col-sm-6 col-md-3 col-lg-3 col-form-label">Name:</label>
                                <div class="col-sm-6 col-md-9 col-lg-9 pt-2">
                                    <input class="form-control w-75" type="text" name="initiating_officer_name">
                                </div>
                            </div>
                            <div class="row">
                                <label for="" class="col-sm-6 col-md-3 col-lg-3 col-form-label">Rank:</label>
                                <div class="col-sm-6 col-md-9 col-lg-9 pt-2">
                                    <input class="form-control w-75" type="text" name="initiating_officer_rank">
                                </div>
                            </div>
                            <p>Initiating Officer</p>
                        </div>
                    </div>
                </fieldset>
                <fieldset class="border p-3 mt-3">
                    <div>
                        <p>(To be seen and signed by the appraisee if his total score is below average/poor or there is any
                            adverse remarks)</p>
                        <p>14. I have seen the below average report/adverse remarks.</p>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-md-6 col-lg-6 pt-3 row">
                            <label class="col-sm-4 col-md-3 col-lg-3 col-form-label">Date:</label>
                            <div class="col-sm-8 col-md-9 col-lg-9">
                                <input class="form-control w-50" type="date" name="signature_appraisee_date">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-6 pt-3 row">
                            <label class="col-sm-7 col-md-5 col-lg-5 col-form-label">Signature of Appraisee:</label>
                            <div class="col-sm-5 col-md-7 col-lg-7">
                                <input class="form-control w-75" type="text" name="signature_of_appraisee">
                            </div>
                        </div>
                    </div>
                </fieldset>
                <fieldset class="form-group border p-3 mt-3">
                    <legend w-auto px-1>
                        15. <u>Remarks Reviewing Officer</u> :
                    </legend>
                    <div class="row">
                        <textarea class="form-control" name="reviewing_offcer_remarks" id="" cols="160" rows="2"></textarea>
                        <div class="col-sm-6 col-md-6 col-lg-6 row align-content-end pb-3">
                            <label for="" class="col-sm-4 col-md-3 col-lg-3 col-form-label">Date:</label>
                            <div class="col-sm-8 col-md-9 col-lg-9">
                                <input class="form-control w-50" type="date" name="reviewing_officer_date">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-6 pt-3">

                            <div class="row">
                                <label for="" class="col-sm-6 col-md-3 col-lg-3 col-form-label">Sign:</label>
                                <div class="col-sm-6 col-md-9 col-lg-9 pt-2">
                                    <input class="form-control w-75" type="text" name="reviewing_officer_sign">
                                </div>
                            </div>
                            <div class="row">
                                <label for="" class="col-sm-6 col-md-3 col-lg-3 col-form-label">Name:</label>
                                <div class="col-sm-6 col-md-9 col-lg-9 pt-2">
                                    <input class="form-control w-75" type="text" name="reviewing_officer_name">
                                </div>
                            </div>
                            <div class="row">
                                <label for="" class="col-sm-6 col-md-3 col-lg-3 col-form-label">Rank:</label>
                                <div class="col-sm-6 col-md-9 col-lg-9 pt-2">
                                    <input class="form-control w-75" type="text" name="reviewing_officer_rank">
                                </div>
                            </div>
                            <p>Reviewing Officer</p>
                        </div>
                    </div>
                </fieldset>
                <fieldset class="form-group border p-3 mt-3">
                    <legend w-auto px-1>
                        16. <u>Remarks Senior Reviewing Officer/Officer Commanding</u> :
                    </legend>
                    <div class="row">
                        <textarea class="form-control" name="commanding_officer_remarks" id="" cols="160" rows="2"></textarea>
                        <div class="col-sm-6 col-md-6 col-lg-6 row align-content-end pb-3">
                            <label for="" class="col-sm-4 col-md-3 col-lg-3 col-form-label">Date:</label>
                            <div class="col-sm-8 col-md-9 col-lg-9">
                                <input class="form-control w-50" type="date" name="commanding_officer_date">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-6 pt-3">

                            <div class="row">
                                <label for="" class="col-sm-6 col-md-3 col-lg-3 col-form-label">Sign:</label>
                                <div class="col-sm-6 col-md-9 col-lg-9 pt-2">
                                    <input class="form-control w-75" type="text" name="commanding_officer_sign">
                                </div>
                            </div>
                            <div class="row">
                                <label for="" class="col-sm-6 col-md-3 col-lg-3 col-form-label">Name:</label>
                                <div class="col-sm-6 col-md-9 col-lg-9 pt-2">
                                    <input class="form-control w-75" type="text" name="commanding_officer_name">
                                </div>
                            </div>
                            <div class="row">
                                <label for="" class="col-sm-6 col-md-3 col-lg-3 col-form-label">Rank:</label>
                                <div class="col-sm-6 col-md-9 col-lg-9 pt-2">
                                    <input class="form-control w-75" type="text" name="commanding_officer_rank">
                                </div>
                            </div>
                            <p>Senior Reviewing Officer/Officer Commanding</p>
                        </div>
                    </div>
                </fieldset>
                <fieldset class="form-group border p-3 mt-3">
                    <div class="pt-2">
                        <p><strong><u>Checked and Found Correct</u></strong></p>
                    </div>

                    <div class="row pt-2">
                        <div class=""><u>NCOIC Docu-III Section</u>:</div>
                        <div class="col-sm-6 col-md-4 col-lg-4 row">
                            <label class="col-sm-6 col-md-4 col-lg-4 col-form-label" for="">BD/</label>
                            <div class="col-sm-6 col-md-8 col-lg-8 pt-2">
                                <input class="form-control" type="text" name="ncoic_docu_bdnumber">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4 row">
                            <label for="" class="col-sm-6 col-md-3 col-lg-3 col-form-label">Name</label>
                            <div class="col-sm-6 col-md-9 col-lg-9 pt-2">
                                <input class="form-control" type="text" name="ncoic_docu_name">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4 row">
                            <label for="" class="col-sm-6 col-md-3 col-lg-3">Rank</label>
                            <div class="col-sm-6 col-md-9 col-lg-9 pt-2">
                                <input class="form-control" type="text" name="ncoic_docu_rank">
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 col-lg-4 row">
                            <label for="" class="col-sm-6 col-md-5 col-lg-4 col-form-label">Signature</label>
                            <div class="col-sm-6 col-md-7 col-lg-8 pt-2">
                                <input class="form-control" type="text" name="ncoic_docu_sign">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4 row">
                            <label for="" class="col-sm-6 col-md-3 col-lg-3 col-form-label">Date</label>

                            <div class="col-sm-6 col-md-9 col-lg-9 pt-2">
                                <input class="form-control" type="text" name="ncoic_docu_date">
                            </div>

                        </div>
                    </div>
                    <div class="row pt-2">
                        <div class=""><u>WOIC Docu-III Section</u>:</div>
                        <div class="col-sm-6 col-md-4 col-lg-4 row">
                            <label class="col-sm-6 col-md-4 col-lg-4 col-form-label" for="">BD/</label>
                            <div class="col-sm-6 col-md-8 col-lg-8 pt-2">
                                <input class="form-control" type="text" name="woic_docu_bdnumber">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4 row">
                            <label for="" class="col-sm-6 col-md-3 col-lg-3 col-form-label">Name</label>
                            <div class="col-sm-6 col-md-9 col-lg-9 pt-2">
                                <input class="form-control" type="text" name="woic_docu_name">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4 row">
                            <label for="" class="col-sm-6 col-md-3 col-lg-3">Rank</label>
                            <div class="col-sm-6 col-md-9 col-lg-9 pt-2">
                                <input class="form-control" type="text" name="woic_docu_rank">
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 col-lg-4 row">
                            <label for="" class="col-sm-6 col-md-5 col-lg-4 col-form-label">Signature</label>
                            <div class="col-sm-6 col-md-7 col-lg-8 pt-2">
                                <input class="form-control" type="text" name="woic_docu_sign">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4 row">
                            <label for="" class="col-sm-6 col-md-3 col-lg-3 col-form-label">Date</label>

                            <div class="col-sm-6 col-md-9 col-lg-9 pt-2">
                                <input class="form-control" type="text" name="woic_docu_date">
                            </div>

                        </div>
                    </div>
                    <div class="pt-3">
                        <p><strong><u>Verified and Database Updated</u></strong></p>
                    </div>
                    <div class="row pt-2">
                        <div class=""><u>NCOIC R&D Cell</u> :</div>
                        <div class="col-sm-6 col-md-4 col-lg-4 row">
                            <label class="col-sm-6 col-md-4 col-lg-4 col-form-label" for="">BD/</label>
                            <div class="col-sm-6 col-md-8 col-lg-8 pt-2">
                                <input class="form-control" type="text" name="ncoic_cell_bdnumber">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4 row">
                            <label for="" class="col-sm-6 col-md-3 col-lg-3 col-form-label">Name</label>
                            <div class="col-sm-6 col-md-9 col-lg-9 pt-2">
                                <input class="form-control" type="text" name="ncoic_cell_name">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4 row">
                            <label for="" class="col-sm-6 col-md-3 col-lg-3">Rank</label>
                            <div class="col-sm-6 col-md-9 col-lg-9 pt-2">
                                <input class="form-control" type="text" name="ncoic_cell_rank">
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 col-lg-4 row">
                            <label for="" class="col-sm-6 col-md-5 col-lg-4 col-form-label">Signature</label>
                            <div class="col-sm-6 col-md-7 col-lg-8 pt-2">
                                <input class="form-control" type="text" name="ncoic_cell_sign">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4 row">
                            <label for="" class="col-sm-6 col-md-3 col-lg-3 col-form-label">Date</label>

                            <div class="col-sm-6 col-md-9 col-lg-9 pt-2">
                                <input class="form-control" type="text" name="ncoic_cell_date">
                            </div>

                        </div>
                    </div>
                    <div class="row pt-2">
                        <div class=""><u>WOIC R&D Cell</u> :</div>
                        <div class="col-sm-6 col-md-4 col-lg-4 row">
                            <label class="col-sm-6 col-md-4 col-lg-4 col-form-label" for="">BD/</label>
                            <div class="col-sm-6 col-md-8 col-lg-8 pt-2">
                                <input class="form-control" type="text" name="woic_cell_bdnumber">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4 row">
                            <label for="" class="col-sm-6 col-md-3 col-lg-3 col-form-label">Name</label>
                            <div class="col-sm-6 col-md-9 col-lg-9 pt-2">
                                <input class="form-control" type="text" name="woic_cell_name">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4 row">
                            <label for="" class="col-sm-6 col-md-3 col-lg-3">Rank</label>
                            <div class="col-sm-6 col-md-9 col-lg-9 pt-2">
                                <input class="form-control" type="text" name="woic_cell_rank">
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 col-lg-4 row">
                            <label for="" class="col-sm-6 col-md-5 col-lg-4 col-form-label">Signature</label>
                            <div class="col-sm-6 col-md-7 col-lg-8 pt-2">
                                <input class="form-control" type="text" name="woic_cell_sign">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4 row">
                            <label for="" class="col-sm-6 col-md-3 col-lg-3 col-form-label">Date</label>

                            <div class="col-sm-6 col-md-9 col-lg-9 pt-2">
                                <input class="form-control" type="text" name="woic_cell_date">
                            </div>

                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>




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
