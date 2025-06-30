<!--aside open-->
<?php
$admin = Auth::guard('admin')->user();

?>
<aside class="app-sidebar comb-sidebar">

    <?php
    $sidebar = [
        [
            'menu' => 'Dashboard',
            'route' => 'admin.dashboard',
            'fa_icon' => 'fe fe-monitor',
            'sub_menu' => [],
        ],
        [
            'menu' => 'Students',
            'route' => '',
            'fa_icon' => 'fa-solid fa-users',
            'sub_menu' => [['menu' => 'List', 'route' => 'admin.students'], ['menu' => 'Add', 'route' => 'admin.add.students.form']],
        ],
        [
            'menu' => 'User Management',
            'route' => '',
            'fa_icon' => 'fa-solid fa-user',
            'sub_menu' => [['menu' => 'Employee', 'route' => 'admin.register.form'], ['menu' => 'Role', 'route' => 'admin.roles'], ['menu' => 'Permission', 'route' => 'admin.permission.form'], ['menu' => 'Assign Permission', 'route' => 'admin.role.permissions.form']],
        ],
    ];
    
    ?>
    <ul class="side-menu">
        @foreach ($sidebar as $SB)
            <li class="slide">
                <a class="side-menu__item"
                    @if (!empty($SB['route'])) href="{{ route($SB['route']) }}"
                @else
                    data-toggle="slide" href="#" @endif>
                    <i class="side-menu__icon {{ $SB['fa_icon'] }}"></i>
                    <span class="side-menu__label">{{ $SB['menu'] }}</span>

                    @if (!empty($SB['sub_menu']) && count($SB['sub_menu']) > 0)
                        <i class="angle fa fa-angle-right"></i>
                    @endif
                </a>

                @if (!empty($SB['sub_menu']) && count($SB['sub_menu']) > 0)
                    <ul class="slide-menu">
                        @foreach ($SB['sub_menu'] as $submenu)
                            <li>
                                <a class="slide-item"
                                    @if (!empty($submenu['route'])) href="{{ route($submenu['route']) }}" @endif>
                                    <span>{{ $submenu['menu'] }}</span>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                @endif
            </li>
        @endforeach
    </ul>
</aside>
<!--aside closed-->
