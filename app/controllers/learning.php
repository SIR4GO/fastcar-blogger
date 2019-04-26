<?php
/**
 * Created by PhpStorm.
 * User: Mahmoud
 * Date: 1/21/2018
 * Time: 10:45 PM
 */

namespace PHPMVC\controllers;


class learning extends Abstract_
{
    private $Type = "learning";
    public $arr_title = array();
    public $arr_summary = array();
    public $arr_pages = array();
    public $iconmain_array  = array();


    public function selectAction()
    {

        // var_dump($this->_params);
        if($this->_params[0] == "main")
            $this->preparedDataForMainView();

        if($this->_params[0] != "main")
            $this->preparedDataForMetaTag();

        $this->_view();

    }

    public function preparedDataForMainView()
    {


        //  data all posts summary prepared for selectmain view
        $file = fopen(DATA_PATH, "r");

        $counter = 0;
        while (!feof($file)) {

            $row = fgets($file);
            $this->_data = explode("||", $row);

            $this->_data[0] = preg_replace('/\s+/', '', trim($this->_data[0])); // important filter duo to is if condition

            if ($this->_data[0] == $this->Type) {
                $this->arr_title[$counter] = $this->_data[1];
                $this->arr_summary[$counter] = $this->_data[2];
                $this->arr_pages[$counter] = preg_replace('/\s+/', '', trim($this->_data[3])); // important filter duo to is link
                $checkUrl = preg_replace('/\s+/', '', trim($this->_data[6]));

                $this->iconmain_array[$counter] = $checkUrl;

                $counter++;
            }

        }
        fclose($file);


    }
    public function preparedDataForMetaTag()
    {

        //  data all posts summary prepared for selectmain view
        $file = fopen(DATA_PATH, "r");

        while (!feof($file)) {

            $row = fgets($file);
            $this->_data = explode("||", $row);


            $this->_data[3] = preg_replace('/\s+/', '', trim($this->_data[3])); // important filter duo to is if condition

            if ($this->_data[3] == $this->_params[0]) {
                $this->title = $this->_data[1];
                $this->description = $this->_data[2];
                $this->keywords = trim(str_replace(" " , " , " ,  $this->description) ,',');
                $this->author = "تعليم قيادة السيارات ";
                break;
            }

        }
        fclose($file);


    }

}