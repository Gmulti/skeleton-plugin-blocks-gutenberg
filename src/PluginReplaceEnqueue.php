<?php

namespace PluginReplaceGutenberg;

defined( 'ABSPATH' ) or die( 'Cheatin&#8217; uh?' );

class PluginReplaceEnqueue {

    public function hooks(){
        add_action( 'enqueue_block_assets', array( $this, 'enqueueBlockAssets' ) );
        add_action( 'enqueue_block_editor_assets', array( $this, 'enqueueBlockEditorAssets' ) );
    }

    /**
     * @return void
     */
    public function enqueueBlockEditorAssets(){

        wp_enqueue_script(
            'guten-blocks-vendor-js',
            PLUGIN_REPLACE_URL . "public/js/vendor.js",
            array( 'wp-blocks', 'wp-i18n', 'wp-element' )
        );
        
        wp_enqueue_script(
            'guten-blocks-js',
            PLUGIN_REPLACE_URL . "public/js/index.js",
            array( 'wp-blocks', 'wp-i18n', 'wp-element' )
        );

        wp_add_inline_script( 'guten-blocks-js', "
            function PluginReplaceLoaded(){
                require('javascripts/index');
            }

            window.addEventListener ?
                window.addEventListener('load',PluginReplaceLoaded,false) :
                window.attachEvent && window.attachEvent('onload', PluginReplaceLoaded);
        " );

        wp_enqueue_style(
            'guten-blocks-editor-modules-css',
            PLUGIN_REPLACE_URL . "public/css/modules.css",
            array( 'wp-edit-blocks' ) 
        );
    }

    /**
     * @return void
     */
    public function enqueueBlockAssets(){
        wp_enqueue_style(
            'guten-blocks-modules-css',
            PLUGIN_REPLACE_URL . "public/css/modules.css",
            array( 'wp-blocks' )
        );
    }

    

}
