<?php

use WireUi\Components;
use WireUi\Components\Alert;
use WireUi\Components\Avatar;
use WireUi\Components\Badge;
use WireUi\Components\Button;
use WireUi\Components\Card;
use WireUi\Components\ColorPicker;
use WireUi\Components\DatetimePicker;
use WireUi\Components\Dialog;
use WireUi\Components\Dropdown;
use WireUi\Components\Errors;
use WireUi\Components\Icon;
use WireUi\Components\Label;
use WireUi\Components\Link;
use WireUi\Components\Modal;
use WireUi\Components\Notifications;
use WireUi\Components\Popover;
use WireUi\Components\Select;
use WireUi\Components\Switcher;
use WireUi\Components\TextField;
use WireUi\Components\TimePicker;
use WireUi\Components\Wrapper;
use WireUi\Enum\Packs;
use WireUi\WireUiConfig as Config;

return [

    /*
    |--------------------------------------------------------------------------
    | Prefix
    |--------------------------------------------------------------------------
    |
    | This option controls the prefix for WireUI components. Examples:
    |
    | 'wireui-' => 'x-wireui-button'
    | 'wireui:' => 'x-wireui:button'
    |
     */

    'prefix' => null,

    /*
    |--------------------------------------------------------------------------
    | Global Styles
    |--------------------------------------------------------------------------
    |
    | This option controls the global styles for WireUI components.
    |
     */

    'style' => [
        'shadow' => Packs\Shadow::BASE,
        'rounded' => Packs\Rounded::MD,
        'color' => Packs\Color::PRIMARY,
    ],

    /*
    |--------------------------------------------------------------------------
    | Default Configuration
    |--------------------------------------------------------------------------
    |
    | This option controls the default configuration for WireUI components.
    |
     */

    'alert' => Config::alert(),

    'avatar' => Config::avatar(),

    'badge' => Config::badge(),

    'mini-badge' => Config::miniBadge(),

    'button' => Config::button(),

    'mini-button' => Config::miniButton(),

    'card' => Config::card(),

    'checkbox' => Config::checkbox(),

    'color-picker' => Config::wrapper(),

    'datetime-picker' => Config::dateTimePicker(),

    'dialog' => Config::dialog(),

    'dropdown' => Config::dropdown(),

    'icon' => Config::icon(),

    'input' => Config::wrapper(),

    'currency' => Config::wrapper(),

    'maskable' => Config::wrapper(),

    'number' => Config::wrapper(),

    'password' => Config::wrapper(),

    'phone' => Config::wrapper(),

    'link' => Config::link(),

    'modal' => Config::modal(),

    'modal-card' => Config::modal(),

    'native-select' => Config::wrapper(),

    'notifications' => Config::notifications(),

    'radio' => Config::radio(),

    'select' => Config::wrapper(),

    'textarea' => Config::wrapper(),

    'time-picker' => Config::timePicker(),

    'time-selector' => Config::timeSelector(),

    'toggle' => Config::toggle(),

    /*
    |--------------------------------------------------------------------------
    | WireUI Components
    |--------------------------------------------------------------------------
    |
    | Change the alias to call the component with a different name.
    | Extend the component and replace your changes in this file.
    |
     */

    'components' => Config::defaultComponents([

        'alert' => [
                'class' => Alert\Index::class,
                'alias' => 'alert',
            ],
            'avatar' => [
                'class' => Avatar\Index::class,
                'alias' => 'avatar',
            ],
            'badge' => [
                'class' => Badge\Base::class,
                'alias' => 'badge',
            ],
            'mini-badge' => [
                'class' => Badge\Mini::class,
                'alias' => 'mini-badge',
            ],
            'button' => [
                'class' => Button\Base::class,
                'alias' => 'button',
            ],
            'mini-button' => [
                'class' => Button\Mini::class,
                'alias' => 'mini-button',
            ],
            'card' => [
                'class' => Card\Index::class,
                'alias' => 'card',
            ],
            'checkbox' => [
                'class' => Switcher\Checkbox::class,
                'alias' => 'checkbox',
            ],
            'color-picker' => [
                'class' => ColorPicker\Picker::class,
                'alias' => 'color-picker',
            ],
            'datetime-picker' => [
                'class' => DatetimePicker\Picker::class,
                'alias' => 'datetime-picker',
            ],
            'description' => [
                'class' => Label\Description::class,
                'alias' => 'description',
            ],
            'dialog' => [
                'class' => Dialog\Index::class,
                'alias' => 'dialog',
            ],
            'dropdown' => [
                'class' => Dropdown\Base::class,
                'alias' => 'dropdown',
            ],
            'dropdown.item' => [
                'class' => Dropdown\Item::class,
                'alias' => 'dropdown.item',
            ],
            'dropdown.header' => [
                'class' => Dropdown\Header::class,
                'alias' => 'dropdown.header',
            ],
            'error' => [
                'class' => Errors\Single::class,
                'alias' => 'error',
            ],
            'errors' => [
                'class' => Errors\Multiple::class,
                'alias' => 'errors',
            ],
            'icon' => [
                'class' => Icon\Index::class,
                'alias' => 'icon',
            ],
            'input' => [
                'class' => TextField\Input::class,
                'alias' => 'input',
            ],
            'currency' => [
                'class' => TextField\Currency::class,
                'alias' => 'currency',
            ],
            'maskable' => [
                'class' => TextField\Maskable::class,
                'alias' => 'maskable',
            ],
            'number' => [
                'class' => TextField\Number::class,
                'alias' => 'number',
            ],
            'password' => [
                'class' => TextField\Password::class,
                'alias' => 'password',
            ],
            'phone' => [
                'class' => TextField\Phone::class,
                'alias' => 'phone',
            ],
            'label' => [
                'class' => Label\Base::class,
                'alias' => 'label',
            ],
            'link' => [
                'class' => Link\Index::class,
                'alias' => 'link',
            ],
            'modal' => [
                'class' => Modal\Index::class,
                'alias' => 'modal',
            ],
            'modal-card' => [
                'class' => Modal\Card::class,
                'alias' => 'modal-card',
            ],
            'native-select' => [
                'class' => Select\Native::class,
                'alias' => 'native-select',
            ],
            'notifications' => [
                'class' => Notifications\Index::class,
                'alias' => 'notifications',
            ],
            'radio' => [
                'class' => Switcher\Radio::class,
                'alias' => 'radio',
            ],
            'select' => [
                'class' => Select\Base::class,
                'alias' => 'select',
            ],
            'select.option' => [
                'class' => Select\Option::class,
                'alias' => 'select.option',
            ],
            'select.user-option' => [
                'class' => Select\UserOption::class,
                'alias' => 'select.user-option',
            ],
            'textarea' => [
                'class' => TextField\Textarea::class,
                'alias' => 'textarea',
            ],
            'time-picker' => [
                'class' => TimePicker\Picker::class,
                'alias' => 'time-picker',
            ],
            'time-selector' => [
                'class' => TimePicker\Selector::class,
                'alias' => 'time-selector',
            ],
            'toggle' => [
                'class' => Switcher\Toggle::class,
                'alias' => 'toggle',
            ],
            /**
             * Popovers
             */
            'popover' => [
                'class' => Popover\Index::class,
                'alias' => 'popover',
            ],
            /**
             * Wrappers
             */
            'switcher' => [
                'class' => Wrapper\Switcher::class,
                'alias' => 'switcher',
            ],
            'text-field' => [
                'class' => Wrapper\TextField::class,
                'alias' => 'text-field',
            ],

    ]),
];
