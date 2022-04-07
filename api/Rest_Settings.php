<?php

/**
 * Create REST API
 *
 * @link       https://www.Squarewavedigital.co.uk/
 * @since      0.1.1
 *
 * @package    Entrysign_Configurator
 * @subpackage Entrysign_Configurator/api
 */

 //use WP_REST_Controller;

class Rest_Settings extends WP_Rest_Controller{

    protected $namespace;
    protected $rest_base;

    public function __construct(){

        $this->namespace = 'Entrysign_Configurator/v1';
        $this->rest_base = '/settings';

    }

    public function register_routes(){

        register_rest_route(
            $this->namespace,
            $this->rest_base,
            [
                [
                    'methods' => \WP_Rest_Server::READABLE,
                    'callback' => [$this, 'get_settings'],
                    'permission_callback' => [$this, 'get_route_access']
                ],
                [
                    'methods' => \WP_Rest_Server::CREATABLE,
                    'callback' => [$this, 'save_settings'],
                    'permission_callback' => [$this, 'get_route_access']
                ]
            ]
        );
    }

    /**
     * Get Route Access
     */

     public function get_route_access($request){
         return true;
     }

    /**
     * Get Settings Response - temporary based on future methos
     */
    //  Calls base and returns data
     public function get_settings($request){
         $response = array(
         );
         return rest_ensure_response($response);
     }

     public function save_settings($request){
       

        // Send Success response

        $response = true;

        return rest_ensure_response($response);
     }

}