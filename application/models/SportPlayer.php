<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class SportPLayer extends CI_Model{

        function get_all($post = null){
            if (empty($post)){
                return $this->db->query("SELECT *,concat(first_name,' ',Last_name) AS Name FROM players")->result_array();
            }
            else{
                $query = "SELECT *, concat(first_name,' ',Last_name) AS Name FROM players 
                        WHERE  (first_name LIKE '%{$post['name']}%' OR last_name LIKE '%{$post['name']}%')
                        -- WHERE (first_name AND last_name LIKE '%{$post['name']}%')
                        AND (gender = '{$post['male']}' OR gender = '{$post['female']}') 
                        OR (sports = '{$post['basketball']}' OR sports = '{$post['volleyball']}' OR sports = '{$post['baseball']}' 
                        OR sports = '{$post['soccer']}' OR sports = '{$post['football']}')";
                // $query = "SELECT * FROM players WHERE gender = '{$post['male']}' OR gender = '{$post['female']}' ";

                $log = $this->db->query($query);
                if ($log ->num_rows() > 0){
                        return $log->result_array(); 
                    }
                else{
                    return $this->db->query("SELECT *,concat(first_name,' ',Last_name) AS Name FROM players")->result_array();
                }
            }
        }

        // function filter_search($post){
        //    $query = "SELECT *, concat(first_name,' ',Last_name) AS Name FROM players 
        //             WHERE  (first_name LIKE '%{$post['name']}%' OR last_name LIKE '%{$post['name']}%') 
        //             AND (gender = '{$post['male']}' OR gender = '{$post['female']}') 
        //             OR (sports = '{$post['basketball']}' OR sports = '{$post['volleyball']}' OR sports = '{$post['baseball']}' OR sports = '{$post['soccer']}' OR sports = '{$post['football']}')";

        // // $query = "SELECT * FROM players WHERE gender = '{$post['male']}' OR gender = '{$post['female']}' ";

        //    $log = $this->db->query($query);

        //    if ($log ->num_rows() > 0){
        //         return $log->result_array(); 
        //     }
        //     else{
        //         return $this->db->query("SELECT *,concat(first_name,' ',Last_name) AS Name FROM players")->result_array();
        //     }
        // }

    }
?>