<?php

namespace Chuckbe\ChuckcmsTemplateSingapore\migrations\seeds;

use Chuckbe\Chuckcms\Models\Template;
use Illuminate\Database\Seeder;

class ChuckcmsTemplateSingaporeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	// php artisan db:seed --class=Chuckbe\\ChuckcmsTemplateSingapore\\migrations\\seeds\\ChuckcmsTemplateSingaporeTableSeeder
        $fonts = [];
        //$fonts['raw'] = 'Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i';
        
        $css = [];
        $css['linearicons']['href'] = 'https://cdn.linearicons.com/free/1.0.0/icon-font.min.css';
        $css['linearicons']['asset'] = 'false';

        $css['fontawesome']['href'] = 'chuckbe/chuckcms-template-singapore/css/font-awesome.min.css';
        $css['fontawesome']['asset'] = 'true';

        $css['bootstrap']['href'] = 'chuckbe/chuckcms-template-singapore/css/bootstrap.min.css';
        $css['bootstrap']['asset'] = 'true';

        $css['fancyselect']['href'] = 'chuckbe/chuckcms-template-singapore/css/fancySelect.css';
        $css['fancyselect']['asset'] = 'true';

        $css['extralayers']['href'] = 'chuckbe/chuckcms-template-singapore/css/extralayers.css';
        $css['extralayers']['asset'] = 'true';

        $css['rsplugin']['href'] = 'chuckbe/chuckcms-template-singapore/rs-plugin/css/settings.css';
        $css['rsplugin']['asset'] = 'true';

        $css['owlcarousel']['href'] = 'chuckbe/chuckcms-template-singapore/css/owl.carousel.css';
        $css['owlcarousel']['asset'] = 'true';

        $css['owltheme']['href'] = 'chuckbe/chuckcms-template-singapore/css/owl.theme.default.css';
        $css['owltheme']['asset'] = 'true';

        $css['progressbar']['href'] = 'chuckbe/chuckcms-template-singapore/css/bootstrap-progressbar-3.3.4.min.css';
        $css['progressbar']['asset'] = 'true';

        $css['customscrollbar']['href'] = 'chuckbe/chuckcms-template-singapore/css/jquery.mCustomScrollbar.css';
        $css['customscrollbar']['asset']  'true';

        $css['style']['href'] = 'chuckbe/chuckcms-template-singapore/css/style.css';
        $css['style']['asset'] = 'false';

        
        $js = []; 
        $js['jquery']['href'] = 'chuckbe/chuckcms-template-singapore/js/vendor/jquery.js';
        $js['jquery']['asset'] = 'true';

        $js['jpreloader']['href'] = 'chuckbe/chuckcms-template-singapore/js/plugins/jpreLoader.js';
        $js['jpreloader']['asset'] = 'true';

        $js['waypoints']['href'] = 'chuckbe/chuckcms-template-singapore/js/plugins/jquery.waypoints.min.js';
        $js['waypoints']['asset'] = 'true';

        $js['bootstrap']['href'] = 'chuckbe/chuckcms-template-singapore/js/vendor/bootstrap.min.js';
        $js['bootstrap']['asset'] = 'true';

        $js['easing']['href'] = 'chuckbe/chuckcms-template-singapore/js/plugins/easing.js';
        $js['easing']['asset'] = 'true';

        $js['customscrollbar']['href'] = 'chuckbe/chuckcms-template-singapore/js/plugins/jquery.mCustomScrollbar.concat.min.js';
        $js['customscrollbar']['asset'] = 'true';

        $js['fancyselect']['href'] = 'chuckbe/chuckcms-template-singapore/js/plugins/fancySelect.js';
        $js['fancyselect']['asset'] = 'true';

        $js['custom']['href'] = 'chuckbe/chuckcms-template-singapore/js/plugins/custom.js';
        $js['custom']['asset'] = 'true';

        $js['mobilemenu']['href'] = 'chuckbe/chuckcms-template-singapore/js/plugins/jquery.mobile-menu.js';
        $js['mobilemenu']['asset'] = 'true';

        $js['sticky']['href'] = 'chuckbe/chuckcms-template-singapore/js/plugins/sticky.js';
        $js['sticky']['asset'] = 'true';

        $js['rsplugin']['href'] = 'chuckbe/chuckcms-template-singapore/rs-plugin/js/jquery.themepunch.plugins.min.js';
        $js['rsplugin']['asset'] = 'true';

        $js['rsrevolution']['href'] = 'chuckbe/chuckcms-template-singapore/rs-plugin/js/jquery.themepunch.revolution.min.js';
        $js['rsrevolution']['asset'] = 'true';

        $js['revoslider']['href'] = 'chuckbe/chuckcms-template-singapore/js/plugins/revoslider-custom.js';
        $js['revoslider']['asset'] = 'true';

        $js['animatenumber']['href'] = 'chuckbe/chuckcms-template-singapore/js/plugins/jquery.animateNumber.min.js';
        $js['animatenumber']['asset'] = 'true';

        $js['counterup']['href'] = 'chuckbe/chuckcms-template-singapore/js/plugins/custom-counterup.js';
        $js['counterup']['asset'] = 'true';

        $js['isotope']['href'] = 'chuckbe/chuckcms-template-singapore/js/plugins/isotope.pkgd.min.js';
        $js['isotope']['asset'] = 'true';

        $js['isotopecustom']['href'] = 'chuckbe/chuckcms-template-singapore/js/plugins/custom-isotope.js';
        $js['isotopecustom']['asset'] = 'true';

        $js['owl']['href'] = 'chuckbe/chuckcms-template-singapore/js/plugins/owl.carousel.js';
        $js['owl']['asset'] = 'true';

        $js['owlcustom']['href'] = 'chuckbe/chuckcms-template-singapore/js/plugins/custom-owl.js';
        $js['owlcustom']['asset'] = 'true';

        $js['progressbar']['href'] = 'chuckbe/chuckcms-template-singapore/js/plugins/bootstrap-progressbar.min.js';
        $js['progressbar']['asset'] = 'true';

        $js['progressbarcustom']['href'] = 'chuckbe/chuckcms-template-singapore/js/plugins/custom-progressbar.js';
        $js['progressbarcustom']['asset'] = 'true';

        $json = [];

        // create template
        Template::create([
            'name' => 'ChuckCMS Template Singapore',
            'slug' => 'chuckcms-template-singapore',
            'hintpath' => 'chuckcms-template-singapore',
            'path' => 'chuckbe/chuckcms-template-singapore',
            'type' => 'default',
            'version' => '0.1',
            'author' => 'Karel Brijs (karel@chuck.be)',
            'fonts' => $fonts,
            'css' => $css,
            'js' => $js,
            'json' => $json,
            'active' => 1
        ]);
    }
}
