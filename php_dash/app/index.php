<?php

/**
 * Kubernetes + docker learning :)
 */

 $ret = array();

 $ret[] = array( 'name'=>'Błazej' );
 $ret[] = array( 'name'=>'Mirka' );


 sleep(1); //simulatet long... searching in db...


 echo json_encode($ret);
 die;