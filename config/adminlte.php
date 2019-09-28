<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Title
    |--------------------------------------------------------------------------
    |
    | The default title of your admin panel, this goes into the title tag
    | of your page. You can override it per page with the title section.
    | You can optionally also specify a title prefix and/or postfix.
    |
    */

    'title' => 'CliniMED',

    'title_prefix' => '',

    'title_postfix' => '',

    /*
    |--------------------------------------------------------------------------
    | Logo
    |--------------------------------------------------------------------------
    |
    | This logo is displayed at the upper left corner of your admin panel.
    | You can use basic HTML here if you want. The logo has also a mini
    | variant, used for the mini side bar. Make it 3 letters or so
    |
    */

    'logo' => '<b>Clini</b>MED',

    'logo_mini' => '<b>C</b>MED',

    /*
    |--------------------------------------------------------------------------
    | Skin Color
    |--------------------------------------------------------------------------
    |
    | Choose a skin color for your admin panel. The available skin colors:
    | blue, black, purple, yellow, red, and green. Each skin also has a
    | light variant: blue-light, purple-light, purple-light, etc.
    |
    */

    'skin' => 'blue',

    /*
    |--------------------------------------------------------------------------
    | Layout
    |--------------------------------------------------------------------------
    |
    | Choose a layout for your admin panel. The available layout options:
    | null, 'boxed', 'fixed', 'top-nav'. null is the default, top-nav
    | removes the sidebar and places your menu in the top navbar
    |
    */

    'layout' => null,

    /*
    |--------------------------------------------------------------------------
    | Collapse Sidebar
    |--------------------------------------------------------------------------
    |
    | Here we choose and option to be able to start with a collapsed side
    | bar. To adjust your sidebar layout simply set this  either true
    | this is compatible with layouts except top-nav layout option
    |
    */

    'collapse_sidebar' => false,

    /*
    |--------------------------------------------------------------------------
    | Control Sidebar (Right Sidebar)
    |--------------------------------------------------------------------------
    |
    | Here we have the option to enable a right sidebar.
    | When active, you can use @section('right-sidebar')
    | The icon you configured will be displayed at the end of the top menu,
    | and will show/hide de sidebar.
    | The slide option will slide the sidebar over the content, while false
    | will push the content, and have no animation.
    | You can also choose the sidebar theme (dark or light).
    | The right Sidebar can only be used if layout is not top-nav.
    |
    */

    'right_sidebar' => false,
    'right_sidebar_icon' => 'fas fa-cogs',
    'right_sidebar_theme' => 'dark',
    'right_sidebar_slide' => true,

    /*
    |--------------------------------------------------------------------------
    | URLs
    |--------------------------------------------------------------------------
    |
    | Register here your dashboard, logout, login and register URLs. The
    | logout URL automatically sends a POST request in Laravel 5.3 or higher.
    | You can set the request to a GET or POST with logout_method.
    | Set register_url to null if you don't want a register link.
    |
    */

    'dashboard_url' => 'home',

    'logout_url' => 'logout',

    'logout_method' => null,

    'login_url' => 'login',

    'register_url' => 'register',

    /*
    |--------------------------------------------------------------------------
    | Menu Items
    |--------------------------------------------------------------------------
    |
    | Specify your menu items to display in the left sidebar. Each menu item
    | should have a text and a URL. You can also specify an icon from Font
    | Awesome. A string instead of an array represents a header in sidebar
    | layout. The 'can' is a filter on Laravel's built in Gate functionality.
    */

    'menu' => [
        [
            'text' => 'Localizar paciente',
            'search' => true,
        ],
        'NAVEGAÇÃO PRINCIPAL',
        [
            'text'        => 'Início',
            'url'         => 'home',
            'icon'        => 'dashboard',
        ],
        'USUÁRIOS', 
        [
            'text' => 'Profissionais',
            // 'can'  => 'is-user',
            'icon' => 'graduation-cap',   
            'submenu' => [
                [
                    'text' => 'Atendentes',
                    'url'  => 'admin/attendant',
                    // 'can'  => 'is-admin',
                ],                
                [
                    'text' => 'Médicos',
                    'url'  => 'admin/doctor',
                    // 'can'  => 'is-admin',
                ], 
                [
                    'text' => 'Médicos - Especialidades',
                    'url'  => 'admin/speciality',
                    // 'can'  => 'is-admin',
                ],               
            ],         
        ],
        [
            'text' => 'Pacientes',
            'url'  => 'admin/patient',
            // 'can'  => 'is-user',
            'icon' => 'graduation-cap',            
        ],  
        'CONSULTAS',
        [
            'text'    => 'Profissionais',
            'icon'    => 'graduation-cap',
            // 'can'  => 'is-admin',
            'submenu' => [
                [
                    'text' => 'Presenciais',
                    'url'  => 'admin/view-course/2',
                    // 'can'  => 'is-admin',
                ],                
                [
                    'text' => 'A distância',
                    'url'  => 'admin/view-course/1',
                    // 'can'  => 'is-admin',
                ],               
            ],
        ],   
        'MEDICAMENTOS E EXAMES', 
        [
            'text'    => 'Medicamentos',
            'icon'    => 'graduation-cap',
            // 'can'  => 'is-admin',
            'submenu' => [
                [
                    'text' => 'Medicamentos',
                    'url'  => 'admin/remedy',
                    // 'can'  => 'is-admin',
                ],                
                [
                    'text' => 'Fabricantes',
                    'url'  => 'admin/remedy-manufacturer',
                    // 'can'  => 'is-admin',
                ],                  
            ],
        ], 
        [
            'text' => 'Exames',
            'url'  => 'admin/exam',
            'icon' => 'shopping-cart', 
            // 'can'  => 'is-admin',
        ],                    
        [
            'text' => 'Inscreva-se',
            'url'  => 'user/registration',
            // 'can'  => 'is-user',
            'icon' => 'shopping-cart',            
        ],       
        [
            'text' => 'Docentes',
            'url'  => 'admin/teacher',
            // 'can'  => 'is-admin',
            'icon' => 'group',            
        ],  
        [
            'text' => 'Inscrições',
            'icon' => 'list-ol',
            // 'can'  => 'is-admin',
            'submenu' => [
                [
                    'text' => 'Inscrições presenciais',
                    'url'  => 'admin/view-registration/2',
                ],
                [
                    'text' => 'Inscrições a distância',
                    'url'  => 'admin/view-registration/1',
                ],                
                [
                    'text' => 'Configurações',
                    'url'  => 'admin/registration/config',
                ],
            ],
        ],
        [
            'text' => 'Financeiro',          
            'icon' => 'dollar',
            // 'can'  => 'is-admin',
            'submenu' => [                
                [
                    'text' => 'Relatórios',
                    'url'  => 'admin/financial-reports',
                    'can'  => 'is-admin',
                ],                
                [
                    'text' => 'Métodos de pagamento',
                    'url'  => 'admin/payment-method',
                    'can'  => 'is-admin',
                ],
                [
                    'text' => 'Códigos de desconto',
                    'url'  => 'admin/coupon',
                    'can'  => 'is-admin',
                ],
            ],
        ],
        [
            'text' => 'Bônus',
            'url'  => 'admin/teachers',
            'icon' => 'exchange',
            'submenu' => [                
                [
                    'text' => 'Meus bônus',
                    'url'  => 'user/my-bonus',
                    'can'  => 'is-user',
                ],   
                [
                    'text' => 'Tipos de bônus',
                    'url'  => 'admin/bonus-type',
                    'can'  => 'is-admin',
                ],              
            ],
            
        ],   
        [
            'text' => 'Relatórios',
            'icon' => 'table',
            // 'can'  => 'is-admin',
            'submenu' => [    
                [
                    'text' => 'Como ficou sabendo',
                    'url'  => 'admin/report/1',
                    // 'can'  => 'is-admin',
                ],      
                     
                [
                    'text' => 'Formação',
                    'url'  => 'admin/report/2',
                    // 'can'  => 'is-admin',
                ],   
                [
                    'text' => 'Área do conhecimento',
                    'url'  => 'admin/report/3',
                    // 'can'  => 'is-admin',
                ],                  
                [
                    'text' => 'Parentesco',
                    'url'  => 'admin/report/4',
                    // 'can'  => 'is-admin',
                ], 
                [
                    'text' => 'Cidades',
                    'url'  => 'admin/report/5',
                    // 'can'  => 'is-admin',
                ],
                [
                    'text' => 'Localizar aluno',
                    'url'  => 'admin/report/6',
                    // 'can'  => 'is-admin',
                ], 
                /*
                [
                    'text' => 'Bônus',
                    'url'  => 'admin/report/7',
                    'can'  => 'is-admin',
                ], 
                */            
            ],
            
        ],        
        'PERFIL',
        [
            'text' => 'Meu perfil',
            'url'  => "show-profile",
            'icon' => 'lock',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Menu Filters
    |--------------------------------------------------------------------------
    |
    | Choose what filters you want to include for rendering the menu.
    | You can add your own filters to this array after you've created them.
    | You can comment out the GateFilter if you don't want to use Laravel's
    | built in Gate functionality
    |
    */

    'filters' => [
        JeroenNoten\LaravelAdminLte\Menu\Filters\HrefFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\SearchFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ActiveFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\SubmenuFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ClassesFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\GateFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\LangFilter::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Plugins Initialization
    |--------------------------------------------------------------------------
    |
    | Configure which JavaScript plugins should be included. At this moment,
    | DataTables, Select2, Chartjs and SweetAlert are added out-of-the-box,
    | including the Javascript and CSS files from a CDN via script and link tag.
    | Plugin Name, active status and files array (even empty) are required.
    | Files, when added, need to have type (js or css), asset (true or false) and location (string).
    | When asset is set to true, the location will be output using asset() function.
    |
    */

    'plugins' => [
        [
            'name' => 'Datatables',
            'active' => true,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/v/bs/dt-1.10.18/datatables.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/v/bs/dt-1.10.18/datatables.min.css',
                ],
            ],
        ],
        [
            'name' => 'Select2',
            'active' => true,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.css',
                ],
            ],
        ],
        [
            'name' => 'Chartjs',
            'active' => true,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.bundle.min.js',
                ],
            ],
        ],
        [
            'name' => 'Sweetalert2',
            'active' => true,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.jsdelivr.net/npm/sweetalert2@8',
                ],
            ],
        ],
        [
            'name' => 'Pace',
            'active' => true,
            'files' => [
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/themes/blue/pace-theme-center-radar.min.css',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.min.js',
                ],
            ],
        ],
    ],
];
