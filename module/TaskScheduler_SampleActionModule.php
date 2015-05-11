<?php
/**
 * Demonstrates a sample action module of Task Scheduler.
 * 
 * @package     Task Scheduler - Sample Action Module
 * @copyright   Copyright (c) 2015, Michael Uno
 * @author      Michael Uno
 * @authorurl   http://michaeluno.jp
 * @since       1.0.0
 */

/**
 * 
 */
class TaskScheduler_SampleActionModule extends TaskScheduler_Action_Base {
        
    /**
     * The user constructor.
     * 
     * This method is automatically called at the end of the class constructor.
     */
    public function construct() {
        
        // Debug 
        // TaskScheduler_Debug::log(  get_object_vars( $this ) );
        
    }

    /**
     * Returns the readable label of this action.
     * 
     * This will be called when displaying the action in an pull-down select option, task listing table, or notification email message.
     */
    public function getLabel( $sLabel ) {         
        return __( 'Sample Action Module', 'task-scheduler-sample-action-module' );
    }
    
    /**
     * Returns the description of the module.
     */
    public function getDescription( $sDescription ) {
        return __( 'This is a sample action module.', 'task-scheduler-sample-action-module' );
    }    
    
    /**
     * Defines the behaviour of the task action.
     * 
     * Required arguments: 
     * 
     */
    public function doAction( $sExitCode, $oRoutine ) {
        
        /**
         * Write your own code here! Delete the below log method. 
         * 
         * Good luck!
         */
        TaskScheduler_Debug::log( $oRoutine->getMeta() );
        
        // Exit code.
        return 1;
        
    }
            
}