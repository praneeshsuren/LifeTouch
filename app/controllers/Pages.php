<?php
class Pages extends Controller
{
    private $pagesModel;

    public function __construct()
    {
        $this->pagesModel = $this->model('M_Pages');
    }

    public function index() {}

    public function login()
    {
        $this->view('login');
    }

    public function trainer()
    {
        $this->view('trainer-dashboard');
    }

    public function manager()
    {
        $this->view('manager/manager_dashboard');
    }
    public function announcement()
    {
        $this->view('manager/announcement');
    }
    public function announcement_main()
    {
        $this->view('manager/announcement_main');
    }
    public function report()
    {
        $this->view('manager/report');
    }
    public function report_main()
    {
        $this->view('manager/report_main');
    }
    public function member()
    {
        $this->view('manager/member');
    }
    public function member_view()
    {
        $this->view('manager/member_view');
    }
    public function member_edit()
    {
        $this->view('manager/member_edit');
    }
    public function member_create()
    {
        $this->view('manager/member_create');
    }

    public function test()
    {
        $users = $this->pagesModel->getPages();

        $data = [
            'users' => $users
        ];

        $this->view('test', $data);
    }
}
