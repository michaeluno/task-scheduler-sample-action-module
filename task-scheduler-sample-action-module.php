<?php
/**
 *	Plugin Name:    Task Scheduler - Sample Action Module
 *	Plugin URI:     http://en.michaeluno.jp/
 *	Description:    Demonstrates a sample action module.
 *	Author:         Michael Uno
 *	Author URI:     http://michaeluno.jp
 *	Version:        1.0.0
 */

/**
 * Called when the Task Scheduler plugin gets loaded.
 */
function loadTaskSchedulerSampleActionModule() {
    
    // Register a custom action module.
    include( dirname( __FILE__ ) . '/module/TaskScheduler_SampleActionModule.php' );
    include( dirname( __FILE__ ) . '/module/admin/TaskScheduler_Action_Sample_Wizard.php' );
    new TaskScheduler_SampleActionModule;
    
}
add_action( 'task_scheduler_action_after_loading_plugin', 'loadTaskSchedulerSampleActionModule' );
    

