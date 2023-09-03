<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateP58modcsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('p58modcs', function (Blueprint $table) {
            $table->increments('id');
            $table->uuid('uuid')->unique();

            $table->string('date_duration_from', 120)->nullable();
            $table->string('date_duration_to', 120)->nullable();

            $table->string('reason_annual', 120)->nullable();
            $table->string('special_reason', 120)->nullable();

            $table->string('job_info_bd', 120)->nullable();
            $table->string('job_info_rank', 120)->nullable();
            $table->string('job_info_name', 120)->nullable();
            $table->string('job_info_cccupation', 120)->nullable();
            $table->string('job_info_date_join', 120)->nullable();
            $table->string('job_info_entry_no', 120)->nullable();
            $table->string('job_duration_year', 120)->nullable();
            $table->string('job_duration_month', 120)->nullable();
            $table->string('job_info_base', 120)->nullable();
            $table->string('stay_duration_year', 120)->nullable();
            $table->string('stay_duration_month', 120)->nullable();
            $table->string('area_duration_year', 120)->nullable();
            $table->string('area_duration_month', 120)->nullable();

            $table->string('current_duties', 120)->nullable();

            $table->json('base_unit', 120)->nullable();
            $table->json('des_duties', 120)->nullable();
            $table->json('duties_from', 120)->nullable();
            $table->json('duties_to', 120)->nullable();

            $table->string('med_details_catagory', 120)->nullable();
            $table->string('med_details_date_of_birth', 120)->nullable();
            $table->string('med_details_signature', 120)->nullable();
            $table->string('med_details_current_weight', 120)->nullable();
            $table->string('med_details_age', 120)->nullable();
            $table->string('med_details_extra_weight', 120)->nullable();
            $table->string('med_details_height', 120)->nullable();
            $table->string('med_details_qualified_unqualified', 120)->nullable();

            $table->string('signature_gsto_physical', 120)->nullable();
            $table->string('first_trimester_date', 120)->nullable();
            $table->string('first_tri_result', 120)->nullable();
            $table->string('second_trimester_date', 120)->nullable();
            $table->string('sec_tri_result', 120)->nullable();
            $table->string('third_trimester_date', 120)->nullable();
            $table->string('thi_tri_result', 120)->nullable();
            $table->string('forth_trimester_date', 120)->nullable();
            $table->string('for_tri_result', 120)->nullable();

            $table->string('signature_gsto_firing', 120)->nullable();
            $table->string('fir_rif_result', 120)->nullable();
            $table->string('fir_smg_result', 120)->nullable();
            $table->string('fir_pis_result', 120)->nullable();
            $table->string('sec_rif_result', 120)->nullable();
            $table->string('sec_smg_result', 120)->nullable();
            $table->string('sec_pis_result', 120)->nullable();
            $table->string('thi_rif_result', 120)->nullable();
            $table->string('thi_smg_result', 120)->nullable();
            $table->string('thi_pis_result', 120)->nullable();
            $table->string('fir_comment', 120)->nullable();
            $table->string('sec_comment', 120)->nullable();
            $table->string('thi_comment', 120)->nullable();
            $table->string('date_fir_bottom', 120)->nullable();
            $table->string('signature_modc_air', 120)->nullable();


            $table->string('appropriate_box', 120)->nullable();

            $table->string('knowledge_radio', 120)->nullable();
            $table->string('competence_radio', 120)->nullable();
            $table->string('dutiful_radio', 120)->nullable();
            $table->string('obedience_radio', 120)->nullable();
            $table->string('responsibility_radio', 120)->nullable();
            $table->string('reliability_radio', 120)->nullable();
            $table->string('fitness_radio', 120)->nullable();
            $table->string('honest_radio', 120)->nullable();
            $table->string('enthusiasm_radio', 120)->nullable();
            $table->string('supervision_radio', 120)->nullable();

            $table->string('total_marks', 120)->nullable();
            $table->string('classification', 120)->nullable();

            $table->string('grade_ten', 120)->nullable();
            $table->string('grade_nine', 120)->nullable();
            $table->string('grade_eight', 120)->nullable();
            $table->string('grade_seven', 120)->nullable();
            $table->string('grade_six', 120)->nullable();
            $table->string('grade_five', 120)->nullable();
            $table->string('grade_four', 120)->nullable();
            $table->string('grade_three', 120)->nullable();
            $table->string('grade_two', 120)->nullable();

            $table->string('fitness_promotion_radio', 120)->nullable();

            $table->string('general_comment', 120)->nullable();
            $table->string('general_officer_date', 120)->nullable();
            $table->string('general_officer_sign', 120)->nullable();
            $table->string('general_officer_name', 120)->nullable();
            $table->string('general_officer_rank', 120)->nullable();

            $table->string('signature_appraisee_date', 120)->nullable();
            $table->string('signature_of_appraisee', 120)->nullable();

            $table->string('remarks_reviewing_officer', 120)->nullable();
            $table->string('reviewing_officer_date', 120)->nullable();
            $table->string('reviewing_officer_sign', 120)->nullable();
            $table->string('reviewing_officer_name', 120)->nullable();
            $table->string('reviewing_officer_rank', 120)->nullable();

            $table->string('remarks_commanding_officer', 120)->nullable();
            $table->string('commanding_officer_date', 120)->nullable();
            $table->string('commanding_officer_sign', 120)->nullable();
            $table->string('commanding_officer_name', 120)->nullable();
            $table->string('commanding_officer_rank', 120)->nullable();

            $table->string('ncoic_docu_bd', 120)->nullable();
            $table->string('ncoic_docu_name', 120)->nullable();
            $table->string('ncoic_docu_rank', 120)->nullable();
            $table->string('ncoic_docu_sign', 120)->nullable();
            $table->string('ncoic_docu_date', 120)->nullable();
            $table->string('woic_docu_bd', 120)->nullable();
            $table->string('woic_docu_name', 120)->nullable();
            $table->string('woic_docu_rank', 120)->nullable();
            $table->string('woic_docu_sign', 120)->nullable();
            $table->string('woic_docu_date', 120)->nullable();
            $table->string('ncoic_rnd_docu_bd', 120)->nullable();
            $table->string('ncoic_rnd_docu_name', 120)->nullable();
            $table->string('ncoic_rnd_docu_rank', 120)->nullable();
            $table->string('ncoic_rnd_docu_sign', 120)->nullable();
            $table->string('ncoic_rnd_docu_date', 120)->nullable();
            $table->string('woic_rnd_docu_bd', 120)->nullable();
            $table->string('woic_rnd_docu_name', 120)->nullable();
            $table->string('woic_rnd_docu_rank', 120)->nullable();
            $table->string('woic_rnd_docu_sign', 120)->nullable();
            $table->string('woic_rnd_docu_date', 120)->nullable();

            $table->string('created_by', 120)->nullable();
            $table->string('updated_by', 120)->nullable();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('p58modcs');
    }
}
