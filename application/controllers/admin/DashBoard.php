<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Kill3rCoder-Lapi
 * Date: 4/17/13
 * Time: 1:46 AM
 * To change this template use File | Settings | File Templates.
 */

class DashBoard extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('PrizeBondAdmin_Model');
    }

    	public function index() {
            $this->load->view('Admin_Views/CreateNewDraw');
        }

        function SetNewDraw(){
            $this->form_validation->set_rules('BondType', 'Bond Type', 'required');
            //$this->form_validation->set_rules('DrawDate', 'Draw Date', 'required');
            //$this->form_validation->set_rules('FirstPrize', 'First Prize', 'required');
            //$this->form_validation->set_rules('SecondPrize', 'Second Prize', 'required');
            //$this->form_validation->set_rules('ThirdPrize', 'Third Prize', 'required');

            $this->form_validation->set_error_delimiters('<br /><span class="error">', '</span>');

            if ($this->form_validation->run() == FALSE) // validation hasn't been passed
            {
                $this->load->view('Admin_Views/CreateNewDraw');
            }
            else // passed validation proceed to post success logic
            {
                // build array for the model

                $form_data = array(
                    'PBD_PBType' => set_value('BondType'),
                    'PBD_DrawDate' => set_value('DrawDate'),
                    'PBD_First' => set_value('FirstPrize'),
                    'PBD_Second' => set_value('SecondPrize'),
                    'PBD_Third' => set_value('ThirdPrize')
                );

                // run insert model to write data to db

                if ($this->PrizeBondAdmin_Model->SaveForm($form_data) == TRUE) // the information has therefore been successfully saved in the db
                {
                    redirect('admin/DashBoard/success');   // or whatever logic needs to occur
                }
                else
                {
                    echo 'An error occurred saving your information. Please try again later';
                    // Or whatever error handling is necessary
                }
            }
        }

    function success()
    {
        echo 'this form has been successfully submitted with all validation being passed. All messages or logic here. Please note
			sessions have not been used and would need to be added in to suit your app';
    }

}