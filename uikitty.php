<?php
namespace Grav\Theme;

use Grav\Common\Grav;
use Grav\Common\Theme;

class UIKitty extends Theme
{
    public static function getSubscribedEvents()
    {
        return [
            'onThemeInitialized'    => ['onThemeInitialized', 0],
            'onTwigInitialized'     => ['onTwigInitialized', 0],
            'onTwigLoader'          => ['onTwigLoader', 0],
            'onTwigSiteVariables'   => ['onTwigSiteVariables', 0],
        ];
    }

    public function onThemeInitialized()
    {       
    }

    // Add images to twig template paths to allow inclusion of SVG files
    public function onTwigLoader()
    {
        $theme_paths = Grav::instance()['locator']->findResources('theme://images');
        foreach($theme_paths as $images_path) {
            $this->grav['twig']->addPath($images_path, 'images');
        }
    }

    public function onTwigInitialized()
    {
        $twig = $this->grav['twig'];

        $form_class_variables = [
//            'form_button_classes' => 'btn',
//            'form_button_outer_classes' => 'button-wrapper',
//            'form_errors_classes' => '',
//            'form_field_checkbox_classes' => 'form-checkbox',
//            'form_field_input_classes' => 'form-input',
//            'form_field_label_classes' => 'form-label',
//            'form_field_outer_classes' => 'form-group',
//            'form_field_outer_data_classes' => 'col-9',
//            'form_field_outer_label_classes' => 'form-label-wrapper',
//            'form_field_radio_classes' => 'form-radio',
//            'form_field_select_classes' => 'form-select',
//            'form_field_textarea_classes' => 'form-input',
//            'form_outer_classes' => 'form-horizontal',
        ];
        $twig->twig_vars = array_merge($twig->twig_vars, $form_class_variables);
    }

    public function onTwigSiteVariables()
    {
        $assets = $this->grav['assets'];
        $uikit_components_css = [
            'theme://css/components/accordion.min.css',
            'theme://css/components/autocomplete.min.css',
            'theme://css/components/datapicker.min.css',
            'theme://css/components/dotnav.min.css',
            'theme://css/components/form-advanced.min.css',
            'theme://css/components/form-file.min.css',
            'theme://css/components/form-password.min.css',
            'theme://css/components/form-select.min.css',
            'theme://css/components/htmleditor.min.css',
            'theme://css/components/nestable.min.css',
            'theme://css/components/notify.min.css',
            'theme://css/components/placeholder.min.css',
            'theme://css/components/progress.min.css',
            'theme://css/components/search.min.css',
            'theme://css/components/slidenav.min.css',
            'theme://css/components/slider.min.css',
            'theme://css/components/slideshow.min.css',
            'theme://css/components/sortable.min.css',
            'theme://css/components/sticky.min.css',
            'theme://css/components/tooltip.min.css',
            'theme://css/components/upload.min.css',
        ];
        $uikit_components_js = [
            'theme://js/components/accordion.min.js',
            'theme://js/components/autocomplete.min.js',
            'theme://js/components/datapicker.min.js',
            'theme://js/components/form-password.min.js',
            'theme://js/components/form-select.min.js',
            'theme://js/components/grid.min.js',
            'theme://js/components/grid-parallax.min.js',
            'theme://js/components/htmleditor.min.js',
            'theme://js/components/lightbox.min.js',
            'theme://js/components/nestable.min.js',
            'theme://js/components/notify.min.js',
            'theme://js/components/pagination.min.js',
            'theme://js/components/parallax.min.js',
            'theme://js/components/search.min.js',
            'theme://js/components/slider.min.js',
            'theme://js/components/slideset.min.js',
            'theme://js/components/slideshow.min.js',
            'theme://js/components/slideshow-fx.min.js',
            'theme://js/components/sortable.min.js',
            'theme://js/components/sticky.min.js',
            'theme://js/components/timepicker.min.js',
            'theme://js/components/tooltip.min.js',
            'theme://js/components/upload.min.js',
        ];
        $assets->registerCollection('uikit-components-css', $uikit_components_css);
        $assets->registerCollection('uikit-components-js', $uikit_components_js);
        //$assets->add('uikit_components_css', 10);
        //$assets->add('uikit_components_js', 10); 
    }
}