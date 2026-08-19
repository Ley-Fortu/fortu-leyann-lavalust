<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class StudentController extends Controller {

    public function __construct() {
        parent::__construct();
        $this->call->helper('url'); // para gumana ang site_url()
    }

    public function index() {
        $this->call->view('student/index');
    }

    public function profile() {
        $data['student'] = [
            'student_id' => '2023-00735',
            'name'       => 'Leyann A. Fortu',
            'course'     => 'BS Information Technology',
            'year'       => '3rd Year',
            'section'    => 'F2',
            'email'      => 'leyannfortu@gmail.com'
        ];
        $this->call->view('student/profile', $data);
    }
}
