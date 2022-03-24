<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class ClientBilling extends CI_Model{
    /*      DOCU: to fetch a data in database
            Owner: BJ 
    */
        function get_all(){
            return $this->db->query("SELECT charged_datetime ,Monthname(charged_datetime) as Month, date_format(charged_datetime, '%Y') as Year,sum(amount) as total_cost
                        FROM billing
                        GROUP BY date_format(charged_datetime, '%Y%m')
                        HAVING charged_Datetime BETWEEN '2011-01-01' AND '2011-12-31'
                        ORDER BY charged_datetime ASC;")->result_array();
        }

        function validate(){
            
        }
    }
?>