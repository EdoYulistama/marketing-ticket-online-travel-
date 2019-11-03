<?php

namespace App\Models\Marketing;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;


class Staff extends Model
{
    protected $table = 'staffs';

    protected $fillable = 
        [
            'uid',
            'email',
            'password',
            'first_name',
            'last_name',
            'role',
            'phone_number',
            'address',
            'image',
            'staff_status',
            'email_verified_at',
            'activated_at',
            'non_actived_at',
            'suspended_at',
            'deleted_at',
            'remember_token',
            'created_at',
            'updated_at'
        ];
    
    private function getUser($email)
    {
        return $this->where('email', $email)->first();
    }

    private function _cek_status($data)
    {
        if ($data['staff_status'] == 'active') {
            return true;
        }
        return false;
    }
        
    private function _create($data)
        {
            return $this->create([
                'uid' => (string) Str::uuid(),
                'first_name' => $data['first_name'],
                'email' => $data['email'],
                'phone_number' => $data['phone_number'],
                'role' => $data['role'],
                // 'parent_id' => $data['parent_id'],
                'password' => Hash::make($data['password']),
            ]);
        }

        public function signup($data)
        {
            $this->_create($data);
            return redirect('/auth/signup')->with('alert', 'User berhasil dibuat')->with('css', 'alert-success');
        }

        public function signin($data)
        {
            // $validator = __check_validation('auth_signin', $data);
            // if (!$validator->fails()) {
                $user = $this->getUser($data['email']);
                if ($user) {
                    if ($this->_cek_status($user)) {
                        if (Hash::check($data['password'], $user['password'])) {
                            Session::put('first_name', $user['first_name']);
                            Session::put('email', $user['email']);
                            Session::put('role', $user['role']);
                            Session::put('image', $user['image']);
                            Session::put('login', true);
                            Session::put('locked', false);
                            switch ($user['role']) {
                                case 'SUPPORT':
                                    return redirect('support/dashboard');
                                case 'ACCOUNTING':
                                    return redirect('accounting/dashboard');
                                case 'MARKETING':
                                    return redirect('marketing/dashboard');
                                case 'ADMIN':
                                    return redirect('admin/dashboard');
                                default:
                                    Session::flush();
                                    return redirect('auth/signin');
                            }
                            return redirect('support/dashboard');
                        }
                        return back()->withErrors('Password atau email salah');
                    }
                    return back()->withErrors('Akun anda tidak aktif');
                }
                return back()->withErrors('User tidak ditemukan');
            // }
            // return back()
            //     ->withErrors($validator)
            //     ->withInput();
        }

}
