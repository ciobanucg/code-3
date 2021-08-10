<?php

/**
 * Created by claudiuc
 * Date: 08/08/2021 01:57
 * Updated: 08/08/2021 02:32
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
    public function index() {

        $this->load->model('ModHome');

        $xyz = array();
        $xyz["key"] = "value";
        $xyz["key2"] = 1.83;
        $xyz["key3"] = 67;

        $this->ModHome->addUser($xyz);
        
        $variableName = array();
        $variableName['key'] = "value";
        
        $data["Name"] = 'Random Name';
        $data["Surname"] = "Surname";
        $data["Dob"] = "08/08/1984";
        $data["City"] = 'Random City';
        $data["Country"] = 'Random Country';
        $date["Email"] = "namesurname@email.com";
        $data["University"] = 'Igra University';
        $data["CreatedTime"] = "08/08/2021 02:16:00";
        $data["LastUpdatedTime"] = "08/08/2021 02:16:00";

        $data['array'] = array(2,3,4,5);
        
        $this->load->view('home', $data);
    }

    public function anotherMethod() {
        echo 'working!';
    }

}