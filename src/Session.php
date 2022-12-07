<?php

    /**
     * Class Session
     *
     * @author Baha Şener
     * @mail baha.sener@hotmail.com
     * @date 7 December 2022
     */

     class Session{

        public static function Start(){

            if(session_status() == PHP_SESSION_NONE){
                session_start();
            }

        }

        public static function Create($name, $value){

            $_SESSION[$name] = $value;

        }

        public static function Get($name){

            if(isset($_SESSION[$name])){
                return $_SESSION[$name];
            }

            return null;

        }

        public static function Delete($name){

            if(self::Get($name)){
                unset($_SESSION[$name]);
                return true;
            }else{
                return false;
            }

        }

     }