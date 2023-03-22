<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use RealRashid\SweetAlert\Facades\Alert;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\Client;
use App\Models\Workshop_information;
use App\Models\WorkshopFee;
use App\Models\Workshop_cost;


class MgtstratUController extends Controller
{
    public function index()
    {
        return view('form.components.mgtstratu_workshops.index');
    }


    /* Save Record */
    public function store(Request $request)
    {
        // $request->validate([
        //     'client_id'   => 'required|integer',
        //     // 'engagement_title'   => 'required',
        // ]);

        DB::beginTransaction();
        try {
            // $config = ['table'=>'customized_engagement_forms', 'length'=>12, 'field'=>'cstmzd_eng_form_id', 'prefix'=>'CSTMZD-'];
            $config = ['table'=>'workshop_informations', 'length'=>12, 'field'=>'workshop_id', 'prefix'=>'CSTMZD-'];
            $id_budget_form = IdGenerator::generate($config);

            $workshop_form = new Workshop_information();
            $workshop_form->workshop_id             = $id_budget_form;
            // $workshop_form->status                = $request->status;
            // $workshop_form->ga_percent            = $request->ga_percent;
            // $workshop_form->client_id             = (int)$request->client_id;
            $workshop_form->engagement_title        = $request->engagement_title;
            $workshop_form->workshop_title          = $request->workshop_title;
            $workshop_form->cluster                 = $request->cluster;
            $workshop_form->intelligence            = $request->intelligence;
            $workshop_form->pax_number              = $request->pax_number;
            // $workshop_form->batch_number          = $request->batch_number;
            // $workshop_form->session_number        = $request->session_number;
            $workshop_form->program_dates           = $request->program_dates;
            $workshop_form->program_start_time      = $request->program_start_time;
            $workshop_form->program_end_time        = $request->program_end_time;
            
            // $workshop_form->core_area             = $request->core_area;
            // $workshop_form->workshop_fees_total   = $request->workshop_fees_total;
            $workshop_form->save();

            $config_workshop_fee = ['table'=>'workshop_fees', 'length'=>12, 'field'=>'workshop_id', 'prefix'=>'CSTMZD-'];
            $workshop_fee_id_generator = IdGenerator::generate($config_workshop_fee);
            $workshop_fee_form = new WorkshopFee();
            $workshop_fee_form->workshop_id                                     =    $workshop_fee_id_generator;
            $workshop_fee_form->customizationFee_packageFees                    =    $request->ef_customizationFeePfv;
            $workshop_fee_form->customizationFee_sessions                       =    $request->ef_customizationFeeNos;
            $workshop_fee_form->customizationFee_nightShift_weekendsHolidays    =    $request->ef_customizationFeeNsw;
            $workshop_fee_form->customizationFee_notes                          =    $request->customizationFee_notes;
            $workshop_fee_form->customizationFeeSubtotal_notes                  =    $request->customizationFeeSubtotal_notes;
            $workshop_fee_form->package1_packageFees                            =    $request->ef_package1FeePfv;
            $workshop_fee_form->package1_sessions                               =    $request->ef_package1FeeNos;
            $workshop_fee_form->package1_nightShift_weekendsHolidays            =    $request->ef_package1FeeNsw;
            $workshop_fee_form->package1_notes                                  =    $request->package1_notes;
            $workshop_fee_form->package2_packageFees                            =    $request->ef_package2FeePfv;
            $workshop_fee_form->package2_sessions                               =    $request->ef_package2FeeNos;
            $workshop_fee_form->package2_nightShift_weekendsHolidays            =    $request->ef_package2FeeNsw;
            $workshop_fee_form->package2_notes                                  =    $request->package2_notes;
            $workshop_fee_form->producer_packageFees                            =    $request->ef_producerFeePfv;
            $workshop_fee_form->producer_sessions                               =    $request->ef_producerFeeNoc;
            $workshop_fee_form->producer_nightShift_weekendsHolidays            =    $request->ef_producerFeeNsw;
            $workshop_fee_form->producer_notes                                  =    $request->producer_notes;
            $workshop_fee_form->programSubtotal_notes                           =    $request->programSubtotal_notes;
            $workshop_fee_form->totalStandardFees_notes                         =    $request->totalStandardFees_notes;
            $workshop_fee_form->discount_given                                  =    $request->mg_inpt_dsct;
            $workshop_fee_form->discount_notes                                  =    $request->discount_notes;
            $workshop_fee_form->totalPackage                                    =    $request->mg_input_totalPackages;
            $workshop_fee_form->totalPackage_notes                              =    $request->totalPackage_notes;
            $workshop_fee_form->save();




            $config_workshop_cost = ['table'=>'workshop_costs', 'length'=>12, 'field'=>'workshop_id', 'prefix'=>'CSTMZD-'];
            $workshop_cost_id_generator = IdGenerator::generate($config_workshop_cost);

            $workshop_cost_form = new Workshop_cost();
            $workshop_cost_form->workshop_id                        =  $workshop_cost_id_generator;
            $workshop_cost_form->commission_sales                   =  $request-> commission_sales_HF;
            $workshop_cost_form->commission_sales_rooster           =  $request-> com_sale_rooster;
            $workshop_cost_form->commission_referral                =  $request-> commission_referral;
            $workshop_cost_form->commission_referral_rooster        =  $request-> com_rooster;
            $workshop_cost_form->eng_mng_hourfee                    =  $request-> engagementMan_HF;
            $workshop_cost_form->eng_mng_rooster                    =  $request-> engMan_rooster;
            // $workshop_cost_form->cstmzdfee_hourfee                  =  $request-> customizationFee_hourfee;
            // $workshop_cost_form->cstmzdfee_Numfee                   =  $request-> customizationFee_numfee;
            $workshop_cost_form->cstmzdefee_rooster                 =  $request-> customizationFee_rooster;
            $workshop_cost_form->creatorFee_hourfee                 =  $request-> creatorfee_hourfee;
            $workshop_cost_form->creatorFee_Numfee                  =  $request-> creatorfee_Noh;
            $workshop_cost_form->creatorFee_Rooster                 =  $request-> creatorfee_rooster;
            $workshop_cost_form->consultationdesignsub_rooster      =  $request-> consulationdesignsubtotal;
            $workshop_cost_form->LeadF_hourfee                      =  $request-> LeadFacilitator_HF;
            $workshop_cost_form->LeadF_numfee                       =  $request-> LeadFacilitator_noh;
            $workshop_cost_form->LeadF_nswh                         =  $request-> LeadFacilitator_nswh;
            $workshop_cost_form->LeadF_rooster                      =  $request-> LeadFacilitator_rooster;
            $workshop_cost_form->moderator_hourfee                  =  $request-> moderator_HF;
            $workshop_cost_form->moderator_Numfee                   =  $request-> moderator_noh;
            $workshop_cost_form->moderator_nswh                     =  $request-> moderator_nswh;
            $workshop_cost_form->modmoderator_rooster               =  $request->moderator_rooster;
            $workshop_cost_form->producer_hourfee                   =  $request-> producer_HF;
            $workshop_cost_form->producer_numfee                    =  $request-> producer_noh;
            $workshop_cost_form->producer_nswh                      =  $request-> producer_nswh;
            $workshop_cost_form->producer_rooster                   =  $request-> producer_rooster;
            $workshop_cost_form->programsubtotal_rooster            =  $request-> programsub_rooster;
            $workshop_cost_form->offprogram_hourfee                 =  $request-> offprogram_HF;
            $workshop_cost_form->offprogram_numfee                  =  $request-> offprogram_noh;
            $workshop_cost_form->offprogram_rooster                 =  $request-> offprogram_rooster;
            $workshop_cost_form->programexpenses_hourfee            =  $request-> miscellaneous_HF;
            $workshop_cost_form->programexpenses_rooster            =  $request-> miscellaneous_rooster;
            $workshop_cost_form->Costtotal_rooster                  =  $request-> total_rooster;
               
            $workshop_cost_form->save();

            DB::commit();
            // info('This is some useful information.');
            return redirect()->route('form/mgtstratu_workshops/index')->with('success', 'Added Successfully!');
        } catch(\Exception $e){
            DB::rollback();
            Alert::error('Data added fail','Error');
            return redirect()->back();
        }

        // return redirect('form/customizedEngagement/save');
        
    }

    public function newRecord()
    {
        $companyList = Client::orderBy('company_name')->get();
        return view('form.mgtstratu_workshops', compact('companyList'));
    }
}
