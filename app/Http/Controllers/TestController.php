<?php


namespace App\Http\Controllers;


use Goutte\Client;


class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function getTest()
    {
        // Create Goutte Object
        $client = new Client();


        // Get Data Source
        $crawler = $client->request('GET', "https://baseball.yahoo.co.jp/npb/game/2019050901/top");

        $crawler2 = $client->request('GET', "https://baseball.yahoo.co.jp/npb/game/2019050902/top");

        $crawler3 = $client->request('GET', "https://baseball.yahoo.co.jp/npb/game/2019050903/top");
        


        $header = $crawler->filter('table tr.chs-title th')->each(function($element){
            return $element->text();
        });


        $team1_name = $crawler->filter('table tr#tb1 th')->each(function($element){
            return $element->text();
        });


        $team1_score = $crawler->filter('table tr#tb1 td')->each(function($element){
            return $element->text();
        });


        $team2_name = $crawler->filter('table tr#tb2 th')->each(function($element){
            return $element->text();
        });


        $team2_score = $crawler->filter('table tr#tb2 td')->each(function($element){
            return $element->text();
        });


        ## ここから２試合目
        $header_02 = $crawler2->filter('table tr.chs-title th')->each(function($element){
            return $element->text();
        });


        $team1_name_02 = $crawler2->filter('table tr#tb1 th')->each(function($element){
            return $element->text();
        });


        $team1_score_02 = $crawler2->filter('table tr#tb1 td')->each(function($element){
            return $element->text();
        });


        $team2_name_02 = $crawler2->filter('table tr#tb2 th')->each(function($element){
            return $element->text();
        });


        $team2_score_02 = $crawler2->filter('table tr#tb2 td')->each(function($element){
            return $element->text();
        });


        ## ここから3試合目
        $header_03 = $crawler3->filter('table tr.chs-title th')->each(function($element){
            return $element->text();
        });


        $team1_name_03 = $crawler3->filter('table tr#tb1 th')->each(function($element){
            return $element->text();
        });


        $team1_score_03 = $crawler3->filter('table tr#tb1 td')->each(function($element){
            return $element->text();
        });


        $team2_name_03 = $crawler3->filter('table tr#tb2 th')->each(function($element){
            return $element->text();
        });


        $team2_score_03 = $crawler3->filter('table tr#tb2 td')->each(function($element){
            return $element->text();
        });


        

        return view('scores', [
            'header' => $header,
            'team1_name' => $team1_name[0],
            'team2_name' => $team2_name[0],
            'team1_score' => $team1_score,
            'team2_score' => $team2_score,
            ##2試合目
            'header_02' => $header_02,
            'team1_name_02' => $team1_name_02[0],
            'team2_name_02' => $team2_name_02[0],
            'team1_score_02' => $team1_score_02,
            'team2_score_02' => $team2_score_02,
            ##3試合目
            'header_03' => $header_03,
            'team1_name_03' => $team1_name_03[0],
            'team2_name_03' => $team2_name_03[0],
            'team1_score_03' => $team1_score_03,
            'team2_score_03' => $team2_score_03,
            
            
        ]);
    
        //td要素があるときのみ取得処理を行う
    }
}
