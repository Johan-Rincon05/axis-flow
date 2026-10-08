<?php
declare(strict_types=1);
/**
 * The index view file of admin module of ZenTaoPMS.
 * @copyright   Copyright 2009-2023 禅道软件（青岛）集团有限公司(ZenTao Software (Qingdao) Co., Ltd. www.zentao.net)
 * @license     ZPL(https://zpl.pub/page/zplv12.html) or AGPL(https://www.gnu.org/licenses/agpl-3.0.en.html)
 * @author      Gang Liu <liugang@easycorp.ltd>
 * @package     admin
 * @link        https://www.zentao.net
 */

namespace zin;

/* Get latest data from zentao.net if ZenTaoPMS has internet and the user is admin. */
jsVar('hasInternet', $zentaoData->hasData || $hasInternet);
jsVar('isAdminUser', $this->app->user->admin);
$isEn = $app->getClientLang() == 'en';

$buildHeader = function(string $title, string $actionUrl = '', string $titleIcon = '', string $actionLang = '', string $actionIcon = ''): h
{
    global $lang;

    return div
    (
        setClass('flex justify-between items-center pl-4 h-10'),
        div
        (
            setClass('panel-title'),
            $titleIcon ? icon
            (
                setClass('text-lg text-primary pr-1'),
                $titleIcon
            ) : null,
            $title
        ),
        $actionUrl ? a
        (
            setClass('text-gray pr-3'),
            set::target('_blank'),
            set::href($actionUrl),
            $actionLang ? $actionLang : $lang->more,
            icon($actionIcon ? $actionIcon : 'caret-right')
        ) : null
    );
};

$buildPluginHeader = function($name, $url): h
{
    return div
    (
        setClass('flex justify-between items-center'),
        div
        (
            setClass('panel-title py-2.5'),
            $name
        ),
        a
        (
            //setClass('flex items-center'),
            set::href($url),
            set::target('_blank'),
            icon
            (
                setClass('text-primary bg-primary-100 p-1'),
                'download-alt'
            )
        )
    );
};

$buildUsed = function(int $amount, string $unit = ''): array
{
    return array
    (
        $amount ? span
        (
            setClass('bg-gray-100 rounded-md text-lg mx-1 px-1 py-0.5'),
            $amount
        ) : null,
        $amount ? $unit : ''
    );
};

$settingItems = array();
$flowItems    = array();
foreach($lang->admin->menuList as $menuKey => $menu)
{
    if($config->vision == 'lite' and !in_array($menuKey, $config->admin->liteMenuList)) continue;

    $items = div
    (
        setClass('pb-4 pr-4 h-32 w-1/' . ($config->vision == 'lite' || $isEn ? 3 : 5)),
        col
        (
            setClass('setting-box cursor-pointer border border-hover rounded-md px-2 py-1 h-full'),
            set('data-id', $menuKey),
            empty($menu['disabled']) ? set('data-url', zget($menu, 'link', '')) : null,
            !empty($menu['disabled']) ? setClass('disabled') : null,
            !empty($menu['disabled']) ? set::title($lang->admin->noPriv) : null,
            h4
            (
                setClass('flex my-2.5 w-full'),
                div
                (
                    setClass('flex gap-1 font-bold text-md'),
                    !empty($menu['icon']) ? icon(setClass("svg-icon rounded-lg content-center bg-{$menu['bg']} text-white"), $menu['icon']) : img(set::src("static/svg/admin-{$menuKey}.svg")),
                    $menu['name'],
                    !empty($config->admin->helpURL[$menuKey]) ?
                    a
                    (
                        setClass('text-gray'),
                        set::href($config->admin->helpURL[$menuKey]),
                        set::title($lang->help),
                        set::target('_blank'),
                        icon('help')
                    ) : '',
                )
            ),
            p
            (
                setClass('overflow-hidden text-left text-gray pb-4 h-12 leading-6'),
                set::title($menu['desc']),
                $menu['desc']
            )
        )
    );

    if(!empty($menu['group']) && $menu['group'] == 'flow')
    {
        $flowItems[] = $items;
    }
    else
    {
        $settingItems[] = $items;
    }
}

div
(
    setClass('flex w-full'),
    div
    (
        setClass('flex-1'),
        $settingItems ? div
        (
            setID('settings'),
            setClass('bg-white rounded-md mb-4'),
            $buildHeader($lang->admin->setting),
            div
            (
                setClass('flex flex-wrap pl-4'),
                on::click('redirectSetting'),
                $settingItems
            )
        ) : null,
        $flowItems ? div
        (
            setID('flows'),
            setClass('bg-white rounded-md mb-4'),
            $buildHeader($lang->admin->setFlow),
            div
            (
                setClass('flex flex-wrap pl-4'),
                on::click('redirectSetting'),
                $flowItems
            )
        ) : null
    )
);

render();
