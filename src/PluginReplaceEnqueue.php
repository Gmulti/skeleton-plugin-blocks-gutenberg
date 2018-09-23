<?php

namespace PluginReplaceGutenberg;

defined( 'ABSPATH' ) or die( 'Cheatin&#8217; uh?' );

class PluginReplaceEnqueue {

    public function hooks(){
        add_action( 'enqueue_block_assets', [ $this, 'enqueueBlockAssets' ] );
        add_action( 'enqueue_block_editor_assets', [ $this, 'enqueueBlockEditorAssets' ] );
    }

    /**
     * @return void
     */
    public function enqueueBlockEditorAssets(){

        wp_enqueue_script(
            'guten-blocks-vendor-js',
            PLUGIN_REPLACE_URL . "public/js/vendor.js",
            [ 'wp-blocks', 'wp-i18n', 'wp-element' ]
        );

        wp_enqueue_script(
            'guten-blocks-js',
            PLUGIN_REPLACE_URL . "public/js/index.js",
            [ 'wp-blocks', 'wp-i18n', 'wp-element']
        );

        wp_add_inline_script( 'guten-blocks-js', "require('javascripts/index');" );

        wp_enqueue_style(
            'guten-blocks-editor-modules-css',
            PLUGIN_REPLACE_URL . "public/css/modules.css",
            [ 'wp-edit-blocks' ]
        );
    }

    /**
     * @return void
     */
    public function enqueueBlockAssets(){
        wp_enqueue_style(
            'guten-blocks-modules-css',
            PLUGIN_REPLACE_URL . "public/css/modules.css",
            [ 'wp-block' ]
        );
    }



}
