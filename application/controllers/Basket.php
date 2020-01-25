<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Basket extends CI_Controller {

	public function add()
	{
		$data['page'] = 'Add Basket';
		$this->load->view('basket',$data);
	}
	function total()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('R01','Red Wigdet','required|integer');
		$this->form_validation->set_rules('G01','Green Wigdet','required|integer');
		$this->form_validation->set_rules('B01','Blue Wigdet','required|integer');
        if ($this->form_validation->run() == FALSE) {
            
			$data=array(
			
				'errors'=>validation_errors(),
			);
			$this->session->set_flashdata($data);
			redirect('Basket/add');
		
        }
		else {
			$redWidget   = $this->input->post('R01');
			$greenWidget = $this->input->post('G01');
			$blueWidget  = $this->input->post('B01');
			
			$totalCost   =  ($redWidget * 32.95) + ($greenWidget * 24.95) + ($blueWidget*7.95);
			
			if($redWidget > 1){
				$totalCost= $totalCost - 16.47;		
			}
			
			$delivery = 0;
			if($totalCost >= 90) {
				$delivery = 0;
			}
			else if($totalCost < 90 && $totalCost >= 50) {
				$delivery = 2.95;
			}
			else if($totalCost < 50) {
				$delivery = 4.95;
			}
			
			$totalCost= $totalCost + $delivery ; 
			
			$success = "Red Widget = ".$redWidget.", Green Widget = ".$greenWidget.", Blue Widget = ".$blueWidget." <br>";
			$success .= "Total Cost = ".$totalCost;
			$this->session->set_flashdata('success',$success);
			redirect('Basket/add');
		}
	}
}
