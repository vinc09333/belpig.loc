<?php
/**
 * List of routes in the Admin environment
 */

//Admin Routes(GET)
$this->router->add('login'                   , '/admin/login/'                     , 'LoginController:form'                         );
$this->router->add('dashboard'               , '/admin/'                           , 'DashboardController:index'                    );
$this->router->add('logout'                  , '/admin/logout/'                    , 'AdminController:logout'                       );
//Users Routes (GET)
$this->router->add('users'                   , '/admin/users/'                     , 'UserController:listing'                       );
$this->router->add('user-create'             , '/admin/users/create/'              , 'UserController:create'                        );
$this->router->add('user-edit'               , '/admin/users/edit/(id:int)'        , 'UserController:edit'                          );
// Pages Routes (GET)
$this->router->add('pages'                   , '/admin/pages/'                     , 'PageController:listing'                       );
$this->router->add('page-create'             , '/admin/pages/create/'              , 'PageController:create'                        );
$this->router->add('page-edit'               , '/admin/pages/edit/(id:int)'        , 'PageController:edit'                          );
// Posts Routes (GET)
$this->router->add('posts'                   , '/admin/posts/'                     , 'PostController:listing'                       );
$this->router->add('post-create'             , '/admin/posts/create/'              , 'PostController:create'                        );
$this->router->add('post-edit'               , '/admin/posts/edit/(id:int)'        , 'PostController:edit'                          );
// Settings Routes (GET)
$this->router->add('settings-general'        , '/admin/settings/general/'          , 'SettingController:general'                    );
$this->router->add('settings-menus'          , '/admin/settings/appearance/menus/' , 'SettingController:menus'                      );

//Admin Routes (POST)
$this->router->add('auth-admin'              , '/admin/auth/'                      , 'LoginController:authAdmin'            , 'POST');
//Users Routes (POST)
$this->router->add('user-delete'             ,'/admin/user/delete/'                 ,'UserController:delete'                 , 'POST');
$this->router->add('user-add'                , '/admin/user/add/'                  , 'UserController:add'                   , 'POST');
$this->router->add('user-update'             , '/admin/user/update/'               , 'UserController:update'                , 'POST');
// Pages Routes (POST)
$this->router->add('page-add'                , '/admin/page/add/'                  , 'PageController:add'                   , 'POST');
$this->router->add('page-update'             , '/admin/page/update/'               , 'PageController:update'                , 'POST');
// Posts Routes (POST)
$this->router->add('post-add'                , '/admin/post/add/'                  , 'PostController:add'                   , 'POST');
$this->router->add('post-update'             , '/admin/post/update/'               , 'PostController:update'                , 'POST');
// Settings Routes (POST)
$this->router->add('setting-update'          , '/admin/settings/update/'           , 'SettingController:updateSetting'      , 'POST');
$this->router->add('setting-add-menu'        , '/admin/setting/ajaxMenuAdd/'       , 'SettingController:ajaxMenuAdd'        , 'POST');
$this->router->add('setting-add-menu-item'   , '/admin/setting/ajaxMenuAddItem/'   , 'SettingController:ajaxMenuAddItem'    , 'POST');
$this->router->add('setting-sort-menu-item'  , '/admin/setting/ajaxMenuSortItems/' , 'SettingController:ajaxMenuSortItems'  , 'POST');
$this->router->add('setting-remove-menu-item', '/admin/setting/ajaxMenuRemoveItem/', 'SettingController:ajaxMenuRemoveItem' , 'POST');
