<?php
use Illuminate\Support\Facades\DB;




if(isset($_GET['gov_id']) && !empty($_GET['gov_id'])){

    $gov_id=$_GET['gov_id'];
    $cities = DB::table('cities')->where('gov_id',$gov_id)
        ->get();

    if(!empty($cities)){
        foreach ($cities as $city){
            echo '<option value="'.$city['c_id'].'">'.$city['city_name'].'</option>';
        }
    }
    else{
        echo '<option>No City Avilable</option>';
    }


}
else{
    echo '<h1>Error</h1>';
}
