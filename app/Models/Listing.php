<?php
    namespace App\Models;

    class Listing {
        public static function all() {
            return [
                [
                    'id' => 1,
                    'title' => 'titelo',
                    'desc' => 'descriptiono'
                ],
                [
                    'id' => 2,
                    'title' => 'titelo2',
                    'desc' => 'descriptiono2'
                ]
                ];
        }

        public static function find($id) {
            $listings = self::all();

            foreach($listings as $listing){
                if($listing['id'] == $id) return $listing;
            }
        }
    }
