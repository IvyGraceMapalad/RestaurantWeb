<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeModel extends Model
{
    use HasFactory;

    public function content1(){
        $content = [
        'title' => 'Klassy Cafe',
        'p1' => 'THE BEST EXPERIENCE',
        'btn' => 'Make A Reservation'
        ];
        return $content;
    }
    public function about(){

        $About =[
            'title'=>'About Us',
            'head'=>'We Leave A Delicious Memory For You ',
            'body'=>'You are allowed to use this template for commercial purposes.'
        ];
        return $About;
    }

    public function menu(){
        $Menu =[
            'title'=>'Our Menuss',
            'head'=>'Our Selection cakes with quality taste',
            'desc'=>'Chocolate cake or chocolate gâteau is a cake flavored with melted chocolate, cocoa powder, or both.',
            'foodname'=>'Chocolate Cake'
        ];
        return $Menu;
    }
    public function contacts(){
        $Contact = [
            'title' => 'Contact Us',
            'head'=> 'Here You Can Make A Reservation Or Just walkin to our cafe',
            'body'=>'For more information you can contact with us.',
            'email'=>'klassycafe12@gmail.com',
            'email1'=>'klassyCafeee@gmail.com',
            'emailTitle'=>'Emails',
            'btn1'=>'Make your Reservation',
            'number'=>'Phone Numbers',
            'table'=>'Table Reservation'
        ];
        return $Contact;
    }

}
