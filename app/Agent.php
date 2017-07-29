<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Order;
use GuzzleHttp\Client; //for calling http requests


class Agent extends Model
{
    protected $hidden=['created_at','updated_at'];

    public function orders(){
        return $this->hasMany(Order::class);
    }

    public static function findAgent( $order){
        //returns agent id
        $user=User::find($order->user_id);
        $totalAgent=static::count();
        $eid=-1;
        $distance=PHP_INT_MAX;

        for($i=1;$i<=$totalAgent;$i++) {
            $agent = static::find($i);
            if ($agent->free == 1) {
                $agent->free = 0;
                return $i;
            }else{
                $d=static::getDistance($user->lattitude,$user->longitude,$agent->lattitude,$agent->longitude);
                if($d<$distance)
                {
                    $distance=$d;
                    $eid=$i;
                }
//               echo "distance: ".$d."<br>";
            }
        }
//        dd("eid:".$eid." dis:".$distance);
        return $eid;
    }
    private static function getDistance($lat1,$long1,$lat2,$long2){
        $client = new Client();
        $uri="https://maps.googleapis.com/maps/api/distancematrix/json?";
        $uri.="units=imperial&origins={$lat1},{$long1}&destinations={$lat2},{$long2}";

//        echo $uri;
        $res = $client->request('GET', $uri);

        $res_json=json_decode((string)$res->getBody(),true); //true for converting to assoc array
        $distance=$res_json['rows'][0]['elements'][0]['distance']['value'];
        return $distance;
    }
}
