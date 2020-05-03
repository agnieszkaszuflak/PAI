<?php
App::uses('AppModel', 'Model');
/**
 * Employee Model
 *
 */
class Employee extends AppModel {
    var $validate = array('nazwisko'=> array('rule' => 'notBlank'),
                          'etat' => array('rule' => 'notBlank'),
                          'placa_pod'=> array('Mniejsza od zera' => array('rule'=>array('comparison', ">=",0),'allowEmpty'=>true),
                                              'Większa od 2000' => array('rule' =>array('comparison', '<=', 2000),'allowEmpty'=>true)
                                             )
                         );
    

}
