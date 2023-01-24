<?php
namespace App\Libraries;

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ClientAPI
 *
 * @author user
 */
class Apps {

    public function __construct()
    {
        // Instantiate the CI libraries so we can work with them

        if(isset($_COOKIE['SSOID']))
        {
            $cookie = base64_decode($_COOKIE['SSOID']);
            $crop   = explode('+', $cookie);
            $email  = explode('@', $crop[1]);

            $this->userId       = $crop[0];
            $this->userEmail    = $crop[1];
            $this->userFullname = $crop[2];
            $this->userName     = $email[0];

            var_dump($crop); die;
        }

    }

    public function info()
    {
        var_dump(isset($_COOKIE['SSOID'])); die;

        // if(isset($_COOKIE['SSOID']))
        // {
        //     $cookie = base64_decode($_COOKIE['SSOID']);
        //     $crop   = explode('+', $cookie);
        //     $email  = explode('@', $crop[1]);

        //     $userId       = $crop[0];
        //     $userEmail    = $crop[1];
        //     $userFullname = $crop[2];
        //     $userName     = $email[0];

        //     var_dump($crop); die;
        // }


        // $data['apps_brand']         = 'ESS';
        // $data['apps_name']          = 'Employee Self Service';
        // $data['apps_company']       = 'PT. Mora Telematika Indonesia';
        // $data['apps_company_brand'] = 'Moratelindo';

        // // Get Data SSO
        // $data['apps_user_id']       = $userId;
        // $data['apps_user_name']     = $userName;
        // $data['apps_user_email']    = $userEmail;
        // $data['apps_user_fullname'] = $userFullname;

        // // Get Data API HRIS
        // $json = file_get_contents('http://morahrd.moratelindo.co.id/karyawan/index.php/employeeRestserver/employee/id/'.$this->userId);
        // $obj = json_decode($json);

        // $data['obj_employee_id']    = $obj->employee_id;
        // $data['obj_employee_no']    = $obj->employee_no;
        // $data['obj_fullname']       = $obj->fullname;
        // $data['obj_photo']          = $obj->photo;
        // $data['obj_position_title'] = $obj->position_title;
        // $data['obj_level']          = $obj->level;
        // $data['obj_grade']          = $obj->grade;
        // $data['obj_department']     = $obj->department;
        // $data['obj_location']       = $obj->location;

        // $user = $this->ci->admin_model->getUserInfo();
        // if(empty($user)){
        //     $data['is_allowed'] = 0;
        // } else {
        //     $data['is_allowed'] = 1;
        //     $data['app_user_role'] = $user->ROLE_ID;
        //     $data['app_user_category'] = $user->CATEGORY;
        //     $data['app_user_division'] = $user->DIVISI;
        // }

        return $data;
    }

    public function getYearsInGroup($employee_status, $join_date, $termination_date)
    {
        //TODO: Calculate Years in Group - Employee Information
        if ($employee_status == 0) {
            $today = strtotime($termination_date);
        } else {
            $today = strtotime(date('Y-m-d'));
        }
        $joindate = strtotime($join_date);

        if ($joindate != null) {
            $timeDiff = abs($today - $joindate);
            $numberDays = intval($timeDiff / 86400);  // 86400 seconds in one day AND you might want to convert to integer

            if ($numberDays > 365) {
                $year = intval($numberDays / 365);

                $modulo_year = intval($numberDays % 365);
                $month = round($modulo_year / 30);

                $day = intval($modulo_year % 30);
            } else {
                $year = 0;
                $month = round($numberDays / 30);
                $day = intval($numberDays % 30);
            }

            $YiG = $year . ' Year ' . $month . ' Month ' . $day . ' Day';
        } else {
            $YiG = 'N/A';
        }

        return $YiG;
    }

    public function time_elapsed_string($ptime)
    {
        $etime = time() - $ptime;

        if ($etime < 1)
        {
            return '0 seconds';
        }

        $a = array( 365 * 24 * 60 * 60  =>  'year',
            30 * 24 * 60 * 60  =>  'month',
            24 * 60 * 60  =>  'day',
            60 * 60  =>  'hour',
            60  =>  'minute',
            1  =>  'second'
        );
        $a_plural = array( 'year'   => 'years',
            'month'  => 'months',
            'day'    => 'days',
            'hour'   => 'hours',
            'minute' => 'minutes',
            'second' => 'seconds'
        );

        foreach ($a as $secs => $str)
        {
            $d = $etime / $secs;
            if ($d >= 1)
            {
                $r = round($d);
                return $r . ' ' . ($r > 1 ? $a_plural[$str] : $str) . ' ago';
            }
        }
    }
    
    //source : https://goo.gl/3qV6v6
    function getWorkingDays($startDate, $endDate)
    {
        $begin = strtotime($startDate);
        $end   = strtotime($endDate);
        if ($begin > $end) {

            return 0;
        } else {
            $no_days  = 0;
            while ($begin <= $end) {
                $what_day = date("N", $begin);
                if (!in_array($what_day, array(6,7)) ) // 6 and 7 are weekend
                    $no_days++;
                $begin += 86400; // +1 day
            };

            return $no_days;
        }
    }

}