<?php

namespace App\Models\Marketing;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = ['nama','email','type_users'];

    //start lightbox
    //all
    public function users()
    {
        $users = $this->all();
        return $users;
    }
    //end

    //start summaryusers
    public function summaryusers()
    {
        $users = $this->all();

        $all = [];
        $active = [];
        $nonactive = [];
        $suspend = [];
        $y = date("d-m-Y h:i:sa");

        foreach ($users as $user) {
            $all[] = $user->name;

            if ($user->actived_at != null) {
                $active[] = $user->name;
            }

            if ($user->suspended_at != null) {
                $suspend[] = $user->name;
            }

            if ($user->non_actived_at != null) {
                $nonactive[] = $user->name;
            }
        }

        $result = array(
            'nonactive' => count($nonactive),
            'suspend' => count($suspend),
            'active' => count($active),
            'all' => count($all),
            'y' => ($y)
        );
        return $result;
    }
    //end summaryusers

    //start summaryusersDay
    public function summaryusersDay($type_users)
    {
        $start = date("d");

        if ($start <= "07") {
            $start = date("Y-m-01");
            $end = date("Y-m-7");
            $users = $this->whereBetween('created_at', [$start, $end])
                ->where('type_users', '=', $type_users)
                ->get();
        }

        if ($start >= "08" && $start <= "14") {
            $start = date("Y-m-08");
            $end = date("Y-m-14");
            $users = $this->whereBetween('created_at', [$start, $end])
                ->where('type_users', '=', $type_users)
                ->get();
        }

        // if ($start >= "15" && $start <= "21") {
        //     $start = date("Y-m-15");
        //     $end = date("Y-m-21");
        //     $users = $this->whereBetween('created_at', [$start, $end])->get();
        // }

        if ($start >= "22" && $start <= "28") {
            $start = date("Y-m-22");
            $end = date("Y-m-28");
            $users = $this->whereBetween('created_at', [$start, $end])
                ->where('type_users', '=', $type_users)
                ->get();
        }

        if ($start >= "29" && $start <= "31") {
            $start = date("Y-m-29");
            $end = date("Y-m-t");
            $users = $this->whereBetween('created_at', [$start, $end])
                ->where('type_users', '=', $type_users)
                ->get();
        }

        $all = [];
        $active = [];
        $suspend = [];
        $nonactive = [];
        foreach ($users as $user) {
            $all[] = $user->first_name;

            if ($user->activated_at != null) {
                $active[] = $user->first_name;
            }

            if ($user->suspended_at != null) {
                $suspend[] = $user->first_name;
            }

            if ($user->non_activated_at != null) {
                $nonactive[] = $user->first_name;
            }
        }

        $result = array(
            'nonactive' => count($nonactive),
            'suspend' => count($suspend),
            'active' => count($active),
            'all' => count($all)
        );
        return $result;
    }
    //end summaryusersDayMember
    
    //end lightbox
    //-------------------------//
    

    //-------------------------//
    //start chart

    //start chart usersDay
    public function usersDay($type_users)
    {

        // $users = $this->all();
        $users = $this->where('type_users', '=', $type_users)
            ->get();

        $all = [];
        $active = [];
        $nonactive = [];
        $suspend = [];

        $start = date("d");

        if ($start <= "07") {

            for ($a = date("Y-m-01"); $a <= date("Y-m-07"); $a++) {
                foreach ($users as $user) {
                    if (date("Y-m-d", strtotime($user->created_at)) == $a) {

                        $all[$a][] = $user->first_name;

                        if ($user->actived_at != null) {
                            $active[$a][] = $user->first_name;
                        } else {
                            $active[$a] = array();
                        }

                        if ($user->suspended_at != null) {
                            $suspend[$a][] = $user->first_name;
                        } else {
                            $suspend[$a] = array();
                        }

                        if ($user->non_actived_at != null) {
                            $nonactive[$a][] = $user->first_name;
                        } else {
                            $nonactive[$a] = array();
                        }
                    } elseif (empty($all[$a])) {
                        $all[$a] = array();
                        $active[$a] = array();
                        $nonactive[$a] = array();
                        $suspend[$a] = array();
                    }
                }
                $result[] = array(
                    'all' => count($all[$a]),
                    'active' => count($active[$a]),
                    'nonactive' => count($nonactive[$a]),
                    'suspend' => count($suspend[$a]),
                    'y' => $a,
                );
            }
        }

        if ($start >= "08" && $start <= "14") {

            for ($a = date("Y-m-08"); $a <= date("Y-m-14"); $a++) {
                foreach ($users as $user) {
                    if (date("Y-m-d", strtotime($user->created_at)) == $a) {

                        $all[$a][] = $user->first_name;

                        if ($user->actived_at != null) {
                            $active[$a][] = $user->first_name;
                        } else {
                            $active[$a] = array();
                        }

                        if ($user->suspended_at != null) {
                            $suspend[$a][] = $user->first_name;
                        } else {
                            $suspend[$a] = array();
                        }

                        if ($user->non_actived_at != null) {
                            $nonactive[$a][] = $user->first_name;
                        } else {
                            $nonactive[$a] = array();
                        }
                    } elseif (empty($all[$a])) {
                        $all[$a] = array();
                        $active[$a] = array();
                        $nonactive[$a] = array();
                        $suspend[$a] = array();
                    }
                }
                $result[] = array(
                    'all' => count($all[$a]),
                    'active' => count($active[$a]),
                    'nonactive' => count($nonactive[$a]),
                    'suspend' => count($suspend[$a]),
                    'y' => $a,
                );
            }
        }

        if ($start >= "15" && $start <= "21") {

            for ($a = date("Y-m-15"); $a <= date("Y-m-21"); $a++) {
                foreach ($users as $user) {
                    if (date("Y-m-d", strtotime($user->created_at)) == $a) {

                        $all[$a][] = $user->first_name;

                        if ($user->actived_at != null) {
                            $active[$a][] = $user->first_name;
                        } else {
                            $active[$a] = array();
                        }

                        if ($user->suspended_at != null) {
                            $suspend[$a][] = $user->first_name;
                        } else {
                            $suspend[$a] = array();
                        }

                        if ($user->non_actived_at != null) {
                            $nonactive[$a][] = $user->first_name;
                        } else {
                            $nonactive[$a] = array();
                        }
                    } elseif (empty($all[$a])) {
                        $all[$a] = array();
                        $active[$a] = array();
                        $nonactive[$a] = array();
                        $suspend[$a] = array();
                    }
                }
                $result[] = array(
                    'all' => count($all[$a]),
                    'active' => count($active[$a]),
                    'nonactive' => count($nonactive[$a]),
                    'suspend' => count($suspend[$a]),
                    'y' => $a,
                );
            }
        }

        if ($start >= "22" && $start <= "28") {

            for ($a = date("Y-m-22"); $a <= date("Y-m-28"); $a++) {
                foreach ($users as $user) {
                    if (date("Y-m-d", strtotime($user->created_at)) == $a) {

                        $all[$a][] = $user->first_name;

                        if ($user->actived_at != null) {
                            $active[$a][] = $user->first_name;
                        } else {
                            $active[$a] = array();
                        }

                        if ($user->suspended_at != null) {
                            $suspend[$a][] = $user->first_name;
                        } else {
                            $suspend[$a] = array();
                        }

                        if ($user->non_actived_at != null) {
                            $nonactive[$a][] = $user->first_name;
                        } else {
                            $nonactive[$a] = array();
                        }
                    } elseif (empty($all[$a])) {
                        $all[$a] = array();
                        $active[$a] = array();
                        $nonactive[$a] = array();
                        $suspend[$a] = array();
                    }
                }
                $result[] = array(
                    'all' => count($all[$a]),
                    'active' => count($active[$a]),
                    'nonactive' => count($nonactive[$a]),
                    'suspend' => count($suspend[$a]),
                    'y' => $a,
                );
            }
        }

        if ($start >= "29" && $start <= "31") {

            for ($a = date("Y-m-29"); $a <= date("Y-m-t"); $a++) {
                foreach ($users as $user) {
                    if (date("Y-m-d", strtotime($user->created_at)) == $a) {

                        $all[$a][] = $user->first_name;

                        if ($user->actived_at != null) {
                            $active[$a][] = $user->first_name;
                        } else {
                            $active[$a] = array();
                        }

                        if ($user->suspended_at != null) {
                            $suspend[$a][] = $user->first_name;
                        } else {
                            $suspend[$a] = array();
                        }

                        if ($user->non_actived_at != null) {
                            $nonactive[$a][] = $user->first_name;
                        } else {
                            $nonactive[$a] = array();
                        }
                    } elseif (empty($all[$a])) {
                        $all[$a] = array();
                        $active[$a] = array();
                        $nonactive[$a] = array();
                        $suspend[$a] = array();
                    }
                }
                $result[] = array(
                    'all' => count($all[$a]),
                    'active' => count($active[$a]),
                    'nonactive' => count($nonactive[$a]),
                    'suspend' => count($suspend[$a]),
                    'y' => $a,
                );
            }
        }
        return $result;
    }
    //end chart usersDay

}
