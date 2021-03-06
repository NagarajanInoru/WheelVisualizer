<?php

namespace App\Http\Controllers;

use App\ChassisModel;
use Illuminate\Http\Request;

class ChassisModelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ChassisModel  $chassisModel
     * @return \Illuminate\Http\Response
     */
    public function show(ChassisModel $chassisModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ChassisModel  $chassisModel
     * @return \Illuminate\Http\Response
     */
    public function edit(ChassisModel $chassisModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ChassisModel  $chassisModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ChassisModel $chassisModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ChassisModel  $chassisModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(ChassisModel $chassisModel)
    {
        //
    }


    public function ChassisModel_Import(){
         $in_file = public_path('/storage/tires_data/chassismodel.csv'); 

        if( !$fr = @fopen($in_file, "r") ) die("Failed to open file");
        // $fw = fopen($out_file, "w");
        while( ($data = fgetcsv($fr, 1000, ",")) !== FALSE ) {
                $chassismodel = new ChassisModel;
                $chassismodel->chassis_id = $data[0];
                $chassismodel->model_id = $data[1];
                $chassismodel->p_lt = $data[2];
                $chassismodel->tire_size = $data[3];
                $chassismodel->load_index = $data[4];
                $chassismodel->speed_index = $data[5];
                $chassismodel->tire_pressure = $data[6];
                $chassismodel->tire_size_r = $data[7];
                $chassismodel->rim_size = $data[8];
                $chassismodel->rim_size_r = $data[9];
                $chassismodel->load_index_r = $data[10];
                $chassismodel->speed_index_r = $data[11];
                $chassismodel->tire_pressure_r = $data[12];
                $chassismodel->model_laden_tp_f = $data[13];
                $chassismodel->model_laden_tp_r = $data[14];
                $chassismodel->run_flat_f = $data[15];
                $chassismodel->run_flat_r = $data[16];
                $chassismodel->extra_load_f = $data[17];
                $chassismodel->extra_load_r = $data[18];
                $chassismodel->tp_f_psi = $data[19];
                $chassismodel->tp_r_psi = $data[20];
                $chassismodel->ltp_f_psi = $data[21];
                $chassismodel->ltp_r_psi = $data[22];
                $chassismodel->save(); 
            }
        fclose($fr);
        // fclose($fw);
        return 'hiii';
    }


}
