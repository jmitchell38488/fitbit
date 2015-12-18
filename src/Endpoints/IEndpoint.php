<?php

namespace Jmitchell38488\Fitbit\Endpoints;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Profile
 *
 * @author justin.mitchell
 */
interface IEndPoint {
    
    public function fetch(\DateTime $startDate);
    
    public function remove();
    
    public function add();
}
